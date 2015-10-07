<?php

/* OroUIBundle::macros.html.twig */
class __TwigTemplate_0b8135512e55c847346c673abb715a126a7d31da7494680213a5eda672f2204b extends Twig_Template
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
        $__internal_f32c89aa5ac487fe46c878c70b954ff63121fb18ba3cf3530c9c067da7e6775a = $this->env->getExtension("native_profiler");
        $__internal_f32c89aa5ac487fe46c878c70b954ff63121fb18ba3cf3530c9c067da7e6775a->enter($__internal_f32c89aa5ac487fe46c878c70b954ff63121fb18ba3cf3530c9c067da7e6775a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::macros.html.twig"));

        // line 28
        echo "
";
        // line 62
        echo "
";
        // line 89
        echo "
";
        // line 104
        echo "
";
        // line 114
        echo "
";
        // line 124
        echo "
";
        // line 138
        echo "
";
        // line 152
        echo "
";
        // line 188
        echo "
";
        // line 205
        echo "
";
        // line 237
        echo "
";
        // line 252
        echo "
";
        // line 280
        echo "
";
        // line 295
        echo "
";
        // line 308
        echo "
";
        // line 353
        echo "
";
        // line 389
        echo "
";
        // line 422
        echo "
";
        // line 468
        echo "
";
        // line 527
        echo "
";
        // line 549
        echo "
";
        // line 577
        echo "
";
        // line 586
        echo "
";
        // line 608
        echo "
";
        // line 628
        echo "
";
        // line 646
        echo "
";
        // line 653
        echo "
";
        // line 660
        echo "
";
        // line 669
        echo "
";
        // line 699
        echo "
";
        // line 736
        echo "
";
        // line 809
        echo "
";
        // line 832
        echo "
";
        // line 845
        echo "
";
        
        $__internal_f32c89aa5ac487fe46c878c70b954ff63121fb18ba3cf3530c9c067da7e6775a->leave($__internal_f32c89aa5ac487fe46c878c70b954ff63121fb18ba3cf3530c9c067da7e6775a_prof);

    }

    // line 1
    public function getcollection_prototype($__widget__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "widget" => $__widget__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2d308131f9b6140e373076bd9b75809d103a8dd90582125dd8ca624d5b47431b = $this->env->getExtension("native_profiler");
            $__internal_2d308131f9b6140e373076bd9b75809d103a8dd90582125dd8ca624d5b47431b->enter($__internal_2d308131f9b6140e373076bd9b75809d103a8dd90582125dd8ca624d5b47431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collection_prototype"));

            // line 2
            echo "    ";
            if (twig_in_filter("prototype", twig_get_array_keys_filter($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array())))) {
                // line 3
                echo "        ";
                $context["form"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array());
                // line 4
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "prototype", array()), "vars", array()), "name", array());
                // line 5
                echo "    ";
            } else {
                // line 6
                echo "        ";
                $context["form"] = (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
                // line 7
                echo "        ";
                $context["name"] = $this->getAttribute($this->getAttribute((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "vars", array()), "full_name", array());
                // line 8
                echo "    ";
            }
            // line 9
            echo "
    <div data-content=\"";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">
        <div class=\"row-oro oro-multiselect-holder\">
            <div class=\"float-holder \">
                ";
            // line 13
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            echo "
                ";
            // line 14
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()))) {
                // line 15
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 16
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                    echo "
                        ";
                    // line 17
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                ";
            } else {
                // line 20
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
                echo "
                ";
            }
            // line 22
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
            echo "
            </div>
            <button class=\"removeRow btn btn-action btn-link\" type=\"button\" data-related=\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\">×</button>
        </div>
    </div>
