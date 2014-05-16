<?php

/* @CoreUpdater/newVersionAvailable.twig */
class __TwigTemplate_cd4810cdeffd217d28b6b6d301fa8c6ff128d0ec7ed189e0a7b424d0ec0942a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@CoreUpdater/layout.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@CoreUpdater/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<br/>
<p><strong>";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_ThereIsNewVersionAvailableForUpdate")), "html", null, true);
        echo "</strong></p>

";
        // line 7
        if ($this->getContext($context, "can_auto_update")) {
            // line 8
            echo "    <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YouCanUpgradeAutomaticallyOrDownloadPackage", $this->getContext($context, "piwik_new_version"))), "html", null, true);
            echo "</p>
";
        } else {
            // line 10
            echo "    <p>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("Installation_SystemCheckAutoUpdateHelp")), "html", null, true);
            echo "</p>
    <p>";
            // line 11
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YouMustDownloadPackageOrFixPermissions", $this->getContext($context, "piwik_new_version"))), "html", null, true);
            echo "
        ";
            // line 12
            echo $this->getContext($context, "makeWritableCommands");
            echo "
    </p>
";
        }
        // line 15
        echo "
";
        // line 16
        if ($this->getContext($context, "can_auto_update")) {
            // line 17
            echo "<form id=\"oneclickupdate\" action=\"index.php\">
    <input type=\"hidden\" name=\"module\" value=\"CoreUpdater\"/>
    <input type=\"hidden\" name=\"action\" value=\"oneClickUpdate\"/>
    <input type=\"submit\" class=\"submit\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateAutomatically")), "html", null, true);
            echo "\"/>
    ";
        }
        // line 22
        echo "    <a style=\"margin-left:50px;\" class=\"submit button\"
       href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getContext($context, "piwik_latest_version_url"), "html", null, true);
        echo "?cb=";
        echo twig_escape_filter($this->env, $this->getContext($context, "piwik_new_version"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_DownloadX", $this->getContext($context, "piwik_new_version"))), "html", null, true);
        echo "</a><br/>
    ";
        // line 24
        if ($this->getContext($context, "can_auto_update")) {
            // line 25
            echo "</form>
";
        }
        // line 27
        echo "<br/>
<a href=\"index.php\">&laquo; ";
        // line 28
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_BackToPiwik")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/newVersionAvailable.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  94 => 27,  90 => 25,  88 => 24,  80 => 23,  77 => 22,  72 => 20,  67 => 17,  65 => 16,  62 => 15,  56 => 12,  52 => 11,  47 => 10,  41 => 8,  39 => 7,  34 => 5,  31 => 4,  28 => 3,);
    }
}
