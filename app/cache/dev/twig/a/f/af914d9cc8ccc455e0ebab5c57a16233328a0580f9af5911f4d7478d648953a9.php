<?php

/* OroDashboardBundle:Index:default.html.twig */
class __TwigTemplate_af914d9cc8ccc455e0ebab5c57a16233328a0580f9af5911f4d7478d648953a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
            'titleNavButtons' => array($this, 'block_titleNavButtons'),
            'navButtons' => array($this, 'block_navButtons'),
            'widgets_content' => array($this, 'block_widgets_content'),
            'widgets' => array($this, 'block_widgets'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroDashboardBundle:Index:default.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d72902bc3949ac153920e17d32f74ce8f5e7a106d04ff3abcccfa05514735145 = $this->env->getExtension("native_profiler");
        $__internal_d72902bc3949ac153920e17d32f74ce8f5e7a106d04ff3abcccfa05514735145->enter($__internal_d72902bc3949ac153920e17d32f74ce8f5e7a106d04ff3abcccfa05514735145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Index:default.html.twig"));

        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroDashboardBundle:Index:default.html.twig", 2);

        $this->env->getExtension("oro_title")->set(array("params" => array("%name%" => $this->getAttribute(        // line 3
(isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "getLabel", array(), "method"))));
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d72902bc3949ac153920e17d32f74ce8f5e7a106d04ff3abcccfa05514735145->leave($__internal_d72902bc3949ac153920e17d32f74ce8f5e7a106d04ff3abcccfa05514735145_prof);

    }

    // line 4
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_79b74a8270d61ffe8f21b77ad66ab42851fde21935f3ff59ac8e2e3bceadd145 = $this->env->getExtension("native_profiler");
        $__internal_79b74a8270d61ffe8f21b77ad66ab42851fde21935f3ff59ac8e2e3bceadd145->enter($__internal_79b74a8270d61ffe8f21b77ad66ab42851fde21935f3ff59ac8e2e3bceadd145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 5
        echo "    ";
        $context["breadcrumbs"] = array(0 => array("label" => $this->env->getExtension('translator')->trans("oro.dashboard.menu.dashboards_tab.label")), 1 => array("label" => $this->env->getExtension('translator')->trans($this->getAttribute(        // line 7
(isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "getLabel", array(), "method"))));
        // line 9
        echo "    ";
        $this->loadTemplate("OroNavigationBundle:Menu:breadcrumbs.html.twig", "OroDashboardBundle:Index:default.html.twig", 9)->display($context);
        
        $__internal_79b74a8270d61ffe8f21b77ad66ab42851fde21935f3ff59ac8e2e3bceadd145->leave($__internal_79b74a8270d61ffe8f21b77ad66ab42851fde21935f3ff59ac8e2e3bceadd145_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b915baebbb119d4cdc617903a30d55a764c93b178babf4a2eeca1530a4d72af4 = $this->env->getExtension("native_profiler");
        $__internal_b915baebbb119d4cdc617903a30d55a764c93b178babf4a2eeca1530a4d72af4->enter($__internal_b915baebbb119d4cdc617903a30d55a764c93b178babf4a2eeca1530a4d72af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        $context["widgetIdPrefix"] = (("dashboard-widget-" . twig_random($this->env)) . "-");
        // line 13
        $context["allowEdit"] = $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "entity", array()));
        // line 14
        echo "<div class=\"layout-content dashboard-container-wrapper\">
    <div class=\"container-fluid page-title\">
        <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                ";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        // line 27
        echo "                ";
        $this->displayBlock('titleNavButtons', $context, $blocks);
        // line 107
        echo "            </div>
        </div>
    </div>
    ";
        // line 110
        $this->displayBlock('widgets_content', $context, $blocks);
        // line 180
        echo "
    <script type=\"text/javascript\">
        require(['orodashboard/js/dashboard-container', 'orodashboard/js/widget-picker'],
            function(dashboardContainer, widgetPicker) {
                ";
        // line 184
        $context["widgetIds"] = array();
        // line 185
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "widgets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
            // line 186
            echo "                    ";
            if (( !$this->getAttribute($this->getAttribute($context["widget"], "config", array(), "any", false, true), "acl", array(), "any", true, true) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "acl", array())))) {
                // line 187
                echo "                        ";
                $context["widgetIds"] = twig_array_merge((isset($context["widgetIds"]) ? $context["widgetIds"] : $this->getContext($context, "widgetIds")), array(0 => ((isset($context["widgetIdPrefix"]) ? $context["widgetIdPrefix"] : $this->getContext($context, "widgetIdPrefix")) . $this->getAttribute($context["widget"], "id", array()))));
                // line 188
                echo "                    ";
            }
            // line 189
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                dashboardContainer.initialize({
                    widgetIds: ";
        // line 191
        echo twig_jsonencode_filter((isset($context["widgetIds"]) ? $context["widgetIds"] : $this->getContext($context, "widgetIds")));
        echo ",
                    dashboardId: ";
        // line 192
        echo twig_jsonencode_filter($this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "id", array()));
        echo ",
                    columnsSelector: '.dashboard-column',
                    allowEdit: ";
        // line 194
        echo (((isset($context["allowEdit"]) ? $context["allowEdit"] : $this->getContext($context, "allowEdit"))) ? ("true") : ("false"));
        echo "
                });
                widgetPicker.init(";
        // line 196
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "id", array()), "html", null, true);
        echo ");
            }
        );
    </script>
    <script type=\"text/javascript\">
        require(['oronavigation/js/content-manager'], function (contentManager) {
            // prevents caching dashboard page, to keep it actual
            contentManager.cacheIgnore();
        });
    </script>
