<?php

/* OroNavigationBundle:Menu:pinbar.html.twig */
class __TwigTemplate_099efaae1fd7a49503cfb5ca2cac1a4dc71e514935e9fec37648be8a7733e69c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:pinbar.html.twig", 1);
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
        $__internal_a2b84502fc8a5cf0565b3d803f74a0da8b1758090117c4125cd057692eec4a7a = $this->env->getExtension("native_profiler");
        $__internal_a2b84502fc8a5cf0565b3d803f74a0da8b1758090117c4125cd057692eec4a7a->enter($__internal_a2b84502fc8a5cf0565b3d803f74a0da8b1758090117c4125cd057692eec4a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:pinbar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b84502fc8a5cf0565b3d803f74a0da8b1758090117c4125cd057692eec4a7a->leave($__internal_a2b84502fc8a5cf0565b3d803f74a0da8b1758090117c4125cd057692eec4a7a_prof);

    }

    // line 13
    public function block_list($context, array $blocks = array())
    {
        $__internal_264ac07a3688580621f404783d973fb6934dc857939c848cbd7d58bca1d06688 = $this->env->getExtension("native_profiler");
        $__internal_264ac07a3688580621f404783d973fb6934dc857939c848cbd7d58bca1d06688->enter($__internal_264ac07a3688580621f404783d973fb6934dc857939c848cbd7d58bca1d06688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 14
        echo "    ";
        $context["pinbarItems"] = array();
        // line 15
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 16
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["pinbarItem"]) {
                // line 17
                echo "            ";
                if ($this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "isAllowed", array())) {
                    // line 18
                    echo "                ";
                    $context["pinbarItems"] = twig_array_merge((isset($context["pinbarItems"]) ? $context["pinbarItems"] : $this->getContext($context, "pinbarItems")), array(0 => array("id" => $this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "id", array()), "title" => $this->getAttribute($context["pinbarItem"], "label", array()), "title_rendered" => $this->env->getExtension('oro_title')->render($this->getAttribute($context["pinbarItem"], "label", array())), "title_rendered_short" => $this->env->getExtension('oro_title')->renderShort($this->getAttribute($context["pinbarItem"], "label", array())), "url" => $this->getAttribute($context["pinbarItem"], "uri", array()), "type" => $this->getAttribute($this->getAttribute($context["pinbarItem"], "extras", array()), "type", array()))));
                    // line 19
                    echo "            ";
                }
                // line 20
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pinbarItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    ";
        }
        // line 22
        echo "    ";
        $context["pinbar"] = $this;
        // line 23
        echo "    ";
        $context["frontendOptions"] = array(0 => "maxPinbarItems", 1 => "el", 2 => "listBar", 3 => "tabTitle", 4 => "tabIcon", 5 => "minimizeButton", 6 => "closeButton", 7 => "defaultUrl");
        // line 24
        echo "    <div class=\"hide\" data-data=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["pinbarItems"]) ? $context["pinbarItems"] : $this->getContext($context, "pinbarItems"))), "html", null, true);
        echo "\" data-options=\"";
        echo $context["pinbar"]->getget_options((isset($context["frontendOptions"]) ? $context["frontendOptions"] : $this->getContext($context, "frontendOptions")), (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "\"></div>
";
        
        $__internal_264ac07a3688580621f404783d973fb6934dc857939c848cbd7d58bca1d06688->leave($__internal_264ac07a3688580621f404783d973fb6934dc857939c848cbd7d58bca1d06688_prof);

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
            $__internal_02838362720170a6a8492a996b5ebdb7d1dec07e4f90ab04bdd1acfeb336e561 = $this->env->getExtension("native_profiler");
            $__internal_02838362720170a6a8492a996b5ebdb7d1dec07e4f90ab04bdd1acfeb336e561->enter($__internal_02838362720170a6a8492a996b5ebdb7d1dec07e4f90ab04bdd1acfeb336e561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "get_options"));

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
            
            $__internal_02838362720170a6a8492a996b5ebdb7d1dec07e4f90ab04bdd1acfeb336e561->leave($__internal_02838362720170a6a8492a996b5ebdb7d1dec07e4f90ab04bdd1acfeb336e561_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:pinbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 10,  111 => 7,  109 => 6,  105 => 5,  103 => 4,  87 => 3,  75 => 24,  72 => 23,  69 => 22,  66 => 21,  60 => 20,  57 => 19,  54 => 18,  51 => 17,  46 => 16,  43 => 15,  40 => 14,  34 => 13,  11 => 1,);
    }
}