";
            
            $__internal_2d308131f9b6140e373076bd9b75809d103a8dd90582125dd8ca624d5b47431b->leave($__internal_2d308131f9b6140e373076bd9b75809d103a8dd90582125dd8ca624d5b47431b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function gettooltip($__tooltip__ = null, $__tooltip_parameters__ = null, $__tooltip_placement__ = null, $__details_enabled__ = null, $__details_link__ = null, $__details_anchor__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "tooltip" => $__tooltip__,
            "tooltip_parameters" => $__tooltip_parameters__,
            "tooltip_placement" => $__tooltip_placement__,
            "details_enabled" => $__details_enabled__,
            "details_link" => $__details_link__,
            "details_anchor" => $__details_anchor__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2a14ce71d9cd90228f6368d40724f6815bdbb0e09440f24e4311728c92525a65 = $this->env->getExtension("native_profiler");
            $__internal_2a14ce71d9cd90228f6368d40724f6815bdbb0e09440f24e4311728c92525a65->enter($__internal_2a14ce71d9cd90228f6368d40724f6815bdbb0e09440f24e4311728c92525a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 30
            echo "    ";
            $context["tooltip_parameters"] = ((array_key_exists("tooltip_parameters", $context)) ? (_twig_default_filter((isset($context["tooltip_parameters"]) ? $context["tooltip_parameters"] : $this->getContext($context, "tooltip_parameters")), array())) : (array()));
            // line 31
            echo "    ";
            $context["tooltip"] = $this->env->getExtension('translator')->trans((isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), (isset($context["tooltip_parameters"]) ? $context["tooltip_parameters"] : $this->getContext($context, "tooltip_parameters")), "tooltips");
            // line 32
            echo "    ";
            if ( !twig_test_empty((isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")))) {
                // line 33
                echo "        ";
                $context["details_anchor"] = ((array_key_exists("details_anchor", $context)) ? (_twig_default_filter((isset($context["details_anchor"]) ? $context["details_anchor"] : $this->getContext($context, "details_anchor")), null)) : (null));
                // line 34
                echo "        ";
                $context["details_link"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter((isset($context["details_link"]) ? $context["details_link"] : $this->getContext($context, "details_link")), null)) : (null));
                // line 35
                echo "        ";
                $context["details_enabled"] = ((array_key_exists("details_enabled", $context)) ? (_twig_default_filter((isset($context["details_enabled"]) ? $context["details_enabled"] : $this->getContext($context, "details_enabled")), false)) : (false));
                // line 36
                echo "        ";
                $context["tooltip_placement"] = ((array_key_exists("tooltip_placement", $context)) ? (_twig_default_filter((isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : $this->getContext($context, "tooltip_placement")), null)) : (null));
                // line 37
                echo "
        ";
                // line 39
                echo "        ";
                if ((((isset($context["details_enabled"]) ? $context["details_enabled"] : $this->getContext($context, "details_enabled")) || (isset($context["details_anchor"]) ? $context["details_anchor"] : $this->getContext($context, "details_anchor"))) || (isset($context["details_link"]) ? $context["details_link"] : $this->getContext($context, "details_link")))) {
                    // line 40
                    echo "            ";
                    $context["helpLink"] = ((array_key_exists("details_link", $context)) ? (_twig_default_filter((isset($context["details_link"]) ? $context["details_link"] : $this->getContext($context, "details_link")), $this->env->getExtension('oro_help')->getHelpLinkUrl())) : ($this->env->getExtension('oro_help')->getHelpLinkUrl()));
                    // line 41
                    echo "            ";
                    if ((isset($context["details_anchor"]) ? $context["details_anchor"] : $this->getContext($context, "details_anchor"))) {
                        // line 42
                        echo "                ";
                        $context["helpLink"] = (((isset($context["helpLink"]) ? $context["helpLink"] : $this->getContext($context, "helpLink")) . "#") . (isset($context["details_anchor"]) ? $context["details_anchor"] : $this->getContext($context, "details_anchor")));
                        // line 43
                        echo "            ";
                    }
                    // line 44
                    echo "            ";
                    $context["tooltip"] = ((((((isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")) . "<div class=\"clearfix\"><div class=\"pull-right\"><a href=\"") .                     // line 45
(isset($context["helpLink"]) ? $context["helpLink"] : $this->getContext($context, "helpLink"))) . "\">") . $this->env->getExtension('translator')->trans("oro.form.tooltip.read_more")) . "</a></div></div>");
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "        ";
                // line 50
                echo "
        ";
                // line 51
                $context["tooltip"] = (("<div class=\"oro-popover-content\">" .                 // line 52
(isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip"))) . "</div>");
                // line 55
                echo "
        <i class=\"icon-info-sign tooltip-icon\"
           ";
                // line 57
                if ((isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : $this->getContext($context, "tooltip_placement"))) {
                    echo "data-placement=\"";
                    echo twig_escape_filter($this->env, (isset($context["tooltip_placement"]) ? $context["tooltip_placement"] : $this->getContext($context, "tooltip_placement")), "html", null, true);
                    echo "\"";
                }
                // line 58
                echo "           data-content=\"";
                echo twig_escape_filter($this->env, (isset($context["tooltip"]) ? $context["tooltip"] : $this->getContext($context, "tooltip")), "html", null, true);
                echo "\"
           data-toggle=\"popover\"></i>
    ";
            }
            
            $__internal_2a14ce71d9cd90228f6368d40724f6815bdbb0e09440f24e4311728c92525a65->leave($__internal_2a14ce71d9cd90228f6368d40724f6815bdbb0e09440f24e4311728c92525a65_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function getattibuteRow($__title__ = null, $__value__ = null, $__additionalData__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "value" => $__value__,
            "additionalData" => $__additionalData__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3a2386cf3f343bf71ebbe2ab778a52fd9437bea3aaae22f48d1d646ed3350799 = $this->env->getExtension("native_profiler");
            $__internal_3a2386cf3f343bf71ebbe2ab778a52fd9437bea3aaae22f48d1d646ed3350799->enter($__internal_3a2386cf3f343bf71ebbe2ab778a52fd9437bea3aaae22f48d1d646ed3350799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attibuteRow"));

            // line 71
            echo "    ";
            ob_start();
            // line 72
            echo "        <div class=\"clearfix-oro\">
            ";
            // line 73
            if ( !$this->getAttribute((isset($context["value"]) ? $context["value"] : null), "value", array(), "any", true, true)) {
                // line 74
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo "</div>
            ";
            } else {
                // line 76
                echo "                <div class=\"control-label\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "value", array()), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "hint", array()), "html", null, true);
                echo "</strong></div>
            ";
            }
            // line 78
            echo "        </div>
        ";
            // line 79
            if (twig_length_filter($this->env, (isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")))) {
                // line 80
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")), "data", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                    // line 81
                    echo "                <div class=\"clearfix-oro\">
                    <div class=\"control-label\">";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], $this->getAttribute((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")), "field", array())), "html", null, true);
                    echo "</div>
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "        ";
            }
            // line 86
            echo "    ";
            $context["attributeValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 87
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (isset($context["attributeValue"]) ? $context["attributeValue"] : $this->getContext($context, "attributeValue"))), "method");
            echo "
";
            
            $__internal_3a2386cf3f343bf71ebbe2ab778a52fd9437bea3aaae22f48d1d646ed3350799->leave($__internal_3a2386cf3f343bf71ebbe2ab778a52fd9437bea3aaae22f48d1d646ed3350799_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 96
    public function getrenderAttribute($__title__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_191635639507c94c57257d2569115abadde06a63abfebb972ee8685a0f29d5cb = $this->env->getExtension("native_profiler");
            $__internal_191635639507c94c57257d2569115abadde06a63abfebb972ee8685a0f29d5cb->enter($__internal_191635639507c94c57257d2569115abadde06a63abfebb972ee8685a0f29d5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderAttribute"));

            // line 97
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 98
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            ";
            // line 100
            echo (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"));
            echo "
        </div>
    </div>
";
            
            $__internal_191635639507c94c57257d2569115abadde06a63abfebb972ee8685a0f29d5cb->leave($__internal_191635639507c94c57257d2569115abadde06a63abfebb972ee8685a0f29d5cb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 111
    public function getrenderProperty($__title__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a3efb76c71f850d424e585a79c161347d1341580034619fa17179fbe3756691a = $this->env->getExtension("native_profiler");
            $__internal_a3efb76c71f850d424e585a79c161347d1341580034619fa17179fbe3756691a->enter($__internal_a3efb76c71f850d424e585a79c161347d1341580034619fa17179fbe3756691a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderProperty"));

            // line 112
            echo "    ";
            echo $this->getAttribute($this, "renderHtmlProperty", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => twig_escape_filter($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))), "method");
            echo "
";
            
            $__internal_a3efb76c71f850d424e585a79c161347d1341580034619fa17179fbe3756691a->leave($__internal_a3efb76c71f850d424e585a79c161347d1341580034619fa17179fbe3756691a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function getrenderHtmlProperty($__title__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8c3578c7f98e0f85399372e66569416520f72c825664f9c36e5d7b1afd4c0402 = $this->env->getExtension("native_profiler");
            $__internal_8c3578c7f98e0f85399372e66569416520f72c825664f9c36e5d7b1afd4c0402->enter($__internal_8c3578c7f98e0f85399372e66569416520f72c825664f9c36e5d7b1afd4c0402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderHtmlProperty"));

            // line 122
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (("<div class=\"control-label html-content\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $this->env->getExtension('translator')->trans("oro.ui.empty"))) : ($this->env->getExtension('translator')->trans("oro.ui.empty")))) . "</div>")), "method");
            echo "
";
            
            $__internal_8c3578c7f98e0f85399372e66569416520f72c825664f9c36e5d7b1afd4c0402->leave($__internal_8c3578c7f98e0f85399372e66569416520f72c825664f9c36e5d7b1afd4c0402_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 131
    public function getrenderSwitchableHtmlProperty($__title__ = null, $__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8bf112bfffa4729075b1cca87d8ca9ccfb9468cc3a5cdca4b3f37279660d5bb9 = $this->env->getExtension("native_profiler");
            $__internal_8bf112bfffa4729075b1cca87d8ca9ccfb9468cc3a5cdca4b3f37279660d5bb9->enter($__internal_8bf112bfffa4729075b1cca87d8ca9ccfb9468cc3a5cdca4b3f37279660d5bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderSwitchableHtmlProperty"));

            // line 132
            echo "    ";
            if ( !$this->env->getExtension('config_extension')->getConfigValue("oro_form.wysiwyg_enabled")) {
                // line 133
                echo "        ";
                $context["data"] = nl2br(strip_tags((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "<a>"));
                // line 134
                echo "    ";
            }
            // line 135
            echo "
    ";
            // line 136
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (("<div class=\"control-label html-content\">" . ((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), $this->env->getExtension('translator')->trans("oro.ui.empty"))) : ($this->env->getExtension('translator')->trans("oro.ui.empty")))) . "</div>")), "method");
            echo "
";
            
            $__internal_8bf112bfffa4729075b1cca87d8ca9ccfb9468cc3a5cdca4b3f37279660d5bb9->leave($__internal_8bf112bfffa4729075b1cca87d8ca9ccfb9468cc3a5cdca4b3f37279660d5bb9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 146
    public function getrenderColorProperty($__title__ = null, $__data__ = null, $__empty__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "empty" => $__empty__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e8574b0308210b21e954a81f23310c34743e569b4255950a36f7853695834e89 = $this->env->getExtension("native_profiler");
            $__internal_e8574b0308210b21e954a81f23310c34743e569b4255950a36f7853695834e89->enter($__internal_e8574b0308210b21e954a81f23310c34743e569b4255950a36f7853695834e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderColorProperty"));

            // line 147
            echo "    ";
            if ( !(null === (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                // line 148
                echo "       ";
                $context["data"] = (((((("<i class=\"color hide-text\" title=\"" . (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) . "\" style=\"background-color: ") . (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) . ";\">") . (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))) . "</i>");
                // line 149
                echo "    ";
            }
            // line 150
            echo "    ";
            echo $this->getAttribute($this, "renderAttribute", array(0 => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), 1 => (("<div class=\"control-label\">" . _twig_default_filter(((array_key_exists("data", $context)) ? (_twig_default_filter((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")))) : ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty")))), $this->env->getExtension('translator')->trans("oro.ui.empty"))) . "</div>")), "method");
            echo "
";
            
            $__internal_e8574b0308210b21e954a81f23310c34743e569b4255950a36f7853695834e89->leave($__internal_e8574b0308210b21e954a81f23310c34743e569b4255950a36f7853695834e89_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 165
    public function getlink($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fbd9c9fe04f2a457bbd3dac6adff0c7886efdd38fbcc6f3f41fb88d9b7773fb8 = $this->env->getExtension("native_profiler");
            $__internal_fbd9c9fe04f2a457bbd3dac6adff0c7886efdd38fbcc6f3f41fb88d9b7773fb8->enter($__internal_fbd9c9fe04f2a457bbd3dac6adff0c7886efdd38fbcc6f3f41fb88d9b7773fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link"));

            // line 166
            echo "    ";
            // line 167
            echo "    ";
            $context["iconHtml"] = "";
            // line 168
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 169
                echo "        ";
                ob_start();
                // line 170
                echo "        <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iCss", array()), "html", null, true);
                echo " hide-text\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array()), "html", null, true);
                echo "</i>
        ";
                $context["iconHtml"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 172
                echo "    ";
            } else {
                // line 173
                echo "    ";
            }
            // line 174
            echo "    ";
            ob_start();
            // line 175
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "path", array()), "html", null, true);
            echo "\"
        ";
            // line 176
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 177
                echo "            id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 179
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array(), "any", true, true)) {
                // line 180
                echo "            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 181
                    echo "                data-";
                    echo twig_escape_filter($this->env, $context["dataItemName"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["dataItemValue"], "html_attr");
                    echo "\"
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 183
                echo "        ";
            }
            // line 184
            echo "       class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
       ";
            // line 185
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                echo "title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array()), "html", null, true);
                echo "\"";
            }
            echo ">";
            echo trim((isset($context["iconHtml"]) ? $context["iconHtml"] : $this->getContext($context, "iconHtml")));
            echo twig_escape_filter($this->env, trim($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())), "html", null, true);
            echo "</a>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_fbd9c9fe04f2a457bbd3dac6adff0c7886efdd38fbcc6f3f41fb88d9b7773fb8->leave($__internal_fbd9c9fe04f2a457bbd3dac6adff0c7886efdd38fbcc6f3f41fb88d9b7773fb8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 200
    public function getbutton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2d5a9149c5d0939b6542120e9cd8477d8c289faf98f8f9744cab749b3b61c140 = $this->env->getExtension("native_profiler");
            $__internal_2d5a9149c5d0939b6542120e9cd8477d8c289faf98f8f9744cab749b3b61c140->enter($__internal_2d5a9149c5d0939b6542120e9cd8477d8c289faf98f8f9744cab749b3b61c140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "button"));

            // line 201
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 202
            echo $this->getAttribute($this, "link", array(0 => twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("class" => "btn back icons-holder-text"))), "method");
            echo "
    </div>
";
            
            $__internal_2d5a9149c5d0939b6542120e9cd8477d8c289faf98f8f9744cab749b3b61c140->leave($__internal_2d5a9149c5d0939b6542120e9cd8477d8c289faf98f8f9744cab749b3b61c140_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 216
    public function getdropdownButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b159048ee0ee38ed0c95d307fae57ab1fa28b7039f6385972da76657ff35acd3 = $this->env->getExtension("native_profiler");
            $__internal_b159048ee0ee38ed0c95d307fae57ab1fa28b7039f6385972da76657ff35acd3->enter($__internal_b159048ee0ee38ed0c95d307fae57ab1fa28b7039f6385972da76657ff35acd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownButton"));

            // line 217
            echo "    <div class=\"btn-group\">
        <a class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
            ";
            // line 219
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 220
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iCss", array()), "html", null, true);
                echo "\"></i>
            ";
            }
            // line 222
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array()), "html", null, true);
            echo "
            <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu ";
            // line 225
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\">
            ";
            // line 226
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "elements", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "elements", array())))) {
                // line 227
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "elements", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 228
                    echo "                    ";
                    echo $this->getAttribute($this, "dropdownItem", array(0 => $context["item"]), "method");
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 230
                echo "            ";
            }
            // line 231
            echo "            ";
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "html", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", array())))) {
                // line 232
                echo "                ";
                echo $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", array());
                echo "
            ";
            }
            // line 234
            echo "        </ul>
    </div>
";
            
            $__internal_b159048ee0ee38ed0c95d307fae57ab1fa28b7039f6385972da76657ff35acd3->leave($__internal_b159048ee0ee38ed0c95d307fae57ab1fa28b7039f6385972da76657ff35acd3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 249
    public function getdropdownItem($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_148042f1df674bb01860b92975a8d35e97a68bb963726f7019c1320907566b08 = $this->env->getExtension("native_profiler");
            $__internal_148042f1df674bb01860b92975a8d35e97a68bb963726f7019c1320907566b08->enter($__internal_148042f1df674bb01860b92975a8d35e97a68bb963726f7019c1320907566b08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownItem"));

            // line 250
            echo "    <li>";
            echo $this->getAttribute($this, "link", array(0 => (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))), "method");
            echo "</li>
";
            
            $__internal_148042f1df674bb01860b92975a8d35e97a68bb963726f7019c1320907566b08->leave($__internal_148042f1df674bb01860b92975a8d35e97a68bb963726f7019c1320907566b08_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 262
    public function getpinnedDropdownButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4be84a20e2355fe70c319e32ac6aac3a693a5ff99899e7e47a0ea0520806e4f9 = $this->env->getExtension("native_profiler");
            $__internal_4be84a20e2355fe70c319e32ac6aac3a693a5ff99899e7e47a0ea0520806e4f9->enter($__internal_4be84a20e2355fe70c319e32ac6aac3a693a5ff99899e7e47a0ea0520806e4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "pinnedDropdownButton"));

            // line 263
            echo "    ";
            if ($this->env->getExtension('mobile_extension')->isDesktop()) {
                // line 264
                echo "        ";
                $context["options"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "options", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "options", array()), array())) : (array()));
                // line 265
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("widgetModule" => (($this->getAttribute(                // line 266
(isset($context["options"]) ? $context["options"] : null), "widgetModule", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "widgetModule", array()), "oroui/js/content-processor/pinned-dropdown-button")) : ("oroui/js/content-processor/pinned-dropdown-button")), "widgetName" => (($this->getAttribute(                // line 267
(isset($context["options"]) ? $context["options"] : null), "widgetName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "widgetName", array()), "pinnedDropdownButtonProcessor")) : ("pinnedDropdownButtonProcessor")), "groupKey" => (($this->getAttribute(                // line 268
(isset($context["parameters"]) ? $context["parameters"] : null), "groupKey", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "groupKey", array())) : ("")), "useMainButtonsClone" => true));
                // line 271
                echo "        <div class=\"pull-right\"
             data-page-component-module=\"oroui/js/app/components/jquery-widget-component\"
             data-page-component-options=\"";
                // line 273
                echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "html", null, true);
                echo "\">
            ";
                // line 274
                echo $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", array());
                echo "
        </div>
    ";
            } else {
                // line 277
                echo "        ";
                echo $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", array());
                echo "
    ";
            }
            
            $__internal_4be84a20e2355fe70c319e32ac6aac3a693a5ff99899e7e47a0ea0520806e4f9->leave($__internal_4be84a20e2355fe70c319e32ac6aac3a693a5ff99899e7e47a0ea0520806e4f9_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 284
    public function getdropdownSaveButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_4eed460c909b2ed2d0a017a9820498373663d797c77ee55a2e4980b8f4c21f55 = $this->env->getExtension("native_profiler");
            $__internal_4eed460c909b2ed2d0a017a9820498373663d797c77ee55a2e4980b8f4c21f55->enter($__internal_4eed460c909b2ed2d0a017a9820498373663d797c77ee55a2e4980b8f4c21f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownSaveButton"));

            // line 285
            echo "    ";
            $context["parameters"] = twig_array_merge(array("groupKey" => "saveButtons", "options" => array("moreButtonAttrs" => array("class" => "btn-success"))), ((            // line 292
array_key_exists("parameters", $context)) ? (_twig_default_filter((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array())) : (array())));
            // line 293
            echo "    ";
            echo $this->getAttribute($this, "pinnedDropdownButton", array(0 => (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_4eed460c909b2ed2d0a017a9820498373663d797c77ee55a2e4980b8f4c21f55->leave($__internal_4eed460c909b2ed2d0a017a9820498373663d797c77ee55a2e4980b8f4c21f55_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 302
    public function getcancelButton($__path__ = null, $__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "path" => $__path__,
            "label" => $__label__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_aefdd424e541bb38b1beb4cdee7830ac97790f9be2f3a7dc5b325a53cde0a49b = $this->env->getExtension("native_profiler");
            $__internal_aefdd424e541bb38b1beb4cdee7830ac97790f9be2f3a7dc5b325a53cde0a49b->enter($__internal_aefdd424e541bb38b1beb4cdee7830ac97790f9be2f3a7dc5b325a53cde0a49b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "cancelButton"));

            // line 303
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 304
                echo "        ";
                $context["label"] = $this->env->getExtension('translator')->trans("Cancel");
                // line 305
                echo "    ";
            }
            // line 306
            echo "    ";
            echo $this->getAttribute($this, "button", array(0 => array("path" => (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "title" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "data" => array("action" => "cancel"))), "method");
            echo "
";
            
            $__internal_aefdd424e541bb38b1beb4cdee7830ac97790f9be2f3a7dc5b325a53cde0a49b->leave($__internal_aefdd424e541bb38b1beb4cdee7830ac97790f9be2f3a7dc5b325a53cde0a49b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 320
    public function geteditButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_955bacf36377f98ef74babc094902d4ea3e612a091da860c0671693a0b5ccb1b = $this->env->getExtension("native_profiler");
            $__internal_955bacf36377f98ef74babc094902d4ea3e612a091da860c0671693a0b5ccb1b->enter($__internal_955bacf36377f98ef74babc094902d4ea3e612a091da860c0671693a0b5ccb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "editButton"));

            // line 321
            echo "    ";
            $context["iCss"] = array(0 => "icon-edit");
            // line 322
            echo "    ";
            $context["aCss"] = array(0 => "edit-button", 1 => "main-group");
            // line 323
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 324
                echo "        ";
                $context["iCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iCss", array()), " "), (isset($context["iCss"]) ? $context["iCss"] : $this->getContext($context, "iCss")));
                // line 325
                echo "    ";
            }
            // line 326
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) {
                // line 327
                echo "        ";
                $context["aCss"] = twig_array_merge(twig_split_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array()), " "), (isset($context["aCss"]) ? $context["aCss"] : $this->getContext($context, "aCss")));
                // line 328
                echo "    ";
            }
            // line 329
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 330
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array());
                // line 331
                echo "    ";
            } else {
                // line 332
                echo "        ";
                $context["title"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.edit_entity", array("%entityName%" => $this->getAttribute(                // line 333
(isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.edit")));
                // line 336
                echo "    ";
            }
            // line 337
            echo "    ";
            $context["label"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute(            // line 338
(isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())) : ($this->env->getExtension('translator')->trans("oro.ui.edit")));
            // line 341
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("iCss" => twig_join_filter(            // line 342
(isset($context["iCss"]) ? $context["iCss"] : $this->getContext($context, "iCss")), " "), "aCss" => twig_join_filter(            // line 343
(isset($context["aCss"]) ? $context["aCss"] : $this->getContext($context, "aCss")), " "), "title" =>             // line 344
(isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "label" =>             // line 345
(isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))));
            // line 347
            echo "
    ";
            // line 349
            echo "    ";
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("path" => $this->env->getExtension('oro_ui_url')->addQuery($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "path", array(), "array"))));
            // line 350
            echo "
    ";
            // line 351
            echo $this->getAttribute($this, "button", array(0 => (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))), "method");
            echo "
";
            
            $__internal_955bacf36377f98ef74babc094902d4ea3e612a091da860c0671693a0b5ccb1b->leave($__internal_955bacf36377f98ef74babc094902d4ea3e612a091da860c0671693a0b5ccb1b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 365
    public function getaddButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8744e25c7dd1258c93043031834af7e9f9a2e4e2b7841dfb1d390da4f8953594 = $this->env->getExtension("native_profiler");
            $__internal_8744e25c7dd1258c93043031834af7e9f9a2e4e2b7841dfb1d390da4f8953594->enter($__internal_8744e25c7dd1258c93043031834af7e9f9a2e4e2b7841dfb1d390da4f8953594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "addButton"));

            // line 366
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) {
                // line 367
                echo "        ";
                $context["label"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array());
                // line 368
                echo "    ";
            } else {
                // line 369
                echo "        ";
                $context["label"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 370
(isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.create")));
                // line 373
                echo "    ";
            }
            // line 374
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 375
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array());
                // line 376
                echo "    ";
            } else {
                // line 377
                echo "        ";
                $context["title"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.create_entity", array("%entityName%" => $this->getAttribute(                // line 378
(isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.create")));
                // line 381
                echo "    ";
            }
            // line 382
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "path", array()), "html", null, true);
            echo "\"
        class=\"btn main-group btn-primary pull-right ";
            // line 383
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        title=\"";
            // line 384
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "\"
    >
        ";
            // line 386
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "
    </a>
";
            
            $__internal_8744e25c7dd1258c93043031834af7e9f9a2e4e2b7841dfb1d390da4f8953594->leave($__internal_8744e25c7dd1258c93043031834af7e9f9a2e4e2b7841dfb1d390da4f8953594_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 405
    public function getdeleteButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c4a13fb08038c9c6614ee0d09447ffd245e047d8dd6eaf49ae9183f0d565b5d1 = $this->env->getExtension("native_profiler");
            $__internal_c4a13fb08038c9c6614ee0d09447ffd245e047d8dd6eaf49ae9183f0d565b5d1->enter($__internal_c4a13fb08038c9c6614ee0d09447ffd245e047d8dd6eaf49ae9183f0d565b5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "deleteButton"));

            // line 406
            echo "    ";
            $context["aCss"] = "btn icons-holder-text";
            // line 407
            echo "
    ";
            // line 408
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "disabled", array(), "any", true, true) && $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "disabled", array()))) {
                // line 409
                echo "        ";
                $context["aCss"] = ((isset($context["aCss"]) ? $context["aCss"] : $this->getContext($context, "aCss")) . " disabled");
                // line 410
                echo "    ";
            }
            // line 411
            echo "
    ";
            // line 412
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) {
                // line 413
                echo "        ";
                $context["aCss"] = (((isset($context["aCss"]) ? $context["aCss"] : $this->getContext($context, "aCss")) . " ") . $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array()));
                // line 414
                echo "    ";
            }
            // line 415
            echo "
    ";
            // line 416
            $context["parameters"] = twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("aCss" => (isset($context["aCss"]) ? $context["aCss"] : $this->getContext($context, "aCss"))));
            // line 417
            echo "
    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 419
            echo $this->getAttribute($this, "deleteLink", array(0 => (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))), "method");
            echo "
    </div>
";
            
            $__internal_c4a13fb08038c9c6614ee0d09447ffd245e047d8dd6eaf49ae9183f0d565b5d1->leave($__internal_c4a13fb08038c9c6614ee0d09447ffd245e047d8dd6eaf49ae9183f0d565b5d1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 423
    public function getdeleteLink($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_458601632eb6128076e9f08e7a98edf349cd90c8aed1e19314c967f20a99cb92 = $this->env->getExtension("native_profiler");
            $__internal_458601632eb6128076e9f08e7a98edf349cd90c8aed1e19314c967f20a99cb92->enter($__internal_458601632eb6128076e9f08e7a98edf349cd90c8aed1e19314c967f20a99cb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "deleteLink"));

            // line 424
            echo "    ";
            $context["entityLabel"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label", array())) : ($this->env->getExtension('translator')->trans("oro.ui.item")));
            // line 425
            echo "    ";
            $context["label"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())) : ($this->env->getExtension('translator')->trans("oro.ui.delete")));
            // line 426
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) {
                // line 427
                echo "        ";
                $context["title"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array());
                // line 428
                echo "    ";
            } else {
                // line 429
                echo "        ";
                $context["title"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "entity_label", array(), "any", true, true)) ? ($this->env->getExtension('translator')->trans("oro.ui.delete_entity", array("%entityName%" => $this->getAttribute(                // line 430
(isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "entity_label", array())))) : ($this->env->getExtension('translator')->trans("oro.ui.delete")));
                // line 433
                echo "    ";
            }
            // line 434
            echo "
    ";
            // line 435
            $context["message"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataMessage", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataMessage", array())) : ($this->env->getExtension('translator')->trans("oro.ui.delete_confirm", array("%entity_label%" => (isset($context["entityLabel"]) ? $context["entityLabel"] : $this->getContext($context, "entityLabel"))))));
            // line 436
            echo "    ";
            $context["successMessage"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "successMessage", array())) : ($this->env->getExtension('translator')->trans("oro.ui.delete_message", array("%entity_label%" => (isset($context["entityLabel"]) ? $context["entityLabel"] : $this->getContext($context, "entityLabel"))))));
            // line 437
            echo "    ";
            $context["url"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataUrl", array())) : (""));
            // line 438
            echo "    ";
            $context["linkParams"] = array("data" => array("message" =>             // line 440
(isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "success-message" =>             // line 441
(isset($context["successMessage"]) ? $context["successMessage"] : $this->getContext($context, "successMessage")), "url" =>             // line 442
(isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"))), "iCss" => "icon-trash", "aCss" => $this->getAttribute(            // line 445
(isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array()), "title" =>             // line 446
(isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "label" =>             // line 447
(isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "path" => "javascript:void(0);");
            // line 450
            echo "

    ";
            // line 452
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 453
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute((isset($context["linkParams"]) ? $context["linkParams"] : $this->getContext($context, "linkParams")), "data", array()), array("id" => $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataId", array())));
                // line 454
                echo "        ";
                $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) ? $context["linkParams"] : $this->getContext($context, "linkParams")), array("data" => (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))));
                // line 455
                echo "    ";
            }
            // line 456
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 457
                echo "        ";
                $context["data"] = twig_array_merge($this->getAttribute((isset($context["linkParams"]) ? $context["linkParams"] : $this->getContext($context, "linkParams")), "data", array()), array("redirect" => $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataRedirect", array())));
                // line 458
                echo "        ";
                $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) ? $context["linkParams"] : $this->getContext($context, "linkParams")), array("data" => (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))));
                // line 459
                echo "    ";
            }
            // line 460
            echo "    ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "data", array(), "any", true, true)) {
                // line 461
                echo "        ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "data", array()));
                foreach ($context['_seq'] as $context["dataItemName"] => $context["dataItemValue"]) {
                    // line 462
                    echo "            ";
                    $context["data"] = twig_array_merge($this->getAttribute((isset($context["linkParams"]) ? $context["linkParams"] : $this->getContext($context, "linkParams")), "data", array()), array($context["dataItemName"] => $context["dataItemValue"]));
                    // line 463
                    echo "            ";
                    $context["linkParams"] = twig_array_merge((isset($context["linkParams"]) ? $context["linkParams"] : $this->getContext($context, "linkParams")), array("data" => (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data"))));
                    // line 464
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['dataItemName'], $context['dataItemValue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 465
                echo "    ";
            }
            // line 466
            echo "    ";
            echo $this->getAttribute($this, "link", array(0 => (isset($context["linkParams"]) ? $context["linkParams"] : $this->getContext($context, "linkParams"))), "method");
            echo "
";
            
            $__internal_458601632eb6128076e9f08e7a98edf349cd90c8aed1e19314c967f20a99cb92->leave($__internal_458601632eb6128076e9f08e7a98edf349cd90c8aed1e19314c967f20a99cb92_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 487
    public function getclientLink($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7fff6ae997c35404612df45efc3db8727bc2704f42d3dab838a30112433c3ac2 = $this->env->getExtension("native_profiler");
            $__internal_7fff6ae997c35404612df45efc3db8727bc2704f42d3dab838a30112433c3ac2->enter($__internal_7fff6ae997c35404612df45efc3db8727bc2704f42d3dab838a30112433c3ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "clientLink"));

            // line 488
            echo "    <a href=\"javascript: void(0);\" class=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "class", array())) : ("")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "aCss", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "aCss", array())) : ("")), "html", null, true);
            echo "\"
        ";
            // line 489
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "id", array(), "any", true, true)) {
                // line 490
                echo "        id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "id", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 492
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataId", array(), "any", true, true)) {
                // line 493
                echo "        data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataId", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 495
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataUrl", array(), "any", true, true)) {
                // line 496
                echo "        data-url=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataUrl", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 498
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "successMessage", array(), "any", true, true)) {
                // line 499
                echo "        data-success-message=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "successMessage", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 501
            echo "        ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataRedirect", array(), "any", true, true)) {
                // line 502
                echo "        data-redirect=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataRedirect", array()), "html", null, true);
                echo "\"
        ";
            }
            // line 504
            echo "        title=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "title", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "title", array())) : ((($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())) : ("")))), "html", null, true);
            echo "\"
        ";
            // line 505
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "visible", array(), "any", true, true) &&  !$this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "visible", array()))) {
                // line 506
                echo "        style=\"display: none\"
        ";
            }
            // line 508
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "widget", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "widget", array())))) {
                // line 509
                echo "            ";
                $context["options"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "widget", array());
                // line 510
                echo "            ";
                if ( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "createOnEvent", array(), "any", true, true)) {
                    // line 511
                    echo "                ";
                    $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("createOnEvent" => (($this->getAttribute(                    // line 512
(isset($context["options"]) ? $context["options"] : null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "event", array()), "click")) : ("click"))));
                    // line 514
                    echo "            ";
                }
                // line 515
                echo "            ";
                echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "method");
                echo "
        ";
            }
            // line 517
            echo "        ";
            if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "dataAttributes", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataAttributes", array())))) {
                // line 518
                echo "            ";
                echo $this->getAttribute($this, "renderAttributes", array(0 => $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "dataAttributes", array())), "method");
                echo "
        ";
            }
            // line 520
            echo "    >";
            // line 521
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "iCss", array(), "any", true, true)) {
                // line 522
                echo "<i class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "iCss", array()), "html", null, true);
                echo " hide-text\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())) : ("")), "html", null, true);
                echo "</i>";
            }
            // line 524
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "label", array(), "any", true, true)) ? ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array())) : ("")), "html", null, true);
            // line 525
            echo "</a>
