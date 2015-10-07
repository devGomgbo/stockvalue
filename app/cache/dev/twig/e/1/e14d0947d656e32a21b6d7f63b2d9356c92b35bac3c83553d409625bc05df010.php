<?php

/* OroDataGridBundle:js:select-all-header-cell.html.twig */
class __TwigTemplate_e14d0947d656e32a21b6d7f63b2d9356c92b35bac3c83553d409625bc05df010 extends Twig_Template
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
        $__internal_16ebc093ca6a1c7edbb23cac4f5fbf2b8b834038e447e18ec92599e37d37b1ff = $this->env->getExtension("native_profiler");
        $__internal_16ebc093ca6a1c7edbb23cac4f5fbf2b8b834038e447e18ec92599e37d37b1ff->enter($__internal_16ebc093ca6a1c7edbb23cac4f5fbf2b8b834038e447e18ec92599e37d37b1ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:select-all-header-cell.html.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"template-select-all-header-cell\">
    <div class=\"btn-group dropdown\">
        <button class=\"btn btn-default btn-small dropdown-toggle\" data-toggle=\"dropdown\"><input type=\"checkbox\" data-select/>
            <i class=\"caret\"></i>
        </button>
        <ul class=\"dropdown-menu\">
            <li><a href=\"#\" data-select-all><%- _.__('oro.datagrid.headerCell.selectAll.all') %></a></li>
            <li class=\"all-visible\"><a href=\"#\" data-select-all-visible><%- _.__('oro.datagrid.headerCell.selectAll.allVisible') %></a></li>
            <li><a href=\"#\" data-select-none><%- _.__('oro.datagrid.headerCell.selectAll.none') %></a></li>
        </ul>
    </div>
</script>
";
        
        $__internal_16ebc093ca6a1c7edbb23cac4f5fbf2b8b834038e447e18ec92599e37d37b1ff->leave($__internal_16ebc093ca6a1c7edbb23cac4f5fbf2b8b834038e447e18ec92599e37d37b1ff_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:select-all-header-cell.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
