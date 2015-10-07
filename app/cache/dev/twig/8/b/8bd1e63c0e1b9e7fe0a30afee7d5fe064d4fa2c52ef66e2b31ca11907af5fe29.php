<?php

/* OroNavigationBundle:Menu:application_menu_desktop_top.html.twig */
class __TwigTemplate_8bd1e63c0e1b9e7fe0a30afee7d5fe064d4fa2c52ef66e2b31ca11907af5fe29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", 1);
        $this->blocks = array(
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'children' => array($this, 'block_children'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e042612df4cfa998fcd4538425ce7903ed815d9fa73f7a92a8f8dc2aed4dcda5 = $this->env->getExtension("native_profiler");
        $__internal_e042612df4cfa998fcd4538425ce7903ed815d9fa73f7a92a8f8dc2aed4dcda5->enter($__internal_e042612df4cfa998fcd4538425ce7903ed815d9fa73f7a92a8f8dc2aed4dcda5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e042612df4cfa998fcd4538425ce7903ed815d9fa73f7a92a8f8dc2aed4dcda5->leave($__internal_e042612df4cfa998fcd4538425ce7903ed815d9fa73f7a92a8f8dc2aed4dcda5_prof);

    }

    // line 3
    public function block_list_wrapper($context, array $blocks = array())
    {
        $__internal_ffea776c64108457aa35606c83e862711ac74d7bea4b228a18d960c19b750249 = $this->env->getExtension("native_profiler");
        $__internal_ffea776c64108457aa35606c83e862711ac74d7bea4b228a18d960c19b750249->enter($__internal_ffea776c64108457aa35606c83e862711ac74d7bea4b228a18d960c19b750249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_wrapper"));

        // line 4
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
        
        $__internal_ffea776c64108457aa35606c83e862711ac74d7bea4b228a18d960c19b750249->leave($__internal_ffea776c64108457aa35606c83e862711ac74d7bea4b228a18d960c19b750249_prof);

    }

    // line 7
    public function block_item($context, array $blocks = array())
    {
        $__internal_3252551b329e2570f59c8afbc9a3151b6c03ef7cc3fcd379c98a7139f581e046 = $this->env->getExtension("native_profiler");
        $__internal_3252551b329e2570f59c8afbc9a3151b6c03ef7cc3fcd379c98a7139f581e046->enter($__internal_3252551b329e2570f59c8afbc9a3151b6c03ef7cc3fcd379c98a7139f581e046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 8
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 9
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "dropdown"));
            // line 10
            $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            // line 11
            echo "    ";
        } else {
            // line 12
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => "single"));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "routes", array(), "any", true, true)) && $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "routes", array(), "any", false, true), 0, array(), "array", true, true))) {
            // line 15
            echo "        ";
            $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) ? $context["itemAttributes"] : $this->getContext($context, "itemAttributes")), array("data-route" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "routes", array()), 0, array(), "array")));
            // line 16
            echo "        ";
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "routes", array())) > 1)) {
                // line 17
                echo "            ";
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) ? $context["itemAttributes"] : $this->getContext($context, "itemAttributes")), array("data-routes" => twig_jsonencode_filter(twig_slice($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "routes", array()), 1))));
                // line 18
                echo "        ";
            }
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
        
        $__internal_3252551b329e2570f59c8afbc9a3151b6c03ef7cc3fcd379c98a7139f581e046->leave($__internal_3252551b329e2570f59c8afbc9a3151b6c03ef7cc3fcd379c98a7139f581e046_prof);

    }

    // line 23
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_be227bb6c6ed5f4e8de983e75249bf7b892aeffbd6bbfde05c560d6f473ae963 = $this->env->getExtension("native_profiler");
        $__internal_be227bb6c6ed5f4e8de983e75249bf7b892aeffbd6bbfde05c560d6f473ae963->enter($__internal_be227bb6c6ed5f4e8de983e75249bf7b892aeffbd6bbfde05c560d6f473ae963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 24
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig", 24);
        // line 25
        echo "
    ";
        // line 26
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array())) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) === 0))) {
            // line 27
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("class" =>             // line 28
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), "class", array(0 => "dropdown-toggle")), "data-toggle" => "dropdown"));
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        if ((twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) || ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()) == "#"))) {
            // line 34
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("class" =>             // line 35
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), "class", array(0 => "unclickable"))));
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")));
        echo "><span class=\"title\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span></a>
";
        
        $__internal_be227bb6c6ed5f4e8de983e75249bf7b892aeffbd6bbfde05c560d6f473ae963->leave($__internal_be227bb6c6ed5f4e8de983e75249bf7b892aeffbd6bbfde05c560d6f473ae963_prof);

    }

    // line 42
    public function block_children($context, array $blocks = array())
    {
        $__internal_c0f85ccab10f1d624729e11640bc99621eb6187f9049cf55a75eb8bb84af0d71 = $this->env->getExtension("native_profiler");
        $__internal_c0f85ccab10f1d624729e11640bc99621eb6187f9049cf55a75eb8bb84af0d71->enter($__internal_c0f85ccab10f1d624729e11640bc99621eb6187f9049cf55a75eb8bb84af0d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 43
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()) === 1)) {
            // line 44
            $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array());
            // line 45
            echo "        <li class=\"dropdown-menu-title\">";
            $this->displayBlock("spanElement", $context, $blocks);
            echo "</li>
        <li class=\"divider\"><span></span></li>
    ";
        }
        // line 48
        echo "    ";
        $this->displayParentBlock("children", $context, $blocks);
        echo "
";
        
        $__internal_c0f85ccab10f1d624729e11640bc99621eb6187f9049cf55a75eb8bb84af0d71->leave($__internal_c0f85ccab10f1d624729e11640bc99621eb6187f9049cf55a75eb8bb84af0d71_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:application_menu_desktop_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 48,  162 => 45,  160 => 44,  157 => 43,  151 => 42,  138 => 39,  135 => 38,  132 => 37,  130 => 35,  128 => 34,  126 => 33,  123 => 32,  120 => 31,  118 => 28,  116 => 27,  114 => 26,  111 => 25,  108 => 24,  102 => 23,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  69 => 12,  66 => 11,  64 => 10,  62 => 9,  59 => 8,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