";
            
            $__internal_7fff6ae997c35404612df45efc3db8727bc2704f42d3dab838a30112433c3ac2->leave($__internal_7fff6ae997c35404612df45efc3db8727bc2704f42d3dab838a30112433c3ac2_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 537
    public function getrenderPageComponentAttributes($__pageComponent__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pageComponent" => $__pageComponent__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_53762a712bd3dff13dd79b94d4f59342fd355396fb92db60476e8eae2e34581a = $this->env->getExtension("native_profiler");
            $__internal_53762a712bd3dff13dd79b94d4f59342fd355396fb92db60476e8eae2e34581a->enter($__internal_53762a712bd3dff13dd79b94d4f59342fd355396fb92db60476e8eae2e34581a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderPageComponentAttributes"));

            // line 538
            echo "    data-page-component-module=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : $this->getContext($context, "pageComponent")), "module", array()), "html", null, true);
            echo "\"
    ";
            // line 539
            if ($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "options", array(), "any", true, true)) {
                // line 540
                echo "        data-page-component-options=\"";
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : $this->getContext($context, "pageComponent")), "options", array())), "html", null, true);
                echo "\"
    ";
            }
            // line 542
            echo "    ";
            if ($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "name", array(), "any", true, true)) {
                // line 543
                echo "        data-page-component-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : $this->getContext($context, "pageComponent")), "name", array()), "html", null, true);
                echo "\"
    ";
            }
            // line 545
            echo "    ";
            if ($this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : null), "layout", array(), "any", true, true)) {
                // line 546
                echo "        data-layout=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pageComponent"]) ? $context["pageComponent"] : $this->getContext($context, "pageComponent")), "layout", array()), "html", null, true);
                echo "\"
    ";
            }
            
            $__internal_53762a712bd3dff13dd79b94d4f59342fd355396fb92db60476e8eae2e34581a->leave($__internal_53762a712bd3dff13dd79b94d4f59342fd355396fb92db60476e8eae2e34581a_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 555
    public function getrenderWidgetAttributes($__options__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e2c389154fc7602c68cf12c06aeb671e87aad9c3a9976c02ecb515ad262ee794 = $this->env->getExtension("native_profiler");
            $__internal_e2c389154fc7602c68cf12c06aeb671e87aad9c3a9976c02ecb515ad262ee794->enter($__internal_e2c389154fc7602c68cf12c06aeb671e87aad9c3a9976c02ecb515ad262ee794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderWidgetAttributes"));

            // line 556
            echo "    ";
            $context["pageComponent"] = array("module" => "oroui/js/app/components/widget-component", "options" =>             // line 558
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
            // line 560
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "options", array(), "any", false, true), "pageComponentName", array(), "any", true, true)) {
                // line 561
                echo "        ";
                $context["pageComponent"] = twig_array_merge((isset($context["pageComponent"]) ? $context["pageComponent"] : $this->getContext($context, "pageComponent")), array("name" => $this->getAttribute($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "options", array()), "pageComponentName", array())));
                // line 562
                echo "    ";
            }
            // line 563
            echo "    ";
            echo $this->getAttribute($this, "renderPageComponentAttributes", array(0 => (isset($context["pageComponent"]) ? $context["pageComponent"] : $this->getContext($context, "pageComponent"))), "method");
            echo "
