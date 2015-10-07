<?php

/* OroTranslationBundle:Form:fields.html.twig */
class __TwigTemplate_7185b3c1349e03a41b881d083cfb5a85ac31de73ca8dfb95d87cbeaae4b5f997 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_translation_available_translations_widget' => array($this, 'block_oro_translation_available_translations_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_661c8797f44366b41b27af03f94925f15178494d753bf557f34e8fbe26b54d00 = $this->env->getExtension("native_profiler");
        $__internal_661c8797f44366b41b27af03f94925f15178494d753bf557f34e8fbe26b54d00->enter($__internal_661c8797f44366b41b27af03f94925f15178494d753bf557f34e8fbe26b54d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTranslationBundle:Form:fields.html.twig"));

        // line 4
        $this->displayBlock('oro_translation_available_translations_widget', $context, $blocks);
        
        $__internal_661c8797f44366b41b27af03f94925f15178494d753bf557f34e8fbe26b54d00->leave($__internal_661c8797f44366b41b27af03f94925f15178494d753bf557f34e8fbe26b54d00_prof);

    }

    public function block_oro_translation_available_translations_widget($context, array $blocks = array())
    {
        $__internal_95a69403b2c033026d81039f647cd292f2c454104ea760fd704cec31b3c2dfbd = $this->env->getExtension("native_profiler");
        $__internal_95a69403b2c033026d81039f647cd292f2c454104ea760fd704cec31b3c2dfbd->enter($__internal_95a69403b2c033026d81039f647cd292f2c454104ea760fd704cec31b3c2dfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_translation_available_translations_widget"));

        // line 5
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div class=\"available-translation-widget-container\">
        ";
        // line 7
        echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "block", "url" => $this->env->getExtension('routing')->getPath("oro_translation_available_translations"), "alias" => "oro_translation_available_translations"));
        // line 11
        echo "
    </div>
    <p class=\"available-translation-widget-note\">
        <sup>1&nbsp;</sup>";
        // line 14
        echo $this->env->getExtension('translator')->getTranslator()->trans("Translation coverage indicator relates to translation package volume. Some bundles may still not be translated.", array(), "messages");
        // line 15
        echo "    </p>
    <script type=\"text/javascript\">
        require(['jquery', 'orotranslation/js/translation/config-action', 'oroui/js/widget-manager'],
        function (\$, ActionPerformer, widgetManager) {
            \$('.available-translation-widget-container')
                .parents('.controls.control-subgroup')
                .removeClass('controls')
                .removeClass('control-subgroup')
                .end()
                .parents('.control-group')
                .addClass('available-translation-widget-control-group')
            ;

            widgetManager.getWidgetInstanceByAlias('oro_translation_available_translations', function (widget) {
                new ActionPerformer({el: ";
        // line 29
        echo twig_jsonencode_filter(("#" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        echo "});
            });
        });
    </script>
";
        
        $__internal_95a69403b2c033026d81039f647cd292f2c454104ea760fd704cec31b3c2dfbd->leave($__internal_95a69403b2c033026d81039f647cd292f2c454104ea760fd704cec31b3c2dfbd_prof);

    }

    public function getTemplateName()
    {
        return "OroTranslationBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 29,  50 => 15,  48 => 14,  43 => 11,  41 => 7,  35 => 5,  23 => 4,);
    }
}
