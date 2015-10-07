<?php

/* OroEntityConfigBundle:Config:propertyLabel.html.twig */
class __TwigTemplate_826e547acc767fbd9a8090080a7ba97a8106a28de5fdd3093bec103e67e6aa6f extends Twig_Template
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
        $__internal_23d20b1ca1a2aeac8e93034af8d638b3958244f938572c01e490c20ef4be1b5d = $this->env->getExtension("native_profiler");
        $__internal_23d20b1ca1a2aeac8e93034af8d638b3958244f938572c01e490c20ef4be1b5d->enter($__internal_23d20b1ca1a2aeac8e93034af8d638b3958244f938572c01e490c20ef4be1b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityConfigBundle:Config:propertyLabel.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "
";
        // line 2
        if ($this->getAttribute((isset($context["record"]) ? $context["record"] : null), "hasValue", array(0 => "entity_icon"), "method", true, true)) {
            // line 3
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["record"]) ? $context["record"] : $this->getContext($context, "record")), "getValue", array(0 => "entity_icon"), "method"), "html", null, true);
            echo " hide-text pull-right\"></i>
";
        }
        // line 5
        echo "
";
        
        $__internal_23d20b1ca1a2aeac8e93034af8d638b3958244f938572c01e490c20ef4be1b5d->leave($__internal_23d20b1ca1a2aeac8e93034af8d638b3958244f938572c01e490c20ef4be1b5d_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:propertyLabel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  28 => 3,  26 => 2,  22 => 1,);
    }
}
