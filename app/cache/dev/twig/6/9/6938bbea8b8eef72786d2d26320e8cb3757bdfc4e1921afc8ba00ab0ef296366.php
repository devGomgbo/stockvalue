<?php

/* OroNavigationBundle:Menu:_dots_tabs.html.twig */
class __TwigTemplate_6938bbea8b8eef72786d2d26320e8cb3757bdfc4e1921afc8ba00ab0ef296366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:_htabs.html.twig", "OroNavigationBundle:Menu:_dots_tabs.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'linkElement' => array($this, 'block_linkElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:_htabs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e748af3bf67fbbef8ba4d58a53837f30d1afe19a71f378fbad40017ac9040f1 = $this->env->getExtension("native_profiler");
        $__internal_5e748af3bf67fbbef8ba4d58a53837f30d1afe19a71f378fbad40017ac9040f1->enter($__internal_5e748af3bf67fbbef8ba4d58a53837f30d1afe19a71f378fbad40017ac9040f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:_dots_tabs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e748af3bf67fbbef8ba4d58a53837f30d1afe19a71f378fbad40017ac9040f1->leave($__internal_5e748af3bf67fbbef8ba4d58a53837f30d1afe19a71f378fbad40017ac9040f1_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_98bf99f1dc578dd984cd8ab707414b122823f0944196ec02a7eaa8b96196c7b4 = $this->env->getExtension("native_profiler");
        $__internal_98bf99f1dc578dd984cd8ab707414b122823f0944196ec02a7eaa8b96196c7b4->enter($__internal_98bf99f1dc578dd984cd8ab707414b122823f0944196ec02a7eaa8b96196c7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
        
        $__internal_98bf99f1dc578dd984cd8ab707414b122823f0944196ec02a7eaa8b96196c7b4->leave($__internal_98bf99f1dc578dd984cd8ab707414b122823f0944196ec02a7eaa8b96196c7b4_prof);

    }

    // line 7
    public function block_item_renderer($context, array $blocks = array())
    {
        $__internal_293bf93753f876b182013c3e4b1b19515e18fecc45fee363edb2c1e961e1913d = $this->env->getExtension("native_profiler");
        $__internal_293bf93753f876b182013c3e4b1b19515e18fecc45fee363edb2c1e961e1913d->enter($__internal_293bf93753f876b182013c3e4b1b19515e18fecc45fee363edb2c1e961e1913d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_renderer"));

        // line 8
        echo "    ";
        $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "showNonAuthorized", array()));
        // line 9
        echo "    ";
        $context["displayable"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : $this->getContext($context, "showNonAuthorized")));
        // line 10
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && (isset($context["displayable"]) ? $context["displayable"] : $this->getContext($context, "displayable")))) {
            // line 11
            echo "        ";
            // line 12
            echo "        ";
            $context["oro_menu"] = $this;
            // line 13
            $context["linkAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
            // line 14
            $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array());
            // line 15
            echo "        ";
            $context["class"] = array(0 => "");
            // line 16
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "activeIfFirstIsEmpty", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "activeIfFirstIsEmpty", array()))) {
                // line 17
                echo "            ";
                $context["class"] = twig_array_merge((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), array(0 => "show-if-empty"));
                // line 18
                echo "        ";
            }
            // line 19
            echo "        <li id=\"";
            echo twig_escape_filter($this->env, trim(twig_lower_filter($this->env, strtr($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
            echo "-tab\" class=\"";
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), " "), "html", null, true);
            echo "\">
            ";
            // line 20
            $this->displayBlock("linkElement", $context, $blocks);
            echo "
        </li>
    ";
        }
        
        $__internal_293bf93753f876b182013c3e4b1b19515e18fecc45fee363edb2c1e961e1913d->leave($__internal_293bf93753f876b182013c3e4b1b19515e18fecc45fee363edb2c1e961e1913d_prof);

    }

    // line 25
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_74397edbdd05777163de77d754a9a6445b24eb6d7e0a97cd90cdda9f805090e9 = $this->env->getExtension("native_profiler");
        $__internal_74397edbdd05777163de77d754a9a6445b24eb6d7e0a97cd90cdda9f805090e9->enter($__internal_74397edbdd05777163de77d754a9a6445b24eb6d7e0a97cd90cdda9f805090e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 26
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs.html.twig", 26);
        // line 27
        echo "    ";
        $context["linkAttributes"] = twig_array_merge((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")), array("data-toggle" => "tab"));
        // line 28
        echo "    ";
        $context["itemLink"] = (("#" . trim(twig_lower_filter($this->env, strtr($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name", array()), array(" " => "_", "#" => "_"))))) . "-content");
        // line 29
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, (isset($context["itemLink"]) ? $context["itemLink"] : $this->getContext($context, "itemLink")), "html", null, true);
        echo "\"";
        echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>
";
        
        $__internal_74397edbdd05777163de77d754a9a6445b24eb6d7e0a97cd90cdda9f805090e9->leave($__internal_74397edbdd05777163de77d754a9a6445b24eb6d7e0a97cd90cdda9f805090e9_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_dots_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 29,  118 => 28,  115 => 27,  112 => 26,  106 => 25,  95 => 20,  88 => 19,  85 => 18,  82 => 17,  79 => 16,  76 => 15,  74 => 14,  72 => 13,  69 => 12,  67 => 11,  64 => 10,  61 => 9,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
