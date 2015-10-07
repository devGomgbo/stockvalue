<?php

/* OroConfigBundle::configPage.html.twig */
class __TwigTemplate_7acb33a58103afd6b847973aaf1138a1ad1c26046a28cdc9467ee952b638709e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroConfigBundle::configPage.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f1a446bcd91ed7f793fb3aa22ea550ad1607b6509d6e14cca1fad60d65ec47a = $this->env->getExtension("native_profiler");
        $__internal_8f1a446bcd91ed7f793fb3aa22ea550ad1607b6509d6e14cca1fad60d65ec47a->enter($__internal_8f1a446bcd91ed7f793fb3aa22ea550ad1607b6509d6e14cca1fad60d65ec47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroConfigBundle::configPage.html.twig"));

        // line 12
        if ((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))) {
            // line 13
            $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "OroConfigBundle:Form:fields.html.twig", 1 => "OroFormBundle:Form:fields.html.twig", 2 => "OroLocaleBundle:Form:fields.html.twig"));
        }
        // line 15
        $context["navigationMacro"] = $this->loadTemplate("OroNavigationBundle:Include:contentTags.html.twig", "OroConfigBundle::configPage.html.twig", 15);
        // line 16
        $context["configUI"] = $this->loadTemplate("OroConfigBundle::macros.html.twig", "OroConfigBundle::configPage.html.twig", 16);
        // line 17
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::configPage.html.twig", 17);
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f1a446bcd91ed7f793fb3aa22ea550ad1607b6509d6e14cca1fad60d65ec47a->leave($__internal_8f1a446bcd91ed7f793fb3aa22ea550ad1607b6509d6e14cca1fad60d65ec47a_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_aefc1395102fbcc342d80b41d9e40ddbd1d10cd1d2c733e5c6a561a1223e977e = $this->env->getExtension("native_profiler");
        $__internal_aefc1395102fbcc342d80b41d9e40ddbd1d10cd1d2c733e5c6a561a1223e977e->enter($__internal_aefc1395102fbcc342d80b41d9e40ddbd1d10cd1d2c733e5c6a561a1223e977e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    ";
        $context["saveButton"] = $context["UI"]->getsaveAndCloseButton($this->env->getExtension('translator')->trans("oro.config.actions.save_settings"));
        // line 21
        echo "    ";
        $context["restoreButton"] = $context["UI"]->getbuttonType(array("type" => "reset", "label" => $this->env->getExtension('translator')->trans("oro.config.actions.restore_saved_values")));
        // line 22
        echo "    ";
        $context["options"] = array("pageReload" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 23
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "block_config", array()), (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : $this->getContext($context, "activeSubGroup"))), "page_reload", array()), "el" => ("#" . $this->getAttribute($this->getAttribute(        // line 24
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        // line 26
        echo "    <form
        id=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
        name=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\"
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "
        action=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
        echo "\"
        method=\"post\"
        data-collect=\"true\"
        data-page-component-module=\"oroconfig/js/form/config-form\"
        data-page-component-options=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
        echo "\"
    >
        ";
        // line 36
        echo $context["configUI"]->getrenderTitleAndButtons((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), array(0 => (isset($context["restoreButton"]) ? $context["restoreButton"] : $this->getContext($context, "restoreButton")), 1 => (isset($context["saveButton"]) ? $context["saveButton"] : $this->getContext($context, "saveButton"))));
        echo "
        ";
        // line 37
        echo $context["configUI"]->getrenderScrollData((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), (isset($context["activeGroup"]) ? $context["activeGroup"] : $this->getContext($context, "activeGroup")), (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : $this->getContext($context, "activeSubGroup")), (isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")), (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters")));
        echo "
    </form>
    ";
        // line 39
        echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    ";
        // line 40
        echo $context["navigationMacro"]->getnavigationContentTags(array("name" => "system_configuration", "params" => array(0 => (isset($context["activeGroup"]) ? $context["activeGroup"] : $this->getContext($context, "activeGroup")), 1 => (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : $this->getContext($context, "activeSubGroup")))));
        echo "
";
        
        $__internal_aefc1395102fbcc342d80b41d9e40ddbd1d10cd1d2c733e5c6a561a1223e977e->leave($__internal_aefc1395102fbcc342d80b41d9e40ddbd1d10cd1d2c733e5c6a561a1223e977e_prof);

    }

    public function getTemplateName()
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 40,  98 => 39,  93 => 37,  89 => 36,  84 => 34,  77 => 30,  73 => 29,  69 => 28,  65 => 27,  62 => 26,  60 => 24,  59 => 23,  57 => 22,  54 => 21,  51 => 20,  45 => 19,  38 => 1,  36 => 17,  34 => 16,  32 => 15,  29 => 13,  27 => 12,  18 => 1,);
    }
}
