<?php

/* OroDataGridBundle::macros.html.twig */
class __TwigTemplate_dde51fe10f40ffb5c86590dd370ec950cc5a934a9d9bf41e5f3ecd554afe73cd extends Twig_Template
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
        $__internal_ff5ee533eddd5033110bb0cea910f34d6a19158c8b7c4875f4c2c232cf553df9 = $this->env->getExtension("native_profiler");
        $__internal_ff5ee533eddd5033110bb0cea910f34d6a19158c8b7c4875f4c2c232cf553df9->enter($__internal_ff5ee533eddd5033110bb0cea910f34d6a19158c8b7c4875f4c2c232cf553df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle::macros.html.twig"));

        
        $__internal_ff5ee533eddd5033110bb0cea910f34d6a19158c8b7c4875f4c2c232cf553df9->leave($__internal_ff5ee533eddd5033110bb0cea910f34d6a19158c8b7c4875f4c2c232cf553df9_prof);

    }

    // line 9
    public function getrenderGrid($__name__ = null, $__params__ = array(), $__renderParams__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "params" => $__params__,
            "renderParams" => $__renderParams__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_9e19fc500e5867f9dcec5f062ea1bf6504b1c7135283f6651cf917d7d8bbfb42 = $this->env->getExtension("native_profiler");
            $__internal_9e19fc500e5867f9dcec5f062ea1bf6504b1c7135283f6651cf917d7d8bbfb42->enter($__internal_9e19fc500e5867f9dcec5f062ea1bf6504b1c7135283f6651cf917d7d8bbfb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderGrid"));

            // line 10
            echo "    ";
            $context["datagrid"] = $this->env->getExtension('oro_datagrid')->getGrid((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
            // line 11
            echo "    ";
            if ((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid"))) {
                // line 12
                echo "        ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_widgetContainer"), "method") == "dialog")) {
                    // line 13
                    echo "            ";
                    $context["renderParams"] = twig_array_merge(array("enableViews" => false), (isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")));
                    // line 14
                    echo "        ";
                }
                // line 15
                echo "        ";
                $context["metaData"] = $this->env->getExtension('oro_datagrid')->getGridMetadata((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")), (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")));
                // line 16
                echo "        ";
                if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "routerEnabled", array(), "any", true, true)) {
                    // line 17
                    echo "            ";
                    $context["metadataOptions"] = (($this->getAttribute((isset($context["metaData"]) ? $context["metaData"] : null), "options", array(), "any", true, true)) ? ($this->getAttribute((isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData")), "options", array())) : (array()));
                    // line 18
                    echo "            ";
                    $context["metadataOptions"] = twig_array_merge((isset($context["metadataOptions"]) ? $context["metadataOptions"] : $this->getContext($context, "metadataOptions")), array("routerEnabled" => $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "routerEnabled", array())));
                    // line 19
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData")), array("options" => (isset($context["metadataOptions"]) ? $context["metadataOptions"] : $this->getContext($context, "metadataOptions"))));
                    // line 20
                    echo "        ";
                }
                // line 21
                echo "        ";
                if ((($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "enableFullScreenLayout", array(), "any", true, true) && $this->getAttribute(                // line 22
(isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "enableFullScreenLayout", array())) && $this->env->getExtension('config_extension')->getConfigValue("oro_data_grid.full_screen_layout_enabled"))) {
                    // line 24
                    echo "            ";
                    $context["metaData"] = twig_array_merge((isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData")), array("enableFullScreenLayout" => true));
                    // line 25
                    echo "        ";
                }
                // line 26
                echo "        ";
                $context["data"] = $this->env->getExtension('oro_datagrid')->getGridData((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")));
                // line 27
                echo "        ";
                $context["gridId"] = $this->env->getExtension('oro_datagrid')->generateGridElementId((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")));
                // line 28
                echo "        ";
                $context["enableFilters"] = (($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "enableFilters", array(), "any", true, true)) ? ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "enableFilters", array())) : (true));
                // line 29
                echo "        ";
                $context["options"] = array("el" => ("#" .                 // line 30
(isset($context["gridId"]) ? $context["gridId"] : $this->getContext($context, "gridId"))), "gridName" => $this->env->getExtension('oro_datagrid')->buildGridFullName($this->getAttribute(                // line 31
(isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")), "name", array()), $this->getAttribute((isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")), "scope", array())), "builders" => $this->getAttribute(                // line 32
(isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData")), "requireJSModules", array()), "metadata" =>                 // line 33
(isset($context["metaData"]) ? $context["metaData"] : $this->getContext($context, "metaData")), "data" =>                 // line 34
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "enableFilters" =>                 // line 35
(isset($context["enableFilters"]) ? $context["enableFilters"] : $this->getContext($context, "enableFilters")), "enableViews" => (($this->getAttribute(                // line 36
(isset($context["renderParams"]) ? $context["renderParams"] : null), "enableViews", array(), "any", true, true)) ? ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "enableViews", array())) : ((isset($context["enableFilters"]) ? $context["enableFilters"] : $this->getContext($context, "enableFilters")))), "showViewsInNavbar" => (($this->getAttribute(                // line 37
(isset($context["renderParams"]) ? $context["renderParams"] : null), "showViewsInNavbar", array(), "any", true, true)) ? ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "showViewsInNavbar", array())) : (false)), "inputName" => $this->env->getExtension('oro_datagrid')->buildGridInputName($this->getAttribute(                // line 38
(isset($context["datagrid"]) ? $context["datagrid"] : $this->getContext($context, "datagrid")), "name", array())));
                // line 40
                echo "
        <div id=\"";
                // line 41
                echo twig_escape_filter($this->env, (isset($context["gridId"]) ? $context["gridId"] : $this->getContext($context, "gridId")), "html", null, true);
                echo "\"
             data-page-component-module=\"orodatagrid/js/app/components/datagrid-component\"
             data-page-component-options=\"";
                // line 43
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
                echo "\"
             ";
                // line 44
                if ($this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : null), "cssClass", array(), "any", true, true)) {
                    echo " class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), "cssClass", array()), "html", null, true);
                    echo "\" ";
                }
                echo "></div>
    ";
            }
            
            $__internal_9e19fc500e5867f9dcec5f062ea1bf6504b1c7135283f6651cf917d7d8bbfb42->leave($__internal_9e19fc500e5867f9dcec5f062ea1bf6504b1c7135283f6651cf917d7d8bbfb42_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroDataGridBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  116 => 43,  111 => 41,  108 => 40,  106 => 38,  105 => 37,  104 => 36,  103 => 35,  102 => 34,  101 => 33,  100 => 32,  99 => 31,  98 => 30,  96 => 29,  93 => 28,  90 => 27,  87 => 26,  84 => 25,  81 => 24,  79 => 22,  77 => 21,  74 => 20,  71 => 19,  68 => 18,  65 => 17,  62 => 16,  59 => 15,  56 => 14,  53 => 13,  50 => 12,  47 => 11,  44 => 10,  27 => 9,);
    }
}
