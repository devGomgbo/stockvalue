<?php

/* OroEntityBundle:Form:fields.html.twig */
class __TwigTemplate_f42985d34744baf252f1ef12467759b07c25af4f82dc03004cd4991ce4c097c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_entity_config_type_view_priority_widget' => array($this, 'block__oro_entity_config_type_view_priority_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_596618355b56f8b83e4864818888551d07d739367eaf3e639dcaee0d4e550f91 = $this->env->getExtension("native_profiler");
        $__internal_596618355b56f8b83e4864818888551d07d739367eaf3e639dcaee0d4e550f91->enter($__internal_596618355b56f8b83e4864818888551d07d739367eaf3e639dcaee0d4e550f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('_oro_entity_config_type_view_priority_widget', $context, $blocks);
        
        $__internal_596618355b56f8b83e4864818888551d07d739367eaf3e639dcaee0d4e550f91->leave($__internal_596618355b56f8b83e4864818888551d07d739367eaf3e639dcaee0d4e550f91_prof);

    }

    public function block__oro_entity_config_type_view_priority_widget($context, array $blocks = array())
    {
        $__internal_0840fc133db5aa211c3c2c7dd42e42146843bdf7301a88ed767e92342f2d77f0 = $this->env->getExtension("native_profiler");
        $__internal_0840fc133db5aa211c3c2c7dd42e42146843bdf7301a88ed767e92342f2d77f0->enter($__internal_0840fc133db5aa211c3c2c7dd42e42146843bdf7301a88ed767e92342f2d77f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_oro_entity_config_type_view_priority_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <script type=\"text/javascript\">
        require(['jquery', 'underscore'], function (\$, _) {
            \$(function () {
                var displayable = \$('#";
        // line 7
        echo twig_escape_filter($this->env, strtr((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), array((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) => "is_displayable")), "html", null, true);
        echo "');
                displayable
                    .on('change', _.bind(function () {
                        \$('#";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').attr('disabled', displayable.val() == 0);
                    }))
                    .trigger('change');
            });
        });
    </script>
";
        
        $__internal_0840fc133db5aa211c3c2c7dd42e42146843bdf7301a88ed767e92342f2d77f0->leave($__internal_0840fc133db5aa211c3c2c7dd42e42146843bdf7301a88ed767e92342f2d77f0_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 10,  44 => 7,  35 => 2,  23 => 1,);
    }
}
