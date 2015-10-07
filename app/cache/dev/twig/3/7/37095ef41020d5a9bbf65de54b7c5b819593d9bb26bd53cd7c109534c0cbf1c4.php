<?php

/* OroEmailBundle:Configuration/Mailbox:update.html.twig */
class __TwigTemplate_37095ef41020d5a9bbf65de54b7c5b819593d9bb26bd53cd7c109534c0cbf1c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroConfigBundle::configPage.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 1);
        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f9791e741d9836f190e134f7f12d3961d7f146b275479d79d4b5c3275db7f2c = $this->env->getExtension("native_profiler");
        $__internal_1f9791e741d9836f190e134f7f12d3961d7f146b275479d79d4b5c3275db7f2c->enter($__internal_1f9791e741d9836f190e134f7f12d3961d7f146b275479d79d4b5c3275db7f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle:Configuration/Mailbox:update.html.twig"));

        // line 3
        $context["emailUI"] = $this->loadTemplate("OroEmailBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 3);
        // line 5
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "id", array())) {
            // line 6
            $context["mailboxTitle"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "label", array());
        } else {
            // line 8
            $context["mailboxTitle"] = $this->env->getExtension('translator')->trans("oro.email.mailbox.action.new");
        }
        // line 11
        $context["pageTitle"] = array(0 => array("link" => $this->env->getExtension('routing')->getPath("oro_config_configuration_system"), "label" => $this->env->getExtension('translator')->trans("oro.config.menu.system_configuration.label")), 1 => array("link" => $this->env->getExtension('routing')->getPath("oro_config_configuration_system", array("activeGroup" => "platform", "activeSubGroup" => "email_configuration")), "label" => $this->env->getExtension('translator')->trans("oro.email.system_configuration.email_configuration")), 2 =>         // line 23
(isset($context["mailboxTitle"]) ? $context["mailboxTitle"] : $this->getContext($context, "mailboxTitle")));
        // line 26
        $context["formAction"] = $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), array("redirectData" => (isset($context["redirectData"]) ? $context["redirectData"] : $this->getContext($context, "redirectData")))));
        // line 31
        $context["routeName"] = "oro_config_configuration_system";
        // line 32
        $context["routeParameters"] = array();
        // line 34
        $context["navigationMacro"] = $this->loadTemplate("OroNavigationBundle:Include:contentTags.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 34);
        // line 35
        $context["configUI"] = $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 35);
        // line 36
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 36);
        // line 38
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "OroFormBundle:Form:fields.html.twig", 1 => "OroLocaleBundle:Form:fields.html.twig"));
        // line 40
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array())) {

            $this->env->getExtension("oro_title")->set(array("params" => array("%label%" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 41
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f9791e741d9836f190e134f7f12d3961d7f146b275479d79d4b5c3275db7f2c->leave($__internal_1f9791e741d9836f190e134f7f12d3961d7f146b275479d79d4b5c3275db7f2c_prof);

    }

    // line 44
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_b6058f01d2357ef2edda1d4153cd4ebbfc283d76a67eeaf42fe441bfd1e14f87 = $this->env->getExtension("native_profiler");
        $__internal_b6058f01d2357ef2edda1d4153cd4ebbfc283d76a67eeaf42fe441bfd1e14f87->enter($__internal_b6058f01d2357ef2edda1d4153cd4ebbfc283d76a67eeaf42fe441bfd1e14f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 45
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('translator')->trans("oro.config.menu.system_configuration.label")), 1 => array("label" => $this->env->getExtension('translator')->trans("oro.email.system_configuration.email_configuration")));
        // line 49
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 49)->display($context);
        
        $__internal_b6058f01d2357ef2edda1d4153cd4ebbfc283d76a67eeaf42fe441bfd1e14f87->leave($__internal_b6058f01d2357ef2edda1d4153cd4ebbfc283d76a67eeaf42fe441bfd1e14f87_prof);

    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad5dcc811e8c250dc3b096b02dea66637a6cb1bdb159f545de60ceb6cd88450d = $this->env->getExtension("native_profiler");
        $__internal_ad5dcc811e8c250dc3b096b02dea66637a6cb1bdb159f545de60ceb6cd88450d->enter($__internal_ad5dcc811e8c250dc3b096b02dea66637a6cb1bdb159f545de60ceb6cd88450d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "    ";
        $context["buttons"] = "";
        // line 54
        echo "    ";
        $context["html"] = "";
        // line 55
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("DELETE", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())))) {
            // line 56
            echo "        ";
            $context["buttons"] = ((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")) . $context["UI"]->getdeleteButton(array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_email_mailbox_delete", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 57
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_config_configuration_system", array("activeGroup" => "platform", "activeSubGroup" => "email_configuration")), "aCss" => "no-hash remove-button", "id" => "btn-remove-mailbox", "dataId" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 64
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()), "entity_label" => $this->env->getExtension('translator')->trans("oro.email.mailbox.entity_label"))));
            // line 67
            echo "        ";
            $context["buttons"] = ((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")) . $context["UI"]->getbuttonSeparator());
            // line 68
            echo "        ";
            $context["html"] = ((isset($context["html"]) ? $context["html"] : $this->getContext($context, "html")) . $context["UI"]->getsaveAndStayButton());
            // line 69
            echo "    ";
        }
        // line 70
        echo "
    ";
        // line 71
        $context["html"] = ((isset($context["html"]) ? $context["html"] : $this->getContext($context, "html")) . $context["UI"]->getsaveAndCloseButton());
        // line 72
        echo "    ";
        $context["buttons"] = ((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")) . $context["UI"]->getdropdownSaveButton(array("html" => (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html")))));
        // line 73
        echo "
    ";
        // line 74
        $context["options"] = array("el" => ("#" . $this->getAttribute($this->getAttribute(        // line 75
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        // line 77
        echo "
    <form
        id=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
        action=\"";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
        echo "\"
        method=\"post\"
        data-collect=\"true\"
        data-page-component-module=\"oroconfig/js/form/config-form\"
        data-page-component-options=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
        echo "\"
    >
        ";
        // line 88
        echo $context["emailUI"]->getrenderMailboxConfigTitleAndButtons((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")));
        echo "
        <div class=\"system-configuration-container left-panel-container\">
            <div class=\"placeholder\">
                <div class=\"scrollable-container\">
                    ";
        // line 92
        echo $context["configUI"]->getrenderTabs((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["activeGroup"]) ? $context["activeGroup"] : $this->getContext($context, "activeGroup")), (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : $this->getContext($context, "activeSubGroup")), (isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")), (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters")));
        echo "
                    <div class=\"system-configuration-content content form-container\" id=\"configuration-options-block\">
                        <div class=\"pull-right\">
                            <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"/>
                        </div>
                        ";
        // line 97
        $context["fromErrors"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 98
        echo "                        ";
        if ((array_key_exists("formErrors", $context) && twig_length_filter($this->env, (isset($context["formErrors"]) ? $context["formErrors"] : $this->getContext($context, "formErrors"))))) {
            // line 99
            echo "                            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                                <div class=\"alert alert-error\">
                                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                                    ";
            // line 102
            echo (isset($context["formErrors"]) ? $context["formErrors"] : $this->getContext($context, "formErrors"));
            echo "
                                </div>
                            </div>
                        ";
        }
        // line 106
        echo "                        ";
        $context["accordionId"] = "system-configuration-collapse";
        // line 107
        echo "                        <div class=\"accordion\">
                            <div class=\"accordion-group\">
                                <div class=\"accordion-heading\">
                                    <div class=\"pull-right\">
                                        ";
        // line 111
        echo $context["configUI"]->getrenderCollapseExpandActions("#configuration-options-block");
        echo "
                                    </div>
                                    <a href=\"#";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["accordionId"]) ? $context["accordionId"] : $this->getContext($context, "accordionId")), "html", null, true);
        echo "\" data-toggle=\"collapse\" class=\"accordion-toggle\">
                                        ";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.system_configuration.mailbox_configuration.label"), "html", null, true);
        echo "
                                    </a>
                                </div>
                                <div class=\"accordion-body in collapse\" id=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["accordionId"]) ? $context["accordionId"] : $this->getContext($context, "accordionId")), "html", null, true);
        echo "\" >
                                    <div class=\"accordion-inner\">
                                        ";
        // line 119
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                                        ";
        // line 120
        $context["mailboxId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array());
        // line 121
        echo "                                        <fieldset class=\"form-horizontal form-horizontal-large auto-response-rules\">
                                            <div class=\"auto-response-rule-header\">
                                                <h5>";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.autoresponserule.entity_plural_label"), "html", null, true);
        echo "</h5>
                                                ";
        // line 124
        echo $context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_email_autoresponserule_create", array("mailbox" =>         // line 125
