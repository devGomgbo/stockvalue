<?php

/* {{ form_row(form.children['oro_sso___google_sso_client_secret']) }} */
class __TwigTemplate_f03f981928c436a81c04d79af1bb85a29aba9b8d52375056e2a531f7683d87d3 extends Twig_Template
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
        $__internal_63808f744cf0c8792bccccdaab8417d796a35306e2ae0e5ad3a547744fe19dbd = $this->env->getExtension("native_profiler");
        $__internal_63808f744cf0c8792bccccdaab8417d796a35306e2ae0e5ad3a547744fe19dbd->enter($__internal_63808f744cf0c8792bccccdaab8417d796a35306e2ae0e5ad3a547744fe19dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_sso___google_sso_client_secret']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_sso___google_sso_client_secret", array(), "array"), 'row');
        
        $__internal_63808f744cf0c8792bccccdaab8417d796a35306e2ae0e5ad3a547744fe19dbd->leave($__internal_63808f744cf0c8792bccccdaab8417d796a35306e2ae0e5ad3a547744fe19dbd_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_sso___google_sso_client_secret']) }}";
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
