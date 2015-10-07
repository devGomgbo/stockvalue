<?php

/* OroRequireJSBundle::require_config.js.twig */
class __TwigTemplate_cfbee4d3421484c91325e365a31daefc73d25ba9d50474527d77d02ebca37b91 extends Twig_Template
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
        $__internal_a425aa8726deaf64d359d31bff0f1a3302baef8bd14c2985032effb9adc7ac60 = $this->env->getExtension("native_profiler");
        $__internal_a425aa8726deaf64d359d31bff0f1a3302baef8bd14c2985032effb9adc7ac60->enter($__internal_a425aa8726deaf64d359d31bff0f1a3302baef8bd14c2985032effb9adc7ac60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroRequireJSBundle::require_config.js.twig"));

        // line 1
        echo "require(";
        echo twig_jsonencode_filter((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")));
        echo ");
";
        
        $__internal_a425aa8726deaf64d359d31bff0f1a3302baef8bd14c2985032effb9adc7ac60->leave($__internal_a425aa8726deaf64d359d31bff0f1a3302baef8bd14c2985032effb9adc7ac60_prof);

    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::require_config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
