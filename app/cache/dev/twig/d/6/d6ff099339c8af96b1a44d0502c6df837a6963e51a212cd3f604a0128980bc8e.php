<?php

/* OroNavigationBundle:HashNav:hashNavAjax.html.twig */
class __TwigTemplate_d6ff099339c8af96b1a44d0502c6df837a6963e51a212cd3f604a0128980bc8e extends Twig_Template
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
        $__internal_a749f193c19e6065e2ffb840eaf5bec450a13bde2e48c55120bf6aec126a0d05 = $this->env->getExtension("native_profiler");
        $__internal_a749f193c19e6065e2ffb840eaf5bec450a13bde2e48c55120bf6aec126a0d05->enter($__internal_a749f193c19e6065e2ffb840eaf5bec450a13bde2e48c55120bf6aec126a0d05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:HashNav:hashNavAjax.html.twig"));

        // line 1
        ob_start();
        // line 2
        echo "    ";
        echo twig_jsonencode_filter($this->env->getExtension('oro_ui.content')->getContent(((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), array())) : (array()))));
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a749f193c19e6065e2ffb840eaf5bec450a13bde2e48c55120bf6aec126a0d05->leave($__internal_a749f193c19e6065e2ffb840eaf5bec450a13bde2e48c55120bf6aec126a0d05_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:HashNav:hashNavAjax.html.twig";
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
