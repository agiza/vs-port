<?php

/* ajaxMacros.twig */
class __TwigTemplate_83b9c34d30fc92c695c21059a86b58f99bbfa8974e0fde081009a37dbdb8974b extends Twig_Template
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
        // line 4
        echo "
";
        // line 15
        echo "
";
    }

    // line 1
    public function geterrorDiv($_id = "ajaxError")
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" style=\"display:none\"></div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getloadingDiv($_id = "ajaxLoadingDiv")
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $_id,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            echo "<div id=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
            echo "\" style=\"display:none;\">
    <div class=\"loadingPiwik\">
        <img src=\"plugins/Zeitgeist/images/loading-blue.gif\" alt=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
            echo "\" />";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
            echo "
    </div>
    <div class=\"loadingSegment\">
        ";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SegmentEditor_LoadingSegmentedDataMayTakeSomeTime")), "html", null, true);
            echo "
    </div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 16
    public function getrequestErrorDiv()
    {
        $context = $this->env->getGlobals();

        $blocks = array();

        ob_start();
        try {
            // line 17
            echo "<div id=\"loadingError\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ErrorRequest")), "html", null, true);
            echo "</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "ajaxMacros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 17,  77 => 11,  48 => 10,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 29,  44 => 24,  21 => 2,  35 => 6,  26 => 4,  90 => 37,  82 => 22,  69 => 8,  52 => 5,  39 => 8,  63 => 6,  59 => 16,  33 => 6,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 26,  96 => 24,  92 => 16,  88 => 22,  83 => 21,  76 => 19,  73 => 14,  67 => 13,  64 => 12,  58 => 11,  49 => 12,  46 => 8,  31 => 6,  27 => 1,  23 => 3,  19 => 4,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 20,  74 => 20,  72 => 19,  68 => 45,  66 => 13,  60 => 12,  55 => 15,  53 => 34,  50 => 9,  41 => 8,  38 => 2,  36 => 7,  32 => 5,  30 => 19,  22 => 15,  56 => 13,  54 => 13,  51 => 11,  47 => 10,  45 => 9,  42 => 9,  40 => 7,  37 => 6,  34 => 3,  29 => 5,);
    }
}