</div>
";
        
        $__internal_b915baebbb119d4cdc617903a30d55a764c93b178babf4a2eeca1530a4d72af4->leave($__internal_b915baebbb119d4cdc617903a30d55a764c93b178babf4a2eeca1530a4d72af4_prof);

    }

    // line 18
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff66a929f4856590afdadd7b014ce20b6aa840b57771668cbde58326afb857d8 = $this->env->getExtension("native_profiler");
        $__internal_ff66a929f4856590afdadd7b014ce20b6aa840b57771668cbde58326afb857d8->enter($__internal_ff66a929f4856590afdadd7b014ce20b6aa840b57771668cbde58326afb857d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 19
        echo "                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">
                            ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "getLabel", array(), "method")), "html", null, true);
        echo "
                        </h1>
                    </div>
                </div>
                ";
        
        $__internal_ff66a929f4856590afdadd7b014ce20b6aa840b57771668cbde58326afb857d8->leave($__internal_ff66a929f4856590afdadd7b014ce20b6aa840b57771668cbde58326afb857d8_prof);

    }

    // line 27
    public function block_titleNavButtons($context, array $blocks = array())
    {
        $__internal_fcda684bb4ddec88e64f3d352e7d0cffd8d8201f1c64a6eb4ca3ac676da73c22 = $this->env->getExtension("native_profiler");
        $__internal_fcda684bb4ddec88e64f3d352e7d0cffd8d8201f1c64a6eb4ca3ac676da73c22->enter($__internal_fcda684bb4ddec88e64f3d352e7d0cffd8d8201f1c64a6eb4ca3ac676da73c22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titleNavButtons"));

        // line 28
        echo "
                    ";
        // line 29
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("dashboard_navButtons_before", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_before"]) ? $context["dashboard_navButtons_before"] : $this->getContext($context, "dashboard_navButtons_before")), "dashboard_navButtons_before")) : ("dashboard_navButtons_before")), array());
        // line 30
        echo "
                    <div class=\"pull-right title-buttons-container\">
                        ";
        // line 32
        if ((isset($context["allowEdit"]) ? $context["allowEdit"] : $this->getContext($context, "allowEdit"))) {
            // line 33
            echo "                            <a href=\"javascript:void(0);\" class=\"dashboard-widgets-add btn main-group pull-left\">
                                <i class=\"icon-plus\"></i>
                                ";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.add_dashboard_widgets.add_widget"), "html", null, true);
            echo "
                            </a>
                        ";
        }
        // line 38
        echo "
                        ";
        // line 39
        if ((($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("DELETE", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "entity", array())) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_dashboard_create")) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "entity", array())))) {
            // line 40
            echo "                            ";
            ob_start();
            // line 41
            echo "                                ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("EDIT", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "entity", array()))) {
                // line 42
                echo "                                    ";
                echo $context["UI"]->getdropdownItem(array("path" => $this->env->getExtension('routing')->getPath("oro_dashboard_update", array("id" => $this->getAttribute(                // line 43
(isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "id", array()))), "title" => $this->env->getExtension('translator')->trans("oro.dashboard.edit_dashboard_link.title"), "label" => $this->env->getExtension('translator')->trans("oro.dashboard.edit_dashboard_link.text"), "iCss" => "icon-edit"));
                // line 47
                echo "
                                ";
            }
            // line 49
            echo "                                ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_dashboard_create")) {
                // line 50
                echo "                                    ";
                echo $context["UI"]->getdropdownItem(array("path" => $this->env->getExtension('routing')->getPath("oro_dashboard_create"), "title" => $this->env->getExtension('translator')->trans("oro.dashboard.create_dashboard_link.title"), "label" => $this->env->getExtension('translator')->trans("oro.dashboard.create_dashboard_link.text"), "iCss" => "icon-plus"));
                // line 55
                echo "
                                ";
            }
            // line 57
            echo "                                ";
            if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("DELETE", $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "entity", array()))) {
                // line 58
                echo "                                    <li>
                                        ";
                // line 59
                echo $context["UI"]->getdeleteLink(array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_dashboard", array("id" => $this->getAttribute(                // line 60
(isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "id", array()))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_dashboard_index"), "aCss" => "no-hash remove-button", "id" => "btn-remove-user", "dataId" => $this->getAttribute(                // line 64
(isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "id", array()), "entity_label" => $this->env->getExtension('translator')->trans("oro.dashboard.entity_label")));
                // line 66
                echo "
                                    </li>
                                ";
            }
            // line 69
            echo "                            ";
            $context["html"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 70
            echo "
                            ";
            // line 71
            echo $context["UI"]->getdropdownButton(array("label" => $this->env->getExtension('translator')->trans("oro.dashboard.tools_dropdown.label"), "iCss" => "icon icon-cog", "aCss" => "pull-right", "html" =>             // line 75
(isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"))));
            // line 76
            echo "
                        ";
        }
        // line 78
        echo "                    </div>
                    ";
        // line 79
        $this->displayBlock('navButtons', $context, $blocks);
        // line 103
        echo "
                    ";
        // line 104
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("dashboard_navButtons_after", $context)) ? (_twig_default_filter((isset($context["dashboard_navButtons_after"]) ? $context["dashboard_navButtons_after"] : $this->getContext($context, "dashboard_navButtons_after")), "dashboard_navButtons_after")) : ("dashboard_navButtons_after")), array());
        // line 105
        echo "
                ";
        
        $__internal_fcda684bb4ddec88e64f3d352e7d0cffd8d8201f1c64a6eb4ca3ac676da73c22->leave($__internal_fcda684bb4ddec88e64f3d352e7d0cffd8d8201f1c64a6eb4ca3ac676da73c22_prof);

    }

    // line 79
    public function block_navButtons($context, array $blocks = array())
    {
        $__internal_cc323ebb64de63a38a1e7b5362607609dcd4b258b470735c05b880bbec35721d = $this->env->getExtension("native_profiler");
        $__internal_cc323ebb64de63a38a1e7b5362607609dcd4b258b470735c05b880bbec35721d->enter($__internal_cc323ebb64de63a38a1e7b5362607609dcd4b258b470735c05b880bbec35721d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navButtons"));

        // line 80
        echo "                        ";
        if ((twig_length_filter($this->env, (isset($context["dashboards"]) ? $context["dashboards"] : $this->getContext($context, "dashboards"))) > 1)) {
            // line 81
            echo "                            <div class=\"dashboard-selector-container pull-right title-buttons-container\">
                                <label for=\"dashboard_selector\">";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.entity_plural_label"), "html", null, true);
            echo ":</label>
                                <select id=\"dashboard_selector\">
                                    ";
            // line 84
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dashboards"]) ? $context["dashboards"] : $this->getContext($context, "dashboards")));
            foreach ($context['_seq'] as $context["_key"] => $context["dashboardModel"]) {
                // line 85
                echo "                                        <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dashboardModel"], "id", array()), "html", null, true);
                echo "\"";
                if (($this->getAttribute($context["dashboardModel"], "id", array()) == $this->getAttribute((isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "id", array()))) {
                    echo " selected=\"selected\"";
                }
                echo ">
                                            ";
                // line 86
                echo twig_escape_filter($this->env, twig_truncate_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["dashboardModel"], "getLabel", array(), "method")), 50), "html", null, true);
                echo "
                                        </option>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboardModel'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                </select>
                            </div>

                            <script type=\"text/javascript\">
                                require(['jquery', 'routing', 'oroui/js/mediator'],
                                function(\$, routing, mediator){
                                    \$('#dashboard_selector').on('change', function (e) {
                                        var url = routing.generate('oro_dashboard_view', {id: \$(e.currentTarget).val(), change_dashboard: true});
                                        mediator.execute('redirectTo', {url: url}, {redirect: true});
                                    });
                                });
                            </script>
                        ";
        }
        // line 102
        echo "                    ";
        
        $__internal_cc323ebb64de63a38a1e7b5362607609dcd4b258b470735c05b880bbec35721d->leave($__internal_cc323ebb64de63a38a1e7b5362607609dcd4b258b470735c05b880bbec35721d_prof);

    }

    // line 110
    public function block_widgets_content($context, array $blocks = array())
    {
        $__internal_b8ecd272256b06e0b61f278c1a8f15f1f7bd987347ffa1b31f72f0ab5dabffc2 = $this->env->getExtension("native_profiler");
        $__internal_b8ecd272256b06e0b61f278c1a8f15f1f7bd987347ffa1b31f72f0ab5dabffc2->enter($__internal_b8ecd272256b06e0b61f278c1a8f15f1f7bd987347ffa1b31f72f0ab5dabffc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widgets_content"));

        // line 111
        echo "        ";
        $context["contentClass"] = ((array_key_exists("contentClass", $context)) ? (_twig_default_filter((isset($context["contentClass"]) ? $context["contentClass"] : $this->getContext($context, "contentClass")), "dashboard-container")) : ("dashboard-container"));
        // line 112
        echo "        <div class=\"scrollable-container\">
            <div class=\"responsive-section ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["contentClass"]) ? $context["contentClass"] : $this->getContext($context, "contentClass")), "html", null, true);
        echo "\">
                <div class=\"clearfix\">
                ";
        // line 115
        $this->displayBlock('widgets', $context, $blocks);
        // line 135
        echo "                </div>
            </div>
        </div>
        <script type=\"text/html\" id=\"available-dashboard-widgets\">
            ";
        // line 139
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["widgets"]) ? $context["widgets"] : $this->getContext($context, "widgets")));
        foreach ($context['_seq'] as $context["widgetName"] => $context["widget"]) {
            // line 140
            echo "                ";
            if (( !$this->getAttribute($context["widget"], "acl", array(), "any", true, true) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted($this->getAttribute($context["widget"], "acl", array())))) {
                // line 141
                echo "                    <div class=\"dashboard-widget-container\">
                        <table>
                            <tr class=\"dashboard-widget-title\">
                                <td class=\"dashboard-widget-small-column\">
                                    <a href=\"javascript:void(0);\" class=\"dashboard-picker-collapse\">
                                    </a>
                                </td>
                                <td class=\"dashboard-widget-small-column\">
                                    ";
                // line 149
                if ($this->getAttribute($context["widget"], "icon", array(), "any", true, true)) {
                    // line 150
                    echo "                                    <img class=\"dashboard-widget-icon\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["widget"], "icon", array())), "html", null, true);
                    echo "\" alt=\"Preview\" />
                                    ";
                } else {
                    // line 152
                    echo "                                    <img class=\"dashboard-widget-icon\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/orodashboard/img/no_icon.png"), "html", null, true);
                    echo "\" alt=\"Preview\" />
                                    ";
                }
                // line 154
                echo "                                </td>
                                <td class=\"dashboard-widget-large-column\">
                                    ";
                // line 156
                if ($this->getAttribute($context["widget"], "label", array(), "any", true, true)) {
                    // line 157
                    echo "                                        <strong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["widget"], "label", array())), "html", null, true);
                    echo "</strong>
                                    ";
                }
                // line 159
                echo "                                </td>
                                <td class=\"dashboard-widgets-pick-wrapper\">
                                    <a class=\"btn add-widget-button btn-primary\" data-widget-name=\"";
                // line 161
                echo twig_escape_filter($this->env, $context["widgetName"], "html", null, true);
                echo "\">
                                            ";
                // line 162
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.add_dashboard_widgets.add_to_dashboard"), "html", null, true);
                echo "
                                        </a>
                                </td>
                            </tr>
                            <tr class=\"dashboard-widgets-description\">
                                <td colspan=\"2\"></td>
                                <td class=\"dashboard-widget-large-column\">
                                    ";
                // line 169
                if ($this->getAttribute($context["widget"], "description", array(), "any", true, true)) {
                    // line 170
                    echo "                                        ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["widget"], "description", array())), "html", null, true);
                    echo "
                                    ";
                }
                // line 172
                echo "                                </td>
                            </tr>
                        </table>
                    </div>
                ";
            }
            // line 177
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['widgetName'], $context['widget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "        </script>
    ";
        
        $__internal_b8ecd272256b06e0b61f278c1a8f15f1f7bd987347ffa1b31f72f0ab5dabffc2->leave($__internal_b8ecd272256b06e0b61f278c1a8f15f1f7bd987347ffa1b31f72f0ab5dabffc2_prof);

    }

    // line 115
    public function block_widgets($context, array $blocks = array())
    {
        $__internal_1da523ae5901ccf9e911b77294bfb0c9131e62eaf5132e3d198d59f6499f369a = $this->env->getExtension("native_profiler");
        $__internal_1da523ae5901ccf9e911b77294bfb0c9131e62eaf5132e3d198d59f6499f369a->enter($__internal_1da523ae5901ccf9e911b77294bfb0c9131e62eaf5132e3d198d59f6499f369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widgets"));

        // line 116
        echo "                    ";
        echo $this->getAttribute(        // line 117
$this, "renderWidgetsColumn", array(0 => array("widgets" => $this->getAttribute(        // line 118
(isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "getOrderedColumnWidgets", array(0 => 0, 1 => false, 2 => true), "method"), "columnElementId" => "dashboard-column-0", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 121
(isset($context["widgetIdPrefix"]) ? $context["widgetIdPrefix"] : $this->getContext($context, "widgetIdPrefix")), "allowEdit" =>         // line 122
(isset($context["allowEdit"]) ? $context["allowEdit"] : $this->getContext($context, "allowEdit")))), "method");
        // line 124
        echo "
                    ";
        // line 125
        echo $this->getAttribute(        // line 126
$this, "renderWidgetsColumn", array(0 => array("widgets" => $this->getAttribute(        // line 127
(isset($context["dashboard"]) ? $context["dashboard"] : $this->getContext($context, "dashboard")), "getOrderedColumnWidgets", array(0 => 1, 1 => true, 2 => false), "method"), "columnElementId" => "dashboard-column-1", "columnClass" => "dashboard-column", "widgetIdPrefix" =>         // line 130
(isset($context["widgetIdPrefix"]) ? $context["widgetIdPrefix"] : $this->getContext($context, "widgetIdPrefix")), "allowEdit" =>         // line 131
(isset($context["allowEdit"]) ? $context["allowEdit"] : $this->getContext($context, "allowEdit")))), "method");
        // line 133
        echo "
                ";
        
        $__internal_1da523ae5901ccf9e911b77294bfb0c9131e62eaf5132e3d198d59f6499f369a->leave($__internal_1da523ae5901ccf9e911b77294bfb0c9131e62eaf5132e3d198d59f6499f369a_prof);

    }

    // line 209
    public function getrenderWidgetsColumn($__options__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8d2eaad55d576de43e89be7682ec96e7cf418d67a25bf12e68f75f9c9f9d5e5b = $this->env->getExtension("native_profiler");
            $__internal_8d2eaad55d576de43e89be7682ec96e7cf418d67a25bf12e68f75f9c9f9d5e5b->enter($__internal_8d2eaad55d576de43e89be7682ec96e7cf418d67a25bf12e68f75f9c9f9d5e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderWidgetsColumn"));

            // line 210
            echo "    <div id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "columnElementId", array()), "html", null, true);
            echo "\" class=\"responsive-cell dashboard-column\">
        ";
            // line 211
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "widgets", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["widget"]) {
                // line 212
                echo "            ";
                if (( !$this->getAttribute($this->getAttribute($context["widget"], "config", array(), "any", false, true), "acl", array(), "any", true, true) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "acl", array())))) {
                    // line 213
                    echo "                ";
                    echo $this->env->getExtension('oro_widget')->render($this->env, array("widgetType" => "dashboard-item", "wid" => ($this->getAttribute(                    // line 216
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "widgetIdPrefix", array()) . $this->getAttribute($context["widget"], "id", array())), "url" => $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute(                    // line 217
$context["widget"], "config", array()), "route", array()), twig_array_merge($this->getAttribute($this->getAttribute($context["widget"], "config", array()), "route_parameters", array()), array("_widgetId" => $this->getAttribute($context["widget"], "id", array())))), "state" => array("id" => $this->getAttribute(                    // line 219
$context["widget"], "id", array()), "expanded" => $this->getAttribute(                    // line 220
$context["widget"], "expanded", array()), "layoutPosition" => $this->getAttribute(                    // line 221
$context["widget"], "layoutPosition", array())), "allowEdit" => $this->getAttribute(                    // line 223
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowEdit", array()), "showConfig" => ($this->getAttribute(                    // line 224
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowEdit", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["widget"], "config", array()), "configuration", array())) > 0))));
                    // line 226
                    echo "
            ";
                }
                // line 228
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['widget'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "        <div class=\"empty-text";
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "widgets", array())) > 0)) {
                echo " hidden-empty-text";
            }
            echo "\">
            <div class=\"widget-placeholder\">
                ";
            // line 231
            if ($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allowEdit", array())) {
                // line 232
                echo "                    ";
                echo $this->env->getExtension('translator')->trans("oro.dashboard.empty_column_message.allowed");
                echo "
                ";
            } else {
                // line 234
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.dashboard.empty_column_message.denied"), "html", null, true);
                echo "
                ";
            }
            // line 236
            echo "            </div>
        </div>
    </div>