";
            
            $__internal_e2c389154fc7602c68cf12c06aeb671e87aad9c3a9976c02ecb515ad262ee794->leave($__internal_e2c389154fc7602c68cf12c06aeb671e87aad9c3a9976c02ecb515ad262ee794_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 569
    public function getrenderWidgetDataAttributes($__options__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_2576b1d864288fa890657ac8836efab497795a4ee367735d44f26aa451848bf1 = $this->env->getExtension("native_profiler");
            $__internal_2576b1d864288fa890657ac8836efab497795a4ee367735d44f26aa451848bf1->enter($__internal_2576b1d864288fa890657ac8836efab497795a4ee367735d44f26aa451848bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderWidgetDataAttributes"));

            // line 570
            echo "    ";
            if ( !$this->getAttribute((isset($context["options"]) ? $context["options"] : null), "createOnEvent", array(), "any", true, true)) {
                // line 571
                echo "        ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("createOnEvent" => (($this->getAttribute(                // line 572
(isset($context["options"]) ? $context["options"] : null), "event", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "event", array()), "click")) : ("click"))));
                // line 574
                echo "    ";
            }
            // line 575
            echo "    ";
            echo $this->getAttribute($this, "renderWidgetAttributes", array(0 => (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options"))), "method");
            echo "
";
            
            $__internal_2576b1d864288fa890657ac8836efab497795a4ee367735d44f26aa451848bf1->leave($__internal_2576b1d864288fa890657ac8836efab497795a4ee367735d44f26aa451848bf1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 578
    public function getrenderAttributes($__options__ = null, $__prefix__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "prefix" => $__prefix__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_58af9d8c7a4ff34ead8d0e3d46711b2ec09285d653959f381b1e514fc5e22116 = $this->env->getExtension("native_profiler");
            $__internal_58af9d8c7a4ff34ead8d0e3d46711b2ec09285d653959f381b1e514fc5e22116->enter($__internal_58af9d8c7a4ff34ead8d0e3d46711b2ec09285d653959f381b1e514fc5e22116_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderAttributes"));

            // line 579
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 580
                echo "        ";
                if (twig_test_iterable($context["value"])) {
                    // line 581
                    echo "            ";
                    $context["value"] = twig_jsonencode_filter($context["value"], twig_constant("JSON_FORCE_OBJECT"));
                    // line 582
                    echo "        ";
                }
                // line 583
                echo "        data-";
                if ( !twig_test_empty((isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")))) {
                    echo twig_escape_filter($this->env, (isset($context["prefix"]) ? $context["prefix"] : $this->getContext($context, "prefix")), "html", null, true);
                    echo "-";
                }
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_58af9d8c7a4ff34ead8d0e3d46711b2ec09285d653959f381b1e514fc5e22116->leave($__internal_58af9d8c7a4ff34ead8d0e3d46711b2ec09285d653959f381b1e514fc5e22116_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 603
    public function getclientButton($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_dec4a37ac88145b4790ff8150dea3be9a5a5a6f31e88c3e82d77c6136329c34e = $this->env->getExtension("native_profiler");
            $__internal_dec4a37ac88145b4790ff8150dea3be9a5a5a6f31e88c3e82d77c6136329c34e->enter($__internal_dec4a37ac88145b4790ff8150dea3be9a5a5a6f31e88c3e82d77c6136329c34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "clientButton"));

            // line 604
            echo "    <div class=\"pull-left btn-group icons-holder\">
        ";
            // line 605
            echo $this->getAttribute($this, "clientLink", array(0 => twig_array_merge((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), array("class" => "btn icons-holder-text"))), "method");
            echo "
    </div>
";
            
            $__internal_dec4a37ac88145b4790ff8150dea3be9a5a5a6f31e88c3e82d77c6136329c34e->leave($__internal_dec4a37ac88145b4790ff8150dea3be9a5a5a6f31e88c3e82d77c6136329c34e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 625
    public function getdropdownClientItem($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_24c9543b72cbc229e3cbf7e2370b165f2369f96b39e2b8b2e4d1a7f2e1105b85 = $this->env->getExtension("native_profiler");
            $__internal_24c9543b72cbc229e3cbf7e2370b165f2369f96b39e2b8b2e4d1a7f2e1105b85->enter($__internal_24c9543b72cbc229e3cbf7e2370b165f2369f96b39e2b8b2e4d1a7f2e1105b85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dropdownClientItem"));

            // line 626
            echo "    <li>";
            echo $this->getAttribute($this, "clientLink", array(0 => (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters"))), "method");
            echo "</li>
";
            
            $__internal_24c9543b72cbc229e3cbf7e2370b165f2369f96b39e2b8b2e4d1a7f2e1105b85->leave($__internal_24c9543b72cbc229e3cbf7e2370b165f2369f96b39e2b8b2e4d1a7f2e1105b85_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 638
    public function getbuttonType($__parameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "parameters" => $__parameters__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e1017226d39def89516caf9132a61a7cc0c1b8bb6f4013cfa377a4153c824419 = $this->env->getExtension("native_profiler");
            $__internal_e1017226d39def89516caf9132a61a7cc0c1b8bb6f4013cfa377a4153c824419->enter($__internal_e1017226d39def89516caf9132a61a7cc0c1b8bb6f4013cfa377a4153c824419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buttonType"));

            // line 639
            echo "    <div class=\"btn-group\">
        <button type=\"";
            // line 640
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "type", array()), "html", null, true);
            echo "\" class=\"btn ";
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "class", array(), "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "class", array()), "html", null, true);
            }
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo " action-button";
            }
            echo "\"
                ";
            // line 641
            if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "action", array(), "any", true, true)) {
                echo "data-action=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "action", array()), "html", null, true);
                echo "\"";
            }
            echo ">
            ";
            // line 642
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "label", array()), "html", null, true);
            echo "
        </button>
    </div>
";
            
            $__internal_e1017226d39def89516caf9132a61a7cc0c1b8bb6f4013cfa377a4153c824419->leave($__internal_e1017226d39def89516caf9132a61a7cc0c1b8bb6f4013cfa377a4153c824419_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 647
    public function getsaveAndCloseButton($__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_b080f6bbf5cd9c166c611b9a0be27670009bbdc2b1c3e5fbfb31109864c70e14 = $this->env->getExtension("native_profiler");
            $__internal_b080f6bbf5cd9c166c611b9a0be27670009bbdc2b1c3e5fbfb31109864c70e14->enter($__internal_b080f6bbf5cd9c166c611b9a0be27670009bbdc2b1c3e5fbfb31109864c70e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "saveAndCloseButton"));

            // line 648
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 649
                echo "        ";
                $context["label"] = $this->env->getExtension('translator')->trans("Save and Close");
                // line 650
                echo "    ";
            }
            // line 651
            echo "    ";
            echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "submit", "class" => "btn-success", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))), "method");
            echo "
";
            
            $__internal_b080f6bbf5cd9c166c611b9a0be27670009bbdc2b1c3e5fbfb31109864c70e14->leave($__internal_b080f6bbf5cd9c166c611b9a0be27670009bbdc2b1c3e5fbfb31109864c70e14_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 654
    public function getsaveAndStayButton($__label__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_25c3901d90f34d85526b520a200bc786aef7082ac404321d0e5b04e6599764fe = $this->env->getExtension("native_profiler");
            $__internal_25c3901d90f34d85526b520a200bc786aef7082ac404321d0e5b04e6599764fe->enter($__internal_25c3901d90f34d85526b520a200bc786aef7082ac404321d0e5b04e6599764fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "saveAndStayButton"));

            // line 655
            echo "    ";
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 656
                echo "        ";
                $context["label"] = $this->env->getExtension('translator')->trans("Save");
                // line 657
                echo "    ";
            }
            // line 658
            echo "    ";
            echo $this->getAttribute($this, "buttonType", array(0 => array("type" => "button", "class" => "btn-success main-group", "label" => (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "action" => "save_and_stay")), "method");
            echo "
";
            
            $__internal_25c3901d90f34d85526b520a200bc786aef7082ac404321d0e5b04e6599764fe->leave($__internal_25c3901d90f34d85526b520a200bc786aef7082ac404321d0e5b04e6599764fe_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 664
    public function getbuttonSeparator()
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => func_num_args() > 0 ? array_slice(func_get_args(), 0) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6c129910fbf191bcc679e37823e720edb21e6c3c31165c36649bc5f7dc59e534 = $this->env->getExtension("native_profiler");
            $__internal_6c129910fbf191bcc679e37823e720edb21e6c3c31165c36649bc5f7dc59e534->enter($__internal_6c129910fbf191bcc679e37823e720edb21e6c3c31165c36649bc5f7dc59e534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "buttonSeparator"));

            // line 665
            echo "    <div class=\"pull-left\">
        <div class=\"separator-btn\"></div>
    </div>
";
            
            $__internal_6c129910fbf191bcc679e37823e720edb21e6c3c31165c36649bc5f7dc59e534->leave($__internal_6c129910fbf191bcc679e37823e720edb21e6c3c31165c36649bc5f7dc59e534_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 679
    public function getscrollSubblock($__title__ = null, $__data__ = null, $__isForm__ = null, $__useSpan__ = null, $__spanClass__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "data" => $__data__,
            "isForm" => $__isForm__,
            "useSpan" => $__useSpan__,
            "spanClass" => $__spanClass__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cd94a8574946407ba55d5314b9c802792ab3a1f69c001b74c26c30a142fdc3ac = $this->env->getExtension("native_profiler");
            $__internal_cd94a8574946407ba55d5314b9c802792ab3a1f69c001b74c26c30a142fdc3ac->enter($__internal_cd94a8574946407ba55d5314b9c802792ab3a1f69c001b74c26c30a142fdc3ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "scrollSubblock"));

            // line 680
            echo "    ";
            $context["spanClass"] = ((array_key_exists("spanClass", $context)) ? (_twig_default_filter((isset($context["spanClass"]) ? $context["spanClass"] : $this->getContext($context, "spanClass")), "responsive-cell")) : ("responsive-cell"));
            // line 681
            echo "    ";
            // line 689
            echo "    <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["spanClass"]) ? $context["spanClass"] : $this->getContext($context, "spanClass")), "html", null, true);
            echo "\">
    ";
            // line 690
            if (twig_length_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                echo "<h5 class=\"user-fieldset\"><span>";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "</span></h5>";
            }
            // line 691
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 692
                echo "        ";
                echo $context["dataBlock"];
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 694
            echo "    </div>
    ";
            
            $__internal_cd94a8574946407ba55d5314b9c802792ab3a1f69c001b74c26c30a142fdc3ac->leave($__internal_cd94a8574946407ba55d5314b9c802792ab3a1f69c001b74c26c30a142fdc3ac_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 714
    public function getscrollBlock($__blockId__ = null, $__title__ = null, $__subblocks__ = null, $__isForm__ = null, $__contentAttributes__ = null, $__useSubBlockDivider__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "blockId" => $__blockId__,
            "title" => $__title__,
            "subblocks" => $__subblocks__,
            "isForm" => $__isForm__,
            "contentAttributes" => $__contentAttributes__,
            "useSubBlockDivider" => $__useSubBlockDivider__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cd7485ba851c64e41a39aa92505de5e32e8f42951bef4ec633cd9e42112c7409 = $this->env->getExtension("native_profiler");
            $__internal_cd7485ba851c64e41a39aa92505de5e32e8f42951bef4ec633cd9e42112c7409->enter($__internal_cd7485ba851c64e41a39aa92505de5e32e8f42951bef4ec633cd9e42112c7409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "scrollBlock"));

            // line 715
            echo "    ";
            $context["cols"] = twig_length_filter($this->env, (isset($context["subblocks"]) ? $context["subblocks"] : $this->getContext($context, "subblocks")));
            // line 716
            echo "    <div class=\"responsive-section\">
        <h4 class=\"scrollspy-title\">";
            // line 717
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h4>
        <div id=\"";
            // line 718
            echo twig_escape_filter($this->env, (isset($context["blockId"]) ? $context["blockId"] : $this->getContext($context, "blockId")), "html", null, true);
            echo "\" class=\"scrollspy-nav-target\"></div>
        <div class=\"row-fluid";
            // line 719
            if (((array_key_exists("contentAttributes", $context) && $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : null), "class", array(), "any", true, true)) && twig_length_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), "class", array())))) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), "class", array()), "html", null, true);
            }
            if ((((isset($context["cols"]) ? $context["cols"] : $this->getContext($context, "cols")) > 1) && ( !array_key_exists("useSubBlockDivider", $context) || ((isset($context["useSubBlockDivider"]) ? $context["useSubBlockDivider"] : $this->getContext($context, "useSubBlockDivider")) == true)))) {
                echo " row-fluid-divider";
            }
            echo "\" ";
            echo $this->getAttribute($this, "attributes", array(0 => (isset($context["contentAttributes"]) ? $context["contentAttributes"] : $this->getContext($context, "contentAttributes")), 1 => array(0 => "class")), "method");
            echo ">
            ";
            // line 720
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")) == true))) {
                // line 721
                echo "                <fieldset class=\"form-horizontal\">
            ";
            } else {
                // line 723
                echo "                <div class=\"form-horizontal\">
            ";
            }
            // line 725
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subblocks"]) ? $context["subblocks"] : $this->getContext($context, "subblocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                // line 726
                echo "                    ";
                echo $this->getAttribute($this, "scrollSubblock", array(0 => ((($this->getAttribute($context["subblock"], "title", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute($context["subblock"], "title", array())))) ? ($this->getAttribute($context["subblock"], "title", array())) : (null)), 1 => $this->getAttribute($context["subblock"], "data", array()), 2 => (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")), 3 => (($this->getAttribute($context["subblock"], "useSpan", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "useSpan", array())) : (true)), 4 => (($this->getAttribute($context["subblock"], "spanClass", array(), "any", true, true)) ? ($this->getAttribute($context["subblock"], "spanClass", array())) : (""))), "method");
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 728
            echo "            ";
            if ((array_key_exists("isForm", $context) && ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")) == true))) {
                // line 729
                echo "                </fieldset>
            ";
            } else {
                // line 731
                echo "                </div>
            ";
            }
            // line 733
            echo "        </div>
    </div>
";
            
            $__internal_cd7485ba851c64e41a39aa92505de5e32e8f42951bef4ec633cd9e42112c7409->leave($__internal_cd7485ba851c64e41a39aa92505de5e32e8f42951bef4ec633cd9e42112c7409_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 761
    public function getscrollData($__dataTarget__ = null, $__data__ = null, $__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "dataTarget" => $__dataTarget__,
            "data" => $__data__,
            "form" => $__form__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_758fffac1755e82bd5e79754ff9924293aef50d4af1f5b5790fb44ba4ba6773b = $this->env->getExtension("native_profiler");
            $__internal_758fffac1755e82bd5e79754ff9924293aef50d4af1f5b5790fb44ba4ba6773b->enter($__internal_758fffac1755e82bd5e79754ff9924293aef50d4af1f5b5790fb44ba4ba6773b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "scrollData"));

            // line 762
            echo "    ";
            $context["data"] = $this->env->getExtension('oro_ui')->scrollDataBefore($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : $this->getContext($context, "dataTarget")), (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            // line 763
            echo "
    ";
            // line 764
            if ((array_key_exists("form", $context) && (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))) {
                // line 765
                echo "        ";
                $context["isForm"] = true;
                // line 766
                echo "    ";
            } else {
                // line 767
                echo "        ";
                $context["isForm"] = false;
                // line 768
                echo "    ";
            }
            // line 769
            echo "
    ";
            // line 770
            $context["dataBlocks"] = $this->env->getExtension('oro_sort_by')->sortBy($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dataBlocks", array()));
            // line 771
            echo "
    <div id=\"";
            // line 772
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" class=\"navbar navbar-static scrollspy-nav\">
        <div class=\"navbar-inner\">
            <div class=\"container-fluid\" style=\"width: auto;\">
                <ul class=\"nav\">
                    ";
            // line 776
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["navElement"]) {
                // line 777
                echo "                        <li ";
                if ($this->getAttribute($context["navElement"], "class", array(), "any", true, true)) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "class", array()), "html", null, true);
                    echo "\"";
                }
                echo "><a href=\"#scroll-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["navElement"], "title", array()), "html", null, true);
                echo "</a></li>
                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navElement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 779
            echo "                </ul>
            </div>
        </div>
    </div>
    <div class=\"clearfix\">
        ";
            // line 784
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array())))) {
                // line 785
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 788
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 792
            echo "        <div data-spy=\"scroll\" data-target=\"#";
            echo twig_escape_filter($this->env, (isset($context["dataTarget"]) ? $context["dataTarget"] : $this->getContext($context, "dataTarget")), "html", null, true);
            echo "\" data-offset=\"1\" class=\"scrollspy container-fluid scrollable-container";
            if ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm"))) {
                echo " form-container";
            }
            echo "\">
            ";
            // line 793
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 794
                echo "                ";
                echo $this->getAttribute($this, "scrollBlock", array(0 => ("scroll-" . $this->getAttribute($context["loop"], "index", array())), 1 => $this->getAttribute($context["scrollBlock"], "title", array()), 2 => $this->getAttribute($context["scrollBlock"], "subblocks", array()), 3 => (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")), 4 => (($this->getAttribute($context["scrollBlock"], "content_attr", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "content_attr", array())) : (null)), 5 => (($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array(), "any", true, true)) ? ($this->getAttribute($context["scrollBlock"], "useSubBlockDivider", array())) : (true))), "method");
                echo "
            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 796
            echo "            ";
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true) || (isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm")))) {
                // line 797
                echo "                <div class=\"hide\">
                    ";
                // line 798
                if ($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "hiddenData", array(), "any", true, true)) {
                    // line 799
                    echo "                        ";
                    echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "hiddenData", array());
                    echo "
                    ";
                }
                // line 801
                echo "                    ";
                if ((isset($context["isForm"]) ? $context["isForm"] : $this->getContext($context, "isForm"))) {
                    // line 802
                    echo "                        ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
                    echo "
                    ";
                }
                // line 804
                echo "                </div>
            ";
            }
            // line 806
            echo "        </div>
    </div>
