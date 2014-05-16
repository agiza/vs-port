<?php

/* @CorePluginsAdmin/pluginOverview.twig */
class __TwigTemplate_192cf20782e0978c99efc4fe28440c4c0b551c475ec18620803b86d5b9e6adee extends Twig_Template
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
        $context["plugins"] = $this->env->loadTemplate("@CorePluginsAdmin/macros.twig");
        // line 2
        echo "
";
        // line 3
        if ($this->getContext($context, "isSuperUser")) {
            // line 4
            echo "    ";
            if (($this->getAttribute($this->getContext($context, "plugin"), "canBeUpdated") && (0 == twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements"))))) {
                // line 5
                echo "        <a class=\"update\"
           href=\"";
                // line 6
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "updatePlugin", "pluginName" => $this->getAttribute($this->getContext($context, "plugin"), "name"), "nonce" => $this->getContext($context, "updateNonce")))), "html", null, true);
                echo "\"
           >";
                // line 7
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle")), "html", null, true);
                echo "</a>
    ";
            } elseif ($this->getAttribute($this->getContext($context, "plugin"), "isInstalled")) {
                // line 9
                echo "        <span class=\"install\">";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Installed")), "html", null, true);
                echo "</span>
    ";
            } elseif ((0 < twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "missingRequirements")))) {
                // line 11
                echo "    ";
            } else {
                // line 12
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("action" => "installPlugin", "pluginName" => $this->getAttribute($this->getContext($context, "plugin"), "name"), "nonce" => $this->getContext($context, "installNonce")))), "html", null, true);
                echo "\"
           class=\"install\">";
                // line 13
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_ActionInstall")), "html", null, true);
                echo "</a>
    ";
            }
        }
        // line 16
        echo "

<h3 class=\"header\" title=\"";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
        echo "\">
    <a href=\"javascript:void(0);\" class=\"more\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html", null, true);
        echo "</a>
</h3>
<p class=\"description\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "description"), "html", null, true);
        echo "
    <br />
    <a href=\"javascript:void(0);\" title=\"";
        // line 23
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreDetails")), "html", null, true);
        echo "\" class=\"more\">&gt;&gt; ";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_MoreLowerCase")), "html", null, true);
        echo "</a>
</p>

";
        // line 26
        if ($this->getAttribute($this->getContext($context, "plugin"), "canBeUpdated")) {
            // line 27
            echo "    <p class=\"updateAvailableNotice\" data-activePluginTab=\"changelog\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_PluginUpdateAvailable", $this->getAttribute($this->getContext($context, "plugin"), "currentVersion"), $this->getAttribute($this->getContext($context, "plugin"), "latestVersion"))), "html", null, true);
            echo "</p>
";
        }
        // line 29
        echo "
";
        // line 30
        echo $context["plugins"]->getmissingRequirementsNotice($this->getContext($context, "plugin"));
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/pluginOverview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  89 => 27,  87 => 26,  79 => 23,  69 => 19,  47 => 11,  41 => 9,  36 => 7,  32 => 6,  29 => 5,  26 => 4,  24 => 3,  21 => 2,  65 => 18,  59 => 9,  55 => 13,  22 => 2,  19 => 1,  150 => 47,  144 => 45,  140 => 43,  123 => 39,  120 => 38,  114 => 36,  112 => 35,  108 => 34,  104 => 32,  102 => 31,  98 => 30,  94 => 28,  77 => 27,  74 => 21,  72 => 25,  67 => 22,  61 => 16,  58 => 18,  56 => 17,  52 => 15,  50 => 12,  44 => 6,  38 => 8,  33 => 4,  30 => 4,  25 => 2,);
    }
}
