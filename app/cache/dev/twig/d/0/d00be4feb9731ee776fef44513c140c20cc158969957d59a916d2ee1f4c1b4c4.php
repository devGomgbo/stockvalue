<?php

/* OroNavigationBundle:Js:requirejs.config.js.twig */
class __TwigTemplate_d00be4feb9731ee776fef44513c140c20cc158969957d59a916d2ee1f4c1b4c4 extends Twig_Template
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
        $__internal_cfb8d0a9987c4e096c9f8ddda9959e99973761780269e6adfd51e6d6788de96f = $this->env->getExtension("native_profiler");
        $__internal_cfb8d0a9987c4e096c9f8ddda9959e99973761780269e6adfd51e6d6788de96f->enter($__internal_cfb8d0a9987c4e096c9f8ddda9959e99973761780269e6adfd51e6d6788de96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Js:requirejs.config.js.twig"));

        // line 1
        echo "require({
    shim: {
        'oro/routes': {
            deps: ['routing'],
            init: function(routing) {
                ";
        // line 6
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 7
            echo "                    ";
            // line 8
            echo "                    ";
            $context["data"] = array("base_url" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "baseUrl", array()), "scheme" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()), "host" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "host", array()));
            // line 9
            echo "                    var data = ";
            echo twig_jsonencode_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            echo ";
                    data.routes = routing.getRoutes();
                    fos.Router.setData(data);
                ";
        }
        // line 13
        echo "                return routing;
            }
        }
    },
    map: {
        '*': {
            'routing': 'oro/routes'
        },
        'oro/routes': {
            'routing': 'routing'
        }
    },
    paths: {
    ";
        // line 26
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 27
            echo "        'oro/routes': '";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData")), "js", null, true);
            echo "'
    ";
        } else {
            // line 29
            echo "        'oro/routes': '../js/routes'
    ";
        }
        // line 31
        echo "    }
});
";
        
        $__internal_cfb8d0a9987c4e096c9f8ddda9959e99973761780269e6adfd51e6d6788de96f->leave($__internal_cfb8d0a9987c4e096c9f8ddda9959e99973761780269e6adfd51e6d6788de96f_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Js:requirejs.config.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 31,  67 => 29,  61 => 27,  59 => 26,  44 => 13,  36 => 9,  33 => 8,  31 => 7,  29 => 6,  22 => 1,);
    }
}