";
            
            $__internal_758fffac1755e82bd5e79754ff9924293aef50d4af1f5b5790fb44ba4ba6773b->leave($__internal_758fffac1755e82bd5e79754ff9924293aef50d4af1f5b5790fb44ba4ba6773b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 817
    public function getcollectionField($__field__ = null, $__label__ = null, $__buttonCaption__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "field" => $__field__,
            "label" => $__label__,
            "buttonCaption" => $__buttonCaption__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6aee9d5c581cc65d2babe67f5b05c42519daa2d81af24e5cdba2f3ea5ce34136 = $this->env->getExtension("native_profiler");
            $__internal_6aee9d5c581cc65d2babe67f5b05c42519daa2d81af24e5cdba2f3ea5ce34136->enter($__internal_6aee9d5c581cc65d2babe67f5b05c42519daa2d81af24e5cdba2f3ea5ce34136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "collectionField"));

            // line 818
            echo "    <div class=\"control-group\">
        <label class=\"control-label\">";
            // line 819
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
            echo "</label>
        <div class=\"controls\">
            <div class=\"row-oro\">
                <div class=\"oro-item-collection collection-fields-list\" data-prototype=\"";
            // line 822
            echo twig_escape_filter($this->env, $this->getAttribute($this, "collection_prototype", array(0 => (isset($context["field"]) ? $context["field"] : $this->getContext($context, "field"))), "method"));
            echo "\">
                    ";
            // line 823
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["emailField"]) {
                // line 824
                echo "                        ";
                echo $this->getAttribute($this, "collection_prototype", array(0 => $context["emailField"]), "method");
                echo "
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['emailField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 826
            echo "                </div>
                <a class=\"btn add-list-item\" href=\"javascript: void(0);\">";
            // line 827
            echo twig_escape_filter($this->env, (isset($context["buttonCaption"]) ? $context["buttonCaption"] : $this->getContext($context, "buttonCaption")), "html", null, true);
            echo "</a>
            </div>
        </div>
    </div>
";
            
            $__internal_6aee9d5c581cc65d2babe67f5b05c42519daa2d81af24e5cdba2f3ea5ce34136->leave($__internal_6aee9d5c581cc65d2babe67f5b05c42519daa2d81af24e5cdba2f3ea5ce34136_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 839
    public function getattributes($__attr__ = null, $__excludes__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "attr" => $__attr__,
            "excludes" => $__excludes__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_7114023db32851c328539f2c05101b933a34bdbe04efdaa619af8c42f34d613c = $this->env->getExtension("native_profiler");
            $__internal_7114023db32851c328539f2c05101b933a34bdbe04efdaa619af8c42f34d613c->enter($__internal_7114023db32851c328539f2c05101b933a34bdbe04efdaa619af8c42f34d613c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "attributes"));

            // line 840
            echo "    ";
            ob_start();
            // line 841
            echo "        ";
            $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array())) : (array()));
            // line 842
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                if (( !array_key_exists("excludes", $context) ||  !$this->getAttribute((isset($context["excludes"]) ? $context["excludes"] : null), $context["attrname"], array(), "array", true, true))) {
                    if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                        echo "\" ";
                    } else {
                        echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                        echo "\" ";
                    }
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 843
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_7114023db32851c328539f2c05101b933a34bdbe04efdaa619af8c42f34d613c->leave($__internal_7114023db32851c328539f2c05101b933a34bdbe04efdaa619af8c42f34d613c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 852
    public function getentityOwnerLink($__entity__ = null, $__renderLabel__ = true)
    {
        $context = $this->env->mergeGlobals(array(
            "entity" => $__entity__,
            "renderLabel" => $__renderLabel__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e71b4c851dc0e90807160f3b5cce9ef96925a62bb3436ec9b1dac1ca6f0db905 = $this->env->getExtension("native_profiler");
            $__internal_e71b4c851dc0e90807160f3b5cce9ef96925a62bb3436ec9b1dac1ca6f0db905->enter($__internal_e71b4c851dc0e90807160f3b5cce9ef96925a62bb3436ec9b1dac1ca6f0db905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "entityOwnerLink"));

            // line 853
            if ((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) {
                // line 854
                echo "        ";
                $context["ownerType"] = $this->env->getExtension('oro_owner_type')->getOwnerType((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
                // line 855
                if ((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType"))) {
                    // line 856
                    echo "            ";
                    $context["owner"] = $this->env->getExtension('oro_owner_type')->getEntityOwner((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")));
                    // line 857
                    echo "            ";
                    if ((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner"))) {
                        // line 858
                        echo "                ";
                        if (((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType")) == "USER")) {
                            // line 859
                            echo "                    ";
                            $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_user_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "id", array())));
                            // line 860
                            echo "                    ";
                            $context["ownerName"] = $this->env->getExtension('oro_entity')->getEntityName((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")));
                            // line 861
                            echo "                ";
                        } elseif (((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType")) == "BUSINESS_UNIT")) {
                            // line 862
                            echo "                    ";
                            $context["ownerPath"] = $this->env->getExtension('routing')->getPath("oro_business_unit_view", array("id" => $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array()), "id", array())));
                            // line 863
                            echo "                    ";
                            $context["ownerName"] = $this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "name", array());
                            // line 864
                            echo "                ";
                        } elseif (((isset($context["ownerType"]) ? $context["ownerType"] : $this->getContext($context, "ownerType")) == "ORGANIZATION")) {
                            // line 865
                            echo "                    ";
                            $context["ownerName"] = $this->getAttribute((isset($context["owner"]) ? $context["owner"] : $this->getContext($context, "owner")), "name", array());
                            // line 866
                            echo "                ";
                        }
                        // line 867
                        echo "                ";
                        if (array_key_exists("ownerName", $context)) {
                            // line 868
                            echo "                    ";
                            if ((isset($context["renderLabel"]) ? $context["renderLabel"] : $this->getContext($context, "renderLabel"))) {
                                // line 869
                                echo "                        ";
                                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->env->getExtension('oro_entity_config')->getFieldConfigValue($this->env->getExtension('oro_entity')->getClassName((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))), "owner", "label")), "html", null, true);
                                echo ":
                    ";
                            }
                            // line 871
                            echo "                    ";
                            if ((array_key_exists("ownerPath", $context) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("VIEW", $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "owner", array())))) {
                                // line 872
                                echo "                        <a href=\"";
                                echo twig_escape_filter($this->env, (isset($context["ownerPath"]) ? $context["ownerPath"] : $this->getContext($context, "ownerPath")), "html", null, true);
                                echo "\">";
                                echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
                                echo "</a>
                    ";
                            } else {
                                // line 874
                                echo "                        ";
                                echo twig_escape_filter($this->env, (isset($context["ownerName"]) ? $context["ownerName"] : $this->getContext($context, "ownerName")), "html", null, true);
                                echo "
                    ";
                            }
                            // line 876
                            echo "                ";
                        }
                        // line 877
                        echo "            ";
                    }
                    // line 878
                    echo "        ";
                }
            }
            
            $__internal_e71b4c851dc0e90807160f3b5cce9ef96925a62bb3436ec9b1dac1ca6f0db905->leave($__internal_e71b4c851dc0e90807160f3b5cce9ef96925a62bb3436ec9b1dac1ca6f0db905_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 882
    public function getrenderUrl($__url__ = null, $__title__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "url" => $__url__,
            "title" => $__title__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_342f1eeadadf111c7453a54aad087907cc1d2cffab64209ba9f95d1ba98733fc = $this->env->getExtension("native_profiler");
            $__internal_342f1eeadadf111c7453a54aad087907cc1d2cffab64209ba9f95d1ba98733fc->enter($__internal_342f1eeadadf111c7453a54aad087907cc1d2cffab64209ba9f95d1ba98733fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderUrl"));

            // line 883
            ob_start();
            // line 884
            echo "        ";
            if (twig_test_empty((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                // line 885
                echo "            ";
                $context["title"] = (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url"));
                // line 886
                echo "        ";
            }
            // line 887
            echo "        ";
            if (twig_test_empty((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) {
                // line 888
                echo "            ";
                $context["class"] = "";
                // line 889
                echo "        ";
            }
            // line 890
            echo "        ";
            if ( !twig_test_empty((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")))) {
                // line 891
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
                echo "\" class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "</a>
        ";
            }
            // line 893
            echo "    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_342f1eeadadf111c7453a54aad087907cc1d2cffab64209ba9f95d1ba98733fc->leave($__internal_342f1eeadadf111c7453a54aad087907cc1d2cffab64209ba9f95d1ba98733fc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 896
    public function getrenderPhone($__phone__ = null, $__title__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "phone" => $__phone__,
            "title" => $__title__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c951387468b3741f0d51f1e9f535cf0f200a4bff393743fa6ec3c57c2272eea1 = $this->env->getExtension("native_profiler");
            $__internal_c951387468b3741f0d51f1e9f535cf0f200a4bff393743fa6ec3c57c2272eea1->enter($__internal_c951387468b3741f0d51f1e9f535cf0f200a4bff393743fa6ec3c57c2272eea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderPhone"));

            // line 897
            if (twig_test_empty((isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))) {
                // line 898
                echo "        ";
                $context["title"] = (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone"));
                // line 899
                echo "    ";
            }
            // line 900
            echo "    ";
            if ( !twig_test_empty((isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")))) {
                // line 901
                echo "        <a href=\"tel:";
                echo twig_escape_filter($this->env, (isset($context["phone"]) ? $context["phone"] : $this->getContext($context, "phone")), "html_attr");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html_attr");
                echo "\">";
                echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
                echo "</a>
    ";
            }
            
            $__internal_c951387468b3741f0d51f1e9f535cf0f200a4bff393743fa6ec3c57c2272eea1->leave($__internal_c951387468b3741f0d51f1e9f535cf0f200a4bff393743fa6ec3c57c2272eea1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 905
    public function getgetApplicableForUnderscore($__str__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "str" => $__str__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_e3a2c229f86ff4374d277722e7759859eb2f289a111249e2842e1afbb2a81b0e = $this->env->getExtension("native_profiler");
            $__internal_e3a2c229f86ff4374d277722e7759859eb2f289a111249e2842e1afbb2a81b0e->enter($__internal_e3a2c229f86ff4374d277722e7759859eb2f289a111249e2842e1afbb2a81b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "getApplicableForUnderscore"));

            // line 906
            echo "    ";
            echo strtr((isset($context["str"]) ? $context["str"] : $this->getContext($context, "str")), array("<script" => "<% print(\"<sc\" + \"ript\"); %>", "</script" => "<% print(\"</sc\" + \"ript\"); %>", "<%" => "<% print(\"<\" + \"%\"); %>", "%>" => "<% print(\"%\" + \">\"); %>"));
            // line 911
            echo "
";
            
            $__internal_e3a2c229f86ff4374d277722e7759859eb2f289a111249e2842e1afbb2a81b0e->leave($__internal_e3a2c229f86ff4374d277722e7759859eb2f289a111249e2842e1afbb2a81b0e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 914
    public function getrenderList($__elements__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "elements" => $__elements__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6be5bab7a8d2c0f122e906ee567b437429ae58c4ce87d5b34d49b2102a925313 = $this->env->getExtension("native_profiler");
            $__internal_6be5bab7a8d2c0f122e906ee567b437429ae58c4ce87d5b34d49b2102a925313->enter($__internal_6be5bab7a8d2c0f122e906ee567b437429ae58c4ce87d5b34d49b2102a925313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderList"));

            // line 915
            echo "<ul class=\"extra-list\">
        ";
            // line 916
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 917
                echo "            <li class=\"extra-list-element\">";
                echo twig_escape_filter($this->env, $context["element"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 919
            echo "    </ul>
";
            
            $__internal_6be5bab7a8d2c0f122e906ee567b437429ae58c4ce87d5b34d49b2102a925313->leave($__internal_6be5bab7a8d2c0f122e906ee567b437429ae58c4ce87d5b34d49b2102a925313_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroUIBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2712 => 919,  2703 => 917,  2699 => 916,  2696 => 915,  2681 => 914,  2666 => 911,  2663 => 906,  2648 => 905,  2626 => 901,  2623 => 900,  2620 => 899,  2617 => 898,  2615 => 897,  2599 => 896,  2584 => 893,  2572 => 891,  2569 => 890,  2566 => 889,  2563 => 888,  2560 => 887,  2557 => 886,  2554 => 885,  2551 => 884,  2549 => 883,  2532 => 882,  2516 => 878,  2513 => 877,  2510 => 876,  2504 => 874,  2496 => 872,  2493 => 871,  2487 => 869,  2484 => 868,  2481 => 867,  2478 => 866,  2475 => 865,  2472 => 864,  2469 => 863,  2466 => 862,  2463 => 861,  2460 => 860,  2457 => 859,  2454 => 858,  2451 => 857,  2448 => 856,  2446 => 855,  2443 => 854,  2441 => 853,  2425 => 852,  2410 => 843,  2388 => 842,  2385 => 841,  2382 => 840,  2366 => 839,  2347 => 827,  2344 => 826,  2335 => 824,  2331 => 823,  2327 => 822,  2321 => 819,  2318 => 818,  2301 => 817,  2285 => 806,  2281 => 804,  2275 => 802,  2272 => 801,  2266 => 799,  2264 => 798,  2261 => 797,  2258 => 796,  2241 => 794,  2224 => 793,  2215 => 792,  2208 => 788,  2203 => 785,  2201 => 784,  2194 => 779,  2169 => 777,  2152 => 776,  2145 => 772,  2142 => 771,  2140 => 770,  2137 => 769,  2134 => 768,  2131 => 767,  2128 => 766,  2125 => 765,  2123 => 764,  2120 => 763,  2117 => 762,  2100 => 761,  2084 => 733,  2080 => 731,  2076 => 729,  2073 => 728,  2064 => 726,  2059 => 725,  2055 => 723,  2051 => 721,  2049 => 720,  2037 => 719,  2033 => 718,  2029 => 717,  2026 => 716,  2023 => 715,  2003 => 714,  1988 => 694,  1979 => 692,  1974 => 691,  1968 => 690,  1963 => 689,  1961 => 681,  1958 => 680,  1939 => 679,  1922 => 665,  1908 => 664,  1891 => 658,  1888 => 657,  1885 => 656,  1882 => 655,  1867 => 654,  1850 => 651,  1847 => 650,  1844 => 649,  1841 => 648,  1826 => 647,  1808 => 642,  1800 => 641,  1789 => 640,  1786 => 639,  1771 => 638,  1754 => 626,  1739 => 625,  1722 => 605,  1719 => 604,  1704 => 603,  1677 => 583,  1674 => 582,  1671 => 581,  1668 => 580,  1663 => 579,  1647 => 578,  1630 => 575,  1627 => 574,  1625 => 572,  1623 => 571,  1620 => 570,  1605 => 569,  1588 => 563,  1585 => 562,  1582 => 561,  1579 => 560,  1577 => 558,  1575 => 556,  1560 => 555,  1542 => 546,  1539 => 545,  1533 => 543,  1530 => 542,  1524 => 540,  1522 => 539,  1517 => 538,  1502 => 537,  1487 => 525,  1485 => 524,  1478 => 522,  1476 => 521,  1474 => 520,  1468 => 518,  1465 => 517,  1459 => 515,  1456 => 514,  1454 => 512,  1452 => 511,  1449 => 510,  1446 => 509,  1444 => 508,  1440 => 506,  1438 => 505,  1433 => 504,  1427 => 502,  1424 => 501,  1418 => 499,  1415 => 498,  1409 => 496,  1406 => 495,  1400 => 493,  1397 => 492,  1391 => 490,  1389 => 489,  1382 => 488,  1367 => 487,  1350 => 466,  1347 => 465,  1341 => 464,  1338 => 463,  1335 => 462,  1330 => 461,  1327 => 460,  1324 => 459,  1321 => 458,  1318 => 457,  1315 => 456,  1312 => 455,  1309 => 454,  1306 => 453,  1304 => 452,  1300 => 450,  1298 => 447,  1297 => 446,  1296 => 445,  1295 => 442,  1294 => 441,  1293 => 440,  1291 => 438,  1288 => 437,  1285 => 436,  1283 => 435,  1280 => 434,  1277 => 433,  1275 => 430,  1273 => 429,  1270 => 428,  1267 => 427,  1264 => 426,  1261 => 425,  1258 => 424,  1243 => 423,  1226 => 419,  1222 => 417,  1220 => 416,  1217 => 415,  1214 => 414,  1211 => 413,  1209 => 412,  1206 => 411,  1203 => 410,  1200 => 409,  1198 => 408,  1195 => 407,  1192 => 406,  1177 => 405,  1160 => 386,  1155 => 384,  1151 => 383,  1146 => 382,  1143 => 381,  1141 => 378,  1139 => 377,  1136 => 376,  1133 => 375,  1130 => 374,  1127 => 373,  1125 => 370,  1123 => 369,  1120 => 368,  1117 => 367,  1114 => 366,  1099 => 365,  1083 => 351,  1080 => 350,  1077 => 349,  1074 => 347,  1072 => 345,  1071 => 344,  1070 => 343,  1069 => 342,  1067 => 341,  1065 => 338,  1063 => 337,  1060 => 336,  1058 => 333,  1056 => 332,  1053 => 331,  1050 => 330,  1047 => 329,  1044 => 328,  1041 => 327,  1038 => 326,  1035 => 325,  1032 => 324,  1029 => 323,  1026 => 322,  1023 => 321,  1008 => 320,  991 => 306,  988 => 305,  985 => 304,  982 => 303,  966 => 302,  949 => 293,  947 => 292,  945 => 285,  930 => 284,  912 => 277,  906 => 274,  902 => 273,  898 => 271,  896 => 268,  895 => 267,  894 => 266,  892 => 265,  889 => 264,  886 => 263,  871 => 262,  854 => 250,  839 => 249,  823 => 234,  817 => 232,  814 => 231,  811 => 230,  802 => 228,  797 => 227,  795 => 226,  791 => 225,  784 => 222,  778 => 220,  776 => 219,  772 => 217,  757 => 216,  740 => 202,  737 => 201,  722 => 200,  698 => 185,  691 => 184,  688 => 183,  677 => 181,  672 => 180,  669 => 179,  663 => 177,  661 => 176,  656 => 175,  653 => 174,  650 => 173,  647 => 172,  639 => 170,  636 => 169,  633 => 168,  630 => 167,  628 => 166,  613 => 165,  596 => 150,  593 => 149,  590 => 148,  587 => 147,  570 => 146,  554 => 136,  551 => 135,  548 => 134,  545 => 133,  542 => 132,  526 => 131,  509 => 122,  493 => 121,  476 => 112,  460 => 111,  442 => 100,  437 => 98,  434 => 97,  418 => 96,  401 => 87,  398 => 86,  395 => 85,  386 => 82,  383 => 81,  378 => 80,  376 => 79,  373 => 78,  365 => 76,  359 => 74,  357 => 73,  354 => 72,  351 => 71,  334 => 70,  315 => 58,  309 => 57,  305 => 55,  303 => 52,  302 => 51,  299 => 50,  297 => 49,  294 => 48,  292 => 45,  290 => 44,  287 => 43,  284 => 42,  281 => 41,  278 => 40,  275 => 39,  272 => 37,  269 => 36,  266 => 35,  263 => 34,  260 => 33,  257 => 32,  254 => 31,  251 => 30,  231 => 29,  213 => 24,  207 => 22,  201 => 20,  198 => 19,  190 => 17,  185 => 16,  180 => 15,  178 => 14,  174 => 13,  168 => 10,  165 => 9,  162 => 8,  159 => 7,  156 => 6,  153 => 5,  150 => 4,  147 => 3,  144 => 2,  129 => 1,  121 => 845,  118 => 832,  115 => 809,  112 => 736,  109 => 699,  106 => 669,  103 => 660,  100 => 653,  97 => 646,  94 => 628,  91 => 608,  88 => 586,  85 => 577,  82 => 549,  79 => 527,  76 => 468,  73 => 422,  70 => 389,  67 => 353,  64 => 308,  61 => 295,  58 => 280,  55 => 252,  52 => 237,  49 => 205,  46 => 188,  43 => 152,  40 => 138,  37 => 124,  34 => 114,  31 => 104,  28 => 89,  25 => 62,  22 => 28,);
    }
}
