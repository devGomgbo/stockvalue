<?php

/* OroUserBundle:Form:fields.html.twig */
class __TwigTemplate_0bf43d08b29acfbeda0a83be2778e97220869fb6a7c02afd33003688c2b52d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_create_or_select_inline_js_acl_user_autocomplete' => array($this, 'block_oro_entity_create_or_select_inline_js_acl_user_autocomplete'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54b0df6a79d707c006dfb6bb5c121f450f885e4861cbdb0083b6ed687e75984c = $this->env->getExtension("native_profiler");
        $__internal_54b0df6a79d707c006dfb6bb5c121f450f885e4861cbdb0083b6ed687e75984c->enter($__internal_54b0df6a79d707c006dfb6bb5c121f450f885e4861cbdb0083b6ed687e75984c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_entity_create_or_select_inline_js_acl_user_autocomplete', $context, $blocks);
        
        $__internal_54b0df6a79d707c006dfb6bb5c121f450f885e4861cbdb0083b6ed687e75984c->leave($__internal_54b0df6a79d707c006dfb6bb5c121f450f885e4861cbdb0083b6ed687e75984c_prof);

    }

    public function block_oro_entity_create_or_select_inline_js_acl_user_autocomplete($context, array $blocks = array())
    {
        $__internal_7985791d04a89bbbf5bc1104285cfafe495e0e761d9c529ed011ac88fa08126f = $this->env->getExtension("native_profiler");
        $__internal_7985791d04a89bbbf5bc1104285cfafe495e0e761d9c529ed011ac88fa08126f->enter($__internal_7985791d04a89bbbf5bc1104285cfafe495e0e761d9c529ed011ac88fa08126f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_js_acl_user_autocomplete"));

        // line 2
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oroform/js/select-create-inline-type-handler'],
        function (\$, handler) {
            \$(function() {
                ";
        // line 6
        $context["gridParameters"] = twig_array_merge($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_parameters", array()), array("permission" => $this->getAttribute(        // line 7
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "permission", array()), "entity" => $this->getAttribute(        // line 8
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "entity_name", array()), "entity_id" => $this->getAttribute(        // line 9
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "entity_id", array())));
        // line 11
        echo "
                ";
        // line 12
        $context["urlParts"] = array("grid" => array("route" => "oro_datagrid_widget", "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(        // line 16
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_name", array()), "params" =>         // line 17
(isset($context["gridParameters"]) ? $context["gridParameters"] : $this->getContext($context, "gridParameters")), "renderParams" => $this->getAttribute($this->getAttribute(        // line 18
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_render_parameters", array()))));
        // line 22
        echo "
                ";
        // line 23
        if (((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
            // line 24
            echo "                ";
            $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) ? $context["urlParts"] : $this->getContext($context, "urlParts")), array("create" => array("route" => $this->getAttribute($this->getAttribute(            // line 26
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(            // line 27
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "create_form_route_parameters", array()))));
            // line 30
            echo "                ";
        }
        // line 31
        echo "
                handler(
                        \$('#";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-el'),
                        \$('#";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'),
                        ";
        // line 35
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
        echo ",
                        ";
        // line 36
        echo twig_jsonencode_filter((isset($context["urlParts"]) ? $context["urlParts"] : $this->getContext($context, "urlParts")), twig_constant("JSON_FORCE_OBJECT"));
        echo ",
                        ";
        // line 37
        echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")));
        echo ",
                        ";
        // line 38
        echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)));
        echo "
                );
            });
        });
    </script>
";
        
        $__internal_7985791d04a89bbbf5bc1104285cfafe495e0e761d9c529ed011ac88fa08126f->leave($__internal_7985791d04a89bbbf5bc1104285cfafe495e0e761d9c529ed011ac88fa08126f_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 38,  87 => 37,  83 => 36,  79 => 35,  75 => 34,  71 => 33,  67 => 31,  64 => 30,  62 => 27,  61 => 26,  59 => 24,  57 => 23,  54 => 22,  52 => 18,  51 => 17,  50 => 16,  49 => 12,  46 => 11,  44 => 9,  43 => 8,  42 => 7,  41 => 6,  35 => 2,  23 => 1,);
    }
}
