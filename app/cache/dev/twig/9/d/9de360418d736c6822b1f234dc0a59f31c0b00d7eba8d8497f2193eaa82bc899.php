<?php

/* OroCalendarBundle::invitations.html.twig */
class __TwigTemplate_9de360418d736c6822b1f234dc0a59f31c0b00d7eba8d8497f2193eaa82bc899 extends Twig_Template
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
        $__internal_94ee90479e70f5a18c8e6064192a02359d4e60a7574579a9eba5a277b9007d31 = $this->env->getExtension("native_profiler");
        $__internal_94ee90479e70f5a18c8e6064192a02359d4e60a7574579a9eba5a277b9007d31->enter($__internal_94ee90479e70f5a18c8e6064192a02359d4e60a7574579a9eba5a277b9007d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCalendarBundle::invitations.html.twig"));

        // line 13
        echo "
";
        // line 36
        echo "
";
        // line 46
        echo "
";
        
        $__internal_94ee90479e70f5a18c8e6064192a02359d4e60a7574579a9eba5a277b9007d31->leave($__internal_94ee90479e70f5a18c8e6064192a02359d4e60a7574579a9eba5a277b9007d31_prof);

    }

    // line 1
    public function getcalendar_event_invitation($__parentEvent__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parentEvent" => $__parentEvent__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4de1f20dd47b5b13e4c32918b879093d1ca4d6de02bd5e51ec3a9abb703bbf2f = $this->env->getExtension("native_profiler");
            $__internal_4de1f20dd47b5b13e4c32918b879093d1ca4d6de02bd5e51ec3a9abb703bbf2f->enter($__internal_4de1f20dd47b5b13e4c32918b879093d1ca4d6de02bd5e51ec3a9abb703bbf2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calendar_event_invitation"));

            // line 2
            echo "    <div class=\"row-fluid\">
        <div class=\"responsive-block\">
            <ul class=\"user-status-list list-group\">
                ";
            // line 5
            echo $this->getAttribute($this, "build_invitation_link", array(0 => (isset($context["parentEvent"]) ? $context["parentEvent"] : $this->getContext($context, "parentEvent"))), "method");
            echo "
                ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parentEvent"]) ? $context["parentEvent"] : $this->getContext($context, "parentEvent")), "childEvents", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 7
                echo "                    ";
                echo $this->getAttribute($this, "build_invitation_link", array(0 => $context["event"]), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "            </ul>
        </div>
    </div>
";
            
            $__internal_4de1f20dd47b5b13e4c32918b879093d1ca4d6de02bd5e51ec3a9abb703bbf2f->leave($__internal_4de1f20dd47b5b13e4c32918b879093d1ca4d6de02bd5e51ec3a9abb703bbf2f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getbuild_invitation_link($__calendarEvent__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "calendarEvent" => $__calendarEvent__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_48130204592a07d4504bd5f9ae10d208cae59ac7661c1b9e30ca4643aef7d98f = $this->env->getExtension("native_profiler");
            $__internal_48130204592a07d4504bd5f9ae10d208cae59ac7661c1b9e30ca4643aef7d98f->enter($__internal_48130204592a07d4504bd5f9ae10d208cae59ac7661c1b9e30ca4643aef7d98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "build_invitation_link"));

            // line 15
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroCalendarBundle::invitations.html.twig", 15);
            // line 16
            echo "        ";
            $context["invitationStatus"] = $this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : $this->getContext($context, "calendarEvent")), "invitationStatus", array());
            // line 17
            echo "        ";
            $context["invitationClass"] = $this->getAttribute($this, "get_invitatition_status_class", array(0 => (isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus"))), "method");
            // line 18
            echo "        <li class=\"list-group-item\">
            ";
            // line 19
            if ( !twig_test_empty((isset($context["invitationClass"]) ? $context["invitationClass"] : $this->getContext($context, "invitationClass")))) {
                // line 20
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, (isset($context["invitationClass"]) ? $context["invitationClass"] : $this->getContext($context, "invitationClass")), "html", null, true);
                echo "\" title=\"";
                echo $this->getAttribute($this, "calendar_event_invitation_status", array(0 => (isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus"))), "method");
                echo "\"></i>
            ";
            }
            // line 22
            echo "            ";
            $context["avatar"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : $this->getContext($context, "calendarEvent")), "calendar", array()), "owner", array()), "avatar", array());
            // line 23
            echo "            <span class=\"list-group-item-text\">
                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, (((isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar"))) ? ($this->env->getExtension('oro_attachment_file')->getFilteredImageUrl((isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar")), "avatar_xsmall")) : ($this->env->getExtension('asset')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"))), "html", null, true);
            echo "\" />
                ";
            // line 25
            if (($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_user_view") && $this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : $this->getContext($context, "calendarEvent")), "calendar", array()), "owner", array()))) {
                // line 26
                echo "                    ";
                echo $context["UI"]->getlink(array("label" => $this->env->getExtension('oro_entity')->getEntityName($this->getAttribute($this->getAttribute(                // line 27
(isset($context["calendarEvent"]) ? $context["calendarEvent"] : $this->getContext($context, "calendarEvent")), "calendar", array()), "owner", array())), "path" => $this->env->getExtension('routing')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(                // line 28
(isset($context["calendarEvent"]) ? $context["calendarEvent"] : $this->getContext($context, "calendarEvent")), "calendar", array()), "owner", array()), "id", array())))));
                // line 29
                echo "
                ";
            } else {
                // line 31
                echo "                    ";
                echo (($this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : $this->getContext($context, "calendarEvent")), "calendar", array()), "owner", array())) ? ($this->env->getExtension('oro_entity')->getEntityName($this->getAttribute($this->getAttribute((isset($context["calendarEvent"]) ? $context["calendarEvent"] : $this->getContext($context, "calendarEvent")), "calendar", array()), "owner", array()))) : (""));
                echo "
                ";
            }
            // line 33
            echo "            </span>
        </li>
