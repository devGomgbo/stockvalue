<?php

/* {{ form_row(form.children['oro_activity_list___grouping']) }} */
class __TwigTemplate_454205e013794b033e5947974574fc1c620a2e2cf99081371a052c4346d5c90e extends Twig_Template
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
        $__internal_ffe67c95db2b4277d1c08d04728e37051b6807020d587ba96f19b0d5e010be06 = $this->env->getExtension("native_profiler");
        $__internal_ffe67c95db2b4277d1c08d04728e37051b6807020d587ba96f19b0d5e010be06->enter($__internal_ffe67c95db2b4277d1c08d04728e37051b6807020d587ba96f19b0d5e010be06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_activity_list___grouping']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_activity_list___grouping", array(), "array"), 'row');
        
        $__internal_ffe67c95db2b4277d1c08d04728e37051b6807020d587ba96f19b0d5e010be06->leave($__internal_ffe67c95db2b4277d1c08d04728e37051b6807020d587ba96f19b0d5e010be06_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_activity_list___grouping']) }}";
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
