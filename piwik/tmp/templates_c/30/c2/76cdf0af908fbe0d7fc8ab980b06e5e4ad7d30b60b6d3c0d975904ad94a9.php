<?php

/* admin.twig */
class __TwigTemplate_30c276cdf0af908fbe0d7fc8ab980b06e5e4ad7d30b60b6d3c0d975904ad94a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        // line 20
        echo "    </head>
    <body>
    ";
        // line 22
        $context["isAdminLayout"] = true;
        // line 23
        echo "    ";
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 24
        echo "    ";
        $this->env->loadTemplate("@CoreHome/_javaScriptDisabled.twig")->display($context);
        // line 25
        echo "
        <div id=\"root\">
            ";
        // line 27
        $this->env->loadTemplate("@CoreHome/_topScreen.twig")->display($context);
        // line 28
        echo "
            ";
        // line 29
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 30
        echo "            ";
        echo $context["ajax"]->getrequestErrorDiv();
        echo "
            <div id=\"container\">

                ";
        // line 33
        if (((!array_key_exists("showMenu", $context)) || $this->getContext($context, "showMenu"))) {
            // line 34
            echo "                    ";
            $this->env->loadTemplate("@CoreAdminHome/_menu.twig")->display($context);
            // line 35
            echo "                ";
        }
        // line 36
        echo "
                <div id=\"content\" class=\"admin\">

                    ";
        // line 39
        $this->env->loadTemplate("@CoreHome/_headerMessage.twig")->display($context);
        // line 40
        echo "                    ";
        $this->env->loadTemplate("@CoreHome/_notifications.twig")->display($context);
        // line 41
        echo "
                    <div class=\"ui-confirm\" id=\"alert\">
                        <h2></h2>
                        <input role=\"no\" type=\"button\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
        echo "\"/>
                    </div>

                    ";
        // line 47
        $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
        // line 48
        echo "
                    ";
        // line 49
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "
                </div>
            </div>
            ";
        // line 54
        $this->env->loadTemplate("_piwikTag.twig")->display($context);
        // line 55
        echo "        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_head($context, array $blocks = array())
    {
        // line 8
        echo "            <meta charset=\"utf-8\">
            <title>";
        // line 9
        if ((!$this->getContext($context, "isCustomLogo"))) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_Administration")), "html", null, true);
        echo "</title>
            <meta name=\"generator\" content=\"Piwik - Open Source Web Analytics\"/>
            <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>

";
        // line 13
        $this->env->loadTemplate("_jsGlobalVariables.twig")->display($context);
        // line 14
        $this->env->loadTemplate("_jsCssIncludes.twig")->display($context);
        // line 15
        echo "
            <!--[if IE]>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/ieonly.css\"/>
            <![endif]-->
        ";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "admin.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 50,  139 => 49,  131 => 15,  127 => 13,  114 => 8,  104 => 55,  102 => 54,  97 => 51,  95 => 49,  92 => 48,  90 => 47,  84 => 44,  79 => 41,  76 => 40,  74 => 39,  69 => 36,  66 => 35,  63 => 34,  54 => 30,  52 => 29,  49 => 28,  47 => 27,  43 => 25,  37 => 23,  35 => 22,  29 => 7,  21 => 1,  489 => 163,  482 => 158,  463 => 155,  451 => 153,  434 => 152,  428 => 149,  422 => 145,  418 => 143,  403 => 141,  399 => 140,  396 => 139,  394 => 138,  390 => 137,  384 => 136,  378 => 135,  373 => 133,  367 => 132,  361 => 131,  357 => 130,  351 => 129,  344 => 125,  338 => 122,  334 => 121,  331 => 120,  324 => 117,  322 => 116,  317 => 115,  315 => 114,  309 => 110,  306 => 109,  298 => 108,  294 => 106,  288 => 104,  282 => 102,  280 => 101,  275 => 99,  268 => 95,  264 => 94,  260 => 93,  258 => 92,  255 => 91,  247 => 87,  244 => 86,  240 => 85,  235 => 84,  233 => 83,  230 => 82,  228 => 81,  225 => 80,  218 => 76,  213 => 74,  208 => 72,  205 => 71,  203 => 70,  197 => 66,  178 => 63,  167 => 62,  150 => 61,  144 => 58,  138 => 54,  135 => 46,  132 => 45,  129 => 14,  126 => 43,  123 => 42,  121 => 41,  117 => 9,  111 => 7,  106 => 37,  100 => 36,  93 => 32,  87 => 29,  83 => 28,  77 => 25,  73 => 24,  65 => 19,  61 => 33,  56 => 16,  48 => 11,  44 => 10,  40 => 24,  31 => 20,  28 => 3,);
    }
}
