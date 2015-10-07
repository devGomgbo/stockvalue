<?php

/* {{ form_row(form.children['oro_notification___email_notification_sender_email']) }} */
class __TwigTemplate_954985ccc2d65905e01dbff70f5e78e9b69b8addda37ee12ea514443cfd6a657 extends Twig_Template
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
        $__internal_d3606d77d37227f73a0eae9f423af2f272a1d17cb06f4fed9af8160f56aafafa = $this->env->getExtension("native_profiler");
        $__internal_d3606d77d37227f73a0eae9f423af2f272a1d17cb06f4fed9af8160f56aafafa->enter($__internal_d3606d77d37227f73a0eae9f423af2f272a1d17cb06f4fed9af8160f56aafafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{{ form_row(form.children['oro_notification___email_notification_sender_email']) }}"));

        // line 1
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "oro_notification___email_notification_sender_email", array(), "array"), 'row');
        
        $__internal_d3606d77d37227f73a0eae9f423af2f272a1d17cb06f4fed9af8160f56aafafa->leave($__internal_d3606d77d37227f73a0eae9f423af2f272a1d17cb06f4fed9af8160f56aafafa_prof);

    }

    public function getTemplateName()
    {
        return "{{ form_row(form.children['oro_notification___email_notification_sender_email']) }}";
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
