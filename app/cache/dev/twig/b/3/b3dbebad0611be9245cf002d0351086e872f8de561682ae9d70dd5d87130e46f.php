<?php

/* OroEntityPaginationBundle:Placeholder:editPagination.html.twig */
class __TwigTemplate_b3dbebad0611be9245cf002d0351086e872f8de561682ae9d70dd5d87130e46f extends Twig_Template
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
        $__internal_8f41a0538fe6d15d6d99f8a78136b4c5ecb0728239335939715e65b882a982a4 = $this->env->getExtension("native_profiler");
        $__internal_8f41a0538fe6d15d6d99f8a78136b4c5ecb0728239335939715e65b882a982a4->enter($__internal_8f41a0538fe6d15d6d99f8a78136b4c5ecb0728239335939715e65b882a982a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityPaginationBundle:Placeholder:editPagination.html.twig"));

        // line 1
        $context["scope"] = twig_constant("Oro\\Bundle\\EntityPaginationBundle\\Manager\\EntityPaginationManager::EDIT_SCOPE");
        // line 2
        $this->loadTemplate("OroEntityPaginationBundle:Placeholder:entityPagination.html.twig", "OroEntityPaginationBundle:Placeholder:editPagination.html.twig", 2)->display(array_merge($context, array("scope" => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")))));
        
        $__internal_8f41a0538fe6d15d6d99f8a78136b4c5ecb0728239335939715e65b882a982a4->leave($__internal_8f41a0538fe6d15d6d99f8a78136b4c5ecb0728239335939715e65b882a982a4_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityPaginationBundle:Placeholder:editPagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }
}
