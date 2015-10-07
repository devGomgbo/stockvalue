<?php

/* {{ form_row(form.children['oro_notification___email_notification_sender_name']) }} */
class __TwigTemplate_41f30ed750be4d4280eef30211d830dee6c78e36a9e8115857771e991bdc29b4 extends Twig_Template
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
        $__internal_a22f9da73245660c6dd6c658f355d10099c3b7c8372b902d392876c0d3683e09 = $this->env->getExtension("native_profiler");
        $__internal_a22f9da73245660c6dd6c658f355d10099c3b7c8372b902d392876c0d3683e09->enter($__internal_a22f9da73245660c6dd6c658f355d10099c3b7c8372b902d392876c0d3683e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_notification___email_notification_sender_name']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_notification___email_notification_sender_name", array(), "array"), 'row');
        
        $__internal_a22f9da73245660c6dd6c658f355d10099c3b7c8372b902d392876c0d3683e09->leave($__internal_a22f9da73245660c6dd6c658f355d10099c3b7c8372b902d392876c0d3683e09_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_notification___email_notification_sender_name']) }}";
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
