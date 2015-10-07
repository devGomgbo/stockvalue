<?php

/* OroNavigationBundle:Menu:dropdown.html.twig */
class __TwigTemplate_b6cea426a1593d88b6c328c7e7c5df01cbcdefc25b99a3fa6dc5a5e20f5c758f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e3ae72c2c6244005035704f5ab947abbee0ad1ad9d3972f09f3fdb1c8263d3b9 = $this->env->getExtension("native_profiler");
        $__internal_e3ae72c2c6244005035704f5ab947abbee0ad1ad9d3972f09f3fdb1c8263d3b9->enter($__internal_e3ae72c2c6244005035704f5ab947abbee0ad1ad9d3972f09f3fdb1c8263d3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:dropdown.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3ae72c2c6244005035704f5ab947abbee0ad1ad9d3972f09f3fdb1c8263d3b9->leave($__internal_e3ae72c2c6244005035704f5ab947abbee0ad1ad9d3972f09f3fdb1c8263d3b9_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_f70b138b4e61c36b7dd1fc0731655ae4872eb8ceda6ed8b004fb823d070bb4ea = $this->env->getExtension("native_profiler");
        $__internal_f70b138b4e61c36b7dd1fc0731655ae4872eb8ceda6ed8b004fb823d070bb4ea->enter($__internal_f70b138b4e61c36b7dd1fc0731655ae4872eb8ceda6ed8b004fb823d070bb4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    ";
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 5
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:dropdown.html.twig", 5);
        // line 6
        echo "    ";
        $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" =>         // line 8
$context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), "class", array(0 => "dropdown-menu")), "role" => "menu", "aria-labelledby" => "dropdownMenu"));
        // line 12
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_f70b138b4e61c36b7dd1fc0731655ae4872eb8ceda6ed8b004fb823d070bb4ea->leave($__internal_f70b138b4e61c36b7dd1fc0731655ae4872eb8ceda6ed8b004fb823d070bb4ea_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dropdown.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  48 => 8,  46 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
