<?php

/* OroFormBundle:Form:fields.html.twig */
class __TwigTemplate_49a4bab0a3d871cb5a9ce8ca08fde41f2343a448394502efe476e52ea077fea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Form:fields.html.twig", "OroFormBundle:Form:fields.html.twig", 1);
        $this->blocks = array(
            'genemu_jqueryselect2_widget' => array($this, 'block_genemu_jqueryselect2_widget'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
            'oro_ticker_symbol_widget' => array($this, 'block_oro_ticker_symbol_widget'),
            'oro_multiple_entity_widget' => array($this, 'block_oro_multiple_entity_widget'),
            'form_label' => array($this, 'block_form_label'),
            'oro_money_row' => array($this, 'block_oro_money_row'),
            'oro_money_widget' => array($this, 'block_oro_money_widget'),
            'percent_row' => array($this, 'block_percent_row'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'oro_date_widget' => array($this, 'block_oro_date_widget'),
            'oro_datetime_widget' => array($this, 'block_oro_datetime_widget'),
            'oro_collection_widget' => array($this, 'block_oro_collection_widget'),
            'oro_form_js_validation' => array($this, 'block_oro_form_js_validation'),
            'oro_entity_create_or_select_row' => array($this, 'block_oro_entity_create_or_select_row'),
            'oro_entity_create_or_select_widget' => array($this, 'block_oro_entity_create_or_select_widget'),
            'oro_entity_create_or_select_choice_widget' => array($this, 'block_oro_entity_create_or_select_choice_widget'),
            'oro_entity_create_or_select_inline_widget' => array($this, 'block_oro_entity_create_or_select_inline_widget'),
            'oro_link_type_widget' => array($this, 'block_oro_link_type_widget'),
            'oro_download_links_type_widget' => array($this, 'block_oro_download_links_type_widget'),
            'oro_simple_color_picker_row' => array($this, 'block_oro_simple_color_picker_row'),
            'oro_simple_color_picker_widget' => array($this, 'block_oro_simple_color_picker_widget'),
            'oro_simple_color_choice_widget' => array($this, 'block_oro_simple_color_choice_widget'),
            'oro_simple_color_choice_widget_options' => array($this, 'block_oro_simple_color_choice_widget_options'),
            'oro_color_table_row' => array($this, 'block_oro_color_table_row'),
            'oro_color_table_widget' => array($this, 'block_oro_color_table_widget'),
            'oro_resizeable_rich_text_widget' => array($this, 'block_oro_resizeable_rich_text_widget'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Form:fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_11dd44fbd5f1fdc0fd0633c7bbb613a205899f1aaf9864627787543ffeb2a25f = $this->env->getExtension("native_profiler");
        $__internal_11dd44fbd5f1fdc0fd0633c7bbb613a205899f1aaf9864627787543ffeb2a25f->enter($__internal_11dd44fbd5f1fdc0fd0633c7bbb613a205899f1aaf9864627787543ffeb2a25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroFormBundle:Form:fields.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11dd44fbd5f1fdc0fd0633c7bbb613a205899f1aaf9864627787543ffeb2a25f->leave($__internal_11dd44fbd5f1fdc0fd0633c7bbb613a205899f1aaf9864627787543ffeb2a25f_prof);

    }

    // line 3
    public function block_genemu_jqueryselect2_widget($context, array $blocks = array())
    {
        $__internal_fa23a44b11a1939a418cdc5f6eb90de53a98c2479e7b3cc30b43262dcd4dac25 = $this->env->getExtension("native_profiler");
        $__internal_fa23a44b11a1939a418cdc5f6eb90de53a98c2479e7b3cc30b43262dcd4dac25->enter($__internal_fa23a44b11a1939a418cdc5f6eb90de53a98c2479e7b3cc30b43262dcd4dac25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_widget"));

        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "grid", array(), "any", false, true), "name", array(), "any", true, true))) {
            // line 5
            echo "        ";
            $context["url"] = $this->env->getExtension('routing')->getPath("oro_datagrid_index", array("gridName" => $this->getAttribute($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "grid", array()), "name", array())));
            // line 6
            echo "    ";
        } elseif (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_name", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()))) {
            // line 7
            echo "        ";
            $context["url"] = $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "route_name", array()), (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "route_parameters", array()), array())) : (array())));
            // line 8
            echo "    ";
        } else {
            // line 9
            echo "        ";
            $context["url"] = "";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "placeholder", array(), "any", true, true)) {
            // line 12
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("placeholder" => $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "placeholder", array()))));
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "result_template_twig", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "result_template_twig", array()))) {
            // line 15
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("result_template" => twig_include($this->env, $context, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "result_template_twig", array()))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "selection_template_twig", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "selection_template_twig", array()))) {
            // line 18
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("selection_template" => twig_include($this->env, $context, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "selection_template_twig", array()))));
            // line 19
            echo "    ";
        }
        // line 20
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "component", array(), "any", true, true)) {
            // line 21
            echo "        ";
            $context["component"] = (("oro/select2-" . $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "component", array())) . "-component");
            // line 22
            echo "    ";
        } else {
            // line 23
            echo "        ";
            $context["component"] = "oro/select2-component";
            // line 24
            echo "    ";
        }
        // line 25
        echo "    ";
        if ( !array_key_exists("component_options", $context)) {
            // line 26
            echo "        ";
            $context["component_options"] = array();
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        $context["component_options"] = twig_array_merge((isset($context["component_options"]) ? $context["component_options"] : $this->getContext($context, "component_options")), array("configs" => (isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "url" => (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))));
        // line 29
        echo "    ";
        if (array_key_exists("excluded", $context)) {
            // line 30
            echo "        ";
            $context["component_options"] = twig_array_merge((isset($context["component_options"]) ? $context["component_options"] : $this->getContext($context, "component_options")), array("excluded" => (isset($context["excluded"]) ? $context["excluded"] : $this->getContext($context, "excluded"))));
            // line 31
            echo "    ";
        }
        // line 32
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "select2", "data-page-component-module" =>         // line 34
(isset($context["component"]) ? $context["component"] : $this->getContext($context, "component")), "data-page-component-options" => twig_jsonencode_filter(        // line 35
(isset($context["component_options"]) ? $context["component_options"] : $this->getContext($context, "component_options"))))));
        // line 36
        echo "
