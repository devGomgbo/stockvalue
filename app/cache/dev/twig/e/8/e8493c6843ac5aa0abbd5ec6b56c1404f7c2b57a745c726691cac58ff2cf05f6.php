<?php

/* OroDataAuditBundle:js:audit-condition-type-select.html.twig */
class __TwigTemplate_e8493c6843ac5aa0abbd5ec6b56c1404f7c2b57a745c726691cac58ff2cf05f6 extends Twig_Template
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
        $__internal_3c4e2f44855529dfa819dda1f8eeefd1906cc5c3769fbf616cb7f3ea718613e6 = $this->env->getExtension("native_profiler");
        $__internal_3c4e2f44855529dfa819dda1f8eeefd1906cc5c3769fbf616cb7f3ea718613e6->enter($__internal_3c4e2f44855529dfa819dda1f8eeefd1906cc5c3769fbf616cb7f3ea718613e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataAuditBundle:js:audit-condition-type-select.html.twig"));

        // line 1
        echo "<script type=\"text-template\" id=\"template-audit-condition-type-select\">
    <span class=\"active-filter\">
        <div>
            <div class=\"dropdown\">
                <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"><%= selected === \"changed\" ? changedLabel : changedToValueLabel %></a>
                <ul class=\"dropdown-menu\">
                    <li <%= (selected === \"changed\") ? 'class=\"active\"' : '' %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"changed\"><%= changedLabel %></a>
                    </li>
                    <li <%= (selected === \"changed_to_value\") ? 'class=\"active\"' : '' %>>
                        <a class=\"choice-value\" href=\"#\" data-value=\"changed_to_value\"><%= changedToValueLabel %></a>
                    </li>
                </ul>

                <select style=\"display: none;\">
                    <option <%= (selected === \"changed\") ? \"selected\" : \"\" %> value=\"changed\"><%= changedLabel %></option>
                    <option <%= (selected === \"changed_to_value\") ? \"selected\" : \"\" %> value=\"changed_to_value\"><%= changedToValueLabel %></option>
                </select>
                <span class=\"active-filter\">
                </span>
            </div>
        </div>
    </span>
</script>
";
        
        $__internal_3c4e2f44855529dfa819dda1f8eeefd1906cc5c3769fbf616cb7f3ea718613e6->leave($__internal_3c4e2f44855529dfa819dda1f8eeefd1906cc5c3769fbf616cb7f3ea718613e6_prof);

    }

    public function getTemplateName()
    {
        return "OroDataAuditBundle:js:audit-condition-type-select.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
