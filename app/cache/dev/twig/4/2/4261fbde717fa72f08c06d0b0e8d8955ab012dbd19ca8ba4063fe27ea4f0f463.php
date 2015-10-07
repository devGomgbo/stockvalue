<?php

/* OroDataGridBundle:js:page-size.html.twig */
class __TwigTemplate_4261fbde717fa72f08c06d0b0e8d8955ab012dbd19ca8ba4063fe27ea4f0f463 extends Twig_Template
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
        $__internal_90c9d45756b0e02487390d248b8764abb794269e7eaa54109b584027be6da6bf = $this->env->getExtension("native_profiler");
        $__internal_90c9d45756b0e02487390d248b8764abb794269e7eaa54109b584027be6da6bf->enter($__internal_90c9d45756b0e02487390d248b8764abb794269e7eaa54109b584027be6da6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:page-size.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar-page-size\">
";
        // line 2
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 3
            echo "    <label class=\"control-label\"><%- _.__(\"View per page\") %>: &nbsp;</label>
";
        }
        // line 5
        echo "    <div class=\"btn-group\">
        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle <% if (disabled) { %>disabled<% } %>\">
            <%= currentSizeLabel %><span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu pull-right\">
            <% _.each(items, function (item) { %>
            <li><a href=\"#\" data-size=\"<% if (_.isUndefined(item.size)) { %><%= item %><% } else { %><%= item.size %><% } %>\">
                <% if (_.isUndefined(item.label)) { %><%= item %><% } else { %><%= item.label %><% } %></a></li>
            <% }); %>
        </ul>
    </div>
";
        // line 16
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            // line 17
            echo "    <label><%- _.__(\"Per page\") %></label>
";
        }
        // line 19
        echo "</script>
";
        
        $__internal_90c9d45756b0e02487390d248b8764abb794269e7eaa54109b584027be6da6bf->leave($__internal_90c9d45756b0e02487390d248b8764abb794269e7eaa54109b584027be6da6bf_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:page-size.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 19,  46 => 17,  44 => 16,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }
}