";
        
        $__internal_fa23a44b11a1939a418cdc5f6eb90de53a98c2479e7b3cc30b43262dcd4dac25->leave($__internal_fa23a44b11a1939a418cdc5f6eb90de53a98c2479e7b3cc30b43262dcd4dac25_prof);

    }

    // line 39
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        $__internal_be9b95f5fd7fa47f39b227366f2c7ee0ae5ab640f1187e90dba502a91fcb1e1e = $this->env->getExtension("native_profiler");
        $__internal_be9b95f5fd7fa47f39b227366f2c7ee0ae5ab640f1187e90dba502a91fcb1e1e->enter($__internal_be9b95f5fd7fa47f39b227366f2c7ee0ae5ab640f1187e90dba502a91fcb1e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript"));

        // line 40
        echo "    ";
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        
        $__internal_be9b95f5fd7fa47f39b227366f2c7ee0ae5ab640f1187e90dba502a91fcb1e1e->leave($__internal_be9b95f5fd7fa47f39b227366f2c7ee0ae5ab640f1187e90dba502a91fcb1e1e_prof);

    }

    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        $__internal_58fa28ad0b0c0faea75e4b1b4c4f2609016c4d34de29f69af190f8681ed05151 = $this->env->getExtension("native_profiler");
        $__internal_58fa28ad0b0c0faea75e4b1b4c4f2609016c4d34de29f69af190f8681ed05151->enter($__internal_58fa28ad0b0c0faea75e4b1b4c4f2609016c4d34de29f69af190f8681ed05151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript_prototype"));

        
        $__internal_58fa28ad0b0c0faea75e4b1b4c4f2609016c4d34de29f69af190f8681ed05151->leave($__internal_58fa28ad0b0c0faea75e4b1b4c4f2609016c4d34de29f69af190f8681ed05151_prof);

    }

    // line 43
    public function block_oro_ticker_symbol_widget($context, array $blocks = array())
    {
        $__internal_ef72497881eeccd60f588109099c2dcaf237f63aa6ef31cb0ed6a5e6a9a447f8 = $this->env->getExtension("native_profiler");
        $__internal_ef72497881eeccd60f588109099c2dcaf237f63aa6ef31cb0ed6a5e6a9a447f8->enter($__internal_ef72497881eeccd60f588109099c2dcaf237f63aa6ef31cb0ed6a5e6a9a447f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_ticker_symbol_widget"));

        // line 44
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'bootstrap'],
        function(\$){
            \$(function() {
                var cache = {};
                \$(\"#";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\").typeahead({
                    source: function (request, process) {
                        YAHOO = {
                            Finance: {
                                SymbolSuggest: {
                                    ssCallback: function (data) {
                                        var result = \$.map(data.ResultSet.Result, function (item) {
                                            return item.name + \" (\" + item.symbol + \")\";
                                        });
                                        \$.each(data.ResultSet.Result, function (itemKey, item) {
                                            cache[item.name + \" (\" + item.symbol + \")\"] = item.symbol;
                                        });
                                        process(result)
                                    }
                                }
                            }
                        };
                        \$.ajax({
                            type: \"GET\",
                            dataType: \"jsonp\",
                            jsonp: \"callback\",
                            jsonpCallback: \"YAHOO.Finance.SymbolSuggest.ssCallback\",
                            data: {
                                query: request
                            },
                            cache: true,
                            url: \"http://autoc.finance.yahoo.com/autoc\"
                        });
                    },
                    updater: function(item) {
                        if (typeof cache[item] != 'undefined') {
                            return cache[item];
                        } else {
                            return item;
                        }
                    }
                });
            });
        });
    </script>

    ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        
        $__internal_ef72497881eeccd60f588109099c2dcaf237f63aa6ef31cb0ed6a5e6a9a447f8->leave($__internal_ef72497881eeccd60f588109099c2dcaf237f63aa6ef31cb0ed6a5e6a9a447f8_prof);

    }

    // line 93
    public function block_oro_multiple_entity_widget($context, array $blocks = array())
    {
        $__internal_3535282e84af13863115133fe6072cfaae7232713c7f1bc1699ec37feaf07a16 = $this->env->getExtension("native_profiler");
        $__internal_3535282e84af13863115133fe6072cfaae7232713c7f1bc1699ec37feaf07a16->enter($__internal_3535282e84af13863115133fe6072cfaae7232713c7f1bc1699ec37feaf07a16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_multiple_entity_widget"));

        // line 94
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

    <div id=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-container\"></div>

    <script type=\"text/javascript\">
        require(['jquery',
            'oroform/js/multiple-entity', 'oroform/js/multiple-entity/collection', 'oroform/js/multiple-entity/model',
            'text!";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entities.html"), "html", null, true);
        echo "',
            'text!";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroform/js/multiple-entity/templates/multiple-entity.html"), "html", null, true);
        echo "'
        ],
        function(\$, MultipleEntity, MultipleEntityCollection, MultipleEntityModel, EntitiesTpl, EntityTpl) {
            ";
        // line 105
        $context["selectionUrl"] = null;
        // line 106
        echo "            ";
        $context["originalFieldId"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "data-ftid", array(), "array");
        // line 107
        echo "            ";
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "grid_url", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_url", array()))) {
            // line 108
            echo "                ";
            $context["selectionUrl"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_url", array());
            // line 109
            echo "            ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_url", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "selection_url", array()))) {
            // line 110
            echo "                ";
            $context["selectionUrl"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "selection_url", array());
            // line 111
            echo "            ";
        }
        // line 112
        echo "            ";
        $context["selectionRouteName"] = (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route", array()), null)) : (null));
        // line 113
        echo "            ";
        $context["selectionRouteParameters"] = (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route_parameters", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "selection_route_parameters", array()), array())) : (array()));
        // line 114
        echo "
            var widget = new MultipleEntity({
                el: '#";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-container',
                template: EntitiesTpl,
                elementTemplate: EntityTpl,
                addedElement: 'input[data-ftid=\"";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["originalFieldId"]) ? $context["originalFieldId"] : $this->getContext($context, "originalFieldId")), "html", null, true);
        echo "_added\"]',
                removedElement: 'input[data-ftid=\"";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["originalFieldId"]) ? $context["originalFieldId"] : $this->getContext($context, "originalFieldId")), "html", null, true);
        echo "_removed\"]',
                name: ";
        // line 121
        echo twig_jsonencode_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        echo ",
                defaultElement: ";
        // line 122
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "default_element", array()));
        echo ",
                selectionUrl: ";
        // line 123
        echo twig_jsonencode_filter((isset($context["selectionUrl"]) ? $context["selectionUrl"] : $this->getContext($context, "selectionUrl")));
        echo ",
                selectionRouteName: ";
        // line 124
        echo twig_jsonencode_filter((isset($context["selectionRouteName"]) ? $context["selectionRouteName"] : $this->getContext($context, "selectionRouteName")));
        echo ",
                selectionRouteParams: ";
        // line 125
        echo twig_jsonencode_filter((isset($context["selectionRouteParameters"]) ? $context["selectionRouteParameters"] : $this->getContext($context, "selectionRouteParameters")), twig_constant("JSON_FORCE_OBJECT"));
        echo ",
                allowAction: ";
        // line 126
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "allow_action", array()));
        echo ",
                collection: new MultipleEntityCollection(),
                selectorWindowTitle: ";
        // line 128
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "selector_window_title", array())));
        echo "
            });
            var data = [];
            ";
        // line 131
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["initial_elements"]) ? $context["initial_elements"] : $this->getContext($context, "initial_elements")));
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 132
            echo "                data.push(new MultipleEntityModel(";
            echo twig_jsonencode_filter($context["element"]);
            echo "));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "            widget.getCollection().reset(data);

            ";
        // line 136
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "extra_config", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "extra_config", array()))) {
            // line 137
            echo "                ";
            $this->displayBlock(("oro_multiple_entity_js_" . $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "extra_config", array())), $context, $blocks);
            echo "
            ";
        }
        // line 139
        echo "        });
    </script>
";
        
        $__internal_3535282e84af13863115133fe6072cfaae7232713c7f1bc1699ec37feaf07a16->leave($__internal_3535282e84af13863115133fe6072cfaae7232713c7f1bc1699ec37feaf07a16_prof);

    }

    // line 143
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_67e04d56efbefdfabc5ad2bc3cc1ac64e31e8baa518c0888fdd98f8f499b96cf = $this->env->getExtension("native_profiler");
        $__internal_67e04d56efbefdfabc5ad2bc3cc1ac64e31e8baa518c0888fdd98f8f499b96cf->enter($__internal_67e04d56efbefdfabc5ad2bc3cc1ac64e31e8baa518c0888fdd98f8f499b96cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 144
        echo "    ";
        ob_start();
        // line 145
        echo "    ";
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 146
            echo "        ";
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 147
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                // line 148
                echo "        ";
            }
            // line 149
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 150
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 151
                echo "        ";
            }
            // line 152
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
                // line 153
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " validation-error"))));
                // line 154
                echo "        ";
            }
            // line 155
            echo "        ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 156
                echo "            ";
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 157
                    $context["label"] = strtr((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                    // line 158
                    echo "            ";
                } else {
                    // line 159
                    echo "                ";
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                    // line 160
                    echo "            ";
                }
                // line 161
                echo "        ";
            }
            // line 162
            echo "        ";
            $context["isRadioLabel"] = ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "expanded", array()), false)) : (false)) && array_key_exists("checked", $context));
            // line 163
            echo "        ";
            if ((array_key_exists("tooltip", $context) && (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")))) {
                // line 164
                echo "            ";
                $context["ui"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroFormBundle:Form:fields.html.twig", 164);
                // line 165
                echo "            ";
                echo $context["ui"]->gettooltip(                // line 166
(isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), ((                // line 167
array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter((isset($context["tooltip_parameters"]) ? $context["tooltip_parameters"] : $this->getContext($context, "tooltip_parameters")), array())) : (array())), ((                // line 168
array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter((isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : $this->getContext($context, "tooltip_placement")), null)) : (null)), ((                // line 169
array_key_exists("tooltip_details_enabled", $context)) ? (_twig_default_filter((isset($context["tooltip_details_enabled"]) ? $context["tooltip_details_enabled"] : $this->getContext($context, "tooltip_details_enabled")), false)) : (false)), ((                // line 170
array_key_exists("tooltip_details_link", $context)) ? (_twig_default_filter((isset($context["tooltip_details_link"]) ? $context["tooltip_details_link"] : $this->getContext($context, "tooltip_details_link")), null)) : (null)), ((                // line 171
array_key_exists("tooltip_details_anchor", $context)) ? (_twig_default_filter((isset($context["tooltip_details_anchor"]) ? $context["tooltip_details_anchor"] : $this->getContext($context, "tooltip_details_anchor")), null)) : (null)));
            }
            // line 175
            echo "<label";
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
            // line 176
            if ((array_key_exists("translatable_label", $context) &&  !(isset($context["translatable_label"]) ? $context["translatable_label"] : $this->getContext($context, "translatable_label")))) {
                // line 177
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            } elseif ((            // line 178
array_key_exists("raw_label", $context) && (isset($context["raw_label"]) ? $context["raw_label"] : $this->getContext($context, "raw_label")))) {
                // line 179
                echo (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"));
            } else {
                // line 181
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            }
            // line 183
            echo "<em>";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) &&  !(isset($context["isRadioLabel"]) ? $context["isRadioLabel"] : $this->getContext($context, "isRadioLabel")))) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
            echo "</em>
        </label>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_67e04d56efbefdfabc5ad2bc3cc1ac64e31e8baa518c0888fdd98f8f499b96cf->leave($__internal_67e04d56efbefdfabc5ad2bc3cc1ac64e31e8baa518c0888fdd98f8f499b96cf_prof);

    }

    // line 189
    public function block_oro_money_row($context, array $blocks = array())
    {
        $__internal_3992fa21862ade06b67b31f68b5d8ce30acf196f0e6547c39456716b7a4e6434 = $this->env->getExtension("native_profiler");
        $__internal_3992fa21862ade06b67b31f68b5d8ce30acf196f0e6547c39456716b7a4e6434->enter($__internal_3992fa21862ade06b67b31f68b5d8ce30acf196f0e6547c39456716b7a4e6434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_money_row"));

        // line 190
        echo "    ";
        $context["label"] = ((($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) . " (") . (isset($context["currency_symbol"]) ? $context["currency_symbol"] : $this->getContext($context, "currency_symbol"))) . ")");
        // line 191
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row', array("type" => "text", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "translatable_label" => false));
        echo "
";
        
        $__internal_3992fa21862ade06b67b31f68b5d8ce30acf196f0e6547c39456716b7a4e6434->leave($__internal_3992fa21862ade06b67b31f68b5d8ce30acf196f0e6547c39456716b7a4e6434_prof);

    }

    // line 194
    public function block_oro_money_widget($context, array $blocks = array())
    {
        $__internal_ff51817bf0a968cccfe7eba2e22bc175f7937da74ab9b321fad592f2188d624d = $this->env->getExtension("native_profiler");
        $__internal_ff51817bf0a968cccfe7eba2e22bc175f7937da74ab9b321fad592f2188d624d->enter($__internal_ff51817bf0a968cccfe7eba2e22bc175f7937da74ab9b321fad592f2188d624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_money_widget"));

        // line 195
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 196
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_ff51817bf0a968cccfe7eba2e22bc175f7937da74ab9b321fad592f2188d624d->leave($__internal_ff51817bf0a968cccfe7eba2e22bc175f7937da74ab9b321fad592f2188d624d_prof);

    }

    // line 199
    public function block_percent_row($context, array $blocks = array())
    {
        $__internal_74fe7b7ec1348d6bc3b443bf3e94a055ed9e7d49bc9e7d887dfaedbdcccb5db9 = $this->env->getExtension("native_profiler");
        $__internal_74fe7b7ec1348d6bc3b443bf3e94a055ed9e7d49bc9e7d887dfaedbdcccb5db9->enter($__internal_74fe7b7ec1348d6bc3b443bf3e94a055ed9e7d49bc9e7d887dfaedbdcccb5db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_row"));

        // line 200
        echo "    ";
        $context["label"] = ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))) . " (%)");
        // line 201
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row', array("type" => "text", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "translatable_label" => false));
        echo "
