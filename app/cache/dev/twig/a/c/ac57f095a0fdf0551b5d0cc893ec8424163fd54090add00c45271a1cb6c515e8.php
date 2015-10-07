<?php

/* OroNavigationBundle:Menu:pin_tabs_list.html.twig */
class __TwigTemplate_ac57f095a0fdf0551b5d0cc893ec8424163fd54090add00c45271a1cb6c515e8 extends Twig_Template
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
        $__internal_1953b6091ff648b120609081bb42d76cebe726fd1568be8e2e24911fa1dcfc61 = $this->env->getExtension("native_profiler");
        $__internal_1953b6091ff648b120609081bb42d76cebe726fd1568be8e2e24911fa1dcfc61->enter($__internal_1953b6091ff648b120609081bb42d76cebe726fd1568be8e2e24911fa1dcfc61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:pin_tabs_list.html.twig"));

        // line 1
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 2
            echo "<div class=\"list-bar-wrapper\" id=\"pinbar\">
    <div class=\"list-bar\">
        <ul></ul>
        <div class=\"pin-bar-empty\" ><a href=\"";
            // line 5
            echo $this->env->getExtension('routing')->getPath("oro_pinbar_help");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Learn how to use this space"), "html", null, true);
            echo "</a></div>
    </div>
    <div class=\"show-more dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"icon-ellipsis-vertical\"></i></a><div class=\"dropdown-menu pull-right\"><ul></ul></div></div>
    ";
            // line 8
            echo $this->env->getExtension('oro_menu')->render("pinbar");
            echo "
</div>
";
        }
        
        $__internal_1953b6091ff648b120609081bb42d76cebe726fd1568be8e2e24911fa1dcfc61->leave($__internal_1953b6091ff648b120609081bb42d76cebe726fd1568be8e2e24911fa1dcfc61_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:pin_tabs_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  29 => 5,  24 => 2,  22 => 1,);
    }
}
