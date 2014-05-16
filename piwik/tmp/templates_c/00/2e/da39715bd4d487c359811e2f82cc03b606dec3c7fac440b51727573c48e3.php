<?php

/* _piwikTag.twig */
class __TwigTemplate_002eda39715bd4d487c359811e2f82cc03b606dec3c7fac440b51727573c48e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        if ((($this->getContext($context, "piwikUrl") == "http://demo.piwik.org/") || $this->getContext($context, "debugTrackVisitsInsidePiwikUI"))) {
            // line 4
            echo "    <div class=\"clear\"></div>
    <!-- Piwik -->
    <script type=\"text/javascript\">
    var _paq = _paq || [];
    _paq.push(['setTrackerUrl', 'piwik.php']);
    _paq.push(['setSiteId', 1]);
    _paq.push(['setCookieDomain', '*.piwik.org']);
    // set the domain the visitor landed on, in the Custom Variable
    _paq.push([function () {
    if (!this.getCustomVariable(1)) {
        this.setCustomVariable(1, \"Domain landed\", document.domain);
    }
    }]);
    // Set the selected Piwik language in a custom var
    _paq.push(['setCustomVariable', 2, \"Demo language\", piwik.languageName]);
    _paq.push(['setDocumentTitle', document.domain + \"/\" + document.title]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);

    (function() {
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
    g.defer=true; g.async=true; g.src='js/piwik.js'; s.parentNode.insertBefore(g,s);
    })();
    </script>
    <!-- End Piwik Code -->
";
        }
    }

    public function getTemplateName()
    {
        return "_piwikTag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  120 => 49,  114 => 45,  111 => 44,  107 => 42,  84 => 26,  78 => 24,  97 => 33,  95 => 30,  91 => 31,  57 => 14,  101 => 32,  77 => 27,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 17,  44 => 9,  35 => 6,  26 => 4,  90 => 28,  82 => 22,  69 => 8,  39 => 8,  63 => 6,  33 => 6,  59 => 15,  52 => 5,  48 => 17,  21 => 3,  28 => 5,  24 => 4,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 33,  96 => 24,  92 => 16,  88 => 30,  83 => 21,  76 => 19,  73 => 14,  67 => 18,  64 => 18,  58 => 11,  49 => 12,  46 => 12,  31 => 6,  27 => 5,  23 => 4,  19 => 2,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 25,  74 => 20,  72 => 21,  68 => 45,  66 => 19,  60 => 12,  55 => 15,  53 => 13,  50 => 9,  41 => 9,  38 => 2,  36 => 7,  32 => 7,  30 => 6,  22 => 3,  56 => 13,  54 => 13,  51 => 11,  47 => 11,  45 => 9,  42 => 11,  40 => 12,  37 => 9,  34 => 8,  29 => 4,);
    }
}