";
        
        $__internal_74fe7b7ec1348d6bc3b443bf3e94a055ed9e7d49bc9e7d887dfaedbdcccb5db9->leave($__internal_74fe7b7ec1348d6bc3b443bf3e94a055ed9e7d49bc9e7d887dfaedbdcccb5db9_prof);

    }

    // line 204
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_21f1cc86c1b008afe606ae3e205685a33f19fc94e6e5396052d1c4b508b96900 = $this->env->getExtension("native_profiler");
        $__internal_21f1cc86c1b008afe606ae3e205685a33f19fc94e6e5396052d1c4b508b96900->enter($__internal_21f1cc86c1b008afe606ae3e205685a33f19fc94e6e5396052d1c4b508b96900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 205
        echo "    ";
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 206
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_21f1cc86c1b008afe606ae3e205685a33f19fc94e6e5396052d1c4b508b96900->leave($__internal_21f1cc86c1b008afe606ae3e205685a33f19fc94e6e5396052d1c4b508b96900_prof);

    }

    // line 209
    public function block_oro_date_widget($context, array $blocks = array())
    {
        $__internal_f11a8a25bc667923aaa7e5865724aa763be6a5bac75039c921325d0f188c4495 = $this->env->getExtension("native_profiler");
        $__internal_f11a8a25bc667923aaa7e5865724aa763be6a5bac75039c921325d0f188c4495->enter($__internal_f11a8a25bc667923aaa7e5865724aa763be6a5bac75039c921325d0f188c4495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_date_widget"));

        // line 210
        echo "    ";
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "data-validation", array(), "any", true, true)) {
            // line 211
            echo "        ";
            $context["dateValidation"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "data-validation", array(), "array");
            // line 212
            echo "    ";
        } else {
            // line 213
            echo "        ";
            $context["dateValidation"] = array("Date" => array());
            // line 214
            echo "
        ";
            // line 215
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 216
                echo "            ";
                $context["dateValidation"] = twig_array_merge((isset($context["dateValidation"]) ? $context["dateValidation"] : $this->getContext($context, "dateValidation")), array("NotBlank" => array("message" => "This value should not be blank.")));
                // line 217
                echo "        ";
            }
            // line 218
            echo "
        ";
            // line 219
            $context["dateValidation"] = twig_jsonencode_filter((isset($context["dateValidation"]) ? $context["dateValidation"] : $this->getContext($context, "dateValidation")));
            // line 220
            echo "    ";
        }
        // line 221
        echo "
    ";
        // line 222
        $context["options"] = array("view" => "oroui/js/app/views/datepicker/datepicker-view", "nativeMode" => $this->env->getExtension('mobile_extension')->isMobile(), "dateInputAttrs" => array("placeholder" => $this->env->getExtension('translator')->trans("oro.form.choose_date"), "id" => ("date_selector_" .         // line 227
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "name" => ("date_selector_" .         // line 228
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "data-validation" =>         // line 229
(isset($context["dateValidation"]) ? $context["dateValidation"] : $this->getContext($context, "dateValidation")), "class" => ("datepicker-input " . (($this->getAttribute(        // line 230
(isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array(), "array")) : ("")))), "datePickerOptions" => array("altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 236
array_key_exists("years", $context)) ? (_twig_default_filter((isset($context["years"]) ? $context["years"] : $this->getContext($context, "years")), "-80:+1")) : ("-80:+1")), "showButtonPanel" => true));
        // line 240
        echo "
    ";
        // line 241
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(        // line 243
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), twig_constant("JSON_FORCE_OBJECT"))));
        // line 245
        echo "
    ";
        // line 246
        $this->displayBlock("date_widget", $context, $blocks);
        echo "
