<?php

/* OroUIBundle::buttons.html.twig */
class __TwigTemplate_397694f2e2aa3d128755c7f6bd96c22517e579957342e2ceb9d4cc85de51fee2 extends Twig_Template
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
        $__internal_33858d1f24dbd044b3595f9983fe8297e3dd36458cc9a272d011c248d6ac00b3 = $this->env->getExtension("native_profiler");
        $__internal_33858d1f24dbd044b3595f9983fe8297e3dd36458cc9a272d011c248d6ac00b3->enter($__internal_33858d1f24dbd044b3595f9983fe8297e3dd36458cc9a272d011c248d6ac00b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::buttons.html.twig"));

        // line 1
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle::buttons.html.twig", 1);
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
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
        foreach ($context['_seq'] as $context["groupName"] => $context["group"]) {
            // line 3
            if ((twig_test_empty($context["groupName"]) || (twig_length_filter($this->env, $this->getAttribute($context["group"], "widgets", array())) <= 2))) {
                // line 4
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "widgets", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 5
                    $this->loadTemplate($this->getAttribute($this->getAttribute($context["widget"], "button", array()), "template", array()), "OroUIBundle::buttons.html.twig", 5)->display(array_merge($context, array("data" => (($this->getAttribute($this->getAttribute($context["widget"], "button", array(), "any", false, true), "data", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["widget"], "button", array(), "any", false, true), "data", array()), array())) : (array())))));
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 8
                $context["items"] = array();
                // line 9
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "widgets", array()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                    // line 10
                    $context["items"] = twig_array_merge((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), array(0 => (("<li>" . twig_include($this->env, $context, $this->getAttribute($this->getAttribute($context["widget"], "link", array()), "template", array()), array("data" => (($this->getAttribute($this->getAttribute($context["widget"], "button", array(), "any", false, true), "data", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["widget"], "button", array(), "any", false, true), "data", array()), array())) : (array()))))) . "</li>")));
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo $context["UI"]->getdropdownButton(array("label" => $this->getAttribute(                // line 13
$context["group"], "label", array()), "aCss" => "pull-left", "html" => twig_join_filter(                // line 15
(isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")))));
            }
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
        unset($context['_seq'], $context['_iterated'], $context['groupName'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_33858d1f24dbd044b3595f9983fe8297e3dd36458cc9a272d011c248d6ac00b3->leave($__internal_33858d1f24dbd044b3595f9983fe8297e3dd36458cc9a272d011c248d6ac00b3_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle::buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 15,  109 => 13,  108 => 12,  94 => 10,  77 => 9,  75 => 8,  60 => 5,  43 => 4,  41 => 3,  24 => 2,  22 => 1,);
    }
}
