<?php

/* @PrivacyManager/privacySettings.twig */
class __TwigTemplate_f544b3446a656659a01ff1a7b96d3cdc6b2b7e5bf88ead24347ca7eca99256d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("admin.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        $context["piwik"] = $this->env->loadTemplate("macros.twig");
        // line 5
        if ($this->getContext($context, "isSuperUser")) {
            // line 6
            echo "    <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_TeaserHeadline")), "html", null, true);
            echo "</h2>
    <p>";
            // line 7
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_Teaser", "<a href=\"#anonymizeIPAnchor\">", "</a>", "<a href=\"#deleteLogsAnchor\">", "</a>", "<a href=\"#optOutAnchor\">", "</a>"));
            echo "
        ";
            // line 8
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_SeeAlsoOurOfficialGuidePrivacy", "<strong><a href=\"http://piwik.org/privacy/\" target=\"_blank\">", "</a></strong>"));
            echo "</p>
    <h2 id=\"anonymizeIPAnchor\">";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizeIp")), "html", null, true);
            echo "</h2>
    <form method=\"post\" action=\"";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array(array("action" => "saveSettings", "form" => "formMaskLength", "token_auth" => $this->getContext($context, "token_auth")))), "html", null, true);
            echo "\" id=\"formMaskLength\">
        <div id='anonymizeIpSettings'>
            <table class=\"adminTable\" style='width:800px;'>
                <tr>
                    <td width=\"250\">";
            // line 14
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizeIp")), "html", null, true);
            echo "<br/>
                        <span class=\"form-description\">";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpDescription")), "html", null, true);
            echo "</span>
                    </td>
                    <td width='500'>
                        <input id=\"anonymizeIPEnable-1\" type=\"radio\" name=\"anonymizeIPEnable\" value=\"1\" ";
            // line 18
            if (($this->getAttribute($this->getContext($context, "anonymizeIP"), "enabled") == "1")) {
                echo "checked ";
            }
            echo "/>
                        <label for=\"anonymizeIPEnable-1\">";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "</label>
                        <input class=\"indented-radio-button\" id=\"anonymizeIPEnable-0\" type=\"radio\" name=\"anonymizeIPEnable\" value=\"0\" ";
            // line 20
            if (($this->getAttribute($this->getContext($context, "anonymizeIP"), "enabled") == "0")) {
                echo " checked ";
            }
            echo "/>
                        <label for=\"anonymizeIPEnable-0\">";
            // line 21
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "</label>
                        <input type=\"hidden\" name=\"token_auth\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getContext($context, "token_auth"), "html", null, true);
            echo "\"/>
                    </td>
                    <td width=\"200\">
                        <div style=\"width:180px\">
                            ";
            // line 26
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpInlineHelp")));
            echo "
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <div id=\"anonymizeIPenabled\">
            <table class=\"adminTable\" style='width:800px;'>
                <tr>
                    <td width=\"250\">";
            // line 35
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLengtDescription")), "html", null, true);
            echo "</td>
                    <td width=\"500\">
                        <input id=\"maskLength-1\" type=\"radio\" name=\"maskLength\" value=\"1\" ";
            // line 37
            if (($this->getAttribute($this->getContext($context, "anonymizeIP"), "maskLength") == "1")) {
                // line 38
                echo "                            checked ";
            }
            echo "/>
                        <label for=\"maskLength-1\">";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLength", "1", "192.168.100.xxx")), "html", null, true);
            echo "</label><br/>
                        <input id=\"maskLength-2\" type=\"radio\" name=\"maskLength\" value=\"2\" ";
            // line 40
            if (($this->getAttribute($this->getContext($context, "anonymizeIP"), "maskLength") == "2")) {
                // line 41
                echo "                            checked ";
            }
            echo "/>
                        <label for=\"maskLength-2\">";
            // line 42
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLength", "2", "192.168.xxx.xxx")), "html", null, true);
            echo " <span
                                    class=\"form-description\">";
            // line 43
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
            echo "</span></label><br/>
                        <input id=\"maskLength-3\" type=\"radio\" name=\"maskLength\" value=\"3\" ";
            // line 44
            if (($this->getAttribute($this->getContext($context, "anonymizeIP"), "maskLength") == "3")) {
                // line 45
                echo "                            checked ";
            }
            echo "/>
                        <label for=\"maskLength-3\">";
            // line 46
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_AnonymizeIpMaskLength", "3", "192.xxx.xxx.xxx")), "html", null, true);
            echo "</label>
                    </td>
                    <td width=\"200\">
                        <div style=\"width:180px\">
                            ";
            // line 50
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_GeolocationAnonymizeIpNote")));
            echo "
                        </div>
                    </td>
                </tr>
                <tr>
                    <td width=\"250\">
                        ";
            // line 56
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizedIpForVisitEnrichment")), "html", null, true);
            echo "
                    </td>
                    <td width='500'>
                        <input id=\"useAnonymizedIpForVisitEnrichment-1\" type=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\" value=\"1\" ";
            // line 59
            if (($this->getAttribute($this->getContext($context, "anonymizeIP"), "useAnonymizedIpForVisitEnrichment") == "1")) {
                echo "checked ";
            }
            echo "/>
                        <label for=\"useAnonymizedIpForVisitEnrichment-1\">";
            // line 60
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "</label>
                        <span class=\"form-description\">
                            ";
            // line 62
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_RecommendedForPrivacy")), "html", null, true);
            echo "
                        </span>
                        <br/>
                        <input id=\"useAnonymizedIpForVisitEnrichment-2\" type=\"radio\" name=\"useAnonymizedIpForVisitEnrichment\" value=\"0\" ";
            // line 65
            if (($this->getAttribute($this->getContext($context, "anonymizeIP"), "useAnonymizedIpForVisitEnrichment") == "0")) {
                echo " checked ";
            }
            echo "/>
                        <label for=\"useAnonymizedIpForVisitEnrichment-2\">";
            // line 66
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "</label>
                    </td>
                    <td width=\"200\">
                        <div style=\"width:180px\">
                            ";
            // line 70
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseAnonymizedIpForVisitEnrichmentNote")));
            echo "
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        <input type=\"hidden\" name=\"nonce\" value=\"";
            // line 77
            if ($this->getAttribute($this->getContext($context, "anonymizeIP"), "enabled")) {
                echo twig_escape_filter($this->env, $this->getContext($context, "deactivateNonce"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getContext($context, "activateNonce"), "html", null, true);
            }
            echo "\">

        <input type=\"submit\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
            echo "\" id=\"privacySettingsSubmit\" class=\"submit\"/>
    </form>

    ";
            // line 82
            if ($this->getContext($context, "isDataPurgeSettingsEnabled")) {
                // line 83
                echo "    <div class=\"ui-confirm\" id=\"confirmDeleteSettings\">
        <h2 id=\"deleteLogsConfirm\">";
                // line 84
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogsConfirm")), "html", null, true);
                echo "</h2>

        <h2 id=\"deleteReportsConfirm\">";
                // line 86
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsConfirm")), "html", null, true);
                echo "</h2>

        <h2 id=\"deleteBothConfirm\">";
                // line 88
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteBothConfirm")), "html", null, true);
                echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
                // line 90
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"saveSettingsBeforePurge\">
        <h2>";
                // line 93
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_SaveSettingsBeforePurge")), "html", null, true);
                echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
                // line 94
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Ok")), "html", null, true);
                echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmPurgeNow\">
        <h2>";
                // line 97
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgeNowConfirm")), "html", null, true);
                echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
                // line 98
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
                // line 99
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "\"/>
    </div>
    <h2 id=\"deleteLogsAnchor\">";
                // line 101
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings")), "html", null, true);
                echo "</h2>
    <p>";
                // line 102
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription2")), "html", null, true);
                echo "</p>
    <form method=\"post\" action=\"";
                // line 103
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array(array("action" => "saveSettings", "form" => "formDeleteSettings", "token_auth" => $this->getContext($context, "token_auth")))), "html", null, true);
                echo "\" id=\"formDeleteSettings\">
        <table class=\"adminTable\" style='width:800px;'>
            <tr id='deleteLogSettingEnabled'>
                <td width=\"250\">";
                // line 106
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteLog")), "html", null, true);
                echo "<br/>

                </td>
                <td width='500'>
                    <input id=\"deleteEnable-1\" type=\"radio\" name=\"deleteEnable\" value=\"1\" ";
                // line 110
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_logs_enable") == "1")) {
                    // line 111
                    echo "                        checked ";
                }
                echo "/>
                    <label for=\"deleteEnable-1\">";
                // line 112
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "</label>
                    <input class=\"indented-radio-button\" id=\"deleteEnable-2\" type=\"radio\" name=\"deleteEnable\" value=\"0\"
                                  ";
                // line 114
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_logs_enable") == "0")) {
                    // line 115
                    echo "                        checked ";
                }
                echo "/>
                    <label for=\"deleteEnable-2\">";
                // line 116
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "</label>
\t\t\t\t<span id=\"privacyManagerDeleteLogDescription\" style=\"margin-top: 10px;display:inline-block;\">
                    ";
                // line 118
                ob_start();
                // line 119
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogDescription2"));
                echo "
                        <a href=\"http://piwik.org/faq/general/#faq_125\" target=\"_blank\">
                            ";
                // line 121
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ClickHere")), "html", null, true);
                echo "
                        </a>
                    ";
                $context["deleteLogDescription"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 124
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getContext($context, "deleteLogDescription"), array("raw" => true, "placeat" => "#privacyManagerDeleteLogDescription", "noclear" => true, "context" => "warning")));
                echo "
