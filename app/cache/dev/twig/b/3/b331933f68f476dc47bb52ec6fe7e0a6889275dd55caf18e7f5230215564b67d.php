<?php

/* OroNavigationBundle:Menu:application_menu.html.twig */
class __TwigTemplate_b331933f68f476dc47bb52ec6fe7e0a6889275dd55caf18e7f5230215564b67d extends Twig_Template
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
        $__internal_2c54652b5e46c887942c08d0c19aafc00f54420461a6e720b113b5a318c7d3ca = $this->env->getExtension("native_profiler");
        $__internal_2c54652b5e46c887942c08d0c19aafc00f54420461a6e720b113b5a318c7d3ca->enter($__internal_2c54652b5e46c887942c08d0c19aafc00f54420461a6e720b113b5a318c7d3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:application_menu.html.twig"));

        // line 1
        if (($this->env->getExtension('mobile_extension')->isMobile() || ($this->env->getExtension('config_extension')->getConfigValue("oro_ui.navbar_position") == "top"))) {
            // line 2
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:Menu:application_menu_desktop_sided.html.twig", "OroNavigationBundle:Menu:application_menu.html.twig", 4)->display($context);
        }
        
        $__internal_2c54652b5e46c887942c08d0c19aafc00f54420461a6e720b113b5a318c7d3ca->leave($__internal_2c54652b5e46c887942c08d0c19aafc00f54420461a6e720b113b5a318c7d3ca_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  24 => 2,  22 => 1,);
    }
}