";
        
        $__internal_f11a8a25bc667923aaa7e5865724aa763be6a5bac75039c921325d0f188c4495->leave($__internal_f11a8a25bc667923aaa7e5865724aa763be6a5bac75039c921325d0f188c4495_prof);

    }

    // line 249
    public function block_oro_datetime_widget($context, array $blocks = array())
    {
        $__internal_a797878fec4fe59042ce1825269fec5389b44bed9a42f336d23ecbc5ad5f7c08 = $this->env->getExtension("native_profiler");
        $__internal_a797878fec4fe59042ce1825269fec5389b44bed9a42f336d23ecbc5ad5f7c08->enter($__internal_a797878fec4fe59042ce1825269fec5389b44bed9a42f336d23ecbc5ad5f7c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_datetime_widget"));

        // line 250
        echo "    ";
        $context["dateValidation"] = array("Date" => array());
        // line 251
        echo "    ";
        $context["timeValidation"] = array("Time" => array());
        // line 252
        echo "
    ";
        // line 253
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            // line 254
            echo "        ";
            $context["dateValidation"] = twig_array_merge((isset($context["dateValidation"]) ? $context["dateValidation"] : $this->getContext($context, "dateValidation")), array("NotBlank" => array()));
            // line 255
            echo "        ";
            $context["timeValidation"] = twig_array_merge((isset($context["timeValidation"]) ? $context["timeValidation"] : $this->getContext($context, "timeValidation")), array("NotBlank" => array()));
            // line 256
            echo "    ";
        }
        // line 257
        echo "
    ";
        // line 258
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            // line 259
            echo "        ";
            $context["attrClass"] = $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array(), "array");
            // line 260
            echo "    ";
        } else {
            // line 261
            echo "        ";
            $context["attrClass"] = "";
            // line 262
            echo "    ";
        }
        // line 263
        echo "
    ";
        // line 264
        $context["options"] = array("view" => "oroui/js/app/views/datepicker/datetimepicker-view", "nativeMode" => $this->env->getExtension('mobile_extension')->isMobile(), "dateInputAttrs" => array("placeholder" => $this->env->getExtension('translator')->trans("oro.form.choose_date"), "id" => ("date_selector_" .         // line 269
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "name" => ("date_selector_" .         // line 270
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "class" => ("input-small datepicker-input " .         // line 271
(isset($context["attrClass"]) ? $context["attrClass"] : $this->getContext($context, "attrClass"))), "data-validation" => twig_jsonencode_filter(        // line 272
(isset($context["dateValidation"]) ? $context["dateValidation"] : $this->getContext($context, "dateValidation")))), "datePickerOptions" => array("altFormat" => "yy-mm-dd", "changeMonth" => true, "changeYear" => true, "yearRange" => ((        // line 278
array_key_exists("years", $context)) ? (_twig_default_filter((isset($context["years"]) ? $context["years"] : $this->getContext($context, "years")), "-80:+1")) : ("-80:+1")), "showButtonPanel" => true), "timeInputAttrs" => array("placeholder" => $this->env->getExtension('translator')->trans("oro.form.choose_time"), "id" => ("time_selector_" .         // line 283
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "name" => ("time_selector_" .         // line 284
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))), "class" => ("input-small timepicker-input " .         // line 285
(isset($context["attrClass"]) ? $context["attrClass"] : $this->getContext($context, "attrClass"))), "data-validation" => twig_jsonencode_filter(        // line 286
(isset($context["timeValidation"]) ? $context["timeValidation"] : $this->getContext($context, "timeValidation")))), "timePickerOptions" => array());
        // line 291
        echo "
    ";
        // line 292
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(        // line 294
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), twig_constant("JSON_FORCE_OBJECT"))));
        // line 296
        echo "
    ";
        // line 297
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
";
        
        $__internal_a797878fec4fe59042ce1825269fec5389b44bed9a42f336d23ecbc5ad5f7c08->leave($__internal_a797878fec4fe59042ce1825269fec5389b44bed9a42f336d23ecbc5ad5f7c08_prof);

    }

    // line 327
    public function block_oro_collection_widget($context, array $blocks = array())
    {
        $__internal_68c197b03e822b4eef03cdb4802b6e22b9d72193ed2444facd014a981d32b603 = $this->env->getExtension("native_profiler");
        $__internal_68c197b03e822b4eef03cdb4802b6e22b9d72193ed2444facd014a981d32b603->enter($__internal_68c197b03e822b4eef03cdb4802b6e22b9d72193ed2444facd014a981d32b603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_collection_widget"));

        // line 328
        echo "    ";
        ob_start();
        // line 329
        echo "        ";
        if (array_key_exists("prototype", $context)) {
            // line 330
            echo "            ";
            $context["prototype_html"] = $this->getAttribute($this, "oro_collection_item_prototype", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method");
            // line 331
            echo "        ";
        }
        // line 332
        echo "        ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " ")) : ("")) . "oro-item-collection collection-fields-list")));
        // line 333
        echo "        ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_collection");
        // line 334
        echo "        <div class=\"row-oro\">
            ";
        // line 335
        $context["prototype_name"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "prototype_name", array());
        // line 336
        echo "            <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " data-last-index=\"";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array())), "html", null, true);
        echo "\" data-prototype-name=\"";
        echo twig_escape_filter($this->env, (isset($context["prototype_name"]) ? $context["prototype_name"] : $this->getContext($context, "prototype_name")), "html", null, true);
        echo "\"";
        if (array_key_exists("prototype_html", $context)) {
            echo " data-prototype=\"";
            echo twig_escape_filter($this->env, (isset($context["prototype_html"]) ? $context["prototype_html"] : $this->getContext($context, "prototype_html")));
            echo "\"";
        }
        echo ">
                ";
        // line 337
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()))) {
            // line 338
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 339
                echo "                        ";
                echo $this->getAttribute($this, "oro_collection_item_prototype", array(0 => $context["child"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "                ";
        } elseif (((isset($context["show_form_when_empty"]) ? $context["show_form_when_empty"] : $this->getContext($context, "show_form_when_empty")) && array_key_exists("prototype_html", $context))) {
            // line 342
            echo "                    ";
            echo strtr((isset($context["prototype_html"]) ? $context["prototype_html"] : $this->getContext($context, "prototype_html")), array((isset($context["prototype_name"]) ? $context["prototype_name"] : $this->getContext($context, "prototype_name")) => "0"));
            echo "
                ";
        }
        // line 344
        echo "            </div>
            ";
        // line 345
        if ((isset($context["allow_add"]) ? $context["allow_add"] : $this->getContext($context, "allow_add"))) {
            // line 346
            echo "            <a class=\"btn add-list-item\" href=\"javascript: void(0);\"><i class=\"icon-plus\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "add_label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "add_label", array()), "oro.form.collection.add")) : ("oro.form.collection.add"))), "html", null, true);
            echo "</a>
            ";
        }
        // line 348
        echo "        </div>
        ";
        // line 349
        if (((isset($context["handle_primary"]) ? $context["handle_primary"] : $this->getContext($context, "handle_primary")) && ( !array_key_exists("prototype", $context) || $this->getAttribute((isset($context["prototype"]) ? $context["prototype"] : null), "primary", array(), "any", true, true)))) {
            // line 350
            echo "            ";
            echo $this->getAttribute($this, "oro_collection_validate_primary_js", array(0 => $context), "method");
            echo "
        ";
        }
        // line 352
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_68c197b03e822b4eef03cdb4802b6e22b9d72193ed2444facd014a981d32b603->leave($__internal_68c197b03e822b4eef03cdb4802b6e22b9d72193ed2444facd014a981d32b603_prof);

    }

    // line 376
    public function block_oro_form_js_validation($context, array $blocks = array())
    {
        $__internal_5b7c8938a6924d3459983928fa35abf8d3f815b4f7fe8ffe80447cbc376133f5 = $this->env->getExtension("native_profiler");
        $__internal_5b7c8938a6924d3459983928fa35abf8d3f815b4f7fe8ffe80447cbc376133f5->enter($__internal_5b7c8938a6924d3459983928fa35abf8d3f815b4f7fe8ffe80447cbc376133f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_form_js_validation"));

        // line 377
        echo "<script type=\"text/javascript\">
    require(['jquery', 'jquery.validate'],
    function (\$) {
        var options = ";
        // line 380
        echo (((isset($context["js_options"]) ? $context["js_options"] : $this->getContext($context, "js_options"))) ? (twig_jsonencode_filter((isset($context["js_options"]) ? $context["js_options"] : $this->getContext($context, "js_options")))) : ("{}"));
        echo ";
        \$('#";
        // line 381
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "').validate(options);
    });
</script>
";
        
        $__internal_5b7c8938a6924d3459983928fa35abf8d3f815b4f7fe8ffe80447cbc376133f5->leave($__internal_5b7c8938a6924d3459983928fa35abf8d3f815b4f7fe8ffe80447cbc376133f5_prof);

    }

    // line 386
    public function block_oro_entity_create_or_select_row($context, array $blocks = array())
    {
        $__internal_95a45dd66e3c0c91f7b6345e7fa9f31432c85b53714bb81b25643307e85b6264 = $this->env->getExtension("native_profiler");
        $__internal_95a45dd66e3c0c91f7b6345e7fa9f31432c85b53714bb81b25643307e85b6264->enter($__internal_95a45dd66e3c0c91f7b6345e7fa9f31432c85b53714bb81b25643307e85b6264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_row"));

        // line 387
        echo "    ";
        $context["currentMode"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), "create")) : ("create"));
        // line 388
        echo "    ";
        $context["viewsContainerId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "-container");
        // line 389
        echo "
    ";
        // line 390
        ob_start();
        // line 391
        echo "        <div class=\"control-group create-select-entity ";
        echo twig_escape_filter($this->env, (isset($context["currentMode"]) ? $context["currentMode"] : $this->getContext($context, "currentMode")), "html", null, true);
        echo "
            ";
        // line 392
        if ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()), "html", null, true);
        }
        echo "\"
            id=\"";
        // line 393
        echo twig_escape_filter($this->env, (isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : $this->getContext($context, "viewsContainerId")), "html", null, true);
        echo "\"
        >
            ";
        // line 395
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 396
            echo "                <div class=\"control-label wrap\">
                    ";
            // line 397
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("label_attr" => (isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr"))));
            echo "
                </div>
            ";
        }
        // line 400
        echo "            <div class=\"controls";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            echo " validation-error";
        }
        echo "\">
                ";
        // line 401
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                ";
        // line 402
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_95a45dd66e3c0c91f7b6345e7fa9f31432c85b53714bb81b25643307e85b6264->leave($__internal_95a45dd66e3c0c91f7b6345e7fa9f31432c85b53714bb81b25643307e85b6264_prof);

    }

    // line 408
    public function block_oro_entity_create_or_select_widget($context, array $blocks = array())
    {
        $__internal_0b1e378a9a9823c893a5c95a173da8c3ca5e8f0c2a7092e3190ae5bdd590e1ee = $this->env->getExtension("native_profiler");
        $__internal_0b1e378a9a9823c893a5c95a173da8c3ca5e8f0c2a7092e3190ae5bdd590e1ee->enter($__internal_0b1e378a9a9823c893a5c95a173da8c3ca5e8f0c2a7092e3190ae5bdd590e1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_widget"));

        // line 409
        echo "    ";
        $context["currentMode"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "mode", array(), "any", false, true), "vars", array(), "any", false, true), "value", array()), "create")) : ("create"));
        // line 410
        echo "    ";
        $context["btnGroupId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "-btn-group");
        // line 411
        echo "    ";
        $context["viewsContainerId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "-container");
        // line 412
        echo "    ";
        $context["gridWidgetAlias"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "-grid");
        // line 413
        echo "    ";
        $context["routeParametersElement"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "-route-parameters");
        // line 414
        echo "
    <div class=\"create-select-entity-container clearfix\">
        <div id=\"";
        // line 416
        echo twig_escape_filter($this->env, (isset($context["btnGroupId"]) ? $context["btnGroupId"] : $this->getContext($context, "btnGroupId")), "html", null, true);
        echo "\" class=\"buttons-container\">
            <a href=\"javascript:void(0)\" class=\"entity-select-btn\" title=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) || (isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span
                    data-label=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Existing"), "html", null, true);
        echo "\"
                    data-alt-label-view=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Another"), "html", null, true);
        echo "\"
                >
                    ";
        // line 422
        if (((isset($context["currentMode"]) ? $context["currentMode"] : $this->getContext($context, "currentMode")) == "view")) {
            // line 423
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Another"), "html", null, true);
            echo "
                    ";
        } else {
            // line 425
            echo "                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Choose Existing"), "html", null, true);
            echo "
                    ";
        }
        // line 427
        echo "                </span>
            </a>

            <a href=\"javascript:void(0)\" class=\"entity-create-btn\" title=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create New"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) || (isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Create New"), "html", null, true);
        echo "</span>
            </a>

            <a href=\"javascript:void(0)\" class=\"entity-cancel-btn\" title=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "\"";
        if (((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) || (isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
            echo " disabled=\"disabled\"";
        }
        echo ">
                <span>";
        // line 435
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</span>
            </a>
        </div>

        <div class=\"entity-create-block\"
            ";
        // line 440
        if ( !$this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "required", array())) {
            echo "data-validation-optional-group=\"\"";
        }
        // line 441
        echo "            ";
        if (((isset($context["currentMode"]) ? $context["currentMode"] : $this->getContext($context, "currentMode")) != "create")) {
            echo "data-validation-ignore=\"\"";
        }
        // line 442
        echo "        >
            ";
        // line 443
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new_entity", array()), 'widget');
        echo "
        </div>

        <div class=\"entity-select-block\">
            ";
        // line 447
        echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "block", "loadingElement" => (("#" .         // line 449
(isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : $this->getContext($context, "viewsContainerId"))) . " .create-select-entity-container"), "elementFirst" => (        // line 450
(isset($context["currentMode"]) ? $context["currentMode"] : $this->getContext($context, "currentMode")) == "grid"), "url" => $this->env->getExtension('routing')->getPath("oro_datagrid_widget", array("gridName" => $this->getAttribute($this->getAttribute(        // line 451
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_name", array()))), "alias" =>         // line 452
(isset($context["gridWidgetAlias"]) ? $context["gridWidgetAlias"] : $this->getContext($context, "gridWidgetAlias"))));
        // line 453
        echo "
        </div>

        <div class=\"entity-view-block ";
        // line 456
        if ((twig_length_filter($this->env, (isset($context["view_widgets"]) ? $context["view_widgets"] : $this->getContext($context, "view_widgets"))) > 1)) {
            echo "row-fluid row-fluid-divider";
        }
        echo "\">
            ";
        // line 457
        $context["allRouteParameters"] = array();
        // line 458
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["view_widgets"]) ? $context["view_widgets"] : $this->getContext($context, "view_widgets")));
        foreach ($context['_seq'] as $context["_key"] => $context["view_widget"]) {
            // line 459
            echo "                <div class=\"responsive-cell\">
                    ";
            // line 460
            $context["routeParameters"] = $this->getAttribute($context["view_widget"], "route_parameters", array());
            // line 461
            echo "                    ";
            $context["allRouteParameters"] = twig_array_merge((isset($context["allRouteParameters"]) ? $context["allRouteParameters"] : $this->getContext($context, "allRouteParameters")), array($this->getAttribute($context["view_widget"], "widget_alias", array()) => (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters"))));
            // line 462
            echo "                    ";
            echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "block", "loadingElement" => (("#" .             // line 464
(isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : $this->getContext($context, "viewsContainerId"))) . " .create-select-entity-container"), "elementFirst" => (            // line 465
(isset($context["currentMode"]) ? $context["currentMode"] : $this->getContext($context, "currentMode")) == "view"), "url" => (((            // line 466
(isset($context["currentMode"]) ? $context["currentMode"] : $this->getContext($context, "currentMode")) == "view")) ? ($this->env->getExtension('routing')->getPath($this->getAttribute($context["view_widget"], "route_name", array()), (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters")))) : (null)), "alias" => $this->getAttribute(            // line 467
$context["view_widget"], "widget_alias", array()), "title" => (($this->getAttribute(            // line 468
$context["view_widget"], "title", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["view_widget"], "title", array()))) : (null))));
            // line 469
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['view_widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 472
        echo "            <input type=\"hidden\"
               name=\"";
        // line 473
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) ? $context["routeParametersElement"] : $this->getContext($context, "routeParametersElement")), "html", null, true);
        echo "\"
               id=\"";
        // line 474
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) ? $context["routeParametersElement"] : $this->getContext($context, "routeParametersElement")), "html", null, true);
        echo "\"
               value=\"";
        // line 475
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["allRouteParameters"]) ? $context["allRouteParameters"] : $this->getContext($context, "allRouteParameters"))));
        echo "\"
            />
        </div>

        ";
        // line 479
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "existing_entity", array()), 'widget');
        echo "
        ";
        // line 480
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mode", array()), 'widget');
        echo "
    </div>
    <script type=\"text/javascript\">
        require(['jquery', 'oroform/js/create-select-type-handler'],
        function (\$, createSelectTypeHandler) {
            \$(function() {
                createSelectTypeHandler(
                    '#";
        // line 487
        echo twig_escape_filter($this->env, (isset($context["btnGroupId"]) ? $context["btnGroupId"] : $this->getContext($context, "btnGroupId")), "html", null, true);
        echo "',
                    '#";
        // line 488
        echo twig_escape_filter($this->env, (isset($context["viewsContainerId"]) ? $context["viewsContainerId"] : $this->getContext($context, "viewsContainerId")), "html", null, true);
        echo "',
                    '#";
        // line 489
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mode", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    '#";
        // line 490
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "existing_entity", array()), "vars", array()), "id", array()), "html", null, true);
        echo "',
                    '#";
        // line 491
        echo twig_escape_filter($this->env, (isset($context["routeParametersElement"]) ? $context["routeParametersElement"] : $this->getContext($context, "routeParametersElement")), "html", null, true);
        echo "',
                    ";
        // line 492
        echo twig_jsonencode_filter((isset($context["gridWidgetAlias"]) ? $context["gridWidgetAlias"] : $this->getContext($context, "gridWidgetAlias")));
        echo ",
                    ";
        // line 493
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "view_widgets", array()));
        echo ",
                    ";
        // line 494
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "existing_entity_grid_id", array()));
        echo ",
                    ";
        // line 495
        echo twig_jsonencode_filter((isset($context["currentMode"]) ? $context["currentMode"] : $this->getContext($context, "currentMode")));
        echo ",
                    ";
        // line 496
        echo twig_jsonencode_filter((isset($context["allRouteParameters"]) ? $context["allRouteParameters"] : $this->getContext($context, "allRouteParameters")));
        echo "
                );
            });
        });
    </script>
