<?php

/* @CoreHome/_topBarTopMenu.twig */
class __TwigTemplate_4628dcf6e80c6124f204f40eb5e158a127e0610b1f24a262c3998cba93723861 extends Twig_Template
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
        echo "<div id=\"topLeftBar\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "topMenu"));
        foreach ($context['_seq'] as $context["label"] => $context["menu"]) {
            // line 3
            echo "        ";
            if ($this->getAttribute($this->getContext($context, "menu", true), "_html", array(), "any", true, true)) {
                // line 4
                echo "            ";
                echo $this->getAttribute($this->getContext($context, "menu"), "_html");
                echo "
        ";
            } elseif ((($this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "module") == $this->getContext($context, "currentModule")) && (twig_test_empty($this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "action")) || ($this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "action") == $this->getContext($context, "currentAction"))))) {
                // line 6
                echo "            <span class=\"topBarElem topBarElemActive\"><strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "label"))), "html", null, true);
                echo "</strong></span> |
        ";
            } else {
                // line 8
                echo "            <span class=\"topBarElem\" ";
                if ($this->getAttribute($this->getContext($context, "menu", true), "_tooltip", array(), "any", true, true)) {
                    echo "title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "menu"), "_tooltip"), "html", null, true);
                    echo "\"";
                }
                echo ">
                <a id=\"topmenu-";
                // line 9
                echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "menu"), "_url"), "module")), "html", null, true);
                echo "\" href=\"index.php";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "menu"), "_url"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "label"))), "html", null, true);
                echo "</a>
            </span> |
        ";
            }
            // line 12
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_topBarTopMenu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  26 => 3,  90 => 24,  82 => 22,  69 => 18,  39 => 8,  63 => 9,  33 => 6,  59 => 8,  52 => 12,  48 => 15,  21 => 3,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 31,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 23,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 11,  46 => 8,  31 => 3,  27 => 4,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 36,  125 => 35,  122 => 34,  115 => 21,  113 => 20,  108 => 27,  106 => 16,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 13,  60 => 12,  55 => 10,  53 => 34,  50 => 9,  41 => 8,  38 => 28,  36 => 27,  32 => 25,  30 => 6,  22 => 2,  56 => 12,  54 => 13,  51 => 10,  47 => 10,  45 => 31,  42 => 9,  40 => 7,  37 => 10,  34 => 3,  29 => 4,);
    }
}
