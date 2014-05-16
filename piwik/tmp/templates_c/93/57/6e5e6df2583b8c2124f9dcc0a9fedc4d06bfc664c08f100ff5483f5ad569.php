<?php

/* @MobileMessaging/reportParametersScheduledReports.twig */
class __TwigTemplate_93576e5e6df2583b8c2124f9dcc0a9fedc4d06bfc664c08f100ff5483f5ad569 extends Twig_Template
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
        echo "
<tr class='";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'>
    <td class=\"first\">
        ";
        // line 4
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_PhoneNumbers")), "html", null, true);
        echo "
    </td>
    <td>
        <div class=\"entityInlineHelp\">
        ";
        // line 8
        if ((twig_length_filter($this->env, $this->getContext($context, "phoneNumbers")) == 0)) {
            // line 9
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_NoPhoneNumbers")), "html", null, true);
            echo "
        ";
        } else {
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "phoneNumbers"));
            foreach ($context['_seq'] as $context["_key"] => $context["phoneNumber"]) {
                // line 12
                echo "                <label><input name='phoneNumbers' type='checkbox' id='";
                echo twig_escape_filter($this->env, $this->getContext($context, "phoneNumber"), "html", null, true);
                echo "'/>";
                echo twig_escape_filter($this->env, $this->getContext($context, "phoneNumber"), "html", null, true);
                echo "</label>
                <br/>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phoneNumber'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "            ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_AdditionalPhoneNumbers")), "html", null, true);
            echo "
        ";
        }
        // line 17
        echo "            <a href='";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), array(array("module" => "MobileMessaging", "action" => "index", "updated" => null))), "html", null, true);
        echo "'>";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("MobileMessaging_MobileReport_MobileMessagingSettingsLink")), "html", null, true);
        echo "</a>
        </div>
        <script>
            \$(function () {
                resetReportParametersFunctions ['";
        // line 21
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'] =
                        function () {

                            var reportParameters = {
                                'phoneNumbers': []
                            };

                            updateReportParametersFunctions['";
        // line 28
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'](reportParameters);
                        };

                updateReportParametersFunctions['";
        // line 31
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'] =
                        function (reportParameters) {

                            if (reportParameters == null) return;

                            \$('[name=phoneNumbers]').removeProp('checked');
                            \$(reportParameters.phoneNumbers).each(function (index, phoneNumber) {
                                \$('#\\\\' + phoneNumber).prop('checked', 'checked');
                            });

                            \$(document).trigger('ScheduledReport.edit', {});

                        };

                getReportParametersFunctions['";
        // line 45
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'] =
                        function () {

                            var parameters = Object();

                            var selectedPhoneNumbers =
                                    \$.map(
                                            \$('[name=phoneNumbers]').filter(function() {
                                                return !this.disabled && this.checked;
                                            }),
                                            function (phoneNumber) {
                                                return \$(phoneNumber).attr('id');

                                            }
                                    );

                            // returning [''] when no phone numbers are selected avoids the \"please provide a value for 'parameters'\" error message
                            parameters.phoneNumbers =
                                    selectedPhoneNumbers.length > 0 ? selectedPhoneNumbers : [''];

                            return parameters;
                        };
            });
        </script>

    </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/reportParametersScheduledReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 45,  91 => 31,  85 => 28,  75 => 21,  65 => 17,  59 => 15,  47 => 12,  42 => 11,  36 => 9,  34 => 8,  27 => 4,  22 => 2,  19 => 1,);
    }
}
