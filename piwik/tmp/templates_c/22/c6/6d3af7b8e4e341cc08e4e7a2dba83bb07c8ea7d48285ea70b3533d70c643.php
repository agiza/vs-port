<?php

/* @MobileMessaging/index.twig */
class __TwigTemplate_22c66d3af7b8e4e341cc08e4e7a2dba83bb07c8ea7d48285ea70b3533d70c643 extends Twig_Template
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
        echo "    ";
        if ($this->getContext($context, "accountManagedByCurrentUser")) {
            // line 5
            echo "        <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SMSAPIAccount")), "html", null, true);
            echo "</h2>
        ";
            // line 6
            if ($this->getContext($context, "credentialSupplied")) {
                // line 7
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialProvided", $this->getContext($context, "provider"))), "html", null, true);
                echo "
            ";
                // line 8
                echo twig_escape_filter($this->env, $this->getContext($context, "creditLeft"), "html", null, true);
                echo "
            <br/>
            ";
                // line 10
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_UpdateOrDeleteAccount", "<a id='displayAccountForm'>", "</a>", "<a id='deleteAccount'>", "</a>"));
                echo "
        ";
            } else {
                // line 12
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PleaseSignUp")), "html", null, true);
                echo "
        ";
            }
            // line 14
            echo "        <div id='accountForm' ";
            if ($this->getContext($context, "credentialSupplied")) {
                echo "style='display: none;'";
            }
            echo ">
            <br/>
            ";
            // line 16
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SMSProvider")), "html", null, true);
            echo "
            <select id='smsProviders'>
                ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "smsProviders"));
            foreach ($context['_seq'] as $context["smsProvider"] => $context["description"]) {
                // line 19
                echo "                    <option value='";
                echo twig_escape_filter($this->env, $this->getContext($context, "smsProvider"), "html", null, true);
                echo "'>
                        ";
                // line 20
                echo twig_escape_filter($this->env, $this->getContext($context, "smsProvider"), "html", null, true);
                echo "
                    </option>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['smsProvider'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            </select>

            ";
            // line 25
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_APIKey")), "html", null, true);
            echo "
            <input size='25' id='apiKey'/>

            <input type='submit' value='";
            // line 28
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Save")), "html", null, true);
            echo "' id='apiAccountSubmit' class='submit'/>

            ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "smsProviders"));
            foreach ($context['_seq'] as $context["smsProvider"] => $context["description"]) {
                // line 31
                echo "                <div class='providerDescription' id='";
                echo twig_escape_filter($this->env, $this->getContext($context, "smsProvider"), "html", null, true);
                echo "'>
                    ";
                // line 32
                echo $this->getContext($context, "description");
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['smsProvider'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "
        </div>
    ";
        }
        // line 38
        echo "
    ";
        // line 39
        $context["ajax"] = $this->env->loadTemplate("ajaxMacros.twig");
        // line 40
        echo "
    <div style=\"margin-top:10px\">
        ";
        // line 42
        echo $context["ajax"]->geterrorDiv("ajaxErrorMobileMessagingSettings");
        echo "
    </div>

    <h2>";
        // line 45
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_PhoneNumbers")), "html", null, true);
        echo "</h2>
    ";
        // line 46
        if ((!$this->getContext($context, "credentialSupplied"))) {
            // line 47
            echo "        ";
            if ($this->getContext($context, "accountManagedByCurrentUser")) {
                // line 48
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialNotProvided")), "html", null, true);
                echo "
        ";
            } else {
                // line 50
                echo "            ";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CredentialNotProvidedByAdmin")), "html", null, true);
                echo "
        ";
            }
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_Help")), "html", null, true);
            echo "
        <br/>
        <br/>
        <table style=\"width:900px;\" class=\"adminTable\">
            <tbody>
            <tr>
                <td style=\"width:480px;\">
                    <strong>";
            // line 60
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_Add")), "html", null, true);
            echo "</strong>
                    <br/><br/>
\t
                <span id=\"suspiciousPhoneNumber\" style=\"display:none;\">
                    ";
            // line 64
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SuspiciousPhoneNumber", "54184032")), "html", null, true);
            echo "
                    <br/><br/>
                </span>

                + <input id=\"countryCallingCode\" size=\"4\" maxlength=\"4\"/>&nbsp;
                <input id=\"newPhoneNumber\"/>
                <input type=\"submit\" value='";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Add")), "html", null, true);
            echo "'
                       id=\"addPhoneNumberSubmit\"/>
                <br/>
\t\t
\t\t<span style=' font-size: 11px;'><span
                    class=\"form-description\">";
            // line 75
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_CountryCode")), "html", null, true);
            echo "</span>
\t\t\t<span class=\"form-description\"
                  style=\"margin-left:50px;\">";
            // line 77
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumber")), "html", null, true);
            echo "</span></span>
                    <br/><br/>

                    ";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneNumbers_CountryCode_Help")), "html", null, true);
            echo "

                    <select id=\"countries\">
                        ";
            // line 84
            echo "                        <option value=\"\">&nbsp;</option>
                        ";
            // line 85
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "countries"));
            foreach ($context['_seq'] as $context["countryCode"] => $context["country"]) {
                // line 86
                echo "                            <option value='";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "country"), "countryCallingCode"), "html", null, true);
                echo "'
                                    ";
                // line 87
                if (($this->getContext($context, "defaultCountry") == $this->getContext($context, "countryCode"))) {
                    echo " selected=\"selected\" ";
                }
                // line 88
                echo "                                    >
                                ";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "country"), "countryName"), "html", null, true);
                echo "
                            </option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['countryCode'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                    </select>

                </td>
                <td style=\"width:220px;\">
                    ";
            // line 96
            $context["piwik"] = $this->env->loadTemplate("macros.twig");
            // line 97
            echo "                    ";
            echo $context["piwik"]->getinlineHelp($this->getContext($context, "strHelpAddPhone"));
            echo "
                </td>
            </tr>
            <tr>
                <td colspan=\"2\">

                    ";
            // line 103
            if ((twig_length_filter($this->env, $this->getContext($context, "phoneNumbers")) > 0)) {
                // line 104
                echo "                        <br/>
                        <br/>
                        <strong>";
                // line 106
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_ManagePhoneNumbers")), "html", null, true);
                echo "</strong>
                        <br/>
                        <br/>
                    ";
            }
            // line 110
            echo "
                    ";
            // line 111
            echo $context["ajax"]->geterrorDiv("invalidVerificationCodeAjaxError");
            echo "

                    <div id='phoneNumberActivated' style=\"display:none;\">
                        ";
            // line 114
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_PhoneActivated")), "html", null, true);
            echo "
                    </div>

                    <div id='invalidActivationCode' style=\"display:none;\">
                        ";
            // line 118
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_InvalidActivationCode")), "html", null, true);
            echo "
                    </div>

                    <ul>
                        ";
            // line 122
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "phoneNumbers"));
            foreach ($context['_seq'] as $context["phoneNumber"] => $context["validated"]) {
                // line 123
                echo "                            <li>
                                <span class='phoneNumber'>";
                // line 124
                echo twig_escape_filter($this->env, $this->getContext($context, "phoneNumber"), "html", null, true);
                echo "</span>
                                ";
                // line 125
                if ((!$this->getContext($context, "validated"))) {
                    // line 126
                    echo "                                    <input class='verificationCode'/>
                                    <input
                                            type='submit'
                                            value='";
                    // line 129
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_ValidatePhoneNumber")), "html", null, true);
                    echo "'
                                            class='validatePhoneNumberSubmit'
                                            />
                                ";
                }
                // line 133
                echo "                                <input
                                        type='submit'
                                        value='";
                // line 135
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Remove")), "html", null, true);
                echo "'
                                        class='removePhoneNumberSubmit'
                                        />
                                ";
                // line 138
                if ((!$this->getContext($context, "validated"))) {
                    // line 139
                    echo "                                    <br/>
                                    <span class='form-description'>";
                    // line 140
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_VerificationCodeJustSent")), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 142
                echo "                                <br/>
                                <br/>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['phoneNumber'], $context['validated'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "                    </ul>

                </td>
            </tr>
            </tbody>
        </table>
    ";
        }
        // line 153
        echo "
    ";
        // line 154
        if ($this->getContext($context, "isSuperUser")) {
            // line 155
            echo "        <h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_SuperAdmin")), "html", null, true);
            echo "</h2>
        <table class='adminTable' style='width:650px;'>
            <tr>
                <td style=\"width:400px;\">";
            // line 158
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_LetUsersManageAPICredential")), "html", null, true);
            echo "</td>
                <td style=\"width:250px;\">
                    <fieldset>
                        <label>
                            <input
                                    type='radio'
                                    value='false'
                                    name='delegatedManagement' ";
            // line 165
            if ((!$this->getContext($context, "delegatedManagement"))) {
                echo " checked='checked'";
            }
            echo " />
                            ";
            // line 166
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "
                            <br/>
                        <span class='form-description'>
                            (";
            // line 169
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Default")), "html", null, true);
            echo "
                            ) ";
            // line 170
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_LetUsersManageAPICredential_No_Help")), "html", null, true);
            echo "
                        </span>
                        </label>
                        <br/>
                        <br/>
                        <label>
                            <input
                                    type='radio'
                                    value='true'
                                    name='delegatedManagement' ";
            // line 179
            if ($this->getContext($context, "delegatedManagement")) {
                echo " checked='checked'";
            }
            echo " />
                            ";
            // line 180
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "
                            <br/>
                            <span class='form-description'>";
            // line 182
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_LetUsersManageAPICredential_Yes_Help")), "html", null, true);
            echo "</span>
                        </label>

                    </fieldset>
            </tr>
        </table>
    ";
        }
        // line 189
        echo "
    ";
        // line 190
        echo $context["ajax"]->getloadingDiv("ajaxLoadingMobileMessagingSettings");
        echo "

    <div class='ui-confirm' id='confirmDeleteAccount'>
        <h2>";
        // line 193
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_Settings_DeleteAccountConfirm")), "html", null, true);
        echo "</h2>
        <input role='yes' type='button' value='";
        // line 194
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
        echo "'/>
        <input role='no' type='button' value='";
        // line 195
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
        echo "'/>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 195,  451 => 194,  447 => 193,  441 => 190,  438 => 189,  428 => 182,  423 => 180,  417 => 179,  405 => 170,  401 => 169,  395 => 166,  389 => 165,  379 => 158,  372 => 155,  370 => 154,  367 => 153,  358 => 146,  349 => 142,  344 => 140,  341 => 139,  339 => 138,  333 => 135,  329 => 133,  322 => 129,  317 => 126,  315 => 125,  311 => 124,  308 => 123,  304 => 122,  297 => 118,  290 => 114,  284 => 111,  281 => 110,  274 => 106,  270 => 104,  268 => 103,  258 => 97,  256 => 96,  250 => 92,  241 => 89,  238 => 88,  234 => 87,  229 => 86,  225 => 85,  222 => 84,  216 => 80,  210 => 77,  205 => 75,  197 => 70,  188 => 64,  181 => 60,  170 => 53,  167 => 52,  161 => 50,  155 => 48,  152 => 47,  150 => 46,  146 => 45,  140 => 42,  136 => 40,  134 => 39,  131 => 38,  126 => 35,  117 => 32,  112 => 31,  108 => 30,  103 => 28,  97 => 25,  93 => 23,  84 => 20,  79 => 19,  75 => 18,  70 => 16,  62 => 14,  56 => 12,  51 => 10,  46 => 8,  41 => 7,  39 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
