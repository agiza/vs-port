<?php

/* @CorePluginsAdmin/macros.twig */
class __TwigTemplate_9d2cb85e7605cefb3d2de5ca374ee9fecb2c7e55455d1695e2dd37fe8582a5ee extends Twig_Template
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
        // line 54
        echo "
";
        // line 58
        echo "
";
        // line 65
        echo "
";
        // line 95
        echo "
";
        // line 109
        echo "
";
    }

    // line 1
    public function gettablePluginUpdates($_pluginsHavingUpdate = null, $_nonce = null, $_isTheme = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsHavingUpdate" => $_pluginsHavingUpdate,
            "nonce" => $_nonce,
            "isTheme" => $_isTheme,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "
    <div class='entityContainer'>
        <table class=\"dataTable entityTable\">
            <thead>
            <tr>
                <th>";
            // line 7
            if ($this->getContext($context, "isTheme")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
                <th class=\"num\">";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
            echo "</th>
                <th>";
            // line 9
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
                <th class=\"status\">";
            // line 10
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
                <th class=\"action-links\">";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
            echo "</th>
            </tr>
            </thead>
            <tbody id=\"plugins\">
            ";
            // line 15
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pluginsHavingUpdate"));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 16
                echo "                <tr ";
                if ($this->getAttribute($this->getContext($context, "plugin"), "isActivated")) {
                    echo "class=\"active-plugin\"";
                } else {
                    echo "class=\"inactive-plugin\"";
                }
                echo ">
                    <td class=\"name\">
                        <a href=\"javascript:void(0);\" data-pluginName=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html_attr");
                echo "\">
                            ";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html", null, true);
                echo "
                        </a>
                    </td>
                    <td class=\"vers\">
                        ";
                // line 23
                if ($this->getAttribute($this->getContext($context, "plugin"), "repositoryChangelogUrl")) {
                    // line 24
                    echo "                            <a href=\"javascript:void(0);\" title=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Changelog")), "html", null, true);
                    echo "\" data-activePluginTab=\"changelog\" data-pluginName=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "currentVersion"), "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "latestVersion"), "html", null, true);
                    echo "</a>
                        ";
                } else {
                    // line 26
                    echo "                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "currentVersion"), "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "latestVersion"), "html", null, true);
                    echo "
                        ";
                }
                // line 28
                echo "                    </td>
                    <td class=\"desc\">
                        ";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "description"), "html", null, true);
                echo "
                        ";
                // line 31
                echo $this->getAttribute($this, "missingRequirementsNotice", array(0 => $this->getContext($context, "plugin")), "method");
                echo "
                    </td>
                    <td class=\"status\">
                        ";
                // line 34
                if ($this->getAttribute($this->getContext($context, "plugin"), "isActivated")) {
                    // line 35
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                    echo "
                        ";
                } else {
                    // line 37
                    echo "                            ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                    echo "
                        ";
                }
                // line 39
                echo "                    </td>
                    <td class=\"togl action-links\">
                        ";
                // line 41
                if ((0 == twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements")))) {
                    // line 42
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "pluginName" => $this->getAttribute($this->getContext($context, "plugin"), "name"), "nonce" => $this->getContext($context, "nonce")))), "html", null, true);
                    echo "\">Update</a>
                        ";
                } else {
                    // line 44
                    echo "                            -
                        ";
                }
                // line 46
                echo "                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </tbody>
        </table>
    </div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getpluginDeveloper($_owner = null)
    {
        $context = $this->env->mergeGlobals(array(
            "owner" => $_owner,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 56
            echo "    ";
            if (("piwik" == $this->getContext($context, "owner"))) {
                echo "<img title=\"Piwik\" alt=\"Piwik\" style=\"padding-bottom:2px;height:11px;\" src=\"plugins/Zeitgeist/images/logo-marketplace.png\"/>";
            } else {
                echo twig_escape_filter($this->env, $this->getContext($context, "owner"), "html", null, true);
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getfeaturedIcon($_align = "")
    {
        $context = $this->env->mergeGlobals(array(
            "align" => $_align,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 60
            echo "    <img class=\"featuredIcon\"
         title=\"";
            // line 61
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_FeaturedPlugin")), "html", null, true);
            echo "\"
         src=\"plugins/CorePluginsAdmin/images/rating_important.png\"
         align=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getContext($context, "align"), "html", null, true);
            echo "\" />
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getpluginsFilter($_isTheme = null, $_isMarketplaceEnabled = null)
    {
        $context = $this->env->mergeGlobals(array(
            "isTheme" => $_isTheme,
            "isMarketplaceEnabled" => $_isMarketplaceEnabled,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 67
            echo "
    <p class=\"pluginsFilter entityContainer\">
        <span class=\"origin\">
            <strong>";
            // line 70
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Origin")), "html", null, true);
            echo "</strong>
            <a data-filter-origin=\"all\" href=\"#\" class=\"active\">";
            // line 71
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"core\" href=\"#\">";
            // line 72
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-origin=\"noncore\" href=\"#\">";
            // line 73
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginThirdParty")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        <span class=\"status\">
            <strong>";
            // line 77
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</strong>
            <a data-filter-status=\"all\" href=\"#\" class=\"active\">";
            // line 78
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_All")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"active\" href=\"#\">";
            // line 79
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
            echo "<span class=\"counter\"></span></a> |
            <a data-filter-status=\"inactive\" href=\"#\">";
            // line 80
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
            echo "<span class=\"counter\"></span></a>
        </span>

        ";
            // line 83
            if ($this->getContext($context, "isMarketplaceEnabled")) {
                // line 84
                echo "            <span class=\"getNewPlugins\">
                ";
                // line 85
                if ($this->getContext($context, "isTheme")) {
                    // line 86
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browseThemes", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewThemes")), "html", null, true);
                    echo "</a>
                ";
                } else {
                    // line 88
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "browsePlugins", "sort" => ""))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_InstallNewPlugins")), "html", null, true);
                    echo "</a>
                ";
                }
                // line 90
                echo "            </span>
        ";
            }
            // line 92
            echo "    </p>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getmissingRequirementsNotice($_plugin = null)
    {
        $context = $this->env->mergeGlobals(array(
            "plugin" => $_plugin,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 97
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "plugin"), "missingRequirements") && (0 < twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements"))))) {
                // line 98
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "plugin"), "missingRequirements"));
                foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
                    // line 99
                    echo "<p class=\"missingRequirementsNotice\">
                ";
                    // line 100
                    $context["requirement"] = twig_capitalize_string_filter($this->env, $this->getAttribute($this->getContext($context, "req"), "requirement"));
                    // line 101
                    echo "                ";
                    if (("Php" == $this->getContext($context, "requirement"))) {
                        // line 102
                        echo "                    ";
                        $context["requirement"] = "PHP";
                        // line 103
                        echo "                ";
                    }
                    // line 104
                    echo "                ";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_MissingRequirementsNotice", $this->getContext($context, "requirement"), $this->getAttribute($this->getContext($context, "req"), "actualVersion"), $this->getAttribute($this->getContext($context, "req"), "requiredVersion"))), "html", null, true);
                    echo "
            </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['req'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 110
    public function gettablePlugins($_pluginsInfo = null, $_pluginNamesHavingSettings = null, $_activateNonce = null, $_deactivateNonce = null, $_uninstallNonce = null, $_isTheme = null, $_marketplacePluginNames = null, $_displayAdminLinks = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pluginsInfo" => $_pluginsInfo,
            "pluginNamesHavingSettings" => $_pluginNamesHavingSettings,
            "activateNonce" => $_activateNonce,
            "deactivateNonce" => $_deactivateNonce,
            "uninstallNonce" => $_uninstallNonce,
            "isTheme" => $_isTheme,
            "marketplacePluginNames" => $_marketplacePluginNames,
            "displayAdminLinks" => $_displayAdminLinks,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 111
            echo "
<div id=\"confirmUninstallPlugin\" class=\"ui-confirm\">

    <h2 id=\"uninstallPluginConfirm\">";
            // line 114
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_UninstallConfirm")), "html", null, true);
            echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
            // line 115
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Yes")), "html", null, true);
            echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_No")), "html", null, true);
            echo "\"/>

</div>

<div class='entityContainer'>
    <table class=\"dataTable entityTable\">
        <thead>
        <tr>
            <th>";
            // line 124
            if ($this->getContext($context, "isTheme")) {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Theme")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Plugin")), "html", null, true);
            }
            echo "</th>
            <th>";
            // line 125
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Description")), "html", null, true);
            echo "</th>
            <th class=\"status\">";
            // line 126
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Status")), "html", null, true);
            echo "</th>
            ";
            // line 127
            if ($this->getContext($context, "displayAdminLinks")) {
                // line 128
                echo "            <th class=\"action-links\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Action")), "html", null, true);
                echo "</th>
            ";
            }
            // line 130
            echo "        </tr>
        </thead>
        <tbody id=\"plugins\">
        ";
            // line 133
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "pluginsInfo"));
            foreach ($context['_seq'] as $context["name"] => $context["plugin"]) {
                // line 134
                echo "            ";
                $context["isZeitgeist"] = ($this->getContext($context, "isTheme") && ($this->getContext($context, "name") == "Zeitgeist"));
                // line 135
                echo "            ";
                if ((($this->getAttribute($this->getContext($context, "plugin", true), "alwaysActivated", array(), "any", true, true) && (!$this->getAttribute($this->getContext($context, "plugin"), "alwaysActivated"))) || $this->getContext($context, "isTheme"))) {
                    // line 136
                    echo "                <tr ";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                        echo "class=\"active-plugin\"";
                    } else {
                        echo "class=\"inactive-plugin\"";
                    }
                    echo " data-filter-status=\"";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                        echo "active";
                    } else {
                        echo "inactive";
                    }
                    echo "\" data-filter-origin=\"";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) {
                        echo "core";
                    } else {
                        echo "noncore";
                    }
                    echo "\">
                    <td class=\"name\" style=\"white-space:nowrap;\">
                        <a name=\"";
                    // line 138
                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                    echo "\"></a>
                        ";
                    // line 139
                    if (((!$this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) && twig_in_filter($this->getContext($context, "name"), $this->getContext($context, "marketplacePluginNames")))) {
                        // line 140
                        echo "<a href=\"javascript:void(0);\"
                               data-pluginName=\"";
                        // line 141
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                        echo "\"
                               >";
                        // line 142
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                        echo "</a>";
                    } else {
                        // line 144
                        echo "                            ";
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                        echo "
                        ";
                    }
                    // line 146
                    echo "                        <span class=\"plugin-version\" ";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) {
                        echo "title=\"";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_CorePluginTooltip")), "html", null, true);
                        echo "\"";
                    }
                    echo ">(";
                    if ($this->getAttribute($this->getContext($context, "plugin"), "isCorePlugin")) {
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_OriginCore")), "html", null, true);
                    } else {
                        echo "v";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "version"), "html", null, true);
                    }
                    echo ")</span>

                        ";
                    // line 148
                    if (twig_in_filter($this->getContext($context, "name"), $this->getContext($context, "pluginNamesHavingSettings"))) {
                        // line 149
                        echo "                            <br /><br />
                            <a href=\"";
                        // line 150
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "CoreAdminHome", "action" => "pluginSettings"))), "html", null, true);
                        echo "#";
                        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                        echo "\" class=\"settingsLink\">";
                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Settings")), "html", null, true);
                        echo "</a>
                        ";
                    }
                    // line 152
                    echo "                    </td>
                    <td class=\"desc\">
                        <div class=\"plugin-desc-text\">
                            ";
                    // line 155
                    echo nl2br($this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "description"));
                    echo "
                            ";
                    // line 156
                    if (((!twig_test_empty((($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "homepage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "homepage"))) : ("")))) && !twig_in_filter($this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "homepage"), array(0 => "http://piwik.org", 1 => "http://www.piwik.org", 2 => "http://piwik.org/", 3 => "http://www.piwik.org/")))) {
                        // line 159
                        echo "                            <span class=\"plugin-homepage\">
                                <a href=\"";
                        // line 160
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "homepage"), "html", null, true);
                        echo "\">(";
                        echo strtr(call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginHomepage")), array(" " => "&nbsp;"));
                        echo ")</a>
                            </span>
                            ";
                    }
                    // line 163
                    echo "                        </div>
                        ";
                    // line 164
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "license", array(), "any", true, true)) {
                        // line 165
                        echo "                        <div class=\"plugin-license\">
                            ";
                        // line 166
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "<a title=\"";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_LicenseHomepage")), "html", null, true);
                            echo "\" target=\"_blank\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "license_homepage"), "html", null, true);
                            echo "\">";
                        }
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "license"), "html", null, true);
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "license_homepage", array(), "any", true, true)) {
                            echo "</a>";
                        }
                        // line 167
                        echo "                        </div>
                        ";
                    }
                    // line 169
                    echo "                        ";
                    if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                        // line 170
                        echo "                        <div class=\"plugin-author\">
                            <cite>By
                            ";
                        // line 172
                        if ($this->getAttribute($this->getAttribute($this->getContext($context, "plugin", true), "info", array(), "any", false, true), "authors", array(), "any", true, true)) {
                            // line 173
                            ob_start();
                            // line 174
                            echo "                            ";
                            $context['_parent'] = (array) $context;
                            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "authors"));
                            $context['loop'] = array(
                              'parent' => $context['_parent'],
                              'index0' => 0,
                              'index'  => 1,
                              'first'  => true,
                            );
                            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                                if ($this->getAttribute($this->getContext($context, "author"), "name")) {
                                    // line 175
                                    echo "                                ";
                                    if ($this->getAttribute($this->getContext($context, "author", true), "homepage", array(), "any", true, true)) {
                                        // line 176
                                        echo "                                    <a title=\"";
                                        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_AuthorHomepage")), "html", null, true);
                                        echo "\" href=\"";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "author"), "homepage"), "html", null, true);
                                        echo "\" target=\"_blank\">";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "author"), "name"), "html", null, true);
                                        echo "</a>
                                ";
                                    } else {
                                        // line 178
                                        echo "                                    ";
                                        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "author"), "name"), "html", null, true);
                                        echo "
                                ";
                                    }
                                    // line 180
                                    echo "                                ";
                                    if (($this->getAttribute($this->getContext($context, "loop"), "index") < twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "plugin"), "info"), "authors")))) {
                                        // line 181
                                        echo "                                        ,
                                    ";
                                    }
                                    // line 183
                                    echo "                            ";
                                    ++$context['loop']['index0'];
                                    ++$context['loop']['index'];
                                    $context['loop']['first'] = false;
                                }
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 184
                            echo "                            ";
                            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                        }
                        // line 185
                        echo ".</cite>
                        </div>
                        ";
                    }
                    // line 188
                    echo "                    </td>
                    <td class=\"status\" ";
                    // line 189
                    if ($this->getContext($context, "isZeitgeist")) {
                        echo "style=\"border-left-width:0px;\"";
                    }
                    echo ">
                        ";
                    // line 190
                    if ((!$this->getContext($context, "isZeitgeist"))) {
                        // line 192
                        if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                            // line 193
                            echo "                            ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Active")), "html", null, true);
                            echo "
                        ";
                        } else {
                            // line 195
                            echo "                            ";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Inactive")), "html", null, true);
                            echo "
                            ";
                            // line 196
                            if (($this->getAttribute($this->getContext($context, "plugin"), "uninstallable") && $this->getContext($context, "displayAdminLinks"))) {
                                echo " <br/> - <a data-pluginName=\"";
                                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html_attr");
                                echo "\" class=\"uninstall\" href='index.php?module=CorePluginsAdmin&action=uninstall&pluginName=";
                                echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                                echo "&nonce=";
                                echo twig_escape_filter($this->env, $this->getContext($context, "uninstallNonce"), "html", null, true);
                                echo "'>";
                                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionUninstall")), "html", null, true);
                                echo "</a>";
                            }
                            // line 197
                            echo "                        ";
                        }
                    }
                    // line 200
                    echo "                    </td>

                    ";
                    // line 202
                    if ($this->getContext($context, "displayAdminLinks")) {
                        // line 203
                        echo "                    <td class=\"togl action-links\" ";
                        if ($this->getContext($context, "isZeitgeist")) {
                            echo "style=\"border-left-width:0px;\"";
                        }
                        echo ">
                        ";
                        // line 204
                        if ((!$this->getContext($context, "isZeitgeist"))) {
                            // line 206
                            if (($this->getAttribute($this->getContext($context, "plugin", true), "invalid", array(), "any", true, true) || $this->getAttribute($this->getContext($context, "plugin"), "alwaysActivated"))) {
                                // line 207
                                echo "                            -
                        ";
                            } else {
                                // line 209
                                echo "                            ";
                                if ($this->getAttribute($this->getContext($context, "plugin"), "activated")) {
                                    // line 210
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=deactivate&pluginName=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                                    echo "&nonce=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "deactivateNonce"), "html", null, true);
                                    echo "'>";
                                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Deactivate")), "html", null, true);
                                    echo "</a>
                            ";
                                } else {
                                    // line 212
                                    echo "                                <a href='index.php?module=CorePluginsAdmin&action=activate&pluginName=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
                                    echo "&nonce=";
                                    echo twig_escape_filter($this->env, $this->getContext($context, "activateNonce"), "html", null, true);
                                    echo "'>";
                                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Activate")), "html", null, true);
                                    echo "</a>
                            ";
                                }
                                // line 214
                                echo "                        ";
                            }
                        }
                        // line 217
                        echo "                    </td>
                    ";
                    }
                    // line 219
                    echo "                </tr>
            ";
                }
                // line 221
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 222
            echo "        </tbody>
    </table>
