<?php
/**
 * @file xmlsitemap_elements.inc
 *  Interfaces and classes to handle writing individual XMLSitemap element entries.
 */

/**
 * Base interface for classes that can be used to write XMLSitemap
 *  links to a document. 
 *  
 *  Note: It is more likely that someone will want
 *  to use the default base class, but all uses of this class should
 *  refer to the interface in case the implementation needs to be 
 *  drastically different from what the default base class provides. 
 */
interface IXMLSitemapElement {
  
  /**
   * Returns whether or not this element has any content.
   */
  function hasEntries();
  
  /**
   * Converts raw data that you would get from a database query
   *  into data that can be rendered by $this->writeElement()
   * 
   * @param $raw
   *  A database dump of the data.
   */
  function formatData($raw);
  
  /**
   * Writes the full data set of XML data to an XMLWriter object.
   *  This should include any extensions or included data if relevant.
   * 
   * @param XMLWriter $writer
   *  XMLWriter object that connects to the output destination.
   */
  function writeElement(XMLWriter $writer);
}

/**
 * Base interface for classes that can be used to write XMLSitemap
 *  extended data. The note above also applies here.
 */
interface IXMLSitemapExtensionElement extends IXMLSitemapElement {
  
  /**
   * The extension class is responsible of retrieving its required data
   *  base solely on the XMLSitemap link being rendered.
   *  
   * @param $link
   *  A full XMLSitemap link data in array form.
   */
  function fetchExtensionData($link);
}

/**
 * The default base class for rendering a single sitemap element.
 * - This class takes over the duty of formatting the sitemap link
 * - Allowing attachement of extension data
 * - Rendering a the link to XML including extension data attached.
 */
class XMLSitemapElement implements IXMLSitemapElement  {
  protected $link;
  protected $options;
  
  protected $entry;
  protected $extensions;
  
  /**
   * Create a new XMLSitemap element representing a link.
   * 
   * @param $link
   *  The XMLSitemap link to render.
   * @param $options
   *  Array of link formatting options to use.
   */
  function __construct($link, $options) {
    if (!empty($link)) {
      $this->link = $link;
      $this->options = $options;
      $this->entry = $this->formatData($link);
      $this->extensions = array();
    }
  }
  
  /**
   * (non-PHPdoc)
   * @see IXMLSitemapElement::hasEntries()
   */
  function hasEntries() {
    return !empty($this->entry);
  }
  
  /**
   * (non-PHPdoc)
   * @see IXMLSitemapElement::formatData()
   */
  function formatData($link) {
    static $last_url;
    static $lastmod_format;

    if (!isset($lastmod_format)) {
      $lastmod_format = variable_get('xmlsitemap_lastmod_format', XMLSITEMAP_LASTMOD_MEDIUM);
    }
    
    $link['language'] = $link['language'] != LANGUAGE_NONE ? xmlsitemap_language_load($link['language']) : $this->options['language'];
    if ($this->options['alias']) {
      $link['loc'] = xmlsitemap_get_path_alias($link['loc'], $link['language']->language);
    }
    
    $link_options = array(
      'language' => $link['language'],
      'xmlsitemap_link' => $link,
      'xmlsitemap_sitemap' => isset($sitemap) ? $sitemap : NULL,
    );
    // @todo Add a separate hook_xmlsitemap_link_url_alter() here?
    $link_url = url($link['loc'], $link_options + $this->options);
    
    // Skip this link if it was a duplicate of the last one.
    // @todo Figure out a way to do this before generation so we can report
    // back to the user about this.
    if ($link_url == $last_url) {
      return;
    }
    $last_url = $link_url;
    
    $element = array();
    $element['loc'] = $link_url;
    if ($link['lastmod']) {
      $element['lastmod'] = gmdate($lastmod_format, $link['lastmod']);
      // If the link has a lastmod value, update the changefreq so that links
      // with a short changefreq but updated two years ago show decay.
      // We use abs() here just incase items were created on this same cron run
      // because lastmod would be greater than REQUEST_TIME.
      $link['changefreq'] = (abs(REQUEST_TIME - $link['lastmod']) + $link['changefreq']) / 2;
    }
    if ($link['changefreq']) {
      $element['changefreq'] = xmlsitemap_get_changefreq($link['changefreq']);
    }
    if (isset($link['priority']) && $link['priority'] != 0.5) {
      // Don't output the priority value for links that have 0.5 priority. This
      // is the default 'assumed' value if priority is not included as per the
      // sitemaps.org specification.
      $element['priority'] = number_format($link['priority'], 1);
    }
    return $element;
  }
  