\t\t\t\t</span>
                </td>
                <td width=\"200\">
                    ";
                // line 128
                ob_start();
                // line 129
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogInfo", $this->getAttribute($this->getContext($context, "deleteData"), "deleteTables")));
                echo "
                        ";
                // line 130
                if ((!$this->getContext($context, "canDeleteLogActions"))) {
                    // line 131
                    echo "                            <br/>
                            <br/>
                            ";
                    // line 133
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_CannotLockSoDeleteLogActions", $this->getContext($context, "dbUser"))), "html", null, true);
                    echo "
                        ";
                }
                // line 135
                echo "                    ";
                $context["deleteLogInfo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 136
                echo "                    ";
                echo $context["piwik"]->getinlineHelp($this->getContext($context, "deleteLogInfo"));
                echo "
                </td>
            </tr>
            <tr id=\"deleteLogSettings\">
                <td width=\"250\">&nbsp;</td>
                <td width=\"500\">
                    <label>";
                // line 142
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteLogsOlderThan")), "html", null, true);
                echo "
                        <input type=\"text\" id=\"deleteOlderThan\" value=\"";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_logs_older_than"), "html", null, true);
                echo "\" style=\"width:55px;\"
                               name=\"deleteOlderThan\"/>
                        ";
                // line 145
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodDays")), "html", null, true);
                echo "</label><br/>
                    <span class=\"form-description\">";
                // line 146
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LeastDaysInput", "1")), "html", null, true);
                echo "</span>
                </td>
                <td width=\"200\">

                </td>
            </tr>
            <tr id='deleteReportsSettingEnabled'>
                <td width=\"250\">";
                // line 153
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteReports")), "html", null, true);
                echo "
                </td>
                <td width=\"500\">
                    <input id=\"deleteReportsEnable-1\" type=\"radio\" name=\"deleteReportsEnable\" value=\"1\" ";
                // line 156
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_enable") == "1")) {
                    echo "checked=\"true\"";
                }
                echo " />
                    <label for=\"deleteReportsEnable-1\">";
                // line 157
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "</label>
                    <input class=\"indented-radio-button\" id=\"deleteReportsEnable-2\" type=\"radio\" name=\"deleteReportsEnable\" value=\"0\" ";
                // line 158
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_enable") == "0")) {
                    echo "checked=\"true\"";
                }
                echo "/>
                    <label for=\"deleteReportsEnable-2\">";
                // line 159
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "</label>

                    ";
                // line 161
                ob_start();
                // line 162
                echo "                        ";
                ob_start();
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_UseDeleteLog")), "html", null, true);
                $context["deleteOldLogs"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 163
                echo "                        ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo", "<em>", "</em>"));
                echo "
                        <span id='deleteOldReportsMoreInfo'><br/><br/>
                            ";
                // line 165
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo2", $this->getContext($context, "deleteOldLogs"))), "html", null, true);
                echo "<br/><br/>
                            ";
                // line 166
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsInfo3", $this->getContext($context, "deleteOldLogs"))), "html", null, true);
                echo "</span>
                    ";
                $context["useDeleteLog"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 168
                echo "                    <span id=\"privacyManagerUseDeleteLog\" style=\"margin-top: 10px;display:inline-block;\">
                        ";
                // line 169
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getContext($context, "useDeleteLog"), array("raw" => true, "placeat" => "#privacyManagerUseDeleteLog", "noclear" => true, "context" => "warning")));
                echo "
                    </span>
                </td>
                <td width=\"200\">
                    ";
                // line 173
                echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsDetailedInfo", "archive_numeric_*", "archive_blob_*")));
                echo "
                </td>
            </tr>
            <tr id='deleteReportsSettings'>
                <td width=\"250\">&nbsp;</td>
                <td width=\"500\">
                    <label>";
                // line 179
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteReportsOlderThan")), "html", null, true);
                echo "
                        <input type=\"text\" id=\"deleteReportsOlderThan\" value=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_older_than"), "html", null, true);
                echo "\" style=\"width:30px;\"
                               name=\"deleteReportsOlderThan\"/>
                        ";
                // line 182
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodMonths")), "html", null, true);
                echo "
                    </label><br/>
                    <span class=\"form-description\">";
                // line 184
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LeastMonthsInput", "3")), "html", null, true);
                echo "</span><br/><br/>
                    <input id=\"deleteReportsKeepBasic\" type=\"checkbox\" name=\"deleteReportsKeepBasic\" value=\"1\"
                                  ";
                // line 186
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_keep_basic_metrics")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepBasic\">";
                // line 187
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepBasicMetrics")), "html", null, true);
                echo "
                        <span class=\"form-description\">";
                // line 188
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
                echo "</span>
                    </label><br/><br/>
                    ";
                // line 190
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepDataFor")), "html", null, true);
                echo "<br/><br/>
                    <input id=\"deleteReportsKeepDay\" type=\"checkbox\" name=\"deleteReportsKeepDay\" value=\"1\"
                                  ";
                // line 192
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_keep_day_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepDay\">";
                // line 193
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DailyReports")), "html", null, true);
                echo "</label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepWeek\" value=\"1\" id=\"deleteReportsKeepWeek\"
                                  ";
                // line 195
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_keep_week_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepWeek\">";
                // line 196
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_WeeklyReports")), "html", null, true);
                echo "</label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepMonth\" value=\"1\" id=\"deleteReportsKeepMonth\"
                                  ";
                // line 198
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_keep_month_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepMonth\">";
                // line 199
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MonthlyReports")), "html", null, true);
                echo "<span
                                class=\"form-description\">";
                // line 200
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
                echo "</span></label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepYear\" value=\"1\" id=\"deleteReportsKeepYear\"
                                  ";
                // line 202
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_keep_year_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepYear\">";
                // line 203
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YearlyReports")), "html", null, true);
                echo "<span
                                class=\"form-description\">";
                // line 204
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
                echo "</span></label><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepRange\" value=\"1\" id=\"deleteReportsKeepRange\"
                                  ";
                // line 206
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_keep_range_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepRange\">";
                // line 207
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_RangeReports")), "html", null, true);
                echo "
                    </label><br/><br/>
                    <input type=\"checkbox\" name=\"deleteReportsKeepSegments\" value=\"1\" id=\"deleteReportsKeepSegments\"
                                  ";
                // line 210
                if ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_keep_segment_reports")) {
                    echo "checked=\"true\"";
                }
                echo ">
                    <label for=\"deleteReportsKeepSegments\">";
                // line 211
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_KeepReportSegments")), "html", null, true);
                echo "</label><br/>
                </td>
                <td width=\"200\">

                </td>
            </tr>
            <tr id=\"deleteDataEstimateSect\"
                ";
                // line 218
                if ((($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_reports_enable") == "0") && ($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_logs_enable") == "0"))) {
                    echo "style=\"display:none;\"";
                }
                echo ">
                <td width=\"250\">";
                // line 219
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_ReportsDataSavedEstimate")), "html", null, true);
                echo "<br/></td>
                <td width=\"500\">
                    <div id=\"deleteDataEstimate\"></div>
                    <span class=\"loadingPiwik\" style=\"display:none;\"><img
                                src=\"./plugins/Zeitgeist/images/loading-blue.gif\"/> ";
                // line 223
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LoadingData")), "html", null, true);
                echo "</span>
                </td>
                <td width=\"200\">
                    ";
                // line 226
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "enable_auto_database_size_estimate") == "0")) {
                    // line 227
                    echo "                        ";
                    ob_start();
                    // line 228
                    echo "                            <em><a id=\"getPurgeEstimateLink\" style=\"width:280px\" class=\"ui-inline-help\" href=\"#\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_GetPurgeEstimate")), "html", null, true);
                    echo "</a></em>
                        ";
                    $context["manualEstimate"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                    // line 230
                    echo "                        ";
                    echo $context["piwik"]->getinlineHelp($this->getContext($context, "manualEstimate"));
                    echo "
                    ";
                }
                // line 232
                echo "                </td>
            </tr>
            <tr id=\"deleteSchedulingSettings\">
                <td width=\"250\">";
                // line 235
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteSchedulingSettings")), "html", null, true);
                echo "<br/></td>
                <td width=\"500\">
                    <label>";
                // line 237
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataInterval")), "html", null, true);
                echo "
                        <select id=\"deleteLowestInterval\" name=\"deleteLowestInterval\">
                            <option ";
                // line 239
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_logs_schedule_lowest_interval") == "1")) {
                    echo " selected=\"selected\" ";
                }
                // line 240
                echo "                                    value=\"1\"> ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodDay")), "html", null, true);
                echo "</option>
                            <option ";
                // line 241
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_logs_schedule_lowest_interval") == "7")) {
                    echo " selected=\"selected\" ";
                }
                // line 242
                echo "                                    value=\"7\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodWeek")), "html", null, true);
                echo "</option>
                            <option ";
                // line 243
                if (($this->getAttribute($this->getAttribute($this->getContext($context, "deleteData"), "config"), "delete_logs_schedule_lowest_interval") == "30")) {
                    echo " selected=\"selected\" ";
                }
                // line 244
                echo "                                    value=\"30\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_PeriodMonth")), "html", null, true);
                echo "</option>
                        </select></label><br/><br/>
                </td>
                <td width=\"200\">
                    ";
                // line 248
                ob_start();
                // line 249
                echo "                        ";
                if ($this->getAttribute($this->getContext($context, "deleteData"), "lastRun")) {
                    echo "<strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_LastDelete")), "html", null, true);
                    echo ":</strong>
                            ";
                    // line 250
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "deleteData"), "lastRunPretty"), "html", null, true);
                    echo "
                            <br/>
                            <br/>
                        ";
                }
                // line 254
                echo "                        <strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_NextDelete")), "html", null, true);
                echo ":</strong>
                        ";
                // line 255
                echo $this->getAttribute($this->getContext($context, "deleteData"), "nextRunPretty");
                echo "
                        <br/>
                        <br/>
                        <em><a id=\"purgeDataNowLink\" href=\"#\">";
                // line 258
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgeNow")), "html", null, true);
                echo "</a></em>
                        <span class=\"loadingPiwik\" style=\"display:none;\"><img
                                    src=\"./plugins/Zeitgeist/images/loading-blue.gif\"/> ";
                // line 260
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_PurgingData")), "html", null, true);
                echo "</span>
                        <span id=\"db-purged-message\" style=\"display: none;\"><em>";
                // line 261
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DBPurged")), "html", null, true);
                echo "</em></span>
                    ";
                $context["purgeStats"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 263
                echo "                    ";
                echo $context["piwik"]->getinlineHelp($this->getContext($context, "purgeStats"));
                echo "
                </td>
            </tr>
        </table>
        <input type=\"button\" value=\"";
                // line 267
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
                echo "\" id=\"deleteLogSettingsSubmit\" class=\"submit\"/>
    </form>

    ";
            }
            // line 271
            echo "

    <h2 id=\"DNT\">";
            // line 273
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_SupportDNTPreference")), "html", null, true);
            echo "</h2>
    <table class=\"adminTable\" style='width:800px;'>
        <tr>
            <td width=\"650\">
                <p>
                    ";
            // line 278
            if ($this->getContext($context, "dntSupport")) {
                // line 279
                echo "                        ";
                $context["action"] = "deactivateDoNotTrack";
                // line 280
                echo "                        ";
                $context["nonce"] = $this->getContext($context, "deactivateNonce");
                // line 281
                echo "                        <strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Enabled")), "html", null, true);
                echo "</strong>
                        <br/>
                        ";
                // line 283
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_EnabledMoreInfo")), "html", null, true);
                echo "
                    ";
            } else {
                // line 285
                echo "                        ";
                $context["action"] = "activateDoNotTrack";
                // line 286
                echo "                        ";
                $context["nonce"] = $this->getContext($context, "activateNonce");
                // line 287
                echo "                        ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Disabled")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_DisabledMoreInfo")), "html", null, true);
                echo "
                    ";
            }
            // line 289
            echo "                </p>
