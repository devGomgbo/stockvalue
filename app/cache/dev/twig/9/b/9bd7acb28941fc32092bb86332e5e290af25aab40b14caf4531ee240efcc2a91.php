<?php

/* {{ form_row(form.children['oro_email___minimum_input_length']) }} */
class __TwigTemplate_9bd7acb28941fc32092bb86332e5e290af25aab40b14caf4531ee240efcc2a91 extends Twig_Template
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
        $__internal_c577563710ede1b33777e556471747f3fdc775c45ccb6962e88b3f4f70a164c7 = $this->env->getExtension("native_profiler");
        $__internal_c577563710ede1b33777e556471747f3fdc775c45ccb6962e88b3f4f70a164c7->enter($__internal_c577563710ede1b33777e556471747f3fdc775c45ccb6962e88b3f4f70a164c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_email___minimum_input_length']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_email___minimum_input_length", array(), "array"), 'row');
        
        $__internal_c577563710ede1b33777e556471747f3fdc775c45ccb6962e88b3f4f70a164c7->leave($__internal_c577563710ede1b33777e556471747f3fdc775c45ccb6962e88b3f4f70a164c7_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_email___minimum_input_length']) }}";
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
