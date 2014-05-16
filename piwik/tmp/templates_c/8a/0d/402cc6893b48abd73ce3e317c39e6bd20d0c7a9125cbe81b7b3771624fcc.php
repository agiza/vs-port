<?php

/* _sparklineFooter.twig */
class __TwigTemplate_8a0d402cc6893b48abd73ce3e317c39e6bd20d0c7a9125cbe81b7b3771624fcc extends Twig_Template
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
        echo "<script type=\"text/javascript\">
    \$(function () {
        initializeSparklines();
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "_sparklineFooter.twig";
    }

    public function getDebugInfo()
    {
        return array (  74 => 22,  69 => 20,  65 => 19,  58 => 16,  56 => 15,  52 => 14,  46 => 11,  42 => 10,  36 => 7,  32 => 6,  26 => 3,  22 => 2,  19 => 1,);
    }
}
