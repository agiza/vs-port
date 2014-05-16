<?php

/* @UsersManager/userSettings.twig */
class __TwigTemplate_110e6110ccb894602953635f83b0171605b63fef437c6cb4085467f4021b720d extends Twig_Template
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
        echo "<h2>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MenuUserSettings")), "html", null, true);
        echo "</h2>

<br/>

<div class=\"ui-confirm\" id=\"confirmPasswordChange\">
    <h2>";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangePasswordConfirm")), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "\"/>
</div>

<table id='userSettingsTable' class=\"adminTable\">
    <tr>
        <td><label for=\"username\">";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
        echo " </label></td>
        <td>
            <input size=\"25\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "userLogin"), "html", null, true);
        echo "\" id=\"username\" disabled=\"disabled\"/>
            <span class='form-description'>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourUsernameCannotBeChanged")), "html", null, true);
        echo "</span>
        </td>
    </tr>

    <tr>
        <td><label for=\"alias\">";
        // line 24
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo " </label></td>
        <td><input size=\"25\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "userAlias"), "html", null, true);
        echo "\" id=\"alias\" /></td>
    </tr>
    <tr>
        <td><label for=\"email\">";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
        echo " </label></td>
        <td><input size=\"25\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "userEmail"), "html", null, true);
        echo "\" id=\"email\"/></td>
    </tr>
    <tr>
        <td>";
        // line 32
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportToLoadByDefault")), "html", null, true);
        echo "</td>
        <td>
            <fieldset>
                <input id=\"defaultReportRadioAll\" type=\"radio\" value=\"MultiSites\"
                      name=\"defaultReport\"";
        // line 36
        if (($this->getContext($context, "defaultReport") == "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
                <label for=\"defaultReportRadioAll\">";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html", null, true);
        echo "</label><br/>
                <input id=\"defaultReportSpecific\" type=\"radio\" value=\"1\"
                       name=\"defaultReport\"";
        // line 39
        if (($this->getContext($context, "defaultReport") != "MultiSites")) {
            echo " checked=\"checked\"";
        }
        echo " />
                <label for=\"defaultReportSpecific\" style=\"padding-right:12px;\">";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DashboardForASpecificWebsite")), "html", null, true);
        echo "</label>
                ";
        // line 41
        if (($this->getContext($context, "defaultReport") == "MultiSites")) {
            // line 42
            echo "                    ";
            $context["defaultReportIdSite"] = 1;
            // line 43
            echo "                ";
        } else {
            // line 44
            echo "                    ";
            $context["defaultReportIdSite"] = $this->getContext($context, "defaultReport");
            // line 45
            echo "                ";
        }
        // line 46
        echo "                ";
        $this->env->loadTemplate("@CoreHome/_siteSelect.twig")->display(array_merge($context, array("siteName" => $this->getContext($context, "defaultReportSiteName"), "idSite" => $this->getContext($context, "defaultReportIdSite"), "switchSiteOnSelect" => false, "showAllSitesItem" => false, "showSelectedSite" => true, "siteSelectorId" => "defaultReportSiteSelector")));
        // line 54
        echo "            </fieldset>
        </td>
    </tr>
    <tr>
        <td>";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ReportDateToLoadByDefault")), "html", null, true);
        echo "</td>
        <td>
            <fieldset>
                ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "availableDefaultDates"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["value"] => $context["description"]) {
            // line 62
            echo "                    <input id=\"defaultDate-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\" type=\"radio\"";
            if (($this->getContext($context, "defaultDate") == $this->getContext($context, "value"))) {
                echo " checked=\"checked\"";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
            echo "\" name=\"defaultDate\"/>
                    <label for=\"defaultDate-";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "description"), "html", null, true);
            echo "</label>
                    <br/>
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            </fieldset>
        </td>
    </tr>

    ";
        // line 70
        if ((array_key_exists("isValidHost", $context) && $this->getContext($context, "isValidHost"))) {
            // line 71
            echo "        <tr>
            <td><label for=\"email\">";
            // line 72
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo " </label></td>
            <td><input size=\"25\" value=\"\" autocomplete=\"off\" id=\"password\" type=\"password\"/>
                <span class='form-description'>";
            // line 74
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_IfYouWouldLikeToChangeThePasswordTypeANewOne")), "html", null, true);
            echo "</span>
                <br/><br/><input size=\"25\" value=\"\" autocomplete=\"off\" id=\"passwordBis\" type=\"password\"/>
                <span class='form-description'> ";
            // line 76
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TypeYourPasswordAgain")), "html", null, true);
            echo "</span>
            </td>
        </tr>
    ";
        }
        // line 80
        echo "</table>
