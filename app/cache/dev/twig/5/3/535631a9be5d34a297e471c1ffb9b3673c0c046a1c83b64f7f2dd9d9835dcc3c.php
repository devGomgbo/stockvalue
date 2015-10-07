<?php

/* GenemuFormBundle:Form:jquery_layout.html.twig */
class __TwigTemplate_535631a9be5d34a297e471c1ffb9b3673c0c046a1c83b64f7f2dd9d9835dcc3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_javascript' => array($this, 'block_form_javascript'),
            'field_javascript' => array($this, 'block_field_javascript'),
            'button_javascript' => array($this, 'block_button_javascript'),
            'genemu_captcha_javascript' => array($this, 'block_genemu_captcha_javascript'),
            'genemu_recaptcha_javascript' => array($this, 'block_genemu_recaptcha_javascript'),
            'genemu_tinymce_javascript' => array($this, 'block_genemu_tinymce_javascript'),
            'genemu_jquerydate_javascript' => array($this, 'block_genemu_jquerydate_javascript'),
            'genemu_jquerydate_javascript_prototype' => array($this, 'block_genemu_jquerydate_javascript_prototype'),
            'genemu_jqueryslider_javascript' => array($this, 'block_genemu_jqueryslider_javascript'),
            'genemu_jquerycolor_javascript' => array($this, 'block_genemu_jquerycolor_javascript'),
            'genemu_jqueryrating_javascript' => array($this, 'block_genemu_jqueryrating_javascript'),
            'genemu_jquerytokeninput_javascript' => array($this, 'block_genemu_jquerytokeninput_javascript'),
            'genemu_jqueryautocompleter_javascript' => array($this, 'block_genemu_jqueryautocompleter_javascript'),
            'genemu_jqueryautocomplete_javascript' => array($this, 'block_genemu_jqueryautocomplete_javascript'),
            'genemu_jquerychosen_javascript' => array($this, 'block_genemu_jquerychosen_javascript'),
            'genemu_jquerychosen_javascript_prototype' => array($this, 'block_genemu_jquerychosen_javascript_prototype'),
            'genemu_jquerygeolocation_javascript' => array($this, 'block_genemu_jquerygeolocation_javascript'),
            'genemu_jqueryfile_javascript' => array($this, 'block_genemu_jqueryfile_javascript'),
            'genemu_jqueryfile_javascript_prototype' => array($this, 'block_genemu_jqueryfile_javascript_prototype'),
            'genemu_jqueryimage_javascript' => array($this, 'block_genemu_jqueryimage_javascript'),
            'genemu_jqueryimage_javascript_prototype' => array($this, 'block_genemu_jqueryimage_javascript_prototype'),
            'genemu_jqueryselect2_javascript' => array($this, 'block_genemu_jqueryselect2_javascript'),
            'genemu_jqueryselect2_javascript_prototype' => array($this, 'block_genemu_jqueryselect2_javascript_prototype'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2f895a606c2f9679201a116c8dbad99669b434cddc82bfe5f14d9b3d2a4d5ab5 = $this->env->getExtension("native_profiler");
        $__internal_2f895a606c2f9679201a116c8dbad99669b434cddc82bfe5f14d9b3d2a4d5ab5->enter($__internal_2f895a606c2f9679201a116c8dbad99669b434cddc82bfe5f14d9b3d2a4d5ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GenemuFormBundle:Form:jquery_layout.html.twig"));

        // line 1
        $this->displayBlock('form_javascript', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('field_javascript', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('button_javascript', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('genemu_captcha_javascript', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('genemu_recaptcha_javascript', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('genemu_tinymce_javascript', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('genemu_jquerydate_javascript', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('genemu_jqueryslider_javascript', $context, $blocks);
        // line 149
        echo "
";
        // line 150
        $this->displayBlock('genemu_jquerycolor_javascript', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('genemu_jqueryrating_javascript', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('genemu_jquerytokeninput_javascript', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('genemu_jqueryautocompleter_javascript', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('genemu_jqueryautocomplete_javascript', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('genemu_jquerychosen_javascript', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('genemu_jquerygeolocation_javascript', $context, $blocks);
        // line 409
        echo "
";
        // line 410
        $this->displayBlock('genemu_jqueryfile_javascript', $context, $blocks);
        // line 487
        echo "
";
        // line 488
        $this->displayBlock('genemu_jqueryimage_javascript', $context, $blocks);
        // line 655
        echo "
";
        // line 656
        $this->displayBlock('genemu_jqueryselect2_javascript', $context, $blocks);
        // line 667
        echo "
";
        
        $__internal_2f895a606c2f9679201a116c8dbad99669b434cddc82bfe5f14d9b3d2a4d5ab5->leave($__internal_2f895a606c2f9679201a116c8dbad99669b434cddc82bfe5f14d9b3d2a4d5ab5_prof);

    }

    // line 1
    public function block_form_javascript($context, array $blocks = array())
    {
        $__internal_fdd7a6ff9f492ec92d462fb3436b166cf225c022ae9df88603610f4a9b86a3a0 = $this->env->getExtension("native_profiler");
        $__internal_fdd7a6ff9f492ec92d462fb3436b166cf225c022ae9df88603610f4a9b86a3a0->enter($__internal_fdd7a6ff9f492ec92d462fb3436b166cf225c022ae9df88603610f4a9b86a3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_javascript"));

        // line 2
        ob_start();
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 4
            echo "        ";
            echo $this->env->getExtension('genemu.twig.extension.form')->renderJavascript($context["child"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fdd7a6ff9f492ec92d462fb3436b166cf225c022ae9df88603610f4a9b86a3a0->leave($__internal_fdd7a6ff9f492ec92d462fb3436b166cf225c022ae9df88603610f4a9b86a3a0_prof);

    }

    // line 9
    public function block_field_javascript($context, array $blocks = array())
    {
        $__internal_4e7fec8170e690f7f5613ba8311651652ea376d79e60f0772246a193512242d4 = $this->env->getExtension("native_profiler");
        $__internal_4e7fec8170e690f7f5613ba8311651652ea376d79e60f0772246a193512242d4->enter($__internal_4e7fec8170e690f7f5613ba8311651652ea376d79e60f0772246a193512242d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_javascript"));

        echo "";
        
        $__internal_4e7fec8170e690f7f5613ba8311651652ea376d79e60f0772246a193512242d4->leave($__internal_4e7fec8170e690f7f5613ba8311651652ea376d79e60f0772246a193512242d4_prof);

    }

    // line 11
    public function block_button_javascript($context, array $blocks = array())
    {
        $__internal_f752e502d53644ab34358eb649e21506b46ed1f93ea3248b5b37ab18c00356c0 = $this->env->getExtension("native_profiler");
        $__internal_f752e502d53644ab34358eb649e21506b46ed1f93ea3248b5b37ab18c00356c0->enter($__internal_f752e502d53644ab34358eb649e21506b46ed1f93ea3248b5b37ab18c00356c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_javascript"));

        echo "";
        
        $__internal_f752e502d53644ab34358eb649e21506b46ed1f93ea3248b5b37ab18c00356c0->leave($__internal_f752e502d53644ab34358eb649e21506b46ed1f93ea3248b5b37ab18c00356c0_prof);

    }

    // line 13
    public function block_genemu_captcha_javascript($context, array $blocks = array())
    {
        $__internal_2207069ec33ab7a367d268bb9a2822c53d9c22cf7cb618450ab46a2ef9441377 = $this->env->getExtension("native_profiler");
        $__internal_2207069ec33ab7a367d268bb9a2822c53d9c22cf7cb618450ab46a2ef9441377->enter($__internal_2207069ec33ab7a367d268bb9a2822c53d9c22cf7cb618450ab46a2ef9441377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_captcha_javascript"));

        // line 14
        ob_start();
        // line 15
        echo "    <!--[if lte IE 7]>
    <script type=\"text/javascript\">
        \$(function () {
            var pathBase64 = \"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("genemu_base64");
        echo "\";

            \$(document.images).each(function(){
                var src = \$(this).attr(\"src\");
                if (/^data:.*;base64/i.test(src)) {
                    src = src.slice(5);
                    \$(this).attr(\"src\",pathBase64+\"?\"+src);
                }
            });
        });
    </script>
    <![endif]-->
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2207069ec33ab7a367d268bb9a2822c53d9c22cf7cb618450ab46a2ef9441377->leave($__internal_2207069ec33ab7a367d268bb9a2822c53d9c22cf7cb618450ab46a2ef9441377_prof);

    }

    // line 33
    public function block_genemu_recaptcha_javascript($context, array $blocks = array())
    {
        $__internal_2a13642777120abaabba1cc1f6267688fe53ce487b7382650d8800714041aec1 = $this->env->getExtension("native_profiler");
        $__internal_2a13642777120abaabba1cc1f6267688fe53ce487b7382650d8800714041aec1->enter($__internal_2a13642777120abaabba1cc1f6267688fe53ce487b7382650d8800714041aec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_recaptcha_javascript"));

        // line 34
        ob_start();
        // line 35
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("https://www.google.com/recaptcha/api/js/recaptcha_ajax.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        function genemu_recaptcha_load()
        {
            Recaptcha.create('";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div', ";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        }

        if (window.addEventListener) {
            window.addEventListener('load', genemu_recaptcha_load, false);
        } else if (window.attachEvent) {
            window.attachEvent('onload', genemu_recaptcha_load);
        } else {
            window.onload = genemu_recaptcha_load;
        }
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_2a13642777120abaabba1cc1f6267688fe53ce487b7382650d8800714041aec1->leave($__internal_2a13642777120abaabba1cc1f6267688fe53ce487b7382650d8800714041aec1_prof);

    }

    // line 53
    public function block_genemu_tinymce_javascript($context, array $blocks = array())
    {
        $__internal_7640aa6fbd1fac19de7ef5719f7e06b7f889b0005aba1064824327b70444d356 = $this->env->getExtension("native_profiler");
        $__internal_7640aa6fbd1fac19de7ef5719f7e06b7f889b0005aba1064824327b70444d356->enter($__internal_7640aa6fbd1fac19de7ef5719f7e06b7f889b0005aba1064824327b70444d356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_tinymce_javascript"));

        // line 54
        ob_start();
        // line 55
        echo "    ";
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 56
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("script_url" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(            // line 57
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script_url", array()))));
            // line 59
            echo "    ";
        } else {
            // line 60
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("mode" => "exact", "elements" =>             // line 62
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            // line 64
            echo "    ";
        }
        // line 65
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$configs = ";
        // line 68
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";";
        // line 70
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "script_url", array(), "any", true, true)) {
            // line 71
            echo "
            var \$textarea = jQuery('#";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "');
            if(\$textarea.is('[required]')) {
                \$configs.oninit = function(editor) {
                    editor.onChange.add(function(ed, l) { ed.save(); });
                };
            }
            \$textarea.tinymce(\$configs);
        ";
        } else {
            // line 80
            echo "
            tinyMCE.init(\$configs);
        ";
        }
        // line 84
        echo "});
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7640aa6fbd1fac19de7ef5719f7e06b7f889b0005aba1064824327b70444d356->leave($__internal_7640aa6fbd1fac19de7ef5719f7e06b7f889b0005aba1064824327b70444d356_prof);

    }

    // line 89
    public function block_genemu_jquerydate_javascript($context, array $blocks = array())
    {
        $__internal_9c054ef844fc727b294c5ed3a70898e44589e96d343d7940071831c4c14772a1 = $this->env->getExtension("native_profiler");
        $__internal_9c054ef844fc727b294c5ed3a70898e44589e96d343d7940071831c4c14772a1->enter($__internal_9c054ef844fc727b294c5ed3a70898e44589e96d343d7940071831c4c14772a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_javascript"));

        // line 90
        ob_start();
        // line 91
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 94
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            echo "datepicker_";
        }
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
        
        ";
        // line 96
        $this->displayBlock('genemu_jquerydate_javascript_prototype', $context, $blocks);
        // line 127
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_9c054ef844fc727b294c5ed3a70898e44589e96d343d7940071831c4c14772a1->leave($__internal_9c054ef844fc727b294c5ed3a70898e44589e96d343d7940071831c4c14772a1_prof);

    }

    // line 96
    public function block_genemu_jquerydate_javascript_prototype($context, array $blocks = array())
    {
        $__internal_5c8adc2bd212fba79fda07298203fec18c33a2a105027f83266a50b9f8d26b26 = $this->env->getExtension("native_profiler");
        $__internal_5c8adc2bd212fba79fda07298203fec18c33a2a105027f83266a50b9f8d26b26->enter($__internal_5c8adc2bd212fba79fda07298203fec18c33a2a105027f83266a50b9f8d26b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_javascript_prototype"));

        // line 97
        echo "
        ";
        // line 98
        if ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "buttonImage", array(), "any", true, true)) {
            // line 99
            echo "            ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("buttonImage" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(            // line 100
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "buttonImage", array()))));
            // line 102
            echo "        ";
        }
        // line 103
        echo "
        ";
        // line 104
        if (((isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")) == "en")) {
            // line 105
            echo "            ";
            $context["culture"] = "en-GB";
            // line 106
            echo "        ";
        }
        // line 107
        echo "
            var \$configs = \$.extend({
                minDate: new Date(";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["min_year"]) ? $context["min_year"] : $this->getContext($context, "min_year")), "html", null, true);
        echo ", 0, 1),
                maxDate: new Date(";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["max_year"]) ? $context["max_year"] : $this->getContext($context, "max_year")), "html", null, true);
        echo ", 11, 31)
            }, \$.datepicker.regional['";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["culture"]) ? $context["culture"] : $this->getContext($context, "culture")), "html", null, true);
        echo "'] ,";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 113
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) != "single_text")) {
            // line 114
            echo "            var \$year = \$('#";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$month = \$('#";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');
            var \$day = \$('#";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), "vars", array()), "id", array()), "html", null, true);
            echo "');

            \$configs.onSelect = function(date) {
                \$year.val(parseInt(date.substring(0, 4), 10));
                \$month.val(parseInt(date.substring(5, 7), 10));
                \$day.val(parseInt(date.substring(8), 10));
            }
        ";
        }
        // line 124
        echo "
            \$field.datepicker(\$configs);
        ";
        
        $__internal_5c8adc2bd212fba79fda07298203fec18c33a2a105027f83266a50b9f8d26b26->leave($__internal_5c8adc2bd212fba79fda07298203fec18c33a2a105027f83266a50b9f8d26b26_prof);

    }

    // line 132
    public function block_genemu_jqueryslider_javascript($context, array $blocks = array())
    {
        $__internal_39487312ac3109d4f804f9fbe4a28b8b241dec25e3cadedb63cad23f99b22682 = $this->env->getExtension("native_profiler");
        $__internal_39487312ac3109d4f804f9fbe4a28b8b241dec25e3cadedb63cad23f99b22682->enter($__internal_39487312ac3109d4f804f9fbe4a28b8b241dec25e3cadedb63cad23f99b22682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryslider_javascript"));

        // line 133
        ob_start();
        // line 134
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend(";
        // line 137
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                value: ";
        // line 138
        echo twig_escape_filter($this->env, (((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) ? ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) : (0)), "html", null, true);
        echo ",
                slide: function(event, ui) {
                    \$field.val(ui.value);
                }
            });

            \$('#";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider').slider(\$configs);
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_39487312ac3109d4f804f9fbe4a28b8b241dec25e3cadedb63cad23f99b22682->leave($__internal_39487312ac3109d4f804f9fbe4a28b8b241dec25e3cadedb63cad23f99b22682_prof);

    }

    // line 150
    public function block_genemu_jquerycolor_javascript($context, array $blocks = array())
    {
        $__internal_fd38e348ac17bef68a7647526e5630422de9e4465ace7670a2b8bcc2d43fbb2d = $this->env->getExtension("native_profiler");
        $__internal_fd38e348ac17bef68a7647526e5630422de9e4465ace7670a2b8bcc2d43fbb2d->enter($__internal_fd38e348ac17bef68a7647526e5630422de9e4465ace7670a2b8bcc2d43fbb2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerycolor_javascript"));

        // line 151
        ob_start();
        // line 152
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 154
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = \$.extend({
                color: '#' + \$field.val(),
                onBeforeShow: function() {
                    \$(this).ColorPickerSetColor(\$field.val());
                }
            }, ";
        // line 160
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

        ";
        // line 162
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 163
            echo "            \$picker = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color');

            \$picker.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex);

                    \$('div', \$picker).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        } else {
            // line 175
            echo "            \$field.ColorPicker(\$.extend({
                onChange: function(hsb, hex, rgb) {
                    \$field.val(hex).css({
                        backgroundColor: '#' + hex
                    });
                }
            }, \$configs));
        ";
        }
        // line 183
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fd38e348ac17bef68a7647526e5630422de9e4465ace7670a2b8bcc2d43fbb2d->leave($__internal_fd38e348ac17bef68a7647526e5630422de9e4465ace7670a2b8bcc2d43fbb2d_prof);

    }

    // line 188
    public function block_genemu_jqueryrating_javascript($context, array $blocks = array())
    {
        $__internal_a0956bfa5cc9dba45354a781ce41701e78e244b1c005d794e54a6e90bd5469e9 = $this->env->getExtension("native_profiler");
        $__internal_a0956bfa5cc9dba45354a781ce41701e78e244b1c005d794e54a6e90bd5469e9->enter($__internal_a0956bfa5cc9dba45354a781ce41701e78e244b1c005d794e54a6e90bd5469e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryrating_javascript"));

        // line 189
        ob_start();
        // line 190
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$('[name=\"";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"]').rating(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a0956bfa5cc9dba45354a781ce41701e78e244b1c005d794e54a6e90bd5469e9->leave($__internal_a0956bfa5cc9dba45354a781ce41701e78e244b1c005d794e54a6e90bd5469e9_prof);

    }

    // line 198
    public function block_genemu_jquerytokeninput_javascript($context, array $blocks = array())
    {
        $__internal_1ac0674663285b8131e1ab4fe9d31314d8cd3da11523f0d5bdcf9e2659bfc7cb = $this->env->getExtension("native_profiler");
        $__internal_1ac0674663285b8131e1ab4fe9d31314d8cd3da11523f0d5bdcf9e2659bfc7cb->enter($__internal_1ac0674663285b8131e1ab4fe9d31314d8cd3da11523f0d5bdcf9e2659bfc7cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerytokeninput_javascript"));

        // line 199
        ob_start();
        // line 200
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 202
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$tokeninput = \$('#tokeninput_";
        // line 203
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            var update_hidden_sourceinput = function(item) {
                var \$val = \$tokeninput.tokenInput('get');
            ";
        // line 207
        if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
            // line 208
            echo "                for (first in \$val) break;
                \$val = \$val[first];
            ";
        }
        // line 211
        echo "
                \$field.val(JSON.stringify(\$val));
            };

            ";
        // line 215
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 216
            echo "                ";
            if (twig_test_empty((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple")))) {
                // line 217
                echo "                    ";
                $context["prePopulate"] = (("[" . (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) . "]");
                // line 218
                echo "                ";
            } else {
                // line 219
                echo "                    ";
                $context["prePopulate"] = (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
                // line 220
                echo "                ";
            }
            // line 221
            echo "            ";
        }
        // line 222
        echo "
            var \$configs = \$.extend(";
        // line 223
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ", {
                prePopulate: ";
        // line 224
        echo (isset($context["prePopulate"]) ? $context["prePopulate"] : $this->getContext($context, "prePopulate"));
        echo ",
                onAdd: update_hidden_sourceinput,
                onDelete: update_hidden_sourceinput
            });

            \$tokeninput.tokenInput(
            ";
        // line 230
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 231
            echo "                '";
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "'
            ";
        } else {
            // line 233
            echo "                ";
            $context["sourceChoices"] = array();
            // line 234
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 235
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 236
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 237
            echo "                ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo "
            ";
        }
        // line 238
        echo ",
                \$configs
            );
        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1ac0674663285b8131e1ab4fe9d31314d8cd3da11523f0d5bdcf9e2659bfc7cb->leave($__internal_1ac0674663285b8131e1ab4fe9d31314d8cd3da11523f0d5bdcf9e2659bfc7cb_prof);

    }

    // line 246
    public function block_genemu_jqueryautocompleter_javascript($context, array $blocks = array())
    {
        $__internal_d03d822cff045abbe3058cc59dcd61d0c82f6ecded821b53cbcbb23313385939 = $this->env->getExtension("native_profiler");
        $__internal_d03d822cff045abbe3058cc59dcd61d0c82f6ecded821b53cbcbb23313385939->enter($__internal_d03d822cff045abbe3058cc59dcd61d0c82f6ecded821b53cbcbb23313385939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocompleter_javascript"));

        // line 247
        ob_start();
        // line 248
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$field = \$('#";
        // line 250
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$autocompleter = \$('#autocompleter_";
        // line 251
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = {
                focus: function(event, ui) {
                    return false;
                },
                select: function(event, ui) {
                ";
        // line 257
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 258
            echo "                    terms = this.value.split(/,\\s*/);
                    terms.pop();
                    terms.push(ui.item.label);
                    terms.push('');
                    this.value = terms.join(', ');

                    terms = \$field.val();
                    terms = !terms?[]:JSON.parse(terms);
                    terms.push(ui.item);
                ";
        } else {
            // line 268
            echo "                    this.value = ui.item.label;
                    terms = ui.item;
                ";
        }
        // line 271
        echo "                    \$field.val(JSON.stringify(terms));

                    return false;
                }
            };

            ";
        // line 277
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 278
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 279
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 284
            echo "                ";
            $context["sourceChoices"] = array();
            // line 285
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")));
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 286
                echo "                    ";
                $context["sourceChoices"] = twig_array_merge((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")), array(0 => array("value" => $this->getAttribute($context["choice"], "value", array()), "label" => $this->getAttribute($context["choice"], "label", array()))));
                // line 287
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["sourceChoices"]) ? $context["sourceChoices"] : $this->getContext($context, "sourceChoices")));
            echo ";
            ";
        }
        // line 290
        echo "
                \$autocompleter.autocomplete(\$configs);

            ";
        // line 293
        if ((isset($context["free_values"]) ? $context["free_values"] : $this->getContext($context, "free_values"))) {
            // line 294
            echo "                \$autocompleter.keyup(function(){
                    var val ={}
                    var fieldval = \$(this).val();
                    val['value'] = fieldval;
                    val['label'] = fieldval;

                    \$field.val(JSON.stringify(val));
                });
            ";
        }
        // line 303
        echo "
            ";
        // line 304
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 305
            echo "                var \$source = \$autocompleter.data('autocomplete').source;

                \$autocompleter.autocomplete('option', 'source', function(request, response) {
                    request.term = request.term.split(/,\\s*/).pop();

                    \$source(request, response);
                });
            ";
        }
        // line 313
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d03d822cff045abbe3058cc59dcd61d0c82f6ecded821b53cbcbb23313385939->leave($__internal_d03d822cff045abbe3058cc59dcd61d0c82f6ecded821b53cbcbb23313385939_prof);

    }

    // line 318
    public function block_genemu_jqueryautocomplete_javascript($context, array $blocks = array())
    {
        $__internal_71cb6d0fa374afd33e78a63d8f5f543dcbbe9e899bcdda85c412d894bc1eed9f = $this->env->getExtension("native_profiler");
        $__internal_71cb6d0fa374afd33e78a63d8f5f543dcbbe9e899bcdda85c412d894bc1eed9f->enter($__internal_71cb6d0fa374afd33e78a63d8f5f543dcbbe9e899bcdda85c412d894bc1eed9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocomplete_javascript"));

        // line 319
        ob_start();
        // line 320
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            var \$autocompleter = \$('#";
        // line 322
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');
            var \$configs = ";
        // line 323
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ";

            ";
        // line 325
        if ((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name"))) {
            // line 326
            echo "                \$configs.source = function(request, response) {
                    \$.getJSON('";
            // line 327
            echo $this->env->getExtension('routing')->getPath((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")));
            echo "', {
                        term: request.term
                    }, response);
                };
            ";
        } else {
            // line 332
            echo "                \$configs.source = ";
            echo twig_jsonencode_filter((isset($context["suggestions"]) ? $context["suggestions"] : $this->getContext($context, "suggestions")));
            echo ";
            ";
        }
        // line 334
        echo "
            \$autocompleter.autocomplete(\$configs);
            
            ";
        // line 337
        if (($this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "minLength", array(), "any", true, true) && (0 == $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "minLength", array())))) {
            // line 338
            echo "                \$autocompleter.focus(function() {
                    \$(this).autocomplete(\"search\", \"\");
                });
            ";
        }
        // line 342
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_71cb6d0fa374afd33e78a63d8f5f543dcbbe9e899bcdda85c412d894bc1eed9f->leave($__internal_71cb6d0fa374afd33e78a63d8f5f543dcbbe9e899bcdda85c412d894bc1eed9f_prof);

    }

    // line 347
    public function block_genemu_jquerychosen_javascript($context, array $blocks = array())
    {
        $__internal_c74a41b5f06dd6f7b1a51e5ecda4728edb619407912e65407d4aa5e459549150 = $this->env->getExtension("native_profiler");
        $__internal_c74a41b5f06dd6f7b1a51e5ecda4728edb619407912e65407d4aa5e459549150->enter($__internal_c74a41b5f06dd6f7b1a51e5ecda4728edb619407912e65407d4aa5e459549150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_javascript"));

        // line 348
        ob_start();
        // line 349
        echo "    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 351
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

            ";
        // line 353
        $this->displayBlock('genemu_jquerychosen_javascript_prototype', $context, $blocks);
        // line 360
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c74a41b5f06dd6f7b1a51e5ecda4728edb619407912e65407d4aa5e459549150->leave($__internal_c74a41b5f06dd6f7b1a51e5ecda4728edb619407912e65407d4aa5e459549150_prof);

    }

    // line 353
    public function block_genemu_jquerychosen_javascript_prototype($context, array $blocks = array())
    {
        $__internal_7d28145593f09906f5b0e92d85866054f59d3e4a59e7540f761b712f5b71dbe9 = $this->env->getExtension("native_profiler");
        $__internal_7d28145593f09906f5b0e92d85866054f59d3e4a59e7540f761b712f5b71dbe9->enter($__internal_7d28145593f09906f5b0e92d85866054f59d3e4a59e7540f761b712f5b71dbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_javascript_prototype"));

        // line 354
        echo "                \$field.chosen({
                    no_results_text: \"";
        // line 355
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["no_results_text"]) ? $context["no_results_text"] : $this->getContext($context, "no_results_text")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "\",
                    allow_single_deselect: ";
        // line 356
        echo (((isset($context["allow_single_deselect"]) ? $context["allow_single_deselect"] : $this->getContext($context, "allow_single_deselect"))) ? ("true") : ("false"));
        echo ",
                    disable_search_threshold: ";
        // line 357
        echo twig_escape_filter($this->env, (isset($context["disable_search_threshold"]) ? $context["disable_search_threshold"] : $this->getContext($context, "disable_search_threshold")), "html", null, true);
        echo "
                });
            ";
        
        $__internal_7d28145593f09906f5b0e92d85866054f59d3e4a59e7540f761b712f5b71dbe9->leave($__internal_7d28145593f09906f5b0e92d85866054f59d3e4a59e7540f761b712f5b71dbe9_prof);

    }

    // line 365
    public function block_genemu_jquerygeolocation_javascript($context, array $blocks = array())
    {
        $__internal_4734322ecf0eaa16cf24b0538f4c0690d874f327289f87ed361641dcdac9f4c8 = $this->env->getExtension("native_profiler");
        $__internal_4734322ecf0eaa16cf24b0538f4c0690d874f327289f87ed361641dcdac9f4c8->enter($__internal_4734322ecf0eaa16cf24b0538f4c0690d874f327289f87ed361641dcdac9f4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerygeolocation_javascript"));

        // line 366
        ob_start();
        // line 367
        echo "    ";
        // line 368
        echo "    ";
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 369
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("map" => (("#" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) . "_map")));
            // line 370
            echo "    ";
        }
        // line 371
        echo "
    ";
        // line 372
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "latitude", array(), "any", true, true)) {
            // line 373
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lat" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "latitude", array()), "vars", array()), "id", array()))));
            // line 374
            echo "    ";
        }
        // line 375
        echo "
    ";
        // line 376
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "longitude", array(), "any", true, true)) {
            // line 377
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("lng" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitude", array()), "vars", array()), "id", array()))));
            // line 378
            echo "    ";
        }
        // line 379
        echo "
    ";
        // line 380
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "locality", array(), "any", true, true)) {
            // line 381
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("locality" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "locality", array()), "vars", array()), "id", array()))));
            // line 382
            echo "    ";
        }
        // line 383
        echo "
    ";
        // line 384
        if ($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array(), "any", true, true)) {
            // line 385
            echo "        ";
            $context["elements"] = twig_array_merge((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), array("country" => ("#" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), "vars", array()), "id", array()))));
            // line 386
            echo "    ";
        }
        // line 387
        echo "
    ";
        // line 389
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))) > 0)) {
            // line 390
            echo "        ";
            $context["configs"] = twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("elements" => (isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements"))));
            // line 391
            echo "    ";
        }
        // line 392
        echo "
    <script type=\"text/javascript\">
        jQuery(document).ready(function(\$) {
            \$field = \$('#";
        // line 395
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), "vars", array()), "id", array()), "html", null, true);
        echo "');

            \$field.addresspicker(";
        // line 397
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");

            ";
        // line 399
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 400
            echo "                var gmarker = \$field.addresspicker('marker');
                gmarker.setVisible(true);

                \$field.addresspicker('updatePosition');
            ";
        }
        // line 405
        echo "        });
    </script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_4734322ecf0eaa16cf24b0538f4c0690d874f327289f87ed361641dcdac9f4c8->leave($__internal_4734322ecf0eaa16cf24b0538f4c0690d874f327289f87ed361641dcdac9f4c8_prof);

    }

    // line 410
    public function block_genemu_jqueryfile_javascript($context, array $blocks = array())
    {
        $__internal_8eb914ee3d607f03bb3062b9f212b3ad6c9294d125e97dc3b06fc6d4691c8acb = $this->env->getExtension("native_profiler");
        $__internal_8eb914ee3d607f03bb3062b9f212b3ad6c9294d125e97dc3b06fc6d4691c8acb->enter($__internal_8eb914ee3d607f03bb3062b9f212b3ad6c9294d125e97dc3b06fc6d4691c8acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_javascript"));

        // line 411
        ob_start();
        // line 412
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field = \$('#";
        // line 414
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 415
        $this->displayBlock('genemu_jqueryfile_javascript_prototype', $context, $blocks);
        // line 483
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8eb914ee3d607f03bb3062b9f212b3ad6c9294d125e97dc3b06fc6d4691c8acb->leave($__internal_8eb914ee3d607f03bb3062b9f212b3ad6c9294d125e97dc3b06fc6d4691c8acb_prof);

    }

    // line 415
    public function block_genemu_jqueryfile_javascript_prototype($context, array $blocks = array())
    {
        $__internal_508219f7aea2a0cacd4060c596cd873cdef2cea7f5cd645ca3085e246936e37b = $this->env->getExtension("native_profiler");
        $__internal_508219f7aea2a0cacd4060c596cd873cdef2cea7f5cd645ca3085e246936e37b->enter($__internal_508219f7aea2a0cacd4060c596cd873cdef2cea7f5cd645ca3085e246936e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_javascript_prototype"));

        // line 416
        echo "        var \$form = \$field.closest('form');
        var \$queue = \$('#";
        // line 417
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue');
        var \$nbQueue = 0;

        var \$configs = \$.extend(";
        // line 420
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 421
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 422
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 423
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 424
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 425
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    ";
        // line 430
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            // line 431
            echo "                        var value = \$('#";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "').val();
                        if (value != '') {
                            value += \",\";
                        }
                        value += data.file;
                    ";
        } else {
            // line 437
            echo "                        var value = data.file;
                    ";
        }
        // line 439
        echo "
                    \$('#";
        // line 440
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(value);
                    \$nbQueue--;
                } else {
                    alert('Error');
                }
            },
            onSelect: function(file) {
                \$nbQueue++;
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

    ";
        // line 454
        if (( !$this->getAttribute((isset($context["configs"]) ? $context["configs"] : null), "auto", array(), "any", true, true) || ($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "auto", array()) === false))) {
            // line 455
            echo "        \$configs.onAllComplete = function(event, data) {
            \$form.submit();
        };

        \$form.submit(function(event) {
            if (0 === \$nbQueue) {
                return \$joinFiles();
            } else {
                \$field.uploadifyUpload();
                event.preventDefault();
            }
        });
    ";
        } else {
            // line 468
            echo "        \$form.submit(function(event) {
            return \$joinFiles();
        });
    ";
        }
        // line 472
        echo "
        var \$joinFiles = function() {
            if (\$files = \$field.data('files')) {
                \$field.val(\$files.join(','));
            }

            return true;
        }

        \$field.uploadify(\$configs);
        ";
        
        $__internal_508219f7aea2a0cacd4060c596cd873cdef2cea7f5cd645ca3085e246936e37b->leave($__internal_508219f7aea2a0cacd4060c596cd873cdef2cea7f5cd645ca3085e246936e37b_prof);

    }

    // line 488
    public function block_genemu_jqueryimage_javascript($context, array $blocks = array())
    {
        $__internal_a7dc2d4c0fa38fdd905b1c7269b3686a04e1b70c451c0ed81288b94c36aae56e = $this->env->getExtension("native_profiler");
        $__internal_a7dc2d4c0fa38fdd905b1c7269b3686a04e1b70c451c0ed81288b94c36aae56e->enter($__internal_a7dc2d4c0fa38fdd905b1c7269b3686a04e1b70c451c0ed81288b94c36aae56e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_javascript"));

        // line 489
        ob_start();
        // line 490
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        var \$field   = \$('#";
        // line 492
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload');
        ";
        // line 493
        $this->displayBlock('genemu_jqueryimage_javascript_prototype', $context, $blocks);
        // line 651
        echo "    });
</script>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a7dc2d4c0fa38fdd905b1c7269b3686a04e1b70c451c0ed81288b94c36aae56e->leave($__internal_a7dc2d4c0fa38fdd905b1c7269b3686a04e1b70c451c0ed81288b94c36aae56e_prof);

    }

    // line 493
    public function block_genemu_jqueryimage_javascript_prototype($context, array $blocks = array())
    {
        $__internal_5e08d4a6b3dffe4c7b4622b56f52a920b8af219f4adcbc53b2a1a53af13b2da5 = $this->env->getExtension("native_profiler");
        $__internal_5e08d4a6b3dffe4c7b4622b56f52a920b8af219f4adcbc53b2a1a53af13b2da5->enter($__internal_5e08d4a6b3dffe4c7b4622b56f52a920b8af219f4adcbc53b2a1a53af13b2da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_javascript_prototype"));

        // line 494
        echo "        var \$form    = \$field.closest('form');
        var \$preview = \$('#";
        // line 495
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview');
        var \$options = \$('#";
        // line 496
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options');
        // Base path for apps not on DocumentRoot
        var \$basePath = '";
        // line 498
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array())), "html", null, true);
        echo "';
        \$basePath = \$basePath.substr(0, \$basePath.length - '";
        // line 499
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "folder", array()), "html", null, true);
        echo "'.length);

        var \$coords = {};
        var \$crop = null;
        var \$ratio = 1;

        var \$configs = \$.extend(";
        // line 505
        echo twig_jsonencode_filter(twig_array_merge((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), array("swf" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 506
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "swf", array())), "cancelImg" => $this->env->getExtension('asset')->getAssetUrl($this->getAttribute(        // line 507
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "cancelImg", array())), "uploader" => $this->env->getExtension('routing')->getPath($this->getAttribute(        // line 508
(isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")), "script", array())), "queueID" => (        // line 509
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_queue"))));
        // line 510
        echo ", {
            onUploadSuccess: function(file, data, response) {
                data = jQuery.parseJSON(data);

                if (data.result == '1') {
                    \$('#";
        // line 515
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                    // add if and only if path is relative
                    if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                        data.thumbnail.file = \$basePath + data.thumbnail.file;
                    }

                    createCrop({
                        image:      data.image,
                        thumbnail:  data.thumbnail
                    });
                } else {
                    alert('Error');
                }
            },
            onUploadError: function(file, errorCode, errorMsg, errorString) {
                alert('error');
            }
        });

        var createCrop = function (data) {
            if (\$crop) {
                \$crop.destroy();
            }

            // add if and only if path is relative
            if (data.thumbnail.file.search(/^[/\\\\]/) < 0) {
                data.thumbnail.file = \$basePath + data.thumbnail.file;
            }
            var \$img = new Image();

            console.log(data);
            \$(\$img).load(function() {
                ";
        // line 548
        $context["widthMax"] = (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "thumbnail", array(), "any", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "thumbnail", array()), "width", array())) : (500));
        // line 549
        echo "
                \$ratio = data.image.width > ";
        // line 550
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " ? data.image.width / ";
        echo twig_escape_filter($this->env, (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")), "html", null, true);
        echo " : 1;
                \$('.crop', \$options).hide();

                \$preview
                    .width(Math.round(data.image.width / \$ratio))
                    .height(Math.round(data.image.height / \$ratio))
                    .attr('src', this.src);

                if (!\$crop) {
                    \$options.fadeIn();
                }

                \$preview.Jcrop({
                    onSelect: checkCoords,
                    onChange: checkCoords
                }, function() {
                    \$crop = this;
                });
            }).attr('src', data.thumbnail.file);
        }

        var checkCoords = function(coords) {

            if (coords.w > 0 && coords.h > 0) {
                \$('.crop', \$options).fadeIn();

                \$coords = {
                    x: coords.x * \$ratio,
                    y: coords.y * \$ratio,
                    w: coords.w * \$ratio,
                    h: coords.h * \$ratio
                };
            } else {
                \$('.crop', \$options).fadeOut();
            }
        }

        \$('.change', \$options).click(function() {
            var \$this = \$(this);
            var \$regex = new RegExp('^\\\\b(.*?) (.*)\\\\b', 'g');
            var \$filter = \$this.attr('class').replace(\$regex, '\$1');

            var \$data = {
                filter: \$filter,
                image: \$('#";
        // line 594
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(),
                opacity: 0.5
            };

            if ('crop' === \$filter && !\$.isEmptyObject(\$coords)) {
                \$data = \$.extend(\$data, \$coords);
            }

            if (
                \$.inArray(\$filter, ";
        // line 603
        echo twig_jsonencode_filter((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        echo ") !== -1 ||
                ( 'crop' === \$filter && !\$.isEmptyObject(\$coords) )
            ) {
                \$this.addClass('loading');

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 610
        echo $this->env->getExtension('routing')->getPath("genemu_form_image");
        echo "',
                    data: \$data,
                    dataType: 'json',
                    success: function(data) {
                        if (data.result == '1') {
                            \$('#";
        // line 615
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "').val(data.file);

                            createCrop({
                                image: data.image,
                                thumbnail: \$.isEmptyObject(data.thumbnail) ? \$.extend(data.image, {
                                    file: data.file
                                }) : data.thumbnail
                            });
                        } else {
                            alert('Error');
                        }

                        \$this.removeClass('loading');
                    }
                });
            }
        });

    ";
        // line 633
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 634
            echo "        createCrop({
            thumbnail: {
                file: '";
            // line 636
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file", array())) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))), "html", null, true);
            echo "',
                width: ";
            // line 637
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width", array())) : ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")))), "html", null, true);
            echo ",
                height: ";
            // line 638
            echo twig_escape_filter($this->env, ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "height", array())) : ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")))), "html", null, true);
            echo ",
            },
            image: {
                width: ";
            // line 641
            echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
            echo ",
                height: ";
            // line 642
            echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
            echo "
            }
        });
    ";
        } else {
            // line 646
            echo "        \$options.hide();
    ";
        }
        // line 648
        echo "
        \$field.uploadify(\$configs);
        ";
        
        $__internal_5e08d4a6b3dffe4c7b4622b56f52a920b8af219f4adcbc53b2a1a53af13b2da5->leave($__internal_5e08d4a6b3dffe4c7b4622b56f52a920b8af219f4adcbc53b2a1a53af13b2da5_prof);

    }

    // line 656
    public function block_genemu_jqueryselect2_javascript($context, array $blocks = array())
    {
        $__internal_06a9907a4ebdf5fc899bb0639b6a4c11449996d9943d63dcbc7095d917ba3850 = $this->env->getExtension("native_profiler");
        $__internal_06a9907a4ebdf5fc899bb0639b6a4c11449996d9943d63dcbc7095d917ba3850->enter($__internal_06a9907a4ebdf5fc899bb0639b6a4c11449996d9943d63dcbc7095d917ba3850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript"));

        // line 657
        echo "    <script type=\"text/javascript\">
    jQuery(document).ready(function(\$) {
        \$field = \$('#";
        // line 659
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "');

        ";
        // line 661
        $this->displayBlock('genemu_jqueryselect2_javascript_prototype', $context, $blocks);
        // line 664
        echo "    });
    </script>
";
        
        $__internal_06a9907a4ebdf5fc899bb0639b6a4c11449996d9943d63dcbc7095d917ba3850->leave($__internal_06a9907a4ebdf5fc899bb0639b6a4c11449996d9943d63dcbc7095d917ba3850_prof);

    }

    // line 661
    public function block_genemu_jqueryselect2_javascript_prototype($context, array $blocks = array())
    {
        $__internal_665af84efbdfc13a25abfd93528c5ed0394eb114492b9381de430d28b2ce1af2 = $this->env->getExtension("native_profiler");
        $__internal_665af84efbdfc13a25abfd93528c5ed0394eb114492b9381de430d28b2ce1af2->enter($__internal_665af84efbdfc13a25abfd93528c5ed0394eb114492b9381de430d28b2ce1af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_javascript_prototype"));

        // line 662
        echo "            \$field.select2(";
        echo twig_jsonencode_filter((isset($context["configs"]) ? $context["configs"] : $this->getContext($context, "configs")));
        echo ");
        ";
        
        $__internal_665af84efbdfc13a25abfd93528c5ed0394eb114492b9381de430d28b2ce1af2->leave($__internal_665af84efbdfc13a25abfd93528c5ed0394eb114492b9381de430d28b2ce1af2_prof);

    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:jquery_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1469 => 662,  1463 => 661,  1454 => 664,  1452 => 661,  1447 => 659,  1443 => 657,  1437 => 656,  1428 => 648,  1424 => 646,  1417 => 642,  1413 => 641,  1407 => 638,  1403 => 637,  1399 => 636,  1395 => 634,  1393 => 633,  1372 => 615,  1364 => 610,  1354 => 603,  1342 => 594,  1293 => 550,  1290 => 549,  1288 => 548,  1252 => 515,  1245 => 510,  1243 => 509,  1242 => 508,  1241 => 507,  1240 => 506,  1239 => 505,  1230 => 499,  1226 => 498,  1221 => 496,  1217 => 495,  1214 => 494,  1208 => 493,  1198 => 651,  1196 => 493,  1192 => 492,  1188 => 490,  1186 => 489,  1180 => 488,  1163 => 472,  1157 => 468,  1142 => 455,  1140 => 454,  1123 => 440,  1120 => 439,  1116 => 437,  1106 => 431,  1104 => 430,  1097 => 425,  1095 => 424,  1094 => 423,  1093 => 422,  1092 => 421,  1091 => 420,  1085 => 417,  1082 => 416,  1076 => 415,  1066 => 483,  1064 => 415,  1060 => 414,  1056 => 412,  1054 => 411,  1048 => 410,  1038 => 405,  1031 => 400,  1029 => 399,  1024 => 397,  1019 => 395,  1014 => 392,  1011 => 391,  1008 => 390,  1005 => 389,  1002 => 387,  999 => 386,  996 => 385,  994 => 384,  991 => 383,  988 => 382,  985 => 381,  983 => 380,  980 => 379,  977 => 378,  974 => 377,  972 => 376,  969 => 375,  966 => 374,  963 => 373,  961 => 372,  958 => 371,  955 => 370,  952 => 369,  949 => 368,  947 => 367,  945 => 366,  939 => 365,  929 => 357,  925 => 356,  921 => 355,  918 => 354,  912 => 353,  902 => 360,  900 => 353,  895 => 351,  891 => 349,  889 => 348,  883 => 347,  873 => 342,  867 => 338,  865 => 337,  860 => 334,  854 => 332,  846 => 327,  843 => 326,  841 => 325,  836 => 323,  832 => 322,  828 => 320,  826 => 319,  820 => 318,  810 => 313,  800 => 305,  798 => 304,  795 => 303,  784 => 294,  782 => 293,  777 => 290,  771 => 288,  765 => 287,  762 => 286,  757 => 285,  754 => 284,  746 => 279,  743 => 278,  741 => 277,  733 => 271,  728 => 268,  716 => 258,  714 => 257,  705 => 251,  701 => 250,  697 => 248,  695 => 247,  689 => 246,  676 => 238,  670 => 237,  664 => 236,  661 => 235,  656 => 234,  653 => 233,  647 => 231,  645 => 230,  636 => 224,  632 => 223,  629 => 222,  626 => 221,  623 => 220,  620 => 219,  617 => 218,  614 => 217,  611 => 216,  609 => 215,  603 => 211,  598 => 208,  596 => 207,  589 => 203,  585 => 202,  581 => 200,  579 => 199,  573 => 198,  559 => 192,  555 => 190,  553 => 189,  547 => 188,  537 => 183,  527 => 175,  511 => 163,  509 => 162,  504 => 160,  495 => 154,  491 => 152,  489 => 151,  483 => 150,  471 => 144,  462 => 138,  458 => 137,  454 => 136,  450 => 134,  448 => 133,  442 => 132,  433 => 124,  422 => 116,  418 => 115,  413 => 114,  411 => 113,  404 => 111,  400 => 110,  396 => 109,  392 => 107,  389 => 106,  386 => 105,  384 => 104,  381 => 103,  378 => 102,  376 => 100,  374 => 99,  372 => 98,  369 => 97,  363 => 96,  353 => 127,  351 => 96,  343 => 94,  338 => 91,  336 => 90,  330 => 89,  320 => 84,  315 => 80,  304 => 72,  301 => 71,  299 => 70,  296 => 68,  291 => 65,  288 => 64,  286 => 62,  284 => 60,  281 => 59,  279 => 57,  277 => 56,  274 => 55,  272 => 54,  266 => 53,  242 => 39,  234 => 35,  232 => 34,  226 => 33,  205 => 18,  200 => 15,  198 => 14,  192 => 13,  180 => 11,  168 => 9,  153 => 4,  148 => 3,  146 => 2,  140 => 1,  132 => 667,  130 => 656,  127 => 655,  125 => 488,  122 => 487,  120 => 410,  117 => 409,  115 => 365,  112 => 364,  110 => 347,  107 => 346,  105 => 318,  102 => 317,  100 => 246,  97 => 245,  95 => 198,  92 => 197,  90 => 188,  87 => 187,  85 => 150,  82 => 149,  80 => 132,  77 => 131,  75 => 89,  72 => 88,  70 => 53,  67 => 52,  65 => 33,  62 => 32,  60 => 13,  57 => 12,  55 => 11,  52 => 10,  50 => 9,  47 => 8,  45 => 1,);
    }
}
