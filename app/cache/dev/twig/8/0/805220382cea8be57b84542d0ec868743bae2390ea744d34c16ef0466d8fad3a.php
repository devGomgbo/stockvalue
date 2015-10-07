<?php

/* OroNavigationBundle:Menu:menu_base.html.twig */
class __TwigTemplate_805220382cea8be57b84542d0ec868743bae2390ea744d34c16ef0466d8fad3a extends Twig_Template
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
        $__internal_28cc61c7b076c37af03104f32acbe90acb7892f78ba4bd7d0e10555499aaff9a = $this->env->getExtension("native_profiler");
        $__internal_28cc61c7b076c37af03104f32acbe90acb7892f78ba4bd7d0e10555499aaff9a->enter($__internal_28cc61c7b076c37af03104f32acbe90acb7892f78ba4bd7d0e10555499aaff9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:menu_base.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "compressed", array())) {
            $this->displayBlock("compressed_root", $context, $blocks);
        } else {
            $this->displayBlock("root", $context, $blocks);
        }
        
        $__internal_28cc61c7b076c37af03104f32acbe90acb7892f78ba4bd7d0e10555499aaff9a->leave($__internal_28cc61c7b076c37af03104f32acbe90acb7892f78ba4bd7d0e10555499aaff9a_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
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
