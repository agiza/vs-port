<?php

/* _iframeBuster.twig */
class __TwigTemplate_34ca8399cb03427dc568fdde3edbff2ee7ec54adeaef77c6c43fa25f1c3436b5 extends Twig_Template
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
        if ((array_key_exists("enableFrames", $context) && ($this->getContext($context, "enableFrames") == false))) {
            // line 2
            echo "    <script type=\"text/javascript\">
        \$(function () {
        \$('body').css(\"display\", \"none\");
        if (self == top) {
            var theBody = document.getElementsByTagName('body')[0];
            theBody.style.display = 'block';
        } else { top.location = self.location; }
    });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "_iframeBuster.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 31,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 9,  46 => 8,  31 => 5,  27 => 4,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 27,  106 => 16,  100 => 25,  87 => 9,  81 => 20,  74 => 48,  72 => 47,  68 => 45,  66 => 43,  60 => 40,  55 => 10,  53 => 34,  50 => 33,  41 => 29,  38 => 28,  36 => 27,  32 => 25,  30 => 6,  22 => 1,  56 => 12,  54 => 11,  51 => 10,  47 => 32,  45 => 31,  42 => 6,  40 => 7,  37 => 6,  34 => 3,  29 => 2,);
    }
}
