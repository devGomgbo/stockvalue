<?php

/* {{ form_row(form.children['oro_email___default_button_reply']) }} */
class __TwigTemplate_eb36756f9ab7926dbcf170953d0ca0d8f909565e1124d1534936c5fc12a588eb extends Twig_Template
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
        $__internal_ca4222a77f298b62f4f64e35ed2dff043adaba83f64d62a10f78695e46082430 = $this->env->getExtension("native_profiler");
        $__internal_ca4222a77f298b62f4f64e35ed2dff043adaba83f64d62a10f78695e46082430->enter($__internal_ca4222a77f298b62f4f64e35ed2dff043adaba83f64d62a10f78695e46082430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_email___default_button_reply']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_email___default_button_reply", array(), "array"), 'row');
        
        $__internal_ca4222a77f298b62f4f64e35ed2dff043adaba83f64d62a10f78695e46082430->leave($__internal_ca4222a77f298b62f4f64e35ed2dff043adaba83f64d62a10f78695e46082430_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_email___default_button_reply']) }}";
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
