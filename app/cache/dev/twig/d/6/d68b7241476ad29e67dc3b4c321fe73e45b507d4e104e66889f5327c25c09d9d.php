<?php

/* OroOrganizationBundle::owner.html.twig */
class __TwigTemplate_d68b7241476ad29e67dc3b4c321fe73e45b507d4e104e66889f5327c25c09d9d extends Twig_Template
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
        $__internal_34efeb4b118ab0bb84426c5591c7a61988322f42489bda5a45c8d2cfe5942afa = $this->env->getExtension("native_profiler");
        $__internal_34efeb4b118ab0bb84426c5591c7a61988322f42489bda5a45c8d2cfe5942afa->enter($__internal_34efeb4b118ab0bb84426c5591c7a61988322f42489bda5a45c8d2cfe5942afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroOrganizationBundle::owner.html.twig"));

        // line 1
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "owner", array(), "any", true, true)) {
            // line 2
            echo "    ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "owner", array()), "vars", array()), "label", array()) == "oro.organization.businessunit.parent.label")) {
                // line 3
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "owner", array()), 'row');
                echo "
    ";
            } else {
                // line 5
                echo "        ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "owner", array()), 'row', array("label" => (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : (""))));
                echo "
    ";
            }
        }
        
        $__internal_34efeb4b118ab0bb84426c5591c7a61988322f42489bda5a45c8d2cfe5942afa->leave($__internal_34efeb4b118ab0bb84426c5591c7a61988322f42489bda5a45c8d2cfe5942afa_prof);

    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle::owner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
