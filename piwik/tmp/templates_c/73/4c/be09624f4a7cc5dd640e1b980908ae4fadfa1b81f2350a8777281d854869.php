<?php

/* @Dashboard/_header.twig */
class __TwigTemplate_734cbe09624f4a7cc5dd640e1b980908ae4fadfa1b81f2350a8777281d854869 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Dashboard_Dashboard")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_WebAnalyticsReports")), "html", null, true);
        echo "</title>

    <!--[if lt IE 9]>
        <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
    <![endif]-->

    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Dashboard/stylesheets/standalone.css\" />
";
        // line 13
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 14
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 15
        echo "</head>
<body id=\"standalone\">
";
    }

    public function getTemplateName()
    {
        return "@Dashboard/_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  39 => 14,  37 => 13,  25 => 6,  71 => 19,  69 => 18,  65 => 17,  63 => 16,  58 => 13,  47 => 10,  42 => 9,  38 => 8,  34 => 6,  31 => 5,  26 => 4,  24 => 3,  21 => 2,  19 => 2,);
    }
}