(isset($context["mailboxId"]) ? $context["mailboxId"] : $this->getContext($context, "mailboxId")))), "aCss" => "pull-right no-hash btn btn-primary", "label" => $this->env->getExtension('translator')->trans("oro.email.autoresponserule.action.add.label"), "widget" => array("type" => "dialog", "multiple" => false, "reload-grid-name" => "email-auto-response-rules", "options" => array("alias" => "auto-response-rules-dialog", "dialogOptions" => array("title" => $this->env->getExtension('translator')->trans("oro.email.autoresponserule.action.add.title"), "allowMaximize" => false, "allowMinimize" => false, "modal" => true, "dblclick" => "maximize", "maximizedHeightDecreaseBy" => "minimize-bar", "width" => 700)))));
        // line 145
        echo "
                                            </div>
                                            ";
        // line 147
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Configuration/Mailbox:update.html.twig", 147);
        // line 148
        echo "                                            ";
        echo $context["dataGrid"]->getrenderGrid("email-auto-response-rules", array("mailbox" => (isset($context["mailboxId"]) ? $context["mailboxId"] : $this->getContext($context, "mailboxId"))));
        echo "
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    ";
        // line 159
        echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 160
        echo $context["navigationMacro"]->getnavigationContentTags(array("name" => "system_configuration", "params" => array(0 => (isset($context["activeGroup"]) ? $context["activeGroup"] : $this->getContext($context, "activeGroup")), 1 => (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : $this->getContext($context, "activeSubGroup")))));
        echo "
