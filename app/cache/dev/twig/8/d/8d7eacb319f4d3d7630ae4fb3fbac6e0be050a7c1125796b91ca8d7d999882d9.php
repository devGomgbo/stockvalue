<?php

/* OroReminderBundle:Reminder:reminderDefault.html.twig */
class __TwigTemplate_8d7eacb319f4d3d7630ae4fb3fbac6e0be050a7c1125796b91ca8d7d999882d9 extends Twig_Template
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
        $__internal_eb4af505825579939b367ffa8a7ae25fd52ee84a921adb8a988ec8e0ceff092d = $this->env->getExtension("native_profiler");
        $__internal_eb4af505825579939b367ffa8a7ae25fd52ee84a921adb8a988ec8e0ceff092d->enter($__internal_eb4af505825579939b367ffa8a7ae25fd52ee84a921adb8a988ec8e0ceff092d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroReminderBundle:Reminder:reminderDefault.html.twig"));

        // line 1
        echo "<script type=\"text/html\" class=\"reminder_templates\" data-identifier=\"default\">
    <% if (url != '') { %>
    <span><a class=\"hash-navigation-link\" href=\"<%= url %>\"><%= subject %></a> ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.reminder.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } else { %>
    <span><%= subject %>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.reminder.reminder_template.due_message"), "html", null, true);
        echo " <%= expireAt %></span>
    <% } %>
</script>
";
        
        $__internal_eb4af505825579939b367ffa8a7ae25fd52ee84a921adb8a988ec8e0ceff092d->leave($__internal_eb4af505825579939b367ffa8a7ae25fd52ee84a921adb8a988ec8e0ceff092d_prof);

    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:reminderDefault.html.twig";
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
