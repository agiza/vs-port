<?php

/* @Login/login.twig */
class __TwigTemplate_89132d00882daf06141b16f11785c78239c8be5b4eea4da64d8bbbb5b06108d6 extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 9 ]>
<html class=\"old-ie\"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html><!--<![endif]-->
<head>   
    <meta charset=\"utf-8\">
    <title>";
        // line 8
        if (($this->getContext($context, "isCustomLogo") == false)) {
            echo "Piwik &rsaquo; ";
        }
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
        echo "</title>

    <link rel=\"shortcut icon\" href=\"plugins/CoreHome/images/favicon.ico\"/>
    ";
        // line 12
        echo "    ";
        echo call_user_func_array($this->env->getFunction('includeAssets')->getCallable(), array(array("type" => "css")));
        echo "
    ";
        // line 14
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Login/stylesheets/login.css\"/>
    <meta name=\"description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_OpenSourceWebAnalytics")), "html", null, true);
        echo "\"/>
    <meta name=\"apple-itunes-app\" content=\"app-id=737216887\" />
    <meta name=\"google-play-app\" content=\"app-id=org.piwik.mobile2\">
    <!--[if lt IE 9]>
    <script src=\"libs/html5shiv/html5shiv.js\"></script>
    <![endif]-->
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.placeholder.js\"></script>
    <script type=\"text/javascript\" src=\"libs/jquery/jquery.smartbanner.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"libs/jquery/stylesheets/jquery.smartbanner.css\" />
    <script type=\"text/javascript\" src=\"plugins/CoreHome/javascripts/require.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/javascripts/notification.js\"></script>
    <script type=\"text/javascript\" src=\"plugins/CoreHome/javascripts/notification_parser.js\"></script>
    <script type=\"text/javascript\">
        \$(function () {
            \$('#form_login').focus();
            \$('input').placeholder();
            \$.smartbanner({
  title: \"Piwik Mobile 2\", author: \"Piwik team\", icon: \"plugins/CoreHome/images/googleplay.png\"
  });    
        });
