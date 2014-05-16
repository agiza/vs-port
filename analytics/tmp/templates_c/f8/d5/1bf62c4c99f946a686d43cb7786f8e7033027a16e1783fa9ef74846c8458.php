<?php

/* @CoreHome/_indexContent.twig */
class __TwigTemplate_f8d51bf62c4c99f946a686d43cb7786f8e7033027a16e1783fa9ef74846c8458 extends Twig_Template
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
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 2
        echo "<div class=\"pageWrap\">
    ";
        // line 3
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 4
        echo "    <div class=\"top_controls\">
        ";
        // line 5
        $this->env->loadTemplate("@CoreHome/_periodSelect.twig")->display($context);
        // line 6
        echo "        ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.nextToCalendar"));
        echo "
        ";
        // line 7
        $template = $this->env->resolveTemplate($context["dashboardSettingsControl"]->getTemplateFile());
        $template->display(array_merge($context, $context["dashboardSettingsControl"]->getTemplateVars()));
        // line 8
        echo "        ";
        $this->env->loadTemplate("@CoreHome/_headerMessage.twig")->display($context);
        // line 9
        echo "        ";
        echo $context["ajax"]->getrequestErrorDiv();
        echo "
    </div>

    ";
        // line 12
        echo $context["ajax"]->getloadingDiv();
        echo "

    <div id=\"content\" class=\"home\">
        ";
        // line 15
        if ($this->getContext($context, "content")) {
            echo twig_escape_filter($this->env, $this->getContext($context, "content"), "html", null, true);
        }
        // line 16
        echo "    </div>
    <div class=\"clear\"></div>
</div>

<br/><br/>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_indexContent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 21,  48 => 10,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 29,  44 => 24,  21 => 2,  35 => 6,  26 => 4,  90 => 37,  82 => 22,  69 => 18,  52 => 12,  39 => 8,  63 => 17,  59 => 16,  33 => 6,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 38,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 12,  46 => 8,  31 => 6,  27 => 4,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 13,  60 => 12,  55 => 15,  53 => 34,  50 => 9,  41 => 8,  38 => 22,  36 => 7,  32 => 5,  30 => 19,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 9,  40 => 7,  37 => 6,  34 => 3,  29 => 5,);
    }
}
