<?php

/* @CoreVisualizations/_dataTableViz_tagCloud.twig */
class __TwigTemplate_0ba7e21986356ceabc6fdc00d5e598b4902be78e53ff8378189bfd28bfefd9b9 extends Twig_Template
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
        // line 1
        $context["cloudColumn"] = $this->getAttribute($this->getAttribute($this->getContext($context, "properties"), "columns_to_display"), 1, array(), "array");
        // line 2
        echo "<div class=\"tagCloud\">
";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "cloudValues"));
        foreach ($context['_seq'] as $context["word"] => $context["value"]) {
            // line 4
            echo "    <span title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "word"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "value"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getContext($context, "properties", true), "translations", array(), "any", false, true), $this->getContext($context, "cloudColumn"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "properties", true), "translations", array(), "any", false, true), $this->getContext($context, "cloudColumn"), array(), "array"), $this->getContext($context, "cloudColumn"))) : ($this->getContext($context, "cloudColumn"))), "html", null, true);
            echo ")\" class=\"word size";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "size"), "html", null, true);
            echo "
    ";
            // line 6
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "value"), "value") == 0)) {
                echo "valueIsZero";
            }
            echo "\">
    ";
            // line 7
            if ((!($this->getAttribute($this->getAttribute($this->getContext($context, "labelMetadata"), $this->getAttribute($this->getContext($context, "value"), "word"), array(), "array"), "url") === false))) {
                // line 8
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "labelMetadata"), $this->getAttribute($this->getContext($context, "value"), "word"), array(), "array"), "url"), "html", null, true);
                echo "\" target=\"_blank\">
    ";
            }
            // line 10
            echo "    ";
            if ((!($this->getAttribute($this->getAttribute($this->getContext($context, "labelMetadata"), $this->getAttribute($this->getContext($context, "value"), "word"), array(), "array"), "logo") === false))) {
                // line 11
                echo "        <img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "labelMetadata"), $this->getAttribute($this->getContext($context, "value"), "word"), array(), "array"), "logo"), "html", null, true);
                echo "\" width=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "logoWidth"), "html", null, true);
                echo "\" />
    ";
            } else {
                // line 13
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "value"), "wordTruncated"), "html", null, true);
                echo "
    ";
            }
            // line 15
            echo "    ";
            if ((!($this->getAttribute($this->getAttribute($this->getContext($context, "labelMetadata"), $this->getAttribute($this->getContext($context, "value"), "word"), array(), "array"), "url") === false))) {
                echo "</a>";
            }
            // line 16
            echo "    </span>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['word'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_tagCloud.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 16,  71 => 15,  65 => 13,  54 => 10,  48 => 8,  46 => 7,  39 => 6,  24 => 3,  139 => 37,  136 => 36,  133 => 35,  130 => 34,  127 => 33,  125 => 32,  122 => 31,  119 => 30,  115 => 29,  111 => 27,  105 => 25,  99 => 23,  97 => 22,  94 => 21,  91 => 20,  85 => 18,  83 => 18,  79 => 15,  72 => 14,  66 => 13,  57 => 11,  49 => 10,  45 => 9,  41 => 8,  30 => 7,  28 => 4,  26 => 5,  21 => 2,  19 => 1,);
    }
}
