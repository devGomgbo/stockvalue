<?php

/* OroDashboardBundle:Js:items.html.twig */
class __TwigTemplate_ca45b8ebd96c27a15db19ee6d5faaccc20bf0360988a9c4bb513e1e37e0b49fb extends Twig_Template
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
        $__internal_bf2884957f2dff04c7327d368c7bceaec28dd3ebb0922f7b75d8cfe0734bb6f9 = $this->env->getExtension("native_profiler");
        $__internal_bf2884957f2dff04c7327d368c7bceaec28dd3ebb0922f7b75d8cfe0734bb6f9->enter($__internal_bf2884957f2dff04c7327d368c7bceaec28dd3ebb0922f7b75d8cfe0734bb6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Js:items.html.twig"));

        // line 1
        echo "<script id=\"widget-items-item-select-template\" type=\"text/template\">
    <div class=\"pull-left items-selector-widget\">
        <select class=\"item-select filter-select-oro\">
            <option></option>
            <% items.each(function (item) { %>
                <option value=\"<%= item.get('id') %>\"><%= item.get('label') %></option>
            <% }); %>
        </select>
    </div>
</script>

<script id=\"widget-items-item-template\" type=\"text/template\">
    <tr data-cid=\"<%= cid %>\">
        <td><%= label %></td>
        <td class=\"action-cell\">
            <input type=\"hidden\" name=\"<%= namePrefix %>[id]\" value=\"<%= id %>\">
            <input data-name=\"order\" type=\"hidden\" class=\"order\" name=\"<%= namePrefix %>[order]\" value=\"<%= order %>\">
            <input class=\"hide\" data-name=\"show\" type=\"checkbox\" name=\"<%= namePrefix %>[show]\" <%= show ? 'checked' : '' %>>
            <a href=\"javascript: void(0);\" class=\"action no-hash delete-button\"
                    title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.delete.label"), "html", null, true);
        echo "\"
                    data-collection-action=\"delete\">
                <i class=\"icon-trash hide-text\"></i>
            </a>
            <span title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.move_column.label"), "html", null, true);
        echo "\">
                <i class=\"icon-list handle\"></i>
            </span>
        </td>
    </tr>
</script>
";
        
        $__internal_bf2884957f2dff04c7327d368c7bceaec28dd3ebb0922f7b75d8cfe0734bb6f9->leave($__internal_bf2884957f2dff04c7327d368c7bceaec28dd3ebb0922f7b75d8cfe0734bb6f9_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Js:items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 24,  43 => 20,  22 => 1,);
    }
}
