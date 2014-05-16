<?php

/* @Widgetize/iframe.twig */
class __TwigTemplate_60924952201e1ff4ce712f50f1f6d2ab9800c31bdb8105405f7561c045a371b3 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        ";
        // line 5
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 6
        echo "        <!--[if lt IE 9]>
        <script language=\"javascript\" type=\"text/javascript\" src=\"libs/jqplot/excanvas.min.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 10
        echo "        <!--[if IE]>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/ieonly.css\"/>
        <![endif]-->
    </head>
    <body>
        <div class=\"widget\">
            ";
        // line 16
        echo $this->getContext($context, "content");
        echo "
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Widgetize/iframe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 16,  34 => 10,  32 => 9,  27 => 6,  25 => 5,  19 => 1,);
    }
}
