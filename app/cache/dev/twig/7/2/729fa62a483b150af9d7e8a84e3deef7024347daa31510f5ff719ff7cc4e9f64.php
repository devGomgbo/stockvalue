<?php

/* OroFilterBundle:Js:default_templates.js.twig */
class __TwigTemplate_729fa62a483b150af9d7e8a84e3deef7024347daa31510f5ff719ff7cc4e9f64 extends Twig_Template
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
        $__internal_2292d56fcbfe5e52e6a9db523277ed430b567bff0199e6a3efbf6a34ec592c71 = $this->env->getExtension("native_profiler");
        $__internal_2292d56fcbfe5e52e6a9db523277ed430b567bff0199e6a3efbf6a34ec592c71->enter($__internal_2292d56fcbfe5e52e6a9db523277ed430b567bff0199e6a3efbf6a34ec592c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroFilterBundle:Js:default_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"filter-wrapper-template\">
    <div class=\"filter-item oro-drop\">
        <a href=\"<%= nullLink %>\"
           class=\"btn filter-criteria-selector oro-drop-opener oro-dropdown-toggle <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%= label %>: <% } %>
            <strong class=\"filter-criteria-hint\"><%- criteriaHint %></strong>
            <span class=\"reset-filter\" title=\"<%- _.__(\"oro.filter.wrapper.reset.tooltip\") %>\"
                ><i class=\"icon-remove hide-text\"><%- _.__(\"oro.filter.wrapper.reset.hint\") %></i></span>
            <span class=\"caret\"></span>
        </a>
        <div class=\"filter-criteria dropdown-menu\" />
    </div>
</script>
<script type=\"text/template\" id=\"none-filter-template\">
    <div><%= popupHint %></div>
</script>
<script type=\"text/template\" id=\"text-filter-template\">
    <div>
        <div>
            <input type=\"text\" name=\"value\" value=\"\"/>
        </div>
        <div class=\"oro-action\">
            <div class=\"btn-group\">
                <button type=\"button\" class=\"btn btn-primary filter-update\"><%- _.__(\"Update\") %></button>
            </div>
        </div>
    </div>
</script>
<script type=\"text/template\" id=\"choice-filter-template\">
    <div class=\"choice-filter\">
        <div class=\"btn-group btn-block\">
            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <%- selectedChoiceLabel %><span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                <% _.each(choices, function (option) { %>
                    <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"<%= option.value %>\"><%- option.label %></a>
                    </li>
                <% }); %>
            </ul>
        </div>
        <div class=\"value-field-frame\">
            <input type=\"text\" name=\"value\" value=\"\">
            <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%= selectedChoice %>\"/>
            <button class=\"btn btn-primary filter-update\" type=\"button\"><%- _.__(\"Update\") %></button>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"many-to-many-filter-template\">
    <div class=\"choice-filter\">
        <div class=\"btn-group btn-block\">
            <button class=\"btn dropdown-toggle\" data-toggle=\"dropdown\">
                <%- selectedChoiceLabel %><span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu\">
                <% _.each(choices, function (option) { %>
                    <li<% if (selectedChoice == option.value) { %> class=\"active\"<% } %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"<%= option.value %>\"><%- option.label %></a>
                    </li>
                <% }); %>
            </ul>
        </div>
        <div class=\"value-field-frame\">
            <input class=\"name_input\" type=\"hidden\" name=\"<%= name %>\" id=\"<%= name %>\" value=\"<%= selectedChoice %>\"/>
            <button class=\"btn btn-primary filter-update\" type=\"button\"><%- _.__(\"Update\") %></button>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"select-field-template\">
    <div class=\"horizontal clearfix\">
        <span class=\"filter-select-oro-wrapper\">
            <select name=\"<%= name %>\" class=\"filter-select-oro\">
                <% _.each(choices, function (option) { %>
                <option value=\"<%= option.value %>\"<% if (option.value == selectedChoice) { %> selected=\"selected\"<% } %>><%- option.label %></option>
                <% }); %>
            </select>
        </span>
    </div>
</script>

<script type=\"text/template\" id=\"date-filter-template\">
    <div>
        <%= parts.join('') %>
        <div>
            <div class=\"filter-start-date\">
                <input type=\"text\" class=\"<%= inputClass %>\"
                       value=\"<%= value.value.start %>\" name=\"start\" placeholder=\"<%- _.__('from') %>\">
            </div>
            <span class=\"filter-separator\">-</span>
            <div class=\"filter-end-date\">
                <input type=\"text\" class=\"<%= inputClass %>\"
                       value=\"<%= value.value.end %>\" name=\"end\" placeholder=\"<%- _.__('to') %>\">
            </div>
        </div>
        <div class=\"oro-action\">
            <div class=\"btn-group\">
                <button class=\"btn btn-primary filter-update\" type=\"button\"><%- _.__(\"Update\") %></button>
            </div>
        </div>
    </div>
</script>
<script type=\"text/template\" id=\"date-filter-dropdown-template\">
    <% if (!tabs.length) { %>
    <div id=\"calendar<%= suffix %>\"></div>
    <% } else { %>
    <ul class=\"nav nav-tabs nav-tabs-oro\">
        <% _.each(tabs, function (tab, i) { %>
        <li<% if (i === 0) { %> class=\"active\"<% } %>><a class=\"<%= tab.name %>\" href=\"#<%= tab.name %><%= suffix %>\"><%= tab.label %></a></li>
        <% }); %>
    </ul>
    <div class=\"tab-content\">
        <% _.each(tabs, function (tab, i) { %>
        <div class=\"tab-pane<% if (i === 0) { %> active<% } %>\" id=\"<%= tab.name %><%= suffix %>\"></div>
        <% }); %>
    </div>
    <% } %>
</script>
<script type=\"text/template\" id=\"select-filter-template\">
    <div class=\"filter-item oro-drop\">
        <div class=\"btn filter-select filter-criteria-selector <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%= label %>: <% } %>
            <strong class=\"select-filter-placeholder\"><%= placeholder %></strong>
            <select>
                <% _.each(options, function (option) { %>
                <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                    <% if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option>
                <% }); %>
            </select>
            <span class=\"reset-filter\" title=\"<%- _.__(\"oro.filter.wrapper.reset.tooltip\") %>\"
                ><i class=\"icon-remove hide-text\"><%- _.__(\"oro.filter.wrapper.reset.hint\") %></i></span>
        </div>
    </div>
</script>
<script type=\"text/template\" id=\"multiselect-filter-template\">
    <div class=\"filter-item oro-drop\">
        <div class=\"btn filter-select filter-criteria-selector <% if (isEmpty) { %>filter-default-value<% } %>\">
            <% if (showLabel) { %><%= label %>: <% } %>
            <strong class=\"select-filter-placeholder multiselect-filter-placeholder\"><%= placeholder %></strong>
            <select multiple>
                <% _.each(options, function (option) { %>
                <option value=\"<%= option.value %>\" title=\"<%- option.label %>\"
                    <% if (_.isArray(selected.value)) { %><% if (_.indexOf(selected.value, option.value) !== -1) { %> selected=\"selected\"<% } %>
                    <% } else if (option.value == selected.value) { %> selected=\"selected\"<% } %>>
                    <%- option.label %>
                </option><% }); %>
            </select>
            <span class=\"reset-filter\" title=\"<%- _.__(\"oro.filter.wrapper.reset.tooltip\") %>\"
                ><i class=\"icon-remove hide-text\"><%- _.__(\"oro.filter.wrapper.reset.hint\") %></i></span>
        </div>
    </div>
</script>
<script type=\"text/template\" id=\"dictionary-filter-template\">
    <span> <%= _.__('oro.filter.embedded.choice.field_to_value') %></span><%= parts.join('') %>:
    <input type=\"hidden\" name=\"select-values-autocomplete\" class=\"select-values-autocomplete hide\" value=\"\" />
</script>
";
        
        $__internal_2292d56fcbfe5e52e6a9db523277ed430b567bff0199e6a3efbf6a34ec592c71->leave($__internal_2292d56fcbfe5e52e6a9db523277ed430b567bff0199e6a3efbf6a34ec592c71_prof);

    }

    public function getTemplateName()
    {
        return "OroFilterBundle:Js:default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
