<?php

/* OroTranslationBundle::requirejs.config.js.twig */
class __TwigTemplate_8b1f91f910ba20b54d6f218049c481e9422311d89c0b1a5b3c2818b4bc85b510 extends Twig_Template
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
        $__internal_41e47171f6fd5ba7e04180a6707490d4ebcc88f36ee659ba6afab0c958800578 = $this->env->getExtension("native_profiler");
        $__internal_41e47171f6fd5ba7e04180a6707490d4ebcc88f36ee659ba6afab0c958800578->enter($__internal_41e47171f6fd5ba7e04180a6707490d4ebcc88f36ee659ba6afab0c958800578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroTranslationBundle::requirejs.config.js.twig"));

        // line 1
        echo "require({
    shim: {
        'oro/translations': {
            deps: ['orotranslation/js/translator', 'translator'],
            init: function(__) {
                return __;
            }
        }
    },
    map: {
        '*': {
            'orotranslation/js/translator': 'oro/translations'
        },
        'oro/translations': {
            'orotranslation/js/translator': 'orotranslation/js/translator'
        }
    },
    paths: {
        'oro/translations': '";
        // line 19
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->env->getExtension('routing')->getUrl("oro_translation_jstranslation"), 0,  -3), "js", null, true);
        echo "'
    },
    config: {
        'orotranslation/js/translator': {
            'debugTranslator': ";
        // line 23
        echo twig_jsonencode_filter(call_user_func_array($this->env->getFunction('oro_translation_debug_translator')->getCallable(), array()));
        echo "
        }
    }
});
";
        
        $__internal_41e47171f6fd5ba7e04180a6707490d4ebcc88f36ee659ba6afab0c958800578->leave($__internal_41e47171f6fd5ba7e04180a6707490d4ebcc88f36ee659ba6afab0c958800578_prof);

    }

    public function getTemplateName()
    {
        return "OroTranslationBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 23,  42 => 19,  22 => 1,);
    }
}