";
            
            $__internal_48130204592a07d4504bd5f9ae10d208cae59ac7661c1b9e30ca4643aef7d98f->leave($__internal_48130204592a07d4504bd5f9ae10d208cae59ac7661c1b9e30ca4643aef7d98f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 37
    public function getget_invitatition_badge_class($__invitationStatus__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "invitationStatus" => $__invitationStatus__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4cdd9990d88b773de4253c4f505094b7be11de871bbbc729a8c89e968b1ab0f2 = $this->env->getExtension("native_profiler");
            $__internal_4cdd9990d88b773de4253c4f505094b7be11de871bbbc729a8c89e968b1ab0f2->enter($__internal_4cdd9990d88b773de4253c4f505094b7be11de871bbbc729a8c89e968b1ab0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "get_invitatition_badge_class"));

            // line 38
            if (((isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus")) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::TENTATIVELY_ACCEPTED"))) {
                // line 39
                echo "tentatively";
            } elseif ((            // line 40
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus")) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::ACCEPTED"))) {
                // line 41
                echo "enabled";
            } elseif ((            // line 42
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus")) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::DECLINED"))) {
                // line 43
                echo "disabled";
            }
            
            $__internal_4cdd9990d88b773de4253c4f505094b7be11de871bbbc729a8c89e968b1ab0f2->leave($__internal_4cdd9990d88b773de4253c4f505094b7be11de871bbbc729a8c89e968b1ab0f2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getget_invitatition_status_class($__invitationStatus__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "invitationStatus" => $__invitationStatus__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_91506cad4db4a55229fdc3f5da79e81d36f6a510f89c50a3fa6fd7f2a3dba793 = $this->env->getExtension("native_profiler");
            $__internal_91506cad4db4a55229fdc3f5da79e81d36f6a510f89c50a3fa6fd7f2a3dba793->enter($__internal_91506cad4db4a55229fdc3f5da79e81d36f6a510f89c50a3fa6fd7f2a3dba793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "get_invitatition_status_class"));

            // line 48
            if (((isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus")) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::NOT_RESPONDED"))) {
                // line 49
                echo "icon-reply";
            } elseif ((            // line 50
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus")) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::TENTATIVELY_ACCEPTED"))) {
                // line 51
                echo "icon-question";
            } elseif ((            // line 52
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus")) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::ACCEPTED"))) {
                // line 53
                echo "icon-ok";
            } elseif ((            // line 54
(isset($context["invitationStatus"]) ? $context["invitationStatus"] : $this->getContext($context, "invitationStatus")) == twig_constant("Oro\\Bundle\\CalendarBundle\\Entity\\CalendarEvent::DECLINED"))) {
                // line 55
                echo "icon-remove";
            }
            
            $__internal_91506cad4db4a55229fdc3f5da79e81d36f6a510f89c50a3fa6fd7f2a3dba793->leave($__internal_91506cad4db4a55229fdc3f5da79e81d36f6a510f89c50a3fa6fd7f2a3dba793_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 59
    public function getcalendar_event_invitation_status($__statusCode__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "statusCode" => $__statusCode__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1325982b93e7b8d752e1c8d71655c5ebb33ca2d648abb36878d8e9524c15c9a5 = $this->env->getExtension("native_profiler");
            $__internal_1325982b93e7b8d752e1c8d71655c5ebb33ca2d648abb36878d8e9524c15c9a5->enter($__internal_1325982b93e7b8d752e1c8d71655c5ebb33ca2d648abb36878d8e9524c15c9a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calendar_event_invitation_status"));

            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("oro.calendar.calendarevent.statuses." . (isset($context["statusCode"]) ? $context["statusCode"] : $this->getContext($context, "statusCode")))), "html", null, true);
            
            $__internal_1325982b93e7b8d752e1c8d71655c5ebb33ca2d648abb36878d8e9524c15c9a5->leave($__internal_1325982b93e7b8d752e1c8d71655c5ebb33ca2d648abb36878d8e9524c15c9a5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 63
    public function getcalendar_event_invitation_action($__statusCode__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "statusCode" => $__statusCode__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bfff0eecd3f080b08b711a3ee7ebd75078d965110d4c04fc90c416b037ac6684 = $this->env->getExtension("native_profiler");
            $__internal_bfff0eecd3f080b08b711a3ee7ebd75078d965110d4c04fc90c416b037ac6684->enter($__internal_bfff0eecd3f080b08b711a3ee7ebd75078d965110d4c04fc90c416b037ac6684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "calendar_event_invitation_action"));

            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans(("oro.calendar.calendarevent.actions." . (isset($context["statusCode"]) ? $context["statusCode"] : $this->getContext($context, "statusCode")))), "html", null, true);
            
            $__internal_bfff0eecd3f080b08b711a3ee7ebd75078d965110d4c04fc90c416b037ac6684->leave($__internal_bfff0eecd3f080b08b711a3ee7ebd75078d965110d4c04fc90c416b037ac6684_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getnotifyGuestsComponent()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_129d82828cf84543847b9c6ebfc6c67c30931a6f78f3e6f0209addaa139209ab = $this->env->getExtension("native_profiler");
            $__internal_129d82828cf84543847b9c6ebfc6c67c30931a6f78f3e6f0209addaa139209ab->enter($__internal_129d82828cf84543847b9c6ebfc6c67c30931a6f78f3e6f0209addaa139209ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "notifyGuestsComponent"));

            // line 68
            echo "    <div style=\"display: none\"
         data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-options=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "orocalendar/js/app/views/guest-notifier-view")), "html", null, true);
            echo "\">
    </div>
";
            
            $__internal_129d82828cf84543847b9c6ebfc6c67c30931a6f78f3e6f0209addaa139209ab->leave($__internal_129d82828cf84543847b9c6ebfc6c67c30931a6f78f3e6f0209addaa139209ab_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroCalendarBundle::invitations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 70,  326 => 68,  312 => 67,  298 => 64,  283 => 63,  269 => 60,  254 => 59,  239 => 55,  237 => 54,  235 => 53,  233 => 52,  231 => 51,  229 => 50,  227 => 49,  225 => 48,  210 => 47,  195 => 43,  193 => 42,  191 => 41,  189 => 40,  187 => 39,  185 => 38,  170 => 37,  154 => 33,  148 => 31,  144 => 29,  142 => 28,  141 => 27,  139 => 26,  137 => 25,  133 => 24,  130 => 23,  127 => 22,  119 => 20,  117 => 19,  114 => 18,  111 => 17,  108 => 16,  105 => 15,  90 => 14,  73 => 9,  64 => 7,  60 => 6,  56 => 5,  51 => 2,  36 => 1,  28 => 46,  25 => 36,  22 => 13,);
    }
}