</div>

";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  777 => 222,  771 => 221,  767 => 219,  763 => 217,  759 => 214,  749 => 212,  739 => 210,  736 => 209,  732 => 207,  730 => 206,  728 => 204,  721 => 203,  719 => 202,  715 => 200,  711 => 197,  699 => 196,  694 => 195,  688 => 193,  686 => 192,  684 => 190,  678 => 189,  675 => 188,  670 => 185,  666 => 184,  656 => 183,  652 => 181,  649 => 180,  643 => 178,  633 => 176,  630 => 175,  618 => 174,  616 => 173,  614 => 172,  610 => 170,  607 => 169,  603 => 167,  591 => 166,  588 => 165,  586 => 164,  583 => 163,  575 => 160,  572 => 159,  570 => 156,  566 => 155,  561 => 152,  552 => 150,  549 => 149,  547 => 148,  530 => 146,  524 => 144,  520 => 142,  516 => 141,  513 => 140,  511 => 139,  507 => 138,  485 => 136,  482 => 135,  479 => 134,  475 => 133,  470 => 130,  464 => 128,  462 => 127,  458 => 126,  454 => 125,  446 => 124,  435 => 116,  431 => 115,  427 => 114,  422 => 111,  404 => 110,  392 => 107,  383 => 104,  380 => 103,  377 => 102,  374 => 101,  372 => 100,  369 => 99,  364 => 98,  361 => 97,  350 => 96,  337 => 92,  333 => 90,  325 => 88,  317 => 86,  315 => 85,  312 => 84,  310 => 83,  304 => 80,  300 => 79,  296 => 78,  292 => 77,  285 => 73,  281 => 72,  277 => 71,  273 => 70,  268 => 67,  256 => 66,  243 => 63,  238 => 61,  235 => 60,  224 => 59,  208 => 56,  197 => 55,  182 => 49,  174 => 46,  170 => 44,  164 => 42,  162 => 41,  158 => 39,  152 => 37,  146 => 35,  144 => 34,  138 => 31,  134 => 30,  130 => 28,  122 => 26,  110 => 24,  108 => 23,  101 => 19,  97 => 18,  87 => 16,  83 => 15,  72 => 10,  64 => 8,  56 => 7,  49 => 2,  36 => 1,  31 => 109,  28 => 95,  22 => 58,  19 => 54,  86 => 28,  81 => 26,  76 => 11,  70 => 21,  68 => 9,  63 => 18,  58 => 16,  55 => 15,  50 => 13,  45 => 11,  39 => 9,  37 => 8,  33 => 6,  30 => 5,  25 => 65,);
    }
}
