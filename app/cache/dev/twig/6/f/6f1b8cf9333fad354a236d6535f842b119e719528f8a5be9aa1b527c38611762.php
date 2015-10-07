<?php

/* OroDashboardBundle:Dashboard:widget.html.twig */
class __TwigTemplate_6f1b8cf9333fad354a236d6535f842b119e719528f8a5be9aa1b527c38611762 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'actions' => array($this, 'block_actions'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccf42881c2f812ccf124a986227f8e22538b553d16853d1c59e3ea1d3feb8b3a = $this->env->getExtension("native_profiler");
        $__internal_ccf42881c2f812ccf124a986227f8e22538b553d16853d1c59e3ea1d3feb8b3a->enter($__internal_ccf42881c2f812ccf124a986227f8e22538b553d16853d1c59e3ea1d3feb8b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Dashboard:widget.html.twig"));

        // line 1
        $context["widgetId"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_wid"), "method");
        // line 2
        $context["widgetContentId"] = ("widget-content-" . (isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId")));
        // line 3
        $context["widgetType"] = ((array_key_exists("widgetType", $context)) ? (_twig_default_filter((isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "dashboard")) : ("dashboard"));
        // line 4
        $context["widgetClass"] = twig_lower_filter($this->env, strtr((isset($context["widgetName"]) ? $context["widgetName"] : $this->getContext($context, "widgetName")), array("_" => "-")));
        // line 5
        if ( !array_key_exists("widgetTitle", $context)) {
            // line 6
            echo "    ";
            if ( !array_key_exists("widgetLabel", $context)) {
                // line 7
                echo "        ";
                $context["widgetTitle"] = false;
                // line 8
                echo "    ";
            } elseif (((array_key_exists("widgetConfiguration", $context) && $this->getAttribute((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : null), "title", array(), "any", true, true)) &&  !twig_test_empty($this->getAttribute($this->getAttribute((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : $this->getContext($context, "widgetConfiguration")), "title", array()), "value", array())))) {
                // line 9
                echo "        ";
                $context["widgetTitle"] = $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : $this->getContext($context, "widgetConfiguration")), "title", array()), "value", array()));
                // line 10
                echo "    ";
            } else {
                // line 11
                echo "        ";
                $context["widgetTitle"] = $this->env->getExtension('translator')->trans((isset($context["widgetLabel"]) ? $context["widgetLabel"] : $this->getContext($context, "widgetLabel")));
                // line 12
                echo "    ";
            }
        }
        // line 14
        echo "
<div id=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["widgetContentId"]) ? $context["widgetContentId"] : $this->getContext($context, "widgetContentId")), "html", null, true);
        echo "\" class=\"invisible widget-content ";
        echo twig_escape_filter($this->env, (isset($context["widgetType"]) ? $context["widgetType"] : $this->getContext($context, "widgetType")), "html", null, true);
        echo "-widget-content ";
        echo twig_escape_filter($this->env, (isset($context["widgetClass"]) ? $context["widgetClass"] : $this->getContext($context, "widgetClass")), "html", null, true);
        echo "-widget-content\">
    ";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "    ";
        if (array_key_exists("widgetConfiguration", $context)) {
            // line 19
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["widgetConfiguration"]) ? $context["widgetConfiguration"] : $this->getContext($context, "widgetConfiguration")));
            foreach ($context['_seq'] as $context["configName"] => $context["config"]) {
                // line 20
                echo "            ";
                if (($this->getAttribute($context["config"], "show_on_widget", array()) &&  !(null === $this->getAttribute($context["config"], "value", array())))) {
                    // line 21
                    echo "                ";
                    if (($this->getAttribute($context["config"], "options", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["config"], "options", array(), "any", false, true), "label", array(), "any", true, true))) {
                        // line 22
                        echo "                    ";
                        $context["label"] = $this->getAttribute($this->getAttribute($context["config"], "options", array()), "label", array());
                        // line 23
                        echo "                ";
                    } else {
                        // line 24
                        echo "                    ";
                        $context["label"] = $context["configName"];
                        // line 25
                        echo "                ";
                    }
                    // line 26
                    echo "                <div class=\"widget-config-data\"><stong>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
                    echo "</stong>: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["config"], "value", array()), "html", null, true);
                    echo "</div>
            ";
                }
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['configName'], $context['config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "    ";
        }
        // line 30
        echo "    ";
        $this->displayBlock('actions', $context, $blocks);
        // line 51
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'underscore', 'oroui/js/widget-manager'],
        function(\$, _, widgetManager){
            widgetManager.getWidgetInstance(";
        // line 54
        echo twig_jsonencode_filter((isset($context["widgetId"]) ? $context["widgetId"] : $this->getContext($context, "widgetId")));
        echo ", function(widget) {
                ";
        // line 55
        if ( !twig_test_empty((isset($context["widgetTitle"]) ? $context["widgetTitle"] : $this->getContext($context, "widgetTitle")))) {
            // line 56
            echo "                widget.setTitle(";
            echo twig_jsonencode_filter((isset($context["widgetTitle"]) ? $context["widgetTitle"] : $this->getContext($context, "widgetTitle")));
            echo ");
                ";
        }
        // line 58
        echo "            });
        });
    </script>
