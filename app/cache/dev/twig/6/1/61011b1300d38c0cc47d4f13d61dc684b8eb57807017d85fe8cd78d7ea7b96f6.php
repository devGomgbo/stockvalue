<?php

/* OroEmailBundle:Dashboard:recentEmails.html.twig */
class __TwigTemplate_61011b1300d38c0cc47d4f13d61dc684b8eb57807017d85fe8cd78d7ea7b96f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:tabbedWidget.html.twig", "OroEmailBundle:Dashboard:recentEmails.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:tabbedWidget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78ee103138a0c25fb1a79418de991d24b5640b6a3b8140499eedf7b09902d06c = $this->env->getExtension("native_profiler");
        $__internal_78ee103138a0c25fb1a79418de991d24b5640b6a3b8140499eedf7b09902d06c->enter($__internal_78ee103138a0c25fb1a79418de991d24b5640b6a3b8140499eedf7b09902d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle:Dashboard:recentEmails.html.twig"));

        // line 2
        $context["Email"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Dashboard:recentEmails.html.twig", 2);
        // line 4
        if (((isset($context["unreadMailCount"]) ? $context["unreadMailCount"] : $this->getContext($context, "unreadMailCount")) > 10)) {
            // line 5
            $context["unreadMailCount"] = ('' === $tmp = "        <div class=\"email-mail-count-circle\">10+</div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } else {
            // line 9
            ob_start();
            // line 10
            echo "        <div class=\"email-mail-count-circle\">";
            echo twig_escape_filter($this->env, (isset($context["unreadMailCount"]) ? $context["unreadMailCount"] : $this->getContext($context, "unreadMailCount")), "html", null, true);
            echo "</div>
    ";
            $context["unreadMailCount"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78ee103138a0c25fb1a79418de991d24b5640b6a3b8140499eedf7b09902d06c->leave($__internal_78ee103138a0c25fb1a79418de991d24b5640b6a3b8140499eedf7b09902d06c_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_fbd15381f0be26d5820dabdf2db8991cb193bd7789751f3e9b92640ae27fdfe4 = $this->env->getExtension("native_profiler");
        $__internal_fbd15381f0be26d5820dabdf2db8991cb193bd7789751f3e9b92640ae27fdfe4->enter($__internal_fbd15381f0be26d5820dabdf2db8991cb193bd7789751f3e9b92640ae27fdfe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "    ";
        $context["tabs"] = array(0 => array("url" => $this->env->getExtension('routing')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 18
(isset($context["widgetName"]) ? $context["widgetName"] : $this->getContext($context, "widgetName")), "activeTab" => "inbox", "contentType" => "tab")), "name" => "inbox", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.inbox")), 1 => array("url" => $this->env->getExtension('routing')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 26
(isset($context["widgetName"]) ? $context["widgetName"] : $this->getContext($context, "widgetName")), "activeTab" => "sent", "contentType" => "tab")), "name" => "sent", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.sent")), 2 => array("url" => $this->env->getExtension('routing')->getPath("oro_email_dashboard_recent_emails", array("widget" =>         // line 34
(isset($context["widgetName"]) ? $context["widgetName"] : $this->getContext($context, "widgetName")), "activeTab" => "new", "contentType" => "tab")), "name" => "unread", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.unread"), "afterHtml" =>         // line 38
(isset($context["unreadMailCount"]) ? $context["unreadMailCount"] : $this->getContext($context, "unreadMailCount"))));
        // line 40
        echo "
    ";
        // line 41
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_fbd15381f0be26d5820dabdf2db8991cb193bd7789751f3e9b92640ae27fdfe4->leave($__internal_fbd15381f0be26d5820dabdf2db8991cb193bd7789751f3e9b92640ae27fdfe4_prof);

    }

    // line 44
    public function block_actions($context, array $blocks = array())
    {
        $__internal_ca7ef5e2f7654937c92ae000edd2ee458378e6d5f3f349f5503fbcaaee493b20 = $this->env->getExtension("native_profiler");
        $__internal_ca7ef5e2f7654937c92ae000edd2ee458378e6d5f3f349f5503fbcaaee493b20->enter($__internal_ca7ef5e2f7654937c92ae000edd2ee458378e6d5f3f349f5503fbcaaee493b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 45
        echo "    ";
        $context["actions"] = array(0 => array("url" => $this->env->getExtension('routing')->getPath("oro_user_view", array("id" =>         // line 46
(isset($context["loggedUserId"]) ? $context["loggedUserId"] : $this->getContext($context, "loggedUserId")))), "type" => "link", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.recent_emails.view_all")));
        // line 50
        echo "
    ";
        // line 51
        $this->displayParentBlock("actions", $context, $blocks);
        echo "
";
        
        $__internal_ca7ef5e2f7654937c92ae000edd2ee458378e6d5f3f349f5503fbcaaee493b20->leave($__internal_ca7ef5e2f7654937c92ae000edd2ee458378e6d5f3f349f5503fbcaaee493b20_prof);

    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Dashboard:recentEmails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 51,  88 => 50,  86 => 46,  84 => 45,  78 => 44,  69 => 41,  66 => 40,  64 => 38,  63 => 34,  62 => 26,  61 => 18,  59 => 15,  53 => 14,  46 => 1,  39 => 10,  37 => 9,  33 => 5,  31 => 4,  29 => 2,  11 => 1,);
    }
}
