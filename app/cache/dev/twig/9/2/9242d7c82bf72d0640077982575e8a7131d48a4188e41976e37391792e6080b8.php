<?php

/* OroReminderBundle:Form:fields.html.twig */
class __TwigTemplate_9242d7c82bf72d0640077982575e8a7131d48a4188e41976e37391792e6080b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_reminder_collection_widget' => array($this, 'block_oro_reminder_collection_widget'),
            'oro_reminder_widget' => array($this, 'block_oro_reminder_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3262cb56d5acd2cbcb229c80fc58fe7197703b54e05e19da61a02056d5202b18 = $this->env->getExtension("native_profiler");
        $__internal_3262cb56d5acd2cbcb229c80fc58fe7197703b54e05e19da61a02056d5202b18->enter($__internal_3262cb56d5acd2cbcb229c80fc58fe7197703b54e05e19da61a02056d5202b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroReminderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_reminder_collection_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('oro_reminder_widget', $context, $blocks);
        
        $__internal_3262cb56d5acd2cbcb229c80fc58fe7197703b54e05e19da61a02056d5202b18->leave($__internal_3262cb56d5acd2cbcb229c80fc58fe7197703b54e05e19da61a02056d5202b18_prof);

    }

    // line 1
    public function block_oro_reminder_collection_widget($context, array $blocks = array())
    {
        $__internal_8e4d3ca29590b25c4c58fac389f780cc1cb688be4131fa94cbbdd24b092489ea = $this->env->getExtension("native_profiler");
        $__internal_8e4d3ca29590b25c4c58fac389f780cc1cb688be4131fa94cbbdd24b092489ea->enter($__internal_8e4d3ca29590b25c4c58fac389f780cc1cb688be4131fa94cbbdd24b092489ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_reminder_collection_widget"));

        // line 2
        echo "    ";
        $context["class"] = "reminders-collection";
        // line 3
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) : ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))))));
        // line 4
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 5
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_collection");
        
        $__internal_8e4d3ca29590b25c4c58fac389f780cc1cb688be4131fa94cbbdd24b092489ea->leave($__internal_8e4d3ca29590b25c4c58fac389f780cc1cb688be4131fa94cbbdd24b092489ea_prof);

    }

    // line 8
    public function block_oro_reminder_widget($context, array $blocks = array())
    {
        $__internal_b2aae8503d941f33e95823050b8b93285dbf9525bc4e3b70ec3d0aa5b5682efa = $this->env->getExtension("native_profiler");
        $__internal_b2aae8503d941f33e95823050b8b93285dbf9525bc4e3b70ec3d0aa5b5682efa->enter($__internal_b2aae8503d941f33e95823050b8b93285dbf9525bc4e3b70ec3d0aa5b5682efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_reminder_widget"));

        // line 9
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
        <div class=\"method inline-field\">
            ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "method", array()), 'widget');
        echo "
        </div>
        <div class=\"number inline-field\">
            ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interval", array()), "number", array()), 'widget');
        echo "
        </div>
        <div class=\"unit inline-field\">
            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "interval", array()), "unit", array()), 'widget');
        echo "
        </div>
    </div>
";
        
        $__internal_b2aae8503d941f33e95823050b8b93285dbf9525bc4e3b70ec3d0aa5b5682efa->leave($__internal_b2aae8503d941f33e95823050b8b93285dbf9525bc4e3b70ec3d0aa5b5682efa_prof);

    }

    public function getTemplateName()
    {
        return "OroReminderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 17,  78 => 14,  72 => 11,  66 => 9,  60 => 8,  53 => 5,  48 => 4,  45 => 3,  42 => 2,  36 => 1,  29 => 8,  26 => 7,  24 => 1,);
    }
}