";
        
        $__internal_ad5dcc811e8c250dc3b096b02dea66637a6cb1bdb159f545de60ceb6cd88450d->leave($__internal_ad5dcc811e8c250dc3b096b02dea66637a6cb1bdb159f545de60ceb6cd88450d_prof);

    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Configuration/Mailbox:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 160,  261 => 159,  246 => 148,  244 => 147,  240 => 145,  238 => 125,  237 => 124,  233 => 123,  229 => 121,  227 => 120,  223 => 119,  218 => 117,  212 => 114,  208 => 113,  203 => 111,  197 => 107,  194 => 106,  187 => 102,  182 => 99,  179 => 98,  177 => 97,  172 => 95,  166 => 92,  159 => 88,  154 => 86,  147 => 82,  143 => 81,  139 => 80,  135 => 79,  131 => 77,  129 => 75,  128 => 74,  125 => 73,  122 => 72,  120 => 71,  117 => 70,  114 => 69,  111 => 68,  108 => 67,  106 => 64,  105 => 57,  103 => 56,  100 => 55,  97 => 54,  94 => 53,  88 => 52,  80 => 49,  77 => 45,  71 => 44,  64 => 1,  61 => 41,  58 => 40,  56 => 38,  54 => 36,  52 => 35,  50 => 34,  48 => 32,  46 => 31,  44 => 28,  43 => 27,  42 => 26,  40 => 23,  39 => 11,  36 => 8,  33 => 6,  31 => 5,  29 => 3,  11 => 1,);
    }
}
