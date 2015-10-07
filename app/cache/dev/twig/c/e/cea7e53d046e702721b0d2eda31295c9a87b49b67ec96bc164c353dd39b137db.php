<?php

/* OroSyncBundle::sync_js.html.twig */
class __TwigTemplate_cea7e53d046e702721b0d2eda31295c9a87b49b67ec96bc164c353dd39b137db extends Twig_Template
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
        $__internal_5e91fa4229656610ad311852dc829d71fee4f70c35d9cdf907774ad2c9d7c673 = $this->env->getExtension("native_profiler");
        $__internal_5e91fa4229656610ad311852dc829d71fee4f70c35d9cdf907774ad2c9d7c673->enter($__internal_5e91fa4229656610ad311852dc829d71fee4f70c35d9cdf907774ad2c9d7c673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSyncBundle::sync_js.html.twig"));

        // line 1
        if ($this->env->getExtension('sync_extension')->checkWsConnected()) {
            // line 2
            echo "<script type=\"text/javascript\">
    require(['jquery', 'orosync/js/sync', 'orosync/js/sync/wamp'],
    function(\$, sync, Wamp){
        \$(document).on('click.action.data-api', '[data-action=sync-connect]', function (e) {
            sync.reconnect();
            \$(e.target).closest('.alert').alert('close');
            e.preventDefault();
        });

        sync(new Wamp({
            secure: ";
            // line 12
            echo (((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "X-Forwarded-Proto"), "method") == "https") || $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isSecure", array(), "method"))) ? ("true") : ("false"));
            echo ",
            host: '";
            // line 13
            echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["ws"]) ? $context["ws"] : $this->getContext($context, "ws")), "host", array()) == "*")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "host"), "method")) : ($this->getAttribute((isset($context["ws"]) ? $context["ws"] : $this->getContext($context, "ws")), "host", array()))), "html", null, true);
            echo "',
            port: ";
            // line 14
            echo twig_jsonencode_filter($this->getAttribute((isset($context["ws"]) ? $context["ws"] : $this->getContext($context, "ws")), "port", array()));
            echo ",
            maxRetries: 3,
            retryDelay: 30000
        }));
    });
</script>
";
        }
        
        $__internal_5e91fa4229656610ad311852dc829d71fee4f70c35d9cdf907774ad2c9d7c673->leave($__internal_5e91fa4229656610ad311852dc829d71fee4f70c35d9cdf907774ad2c9d7c673_prof);

    }

    public function getTemplateName()
    {
        return "OroSyncBundle::sync_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  36 => 12,  24 => 2,  22 => 1,);
    }
}
