<?php

/* @CorePluginsAdmin/browsePlugins.twig */
class __TwigTemplate_370ac7243d2e01197f91305d0e0c8259a745c5ce30b0ec987dad19733122bb41 extends Twig_Template
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
        // line 2
        $context["pluginsMacro"] = $this->env->loadTemplate("@CorePluginsAdmin/macros.twig");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"pluginslistActionBar\">

        <h2>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_TeaserExtendPiwikByPlugin")), "html", null, true);
        echo "</h2>

        <div class=\"infoBox\">
            ";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_BeCarefulUsingPlugins")), "html", null, true);
        echo "
        </div>

        ";
        // line 14
        $this->env->loadTemplate("@CorePluginsAdmin/browsePluginsActions.twig")->display($context);
        // line 15
        echo "    </div>

    ";
        // line 17
        if ((!$this->getContext($context, "isSuperUser"))) {
            // line 18
            echo "        <div class=\"pluginslistNonSuperUserHint\">
            ";
            // line 19
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NotAllowedToBrowseMarketplacePlugins")), "html", null, true);
            echo "
        </div>
    ";
        }
        // line 22
        echo "
    <div class=\"pluginslist\">

        ";
        // line 25
        if (twig_length_filter($this->env, $this->getContext($context, "plugins"))) {
            // line 26
            echo "
            ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "plugins"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 28
                echo "
                <div class=\"plugin\">
                    <div class=\"content\" data-pluginName=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html", null, true);
                echo "\">
                        ";
                // line 31
                $this->env->loadTemplate("@CorePluginsAdmin/pluginOverview.twig")->display($context);
                // line 32
                echo "                    </div>

                    <div class=\"footer\" data-pluginName=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "plugin"), "name"), "html", null, true);
                echo "\">
                        ";
                // line 35
                if ($this->getAttribute($this->getContext($context, "plugin"), "featured")) {
                    // line 36
                    echo "                            ";
                    echo $context["pluginsMacro"]->getfeaturedIcon("right");
                    echo "
                        ";
                }
                // line 38
                echo "                        ";
                $this->env->loadTemplate("@CorePluginsAdmin/pluginMetadata.twig")->display($context);
                // line 39
                echo "                    </div>
                </div>

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
        ";
        } else {
            // line 45
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CorePluginsAdmin_NoPluginsFound")), "html", null, true);
            echo "
        ";
        }
        // line 47
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@CorePluginsAdmin/browsePlugins.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 47,  144 => 45,  140 => 43,  123 => 39,  120 => 38,  114 => 36,  112 => 35,  108 => 34,  104 => 32,  102 => 31,  98 => 30,  94 => 28,  77 => 27,  74 => 26,  72 => 25,  67 => 22,  61 => 19,  58 => 18,  56 => 17,  52 => 15,  50 => 14,  44 => 11,  38 => 8,  33 => 5,  30 => 4,  25 => 2,);
    }
}
