<?php

/* OroReminderBundle:Reminder:showScript.html.twig */
class __TwigTemplate_5577681d6e39aea076e6ad54a2c3db799464d3df9f8b2b5b9fb362e6532508e3 extends Twig_Template
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
        $__internal_ee71f48f06d0cb0f44d49c0dddd22c5a8bac6ca8ddb4990d272c6f816fb950f5 = $this->env->getExtension("native_profiler");
        $__internal_ee71f48f06d0cb0f44d49c0dddd22c5a8bac6ca8ddb4990d272c6f816fb950f5->enter($__internal_ee71f48f06d0cb0f44d49c0dddd22c5a8bac6ca8ddb4990d272c6f816fb950f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroReminderBundle:Reminder:showScript.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "    <script type=\"text/javascript\">
        require(['ororeminder/js/reminder-handler'], function(reminderHandler) {
            reminderHandler.setReminders(";
            // line 4
            echo twig_jsonencode_filter($this->env->getExtension('oro_reminder.subscriber')->getRequestedRemindersData());
            echo ");
            reminderHandler.showReminders();
        });
    </script>
";
        }
        
        $__internal_ee71f48f06d0cb0f44d49c0dddd22c5a8bac6ca8ddb4990d272c6f816fb950f5->leave($__internal_ee71f48f06d0cb0f44d49c0dddd22c5a8bac6ca8ddb4990d272c6f816fb950f5_prof);

    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Reminder:showScript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 2,  22 => 1,);
    }
}
