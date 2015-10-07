<?php

/* OroUserBundle:User:Autocomplete/selection.html.twig */
class __TwigTemplate_fda934475956b42ae2d7d46479600b0e51e6d147fcd3ee90a30e739bda53ad08 extends Twig_Template
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
        $__internal_e55b82f09f6ffe9798462a9337616bac6434f081483aaaeb37b3fb3b03697172 = $this->env->getExtension("native_profiler");
        $__internal_e55b82f09f6ffe9798462a9337616bac6434f081483aaaeb37b3fb3b03697172->enter($__internal_e55b82f09f6ffe9798462a9337616bac6434f081483aaaeb37b3fb3b03697172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle:User:Autocomplete/selection.html.twig"));

        // line 1
        echo "<img src=\"<% if (avatar) { %><%= avatar %><% } else { %>";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<%= _.escape(fullName) %>
";
        
        $__internal_e55b82f09f6ffe9798462a9337616bac6434f081483aaaeb37b3fb3b03697172->leave($__internal_e55b82f09f6ffe9798462a9337616bac6434f081483aaaeb37b3fb3b03697172_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:Autocomplete/selection.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
