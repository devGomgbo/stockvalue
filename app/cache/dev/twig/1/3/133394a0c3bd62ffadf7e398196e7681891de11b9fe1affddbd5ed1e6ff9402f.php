<?php

/* OroUIBundle:Default:logo.html.twig */
class __TwigTemplate_133394a0c3bd62ffadf7e398196e7681891de11b9fe1affddbd5ed1e6ff9402f extends Twig_Template
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
        $__internal_1f2b2bde0a7706c50e1bcea772cd65069c125bfd03c4252563df0ca16530a362 = $this->env->getExtension("native_profiler");
        $__internal_1f2b2bde0a7706c50e1bcea772cd65069c125bfd03c4252563df0ca16530a362->enter($__internal_1f2b2bde0a7706c50e1bcea772cd65069c125bfd03c4252563df0ca16530a362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default:logo.html.twig"));

        // line 1
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 2
            echo "    <div id=\"organization-switcher\">";
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("organization_selector", $context)) ? (_twig_default_filter((isset($context["organization_selector"]) ? $context["organization_selector"] : $this->getContext($context, "organization_selector")), "organization_selector")) : ("organization_selector")), array());
            echo "</div>
";
        } else {
            // line 4
            echo "    <span id=\"main-menu-toggle\">
        <i class=\"icon-menu-bars\"></i>
    </span>
    <div id=\"organization-switcher\">";
            // line 7
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("organization_selector", $context)) ? (_twig_default_filter((isset($context["organization_selector"]) ? $context["organization_selector"] : $this->getContext($context, "organization_selector")), "organization_selector")) : ("organization_selector")), array());
            echo "</div>
";
        }
        
        $__internal_1f2b2bde0a7706c50e1bcea772cd65069c125bfd03c4252563df0ca16530a362->leave($__internal_1f2b2bde0a7706c50e1bcea772cd65069c125bfd03c4252563df0ca16530a362_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 4,  24 => 2,  22 => 1,);
    }
}
