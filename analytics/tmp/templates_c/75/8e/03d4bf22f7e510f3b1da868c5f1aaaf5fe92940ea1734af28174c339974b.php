<?php

/* _iframeBuster.twig */
class __TwigTemplate_758e03d4bf22f7e510f3b1da868c5f1aaaf5fe92940ea1734af28174c339974b extends Twig_Template
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
        if ((array_key_exists("enableFrames", $context) && ($this->getContext($context, "enableFrames") == false))) {
            // line 2
            echo "    <script type=\"text/javascript\">
        \$(function () {
        \$('body').css(\"display\", \"none\");
        if (self == top) {
            var theBody = document.getElementsByTagName('body')[0];
            theBody.style.display = 'block';
        } else { top.location = self.location; }
    });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "_iframeBuster.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 2,  361 => 164,  355 => 161,  352 => 160,  346 => 157,  343 => 156,  341 => 155,  334 => 153,  329 => 151,  322 => 149,  314 => 144,  308 => 141,  297 => 133,  290 => 129,  283 => 125,  279 => 124,  268 => 116,  264 => 115,  258 => 114,  250 => 109,  246 => 108,  240 => 105,  233 => 101,  229 => 100,  226 => 99,  220 => 97,  218 => 96,  215 => 95,  207 => 92,  204 => 91,  202 => 90,  199 => 89,  195 => 87,  184 => 85,  180 => 84,  177 => 83,  175 => 82,  172 => 81,  169 => 80,  166 => 79,  163 => 78,  157 => 73,  148 => 69,  144 => 67,  142 => 66,  139 => 65,  136 => 64,  130 => 62,  127 => 61,  125 => 60,  122 => 59,  118 => 58,  111 => 57,  102 => 54,  99 => 53,  93 => 51,  91 => 50,  84 => 45,  82 => 44,  77 => 41,  73 => 39,  71 => 38,  45 => 15,  42 => 14,  37 => 12,  28 => 8,  19 => 1,);
    }
}
