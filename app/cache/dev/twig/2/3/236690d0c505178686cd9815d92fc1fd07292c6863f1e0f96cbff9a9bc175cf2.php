<?php

/* OroUIBundle:Default:user_dots_menu.html.twig */
class __TwigTemplate_236690d0c505178686cd9815d92fc1fd07292c6863f1e0f96cbff9a9bc175cf2 extends Twig_Template
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
        $__internal_c7596ee05a6ce154c338e27508efed0906679040ffa12de2c93e566a43fa8414 = $this->env->getExtension("native_profiler");
        $__internal_c7596ee05a6ce154c338e27508efed0906679040ffa12de2c93e566a43fa8414->enter($__internal_c7596ee05a6ce154c338e27508efed0906679040ffa12de2c93e566a43fa8414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default:user_dots_menu.html.twig"));

        // line 1
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("dots_menu", $context)) ? (_twig_default_filter((isset($context["dots_menu"]) ? $context["dots_menu"] : $this->getContext($context, "dots_menu")), "dots_menu")) : ("dots_menu")), array());
        
        $__internal_c7596ee05a6ce154c338e27508efed0906679040ffa12de2c93e566a43fa8414->leave($__internal_c7596ee05a6ce154c338e27508efed0906679040ffa12de2c93e566a43fa8414_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:user_dots_menu.html.twig";
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
