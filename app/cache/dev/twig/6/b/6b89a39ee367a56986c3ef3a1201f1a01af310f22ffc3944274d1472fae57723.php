<?php

/* OroUIBundle:Default:index.html.twig */
class __TwigTemplate_6b89a39ee367a56986c3ef3a1201f1a01af310f22ffc3944274d1472fae57723 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default:index.html.twig", 207);
        // line 207
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroUIBundle:Default/navbar:blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'head' => array($this, 'block_head'),
                'head_style' => array($this, 'block_head_style'),
                'script' => array($this, 'block_script'),
                'scripts_before' => array($this, 'block_scripts_before'),
                'application' => array($this, 'block_application'),
                'head_script' => array($this, 'block_head_script'),
                'bodyClass' => array($this, 'block_bodyClass'),
                'header' => array($this, 'block_header'),
                'left_panel' => array($this, 'block_left_panel'),
                'main' => array($this, 'block_main'),
                'before_content' => array($this, 'block_before_content'),
                'breadcrumb' => array($this, 'block_breadcrumb'),
                'before_content_addition' => array($this, 'block_before_content_addition'),
                'messages' => array($this, 'block_messages'),
                'page_container' => array($this, 'block_page_container'),
                'content' => array($this, 'block_content'),
                'right_panel' => array($this, 'block_right_panel'),
                'footer' => array($this, 'block_footer'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c93ece1436beaf3c33728bd4ef8852416252cc71154f322b321d73747a4eb860 = $this->env->getExtension("native_profiler");
        $__internal_c93ece1436beaf3c33728bd4ef8852416252cc71154f322b321d73747a4eb860->enter($__internal_c93ece1436beaf3c33728bd4ef8852416252cc71154f322b321d73747a4eb860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default:index.html.twig"));

        // line 1
        if ( !$this->env->getExtension('oro_hash_nav')->checkIsHashNavigation()) {
            // line 2
            echo "    <!DOCTYPE html>
    <html class=\"";
            // line 3
            if ($this->env->getExtension('mobile_extension')->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version\">
    <head>
        ";
            // line 5
            $this->displayBlock('head', $context, $blocks);
            // line 50
            echo "    </head>
    <body class=\"";
            // line 51
            if ($this->env->getExtension('mobile_extension')->isMobile()) {
                echo "mobile";
            } else {
                echo "desktop";
            }
            echo "-version lang-";
            echo twig_escape_filter($this->env, twig_slice($this->env, call_user_func_array($this->env->getFunction('oro_language')->getCallable(), array()), 0, 2), "html", null, true);
            echo " ";
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
                echo "dev-mode ";
            }
            $this->displayBlock('bodyClass', $context, $blocks);
            echo "\">
    ";
            // line 52
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("after_body_start", $context)) ? (_twig_default_filter((isset($context["after_body_start"]) ? $context["after_body_start"] : $this->getContext($context, "after_body_start")), "after_body_start")) : ("after_body_start")), array());
            // line 53
            echo "    <div id=\"progressbar\">
        <h3>";
            // line 54
            echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
            echo "</h3>
        <div class=\"progress progress-striped active\">
            <div class=\"bar\" style=\"width: 90%;\"></div>
        </div>
    </div>
    <div id=\"page\" style=\"display:none;\">
        <div id=\"top-page\">
            ";
            // line 61
            $this->displayBlock('header', $context, $blocks);
            // line 80
            echo "            ";
            if ($this->env->getExtension('mobile_extension')->isDesktop()) {
                // line 81
                echo "                ";
                $this->displayBlock('left_panel', $context, $blocks);
                // line 86
                echo "            ";
            }
            // line 87
            echo "            ";
            $this->displayBlock('main', $context, $blocks);
            // line 185
            echo "            ";
            if ($this->env->getExtension('mobile_extension')->isDesktop()) {
                // line 186
                echo "                ";
                $this->displayBlock('right_panel', $context, $blocks);
                // line 191
                echo "            ";
            }
            // line 192
            echo "            ";
            $this->displayBlock('footer', $context, $blocks);
            // line 198
            echo "        </div>
    </div>
    ";
            // line 200
            echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("before_body_end", $context)) ? (_twig_default_filter((isset($context["before_body_end"]) ? $context["before_body_end"] : $this->getContext($context, "before_body_end")), "before_body_end")) : ("before_body_end")), array());
            // line 201
            echo "    </body>
    </html>
