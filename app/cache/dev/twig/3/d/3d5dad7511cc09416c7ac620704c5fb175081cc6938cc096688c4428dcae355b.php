<?php

/* OroEntityPaginationBundle:Placeholder:entityPagination.html.twig */
class __TwigTemplate_3d5dad7511cc09416c7ac620704c5fb175081cc6938cc096688c4428dcae355b extends Twig_Template
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
        $__internal_6ae01f1bf91da95c08e184e9962bdc2727f33d1dd3029ea202ddfe5fda34f520 = $this->env->getExtension("native_profiler");
        $__internal_6ae01f1bf91da95c08e184e9962bdc2727f33d1dd3029ea202ddfe5fda34f520->enter($__internal_6ae01f1bf91da95c08e184e9962bdc2727f33d1dd3029ea202ddfe5fda34f520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityPaginationBundle:Placeholder:entityPagination.html.twig"));

        // line 1
        if ((array_key_exists("entity", $context) && (isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")))) {
            // line 2
            echo "    ";
            $context["isDataCollected"] = $this->env->getExtension('oro_entity_pagination')->collectData((isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")));
            // line 3
            echo "    ";
            $context["pager"] = $this->env->getExtension('oro_entity_pagination')->getPager((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")));
            // line 4
            echo "
    ";
            // line 5
            if (((isset($context["isDataCollected"]) ? $context["isDataCollected"] : $this->getContext($context, "isDataCollected")) && (isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")))) {
                // line 6
                echo "        ";
                $context["infoMessageShown"] = $this->env->getExtension('oro_entity_pagination')->showInfoMessage((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")));
                // line 7
                echo "        ";
                $context["currentRoute"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method");
                // line 8
                echo "        ";
                $context["currentParams"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method");
                // line 9
                echo "        ";
                $context["queryParams"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array());
                // line 10
                echo "        ";
                $context["allParams"] = array("_entityName" => $this->env->getExtension('oro_entity')->getClassName((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), true), "_scope" => (isset($context["scope"]) ? $context["scope"] : $this->getContext($context, "scope")), "_routeName" => (isset($context["currentRoute"]) ? $context["currentRoute"] : $this->getContext($context, "currentRoute")));
                // line 11
                echo "        ";
                $context["allParams"] = twig_array_merge((isset($context["allParams"]) ? $context["allParams"] : $this->getContext($context, "allParams")), (isset($context["currentParams"]) ? $context["currentParams"] : $this->getContext($context, "currentParams")));
                // line 12
                echo "        ";
                $context["allParams"] = twig_array_merge((isset($context["allParams"]) ? $context["allParams"] : $this->getContext($context, "allParams")), (isset($context["queryParams"]) ? $context["queryParams"] : $this->getContext($context, "queryParams")));
                // line 13
                echo "
        ";
                // line 14
                $context["componentName"] = "oroui/js/app/components/hidden-redirect-component";
                // line 15
                echo "        ";
                $context["componentOptions"] = array("type" => "warning");
                // line 16
                echo "        
        <div id=\"entity-pagination\">
            <div class=\"pagination\">
                <ul class=\"icons-holder\">
                    <li ";
                // line 20
                if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current", array()) == 1)) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_entity_pagination_first", (isset($context["allParams"]) ? $context["allParams"] : $this->getContext($context, "allParams"))), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 22
                echo twig_escape_filter($this->env, (isset($context["componentName"]) ? $context["componentName"] : $this->getContext($context, "componentName")), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["componentOptions"]) ? $context["componentOptions"] : $this->getContext($context, "componentOptions"))), "html", null, true);
                echo "\">
                            ";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_pagination.first"), "html", null, true);
                echo "
                        </a>
                    </li>
                    <li ";
                // line 27
                if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current", array()) == 1)) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_entity_pagination_previous", (isset($context["allParams"]) ? $context["allParams"] : $this->getContext($context, "allParams"))), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["componentName"]) ? $context["componentName"] : $this->getContext($context, "componentName")), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 30
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["componentOptions"]) ? $context["componentOptions"] : $this->getContext($context, "componentOptions"))), "html", null, true);
                echo "\">
                            <i class=\"icon-chevron-left hide-text\"></i>
                        </a>
                    </li>
                    <li><div class=\"pagination-current\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current", array()), "html", null, true);
                echo "</div></li>
                    <li ";
                // line 35
                if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current", array()) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "total", array()))) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_entity_pagination_next", (isset($context["allParams"]) ? $context["allParams"] : $this->getContext($context, "allParams"))), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["componentName"]) ? $context["componentName"] : $this->getContext($context, "componentName")), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["componentOptions"]) ? $context["componentOptions"] : $this->getContext($context, "componentOptions"))), "html", null, true);
                echo "\">
                            <i class=\"icon-chevron-right hide-text\"></i>
                        </a>
                    </li>
                    <li ";
                // line 42
                if (($this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "current", array()) == $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "total", array()))) {
                    echo " class=\"disabled\" ";
                }
                echo ">
                        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_entity_pagination_last", (isset($context["allParams"]) ? $context["allParams"] : $this->getContext($context, "allParams"))), "html", null, true);
                echo "\"
                           data-page-component-module=\"";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["componentName"]) ? $context["componentName"] : $this->getContext($context, "componentName")), "html", null, true);
                echo "\"
                           data-page-component-options=\"";
                // line 45
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["componentOptions"]) ? $context["componentOptions"] : $this->getContext($context, "componentOptions"))), "html", null, true);
                echo "\">
                            ";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_pagination.last"), "html", null, true);
                echo "
                        </a>
                    </li>
                </ul>

                <div class=\"dib pagination-total\">
                    ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("oro.entity_pagination.pager_of_%total%_record|pager_of_%total%_records", $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "total", array()), array("%total%" => $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "total", array()))), "html", null, true);
                echo "
                </div>
            </div>
        </div>
    ";
            }
        }
        
        $__internal_6ae01f1bf91da95c08e184e9962bdc2727f33d1dd3029ea202ddfe5fda34f520->leave($__internal_6ae01f1bf91da95c08e184e9962bdc2727f33d1dd3029ea202ddfe5fda34f520_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityPaginationBundle:Placeholder:entityPagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 52,  158 => 46,  154 => 45,  150 => 44,  146 => 43,  140 => 42,  133 => 38,  129 => 37,  125 => 36,  119 => 35,  115 => 34,  108 => 30,  104 => 29,  100 => 28,  94 => 27,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  70 => 20,  64 => 16,  61 => 15,  59 => 14,  56 => 13,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  35 => 6,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }
}
