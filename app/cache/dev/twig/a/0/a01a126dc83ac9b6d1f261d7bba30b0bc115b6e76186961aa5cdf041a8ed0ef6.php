<?php

/* OroUIBundle:Form:fields.html.twig */
class __TwigTemplate_a01a126dc83ac9b6d1f261d7bba30b0bc115b6e76186961aa5cdf041a8ed0ef6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "OroUIBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'form_errors' => array($this, 'block_form_errors'),
            'date_widget' => array($this, 'block_date_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'choice_widget_option_attributes' => array($this, 'block_choice_widget_option_attributes'),
            'collection_render' => array($this, 'block_collection_render'),
            '_oro_entity_config_config_field_type_widget' => array($this, 'block__oro_entity_config_config_field_type_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aef7ac5a573be0749615ce4e14ab5a712ad03d28b4b730751f08cb9f3cd26a1 = $this->env->getExtension("native_profiler");
        $__internal_4aef7ac5a573be0749615ce4e14ab5a712ad03d28b4b730751f08cb9f3cd26a1->enter($__internal_4aef7ac5a573be0749615ce4e14ab5a712ad03d28b4b730751f08cb9f3cd26a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Form:fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aef7ac5a573be0749615ce4e14ab5a712ad03d28b4b730751f08cb9f3cd26a1->leave($__internal_4aef7ac5a573be0749615ce4e14ab5a712ad03d28b4b730751f08cb9f3cd26a1_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_0e25ddb7033e870cf48768e9d8ec9bf53dea5d42dfd25a4d6c989c2fc816ab24 = $this->env->getExtension("native_profiler");
        $__internal_0e25ddb7033e870cf48768e9d8ec9bf53dea5d42dfd25a4d6c989c2fc816ab24->enter($__internal_0e25ddb7033e870cf48768e9d8ec9bf53dea5d42dfd25a4d6c989c2fc816ab24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        <div class=\"control-group";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()), "html", null, true);
        }
        echo "\">
            ";
        // line 6
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 7
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr"))));
            echo "
                </div>
            ";
        }
        // line 11
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0e25ddb7033e870cf48768e9d8ec9bf53dea5d42dfd25a4d6c989c2fc816ab24->leave($__internal_0e25ddb7033e870cf48768e9d8ec9bf53dea5d42dfd25a4d6c989c2fc816ab24_prof);

    }

    // line 19
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_34c715bdefce41b3b502d02aefe42d5da93f6f2ade0d45e797f17479ec864d31 = $this->env->getExtension("native_profiler");
        $__internal_34c715bdefce41b3b502d02aefe42d5da93f6f2ade0d45e797f17479ec864d31->enter($__internal_34c715bdefce41b3b502d02aefe42d5da93f6f2ade0d45e797f17479ec864d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 20
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 21
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " error")) : ("error"))));
            // line 22
            echo "    ";
        }
        // line 23
        echo "    ";
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        echo "
";
        
        $__internal_34c715bdefce41b3b502d02aefe42d5da93f6f2ade0d45e797f17479ec864d31->leave($__internal_34c715bdefce41b3b502d02aefe42d5da93f6f2ade0d45e797f17479ec864d31_prof);

    }

    // line 26
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_f59aaf294eb1faaf6162cde74c230ced254375af74c2e9f6a40bd2fbf8939a77 = $this->env->getExtension("native_profiler");
        $__internal_f59aaf294eb1faaf6162cde74c230ced254375af74c2e9f6a40bd2fbf8939a77->enter($__internal_f59aaf294eb1faaf6162cde74c230ced254375af74c2e9f6a40bd2fbf8939a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 27
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 28
            echo "        ";
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " error")) : ("error"))));
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        $this->displayParentBlock("widget_container_attributes", $context, $blocks);
        echo "
