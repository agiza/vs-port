<?php

/* _jsGlobalVariables.twig */
class __TwigTemplate_3af3673089cd5220bf21eca44c36fa226eb88151e6d1939385e1bb59f08eb5ed extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    var piwik = {};
    piwik.token_auth = \"";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "token_auth"), "html", null, true);
        echo "\";
    piwik.piwik_url = \"";
        // line 4
        echo twig_escape_filter($this->env, $this->getContext($context, "piwikUrl"), "html", null, true);
        echo "\";
    ";
        // line 5
        if ($this->getContext($context, "userLogin")) {
            echo "piwik.userLogin = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "userLogin"), "js"), "html", null, true);
            echo "\";";
        }
        // line 6
        echo "
    ";
        // line 7
        if (array_key_exists("idSite", $context)) {
            echo "piwik.idSite = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "idSite"), "html", null, true);
            echo "\";";
        }
        // line 8
        echo "
    ";
        // line 9
        if (array_key_exists("siteName", $context)) {
            echo "piwik.siteName = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "siteName"), "js"), "html", null, true);
            echo "\";";
        }
        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("siteMainUrl", $context)) {
            echo "piwik.siteMainUrl = \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getContext($context, "siteMainUrl"), "js"), "html", null, true);
            echo "\";";
        }
        // line 12
        echo "
    ";
        // line 13
        if (array_key_exists("period", $context)) {
            echo "piwik.period = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "period"), "html", null, true);
            echo "\";";
        }
        // line 14
        echo "
";
        // line 19
        echo "    piwik.currentDateString = \"";
        echo twig_escape_filter($this->env, ((array_key_exists("date", $context)) ? (_twig_default_filter($this->getContext($context, "date"), ((array_key_exists("endDate", $context)) ? (_twig_default_filter($this->getContext($context, "endDate"), "")) : ("")))) : (((array_key_exists("endDate", $context)) ? (_twig_default_filter($this->getContext($context, "endDate"), "")) : ("")))), "html", null, true);
        echo "\";
";
        // line 20
        if (array_key_exists("startDate", $context)) {
            // line 21
            echo "    piwik.startDateString = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "startDate"), "html", null, true);
            echo "\";
    piwik.endDateString = \"";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "endDate"), "html", null, true);
            echo "\";
    piwik.minDateYear = ";
            // line 23
            echo twig_escape_filter($this->env, $this->getContext($context, "minDateYear"), "html", null, true);
            echo ";
    piwik.minDateMonth = parseInt(\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getContext($context, "minDateMonth"), "html", null, true);
            echo "\", 10);
    piwik.minDateDay = parseInt(\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getContext($context, "minDateDay"), "html", null, true);
            echo "\", 10);
    piwik.maxDateYear = ";
            // line 26
            echo twig_escape_filter($this->env, $this->getContext($context, "maxDateYear"), "html", null, true);
            echo ";
    piwik.maxDateMonth = parseInt(\"";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "maxDateMonth"), "html", null, true);
            echo "\", 10);
    piwik.maxDateDay = parseInt(\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getContext($context, "maxDateDay"), "html", null, true);
            echo "\", 10);
";
        }
        // line 30
        echo "    ";
        if (array_key_exists("language", $context)) {
            echo "piwik.language = \"";
            echo twig_escape_filter($this->env, $this->getContext($context, "language"), "html", null, true);
            echo "\";";
        }
        // line 31
        echo "
";
        // line 32
        if (array_key_exists("config_action_url_category_delimiter", $context)) {
            // line 33
            echo "    piwik.config = {};
    piwik.config.action_url_category_delimiter = \"";
            // line 34
            echo twig_escape_filter($this->env, $this->getContext($context, "config_action_url_category_delimiter"), "html", null, true);
            echo "\";
";
        }
        // line 36
        echo "    ";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), array("Template.jsGlobalVariables"));
        echo "
</script>
";
    }

    public function getTemplateName()
    {
        return "_jsGlobalVariables.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 36,  129 => 33,  127 => 32,  124 => 31,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 9,  46 => 8,  31 => 5,  27 => 4,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 27,  106 => 16,  100 => 25,  87 => 9,  81 => 20,  74 => 48,  72 => 47,  68 => 45,  66 => 43,  60 => 40,  55 => 10,  53 => 34,  50 => 33,  41 => 29,  38 => 28,  36 => 27,  32 => 25,  30 => 7,  22 => 1,  56 => 12,  54 => 11,  51 => 10,  47 => 32,  45 => 31,  42 => 6,  40 => 7,  37 => 6,  34 => 3,  29 => 2,);
    }
}
