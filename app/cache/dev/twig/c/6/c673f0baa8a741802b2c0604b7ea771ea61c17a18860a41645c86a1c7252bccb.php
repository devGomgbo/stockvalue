<?php

/* OroUserBundle:Menu:menuProfile.html.twig */
class __TwigTemplate_c673f0baa8a741802b2c0604b7ea771ea61c17a18860a41645c86a1c7252bccb extends Twig_Template
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
        $__internal_f06ddcc4f4437429d1a7c0f43e2110b1041a15fd41751032cdaf657d50a35a3d = $this->env->getExtension("native_profiler");
        $__internal_f06ddcc4f4437429d1a7c0f43e2110b1041a15fd41751032cdaf657d50a35a3d->enter($__internal_f06ddcc4f4437429d1a7c0f43e2110b1041a15fd41751032cdaf657d50a35a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle:Menu:menuProfile.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 2
            echo "    <li class=\"dropdown\" id=\"user-menu\">
        <a href=\"javascript: void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
            ";
            // line 4
            if ($this->env->getExtension('mobile_extension')->isMobile()) {
                // line 5
                echo "                <i class=\"icon-user\"></i>
            ";
            } else {
                // line 7
                echo "                ";
                // line 10
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('oro_entity')->getEntityName($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())));
                echo "
                <i class=\"icon-sort-down\"></i>
            ";
            }
            // line 13
            echo "        </a>
        ";
            // line 14
            echo $this->env->getExtension('oro_menu')->render("usermenu");
            echo "
    </li>
";
        } else {
            // line 17
            echo "    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("oro_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a></li>
";
        }
        
        $__internal_f06ddcc4f4437429d1a7c0f43e2110b1041a15fd41751032cdaf657d50a35a3d->leave($__internal_f06ddcc4f4437429d1a7c0f43e2110b1041a15fd41751032cdaf657d50a35a3d_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle:Menu:menuProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 17,  46 => 14,  43 => 13,  36 => 10,  34 => 7,  30 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
