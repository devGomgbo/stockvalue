<?php

/* OroEmailBundle:Form:fields.html.twig */
class __TwigTemplate_959a3c9af65576d09a09b2cbe4333eeec54fc2a10e9d16223d5b9ef277c858e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_oro_email_autoresponserule_conditions_entry_field_row' => array($this, 'block__oro_email_autoresponserule_conditions_entry_field_row'),
            '_oro_email_autoresponserule_conditions_entry_filter_row' => array($this, 'block__oro_email_autoresponserule_conditions_entry_filter_row'),
            'oro_email_template_list_row' => array($this, 'block_oro_email_template_list_row'),
            'oro_email_link_to_scope_row' => array($this, 'block_oro_email_link_to_scope_row'),
            'oro_email_attachments_row' => array($this, 'block_oro_email_attachments_row'),
            'oro_email_emailtemplate_translatation_widget' => array($this, 'block_oro_email_emailtemplate_translatation_widget'),
            'oro_email_email_folder_row' => array($this, 'block_oro_email_email_folder_row'),
            'oro_email_email_folder_tree_row' => array($this, 'block_oro_email_email_folder_tree_row'),
            'oro_email_email_folder_tree_widget' => array($this, 'block_oro_email_email_folder_tree_widget'),
            'oro_email_mailbox_grid_row' => array($this, 'block_oro_email_mailbox_grid_row'),
            'oro_email_mailbox_grid_label' => array($this, 'block_oro_email_mailbox_grid_label'),
            'oro_email_mailbox_grid_widget' => array($this, 'block_oro_email_mailbox_grid_widget'),
            'oro_email_mailbox_widget' => array($this, 'block_oro_email_mailbox_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d0003f590c8cd4f6e2ff310bb564a6889363776c650425a985ea487003e3872 = $this->env->getExtension("native_profiler");
        $__internal_1d0003f590c8cd4f6e2ff310bb564a6889363776c650425a985ea487003e3872->enter($__internal_1d0003f590c8cd4f6e2ff310bb564a6889363776c650425a985ea487003e3872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('_oro_email_autoresponserule_conditions_entry_field_row', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('_oro_email_autoresponserule_conditions_entry_filter_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('oro_email_template_list_row', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('oro_email_link_to_scope_row', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('oro_email_attachments_row', $context, $blocks);
        // line 159
        echo "
";
        // line 160
        $this->displayBlock('oro_email_emailtemplate_translatation_widget', $context, $blocks);
        // line 206
        echo "
";
        // line 207
        $this->displayBlock('oro_email_email_folder_row', $context, $blocks);
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('oro_email_email_folder_tree_row', $context, $blocks);
        // line 228
        echo "
";
        // line 229
        $this->displayBlock('oro_email_email_folder_tree_widget', $context, $blocks);
        // line 258
        echo "
";
        // line 259
        $this->displayBlock('oro_email_mailbox_grid_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('oro_email_mailbox_grid_label', $context, $blocks);
        // line 283
        echo "
";
        // line 284
        $this->displayBlock('oro_email_mailbox_grid_widget', $context, $blocks);
        // line 296
        echo "
";
        // line 297
        $this->displayBlock('oro_email_mailbox_widget', $context, $blocks);
        // line 327
        echo "
";
        // line 344
        echo "
";
        
        $__internal_1d0003f590c8cd4f6e2ff310bb564a6889363776c650425a985ea487003e3872->leave($__internal_1d0003f590c8cd4f6e2ff310bb564a6889363776c650425a985ea487003e3872_prof);

    }

    // line 1
    public function block__oro_email_autoresponserule_conditions_entry_field_row($context, array $blocks = array())
    {
        $__internal_ba5590757e3c12adfda4bf59433bc6e5d097dc86418d1ca37e0251dd8b81e21e = $this->env->getExtension("native_profiler");
        $__internal_ba5590757e3c12adfda4bf59433bc6e5d097dc86418d1ca37e0251dd8b81e21e->enter($__internal_ba5590757e3c12adfda4bf59433bc6e5d097dc86418d1ca37e0251dd8b81e21e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_oro_email_autoresponserule_conditions_entry_field_row"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        
        $__internal_ba5590757e3c12adfda4bf59433bc6e5d097dc86418d1ca37e0251dd8b81e21e->leave($__internal_ba5590757e3c12adfda4bf59433bc6e5d097dc86418d1ca37e0251dd8b81e21e_prof);

    }

    // line 5
    public function block__oro_email_autoresponserule_conditions_entry_filter_row($context, array $blocks = array())
    {
        $__internal_b2c19e67a8f52070d1d27df1b3ea7591c40736ded133d75d27d4e35b842f49b7 = $this->env->getExtension("native_profiler");
        $__internal_b2c19e67a8f52070d1d27df1b3ea7591c40736ded133d75d27d4e35b842f49b7->enter($__internal_b2c19e67a8f52070d1d27df1b3ea7591c40736ded133d75d27d4e35b842f49b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_oro_email_autoresponserule_conditions_entry_filter_row"));

        // line 6
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 7
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("class" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "name", array(), "array"))));
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b2c19e67a8f52070d1d27df1b3ea7591c40736ded133d75d27d4e35b842f49b7->leave($__internal_b2c19e67a8f52070d1d27df1b3ea7591c40736ded133d75d27d4e35b842f49b7_prof);

    }

    // line 11
    public function block_oro_email_template_list_row($context, array $blocks = array())
    {
        $__internal_5f523d045957bc7c84df506b7d2d0f6c3201dd189d2f226a23b3b71ec6b56e2f = $this->env->getExtension("native_profiler");
        $__internal_5f523d045957bc7c84df506b7d2d0f6c3201dd189d2f226a23b3b71ec6b56e2f->enter($__internal_5f523d045957bc7c84df506b7d2d0f6c3201dd189d2f226a23b3b71ec6b56e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_template_list_row"));

        // line 12
        echo "    <script type=\"text/javascript\">
        require(['jquery',
                    'oroemail/js/app/views/email-template-view',
                    'oroemail/js/app/models/email-template-collection'],
        function(\$, View, Collection) {
            \$(function () {
                'use strict';
                var \$templateSelectorEl = \$('#";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
                ";
        // line 20
        if ((array_key_exists("includeSystemTemplates", $context) &&  !(isset($context["includeSystemTemplates"]) ? $context["includeSystemTemplates"] : $this->getContext($context, "includeSystemTemplates")))) {
            // line 21
            echo "                    var includeSystemTemplates = false;
                ";
        } else {
            // line 23
            echo "                    var includeSystemTemplates = true;
                ";
        }
        // line 25
        echo "                new View({
                    el: \$templateSelectorEl.closest('form').find('[name\$=\"[";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["depends_on_parent_field"]) ? $context["depends_on_parent_field"] : $this->getContext($context, "depends_on_parent_field")), "html", null, true);
        echo "]\"]'),
                    target: \$templateSelectorEl,
                    collection: new Collection(
                        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["data_route"]) ? $context["data_route"] : $this->getContext($context, "data_route")), "html", null, true);
        echo "',
                        ";
        // line 30
        echo twig_jsonencode_filter((isset($context["data_route_parameter"]) ? $context["data_route_parameter"] : $this->getContext($context, "data_route_parameter")));
        echo ",
                        ";
        // line 31
        echo (((array_key_exists("includeNonEntity", $context) && (isset($context["includeNonEntity"]) ? $context["includeNonEntity"] : $this->getContext($context, "includeNonEntity")))) ? ("true") : ("false"));
        echo ",
                        includeSystemTemplates
                    )
                });
            });
        })
    </script>
    <script type=\"text/template\" id=\"emailtemplate-chooser-template\">
        <% _.each(entities, function(entity, i) { %>
        <option value=\"<%= entity.get('id') %>\"><%= entity.get('name') %></option>
        <% }); %>
    </script>

    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
";
        
        $__internal_5f523d045957bc7c84df506b7d2d0f6c3201dd189d2f226a23b3b71ec6b56e2f->leave($__internal_5f523d045957bc7c84df506b7d2d0f6c3201dd189d2f226a23b3b71ec6b56e2f_prof);

    }

    // line 47
    public function block_oro_email_link_to_scope_row($context, array $blocks = array())
    {
        $__internal_d6072f5f0c72db71ebc995bd254a8c37531ae3373725efed019c353b7e711617 = $this->env->getExtension("native_profiler");
        $__internal_d6072f5f0c72db71ebc995bd254a8c37531ae3373725efed019c353b7e711617->enter($__internal_d6072f5f0c72db71ebc995bd254a8c37531ae3373725efed019c353b7e711617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_link_to_scope_row"));

        // line 48
        echo "    <script type=\"text/javascript\">
        require(['jquery'],
            function(\$) {
                function initLinkToScopeEl(mainEl, el) {
                    if (parseInt(\$(mainEl).val())) {
                        \$(el).attr('disabled', false);
                        \$(el).parent('div').removeClass('disabled');
                    } else {
                        \$(el).attr('disabled', true);
                        \$(el).parent('div').addClass('disabled');
                    }
                }
                \$(function () {
                    var selectorEl = '";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "';
                    var emailLinkToScopeEl = \$('#' + selectorEl);
                    var enableAttachmentEl = \$(emailLinkToScopeEl).closest('form')
                            .find('[data-ftid=oro_entity_config_type_attachment_enabled]');
                    initLinkToScopeEl(enableAttachmentEl, emailLinkToScopeEl);
                    \$(enableAttachmentEl).on('change', function() {
                        initLinkToScopeEl(enableAttachmentEl, emailLinkToScopeEl);
                    });
                });
            })
    </script>
    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
";
        
        $__internal_d6072f5f0c72db71ebc995bd254a8c37531ae3373725efed019c353b7e711617->leave($__internal_d6072f5f0c72db71ebc995bd254a8c37531ae3373725efed019c353b7e711617_prof);

    }

    // line 75
    public function block_oro_email_attachments_row($context, array $blocks = array())
    {
        $__internal_6c26c96629b5595bdbca22cb754e5d3f16ecd0628efb480778c5b30a4fb47b8f = $this->env->getExtension("native_profiler");
        $__internal_6c26c96629b5595bdbca22cb754e5d3f16ecd0628efb480778c5b30a4fb47b8f->enter($__internal_6c26c96629b5595bdbca22cb754e5d3f16ecd0628efb480778c5b30a4fb47b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_attachments_row"));

        // line 76
        echo "    <script type=\"text/template\" id=\"email-attachment-item\">
        <div class=\"attachment-item\" style=\"border: none\">
            <span data-id=\"<%= id %>\" class=\"filename\">
                <i class=\"icon icon-file-alt\"></i>
                <span class=\"filename-label\"><%= fileName %></span>
                <i class=\"icon-remove\"></i>
            </span>
            <input name=\"<%= inputName %>[<%= cid %>][id]\" type=\"text\" value=\"<%= id %>\"/>
            <input name=\"<%= inputName %>[<%= cid %>][type]\" type=\"text\" value=\"<%= type %>\" class=\"attachment-type\"/>
            <input name=\"<%= inputName %>[<%= cid %>][file]\" type=\"file\"/>
        </div>
    </script>

    <script type=\"text/template\" id=\"email-attachment-select-view\">
        <div class=\"attachment-list-content\">
            <div class=\"filter-block\">
                <label>";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.attachment.select_file"), "html", null, true);
        echo "</label>
                <input type=\"text\" class=\"filter\"/>
            </div>
            <div class=\"attachment-list\">
                <div class=\"no-items\">
                    <p class=\"text-center\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.no_attachments"), "html", null, true);
        echo "</p>
                </div>
                <div class=\"group-block entity-attachments\">
                    <b>";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.record_attachments"), "html", null, true);
        echo "</b>
                    <div class=\"entity-attachments-list\"></div>
                </div>
                <div class=\"group-block thread-attachments\">
                    <b>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.thread_attachments"), "html", null, true);
        echo "</b>
                    <div class=\"thread-attachments-list\"></div>
                </div>
            </div>
        </div>
        <div class=\"clear\"></div>
        <div class=\"attachment-actions\">
            <div class=\"pull-right\">
                <a class=\"btn cancel\">";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
        echo "</a>
                <a class=\"btn btn-primary attach\">";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.form.attach"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </script>

    <script type=\"text/template\" id=\"email-attachment-list-row-view\">
        <div class=\"attachment-list-row <% if (!visible) { %>hide<% } %>\">
            <input type=\"checkbox\" class=\"checkbox\" <% if (checked) { %>checked<% } %>>
            <span><%= fileName %> (<%= fileSize %>, <%= modified %>)</span>
        </div>
    </script>

    ";
        // line 125
        $context["entityAttachmentsArray"] = array();
        // line 126
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "entityAttachments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 127
            echo "        ";
            $context["entityAttachmentArray"] = array("id" => $this->getAttribute(            // line 128
$context["attachment"], "id", array()), "type" => $this->getAttribute(            // line 129
$context["attachment"], "type", array()), "fileName" => $this->getAttribute(            // line 130
$context["attachment"], "fileName", array()));
            // line 132
            echo "        ";
            $context["entityAttachmentsArray"] = twig_array_merge((isset($context["entityAttachmentsArray"]) ? $context["entityAttachmentsArray"] : $this->getContext($context, "entityAttachmentsArray")), array(0 => (isset($context["entityAttachmentArray"]) ? $context["entityAttachmentArray"] : $this->getContext($context, "entityAttachmentArray"))));
            // line 133
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "
    ";
        // line 135
        $context["attachmentsAvailableArray"] = array();
        // line 136
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "attachmentsAvailable", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
            // line 137
            echo "        ";
            $context["attachmentAvailableArray"] = array("id" => $this->getAttribute(            // line 138
$context["attachment"], "id", array()), "type" => $this->getAttribute(            // line 139
$context["attachment"], "type", array()), "fileName" => $this->getAttribute(            // line 140
$context["attachment"], "fileName", array()), "fileSize" => $this->getAttribute(            // line 141
$context["attachment"], "fileSize", array()), "modified" => $this->getAttribute(            // line 142
$context["attachment"], "modified", array()));
            // line 144
            echo "        ";
            $context["attachmentsAvailableArray"] = twig_array_merge((isset($context["attachmentsAvailableArray"]) ? $context["attachmentsAvailableArray"] : $this->getContext($context, "attachmentsAvailableArray")), array(0 => (isset($context["attachmentAvailableArray"]) ? $context["attachmentAvailableArray"] : $this->getContext($context, "attachmentAvailableArray"))));
            // line 145
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "
    ";
        // line 147
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("containerId" =>         // line 148
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "inputName" =>         // line 149
(isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "entityAttachments" =>         // line 150
(isset($context["entityAttachmentsArray"]) ? $context["entityAttachmentsArray"] : $this->getContext($context, "entityAttachmentsArray")), "attachmentsAvailable" =>         // line 151
(isset($context["attachmentsAvailableArray"]) ? $context["attachmentsAvailableArray"] : $this->getContext($context, "attachmentsAvailableArray"))));
        // line 153
        echo "
    <div data-page-component-module=\"oroemail/js/app/components/email-attachment-component\"
         data-page-component-options=\"";
        // line 155
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
        echo "\">
        ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
        echo "
    </div>
