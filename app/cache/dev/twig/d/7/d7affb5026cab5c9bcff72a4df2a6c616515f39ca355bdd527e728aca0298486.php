<?php

/* OroUserBundle:User:Autocomplete/result.html.twig */
class __TwigTemplate_d7affb5026cab5c9bcff72a4df2a6c616515f39ca355bdd527e728aca0298486 extends Twig_Template
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
        $__internal_804fc1e077ad119fb54e89c3e24f8804e6517ede62395fbb8a27b41881955dd2 = $this->env->getExtension("native_profiler");
        $__internal_804fc1e077ad119fb54e89c3e24f8804e6517ede62395fbb8a27b41881955dd2->enter($__internal_804fc1e077ad119fb54e89c3e24f8804e6517ede62395fbb8a27b41881955dd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle:User:Autocomplete/result.html.twig"));

        // line 1
        echo "<img src=\"<% if (avatar) { %><%= avatar %><% } else { %>";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/img/avatar-xsmall.png"), "html_attr");
        echo "<% } %>\" width=\"16\" height=\"16\" />&nbsp;<%= highlight(_.escape(fullName)) %> - <%= highlight(_.escape(email)) %> (<%= highlight(_.escape(username)) %>)
";
        
        $__internal_804fc1e077ad119fb54e89c3e24f8804e6517ede62395fbb8a27b41881955dd2->leave($__internal_804fc1e077ad119fb54e89c3e24f8804e6517ede62395fbb8a27b41881955dd2_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle:User:Autocomplete/result.html.twig";
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
