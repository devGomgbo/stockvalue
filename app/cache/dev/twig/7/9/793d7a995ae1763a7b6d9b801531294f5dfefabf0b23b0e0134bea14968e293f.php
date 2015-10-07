<?php

/* OroFilterBundle:Js:container.js.twig */
class __TwigTemplate_793d7a995ae1763a7b6d9b801531294f5dfefabf0b23b0e0134bea14968e293f extends Twig_Template
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
        $__internal_e1d44b76040491ee2e8d43f9a68a2430a921e13dc942f928a5b997767abe0ffa = $this->env->getExtension("native_profiler");
        $__internal_e1d44b76040491ee2e8d43f9a68a2430a921e13dc942f928a5b997767abe0ffa->enter($__internal_e1d44b76040491ee2e8d43f9a68a2430a921e13dc942f928a5b997767abe0ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroFilterBundle:Js:container.js.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"filter-container\">
    <% if (!_.isEmpty(filters)) { %>
        ";
        // line 3
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            // line 4
            echo "            <div class=\"filter-box oro-clearfix-width\">
                <div class=\"dropdown\">
                    <a href=\"javascript:void(0);\" class=\"btn btn-large dropdown-toggle\" data-toggle=\"dropdown\">";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Filter Results"), "html");
            echo "</a>
                    <ul class=\"dropdown-menu\">
                        <li>
                            <div class=\"filter-container\">
                                <a class=\"reset-filter-button\" href=\"javascript:void(0);\">";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reset"), "html");
            echo "</a>
                                <select data-action=\"add-filter-select\" multiple>
                                    <% _.each(filters, function (filter, name) { %>
                                    <option title=\"<%- filter.label %>\" value=\"<%- name %>\" <% if (filter.enabled) { %>selected<% } %>>
                                    <%- filter.label %>
                                    </option>
                                    <% }); %>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        ";
        } else {
            // line 24
            echo "            <div class=\"filter-box oro-clearfix-width\">
                <div class=\"filter-container\">
                    <select data-action=\"add-filter-select\" multiple>
                        <% _.each(filters, function (filter, name) { %>
                        <option title=\"<%- filter.label %>\" value=\"<%- name %>\" <% if (filter.enabled) { %>selected<% } %>>
                        <%- filter.label %>
                        </option>
                        <% }); %>
                    </select>
                </div>
            </div>
        ";
        }
        // line 36
        echo "    <% } %>
</script>
";
        
        $__internal_e1d44b76040491ee2e8d43f9a68a2430a921e13dc942f928a5b997767abe0ffa->leave($__internal_e1d44b76040491ee2e8d43f9a68a2430a921e13dc942f928a5b997767abe0ffa_prof);

    }

    public function getTemplateName()
    {
        return "OroFilterBundle:Js:container.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 36,  56 => 24,  39 => 10,  32 => 6,  28 => 4,  26 => 3,  22 => 1,);
    }
}
