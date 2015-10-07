<?php

/* OroPlatformBundle::have_request.html.twig */
class __TwigTemplate_d4eecb88870c2e6a93d41f18fecbef5fdb53477d83dc066d8101cb9e29b2dfcc extends Twig_Template
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
        $__internal_2d766eebc65cd1409820344850414cb0b376e9f7fd34a9c25bf3053dd73d161c = $this->env->getExtension("native_profiler");
        $__internal_2d766eebc65cd1409820344850414cb0b376e9f7fd34a9c25bf3053dd73d161c->enter($__internal_2d766eebc65cd1409820344850414cb0b376e9f7fd34a9c25bf3053dd73d161c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroPlatformBundle::have_request.html.twig"));

        // line 1
        echo "<script>
    require(['jquery'], function (\$) {
        \$(function () {
            var options = {
                dataType: 'script',
                cache:     true,
                url:       ";
        // line 7
        echo twig_jsonencode_filter(($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "scheme", array()) . "://crm.orocrm.com/bundles/orocrmrequest/js/embed.form.js"));
        echo ",
                timeout:   2000
            };

            \$.ajax(options).done(function() {
                var options = {
                    version: ";
        // line 13
        echo twig_jsonencode_filter($this->env->getExtension('oro_platform')->getVersion());
        echo "
                };
                new ORO.EmbedRequestForm(options);
            }).error(function() {
                if (typeof(console) != 'undefined' && console.hasOwnProperty('error')) {
                    console.error('Unable to load external script.');
                }
            });
        });
    });
</script>
";
        
        $__internal_2d766eebc65cd1409820344850414cb0b376e9f7fd34a9c25bf3053dd73d161c->leave($__internal_2d766eebc65cd1409820344850414cb0b376e9f7fd34a9c25bf3053dd73d161c_prof);

    }

    public function getTemplateName()
    {
        return "OroPlatformBundle::have_request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  30 => 7,  22 => 1,);
    }
}