";
        
        $__internal_f59aaf294eb1faaf6162cde74c230ced254375af74c2e9f6a40bd2fbf8939a77->leave($__internal_f59aaf294eb1faaf6162cde74c230ced254375af74c2e9f6a40bd2fbf8939a77_prof);

    }

    // line 33
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a2bb7bc28219d932d762c60c638437b232d5bb21646500d5d105d734909d293c = $this->env->getExtension("native_profiler");
        $__internal_a2bb7bc28219d932d762c60c638437b232d5bb21646500d5d105d734909d293c->enter($__internal_a2bb7bc28219d932d762c60c638437b232d5bb21646500d5d105d734909d293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 34
        ob_start();
        // line 35
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 36
            echo "            ";
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                // line 37
                echo "                ";
                $context["combinedError"] = "";
                // line 38
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 39
                    echo "                    ";
                    $context["combinedError"] = ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) != "")) ? ((((isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")) . "; ") . $this->getAttribute($context["error"], "message", array()))) : ($this->getAttribute($context["error"], "message", array())));
                    // line 40
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                <span class=\"validation-failed\">";
                echo twig_escape_filter($this->env, (isset($context["combinedError"]) ? $context["combinedError"] : $this->getContext($context, "combinedError")), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 43
                echo "                ";
                $this->displayParentBlock("form_errors", $context, $blocks);
                echo "
            ";
            }
            // line 45
            echo "        ";
        }
        // line 46
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a2bb7bc28219d932d762c60c638437b232d5bb21646500d5d105d734909d293c->leave($__internal_a2bb7bc28219d932d762c60c638437b232d5bb21646500d5d105d734909d293c_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_db36a7b47f186272ee0d1006d2d148a79cd78fdcff8dfb64e10c0eebf2be5554 = $this->env->getExtension("native_profiler");
        $__internal_db36a7b47f186272ee0d1006d2d148a79cd78fdcff8dfb64e10c0eebf2be5554->enter($__internal_db36a7b47f186272ee0d1006d2d148a79cd78fdcff8dfb64e10c0eebf2be5554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        echo "    ";
        ob_start();
        // line 51
        echo "        ";
        $context["type"] = "text";
        // line 52
        echo "        ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 53
            echo "            ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
        ";
        } else {
            // line 55
            echo "            <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
                ";
            // line 56
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 57
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 58
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 59
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 60
            echo "
            </div>
        ";
        }
        // line 63
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_db36a7b47f186272ee0d1006d2d148a79cd78fdcff8dfb64e10c0eebf2be5554->leave($__internal_db36a7b47f186272ee0d1006d2d148a79cd78fdcff8dfb64e10c0eebf2be5554_prof);

    }

    // line 66
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_63fa1b33a3e5e58b89cb6ab68b821ef41579f21bf5e8bb0de25ffe063b15972b = $this->env->getExtension("native_profiler");
        $__internal_63fa1b33a3e5e58b89cb6ab68b821ef41579f21bf5e8bb0de25ffe063b15972b->enter($__internal_63fa1b33a3e5e58b89cb6ab68b821ef41579f21bf5e8bb0de25ffe063b15972b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 67
        echo "    ";
        ob_start();
        // line 68
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " horizontal")) : ("horizontal"))));
        // line 69
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " validate-group")));
        // line 70
        echo "        <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
            ";
        // line 71
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 72
            echo "                <div class=\"oro-clearfix\">
                    ";
            // line 73
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
                    ";
            // line 74
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("raw_label" => ((array_key_exists("raw_label", $context)) ? ((isset($context["raw_label"]) ? $context["raw_label"] : $this->getContext($context, "raw_label"))) : (false)), "translatable_label" => ((array_key_exists("translatable_options", $context)) ? ((isset($context["translatable_options"]) ? $context["translatable_options"] : $this->getContext($context, "translatable_options"))) : (true))));
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_63fa1b33a3e5e58b89cb6ab68b821ef41579f21bf5e8bb0de25ffe063b15972b->leave($__internal_63fa1b33a3e5e58b89cb6ab68b821ef41579f21bf5e8bb0de25ffe063b15972b_prof);

    }

    // line 81
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_50de2c5d131f9001b5dc917a534b0a8b0e6ff32c61d88e12b73ae6aac54197ad = $this->env->getExtension("native_profiler");
        $__internal_50de2c5d131f9001b5dc917a534b0a8b0e6ff32c61d88e12b73ae6aac54197ad->enter($__internal_50de2c5d131f9001b5dc917a534b0a8b0e6ff32c61d88e12b73ae6aac54197ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 82
        echo "    ";
        ob_start();
        // line 83
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
            // line 84
            echo "            ";
            if (twig_test_iterable($context["choice"])) {
                // line 85
                echo "                <optgroup label=\"";
                echo twig_escape_filter($this->env, (((array_key_exists("translatable_groups", $context) &&  !(isset($context["translatable_groups"]) ? $context["translatable_groups"] : $this->getContext($context, "translatable_groups")))) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\">
                    ";
                // line 86
                $context["options"] = $context["choice"];
                // line 87
                echo "                    ";
                $this->displayBlock("choice_widget_options", $context, $blocks);
                echo "
                </optgroup>
            ";
            } else {
                // line 90
                echo "                ";
                $context["label"] = (((array_key_exists("translatable_options", $context) &&  !(isset($context["translatable_options"]) ? $context["translatable_options"] : $this->getContext($context, "translatable_options")))) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))));
                // line 91
                echo "                <option ";
                $this->displayBlock("choice_widget_option_attributes", $context, $blocks);
                echo " value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "is_safe", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "is_safe", array()))) {
                    echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
                } else {
                    echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                }
                echo "</option>
            ";
            }
            // line 93
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
        // line 94
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_50de2c5d131f9001b5dc917a534b0a8b0e6ff32c61d88e12b73ae6aac54197ad->leave($__internal_50de2c5d131f9001b5dc917a534b0a8b0e6ff32c61d88e12b73ae6aac54197ad_prof);

    }

    // line 97
    public function block_choice_widget_option_attributes($context, array $blocks = array())
    {
        $__internal_ac2ad22fdff12e296d7ecded2e6d2534a74107451d0bbbc577f918eba6116766 = $this->env->getExtension("native_profiler");
        $__internal_ac2ad22fdff12e296d7ecded2e6d2534a74107451d0bbbc577f918eba6116766->enter($__internal_ac2ad22fdff12e296d7ecded2e6d2534a74107451d0bbbc577f918eba6116766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_option_attributes"));

        // line 98
        ob_start();
        // line 99
        echo "    ";
        // line 100
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "label", array(), "any", false, true), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label", array()), "attr", array())) > 0))) {
            // line 101
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "label", array()), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "    ";
        }
        // line 103
        echo "
    ";
        // line 104
        if (($this->getAttribute((isset($context["choice"]) ? $context["choice"] : null), "attr", array(), "any", true, true) && (twig_length_filter($this->env, $this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "attr", array())) > 0))) {
            // line 105
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["choice"]) ? $context["choice"] : $this->getContext($context, "choice")), "attr", array()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ac2ad22fdff12e296d7ecded2e6d2534a74107451d0bbbc577f918eba6116766->leave($__internal_ac2ad22fdff12e296d7ecded2e6d2534a74107451d0bbbc577f918eba6116766_prof);

    }

    // line 110
    public function block_collection_render($context, array $blocks = array())
    {
        $__internal_4bdec7b7cf3ce1978eb799da2609e3093f1d1939118c43b6bec6ffd12e3510fc = $this->env->getExtension("native_profiler");
        $__internal_4bdec7b7cf3ce1978eb799da2609e3093f1d1939118c43b6bec6ffd12e3510fc->enter($__internal_4bdec7b7cf3ce1978eb799da2609e3093f1d1939118c43b6bec6ffd12e3510fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_render"));

        // line 111
        echo "    ";
        ob_start();
        // line 112
        echo "        ";
        $context["__internal_7c5455a7d2e1caeeb3a29a9f5e63a87a8c1b896e3b132118a76145128fd66181"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:Form:fields.html.twig", 112);
        // line 113
        echo "        <div class=\"row-oro\">
            <div class=\"collection-fields-list\" data-prototype=\"";
        // line 114
        echo twig_escape_filter($this->env, $context["__internal_7c5455a7d2e1caeeb3a29a9f5e63a87a8c1b896e3b132118a76145128fd66181"]->getcollection_prototype((isset($context["subform"]) ? $context["subform"] : $this->getContext($context, "subform"))));
        echo "\">
                ";
        // line 115
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["subform"]) ? $context["subform"] : $this->getContext($context, "subform")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 116
            echo "                    ";
            echo $context["__internal_7c5455a7d2e1caeeb3a29a9f5e63a87a8c1b896e3b132118a76145128fd66181"]->getcollection_prototype($context["field"]);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "            </div>
            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Add"), "html", null, true);
        echo "</a>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4bdec7b7cf3ce1978eb799da2609e3093f1d1939118c43b6bec6ffd12e3510fc->leave($__internal_4bdec7b7cf3ce1978eb799da2609e3093f1d1939118c43b6bec6ffd12e3510fc_prof);

    }

    // line 124
    public function block__oro_entity_config_config_field_type_widget($context, array $blocks = array())
    {
        $__internal_94f991a109f9ccdc5ccc410b5bb02d6bd60227b62b5b5c84c9b04cd1e73f752a = $this->env->getExtension("native_profiler");
        $__internal_94f991a109f9ccdc5ccc410b5bb02d6bd60227b62b5b5c84c9b04cd1e73f752a->enter($__internal_94f991a109f9ccdc5ccc410b5bb02d6bd60227b62b5b5c84c9b04cd1e73f752a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_oro_entity_config_config_field_type_widget"));

        // line 125
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 126
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["field"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_94f991a109f9ccdc5ccc410b5bb02d6bd60227b62b5b5c84c9b04cd1e73f752a->leave($__internal_94f991a109f9ccdc5ccc410b5bb02d6bd60227b62b5b5c84c9b04cd1e73f752a_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 126,  485 => 125,  479 => 124,  468 => 119,  465 => 118,  456 => 116,  452 => 115,  448 => 114,  445 => 113,  442 => 112,  439 => 111,  433 => 110,  424 => 106,  411 => 105,  409 => 104,  406 => 103,  403 => 102,  390 => 101,  387 => 100,  385 => 99,  383 => 98,  377 => 97,  369 => 94,  355 => 93,  337 => 91,  334 => 90,  327 => 87,  325 => 86,  320 => 85,  317 => 84,  299 => 83,  296 => 82,  290 => 81,  281 => 77,  272 => 74,  268 => 73,  265 => 72,  261 => 71,  256 => 70,  253 => 69,  250 => 68,  247 => 67,  241 => 66,  233 => 63,  228 => 60,  226 => 59,  225 => 58,  224 => 57,  223 => 56,  218 => 55,  212 => 53,  209 => 52,  206 => 51,  203 => 50,  197 => 49,  189 => 46,  186 => 45,  180 => 43,  174 => 41,  168 => 40,  165 => 39,  160 => 38,  157 => 37,  154 => 36,  152 => 35,  150 => 34,  144 => 33,  134 => 30,  131 => 29,  128 => 28,  125 => 27,  119 => 26,  109 => 23,  106 => 22,  103 => 21,  100 => 20,  94 => 19,  82 => 13,  78 => 12,  71 => 11,  65 => 8,  62 => 7,  60 => 6,  52 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }
}
