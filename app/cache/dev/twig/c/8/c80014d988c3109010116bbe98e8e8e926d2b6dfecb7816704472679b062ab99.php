<?php

/* OroNavigationBundle:Js:dot.menu.js.twig */
class __TwigTemplate_c80014d988c3109010116bbe98e8e8e926d2b6dfecb7816704472679b062ab99 extends Twig_Template
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
        $__internal_6dd7f61b04fea5391c284e3d44cebf5eb2086fac0d0191445971fb341809dc1e = $this->env->getExtension("native_profiler");
        $__internal_6dd7f61b04fea5391c284e3d44cebf5eb2086fac0d0191445971fb341809dc1e->enter($__internal_6dd7f61b04fea5391c284e3d44cebf5eb2086fac0d0191445971fb341809dc1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Js:dot.menu.js.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-dot-menu-item\">
    <button class=\"close\" type=\"button\">&times;</button><a href=\"<%= url %>\"><%- title_rendered %></a>
</script>
";
        
        $__internal_6dd7f61b04fea5391c284e3d44cebf5eb2086fac0d0191445971fb341809dc1e->leave($__internal_6dd7f61b04fea5391c284e3d44cebf5eb2086fac0d0191445971fb341809dc1e_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:dot.menu.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
