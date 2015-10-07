<?php

/* OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig */
class __TwigTemplate_95cbb32e5b78ffd0429e81f20664705836a9638fa369ce135f8254257ed453c9 extends Twig_Template
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
        $__internal_86c3fd9796495465aaeb5077a6d22e5cce8aa87cffce4a4d021c9e09030fa45f = $this->env->getExtension("native_profiler");
        $__internal_86c3fd9796495465aaeb5077a6d22e5cce8aa87cffce4a4d021c9e09030fa45f->enter($__internal_86c3fd9796495465aaeb5077a6d22e5cce8aa87cffce4a4d021c9e09030fa45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig"));

        // line 1
        echo $this->env->getExtension('oro_menu')->render("application_menu");
        echo "
";
        
        $__internal_86c3fd9796495465aaeb5077a6d22e5cce8aa87cffce4a4d021c9e09030fa45f->leave($__internal_86c3fd9796495465aaeb5077a6d22e5cce8aa87cffce4a4d021c9e09030fa45f_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:applicationMenu.html.twig";
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
