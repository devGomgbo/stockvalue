<?php

/* {{ form_row(form.children['oro_sso___google_sso_client_id']) }} */
class __TwigTemplate_d72d406f6bf21b45771b29149330a1fe247ef3389acc78116003bc0d56aaa2ca extends Twig_Template
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
        $__internal_338ed42c8f856ef5235afa27b5606bfca7c8c3c326925913de4f0d089b52c1a8 = $this->env->getExtension("native_profiler");
        $__internal_338ed42c8f856ef5235afa27b5606bfca7c8c3c326925913de4f0d089b52c1a8->enter($__internal_338ed42c8f856ef5235afa27b5606bfca7c8c3c326925913de4f0d089b52c1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_sso___google_sso_client_id']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_sso___google_sso_client_id", array(), "array"), 'row');
        
        $__internal_338ed42c8f856ef5235afa27b5606bfca7c8c3c326925913de4f0d089b52c1a8->leave($__internal_338ed42c8f856ef5235afa27b5606bfca7c8c3c326925913de4f0d089b52c1a8_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_sso___google_sso_client_id']) }}";
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
