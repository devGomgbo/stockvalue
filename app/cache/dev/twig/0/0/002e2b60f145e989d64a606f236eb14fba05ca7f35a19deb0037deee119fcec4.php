<?php

/* {{ form_row(form.children['oro_sso___google_sso_domains']) }} */
class __TwigTemplate_002e2b60f145e989d64a606f236eb14fba05ca7f35a19deb0037deee119fcec4 extends Twig_Template
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
        $__internal_6b1dff4b6adc56910d53ae0b181a6cf80ccc8ea4b8031ead0c05450e6118bfda = $this->env->getExtension("native_profiler");
        $__internal_6b1dff4b6adc56910d53ae0b181a6cf80ccc8ea4b8031ead0c05450e6118bfda->enter($__internal_6b1dff4b6adc56910d53ae0b181a6cf80ccc8ea4b8031ead0c05450e6118bfda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_sso___google_sso_domains']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_sso___google_sso_domains", array(), "array"), 'row');
        
        $__internal_6b1dff4b6adc56910d53ae0b181a6cf80ccc8ea4b8031ead0c05450e6118bfda->leave($__internal_6b1dff4b6adc56910d53ae0b181a6cf80ccc8ea4b8031ead0c05450e6118bfda_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_sso___google_sso_domains']) }}";
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
