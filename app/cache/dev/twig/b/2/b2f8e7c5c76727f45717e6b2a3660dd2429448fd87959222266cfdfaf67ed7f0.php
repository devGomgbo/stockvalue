<?php

/* OroAttachmentBundle:Form:fields.html.twig */
class __TwigTemplate_b2f8e7c5c76727f45717e6b2a3660dd2429448fd87959222266cfdfaf67ed7f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_file_widget' => array($this, 'block_oro_file_widget'),
            'oro_image_widget' => array($this, 'block_oro_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e88cc3a16336e4fe2da67225c0bd23596820fd00990ca75d4c759b1b1a71a94 = $this->env->getExtension("native_profiler");
        $__internal_5e88cc3a16336e4fe2da67225c0bd23596820fd00990ca75d4c759b1b1a71a94->enter($__internal_5e88cc3a16336e4fe2da67225c0bd23596820fd00990ca75d4c759b1b1a71a94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroAttachmentBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_file_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('oro_image_widget', $context, $blocks);
        
        $__internal_5e88cc3a16336e4fe2da67225c0bd23596820fd00990ca75d4c759b1b1a71a94->leave($__internal_5e88cc3a16336e4fe2da67225c0bd23596820fd00990ca75d4c759b1b1a71a94_prof);

    }

    // line 1
    public function block_oro_file_widget($context, array $blocks = array())
    {
        $__internal_fcf4f2cd7802f7366b5936666f375837c00584f7520d114e8ac275c17da1b94d = $this->env->getExtension("native_profiler");
        $__internal_fcf4f2cd7802f7366b5936666f375837c00584f7520d114e8ac275c17da1b94d->enter($__internal_fcf4f2cd7802f7366b5936666f375837c00584f7520d114e8ac275c17da1b94d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_file_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <div class=\"control-group\" style=\"margin-bottom: 0\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            ";
        // line 5
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors')) {
            // line 6
            echo "                <div style=\"clear:both; float:left\">
                    ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
            echo "
                </div>
            ";
        }
        // line 10
        echo "        </div>
        ";
        // line 11
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 12
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()))) {
                // line 13
                echo "                ";
                $context["parentEntity"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array());
                // line 14
                echo "                ";
                $context["fieldName"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array());
                // line 15
                echo "
                ";
                // line 16
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array(), "any", true, true)) {
                    // line 17
                    echo "                ";
                    $context["inputId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emptyFile", array()), "vars", array()), "id", array());
                    // line 18
                    echo "                ";
                    $context["buttonId"] = ((isset($context["inputId"]) ? $context["inputId"] : $this->getContext($context, "inputId")) . "btn");
                    // line 19
                    echo "                ";
                    $context["divId"] = ((isset($context["inputId"]) ? $context["inputId"] : $this->getContext($context, "inputId")) . "div");
                    // line 20
                    echo "                <div id=\"";
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : $this->getContext($context, "divId")), "html", null, true);
                    echo "\" class=\"well well-small oro_attachment_file\">
                    ";
                    // line 21
                    echo $this->env->getExtension('oro_attachment_file')->getFileView($this->env, (isset($context["parentEntity"]) ? $context["parentEntity"] : $this->getContext($context, "parentEntity")), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                    echo "
                    ";
                    // line 22
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emptyFile", array()), 'row');
                    echo "
                    <button id = \"";
                    // line 23
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : $this->getContext($context, "buttonId")), "html", null, true);
                    echo "\" class=\"btn btn-action btn-link\" type=\"button\" data-related=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emptyFile", array()), "vars", array()), "name", array()), "html", null, true);
                    echo "\"></button>
                </div>
                <script type=\"text/javascript\">
                    require(['jquery'],
                    function(\$){
                        \$(function() {
                            \$(document).on('click', '#";
                    // line 29
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : $this->getContext($context, "buttonId")), "html", null, true);
                    echo "', function() {
                                \$('#";
                    // line 30
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : $this->getContext($context, "divId")), "html", null, true);
                    echo "').hide();
                                \$('#";
                    // line 31
                    echo twig_escape_filter($this->env, (isset($context["inputId"]) ? $context["inputId"] : $this->getContext($context, "inputId")), "html", null, true);
                    echo "').val('true');
                                return false;
                            });
                        });
                    });
                </script>
                ";
                } else {
                    // line 38
                    echo "                    <div class=\"well well-small oro_attachment_file\">
                        ";
                    // line 39
                    echo $this->env->getExtension('oro_attachment_file')->getFileView($this->env, (isset($context["parentEntity"]) ? $context["parentEntity"] : $this->getContext($context, "parentEntity")), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
                    echo "
                    </div>
                ";
                }
                // line 42
                echo "            ";
            }
            // line 43
            echo "        ";
        }
        // line 44
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fcf4f2cd7802f7366b5936666f375837c00584f7520d114e8ac275c17da1b94d->leave($__internal_fcf4f2cd7802f7366b5936666f375837c00584f7520d114e8ac275c17da1b94d_prof);

    }

    // line 47
    public function block_oro_image_widget($context, array $blocks = array())
    {
        $__internal_f7e6d28dba157537458b1b40171a67aa334598ff280c26b118771a714fc2e306 = $this->env->getExtension("native_profiler");
        $__internal_f7e6d28dba157537458b1b40171a67aa334598ff280c26b118771a714fc2e306->enter($__internal_f7e6d28dba157537458b1b40171a67aa334598ff280c26b118771a714fc2e306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_image_widget"));

        // line 48
        echo "    ";
        ob_start();
        // line 49
        echo "        <div class=\"control-group\" style=\"margin-bottom: 0\">
            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
            ";
        // line 51
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors')) {
            // line 52
            echo "                <div style=\"clear:both; float:left\">
                    ";
            // line 53
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
            echo "
                </div>
            ";
        }
        // line 56
        echo "        </div>
        ";
        // line 57
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 58
            echo "            ";
            if ( !twig_test_empty($this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()))) {
                // line 59
                echo "                ";
                $context["parentEntity"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array());
                // line 60
                echo "                ";
                $context["fieldName"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "name", array());
                // line 61
                echo "
                ";
                // line 62
                if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emptyFile", array(), "any", true, true)) {
                    // line 63
                    echo "                ";
                    $context["inputId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emptyFile", array()), "vars", array()), "id", array());
                    // line 64
                    echo "                ";
                    $context["buttonId"] = ((isset($context["inputId"]) ? $context["inputId"] : $this->getContext($context, "inputId")) . "btn");
                    // line 65
                    echo "                ";
                    $context["divId"] = ((isset($context["inputId"]) ? $context["inputId"] : $this->getContext($context, "inputId")) . "div");
                    // line 66
                    echo "                <div id=\"";
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : $this->getContext($context, "divId")), "html", null, true);
                    echo "\" class=\"well well-small oro_attachment_file\">
                    <a href=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getFIleUrl((isset($context["parentEntity"]) ? $context["parentEntity"] : $this->getContext($context, "parentEntity")), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "download", true), "html", null, true);
                    echo "\" class=\"no-hash filename\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getResizedImageUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()), "html", null, true);
                    echo "\" />
                        ";
                    // line 69
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()), "html", null, true);
                    echo "
                    </a>
                    ";
                    // line 71
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emptyFile", array()), 'row');
                    echo "
                    <button id = \"";
                    // line 72
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : $this->getContext($context, "buttonId")), "html", null, true);
                    echo "\" class=\"btn btn-action btn-link delete\" type=\"button\" data-related=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "emptyFile", array()), "vars", array()), "name", array()), "html", null, true);
                    echo "\"></button>
                    <script type=\"text/javascript\">
                        require(['jquery'],
                            function(\$){
                                \$(function() {
                                    \$(document).on('click', '#";
                    // line 77
                    echo twig_escape_filter($this->env, (isset($context["buttonId"]) ? $context["buttonId"] : $this->getContext($context, "buttonId")), "html", null, true);
                    echo "', function() {
                                        \$('#";
                    // line 78
                    echo twig_escape_filter($this->env, (isset($context["divId"]) ? $context["divId"] : $this->getContext($context, "divId")), "html", null, true);
                    echo "').hide();
                                        \$('#";
                    // line 79
                    echo twig_escape_filter($this->env, (isset($context["inputId"]) ? $context["inputId"] : $this->getContext($context, "inputId")), "html", null, true);
                    echo "').val('true');
                                        return false;
                                    });
                                });
                            });
                    </script>
                </div>
                ";
                } else {
                    // line 87
                    echo "                    <div class=\"well well-small oro_attachment_file\">
                        <a href=\"";
                    // line 88
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getFIleUrl((isset($context["parentEntity"]) ? $context["parentEntity"] : $this->getContext($context, "parentEntity")), (isset($context["fieldName"]) ? $context["fieldName"] : $this->getContext($context, "fieldName")), (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "download", true), "html", null, true);
                    echo "\" class=\"no-hash filename\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()), "html", null, true);
                    echo "\">
                            <img src=\"";
                    // line 89
                    echo twig_escape_filter($this->env, $this->env->getExtension('oro_attachment_file')->getResizedImageUrl((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()), "html", null, true);
                    echo "\" />
                            ";
                    // line 90
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "originalFilename", array()), "html", null, true);
                    echo "
                        </a>
                    </div>
                ";
                }
                // line 94
                echo "            ";
            }
            // line 95
            echo "        ";
        }
        // line 96
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f7e6d28dba157537458b1b40171a67aa334598ff280c26b118771a714fc2e306->leave($__internal_f7e6d28dba157537458b1b40171a67aa334598ff280c26b118771a714fc2e306_prof);

    }

    public function getTemplateName()
    {
        return "OroAttachmentBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  294 => 96,  291 => 95,  288 => 94,  281 => 90,  275 => 89,  269 => 88,  266 => 87,  255 => 79,  251 => 78,  247 => 77,  237 => 72,  233 => 71,  228 => 69,  222 => 68,  216 => 67,  211 => 66,  208 => 65,  205 => 64,  202 => 63,  200 => 62,  197 => 61,  194 => 60,  191 => 59,  188 => 58,  186 => 57,  183 => 56,  177 => 53,  174 => 52,  172 => 51,  168 => 50,  165 => 49,  162 => 48,  156 => 47,  148 => 44,  145 => 43,  142 => 42,  136 => 39,  133 => 38,  123 => 31,  119 => 30,  115 => 29,  104 => 23,  100 => 22,  96 => 21,  91 => 20,  88 => 19,  85 => 18,  82 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  68 => 12,  66 => 11,  63 => 10,  57 => 7,  54 => 6,  52 => 5,  48 => 4,  45 => 3,  42 => 2,  36 => 1,  29 => 47,  26 => 46,  24 => 1,);
    }
}