";
        // line 81
        if (((!array_key_exists("isValidHost", $context)) || (!$this->getContext($context, "isValidHost")))) {
            // line 82
            echo "    <div id=\"injectedHostCannotChangePwd\">
        ";
            // line 83
            ob_start();
            // line 84
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_InjectedHostCannotChangePwd", $this->getContext($context, "invalidHost"))), "html", null, true);
            echo "
        &nbsp;";
            // line 85
            if ((!$this->getContext($context, "isSuperUser"))) {
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_EmailYourAdministrator", $this->getContext($context, "invalidHostMailLinkStart"), "</a>"));
            }
            // line 86
            echo "        ";
            $context["injectedHostCannotChangePwd"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 87
            echo "        ";
            echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array($this->getContext($context, "injectedHostCannotChangePwd"), array("raw" => true, "context" => "error", "placeat" => "#injectedHostCannotChangePwd", "noclear" => true)));
            echo "
    </div>
    <br/>
";
        }
        // line 91
        echo "
";
        // line 92
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 93
        echo $context["ajax"]->geterrorDiv("ajaxErrorUserSettings");
        echo "
";
        // line 94
        echo $context["ajax"]->getloadingDiv("ajaxLoadingUserSettings");
        echo "
<input type=\"submit\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
        echo "\" id=\"userSettingsSubmit\" class=\"submit\"/>

<br/><br/>

<h2 id=\"excludeCookie\">";
        // line 99
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExcludeVisitsViaCookie")), "html", null, true);
        echo "</h2>
<p>
";
        // line 101
        if ($this->getContext($context, "ignoreCookieSet")) {
            // line 102
            echo "   ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreIgnoredOnDomain", "<strong>", $this->getContext($context, "piwikHost"), "</strong>"));
            echo "
";
        } else {
            // line 104
            echo "   ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_YourVisitsAreNotIgnored", "<strong>", "</strong>"));
            echo "
";
        }
        // line 106
        echo "</p>
<span style=\"margin-left:20px;\">
<a href='";
        // line 108
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("token_auth" => $this->getContext($context, "token_auth"), "action" => "setIgnoreCookie"))), "html", null, true);
        echo "#excludeCookie'>&rsaquo; ";
        if ($this->getContext($context, "ignoreCookieSet")) {
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToDeleteTheCookie")), "html", null, true);
            echo "
    ";
        } else {
            // line 109
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ClickHereToSetTheCookieOnDomain", $this->getContext($context, "piwikHost"))), "html", null, true);
        }
        // line 110
        echo "    <br/>
</a></span>

