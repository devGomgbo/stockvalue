<?php

/* OroWindowsBundle::states.html.twig */
class __TwigTemplate_97ec7547f74d53823750f3de54b54e472ef60a359dc87ec83d5bf2c2e83280ab extends Twig_Template
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
        $__internal_034d9dcca4e1a33ffe07e6242006f22d09f3b679963690bbf81341da08e2a097 = $this->env->getExtension("native_profiler");
        $__internal_034d9dcca4e1a33ffe07e6242006f22d09f3b679963690bbf81341da08e2a097->enter($__internal_034d9dcca4e1a33ffe07e6242006f22d09f3b679963690bbf81341da08e2a097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroWindowsBundle::states.html.twig"));

        // line 1
        if (twig_length_filter($this->env, (isset($context["windowStates"]) ? $context["windowStates"] : $this->getContext($context, "windowStates")))) {
            // line 2
            echo "    <div style=\"display: none\" id=\"widget-states-container\" data-layout=\"separate\">
        ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["windowStates"]) ? $context["windowStates"] : $this->getContext($context, "windowStates")));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                // line 4
                echo "            <div id=\"widget-restored-state-";
                echo twig_escape_filter($this->env, (($this->getAttribute($context["windowState"], "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["windowState"], "id", array()), "none")) : ("none")), "html", null, true);
                echo "\">
                ";
                // line 5
                echo $this->env->getExtension('oro_windows')->renderFragment($this->env, $context["windowState"]);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>

    <script type=\"text/javascript\">
        require(['jquery', 'oro/dialog-widget', 'orowindows/js/dialog/state/model', 'ready!app'],
        function(\$, DialogWidget, StateModel) {
            \$(function(){
                ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["windowStates"]) ? $context["windowStates"] : $this->getContext($context, "windowStates")));
            foreach ($context['_seq'] as $context["_key"] => $context["windowState"]) {
                if ($this->getAttribute($context["windowState"], "renderedSuccessfully", array())) {
                    // line 15
                    echo "                new DialogWidget({
                    autoRender: true,
                    model: new StateModel(";
                    // line 17
                    echo twig_jsonencode_filter(array("data" => $this->getAttribute($context["windowState"], "data", array()), "id" => $this->getAttribute($context["windowState"], "id", array())));
                    echo ")
                });
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['windowState'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            });
        });
    </script>
";
        }
        
        $__internal_034d9dcca4e1a33ffe07e6242006f22d09f3b679963690bbf81341da08e2a097->leave($__internal_034d9dcca4e1a33ffe07e6242006f22d09f3b679963690bbf81341da08e2a097_prof);

    }

    public function getTemplateName()
    {
        return "OroWindowsBundle::states.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  62 => 17,  58 => 15,  53 => 14,  45 => 8,  36 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
