<?php

/* OroCalendarBundle::templates.html.twig */
class __TwigTemplate_7c8a2c71e6dbbf6080f2b902c5fa2f0d2a396c6c9b05f98959100bd96daf7c8a extends Twig_Template
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
        $__internal_070eda935863a6e42e35a07228b972a4b1b998850f7a7706118ea115ca78ce52 = $this->env->getExtension("native_profiler");
        $__internal_070eda935863a6e42e35a07228b972a4b1b998850f7a7706118ea115ca78ce52->enter($__internal_070eda935863a6e42e35a07228b972a4b1b998850f7a7706118ea115ca78ce52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCalendarBundle::templates.html.twig"));

        // line 34
        echo "
";
        
        $__internal_070eda935863a6e42e35a07228b972a4b1b998850f7a7706118ea115ca78ce52->leave($__internal_070eda935863a6e42e35a07228b972a4b1b998850f7a7706118ea115ca78ce52_prof);

    }

    // line 1
    public function getcalendar_event_view_template($__id__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c7ed465812ea704039dcc3bfedccfeed11957794a274f27e337668e3676722c0 = $this->env->getExtension("native_profiler");
            $__internal_c7ed465812ea704039dcc3bfedccfeed11957794a274f27e337668e3676722c0->enter($__internal_c7ed465812ea704039dcc3bfedccfeed11957794a274f27e337668e3676722c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calendar_event_view_template"));

            // line 2
            echo "<script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
    ";
            // line 3
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::templates.html.twig", 3);
            // line 4
            echo "    <div class=\"widget-content\">
        <div class=\"row-fluid form-horizontal\">
            <div class=\"responsive-block\">
                ";
            // line 7
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.title.label"), "<%= formatter.string(title) %>");
            echo "
                ";
            // line 8
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.description.label"), "<%= formatter.text(description) %>");
            echo "
                ";
            // line 9
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.start.label"), "<%= formatter.dateTime(start) %>");
            echo "
                ";
            // line 10
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.end.label"), "<%= formatter.dateTime(end) %>");
            echo "
                ";
            // line 11
            echo $context["UI"]->getrenderHtmlProperty($this->env->getExtension('translator')->trans("oro.calendar.calendarevent.all_day.label"), "<%= formatter.bool(allDay) %>");
            echo "
            </div>
            <div class=\"widget-actions form-actions\" style=\"display: none;\">
                <% if (id != null && removable) { %>
                ";
            // line 15
            echo             // line 16
$context["UI"]->getdeleteButton(array("aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.confirmation"), "title" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.title"), "label" => $this->env->getExtension('translator')->trans("Delete"), "data" => array("action-name" => "delete")));
            // line 24
            echo "
                <% } %>
                <% if (id == null || (id != null && editable)) { %>
                <button class=\"btn\" type=\"button\" data-action-name=\"edit\">";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.ui.edit"), "html", null, true);
            echo "</button>
                <% } %>
            </div>
        </div>
    </div>
</script>
";
            
            $__internal_c7ed465812ea704039dcc3bfedccfeed11957794a274f27e337668e3676722c0->leave($__internal_c7ed465812ea704039dcc3bfedccfeed11957794a274f27e337668e3676722c0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 35
    public function getcalendar_event_form_template($__id__ = null, $__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "form" => $__form__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8f040e237443478e5f4b821c18d22c8813790f3c8d1e136f2d45d1b52bfed2c4 = $this->env->getExtension("native_profiler");
            $__internal_8f040e237443478e5f4b821c18d22c8813790f3c8d1e136f2d45d1b52bfed2c4->enter($__internal_8f040e237443478e5f4b821c18d22c8813790f3c8d1e136f2d45d1b52bfed2c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calendar_event_form_template"));

            // line 36
            echo "<script type=\"text/html\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\">
    ";
            // line 37
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::templates.html.twig", 37);
            // line 38
            echo "    ";
            $context["invitations"] = $this->loadTemplate("OroCalendarBundle::invitations.html.twig", "OroCalendarBundle::templates.html.twig", 38);
            // line 39
            echo "    ";
            $context["data"] = array(0 =>             // line 40
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row'), 1 =>             // line 41
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row'), 2 =>             // line 42
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "start", array()), 'row'), 3 =>             // line 43
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "end", array()), 'row'), 4 =>             // line 44
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "allDay", array()), 'row'), 5 =>             // line 45
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "backgroundColor", array()), 'row'), 6 => (($this->getAttribute(            // line 46
(isset($context["form"]) ? $context["form"] : null), "calendarUid", array(), "any", true, true)) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calendarUid", array()), 'row')) : (null)), 7 => strtr(            // line 47
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "childEvents", array()), 'row'), array("childEvents" => "invitedUsers")), 8 =>             // line 48
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "reminders", array()), 'row'), 9 =>             // line 49
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "notifyInvitedUsers", array()), 'row'));
            // line 52
            echo "    <div class=\"widget-content\">
        <div class=\"alert alert-error\" style=\"display: none;\"></div>
        <form id=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"#\">
            ";
            // line 55
            $context["options"] = array("view" => "orocalendar/js/app/views/calendar-event-form-view", "nativeMode" => $this->env->getExtension('mobile_extension')->isMobile());
            // line 59
            echo "            <div data-page-component-module=\"oroui/js/app/components/view-component\"
                 data-page-component-options=\"";
            // line 60
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
            echo "\"
                 data-layout=\"separate\">
                <fieldset class=\"form-horizontal\">
                    ";
            // line 63
            echo $this->env->getExtension('oro_ui.js_template')->prepareJsTemplateContent($context["UI"]->getscrollSubblock(null, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), true, false));
            echo "
                    <% if (typeof notifiable !== 'undefined' && notifiable) { %>
                        ";
            // line 65
            echo $context["invitations"]->getnotifyGuestsComponent();
            echo "
                    <% } %>
                    <div class=\"widget-actions form-actions\" style=\"display: none;\">
                        <% if (id != null && removable) { %>
                        ";
            // line 69
            echo             // line 70
$context["UI"]->getdeleteButton(array("aCss" => "no-hash", "id" => "btn-remove-calendarevent", "dataMessage" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.confirmation"), "title" => $this->env->getExtension('translator')->trans("oro.calendar.delete_event.title"), "label" => $this->env->getExtension('translator')->trans("Delete"), "data" => array("action-name" => "delete")));
            // line 78
            echo "
                        <% } %>
                        <button class=\"btn\" type=\"reset\">";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
            echo "</button>
                        <% if (id == null || (id != null && editable)) { %>
                        <button class=\"btn btn-primary\" type=\"submit\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
            echo "</button>
                        <% } %>
                    </div>
                </fieldset>
            </div>
        </form>
        ";
            // line 88
            echo $this->env->getExtension('oro_ui.js_template')->prepareJsTemplateContent($this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))));
            echo "
    </div>
</script>
";
            
            $__internal_8f040e237443478e5f4b821c18d22c8813790f3c8d1e136f2d45d1b52bfed2c4->leave($__internal_8f040e237443478e5f4b821c18d22c8813790f3c8d1e136f2d45d1b52bfed2c4_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle::templates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  193 => 82,  188 => 80,  184 => 78,  182 => 70,  181 => 69,  174 => 65,  169 => 63,  163 => 60,  160 => 59,  158 => 55,  152 => 54,  148 => 52,  146 => 49,  145 => 48,  144 => 47,  143 => 46,  142 => 45,  141 => 44,  140 => 43,  139 => 42,  138 => 41,  137 => 40,  135 => 39,  132 => 38,  130 => 37,  125 => 36,  109 => 35,  88 => 27,  83 => 24,  81 => 16,  80 => 15,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  57 => 7,  52 => 4,  50 => 3,  45 => 2,  30 => 1,  22 => 34,);
    }
}
