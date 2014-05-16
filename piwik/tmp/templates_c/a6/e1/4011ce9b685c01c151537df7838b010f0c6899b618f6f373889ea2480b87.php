<?php

/* @CoreUpdater/runUpdaterAndExit_welcome_cli.twig */
class __TwigTemplate_a6e14011ce9b685c01c151537df7838b010f0c6899b618f6f373889ea2480b87 extends Twig_Template
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
        // line 2
        ob_start();
        // line 3
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageContent", "[", "]", "

    *"));
        echo "
";
        $context["helpMessage"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
*** ";
        // line 6
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_UpdateTitle"));
        echo " ***
";
        // line 7
        if ($this->getContext($context, "coreError")) {
            // line 8
            echo "
    [X] ";
            // line 9
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_CriticalErrorDuringTheUpgradeProcess"));
            echo "

    ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "errorMessages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo $this->getContext($context, "message");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
    ";
            // line 15
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_HelpMessageIntroductionWhenError"));
            echo "

    * ";
            // line 17
            echo $this->getContext($context, "helpMessage");
            echo "

";
        } elseif (($this->getContext($context, "coreToUpdate") || (twig_length_filter($this->env, $this->getContext($context, "pluginNamesToUpdate")) > 0))) {
            // line 20
            echo "
    ";
            // line 21
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_DatabaseUpgradeRequired"));
            echo "

    ";
            // line 23
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_YourDatabaseIsOutOfDate"));
            echo "

";
            // line 25
            if ($this->getContext($context, "coreToUpdate")) {
                // line 26
                echo "    ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_PiwikWillBeUpgradedFromVersionXToVersionY", $this->getContext($context, "current_piwik_version"), $this->getContext($context, "new_piwik_version")));
                echo "
";
            }
            // line 29
            if ((twig_length_filter($this->env, $this->getContext($context, "pluginNamesToUpdate")) > 0)) {
                // line 30
                ob_start();
                echo implode($this->getContext($context, "pluginNamesToUpdate"), ", ");
                $context["listOfPlugins"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 31
                echo "    ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheFollowingPluginsWillBeUpgradedX", $this->getContext($context, "listOfPlugins")));
                echo "
";
            }
            // line 33
            echo "
";
            // line 35
            if ((array_key_exists("queries", $context) && (!twig_test_empty($this->getContext($context, "queries"))))) {
                // line 36
                echo "*** Note: this is a Dry Run ***

    ";
                // line 38
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getContext($context, "queries"));
                foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                    echo trim($this->getContext($context, "query"));
                    echo "
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "
*** End of Dry Run ***
";
            } else {
                // line 43
                echo "    ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreUpdater_TheUpgradeProcessMayTakeAWhilePleaseBePatient"));
                echo "
";
            }
            // line 45
            echo "
";
        }
        // line 48
        echo "
";
    }

    public function getTemplateName()
    {
        return "@CoreUpdater/runUpdaterAndExit_welcome_cli.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 48,  135 => 45,  129 => 43,  124 => 40,  113 => 38,  109 => 36,  107 => 35,  104 => 33,  98 => 31,  94 => 30,  92 => 29,  86 => 26,  84 => 25,  79 => 23,  74 => 21,  71 => 20,  65 => 17,  60 => 15,  57 => 14,  49 => 12,  45 => 11,  40 => 9,  37 => 8,  35 => 7,  31 => 6,  28 => 5,  21 => 3,  19 => 2,);
    }
}
