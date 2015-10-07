<?php

/* OroNavigationBundle:Menu:_htabs.html.twig */
class __TwigTemplate_b1a72e65709c74cb8a573a844400b09977ca9f79fe8ba5d2a43ee7a6e68167d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db6e0aa48d1213cef86a542079bef09470376094a97c3c024d67404346de6ba4 = $this->env->getExtension("native_profiler");
        $__internal_db6e0aa48d1213cef86a542079bef09470376094a97c3c024d67404346de6ba4->enter($__internal_db6e0aa48d1213cef86a542079bef09470376094a97c3c024d67404346de6ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:_htabs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db6e0aa48d1213cef86a542079bef09470376094a97c3c024d67404346de6ba4->leave($__internal_db6e0aa48d1213cef86a542079bef09470376094a97c3c024d67404346de6ba4_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_ea0041e5044ed159340d76722bba2f3fc56a00c418ad5bbfcb311a7380cfb98c = $this->env->getExtension("native_profiler");
        $__internal_ea0041e5044ed159340d76722bba2f3fc56a00c418ad5bbfcb311a7380cfb98c->enter($__internal_ea0041e5044ed159340d76722bba2f3fc56a00c418ad5bbfcb311a7380cfb98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 5
            echo "        ";
            $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 5);
            // line 6
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" =>             // line 7
$context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), "class", array(0 => "nav", 1 => "nav-tabs"))));
            // line 9
            echo "        <ul";
            echo $context["oro_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 10
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        
        $__internal_ea0041e5044ed159340d76722bba2f3fc56a00c418ad5bbfcb311a7380cfb98c->leave($__internal_ea0041e5044ed159340d76722bba2f3fc56a00c418ad5bbfcb311a7380cfb98c_prof);

    }

    // line 15
    public function block_item($context, array $blocks = array())
    {
        $__internal_44484ebd52b1a5c8d714914e2dbc531173e7a5a9e1574dec1120028520fe6192 = $this->env->getExtension("native_profiler");
        $__internal_44484ebd52b1a5c8d714914e2dbc531173e7a5a9e1574dec1120028520fe6192->enter($__internal_44484ebd52b1a5c8d714914e2dbc531173e7a5a9e1574dec1120028520fe6192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 16
        echo "    ";
        if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => 2), "method")) {
            // line 17
            $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            // line 18
            echo "    ";
        }
        // line 19
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
        
        $__internal_44484ebd52b1a5c8d714914e2dbc531173e7a5a9e1574dec1120028520fe6192->leave($__internal_44484ebd52b1a5c8d714914e2dbc531173e7a5a9e1574dec1120028520fe6192_prof);

    }

    // line 22
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_909b56d80666d17d34c1aabd55db232731042a6b37ae2bcdd1e83883e6c87e6a = $this->env->getExtension("native_profiler");
        $__internal_909b56d80666d17d34c1aabd55db232731042a6b37ae2bcdd1e83883e6c87e6a->enter($__internal_909b56d80666d17d34c1aabd55db232731042a6b37ae2bcdd1e83883e6c87e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 23
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_htabs.html.twig", 23);
        // line 24
        echo "    ";
        $context["itemLink"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array());
        // line 25
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 26
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("data-toggle" => "tab"));
            // line 27
            echo "        ";
            $context["itemLink"] = ("#" . trim(twig_lower_filter($this->env, strtr($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array()), array(" " => "_", "#" => "_")))));
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "        ";
            $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("class" =>             // line 30
$context["oro_menu"]->getadd_attribute_values((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), "class", array(0 => "empty"))));
            // line 32
            echo "    ";
        }
        // line 33
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["itemLink"]) ? $context["itemLink"] : $this->getContext($context, "itemLink")), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
        
        $__internal_909b56d80666d17d34c1aabd55db232731042a6b37ae2bcdd1e83883e6c87e6a->leave($__internal_909b56d80666d17d34c1aabd55db232731042a6b37ae2bcdd1e83883e6c87e6a_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_htabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 33,  120 => 32,  118 => 30,  116 => 29,  113 => 28,  110 => 27,  107 => 26,  104 => 25,  101 => 24,  98 => 23,  92 => 22,  82 => 19,  79 => 18,  77 => 17,  74 => 16,  68 => 15,  57 => 10,  52 => 9,  50 => 7,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
