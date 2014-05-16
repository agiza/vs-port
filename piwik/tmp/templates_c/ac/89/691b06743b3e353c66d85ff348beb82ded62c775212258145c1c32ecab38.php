<?php

/* @CoreHome/_notifications.twig */
class __TwigTemplate_ac89691b06743b3e353c66d85ff348beb82ded62c775212258145c1c32ecab38 extends Twig_Template
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
        echo "<div id=\"notificationContainer\">
    ";
        // line 2
        if (twig_length_filter($this->env, $this->getContext($context, "notifications"))) {
            // line 3
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "notifications"));
            foreach ($context['_seq'] as $context["notificationId"] => $context["n"]) {
                // line 4
                echo "
            ";
                // line 5
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getAttribute($this->getContext($context, "n"), "message"), array("id" => $this->getContext($context, "notificationId"), "type" => $this->getAttribute($this->getContext($context, "n"), "type"), "title" => $this->getAttribute($this->getContext($context, "n"), "title"), "noclear" => $this->getAttribute($this->getContext($context, "n"), "hasNoClear"), "context" => $this->getAttribute($this->getContext($context, "n"), "context"), "raw" => $this->getAttribute($this->getContext($context, "n"), "raw")), false));
                echo "

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['notificationId'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        // line 9
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_notifications.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 17,  77 => 11,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 29,  44 => 9,  35 => 6,  26 => 4,  90 => 37,  82 => 22,  69 => 8,  39 => 8,  63 => 6,  33 => 6,  59 => 16,  52 => 5,  48 => 10,  21 => 2,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 16,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 12,  46 => 8,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 13,  60 => 12,  55 => 15,  53 => 34,  50 => 9,  41 => 8,  38 => 2,  36 => 7,  32 => 5,  30 => 19,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 9,  40 => 7,  37 => 10,  34 => 3,  29 => 4,);
    }
}
