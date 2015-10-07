<?php

/* OroAsseticBundle:Assets:oro_css.html.twig */
class __TwigTemplate_cfbcf7adc66a0e74de90533f7c46787ebbfeeb0042bedd575fd2ad0caa241b6a extends Twig_Template
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
        $__internal_b4be8ee1164433b7662122a6655671d906ec190f243fe3bb0063df9e8875570a = $this->env->getExtension("native_profiler");
        $__internal_b4be8ee1164433b7662122a6655671d906ec190f243fe3bb0063df9e8875570a->enter($__internal_b4be8ee1164433b7662122a6655671d906ec190f243fe3bb0063df9e8875570a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroAsseticBundle:Assets:oro_css.html.twig"));

        // line 1
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0eec1cd_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_0") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery.timepicker_1.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_1") : $this->env->getExtension('asset')->getAssetUrl("css/oro_bootstrap_2.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_2") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_3.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_3") : $this->env->getExtension('asset')->getAssetUrl("css/oro_font-awesome_4.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_4") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery.simplecolorpicker_5.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_5") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery.simplecolorpicker-fontawesome_6.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_6") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery.minicolors_7.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_7") : $this->env->getExtension('asset')->getAssetUrl("css/oro_font-awesome_8.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_8") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery-ui.grid_9.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_9") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery-ui-1.10.2.custom_10.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_10") : $this->env->getExtension('asset')->getAssetUrl("css/oro_main_11.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_11") : $this->env->getExtension('asset')->getAssetUrl("css/oro_all_12.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_12") : $this->env->getExtension('asset')->getAssetUrl("css/oro_selector_13.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_13") : $this->env->getExtension('asset')->getAssetUrl("css/oro_attachment_14.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_14") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_15.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_15") : $this->env->getExtension('asset')->getAssetUrl("css/oro_extend_16.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_16") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_17.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_17") : $this->env->getExtension('asset')->getAssetUrl("css/oro_activity-list_18.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_18"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_18") : $this->env->getExtension('asset')->getAssetUrl("css/oro_address_19.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_19"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_19") : $this->env->getExtension('asset')->getAssetUrl("css/oro_address_20.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_20"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_20") : $this->env->getExtension('asset')->getAssetUrl("css/oro_calendar_21.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_21"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_21") : $this->env->getExtension('asset')->getAssetUrl("css/oro_print_22.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_22"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_22") : $this->env->getExtension('asset')->getAssetUrl("css/oro_fullcalendar_23.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_23"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_23") : $this->env->getExtension('asset')->getAssetUrl("css/oro_config_24.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_24"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_24") : $this->env->getExtension('asset')->getAssetUrl("css/oro_form_25.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_25"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_25") : $this->env->getExtension('asset')->getAssetUrl("css/oro_oro.audit_26.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_26"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_26") : $this->env->getExtension('asset')->getAssetUrl("css/oro_backgrid_27.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_27"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_27") : $this->env->getExtension('asset')->getAssetUrl("css/oro_backgrid-paginator_28.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_28"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_28") : $this->env->getExtension('asset')->getAssetUrl("css/oro_oro.grid_29.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_29"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_29") : $this->env->getExtension('asset')->getAssetUrl("css/oro_merge_view_30.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_30"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_30") : $this->env->getExtension('asset')->getAssetUrl("css/oro_entity-pagination_31.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_31"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_31") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery.multiselect_32.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_32"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_32") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery.multiselect.filter_33.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_33"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_33") : $this->env->getExtension('asset')->getAssetUrl("css/oro_oro.filter_34.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_34"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_34") : $this->env->getExtension('asset')->getAssetUrl("css/oro_import_35.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_35"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_35") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_36.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_36"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_36") : $this->env->getExtension('asset')->getAssetUrl("css/oro_note_37.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_37"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_37") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_38.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_38"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_38") : $this->env->getExtension('asset')->getAssetUrl("css/oro_condition-builder_39.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_39"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_39") : $this->env->getExtension('asset')->getAssetUrl("css/oro_query-designer_40.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_40"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_40") : $this->env->getExtension('asset')->getAssetUrl("css/oro_report_41.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_41"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_41") : $this->env->getExtension('asset')->getAssetUrl("css/oro_search_42.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_42"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_42") : $this->env->getExtension('asset')->getAssetUrl("css/oro_segment_43.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_43"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_43") : $this->env->getExtension('asset')->getAssetUrl("css/oro_sidebar_44.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_44"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_44") : $this->env->getExtension('asset')->getAssetUrl("css/oro_widget-add_45.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_45"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_45") : $this->env->getExtension('asset')->getAssetUrl("css/oro_modal_46.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_46"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_46") : $this->env->getExtension('asset')->getAssetUrl("css/oro_styles_47.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_47"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_47") : $this->env->getExtension('asset')->getAssetUrl("css/oro_tag-grid_48.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_48"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_48") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_49.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_49"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_49") : $this->env->getExtension('asset')->getAssetUrl("css/oro_jquery.dialog.extended_50.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_50"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_50") : $this->env->getExtension('asset')->getAssetUrl("css/oro_workflow_51.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_51"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_51") : $this->env->getExtension('asset')->getAssetUrl("css/oro_comment_52.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_52"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_52") : $this->env->getExtension('asset')->getAssetUrl("css/oro_dashboard_53.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_53"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_53") : $this->env->getExtension('asset')->getAssetUrl("css/oro_code_54.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_54"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_54") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_55.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
            // asset "0eec1cd_55"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd_55") : $this->env->getExtension('asset')->getAssetUrl("css/oro_style_56.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
        } else {
            // asset "0eec1cd"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0eec1cd") : $this->env->getExtension('asset')->getAssetUrl("css/oro.css");
            // line 2
            $context["isLess"] = twig_in_filter("less", twig_split_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "."));
            // line 3
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 4
                echo "<script type=\"text/javascript\">
    // need to clear localStorage when less is compiled on client, to prevent caching
    try {
        localStorage.clear();
    } catch (e) {
        // catch IE protected mode or browsers w/o localStorage support
    }
