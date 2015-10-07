<?php

/* OroNavigationBundle:Menu:shortcuts.html.twig */
class __TwigTemplate_f0444a82a94ac5fc66a7b5536143cc23026e4b350d823b984ec79dc6589d97d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:shortcuts.html.twig", 1);
        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3834ae3b75c95e09914a7500e09908a161769556e92fc8baf29f99cca43264de = $this->env->getExtension("native_profiler");
        $__internal_3834ae3b75c95e09914a7500e09908a161769556e92fc8baf29f99cca43264de->enter($__internal_3834ae3b75c95e09914a7500e09908a161769556e92fc8baf29f99cca43264de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:shortcuts.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3834ae3b75c95e09914a7500e09908a161769556e92fc8baf29f99cca43264de->leave($__internal_3834ae3b75c95e09914a7500e09908a161769556e92fc8baf29f99cca43264de_prof);

    }

    // line 3
    public function block_list($context, array $blocks = array())
    {
        $__internal_e8429978a223e13a03c72e0ed801b0d0099887b8b05a32ab05d1227d8eb879d6 = $this->env->getExtension("native_profiler");
        $__internal_e8429978a223e13a03c72e0ed801b0d0099887b8b05a32ab05d1227d8eb879d6->enter($__internal_e8429978a223e13a03c72e0ed801b0d0099887b8b05a32ab05d1227d8eb879d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 4
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 5
            echo "            <div class=\"dropdown header-dropdown-shortcut header-utility-dropdown\">
                <a href=\"javascript:void(0);\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" title=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.shortcuts.title"), "html", null, true);
            echo "\"><i class=\"icon-share-sign\"></i></a>
                <ul class=\"dropdown-menu\">
                    <li class=\"nav-header nav-header-title\">";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.shortcuts.title"), "html", null, true);
            echo "</li>
                    <li class=\"dark\">
                        <form>
                            <input type=\"text\"
                                   placeholder=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.shortcuts.placeholder"), "html", null, true);
            echo "\"
                                   data-source-url=";
            // line 13
            echo twig_jsonencode_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "source", array()));
            echo " class=\"input\"
                                   data-entity-class=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('oro_entity')->getClassName($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), true), "html", null, true);
            echo "\"
                                   data-entity-id=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "html", null, true);
            echo "\"
                            >
                            <div class=\"clearfix\">
                                <div class=\"extra-small\">";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.shortcuts.example"), "html", null, true);
            echo "
                                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "details", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.shortcuts.see_all"), "html", null, true);
            echo "</a>
                                </div>
                            </div>
                        </form>
                    </li>
                    <div class=\"nav-header\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.shortcuts.most_used"), "html", null, true);
            echo "</div>
                    ";
            // line 25
            $this->displayBlock("children", $context, $blocks);
            echo "
                </ul>
            </div>
    ";
        }
        
        $__internal_e8429978a223e13a03c72e0ed801b0d0099887b8b05a32ab05d1227d8eb879d6->leave($__internal_e8429978a223e13a03c72e0ed801b0d0099887b8b05a32ab05d1227d8eb879d6_prof);

    }

    // line 31
    public function block_item($context, array $blocks = array())
    {
        $__internal_020e13f1e412d7463ad19a145d6252e5541b992af14fdeaf6c233c4fdbfde652 = $this->env->getExtension("native_profiler");
        $__internal_020e13f1e412d7463ad19a145d6252e5541b992af14fdeaf6c233c4fdbfde652->enter($__internal_020e13f1e412d7463ad19a145d6252e5541b992af14fdeaf6c233c4fdbfde652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 32
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "isCustomAction", array(), "any", true, true)) {
            // line 33
            echo "        ";
            $this->displayBlock("item_renderer", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_020e13f1e412d7463ad19a145d6252e5541b992af14fdeaf6c233c4fdbfde652->leave($__internal_020e13f1e412d7463ad19a145d6252e5541b992af14fdeaf6c233c4fdbfde652_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:shortcuts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  113 => 32,  107 => 31,  95 => 25,  91 => 24,  81 => 19,  77 => 18,  71 => 15,  67 => 14,  63 => 13,  59 => 12,  52 => 8,  47 => 6,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
