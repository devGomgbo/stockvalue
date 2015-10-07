<?php

/* OroUIBundle::requirejs.config.js.twig */
class __TwigTemplate_7ab6ed823e05cb812224b5af0f9845a11440ddc304ddc299a040d47e5d481aab extends Twig_Template
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
        $__internal_e858cd00c8da8a73eb6ab0b9cff15609c7bba8b043f9ca2ac5300c18c2b88fd5 = $this->env->getExtension("native_profiler");
        $__internal_e858cd00c8da8a73eb6ab0b9cff15609c7bba8b043f9ca2ac5300c18c2b88fd5->enter($__internal_e858cd00c8da8a73eb6ab0b9cff15609c7bba8b043f9ca2ac5300c18c2b88fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::requirejs.config.js.twig"));

        // line 1
        $context["userName"] = null;
        // line 2
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            $context["userName"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array());
        }
        // line 5
        if ((isset($context["assets_version"]) ? $context["assets_version"] : $this->getContext($context, "assets_version"))) {
            // line 6
            echo "require({
    urlArgs: 'version=";
            // line 7
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, (isset($context["assets_version"]) ? $context["assets_version"] : $this->getContext($context, "assets_version")), "url"), "js", null, true);
            echo "'
});";
        }
        // line 10
        echo "require({
    config: {
        'oroui/js/app': {
            baseUrl: ";
        // line 13
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"));
        echo ",
            headerId: ";
        // line 14
        echo twig_jsonencode_filter($this->env->getExtension('oro_hash_nav')->getHashNavigationHeaderConst());
        echo ",
            userName: ";
        // line 15
        echo twig_jsonencode_filter((isset($context["userName"]) ? $context["userName"] : $this->getContext($context, "userName")));
        echo ",
            root: ";
        // line 16
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getBaseURL", array(), "method"));
        echo " + '\\/',
            startRouteName: ";
        // line 17
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_master_request_route"), "method"));
        echo ",
            debug: Boolean(";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array()), "js", null, true);
        echo "),
            skipRouting: '[data-nohash=true], .no-hash',
            controllerPath: 'controllers/',
            controllerSuffix: '-controller',
            // preserves url path as it is (does not add/remove trailing slash)
            trailing: null
        }
    }
});
";
        
        $__internal_e858cd00c8da8a73eb6ab0b9cff15609c7bba8b043f9ca2ac5300c18c2b88fd5->leave($__internal_e858cd00c8da8a73eb6ab0b9cff15609c7bba8b043f9ca2ac5300c18c2b88fd5_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle::requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  60 => 17,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  39 => 10,  34 => 7,  31 => 6,  29 => 5,  26 => 3,  24 => 2,  22 => 1,);
    }
}
