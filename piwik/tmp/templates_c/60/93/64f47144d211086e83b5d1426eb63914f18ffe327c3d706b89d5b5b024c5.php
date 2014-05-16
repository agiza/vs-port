<?php

/* @UsersManager/index.twig */
class __TwigTemplate_609364f47144d211086e83b5d1426eb63914f18ffe327c3d706b89d5b5b024c5 extends Twig_Template
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
        echo "
<h2>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ManageAccess")), "html", null, true);
        echo "</h2>
<div id=\"sites\" class=\"usersManager\">
    <section class=\"sites_selector_container\">
        <p>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_MainDescription")), "html", null, true);
        echo "</p>

        <div class=\"sites_selector_title\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("SitesManager_Sites")), "html", null, true);
        echo ":</div>

        ";
        // line 12
        ob_start();
        // line 13
        echo "            <strong>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ApplyToAllWebsites")), "html", null, true);
        echo "</strong>
        ";
        $context["applyAllSitesText"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 15
        echo "        ";
        $this->env->loadTemplate("@CoreHome/_siteSelect.twig")->display(array_merge($context, array("siteName" => $this->getContext($context, "defaultReportSiteName"), "idSite" => $this->getContext($context, "idSiteSelected"), "allSitesItemText" => $this->getContext($context, "applyAllSitesText"), "allWebsitesLinkLocation" => "top", "siteSelectorId" => "usersManagerSiteSelect", "switchSiteOnSelect" => false)));
        // line 23
        echo "    </section>
</div>

";
        // line 26
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 27
        echo $context["ajax"]->geterrorDiv();
        echo "
";
        // line 28
        echo $context["ajax"]->getloadingDiv();
        echo "

<div class=\"entityContainer\" style=\"width:600px;\">
    ";
        // line 31
        if ($this->getContext($context, "anonymousHasViewAccess")) {
            // line 32
            echo "        <div style=\"display:inline-block;margin-top:10px;\" id=\"usersManagerAnonymousUserHasViewAccess\">
            ";
            // line 33
            echo call_user_func_array($this->env->getFilter('notification')->getCallable(), array(twig_join_filter(array(0 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess", "'anonymous'", "'view'")), 1 => call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AnonymousUserHasViewAccess2"))), " "), array("placeAt" => "#usersManagerAnonymousUserHasViewAccess", "noclear" => true)));
            echo "
        </div>
    ";
        }
        // line 36
        echo "    <table class=\"entityTable dataTable\" id=\"access\" style=\"display:inline-table;width:500px;\">
        <thead>
        <tr>
            <th class='first'>";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
        echo "</th>
            <th>";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
        echo "</th>
            <th>";
        // line 41
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivNone")), "html", null, true);
        echo "</th>
            <th>";
        // line 42
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivView")), "html", null, true);
        echo "</th>
            <th>";
        // line 43
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_PrivAdmin")), "html", null, true);
        echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
        // line 48
        $context["accesValid"] = ('' === $tmp = "<img src='plugins/UsersManager/images/ok.png' class='accessGranted' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 49
        echo "        ";
        $context["accesInvalid"] = ('' === $tmp = "<img src='plugins/UsersManager/images/no-access.png' class='updateAccess' />") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 50
        echo "        ";
        ob_start();
        echo "<span title=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ExceptionSuperUserAccess")), "html", null, true);
        echo "\">N/A</span>";
        $context["superUserAccess"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 51
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "usersAccessByWebsite"));
        foreach ($context['_seq'] as $context["login"] => $context["access"]) {
            // line 52
            echo "            <tr>
                <td id='login'>";
            // line 53
            echo twig_escape_filter($this->env, $this->getContext($context, "login"), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo $this->getAttribute($this->getContext($context, "usersAliasByLogin"), $this->getContext($context, "login"), array(), "array");
            echo "</td>
                <td id='noaccess'>
                    ";
            // line 56
            if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                // line 57
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "superUserAccess"), "html", null, true);
                echo "
                    ";
            } elseif ((($this->getContext($context, "access") == "noaccess") && ($this->getContext($context, "idSiteSelected") != "all"))) {
                // line 59
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesValid"), "html", null, true);
                echo "
                    ";
            } else {
                // line 61
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesInvalid"), "html", null, true);
                echo "
                    ";
            }
            // line 62
            echo "&nbsp;</td>
                <td id='view'>
                    ";
            // line 64
            if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                // line 65
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "superUserAccess"), "html", null, true);
                echo "
                    ";
            } elseif ((($this->getContext($context, "access") == "view") && ($this->getContext($context, "idSiteSelected") != "all"))) {
                // line 67
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesValid"), "html", null, true);
                echo "
                    ";
            } else {
                // line 69
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "accesInvalid"), "html", null, true);
                echo "
                    ";
            }
            // line 70
            echo "&nbsp;</td>
                <td id='admin'>
                    ";
            // line 72
            if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                // line 73
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getContext($context, "superUserAccess"), "html", null, true);
                echo "
                    ";
            } elseif (($this->getContext($context, "login") == "anonymous")) {
                // line 75
                echo "                        N/A
                    ";
            } else {
                // line 77
                echo "                        ";
                if ((($this->getContext($context, "access") == "admin") && ($this->getContext($context, "idSiteSelected") != "all"))) {
                    echo twig_escape_filter($this->env, $this->getContext($context, "accesValid"), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->getContext($context, "accesInvalid"), "html", null, true);
                }
                echo "&nbsp;
                    ";
            }
            // line 79
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['login'], $context['access'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "        </tbody>
    </table>
    <div id=\"accessUpdated\" style=\"vertical-align:top;\"></div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 88
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangeAllConfirm", "<span id='login'></span>"));
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

";
        // line 93
        if ($this->getContext($context, "userIsSuperUser")) {
            // line 94
            echo "    <div class=\"ui-confirm\" id=\"confirmUserRemove\">
        <h2></h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 96
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 97
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <div class=\"ui-confirm\" id=\"confirmPasswordChange\">
        <h2>";
            // line 100
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ChangePasswordConfirm")), "html", null, true);
            echo "</h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 101
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>
    <br/>
    <h2>";
            // line 105
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagement")), "html", null, true);
            echo "</h2>
    <p>";
            // line 106
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_UsersManagementMainDescription")), "html", null, true);
            echo "
        ";
            // line 107
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_ThereAreCurrentlyNRegisteredUsers", (("<b>" . $this->getContext($context, "usersCount")) . "</b>")));
            echo "</p>
    ";
            // line 108
            $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
            // line 109
            echo "    ";
            echo $context["ajax"]->geterrorDiv("ajaxErrorUsersManagement");
            echo "
    ";
            // line 110
            echo $context["ajax"]->getloadingDiv("ajaxLoadingUsersManagement");
            echo "
    <div class=\"entityContainer\" style=\"margin-bottom:50px;\">
        <table class=\"entityTable dataTable\" id=\"users\">
            <thead>
            <tr>
                <th>";
            // line 115
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "</th>
                <th>";
            // line 116
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "</th>
                <th>";
            // line 117
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Email")), "html", null, true);
            echo "</th>
                <th>";
            // line 118
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
                <th>token_auth</th>
                <th>";
            // line 120
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
            echo "</th>
                <th>";
            // line 121
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
            echo "</th>
            </tr>
            </thead>

            <tbody>
            ";
            // line 126
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "users"));
            foreach ($context['_seq'] as $context["i"] => $context["user"]) {
                // line 127
                echo "                ";
                if (($this->getAttribute($this->getContext($context, "user"), "login") != "anonymous")) {
                    // line 128
                    echo "                    <tr class=\"editable\" id=\"row";
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">
                        <td id=\"userLogin\" class=\"editable\">";
                    // line 129
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "login"), "html", null, true);
                    echo "</td>
                        <td id=\"password\" class=\"editable\">-</td>
                        <td id=\"email\" class=\"editable\">";
                    // line 131
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "email"), "html", null, true);
                    echo "</td>
                        <td id=\"alias\" class=\"editable\">";
                    // line 132
                    echo $this->getAttribute($this->getContext($context, "user"), "alias");
                    echo "</td>
                        <td id=\"token_auth\">";
                    // line 133
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "user"), "token_auth"), "html", null, true);
                    echo "</td>
                        <td>
                            <span class=\"edituser link_but\" id=\"row";
                    // line 135
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">
                                <img title=\"";
                    // line 136
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                    echo "\" src='plugins/Zeitgeist/images/ico_edit.png'/>
                                <span>";
                    // line 137
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Edit")), "html", null, true);
                    echo "</span>
                            </span>
                        </td>
                        <td>
                            <span class=\"deleteuser link_but\" id=\"row";
                    // line 141
                    echo twig_escape_filter($this->env, $this->getContext($context, "i"), "html", null, true);
                    echo "\">
                                <img title=\"";
                    // line 142
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                    echo "\" src='plugins/Zeitgeist/images/ico_delete.png'/>
                                <span>";
                    // line 143
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Delete")), "html", null, true);
                    echo "</span>
                            </span>
                        </td>
                    </tr>
                ";
                }
                // line 148
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "            </tbody>
        </table>
        <div class=\"addrow\"><img src='plugins/UsersManager/images/add.png'/> ";
            // line 151
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_AddUser")), "html", null, true);
            echo "</div>
    </div>


    <h2>";
            // line 155
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagement")), "html", null, true);
            echo "</h2>
    <p>";
            // line 156
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementMainDescription")), "html", null, true);
            echo " <br/>
    ";
            // line 157
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_SuperUserAccessManagementGrantMore")), "html", null, true);
            echo "</p>

    ";
            // line 159
            echo $context["ajax"]->geterrorDiv("ajaxErrorSuperUsersManagement");
            echo "
    ";
            // line 160
            echo $context["ajax"]->getloadingDiv("ajaxLoadingSuperUsersManagement");
            echo "

    <table class=\"entityTable dataTable\" id=\"superUserAccess\" style=\"display:inline-table;width:400px;\">
        <thead>
        <tr>
            <th class='first'>";
            // line 165
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_User")), "html", null, true);
            echo "</th>
            <th>";
            // line 166
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_Alias")), "html", null, true);
            echo "</th>
            <th>";
            // line 167
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SuperUser")), "html", null, true);
            echo "</th>
        </tr>
        </thead>

        <tbody>
        ";
            // line 172
            if ((twig_length_filter($this->env, $this->getContext($context, "users")) > 1)) {
                // line 173
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "usersAliasByLogin"));
                foreach ($context['_seq'] as $context["login"] => $context["alias"]) {
                    if (($this->getContext($context, "login") != "anonymous")) {
                        // line 174
                        echo "                <tr>
                    <td id='login'>";
                        // line 175
                        echo twig_escape_filter($this->env, $this->getContext($context, "login"), "html", null, true);
                        echo "</td>
                    <td>";
                        // line 176
                        echo $this->getContext($context, "alias");
                        echo "</td>
                    <td id='superuser' data-login=\"";
                        // line 177
                        echo twig_escape_filter($this->env, $this->getContext($context, "login"), "html_attr");
                        echo "\">
                        <img src='plugins/UsersManager/images/ok.png' class='accessGranted' data-hasaccess=\"1\" ";
                        // line 178
                        if ((!twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins")))) {
                            echo "style=\"display:none\"";
                        }
                        echo " />
                        <img src='plugins/UsersManager/images/no-access.png' class='updateAccess' data-hasaccess=\"0\" ";
                        // line 179
                        if (twig_in_filter($this->getContext($context, "login"), $this->getContext($context, "superUserLogins"))) {
                            echo "style=\"display:none\"";
                        }
                        echo " />
                        &nbsp;
                    </td>
                </tr>
            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['login'], $context['alias'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 184
                echo "        ";
            } else {
                // line 185
                echo "            <tr>
                <td colspan=\"3\">
                    ";
                // line 187
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("UsersManager_NoUsersExist")), "html", null, true);
                echo "
                </td>
            </tr>
        ";
            }
            // line 191
            echo "        </tbody>
    </table>

    <div id=\"superUserAccessUpdated\" style=\"vertical-align:top;\"></div>

    <div class=\"ui-confirm\" id=\"superUserAccessConfirm\">
        <h2> </h2>
        <input role=\"yes\" type=\"button\" value=\"";
            // line 198
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
        <input role=\"no\" type=\"button\" value=\"";
            // line 199
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "@UsersManager/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 199,  518 => 198,  509 => 191,  502 => 187,  498 => 185,  495 => 184,  481 => 179,  475 => 178,  471 => 177,  467 => 176,  463 => 175,  460 => 174,  454 => 173,  452 => 172,  444 => 167,  440 => 166,  436 => 165,  428 => 160,  424 => 159,  419 => 157,  415 => 156,  411 => 155,  404 => 151,  400 => 149,  394 => 148,  386 => 143,  382 => 142,  378 => 141,  371 => 137,  367 => 136,  363 => 135,  358 => 133,  354 => 132,  350 => 131,  345 => 129,  340 => 128,  337 => 127,  333 => 126,  325 => 121,  321 => 120,  316 => 118,  312 => 117,  308 => 116,  304 => 115,  296 => 110,  291 => 109,  289 => 108,  285 => 107,  281 => 106,  277 => 105,  271 => 102,  267 => 101,  263 => 100,  257 => 97,  253 => 96,  249 => 94,  247 => 93,  241 => 90,  237 => 89,  233 => 88,  225 => 82,  217 => 79,  207 => 77,  203 => 75,  197 => 73,  195 => 72,  191 => 70,  185 => 69,  179 => 67,  173 => 65,  171 => 64,  167 => 62,  161 => 61,  155 => 59,  149 => 57,  147 => 56,  142 => 54,  138 => 53,  135 => 52,  130 => 51,  123 => 50,  120 => 49,  118 => 48,  110 => 43,  106 => 42,  102 => 41,  98 => 40,  94 => 39,  89 => 36,  83 => 33,  80 => 32,  78 => 31,  72 => 28,  68 => 27,  66 => 26,  61 => 23,  58 => 15,  52 => 13,  50 => 12,  45 => 10,  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}
