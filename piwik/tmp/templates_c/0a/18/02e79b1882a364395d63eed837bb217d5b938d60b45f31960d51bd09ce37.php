<?php

/* @CoreHome/_warningInvalidHost.twig */
class __TwigTemplate_0a1802e79b1882a364395d63eed837bb217d5b938d60b45f31960d51bd09ce37 extends Twig_Template
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
        return array (  59 => 21,  52 => 17,  48 => 15,  21 => 3,  28 => 5,  24 => 4,  137 => 36,  129 => 33,  127 => 32,  124 => 31,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 9,  46 => 8,  31 => 5,  27 => 5,  23 => 3,  19 => 2,  135 => 44,  132 => 34,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 27,  106 => 16,  100 => 25,  87 => 9,  81 => 20,  74 => 48,  72 => 47,  68 => 45,  66 => 43,  60 => 40,  55 => 10,  53 => 34,  50 => 33,  41 => 11,  38 => 28,  36 => 27,  32 => 25,  30 => 6,  22 => 2,  56 => 12,  54 => 11,  51 => 10,  47 => 32,  45 => 31,  42 => 6,  40 => 7,  37 => 10,  34 => 3,  29 => 2,);
    }
}
