<?php

/* @ScheduledReports/reportParametersScheduledReports.twig */
class __TwigTemplate_62a63c451c5a6fe9ec0dac7de1ee2ce26366cd1670aee5fde6ca79b2e9a3fe34 extends Twig_Template
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
        echo "<tr class='";
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'>
    <td style='width:240px;' class=\"first\">";
        // line 2
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SendReportTo")), "html", null, true);
        echo "
    </td>
    <td>
        <input type=\"checkbox\" id=\"report_email_me\"/>
        <label for=\"report_email_me\">";
        // line 6
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_SentToMe")), "html", null, true);
        echo " (<em>";
        echo twig_escape_filter($this->env, $this->getContext($context, "currentUserEmail"), "html", null, true);
        echo "</em>) </label>
        <br/><br/>
        ";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), array("ScheduledReports_AlsoSendReportToTheseEmails")), "html", null, true);
        echo "<br/>
        <textarea cols=\"30\" rows=\"3\" id=\"report_additional_emails\" class=\"inp\"></textarea>
        <script>
            function updateEvolutionGraphParameterVisibility() {
                var evolutionGraphParameterInput = \$('.report_evolution_graph');
                var nonApplicableDisplayFormats = ['1', '4'];
                \$.inArray(\$('#display_format').find('option:selected').val(), nonApplicableDisplayFormats) != -1 ?
                        evolutionGraphParameterInput.hide() : evolutionGraphParameterInput.show();
            }

            \$(function () {

                resetReportParametersFunctions ['";
        // line 20
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'] =
                        function () {

                            var reportParameters = {
                                'displayFormat': '";
        // line 24
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultDisplayFormat"), "html", null, true);
        echo "',
                                'emailMe': ";
        // line 25
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultEmailMe"), "html", null, true);
        echo ",
                                'evolutionGraph': ";
        // line 26
        echo twig_escape_filter($this->env, $this->getContext($context, "defaultEvolutionGraph"), "html", null, true);
        echo ",
                                'additionalEmails': null
                            };
                            updateReportParametersFunctions['";
        // line 29
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'](reportParameters);
                        };

                updateReportParametersFunctions['";
        // line 32
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'] =
                        function (reportParameters) {

                            if (reportParameters == null) return;

                            \$('#display_format').find('option[value=' + reportParameters.displayFormat + ']').prop('selected', 'selected');
                            updateEvolutionGraphParameterVisibility();

                            if (reportParameters.emailMe === true)
                                \$('#report_email_me').prop('checked', 'checked');
                            else
                                \$('#report_email_me').removeProp('checked');

                            if (reportParameters.evolutionGraph === true)
                                \$('#report_evolution_graph').prop('checked', 'checked');
                            else
                                \$('#report_evolution_graph').removeProp('checked');

                            if (reportParameters.additionalEmails != null)
                                \$('#report_additional_emails').text(reportParameters.additionalEmails.join('\\n'));
                            else
                                \$('#report_additional_emails').html('');

                            \$(document).trigger('ScheduledReport.edit', {});
                        };

                getReportParametersFunctions['";
        // line 58
        echo twig_escape_filter($this->env, $this->getContext($context, "reportType"), "html", null, true);
        echo "'] =
                        function () {

                            var parameters = Object();

                            parameters.displayFormat = \$('#display_format').find('option:selected').val();
                            parameters.emailMe = \$('#report_email_me').prop('checked');
                            parameters.evolutionGraph = \$('#report_evolution_graph').prop('checked');

                            var additionalEmails = \$('#report_additional_emails').val();
                            parameters.additionalEmails =
                                    additionalEmails != '' ? additionalEmails.split('\\n') : [];

                            return parameters;
                        };

                \$('#display_format').change(updateEvolutionGraphParameterVisibility);
            });
        </script>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/reportParametersScheduledReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 58,  80 => 32,  74 => 29,  68 => 26,  64 => 25,  60 => 24,  53 => 20,  38 => 8,  31 => 6,  24 => 2,  19 => 1,);
    }
}
