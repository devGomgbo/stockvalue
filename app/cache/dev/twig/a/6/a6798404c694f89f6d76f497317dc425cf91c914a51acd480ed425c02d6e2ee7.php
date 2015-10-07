<?php

/* {{ form_row(form.children['oro_ui___application_url']) }} */
class __TwigTemplate_a6798404c694f89f6d76f497317dc425cf91c914a51acd480ed425c02d6e2ee7 extends Twig_Template
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
        $__internal_f16d50367f90e651d2161b074bad1abc13c4c993197c7415005fe31dfac27cac = $this->env->getExtension("native_profiler");
        $__internal_f16d50367f90e651d2161b074bad1abc13c4c993197c7415005fe31dfac27cac->enter($__internal_f16d50367f90e651d2161b074bad1abc13c4c993197c7415005fe31dfac27cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_ui___application_url']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_ui___application_url", array(), "array"), 'row');
        
        $__internal_f16d50367f90e651d2161b074bad1abc13c4c993197c7415005fe31dfac27cac->leave($__internal_f16d50367f90e651d2161b074bad1abc13c4c993197c7415005fe31dfac27cac_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_ui___application_url']) }}";
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
