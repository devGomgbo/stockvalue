<?php

/* OroSecurityBundle:Organization:current_name.html.twig */
class __TwigTemplate_30c7cd426c747489dc03a34ff6d48a597639ed84ed5a7c524748a2838f4fea7b extends Twig_Template
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
        $__internal_78f306b2d8d35fc5ee6145790a01d89c47b80ee33061efe72dfe72a4b47aa204 = $this->env->getExtension("native_profiler");
        $__internal_78f306b2d8d35fc5ee6145790a01d89c47b80ee33061efe72dfe72a4b47aa204->enter($__internal_78f306b2d8d35fc5ee6145790a01d89c47b80ee33061efe72dfe72a4b47aa204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSecurityBundle:Organization:current_name.html.twig"));

        // line 1
        $context["current_organization"] = $this->env->getExtension('oro_security_organization_extension')->getCurrentOrganization();
        // line 2
        if ((isset($context["current_organization"]) ? $context["current_organization"] : $this->getContext($context, "current_organization"))) {
            // line 3
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["current_organization"]) ? $context["current_organization"] : $this->getContext($context, "current_organization")), "name", array()), "html", null, true);
            echo "
";
        }
        
        $__internal_78f306b2d8d35fc5ee6145790a01d89c47b80ee33061efe72dfe72a4b47aa204->leave($__internal_78f306b2d8d35fc5ee6145790a01d89c47b80ee33061efe72dfe72a4b47aa204_prof);

    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Organization:current_name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  24 => 2,  22 => 1,);
    }
}
