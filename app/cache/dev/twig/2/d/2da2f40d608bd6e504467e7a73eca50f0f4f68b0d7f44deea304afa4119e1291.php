<?php

/* OroEmailBundle:Js:default_templates.js.twig */
class __TwigTemplate_2da2f40d608bd6e504467e7a73eca50f0f4f68b0d7f44deea304afa4119e1291 extends Twig_Template
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
        $__internal_0a9a71ef08159973802ae39c3a933c96b3e2c2787159975c7aa276ada72f34a2 = $this->env->getExtension("native_profiler");
        $__internal_0a9a71ef08159973802ae39c3a933c96b3e2c2787159975c7aa276ada72f34a2->enter($__internal_0a9a71ef08159973802ae39c3a933c96b3e2c2787159975c7aa276ada72f34a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle:Js:default_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"multiselect-origin-folder-template\">
    <div class=\"filter-item oro-drop\">
        <div class=\"btn filter-select filter-criteria-selector <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%= label %>: <% } %>
            <strong class=\"select-filter-placeholder multiselect-filter-placeholder\"><%= placeholder %></strong>
            <select multiple>
                <% _.each(options, function (item, key) { %>
                    <optgroup label=\"<%- key %>\">
                        <% _.each(item['choices']['folder']['choices'], function (option) { %>
                            <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                            <% if (_.isArray(selected.value)) { %>
                            <% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                            <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                            <%- option.label %>
                            </option>
                        <% }); %>
                    </optgroup>
                <% }); %>
            </select>
            <span class=\"reset-filter\" title=\"<%- _.__(\"oro.filter.wrapper.reset.tooltip\") %>\"
            ><i class=\"icon-remove hide-text\"><%- _.__(\"oro.filter.wrapper.reset.hint\") %></i></span>
        </div>
    </div>
</script>
";
        
        $__internal_0a9a71ef08159973802ae39c3a933c96b3e2c2787159975c7aa276ada72f34a2->leave($__internal_0a9a71ef08159973802ae39c3a933c96b3e2c2787159975c7aa276ada72f34a2_prof);

    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Js:default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
