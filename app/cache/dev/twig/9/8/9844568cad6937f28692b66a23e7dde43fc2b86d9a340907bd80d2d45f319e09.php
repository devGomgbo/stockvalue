<?php

/* OroSidebarBundle::sidebar.html.twig */
class __TwigTemplate_9844568cad6937f28692b66a23e7dde43fc2b86d9a340907bd80d2d45f319e09 extends Twig_Template
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
        $__internal_0e5acc6061b3a2357f319a02c3f05cc2f8115e86f63e41dd5ffe131f26ab1724 = $this->env->getExtension("native_profiler");
        $__internal_0e5acc6061b3a2357f319a02c3f05cc2f8115e86f63e41dd5ffe131f26ab1724->enter($__internal_0e5acc6061b3a2357f319a02c3f05cc2f8115e86f63e41dd5ffe131f26ab1724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSidebarBundle::sidebar.html.twig"));

        // line 1
        if ( !array_key_exists("sidebarsGetURL", $context)) {
            // line 2
            echo "    ";
            $context["sidebarsGetURL"] = $this->env->getExtension('routing')->getPath("oro_api_get_sidebars", array("position" => ("SIDEBAR_" . twig_upper_filter($this->env, (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement"))))));
        }
        // line 4
        echo "
";
        // line 5
        if ( !array_key_exists("sidebarPostURL", $context)) {
            // line 6
            echo "    ";
            $context["sidebarPostURL"] = $this->env->getExtension('routing')->getPath("oro_api_post_sidebars");
        }
        // line 8
        echo "
";
        // line 9
        if ( !array_key_exists("widgetsGetURL", $context)) {
            // line 10
            echo "    ";
            $context["widgetsGetURL"] = $this->env->getExtension('routing')->getPath("oro_api_get_sidebarwidgets", array("placement" => (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement"))));
        }
        // line 12
        echo "
";
        // line 13
        if ( !array_key_exists("widgetPostURL", $context)) {
            // line 14
            echo "    ";
            $context["widgetPostURL"] = $this->env->getExtension('routing')->getPath("oro_api_post_sidebarwidgets");
        }
        // line 16
        echo "
";
        // line 17
        if (($this->env->getExtension('mobile_extension')->isDesktop() && ($this->env->getExtension('config_extension')->getConfigValue((("oro_sidebar.sidebar_" . (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement"))) . "_active")) == true))) {
            // line 18
            echo "<div id=\"sidebar-";
            echo twig_escape_filter($this->env, (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement")), "html", null, true);
            echo "\" class=\"sidebar sidebar-";
            echo twig_escape_filter($this->env, (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement")), "html", null, true);
            echo "\"></div>

<script type=\"text/javascript\">
    require(['jquery', 'orosidebar/js/model', 'orosidebar/js/view',
        'orosidebar/js/widget-container/collection', 'orosidebar/js/constants'],
    function(\$, SidebarModel, SidebarView, WidgetContainerCollection, constants) {
        'use strict';

        \$(function () {";
            // line 27
            ob_start();
            // line 28
            echo $this->env->getExtension('http_kernel')->renderFragment((isset($context["sidebarsGetURL"]) ? $context["sidebarsGetURL"] : $this->getContext($context, "sidebarsGetURL")));
            $context["sidebarData"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 30
            if ( !twig_test_empty((isset($context["sidebarData"]) ? $context["sidebarData"] : $this->getContext($context, "sidebarData")))) {
                // line 31
                echo "            var sidebarData = ";
                echo twig_escape_filter($this->env, (isset($context["sidebarData"]) ? $context["sidebarData"] : $this->getContext($context, "sidebarData")), "html", null, true);
                echo ";
            ";
            } else {
                // line 33
                echo "            var sidebarData = {position: constants.SIDEBAR_";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement"))), "html", null, true);
                echo " };
            ";
            }
            // line 35
            echo "            var sidebarModel = new SidebarModel(sidebarData);
            var widgets = new WidgetContainerCollection();
            var availableWidgets = ";
            // line 37
            echo twig_jsonencode_filter($this->env->getExtension('oro_sidebar')->getWidgetDefinitions((isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement"))));
            echo ";

            sidebarModel.urlRoot = ";
            // line 39
            echo twig_jsonencode_filter((isset($context["sidebarPostURL"]) ? $context["sidebarPostURL"] : $this->getContext($context, "sidebarPostURL")));
            echo ";
            widgets.url = ";
            // line 40
            echo twig_jsonencode_filter((isset($context["widgetPostURL"]) ? $context["widgetPostURL"] : $this->getContext($context, "widgetPostURL")));
            echo ";

            new SidebarView({
                model: sidebarModel,
                availableWidgets: availableWidgets,
                widgets: widgets,
                el: '#sidebar-";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement")), "html", null, true);
            echo "',
                \$main: \$('#main')
            });

            widgets.reset(";
            // line 50
            echo $this->env->getExtension('http_kernel')->renderFragment((isset($context["widgetsGetURL"]) ? $context["widgetsGetURL"] : $this->getContext($context, "widgetsGetURL")));
            echo ");

            widgets.each(function (widget) {
                var name = widget.get('widgetName');
                var originalWidget = availableWidgets[name];
                widget.update(originalWidget);
            });
        });
    });
</script>
";
        }
        
        $__internal_0e5acc6061b3a2357f319a02c3f05cc2f8115e86f63e41dd5ffe131f26ab1724->leave($__internal_0e5acc6061b3a2357f319a02c3f05cc2f8115e86f63e41dd5ffe131f26ab1724_prof);

    }

    public function getTemplateName()
    {
        return "OroSidebarBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 50,  115 => 46,  106 => 40,  102 => 39,  97 => 37,  93 => 35,  87 => 33,  81 => 31,  79 => 30,  76 => 28,  74 => 27,  60 => 18,  58 => 17,  55 => 16,  51 => 14,  49 => 13,  46 => 12,  42 => 10,  40 => 9,  37 => 8,  33 => 6,  31 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }
}
