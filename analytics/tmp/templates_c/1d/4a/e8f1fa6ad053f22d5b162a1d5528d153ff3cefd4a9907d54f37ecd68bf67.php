<?php

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_1d4ae8f1fa6ad053f22d5b162a1d5528d153ff3cefd4a9907d54f37ecd68bf67 extends Twig_Template
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
        echo "<div class=\"top_bar_sites_selector ";
        if (($this->getContext($context, "currentModule") == "CoreHome")) {
            echo "sites_selector_in_dashboard";
        }
        echo "\">
    <label>";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Website")), "html", null, true);
        echo "</label>
    ";
        // line 3
        $this->env->loadTemplate("@CoreHome/_siteSelect.twig")->display($context);
        // line 4
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  26 => 2,  90 => 24,  82 => 22,  69 => 18,  52 => 12,  39 => 8,  63 => 9,  59 => 8,  33 => 6,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 31,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 11,  46 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 27,  106 => 16,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 13,  60 => 12,  55 => 10,  53 => 34,  50 => 9,  41 => 8,  38 => 28,  36 => 27,  32 => 4,  30 => 3,  22 => 2,  56 => 12,  54 => 13,  51 => 10,  47 => 10,  45 => 31,  42 => 9,  40 => 7,  37 => 6,  34 => 3,  29 => 4,);
    }
}
