<?php

/* {{ form_row(form.children['oro_email___mailbox_grid']) }} */
class __TwigTemplate_6b53e7812aa7a81f8d1183117e086e161363b1a9f37c270d3cdf98841a5536eb extends Twig_Template
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
        $__internal_8d7eecccd7e9aef1fed9a8cbcc631151c838ac73c23a6bc3021e86e9bf19985a = $this->env->getExtension("native_profiler");
        $__internal_8d7eecccd7e9aef1fed9a8cbcc631151c838ac73c23a6bc3021e86e9bf19985a->enter($__internal_8d7eecccd7e9aef1fed9a8cbcc631151c838ac73c23a6bc3021e86e9bf19985a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_email___mailbox_grid']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_email___mailbox_grid", array(), "array"), 'row');
        
        $__internal_8d7eecccd7e9aef1fed9a8cbcc631151c838ac73c23a6bc3021e86e9bf19985a->leave($__internal_8d7eecccd7e9aef1fed9a8cbcc631151c838ac73c23a6bc3021e86e9bf19985a_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_email___mailbox_grid']) }}";
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
