<?php

/* OroDashboardBundle:Form:fields.html.twig */
class __TwigTemplate_a943c93b4484c8f5ca620f4db86262e77dccf2dd138d32a94c5b8fde74a23f13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_type_widget_date_range_widget' => array($this, 'block_oro_type_widget_date_range_widget'),
            'oro_type_widget_title_widget' => array($this, 'block_oro_type_widget_title_widget'),
            'oro_type_widget_items_row' => array($this, 'block_oro_type_widget_items_row'),
            'oro_type_widget_items_javascript' => array($this, 'block_oro_type_widget_items_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4950706e3dc47ecc97c0c1eafaa5dceac69ca12f2777af98dfacbab86c44066c = $this->env->getExtension("native_profiler");
        $__internal_4950706e3dc47ecc97c0c1eafaa5dceac69ca12f2777af98dfacbab86c44066c->enter($__internal_4950706e3dc47ecc97c0c1eafaa5dceac69ca12f2777af98dfacbab86c44066c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_type_widget_date_range_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('oro_type_widget_title_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('oro_type_widget_items_row', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('oro_type_widget_items_javascript', $context, $blocks);
        
        $__internal_4950706e3dc47ecc97c0c1eafaa5dceac69ca12f2777af98dfacbab86c44066c->leave($__internal_4950706e3dc47ecc97c0c1eafaa5dceac69ca12f2777af98dfacbab86c44066c_prof);

    }

    // line 1
    public function block_oro_type_widget_date_range_widget($context, array $blocks = array())
    {
        $__internal_ceeed4c3b19c981465d825ef7de546ecaf6bb85afd1949ef7c4e2bed0ad7b762 = $this->env->getExtension("native_profiler");
        $__internal_ceeed4c3b19c981465d825ef7de546ecaf6bb85afd1949ef7c4e2bed0ad7b762->enter($__internal_ceeed4c3b19c981465d825ef7de546ecaf6bb85afd1949ef7c4e2bed0ad7b762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_type_widget_date_range_widget"));

        // line 2
        echo "    <div class=\"date-range-filter filter-criteria date-range-filter-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "\">
        <!-- datetime range filter placeholder -->
        <input type=\"hidden\" name=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "[part]\" value=\"source\"/>
    </div>
    <script type=\"text/javascript\">
        require(
            ['jquery', 'underscore', 'orodashboard/js/widget/datetime-range'],
            function (\$, _, WidgetConfigDatetimeRangeFilter) {
                \$(function () {
                    var metadata = JSON.parse('";
        // line 11
        echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "datetime_range_metadata", array()), twig_constant("JSON_UNESCAPED_SLASHES"));
        echo "');
                    var DatetimeFilterWithMeta = WidgetConfigDatetimeRangeFilter.extend(metadata);
                    var dateRangeFilter = new DatetimeFilterWithMeta();

                    var valueConfig = {};
                    ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "value", array()) == null)) {
            // line 17
            echo "                        valueConfig = {start: '', end: ''};
                    ";
        } else {
            // line 19
            echo "                        valueConfig = JSON.parse('";
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "value", array()));
            echo "');
                    ";
        }
        // line 21
        echo "
                    valueConfig.startEndPrefix = '";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
        echo "';

                    value = {
                        part: 'source',
                        type: ";
        // line 26
        echo twig_escape_filter($this->env, ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array()) != "")) ? ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "type", array())) : (1)), "html", null, true);
        echo ",
                        value: valueConfig
                    };
                    dateRangeFilter.setValue(value);
                    dateRangeFilter.render();
                    dateRangeFilter._formatRawValue(value);

                    \$('.date-range-filter-' + '";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
        echo "').append(dateRangeFilter.\$el);
                    \$('div.widget-configuration').parent().not('.ui-widget-content').css('overflow', 'inherit');
                    \$('div.widget-configuration').closest('.ui-widget-content').trigger('dialogresize');
                });
            }
        )
    </script>
";
        
        $__internal_ceeed4c3b19c981465d825ef7de546ecaf6bb85afd1949ef7c4e2bed0ad7b762->leave($__internal_ceeed4c3b19c981465d825ef7de546ecaf6bb85afd1949ef7c4e2bed0ad7b762_prof);

    }

    // line 42
    public function block_oro_type_widget_title_widget($context, array $blocks = array())
    {
        $__internal_89c1ccd0855debf87f9e5b82a1aca8f12dd87b68b4820d986695b28e2dd77dc9 = $this->env->getExtension("native_profiler");
        $__internal_89c1ccd0855debf87f9e5b82a1aca8f12dd87b68b4820d986695b28e2dd77dc9->enter($__internal_89c1ccd0855debf87f9e5b82a1aca8f12dd87b68b4820d986695b28e2dd77dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_type_widget_title_widget"));

        // line 43
        echo "    <div class=\"widget_title_widget\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
        echo "
    </div>
    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "useDefault", array()), 'row');
        echo "
    <script type=\"text/javascript\">
        require(['jquery'], function (\$) {
            \$(function () {
                var title     = \$('input#";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');
                var isDefault = \$('input#";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "useDefault", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');

                if (isDefault.prop('checked') == true) {
                    \$(title).prop('readonly', 'readonly');
                }
                \$(isDefault).change(function() {
                    if (\$(this).is(':checked')) {
                        \$(title).prop('readonly', 'readonly');
                    } else {
                        \$(title).removeAttr('readonly');
                    }
                });
            });
        })
    </script>