";
        
        $__internal_0b1e378a9a9823c893a5c95a173da8c3ca5e8f0c2a7092e3190ae5bdd590e1ee->leave($__internal_0b1e378a9a9823c893a5c95a173da8c3ca5e8f0c2a7092e3190ae5bdd590e1ee_prof);

    }

    // line 503
    public function block_oro_entity_create_or_select_choice_widget($context, array $blocks = array())
    {
        $__internal_848bce2a7bfb2d9606877c024f24a66a538aad8bf84618c6cbca8d72c407a6a0 = $this->env->getExtension("native_profiler");
        $__internal_848bce2a7bfb2d9606877c024f24a66a538aad8bf84618c6cbca8d72c407a6a0->enter($__internal_848bce2a7bfb2d9606877c024f24a66a538aad8bf84618c6cbca8d72c407a6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_choice_widget"));

        // line 504
        echo "    <div class=\"create-select-entity-choice-container\"
         data-page-component-module=\"oroform/js/app/components/create-or-select-choice-component\"
         data-page-component-options=\"";
        // line 506
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("modeSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 507
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mode", array()), "vars", array()), "id", array())), "newEntitySelector" => ".new-entity", "existingEntitySelector" => ".existing-entity", "existingEntityInputSelector" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute(        // line 510
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "existing_entity", array()), "vars", array()), "id", array())))), "html", null, true);
        // line 511
        echo "\">
        <div class=\"existing-entity\">
            ";
        // line 513
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "existing_entity", array()), 'widget');
        echo "
        </div>
        <div class=\"new-entity\">
            ";
        // line 516
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "new_entity", array()), 'widget');
        echo "
        </div>
        ";
        // line 518
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mode", array()), 'widget');
        echo "
    </div>
