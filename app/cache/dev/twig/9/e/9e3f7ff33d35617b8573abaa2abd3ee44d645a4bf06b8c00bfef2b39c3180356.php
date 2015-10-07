<?php

/* OroNavigationBundle:Menu:favorites.html.twig */
class __TwigTemplate_9e3f7ff33d35617b8573abaa2abd3ee44d645a4bf06b8c00bfef2b39c3180356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:favorites.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ceeb088a7a673d4a59bf2b5a8851e02aa7354479261917a28082f11e9adff611 = $this->env->getExtension("native_profiler");
        $__internal_ceeb088a7a673d4a59bf2b5a8851e02aa7354479261917a28082f11e9adff611->enter($__internal_ceeb088a7a673d4a59bf2b5a8851e02aa7354479261917a28082f11e9adff611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:favorites.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ceeb088a7a673d4a59bf2b5a8851e02aa7354479261917a28082f11e9adff611->leave($__internal_ceeb088a7a673d4a59bf2b5a8851e02aa7354479261917a28082f11e9adff611_prof);

    }

    // line 13
    public function block_list($context, array $blocks = array())
    {
        $__internal_c79032162fb1f2bbd8003d38b3fdf75ab70df8e0592d453d79fdb0cb644d09ac = $this->env->getExtension("native_profiler");
        $__internal_c79032162fb1f2bbd8003d38b3fdf75ab70df8e0592d453d79fdb0cb644d09ac->enter($__internal_c79032162fb1f2bbd8003d38b3fdf75ab70df8e0592d453d79fdb0cb644d09ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 14
        echo "    ";
        $context["favorites"] = array();
        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["favoritesItem"]) {
                // line 17
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "isAllowed", array())) {
                    // line 18
                    echo "                ";
                    $context["favorites"] = twig_array_merge((isset($context["favorites"]) ? $context["favorites"] : $this->getContext($context, "favorites")), array(0 => array("id" => $this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "id", array()), "title" => $this->getAttribute($context["favoritesItem"], "label", array()), "title_rendered" => $this->env->getExtension('oro_title')->render($this->getAttribute($context["favoritesItem"], "label", array())), "url" => $this->getAttribute($context["favoritesItem"], "uri", array()), "type" => $this->getAttribute($this->getAttribute($context["favoritesItem"], "extras", array()), "type", array()))));
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favoritesItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $context["navigation"] = $this;
        // line 23
        echo "    ";
        $context["frontendOptions"] = array(0 => "el", 1 => "tabTitle", 2 => "tabIcon");
        // line 24
        echo "    <div data-data=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["favorites"]) ? $context["favorites"] : $this->getContext($context, "favorites"))), "html", null, true);
        echo "\" data-options=\"";
        echo $context["navigation"]->getget_options((isset($context["frontendOptions"]) ? $context["frontendOptions"] : $this->getContext($context, "frontendOptions")), (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "\"></div>
    <ul class=\"extra-list\"></ul>
    <div class=\"dot-menu-empty-message\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.messages.no_items"), "html", null, true);
        echo "</div>
";
        
        $__internal_c79032162fb1f2bbd8003d38b3fdf75ab70df8e0592d453d79fdb0cb644d09ac->leave($__internal_c79032162fb1f2bbd8003d38b3fdf75ab70df8e0592d453d79fdb0cb644d09ac_prof);

    }

    // line 3
    public function getget_options($__attributes__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_01590bbee980a22a2bf22b78e15969868bbebe7a674537143ac2e7c2544f591f = $this->env->getExtension("native_profiler");
            $__internal_01590bbee980a22a2bf22b78e15969868bbebe7a674537143ac2e7c2544f591f->enter($__internal_01590bbee980a22a2bf22b78e15969868bbebe7a674537143ac2e7c2544f591f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "get_options"));

            // line 4
            $context["options"] = array();
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 6
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), $context["attribute"], array(), "array", true, true)) {
                    // line 7
                    $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array($context["attribute"] => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $context["attribute"], array(), "array")));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
            
            $__internal_01590bbee980a22a2bf22b78e15969868bbebe7a674537143ac2e7c2544f591f->leave($__internal_01590bbee980a22a2bf22b78e15969868bbebe7a674537143ac2e7c2544f591f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:favorites.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 10,  116 => 7,  114 => 6,  110 => 5,  108 => 4,  92 => 3,  83 => 26,  75 => 24,  72 => 23,  69 => 22,  66 => 21,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 1,);
    }
}
