<?php

/* OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig */
class __TwigTemplate_ab99733e4addff178d38116c6b7c05c422c7aea1258e49a247a13a5457df5822 extends Twig_Template
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
        $__internal_640d14b2ed5ae59ef6fdda0c1d4ed3d42e09d691453880a2da3ed06f43478efa = $this->env->getExtension("native_profiler");
        $__internal_640d14b2ed5ae59ef6fdda0c1d4ed3d42e09d691453880a2da3ed06f43478efa->enter($__internal_640d14b2ed5ae59ef6fdda0c1d4ed3d42e09d691453880a2da3ed06f43478efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig"));

        // line 1
        echo $this->env->getExtension('oro_menu')->render("dots_menu");
        echo "
";
        
        $__internal_640d14b2ed5ae59ef6fdda0c1d4ed3d42e09d691453880a2da3ed06f43478efa->leave($__internal_640d14b2ed5ae59ef6fdda0c1d4ed3d42e09d691453880a2da3ed06f43478efa_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:dotsMenu.html.twig";
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
