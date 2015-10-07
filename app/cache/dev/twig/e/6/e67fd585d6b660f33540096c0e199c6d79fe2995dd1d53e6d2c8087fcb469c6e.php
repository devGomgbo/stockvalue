<?php

/* OroEntityMergeBundle:Form:fields.html.twig */
class __TwigTemplate_e67fd585d6b660f33540096c0e199c6d79fe2995dd1d53e6d2c8087fcb469c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_merge_widget' => array($this, 'block_oro_entity_merge_widget'),
            'oro_entity_merge_javascript' => array($this, 'block_oro_entity_merge_javascript'),
            'oro_entity_merge_field_widget' => array($this, 'block_oro_entity_merge_field_widget'),
            'oro_entity_merge_choice_value_widget' => array($this, 'block_oro_entity_merge_choice_value_widget'),
            'oro_entity_merge_field_label' => array($this, 'block_oro_entity_merge_field_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d7e5acf90bc926a0342e496f5f121e68b91314a4e5a0bd3630965a6b7810620 = $this->env->getExtension("native_profiler");
        $__internal_1d7e5acf90bc926a0342e496f5f121e68b91314a4e5a0bd3630965a6b7810620->enter($__internal_1d7e5acf90bc926a0342e496f5f121e68b91314a4e5a0bd3630965a6b7810620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityMergeBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_entity_merge_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('oro_entity_merge_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('oro_entity_merge_field_widget', $context, $blocks);
        // line 80
        echo "
";
        // line 81
        $this->displayBlock('oro_entity_merge_choice_value_widget', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('oro_entity_merge_field_label', $context, $blocks);
        
        $__internal_1d7e5acf90bc926a0342e496f5f121e68b91314a4e5a0bd3630965a6b7810620->leave($__internal_1d7e5acf90bc926a0342e496f5f121e68b91314a4e5a0bd3630965a6b7810620_prof);

    }

    // line 1
    public function block_oro_entity_merge_widget($context, array $blocks = array())
    {
        $__internal_f8a80403431155c8dd82ae67b74e04db50eee427c9997a66cd84a22d64611217 = $this->env->getExtension("native_profiler");
        $__internal_f8a80403431155c8dd82ae67b74e04db50eee427c9997a66cd84a22d64611217->enter($__internal_f8a80403431155c8dd82ae67b74e04db50eee427c9997a66cd84a22d64611217_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_merge_widget"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
    <table class=\"table table-bordered entity-merge-table\">
        <thead>
        <tr class=\"default-field\">
            <td class=\"merge-first-column\" rowspan=\"2\">
                ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterEntity", array()), 'label');
        echo "
            </td>
            ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "masterEntity", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 10
            echo "                <td class=\"entity-merge-column\">
                    <div class=\"entity-merge-fields-blocks-wrapper\">
                        <label class=\"entity-merge-uppercase entity-merge-inline\">
                            ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), array("class" => "entity-merge-field-choice"))));
            echo "

                            <strong data-entity-key=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array()), "html", null, true);
            echo "\"
                                    data-entity-field-name=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "full_name", array()), "html", null, true);
            echo "\"
                                    class=\"merge-entity-representative\">
                                ";
            // line 18
            echo $this->env->getExtension('oro_entity_merge')->renderMergeEntityLabel($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), ($this->getAttribute($context["loop"], "index", array()) - 1));
            echo "
                            </strong>
                        </label>
                    </div>
                    <a class=\"entity-merge-select-all\" data-entity-key=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "html", null, true);
            echo "\"
                       href=\"javascript:void(0);\">
                        ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_merge.form.select_all"), "html", null, true);
            echo "
                    </a>
                </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tr>
        </thead>
        <tbody>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('oro_entity_merge')->sortMergeFields($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "fields", array()), "children", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 32
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
    <p>* ";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_merge.hint.other_related_entities"), "html", null, true);
        echo "</p>
";
        
        $__internal_f8a80403431155c8dd82ae67b74e04db50eee427c9997a66cd84a22d64611217->leave($__internal_f8a80403431155c8dd82ae67b74e04db50eee427c9997a66cd84a22d64611217_prof);

    }

    // line 39
    public function block_oro_entity_merge_javascript($context, array $blocks = array())
    {
        $__internal_47d2b7a55a1269318edb35b14a64f0100578bee3c32011ba0a8fe7a5ff4e8f81 = $this->env->getExtension("native_profiler");
        $__internal_47d2b7a55a1269318edb35b14a64f0100578bee3c32011ba0a8fe7a5ff4e8f81->enter($__internal_47d2b7a55a1269318edb35b14a64f0100578bee3c32011ba0a8fe7a5ff4e8f81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_merge_javascript"));

        // line 40
        echo "    <script type=\"text/javascript\">

        require(['oroentitymerge/js/merge-view'],
                /**
                 * @param {mergeView} mergeView
                 */
                function (mergeView) {

                    mergeView.init.call(mergeView);
                });
    </script>
";
        
        $__internal_47d2b7a55a1269318edb35b14a64f0100578bee3c32011ba0a8fe7a5ff4e8f81->leave($__internal_47d2b7a55a1269318edb35b14a64f0100578bee3c32011ba0a8fe7a5ff4e8f81_prof);

    }

    // line 53
    public function block_oro_entity_merge_field_widget($context, array $blocks = array())
    {
        $__internal_9f87f496d7abf2d5e315a4f2da3cc70f1af50f724eb442c3fc8ea8a1aacef796 = $this->env->getExtension("native_profiler");
        $__internal_9f87f496d7abf2d5e315a4f2da3cc70f1af50f724eb442c3fc8ea8a1aacef796->enter($__internal_9f87f496d7abf2d5e315a4f2da3cc70f1af50f724eb442c3fc8ea8a1aacef796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_merge_field_widget"));

        // line 54
        echo "    <tr>
        <td class=\"merge-first-column\">
            ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 57
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "children", array(), "any", false, true), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "choices", array(), "any", true, true)) {
            // line 58
            echo "                <div class=\"entity-merge-strategy-wrapper\">

                    <span class=\"entity-merge-inline entity-merge-strategy-label\">
                        ";
            // line 61
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "mode", array()), 'label');
            echo "
                    </span>

                    <div class=\"entity-merge-inline\">
                        ";
            // line 65
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "mode", array()), 'widget', array("attr" => array("class" => "entity-merge-small-select")));
            echo "
                    </div>
                </div>
            ";
        } else {
            // line 69
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "mode", array()), 'widget');
            echo "
            ";
        }
        // line 71
        echo "
        </td>
        ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "sourceEntity", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 74
            echo "            <td class=\"entity-merge-decision-container\">
                ";
            // line 75
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("entityOffset" => ($this->getAttribute($context["loop"], "index", array()) - 1)));
            echo "
            </td>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "    </tr>