";
        
        $__internal_89c1ccd0855debf87f9e5b82a1aca8f12dd87b68b4820d986695b28e2dd77dc9->leave($__internal_89c1ccd0855debf87f9e5b82a1aca8f12dd87b68b4820d986695b28e2dd77dc9_prof);

    }

    // line 68
    public function block_oro_type_widget_items_row($context, array $blocks = array())
    {
        $__internal_c156d7e320985cbf0a9ca36992d6c9b1a3ca52649feacd1e18dade8ac7380c01 = $this->env->getExtension("native_profiler");
        $__internal_c156d7e320985cbf0a9ca36992d6c9b1a3ca52649feacd1e18dade8ac7380c01->enter($__internal_c156d7e320985cbf0a9ca36992d6c9b1a3ca52649feacd1e18dade8ac7380c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_type_widget_items_row"));

        // line 69
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Form:fields.html.twig", 69);
        // line 70
        echo "    ";
        $context["rowId"] = ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()) . "Row");
        // line 71
        echo "
    <div id=\"";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["rowId"]) ? $context["rowId"] : $this->getContext($context, "rowId")), "html", null, true);
        echo "\" class=\"dashboard-widget-items\">
        <div class=\"control-group\">
            <label class=\"control-label\">";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "</label>
            <div class=\"controls\">
                <div class=\"\">
                    ";
        // line 77
        echo $context["UI"]->getclientButton(array("aCss" => "no-hash add-button", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.add.label")));
        // line 80
        echo "
                    ";
        // line 81
        echo $context["UI"]->getclientButton(array("aCss" => "no-hash btn-primary add-all-button", "label" => $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.actions.add_all.label")));
        // line 84
        echo "
                </div>
            </div>
        </div>
        <div class=\"grid-container\">
            <table id=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\" class=\"grid table table-bordered table-condensed\">
                <thead>
                    <tr>
                        <th><span>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "item_label", array())), "html", null, true);
        echo "</span></th>
                        <th class=\"action-column\"><span>";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.datagrid.columns.actions"), "html", null, true);
        echo "</span></th>
                    </tr>
                </thead>
                <tbody class=\"item-container\"></tbody>
            </table>
        </div>
    </div>
    ";
        // line 100
        echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
";
        
        $__internal_c156d7e320985cbf0a9ca36992d6c9b1a3ca52649feacd1e18dade8ac7380c01->leave($__internal_c156d7e320985cbf0a9ca36992d6c9b1a3ca52649feacd1e18dade8ac7380c01_prof);

    }

    // line 103
    public function block_oro_type_widget_items_javascript($context, array $blocks = array())
    {
        $__internal_2cfc56a3db5ee915e7820a8f74f27cd50c532949db7a078bfe03ef0c3390b225 = $this->env->getExtension("native_profiler");
        $__internal_2cfc56a3db5ee915e7820a8f74f27cd50c532949db7a078bfe03ef0c3390b225->enter($__internal_2cfc56a3db5ee915e7820a8f74f27cd50c532949db7a078bfe03ef0c3390b225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_type_widget_items_javascript"));

        // line 104
        echo "    ";
        $context["options"] = array("itemsData" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 105
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "items", array()), "vars", array()), "value", array()), "baseName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(        // line 106
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "items", array()), "vars", array()), "full_name", array()), "el" => (("#" . $this->getAttribute($this->getAttribute(        // line 107
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())) . "Row"));
        // line 109
        echo "
    <script>
        require([
            'orodashboard/js/items/view'
        ], function (ItemsView) {
            'use strict';

            new ItemsView(";
        // line 116
        echo twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo ");
        });
    </script>
";
        
        $__internal_2cfc56a3db5ee915e7820a8f74f27cd50c532949db7a078bfe03ef0c3390b225->leave($__internal_2cfc56a3db5ee915e7820a8f74f27cd50c532949db7a078bfe03ef0c3390b225_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  263 => 116,  254 => 109,  252 => 107,  251 => 106,  250 => 105,  248 => 104,  242 => 103,  233 => 100,  223 => 93,  219 => 92,  213 => 89,  206 => 84,  204 => 81,  201 => 80,  199 => 77,  193 => 74,  188 => 72,  185 => 71,  182 => 70,  179 => 69,  173 => 68,  150 => 51,  146 => 50,  139 => 46,  134 => 44,  131 => 43,  125 => 42,  110 => 33,  100 => 26,  93 => 22,  90 => 21,  84 => 19,  80 => 17,  78 => 16,  70 => 11,  60 => 4,  54 => 2,  48 => 1,  41 => 103,  38 => 102,  36 => 68,  33 => 67,  31 => 42,  28 => 41,  26 => 1,);
    }
}
