<?php

/* @CoreHome/_warningInvalidHost.twig */
class __TwigTemplate_e31e2465a2349738de07727308938a9e27425253c2b450531e729912f0f58e9f extends Twig_Template
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
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ($this->getContext($context, "isValidHost") == false))) {
            // line 3
            echo "    ";
            ob_start();
            // line 4
            echo "        <a style=\"float:right;\" href=\"http://piwik.org/faq/troubleshooting/#faq_171\" target=\"_blank\"><img src=\"plugins/Zeitgeist/images/help.png\"/></a>
        <strong>";
            // line 5
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Warning")), "html", null, true);
            echo ":&nbsp;</strong>";
            echo $this->getContext($context, "invalidHostMessage");
            echo "

        <br>
        <br>

        <small>";
            // line 10
            echo $this->getContext($context, "invalidHostMessageHowToFix");
            echo "
        <br/><br/><a style=\"float:right;\" href=\"http://piwik.org/faq/troubleshooting/#faq_171\" target=\"_blank\">";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Help")), "html", null, true);
            echo "
        <img style=\"vertical-align: bottom;\" src=\"plugins/Zeitgeist/images/help.png\"/></a><br/>
        </small>
    ";
            $context["invalidHostText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 15
            echo "
    <div style=\"clear:both;width:800px;\">
        ";
            // line 17
            echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getContext($context, "invalidHostText"), array("noclear" => true, "raw" => true, "context" => "warning")));
            echo "
    </div>

";
        }
        // line 21
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_warningInvalidHost.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 21,  52 => 17,  48 => 15,  41 => 11,  27 => 5,  24 => 4,  21 => 3,  361 => 164,  355 => 161,  352 => 160,  346 => 157,  343 => 156,  341 => 155,  334 => 153,  329 => 151,  322 => 149,  314 => 144,  308 => 141,  297 => 133,  290 => 129,  283 => 125,  279 => 124,  268 => 116,  264 => 115,  258 => 114,  250 => 109,  246 => 108,  240 => 105,  233 => 101,  229 => 100,  226 => 99,  220 => 97,  218 => 96,  215 => 95,  207 => 92,  204 => 91,  202 => 90,  199 => 89,  195 => 87,  184 => 85,  180 => 84,  177 => 83,  175 => 82,  172 => 81,  169 => 80,  166 => 79,  163 => 78,  157 => 73,  148 => 69,  144 => 67,  142 => 66,  139 => 65,  136 => 64,  130 => 62,  127 => 61,  125 => 60,  122 => 59,  118 => 58,  111 => 57,  102 => 54,  99 => 53,  93 => 51,  91 => 50,  84 => 45,  82 => 44,  77 => 41,  73 => 39,  71 => 38,  45 => 15,  42 => 14,  37 => 10,  28 => 8,  19 => 2,);
    }
}
