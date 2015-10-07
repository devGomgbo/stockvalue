<?php

/* OroUIBundle::widget_loader.html.twig */
class __TwigTemplate_6b1d7b098c06de578026a4024f5eebb2baae2f128ba16b6d62e9f912d4cc38fd extends Twig_Template
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
        $__internal_a79d95d3c0c4e89ef4fd5f1636798b61f58dae50562d3ffb225eaae51aa9274d = $this->env->getExtension("native_profiler");
        $__internal_a79d95d3c0c4e89ef4fd5f1636798b61f58dae50562d3ffb225eaae51aa9274d->enter($__internal_a79d95d3c0c4e89ef4fd5f1636798b61f58dae50562d3ffb225eaae51aa9274d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::widget_loader.html.twig"));

        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle::widget_loader.html.twig", 1);
        // line 2
        $context["widgetComponentOptions"] = array("type" =>         // line 3
(isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "options" =>         // line 4
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        // line 6
        echo "<div id=\"";
        echo twig_escape_filter($this->env, (isset($context["elementId"]) ? $context["elementId"] : $this->getContext($context, "elementId")), "html", null, true);
        echo "\" ";
        echo $context["UI"]->getrenderWidgetAttributes((isset($context["widgetComponentOptions"]) ? $context["widgetComponentOptions"] : $this->getContext($context, "widgetComponentOptions")));
        echo " data-layout=\"separate\">
    ";
        // line 7
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "elementFirst", array())) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('actions')->renderUri($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "url", array()), array());
            // line 9
            echo "    ";
        }
        // line 10
        echo "</div>
";
        
        $__internal_a79d95d3c0c4e89ef4fd5f1636798b61f58dae50562d3ffb225eaae51aa9274d->leave($__internal_a79d95d3c0c4e89ef4fd5f1636798b61f58dae50562d3ffb225eaae51aa9274d_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle::widget_loader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 10,  40 => 9,  37 => 8,  35 => 7,  28 => 6,  26 => 4,  25 => 3,  24 => 2,  22 => 1,);
    }
}