\t</script>
\t    <script type=\"text/javascript\" src=\"plugins/Login/javascripts/login.js\"></script>
\t    ";
        // line 38
        if ((call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_LayoutDirection")) == "rtl")) {
            // line 39
            echo "\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"plugins/Zeitgeist/stylesheets/rtl.css\"/>
\t    ";
        }
        // line 41
        echo "\t</head>
\t<body id=\"loginPage\">

    ";
        // line 44
        $this->env->loadTemplate("_iframeBuster.twig")->display($context);
        // line 45
        echo "
    <div id=\"notificationContainer\">
    </div>

    <div id=\"logo\">
        ";
        // line 50
        if (($this->getContext($context, "isCustomLogo") == false)) {
            // line 51
            echo "            <a href=\"http://piwik.org\" title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\">
        ";
        }
        // line 53
        echo "        ";
        if ($this->getContext($context, "hasSVGLogo")) {
            // line 54
            echo "            <img src='";
            echo twig_escape_filter($this->env, $this->getContext($context, "logoSVG"), "html", null, true);
            echo "' title=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\" alt=\"Piwik\" class=\"ie-hide\"/>
            <!--[if lt IE 9]>
        ";
        }
        // line 57
        echo "        <img src='";
        echo twig_escape_filter($this->env, $this->getContext($context, "logoLarge"), "html", null, true);
        echo "' title=\"";
        echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
        echo "\" alt=\"Piwik\" />
        ";
        // line 58
        if ($this->getContext($context, "hasSVGLogo")) {
            echo "<![endif]-->";
        }
        // line 59
        echo "
        ";
        // line 60
        if ($this->getContext($context, "isCustomLogo")) {
            // line 61
            echo "            ";
            ob_start();
            // line 62
            echo "            <i><a href=\"http://piwik.org/\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "</a></i>
            ";
            $context["poweredByPiwik"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 64
            echo "        ";
        }
        // line 65
        echo "
        ";
        // line 66
        if (($this->getContext($context, "isCustomLogo") == false)) {
            // line 67
            echo "            </a>
            <div class=\"description\">
                <a href=\"http://piwik.org\" title=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "linkTitle"), "html", null, true);
            echo "</a>
                <div class=\"arrow\"></div>
            </div>
        ";
        }
        // line 73
        echo "    </div>

    <section class=\"loginSection\">

        ";
        // line 78
        echo "        ";
        if (((array_key_exists("isValidHost", $context) && array_key_exists("invalidHostMessage", $context)) && ($this->getContext($context, "isValidHost") == false))) {
            // line 79
            echo "            ";
            $this->env->loadTemplate("@CoreHome/_warningInvalidHost.twig")->display($context);
            // line 80
            echo "        ";
        } else {
            // line 81
            echo "            <div id=\"message_container\">
                ";
            // line 82
            if ($this->getAttribute($this->getContext($context, "form_data"), "errors")) {
                // line 83
                echo "                    <div class=\"message_error\">
                        ";
                // line 84
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "form_data"), "errors"));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 85
                    echo "                            <strong>";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                    echo "</strong>: ";
                    echo twig_escape_filter($this->env, $this->getContext($context, "data"), "html", null, true);
                    echo "<br/>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "                    </div>
                ";
            }
            // line 89
            echo "
                ";
            // line 90
            if ($this->getContext($context, "AccessErrorString")) {
                // line 91
                echo "                    <div class=\"message_error\">
                        <strong>";
                // line 92
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Error")), "html", null, true);
                echo "</strong>: ";
                echo $this->getContext($context, "AccessErrorString");
                echo "<br/>
                    </div>
                ";
            }
            // line 95
            echo "
                ";
            // line 96
            if ($this->getContext($context, "infoMessage")) {
                // line 97
                echo "                    <p class=\"message\">";
                echo $this->getContext($context, "infoMessage");
                echo "</p>
                ";
            }
            // line 99
            echo "            </div>
            <form ";
            // line 100
            echo $this->getAttribute($this->getContext($context, "form_data"), "attributes");
            echo ">
                <h1>";
            // line 101
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</h1>
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"login_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 105
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Username")), "html", null, true);
            echo "\" autofocus=\"autofocus\"/>
                    <input type=\"password\" name=\"form_password\" id=\"login_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\"
                           placeholder=\"";
            // line 108
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"login_form_nonce\" value=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->getContext($context, "nonce"), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <input name=\"form_rememberme\" type=\"checkbox\" id=\"login_form_rememberme\" value=\"1\" tabindex=\"90\"
                           ";
            // line 114
            if ($this->getAttribute($this->getAttribute($this->getContext($context, "form_data"), "form_rememberme"), "value")) {
                echo "checked=\"checked\" ";
            }
            echo "/>
                    <label for=\"login_form_rememberme\">";
            // line 115
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_RememberMe")), "html", null, true);
            echo "</label>
                    <input class=\"submit\" id='login_form_submit' type=\"submit\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "\"
                           tabindex=\"100\"/>
                </fieldset>
            </form>
            <form id=\"reset_form\" style=\"display:none;\">
                <fieldset class=\"inputs\">
                    <input type=\"text\" name=\"form_login\" id=\"reset_form_login\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"10\"
                           placeholder=\"";
            // line 124
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LoginOrEmail")), "html", null, true);
            echo "\"/>
                    <input type=\"hidden\" name=\"form_nonce\" id=\"reset_form_nonce\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getContext($context, "nonce"), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password\" id=\"reset_form_password\" class=\"input\" value=\"\" size=\"20\"
                           tabindex=\"20\"
                           placeholder=\"";
            // line 129
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Password")), "html", null, true);
            echo "\"/>

                    <input type=\"password\" name=\"form_password_bis\" id=\"reset_form_password_bis\" class=\"input\" value=\"\"
                           size=\"20\" tabindex=\"30\"
                           placeholder=\"";
            // line 133
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_PasswordRepeat")), "html", null, true);
            echo "\"/>
                </fieldset>

                <fieldset class=\"actions\">
                    <span class=\"loadingPiwik\" style=\"display:none;\">
                        <img alt=\"Loading\" src=\"plugins/Zeitgeist/images/loading-blue.gif\"/>
                    </span>
                    <input class=\"submit\" id='reset_form_submit' type=\"submit\"
                           value=\"";
            // line 141
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_ChangePassword")), "html", null, true);
            echo "\" tabindex=\"100\"/>
                </fieldset>

                <input type=\"hidden\" name=\"module\" value=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->getContext($context, "loginModule"), "html", null, true);
            echo "\"/>
                <input type=\"hidden\" name=\"action\" value=\"resetPassword\"/>
            </form>
            <p id=\"nav\">
                <a id=\"login_form_nav\" href=\"#\"
                   title=\"";
            // line 149
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LostYourPassword")), "html", null, true);
            echo "</a>
                <a id=\"alternate_reset_nav\" href=\"#\" style=\"display:none;\"
                   title=\"{'Login_LogIn'|translate}\">";
            // line 151
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_LogIn")), "html", null, true);
            echo "</a>
                <a id=\"reset_form_nav\" href=\"#\" style=\"display:none;\"
                   title=\"";
            // line 153
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Mobile_NavigationBack")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Cancel")), "html", null, true);
            echo "</a>
            </p>
            ";
            // line 155
            if (array_key_exists("poweredByPiwik", $context)) {
                // line 156
                echo "                <p id=\"piwik\">
                    ";
                // line 157
                echo twig_escape_filter($this->env, $this->getContext($context, "poweredByPiwik"), "html", null, true);
                echo "
                </p>
            ";
            }
            // line 160
            echo "            <div id=\"lost_password_instructions\" style=\"display:none;\">
                <p class=\"message\">";
            // line 161
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Login_ResetPasswordInstructions")), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 164
        echo "    </section>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "@Login/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 164,  355 => 161,  352 => 160,  346 => 157,  343 => 156,  341 => 155,  334 => 153,  329 => 151,  322 => 149,  314 => 144,  308 => 141,  297 => 133,  290 => 129,  283 => 125,  279 => 124,  268 => 116,  264 => 115,  258 => 114,  250 => 109,  246 => 108,  240 => 105,  233 => 101,  229 => 100,  226 => 99,  220 => 97,  218 => 96,  215 => 95,  207 => 92,  204 => 91,  202 => 90,  199 => 89,  195 => 87,  184 => 85,  180 => 84,  177 => 83,  175 => 82,  172 => 81,  169 => 80,  166 => 79,  163 => 78,  157 => 73,  148 => 69,  144 => 67,  142 => 66,  139 => 65,  136 => 64,  130 => 62,  127 => 61,  125 => 60,  122 => 59,  118 => 58,  111 => 57,  102 => 54,  99 => 53,  93 => 51,  91 => 50,  84 => 45,  82 => 44,  77 => 41,  73 => 39,  71 => 38,  45 => 15,  42 => 14,  37 => 12,  28 => 8,  19 => 1,);
    }
}
