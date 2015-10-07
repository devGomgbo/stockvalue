<?php

/* OroConfigBundle:Form:fields.html.twig */
class __TwigTemplate_b3b3e85a76653b5666f6421eea60160e2b3e48d1ab26888ccc3ffbaa1a7e06e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_config_form_field_type_widget' => array($this, 'block_oro_config_form_field_type_widget'),
            'oro_config_form_field_type_row' => array($this, 'block_oro_config_form_field_type_row'),
            'oro_config_parent_scope_checkbox_type_row' => array($this, 'block_oro_config_parent_scope_checkbox_type_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b5b381f2095ad4c34fc2f39eaac52b4b9ad29b9413caad420b2d90e01ee44d3 = $this->env->getExtension("native_profiler");
        $__internal_8b5b381f2095ad4c34fc2f39eaac52b4b9ad29b9413caad420b2d90e01ee44d3->enter($__internal_8b5b381f2095ad4c34fc2f39eaac52b4b9ad29b9413caad420b2d90e01ee44d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroConfigBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_config_form_field_type_widget', $context, $blocks);
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('oro_config_form_field_type_row', $context, $blocks);
        // line 30
        echo "
";
        // line 31
        $this->displayBlock('oro_config_parent_scope_checkbox_type_row', $context, $blocks);
        
        $__internal_8b5b381f2095ad4c34fc2f39eaac52b4b9ad29b9413caad420b2d90e01ee44d3->leave($__internal_8b5b381f2095ad4c34fc2f39eaac52b4b9ad29b9413caad420b2d90e01ee44d3_prof);

    }

    // line 1
    public function block_oro_config_form_field_type_widget($context, array $blocks = array())
    {
        $__internal_6929ea1de5e6e49f0f65c6c4e2079cd759302ca6c1563517bb374ee2479fdceb = $this->env->getExtension("native_profiler");
        $__internal_6929ea1de5e6e49f0f65c6c4e2079cd759302ca6c1563517bb374ee2479fdceb->enter($__internal_6929ea1de5e6e49f0f65c6c4e2079cd759302ca6c1563517bb374ee2479fdceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_config_form_field_type_widget"));

        // line 2
        echo "    ";
        $context["additionalOptions"] = array();
        // line 3
        echo "    ";
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_parent_scope_value", array(), "any", true, true)) {
            // line 4
            echo "        ";
            $context["additionalOptions"] = array("disabled" => ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "use_parent_scope_value", array()), "vars", array()), "data", array()) == true));
            // line 5
            echo "    ";
        }
        // line 6
        echo "    ";
        $context["valueContainerId"] = ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), "vars", array()), "id", array()) . "_container");
        // line 7
        echo "
    <div id=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["valueContainerId"]) ? $context["valueContainerId"] : $this->getContext($context, "valueContainerId")), "html", null, true);
        echo "\"
         class=\"controls control-subgroup";
        // line 9
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), 'widget', (isset($context["additionalOptions"]) ? $context["additionalOptions"] : $this->getContext($context, "additionalOptions")));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), 'errors');
        echo "
    </div>

    ";
        // line 14
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "use_parent_scope_value", array(), "any", true, true)) {
            // line 15
            echo "        <div class=\"horizontal parent-scope-checkbox\">
            <div class=\"oro-clearfix\">
                ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "use_parent_scope_value", array()), 'row');
            echo "
            </div>
        </div>
    ";
        }
        
        $__internal_6929ea1de5e6e49f0f65c6c4e2079cd759302ca6c1563517bb374ee2479fdceb->leave($__internal_6929ea1de5e6e49f0f65c6c4e2079cd759302ca6c1563517bb374ee2479fdceb_prof);

    }

    // line 23
    public function block_oro_config_form_field_type_row($context, array $blocks = array())
    {
        $__internal_ff73bbfabcbf652440ca3ff7db6bcf27c385ae0b65a558de59521b2843971609 = $this->env->getExtension("native_profiler");
        $__internal_ff73bbfabcbf652440ca3ff7db6bcf27c385ae0b65a558de59521b2843971609->enter($__internal_ff73bbfabcbf652440ca3ff7db6bcf27c385ae0b65a558de59521b2843971609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_config_form_field_type_row"));

        // line 24
        echo "    ";
        if (( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "label", array(), "any", true, true) ||  !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "label", array()))) {
            // line 25
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "value", array()), 'row');
            echo "
    ";
        } else {
            // line 27
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
            echo "
    ";
        }
        
        $__internal_ff73bbfabcbf652440ca3ff7db6bcf27c385ae0b65a558de59521b2843971609->leave($__internal_ff73bbfabcbf652440ca3ff7db6bcf27c385ae0b65a558de59521b2843971609_prof);

    }

    // line 31
    public function block_oro_config_parent_scope_checkbox_type_row($context, array $blocks = array())
    {
        $__internal_395bcbfb921b8dd0124644ba976ff4b69ee150801b37ded94dee89f54445f54f = $this->env->getExtension("native_profiler");
        $__internal_395bcbfb921b8dd0124644ba976ff4b69ee150801b37ded94dee89f54445f54f->enter($__internal_395bcbfb921b8dd0124644ba976ff4b69ee150801b37ded94dee89f54445f54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_config_parent_scope_checkbox_type_row"));

        // line 32
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
";
        
        $__internal_395bcbfb921b8dd0124644ba976ff4b69ee150801b37ded94dee89f54445f54f->leave($__internal_395bcbfb921b8dd0124644ba976ff4b69ee150801b37ded94dee89f54445f54f_prof);

    }

    public function getTemplateName()
    {
        return "OroConfigBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  141 => 33,  136 => 32,  130 => 31,  119 => 27,  113 => 25,  110 => 24,  104 => 23,  92 => 17,  88 => 15,  86 => 14,  80 => 11,  76 => 10,  70 => 9,  66 => 8,  63 => 7,  60 => 6,  57 => 5,  54 => 4,  51 => 3,  48 => 2,  42 => 1,  35 => 31,  32 => 30,  30 => 23,  27 => 22,  25 => 1,);
    }
}
