<?php

/* OroNavigationBundle:Menu:breadcrumbs.html.twig */
class __TwigTemplate_38a30bdb8e0f5e231a6212712b7f695b829ac679f9fc0e4a282ebf53e77f0e45 extends Twig_Template
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
        $__internal_ddf5eb679a7c659cce632e4bf0c80cd224739d528e0f0f990f2fe152f600fb1f = $this->env->getExtension("native_profiler");
        $__internal_ddf5eb679a7c659cce632e4bf0c80cd224739d528e0f0f990f2fe152f600fb1f->enter($__internal_ddf5eb679a7c659cce632e4bf0c80cd224739d528e0f0f990f2fe152f600fb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:breadcrumbs.html.twig"));

        // line 1
        echo "<ul class=\"breadcrumb\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 3
            echo "        <li>
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "label", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo "<span class=\"divider\">/</span>";
            }
            // line 5
            echo "        </li>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
        
        $__internal_ddf5eb679a7c659cce632e4bf0c80cd224739d528e0f0f990f2fe152f600fb1f->leave($__internal_ddf5eb679a7c659cce632e4bf0c80cd224739d528e0f0f990f2fe152f600fb1f_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:breadcrumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 7,  50 => 5,  45 => 4,  42 => 3,  25 => 2,  22 => 1,);
    }
}