";
        
        $__internal_6c26c96629b5595bdbca22cb754e5d3f16ecd0628efb480778c5b30a4fb47b8f->leave($__internal_6c26c96629b5595bdbca22cb754e5d3f16ecd0628efb480778c5b30a4fb47b8f_prof);

    }

    // line 160
    public function block_oro_email_emailtemplate_translatation_widget($context, array $blocks = array())
    {
        $__internal_d09e434bf45450880d43265127b27db68039660ddefb242a9837d0e57765fa2a = $this->env->getExtension("native_profiler");
        $__internal_d09e434bf45450880d43265127b27db68039660ddefb242a9837d0e57765fa2a->enter($__internal_d09e434bf45450880d43265127b27db68039660ddefb242a9837d0e57765fa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_emailtemplate_translatation_widget"));

        // line 161
        echo "    <div class=\"emailtemplate-translatation oro-tabs tabbable\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 163
        ob_start();
        // line 164
        echo "                ";
        if ((isset($context["simple_way"]) ? $context["simple_way"] : $this->getContext($context, "simple_way"))) {
            // line 165
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                // line 166
                echo "                        ";
                echo $this->getAttribute($this, "renderTabNavItem", array(0 => $context["translationsField"], 1 => (isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels"))), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                ";
        } else {
            // line 169
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 170
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    // line 171
                    echo "                            ";
                    echo $this->getAttribute($this, "renderTabNavItem", array(0 => $context["translationsField"], 1 => (isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")), 2 => ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()))), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 173
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
            echo "                ";
        }
        // line 175
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 176
        echo "        </ul>
        <div class=\"tab-content\">
            ";
        // line 178
        ob_start();
        // line 179
        echo "                ";
        if ((isset($context["simple_way"]) ? $context["simple_way"] : $this->getContext($context, "simple_way"))) {
            // line 180
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                // line 181
                echo "                        ";
                echo $this->getAttribute($this, "renderTab", array(0 => $context["translationsField"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "                ";
        } else {
            // line 184
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
                // line 185
                echo "                        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
                foreach ($context['_seq'] as $context["_key"] => $context["translationsField"]) {
                    // line 186
                    echo "                            ";
                    echo $this->getAttribute($this, "renderTab", array(0 => $context["translationsField"]), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "                ";
        }
        // line 190
        echo "            ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 191
        echo "        </div>
    </div>
    <script type=\"text/javascript\">
        require(['jquery'],
                function(\$) {
                    \$('.emailtemplate-translatation.oro-tabs.tabbable ul.nav.nav-tabs li a').on('show', function(e) {
                        var target = e.target || window.event.target;
                        var dataRelated = \$(target).attr('data-related');
                        \$(\$(target).closest('form').find(':input.translation')).each(function(key, el) {
                            \$(el).val(dataRelated);
                        });
                    });
                })
    </script>
";
        
        $__internal_d09e434bf45450880d43265127b27db68039660ddefb242a9837d0e57765fa2a->leave($__internal_d09e434bf45450880d43265127b27db68039660ddefb242a9837d0e57765fa2a_prof);

    }

    // line 207
    public function block_oro_email_email_folder_row($context, array $blocks = array())
    {
        $__internal_f870ed1a3fdbee865e02a9023d2ec67c1438cd64bb032cd3d245da5406997dba = $this->env->getExtension("native_profiler");
        $__internal_f870ed1a3fdbee865e02a9023d2ec67c1438cd64bb032cd3d245da5406997dba->enter($__internal_f870ed1a3fdbee865e02a9023d2ec67c1438cd64bb032cd3d245da5406997dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_email_folder_row"));

        // line 208
        echo "    ";
        if (( !(null === $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) && (null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "outdatedAt", array())))) {
            // line 209
            echo "        <div>
            ";
            // line 210
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "syncEnabled", array()), 'widget');
            echo "<label class=\"folder-label\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "name", array()), "html", null, true);
            echo "</label>
            ";
            // line 211
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fullName", array()), 'widget');
            echo "
            ";
            // line 212
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
            echo "
            ";
            // line 213
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
            echo "
            ";
            // line 214
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "subFolders", array())) > 0)) {
                // line 215
                echo "                <div class=\"folder-sub-folders\">
                    ";
                // line 216
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subFolders", array()), 'widget');
                echo "
                </div>
            ";
            }
            // line 219
            echo "        </div>
    ";
        }
        
        $__internal_f870ed1a3fdbee865e02a9023d2ec67c1438cd64bb032cd3d245da5406997dba->leave($__internal_f870ed1a3fdbee865e02a9023d2ec67c1438cd64bb032cd3d245da5406997dba_prof);

    }

    // line 223
    public function block_oro_email_email_folder_tree_row($context, array $blocks = array())
    {
        $__internal_0c3a2d26430ba89c34e5a08b888b784548ded15c92c3ad0199b9af11122d69c6 = $this->env->getExtension("native_profiler");
        $__internal_0c3a2d26430ba89c34e5a08b888b784548ded15c92c3ad0199b9af11122d69c6->enter($__internal_0c3a2d26430ba89c34e5a08b888b784548ded15c92c3ad0199b9af11122d69c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_email_folder_tree_row"));

        // line 224
        echo "    ";
        if (( !(null === $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) > 0))) {
            // line 225
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
            echo "
    ";
        }
        
        $__internal_0c3a2d26430ba89c34e5a08b888b784548ded15c92c3ad0199b9af11122d69c6->leave($__internal_0c3a2d26430ba89c34e5a08b888b784548ded15c92c3ad0199b9af11122d69c6_prof);

    }

    // line 229
    public function block_oro_email_email_folder_tree_widget($context, array $blocks = array())
    {
        $__internal_c13f1da17264f2824b54b17a24d9c4399ae28c48de40198fb29eb42f67ee3034 = $this->env->getExtension("native_profiler");
        $__internal_c13f1da17264f2824b54b17a24d9c4399ae28c48de40198fb29eb42f67ee3034->enter($__internal_c13f1da17264f2824b54b17a24d9c4399ae28c48de40198fb29eb42f67ee3034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_email_folder_tree_widget"));

        // line 230
        echo "    <div class=\"folder-tree-widget\">
        <input id=\"check-all\" type=\"checkbox\"/><label class=\"folder-label\">All</label>
        <div id=\"folder-list\">
            ";
        // line 233
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 234
            echo "                ";
            if (((null === $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "parentFolder", array())) && (null === $this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "vars", array()), "value", array()), "outdatedAt", array())))) {
                // line 235
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
                echo "
                ";
            }
            // line 237
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "        </div>
    </div>

    <script type=\"text/javascript\">
        require(['jquery'], function(\$) {
            var \$folderList = \$('#folder-list');
            var \$checkAll = \$('#check-all');
            \$checkAll.click(function() {
                var checked = this.checked;
                \$folderList.find(':checkbox').each(function() {
                    this.checked = checked;
                });
            });

            \$folderList.find(':checkbox').each(function() {
                \$(this).css('margin', 0);
            });
        });
    </script>
";
        
        $__internal_c13f1da17264f2824b54b17a24d9c4399ae28c48de40198fb29eb42f67ee3034->leave($__internal_c13f1da17264f2824b54b17a24d9c4399ae28c48de40198fb29eb42f67ee3034_prof);

    }

    // line 259
    public function block_oro_email_mailbox_grid_row($context, array $blocks = array())
    {
        $__internal_ce0e8ab0670fc639e10c7f6511ba523076bf447b834e17b1ecc7f9d9cb842aac = $this->env->getExtension("native_profiler");
        $__internal_ce0e8ab0670fc639e10c7f6511ba523076bf447b834e17b1ecc7f9d9cb842aac->enter($__internal_ce0e8ab0670fc639e10c7f6511ba523076bf447b834e17b1ecc7f9d9cb842aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_row"));

        // line 260
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
    ";
        // line 261
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
        
        $__internal_ce0e8ab0670fc639e10c7f6511ba523076bf447b834e17b1ecc7f9d9cb842aac->leave($__internal_ce0e8ab0670fc639e10c7f6511ba523076bf447b834e17b1ecc7f9d9cb842aac_prof);

    }

    // line 264
    public function block_oro_email_mailbox_grid_label($context, array $blocks = array())
    {
        $__internal_7f19afa274c3e00f84a9e908423155aa7542194709369181d830e6349d5b78a9 = $this->env->getExtension("native_profiler");
        $__internal_7f19afa274c3e00f84a9e908423155aa7542194709369181d830e6349d5b78a9->enter($__internal_7f19afa274c3e00f84a9e908423155aa7542194709369181d830e6349d5b78a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_label"));

        // line 265
        echo "    ";
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 265);
        // line 266
        echo "    ";
        $context["redirectData"] = array("route" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 267
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "parameters" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 268
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 270
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_organization_update")) {
            // line 271
            echo "        <div class=\"row\" style=\"margin-top: -42px;\">
            <div class=\"pull-right\">
                <div class=\"btn-group\">
                    ";
            // line 274
            echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath("oro_email_mailbox_create", array("redirectData" =>             // line 275
(isset($context["redirectData"]) ? $context["redirectData"] : $this->getContext($context, "redirectData")))), "label" => $this->env->getExtension('translator')->trans("oro.email.system_configuration.mailbox_configuration.add_mailbox.label")));
            // line 277
            echo "
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_7f19afa274c3e00f84a9e908423155aa7542194709369181d830e6349d5b78a9->leave($__internal_7f19afa274c3e00f84a9e908423155aa7542194709369181d830e6349d5b78a9_prof);

    }

    // line 284
    public function block_oro_email_mailbox_grid_widget($context, array $blocks = array())
    {
        $__internal_0e895e89138e59568949b9d0d28b41d105a9d3d4f619d48d4c5b0d03039605a5 = $this->env->getExtension("native_profiler");
        $__internal_0e895e89138e59568949b9d0d28b41d105a9d3d4f619d48d4c5b0d03039605a5->enter($__internal_0e895e89138e59568949b9d0d28b41d105a9d3d4f619d48d4c5b0d03039605a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_mailbox_grid_widget"));

        // line 285
        echo "    ";
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Form:fields.html.twig", 285);
        // line 286
        echo "    ";
        $context["redirectData"] = array("route" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 287
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), "parameters" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 288
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 290
        echo "    <div class=\"row\" style=\"margin-right: -20px;\">
        ";
        // line 291
        echo $context["dataGrid"]->getrenderGrid("base-mailboxes-grid", array("redirectData" =>         // line 292
(isset($context["redirectData"]) ? $context["redirectData"] : $this->getContext($context, "redirectData")), "organization_ids" => array(0 => $this->getAttribute($this->env->getExtension('oro_security_organization_extension')->getCurrentOrganization(), "getId", array(), "method"))));
        // line 293
        echo "
    </div>
";
        
        $__internal_0e895e89138e59568949b9d0d28b41d105a9d3d4f619d48d4c5b0d03039605a5->leave($__internal_0e895e89138e59568949b9d0d28b41d105a9d3d4f619d48d4c5b0d03039605a5_prof);

    }

    // line 297
    public function block_oro_email_mailbox_widget($context, array $blocks = array())
    {
        $__internal_17ba7f3940b8db42e2e5de594a92d7cd22ce71d1e3709086a1443df83f532951 = $this->env->getExtension("native_profiler");
        $__internal_17ba7f3940b8db42e2e5de594a92d7cd22ce71d1e3709086a1443df83f532951->enter($__internal_17ba7f3940b8db42e2e5de594a92d7cd22ce71d1e3709086a1443df83f532951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_mailbox_widget"));

        // line 298
        echo "    ";
        $context["email_origin"] = $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "origin", array()), 'widget');
        // line 299
        echo "    ";
        $context["process"] = ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "processType", array()), 'row') .         // line 300
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "processSettings", array()), 'widget'));
        // line 301
        echo "    ";
        $context["access"] = ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "authorizedUsers", array()), 'row') .         // line 302
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), "authorizedRoles", array()), 'row'));
        // line 304
        echo "    ";
        $context["options"] = array("el" => ("#" . $this->getAttribute($this->getAttribute(        // line 305
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array())));
        // line 307
        echo "    <div data-page-component-module=\"oroemail/js/app/views/mailbox-update-view\"
         data-page-component-options=\"";
        // line 308
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
        echo "\">
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 310
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.general.label"), "html", null, true);
        echo "</h5>
            ";
        // line 311
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 314
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.origin.label"), "html", null, true);
        echo "</h5>
            ";
        // line 315
        echo (isset($context["email_origin"]) ? $context["email_origin"] : $this->getContext($context, "email_origin"));
        echo "
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.process.label"), "html", null, true);
        echo "</h5>
            ";
        // line 319
        echo (isset($context["process"]) ? $context["process"] : $this->getContext($context, "process"));
        echo "
        </fieldset>
        <fieldset class=\"form-horizontal form-horizontal-large\">
            <h5>";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.mailbox.access.label"), "html", null, true);
        echo "</h5>
            ";
        // line 323
        echo (isset($context["access"]) ? $context["access"] : $this->getContext($context, "access"));
        echo "
        </fieldset>
    </div>