\t\t\t<span style=\"margin-left:20px;\">
\t\t\t<a href='";
            // line 291
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array(array("module" => "PrivacyManager", "nonce" => $this->getContext($context, "nonce"), "action" => $this->getContext($context, "action")))), "html", null, true);
            echo "#DNT'>&rsaquo;
                ";
            // line 292
            if ($this->getContext($context, "dntSupport")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Disable")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NotRecommended")), "html", null, true);
                echo "
                ";
            } else {
                // line 293
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Enable")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
            }
            // line 294
            echo "                <br/>
            </a></span>
            </td>
            <td width=\"200\">
                ";
            // line 298
            echo $context["piwik"]->getinlineHelp(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DoNotTrack_Description")));
            echo "
            </td>
        </tr>
    </table>
";
        }
        // line 303
        echo "
<h2 id=\"optOutAnchor\">";
        // line 304
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutForYourVisitors")), "html", null, true);
        echo "</h2>
<p>";
        // line 305
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanation")), "html", null, true);
        echo "
    ";
        // line 306
        ob_start();
        echo twig_escape_filter($this->env, $this->getContext($context, "piwikUrl"), "html", null, true);
        echo "index.php?module=CoreAdminHome&action=optOut&language=";
        echo twig_escape_filter($this->env, $this->getContext($context, "language"), "html", null, true);
        $context["optOutUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 307
        echo "    ";
        ob_start();
        echo "<iframe frameborder=\"no\" width=\"600px\" height=\"200px\" src=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "optOutUrl"), "html", null, true);
        echo "\"></iframe>";
        $context["iframeOptOut"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 308
        echo "    <code>";
        echo twig_escape_filter($this->env, $this->getContext($context, "iframeOptOut"), "html");
        echo "</code>
    <br/>
    ";
        // line 310
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanationBis", (("<a href='" . $this->getContext($context, "optOutUrl")) . "' target='_blank'>"), "</a>"));
        echo "
</p>

<div style=\"height:100px;\"></div>
";
    }

    public function getTemplateName()
    {
        return "@PrivacyManager/privacySettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  832 => 310,  826 => 308,  819 => 307,  813 => 306,  809 => 305,  805 => 304,  802 => 303,  794 => 298,  788 => 294,  783 => 293,  775 => 292,  771 => 291,  767 => 289,  759 => 287,  756 => 286,  753 => 285,  748 => 283,  742 => 281,  739 => 280,  736 => 279,  734 => 278,  726 => 273,  722 => 271,  715 => 267,  707 => 263,  702 => 261,  698 => 260,  693 => 258,  687 => 255,  682 => 254,  675 => 250,  668 => 249,  666 => 248,  658 => 244,  654 => 243,  649 => 242,  645 => 241,  640 => 240,  636 => 239,  631 => 237,  626 => 235,  621 => 232,  615 => 230,  609 => 228,  606 => 227,  604 => 226,  598 => 223,  591 => 219,  585 => 218,  575 => 211,  569 => 210,  563 => 207,  557 => 206,  552 => 204,  548 => 203,  542 => 202,  537 => 200,  533 => 199,  527 => 198,  522 => 196,  516 => 195,  511 => 193,  505 => 192,  500 => 190,  495 => 188,  491 => 187,  485 => 186,  480 => 184,  475 => 182,  470 => 180,  466 => 179,  457 => 173,  450 => 169,  447 => 168,  442 => 166,  438 => 165,  432 => 163,  427 => 162,  425 => 161,  420 => 159,  414 => 158,  410 => 157,  404 => 156,  398 => 153,  388 => 146,  384 => 145,  379 => 143,  375 => 142,  365 => 136,  362 => 135,  357 => 133,  353 => 131,  351 => 130,  346 => 129,  344 => 128,  336 => 124,  330 => 121,  324 => 119,  322 => 118,  317 => 116,  312 => 115,  310 => 114,  305 => 112,  300 => 111,  298 => 110,  291 => 106,  285 => 103,  279 => 102,  275 => 101,  270 => 99,  266 => 98,  262 => 97,  256 => 94,  252 => 93,  246 => 90,  242 => 89,  238 => 88,  233 => 86,  228 => 84,  225 => 83,  223 => 82,  217 => 79,  208 => 77,  198 => 70,  191 => 66,  185 => 65,  179 => 62,  174 => 60,  168 => 59,  162 => 56,  153 => 50,  146 => 46,  141 => 45,  139 => 44,  135 => 43,  131 => 42,  126 => 41,  124 => 40,  120 => 39,  115 => 38,  113 => 37,  108 => 35,  96 => 26,  89 => 22,  85 => 21,  79 => 20,  75 => 19,  69 => 18,  63 => 15,  59 => 14,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  35 => 6,  33 => 5,  31 => 4,  28 => 3,);
    }
}
