<?php

/* @CoreHome/ReportRenderer/_htmlReportHeader.twig */
class __TwigTemplate_657f9bf038b69c35c289917fce64d7ffc3b4e14865159e85a1eb2fdadfc6aa48 extends Twig_Template
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
        echo "<html>
<head>
    <meta charset=\"utf-8\">
</head>
<body style=\"color: rgb(";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "reportTextColor"), "html", null, true);
        echo ");\">

<a id=\"reportTop\" target=\"_blank\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "currentPath"), "html", null, true);
        echo "\"><img title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GoTo", "Piwik")), "html", null, true);
        echo "\" border=\"0\" alt=\"Piwik\" src='";
        echo twig_escape_filter($this->env, $this->getContext($context, "logoHeader"), "html", null, true);
        echo "'/></a>

<h1 style=\"color: rgb(";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextColor"), "html", null, true);
        echo "); font-size: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextSize"), "html", null, true);
        echo "pt;\">
    ";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "reportTitle"), "html", null, true);
        echo "
</h1>

<p>
    ";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, "description"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DateRange")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getContext($context, "prettyDate"), "html", null, true);
        echo "
</p>

";
        // line 17
        if ($this->getContext($context, "displaySegment")) {
            // line 18
            echo "<p style=\"color: rgb(";
            echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextColor"), "html", null, true);
            echo ");\">
    ";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_CustomVisitorSegment", "Piwik")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getContext($context, "segmentName"), "html", null, true);
            echo "
</p>
";
        }
        // line 22
        echo "
";
        // line 23
        if ((twig_length_filter($this->env, $this->getContext($context, "reportMetadata")) > 1)) {
            // line 24
            echo "    <h2 style=\"color: rgb(";
            echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextColor"), "html", null, true);
            echo "); font-size: ";
            echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextSize"), "html", null, true);
            echo "pt;\">
        ";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_TableOfContent")), "html", null, true);
            echo "
    </h2>
    <ul>
        ";
            // line 28
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reportMetadata"));
            foreach ($context['_seq'] as $context["_key"] => $context["metadata"]) {
                // line 29
                echo "            <li>
                <a href=\"#";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metadata"), "uniqueId"), "html", null, true);
                echo "\" style=\"text-decoration:none; color: rgb(";
                echo twig_escape_filter($this->env, $this->getContext($context, "reportTextColor"), "html", null, true);
                echo ");\">
                    ";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "metadata"), "name"), "html", null, true);
                echo "
                </a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['metadata'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/ReportRenderer/_htmlReportHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 35,  108 => 31,  102 => 30,  99 => 29,  95 => 28,  89 => 25,  82 => 24,  80 => 23,  77 => 22,  69 => 19,  64 => 18,  62 => 17,  52 => 14,  45 => 10,  39 => 9,  30 => 7,  25 => 5,  19 => 1,);
    }
}
