<?php

/* OroDataGridBundle:js:grid-view.html.twig */
class __TwigTemplate_485ebf9fac8e52e1548122863e2cc28eba43e0f01935ffe3e77a9b29aad22636 extends Twig_Template
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
        $__internal_46cfb55592d6e4d2978bef7861f34f566fa2265b7a748eead70a49e7e1ec5c60 = $this->env->getExtension("native_profiler");
        $__internal_46cfb55592d6e4d2978bef7861f34f566fa2265b7a748eead70a49e7e1ec5c60->enter($__internal_46cfb55592d6e4d2978bef7861f34f566fa2265b7a748eead70a49e7e1ec5c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:grid-view.html.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"template-datagrid-grid-view\">
    <div class=\"btn-toolbar\">
        <% if (choices.length) { %>
            <div class=\"btn-group views-group\">
                <button data-toggle=\"dropdown\" class=\"btn btn-link dropdown-toggle <% if (disabled) { %>disabled<% } %>\">
                    <%= title %>
                </button>
                <ul class=\"dropdown-menu\">
                    <% _.each(choices, function (choice) { %>
                        <li><a href=\"#\" data-value=\"<%= choice.value %>\"><%= choice.label %></a></li>
                    <% }); %>
                </ul>
            </div>
        <% } %>
        <% if (showActions) { %>
            <div class=\"btn-group actions-group\">
                <button class=\"btn btn-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    <%= actionsLabel %>
                </button>
                <ul class=\"dropdown-menu\">
                    <% _.each(actions, function(action) { %>
                        <% if (action.enabled) { %>
                            <li><a href=\"#\" class=\"<%= action.name %>\"><%= action.label %></a></li>
                        <% } %>
                    <% }); %>
                </ul>
            </div>
            <% if (dirty) { %>
                <div class=\"edited-label\">&nbsp;-&nbsp;<%= editedLabel %></div>
            <% } %>
        <% } %>
    </div>
</script>
";
        
        $__internal_46cfb55592d6e4d2978bef7861f34f566fa2265b7a748eead70a49e7e1ec5c60->leave($__internal_46cfb55592d6e4d2978bef7861f34f566fa2265b7a748eead70a49e7e1ec5c60_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:grid-view.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