</script>
";
            }
            // line 13
            echo "<link ";
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                echo "rel=\"stylesheet/less\"";
            } else {
                echo "rel=\"stylesheet\"";
            }
            echo " media=\"all\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
";
            // line 14
            if ((isset($context["isLess"]) ? $context["isLess"] : $this->getContext($context, "isLess"))) {
                // line 15
                echo "<script type=\"text/javascript\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/oroui/lib/less-1.3.3.min.js"), "html", null, true);
                echo "\"></script>
";
            }
        }
        unset($context["asset_url"]);
        // line 1
        unset($context["asset_url"]);
        
        $__internal_b4be8ee1164433b7662122a6655671d906ec190f243fe3bb0063df9e8875570a->leave($__internal_b4be8ee1164433b7662122a6655671d906ec190f243fe3bb0063df9e8875570a_prof);

    }

    public function getTemplateName()
    {
        return "OroAsseticBundle:Assets:oro_css.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2079 => 1,  2071 => 15,  2069 => 14,  2058 => 13,  2047 => 4,  2045 => 3,  2043 => 2,  2034 => 15,  2032 => 14,  2021 => 13,  2010 => 4,  2008 => 3,  2006 => 2,  1998 => 15,  1996 => 14,  1985 => 13,  1974 => 4,  1972 => 3,  1970 => 2,  1962 => 15,  1960 => 14,  1949 => 13,  1938 => 4,  1936 => 3,  1934 => 2,  1926 => 15,  1924 => 14,  1913 => 13,  1902 => 4,  1900 => 3,  1898 => 2,  1890 => 15,  1888 => 14,  1877 => 13,  1866 => 4,  1864 => 3,  1862 => 2,  1854 => 15,  1852 => 14,  1841 => 13,  1830 => 4,  1828 => 3,  1826 => 2,  1818 => 15,  1816 => 14,  1805 => 13,  1794 => 4,  1792 => 3,  1790 => 2,  1782 => 15,  1780 => 14,  1769 => 13,  1758 => 4,  1756 => 3,  1754 => 2,  1746 => 15,  1744 => 14,  1733 => 13,  1722 => 4,  1720 => 3,  1718 => 2,  1710 => 15,  1708 => 14,  1697 => 13,  1686 => 4,  1684 => 3,  1682 => 2,  1674 => 15,  1672 => 14,  1661 => 13,  1650 => 4,  1648 => 3,  1646 => 2,  1638 => 15,  1636 => 14,  1625 => 13,  1614 => 4,  1612 => 3,  1610 => 2,  1602 => 15,  1600 => 14,  1589 => 13,  1578 => 4,  1576 => 3,  1574 => 2,  1566 => 15,  1564 => 14,  1553 => 13,  1542 => 4,  1540 => 3,  1538 => 2,  1530 => 15,  1528 => 14,  1517 => 13,  1506 => 4,  1504 => 3,  1502 => 2,  1494 => 15,  1492 => 14,  1481 => 13,  1470 => 4,  1468 => 3,  1466 => 2,  1458 => 15,  1456 => 14,  1445 => 13,  1434 => 4,  1432 => 3,  1430 => 2,  1422 => 15,  1420 => 14,  1409 => 13,  1398 => 4,  1396 => 3,  1394 => 2,  1386 => 15,  1384 => 14,  1373 => 13,  1362 => 4,  1360 => 3,  1358 => 2,  1350 => 15,  1348 => 14,  1337 => 13,  1326 => 4,  1324 => 3,  1322 => 2,  1314 => 15,  1312 => 14,  1301 => 13,  1290 => 4,  1288 => 3,  1286 => 2,  1278 => 15,  1276 => 14,  1265 => 13,  1254 => 4,  1252 => 3,  1250 => 2,  1242 => 15,  1240 => 14,  1229 => 13,  1218 => 4,  1216 => 3,  1214 => 2,  1206 => 15,  1204 => 14,  1193 => 13,  1182 => 4,  1180 => 3,  1178 => 2,  1170 => 15,  1168 => 14,  1157 => 13,  1146 => 4,  1144 => 3,  1142 => 2,  1134 => 15,  1132 => 14,  1121 => 13,  1110 => 4,  1108 => 3,  1106 => 2,  1098 => 15,  1096 => 14,  1085 => 13,  1074 => 4,  1072 => 3,  1070 => 2,  1062 => 15,  1060 => 14,  1049 => 13,  1038 => 4,  1036 => 3,  1034 => 2,  1026 => 15,  1024 => 14,  1013 => 13,  1002 => 4,  1000 => 3,  998 => 2,  990 => 15,  988 => 14,  977 => 13,  966 => 4,  964 => 3,  962 => 2,  954 => 15,  952 => 14,  941 => 13,  930 => 4,  928 => 3,  926 => 2,  918 => 15,  916 => 14,  905 => 13,  894 => 4,  892 => 3,  890 => 2,  882 => 15,  880 => 14,  869 => 13,  858 => 4,  856 => 3,  854 => 2,  846 => 15,  844 => 14,  833 => 13,  822 => 4,  820 => 3,  818 => 2,  810 => 15,  808 => 14,  797 => 13,  786 => 4,  784 => 3,  782 => 2,  774 => 15,  772 => 14,  761 => 13,  750 => 4,  748 => 3,  746 => 2,  738 => 15,  736 => 14,  725 => 13,  714 => 4,  712 => 3,  710 => 2,  702 => 15,  700 => 14,  689 => 13,  678 => 4,  676 => 3,  674 => 2,  666 => 15,  664 => 14,  653 => 13,  642 => 4,  640 => 3,  638 => 2,  630 => 15,  628 => 14,  617 => 13,  606 => 4,  604 => 3,  602 => 2,  594 => 15,  592 => 14,  581 => 13,  570 => 4,  568 => 3,  566 => 2,  558 => 15,  556 => 14,  545 => 13,  534 => 4,  532 => 3,  530 => 2,  522 => 15,  520 => 14,  509 => 13,  498 => 4,  496 => 3,  494 => 2,  486 => 15,  484 => 14,  473 => 13,  462 => 4,  460 => 3,  458 => 2,  450 => 15,  448 => 14,  437 => 13,  426 => 4,  424 => 3,  422 => 2,  414 => 15,  412 => 14,  401 => 13,  390 => 4,  388 => 3,  386 => 2,  378 => 15,  376 => 14,  365 => 13,  354 => 4,  352 => 3,  350 => 2,  342 => 15,  340 => 14,  329 => 13,  318 => 4,  316 => 3,  314 => 2,  306 => 15,  304 => 14,  293 => 13,  282 => 4,  280 => 3,  278 => 2,  270 => 15,  268 => 14,  257 => 13,  246 => 4,  244 => 3,  242 => 2,  234 => 15,  232 => 14,  221 => 13,  210 => 4,  208 => 3,  206 => 2,  198 => 15,  196 => 14,  185 => 13,  174 => 4,  172 => 3,  170 => 2,  162 => 15,  160 => 14,  149 => 13,  138 => 4,  136 => 3,  134 => 2,  126 => 15,  124 => 14,  113 => 13,  102 => 4,  100 => 3,  98 => 2,  90 => 15,  88 => 14,  77 => 13,  66 => 4,  64 => 3,  62 => 2,  54 => 15,  52 => 14,  41 => 13,  30 => 4,  28 => 3,  26 => 2,  22 => 1,);
    }
}
