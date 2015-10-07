<?php

/* OroReminderBundle:Reminder:subscribeScript.html.twig */
class __TwigTemplate_2fe14a261ab6768db3a44312ee1b95d172d13eed99195a0bb3af245978a2d496 extends Twig_Template
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
        $__internal_9a8101b7fe5c0d0646e9bd79b936aab3790fb4194d9c0c38dcc816be46cd887d = $this->env->getExtension("native_profiler");
        $__internal_9a8101b7fe5c0d0646e9bd79b936aab3790fb4194d9c0c38dcc816be46cd887d->enter($__internal_9a8101b7fe5c0d0646e9bd79b936aab3790fb4194d9c0c38dcc816be46cd887d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroReminderBundle:Reminder:subscribeScript.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "    ";
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("oro_reminder_reminder_templates", $context)) ? (_twig_default_filter((isset($context["oro_reminder_reminder_templates"]) ? $context["oro_reminder_reminder_templates"] : $this->getContext($context, "oro_reminder_reminder_templates")), "oro_reminder_reminder_templates")) : ("oro_reminder_reminder_templates")), array());
            // line 3
            echo "    <script type=\"text/javascript\">
        require(['ororeminder/js/reminder-handler'], function(reminderHandler) {
            reminderHandler.init(";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo ", ";
            echo (($this->env->getExtension('sync_extension')->checkWsConnected()) ? ("true") : ("false"));
            echo ");
        });
    </script>
";
        }
        // line 9
        echo "
";
        
        $__internal_9a8101b7fe5c0d0646e9bd79b936aab3790fb4194d9c0c38dcc816be46cd887d->leave($__internal_9a8101b7fe5c0d0646e9bd79b936aab3790fb4194d9c0c38dcc816be46cd887d_prof);

    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:subscribeScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  31 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