";
        
        $__internal_848bce2a7bfb2d9606877c024f24a66a538aad8bf84618c6cbca8d72c407a6a0->leave($__internal_848bce2a7bfb2d9606877c024f24a66a538aad8bf84618c6cbca8d72c407a6a0_prof);

    }

    // line 522
    public function block_oro_entity_create_or_select_inline_widget($context, array $blocks = array())
    {
        $__internal_829681a4308c3f470dc7f6204f52bef6dcdcb8e7c1b481ae1a90756e5618cc4d = $this->env->getExtension("native_profiler");
        $__internal_829681a4308c3f470dc7f6204f52bef6dcdcb8e7c1b481ae1a90756e5618cc4d->enter($__internal_829681a4308c3f470dc7f6204f52bef6dcdcb8e7c1b481ae1a90756e5618cc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_create_or_select_inline_widget"));

        // line 523
        echo "    ";
        $context["isButtonsEnabled"] = ( !(isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled")) &&  !(isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")));
        // line 524
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "-el\"
        ";
        // line 525
        if ((isset($context["isButtonsEnabled"]) ? $context["isButtonsEnabled"] : $this->getContext($context, "isButtonsEnabled"))) {
            echo "class=\"entity-create-or-select-container ";
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "create_enabled", array())) {
                echo "entity-create-enabled";
            }
            echo "\"";
        }
        echo ">
        <div ";
        // line 526
        if ((isset($context["isButtonsEnabled"]) ? $context["isButtonsEnabled"] : $this->getContext($context, "isButtonsEnabled"))) {
            echo "class=\"input-append\"";
        }
        echo ">
            ";
        // line 527
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

            ";
        // line 529
        if ((isset($context["isButtonsEnabled"]) ? $context["isButtonsEnabled"] : $this->getContext($context, "isButtonsEnabled"))) {
            // line 530
            echo "                <button class=\"add-on btn entity-select-btn\"><i class=\"icon-bars\"></i></button>

                ";
            // line 532
            if ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "create_enabled", array())) {
                // line 533
                echo "                    <button class=\"btn entity-create-btn\"><i class=\"icon-plus\"></i></button>
                ";
            }
            // line 535
            echo "            ";
        }
        // line 536
        echo "        </div>
    </div>

    ";
        // line 539
        $context["_block"] = false;
        // line 540
        echo "    ";
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "extra_config", array(), "any", true, true) && $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "extra_config", array()))) {
            // line 541
            echo "        ";
            $context["_block"] = $this->renderBlock(("oro_entity_create_or_select_inline_js_" . $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "extra_config", array())), $context, $blocks);
            // line 542
            echo "    ";
        }
        // line 543
        echo "    ";
        if ( !twig_test_empty((isset($context["_block"]) ? $context["_block"] : $this->getContext($context, "_block")))) {
            // line 544
            echo "        ";
            echo (isset($context["_block"]) ? $context["_block"] : $this->getContext($context, "_block"));
            echo "
    ";
        } else {
            // line 546
            echo "        <script type=\"text/javascript\">
            require(['jquery', 'oroform/js/select-create-inline-type-handler'],
            function (\$, handler) {
                \$(function() {
                    ";
            // line 550
            $context["urlParts"] = array("grid" => array("route" => "oro_datagrid_widget", "parameters" => array("gridName" => $this->getAttribute($this->getAttribute(            // line 554
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_name", array()), "params" => $this->getAttribute($this->getAttribute(            // line 555
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_parameters", array()), "renderParams" => $this->getAttribute($this->getAttribute(            // line 556
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "grid_render_parameters", array()))));
            // line 560
            echo "
                    ";
            // line 561
            if (((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)) === true)) {
                // line 562
                echo "                        ";
                $context["urlParts"] = twig_array_merge((isset($context["urlParts"]) ? $context["urlParts"] : $this->getContext($context, "urlParts")), array("create" => array("route" => $this->getAttribute($this->getAttribute(                // line 564
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "create_form_route", array()), "parameters" => $this->getAttribute($this->getAttribute(                // line 565
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "create_form_route_parameters", array()))));
                // line 568
                echo "                    ";
            }
            // line 569
            echo "
                    handler(
                        \$('#";
            // line 571
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "-el'),
                        \$('#";
            // line 572
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "'),
                        ";
            // line 573
            echo twig_jsonencode_filter($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            echo ",
                        ";
            // line 574
            echo twig_jsonencode_filter((isset($context["urlParts"]) ? $context["urlParts"] : $this->getContext($context, "urlParts")), twig_constant("JSON_FORCE_OBJECT"));
            echo ",
                        ";
            // line 575
            echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "existing_entity_grid_id", array()), "id")) : ("id")));
            echo ",
                        ";
            // line 576
            echo twig_jsonencode_filter((($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "create_enabled", array()), false)) : (false)));
            echo "
                    );
                });
            });
        </script>
    ";
        }
        
        $__internal_829681a4308c3f470dc7f6204f52bef6dcdcb8e7c1b481ae1a90756e5618cc4d->leave($__internal_829681a4308c3f470dc7f6204f52bef6dcdcb8e7c1b481ae1a90756e5618cc4d_prof);

    }

    // line 584
    public function block_oro_link_type_widget($context, array $blocks = array())
    {
        $__internal_a52d5ac9a62b2624809d38380afe81e24ddca6da102eb0ffbb94c8659cfcf372 = $this->env->getExtension("native_profiler");
        $__internal_a52d5ac9a62b2624809d38380afe81e24ddca6da102eb0ffbb94c8659cfcf372->enter($__internal_a52d5ac9a62b2624809d38380afe81e24ddca6da102eb0ffbb94c8659cfcf372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_link_type_widget"));

        // line 585
        echo "    ";
        if (((isset($context["isPath"]) ? $context["isPath"] : $this->getContext($context, "isPath")) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted((isset($context["acl"]) ? $context["acl"] : $this->getContext($context, "acl"))))) {
            echo " ";
            // line 586
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, (((isset($context["isPath"]) ? $context["isPath"] : $this->getContext($context, "isPath"))) ? ((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route"))) : ($this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters"))))), "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : ("")), "html", null, true);
            echo "\" style=\"display: block; margin-top: 5px;\">
            ";
            // line 587
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title"))), "html", null, true);
            echo "
        </a>
    ";
        }
        
        $__internal_a52d5ac9a62b2624809d38380afe81e24ddca6da102eb0ffbb94c8659cfcf372->leave($__internal_a52d5ac9a62b2624809d38380afe81e24ddca6da102eb0ffbb94c8659cfcf372_prof);

    }

    // line 592
    public function block_oro_download_links_type_widget($context, array $blocks = array())
    {
        $__internal_2704634888b7b37cb7ffd24037358273974ff374f11409c389de3a83a547ca0a = $this->env->getExtension("native_profiler");
        $__internal_2704634888b7b37cb7ffd24037358273974ff374f11409c389de3a83a547ca0a->enter($__internal_2704634888b7b37cb7ffd24037358273974ff374f11409c389de3a83a547ca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_download_links_type_widget"));

        // line 593
        echo "    ";
        ob_start();
        // line 594
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        foreach ($context['_seq'] as $context["fileName"] => $context["route"]) {
            // line 595
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $context["route"], "html", null, true);
            echo "\" class=\"";
            echo twig_escape_filter($this->env, (((array_key_exists("class", $context) && (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) ? ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) : ("")), "html", null, true);
            echo "\" style=\"display: block; margin-top: 5px;\">
                ";
            // line 596
            echo twig_escape_filter($this->env, $context["fileName"], "html", null, true);
            echo "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['fileName'], $context['route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 599
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2704634888b7b37cb7ffd24037358273974ff374f11409c389de3a83a547ca0a->leave($__internal_2704634888b7b37cb7ffd24037358273974ff374f11409c389de3a83a547ca0a_prof);

    }

    // line 602
    public function block_oro_simple_color_picker_row($context, array $blocks = array())
    {
        $__internal_83ec45e1b1fbe7acc8ae6124bb2ef64486577a26e759a452430f0348d683c056 = $this->env->getExtension("native_profiler");
        $__internal_83ec45e1b1fbe7acc8ae6124bb2ef64486577a26e759a452430f0348d683c056->enter($__internal_83ec45e1b1fbe7acc8ae6124bb2ef64486577a26e759a452430f0348d683c056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_simple_color_picker_row"));

        // line 603
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_83ec45e1b1fbe7acc8ae6124bb2ef64486577a26e759a452430f0348d683c056->leave($__internal_83ec45e1b1fbe7acc8ae6124bb2ef64486577a26e759a452430f0348d683c056_prof);

    }

    // line 606
    public function block_oro_simple_color_picker_widget($context, array $blocks = array())
    {
        $__internal_a3db62407a55b50b8f50f05fe565cfc973c1d0bc43259d36ccb04de8c017d992 = $this->env->getExtension("native_profiler");
        $__internal_a3db62407a55b50b8f50f05fe565cfc973c1d0bc43259d36ccb04de8c017d992->enter($__internal_a3db62407a55b50b8f50f05fe565cfc973c1d0bc43259d36ccb04de8c017d992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_simple_color_picker_widget"));

        // line 607
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/simple-color-picker-view"),         // line 609
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs"))))),         // line 610
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        // line 611
        echo "    ";
        $context["type"] = "hidden";
        // line 612
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_a3db62407a55b50b8f50f05fe565cfc973c1d0bc43259d36ccb04de8c017d992->leave($__internal_a3db62407a55b50b8f50f05fe565cfc973c1d0bc43259d36ccb04de8c017d992_prof);

    }

    // line 615
    public function block_oro_simple_color_choice_widget($context, array $blocks = array())
    {
        $__internal_9eb24ae4c820c2151eb794a659230124d5b1aee7c7ef179a3fad8ce0476dc63e = $this->env->getExtension("native_profiler");
        $__internal_9eb24ae4c820c2151eb794a659230124d5b1aee7c7ef179a3fad8ce0476dc63e->enter($__internal_9eb24ae4c820c2151eb794a659230124d5b1aee7c7ef179a3fad8ce0476dc63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_simple_color_choice_widget"));

        // line 616
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/simple-color-choice-view"),         // line 618
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs"))))),         // line 619
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        // line 620
        echo "    ";
        if (((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) &&  !(isset($context["empty_value_in_choices"]) ? $context["empty_value_in_choices"] : $this->getContext($context, "empty_value_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 621
            $context["required"] = false;
        }
        // line 623
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">
        ";
        // line 624
        if ((isset($context["allow_empty_color"]) ? $context["allow_empty_color"] : $this->getContext($context, "allow_empty_color"))) {
            // line 625
            echo "<option value=\"\" class=\"empty-color\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
            echo "</option>
            <optgroup label=\"---\"></optgroup>";
        }
        // line 628
        echo "        ";
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 629
        $this->displayBlock("oro_simple_color_choice_widget_options", $context, $blocks);
        // line 630
        echo "</select>
";
        
        $__internal_9eb24ae4c820c2151eb794a659230124d5b1aee7c7ef179a3fad8ce0476dc63e->leave($__internal_9eb24ae4c820c2151eb794a659230124d5b1aee7c7ef179a3fad8ce0476dc63e_prof);

    }

    // line 633
    public function block_oro_simple_color_choice_widget_options($context, array $blocks = array())
    {
        $__internal_e488e3248558d5945f67d98cc569c450e5a5064a5dc2777db7c864ffd14398de = $this->env->getExtension("native_profiler");
        $__internal_e488e3248558d5945f67d98cc569c450e5a5064a5dc2777db7c864ffd14398de->enter($__internal_e488e3248558d5945f67d98cc569c450e5a5064a5dc2777db7c864ffd14398de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_simple_color_choice_widget_options"));

        // line 634
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 635
            if (twig_test_iterable($context["choice"])) {
                // line 636
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, $context["group_label"], "html", null, true);
                echo "\"></optgroup>";
            } else {
                // line 638
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, (((isset($context["translatable"]) ? $context["translatable"] : $this->getContext($context, "translatable"))) ? ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ($this->getAttribute($context["choice"], "label", array()))), "html", null, true);
                echo "</option>";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e488e3248558d5945f67d98cc569c450e5a5064a5dc2777db7c864ffd14398de->leave($__internal_e488e3248558d5945f67d98cc569c450e5a5064a5dc2777db7c864ffd14398de_prof);

    }

    // line 643
    public function block_oro_color_table_row($context, array $blocks = array())
    {
        $__internal_7a5b46fbb0f923510490e03e481aa8651de85652fcececa999634df48141f868 = $this->env->getExtension("native_profiler");
        $__internal_7a5b46fbb0f923510490e03e481aa8651de85652fcececa999634df48141f868->enter($__internal_7a5b46fbb0f923510490e03e481aa8651de85652fcececa999634df48141f868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_color_table_row"));

        // line 644
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_7a5b46fbb0f923510490e03e481aa8651de85652fcececa999634df48141f868->leave($__internal_7a5b46fbb0f923510490e03e481aa8651de85652fcececa999634df48141f868_prof);

    }

    // line 647
    public function block_oro_color_table_widget($context, array $blocks = array())
    {
        $__internal_9683e5191684f1ef7b95afd225fdc22f090f492c2fe275484ffff7cd8b2d7897 = $this->env->getExtension("native_profiler");
        $__internal_9683e5191684f1ef7b95afd225fdc22f090f492c2fe275484ffff7cd8b2d7897->enter($__internal_9683e5191684f1ef7b95afd225fdc22f090f492c2fe275484ffff7cd8b2d7897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_color_table_widget"));

        // line 648
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-page-component-module" => "oroui/js/app/components/view-component", "data-page-component-options" => twig_jsonencode_filter(twig_array_merge(array("view" => "oroform/js/app/views/color-table-view"),         // line 650
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs"))))),         // line 651
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        // line 652
        echo "    ";
        $context["type"] = "hidden";
        // line 653
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_9683e5191684f1ef7b95afd225fdc22f090f492c2fe275484ffff7cd8b2d7897->leave($__internal_9683e5191684f1ef7b95afd225fdc22f090f492c2fe275484ffff7cd8b2d7897_prof);

    }

    // line 656
    public function block_oro_resizeable_rich_text_widget($context, array $blocks = array())
    {
        $__internal_c90df06ddee1269977cfdf6e22514a93b0d2b8c4fc65ace656488e914828bf4f = $this->env->getExtension("native_profiler");
        $__internal_c90df06ddee1269977cfdf6e22514a93b0d2b8c4fc65ace656488e914828bf4f->enter($__internal_c90df06ddee1269977cfdf6e22514a93b0d2b8c4fc65ace656488e914828bf4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_resizeable_rich_text_widget"));

        // line 657
        echo "    ";
        $context["options"] = array("view" => "oroform/js/app/views/wysiwig-editor/wysiwyg-dialog-view", "editorComponentName" => (($this->getAttribute($this->getAttribute($this->getAttribute(        // line 659
(isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-page-component-name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 660
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), "data-page-component-name", array(), "array")) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), "data-ftid", array(), "array"))));
        // line 662
        echo "
    <div data-page-component-module=\"oroui/js/app/components/view-component\"
         data-page-component-name=\"wrap_";
        // line 664
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "data-page-component-name", array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute($this->getAttribute(        // line 665
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), "data-page-component-name", array(), "array")) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "attr", array()), "data-ftid", array(), "array"))), "html", null, true);
        echo "\"
         data-page-component-options=\"";
        // line 666
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
        echo "\"
         data-layout=\"separate\" >
        ";
        // line 668
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    </div>
";
        
        $__internal_c90df06ddee1269977cfdf6e22514a93b0d2b8c4fc65ace656488e914828bf4f->leave($__internal_c90df06ddee1269977cfdf6e22514a93b0d2b8c4fc65ace656488e914828bf4f_prof);

    }

    // line 300
    public function getoro_collection_item_prototype($__widget__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aaada618106411c6146e366888ac2f61371b7d717abc38c60198186c106ac8e1 = $this->env->getExtension("native_profiler");
            $__internal_aaada618106411c6146e366888ac2f61371b7d717abc38c60198186c106ac8e1->enter($__internal_aaada618106411c6146e366888ac2f61371b7d717abc38c60198186c106ac8e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "oro_collection_item_prototype"));

            // line 301
            echo "    ";
            if (twig_in_filter("collection", $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "block_prefixes", array()))) {
                // line 302
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array());
                // line 303
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 304
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "disabled", array());
                // line 305
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "allow_delete", array());
                // line 306
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "allow_add_after", array());
                // line 307
                echo "    ";
            } else {
                // line 308
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                // line 309
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "full_name", array());
                // line 310
                echo "        ";
                $context["disabled"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "parent", array()), "vars", array()), "disabled", array());
                // line 311
                echo "        ";
                $context["allow_delete"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "parent", array()), "vars", array()), "allow_delete", array());
                // line 312
                echo "        ";
                $context["allow_add_after"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "parent", array()), "vars", array()), "allow_add_after", array());
                // line 313
                echo "    ";
            }
            // line 314
            echo "    <div data-content=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" data-validation-optional-group>
        <div class=\"row-oro oro-multiselect-holder";
            // line 315
            if ( !(isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
                echo " not-removable";
            }
            echo "\">
            ";
            // line 316
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))));
            echo "
            ";
            // line 317
            if ((isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete"))) {
                // line 318
                echo "            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\">×</button>
            ";
            }
            // line 320
            echo "            ";
            if ((isset($context["allow_add_after"]) ? $context["allow_add_after"] : $this->getContext($context, "allow_add_after"))) {
                // line 321
                echo "            <button class=\"addAfterRow btn btn-action btn-link\" type=\"button\" data-related=\"";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "\">+</button>
            ";
            }
            // line 323
            echo "        </div>
    </div>
";
            
            $__internal_aaada618106411c6146e366888ac2f61371b7d717abc38c60198186c106ac8e1->leave($__internal_aaada618106411c6146e366888ac2f61371b7d717abc38c60198186c106ac8e1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 355
    public function getoro_collection_validate_primary_js($__context__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_082e2d6083809dadd388252694c687053eb5f0ffb704510a669ff74a2187b4be = $this->env->getExtension("native_profiler");
            $__internal_082e2d6083809dadd388252694c687053eb5f0ffb704510a669ff74a2187b4be->enter($__internal_082e2d6083809dadd388252694c687053eb5f0ffb704510a669ff74a2187b4be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "oro_collection_validate_primary_js"));

            // line 356
            echo "    <script type=\"text/javascript\">
        require(['jquery'],
        function(\$){
            \$(function() {
                var container = \$('#";
            // line 360
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "id", array()), "html", null, true);
            echo "');
                /**
                 * Allow only 1 primary checkbox to be checked.
                 * This logic convert checkbox logic to logic used in radiobutton
                 */
                container.on('click', '[name\$=\"[primary]\"]', function() {
                    container.find('[name\$=\"[primary]\"]').each(function (idx, el) {
                        el.checked = false;
                    });
                    this.checked = true;
                });
            });
        });
    </script>
";
            
            $__internal_082e2d6083809dadd388252694c687053eb5f0ffb704510a669ff74a2187b4be->leave($__internal_082e2d6083809dadd388252694c687053eb5f0ffb704510a669ff74a2187b4be_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroFormBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1734 => 360,  1728 => 356,  1713 => 355,  1697 => 323,  1691 => 321,  1688 => 320,  1682 => 318,  1680 => 317,  1676 => 316,  1670 => 315,  1665 => 314,  1662 => 313,  1659 => 312,  1656 => 311,  1653 => 310,  1650 => 309,  1647 => 308,  1644 => 307,  1641 => 306,  1638 => 305,  1635 => 304,  1632 => 303,  1629 => 302,  1626 => 301,  1611 => 300,  1601 => 668,  1596 => 666,  1592 => 665,  1591 => 664,  1587 => 662,  1585 => 660,  1584 => 659,  1582 => 657,  1576 => 656,  1566 => 653,  1563 => 652,  1561 => 651,  1560 => 650,  1558 => 648,  1552 => 647,  1542 => 644,  1536 => 643,  1516 => 638,  1511 => 636,  1509 => 635,  1504 => 634,  1498 => 633,  1490 => 630,  1488 => 629,  1485 => 628,  1475 => 625,  1473 => 624,  1465 => 623,  1462 => 621,  1459 => 620,  1457 => 619,  1456 => 618,  1454 => 616,  1448 => 615,  1438 => 612,  1435 => 611,  1433 => 610,  1432 => 609,  1430 => 607,  1424 => 606,  1414 => 603,  1408 => 602,  1400 => 599,  1391 => 596,  1384 => 595,  1379 => 594,  1376 => 593,  1370 => 592,  1359 => 587,  1352 => 586,  1348 => 585,  1342 => 584,  1328 => 576,  1324 => 575,  1320 => 574,  1316 => 573,  1312 => 572,  1308 => 571,  1304 => 569,  1301 => 568,  1299 => 565,  1298 => 564,  1296 => 562,  1294 => 561,  1291 => 560,  1289 => 556,  1288 => 555,  1287 => 554,  1286 => 550,  1280 => 546,  1274 => 544,  1271 => 543,  1268 => 542,  1265 => 541,  1262 => 540,  1260 => 539,  1255 => 536,  1252 => 535,  1248 => 533,  1246 => 532,  1242 => 530,  1240 => 529,  1235 => 527,  1229 => 526,  1219 => 525,  1214 => 524,  1211 => 523,  1205 => 522,  1195 => 518,  1190 => 516,  1184 => 513,  1180 => 511,  1178 => 510,  1177 => 507,  1176 => 506,  1172 => 504,  1166 => 503,  1153 => 496,  1149 => 495,  1145 => 494,  1141 => 493,  1137 => 492,  1133 => 491,  1129 => 490,  1125 => 489,  1121 => 488,  1117 => 487,  1107 => 480,  1103 => 479,  1096 => 475,  1092 => 474,  1088 => 473,  1085 => 472,  1077 => 469,  1075 => 468,  1074 => 467,  1073 => 466,  1072 => 465,  1071 => 464,  1069 => 462,  1066 => 461,  1064 => 460,  1061 => 459,  1056 => 458,  1054 => 457,  1048 => 456,  1043 => 453,  1041 => 452,  1040 => 451,  1039 => 450,  1038 => 449,  1037 => 447,  1030 => 443,  1027 => 442,  1022 => 441,  1018 => 440,  1010 => 435,  1002 => 434,  996 => 431,  988 => 430,  983 => 427,  977 => 425,  971 => 423,  969 => 422,  964 => 420,  960 => 419,  951 => 417,  947 => 416,  943 => 414,  940 => 413,  937 => 412,  934 => 411,  931 => 410,  928 => 409,  922 => 408,  910 => 402,  906 => 401,  899 => 400,  893 => 397,  890 => 396,  888 => 395,  883 => 393,  876 => 392,  871 => 391,  869 => 390,  866 => 389,  863 => 388,  860 => 387,  854 => 386,  843 => 381,  839 => 380,  834 => 377,  828 => 376,  820 => 352,  814 => 350,  812 => 349,  809 => 348,  803 => 346,  801 => 345,  798 => 344,  792 => 342,  789 => 341,  780 => 339,  775 => 338,  773 => 337,  758 => 336,  756 => 335,  753 => 334,  750 => 333,  747 => 332,  744 => 331,  741 => 330,  738 => 329,  735 => 328,  729 => 327,  720 => 297,  717 => 296,  715 => 294,  714 => 292,  711 => 291,  709 => 286,  708 => 285,  707 => 284,  706 => 283,  705 => 278,  704 => 272,  703 => 271,  702 => 270,  701 => 269,  700 => 264,  697 => 263,  694 => 262,  691 => 261,  688 => 260,  685 => 259,  683 => 258,  680 => 257,  677 => 256,  674 => 255,  671 => 254,  669 => 253,  666 => 252,  663 => 251,  660 => 250,  654 => 249,  645 => 246,  642 => 245,  640 => 243,  639 => 241,  636 => 240,  634 => 236,  633 => 230,  632 => 229,  631 => 228,  630 => 227,  629 => 222,  626 => 221,  623 => 220,  621 => 219,  618 => 218,  615 => 217,  612 => 216,  610 => 215,  607 => 214,  604 => 213,  601 => 212,  598 => 211,  595 => 210,  589 => 209,  579 => 206,  576 => 205,  570 => 204,  560 => 201,  557 => 200,  551 => 199,  541 => 196,  538 => 195,  532 => 194,  522 => 191,  519 => 190,  513 => 189,  497 => 183,  494 => 181,  491 => 179,  489 => 178,  487 => 177,  485 => 176,  470 => 175,  467 => 171,  466 => 170,  465 => 169,  464 => 168,  463 => 167,  462 => 166,  460 => 165,  457 => 164,  454 => 163,  451 => 162,  448 => 161,  445 => 160,  442 => 159,  439 => 158,  437 => 157,  434 => 156,  431 => 155,  428 => 154,  425 => 153,  422 => 152,  419 => 151,  416 => 150,  413 => 149,  410 => 148,  407 => 147,  404 => 146,  401 => 145,  398 => 144,  392 => 143,  383 => 139,  377 => 137,  375 => 136,  371 => 134,  362 => 132,  358 => 131,  352 => 128,  347 => 126,  343 => 125,  339 => 124,  335 => 123,  331 => 122,  327 => 121,  323 => 120,  319 => 119,  313 => 116,  309 => 114,  306 => 113,  303 => 112,  300 => 111,  297 => 110,  294 => 109,  291 => 108,  288 => 107,  285 => 106,  283 => 105,  277 => 102,  273 => 101,  265 => 96,  259 => 94,  253 => 93,  244 => 90,  200 => 49,  193 => 44,  187 => 43,  169 => 40,  163 => 39,  155 => 36,  153 => 35,  152 => 34,  150 => 32,  147 => 31,  144 => 30,  141 => 29,  138 => 28,  135 => 27,  132 => 26,  129 => 25,  126 => 24,  123 => 23,  120 => 22,  117 => 21,  114 => 20,  111 => 19,  108 => 18,  105 => 17,  102 => 16,  99 => 15,  96 => 14,  93 => 13,  90 => 12,  87 => 11,  84 => 10,  81 => 9,  78 => 8,  75 => 7,  72 => 6,  69 => 5,  66 => 4,  60 => 3,  11 => 1,);
    }
}
