<?php

/* OroQueryDesignerBundle:Form:fields.html.twig */
class __TwigTemplate_8dd8d1680fb1de30fcd35ca2e1895151fbcf263de24e48c5299322936995232b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_field_choice_row' => array($this, 'block_oro_field_choice_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_46587038647db28a136e1049705e6848ff6c14c42929e0aefd0a180877676690 = $this->env->getExtension("native_profiler");
        $__internal_46587038647db28a136e1049705e6848ff6c14c42929e0aefd0a180877676690->enter($__internal_46587038647db28a136e1049705e6848ff6c14c42929e0aefd0a180877676690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroQueryDesignerBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_field_choice_row', $context, $blocks);
        
        $__internal_46587038647db28a136e1049705e6848ff6c14c42929e0aefd0a180877676690->leave($__internal_46587038647db28a136e1049705e6848ff6c14c42929e0aefd0a180877676690_prof);

    }

    public function block_oro_field_choice_row($context, array $blocks = array())
    {
        $__internal_b61320e10dec4580db5cb97bc97927cf0f8fcd0a5e1b72205a4d8a1da1b7714d = $this->env->getExtension("native_profiler");
        $__internal_b61320e10dec4580db5cb97bc97927cf0f8fcd0a5e1b72205a4d8a1da1b7714d->enter($__internal_b61320e10dec4580db5cb97bc97927cf0f8fcd0a5e1b72205a4d8a1da1b7714d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_field_choice_row"));

        // line 2
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 4
        $context["fieldConditionOptions"] = array("select2" => array("placeholder" => $this->env->getExtension('translator')->trans(        // line 6
(isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))), "fieldsLoaderSelector" =>         // line 8
(isset($context["entity_choice_selector"]) ? $context["entity_choice_selector"] : $this->getContext($context, "entity_choice_selector")));
        // line 10
        echo "    <script type=\"text/javascript\">
        require(['oroentity/js/field-choice'], function (\$) {
            var \$field = \$('#";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            \$field.fieldChoice(";
        // line 13
        echo twig_jsonencode_filter((isset($context["fieldConditionOptions"]) ? $context["fieldConditionOptions"] : $this->getContext($context, "fieldConditionOptions")));
        echo ");
        });
    </script>
";
        
        $__internal_b61320e10dec4580db5cb97bc97927cf0f8fcd0a5e1b72205a4d8a1da1b7714d->leave($__internal_b61320e10dec4580db5cb97bc97927cf0f8fcd0a5e1b72205a4d8a1da1b7714d_prof);

    }

    public function getTemplateName()
    {
        return "OroQueryDesignerBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  49 => 12,  45 => 10,  43 => 8,  42 => 6,  41 => 4,  35 => 2,  23 => 1,);
    }
}
