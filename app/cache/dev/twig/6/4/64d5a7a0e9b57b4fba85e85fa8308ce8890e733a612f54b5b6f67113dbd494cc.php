<?php

/* GenemuFormBundle:Form:div_layout.html.twig */
class __TwigTemplate_64d5a7a0e9b57b4fba85e85fa8308ce8890e733a612f54b5b6f67113dbd494cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'genemu_captcha_widget' => array($this, 'block_genemu_captcha_widget'),
            'genemu_recaptcha_widget' => array($this, 'block_genemu_recaptcha_widget'),
            'genemu_jquerydate_widget' => array($this, 'block_genemu_jquerydate_widget'),
            'genemu_jqueryslider_widget' => array($this, 'block_genemu_jqueryslider_widget'),
            'genemu_jqueryautocompleter_widget' => array($this, 'block_genemu_jqueryautocompleter_widget'),
            'genemu_jquerychosen_widget' => array($this, 'block_genemu_jquerychosen_widget'),
            'genemu_jquerygeolocation_widget' => array($this, 'block_genemu_jquerygeolocation_widget'),
            'genemu_jqueryfile_widget' => array($this, 'block_genemu_jqueryfile_widget'),
            'genemu_jquerycolor_widget' => array($this, 'block_genemu_jquerycolor_widget'),
            'genemu_jqueryrating_widget' => array($this, 'block_genemu_jqueryrating_widget'),
            'genemu_jqueryimage_widget' => array($this, 'block_genemu_jqueryimage_widget'),
            'genemu_jquerytokeninput_widget' => array($this, 'block_genemu_jquerytokeninput_widget'),
            'genemu_plain_widget' => array($this, 'block_genemu_plain_widget'),
            'genemu_jqueryselect2_hidden_row' => array($this, 'block_genemu_jqueryselect2_hidden_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_694dcc1b509f2138a65092b161be72d59d27854da5a5cbe759404d048b3b8ba7 = $this->env->getExtension("native_profiler");
        $__internal_694dcc1b509f2138a65092b161be72d59d27854da5a5cbe759404d048b3b8ba7->enter($__internal_694dcc1b509f2138a65092b161be72d59d27854da5a5cbe759404d048b3b8ba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GenemuFormBundle:Form:div_layout.html.twig"));

        // line 1
        $this->displayBlock('genemu_captcha_widget', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('genemu_recaptcha_widget', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('genemu_jquerydate_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('genemu_jqueryslider_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('genemu_jqueryautocompleter_widget', $context, $blocks);
        // line 59
        echo "
";
        // line 60
        $this->displayBlock('genemu_jquerychosen_widget', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('genemu_jquerygeolocation_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('genemu_jqueryfile_widget', $context, $blocks);
        // line 89
        echo "
";
        // line 90
        $this->displayBlock('genemu_jquerycolor_widget', $context, $blocks);
        // line 102
        echo "
";
        // line 103
        $this->displayBlock('genemu_jqueryrating_widget', $context, $blocks);
        // line 112
        echo "
";
        // line 113
        $this->displayBlock('genemu_jqueryimage_widget', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('genemu_jquerytokeninput_widget', $context, $blocks);
        // line 161
        echo "
";
        // line 162
        $this->displayBlock('genemu_plain_widget', $context, $blocks);
        // line 167
        echo "
";
        // line 168
        $this->displayBlock('genemu_jqueryselect2_hidden_row', $context, $blocks);
        
        $__internal_694dcc1b509f2138a65092b161be72d59d27854da5a5cbe759404d048b3b8ba7->leave($__internal_694dcc1b509f2138a65092b161be72d59d27854da5a5cbe759404d048b3b8ba7_prof);

    }

    // line 1
    public function block_genemu_captcha_widget($context, array $blocks = array())
    {
        $__internal_aea9c0ff70920e5add62fa79eae14548dbce20e7b94681eb1496f33086d9ce31 = $this->env->getExtension("native_profiler");
        $__internal_aea9c0ff70920e5add62fa79eae14548dbce20e7b94681eb1496f33086d9ce31->enter($__internal_aea9c0ff70920e5add62fa79eae14548dbce20e7b94681eb1496f33086d9ce31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_captcha_widget"));

        // line 2
        ob_start();
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, (isset($context["src"]) ? $context["src"] : $this->getContext($context, "src")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        echo "\" />
    ";
        // line 4
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_aea9c0ff70920e5add62fa79eae14548dbce20e7b94681eb1496f33086d9ce31->leave($__internal_aea9c0ff70920e5add62fa79eae14548dbce20e7b94681eb1496f33086d9ce31_prof);

    }

    // line 8
    public function block_genemu_recaptcha_widget($context, array $blocks = array())
    {
        $__internal_c657e948b27466425242d287275c32401011f7d7b5a46d69e4645b98fb6c4073 = $this->env->getExtension("native_profiler");
        $__internal_c657e948b27466425242d287275c32401011f7d7b5a46d69e4645b98fb6c4073->enter($__internal_c657e948b27466425242d287275c32401011f7d7b5a46d69e4645b98fb6c4073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_recaptcha_widget"));

        // line 9
        ob_start();
        // line 10
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_div\" style=\"display: none;\"></div>
    <noscript>
        <iframe src=\"http://www.google.com/recaptcha/api/noscript?k=";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["public_key"]) ? $context["public_key"] : $this->getContext($context, "public_key")), "html", null, true);
        echo "\" width=\"500\" height=\"300\" frameborder=\"0\"></iframe>
        <br />
        <textarea name=\"recaptcha_challenge_field\" rows=\"3\" cols=\"40\"></textarea>
        <input type=\"hidden\" name=\"recaptcha_response_field\" value=\"manual_challenge\" />
    </noscript>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c657e948b27466425242d287275c32401011f7d7b5a46d69e4645b98fb6c4073->leave($__internal_c657e948b27466425242d287275c32401011f7d7b5a46d69e4645b98fb6c4073_prof);

    }

    // line 20
    public function block_genemu_jquerydate_widget($context, array $blocks = array())
    {
        $__internal_fba608b2b922239eeea44b67128fdb733c49138d5926b0659e7f38fe2befe065 = $this->env->getExtension("native_profiler");
        $__internal_fba608b2b922239eeea44b67128fdb733c49138d5926b0659e7f38fe2befe065->enter($__internal_fba608b2b922239eeea44b67128fdb733c49138d5926b0659e7f38fe2befe065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerydate_widget"));

        // line 21
        ob_start();
        // line 22
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 23
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        } else {
            // line 25
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 26
            echo strtr((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 27
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 28
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 29
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 30
            echo "

            ";
            // line 32
            $context["attr"] = twig_array_merge(array("size" => 10), (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
            // line 33
            echo "            ";
            $context["id"] = ("datepicker_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
            // line 34
            echo "            ";
            $context["value"] = "";
            // line 35
            echo "            ";
            $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
            // line 36
            echo "            ";
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_fba608b2b922239eeea44b67128fdb733c49138d5926b0659e7f38fe2befe065->leave($__internal_fba608b2b922239eeea44b67128fdb733c49138d5926b0659e7f38fe2befe065_prof);

    }

    // line 42
    public function block_genemu_jqueryslider_widget($context, array $blocks = array())
    {
        $__internal_15071146a64d0b4032ab1342f673084e77b796ebd7fb8b21c3b091136aeb0784 = $this->env->getExtension("native_profiler");
        $__internal_15071146a64d0b4032ab1342f673084e77b796ebd7fb8b21c3b091136aeb0784->enter($__internal_15071146a64d0b4032ab1342f673084e77b796ebd7fb8b21c3b091136aeb0784_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryslider_widget"));

        // line 43
        ob_start();
        // line 44
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_slider\"></div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_15071146a64d0b4032ab1342f673084e77b796ebd7fb8b21c3b091136aeb0784->leave($__internal_15071146a64d0b4032ab1342f673084e77b796ebd7fb8b21c3b091136aeb0784_prof);

    }

    // line 49
    public function block_genemu_jqueryautocompleter_widget($context, array $blocks = array())
    {
        $__internal_21bd2f1d55daf1d447b468a9a9dc19af9c01b9f179b2d4441e86e4f041ad36ee = $this->env->getExtension("native_profiler");
        $__internal_21bd2f1d55daf1d447b468a9a9dc19af9c01b9f179b2d4441e86e4f041ad36ee->enter($__internal_21bd2f1d55daf1d447b468a9a9dc19af9c01b9f179b2d4441e86e4f041ad36ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryautocompleter_widget"));

        // line 50
        ob_start();
        // line 51
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

    ";
        // line 53
        $context["id"] = ("autocompleter_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 54
        echo "    ";
        $context["full_name"] = ("autocompleter_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 55
        echo "    ";
        $context["value"] = (isset($context["autocompleter_value"]) ? $context["autocompleter_value"] : $this->getContext($context, "autocompleter_value"));
        // line 56
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_21bd2f1d55daf1d447b468a9a9dc19af9c01b9f179b2d4441e86e4f041ad36ee->leave($__internal_21bd2f1d55daf1d447b468a9a9dc19af9c01b9f179b2d4441e86e4f041ad36ee_prof);

    }

    // line 60
    public function block_genemu_jquerychosen_widget($context, array $blocks = array())
    {
        $__internal_b235e6d98561b5e8b2f598effedd5af7b82cd0702e037bf357eade3550156cdd = $this->env->getExtension("native_profiler");
        $__internal_b235e6d98561b5e8b2f598effedd5af7b82cd0702e037bf357eade3550156cdd->enter($__internal_b235e6d98561b5e8b2f598effedd5af7b82cd0702e037bf357eade3550156cdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerychosen_widget"));

        // line 61
        ob_start();
        // line 62
        echo "    ";
        $context["attr"] = twig_array_merge(array("data-placeholder" =>         // line 63
(isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")), "class" => "chzn-select"),         // line 65
(isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        // line 66
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b235e6d98561b5e8b2f598effedd5af7b82cd0702e037bf357eade3550156cdd->leave($__internal_b235e6d98561b5e8b2f598effedd5af7b82cd0702e037bf357eade3550156cdd_prof);

    }

    // line 70
    public function block_genemu_jquerygeolocation_widget($context, array $blocks = array())
    {
        $__internal_62ee67464b2332a1eb51218f435d9c578f9cda6bfcc34e0928503b73473870c1 = $this->env->getExtension("native_profiler");
        $__internal_62ee67464b2332a1eb51218f435d9c578f9cda6bfcc34e0928503b73473870c1->enter($__internal_62ee67464b2332a1eb51218f435d9c578f9cda6bfcc34e0928503b73473870c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerygeolocation_widget"));

        // line 71
        ob_start();
        // line 72
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

    ";
        // line 74
        if (((isset($context["map"]) ? $context["map"] : $this->getContext($context, "map")) === true)) {
            // line 75
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_map\">&nbsp;</div>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_62ee67464b2332a1eb51218f435d9c578f9cda6bfcc34e0928503b73473870c1->leave($__internal_62ee67464b2332a1eb51218f435d9c578f9cda6bfcc34e0928503b73473870c1_prof);

    }

    // line 80
    public function block_genemu_jqueryfile_widget($context, array $blocks = array())
    {
        $__internal_eca8e39253c0b61253b1cebb7c327d1be614224fee0312e866a9f2e503b6525c = $this->env->getExtension("native_profiler");
        $__internal_eca8e39253c0b61253b1cebb7c327d1be614224fee0312e866a9f2e503b6525c->enter($__internal_eca8e39253c0b61253b1cebb7c327d1be614224fee0312e866a9f2e503b6525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryfile_widget"));

        // line 81
        ob_start();
        // line 82
        echo "    ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "
    <div id=\"";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload\"></div>
    <div class=\"queue\">
        <div id=\"";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue\"></div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_eca8e39253c0b61253b1cebb7c327d1be614224fee0312e866a9f2e503b6525c->leave($__internal_eca8e39253c0b61253b1cebb7c327d1be614224fee0312e866a9f2e503b6525c_prof);

    }

    // line 90
    public function block_genemu_jquerycolor_widget($context, array $blocks = array())
    {
        $__internal_38415185bd0a80c940f21c105fb474a0033ba55e3a37c1a9a2373dcc32548faf = $this->env->getExtension("native_profiler");
        $__internal_38415185bd0a80c940f21c105fb474a0033ba55e3a37c1a9a2373dcc32548faf->enter($__internal_38415185bd0a80c940f21c105fb474a0033ba55e3a37c1a9a2373dcc32548faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerycolor_widget"));

        // line 91
        ob_start();
        // line 92
        echo "    ";
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "image")) {
            // line 93
            echo "        <div id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "_color\" ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div";
            // line 94
            if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
                echo " style=\"background-color: #";
                echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
                echo ";\"";
            }
            echo ">&nbsp;</div>
            ";
            // line 95
            $this->displayBlock("hidden_widget", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 98
            echo "        ";
            $this->displayBlock("form_widget_simple", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_38415185bd0a80c940f21c105fb474a0033ba55e3a37c1a9a2373dcc32548faf->leave($__internal_38415185bd0a80c940f21c105fb474a0033ba55e3a37c1a9a2373dcc32548faf_prof);

    }

    // line 103
    public function block_genemu_jqueryrating_widget($context, array $blocks = array())
    {
        $__internal_88781c79467faaf1c0d4c49865297629c0066083ec42998bfcf1b51db7a44529 = $this->env->getExtension("native_profiler");
        $__internal_88781c79467faaf1c0d4c49865297629c0066083ec42998bfcf1b51db7a44529->enter($__internal_88781c79467faaf1c0d4c49865297629c0066083ec42998bfcf1b51db7a44529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryrating_widget"));

        // line 104
        ob_start();
        // line 105
        echo "    <div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">
    ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 107
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_88781c79467faaf1c0d4c49865297629c0066083ec42998bfcf1b51db7a44529->leave($__internal_88781c79467faaf1c0d4c49865297629c0066083ec42998bfcf1b51db7a44529_prof);

    }

    // line 113
    public function block_genemu_jqueryimage_widget($context, array $blocks = array())
    {
        $__internal_f13a7f0b230e77b0098c5ababb7afe1246394d0d828026dd3de81cafc249cd20 = $this->env->getExtension("native_profiler");
        $__internal_f13a7f0b230e77b0098c5ababb7afe1246394d0d828026dd3de81cafc249cd20->enter($__internal_f13a7f0b230e77b0098c5ababb7afe1246394d0d828026dd3de81cafc249cd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryimage_widget"));

        // line 114
        ob_start();
        // line 115
        echo "    <div id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_container\">
        <div class=\"left\">
            <div id=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_preview\">
                ";
        // line 118
        $context["type"] = "hidden";
        // line 119
        echo "                ";
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

                <a id=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_overlay\" href=\"#\">&nbsp;</a>

                ";
        // line 123
        if ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))) {
            // line 124
            echo "                    ";
            $context["widthMax"] = ((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "width", array())) : (500));
            // line 125
            echo "                    ";
            $context["ratio"] = ((((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) > (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")))) ? (((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) / (isset($context["widthMax"]) ? $context["widthMax"] : $this->getContext($context, "widthMax")))) : (1));
            // line 126
            echo "                    ";
            $context["asset"] = $this->env->getExtension('asset')->getAssetUrl(((array_key_exists("thumbnail", $context)) ? ($this->getAttribute((isset($context["thumbnail"]) ? $context["thumbnail"] : $this->getContext($context, "thumbnail")), "file", array())) : ((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))));
            // line 127
            echo "                    ";
            $context["width"] = ((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")) / (isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")));
            // line 128
            echo "                    ";
            $context["height"] = ((isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")) / (isset($context["ratio"]) ? $context["ratio"] : $this->getContext($context, "ratio")));
            // line 129
            echo "                ";
        } else {
            // line 130
            echo "                    ";
            $context["asset"] = $this->env->getExtension('asset')->getAssetUrl("bundles/genemuform/images/default.png");
            // line 131
            echo "                    ";
            $context["width"] = 96;
            // line 132
            echo "                    ";
            $context["height"] = 96;
            // line 133
            echo "                ";
        }
        // line 134
        echo "
                <img id=\"";
        // line 135
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_img_preview\" src=\"";
        echo twig_escape_filter($this->env, (isset($context["asset"]) ? $context["asset"] : $this->getContext($context, "asset")), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "\" />
            </div>
            <ul id=\"";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_options\" class=\"options\">
                ";
        // line 138
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filters"]) ? $context["filters"] : $this->getContext($context, "filters")));
        foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
            // line 139
            echo "                    <li class=\"";
            echo twig_escape_filter($this->env, $context["filter"], "html", null, true);
            echo " change\"></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "            </ul>
            <div id=\"";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_upload\"></div>
            <div class=\"queue\">
                <div id=\"";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_queue\"></div>
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f13a7f0b230e77b0098c5ababb7afe1246394d0d828026dd3de81cafc249cd20->leave($__internal_f13a7f0b230e77b0098c5ababb7afe1246394d0d828026dd3de81cafc249cd20_prof);

    }

    // line 151
    public function block_genemu_jquerytokeninput_widget($context, array $blocks = array())
    {
        $__internal_ee27517033ab2637af830089dacbed4067e330a2c318440315144fa92e77e3f2 = $this->env->getExtension("native_profiler");
        $__internal_ee27517033ab2637af830089dacbed4067e330a2c318440315144fa92e77e3f2->enter($__internal_ee27517033ab2637af830089dacbed4067e330a2c318440315144fa92e77e3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jquerytokeninput_widget"));

        // line 152
        ob_start();
        // line 153
        $this->displayBlock("hidden_widget", $context, $blocks);
        echo "

";
        // line 155
        $context["id"] = ("tokeninput_" . (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")));
        // line 156
        $context["full_name"] = ("tokeninput_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 157
        $context["value"] = (isset($context["tokeninput_value"]) ? $context["tokeninput_value"] : $this->getContext($context, "tokeninput_value"));
        // line 158
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_ee27517033ab2637af830089dacbed4067e330a2c318440315144fa92e77e3f2->leave($__internal_ee27517033ab2637af830089dacbed4067e330a2c318440315144fa92e77e3f2_prof);

    }

    // line 162
    public function block_genemu_plain_widget($context, array $blocks = array())
    {
        $__internal_9ddf0d042b9e8bd296ec98ed6b8c026164dfd274ae9619e7b451738151d15f05 = $this->env->getExtension("native_profiler");
        $__internal_9ddf0d042b9e8bd296ec98ed6b8c026164dfd274ae9619e7b451738151d15f05->enter($__internal_9ddf0d042b9e8bd296ec98ed6b8c026164dfd274ae9619e7b451738151d15f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_plain_widget"));

        // line 163
        echo "    <div ";
        $this->displayBlock("container_attributes", $context, $blocks);
        echo ">
        <p ";
        // line 164
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
        echo "</p>
    </div>
";
        
        $__internal_9ddf0d042b9e8bd296ec98ed6b8c026164dfd274ae9619e7b451738151d15f05->leave($__internal_9ddf0d042b9e8bd296ec98ed6b8c026164dfd274ae9619e7b451738151d15f05_prof);

    }

    // line 168
    public function block_genemu_jqueryselect2_hidden_row($context, array $blocks = array())
    {
        $__internal_4ef9053bedc833f0763791aa1669d97d57a8f573578b567b47fee460e9eef028 = $this->env->getExtension("native_profiler");
        $__internal_4ef9053bedc833f0763791aa1669d97d57a8f573578b567b47fee460e9eef028->enter($__internal_4ef9053bedc833f0763791aa1669d97d57a8f573578b567b47fee460e9eef028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "genemu_jqueryselect2_hidden_row"));

        // line 169
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
        
        $__internal_4ef9053bedc833f0763791aa1669d97d57a8f573578b567b47fee460e9eef028->leave($__internal_4ef9053bedc833f0763791aa1669d97d57a8f573578b567b47fee460e9eef028_prof);

    }

    public function getTemplateName()
    {
        return "GenemuFormBundle:Form:div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  609 => 169,  603 => 168,  591 => 164,  586 => 163,  580 => 162,  570 => 158,  568 => 157,  566 => 156,  564 => 155,  559 => 153,  557 => 152,  551 => 151,  538 => 144,  533 => 142,  530 => 141,  521 => 139,  517 => 138,  513 => 137,  502 => 135,  499 => 134,  496 => 133,  493 => 132,  490 => 131,  487 => 130,  484 => 129,  481 => 128,  478 => 127,  475 => 126,  472 => 125,  469 => 124,  467 => 123,  462 => 121,  456 => 119,  454 => 118,  450 => 117,  444 => 115,  442 => 114,  436 => 113,  427 => 109,  418 => 107,  414 => 106,  409 => 105,  407 => 104,  401 => 103,  389 => 98,  383 => 95,  375 => 94,  368 => 93,  365 => 92,  363 => 91,  357 => 90,  346 => 85,  341 => 83,  336 => 82,  334 => 81,  328 => 80,  316 => 75,  314 => 74,  308 => 72,  306 => 71,  300 => 70,  289 => 66,  287 => 65,  286 => 63,  284 => 62,  282 => 61,  276 => 60,  265 => 56,  262 => 55,  259 => 54,  257 => 53,  251 => 51,  249 => 50,  243 => 49,  233 => 45,  228 => 44,  226 => 43,  220 => 42,  207 => 36,  204 => 35,  201 => 34,  198 => 33,  196 => 32,  192 => 30,  190 => 29,  189 => 28,  188 => 27,  187 => 26,  182 => 25,  176 => 23,  173 => 22,  171 => 21,  165 => 20,  151 => 12,  145 => 10,  143 => 9,  137 => 8,  127 => 4,  116 => 3,  114 => 2,  108 => 1,  101 => 168,  98 => 167,  96 => 162,  93 => 161,  91 => 151,  88 => 150,  86 => 113,  83 => 112,  81 => 103,  78 => 102,  76 => 90,  73 => 89,  71 => 80,  68 => 79,  66 => 70,  63 => 69,  61 => 60,  58 => 59,  56 => 49,  53 => 48,  51 => 42,  48 => 41,  46 => 20,  43 => 19,  41 => 8,  38 => 7,  36 => 1,);
    }
}
