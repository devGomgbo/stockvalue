<?php

/* OroEmailBundle::macros.html.twig */
class __TwigTemplate_43c9e1dbd72071d31a2796d462893b9a1d351b3dc33e98fe7428266ebdea1469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0f1a5fc2cd7b68f628324e088776f33cfb73a2f97b2657c1932e94f07d222e2e = $this->env->getExtension("native_profiler");
        $__internal_0f1a5fc2cd7b68f628324e088776f33cfb73a2f97b2657c1932e94f07d222e2e->enter($__internal_0f1a5fc2cd7b68f628324e088776f33cfb73a2f97b2657c1932e94f07d222e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle::macros.html.twig"));

        // line 161
        echo "
";
        // line 235
        echo "
";
        // line 298
        echo "
";
        // line 320
        echo "
";
        // line 375
        echo "
";
        // line 418
        echo "
";
        // line 432
        echo "
";
        // line 454
        echo "
";
        // line 472
        echo "
";
        // line 491
        echo "
";
        // line 543
        echo "
";
        // line 553
        echo "
";
        // line 629
        echo "
";
        // line 669
        echo "
";
        
        $__internal_0f1a5fc2cd7b68f628324e088776f33cfb73a2f97b2657c1932e94f07d222e2e->leave($__internal_0f1a5fc2cd7b68f628324e088776f33cfb73a2f97b2657c1932e94f07d222e2e_prof);

    }

    // line 1
    public function getrenderAvailableVariablesWidget($__entityName__ = null, $__entityChoiceFieldId__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entityName" => $__entityName__,
            "entityChoiceFieldId" => $__entityChoiceFieldId__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_04ec349955a18ff112300616b87a384bc6e61d29c509005f2b44c1ddb26497c9 = $this->env->getExtension("native_profiler");
            $__internal_04ec349955a18ff112300616b87a384bc6e61d29c509005f2b44c1ddb26497c9->enter($__internal_04ec349955a18ff112300616b87a384bc6e61d29c509005f2b44c1ddb26497c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderAvailableVariablesWidget"));

            // line 2
            echo "    <script type=\"text/template\" id=\"oro-email-template-variables-template\">
        <div class=\"emailtemplate-variables oro-tabs tabbable\">
            <ul class=\"nav nav-tabs\">
                <li class=\"active\" id=\"oro-email-template-variables-system-tab\">
                    <a href=\"javascript:void(0);\" data-target=\"#oro-email-template-variables-system\" data-toggle=\"tab\">
                        ";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.emailtemplate.variables.system"), "html", null, true);
            echo "
                    </a>
                </li>
                <li id=\"oro-email-template-variables-entity-tab\">
                    <a href=\"javascript:void(0);\" data-target=\"#oro-email-template-variables-entity\" data-toggle=\"tab\">
                        ";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.emailtemplate.variables.entity"), "html", null, true);
            echo "
                    </a>
                </li>
            </ul>
            <div class=\"tab-content\">
                <div class=\"variables tab-pane active\" id=\"oro-email-template-variables-system\">
                    <%= variables.system %>
                </div>
                <div class=\"variables tab-pane\" id=\"oro-email-template-variables-entity\">
                </div>
            </div>
        </div>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-system-template\">
        <ul class=\"nav\">
            <% _.each(variables, function(variable, varName) { %>
            <li>
                <a href=\"javascript:void(0);\"
                   class=\"variable\"
                   title=\"<%= _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\">";
            // line 31
            echo "{{ <%= root %>.<%= varName %><% if(variable.filter){%>|<%= variable.filter %><% } %> }}";
            echo "</a>
                <span>&ndash; <%= variable.label %></span>
            </li>
            <% }); %>
        </ul>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-variable-template\">
        <li>
            <a href=\"javascript:void(0);\"
               class=\"variable\"
               title=\"<%= _.__('oro.email.emailtemplate.variable_title', {'variable_label': variable.label}) %>\"
            >";
            // line 42
            echo "{{ <%= varValue %> }}";
            echo "</a>
            <span>&ndash;</span>
            <ul class=\"caption\">
                <% for (var i = 1; i < breadcrumbs.length; i++) { %>
                <li>
                    <span><%= pathLabels[breadcrumbs[i]] %></span>
                    <span>/</span>
                </li>
                <% } %>
                <li><%= variable.label %></li>
            </ul>
        </li>
    </script>
    <script type=\"text/template\" id=\"oro-email-template-variables-entity-template\">
        <% var breadcrumbs = path.split('/'); breadcrumbs[0] = root; %>
        <ul class=\"breadcrumb\">
            <% var breadcrumbPath = ''; %>
            <% for (var i = 0; i < breadcrumbs.length; i++) { %>
            <% breadcrumbPath += '/' + breadcrumbs[i]; %>
            <% breadcrumbItemLabel = (i === 0 ? entityLabel : pathLabels[breadcrumbs[i]]); %>
            <li<% if (i === breadcrumbs.length - 1) { %> class=\"active\"<% } %>>
                <% if (i !== breadcrumbs.length - 1) { %>
                <a href=\"javascript:void(0);\"
                   class=\"reference\"
                   data-path=\"<%= breadcrumbPath.substring(root.length + 1) %>\"><%= breadcrumbItemLabel %></a>
                <span class=\"divider\">/&nbsp;</span>
                <% } else { %>
                    <%= breadcrumbItemLabel %>
                <% } %>
            </li>
            <% } %>
        </ul>
        <% var varPrefix = path.split('/'); varPrefix[0] = root; varPrefix = varPrefix.join('.'); %>
        <% if (!_.isEmpty(fields) || !_.isEmpty(relations)) { %>
        <ul class=\"nav groups\">
            <% if (!_.isEmpty(fields)) { %>
            <li>
                <div class=\"group-label\"><%= _.__('oro.entity.field_choice.fields') %></div>
                <ul class=\"nav\">
                <% var variableTemplate =  _.template(\$('#oro-email-template-variables-entity-variable-template').html()) %>
                <% _.each(fields, function(variable, varName) { %>
                    <%= variableTemplate({
                        varValue:    varPrefix + '.' + varName,
                        breadcrumbs: breadcrumbs,
                        pathLabels:  pathLabels,
                        variable:    variable
                    }) %>
                    ";
            // line 101
            echo "
                    ";
            // line 119
            echo "                <% }); %>
                </ul>
            </li>
            <% } %>
            <% if (!_.isEmpty(relations)) { %>
            <li>
                <div class=\"group-label\"><%= _.__('oro.entity.field_choice.relations') %></div>
                <ul class=\"nav\">
                    <% _.each(relations, function(variable, varName) { %>
                    <li>
                        <a href=\"javascript:void(0);\"
                           class=\"reference\"
                           data-path=\"<%= path + '/' + varName %>\"
                           title=\"<%= _.__('oro.email.emailtemplate.reference_title', {'variable_label': variable.label}) %>\">";
            // line 132
            echo "{{ <%= varPrefix %>.<%= varName %> }}";
            echo "</a>
                        <span>&ndash; <%= variable.label %></span>
                    </li>
                    <% }); %>
                </ul>
            </li>
            <% } %>
        </ul>
        <% } %>
    </script>

    ";
            // line 143
            $context["options"] = array("name" => "email-template-variables", "entityChoice" => ("#" .             // line 145
(isset($context["entityChoiceFieldId"]) ? $context["entityChoiceFieldId"] : $this->getContext($context, "entityChoiceFieldId"))), "view" => array("templateSelector" => "#oro-email-template-variables-template", "sectionTemplateSelector" => "#oro-email-template-variables-{sectionName}-template", "sectionContentSelector" => "#oro-email-template-variables-{sectionName}", "sectionTabSelector" => "#oro-email-template-variables-{sectionName}-tab"), "model" => array("attributes" => $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("oro_api_get_emailtemplate_variables")), "entityName" =>             // line 154
(isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")), "entityLabel" => $this->env->getExtension('translator')->trans($this->env->getExtension('oro_entity_config')->getClassConfigValue(            // line 155
(isset($context["entityName"]) ? $context["entityName"] : $this->getContext($context, "entityName")), "label"))));
            // line 158
            echo "    <div data-page-component-module=\"oroemail/js/app/components/email-variable-component\"
         data-page-component-options=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
            echo "\"></div>
";
            
            $__internal_04ec349955a18ff112300616b87a384bc6e61d29c509005f2b44c1ddb26497c9->leave($__internal_04ec349955a18ff112300616b87a384bc6e61d29c509005f2b44c1ddb26497c9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 162
    public function getrenderPreviewDialog($__formId__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "formId" => $__formId__,
            "title" => $__title__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_73e27498c0c702b0660c1a77af40a5146587d82a5bea79173d0db7071d0a40d0 = $this->env->getExtension("native_profiler");
            $__internal_73e27498c0c702b0660c1a77af40a5146587d82a5bea79173d0db7071d0a40d0->enter($__internal_73e27498c0c702b0660c1a77af40a5146587d82a5bea79173d0db7071d0a40d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderPreviewDialog"));

            // line 163
            echo "    <script type=\"text/javascript\">
        require(['jquery', 'underscore', 'orotranslation/js/translator', 'oroui/js/modal'],
        function(\$, _, __, Modal){
            \$(function () {
                var showEmailPreviewDialog = function(el) {
                    var iframeId = 'preview-frame';
                    var iframe = \$('<iframe />', {
                        name: iframeId,
                        id: iframeId,
                        'class': \"scrollable-container\",
                        frameborder: 0,
                        marginwidth: 0,
                        marginheight: 0,
                        allowfullscreen: true,
                        width: '100%',
                        height: '98%'
                    });

                    var form = \$('#";
            // line 181
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
            echo "');
                    var formAction = form.attr('action');

                    form.one('submit', function(e) {
                        if (!e.result) {
                            return;
                        }

                        var loader;
                        var confirmModal = new Modal({
                            title: __('Preview'),
                            content: '<div class=\"loading-content\">' + __('Loading...') + '</div>',
                            okText: __('OK'),
                            className: 'modal oro-modal-normal',
                            template: _.template('<% if (title) { %>' +
                                '<div class=\"modal-header\">' +
                                    '<% if (allowCancel) { %>' +
                                    '<a class=\"close\">×</a>' +
                                    '<% } %>' +
                                    '<h3><%- title %></h3>' +
                                '</div>' +
                                '<% } %>' +
                                '<div class=\"modal-body\"><%= content %></div>'
                            )
                        });
                        confirmModal.open();
                        confirmModal.\$content.append(iframe);
                        loader = confirmModal.\$content.find('.loading-content');

                        loader.show();
                        form.attr('target', iframeId);
                        form.attr('action', \$(el).attr('href'));

                        iframe.one('load', function() {
                            loader.hide();
                            form.removeAttr('target');
                            form.attr('action', formAction);
                        });

                        // prevent navigation form processing
                        e.stopImmediatePropagation();
                    });

                    form.submit();
                };

                \$('.dialog-form-renderer').click(function (e) {
                    showEmailPreviewDialog(this);
                    e.preventDefault();
                });
            });
        });
    </script>
";
            
            $__internal_73e27498c0c702b0660c1a77af40a5146587d82a5bea79173d0db7071d0a40d0->leave($__internal_73e27498c0c702b0660c1a77af40a5146587d82a5bea79173d0db7071d0a40d0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 241
    public function getemail_address_text($__emailAddress__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_d666e4b295d3204ddd46e72c647f8089293bd20c59f89cef95ae1b27e7993f52 = $this->env->getExtension("native_profiler");
            $__internal_d666e4b295d3204ddd46e72c647f8089293bd20c59f89cef95ae1b27e7993f52->enter($__internal_d666e4b295d3204ddd46e72c647f8089293bd20c59f89cef95ae1b27e7993f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_address_text"));

            // line 242
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('oro_entity')->getEntityName($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array())), "N/A"));
            
            $__internal_d666e4b295d3204ddd46e72c647f8089293bd20c59f89cef95ae1b27e7993f52->leave($__internal_d666e4b295d3204ddd46e72c647f8089293bd20c59f89cef95ae1b27e7993f52_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 250
    public function getemail_address_link($__emailAddress__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_1cb675231208d9cce636f80ced0316b11156bc3f34c2357baa627a45d0ba8778 = $this->env->getExtension("native_profiler");
            $__internal_1cb675231208d9cce636f80ced0316b11156bc3f34c2357baa627a45d0ba8778->enter($__internal_1cb675231208d9cce636f80ced0316b11156bc3f34c2357baa627a45d0ba8778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_address_link"));

            // line 251
            $context["label"] = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), $this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))), "method"))) : ($this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))), "method")));
            // line 252
            echo "    ";
            $context["route"] = $this->env->getExtension('oro_entity_config')->getClassRoute($this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "class", array()));
            // line 253
            echo "    ";
            if ( !(null === (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                // line 254
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), array("id" => $this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "id", array()))), "html", null, true);
                echo "\">
            ";
                // line 255
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 257
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "
    ";
            }
            
            $__internal_1cb675231208d9cce636f80ced0316b11156bc3f34c2357baa627a45d0ba8778->leave($__internal_1cb675231208d9cce636f80ced0316b11156bc3f34c2357baa627a45d0ba8778_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 266
    public function getemail_address_recipient_link($__emailAddress__ = null, $__emailAddressName__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "label" => $__label__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e559248353f5e0bc1bd07e8e16f96887bf0f08300599462a1a29d778550b414d = $this->env->getExtension("native_profiler");
            $__internal_e559248353f5e0bc1bd07e8e16f96887bf0f08300599462a1a29d778550b414d->enter($__internal_e559248353f5e0bc1bd07e8e16f96887bf0f08300599462a1a29d778550b414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_address_recipient_link"));

            // line 267
            $context["label"] = ((array_key_exists("label", $context)) ? (_twig_default_filter((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), ((array_key_exists("emailAddressName", $context)) ? (_twig_default_filter((isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName")), "N/A")) : ("N/A")))) : (((array_key_exists("emailAddressName", $context)) ? (_twig_default_filter((isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName")), "N/A")) : ("N/A"))));
            // line 268
            echo "    ";
            $context["route"] = $this->env->getExtension('oro_entity_config')->getClassRoute($this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "class", array()));
            // line 269
            echo "    ";
            if ( !(null === (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")))) {
                // line 270
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), array("id" => $this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "id", array()))), "html", null, true);
                echo "\">
            ";
                // line 271
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 273
                echo "        ";
                echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
                echo "
    ";
            }
            
            $__internal_e559248353f5e0bc1bd07e8e16f96887bf0f08300599462a1a29d778550b414d->leave($__internal_e559248353f5e0bc1bd07e8e16f96887bf0f08300599462a1a29d778550b414d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 285
    public function getemail_address($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2259174e80b893d23087b702e4784bad9a626b2bb8315759f071ed58f9082626 = $this->env->getExtension("native_profiler");
            $__internal_2259174e80b893d23087b702e4784bad9a626b2bb8315759f071ed58f9082626->enter($__internal_2259174e80b893d23087b702e4784bad9a626b2bb8315759f071ed58f9082626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_address"));

            // line 286
            if ((null === $this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()))) {
                // line 287
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter((isset($context["knownOnly"]) ? $context["knownOnly"] : $this->getContext($context, "knownOnly")), false)) : (false))) {
                    // line 288
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName")), "html", null, true);
                }
            } else {
                // line 291
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), false)) : (false))) {
                    // line 292
                    echo $this->getAttribute($this, "email_address_text", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))), "method");
                } else {
                    // line 294
                    echo $this->getAttribute($this, "email_address_link", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))), "method");
                }
            }
            
            $__internal_2259174e80b893d23087b702e4784bad9a626b2bb8315759f071ed58f9082626->leave($__internal_2259174e80b893d23087b702e4784bad9a626b2bb8315759f071ed58f9082626_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function getemail_address_recipient($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_acffbcdb4b7e1abd2bef11e646de36f416aaafd66002854b57ada5816894bfaa = $this->env->getExtension("native_profiler");
            $__internal_acffbcdb4b7e1abd2bef11e646de36f416aaafd66002854b57ada5816894bfaa->enter($__internal_acffbcdb4b7e1abd2bef11e646de36f416aaafd66002854b57ada5816894bfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_address_recipient"));

            // line 308
            if ((null === $this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()))) {
                // line 309
                if ( !((array_key_exists("knownOnly", $context)) ? (_twig_default_filter((isset($context["knownOnly"]) ? $context["knownOnly"] : $this->getContext($context, "knownOnly")), false)) : (false))) {
                    // line 310
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName")), "html", null, true);
                }
            } else {
                // line 313
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), false)) : (false))) {
                    // line 314
                    echo twig_escape_filter($this->env, (isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName")), "html", null, true);
                } else {
                    // line 316
                    echo $this->getAttribute($this, "email_address_recipient_link", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), 1 => (isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName"))), "method");
                }
            }
            
            $__internal_acffbcdb4b7e1abd2bef11e646de36f416aaafd66002854b57ada5816894bfaa->leave($__internal_acffbcdb4b7e1abd2bef11e646de36f416aaafd66002854b57ada5816894bfaa_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 327
    public function getemail_address_simple($__email__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "title" => $__title__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_952c3f04b0aa285906b02ecdcb515a4d431b24e4a1887689eda9bd49be8de1d3 = $this->env->getExtension("native_profiler");
            $__internal_952c3f04b0aa285906b02ecdcb515a4d431b24e4a1887689eda9bd49be8de1d3->enter($__internal_952c3f04b0aa285906b02ecdcb515a4d431b24e4a1887689eda9bd49be8de1d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_address_simple"));

            // line 328
            if ( !twig_test_empty((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")))) {
                // line 329
                echo "        ";
                $context["emailAddress"] = null;
                // line 330
                echo "        ";
                // line 331
                echo "        ";
                if ($this->getAttribute((isset($context["email"]) ? $context["email"] : null), "email", array(), "any", true, true)) {
                    // line 332
                    echo "            ";
                    if ( !twig_test_empty($this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "email", array()))) {
                        // line 333
                        echo "                ";
                        $context["emailAddress"] = $this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "email", array());
                        // line 334
                        echo "            ";
                    }
                    // line 335
                    echo "            ";
                    // line 336
                    echo "        ";
                } else {
                    // line 337
                    echo "            ";
                    $context["emailAddress"] = (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"));
                    // line 338
                    echo "        ";
                }
                // line 339
                echo "
        ";
                // line 340
                if (twig_test_empty((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                    // line 341
                    echo "            ";
                    $context["title"] = (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"));
                    // line 342
                    echo "        ";
                }
                // line 343
                echo "
        ";
                // line 344
                if ((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress"))) {
                    // line 345
                    echo "            <a href=\"mailto:";
                    echo twig_escape_filter($this->env, (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "html_attr");
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
                    echo "\">";
                    echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                    echo "</a>
        ";
                }
                // line 347
                echo "    ";
            }
            
            $__internal_952c3f04b0aa285906b02ecdcb515a4d431b24e4a1887689eda9bd49be8de1d3->leave($__internal_952c3f04b0aa285906b02ecdcb515a4d431b24e4a1887689eda9bd49be8de1d3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 357
    public function getrecipient_email_addresses($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5bb1d6d3509bedbf3247c7a41bbb8885ad7c10349089f4fac5b0730be2505eed = $this->env->getExtension("native_profiler");
            $__internal_5bb1d6d3509bedbf3247c7a41bbb8885ad7c10349089f4fac5b0730be2505eed->enter($__internal_5bb1d6d3509bedbf3247c7a41bbb8885ad7c10349089f4fac5b0730be2505eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "recipient_email_addresses"));

            // line 358
            $context["addresses"] = array();
            // line 359
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) ? $context["recipients"] : $this->getContext($context, "recipients")));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 360
                $context["address"] = $this->getAttribute($this, "email_address_recipient", array(0 => $this->getAttribute($context["recipient"], "emailAddress", array()), 1 => $this->getAttribute($context["recipient"], "name", array()), 2 => (isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), 3 => (isset($context["knownOnly"]) ? $context["knownOnly"] : $this->getContext($context, "knownOnly"))), "method");
                // line 361
                if ((twig_length_filter($this->env, (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address"))) > 0)) {
                    // line 362
                    $context["addresses"] = twig_array_merge((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")), array(0 => (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address"))));
                    // line 363
                    echo "        ";
                } else {
                    // line 364
                    echo "            ";
                    $context["addresses"] = twig_array_merge((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")), array(0 => $this->getAttribute($this->getAttribute($context["recipient"], "emailAddress", array()), "email", array())));
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 368
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")));
            $context['_iterated'] = false;
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
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 369
                echo twig_escape_filter($this->env, $context["address"], "html", null, true);
                // line 370
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo "; ";
                }
                // line 371
                echo "    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 372
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("N/A"), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_5bb1d6d3509bedbf3247c7a41bbb8885ad7c10349089f4fac5b0730be2505eed->leave($__internal_5bb1d6d3509bedbf3247c7a41bbb8885ad7c10349089f4fac5b0730be2505eed_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 383
    public function getattachments($__attachments__ = null, $__target__ = null, $__hasGrantReattach__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attachments" => $__attachments__,
            "target" => $__target__,
            "hasGrantReattach" => $__hasGrantReattach__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cfdcf8b9fe5fa49f410095927f90cb55e6b9d44c38f6d0663ae339561b2b99af = $this->env->getExtension("native_profiler");
            $__internal_cfdcf8b9fe5fa49f410095927f90cb55e6b9d44c38f6d0663ae339561b2b99af->enter($__internal_cfdcf8b9fe5fa49f410095927f90cb55e6b9d44c38f6d0663ae339561b2b99af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attachments"));

            // line 384
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachments"]) ? $context["attachments"] : $this->getContext($context, "attachments")));
            foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                // line 385
                if ((null === $this->getAttribute($context["attachment"], "embeddedContentId", array()))) {
                    // line 386
                    echo "            ";
                    $context["canCopyToRecord"] = (((((isset($context["hasGrantReattach"]) ? $context["hasGrantReattach"] : $this->getContext($context, "hasGrantReattach")) && array_key_exists("target", $context)) && $this->env->getExtension('oro_email')->canReAttach($context["attachment"], (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target"))))) ? (true) : (false));
                    // line 387
                    echo "            <li class=\"email-attachments-list-item\">
            <div class=\"dropdown link-to-record\">
                <a class=\"no-hash dropdown-toggle\" href=\"javascript: void(0);\" data-toggle=\"dropdown\">
                    <i class=\"icon icon-file-alt\"></i> ";
                    // line 390
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_formatter')->formatFilename($this->getAttribute($context["attachment"], "fileName", array())), "html", null, true);
                    echo "
                </a>
                <ul class=\"dropdown-menu ";
                    // line 392
                    echo (((isset($context["canCopyToRecord"]) ? $context["canCopyToRecord"] : $this->getContext($context, "canCopyToRecord"))) ? ("") : ("one"));
                    echo "\" role=\"menu\" aria-labelledby=\"dropdownMenu\">
                    <a class=\"no-hash\" tabindex=\"-1\" href=\"";
                    // line 393
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_attachment", array("id" => $this->getAttribute($context["attachment"], "id", array()))), "html", null, true);
                    echo "\">
                        ";
                    // line 394
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.attachment.save"), "html", null, true);
                    echo "
                    </a>
                    ";
                    // line 396
                    if ((isset($context["canCopyToRecord"]) ? $context["canCopyToRecord"] : $this->getContext($context, "canCopyToRecord"))) {
                        // line 397
                        echo "                        ";
                        $context["options"] = array("view" => "oroemail/js/app/views/email-attachment-link-view", "url" => $this->env->getExtension('routing')->getPath("oro_email_attachment_link", array("id" => $this->getAttribute(                        // line 400
$context["attachment"], "id", array()), "targetActivityClass" => $this->env->getExtension('oro_entity')->getClassName(                        // line 401
(isset($context["target"]) ? $context["target"] : $this->getContext($context, "target"))), "targetActivityId" => $this->getAttribute(                        // line 402
(isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), "id", array()))));
                        // line 405
                        echo "                    <a tabindex=\"-1\" data-page-component-module=\"oroui/js/app/components/view-component\"
                        class=\"attachment\"
                        data-page-component-options=\"";
                        // line 407
                        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
                        echo "\"
                        href=\"";
                        // line 408
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "url", array()), "html", null, true);
                        echo "\">
                        ";
                        // line 409
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.attachment.copy_to_record"), "html", null, true);
                        echo "
                    </a>
                    ";
                    }
                    // line 412
                    echo "                </ul>
            </div>
        </li>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_cfdcf8b9fe5fa49f410095927f90cb55e6b9d44c38f6d0663ae339561b2b99af->leave($__internal_cfdcf8b9fe5fa49f410095927f90cb55e6b9d44c38f6d0663ae339561b2b99af_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 425
    public function getbody($__emailBody__ = null, $__cssClass__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailBody" => $__emailBody__,
            "cssClass" => $__cssClass__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5233651188e4e922cdf22d86bc7a3f43f031b52eeca203fdf35e0e54ea2221d8 = $this->env->getExtension("native_profiler");
            $__internal_5233651188e4e922cdf22d86bc7a3f43f031b52eeca203fdf35e0e54ea2221d8->enter($__internal_5233651188e4e922cdf22d86bc7a3f43f031b52eeca203fdf35e0e54ea2221d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "body"));

            // line 426
            if ($this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : $this->getContext($context, "emailBody")), "bodyIsText", array())) {
                // line 427
                echo "<pre class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")), "html", null, true);
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : $this->getContext($context, "emailBody")), "bodyContent", array()), "html", null, true);
                echo "</pre>";
            } else {
                // line 429
                echo "<iframe sandbox=\"\" class=\"email-body";
                if (array_key_exists("cssClass", $context)) {
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["cssClass"]) ? $context["cssClass"] : $this->getContext($context, "cssClass")), "html", null, true);
                }
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_email_body", array("id" => $this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : $this->getContext($context, "emailBody")), "id", array()))), "html", null, true);
                echo "\"></iframe>";
            }
            
            $__internal_5233651188e4e922cdf22d86bc7a3f43f031b52eeca203fdf35e0e54ea2221d8->leave($__internal_5233651188e4e922cdf22d86bc7a3f43f031b52eeca203fdf35e0e54ea2221d8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 442
    public function getemail_participant_name_or_me($__emailAddress__ = null, $__emailAddressName__ = null, $__noLink__ = null, $__knownOnly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailAddress" => $__emailAddress__,
            "emailAddressName" => $__emailAddressName__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c7bf6adbc7469423d5778e0d0041274da27754e555a2a8c6b5b99f00876c71d4 = $this->env->getExtension("native_profiler");
            $__internal_c7bf6adbc7469423d5778e0d0041274da27754e555a2a8c6b5b99f00876c71d4->enter($__internal_c7bf6adbc7469423d5778e0d0041274da27754e555a2a8c6b5b99f00876c71d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_participant_name_or_me"));

            // line 443
            if (( !(null === $this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array())) && ($this->getAttribute($this->getAttribute((isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), "owner", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 444
                if (((array_key_exists("noLink", $context)) ? (_twig_default_filter((isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), false)) : (false))) {
                    // line 445
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('translator')->trans("Me")), "html", null, true);
                } else {
                    // line 447
                    echo $this->getAttribute($this, "email_address_link", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), 1 => twig_lower_filter($this->env, $this->env->getExtension('translator')->trans("Me"))), "method");
                }
            } else {
                // line 450
                $context["name"] = _twig_default_filter($this->env->getExtension('oro_email')->getEmailAddressName((isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName"))), $this->env->getExtension('oro_email')->getEmailAddress((isset($context["emailAddressName"]) ? $context["emailAddressName"] : $this->getContext($context, "emailAddressName"))));
                // line 451
                echo $this->getAttribute($this, "email_address", array(0 => (isset($context["emailAddress"]) ? $context["emailAddress"] : $this->getContext($context, "emailAddress")), 1 => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), 2 => (isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), 3 => (isset($context["knownOnly"]) ? $context["knownOnly"] : $this->getContext($context, "knownOnly"))), "method");
            }
            
            $__internal_c7bf6adbc7469423d5778e0d0041274da27754e555a2a8c6b5b99f00876c71d4->leave($__internal_c7bf6adbc7469423d5778e0d0041274da27754e555a2a8c6b5b99f00876c71d4_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 462
    public function getemail_participants_name($__recipients__ = null, $__noLink__ = null, $__knownOnly__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "recipients" => $__recipients__,
            "noLink" => $__noLink__,
            "knownOnly" => $__knownOnly__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3cf34b62eef2c81f08d7242d991372bdc7751191b443708743e6af7c53c285df = $this->env->getExtension("native_profiler");
            $__internal_3cf34b62eef2c81f08d7242d991372bdc7751191b443708743e6af7c53c285df->enter($__internal_3cf34b62eef2c81f08d7242d991372bdc7751191b443708743e6af7c53c285df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_participants_name"));

            // line 463
            $context["recipientHtmlCollection"] = array();
            // line 464
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipients"]) ? $context["recipients"] : $this->getContext($context, "recipients")));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 465
                echo "        ";
                ob_start();
                // line 466
                echo "<span class=\"email-recipient\">";
                echo $this->getAttribute($this, "email_participant_name_or_me", array(0 => $this->getAttribute($context["recipient"], "emailAddress", array()), 1 => $this->getAttribute($context["recipient"], "name", array()), 2 => (isset($context["noLink"]) ? $context["noLink"] : $this->getContext($context, "noLink")), 3 => (isset($context["knownOnly"]) ? $context["knownOnly"] : $this->getContext($context, "knownOnly"))), "method");
                echo "</span>";
                $context["recipientHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 468
                echo "        ";
                $context["recipientHtmlCollection"] = twig_array_merge((isset($context["recipientHtmlCollection"]) ? $context["recipientHtmlCollection"] : $this->getContext($context, "recipientHtmlCollection")), array(0 => (isset($context["recipientHtml"]) ? $context["recipientHtml"] : $this->getContext($context, "recipientHtml"))));
                // line 469
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            echo "    ";
            echo twig_join_filter((isset($context["recipientHtmlCollection"]) ? $context["recipientHtmlCollection"] : $this->getContext($context, "recipientHtmlCollection")), ", ");
            
            $__internal_3cf34b62eef2c81f08d7242d991372bdc7751191b443708743e6af7c53c285df->leave($__internal_3cf34b62eef2c81f08d7242d991372bdc7751191b443708743e6af7c53c285df_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 478
    public function getdate_smart_format($__date__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "date" => $__date__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8a1b9dbbc4c79926a82bb1ec76665716b116c6eece92b3ca9fbbea157428c991 = $this->env->getExtension("native_profiler");
            $__internal_8a1b9dbbc4c79926a82bb1ec76665716b116c6eece92b3ca9fbbea157428c991->enter($__internal_8a1b9dbbc4c79926a82bb1ec76665716b116c6eece92b3ca9fbbea157428c991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "date_smart_format"));

            // line 479
            if (($this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env, (isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")))) == $this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env)))) {
                // line 481
                echo "        ";
                echo $this->env->getExtension('oro_locale_datetime')->formatTime((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")));
            } elseif (($this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env,             // line 482
(isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")))) == $this->env->getExtension('oro_locale_datetime')->formatDate(twig_date_converter($this->env, "-1days")))) {
                // line 483
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('translator')->trans("yesterday")), "html", null, true);
            } elseif (($this->getAttribute(twig_date_converter($this->env,             // line 484
(isset($context["date"]) ? $context["date"] : $this->getContext($context, "date"))), "format", array(0 => "Y"), "method") == $this->getAttribute(twig_date_converter($this->env), "format", array(0 => "Y"), "method"))) {
                // line 486
                echo "        ";
                echo $this->env->getExtension('oro_locale_datetime')->formatDay((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")));
            } else {
                // line 488
                echo $this->env->getExtension('oro_locale_datetime')->formatDate((isset($context["date"]) ? $context["date"] : $this->getContext($context, "date")));
            }
            
            $__internal_8a1b9dbbc4c79926a82bb1ec76665716b116c6eece92b3ca9fbbea157428c991->leave($__internal_8a1b9dbbc4c79926a82bb1ec76665716b116c6eece92b3ca9fbbea157428c991_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 497
    public function getemail_detailed_info_table($__email__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "email" => $__email__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f432be5c15f8797b55478980805a550728c95450da0b5d302e24e2e50d52ed3b = $this->env->getExtension("native_profiler");
            $__internal_f432be5c15f8797b55478980805a550728c95450da0b5d302e24e2e50d52ed3b->enter($__internal_f432be5c15f8797b55478980805a550728c95450da0b5d302e24e2e50d52ed3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_detailed_info_table"));

            // line 498
            echo "    ";
            $context["recipientsTo"] = array();
            // line 499
            echo "    ";
            $context["recipientsCc"] = array();
            // line 500
            echo "    ";
            $context["recipientsBcc"] = array();
            // line 501
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "recipients", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                // line 502
                echo "        ";
                if (($this->getAttribute($context["recipient"], "type", array()) == "to")) {
                    // line 503
                    echo "            ";
                    $context["recipientsTo"] = twig_array_merge((isset($context["recipientsTo"]) ? $context["recipientsTo"] : $this->getContext($context, "recipientsTo")), array(0 => twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "name", array()))));
                    // line 504
                    echo "        ";
                } elseif (($this->getAttribute($context["recipient"], "type", array()) == "cc")) {
                    // line 505
                    echo "            ";
                    $context["recipientsCc"] = twig_array_merge((isset($context["recipientsCc"]) ? $context["recipientsCc"] : $this->getContext($context, "recipientsCc")), array(0 => twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "name", array()))));
                    // line 506
                    echo "        ";
                } elseif (($this->getAttribute($context["recipient"], "type", array()) == "bcc")) {
                    // line 507
                    echo "            ";
                    $context["recipientsBcc"] = twig_array_merge((isset($context["recipientsBcc"]) ? $context["recipientsBcc"] : $this->getContext($context, "recipientsBcc")), array(0 => twig_escape_filter($this->env, $this->getAttribute($context["recipient"], "name", array()))));
                    // line 508
                    echo "        ";
                }
                // line 509
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 510
            echo "    ";
            $context["fromUserName"] = $this->env->getExtension('oro_email')->getEmailAddressName($this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "fromName", array()));
            // line 511
            echo "    ";
            $context["fromEmailAddress"] = (("&lt;" . $this->env->getExtension('oro_email')->getEmailAddress($this->getAttribute((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "fromName", array()))) . "&gt;");
            // line 512
            echo "    ";
            $context["data"] = array(0 => array("label" => $this->env->getExtension('translator')->trans("From"), "value" => ((            // line 514
(isset($context["fromUserName"]) ? $context["fromUserName"] : $this->getContext($context, "fromUserName"))) ? (((("<b>" . twig_escape_filter($this->env, (isset($context["fromUserName"]) ? $context["fromUserName"] : $this->getContext($context, "fromUserName")))) . "</b> ") . (isset($context["fromEmailAddress"]) ? $context["fromEmailAddress"] : $this->getContext($context, "fromEmailAddress")))) : ((("<b>" . (isset($context["fromEmailAddress"]) ? $context["fromEmailAddress"] : $this->getContext($context, "fromEmailAddress"))) . "</b>"))), "cssClass" => "autor"), 1 => array("label" => $this->env->getExtension('translator')->trans("To"), "value" => twig_join_filter(            // line 518
(isset($context["recipientsTo"]) ? $context["recipientsTo"] : $this->getContext($context, "recipientsTo")), ",<br/>")), 2 => array("label" => $this->env->getExtension('translator')->trans("Cc"), "value" => twig_join_filter(            // line 521
(isset($context["recipientsCc"]) ? $context["recipientsCc"] : $this->getContext($context, "recipientsCc")), ",<br/>")), 3 => array("label" => $this->env->getExtension('translator')->trans("Bcc"), "value" => twig_join_filter(            // line 524
(isset($context["recipientsBcc"]) ? $context["recipientsBcc"] : $this->getContext($context, "recipientsBcc")), ",<br/>")), 4 => array("label" => $this->env->getExtension('translator')->trans("Date"), "value" => twig_escape_filter($this->env, $this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute(            // line 527
(isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "sentAt", array())))), 5 => array("label" => $this->env->getExtension('translator')->trans("Subject"), "value" => twig_escape_filter($this->env, $this->getAttribute(            // line 530
(isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "subject", array()))));
            // line 532
            echo "    <ul class=\"form-horizontal\">
    ";
            // line 533
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 534
                echo "        ";
                if ( !twig_test_empty($this->getAttribute($context["item"], "value", array()))) {
                    // line 535
                    echo "        <li class=\"control-group\">
            <label class=\"control-label\">";
                    // line 536
                    echo $this->getAttribute($context["item"], "label", array());
                    echo ":</label>
            <div class=\"controls ";
                    // line 537
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["item"], "cssClass", array(), "any", true, true)) ? ($this->getAttribute($context["item"], "cssClass", array())) : ("")), "html", null, true);
                    echo "\">";
                    echo $this->getAttribute($context["item"], "value", array());
                    echo "</div>
        </li>
        ";
                }
                // line 540
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 541
            echo "    </ul>
";
            
            $__internal_f432be5c15f8797b55478980805a550728c95450da0b5d302e24e2e50d52ed3b->leave($__internal_f432be5c15f8797b55478980805a550728c95450da0b5d302e24e2e50d52ed3b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 549
    public function getemail_short_body($__emailBody__ = null, $__length__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "emailBody" => $__emailBody__,
            "length" => $__length__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aec662be5767d2874e2dc8cac687ead32c56a506a9dcbce79cf117b77cd0c684 = $this->env->getExtension("native_profiler");
            $__internal_aec662be5767d2874e2dc8cac687ead32c56a506a9dcbce79cf117b77cd0c684->enter($__internal_aec662be5767d2874e2dc8cac687ead32c56a506a9dcbce79cf117b77cd0c684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_short_body"));

            // line 550
            $context["length"] = ((array_key_exists("length", $context)) ? (_twig_default_filter((isset($context["length"]) ? $context["length"] : $this->getContext($context, "length")), 150)) : (150));
            // line 551
            echo strtr(twig_slice($this->env, $this->env->getExtension('oro_regex')->pregReplace(strip_tags($this->env->getExtension('oro_ui.html_tag')->htmlPurify($this->getAttribute((isset($context["emailBody"]) ? $context["emailBody"] : $this->getContext($context, "emailBody")), "bodyContent", array()))), "/-{2,}/", "--"), 0, (isset($context["length"]) ? $context["length"] : $this->getContext($context, "length"))), array("--" => "&mdash;"));
            echo "
";
            
            $__internal_aec662be5767d2874e2dc8cac687ead32c56a506a9dcbce79cf117b77cd0c684->leave($__internal_aec662be5767d2874e2dc8cac687ead32c56a506a9dcbce79cf117b77cd0c684_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 559
    public function getemail_contexts($__entity__ = null, $__target__ = null, $__checkTarget__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "target" => $__target__,
            "checkTarget" => $__checkTarget__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ee9cad6117c3d3f0999f21c29692fc133c65e1184b14ead1cf91b48acb448d2c = $this->env->getExtension("native_profiler");
            $__internal_ee9cad6117c3d3f0999f21c29692fc133c65e1184b14ead1cf91b48acb448d2c->enter($__internal_ee9cad6117c3d3f0999f21c29692fc133c65e1184b14ead1cf91b48acb448d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "email_contexts"));

            // line 560
            echo "    <script type=\"text/template\" id=\"email-context-activity-list\">
        <div class=\"context-item\" style=\"border: none\" data-cid=\"<%= entity.cid %>\">
                <span data-id=\"<%= entity.get('targetId') %>\">
                    <span class=\"<%= entity.get('icon') %>\"></span>

                    <% if (entity.get('link')) { %>
                        <a href=\"<%= entity.get('link') %>\">
                            <span class=\"context-label\"><%= entity.get('title') %></span>
                        </a>
                    <% } else { %>
                        <span class=\"context-label\"><%= entity.get('title') %></span>
                    <% }  %>
                    ";
            // line 572
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))) {
                // line 573
                echo "                        <i class=\"icon-remove\"></i>
                    ";
            }
            // line 575
            echo "                </span>
        </div>
    </script>

    ";
            // line 579
            if (twig_test_empty((isset($context["checkTarget"]) ? $context["checkTarget"] : $this->getContext($context, "checkTarget")))) {
                // line 580
                echo "        ";
                $context["checkTarget"] = false;
                // line 581
                echo "    ";
            }
            // line 582
            echo "
    ";
            // line 583
            $context["contextTargetArray"] = array();
            // line 584
            echo "    ";
            $context["targetClassNameEncoded"] = $this->env->getExtension('oro_entity')->getClassName((isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), true);
            // line 585
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "getActivityTargetEntities", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 586
                echo "        ";
                $context["itemClassName"] = $this->env->getExtension('oro_entity')->getClassName($context["item"]);
                // line 587
                echo "        ";
                $context["itemClassNameEncoded"] = $this->env->getExtension('oro_entity')->getClassName($context["item"], true);
                // line 588
                echo "        ";
                $context["contextTarget"] = array("entityId" => $this->getAttribute(                // line 589
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "targetId" => $this->getAttribute(                // line 590
$context["item"], "id", array()), "targetClassName" =>                 // line 591
(isset($context["itemClassNameEncoded"]) ? $context["itemClassNameEncoded"] : $this->getContext($context, "itemClassNameEncoded")), "title" => $this->env->getExtension('oro_entity')->getEntityName(                // line 592
$context["item"]), "icon" => $this->env->getExtension('oro_entity_config')->getClassConfigValue(                // line 593
(isset($context["itemClassName"]) ? $context["itemClassName"] : $this->getContext($context, "itemClassName")), "icon"), "link" => (($this->env->getExtension('oro_entity_config')->getClassMetadataValue(                // line 594
(isset($context["itemClassName"]) ? $context["itemClassName"] : $this->getContext($context, "itemClassName")), "routeView")) ? ($this->env->getExtension('routing')->getPath($this->env->getExtension('oro_entity_config')->getClassRoute((isset($context["itemClassName"]) ? $context["itemClassName"] : $this->getContext($context, "itemClassName"))), array("id" => $this->getAttribute($context["item"], "id", array())))) : (false)));
                // line 596
                echo "        ";
                if (($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("VIEW", $context["item"]) &&  !(($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) == $this->getAttribute($context["item"], "id", array())) && ($this->env->getExtension('oro_entity')->getClassName($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) == (isset($context["itemClassName"]) ? $context["itemClassName"] : $this->getContext($context, "itemClassName")))))) {
                    // line 597
                    echo "            ";
                    $context["contextTargetArray"] = twig_array_merge((isset($context["contextTargetArray"]) ? $context["contextTargetArray"] : $this->getContext($context, "contextTargetArray")), array(0 => (isset($context["contextTarget"]) ? $context["contextTarget"] : $this->getContext($context, "contextTarget"))));
                    // line 598
                    echo "        ";
                }
                // line 599
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 600
            echo "
    ";
            // line 601
            $context["options"] = array("contextTargets" =>             // line 602
(isset($context["contextTargetArray"]) ? $context["contextTargetArray"] : $this->getContext($context, "contextTargetArray")), "entityId" => $this->getAttribute(            // line 603
(isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "target" => false, "checkTarget" =>             // line 605
(isset($context["checkTarget"]) ? $context["checkTarget"] : $this->getContext($context, "checkTarget")));
            // line 607
            echo "
    ";
            // line 608
            if ((isset($context["checkTarget"]) ? $context["checkTarget"] : $this->getContext($context, "checkTarget"))) {
                // line 609
                echo "        ";
                $context["targetEntity"] = array("target" => array("id" => $this->getAttribute(                // line 611
(isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), "id", array()), "className" =>                 // line 612
(isset($context["targetClassNameEncoded"]) ? $context["targetClassNameEncoded"] : $this->getContext($context, "targetClassNameEncoded"))));
                // line 615
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), (isset($context["targetEntity"]) ? $context["targetEntity"] : $this->getContext($context, "targetEntity")));
                // line 616
                echo "    ";
            }
            // line 617
            echo "
    <div class=\"email-context-activity\"
         data-page-component-module=\"oroemail/js/app/components/email-context-activity-component\"
         data-page-component-options=\"";
            // line 620
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
            echo "\"
         data-layout=\"separate\">
        <div class=\"email-context-activity-label\">
            ";
            // line 623
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.email.contexts.label"), "html", null, true);
            echo "
        </div>
        <div class=\"email-context-activity-items\">
        </div>
    </div>
";
            
            $__internal_ee9cad6117c3d3f0999f21c29692fc133c65e1184b14ead1cf91b48acb448d2c->leave($__internal_ee9cad6117c3d3f0999f21c29692fc133c65e1184b14ead1cf91b48acb448d2c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 633
    public function getrenderMailboxConfigTitleAndButtons($__pageTitle__ = null, $__buttons__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9a1c96d754d91b71d6d724286935bc72e04e61ee458259c6c4cc61602b7a9399 = $this->env->getExtension("native_profiler");
            $__internal_9a1c96d754d91b71d6d724286935bc72e04e61ee458259c6c4cc61602b7a9399->enter($__internal_9a1c96d754d91b71d6d724286935bc72e04e61ee458259c6c4cc61602b7a9399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderMailboxConfigTitleAndButtons"));

            // line 634
            echo "    <div class=\"container-fluid configuration-header clearfix\">
        ";
            // line 635
            if (twig_test_iterable((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")))) {
                // line 636
                echo "            <div class=\"customer-info customer-simple pull-left\">
                ";
                // line 637
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                    // line 638
                    echo "                    ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 639
                        echo "                        <div class=\"sub-title\">
                            ";
                        // line 640
                        if (((twig_test_iterable($context["title"]) && $this->getAttribute($context["title"], "link", array(), "any", true, true)) && $this->getAttribute($context["title"], "label", array(), "any", true, true))) {
                            // line 641
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "link", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "label", array()), "html", null, true);
                            echo "</a>
                            ";
                        } else {
                            // line 643
                            echo "                                ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 645
                        echo "                        </div>
                        <span class=\"separator\">/</span>
                    ";
                    } else {
                        // line 648
                        echo "                        <h1 class=\"user-name\">
                            ";
                        // line 649
                        if (((twig_test_iterable($context["title"]) && $this->getAttribute($context["title"], "link", array(), "any", true, true)) && $this->getAttribute($context["title"], "label", array(), "any", true, true))) {
                            // line 650
                            echo "                                <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "link", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["title"], "label", array()), "html", null, true);
                            echo "</a>
                            ";
                        } else {
                            // line 652
                            echo "                                ";
                            echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                            echo "
                            ";
                        }
                        // line 654
                        echo "                        </h1>
                    ";
                    }
                    // line 656
                    echo "                ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 657
                echo "            </div>
        ";
            } else {
                // line 659
                echo "            <h1>
                ";
                // line 660
                echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
                echo "
            </h1>
        ";
            }
            // line 663
            echo "
        <div class=\"pull-right title-buttons-container\">
            ";
            // line 665
            echo (isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons"));
            echo "
        </div>
    </div>
";
            
            $__internal_9a1c96d754d91b71d6d724286935bc72e04e61ee458259c6c4cc61602b7a9399->leave($__internal_9a1c96d754d91b71d6d724286935bc72e04e61ee458259c6c4cc61602b7a9399_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEmailBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1473 => 665,  1469 => 663,  1463 => 660,  1460 => 659,  1456 => 657,  1442 => 656,  1438 => 654,  1432 => 652,  1424 => 650,  1422 => 649,  1419 => 648,  1414 => 645,  1408 => 643,  1400 => 641,  1398 => 640,  1395 => 639,  1392 => 638,  1375 => 637,  1372 => 636,  1370 => 635,  1367 => 634,  1351 => 633,  1331 => 623,  1325 => 620,  1320 => 617,  1317 => 616,  1314 => 615,  1312 => 612,  1311 => 611,  1309 => 609,  1307 => 608,  1304 => 607,  1302 => 605,  1301 => 603,  1300 => 602,  1299 => 601,  1296 => 600,  1290 => 599,  1287 => 598,  1284 => 597,  1281 => 596,  1279 => 594,  1278 => 593,  1277 => 592,  1276 => 591,  1275 => 590,  1274 => 589,  1272 => 588,  1269 => 587,  1266 => 586,  1261 => 585,  1258 => 584,  1256 => 583,  1253 => 582,  1250 => 581,  1247 => 580,  1245 => 579,  1239 => 575,  1235 => 573,  1233 => 572,  1219 => 560,  1202 => 559,  1186 => 551,  1184 => 550,  1168 => 549,  1153 => 541,  1147 => 540,  1139 => 537,  1135 => 536,  1132 => 535,  1129 => 534,  1125 => 533,  1122 => 532,  1120 => 530,  1119 => 527,  1118 => 524,  1117 => 521,  1116 => 518,  1115 => 514,  1113 => 512,  1110 => 511,  1107 => 510,  1101 => 509,  1098 => 508,  1095 => 507,  1092 => 506,  1089 => 505,  1086 => 504,  1083 => 503,  1080 => 502,  1075 => 501,  1072 => 500,  1069 => 499,  1066 => 498,  1051 => 497,  1036 => 488,  1032 => 486,  1030 => 484,  1028 => 483,  1026 => 482,  1023 => 481,  1021 => 479,  1006 => 478,  991 => 470,  985 => 469,  982 => 468,  977 => 466,  974 => 465,  969 => 464,  967 => 463,  950 => 462,  935 => 451,  933 => 450,  929 => 447,  926 => 445,  924 => 444,  922 => 443,  904 => 442,  882 => 429,  872 => 427,  870 => 426,  854 => 425,  832 => 412,  826 => 409,  822 => 408,  818 => 407,  814 => 405,  812 => 402,  811 => 401,  810 => 400,  808 => 397,  806 => 396,  801 => 394,  797 => 393,  793 => 392,  788 => 390,  783 => 387,  780 => 386,  778 => 385,  774 => 384,  757 => 383,  738 => 372,  725 => 371,  721 => 370,  719 => 369,  701 => 368,  693 => 364,  690 => 363,  688 => 362,  686 => 361,  684 => 360,  680 => 359,  678 => 358,  661 => 357,  646 => 347,  636 => 345,  634 => 344,  631 => 343,  628 => 342,  625 => 341,  623 => 340,  620 => 339,  617 => 338,  614 => 337,  611 => 336,  609 => 335,  606 => 334,  603 => 333,  600 => 332,  597 => 331,  595 => 330,  592 => 329,  590 => 328,  574 => 327,  558 => 316,  555 => 314,  553 => 313,  549 => 310,  547 => 309,  545 => 308,  527 => 307,  511 => 294,  508 => 292,  506 => 291,  502 => 288,  500 => 287,  498 => 286,  480 => 285,  462 => 273,  457 => 271,  452 => 270,  449 => 269,  446 => 268,  444 => 267,  427 => 266,  409 => 257,  404 => 255,  399 => 254,  396 => 253,  393 => 252,  391 => 251,  375 => 250,  361 => 242,  346 => 241,  278 => 181,  258 => 163,  242 => 162,  226 => 159,  223 => 158,  221 => 155,  220 => 154,  219 => 145,  218 => 143,  204 => 132,  189 => 119,  186 => 101,  136 => 42,  122 => 31,  100 => 12,  92 => 7,  85 => 2,  69 => 1,  61 => 669,  58 => 629,  55 => 553,  52 => 543,  49 => 491,  46 => 472,  43 => 454,  40 => 432,  37 => 418,  34 => 375,  31 => 320,  28 => 298,  25 => 235,  22 => 161,);
    }
}
