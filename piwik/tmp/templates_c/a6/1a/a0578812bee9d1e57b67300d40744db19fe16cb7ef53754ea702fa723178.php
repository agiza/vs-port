<?php

/* @CoreHome/ReportRenderer/_htmlReportBody.twig */
class __TwigTemplate_a61aa0578812bee9d1e57b67300d40744db19fe16cb7ef53754ea702fa723178 extends Twig_Template
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
        echo "<h2 id=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "reportId"), "html", null, true);
        echo "\" style=\"color: rgb(";
        echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextColor"), "html", null, true);
        echo "); font-size: ";
        echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextSize"), "html", null, true);
        echo "pt;\">
    ";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "reportName"), "html", null, true);
        echo "
</h2>

";
        // line 5
        if (twig_test_empty($this->getContext($context, "reportRows"))) {
            // line 6
            echo "    ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_ThereIsNoDataForThisReport")), "html", null, true);
            echo "
";
        } else {
            // line 8
            echo "    ";
            if ($this->getContext($context, "displayGraph")) {
                // line 9
                echo "        <img alt=\"\"
                ";
                // line 10
                if ($this->getContext($context, "renderImageInline")) {
                    // line 11
                    echo "                    src=\"data:image/png;base64,";
                    echo twig_escape_filter($this->env, $this->getContext($context, "generatedImageGraph"), "html", null, true);
                    echo "\"
                ";
                } else {
                    // line 13
                    echo "                    src=\"cid:";
                    echo twig_escape_filter($this->env, $this->getContext($context, "reportId"), "html", null, true);
                    echo "\"
                ";
                }
                // line 15
                echo "                height=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "graphHeight"), "html", null, true);
                echo "\"
                width=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->getContext($context, "graphWidth"), "html", null, true);
                echo "\"/>
    ";
            }
            // line 18
            echo "
    ";
            // line 19
            if (($this->getContext($context, "displayGraph") && $this->getContext($context, "displayTable"))) {
                // line 20
                echo "        <br/>
        <br/>
    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if ($this->getContext($context, "displayTable")) {
                // line 25
                echo "        <table style=\"border-collapse:collapse; margin-left: 5px;\">
            <thead style=\"background-color: rgb(";
                // line 26
                echo twig_escape_filter($this->env, $this->getContext($context, "tableHeaderBgColor"), "html", null, true);
                echo "); color: rgb(";
                echo twig_escape_filter($this->env, $this->getContext($context, "tableHeaderTextColor"), "html", null, true);
                echo "); font-size: ";
                echo twig_escape_filter($this->env, $this->getContext($context, "reportTableHeaderTextSize"), "html", null, true);
                echo "pt;\">
            ";
                // line 27
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reportColumns"));
                foreach ($context['_seq'] as $context["_key"] => $context["columnName"]) {
                    // line 28
                    echo "                <th style=\"padding: 6px 0;\">
                    &nbsp;";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getContext($context, "columnName"), "html", null, true);
                    echo "&nbsp;&nbsp;
                </th>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['columnName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "            </thead>
            <tbody>
            ";
                // line 34
                $context["cycleValues"] = array(0 => "", 1 => (("background-color: rgb(" . $this->getContext($context, "tableBgColor")) . ")"));
                // line 35
                echo "            ";
                $context["cycleIndex"] = 0;
                // line 36
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reportRows"));
                foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
                    // line 37
                    echo "                ";
                    $context["rowMetrics"] = $this->getAttribute($this->getContext($context, "row"), "columns");
                    // line 38
                    echo "
                ";
                    // line 39
                    if ($this->getAttribute($this->getContext($context, "reportRowsMetadata", true), $this->getContext($context, "rowId"), array(), "array", true, true)) {
                        // line 40
                        echo "                    ";
                        $context["rowMetadata"] = $this->getAttribute($this->getAttribute($this->getContext($context, "reportRowsMetadata"), $this->getContext($context, "rowId"), array(), "array"), "columns");
                        // line 41
                        echo "                ";
                    } else {
                        // line 42
                        echo "                    ";
                        $context["rowMetadata"] = null;
                        // line 43
                        echo "                ";
                    }
                    // line 44
                    echo "                <tr style=\"";
                    echo twig_escape_filter($this->env, twig_cycle($this->getContext($context, "cycleValues"), $this->getContext($context, "cycleIndex")), "html", null, true);
                    echo "\">
                    ";
                    // line 45
                    $context["cycleIndex"] = ($this->getContext($context, "cycleIndex") + 1);
                    // line 46
                    echo "                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "reportColumns"));
                    foreach ($context['_seq'] as $context["columnId"] => $context["columnName"]) {
                        // line 47
                        echo "                        <td style=\"font-size: ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "reportTableRowTextSize"), "html", null, true);
                        echo "pt; border-bottom: 1px solid rgb(";
                        echo twig_escape_filter($this->env, $this->getContext($context, "tableCellBorderColor"), "html", null, true);
                        echo "); padding: 5px 0 5px 5px;\">
                            ";
                        // line 48
                        if (($this->getContext($context, "columnId") == "label")) {
                            // line 49
                            echo "                                ";
                            if ($this->getAttribute($this->getContext($context, "rowMetrics", true), $this->getContext($context, "columnId"), array(), "array", true, true)) {
                                // line 50
                                echo "                                    ";
                                if ($this->getAttribute($this->getContext($context, "rowMetadata", true), "logo", array(), "any", true, true)) {
                                    // line 51
                                    echo "                                        <img src='";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "currentPath"), "html", null, true);
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rowMetadata"), "logo"), "html", null, true);
                                    echo "'>
                                        &nbsp;
                                    ";
                                }
                                // line 54
                                echo "                                    ";
                                if ($this->getAttribute($this->getContext($context, "rowMetadata", true), "url", array(), "any", true, true)) {
                                    // line 55
                                    echo "                                        <a style=\"color: rgb(";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "reportTextColor"), "html", null, true);
                                    echo ");\" href='";
                                    if (!twig_in_filter(twig_slice($this->env, $this->getAttribute($this->getContext($context, "rowMetadata"), "url"), 0, 4), array(0 => "http", 1 => "ftp:"))) {
                                        echo "http://";
                                    }
                                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rowMetadata"), "url"), "html", null, true);
                                    echo "'>
                                    ";
                                }
                                // line 57
                                echo "                                    ";
                                echo $this->getAttribute($this->getContext($context, "rowMetrics"), $this->getContext($context, "columnId"), array(), "array");
                                // line 58
                                echo "                                    ";
                                if ($this->getAttribute($this->getContext($context, "rowMetadata", true), "url", array(), "any", true, true)) {
                                    // line 59
                                    echo "                                        </a>
                                    ";
                                }
                                // line 61
                                echo "                                ";
                            }
                            // line 62
                            echo "                            ";
                        } else {
                            // line 63
                            echo "                                ";
                            if (twig_test_empty($this->getAttribute($this->getContext($context, "rowMetrics"), $this->getContext($context, "columnId"), array(), "array"))) {
                                // line 64
                                echo "                                    0
                                ";
                            } else {
                                // line 66
                                echo "                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "rowMetrics"), $this->getContext($context, "columnId"), array(), "array"), "html", null, true);
                                echo "
                                ";
                            }
                            // line 68
                            echo "                            ";
                        }
                        // line 69
                        echo "                        </td>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['columnId'], $context['columnName'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "            </tbody>
        </table>
    ";
            }
            // line 76
            echo "    <br/>
    <a style=\"text-decoration:none; color: rgb(";
            // line 77
            echo twig_escape_filter($this->env, $this->getContext($context, "reportTitleTextColor"), "html", null, true);
            echo "); font-size: ";
            echo twig_escape_filter($this->env, $this->getContext($context, "reportBackToTopTextSize"), "html", null, true);
            echo "pt;\" href=\"#reportTop\">
        ";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_TopOfReport")), "html", null, true);
            echo "
    </a>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/ReportRenderer/_htmlReportBody.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 78,  251 => 77,  248 => 76,  243 => 73,  236 => 71,  229 => 69,  226 => 68,  220 => 66,  216 => 64,  213 => 63,  210 => 62,  207 => 61,  203 => 59,  200 => 58,  197 => 57,  186 => 55,  183 => 54,  175 => 51,  172 => 50,  169 => 49,  167 => 48,  160 => 47,  155 => 46,  153 => 45,  148 => 44,  145 => 43,  142 => 42,  139 => 41,  136 => 40,  134 => 39,  131 => 38,  128 => 37,  123 => 36,  120 => 35,  118 => 34,  114 => 32,  105 => 29,  102 => 28,  98 => 27,  90 => 26,  87 => 25,  85 => 24,  82 => 23,  77 => 20,  75 => 19,  72 => 18,  67 => 16,  62 => 15,  56 => 13,  50 => 11,  48 => 10,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  28 => 2,  19 => 1,);
    }
}
