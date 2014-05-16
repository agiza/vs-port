<?php

/* @CoreHome/_topScreen.twig */
class __TwigTemplate_d576f59257d459f36291d3301e97c0df484d5b5d7e71cf3f6b6dee9a85372799 extends Twig_Template
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
        echo "<div id=\"header\">
    ";
        // line 2
        $this->env->loadTemplate("@CoreHome/_logo.twig")->display($context);
        // line 3
        echo "    ";
        $this->env->loadTemplate("@CoreHome/_topBar.twig")->display($context);
        // line 4
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topScreen.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 31,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 9,  46 => 8,  31 => 5,  27 => 4,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 27,  106 => 16,  100 => 25,  87 => 9,  81 => 20,  74 => 48,  72 => 47,  68 => 45,  66 => 43,  60 => 40,  55 => 10,  53 => 34,  50 => 33,  41 => 29,  38 => 28,  36 => 27,  32 => 25,  30 => 6,  22 => 2,  56 => 12,  54 => 11,  51 => 10,  47 => 32,  45 => 31,  42 => 6,  40 => 7,  37 => 6,  34 => 3,  29 => 2,);
    }
}
