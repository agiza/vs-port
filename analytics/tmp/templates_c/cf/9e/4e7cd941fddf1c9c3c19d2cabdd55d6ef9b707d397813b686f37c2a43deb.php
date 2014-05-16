<?php

/* @CoreHome/_headerMessage.twig */
class __TwigTemplate_cf9e4e7cd941fddf1c9c3c19d2cabdd55d6ef9b707d397813b686f37c2a43deb extends Twig_Template
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
        $context["test_latest_version_available"] = "3.0";
        // line 3
        $context["test_piwikUrl"] = "http://demo.piwik.org/";
        // line 4
        ob_start();
        echo twig_escape_filter($this->env, (($this->getContext($context, "piwikUrl") == "http://demo.piwik.org/") || ($this->getContext($context, "piwikUrl") == "https://demo.piwik.org/")), "html", null, true);
        $context["isPiwikDemo"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 5
        echo "
<span id=\"header_message\" class=\"";
        // line 6
        if (($this->getContext($context, "isPiwikDemo") || (!$this->getContext($context, "latest_version_available")))) {
            echo "header_info";
        } else {
            echo "header_alert";
        }
        echo "\">
    <span class=\"header_short\">
        ";
        // line 8
        if ($this->getContext($context, "isPiwikDemo")) {
            // line 9
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
            echo "
        ";
        } elseif ($this->getContext($context, "latest_version_available")) {
            // line 11
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_NewUpdatePiwikX", $this->getContext($context, "latest_version_available"))), "html", null, true);
            echo "
        ";
        } else {
            // line 13
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_AboutPiwikX", $this->getContext($context, "piwik_version"))), "html", null, true);
            echo "
        ";
        }
        // line 15
        echo "    </span>

    <span class=\"header_full\">
        ";
        // line 18
        if ($this->getContext($context, "isPiwikDemo")) {
            // line 19
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreViewingDemoShortMessage")), "html", null, true);
            echo "
            <br/>
            ";
            // line 21
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_DownloadFullVersion", "<a href='http://piwik.org/'>", "</a>", "<a href='http://piwik.org'>piwik.org</a>"));
            echo "
            <br/>
        ";
        }
        // line 24
        echo "        ";
        if ($this->getContext($context, "latest_version_available")) {
            // line 25
            echo "            ";
            if ($this->getContext($context, "isSuperUser")) {
                // line 26
                echo "                ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseUpdateNow", $this->getContext($context, "latest_version_available"), "<br /><a href='index.php?module=CoreUpdater&amp;action=newVersionAvailable'>", "</a>", "<a href='?module=Proxy&amp;action=redirect&amp;url=http://piwik.org/changelog/' target='_blank'>", "</a>"));
                echo "
                <br/>
                ";
                // line 28
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_YouAreCurrentlyUsing", $this->getContext($context, "piwik_version"))), "html", null, true);
                echo "
            ";
            } elseif ((!$this->getContext($context, "isPiwikDemo"))) {
                // line 30
                echo "                ";
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikXIsAvailablePleaseNotifyPiwikAdmin", "<a href='?module=Proxy&action=redirect&url=http://piwik.org/' target='_blank'>Piwik</a> <a href='?module=Proxy&action=redirect&url=http://piwik.org/changelog/' target='_blank'>{{ latest_version_available }}</a>"));
                echo "
            ";
            }
            // line 32
            echo "        ";
        } elseif ((!$this->getContext($context, "isPiwikDemo"))) {
            // line 33
            echo "            ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), array("General_PiwikIsACollaborativeProjectYouCanContributeAndDonate", "<a href='?module=Proxy&action=redirect&url=http://piwik.org' target='_blank'>", ($this->getContext($context, "piwik_version") . "</a>"), "<br />", "<a target='_blank' href='?module=Proxy&action=redirect&url=http://piwik.org/get-involved/'>", "</a>", "<br/>", "<a href='http://piwik.org/donate/' target='_blank'><strong><em>", "</em></strong></a>"));
            // line 42
            echo "
        ";
        }
        // line 44
        echo "        ";
        if ($this->getContext($context, "hasSomeAdminAccess")) {
            // line 45
            echo "            <br/>
            <div id=\"updateCheckLinkContainer\">
                <span class='loadingPiwik' style=\"display:none;\"><img src='plugins/Zeitgeist/images/loading-blue.gif'/></span>
                <img src=\"plugins/Zeitgeist/images/reload.png\"/>
                <a href=\"#\" id=\"checkForUpdates\"><em>";
            // line 49
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("CoreHome_CheckForUpdates")), "html", null, true);
            echo "</em></a>
            </div>
        ";
        }
        // line 52
        echo "    </span>
</span>
";
    }

    public function getTemplateName()
    {
        return "@CoreHome/_headerMessage.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 52,  120 => 49,  114 => 45,  111 => 44,  107 => 42,  84 => 26,  78 => 24,  97 => 33,  95 => 30,  91 => 31,  57 => 14,  101 => 32,  77 => 27,  48 => 17,  165 => 64,  153 => 62,  151 => 61,  136 => 52,  130 => 50,  102 => 42,  98 => 40,  79 => 33,  71 => 32,  62 => 17,  44 => 9,  21 => 3,  35 => 6,  26 => 4,  90 => 28,  82 => 22,  69 => 8,  52 => 5,  39 => 8,  63 => 6,  59 => 15,  33 => 6,  28 => 5,  24 => 3,  137 => 36,  129 => 33,  127 => 32,  124 => 47,  117 => 30,  112 => 28,  104 => 33,  96 => 24,  92 => 16,  88 => 30,  83 => 21,  76 => 19,  73 => 14,  67 => 18,  64 => 18,  58 => 11,  49 => 12,  46 => 12,  31 => 6,  27 => 5,  23 => 4,  19 => 2,  135 => 44,  132 => 34,  128 => 49,  125 => 35,  122 => 34,  115 => 21,  113 => 44,  108 => 27,  106 => 43,  100 => 25,  87 => 9,  81 => 25,  74 => 20,  72 => 21,  68 => 45,  66 => 19,  60 => 12,  55 => 15,  53 => 13,  50 => 9,  41 => 9,  38 => 2,  36 => 7,  32 => 7,  30 => 6,  22 => 2,  56 => 13,  54 => 13,  51 => 11,  47 => 11,  45 => 9,  42 => 11,  40 => 12,  37 => 9,  34 => 8,  29 => 4,);
    }
}
