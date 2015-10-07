<?php

/* OroNavigationBundle:Menu:mostviewed.html.twig */
class __TwigTemplate_8f20c9d516cb52654612a8122ac7e048c17ea487eaebc25dbe6324243a46797a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:history.html.twig", "OroNavigationBundle:Menu:mostviewed.html.twig", 1);
        $this->blocks = array(
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:history.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8fb46b275619f86eb923b41e57c6328fd2a74fd028cd8c74646211e19c87141 = $this->env->getExtension("native_profiler");
        $__internal_c8fb46b275619f86eb923b41e57c6328fd2a74fd028cd8c74646211e19c87141->enter($__internal_c8fb46b275619f86eb923b41e57c6328fd2a74fd028cd8c74646211e19c87141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:mostviewed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8fb46b275619f86eb923b41e57c6328fd2a74fd028cd8c74646211e19c87141->leave($__internal_c8fb46b275619f86eb923b41e57c6328fd2a74fd028cd8c74646211e19c87141_prof);

    }

    // line 3
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_702e0735e37a90d7098f864f8c871417de3db3e27d7de5f38a9dc87c31a4dc21 = $this->env->getExtension("native_profiler");
        $__internal_702e0735e37a90d7098f864f8c871417de3db3e27d7de5f38a9dc87c31a4dc21->enter($__internal_702e0735e37a90d7098f864f8c871417de3db3e27d7de5f38a9dc87c31a4dc21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 4
        if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
            // line 5
            echo "        <a class=\"menu-close\" href=\"#\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : $this->getContext($context, "oro_menu")), "attributes", array(0 => (isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes"))), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>";
        } else {
            // line 7
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
            echo "\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["oro_menu"]) ? $context["oro_menu"] : $this->getContext($context, "oro_menu")), "attributes", array(0 => (isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes"))), "method"), "html", null, true);
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>";
        }
        
        $__internal_702e0735e37a90d7098f864f8c871417de3db3e27d7de5f38a9dc87c31a4dc21->leave($__internal_702e0735e37a90d7098f864f8c871417de3db3e27d7de5f38a9dc87c31a4dc21_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:mostviewed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 7,  42 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
