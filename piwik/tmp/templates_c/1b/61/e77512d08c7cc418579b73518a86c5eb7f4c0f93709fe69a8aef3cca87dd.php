<?php

/* @Dashboard/_dashboardSettings.twig */
class __TwigTemplate_1b61e77512d08c7cc418579b73518a86c5eb7f4c0f93709fe69a8aef3cca87dd extends Twig_Template
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
        echo "<span>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_WidgetsAndDashboard")), "html", null, true);
        echo "</span>
<ul class=\"submenu\">
    <li>
        <div class=\"addWidget\">";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_AddAWidget")), "html", null, true);
        echo " &darr;</div>
        <ul class=\"widgetpreview-categorylist\"></ul>
    </li>
    ";
        // line 7
        if ((twig_length_filter($this->env, $this->getContext($context, "dashboardActions")) > 0)) {
            // line 8
            echo "    <li>
        <div class=\"manageDashboard\">";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_ManageDashboard")), "html", null, true);
            echo " &darr;</div>
        <ul>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "dashboardActions"));
            foreach ($context['_seq'] as $context["action"] => $context["title"]) {
                // line 12
                echo "            <li data-action=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "title"))), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ul>
    </li>
    ";
        }
        // line 17
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "generalActions"));
        foreach ($context['_seq'] as $context["action"] => $context["title"]) {
            // line 18
            echo "    <li data-action=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "action"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "title"))), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['title'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</ul>
<ul class=\"widgetpreview-widgetlist\"></ul>
<div class=\"widgetpreview-preview\"></div>";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_dashboardSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  97 => 33,  95 => 32,  91 => 31,  57 => 14,  101 => 17,  77 => 27,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 17,  44 => 9,  35 => 6,  26 => 4,  90 => 37,  82 => 22,  69 => 8,  39 => 8,  63 => 6,  33 => 6,  59 => 16,  52 => 5,  48 => 17,  21 => 2,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 36,  96 => 24,  92 => 16,  88 => 30,  83 => 21,  76 => 19,  73 => 14,  67 => 18,  64 => 12,  58 => 11,  49 => 12,  46 => 12,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 26,  60 => 12,  55 => 15,  53 => 34,  50 => 9,  41 => 8,  38 => 2,  36 => 7,  32 => 7,  30 => 19,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 11,  40 => 12,  37 => 9,  34 => 8,  29 => 4,);
    }
}
