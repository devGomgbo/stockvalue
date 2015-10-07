<?php

/* OroRequireJSBundle::scripts.html.twig */
class __TwigTemplate_584f9d255664419fbc7a6388a0f829f43d7603c19e6a44490a524936361569a8 extends Twig_Template
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
        $__internal_d31baa4c0ee67b544504187f93871d1bd1e9bc82d832fab1a98f1b44693ae95c = $this->env->getExtension("native_profiler");
        $__internal_d31baa4c0ee67b544504187f93871d1bd1e9bc82d832fab1a98f1b44693ae95c->enter($__internal_d31baa4c0ee67b544504187f93871d1bd1e9bc82d832fab1a98f1b44693ae95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroRequireJSBundle::scripts.html.twig"));

        // line 1
        $context["compressed"] = ((array_key_exists("compressed", $context)) ? ((isset($context["compressed"]) ? $context["compressed"] : $this->getContext($context, "compressed"))) : (true));
        // line 2
        ob_start();
        // line 3
        echo "    require({
        baseUrl: ";
        // line 4
        echo twig_jsonencode_filter($this->getAttribute(twig_split_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles"), "?", 2), 0, array(), "array"));
        echo "
    });
    ";
        // line 6
        echo twig_escape_filter($this->env, ((array_key_exists("config_extend", $context)) ? (_twig_default_filter((isset($context["config_extend"]) ? $context["config_extend"] : $this->getContext($context, "config_extend")), "")) : ("")), "html", null, true);
        echo "
";
        $context["config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        if (((isset($context["compressed"]) ? $context["compressed"] : $this->getContext($context, "compressed")) && call_user_func_array($this->env->getFunction('requirejs_build_exists')->getCallable(), array()))) {
            // line 9
            echo "    <script type=\"text/javascript\">
        var require = (function(){
            var r=function(c){m(r.c,c)};r.c={};function m(a,b){
                for (var i in b)b[i]!=null&&b[i].toString()==='[object Object]'?m(a[i]||(a[i]={}),b[i]):a[i]=b[i]}
            return r;
        }());
        ";
            // line 15
            echo (isset($context["config_extend"]) ? $context["config_extend"] : $this->getContext($context, "config_extend"));
            echo "
        require = require.c;
    </script>
    <script type=\"text/javascript\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(call_user_func_array($this->env->getFunction('get_requirejs_build_path')->getCallable(), array())), "html", null, true);
            echo "\"></script>
";
        } else {
            // line 20
            echo "    <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ororequirejs/lib/require.js"), "html", null, true);
            echo "\"></script>
    <script type=\"text/javascript\">
        ";
            // line 22
            echo call_user_func_array($this->env->getFunction('get_requirejs_config')->getCallable(), array());
            echo "
    </script>
    <script type=\"text/javascript\">
        ";
            // line 25
            echo (isset($context["config_extend"]) ? $context["config_extend"] : $this->getContext($context, "config_extend"));
            echo "
    </script>
";
        }
        
        $__internal_d31baa4c0ee67b544504187f93871d1bd1e9bc82d832fab1a98f1b44693ae95c->leave($__internal_d31baa4c0ee67b544504187f93871d1bd1e9bc82d832fab1a98f1b44693ae95c_prof);

    }

    public function getTemplateName()
    {
        return "OroRequireJSBundle::scripts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 25,  66 => 22,  60 => 20,  55 => 18,  49 => 15,  41 => 9,  39 => 8,  34 => 6,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
