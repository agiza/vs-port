<?php

/* @CoreAdminHome/generalSettings.twig */
class __TwigTemplate_57b7c81a113bbbcd5d091d4cb080822a8cdbe290defc7d5c1aaee927cbf03a16 extends Twig_Template
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
        // line 5
        $context["piwik"] = $this->env->loadTemplate("macros.twig");
        // line 6
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 7
        echo "
";
        // line 8
        if ($this->getContext($context, "isSuperUser")) {
            // line 9
            echo "    ";
            echo $context["ajax"]->geterrorDiv();
            echo "
    ";
            // line 10
            echo $context["ajax"]->getloadingDiv();
            echo "

    <h2>";
            // line 12
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GeneralSettings")), "html", null, true);
            echo "</h2>
    <table class=\"adminTable\" style='width:900px;'>

    ";
            // line 15
            if ($this->getContext($context, "isGeneralSettingsAdminEnabled")) {
                // line 16
                echo "        <tr>
            <td style=\"width:400px;\">";
                // line 17
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllowPiwikArchivingToTriggerBrowser")), "html", null, true);
                echo "</td>
            <td style=\"width:220px;\">
                <fieldset>
                    <input id=\"enableBrowserTriggerArchiving-yes\" type=\"radio\" value=\"1\" name=\"enableBrowserTriggerArchiving\"";
                // line 20
                if (($this->getContext($context, "enableBrowserTriggerArchiving") == 1)) {
                    echo " checked=\"checked\"";
                }
                echo " />
                    <label for=\"enableBrowserTriggerArchiving-yes\">";
                // line 21
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "</label><br/>
                    <span class=\"form-description\">";
                // line 22
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
                echo "</span>
                    <br/><br/>

                    <input id=\"enableBrowserTriggerArchiving-no\" type=\"radio\" value=\"0\" name=\"enableBrowserTriggerArchiving\"";
                // line 25
                if (($this->getContext($context, "enableBrowserTriggerArchiving") == 0)) {
                    echo " checked=\"checked\"";
                }
                echo " />
                    <label for=\"enableBrowserTriggerArchiving-no\">";
                // line 26
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "</label><br/>
                    <span class=\"form-description\">";
                // line 27
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingTriggerDescription", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
                echo "</span>
                </fieldset>
            <td>
                ";
                // line 30
                ob_start();
                // line 31
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ArchivingInlineHelp")), "html", null, true);
                echo "
                    <br/>
                    ";
                // line 33
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SeeTheOfficialDocumentationForMoreInformation", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/docs/setup-auto-archiving/' target='_blank'>", "</a>"));
                echo "
                ";
                $context["browserArchivingHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 35
                echo "                ";
                echo $context["piwik"]->getinlineHelp($this->getContext($context, "browserArchivingHelp"));
                echo "
            </td>
        </tr>
    ";
            } else {
                // line 39
                echo "        <tr>
            <td style=\"width:400px;\">";
                // line 40
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllowPiwikArchivingToTriggerBrowser")), "html", null, true);
                echo "</td>
            <td style=\"width:220px;\">
                <input id=\"enableBrowserTriggerArchiving-disabled\" type=\"radio\" checked=\"checked\" disabled=\"disabled\" />
                <label for=\"enableBrowserTriggerArchiving-disabled\">";
                // line 43
                if (($this->getContext($context, "enableBrowserTriggerArchiving") == 1)) {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                }
                echo "</label><br/>
            </td>
        </tr>
    ";
            }
            // line 47
            echo "
    <tr>
        <td width=\"400px\">
            <label for=\"todayArchiveTimeToLive\">
                ";
            // line 51
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsContainingTodayWillBeProcessedAtMostEvery")), "html", null, true);
            echo "
            </label>
        </td>
        <td>
            ";
            // line 55
            ob_start();
            // line 56
            echo "            <input size='3' value='";
            echo twig_escape_filter($this->env, $this->getContext($context, "todayArchiveTimeToLive"), "html", null, true);
            echo "' id='todayArchiveTimeToLive' ";
            if ((!$this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
                echo "disabled=\"disabled\"";
            }
            echo "/>
            ";
            $context["timeOutInput"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 58
            echo "
            ";
            // line 59
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NSeconds", $this->getContext($context, "timeOutInput")));
            echo "
        </td>

        ";
            // line 62
            if ($this->getContext($context, "isGeneralSettingsAdminEnabled")) {
                // line 63
                echo "            <td width='450px'>
                ";
                // line 64
                ob_start();
                // line 65
                echo "                    ";
                if ($this->getContext($context, "showWarningCron")) {
                    // line 66
                    echo "                        <strong>
                            ";
                    // line 67
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewReportsWillBeProcessedByCron")), "html", null, true);
                    echo "<br/>
                            ";
                    // line 68
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ReportsWillBeProcessedAtMostEveryHour")), "html", null, true);
                    echo "
                            ";
                    // line 69
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_IfArchivingIsFastYouCanSetupCronRunMoreOften")), "html", null, true);
                    echo "<br/>
                        </strong>
                    ";
                }
                // line 72
                echo "                    ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmallTrafficYouCanLeaveDefault", 10)), "html", null, true);
                echo "
                    <br/>
                    ";
                // line 74
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MediumToHighTrafficItIsRecommendedTo", 1800, 3600)), "html", null, true);
                echo "
                ";
                $context["archiveTodayTTLHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 76
                echo "                ";
                echo $context["piwik"]->getinlineHelp($this->getContext($context, "archiveTodayTTLHelp"));
                echo "
            </td>
        ";
            }
            // line 79
            echo "    </tr>

    ";
            // line 81
            if ($this->getContext($context, "isGeneralSettingsAdminEnabled")) {
                // line 82
                echo "        <tr>
            <td style=\"width:400px;\">";
                // line 83
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CheckReleaseGetVersion")), "html", null, true);
                echo "</td>
            <td style=\"width:220px;\">
                <fieldset>
                    <input id=\"enableBetaReleaseCheck-0\" type=\"radio\" value=\"0\" name=\"enableBetaReleaseCheck\"";
                // line 86
                if (($this->getContext($context, "enableBetaReleaseCheck") == 0)) {
                    echo " checked=\"checked\"";
                }
                echo " />
                    <label for=\"enableBetaReleaseCheck-0\">";
                // line 87
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LatestStableRelease")), "html", null, true);
                echo "</label><br/>
                    <span class=\"form-description\">";
                // line 88
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Recommended")), "html", null, true);
                echo "</span>
                    <br/><br/>

                    <input id=\"enableBetaReleaseCheck-1\" type=\"radio\" value=\"1\" name=\"enableBetaReleaseCheck\"";
                // line 91
                if (($this->getContext($context, "enableBetaReleaseCheck") == 1)) {
                    echo " checked=\"checked\"";
                }
                echo " />
                    <label for=\"enableBetaReleaseCheck-1\">";
                // line 92
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LatestBetaRelease")), "html", null, true);
                echo "</label><br/>
                    <span class=\"form-description\">";
                // line 93
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ForBetaTestersOnly")), "html", null, true);
                echo "</span>
                </fieldset>
            <td>
                ";
                // line 96
                ob_start();
                // line 97
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_DevelopmentProcess", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/participate/development-process/' target='_blank'>", "</a>"));
                echo "
                    <br/>
                    ";
                // line 99
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_StableReleases", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/participate/user-feedback/' target='_blank'>", "</a>"));
                echo "
                ";
                $context["checkReleaseHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 101
                echo "                ";
                echo $context["piwik"]->getinlineHelp($this->getContext($context, "checkReleaseHelp"));
                echo "
            </td>
        </tr>
    ";
            }
            // line 105
            echo "    </table>

    ";
            // line 107
            if ($this->getContext($context, "isGeneralSettingsAdminEnabled")) {
                // line 108
                echo "        <h2>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_EmailServerSettings")), "html", null, true);
                echo "</h2>
        <div id='emailSettings'>
            <table class=\"adminTable\" style='width:600px;'>
                <tr>
                    <td>";
                // line 112
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_UseSMTPServerForEmail")), "html", null, true);
                echo "<br/>
                        <span class=\"form-description\">";
                // line 113
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SelectYesIfYouWantToSendEmailsViaServer")), "html", null, true);
                echo "</span>
                    </td>
                    <td style=\"width:200px;\">
                        <input id=\"mailUseSmtp-1\" type=\"radio\" name=\"mailUseSmtp\" value=\"1\" ";
                // line 116
                if (($this->getAttribute($this->getContext($context, "mail"), "transport") == "smtp")) {
                    echo " checked ";
                }
                echo "/>
                        <label for=\"mailUseSmtp-1\">";
                // line 117
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
                echo "</label>
                        <input class=\"indented-radio-button\" id=\"mailUseSmtp-0\" type=\"radio\" name=\"mailUseSmtp\" value=\"0\"
                               ";
                // line 119
                if (($this->getAttribute($this->getContext($context, "mail"), "transport") == "")) {
                    echo " checked ";
                }
                echo "/>
                        <label for=\"mailUseSmtp-0\">";
                // line 120
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
                echo "</label>
                    </td>
                </tr>
            </table>
        </div>
        <div id='smtpSettings'>
            <table class=\"adminTable\" style='width:550px;'>
                <tr>
                    <td><label for=\"mailHost\">";
                // line 128
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpServerAddress")), "html", null, true);
                echo "</label></td>
                    <td style=\"width:200px;\"><input type=\"text\" id=\"mailHost\" value=\"";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mail"), "host"), "html", null, true);
                echo "\"></td>
                </tr>
                <tr>
                    <td><label for=\"mailPort\">";
                // line 132
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPort")), "html", null, true);
                echo "</label><br/>
                        <span class=\"form-description\">";
                // line 133
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OptionalSmtpPort")), "html", null, true);
                echo "</span></td>
                    <td><input type=\"text\" id=\"mailPort\" value=\"";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mail"), "port"), "html", null, true);
                echo "\"></td>
                </tr>
                <tr>
                    <td><label for=\"mailType\">";
                // line 137
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AuthenticationMethodSmtp")), "html", null, true);
                echo "</label><br/>
                        <span class=\"form-description\">";
                // line 138
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyUsedIfUserPwdIsSet")), "html", null, true);
                echo "</span>
                    </td>
                    <td>
                        <select id=\"mailType\">
                            <option value=\"\" ";
                // line 142
                if (($this->getAttribute($this->getContext($context, "mail"), "type") == "")) {
                    echo " selected=\"selected\" ";
                }
                echo "></option>
                            <option id=\"plain\" ";
                // line 143
                if (($this->getAttribute($this->getContext($context, "mail"), "type") == "Plain")) {
                    echo " selected=\"selected\" ";
                }
                echo " value=\"Plain\">Plain</option>
                            <option id=\"login\" ";
                // line 144
                if (($this->getAttribute($this->getContext($context, "mail"), "type") == "Login")) {
                    echo " selected=\"selected\" ";
                }
                echo " value=\"Login\"> Login</option>
                            <option id=\"cram-md5\" ";
                // line 145
                if (($this->getAttribute($this->getContext($context, "mail"), "type") == "Crammd5")) {
                    echo " selected=\"selected\" ";
                }
                echo " value=\"Crammd5\"> Crammd5</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for=\"mailUsername\">";
                // line 150
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpUsername")), "html", null, true);
                echo "</label><br/>
                        <span class=\"form-description\">";
                // line 151
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequired")), "html", null, true);
                echo "</span></td>
                    <td>
                        <input type=\"text\" id=\"mailUsername\" value=\"";
                // line 153
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mail"), "username"), "html", null, true);
                echo "\"/>
                    </td>
                </tr>
                <tr>
                    <td><label for=\"mailPassword\">";
                // line 157
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpPassword")), "html", null, true);
                echo "</label><br/>
                    <span class=\"form-description\">";
                // line 158
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OnlyEnterIfRequiredPassword")), "html", null, true);
                echo "<br/>
                        ";
                // line 159
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_WarningPasswordStored", "<strong>", "</strong>"));
                echo "</span>
                    </td>
                    <td>
                        <input type=\"password\" id=\"mailPassword\" value=\"";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "mail"), "password"), "html", null, true);
                echo "\"/>
                    </td>
                </tr>
                <tr>
                    <td><label for=\"mailEncryption\">";
                // line 166
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_SmtpEncryption")), "html", null, true);
                echo "</label><br/>
                        <span class=\"form-description\">";
                // line 167
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_EncryptedSmtpTransport")), "html", null, true);
                echo "</span></td>
                    <td>
                        <select id=\"mailEncryption\">
                            <option value=\"\" ";
                // line 170
                if (($this->getAttribute($this->getContext($context, "mail"), "encryption") == "")) {
                    echo " selected=\"selected\" ";
                }
                echo "></option>
                            <option id=\"ssl\" ";
                // line 171
                if (($this->getAttribute($this->getContext($context, "mail"), "encryption") == "ssl")) {
                    echo " selected=\"selected\" ";
                }
                echo " value=\"ssl\">SSL</option>
                            <option id=\"tls\" ";
                // line 172
                if (($this->getAttribute($this->getContext($context, "mail"), "encryption") == "tls")) {
                    echo " selected=\"selected\" ";
                }
                echo " value=\"tls\">TLS</option>
                        </select>
                    </td>
                </tr>
            </table>
        </div>
    ";
            }
            // line 179
            echo "
    <h2>";
            // line 180
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_BrandingSettings")), "html", null, true);
            echo "</h2>
    <div id='brandSettings'>
        ";
            // line 182
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoHelpText")), "html", null, true);
            echo "
        <table class=\"adminTable\" style=\"width:900px;\">
            <tr>
                <td style=\"width:200px;\">";
            // line 185
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_UseCustomLogo")), "html", null, true);
            echo "</td>
                <td style=\"width:200px;\">
                    <input id=\"useCustomLogo-1\" type=\"radio\" name=\"useCustomLogo\" value=\"1\" ";
            // line 187
            if (($this->getAttribute($this->getContext($context, "branding"), "use_custom_logo") == 1)) {
                echo " checked ";
            }
            echo "/>
                    <label for=\"useCustomLogo-1\">";
            // line 188
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "</label>
                    <input class=\"indented-radio-button\" id=\"useCustomLogo-0\" type=\"radio\" name=\"useCustomLogo\" value=\"0\" ";
            // line 189
            if (($this->getAttribute($this->getContext($context, "branding"), "use_custom_logo") == 0)) {
                echo " checked ";
            }
            echo " />
                    <label for=\"useCustomLogo-0\" class>";
            // line 190
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "</label>
                </td>
                <td id=\"inlineHelpCustomLogo\">
                    ";
            // line 193
            ob_start();
            echo "\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_GiveUsYourFeedback")), "html", null, true);
            echo "\"";
            $context["giveUsFeedbackText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 194
            echo "                    ";
            ob_start();
            // line 195
            echo "                    ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_CustomLogoFeedbackInfo", $this->getContext($context, "giveUsFeedbackText"), "<a href='?module=CorePluginsAdmin&action=plugins' target='_blank'>", "</a>"));
            echo "
                    ";
            $context["customLogoHelp"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 197
            echo "                    ";
            echo $context["piwik"]->getinlineHelp($this->getContext($context, "customLogoHelp"));
            echo "
                </td>
            </tr>
        </table>
    </div>
    <div id='logoSettings'>
        <form id=\"logoUploadForm\" method=\"post\" enctype=\"multipart/form-data\" action=\"index.php?module=CoreAdminHome&format=json&action=uploadCustomLogo\">
            <table class=\"adminTable\" style='width:550px;'>
                <tr>
                    ";
            // line 206
            if ($this->getContext($context, "logosWriteable")) {
                // line 207
                echo "                        <td>
                            <label for=\"customLogo\">";
                // line 208
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUpload")), "html", null, true);
                echo ":<br/>
                                <span class=\"form-description\">";
                // line 209
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoUploadHelp", "JPG / PNG / GIF", 110)), "html", null, true);
                echo "</span>
                            </label>
                        </td>
                        <td style=\"width:200px;\">
                            <input name=\"customLogo\" type=\"file\" id=\"customLogo\"/>
                            <img src=\"";
                // line 214
                echo twig_escape_filter($this->env, $this->getContext($context, "pathUserLogo"), "html", null, true);
                echo "?r=";
                echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
                echo "\" id=\"currentLogo\" height=\"150\"/>
                        </td>
                    ";
            } else {
                // line 217
                echo "                        <td>
                            <div style=\"display:inline-block;margin-top:10px;\" id=\"CoreAdminHome_LogoNotWriteable\">
                                ";
                // line 219
                echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_LogoNotWriteableInstruction", (("<strong>" . $this->getContext($context, "pathUserLogoDirectory")) . "</strong><br/>"), ((((($this->getContext($context, "pathUserLogo") . ", ") . $this->getContext($context, "pathUserLogoSmall")) . ", ") . $this->getContext($context, "pathUserLogoSVG")) . ""))), array("placeAt" => "#CoreAdminHome_LogoNotWriteable", "noclear" => true, "context" => "warning", "raw" => true)));
                // line 221
                echo "


                            </div>
                        </td>
                    ";
            }
            // line 227
            echo "                </tr>
            </table>
        </form>
    </div>

    <div class=\"ui-confirm\" id=\"confirmTrustedHostChange\">
        <h2>";
            // line 233
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostConfirm")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 234
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 235
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <h2 id=\"trustedHostsSection\">";
            // line 237
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_TrustedHostSettings")), "html", null, true);
            echo "</h2>
    <div id='trustedHostSettings'>

        ";
            // line 240
            $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
            // line 241
            echo "

        ";
            // line 243
            if ((!$this->getContext($context, "isGeneralSettingsAdminEnabled"))) {
                // line 244
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PiwikIsInstalledAt")), "html", null, true);
                echo ": ";
                echo twig_escape_filter($this->env, twig_join_filter($this->getContext($context, "trustedHosts"), ", "), "html", null, true);
                echo "
        ";
            } else {
                // line 246
                echo "            ";
                if (((twig_length_filter($this->env, $this->getContext($context, "trustedHosts")) == 1) && ((!array_key_exists("isValidHost", $context)) || $this->getContext($context, "isValidHost")))) {
                    // line 247
                    echo "                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PiwikIsInstalledAt")), "html", null, true);
                    echo ":&nbsp;&nbsp;
                <input name=\"trusted_host\" type=\"text\" value=\"";
                    // line 248
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "trustedHosts"), 0, array(), "array"), "html", null, true);
                    echo "\"/>
            ";
                } else {
                    // line 250
                    echo "                <p>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_PiwikIsInstalledAt")), "html", null, true);
                    echo ":</p>
                <table class=\"adminTable\">
                    <tr>
                        <th style=\"width:250px;\">";
                    // line 253
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_ValidPiwikHostname")), "html", null, true);
                    echo "</th>
                        <th style=\"width:10px;\">&nbsp;</th>
                    </tr>
                    ";
                    // line 256
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "trustedHosts"));
                    foreach ($context['_seq'] as $context["hostIdx"] => $context["host"]) {
                        // line 257
                        echo "                        <tr>
                            <td><input name=\"trusted_host\" type=\"text\" value=\"";
                        // line 258
                        echo twig_escape_filter($this->env, $this->getContext($context, "host"), "html", null, true);
                        echo "\"/></td>
                            <td>
                                <a href=\"#\" class=\"remove-trusted-host\">x</a>
                            </td>
                        </tr>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['hostIdx'], $context['host'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 264
                    echo "                </table>
                <div class=\"adminTable add-trusted-host-container\">
                    <a href=\"#\" class=\"add-trusted-host\"><em>";
                    // line 266
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
                    echo "</em></a>
                </div>
            ";
                }
                // line 269
                echo "        ";
            }
            // line 270
            echo "    </div>

    <input type=\"submit\" value=\"";
            // line 272
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
            echo "\" id=\"generalSettingsSubmit\" class=\"submit\"/>
    <br/>
    <br/>

    ";
            // line 276
            if ($this->getContext($context, "isDataPurgeSettingsEnabled")) {
                // line 277
                echo "    ";
                ob_start();
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings")), "html", null, true);
                $context["clickDeleteLogSettings"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 278
                echo "    <h2>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataSettings")), "html", null, true);
                echo "</h2>
    <p>
        ";
                // line 280
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_DeleteDataDescription2")), "html", null, true);
                echo "
        <br/>
        <a href='";
                // line 282
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "PrivacyManager", "action" => "privacySettings"))), "html", null, true);
                echo "#deleteLogsAnchor'>
            ";
                // line 283
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("PrivacyManager_ClickHereSettings", (("'" . $this->getContext($context, "clickDeleteLogSettings")) . "'"))), "html", null, true);
                echo "
        </a>
    </p>
    ";
            }
        }
        // line 288
        echo "<h2>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutForYourVisitors")), "html", null, true);
        echo "</h2>

