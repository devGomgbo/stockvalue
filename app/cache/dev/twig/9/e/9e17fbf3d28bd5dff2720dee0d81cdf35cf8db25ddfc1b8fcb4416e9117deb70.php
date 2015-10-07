<?php

/* OroNavigationBundle:Menu:dots_menu.html.twig */
class __TwigTemplate_9e17fbf3d28bd5dff2720dee0d81cdf35cf8db25ddfc1b8fcb4416e9117deb70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:dots_tabs.html.twig", "OroNavigationBundle:Menu:dots_menu.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:dots_tabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6a0d3717141311716a3861b46a1e2228e805331f67db93085fcdf49a1d165a3 = $this->env->getExtension("native_profiler");
        $__internal_e6a0d3717141311716a3861b46a1e2228e805331f67db93085fcdf49a1d165a3->enter($__internal_e6a0d3717141311716a3861b46a1e2228e805331f67db93085fcdf49a1d165a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:dots_menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6a0d3717141311716a3861b46a1e2228e805331f67db93085fcdf49a1d165a3->leave($__internal_e6a0d3717141311716a3861b46a1e2228e805331f67db93085fcdf49a1d165a3_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_9974fa6c83a10065dff7957ed054ba0c1bf943ad2494cc98231057227f0ae6b0 = $this->env->getExtension("native_profiler");
        $__internal_9974fa6c83a10065dff7957ed054ba0c1bf943ad2494cc98231057227f0ae6b0->enter($__internal_9974fa6c83a10065dff7957ed054ba0c1bf943ad2494cc98231057227f0ae6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    ";
        if (((($this->env->getExtension('mobile_extension')->isDesktop() && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array())) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 5
            echo "    <li class=\"dot-menu dropdown\">
        <a href=\"#\" class=\"oro-dropdown-toggle\">
            <i class=\"icon-bars\"></i>
        </a>
        <div class=\"dropdown-menu pull-right\" tabindex=\"0\">
            <div class=\"tabbable tabs-left\">
                ";
            // line 11
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
                ";
            // line 12
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
            </div>
        </div>
    </li>
    <script type=\"text/javascript\">
        require(['jquery', 'bootstrap'], function (\$) {
            \$('.show-if-empty a').tab('show');
        });
    </script>
    ";
        }
        
        $__internal_9974fa6c83a10065dff7957ed054ba0c1bf943ad2494cc98231057227f0ae6b0->leave($__internal_9974fa6c83a10065dff7957ed054ba0c1bf943ad2494cc98231057227f0ae6b0_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dots_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 12,  51 => 11,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
