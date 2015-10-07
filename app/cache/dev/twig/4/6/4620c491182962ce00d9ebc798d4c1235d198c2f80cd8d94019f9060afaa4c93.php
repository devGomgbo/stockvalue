<?php

/* OroDataGridBundle:js:action-header-cell.html.twig */
class __TwigTemplate_4620c491182962ce00d9ebc798d4c1235d198c2f80cd8d94019f9060afaa4c93 extends Twig_Template
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
        $__internal_b2bbf796bb12fab5fa0540648d649e8f24fd19f7540cbe094dbd219180824d38 = $this->env->getExtension("native_profiler");
        $__internal_b2bbf796bb12fab5fa0540648d649e8f24fd19f7540cbe094dbd219180824d38->enter($__internal_b2bbf796bb12fab5fa0540648d649e8f24fd19f7540cbe094dbd219180824d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:action-header-cell.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-datagrid-action-header-cell\">
    <div class=\"dropdown btn-group\">
        <button type=\"button\" class=\"btn btn-default btn-small dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.grid.mass_action.label"), "html", null, true);
        echo "\">
            <i class=\"icon-cog\"></i>
            <i class=\"caret\"></i>
        </button>
        <ul class=\"dropdown-menu\" data-action-panel></ul>
    </div>
</script>
";
        
        $__internal_b2bbf796bb12fab5fa0540648d649e8f24fd19f7540cbe094dbd219180824d38->leave($__internal_b2bbf796bb12fab5fa0540648d649e8f24fd19f7540cbe094dbd219180824d38_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:action-header-cell.html.twig";
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
