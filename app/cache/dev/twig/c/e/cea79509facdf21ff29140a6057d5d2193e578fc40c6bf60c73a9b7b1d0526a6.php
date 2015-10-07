<?php

/* {{ form_row(form.children['oro_email___signature']) }} */
class __TwigTemplate_cea79509facdf21ff29140a6057d5d2193e578fc40c6bf60c73a9b7b1d0526a6 extends Twig_Template
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
        $__internal_98f70b04f2b8903cf9021d5e55566cd5ed3716ffe1babcb4a8673b55f86d9e9f = $this->env->getExtension("native_profiler");
        $__internal_98f70b04f2b8903cf9021d5e55566cd5ed3716ffe1babcb4a8673b55f86d9e9f->enter($__internal_98f70b04f2b8903cf9021d5e55566cd5ed3716ffe1babcb4a8673b55f86d9e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_email___signature']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_email___signature", array(), "array"), 'row');
        
        $__internal_98f70b04f2b8903cf9021d5e55566cd5ed3716ffe1babcb4a8673b55f86d9e9f->leave($__internal_98f70b04f2b8903cf9021d5e55566cd5ed3716ffe1babcb4a8673b55f86d9e9f_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_email___signature']) }}";
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