</div>
";
        
        $__internal_ccf42881c2f812ccf124a986227f8e22538b553d16853d1c59e3ea1d3feb8b3a->leave($__internal_ccf42881c2f812ccf124a986227f8e22538b553d16853d1c59e3ea1d3feb8b3a_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_32a4c659fe72af0c7d6678268d6194168898f4fe6d05146b5767d34f5220a155 = $this->env->getExtension("native_profiler");
        $__internal_32a4c659fe72af0c7d6678268d6194168898f4fe6d05146b5767d34f5220a155->enter($__internal_32a4c659fe72af0c7d6678268d6194168898f4fe6d05146b5767d34f5220a155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    ";
        
        $__internal_32a4c659fe72af0c7d6678268d6194168898f4fe6d05146b5767d34f5220a155->leave($__internal_32a4c659fe72af0c7d6678268d6194168898f4fe6d05146b5767d34f5220a155_prof);

    }

    // line 30
    public function block_actions($context, array $blocks = array())
    {
        $__internal_6562f768a539206125c648e2fb9ecde1fda9d3cdd94896e58a0f6d25317592c8 = $this->env->getExtension("native_profiler");
        $__internal_6562f768a539206125c648e2fb9ecde1fda9d3cdd94896e58a0f6d25317592c8->enter($__internal_6562f768a539206125c648e2fb9ecde1fda9d3cdd94896e58a0f6d25317592c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 31
        echo "        <div class=\"widget-actions\">
            ";
        // line 32
        if (array_key_exists("actions", $context)) {
            // line 33
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["actions"]) ? $context["actions"] : $this->getContext($context, "actions")));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 34
                if (( !$this->getAttribute($context["action"], "type", array(), "any", true, true) || ($this->getAttribute($context["action"], "type", array()) == "button"))) {
                    // line 35
                    echo "                        ";
                    $context["cssType"] = ("btn btn-mini " . (($this->getAttribute($context["action"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "class", array()), "btn-primary")) : ("btn-primary")));
                    // line 36
                    echo "                    ";
                } else {
                    // line 37
                    echo "                        ";
                    $context["cssType"] = "dashboard-link";
                    // line 38
                    echo "                    ";
                }
                // line 39
                echo "                    <a class=\"dashboard-btn  ";
                echo twig_escape_filter($this->env, (isset($context["cssType"]) ? $context["cssType"] : $this->getContext($context, "cssType")), "html", null, true);
                if (( !$this->getAttribute($context["action"], "url", array(), "any", true, true) ||  !$this->getAttribute($context["action"], "url", array()))) {
                    echo " no-hash";
                }
                echo "\"
                        href=\"";
                // line 40
                echo twig_escape_filter($this->env, (($this->getAttribute($context["action"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["action"], "url", array()), "javascript:void(0);")) : ("javascript:void(0);")), "html", null, true);
                echo "\"
                        ";
                // line 41
                if ($this->getAttribute($context["action"], "data", array(), "any", true, true)) {
                    // line 42
                    echo "                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["action"], "data", array()));
                    foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                        // line 43
                        echo "                            data-";
                        echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                        echo "\"
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo "                        ";
                }
                // line 46
                echo "                    >";
                if ($this->getAttribute($context["action"], "icon", array(), "any", true, true)) {
                    echo "<i class=\"icon-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "icon", array()), "html", null, true);
                    echo "\"></i> ";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["action"], "label", array()), "html", null, true);
                echo "</a>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            ";
        }
        // line 49
        echo "        </div>
    ";
        
        $__internal_6562f768a539206125c648e2fb9ecde1fda9d3cdd94896e58a0f6d25317592c8->leave($__internal_6562f768a539206125c648e2fb9ecde1fda9d3cdd94896e58a0f6d25317592c8_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 49,  232 => 48,  219 => 46,  216 => 45,  205 => 43,  200 => 42,  198 => 41,  194 => 40,  186 => 39,  183 => 38,  180 => 37,  177 => 36,  174 => 35,  172 => 34,  167 => 33,  165 => 32,  162 => 31,  156 => 30,  149 => 17,  143 => 16,  132 => 58,  126 => 56,  124 => 55,  120 => 54,  115 => 51,  112 => 30,  109 => 29,  103 => 28,  95 => 26,  92 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  77 => 20,  72 => 19,  69 => 18,  67 => 16,  59 => 15,  56 => 14,  52 => 12,  49 => 11,  46 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  32 => 5,  30 => 4,  28 => 3,  26 => 2,  24 => 1,);
    }
}
