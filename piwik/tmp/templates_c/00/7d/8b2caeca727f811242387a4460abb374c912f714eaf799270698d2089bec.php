<?php

/* @ScheduledReports/index.twig */
class __TwigTemplate_007d8b2caeca727f811242387a4460abb374c912f714eaf799270698d2089bec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("dashboard.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "dashboard.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->env->loadTemplate("@CoreHome/_siteSelectHeader.twig")->display($context);
        // line 6
        echo "
<div class=\"top_controls\">
    ";
        // line 8
        $this->env->loadTemplate("@CoreHome/_periodSelect.twig")->display($context);
        // line 9
        echo "</div>

<div class=\"centerLargeDiv\">
    <h2>";
        // line 12
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_ManageEmailReports")), "html", null, true);
        echo "</h2>
    <span id=\"reportSentSuccess\"></span>
    <span id=\"reportUpdatedSuccess\"></span>

    <div class=\"entityContainer\">
        ";
        // line 17
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 18
        echo "        ";
        echo $context["ajax"]->geterrorDiv();
        echo "
        ";
        // line 19
        echo $context["ajax"]->getloadingDiv();
        echo "
        ";
        // line 20
        $this->env->loadTemplate("@ScheduledReports/_listReports.twig")->display($context);
        // line 21
        echo "        ";
        $this->env->loadTemplate("@ScheduledReports/_addReport.twig")->display($context);
        // line 22
        echo "        <a id='bottom'></a>
    </div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 27
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_AreYouSureDeleteReport")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<script type=\"text/javascript\">
    var ReportPlugin = {};
    ReportPlugin.defaultPeriod = '";
        // line 34
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultPeriod"), "html", null, true);
        echo "';
    ReportPlugin.defaultHour = '";
        // line 35
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultHour"), "html", null, true);
        echo "';
    ReportPlugin.defaultReportType = '";
        // line 36
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultReportType"), "html", null, true);
        echo "';
    ReportPlugin.defaultReportFormat = '";
        // line 37
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultReportFormat"), "html", null, true);
        echo "';
    ReportPlugin.reportList = ";
        // line 38
        echo $this->getContext($context, "reportsJSON");
        echo ";
    ReportPlugin.createReportString = \"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CreateReport")), "html", null, true);
        echo "\";
    ReportPlugin.updateReportString = \"";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_UpdateReport")), "html", null, true);
        echo "\";
    \$(function () {
        initManagePdf();
    });
</script>
<style type=\"text/css\">
    .reportCategory {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .entityAddContainer {
        position:relative;
    }

    .entityAddContainer > .entityCancel:first-child {
        position: absolute;
        right:0;
        bottom:100%;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  94 => 34,  86 => 29,  82 => 28,  78 => 27,  71 => 22,  68 => 21,  66 => 20,  62 => 19,  57 => 18,  55 => 17,  47 => 12,  42 => 9,  40 => 8,  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
