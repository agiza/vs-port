<?php

/* @CorePluginsAdmin/pluginMetadata.twig */
class __TwigTemplate_b47237be3a0e2e942217e4d6f37bdffaf2c6d4142612ec49ddc5632e9930edd9 extends Twig_Template
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
<hr class=\"metadataSeparator\"/>
<ul class=\"metadata\">
    <li class=\"odd\">";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Version")), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "latestVersion"), "html", null, true);
        echo "</strong></li>
    <li class=\"even\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Updated")), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "lastUpdated"), "html", null, true);
        echo "</strong></li>
    <li class=\"odd\">";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Downloads")), "html", null, true);
        echo ": <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "numDownloads"), "html", null, true);
        echo "</strong></li>
    <li class=\"even\">";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_Developer")), "html", null, true);
        echo ": <strong>";
        echo $context["plugins"]->getpluginDeveloper($this->getAttribute($this->getContext($context, "plugin"), "owner"));
        echo "</strong></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/pluginMetadata.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 29,  89 => 27,  87 => 26,  79 => 23,  69 => 19,  47 => 11,  41 => 9,  36 => 7,  32 => 6,  29 => 5,  26 => 5,  24 => 3,  21 => 2,  65 => 18,  59 => 9,  55 => 13,  22 => 2,  19 => 1,  150 => 47,  144 => 45,  140 => 43,  123 => 39,  120 => 38,  114 => 36,  112 => 35,  108 => 34,  104 => 32,  102 => 31,  98 => 30,  94 => 28,  77 => 27,  74 => 21,  72 => 25,  67 => 22,  61 => 16,  58 => 18,  56 => 17,  52 => 15,  50 => 12,  44 => 8,  38 => 7,  33 => 4,  30 => 4,  25 => 2,);
    }
}
