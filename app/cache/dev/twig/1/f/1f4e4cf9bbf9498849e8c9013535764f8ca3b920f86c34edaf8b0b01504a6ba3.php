<?php

/* OroNavigationBundle:Menu:menu.html.twig */
class __TwigTemplate_1f4e4cf9bbf9498849e8c9013535764f8ca3b920f86c34edaf8b0b01504a6ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'list' => array($this, 'block_list'),
            'children' => array($this, 'block_children'),
            'item' => array($this, 'block_item'),
            'item_renderer' => array($this, 'block_item_renderer'),
            'item_content' => array($this, 'block_item_content'),
            'list_wrapper' => array($this, 'block_list_wrapper'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ebd0311ebdacf3fc7444847a26f7696f02799d3dbc7d68ef82d24cb082bed990 = $this->env->getExtension("native_profiler");
        $__internal_ebd0311ebdacf3fc7444847a26f7696f02799d3dbc7d68ef82d24cb082bed990->enter($__internal_ebd0311ebdacf3fc7444847a26f7696f02799d3dbc7d68ef82d24cb082bed990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:menu.html.twig"));

        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 2);
        // line 3
        $context["Navigation"] = $this->loadTemplate("OroNavigationBundle::macros.html.twig", "OroNavigationBundle:Menu:menu.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd0311ebdacf3fc7444847a26f7696f02799d3dbc7d68ef82d24cb082bed990->leave($__internal_ebd0311ebdacf3fc7444847a26f7696f02799d3dbc7d68ef82d24cb082bed990_prof);

    }

    // line 19
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_c0405a8988e4634069d266094d612011cbc9b33ad0fc44cf7c035cc251ed4998 = $this->env->getExtension("native_profiler");
        $__internal_c0405a8988e4634069d266094d612011cbc9b33ad0fc44cf7c035cc251ed4998->enter($__internal_c0405a8988e4634069d266094d612011cbc9b33ad0fc44cf7c035cc251ed4998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 20
        echo "    ";
        ob_start();
        // line 21
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c0405a8988e4634069d266094d612011cbc9b33ad0fc44cf7c035cc251ed4998->leave($__internal_c0405a8988e4634069d266094d612011cbc9b33ad0fc44cf7c035cc251ed4998_prof);

    }

    // line 25
    public function block_root($context, array $blocks = array())
    {
        $__internal_04d3e2c68419bad1f6558fcbe4bfb040fcf66bac160e4a5f5f3230f7b49916b5 = $this->env->getExtension("native_profiler");
        $__internal_04d3e2c68419bad1f6558fcbe4bfb040fcf66bac160e4a5f5f3230f7b49916b5->enter($__internal_04d3e2c68419bad1f6558fcbe4bfb040fcf66bac160e4a5f5f3230f7b49916b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 26
        echo "    ";
        $context["listAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "childrenAttributes", array());
        // line 27
        echo "
    ";
        // line 28
        if ($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "rootClass", array(), "any", true, true)) {
            // line 29
            echo "        ";
            $context["oro_menu"] = $this;
            // line 30
            echo "        ";
            $context["listAttributes"] = twig_array_merge((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), array("class" => $context["oro_menu"]->getadd_attribute_values((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")), "class", array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "rootClass", array())))));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        
        $__internal_04d3e2c68419bad1f6558fcbe4bfb040fcf66bac160e4a5f5f3230f7b49916b5->leave($__internal_04d3e2c68419bad1f6558fcbe4bfb040fcf66bac160e4a5f5f3230f7b49916b5_prof);

    }

    // line 35
    public function block_list($context, array $blocks = array())
    {
        $__internal_04b68a94f991bbb62e9f165c472a419721f5456573f33ce37a1c48c949f6ca3e = $this->env->getExtension("native_profiler");
        $__internal_04b68a94f991bbb62e9f165c472a419721f5456573f33ce37a1c48c949f6ca3e->enter($__internal_04b68a94f991bbb62e9f165c472a419721f5456573f33ce37a1c48c949f6ca3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        // line 36
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 37
            echo "        ";
            $context["oro_menu"] = $this;
            // line 38
            echo "        <ul";
            echo $context["oro_menu"]->getattributes((isset($context["listAttributes"]) ? $context["listAttributes"] : $this->getContext($context, "listAttributes")));
            echo ">
            ";
            // line 39
            $this->displayBlock("children", $context, $blocks);
            echo "
        </ul>
    ";
        }
        
        $__internal_04b68a94f991bbb62e9f165c472a419721f5456573f33ce37a1c48c949f6ca3e->leave($__internal_04b68a94f991bbb62e9f165c472a419721f5456573f33ce37a1c48c949f6ca3e_prof);

    }

    // line 44
    public function block_children($context, array $blocks = array())
    {
        $__internal_1e8f0ea074b16ce1a35351d8c01281084662eb1dd1bb03adffaecaedc7c2846f = $this->env->getExtension("native_profiler");
        $__internal_1e8f0ea074b16ce1a35351d8c01281084662eb1dd1bb03adffaecaedc7c2846f->enter($__internal_1e8f0ea074b16ce1a35351d8c01281084662eb1dd1bb03adffaecaedc7c2846f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "children"));

        // line 45
        echo "    ";
        // line 46
        echo "    ";
        $context["currentOptions"] = (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"));
        // line 47
        echo "    ";
        $context["currentItem"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()))) {
            // line 50
            echo "        ";
            $context["options"] = twig_array_merge((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), array("depth" => ($this->getAttribute((isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions")), "depth", array()) - 1)));
            // line 51
            echo "    ";
        }
        // line 52
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem")), "children", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 53
            $context["itemAttributes"] = $this->getAttribute($context["item"], "attributes", array());
            // line 54
            $context["childrenAttributes"] = $this->getAttribute($context["item"], "childrenAttributes", array());
            // line 55
            $context["classes"] = (($this->getAttribute((isset($context["itemAttributes"]) ? $context["itemAttributes"] : null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["itemAttributes"]) ? $context["itemAttributes"] : $this->getContext($context, "itemAttributes")), "class", array()), " ")) : (array()));
            // line 56
            $context["childrenClasses"] = (($this->getAttribute((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : null), "class", array(), "any", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : $this->getContext($context, "childrenAttributes")), "class", array()), " ")) : (array()));
            // line 57
            echo "        ";
            $this->displayBlock("item", $context, $blocks);
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        $context["item"] = (isset($context["currentItem"]) ? $context["currentItem"] : $this->getContext($context, "currentItem"));
        // line 61
        echo "    ";
        $context["options"] = (isset($context["currentOptions"]) ? $context["currentOptions"] : $this->getContext($context, "currentOptions"));
        
        $__internal_1e8f0ea074b16ce1a35351d8c01281084662eb1dd1bb03adffaecaedc7c2846f->leave($__internal_1e8f0ea074b16ce1a35351d8c01281084662eb1dd1bb03adffaecaedc7c2846f_prof);

    }

    // line 64
    public function block_item($context, array $blocks = array())
    {
        $__internal_3b59d9179eb62cabfee2b8ede6eccdd0f87769617fcb978706beecf71fa1d38f = $this->env->getExtension("native_profiler");
        $__internal_3b59d9179eb62cabfee2b8ede6eccdd0f87769617fcb978706beecf71fa1d38f->enter($__internal_3b59d9179eb62cabfee2b8ede6eccdd0f87769617fcb978706beecf71fa1d38f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 65
        echo "    ";
        $this->displayBlock("item_renderer", $context, $blocks);
        echo "
";
        
        $__internal_3b59d9179eb62cabfee2b8ede6eccdd0f87769617fcb978706beecf71fa1d38f->leave($__internal_3b59d9179eb62cabfee2b8ede6eccdd0f87769617fcb978706beecf71fa1d38f_prof);

    }

    // line 68
    public function block_item_renderer($context, array $blocks = array())
    {
        $__internal_70841a55f50680f91dbd284fffa5121cb0fab052b6d220b8cb83b14dea5d8a42 = $this->env->getExtension("native_profiler");
        $__internal_70841a55f50680f91dbd284fffa5121cb0fab052b6d220b8cb83b14dea5d8a42->enter($__internal_70841a55f50680f91dbd284fffa5121cb0fab052b6d220b8cb83b14dea5d8a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_renderer"));

        // line 69
        echo "    ";
        $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "showNonAuthorized", array()));
        // line 70
        echo "    ";
        $context["displayable"] = ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : $this->getContext($context, "showNonAuthorized")));
        // line 71
        echo "    ";
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayed", array()) && (isset($context["displayable"]) ? $context["displayable"] : $this->getContext($context, "displayable")))) {
            // line 72
            echo "        ";
            // line 73
            if ($this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method")) {
                // line 74
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentClass", array())));
            } elseif ($this->getAttribute(            // line 75
(isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isAncestor", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), 1 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array())), "method")) {
                // line 76
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "ancestorClass", array())));
            }
            // line 78
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 79
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 81
            if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 82
                $context["classes"] = twig_array_merge((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), array(0 => $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 84
            if ( !twig_test_empty((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")))) {
                // line 85
                $context["itemAttributes"] = twig_array_merge((isset($context["itemAttributes"]) ? $context["itemAttributes"] : $this->getContext($context, "itemAttributes")), array("class" => twig_join_filter((isset($context["classes"]) ? $context["classes"] : $this->getContext($context, "classes")), " ")));
            }
            // line 87
            echo "        ";
            // line 88
            echo "        ";
            $context["oro_menu"] = $this;
            // line 89
            echo "        <li";
            echo $context["oro_menu"]->getattributes((isset($context["itemAttributes"]) ? $context["itemAttributes"] : $this->getContext($context, "itemAttributes")));
            echo ">
            ";
            // line 90
            $this->displayBlock("item_content", $context, $blocks);
            echo "
        </li>
    ";
        }
        
        $__internal_70841a55f50680f91dbd284fffa5121cb0fab052b6d220b8cb83b14dea5d8a42->leave($__internal_70841a55f50680f91dbd284fffa5121cb0fab052b6d220b8cb83b14dea5d8a42_prof);

    }

    // line 95
    public function block_item_content($context, array $blocks = array())
    {
        $__internal_66729cba7d4d7160e78b6ebeabd5cf55fa53eb55f46494a6d135683dd26e1aea = $this->env->getExtension("native_profiler");
        $__internal_66729cba7d4d7160e78b6ebeabd5cf55fa53eb55f46494a6d135683dd26e1aea->enter($__internal_66729cba7d4d7160e78b6ebeabd5cf55fa53eb55f46494a6d135683dd26e1aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_content"));

        // line 96
        $context["linkAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array());
        // line 97
        $context["labelAttributes"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "labelAttributes", array());
        // line 98
        if (( !twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute((isset($context["matcher"]) ? $context["matcher"] : $this->getContext($context, "matcher")), "isCurrent", array(0 => (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"))), "method") || $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "currentAsLink", array())))) {
            // line 99
            echo "        ";
            $this->displayBlock("linkElement", $context, $blocks);
        } else {
            // line 101
            echo "        ";
            $this->displayBlock("spanElement", $context, $blocks);
        }
        // line 103
        echo "    ";
        // line 104
        $context["childrenClasses"] = twig_array_merge((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "level", array()))));
        // line 105
        $context["listAttributes"] = twig_array_merge((isset($context["childrenAttributes"]) ? $context["childrenAttributes"] : $this->getContext($context, "childrenAttributes")), array("class" => twig_join_filter((isset($context["childrenClasses"]) ? $context["childrenClasses"] : $this->getContext($context, "childrenClasses")), " ")));
        // line 106
        echo "    ";
        $this->displayBlock("list_wrapper", $context, $blocks);
        echo "
";
        
        $__internal_66729cba7d4d7160e78b6ebeabd5cf55fa53eb55f46494a6d135683dd26e1aea->leave($__internal_66729cba7d4d7160e78b6ebeabd5cf55fa53eb55f46494a6d135683dd26e1aea_prof);

    }

    // line 110
    public function block_list_wrapper($context, array $blocks = array())
    {
        $__internal_81c89f267497ed29588419e91e0d2b86012a0333b6639b3262ee920eac18a6d0 = $this->env->getExtension("native_profiler");
        $__internal_81c89f267497ed29588419e91e0d2b86012a0333b6639b3262ee920eac18a6d0->enter($__internal_81c89f267497ed29588419e91e0d2b86012a0333b6639b3262ee920eac18a6d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_wrapper"));

        // line 111
        echo "    ";
        $this->displayBlock("list", $context, $blocks);
        echo "
";
        
        $__internal_81c89f267497ed29588419e91e0d2b86012a0333b6639b3262ee920eac18a6d0->leave($__internal_81c89f267497ed29588419e91e0d2b86012a0333b6639b3262ee920eac18a6d0_prof);

    }

    // line 114
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_4a072bd72304036db3641864ff4fd3a97269d91d4849dd5495c74dcf67cdfee0 = $this->env->getExtension("native_profiler");
        $__internal_4a072bd72304036db3641864ff4fd3a97269d91d4849dd5495c74dcf67cdfee0->enter($__internal_4a072bd72304036db3641864ff4fd3a97269d91d4849dd5495c74dcf67cdfee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 115
        echo "    ";
        $context["oro_menu"] = $this;
        // line 116
        echo "    ";
        $context["extras"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array());
        // line 117
        echo "
    ";
        // line 118
        if (($this->getAttribute((isset($context["extras"]) ? $context["extras"] : null), "dialog", array(), "any", true, true) && $this->getAttribute((isset($context["extras"]) ? $context["extras"] : $this->getContext($context, "extras")), "dialog", array()))) {
            // line 119
            echo "        ";
            echo $context["Navigation"]->getrenderClientLink($this->getAttribute((isset($context["extras"]) ? $context["extras"] : $this->getContext($context, "extras")), "dialog_config", array()), array("entityClass" => $this->env->getExtension('oro_entity')->getClassName($this->getAttribute(            // line 120
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), true), "entityId" => $this->getAttribute($this->getAttribute(            // line 121
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())));
        } else {
            // line 124
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
            echo "\"";
            echo $context["oro_menu"]->getattributes((isset($context["linkAttributes"]) ? $context["linkAttributes"] : $this->getContext($context, "linkAttributes")));
            echo ">";
            $this->displayBlock("label", $context, $blocks);
            echo "</a>
    ";
        }
        // line 126
        echo "
";
        
        $__internal_4a072bd72304036db3641864ff4fd3a97269d91d4849dd5495c74dcf67cdfee0->leave($__internal_4a072bd72304036db3641864ff4fd3a97269d91d4849dd5495c74dcf67cdfee0_prof);

    }

    // line 129
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_68f08917e9c1a164f2c4da1caf1c901bac5c0e7368e290a9cb7c0ede6b1cce7a = $this->env->getExtension("native_profiler");
        $__internal_68f08917e9c1a164f2c4da1caf1c901bac5c0e7368e290a9cb7c0ede6b1cce7a->enter($__internal_68f08917e9c1a164f2c4da1caf1c901bac5c0e7368e290a9cb7c0ede6b1cce7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 130
        echo "    ";
        $context["oro_menu"] = $this;
        // line 131
        echo "    <span";
        echo $context["oro_menu"]->getattributes((isset($context["labelAttributes"]) ? $context["labelAttributes"] : $this->getContext($context, "labelAttributes")));
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</span>
";
        
        $__internal_68f08917e9c1a164f2c4da1caf1c901bac5c0e7368e290a9cb7c0ede6b1cce7a->leave($__internal_68f08917e9c1a164f2c4da1caf1c901bac5c0e7368e290a9cb7c0ede6b1cce7a_prof);

    }

    // line 134
    public function block_label($context, array $blocks = array())
    {
        $__internal_85f7e1e26db771cebf784b870efee59845dc9b85060cb36e00f67754e6741d1a = $this->env->getExtension("native_profiler");
        $__internal_85f7e1e26db771cebf784b870efee59845dc9b85060cb36e00f67754e6741d1a->enter($__internal_85f7e1e26db771cebf784b870efee59845dc9b85060cb36e00f67754e6741d1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 135
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "icon"), "method")) {
            // line 136
            echo "        <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
    ";
        }
        // line 138
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            // line 139
            echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()));
        } else {
            // line 141
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translateParams", 1 => array()), "method"), $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "translateDomain", 1 => "messages"), "method")), "html", null, true);
        }
        
        $__internal_85f7e1e26db771cebf784b870efee59845dc9b85060cb36e00f67754e6741d1a->leave($__internal_85f7e1e26db771cebf784b870efee59845dc9b85060cb36e00f67754e6741d1a_prof);

    }

    // line 5
    public function getattributes($__attributes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a982ed707fb2258767c0ae89b37cae9f0e28586445b335d2c321de89a3a18058 = $this->env->getExtension("native_profiler");
            $__internal_a982ed707fb2258767c0ae89b37cae9f0e28586445b335d2c321de89a3a18058->enter($__internal_a982ed707fb2258767c0ae89b37cae9f0e28586445b335d2c321de89a3a18058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 6
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 7
                if (( !(null === $context["value"]) &&  !($context["value"] === false))) {
                    // line 8
                    echo sprintf(" %s=\"%s\"", $context["name"], ((($context["value"] === true)) ? (twig_escape_filter($this->env, $context["name"])) : (twig_escape_filter($this->env, $context["value"]))));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_a982ed707fb2258767c0ae89b37cae9f0e28586445b335d2c321de89a3a18058->leave($__internal_a982ed707fb2258767c0ae89b37cae9f0e28586445b335d2c321de89a3a18058_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function getadd_attribute_values($__attributes__ = null, $__attribute__ = null, $__values__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "attribute" => $__attribute__,
            "values" => $__values__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_71b2ca3921387d89efc4e3aae91f7be87a4317ad29f8a0a2cf9d7124f5f8bdd5 = $this->env->getExtension("native_profiler");
            $__internal_71b2ca3921387d89efc4e3aae91f7be87a4317ad29f8a0a2cf9d7124f5f8bdd5->enter($__internal_71b2ca3921387d89efc4e3aae91f7be87a4317ad29f8a0a2cf9d7124f5f8bdd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "add_attribute_values"));

            // line 14
            $context["_values"] = (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), array(), "array", true, true)) ? (twig_split_filter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : $this->getContext($context, "attributes")), (isset($context["attribute"]) ? $context["attribute"] : $this->getContext($context, "attribute")), array(), "array"), " ")) : (array()));
            // line 15
            $context["_values"] = twig_array_merge((isset($context["_values"]) ? $context["_values"] : $this->getContext($context, "_values")), (isset($context["values"]) ? $context["values"] : $this->getContext($context, "values")));
            // line 16
            echo twig_escape_filter($this->env, twig_join_filter((isset($context["_values"]) ? $context["_values"] : $this->getContext($context, "_values")), " "), "html", null, true);
            
            $__internal_71b2ca3921387d89efc4e3aae91f7be87a4317ad29f8a0a2cf9d7124f5f8bdd5->leave($__internal_71b2ca3921387d89efc4e3aae91f7be87a4317ad29f8a0a2cf9d7124f5f8bdd5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 16,  488 => 15,  486 => 14,  469 => 13,  450 => 8,  448 => 7,  443 => 6,  428 => 5,  420 => 141,  417 => 139,  415 => 138,  409 => 136,  407 => 135,  401 => 134,  389 => 131,  386 => 130,  380 => 129,  372 => 126,  362 => 124,  359 => 121,  358 => 120,  356 => 119,  354 => 118,  351 => 117,  348 => 116,  345 => 115,  339 => 114,  329 => 111,  323 => 110,  313 => 106,  311 => 105,  309 => 104,  307 => 103,  303 => 101,  299 => 99,  297 => 98,  295 => 97,  293 => 96,  287 => 95,  276 => 90,  271 => 89,  268 => 88,  266 => 87,  263 => 85,  261 => 84,  258 => 82,  256 => 81,  253 => 79,  251 => 78,  248 => 76,  246 => 75,  244 => 74,  242 => 73,  240 => 72,  237 => 71,  234 => 70,  231 => 69,  225 => 68,  215 => 65,  209 => 64,  201 => 61,  198 => 60,  196 => 59,  179 => 57,  177 => 56,  175 => 55,  173 => 54,  171 => 53,  153 => 52,  150 => 51,  147 => 50,  144 => 49,  142 => 48,  139 => 47,  136 => 46,  134 => 45,  128 => 44,  117 => 39,  112 => 38,  109 => 37,  106 => 36,  100 => 35,  92 => 32,  89 => 31,  86 => 30,  83 => 29,  81 => 28,  78 => 27,  75 => 26,  69 => 25,  58 => 21,  55 => 20,  49 => 19,  42 => 1,  40 => 3,  38 => 2,  11 => 1,);
    }
}
