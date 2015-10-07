<?php

/* OroTranslationBundle:Translation:translation.js.twig */
class __TwigTemplate_214befe0b701b5a4470653ee17c310dc4ccbcc4b6fc94611cc063047720ba132 extends Twig_Template
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
        $__internal_321b229acaa9770a210a96e4b7465319771cd9b0f886272e488a58c4e81962e2 = $this->env->getExtension("native_profiler");
        $__internal_321b229acaa9770a210a96e4b7465319771cd9b0f886272e488a58c4e81962e2->enter($__internal_321b229acaa9770a210a96e4b7465319771cd9b0f886272e488a58c4e81962e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTranslationBundle:Translation:translation.js.twig"));

        // line 1
        echo "Translator.fromJSON(";
        echo twig_jsonencode_filter((isset($context["json"]) ? $context["json"] : $this->getContext($context, "json")));
        echo ");";
        
        $__internal_321b229acaa9770a210a96e4b7465319771cd9b0f886272e488a58c4e81962e2->leave($__internal_321b229acaa9770a210a96e4b7465319771cd9b0f886272e488a58c4e81962e2_prof);

    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Translation:translation.js.twig";
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
