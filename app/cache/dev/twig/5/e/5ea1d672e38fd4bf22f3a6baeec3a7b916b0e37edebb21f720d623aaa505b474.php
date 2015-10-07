<?php

/* OroDataGridBundle:js:pagination.html.twig */
class __TwigTemplate_5ea1d672e38fd4bf22f3a6baeec3a7b916b0e37edebb21f720d623aaa505b474 extends Twig_Template
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
        $__internal_71751ca7dd5aac8c922ff4afee523bf3dda161c401930c7446dfae292e9aa72f = $this->env->getExtension("native_profiler");
        $__internal_71751ca7dd5aac8c922ff4afee523bf3dda161c401930c7446dfae292e9aa72f->enter($__internal_71751ca7dd5aac8c922ff4afee523bf3dda161c401930c7446dfae292e9aa72f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:pagination.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar-pagination\">
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.label') %>:</label>
    <ul class=\"icons-holder\">
        <% _.each(handles, function (handle) { %>
        <li <% if (handle.className) { %>class=\"<%= handle.className %>\"<% } %>>
            <a href=\"#\" <% if (handle.title) { %> title=\"<%= handle.title %>\"<% } %>>
            <% if (handle.wrapClass) { %>
                <i <% if (handle.wrapClass) { %>class=\"<%= handle.wrapClass %>\"<% } %>>
                    <%= handle.label %>
                </i>
            <% } else { %>
                <%= handle.label %>
            <% } %>
            </a>
        </li>
        <% }); %>
    </ul>
";
        // line 18
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 19
            echo "    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalPages', {totalPages: state.totalPages || 1}) %>&nbsp;|</label>
    <label class=\"dib\"><%= _.__('oro.datagrid.pagination.totalRecords', {totalRecords: state.totalRecords}) %></label>
";
        }
        // line 22
        echo "</script>
";
        
        $__internal_71751ca7dd5aac8c922ff4afee523bf3dda161c401930c7446dfae292e9aa72f->leave($__internal_71751ca7dd5aac8c922ff4afee523bf3dda161c401930c7446dfae292e9aa72f_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 22,  43 => 19,  41 => 18,  22 => 1,);
    }
}
