<?php

/* OroCalendarBundle:Dashboard:myCalendar.html.twig */
class __TwigTemplate_28d7b834fef3e7004dad43b78cb9cbb16c198ca529365b2abf158a82a17f08fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroCalendarBundle:Dashboard:myCalendar.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_127e2aae740a5b494cc805616d06e3a584d467c8f51864c70fe9487690cbfc52 = $this->env->getExtension("native_profiler");
        $__internal_127e2aae740a5b494cc805616d06e3a584d467c8f51864c70fe9487690cbfc52->enter($__internal_127e2aae740a5b494cc805616d06e3a584d467c8f51864c70fe9487690cbfc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCalendarBundle:Dashboard:myCalendar.html.twig"));

        // line 2
        $context["calendarTemplates"] = $this->loadTemplate("OroCalendarBundle::templates.html.twig", "OroCalendarBundle:Dashboard:myCalendar.html.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_127e2aae740a5b494cc805616d06e3a584d467c8f51864c70fe9487690cbfc52->leave($__internal_127e2aae740a5b494cc805616d06e3a584d467c8f51864c70fe9487690cbfc52_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_b7387d78008c66a30dd8b6f41c1ede397c8c89350d22d7a88c1c251db32209f3 = $this->env->getExtension("native_profiler");
        $__internal_b7387d78008c66a30dd8b6f41c1ede397c8c89350d22d7a88c1c251db32209f3->enter($__internal_b7387d78008c66a30dd8b6f41c1ede397c8c89350d22d7a88c1c251db32209f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $context["dashboardCalendarOptions"] = array("widgetId" =>         // line 6
(isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId")), "calendar" => $this->getAttribute(        // line 7
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "aspectRatio" => 2, "calendarOptions" =>         // line 9
(isset($context["calendar"]) ? $context["calendar"] : $this->getContext($context, "calendar")), "eventsItemsJson" => $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("oro_api_get_calendarevents", array("calendar" => $this->getAttribute(        // line 10
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "start" => twig_date_format_filter($this->env, (isset($context["startDate"]) ? $context["startDate"] : $this->getContext($context, "startDate")), "c"), "end" => twig_date_format_filter($this->env, (isset($context["endDate"]) ? $context["endDate"] : $this->getContext($context, "endDate")), "c"), "subordinate" => true))), "connectionsItemsJson" => $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("oro_api_get_calendar_connections", array("id" => $this->getAttribute(        // line 11
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array())))), "eventsOptions" => array("defaultDate" => twig_date_format_filter($this->env, "now", "c", call_user_func_array($this->env->getFunction('oro_timezone')->getCallable(), array())), "containerSelector" => ".calendar-events", "itemViewTemplateSelector" => ("#template-view-calendar-event-" .         // line 15
(isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId"))), "itemFormTemplateSelector" => ("#template-calendar-event-" .         // line 16
(isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId"))), "defaultView" => "agendaDay", "firstHour" =>         // line 18
(isset($context["firstHour"]) ? $context["firstHour"] : $this->getContext($context, "firstHour")), "aspectRatio" => 2), "connectionsOptions" => array(), "colorManagerOptions" => array("colors" => $this->env->getExtension('config_extension')->getConfigValue("oro_calendar.calendar_colors")));
        // line 27
        echo "    <div class=\"calendar-dashboard-widget\" data-page-component-module=\"orocalendar/js/app/components/dashboard-calendar-component\"
         data-page-component-options=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["dashboardCalendarOptions"]) ? $context["dashboardCalendarOptions"] : $this->getContext($context, "dashboardCalendarOptions"))), "html", null, true);
        echo "\">
        <div class=\"calendar-events\"></div>
    </div>
    ";
        // line 31
        echo $context["calendarTemplates"]->getcalendar_event_view_template(("template-view-calendar-event-" . (isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId"))));
        echo "
    ";
        // line 32
        echo $context["calendarTemplates"]->getcalendar_event_form_template(("template-calendar-event-" . (isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId"))), (isset($context["event_form"]) ? $context["event_form"] : $this->getContext($context, "event_form")));
        echo "
";
        
        $__internal_b7387d78008c66a30dd8b6f41c1ede397c8c89350d22d7a88c1c251db32209f3->leave($__internal_b7387d78008c66a30dd8b6f41c1ede397c8c89350d22d7a88c1c251db32209f3_prof);

    }

    // line 35
    public function block_actions($context, array $blocks = array())
    {
        $__internal_cf1d6fc607b5a363498982219d2e01b5ab1e9f0e20a51a65f50f5caaa8efd9fb = $this->env->getExtension("native_profiler");
        $__internal_cf1d6fc607b5a363498982219d2e01b5ab1e9f0e20a51a65f50f5caaa8efd9fb->enter($__internal_cf1d6fc607b5a363498982219d2e01b5ab1e9f0e20a51a65f50f5caaa8efd9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 36
        echo "    ";
        $context["actions"] = array(0 => array("icon" => "plus-sign", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.calendar.new_event"), "data" => array("action-name" => "new-event")), 1 => array("type" => "link", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.calendar.view_calendar"), "url" => $this->env->getExtension('routing')->getPath("oro_calendar_view_default")));
        // line 48
        echo "
    ";
        // line 49
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
        
        $__internal_cf1d6fc607b5a363498982219d2e01b5ab1e9f0e20a51a65f50f5caaa8efd9fb->leave($__internal_cf1d6fc607b5a363498982219d2e01b5ab1e9f0e20a51a65f50f5caaa8efd9fb_prof);

    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Dashboard:myCalendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 49,  86 => 48,  83 => 36,  77 => 35,  68 => 32,  64 => 31,  58 => 28,  55 => 27,  53 => 18,  52 => 16,  51 => 15,  50 => 11,  49 => 10,  48 => 9,  47 => 7,  46 => 6,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
    }
}
