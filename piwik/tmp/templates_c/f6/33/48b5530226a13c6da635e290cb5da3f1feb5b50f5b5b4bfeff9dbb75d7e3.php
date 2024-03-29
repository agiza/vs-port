<?php

/* dashboard.twig */
class __TwigTemplate_f63348b5530226a13c6da635e290cb5da3f1feb5b50f5b5b4bfeff9dbb75d7e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'notification' => array($this, 'block_notification'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 9 ]>
<html class=\"old-ie\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html><!--<![endif]-->
    <head>
        ";
        // line 7
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "    </head>
    <body>
    ";
        // line 27
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 28
        echo "    ";
        $this->env->loadTemplate("@CoreHome/_javaScriptDisabled.twig")->display($context);
        // line 29
        echo "
    <div id=\"root\">
        ";
        // line 31
        $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
        // line 32
        echo "        ";
        $this->env->loadTemplate("@CoreHome/_topScreen.twig")->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('notification', $context, $blocks);
        // line 37
        echo "
        <div class=\"ui-confirm\" id=\"alert\">
            <h2></h2>
            <input role=\"yes\" type=\"button\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
        </div>

        ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    </div>

    ";
        // line 47
        $this->env->loadTemplate("_piwikTag.twig")->display($context);
        // line 48
        echo "    
    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        echo "            
            <meta charset=\"utf-8\">
            <title>";
        // line 9
        echo $this->getContext($context, "siteName");
        echo " - ";
        if (($this->getContext($context, "isCustomLogo") == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo " ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_WebAnalyticsReports")), "html", null, true);
        echo "</title>
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EDGE,chrome=1\"/>
            <meta name=\"viewport\" content=\"initial-scale=1.0\" />
            <meta name=\"generator\" content=\"Piwik - Open Source Web Analytics\"/>
            <meta name=\"description\" content=\"Web Analytics report for '";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, "siteName"), "html_attr");
        echo "' - Piwik\"/>
            <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
            <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>
";
        // line 16
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 17
        echo "            <!--[if lt IE 9]>
            <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
            <![endif]-->
";
        // line 20
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 21
        echo "            <!--[if IE]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/ieonly.css\"/>
            <![endif]-->
        ";
    }

    // line 34
    public function block_notification($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 36
        echo "        ";
    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        // line 44
        echo "        ";
    }

    public function getTemplateName()
    {
        return "dashboard.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 44,  132 => 43,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 17,  106 => 16,  100 => 13,  87 => 9,  81 => 7,  74 => 48,  72 => 47,  68 => 45,  66 => 43,  60 => 40,  55 => 37,  53 => 34,  50 => 33,  41 => 29,  38 => 28,  36 => 27,  32 => 25,  30 => 7,  22 => 1,  56 => 12,  54 => 11,  51 => 10,  47 => 32,  45 => 31,  42 => 6,  40 => 5,  37 => 4,  34 => 3,  29 => 2,);
    }
}
