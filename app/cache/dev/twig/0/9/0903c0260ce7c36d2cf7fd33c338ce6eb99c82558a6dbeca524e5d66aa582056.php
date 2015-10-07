<?php

/* OroDashboardBundle:Js:default_templates.js.twig */
class __TwigTemplate_0903c0260ce7c36d2cf7fd33c338ce6eb99c82558a6dbeca524e5d66aa582056 extends Twig_Template
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
        $__internal_a6b8e6df16c64560588dfb52fabf5a24636ab490bd9e608c0cf49aed83a72c13 = $this->env->getExtension("native_profiler");
        $__internal_a6b8e6df16c64560588dfb52fabf5a24636ab490bd9e608c0cf49aed83a72c13->enter($__internal_a6b8e6df16c64560588dfb52fabf5a24636ab490bd9e608c0cf49aed83a72c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Js:default_templates.js.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"date-filter-template-wo-actions\">
    <div class=\"control-group\">
        <%= parts.join('') %>
    </div>
    <div>
        <div class=\"filter-start-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.start %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][start]\"
                   placeholder=\"<%- _.__('from') %>\"
            />
        </div>
        <span class=\"filter-separator\">-</span>
        <div class=\"filter-end-date\">
            <input type=\"text\" class=\"<%= inputClass %>\"
                   value=\"<%= value.value.end %>\"
                   name=\"<%= value.value.startEndPrefix %>[value][end]\"
                   placeholder=\"<%- _.__('to') %>\"
            />
        </div>
    </div>
</script>
";
        
        $__internal_a6b8e6df16c64560588dfb52fabf5a24636ab490bd9e608c0cf49aed83a72c13->leave($__internal_a6b8e6df16c64560588dfb52fabf5a24636ab490bd9e608c0cf49aed83a72c13_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Js:default_templates.js.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