";
        
        $__internal_17ba7f3940b8db42e2e5de594a92d7cd22ce71d1e3709086a1443df83f532951->leave($__internal_17ba7f3940b8db42e2e5de594a92d7cd22ce71d1e3709086a1443df83f532951_prof);

    }

    // line 335
    public function getrenderTabNavItem($__form__ = null, $__localeLabels__ = null, $__isDefault__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "localeLabels" => $__localeLabels__,
            "isDefault" => $__isDefault__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b31cc8e62d682eb421535438bd8e3dec200fee2e1b88cee8c5f663b84d82fb72 = $this->env->getExtension("native_profiler");
            $__internal_b31cc8e62d682eb421535438bd8e3dec200fee2e1b88cee8c5f663b84d82fb72->enter($__internal_b31cc8e62d682eb421535438bd8e3dec200fee2e1b88cee8c5f663b84d82fb72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTabNavItem"));

            // line 336
            echo "    ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array());
            // line 337
            echo "
    <li ";
            // line 338
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"javascript:void(0);\" data-target=\".emailtemplate-translatation-fields-";
            // line 339
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\" data-toggle=\"tab\" data-related=\"";
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\">";
            // line 340
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((($this->getAttribute((isset($context["localeLabels"]) ? $context["localeLabels"] : null), (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["localeLabels"]) ? $context["localeLabels"] : null), (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array(), "array"), "N/A")) : ("N/A"))), "html", null, true);
            if ((isset($context["isDefault"]) ? $context["isDefault"] : $this->getContext($context, "isDefault"))) {
                echo " ";
                echo $this->env->getExtension('translator')->getTranslator()->trans("[Default]", array(), "messages");
            }
            // line 341
            echo "</a>
    </li>