  /**
   * (non-PHPdoc)
   * @see IXMLSitemapElement::writeElement()
   */
  function writeElement(XMLWriter $writer) {
    // write itself first
    foreach ($this->entry as $name => $content) {
      $this->writeInnerElement($name, $content, $writer);
    }
    
    // then write extension data.
    foreach ($this->extensions as $extension) {
      $extension->writeElement($writer);
    }
  }
  
  /**
   * Internal function for writing XML elements.
   * 
   * @param $name
   *  Of the XML element to write (tag name).
   * @param $content
   *  Either an array of sub-elements to write or a string of text
   *  content to write out to the document.  
   * @param $writer
   *  The document writer to use for writing out the element data.
   */
  protected function writeInnerElement($name, $content, XMLWriter $writer) {
    $writer->startElement($name);
 
    if (is_array($content)) {
      foreach ($content as $sub_name => $sub_content) {
        $this->writeInnerElement($sub_name, $sub_content);
      }
    }
    else {
      $writer->text($content);
    }
    $writer->endElement();
    $writer->writeRaw(PHP_EOL);
  }
  
  /**
   * Creates and instance of valid extension classes and populates
   *  them with data, for preparation to write the results out.
   * 
   * @param $extension
   *  Name of the extension class to try including with this link.
   */
  function addExtensionData($extension) {
  	static $reflect;

  	if (!isset($refect)) {
  		$reflect = array();
  	}

    // Determine if this extension name has already been checked. 
  	if (!isset($reflect[$extension]) && is_string($extension)) {
      $ext = new ReflectionClass($extension);
      $reflect[$extension] = $ext->implementsInterface('IXMLSitemapExtensionElement') ? $ext : NULL;
  	}

  	// If extension is available, create and attempt to add it if there is relevant data.
  	if (!empty($reflect[$extension])) {  		
  		$extender = $reflect[$extension]->newInstance($this->link);
      if ($extender->hasEntries()) {
        $this->extensions[] = $extender;
      }
  	}
  }
}

/**
 * Default base class for XMLSitemap extension elements.
 *  These are used to add data to the sitemap outside of the core
 *  protocol.
 */
abstract class XMLSitemapExtensionElement implements IXMLSitemapExtensionElement {
  protected $link;    // XML Sitemap link to generate
  protected $entries; // Data retrieved for associated videos
  
  // abstract functions handle extension specific items.
  abstract function getNS();        // The namespace used by this extension
  abstract function getWrapper();   // The wrapper element name for this extension.
  
  function __construct($link) {
    $this->entries = array();
    if (!empty($link)) {
      $this->link = $link;
      $this->fetchExtensionData($link);
    }
  }
  
  /**
   * (non-PHPdoc)
   * @see IXMLSitemapElement::hasEntries()
   */
  function hasEntries() {
    return !empty($this->entries);
  }
  
  /**
   * (non-PHPdoc)
   * @see IXMLSitemapElement::writeElement()
   */
  function writeElement(XMLWriter $writer) {
    if (empty($this->entries)) {
      return;
    }
    
    foreach ($this->entries as $elements) {
      $writer->startElementNs($this->getNS(), $this->getWrapper(), NULL);
      $writer->writeRaw(PHP_EOL);
      foreach ($elements as $name => $element) {
        $this->writeInnerElement($name, $element, $writer);
      }
      $writer->endElement();
      $writer->writeRaw(PHP_EOL);
    }
  }
  
  /**
   * Writes internal elements within the extension element
   *  I.E. all the elements between <video:video> and </video:video>.
   *  It is a little bit different from the XMLSitemapElement version
   *  because it expects element data (text/children) to be array form
   *  so that attributes can be added to the tag.
   * 
   * @param $name
   *  Name of the XML tag.
   * @param $element
   *  The element attributes and content.
   * @param XMLWriter $writer
   *  XMLWriter to output the XML to.
   */
  protected function writeInnerElement($name, $element, XMLWriter $writer) {
    $writer->startElementNs($this->getNS(), $name, NULL);
  
    // Write additional attributes if required.
    if (!empty($element['#attributes'])) {
      foreach ($element['#attributes'] as $attr_name => $attr_value) {
        $writer->writeAttribute($attr_name, $attr_value);
      }
    }
  
    if (is_array($element['#data'])) {
      foreach ($element['#data'] as $key => $child) {
        $this->writeInnerElement($key, $child, $writer);
      }
    }
    elseif (!empty($element['#data']) && is_string($element['#data'])) {
      $writer->text($element['#data']);
    }
    $writer->endElement();
    $writer->writeRaw(PHP_EOL);
  }
}