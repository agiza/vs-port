<?php

/* @CorePluginsAdmin/browsePluginsActions.twig */
class __TwigTemplate_22b7f59322c7c7149378821cc70cd1b03c5f1ed4a73019940c88bef941c8b81c extends Twig_Template
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
        echo "<div class=\"sort\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => "popular", "query" => ""))), "html", null, true);
        echo "\" ";
        if (("popular" == $this->getContext($context, "sort"))) {
            echo "class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_SortByPopular")), "html", null, true);
        echo "</a>
    |
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => "newest", "query" => ""))), "html", null, true);
        echo "\" ";
        if (("newest" == $this->getContext($context, "sort"))) {
            echo "class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_SortByNewest")), "html", null, true);
        echo "</a>
    |
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => "alpha", "query" => ""))), "html", null, true);
        echo "\" ";
        if (("alpha" == $this->getContext($context, "sort"))) {
            echo "class=\"active\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_SortByAlpha")), "html", null, true);
        echo "</a>
    |
    <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("sort" => ""))), "html", null, true);
        echo "\" method=\"POST\">
        <input value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getContext($context, "query"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
        echo "\" type=\"text\" name=\"query\"/>
        <button type=\"submit\">";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_Search")), "html", null, true);
        echo "</button>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/browsePluginsActions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  55 => 8,  22 => 2,  19 => 1,  150 => 47,  144 => 45,  140 => 43,  123 => 39,  120 => 38,  114 => 36,  112 => 35,  108 => 34,  104 => 32,  102 => 31,  98 => 30,  94 => 28,  77 => 27,  74 => 26,  72 => 25,  67 => 22,  61 => 19,  58 => 18,  56 => 17,  52 => 15,  50 => 14,  44 => 6,  38 => 8,  33 => 4,  30 => 4,  25 => 2,);
    }
}