";
            
            $__internal_b31cc8e62d682eb421535438bd8e3dec200fee2e1b88cee8c5f663b84d82fb72->leave($__internal_b31cc8e62d682eb421535438bd8e3dec200fee2e1b88cee8c5f663b84d82fb72_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 350
    public function getrenderTab($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bcdd7e1ff4d026819be21c0b3c8d20017a843566c074f85544c0173d12fad80c = $this->env->getExtension("native_profiler");
            $__internal_bcdd7e1ff4d026819be21c0b3c8d20017a843566c074f85544c0173d12fad80c->enter($__internal_bcdd7e1ff4d026819be21c0b3c8d20017a843566c074f85544c0173d12fad80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTab"));

            // line 351
            echo "    ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array());
            // line 352
            echo "
    <div class=\"emailtemplate-translatation-fields-";
            // line 353
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo " tab-pane";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo " active";
            }
            echo "\">
        ";
            // line 354
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
    </div>
";
            
            $__internal_bcdd7e1ff4d026819be21c0b3c8d20017a843566c074f85544c0173d12fad80c->leave($__internal_bcdd7e1ff4d026819be21c0b3c8d20017a843566c074f85544c0173d12fad80c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  927 => 354,  919 => 353,  916 => 352,  913 => 351,  898 => 350,  882 => 341,  876 => 340,  871 => 339,  865 => 338,  862 => 337,  859 => 336,  842 => 335,  831 => 323,  827 => 322,  821 => 319,  817 => 318,  811 => 315,  807 => 314,  801 => 311,  797 => 310,  792 => 308,  789 => 307,  787 => 305,  785 => 304,  783 => 302,  781 => 301,  779 => 300,  777 => 299,  774 => 298,  768 => 297,  759 => 293,  757 => 292,  756 => 291,  753 => 290,  751 => 288,  750 => 287,  748 => 286,  745 => 285,  739 => 284,  727 => 277,  725 => 275,  724 => 274,  719 => 271,  716 => 270,  714 => 268,  713 => 267,  711 => 266,  708 => 265,  702 => 264,  693 => 261,  688 => 260,  682 => 259,  656 => 238,  650 => 237,  644 => 235,  641 => 234,  637 => 233,  632 => 230,  626 => 229,  615 => 225,  612 => 224,  606 => 223,  597 => 219,  591 => 216,  588 => 215,  586 => 214,  582 => 213,  578 => 212,  574 => 211,  568 => 210,  565 => 209,  562 => 208,  556 => 207,  535 => 191,  532 => 190,  529 => 189,  523 => 188,  514 => 186,  509 => 185,  504 => 184,  501 => 183,  492 => 181,  487 => 180,  484 => 179,  482 => 178,  478 => 176,  475 => 175,  472 => 174,  466 => 173,  457 => 171,  452 => 170,  447 => 169,  444 => 168,  435 => 166,  430 => 165,  427 => 164,  425 => 163,  421 => 161,  415 => 160,  405 => 156,  401 => 155,  397 => 153,  395 => 151,  394 => 150,  393 => 149,  392 => 148,  391 => 147,  388 => 146,  382 => 145,  379 => 144,  377 => 142,  376 => 141,  375 => 140,  374 => 139,  373 => 138,  371 => 137,  366 => 136,  364 => 135,  361 => 134,  355 => 133,  352 => 132,  350 => 130,  349 => 129,  348 => 128,  346 => 127,  341 => 126,  339 => 125,  324 => 113,  320 => 112,  309 => 104,  302 => 100,  296 => 97,  288 => 92,  270 => 76,  264 => 75,  255 => 72,  241 => 61,  226 => 48,  220 => 47,  211 => 44,  195 => 31,  191 => 30,  187 => 29,  181 => 26,  178 => 25,  174 => 23,  170 => 21,  168 => 20,  164 => 19,  155 => 12,  149 => 11,  135 => 7,  130 => 6,  124 => 5,  114 => 2,  108 => 1,  100 => 344,  97 => 327,  95 => 297,  92 => 296,  90 => 284,  87 => 283,  85 => 264,  82 => 263,  80 => 259,  77 => 258,  75 => 229,  72 => 228,  70 => 223,  67 => 222,  65 => 207,  62 => 206,  60 => 160,  57 => 159,  55 => 75,  52 => 74,  50 => 47,  47 => 46,  45 => 11,  42 => 10,  40 => 5,  37 => 4,  35 => 1,);
    }
}
