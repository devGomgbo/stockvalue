<?php

/* OroNavigationBundle:Menu:history.html.twig */
class __TwigTemplate_d698c50704b96c7986427914876e3b37f63f120f00835390039c28ae3991ddd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:history.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb1606442ed92266b84b1b6a081fbcb54883296600165e00eace429774219569 = $this->env->getExtension("native_profiler");
        $__internal_cb1606442ed92266b84b1b6a081fbcb54883296600165e00eace429774219569->enter($__internal_cb1606442ed92266b84b1b6a081fbcb54883296600165e00eace429774219569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:history.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb1606442ed92266b84b1b6a081fbcb54883296600165e00eace429774219569->leave($__internal_cb1606442ed92266b84b1b6a081fbcb54883296600165e00eace429774219569_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_e5cc318fe94c517b23d87a9ea3e769e736a9b2e17220248303e0cc1a29141c9b = $this->env->getExtension("native_profiler");
        $__internal_e5cc318fe94c517b23d87a9ea3e769e736a9b2e17220248303e0cc1a29141c9b->enter($__internal_e5cc318fe94c517b23d87a9ea3e769e736a9b2e17220248303e0cc1a29141c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        echo "    <ul";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : $this->getContext($context, "oro_menu")), "attributes", array(0 => (isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes"))), "method"), "html", null, true);
        echo ">
        ";
        // line 5
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 6
            echo "            ";
            $context["oro_menu"] = $this;
            // line 7
            echo "            ";
            $this->displayBlock("children", $context, $blocks);
            echo "
        ";
        }
        // line 9
        echo "    </ul>
    ";
        // line 10
        if (( !$this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && (null === $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "parent", array())))) {
            // line 11
            echo "        <div class=\"dot-menu-empty-message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.messages.no_items"), "html", null, true);
            echo "</div>
    ";
        }
        
        $__internal_e5cc318fe94c517b23d87a9ea3e769e736a9b2e17220248303e0cc1a29141c9b->leave($__internal_e5cc318fe94c517b23d87a9ea3e769e736a9b2e17220248303e0cc1a29141c9b_prof);

    }

    // line 15
    public function block_label($context, array $blocks = array())
    {
        $__internal_c764979d15993f40194df877c6b84d2522ab15156d94305a9914e35a92b535c6 = $this->env->getExtension("native_profiler");
        $__internal_c764979d15993f40194df877c6b84d2522ab15156d94305a9914e35a92b535c6->enter($__internal_c764979d15993f40194df877c6b84d2522ab15156d94305a9914e35a92b535c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        echo "
";
        
        $__internal_c764979d15993f40194df877c6b84d2522ab15156d94305a9914e35a92b535c6->leave($__internal_c764979d15993f40194df877c6b84d2522ab15156d94305a9914e35a92b535c6_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 16,  73 => 15,  62 => 11,  60 => 10,  57 => 9,  51 => 7,  48 => 6,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
