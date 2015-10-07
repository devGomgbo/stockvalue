<?php

/* OroOrganizationBundle:Form:fields.html.twig */
class __TwigTemplate_172a3c8889c61d60df9e30945b210f14e29a66ac3415158bbb511d15f38925cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_business_unit_tree_widget' => array($this, 'block_oro_business_unit_tree_widget'),
            'oro_organizations_select_widget' => array($this, 'block_oro_organizations_select_widget'),
            'oro_type_choice_ownership_type_widget' => array($this, 'block_oro_type_choice_ownership_type_widget'),
            'oro_business_unit_tree_select_widget' => array($this, 'block_oro_business_unit_tree_select_widget'),
            'choice_bu_widget_collapsed' => array($this, 'block_choice_bu_widget_collapsed'),
            'choice_bu_widget_options' => array($this, 'block_choice_bu_widget_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8cf8e2a1c49dfa02459e003d747ab4d2dcf394a777f1bef03d7eadca247636c = $this->env->getExtension("native_profiler");
        $__internal_e8cf8e2a1c49dfa02459e003d747ab4d2dcf394a777f1bef03d7eadca247636c->enter($__internal_e8cf8e2a1c49dfa02459e003d747ab4d2dcf394a777f1bef03d7eadca247636c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroOrganizationBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_business_unit_tree_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_organizations_select_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('oro_type_choice_ownership_type_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('oro_business_unit_tree_select_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('choice_bu_widget_collapsed', $context, $blocks);
        // line 110
        echo "
";
        // line 111
        $this->displayBlock('choice_bu_widget_options', $context, $blocks);
        
        $__internal_e8cf8e2a1c49dfa02459e003d747ab4d2dcf394a777f1bef03d7eadca247636c->leave($__internal_e8cf8e2a1c49dfa02459e003d747ab4d2dcf394a777f1bef03d7eadca247636c_prof);

    }

    // line 1
    public function block_oro_business_unit_tree_widget($context, array $blocks = array())
    {
        $__internal_450e202be5bd11e73f494bc652907ec58e6c22654c9dee267bd98fceea4df180 = $this->env->getExtension("native_profiler");
        $__internal_450e202be5bd11e73f494bc652907ec58e6c22654c9dee267bd98fceea4df180->enter($__internal_450e202be5bd11e73f494bc652907ec58e6c22654c9dee267bd98fceea4df180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_business_unit_tree_widget"));

        // line 2
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 3
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " horizontal")) : ("horizontal"))));
            // line 4
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " validate-group")));
            // line 5
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 6
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["id"] => $context["child"]) {
                // line 7
                echo "                <div class=\"oro-clearfix\">
                    ";
                // line 8
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                    ";
                // line 9
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("raw_label" => true));
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </div>
    ";
        } else {
            // line 14
            echo "        ";
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_450e202be5bd11e73f494bc652907ec58e6c22654c9dee267bd98fceea4df180->leave($__internal_450e202be5bd11e73f494bc652907ec58e6c22654c9dee267bd98fceea4df180_prof);

    }

    // line 18
    public function block_oro_organizations_select_widget($context, array $blocks = array())
    {
        $__internal_4e34550aa965fa2e78c12298a4a1e098f1fd8e0f4628ed61b8c181c7a0f6d82f = $this->env->getExtension("native_profiler");
        $__internal_4e34550aa965fa2e78c12298a4a1e098f1fd8e0f4628ed61b8c181c7a0f6d82f->enter($__internal_4e34550aa965fa2e78c12298a4a1e098f1fd8e0f4628ed61b8c181c7a0f6d82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_organizations_select_widget"));

        // line 19
        echo "    ";
        ob_start();
        // line 20
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 21
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " validate-group")));
        // line 22
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            <input type=\"hidden\" name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[organizations][]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "default_organization", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[default_organization]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "default_organization", array()), "vars", array()), "value", array()), "html", null, true);
        echo "\" />
            ";
        // line 25
        echo $this->getAttribute($this, "renderOrganizationChildren", array(0 =>         // line 26
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 1 => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 27
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "organization_tree_ids", array()), 0, array(), "array"), "organization", array()), 2 => $this->getAttribute($this->getAttribute(        // line 28
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "organization_tree_ids", array()), 3 => $this->getAttribute($this->getAttribute(        // line 29
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "selected_business_units", array()), 4 => 0), "method");
        // line 31
        echo "
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4e34550aa965fa2e78c12298a4a1e098f1fd8e0f4628ed61b8c181c7a0f6d82f->leave($__internal_4e34550aa965fa2e78c12298a4a1e098f1fd8e0f4628ed61b8c181c7a0f6d82f_prof);

    }

    // line 63
    public function block_oro_type_choice_ownership_type_widget($context, array $blocks = array())
    {
        $__internal_817755251554728ece7ae16f5a418afd31edaa3041be8b77eb1c003882847d53 = $this->env->getExtension("native_profiler");
        $__internal_817755251554728ece7ae16f5a418afd31edaa3041be8b77eb1c003882847d53->enter($__internal_817755251554728ece7ae16f5a418afd31edaa3041be8b77eb1c003882847d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_type_choice_ownership_type_widget"));

        // line 64
        echo "    ";
        ob_start();
        // line 65
        echo "        ";
        if (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")) || (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")))) {
            // line 66
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 67
                echo "                ";
                if (($this->getAttribute($context["choice"], "value", array()) == ((array_key_exists("value", $context)) ? (_twig_default_filter((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "NONE")) : ("NONE")))) {
                    // line 68
                    echo "                    <div class=\"control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "label", array()), "html", null, true);
                    echo "</div>
                ";
                }
                // line 70
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        ";
        } else {
            // line 73
            echo "            ";
            $this->displayBlock("choice_widget", $context, $blocks);
            echo "
        ";
        }
        // line 75
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_817755251554728ece7ae16f5a418afd31edaa3041be8b77eb1c003882847d53->leave($__internal_817755251554728ece7ae16f5a418afd31edaa3041be8b77eb1c003882847d53_prof);

    }

    // line 78
    public function block_oro_business_unit_tree_select_widget($context, array $blocks = array())
    {
        $__internal_9ae4fb944685dc664b7066cdafd9b9a5783d59d80e7f48e451d9aeb5a14144d1 = $this->env->getExtension("native_profiler");
        $__internal_9ae4fb944685dc664b7066cdafd9b9a5783d59d80e7f48e451d9aeb5a14144d1->enter($__internal_9ae4fb944685dc664b7066cdafd9b9a5783d59d80e7f48e451d9aeb5a14144d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_business_unit_tree_select_widget"));

        // line 79
        echo "    ";
        $context["entityId"] = false;
        // line 80
        echo "    ";
        if (("oro_business_unit_form" == $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "name", array()))) {
            // line 81
            echo "        ";
            $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()), "id", array());
            // line 82
            echo "    ";
        }
        // line 83
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 84
            echo "        ";
            // line 85
            echo "        ";
            $context["raw_label"] = true;
            // line 86
            echo "        ";
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
            echo "
    ";
        } else {
            // line 88
            echo "        ";
            $this->displayBlock("choice_bu_widget_collapsed", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_9ae4fb944685dc664b7066cdafd9b9a5783d59d80e7f48e451d9aeb5a14144d1->leave($__internal_9ae4fb944685dc664b7066cdafd9b9a5783d59d80e7f48e451d9aeb5a14144d1_prof);

    }

    // line 92
    public function block_choice_bu_widget_collapsed($context, array $blocks = array())
    {
        $__internal_49736ad0fb6c8ff57b23c95ca454189de665c079499cc787d9200cf0b28b61d4 = $this->env->getExtension("native_profiler");
        $__internal_49736ad0fb6c8ff57b23c95ca454189de665c079499cc787d9200cf0b28b61d4->enter($__internal_49736ad0fb6c8ff57b23c95ca454189de665c079499cc787d9200cf0b28b61d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_bu_widget_collapsed"));

        // line 93
        echo "    ";
        ob_start();
        // line 94
        echo "        <select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
            ";
        // line 95
        if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
            // line 96
            echo "                <option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
            ";
        }
        // line 98
        echo "            ";
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 99
            echo "                ";
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 100
            echo "                ";
            $this->displayBlock("choice_widget_options", $context, $blocks);
            echo "
                ";
            // line 101
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 102
                echo "                    <option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
                ";
            }
            // line 104
            echo "            ";
        }
        // line 105
        echo "            ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 106
        echo "            ";
        $this->displayBlock("choice_bu_widget_options", $context, $blocks);
        echo "
        </select>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_49736ad0fb6c8ff57b23c95ca454189de665c079499cc787d9200cf0b28b61d4->leave($__internal_49736ad0fb6c8ff57b23c95ca454189de665c079499cc787d9200cf0b28b61d4_prof);

    }

    // line 111
    public function block_choice_bu_widget_options($context, array $blocks = array())
    {
        $__internal_5a11be7e04ca73c3fb45aa93fc9327f8d4e007b929f16949f682b7387e30068f = $this->env->getExtension("native_profiler");
        $__internal_5a11be7e04ca73c3fb45aa93fc9327f8d4e007b929f16949f682b7387e30068f->enter($__internal_5a11be7e04ca73c3fb45aa93fc9327f8d4e007b929f16949f682b7387e30068f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_bu_widget_options"));

        // line 112
        echo "    ";
        ob_start();
        // line 113
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 114
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 115
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\">
                    ";
                // line 116
                $context["options"] = $context["choice"];
                // line 117
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 120
                echo "                ";
                $context["disable"] = "";
                // line 121
                echo "                ";
                if ((array_key_exists("forbidden_business_unit_ids", $context) && twig_length_filter($this->env, (isset($context["forbidden_business_unit_ids"]) ? $context["forbidden_business_unit_ids"] : $this->getContext($context, "forbidden_business_unit_ids"))))) {
                    // line 122
                    echo "                    ";
                    if (twig_in_filter($this->getAttribute($context["choice"], "value", array()), (isset($context["forbidden_business_unit_ids"]) ? $context["forbidden_business_unit_ids"] : $this->getContext($context, "forbidden_business_unit_ids")))) {
                        // line 123
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 124
                        echo "                    ";
                    }
                    // line 125
                    echo "                ";
                } else {
                    // line 126
                    echo "                    ";
                    if (( !twig_in_filter($this->getAttribute($context["choice"], "value", array()), (isset($context["business_unit_ids"]) ? $context["business_unit_ids"] : $this->getContext($context, "business_unit_ids"))) || ((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")) && ((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")) == $this->getAttribute($context["choice"], "value", array()))))) {
                        // line 127
                        echo "                        ";
                        $context["disable"] = "disabled=\"disabled\"";
                        // line 128
                        echo "                    ";
                    }
                    // line 129
                    echo "                ";
                }
                // line 130
                echo "                <option ";
                echo twig_escape_filter($this->env, (isset($context["disable"]) ? $context["disable"] : $this->getContext($context, "disable")), "html", null, true);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"
                ";
                // line 131
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                // line 132
                ob_start();
                // line 133
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !(isset($context["translatable_options"]) ? $context["translatable_options"] : $this->getContext($context, "translatable_options")))) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))));
                // line 134
                echo "                        ";
                // line 135
                echo "                        ";
                echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 137
                echo "</option>
            ";
            }
            // line 139
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5a11be7e04ca73c3fb45aa93fc9327f8d4e007b929f16949f682b7387e30068f->leave($__internal_5a11be7e04ca73c3fb45aa93fc9327f8d4e007b929f16949f682b7387e30068f_prof);

    }

    // line 36
    public function getrenderOrganizationChildren($__form__ = null, $__org_id__ = null, $__children__ = array(), $__selected__ = array(), $__level__ = 1)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "org_id" => $__org_id__,
            "children" => $__children__,
            "selected" => $__selected__,
            "level" => $__level__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2495126c959f1f272b09e80617a63eee9c423c6a7c93d6edf1d5ff07b31e99fa = $this->env->getExtension("native_profiler");
            $__internal_2495126c959f1f272b09e80617a63eee9c423c6a7c93d6edf1d5ff07b31e99fa->enter($__internal_2495126c959f1f272b09e80617a63eee9c423c6a7c93d6edf1d5ff07b31e99fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderOrganizationChildren"));

            // line 37
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["children"]) ? $context["children"] : $this->getContext($context, "children")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 38
                echo "        <div class=\"oro-clearfix\">
            <span style=\"float:left;\">
            ";
                // line 40
                if (((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) != 0)) {
                    // line 41
                    echo "                ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["level"]) ? $context["level"] : $this->getContext($context, "level"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 42
                        echo "                    ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable(range(0, 5));
                        foreach ($context['_seq'] as $context["_key"] => $context["si"]) {
                            echo "&nbsp;";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['si'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 44
                    echo "            ";
                }
                // line 45
                echo "            </span>
            <input type=\"checkbox\"
                id=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
                echo "_businessUnits_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                echo "\"
                name=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
                echo "[businessUnits][]\"
                value=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                echo "\"
                ";
                // line 50
                if (twig_in_filter($this->getAttribute($context["child"], "id", array()), (isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")))) {
                    echo " checked=\"checked\" ";
                }
                // line 51
                echo "                class=\"bu\"
                data-organization=\"";
                // line 52
                echo twig_escape_filter($this->env, (isset($context["org_id"]) ? $context["org_id"] : $this->getContext($context, "org_id")), "html", null, true);
                echo "\"
            />
            <label for=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
                echo "_businessUnits_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["child"], "name", array()), "html", null, true);
                echo "</label>
        </div>
        ";
                // line 56
                if ($this->getAttribute($context["child"], "children", array(), "any", true, true)) {
                    // line 57
                    echo "            ";
                    $context["sublevel"] = ((isset($context["level"]) ? $context["level"] : $this->getContext($context, "level")) + 1);
                    // line 58
                    echo "            ";
                    echo $this->getAttribute($this, "renderOrganizationChildren", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 1 => (isset($context["org_id"]) ? $context["org_id"] : $this->getContext($context, "org_id")), 2 => $this->getAttribute($context["child"], "children", array()), 3 => (isset($context["selected"]) ? $context["selected"] : $this->getContext($context, "selected")), 4 => (isset($context["sublevel"]) ? $context["sublevel"] : $this->getContext($context, "sublevel"))), "method");
                    echo "
        ";
                }
                // line 60
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_2495126c959f1f272b09e80617a63eee9c423c6a7c93d6edf1d5ff07b31e99fa->leave($__internal_2495126c959f1f272b09e80617a63eee9c423c6a7c93d6edf1d5ff07b31e99fa_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroOrganizationBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 60,  547 => 58,  544 => 57,  542 => 56,  533 => 54,  528 => 52,  525 => 51,  521 => 50,  517 => 49,  513 => 48,  507 => 47,  503 => 45,  500 => 44,  494 => 43,  484 => 42,  479 => 41,  477 => 40,  473 => 38,  468 => 37,  449 => 36,  441 => 140,  427 => 139,  423 => 137,  419 => 135,  417 => 134,  415 => 133,  413 => 132,  408 => 131,  401 => 130,  398 => 129,  395 => 128,  392 => 127,  389 => 126,  386 => 125,  383 => 124,  380 => 123,  377 => 122,  374 => 121,  371 => 120,  364 => 117,  362 => 116,  357 => 115,  354 => 114,  336 => 113,  333 => 112,  327 => 111,  315 => 106,  312 => 105,  309 => 104,  303 => 102,  301 => 101,  296 => 100,  293 => 99,  290 => 98,  280 => 96,  278 => 95,  270 => 94,  267 => 93,  261 => 92,  250 => 88,  244 => 86,  241 => 85,  239 => 84,  236 => 83,  233 => 82,  230 => 81,  227 => 80,  224 => 79,  218 => 78,  210 => 75,  204 => 73,  198 => 71,  192 => 70,  186 => 68,  183 => 67,  178 => 66,  175 => 65,  172 => 64,  166 => 63,  156 => 31,  154 => 29,  153 => 28,  152 => 27,  151 => 26,  150 => 25,  144 => 24,  138 => 23,  133 => 22,  130 => 21,  127 => 20,  124 => 19,  118 => 18,  107 => 14,  103 => 12,  94 => 9,  90 => 8,  87 => 7,  83 => 6,  78 => 5,  75 => 4,  72 => 3,  69 => 2,  63 => 1,  56 => 111,  53 => 110,  51 => 92,  48 => 91,  46 => 78,  43 => 77,  41 => 63,  38 => 62,  35 => 35,  33 => 18,  30 => 17,  28 => 1,);
    }
}
