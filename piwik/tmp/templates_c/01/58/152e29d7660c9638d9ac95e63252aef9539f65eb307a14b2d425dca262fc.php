<?php

/* @UserCountry/_updaterNextRunTime.twig */
class __TwigTemplate_0158152e29d7660c9638d9ac95e63252aef9539f65eb307a14b2d425dca262fc extends Twig_Template
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
        if ((!twig_test_empty(((array_key_exists("nextRunTime", $context)) ? (_twig_default_filter($this->getContext($context, "nextRunTime"))) : (""))))) {
            // line 2
            echo "  ";
            if ((twig_date_converter($this->env, $this->getAttribute($this->getContext($context, "nextRunTime"), "getTimestamp", array(), "method")) <= twig_date_converter($this->env))) {
                // line 3
                echo "      ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterScheduledForNextRun")), "html", null, true);
                echo "
  ";
            } else {
                // line 5
                echo "      ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterWillRunNext", (("<strong><em>" . $this->getAttribute($this->getContext($context, "nextRunTime"), "toString", array(), "method")) . "</em></strong>")));
                echo "
  ";
            }
        } else {
            // line 8
            echo "  ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UserCountry_UpdaterIsNotScheduledToRun")), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "@UserCountry/_updaterNextRunTime.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  30 => 5,  24 => 3,  21 => 2,  172 => 61,  157 => 53,  138 => 46,  136 => 45,  130 => 42,  124 => 41,  119 => 39,  113 => 38,  108 => 36,  102 => 33,  98 => 32,  80 => 24,  77 => 23,  71 => 21,  69 => 20,  53 => 13,  49 => 12,  44 => 9,  38 => 7,  32 => 5,  26 => 2,  19 => 1,  353 => 130,  347 => 128,  343 => 126,  336 => 122,  328 => 117,  324 => 116,  318 => 113,  314 => 112,  308 => 109,  305 => 108,  303 => 107,  299 => 105,  297 => 104,  294 => 103,  288 => 101,  282 => 99,  280 => 98,  274 => 94,  267 => 92,  262 => 90,  259 => 89,  253 => 87,  250 => 86,  247 => 85,  241 => 83,  230 => 81,  227 => 80,  224 => 79,  218 => 77,  215 => 76,  209 => 74,  201 => 71,  195 => 68,  191 => 67,  183 => 63,  180 => 62,  177 => 61,  175 => 60,  171 => 58,  165 => 56,  163 => 56,  159 => 54,  153 => 51,  147 => 49,  141 => 47,  135 => 44,  133 => 43,  121 => 36,  112 => 35,  106 => 34,  101 => 31,  97 => 30,  92 => 29,  88 => 28,  84 => 26,  79 => 23,  72 => 19,  68 => 18,  64 => 18,  60 => 17,  55 => 14,  50 => 13,  48 => 12,  43 => 10,  36 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
