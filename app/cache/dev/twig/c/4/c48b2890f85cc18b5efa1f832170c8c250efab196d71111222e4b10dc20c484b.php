<?php

/* OroDataGridBundle:js:pagination-input.html.twig */
class __TwigTemplate_c48b2890f85cc18b5efa1f832170c8c250efab196d71111222e4b10dc20c484b extends Twig_Template
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
        $__internal_a48414ae8e155bc689ba50208a9f9563d087d101449817318108a6278dcd00a2 = $this->env->getExtension("native_profiler");
        $__internal_a48414ae8e155bc689ba50208a9f9563d087d101449817318108a6278dcd00a2->enter($__internal_a48414ae8e155bc689ba50208a9f9563d087d101449817318108a6278dcd00a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:pagination-input.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar-pagination-input\">
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.label') %>:</label>
    <ul class=\"icons-holder\">
    <% _.each(handles, function (handle) { %>
        <li <% if (handle.className || disabled) { %>class=\"<%= handle.className %> <% if (disabled) { %>disabled<% } %>\"<% } %>>
        <% if (handle.type == \"input\") { %>
            <input type=\"number\" value=\"<%= state.firstPage == 0 ? state.currentPage + 1 : state.currentPage  %>\"
                <% if (disabled) { %>disabled=\"disabled\"<% } %>/>
        <% } else { %>
            <a href=\"#\" <% if (handle.title) { %> title=\"<%= handle.title %>\"<% } %>>
            <% if (handle.wrapClass) { %>
                <i <% if (handle.wrapClass) { %>class=\"<%= handle.wrapClass %>\"<% } %>>
                    <%= handle.label %>
                </i>
            <% } else { %>
                <%= handle.label %>
            <% } %>
            </a>
        <% } %>
        </li>
    <% }); %>
    </ul>
";
        // line 23
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 24
            echo "    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalPages', {totalPages: state.totalPages || 1}) %>&nbsp;|</label>
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalRecords', {totalRecords: state.totalRecords}) %></label>
";
        }
        // line 27
        echo "</script>
";
        
        $__internal_a48414ae8e155bc689ba50208a9f9563d087d101449817318108a6278dcd00a2->leave($__internal_a48414ae8e155bc689ba50208a9f9563d087d101449817318108a6278dcd00a2_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:pagination-input.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 27,  48 => 24,  46 => 23,  22 => 1,);
    }
}
