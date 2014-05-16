<?php

/* @CoreHome/_periodSelect.twig */
class __TwigTemplate_6a3edfe8c4edfb61eeb089c07757540157190e6f6805b3267bd6f64917ff8b99 extends Twig_Template
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
        echo "<div id=\"periodString\" class=\"js-autoLeftPanel\">
    <div id=\"date\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRange")), "html", null, true);
        echo " <strong>";
        echo twig_escape_filter($this->env, $this->getContext($context, "prettyDate"), "html", null, true);
        echo "</strong></div>
    <div class=\"calendar-icon\"></div>
    <div id=\"periodMore\">
        <div class=\"period-date\">
            <h6>";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Date")), "html", null, true);
        echo "</h6>

            <div id=\"datepicker\"></div>
        </div>
        <div class=\"period-range\" style=\"display:none;\">
            <div id=\"calendarRangeFrom\">
                <h6>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeFrom")), "html", null, true);
        echo "<input tabindex=\"1\" type=\"text\" id=\"inputCalendarFrom\" name=\"inputCalendarFrom\"/></h6>

                <div id=\"calendarFrom\"></div>
            </div>
            <div id=\"calendarRangeTo\">
                <h6>";
        // line 17
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRangeTo")), "html", null, true);
        echo "<input tabindex=\"2\" type=\"text\" id=\"inputCalendarTo\" name=\"inputCalendarTo\"/></h6>

                <div id=\"calendarTo\"></div>
            </div>
        </div>
        <div class=\"period-type\">
            <h6>";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Period")), "html", null, true);
        echo "</h6>
\t\t\t<span id=\"otherPeriods\">
            ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "periodsNames"));
        foreach ($context['_seq'] as $context["label"] => $context["thisPeriod"]) {
            // line 26
            echo "                <input type=\"radio\" name=\"period\" id=\"period_id_";
            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("period" => $this->getContext($context, "label")))), "html", null, true);
            echo "\"";
            if (($this->getContext($context, "label") == $this->getContext($context, "period"))) {
                echo " checked=\"checked\"";
            }
            echo " />
                <label for=\"period_id_";
            // line 27
            echo twig_escape_filter($this->env, $this->getContext($context, "label"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "thisPeriod"), "singular"), "html", null, true);
            echo "</label>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['thisPeriod'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</span>
            <input tabindex=\"3\" type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ApplyDateRange")), "html", null, true);
        echo "\" id=\"calendarRangeApply\"/>
            ";
        // line 32
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 33
        echo "            ";
        echo $context["ajax"]->getloadingDiv("ajaxLoadingCalendar");
        echo "
        </div>
    </div>
    <div class=\"period-click-tooltip\" style=\"display:none;\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ClickToChangePeriod")), "html", null, true);
        echo "</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_periodSelect.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 33,  95 => 32,  91 => 31,  57 => 23,  101 => 17,  77 => 27,  48 => 17,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 25,  44 => 9,  21 => 2,  35 => 6,  26 => 4,  90 => 37,  82 => 22,  69 => 8,  52 => 5,  39 => 8,  63 => 6,  59 => 16,  33 => 6,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 36,  96 => 24,  92 => 16,  88 => 30,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 12,  46 => 8,  31 => 6,  27 => 1,  23 => 3,  19 => 1,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 26,  60 => 12,  55 => 15,  53 => 34,  50 => 9,  41 => 8,  38 => 2,  36 => 7,  32 => 5,  30 => 19,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 9,  40 => 12,  37 => 6,  34 => 3,  29 => 4,);
    }
}
