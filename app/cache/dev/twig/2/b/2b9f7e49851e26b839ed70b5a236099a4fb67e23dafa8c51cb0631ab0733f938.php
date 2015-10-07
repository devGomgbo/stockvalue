<?php

/* OroEmailBundle:Notification:button.html.twig */
class __TwigTemplate_2b9f7e49851e26b839ed70b5a236099a4fb67e23dafa8c51cb0631ab0733f938 extends Twig_Template
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
        $__internal_09161f2d6ac094c17ba47c40619e7a9a77fa196ea5d56b6e3d27350deeca5ac7 = $this->env->getExtension("native_profiler");
        $__internal_09161f2d6ac094c17ba47c40619e7a9a77fa196ea5d56b6e3d27350deeca5ac7->enter($__internal_09161f2d6ac094c17ba47c40619e7a9a77fa196ea5d56b6e3d27350deeca5ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle:Notification:button.html.twig"));

        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Notification:button.html.twig", 1);
        // line 2
        echo "
<script type=\"text/template\" id=\"email-notification-item-template\">
    <div class=\"info\" data-id=\"<%= id %>\">
        <div class=\"body\">
            <div class=\"title nowrap-ellipsis\"><%= subject %></div>
            <div class=\"description nowrap-ellipsis\"><%= bodyContent %></div>
        </div>
        <% if (seen) {  %>
            <i class=\"icon-envelope\"></i>
        <% } else { %>
            <i class=\"icon-envelope new\"></i>
        <% }  %>
    </div>
    <div class=\"footer row-fluid\">
        <span class=\"pull-left fromName\">
            <% if (linkFromName) { %>
                <a href=\"<%= linkFromName %>\"><%= fromName %></a>
            <% } else { %>
                <%= fromName %>
            <% } %>
        </span>
        <span class=\"pull-right replay\">";
        // line 24
        echo $context["UI"]->getclientLink(array("dataUrl" => "<%= route %>", "aCss" => (($this->getAttribute(        // line 26
(isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array()) . " no-hash")) : ("no-hash")), "iCss" => (($this->getAttribute(        // line 27
(isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) ? (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iCss", array()) . " icon-reply")) : ("icon-reply")), "label" => $this->env->getExtension('translator')->trans("oro.email.reply"), "widget" => array("type" => "dialog", "multiple" => false, "refresh-widget-alias" => "activity-list-widget", "reload-widget-alias" => "thread-view", "options" => array("alias" => "reply-dialog", "dialogOptions" => array("title" => $this->env->getExtension('translator')->trans("oro.email.reply"), "allowMaximize" => true, "allowMinimize" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 1000)))));
        // line 47
        echo "</span>
    </div>
</script>
";
        // line 50
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 0)) {
            // line 51
            echo "    ";
            $context["classNew"] = "new";
        } else {
            // line 53
            echo "    ";
            $context["classNew"] = "";
        }
        // line 55
        echo "
";
        // line 56
        $context["options"] = array("clank_event" =>         // line 57
(isset($context["clank_event"]) ? $context["clank_event"] : $this->getContext($context, "clank_event")), "emails" =>         // line 58
(isset($context["emails"]) ? $context["emails"] : $this->getContext($context, "emails")), "count" =>         // line 59
(isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")));
        // line 61
        echo "
<li class=\"email-notification-menu dropdown\"
    data-page-component-options=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
        echo "\"
    data-layout=\"separate\"
    style=\"display: none;\">
    <a href=\"#\" class=\"oro-dropdown-toggle\">
        <i class=\"icon-envelope ";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["classNew"]) ? $context["classNew"] : $this->getContext($context, "classNew")), "html", null, true);
        echo "\">
            <span>
                ";
        // line 69
        if (((isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 10)) {
            // line 70
            echo "                    10+
                ";
        } elseif ((        // line 71
(isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")) > 0)) {
            // line 72
            echo "                    ";
            echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "html", null, true);
            echo "
                ";
        }
        // line 74
        echo "            </span>
        </i>
    </a>
    <div class=\"dropdown-menu pull-right\" tabindex=\"0\">
        <div class=\"content\" >
            <div class=\"header row-fluid\">
                <a class=\"my-emails pull-left\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("oro_email_user_emails");
        echo "\">
                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.menu.user_emails"), "html", null, true);
        echo "
                </a>
                <button class=\"mark-as-read pull-right btn btn-primary\">
                    <i class=\"icon-check\"></i>
                    ";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.notification.mark_read.label"), "html", null, true);
        echo "
                </button>
            </div>
            <ul class=\"items\">
            </ul>
        </div>
        <div class=\"empty\">
            ";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.notification.empty"), "html", null, true);
        echo "
        </div>
        <div class=\"notification\">
            ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.notification.new_email"), "html", null, true);
        echo "
        </div>
    </div>
</li>
";
        
        $__internal_09161f2d6ac094c17ba47c40619e7a9a77fa196ea5d56b6e3d27350deeca5ac7->leave($__internal_09161f2d6ac094c17ba47c40619e7a9a77fa196ea5d56b6e3d27350deeca5ac7_prof);

    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Notification:button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 95,  132 => 92,  122 => 85,  115 => 81,  111 => 80,  103 => 74,  97 => 72,  95 => 71,  92 => 70,  90 => 69,  85 => 67,  78 => 63,  74 => 61,  72 => 59,  71 => 58,  70 => 57,  69 => 56,  66 => 55,  62 => 53,  58 => 51,  56 => 50,  51 => 47,  49 => 27,  48 => 26,  47 => 24,  24 => 2,  22 => 1,);
    }
}
