<?php

/* OroUIBundle:actions:update.html.twig */
class __TwigTemplate_f3f9e51ad4dad149b1e017847b4d2c8369bca7e08365487631680044284018ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'before_content_addition' => array($this, 'block_before_content_addition'),
            'content' => array($this, 'block_content'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'breadcrumbs' => array($this, 'block_breadcrumbs'),
            'breadcrumbMessage' => array($this, 'block_breadcrumbMessage'),
            'stats' => array($this, 'block_stats'),
            'navButtons' => array($this, 'block_navButtons'),
            'pageActions' => array($this, 'block_pageActions'),
            'content_data' => array($this, 'block_content_data'),
            'navigation_content_tags' => array($this, 'block_navigation_content_tags'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return $this->loadTemplate((((isset($context["isWidgetContext"]) ? $context["isWidgetContext"] : $this->getContext($context, "isWidgetContext"))) ? ("OroFormBundle:Layout:widgetForm.html.twig") : ($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()))), "OroUIBundle:actions:update.html.twig", 2);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7900cce0e07c39b2f2f2a711d655dc939a16452f8eb5847d4bcc217cf5fcae85 = $this->env->getExtension("native_profiler");
        $__internal_7900cce0e07c39b2f2f2a711d655dc939a16452f8eb5847d4bcc217cf5fcae85->enter($__internal_7900cce0e07c39b2f2f2a711d655dc939a16452f8eb5847d4bcc217cf5fcae85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:actions:update.html.twig"));

        // line 1
        $context["isWidgetContext"] = ((array_key_exists("isWidgetContext", $context)) ? ((isset($context["isWidgetContext"]) ? $context["isWidgetContext"] : $this->getContext($context, "isWidgetContext"))) : (false));
        // line 4
        $context["navigationMacro"] = $this->loadTemplate("OroNavigationBundle:Include:contentTags.html.twig", "OroUIBundle:actions:update.html.twig", 4);
        // line 5
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:update.html.twig", 5);
        // line 7
        $context["entity"] = ((array_key_exists("entity", $context)) ? ((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) : (null));
        // line 2
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7900cce0e07c39b2f2f2a711d655dc939a16452f8eb5847d4bcc217cf5fcae85->leave($__internal_7900cce0e07c39b2f2f2a711d655dc939a16452f8eb5847d4bcc217cf5fcae85_prof);

    }

    // line 9
    public function block_before_content_addition($context, array $blocks = array())
    {
        $__internal_46bcd770369de56b77d7e2c83501a33d4cb9d34e6276f4337016ebfec429d85c = $this->env->getExtension("native_profiler");
        $__internal_46bcd770369de56b77d7e2c83501a33d4cb9d34e6276f4337016ebfec429d85c->enter($__internal_46bcd770369de56b77d7e2c83501a33d4cb9d34e6276f4337016ebfec429d85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "before_content_addition"));

        // line 10
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_before_content_addition", $context)) ? (_twig_default_filter((isset($context["update_before_content_addition"]) ? $context["update_before_content_addition"] : $this->getContext($context, "update_before_content_addition")), "update_before_content_addition")) : ("update_before_content_addition")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
        
        $__internal_46bcd770369de56b77d7e2c83501a33d4cb9d34e6276f4337016ebfec429d85c->leave($__internal_46bcd770369de56b77d7e2c83501a33d4cb9d34e6276f4337016ebfec429d85c_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c06f36644d8459646d5101e04d7a0711680a12631f4f2937b1f6a73ff5bd559 = $this->env->getExtension("native_profiler");
        $__internal_5c06f36644d8459646d5101e04d7a0711680a12631f4f2937b1f6a73ff5bd559->enter($__internal_5c06f36644d8459646d5101e04d7a0711680a12631f4f2937b1f6a73ff5bd559_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    ";
        if ((((isset($context["isWidgetContext"]) ? $context["isWidgetContext"] : $this->getContext($context, "isWidgetContext")) && array_key_exists("savedId", $context)) && (isset($context["savedId"]) ? $context["savedId"] : $this->getContext($context, "savedId")))) {
            // line 15
            echo "        <script type=\"text/javascript\">
            require(['oroui/js/widget-manager'],
            function(widgetManager) {
                widgetManager.getWidgetInstance(
                    ";
            // line 19
            echo twig_jsonencode_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_wid"), "method"));
            echo ",
                    function (widget) {
                        widget.trigger('formSave', ";
            // line 21
            echo twig_jsonencode_filter((isset($context["savedId"]) ? $context["savedId"] : $this->getContext($context, "savedId")));
            echo ");
                    }
                );
            });
        </script>
    ";
        } else {
            // line 27
            echo "
    ";
            // line 28
            if (( !array_key_exists("addQueryParameters", $context) || ((isset($context["addQueryParameters"]) ? $context["addQueryParameters"] : $this->getContext($context, "addQueryParameters")) == true))) {
                // line 29
                echo "        ";
                $context["formAction"] = $this->env->getExtension('oro_ui_url')->addQuery((isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")));
                // line 30
                echo "    ";
            }
            // line 31
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array()), "html", null, true);
            echo "\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["formAction"]) ? $context["formAction"] : $this->getContext($context, "formAction")), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
            echo "
          method=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "method", array()), "html", null, true);
            echo "\" data-collect=\"true\"
          ";
            // line 33
            if (array_key_exists("pageComponent", $context)) {
                echo $context["UI"]->getrenderPageComponentAttributes((isset($context["pageComponent"]) ? $context["pageComponent"] : $this->getContext($context, "pageComponent")));
            }
            echo ">
        ";
            // line 34
            if ((isset($context["isWidgetContext"]) ? $context["isWidgetContext"] : $this->getContext($context, "isWidgetContext"))) {
                // line 35
                echo "            <div class=\"widget-actions\">
                <button type=\"reset\" class=\"btn\">";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Cancel"), "html", null, true);
                echo "</button>
                <button type=\"submit\" class=\"btn btn-success\">";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Save"), "html", null, true);
                echo "</button>
            </div>
        ";
            } else {
                // line 40
                echo "        <div class=\"container-fluid page-title\">
            <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
                <div class=\"row\">
                    <div class=\"pull-left pull-left-extra\">
                        ";
                // line 44
                $this->displayBlock('pageHeader', $context, $blocks);
                // line 93
                echo "                    </div>
                    <div class=\"pull-right\">
                        <div class=\"pull-right title-buttons-container\">
                            ";
                // line 96
                echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_navButtons_before", $context)) ? (_twig_default_filter((isset($context["update_navButtons_before"]) ? $context["update_navButtons_before"] : $this->getContext($context, "update_navButtons_before")), "update_navButtons_before")) : ("update_navButtons_before")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
                // line 97
                echo "                            ";
                $this->displayBlock('navButtons', $context, $blocks);
                // line 98
                echo "                            ";
                echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_navButtons_after", $context)) ? (_twig_default_filter((isset($context["update_navButtons_after"]) ? $context["update_navButtons_after"] : $this->getContext($context, "update_navButtons_after")), "update_navButtons_after")) : ("update_navButtons_after")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
                // line 99
                echo "
                            ";
                // line 100
                if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "method", array()) != "GET")) {
                    // line 101
                    echo "                                <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
                    echo "\"/>
                            ";
                }
                // line 103
                echo "                        </div>
                        <div class=\"pull-right user-info-state\">
                            <div class=\"inline-decorate-container\">
                                <ul class=\"inline-decorate\">
                                    ";
                // line 107
                $this->displayBlock('pageActions', $context, $blocks);
                // line 124
                echo "                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        ";
            }
            // line 132
            echo "        <div class=\"layout-content\">
            ";
            // line 133
            $this->displayBlock('content_data', $context, $blocks);
            // line 207
            echo "        </div>
        ";
            // line 208
            $this->displayBlock('navigation_content_tags', $context, $blocks);
            // line 212
            echo "    </form>
    ";
            // line 213
            echo $this->env->getExtension('oro_form_js_validation')->renderFormJsValidationBlock($this->env, (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            echo "
    ";
        }
        
        $__internal_5c06f36644d8459646d5101e04d7a0711680a12631f4f2937b1f6a73ff5bd559->leave($__internal_5c06f36644d8459646d5101e04d7a0711680a12631f4f2937b1f6a73ff5bd559_prof);

    }

    // line 44
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_b1068946dd71979f742f37a2faa77f434ce57bcef21e1beaa163f6622f3e6c4d = $this->env->getExtension("native_profiler");
        $__internal_b1068946dd71979f742f37a2faa77f434ce57bcef21e1beaa163f6622f3e6c4d->enter($__internal_b1068946dd71979f742f37a2faa77f434ce57bcef21e1beaa163f6622f3e6c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 45
        echo "                            <div class=\"clearfix customer-info well-small";
        if ( !array_key_exists("avatar", $context)) {
            echo " customer-simple";
        }
        echo "\">
                                ";
        // line 46
        if (array_key_exists("avatar", $context)) {
            // line 47
            echo "                                    <div class=\"visual\">
                                        <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, (((isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar"))) ? ((isset($context["avatar"]) ? $context["avatar"] : $this->getContext($context, "avatar"))) : ($this->env->getExtension('asset')->getAssetUrl("bundles/oroui/img/info-user.png"))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle", array()), "html", null, true);
            echo "\"/>
                                    </div>
                                ";
        }
        // line 51
        echo "                                <div class=\"customer-content pull-left\">
                                    <div class=\"clearfix\">
                                        ";
        // line 53
        $this->displayBlock('breadcrumbs', $context, $blocks);
        // line 67
        echo "                                    </div>
                                    <div class=\"clearfix\">
                                        <ul class=\"inline\">
                                            ";
        // line 70
        $this->displayBlock('stats', $context, $blocks);
        // line 88
        echo "                                        </ul>
                                    </div>
                                </div>
                            </div>
                        ";
        
        $__internal_b1068946dd71979f742f37a2faa77f434ce57bcef21e1beaa163f6622f3e6c4d->leave($__internal_b1068946dd71979f742f37a2faa77f434ce57bcef21e1beaa163f6622f3e6c4d_prof);

    }

    // line 53
    public function block_breadcrumbs($context, array $blocks = array())
    {
        $__internal_d23f95487ab9514f3d77ac127438fea62b53c710873aba0c974a7ac9d95f8806 = $this->env->getExtension("native_profiler");
        $__internal_d23f95487ab9514f3d77ac127438fea62b53c710873aba0c974a7ac9d95f8806->enter($__internal_d23f95487ab9514f3d77ac127438fea62b53c710873aba0c974a7ac9d95f8806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbs"));

        // line 54
        echo "                                            <div class=\"pull-left\">
                                                <div class=\"sub-title\"><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_ui_url')->addQuery($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexPath", array())), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "indexLabel", array()), "html", null, true);
        echo "</a></div>
                                                <span class=\"separator\">/</span>
                                                ";
        // line 57
        if ($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "additional", array(), "any", true, true)) {
            // line 58
            echo "                                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "additional", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
                // line 59
                echo "                                                    <div class=\"sub-title\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('oro_ui_url')->addQuery($this->getAttribute($context["breadcrumb"], "indexPath", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "indexLabel", array()), "html", null, true);
                echo "</a></div>
                                                    <span class=\"separator\">/</span>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                                                ";
        }
        // line 63
        echo "                                                <h1 class=\"user-name\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entityTitle", array()), "html", null, true);
        echo "</h1>
                                            </div>
                                            ";
        // line 65
        $this->displayBlock('breadcrumbMessage', $context, $blocks);
        // line 66
        echo "                                        ";
        
        $__internal_d23f95487ab9514f3d77ac127438fea62b53c710873aba0c974a7ac9d95f8806->leave($__internal_d23f95487ab9514f3d77ac127438fea62b53c710873aba0c974a7ac9d95f8806_prof);

    }

    // line 65
    public function block_breadcrumbMessage($context, array $blocks = array())
    {
        $__internal_3eb41cb177111b26318f7dc40236fa014d0fcd98b8d0edaf43a2f21cdd4a240d = $this->env->getExtension("native_profiler");
        $__internal_3eb41cb177111b26318f7dc40236fa014d0fcd98b8d0edaf43a2f21cdd4a240d->enter($__internal_3eb41cb177111b26318f7dc40236fa014d0fcd98b8d0edaf43a2f21cdd4a240d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumbMessage"));

        
        $__internal_3eb41cb177111b26318f7dc40236fa014d0fcd98b8d0edaf43a2f21cdd4a240d->leave($__internal_3eb41cb177111b26318f7dc40236fa014d0fcd98b8d0edaf43a2f21cdd4a240d_prof);

    }

    // line 70
    public function block_stats($context, array $blocks = array())
    {
        $__internal_b490859a49db27feb7f80eb2af685b2e64f5b5644f3b15ef77841e16eea7d175 = $this->env->getExtension("native_profiler");
        $__internal_b490859a49db27feb7f80eb2af685b2e64f5b5644f3b15ef77841e16eea7d175->enter($__internal_b490859a49db27feb7f80eb2af685b2e64f5b5644f3b15ef77841e16eea7d175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stats"));

        // line 71
        echo "                                                ";
        if (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array(), "any", false, true), "createdAt", array(), "any", true, true) && $this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null), "entity", array(), "any", false, true), "updatedAt", array(), "any", true, true))) {
            // line 72
            echo "                                                    <li>
                                                        ";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.ui.created_at"), "html", null, true);
            echo ":
                                                        ";
            // line 74
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute(            // line 75
(isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "createdAt", array()))) : ($this->env->getExtension('translator')->trans("oro.ui.empty"))), "html", null, true);
            // line 77
            echo "
                                                    </li>
                                                    <li>
                                                        ";
            // line 80
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.ui.updated_at"), "html", null, true);
            echo ":
                                                        ";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "updatedAt", array())) ? ($this->env->getExtension('oro_locale_datetime')->formatDateTime($this->getAttribute($this->getAttribute(            // line 82
(isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")), "entity", array()), "updatedAt", array()))) : ($this->env->getExtension('translator')->trans("oro.ui.empty"))), "html", null, true);
            // line 84
            echo "
                                                    </li>
                                                ";
        }
        // line 87
        echo "                                            ";
        
        $__internal_b490859a49db27feb7f80eb2af685b2e64f5b5644f3b15ef77841e16eea7d175->leave($__internal_b490859a49db27feb7f80eb2af685b2e64f5b5644f3b15ef77841e16eea7d175_prof);

    }

    // line 97
    public function block_navButtons($context, array $blocks = array())
    {
        $__internal_028b1d0151725591c31bab38c2dcb9d40bfbab34e123c550f252024457b76ea9 = $this->env->getExtension("native_profiler");
        $__internal_028b1d0151725591c31bab38c2dcb9d40bfbab34e123c550f252024457b76ea9->enter($__internal_028b1d0151725591c31bab38c2dcb9d40bfbab34e123c550f252024457b76ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navButtons"));

        
        $__internal_028b1d0151725591c31bab38c2dcb9d40bfbab34e123c550f252024457b76ea9->leave($__internal_028b1d0151725591c31bab38c2dcb9d40bfbab34e123c550f252024457b76ea9_prof);

    }

    // line 107
    public function block_pageActions($context, array $blocks = array())
    {
        $__internal_eb7abee856c03d6184bbd84b9e70dacc452eab41e482832f263d498edc12a67d = $this->env->getExtension("native_profiler");
        $__internal_eb7abee856c03d6184bbd84b9e70dacc452eab41e482832f263d498edc12a67d->enter($__internal_eb7abee856c03d6184bbd84b9e70dacc452eab41e482832f263d498edc12a67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageActions"));

        // line 108
        echo "                                        ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_pageActions_before", $context)) ? (_twig_default_filter((isset($context["update_pageActions_before"]) ? $context["update_pageActions_before"] : $this->getContext($context, "update_pageActions_before")), "update_pageActions_before")) : ("update_pageActions_before")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
        // line 109
        echo "
                                        ";
        // line 110
        $context["audit_entity_id"] = ((array_key_exists("audit_entity_id", $context)) ? ((isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id"))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array()))) : (""))));
        // line 111
        echo "                                        ";
        if ((isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id"))) {
            // line 112
            echo "                                            ";
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("change_history_block", $context)) ? (_twig_default_filter((isset($context["change_history_block"]) ? $context["change_history_block"] : $this->getContext($context, "change_history_block")), "change_history_block")) : ("change_history_block")), array("entity" => ((            // line 113
array_key_exists("entity", $context)) ? (_twig_default_filter((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()))) : ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()))), "entity_class" => ((            // line 114
array_key_exists("audit_entity_class", $context)) ? (_twig_default_filter((isset($context["audit_entity_class"]) ? $context["audit_entity_class"] : $this->getContext($context, "audit_entity_class")), null)) : (null)), "id" =>             // line 115
(isset($context["audit_entity_id"]) ? $context["audit_entity_id"] : $this->getContext($context, "audit_entity_id")), "title" => ((            // line 116
array_key_exists("audit_title", $context)) ? (_twig_default_filter((isset($context["audit_title"]) ? $context["audit_title"] : $this->getContext($context, "audit_title")), (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "__toString", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) : (null)))) : ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "value", array(), "any", false, true), "__toString", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())) : (null)))), "audit_path" => ((            // line 117
array_key_exists("audit_path", $context)) ? (_twig_default_filter((isset($context["audit_path"]) ? $context["audit_path"] : $this->getContext($context, "audit_path")), "oro_dataaudit_history")) : ("oro_dataaudit_history")), "audit_show_change_history" => ((            // line 118
array_key_exists("audit_show_change_history", $context)) ? (_twig_default_filter((isset($context["audit_show_change_history"]) ? $context["audit_show_change_history"] : $this->getContext($context, "audit_show_change_history")), false)) : (false))));
            // line 120
            echo "                                        ";
        }
        // line 121
        echo "
                                        ";
        // line 122
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_pageActions_after", $context)) ? (_twig_default_filter((isset($context["update_pageActions_after"]) ? $context["update_pageActions_after"] : $this->getContext($context, "update_pageActions_after")), "update_pageActions_after")) : ("update_pageActions_after")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
        // line 123
        echo "                                    ";
        
        $__internal_eb7abee856c03d6184bbd84b9e70dacc452eab41e482832f263d498edc12a67d->leave($__internal_eb7abee856c03d6184bbd84b9e70dacc452eab41e482832f263d498edc12a67d_prof);

    }

    // line 133
    public function block_content_data($context, array $blocks = array())
    {
        $__internal_b4f8422b15e71876ebc621e985eeea4064793dc1de8d4593aa4f4ff5bf42aca0 = $this->env->getExtension("native_profiler");
        $__internal_b4f8422b15e71876ebc621e985eeea4064793dc1de8d4593aa4f4ff5bf42aca0->enter($__internal_b4f8422b15e71876ebc621e985eeea4064793dc1de8d4593aa4f4ff5bf42aca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_data"));

        // line 134
        echo "                ";
        $context["data"] = $this->env->getExtension('oro_form_process')->process($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        // line 135
        echo "
                ";
        // line 136
        if ((((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")) && array_key_exists("data", $context)) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "dataBlocks", array(), "any", true, true))) {
            // line 137
            echo "                    ";
            $context["dataBlocks"] = $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dataBlocks", array());
            // line 139
            ob_start();
            // line 140
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_content_data_activities", $context)) ? (_twig_default_filter((isset($context["update_content_data_activities"]) ? $context["update_content_data_activities"] : $this->getContext($context, "update_content_data_activities")), "update_content_data_activities")) : ("update_content_data_activities")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
            $context["activitiesData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 143
            if ( !twig_test_empty((isset($context["activitiesData"]) ? $context["activitiesData"] : $this->getContext($context, "activitiesData")))) {
                // line 144
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("oro.activity.sections.activities"), "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 149
(isset($context["activitiesData"]) ? $context["activitiesData"] : $this->getContext($context, "activitiesData"))))))));
                // line 153
                echo "                    ";
            }
            // line 155
            ob_start();
            // line 156
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_content_data_communications", $context)) ? (_twig_default_filter((isset($context["update_content_data_communications"]) ? $context["update_content_data_communications"] : $this->getContext($context, "update_content_data_communications")), "update_content_data_communications")) : ("update_content_data_communications")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
            $context["communicationsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 159
            if ( !twig_test_empty((isset($context["communicationsData"]) ? $context["communicationsData"] : $this->getContext($context, "communicationsData")))) {
                // line 160
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("Communications"), "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 165
(isset($context["communicationsData"]) ? $context["communicationsData"] : $this->getContext($context, "communicationsData"))))))));
                // line 169
                echo "                    ";
            }
            // line 171
            ob_start();
            // line 172
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_content_data_additional_information", $context)) ? (_twig_default_filter((isset($context["update_content_data_additional_information"]) ? $context["update_content_data_additional_information"] : $this->getContext($context, "update_content_data_additional_information")), "update_content_data_additional_information")) : ("update_content_data_additional_information")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
            $context["additionalInformationData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 175
            if ( !twig_test_empty((isset($context["additionalInformationData"]) ? $context["additionalInformationData"] : $this->getContext($context, "additionalInformationData")))) {
                // line 176
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("Additional Information"), "subblocks" => array(0 => array("spanClass" => "empty", "data" => array(0 =>                 // line 181
(isset($context["additionalInformationData"]) ? $context["additionalInformationData"] : $this->getContext($context, "additionalInformationData"))))))));
                // line 185
                echo "                    ";
            }
            // line 187
            ob_start();
            // line 188
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("update_content_data_comments", $context)) ? (_twig_default_filter((isset($context["update_content_data_comments"]) ? $context["update_content_data_comments"] : $this->getContext($context, "update_content_data_comments")), "update_content_data_comments")) : ("update_content_data_comments")), array("entity" => (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))));
            $context["commentsData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 191
            if ( !twig_test_empty((isset($context["commentsData"]) ? $context["commentsData"] : $this->getContext($context, "commentsData")))) {
                // line 192
                echo "                        ";
                $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("oro.comment.entity_plural_label"), "subblocks" => array(0 => array("spanClass" => "responsive-cell activity-list-widget", "data" => array(0 =>                 // line 197
(isset($context["commentsData"]) ? $context["commentsData"] : $this->getContext($context, "commentsData"))))))));
                // line 201
                echo "                    ";
            }
            // line 202
            echo "
                    ";
            // line 203
            $context["data"] = twig_array_merge((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), array("dataBlocks" => (isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks"))));
            // line 204
            echo "                ";
        }
        // line 205
        echo "                ";
        echo $context["UI"]->getscrollData((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        echo "
            ";
        
        $__internal_b4f8422b15e71876ebc621e985eeea4064793dc1de8d4593aa4f4ff5bf42aca0->leave($__internal_b4f8422b15e71876ebc621e985eeea4064793dc1de8d4593aa4f4ff5bf42aca0_prof);

    }

    // line 208
    public function block_navigation_content_tags($context, array $blocks = array())
    {
        $__internal_8bb62bac9b7f464510f6da3d2e57b05b2239923930cbd8149d53c4ff77a58ae8 = $this->env->getExtension("native_profiler");
        $__internal_8bb62bac9b7f464510f6da3d2e57b05b2239923930cbd8149d53c4ff77a58ae8->enter($__internal_8bb62bac9b7f464510f6da3d2e57b05b2239923930cbd8149d53c4ff77a58ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation_content_tags"));

        // line 209
        echo "            ";
        // line 210
        echo "            ";
        echo $context["navigationMacro"]->getnavigationContentTags($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()));
        echo "
        ";
        
        $__internal_8bb62bac9b7f464510f6da3d2e57b05b2239923930cbd8149d53c4ff77a58ae8->leave($__internal_8bb62bac9b7f464510f6da3d2e57b05b2239923930cbd8149d53c4ff77a58ae8_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  522 => 210,  520 => 209,  514 => 208,  504 => 205,  501 => 204,  499 => 203,  496 => 202,  493 => 201,  491 => 197,  489 => 192,  487 => 191,  484 => 188,  482 => 187,  479 => 185,  477 => 181,  475 => 176,  473 => 175,  470 => 172,  468 => 171,  465 => 169,  463 => 165,  461 => 160,  459 => 159,  456 => 156,  454 => 155,  451 => 153,  449 => 149,  447 => 144,  445 => 143,  442 => 140,  440 => 139,  437 => 137,  435 => 136,  432 => 135,  429 => 134,  423 => 133,  416 => 123,  414 => 122,  411 => 121,  408 => 120,  406 => 118,  405 => 117,  404 => 116,  403 => 115,  402 => 114,  401 => 113,  399 => 112,  396 => 111,  394 => 110,  391 => 109,  388 => 108,  382 => 107,  371 => 97,  364 => 87,  359 => 84,  357 => 82,  356 => 81,  352 => 80,  347 => 77,  345 => 75,  344 => 74,  340 => 73,  337 => 72,  334 => 71,  328 => 70,  317 => 65,  310 => 66,  308 => 65,  302 => 63,  299 => 62,  287 => 59,  282 => 58,  280 => 57,  273 => 55,  270 => 54,  264 => 53,  253 => 88,  251 => 70,  246 => 67,  244 => 53,  240 => 51,  232 => 48,  229 => 47,  227 => 46,  220 => 45,  214 => 44,  204 => 213,  201 => 212,  199 => 208,  196 => 207,  194 => 133,  191 => 132,  181 => 124,  179 => 107,  173 => 103,  167 => 101,  165 => 100,  162 => 99,  159 => 98,  156 => 97,  154 => 96,  149 => 93,  147 => 44,  141 => 40,  135 => 37,  131 => 36,  128 => 35,  126 => 34,  120 => 33,  116 => 32,  105 => 31,  102 => 30,  99 => 29,  97 => 28,  94 => 27,  85 => 21,  80 => 19,  74 => 15,  71 => 14,  65 => 13,  57 => 10,  51 => 9,  44 => 2,  42 => 7,  40 => 5,  38 => 4,  36 => 1,  27 => 2,);
    }
}
