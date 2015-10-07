<?php

/* OroUserBundle:Role:index.html.twig */
class __TwigTemplate_0603ac74e47607758acfdf4dd81cc62263376f57a41ac4c8b4e19821added95d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroUserBundle:Role:index.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a6c5bb73bdc7015ce33847d26f4fa8f50142cf08dbc16e9a2057f4dcdb0c12a = $this->env->getExtension("native_profiler");
        $__internal_7a6c5bb73bdc7015ce33847d26f4fa8f50142cf08dbc16e9a2057f4dcdb0c12a->enter($__internal_7a6c5bb73bdc7015ce33847d26f4fa8f50142cf08dbc16e9a2057f4dcdb0c12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle:Role:index.html.twig"));

        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUserBundle:Role:index.html.twig", 2);
        // line 3
        $context["gridName"] = "roles-grid";
        // line 4
        $context["pageTitle"] = $this->env->getExtension('translator')->trans("oro.user.role.entity_plural_label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a6c5bb73bdc7015ce33847d26f4fa8f50142cf08dbc16e9a2057f4dcdb0c12a->leave($__internal_7a6c5bb73bdc7015ce33847d26f4fa8f50142cf08dbc16e9a2057f4dcdb0c12a_prof);

    }

    // line 6
    public function block_navButtons($context, array $blocks = array())
    {
        $__internal_57c375313e26c0b96e00cfd18c3fc9280d8ddb6cd4daaf6570cb6ebf4c19a181 = $this->env->getExtension("native_profiler");
        $__internal_57c375313e26c0b96e00cfd18c3fc9280d8ddb6cd4daaf6570cb6ebf4c19a181->enter($__internal_57c375313e26c0b96e00cfd18c3fc9280d8ddb6cd4daaf6570cb6ebf4c19a181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navButtons"));

        // line 7
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_role_create")) {
            // line 8
            echo "        ";
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath("oro_user_role_create"), "entity_label" => $this->env->getExtension('translator')->trans("oro.user.role.entity_label")));
            // line 11
            echo "
    ";
        }
        
        $__internal_57c375313e26c0b96e00cfd18c3fc9280d8ddb6cd4daaf6570cb6ebf4c19a181->leave($__internal_57c375313e26c0b96e00cfd18c3fc9280d8ddb6cd4daaf6570cb6ebf4c19a181_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle:Role:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  50 => 8,  47 => 7,  41 => 6,  34 => 1,  32 => 4,  30 => 3,  28 => 2,  11 => 1,);
    }
}
