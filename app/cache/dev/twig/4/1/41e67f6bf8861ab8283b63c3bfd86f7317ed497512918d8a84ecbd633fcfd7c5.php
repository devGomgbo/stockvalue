<?php

/* {{ form_row(form.children['oro_email___append_signature']) }} */
class __TwigTemplate_41e67f6bf8861ab8283b63c3bfd86f7317ed497512918d8a84ecbd633fcfd7c5 extends Twig_Template
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
        $__internal_b3534d79345d02958f1f491f7f9264e33bf9eb0a64dcb89b67558b49c6344710 = $this->env->getExtension("native_profiler");
        $__internal_b3534d79345d02958f1f491f7f9264e33bf9eb0a64dcb89b67558b49c6344710->enter($__internal_b3534d79345d02958f1f491f7f9264e33bf9eb0a64dcb89b67558b49c6344710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_email___append_signature']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_email___append_signature", array(), "array"), 'row');
        
        $__internal_b3534d79345d02958f1f491f7f9264e33bf9eb0a64dcb89b67558b49c6344710->leave($__internal_b3534d79345d02958f1f491f7f9264e33bf9eb0a64dcb89b67558b49c6344710_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_email___append_signature']) }}";
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
