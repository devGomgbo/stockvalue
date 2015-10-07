<?php

/* {{ form_row(form.children['oro_sso___enable_google_sso']) }} */
class __TwigTemplate_76933591438ca774bc1b406a3b52adaae3185bbfbdee94be9442a1cf763a319f extends Twig_Template
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
        $__internal_8568caf3d900cd91db4d8f4a8538dd427b178ba7a445b6d2236c7d384fe6fd6e = $this->env->getExtension("native_profiler");
        $__internal_8568caf3d900cd91db4d8f4a8538dd427b178ba7a445b6d2236c7d384fe6fd6e->enter($__internal_8568caf3d900cd91db4d8f4a8538dd427b178ba7a445b6d2236c7d384fe6fd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_sso___enable_google_sso']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_sso___enable_google_sso", array(), "array"), 'row');
        
        $__internal_8568caf3d900cd91db4d8f4a8538dd427b178ba7a445b6d2236c7d384fe6fd6e->leave($__internal_8568caf3d900cd91db4d8f4a8538dd427b178ba7a445b6d2236c7d384fe6fd6e_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_sso___enable_google_sso']) }}";
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
