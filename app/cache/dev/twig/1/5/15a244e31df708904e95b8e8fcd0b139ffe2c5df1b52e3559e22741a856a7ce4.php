<?php

/* OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig */
class __TwigTemplate_15a244e31df708904e95b8e8fcd0b139ffe2c5df1b52e3559e22741a856a7ce4 extends Twig_Template
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
        $__internal_7fe0d7a06e5413ddddedeef8a236be59fee63c4ac38c3f1a2a32e01a4072fa61 = $this->env->getExtension("native_profiler");
        $__internal_7fe0d7a06e5413ddddedeef8a236be59fee63c4ac38c3f1a2a32e01a4072fa61->enter($__internal_7fe0d7a06e5413ddddedeef8a236be59fee63c4ac38c3f1a2a32e01a4072fa61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig"));

        // line 1
        echo "<script type=\"text/html\" class=\"reminder_templates\" data-identifier=\"calendar_event_template\">
    <% if (url != '') { %>
    <span><a class=\"hash-navigation-link\" href=\"<%= url %>\"><%= subject %></a> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.calendar.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } else { %>
    <span><%= subject %>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.calendar.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } %>
</script>
";
        
        $__internal_7fe0d7a06e5413ddddedeef8a236be59fee63c4ac38c3f1a2a32e01a4072fa61->leave($__internal_7fe0d7a06e5413ddddedeef8a236be59fee63c4ac38c3f1a2a32e01a4072fa61_prof);

    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:CalendarEvent:reminderTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  26 => 3,  22 => 1,);
    }
}
