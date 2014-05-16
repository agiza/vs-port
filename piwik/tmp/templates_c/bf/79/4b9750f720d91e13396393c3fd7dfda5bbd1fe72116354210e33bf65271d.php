<?php

/* @CoreAdminHome/_menu.twig */
class __TwigTemplate_bf794b9750f720d91e13396393c3fd7dfda5bbd1fe72116354210e33bf65271d extends Twig_Template
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
        if ((twig_length_filter($this->env, $this->getContext($context, "adminMenu")) > 1)) {
            // line 2
            echo "    <div class=\"Menu Menu--admin\">
        <ul class=\"Menu-tabList\">
        ";
            // line 4
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "adminMenu"));
            foreach ($context['_seq'] as $context["name"] => $context["submenu"]) {
                // line 5
                echo "            ";
                if ($this->getAttribute($this->getContext($context, "submenu"), "_hasSubmenu")) {
                    // line 6
                    echo "            <li>
                <span>";
                    // line 7
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "name"))), "html", null, true);
                    echo "</span>
                <ul>
                ";
                    // line 9
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getContext($context, "submenu"));
                    foreach ($context['_seq'] as $context["sname"] => $context["url"]) {
                        // line 10
                        echo "                    ";
                        if ((twig_slice($this->env, $this->getContext($context, "sname"), 0, 1) != "_")) {
                            // line 11
                            echo "                    <li>
                        <a href='index.php";
                            // line 12
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('urlRewriteWithParameters')->getCallable(), array($this->getAttribute($this->getContext($context, "url"), "_url"))), "html", null, true);
                            echo "'
                           ";
                            // line 13
                            if ((array_key_exists("currentAdminMenuName", $context) && ($this->getContext($context, "sname") == $this->getContext($context, "currentAdminMenuName")))) {
                                echo "class='active'";
                            }
                            echo ">";
                            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array($this->getContext($context, "sname"))), "html", null, true);
                            echo "</a>
                    </li>
                    ";
                        }
                        // line 16
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['sname'], $context['url'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 17
                    echo "                </ul>
            </li>
            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['submenu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </ul>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreAdminHome/_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  75 => 20,  70 => 17,  64 => 16,  50 => 12,  32 => 6,  25 => 4,  19 => 1,  142 => 50,  139 => 49,  131 => 15,  127 => 13,  114 => 8,  104 => 55,  102 => 54,  97 => 51,  95 => 49,  92 => 48,  90 => 47,  84 => 44,  79 => 41,  76 => 40,  74 => 39,  69 => 36,  66 => 35,  63 => 34,  54 => 13,  52 => 29,  49 => 28,  47 => 11,  43 => 25,  37 => 23,  35 => 7,  29 => 5,  21 => 2,  489 => 163,  482 => 158,  463 => 155,  451 => 153,  434 => 152,  428 => 149,  422 => 145,  418 => 143,  403 => 141,  399 => 140,  396 => 139,  394 => 138,  390 => 137,  384 => 136,  378 => 135,  373 => 133,  367 => 132,  361 => 131,  357 => 130,  351 => 129,  344 => 125,  338 => 122,  334 => 121,  331 => 120,  324 => 117,  322 => 116,  317 => 115,  315 => 114,  309 => 110,  306 => 109,  298 => 108,  294 => 106,  288 => 104,  282 => 102,  280 => 101,  275 => 99,  268 => 95,  264 => 94,  260 => 93,  258 => 92,  255 => 91,  247 => 87,  244 => 86,  240 => 85,  235 => 84,  233 => 83,  230 => 82,  228 => 81,  225 => 80,  218 => 76,  213 => 74,  208 => 72,  205 => 71,  203 => 70,  197 => 66,  178 => 63,  167 => 62,  150 => 61,  144 => 58,  138 => 54,  135 => 46,  132 => 45,  129 => 14,  126 => 43,  123 => 42,  121 => 41,  117 => 9,  111 => 7,  106 => 37,  100 => 36,  93 => 32,  87 => 29,  83 => 28,  77 => 25,  73 => 24,  65 => 19,  61 => 33,  56 => 16,  48 => 11,  44 => 10,  40 => 9,  31 => 20,  28 => 3,);
    }
}
