<?php

/* @CoreHome/_topBarHelloMenu.twig */
class __TwigTemplate_0659e93f84dddeda1aa85c617fec7ab4001def010df0eb9010eba046ec311927 extends Twig_Template
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
        echo "<div id=\"topRightBar\">
    ";
        // line 2
        ob_start();
        // line 3
        echo "        ";
        if ((!twig_test_empty($this->getContext($context, "userAlias")))) {
            // line 4
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "userAlias"), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 6
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getContext($context, "userLogin"), "html", null, true);
            echo "</strong>
        ";
        }
        // line 8
        echo "    ";
        $context["helloAlias"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "    <span class=\"topBarElem\">";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_HelloUser", trim($this->getContext($context, "helloAlias"))));
        echo "</span>
    ";
        // line 10
        if (($this->getContext($context, "userLogin") != "anonymous")) {
            // line 11
            echo "        |
        ";
            // line 12
            if (array_key_exists("isAdminLayout", $context)) {
                // line 13
                echo "            <span class=\"topBarElem topBarElemActive\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                echo "</span>
        ";
            } else {
                // line 15
                echo "            <span class=\"topBarElem\"><a href='index.php?module=CoreAdminHome'>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                echo "</a></span>
        ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    | <span class=\"topBarElem\">
        ";
        // line 19
        if (($this->getContext($context, "userLogin") == "anonymous")) {
            // line 20
            echo "            <a href='index.php?module=";
            echo twig_escape_filter($this->env, $this->getContext($context, "loginModule"), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
        ";
        } else {
            // line 22
            echo "            <a href='index.php?module=";
            echo twig_escape_filter($this->env, $this->getContext($context, "loginModule"), "html", null, true);
            echo "&amp;action=logout'>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Logout")), "html", null, true);
            echo "</a>
        ";
        }
        // line 24
        echo "    </span>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topBarHelloMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 24,  82 => 22,  69 => 18,  39 => 8,  63 => 9,  33 => 6,  59 => 8,  52 => 12,  48 => 15,  21 => 3,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 31,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 11,  46 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 27,  106 => 16,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 17,  60 => 15,  55 => 10,  53 => 34,  50 => 33,  41 => 11,  38 => 28,  36 => 27,  32 => 25,  30 => 6,  22 => 2,  56 => 12,  54 => 13,  51 => 10,  47 => 10,  45 => 31,  42 => 9,  40 => 7,  37 => 10,  34 => 3,  29 => 2,);
    }
}