";
        } else {
            // line 204
            echo "    ";
            // line 205
            echo "    ";
            $context["title"] = $this->env->getExtension('oro_title')->render();
            // line 206
            echo "    ";
            // line 207
            echo "    ";
            // line 208
            echo "    ";
            $this->loadTemplate("OroNavigationBundle:HashNav:hashNavAjax.html.twig", "OroUIBundle:Default:index.html.twig", 208)->display(array_merge($context, array("data" => array("scripts" => $this->renderBlock("head_script", $context, $blocks), "content" => $this->renderBlock("page_container", $context, $blocks), "breadcrumb" => trim($this->renderBlock("breadcrumb", $context, $blocks)), "beforeContentAddition" => $this->renderBlock("before_content_addition", $context, $blocks)))));
        }
        
        $__internal_c93ece1436beaf3c33728bd4ef8852416252cc71154f322b321d73747a4eb860->leave($__internal_c93ece1436beaf3c33728bd4ef8852416252cc71154f322b321d73747a4eb860_prof);

    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f9b6507ba32ed7400d9bce0f86907cccfdd3c1a8e7e506b81c42620c8079122 = $this->env->getExtension("native_profiler");
        $__internal_6f9b6507ba32ed7400d9bce0f86907cccfdd3c1a8e7e506b81c42620c8079122->enter($__internal_6f9b6507ba32ed7400d9bce0f86907cccfdd3c1a8e7e506b81c42620c8079122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 6
        echo "            <title>";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Loading...", array(), "messages");
        echo "</title>
            <script id=\"page-title\" type=\"text/html\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</script>
            <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no\"/>
            <meta http-equiv=\"cache-control\" content=\"max-age=0\" />
            <meta http-equiv=\"cache-control\" content=\"no-cache\" />
            <meta http-equiv=\"expires\" content=\"0\" />
            <meta http-equiv=\"pragma\" content=\"no-cache\" />
            ";
        // line 13
        $this->displayBlock('head_style', $context, $blocks);
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('script', $context, $blocks);
        // line 49
        echo "        ";
        
        $__internal_6f9b6507ba32ed7400d9bce0f86907cccfdd3c1a8e7e506b81c42620c8079122->leave($__internal_6f9b6507ba32ed7400d9bce0f86907cccfdd3c1a8e7e506b81c42620c8079122_prof);

    }

    // line 13
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_0535a8ef0b0f5b85362b238525aa7c17a5decd69e0b7188d810aa99345903a31 = $this->env->getExtension("native_profiler");
        $__internal_0535a8ef0b0f5b85362b238525aa7c17a5decd69e0b7188d810aa99345903a31->enter($__internal_0535a8ef0b0f5b85362b238525aa7c17a5decd69e0b7188d810aa99345903a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 14
        echo "                ";
        if ($this->env->getExtension('oro_theme')->getThemeIcon()) {
            // line 15
            echo "                    <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeIcon()), "html", null, true);
            echo "\" />
                ";
        }
        // line 17
        echo "               ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("head_style", $context)) ? (_twig_default_filter((isset($context["head_style"]) ? $context["head_style"] : $this->getContext($context, "head_style")), "head_style")) : ("head_style")), array());
        // line 18
        echo "            ";
        
        $__internal_0535a8ef0b0f5b85362b238525aa7c17a5decd69e0b7188d810aa99345903a31->leave($__internal_0535a8ef0b0f5b85362b238525aa7c17a5decd69e0b7188d810aa99345903a31_prof);

    }

    // line 20
    public function block_script($context, array $blocks = array())
    {
        $__internal_b5a93d033f97c02603fe22ea41d520a0c09e0fba25f655a46c232a9e6a38d4e6 = $this->env->getExtension("native_profiler");
        $__internal_b5a93d033f97c02603fe22ea41d520a0c09e0fba25f655a46c232a9e6a38d4e6->enter($__internal_b5a93d033f97c02603fe22ea41d520a0c09e0fba25f655a46c232a9e6a38d4e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        // line 21
        echo "                ";
        $this->displayBlock('scripts_before', $context, $blocks);
        // line 24
        echo "                ";
        ob_start();
        // line 25
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("requirejs_config_extend", $context)) ? (_twig_default_filter((isset($context["requirejs_config_extend"]) ? $context["requirejs_config_extend"] : $this->getContext($context, "requirejs_config_extend")), "requirejs_config_extend")) : ("requirejs_config_extend")), array());
        $context["requirejs_config_extend"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 27
        echo "                ";
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUIBundle:Default:index.html.twig", 27)->display(array_merge($context, array("compressed" =>  !$this->getAttribute(        // line 28
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array()), "config_extend" =>         // line 29
(isset($context["requirejs_config_extend"]) ? $context["requirejs_config_extend"] : $this->getContext($context, "requirejs_config_extend")))));
        // line 31
        echo "                ";
        $this->displayBlock('application', $context, $blocks);
        // line 36
        echo "                <script type=\"text/javascript\">
                    require(['oroui/js/init-layout', 'orouser/js/init-user', 'oroui/js/widget-manager']);
                ";
        // line 38
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            // line 39
            echo "                    require(['oroui/js/mobile/layout'], function (layout) {layout.init();});
                ";
        }
        // line 41
        echo "                ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            // line 42
            echo "                    require(['oroui/js/tools'], function (tools) {tools.debug = true;});
                ";
        }
        // line 44
        echo "                </script>
                ";
        // line 45
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("scripts_after", $context)) ? (_twig_default_filter((isset($context["scripts_after"]) ? $context["scripts_after"] : $this->getContext($context, "scripts_after")), "scripts_after")) : ("scripts_after")), array());
        // line 46
        echo "                ";
        $this->displayBlock('head_script', $context, $blocks);
        // line 48
        echo "            ";
        
        $__internal_b5a93d033f97c02603fe22ea41d520a0c09e0fba25f655a46c232a9e6a38d4e6->leave($__internal_b5a93d033f97c02603fe22ea41d520a0c09e0fba25f655a46c232a9e6a38d4e6_prof);

    }

    // line 21
    public function block_scripts_before($context, array $blocks = array())
    {
        $__internal_2155b741648fc0428d589c69fd6b7a0c4e7b8cecc8ef5a6d359c7931c16f783f = $this->env->getExtension("native_profiler");
        $__internal_2155b741648fc0428d589c69fd6b7a0c4e7b8cecc8ef5a6d359c7931c16f783f->enter($__internal_2155b741648fc0428d589c69fd6b7a0c4e7b8cecc8ef5a6d359c7931c16f783f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts_before"));

        // line 22
        echo "                    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("scripts_before", $context)) ? (_twig_default_filter((isset($context["scripts_before"]) ? $context["scripts_before"] : $this->getContext($context, "scripts_before")), "scripts_before")) : ("scripts_before")), array());
        // line 23
        echo "                ";
        
        $__internal_2155b741648fc0428d589c69fd6b7a0c4e7b8cecc8ef5a6d359c7931c16f783f->leave($__internal_2155b741648fc0428d589c69fd6b7a0c4e7b8cecc8ef5a6d359c7931c16f783f_prof);

    }

    // line 31
    public function block_application($context, array $blocks = array())
    {
        $__internal_a52bf635c890a6b4e1125d783a91a2f309488662f97fdee45f162dfa43e7239c = $this->env->getExtension("native_profiler");
        $__internal_a52bf635c890a6b4e1125d783a91a2f309488662f97fdee45f162dfa43e7239c->enter($__internal_a52bf635c890a6b4e1125d783a91a2f309488662f97fdee45f162dfa43e7239c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "application"));

        // line 32
        echo "                <script type=\"text/javascript\">
                    require(['oroui/js/app']);
                </script>
                ";
        
        $__internal_a52bf635c890a6b4e1125d783a91a2f309488662f97fdee45f162dfa43e7239c->leave($__internal_a52bf635c890a6b4e1125d783a91a2f309488662f97fdee45f162dfa43e7239c_prof);

    }

    // line 46
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_15c161db00b6d671063e0c113bc24a07485cf09054343245133dc252cdeeeac0 = $this->env->getExtension("native_profiler");
        $__internal_15c161db00b6d671063e0c113bc24a07485cf09054343245133dc252cdeeeac0->enter($__internal_15c161db00b6d671063e0c113bc24a07485cf09054343245133dc252cdeeeac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 47
        echo "                ";
        
        $__internal_15c161db00b6d671063e0c113bc24a07485cf09054343245133dc252cdeeeac0->leave($__internal_15c161db00b6d671063e0c113bc24a07485cf09054343245133dc252cdeeeac0_prof);

    }

    // line 51
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_75fe018cd79923e93327af6da853317c8281b5e09c0b3c3c0f387c821c371a69 = $this->env->getExtension("native_profiler");
        $__internal_75fe018cd79923e93327af6da853317c8281b5e09c0b3c3c0f387c821c371a69->enter($__internal_75fe018cd79923e93327af6da853317c8281b5e09c0b3c3c0f387c821c371a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_75fe018cd79923e93327af6da853317c8281b5e09c0b3c3c0f387c821c371a69->leave($__internal_75fe018cd79923e93327af6da853317c8281b5e09c0b3c3c0f387c821c371a69_prof);

    }

    // line 61
    public function block_header($context, array $blocks = array())
    {
        $__internal_fa384a8dca5c5e7e7a73c4dcb6b9f8ec77cf3192e77c7bb04837d67a4638b57d = $this->env->getExtension("native_profiler");
        $__internal_fa384a8dca5c5e7e7a73c4dcb6b9f8ec77cf3192e77c7bb04837d67a4638b57d->enter($__internal_fa384a8dca5c5e7e7a73c4dcb6b9f8ec77cf3192e77c7bb04837d67a4638b57d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 62
        echo "                <header class=\"navbar\" id=\"oroplatform-header\">
                    ";
        // line 63
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("before_navigation", $context)) ? (_twig_default_filter((isset($context["before_navigation"]) ? $context["before_navigation"] : $this->getContext($context, "before_navigation")), "before_navigation")) : ("before_navigation")), array());
        // line 64
        echo "                    <div class=\"navbar-inner\">
                        <div class=\"container\">
                            ";
        // line 66
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("header_logo", $context)) ? (_twig_default_filter((isset($context["header_logo"]) ? $context["header_logo"] : $this->getContext($context, "header_logo")), "header_logo")) : ("header_logo")), array());
        // line 67
        echo "                            <ul class=\"nav pull-right user-menu\">
                                ";
        // line 68
        $this->displayBlock("user_menu", $context, $blocks);
        echo "
                            </ul>
                            <div class=\"nav top-search shortcuts\">
                                ";
        // line 71
        $this->displayBlock("navbar", $context, $blocks);
        echo "
                            </div>
                            ";
        // line 73
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("pin_tabs_list", $context)) ? (_twig_default_filter((isset($context["pin_tabs_list"]) ? $context["pin_tabs_list"] : $this->getContext($context, "pin_tabs_list")), "pin_tabs_list")) : ("pin_tabs_list")), array());
        // line 74
        echo "                        </div>
                    </div>
                    ";
        // line 76
        $this->loadTemplate("OroUIBundle:Default/navbar:top.html.twig", "OroUIBundle:Default:index.html.twig", 76)->display($context);
        // line 77
        echo "                    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("after_navigation", $context)) ? (_twig_default_filter((isset($context["after_navigation"]) ? $context["after_navigation"] : $this->getContext($context, "after_navigation")), "after_navigation")) : ("after_navigation")), array());
        // line 78
        echo "                </header>
            ";
        
        $__internal_fa384a8dca5c5e7e7a73c4dcb6b9f8ec77cf3192e77c7bb04837d67a4638b57d->leave($__internal_fa384a8dca5c5e7e7a73c4dcb6b9f8ec77cf3192e77c7bb04837d67a4638b57d_prof);

    }

    // line 81
    public function block_left_panel($context, array $blocks = array())
    {
        $__internal_c338500993c44dd0baba7dd88d394ada7151fdd5d604b3b9aa4bcfedb3330b36 = $this->env->getExtension("native_profiler");
        $__internal_c338500993c44dd0baba7dd88d394ada7151fdd5d604b3b9aa4bcfedb3330b36->enter($__internal_c338500993c44dd0baba7dd88d394ada7151fdd5d604b3b9aa4bcfedb3330b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_panel"));

        // line 82
        echo "                    <div id=\"left-panel\">
                        ";
        // line 83
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("left_panel", $context)) ? (_twig_default_filter((isset($context["left_panel"]) ? $context["left_panel"] : $this->getContext($context, "left_panel")), "left_panel")) : ("left_panel")), array("placement" => "left"));
        // line 84
        echo "                    </div>
                ";
        
        $__internal_c338500993c44dd0baba7dd88d394ada7151fdd5d604b3b9aa4bcfedb3330b36->leave($__internal_c338500993c44dd0baba7dd88d394ada7151fdd5d604b3b9aa4bcfedb3330b36_prof);

    }

    // line 87
    public function block_main($context, array $blocks = array())
    {
        $__internal_e7b0fcb43a8aff51f5e7f9c2dad24df4e707bc626b0a2e248961d8682ff8c7ca = $this->env->getExtension("native_profiler");
        $__internal_e7b0fcb43a8aff51f5e7f9c2dad24df4e707bc626b0a2e248961d8682ff8c7ca->enter($__internal_e7b0fcb43a8aff51f5e7f9c2dad24df4e707bc626b0a2e248961d8682ff8c7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 88
        echo "                <div id=\"main\">
                    ";
        // line 89
        $this->displayBlock('before_content', $context, $blocks);
        // line 134
        echo "                    <div id=\"container\"";
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            echo " class=\"scrollable-container\"";
        }
        echo ">
                        ";
        // line 135
        $this->displayBlock('page_container', $context, $blocks);
        // line 182
        echo "                    </div>
                </div>
            ";
        
        $__internal_e7b0fcb43a8aff51f5e7f9c2dad24df4e707bc626b0a2e248961d8682ff8c7ca->leave($__internal_e7b0fcb43a8aff51f5e7f9c2dad24df4e707bc626b0a2e248961d8682ff8c7ca_prof);

    }

    // line 89
    public function block_before_content($context, array $blocks = array())
    {
        $__internal_b280a9bc09a72108d6e96d8c2a4ec477bc224462fb490948363586cc6237e556 = $this->env->getExtension("native_profiler");
        $__internal_b280a9bc09a72108d6e96d8c2a4ec477bc224462fb490948363586cc6237e556->enter($__internal_b280a9bc09a72108d6e96d8c2a4ec477bc224462fb490948363586cc6237e556_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "before_content"));

        // line 90
        echo "                    <div class=\"breadcrumb-pin\">
                        <div id=\"breadcrumb\">
                            ";
        // line 92
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 95
        echo "                        </div>
                        ";
        // line 96
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("pin_button", $context)) ? (_twig_default_filter((isset($context["pin_button"]) ? $context["pin_button"] : $this->getContext($context, "pin_button")), "pin_button")) : ("pin_button")), array());
        // line 97
        echo "                        <div id=\"before-content-addition\">
                            ";
        // line 98
        $this->displayBlock('before_content_addition', $context, $blocks);
        // line 99
        echo "                        </div>
                        <div id=\"flash-messages\">
                            ";
        // line 101
        $this->displayBlock('messages', $context, $blocks);
        // line 130
        echo "                        </div>

                    </div>
                    ";
        
        $__internal_b280a9bc09a72108d6e96d8c2a4ec477bc224462fb490948363586cc6237e556->leave($__internal_b280a9bc09a72108d6e96d8c2a4ec477bc224462fb490948363586cc6237e556_prof);

    }

    // line 92
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_75a8e298092eeb44e9640074f87fded108b549c99118bc82b6b922de2cc853b5 = $this->env->getExtension("native_profiler");
        $__internal_75a8e298092eeb44e9640074f87fded108b549c99118bc82b6b922de2cc853b5->enter($__internal_75a8e298092eeb44e9640074f87fded108b549c99118bc82b6b922de2cc853b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 93
        echo "                                ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("breadcrumb", $context)) ? (_twig_default_filter((isset($context["breadcrumb"]) ? $context["breadcrumb"] : $this->getContext($context, "breadcrumb")), "breadcrumb")) : ("breadcrumb")), array());
        // line 94
        echo "                            ";
        
        $__internal_75a8e298092eeb44e9640074f87fded108b549c99118bc82b6b922de2cc853b5->leave($__internal_75a8e298092eeb44e9640074f87fded108b549c99118bc82b6b922de2cc853b5_prof);

    }

    // line 98
    public function block_before_content_addition($context, array $blocks = array())
    {
        $__internal_af59e69e44df455a7c5e16b3b0f7c4ff35df0414f8c89e8f98fe6208704fdc65 = $this->env->getExtension("native_profiler");
        $__internal_af59e69e44df455a7c5e16b3b0f7c4ff35df0414f8c89e8f98fe6208704fdc65->enter($__internal_af59e69e44df455a7c5e16b3b0f7c4ff35df0414f8c89e8f98fe6208704fdc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "before_content_addition"));

        
        $__internal_af59e69e44df455a7c5e16b3b0f7c4ff35df0414f8c89e8f98fe6208704fdc65->leave($__internal_af59e69e44df455a7c5e16b3b0f7c4ff35df0414f8c89e8f98fe6208704fdc65_prof);

    }

    // line 101
    public function block_messages($context, array $blocks = array())
    {
        $__internal_b996bee2ebdb48e5a48433a7e7c6d45d2bc9bbae368cb5086f725889556dc201 = $this->env->getExtension("native_profiler");
        $__internal_b996bee2ebdb48e5a48433a7e7c6d45d2bc9bbae368cb5086f725889556dc201->enter($__internal_b996bee2ebdb48e5a48433a7e7c6d45d2bc9bbae368cb5086f725889556dc201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 102
        echo "                                <div class=\"flash-messages-frame\">
                                    <div class=\"flash-messages-holder\"></div>
                                </div>
                                <script type=\"text/template\" id=\"message-item-template\">
                                    <div class=\"alert <% if (type) {  %><%= 'alert-' + type %><% } %> fade in top-messages \">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                                        <div class=\"message\"><%= message %></div>
                                    </div>
                                </script>
                                <script type=\"text/javascript\">
                                    require(['jquery', 'oroui/js/messenger'],
                                            function(\$, messenger) {
                                                messenger.setup({
                                                    container: '#flash-messages .flash-messages-holder',
                                                    template: _.template(\$.trim(\$('#message-item-template').html()))
                                                });
                                                ";
        // line 118
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 119
            echo "                                                \$(function() {
                                                    ";
            // line 120
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 121
                echo "                                                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 122
                    echo "                                                    messenger.notificationFlashMessage(";
                    echo twig_jsonencode_filter($context["type"]);
                    echo ", ";
                    echo twig_jsonencode_filter($this->env->getExtension('translator')->trans($context["message"]));
                    echo ");
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                echo "                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                                                });
                                                ";
        }
        // line 127
        echo "                                            });
                                </script>
                            ";
        
        $__internal_b996bee2ebdb48e5a48433a7e7c6d45d2bc9bbae368cb5086f725889556dc201->leave($__internal_b996bee2ebdb48e5a48433a7e7c6d45d2bc9bbae368cb5086f725889556dc201_prof);

    }

    // line 135
    public function block_page_container($context, array $blocks = array())
    {
        $__internal_a97b91f3d1be1e6e94f3211289a3ba23cdd73621053bcb0823b21217404c8d41 = $this->env->getExtension("native_profiler");
        $__internal_a97b91f3d1be1e6e94f3211289a3ba23cdd73621053bcb0823b21217404c8d41->enter($__internal_a97b91f3d1be1e6e94f3211289a3ba23cdd73621053bcb0823b21217404c8d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_container"));

        // line 136
        echo "                            ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("content_before", $context)) ? (_twig_default_filter((isset($context["content_before"]) ? $context["content_before"] : $this->getContext($context, "content_before")), "content_before")) : ("content_before")), array());
        // line 137
        echo "                            ";
        $this->displayBlock('content', $context, $blocks);
        // line 180
        echo "                            ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("content_after", $context)) ? (_twig_default_filter((isset($context["content_after"]) ? $context["content_after"] : $this->getContext($context, "content_after")), "content_after")) : ("content_after")), array());
        // line 181
        echo "                        ";
        
        $__internal_a97b91f3d1be1e6e94f3211289a3ba23cdd73621053bcb0823b21217404c8d41->leave($__internal_a97b91f3d1be1e6e94f3211289a3ba23cdd73621053bcb0823b21217404c8d41_prof);

    }

    // line 137
    public function block_content($context, array $blocks = array())
    {
        $__internal_7457d1ec9d91e3633065aae47f591e0e8ef8df3a9e4931f81a446c96114b1884 = $this->env->getExtension("native_profiler");
        $__internal_7457d1ec9d91e3633065aae47f591e0e8ef8df3a9e4931f81a446c96114b1884->enter($__internal_7457d1ec9d91e3633065aae47f591e0e8ef8df3a9e4931f81a446c96114b1884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 138
        echo "                                <div class=\"container\" style=\"background: #fff\">
                                    <div class=\"row\">
                                        <div class=\"span4\">
                                            <hr />
                                            <h3>Layout pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 144
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column");
        echo "\">1 column </a></li>
                                                <li><a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_toolbar");
        echo "\">1 column with toolbar</a></li>
                                                <li><a href=\"";
        // line 146
        echo $this->env->getExtension('routing')->getPath("oro_ui_1column_menu");
        echo "\">1 column with menu</a></li>
                                                <li><a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_page");
        echo "\">grid page</a></li>
                                                <li><a href=\"";
        // line 148
        echo $this->env->getExtension('routing')->getPath("oro_ui_grid_without_bar_page");
        echo "\">grid page without bar</a></li>
                                                <li><a href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_left");
        echo "\">2 columns - left</a></li>
                                                <li><a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("oro_ui_2columns_right");
        echo "\">2 columns - right</a></li>
                                                <li><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("oro_ui_3columns");
        echo "\">3 columns</a></li>
                                            </ul>
                                            <h3>Static pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("oro_ui_forgot_password");
        echo "\">Forgot password</a></li>
                                                <li><a href=\"";
        // line 156
        echo $this->env->getExtension('routing')->getPath("oro_ui_login");
        echo "\">Login page</a></li>
                                                <li><a href=\"";
        // line 157
        echo $this->env->getExtension('routing')->getPath("oro_ui_registration");
        echo "\">Registration page</a></li>
                                                <li><a href=\"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("oro_ui_404");
        echo "\">404</a></li>
                                                <li><a href=\"";
        // line 159
        echo $this->env->getExtension('routing')->getPath("oro_ui_503");
        echo "\">503</a></li>
                                            </ul>
                                            <h3>Example pages</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_elements");
        echo "\">Form elements</a></li>
                                                <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("oro_ui_form_horizontal");
        echo "\">Form Horizontal</a></li>
                                                <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("oro_ui_messages");
        echo "\">System messages</a></li>
                                                <li><a href=\"";
        // line 166
        echo $this->env->getExtension('routing')->getPath("oro_ui_title_bar");
        echo "\">Entity Title Bar</a></li>
                                                <li><a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("oro_ui_buttons");
        echo "\">Buttons</a></li>
                                                <li><a href=\"#\">Print page</a></li>
                                                <li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("oro_ui_tables");
        echo "\">Tables</a></li>
                                                <li><a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("oro_ui_general_elements");
        echo "\">General elements</a></li>
                                            </ul>
                                            <h3>Js use page</h3>
                                            <ul>
                                                <li><a href=\"";
        // line 174
        echo $this->env->getExtension('routing')->getPath("oro_ui_dialog_styled");
        echo "\">jQuery Dialog styled</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            ";
        
        $__internal_7457d1ec9d91e3633065aae47f591e0e8ef8df3a9e4931f81a446c96114b1884->leave($__internal_7457d1ec9d91e3633065aae47f591e0e8ef8df3a9e4931f81a446c96114b1884_prof);

    }

    // line 186
    public function block_right_panel($context, array $blocks = array())
    {
        $__internal_758951bccb7dcdde4a0e01d11fed5d05b62742df4365bb7ea242fa62db24178b = $this->env->getExtension("native_profiler");
        $__internal_758951bccb7dcdde4a0e01d11fed5d05b62742df4365bb7ea242fa62db24178b->enter($__internal_758951bccb7dcdde4a0e01d11fed5d05b62742df4365bb7ea242fa62db24178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_panel"));

        // line 187
        echo "                    <div id=\"right-panel\">
                        ";
        // line 188
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("right_panel", $context)) ? (_twig_default_filter((isset($context["right_panel"]) ? $context["right_panel"] : $this->getContext($context, "right_panel")), "right_panel")) : ("right_panel")), array("placement" => "right"));
        // line 189
        echo "                    </div>
                ";
        
        $__internal_758951bccb7dcdde4a0e01d11fed5d05b62742df4365bb7ea242fa62db24178b->leave($__internal_758951bccb7dcdde4a0e01d11fed5d05b62742df4365bb7ea242fa62db24178b_prof);

    }

    // line 192
    public function block_footer($context, array $blocks = array())
    {
        $__internal_308974fe46ec48829bd4149a74ee564ef4b06c27e166e58c1b87fe27c2ed5e0d = $this->env->getExtension("native_profiler");
        $__internal_308974fe46ec48829bd4149a74ee564ef4b06c27e166e58c1b87fe27c2ed5e0d->enter($__internal_308974fe46ec48829bd4149a74ee564ef4b06c27e166e58c1b87fe27c2ed5e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 193
        echo "                <div id=\"dialog-extend-fixed-container\"></div>
                <footer id=\"footer\" class=\"footer\">
                    ";
        // line 195
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("footer_inner", $context)) ? (_twig_default_filter((isset($context["footer_inner"]) ? $context["footer_inner"] : $this->getContext($context, "footer_inner")), "footer_inner")) : ("footer_inner")), array());
        // line 196
        echo "                </footer>
            ";
        
        $__internal_308974fe46ec48829bd4149a74ee564ef4b06c27e166e58c1b87fe27c2ed5e0d->leave($__internal_308974fe46ec48829bd4149a74ee564ef4b06c27e166e58c1b87fe27c2ed5e0d_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  727 => 196,  725 => 195,  721 => 193,  715 => 192,  707 => 189,  705 => 188,  702 => 187,  696 => 186,  683 => 174,  676 => 170,  672 => 169,  667 => 167,  663 => 166,  659 => 165,  655 => 164,  651 => 163,  644 => 159,  640 => 158,  636 => 157,  632 => 156,  628 => 155,  621 => 151,  617 => 150,  613 => 149,  609 => 148,  605 => 147,  601 => 146,  597 => 145,  593 => 144,  585 => 138,  579 => 137,  572 => 181,  569 => 180,  566 => 137,  563 => 136,  557 => 135,  548 => 127,  544 => 125,  538 => 124,  527 => 122,  522 => 121,  518 => 120,  515 => 119,  513 => 118,  495 => 102,  489 => 101,  478 => 98,  471 => 94,  468 => 93,  462 => 92,  452 => 130,  450 => 101,  446 => 99,  444 => 98,  441 => 97,  439 => 96,  436 => 95,  434 => 92,  430 => 90,  424 => 89,  415 => 182,  413 => 135,  406 => 134,  404 => 89,  401 => 88,  395 => 87,  387 => 84,  385 => 83,  382 => 82,  376 => 81,  368 => 78,  365 => 77,  363 => 76,  359 => 74,  357 => 73,  352 => 71,  346 => 68,  343 => 67,  341 => 66,  337 => 64,  335 => 63,  332 => 62,  326 => 61,  315 => 51,  308 => 47,  302 => 46,  292 => 32,  286 => 31,  279 => 23,  276 => 22,  270 => 21,  263 => 48,  260 => 46,  258 => 45,  255 => 44,  251 => 42,  248 => 41,  244 => 39,  242 => 38,  238 => 36,  235 => 31,  233 => 29,  232 => 28,  230 => 27,  227 => 25,  224 => 24,  221 => 21,  215 => 20,  208 => 18,  205 => 17,  199 => 15,  196 => 14,  190 => 13,  183 => 49,  181 => 20,  178 => 19,  176 => 13,  167 => 7,  162 => 6,  156 => 5,  147 => 208,  145 => 207,  143 => 206,  140 => 205,  138 => 204,  133 => 201,  131 => 200,  127 => 198,  124 => 192,  121 => 191,  118 => 186,  115 => 185,  112 => 87,  109 => 86,  106 => 81,  103 => 80,  101 => 61,  91 => 54,  88 => 53,  86 => 52,  71 => 51,  68 => 50,  66 => 5,  57 => 3,  54 => 2,  52 => 1,  14 => 207,);
    }
}