";
        
        $__internal_9f87f496d7abf2d5e315a4f2da3cc70f1af50f724eb442c3fc8ea8a1aacef796->leave($__internal_9f87f496d7abf2d5e315a4f2da3cc70f1af50f724eb442c3fc8ea8a1aacef796_prof);

    }

    // line 81
    public function block_oro_entity_merge_choice_value_widget($context, array $blocks = array())
    {
        $__internal_20ce33a552896909d11d304e133b03d5e4fa310c53be7ecb7af15ca704b1a868 = $this->env->getExtension("native_profiler");
        $__internal_20ce33a552896909d11d304e133b03d5e4fa310c53be7ecb7af15ca704b1a868->enter($__internal_20ce33a552896909d11d304e133b03d5e4fa310c53be7ecb7af15ca704b1a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_merge_choice_value_widget"));

        // line 82
        echo "    <div class=\"entity-merge-fields-blocks-wrapper\">
        <div class=\"entity-merge-inline\">";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => twig_array_merge($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), array("class" => "entity-merge-field-choice"))));
        echo "</div>
        <label data-entity-key=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\" data-entity-field-name=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "\"
               class=\"entity-merge-inline-label merge-entity-representative\"
               for=\"";
        // line 86
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
            ";
        // line 87
        echo $this->env->getExtension('oro_entity_merge')->renderMergeFieldValue((isset($context["merge_field_data"]) ? $context["merge_field_data"] : $this->getContext($context, "merge_field_data")), (isset($context["merge_entity_offset"]) ? $context["merge_entity_offset"] : $this->getContext($context, "merge_entity_offset")));
        echo "
        </label>
    </div>
";
        
        $__internal_20ce33a552896909d11d304e133b03d5e4fa310c53be7ecb7af15ca704b1a868->leave($__internal_20ce33a552896909d11d304e133b03d5e4fa310c53be7ecb7af15ca704b1a868_prof);

    }

    // line 92
    public function block_oro_entity_merge_field_label($context, array $blocks = array())
    {
        $__internal_b612e132bcbcb858be36331bfb3c92bc8589b7da0bf2b2d962fe479e1adb9210 = $this->env->getExtension("native_profiler");
        $__internal_b612e132bcbcb858be36331bfb3c92bc8589b7da0bf2b2d962fe479e1adb9210->enter($__internal_b612e132bcbcb858be36331bfb3c92bc8589b7da0bf2b2d962fe479e1adb9210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_merge_field_label"));

        // line 93
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 94
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 95
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 96
                echo "        ";
            }
            // line 97
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 98
                echo "            ";
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                // line 99
                echo "        ";
            }
            // line 100
            echo "        <strong ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</strong>
    ";
        }
        
        $__internal_b612e132bcbcb858be36331bfb3c92bc8589b7da0bf2b2d962fe479e1adb9210->leave($__internal_b612e132bcbcb858be36331bfb3c92bc8589b7da0bf2b2d962fe479e1adb9210_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityMergeBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  360 => 100,  357 => 99,  354 => 98,  351 => 97,  348 => 96,  345 => 95,  342 => 94,  339 => 93,  333 => 92,  322 => 87,  305 => 86,  298 => 84,  294 => 83,  291 => 82,  285 => 81,  277 => 78,  260 => 75,  257 => 74,  240 => 73,  236 => 71,  230 => 69,  223 => 65,  216 => 61,  211 => 58,  209 => 57,  205 => 56,  201 => 54,  195 => 53,  177 => 40,  171 => 39,  162 => 36,  158 => 34,  149 => 32,  145 => 31,  140 => 28,  122 => 24,  117 => 22,  110 => 18,  105 => 16,  101 => 15,  96 => 13,  91 => 10,  74 => 9,  69 => 7,  60 => 2,  54 => 1,  47 => 92,  44 => 91,  42 => 81,  39 => 80,  37 => 53,  34 => 52,  32 => 39,  29 => 38,  27 => 1,);
    }
}
