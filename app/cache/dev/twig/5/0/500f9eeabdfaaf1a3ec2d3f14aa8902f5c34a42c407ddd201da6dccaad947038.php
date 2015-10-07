<?php

/* OroConfigBundle:Configuration:system.html.twig */
class __TwigTemplate_500f9eeabdfaaf1a3ec2d3f14aa8902f5c34a42c407ddd201da6dccaad947038 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroConfigBundle::configPage.html.twig", "OroConfigBundle:Configuration:system.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroConfigBundle::configPage.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b4e5ab08255a81232b0a24796e170d2d74d05ddf8e5a09366cdcdc480683aec = $this->env->getExtension("native_profiler");
        $__internal_0b4e5ab08255a81232b0a24796e170d2d74d05ddf8e5a09366cdcdc480683aec->enter($__internal_0b4e5ab08255a81232b0a24796e170d2d74d05ddf8e5a09366cdcdc480683aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroConfigBundle:Configuration:system.html.twig"));

        // line 3
        $context["pageTitle"] = $this->env->getExtension('translator')->trans("oro.config.menu.system_configuration.label");
        // line 4
        $context["formAction"] = $this->env->getExtension('routing')->getPath("oro_config_configuration_system", array("activeGroup" =>         // line 6
(isset($context["activeGroup"]) ? $context["activeGroup"] : $this->getContext($context, "activeGroup")), "activeSubGroup" => (isset($context["activeSubGroup"]) ? $context["activeSubGroup"] : $this->getContext($context, "activeSubGroup"))));
        // line 9
        $context["routeName"] = "oro_config_configuration_system";
        // line 10
        $context["routeParameters"] = array();
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b4e5ab08255a81232b0a24796e170d2d74d05ddf8e5a09366cdcdc480683aec->leave($__internal_0b4e5ab08255a81232b0a24796e170d2d74d05ddf8e5a09366cdcdc480683aec_prof);

    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Configuration:system.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 1,  34 => 10,  32 => 9,  30 => 6,  29 => 4,  27 => 3,  11 => 1,);
    }
}