<br/><br/>
";
        // line 114
        if ($this->getContext($context, "isSuperUser")) {
            // line 115
            echo "    <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MenuAnonymousUserSettings")), "html", null, true);
            echo "</h2>
    ";
            // line 116
            if ((twig_length_filter($this->env, $this->getContext($context, "anonymousSites")) == 0)) {
                // line 117
                echo "        <h3 class='form-description'><strong>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoteNoAnonymousUserAccessSettingsWontBeUsed2")), "html", null, true);
                echo "</strong></h3>
        <br/>
    ";
            } else {
                // line 120
                echo "        <br/>
        ";
                // line 121
                echo $context["ajax"]->geterrorDiv("ajaxErrorAnonymousUserSettings");
                echo "
        ";
                // line 122
                echo $context["ajax"]->getloadingDiv("ajaxLoadingAnonymousUserSettings");
                echo "
        <table id='anonymousUserSettingsTable' class=\"adminTable\" style='width:850px;'>
            <tr>
                <td style=\"width:400px;\">";
                // line 125
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_WhenUsersAreNotLoggedInAndVisitPiwikTheyShouldAccess")), "html", null, true);
                echo "</td>
                <td>
                    <fieldset>
                        <input id=\"anonymousDefaultReport-login\" type=\"radio\" value=\"Login\"
                               name=\"anonymousDefaultReport\"";
                // line 129
                if (($this->getContext($context, "anonymousDefaultReport") == $this->getContext($context, "loginModule"))) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-login\">";
                // line 130
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_TheLoginScreen")), "html", null, true);
                echo "</label><br/>
                        <input id=\"anonymousDefaultReport-multisites\" ";
                // line 131
                if (twig_test_empty($this->getContext($context, "anonymousSites"))) {
                    echo "disabled=\"disabled\" ";
                }
                echo "type=\"radio\" value=\"MultiSites\"
                               name=\"anonymousDefaultReport\"";
                // line 132
                if (($this->getContext($context, "anonymousDefaultReport") == "MultiSites")) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-multisites\">";
                // line 133
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AllWebsitesDashboard")), "html", null, true);
                echo "</label><br/>

                        <input id=\"anonymousDefaultReport-specific\" ";
                // line 135
                if (twig_test_empty($this->getContext($context, "anonymousSites"))) {
                    echo "disabled=\"disabled\" ";
                }
                echo "type=\"radio\" value=\"1\"
                               name=\"anonymousDefaultReport\"";
                // line 136
                if (($this->getContext($context, "anonymousDefaultReport") > 0)) {
                    echo " checked=\"checked\"";
                }
                echo " />
                        <label for=\"anonymousDefaultReport-specific\">";
                // line 137
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DashboardForASpecificWebsite")), "html", null, true);
                echo "</label>
                        ";
                // line 138
                if ((!twig_test_empty($this->getContext($context, "anonymousSites")))) {
                    // line 139
                    echo "                            <select id=\"anonymousDefaultReportWebsite\">
                                ";
                    // line 140
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "anonymousSites"));
                    foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                        // line 141
                        echo "                                    <option value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "info"), "idsite"), "html", null, true);
                        echo "\" ";
                        if (($this->getContext($context, "anonymousDefaultReport") == $this->getAttribute($this->getContext($context, "info"), "idsite"))) {
                            echo " selected=\"selected\"";
                        }
                        echo ">";
                        echo $this->getAttribute($this->getContext($context, "info"), "name");
                        echo "</option>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                            </select>
                        ";
                }
                // line 145
                echo "                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>";
                // line 149
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ForAnonymousUsersReportDateToLoadByDefault")), "html", null, true);
                echo "</td>
                <td>
                    <fieldset>
                        ";
                // line 152
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "availableDefaultDates"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["value"] => $context["description"]) {
                    // line 153
                    echo "                            <input id=\"anonymousDefaultDate-";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "\" type=\"radio\" ";
                    if (($this->getContext($context, "anonymousDefaultDate") == $this->getContext($context, "value"))) {
                        echo "checked=\"checked\" ";
                    }
                    echo "value=\"";
                    echo twig_escape_filter($this->env, $this->getContext($context, "value"), "html", null, true);
                    echo "\"
                                   name=\"anonymousDefaultDate\"/>
                            <label for=\"anonymousDefaultDate-";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "loop"), "index"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getContext($context, "description"), "html", null, true);
                    echo "</label>
                            <br/>
                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['value'], $context['description'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 158
                echo "                    </fieldset>
                </td>
            </tr>

        </table>
        <input type=\"submit\" value=\"";
                // line 163
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
                echo "\" id=\"anonymousUserSettingsSubmit\" class=\"submit\"/>
    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/userSettings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  489 => 163,  482 => 158,  463 => 155,  451 => 153,  434 => 152,  428 => 149,  422 => 145,  418 => 143,  403 => 141,  399 => 140,  396 => 139,  394 => 138,  390 => 137,  384 => 136,  378 => 135,  373 => 133,  367 => 132,  361 => 131,  357 => 130,  351 => 129,  344 => 125,  338 => 122,  334 => 121,  331 => 120,  324 => 117,  322 => 116,  317 => 115,  315 => 114,  309 => 110,  306 => 109,  298 => 108,  294 => 106,  288 => 104,  282 => 102,  280 => 101,  275 => 99,  268 => 95,  264 => 94,  260 => 93,  258 => 92,  255 => 91,  247 => 87,  244 => 86,  240 => 85,  235 => 84,  233 => 83,  230 => 82,  228 => 81,  225 => 80,  218 => 76,  213 => 74,  208 => 72,  205 => 71,  203 => 70,  197 => 66,  178 => 63,  167 => 62,  150 => 61,  144 => 58,  138 => 54,  135 => 46,  132 => 45,  129 => 44,  126 => 43,  123 => 42,  121 => 41,  117 => 40,  111 => 39,  106 => 37,  100 => 36,  93 => 32,  87 => 29,  83 => 28,  77 => 25,  73 => 24,  65 => 19,  61 => 18,  56 => 16,  48 => 11,  44 => 10,  40 => 9,  31 => 4,  28 => 3,);
    }
}