<?php

/* OroNavigationBundle:Js:pinbar.js.twig */
class __TwigTemplate_7899e896dab67994263bc348e355be82b64d381fd1dd6a6df9aeb2a246c8fa7b extends Twig_Template
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
        $__internal_16c91aaf09e22b743fde11251b6a58ade1c9447508a90bbcc34dc60088361505 = $this->env->getExtension("native_profiler");
        $__internal_16c91aaf09e22b743fde11251b6a58ade1c9447508a90bbcc34dc60088361505->enter($__internal_16c91aaf09e22b743fde11251b6a58ade1c9447508a90bbcc34dc60088361505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Js:pinbar.js.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-list-pin-item\">
    <div class=\"pin-holder\">
        <button class=\"btn-close icon-remove\" href=\"#\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("close"), "html");
        echo "</button>
        <div><a href=\"<%= url %>\" data-options=\"{&quot;cache&quot;:true}\" title=\"<%- title_rendered %>\"><i class=\"icon-circle pin-status\"></i><%- title_rendered_short %></a></div>
    </div>
</script>
";
        
        $__internal_16c91aaf09e22b743fde11251b6a58ade1c9447508a90bbcc34dc60088361505->leave($__internal_16c91aaf09e22b743fde11251b6a58ade1c9447508a90bbcc34dc60088361505_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:pinbar.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