<p>";
        // line 290
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanation")), "html", null, true);
        echo "
    ";
        // line 291
        ob_start();
        echo twig_escape_filter($this->env, $this->getContext($context, "piwikUrl"), "html", null, true);
        echo "index.php?module=CoreAdminHome&action=optOut&language=";
        echo twig_escape_filter($this->env, $this->getContext($context, "language"), "html", null, true);
        $context["optOutUrl"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 292
        echo "    ";
        ob_start();
        // line 293
        echo "        <iframe style=\"border: 0; height: 200px; width: 600px;\" src=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "optOutUrl"), "html", null, true);
        echo "\"></iframe>
    ";
        $context["iframeOptOut"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 295
        echo "    <code>";
        echo twig_escape_filter($this->env, $this->getContext($context, "iframeOptOut"));
        echo "</code>
    <br/>
    ";
        // line 297
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreAdminHome_OptOutExplanationBis", (("<a href='" . $this->getContext($context, "optOutUrl")) . "' target='_blank'>"), "</a>"));
        echo "
</p>

";
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/generalSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  756 => 297,  750 => 295,  744 => 293,  741 => 292,  735 => 291,  731 => 290,  725 => 288,  717 => 283,  713 => 282,  706 => 280,  700 => 278,  695 => 277,  693 => 276,  686 => 272,  682 => 270,  679 => 269,  673 => 266,  669 => 264,  657 => 258,  654 => 257,  650 => 256,  644 => 253,  637 => 250,  632 => 248,  627 => 247,  624 => 246,  616 => 244,  614 => 243,  610 => 241,  608 => 240,  602 => 237,  597 => 235,  593 => 234,  589 => 233,  581 => 227,  573 => 221,  571 => 219,  567 => 217,  559 => 214,  551 => 209,  547 => 208,  544 => 207,  542 => 206,  529 => 197,  523 => 195,  520 => 194,  514 => 193,  508 => 190,  502 => 189,  498 => 188,  492 => 187,  487 => 185,  481 => 182,  476 => 180,  473 => 179,  461 => 172,  455 => 171,  449 => 170,  443 => 167,  439 => 166,  432 => 162,  426 => 159,  422 => 158,  418 => 157,  411 => 153,  406 => 151,  402 => 150,  392 => 145,  386 => 144,  380 => 143,  374 => 142,  367 => 138,  363 => 137,  357 => 134,  353 => 133,  349 => 132,  343 => 129,  339 => 128,  328 => 120,  322 => 119,  317 => 117,  311 => 116,  305 => 113,  301 => 112,  293 => 108,  291 => 107,  287 => 105,  279 => 101,  274 => 99,  268 => 97,  266 => 96,  260 => 93,  256 => 92,  250 => 91,  244 => 88,  240 => 87,  234 => 86,  228 => 83,  225 => 82,  223 => 81,  219 => 79,  212 => 76,  207 => 74,  201 => 72,  195 => 69,  191 => 68,  187 => 67,  184 => 66,  181 => 65,  179 => 64,  176 => 63,  174 => 62,  168 => 59,  165 => 58,  155 => 56,  153 => 55,  146 => 51,  140 => 47,  129 => 43,  123 => 40,  120 => 39,  112 => 35,  107 => 33,  101 => 31,  99 => 30,  93 => 27,  89 => 26,  83 => 25,  77 => 22,  73 => 21,  67 => 20,  61 => 17,  58 => 16,  56 => 15,  50 => 12,  45 => 10,  40 => 9,  38 => 8,  35 => 7,  33 => 6,  31 => 5,  28 => 3,);
    }
}