";
            
            $__internal_8d2eaad55d576de43e89be7682ec96e7cf418d67a25bf12e68f75f9c9f9d5e5b->leave($__internal_8d2eaad55d576de43e89be7682ec96e7cf418d67a25bf12e68f75f9c9f9d5e5b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Index:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  555 => 236,  549 => 234,  543 => 232,  541 => 231,  533 => 229,  527 => 228,  523 => 226,  521 => 224,  520 => 223,  519 => 221,  518 => 220,  517 => 219,  516 => 217,  515 => 216,  513 => 213,  510 => 212,  506 => 211,  501 => 210,  486 => 209,  478 => 133,  476 => 131,  475 => 130,  474 => 127,  473 => 126,  472 => 125,  469 => 124,  467 => 122,  466 => 121,  465 => 118,  464 => 117,  462 => 116,  456 => 115,  448 => 178,  442 => 177,  435 => 172,  429 => 170,  427 => 169,  417 => 162,  413 => 161,  409 => 159,  403 => 157,  401 => 156,  397 => 154,  391 => 152,  385 => 150,  383 => 149,  373 => 141,  370 => 140,  366 => 139,  360 => 135,  358 => 115,  353 => 113,  350 => 112,  347 => 111,  341 => 110,  334 => 102,  319 => 89,  310 => 86,  301 => 85,  297 => 84,  292 => 82,  289 => 81,  286 => 80,  280 => 79,  272 => 105,  270 => 104,  267 => 103,  265 => 79,  262 => 78,  258 => 76,  256 => 75,  255 => 71,  252 => 70,  249 => 69,  244 => 66,  242 => 64,  241 => 60,  240 => 59,  237 => 58,  234 => 57,  230 => 55,  227 => 50,  224 => 49,  220 => 47,  218 => 43,  216 => 42,  213 => 41,  210 => 40,  208 => 39,  205 => 38,  199 => 35,  195 => 33,  193 => 32,  189 => 30,  187 => 29,  184 => 28,  178 => 27,  166 => 22,  161 => 19,  155 => 18,  136 => 196,  131 => 194,  126 => 192,  122 => 191,  119 => 190,  113 => 189,  110 => 188,  107 => 187,  104 => 186,  99 => 185,  97 => 184,  91 => 180,  89 => 110,  84 => 107,  81 => 27,  79 => 18,  73 => 14,  71 => 13,  69 => 12,  63 => 11,  55 => 9,  53 => 7,  51 => 5,  45 => 4,  38 => 1,  36 => 3,  33 => 2,  24 => 1,);
    }
}
