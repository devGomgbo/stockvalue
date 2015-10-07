<?php

/* OroUserBundle::layout.html.twig */
class __TwigTemplate_f5e250e99dfaeb4d27910a826f38ed30f34f1762dab3f0bd968ff035f5d1b2f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6af821c9061665f2e63dc7861d933f9da457e6733c6df324602b6e9662966d91 = $this->env->getExtension("native_profiler");
        $__internal_6af821c9061665f2e63dc7861d933f9da457e6733c6df324602b6e9662966d91->enter($__internal_6af821c9061665f2e63dc7861d933f9da457e6733c6df324602b6e9662966d91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html class=\"";
        // line 2
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            echo "mobile";
        } else {
            echo "desktop";
        }
        echo "-version\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 25
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("scripts_after", $context)) ? (_twig_default_filter((isset($context["scripts_after"]) ? $context["scripts_after"] : $this->getContext($context, "scripts_after")), "scripts_after")) : ("scripts_after")), array());
        // line 26
        echo "</head>
<body class=\"";
        // line 27
        if ($this->env->getExtension('mobile_extension')->isMobile()) {
            echo "mobile";
        } else {
            echo "desktop";
        }
        echo "-version ";
        $this->displayBlock('bodyClass', $context, $blocks);
        echo "\">
    <div id=\"page\">
        <div id=\"top-page\">
            ";
        // line 30
        ob_start();
        // line 31
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 32
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array()));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 33
                echo "                    ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 34
                    echo "                    <div class=\"alert";
                    echo twig_escape_filter($this->env, (($context["type"]) ? ((" alert-" . $context["type"])) : ("")), "html", null, true);
                    echo "\">
                    ";
                    // line 35
                    echo $this->env->getExtension('translator')->trans($context["message"]);
                    echo "
                    </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            ";
        }
        // line 40
        echo "            ";
        $context["messagesContent"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
            ";
        // line 42
        $this->displayBlock('messages', $context, $blocks);
        // line 45
        echo "
            ";
        // line 46
        $this->displayBlock('header', $context, $blocks);
        // line 48
        echo "
            ";
        // line 49
        $this->displayBlock('main', $context, $blocks);
        // line 53
        echo "        </div>
    </div>
</body>
</html>
";
        
        $__internal_6af821c9061665f2e63dc7861d933f9da457e6733c6df324602b6e9662966d91->leave($__internal_6af821c9061665f2e63dc7861d933f9da457e6733c6df324602b6e9662966d91_prof);

    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        $__internal_342d95327dd104df84e9de46426bcbf2a4d3e1a15c9548dd3ce88e5faf8d29f5 = $this->env->getExtension("native_profiler");
        $__internal_342d95327dd104df84e9de46426bcbf2a4d3e1a15c9548dd3ce88e5faf8d29f5->enter($__internal_342d95327dd104df84e9de46426bcbf2a4d3e1a15c9548dd3ce88e5faf8d29f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 5
        echo "    <title>";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->render(), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width, height=device-height, initial-scale=1.0, user-scalable=no\">

    ";
        // line 8
        if ($this->env->getExtension('oro_theme')->getThemeIcon()) {
            // line 9
            echo "        <link rel=\"shortcut icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeIcon()), "html", null, true);
            echo "\" />
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("head_style", $context)) ? (_twig_default_filter((isset($context["head_style"]) ? $context["head_style"] : $this->getContext($context, "head_style")), "head_style")) : ("head_style")), array());
        // line 13
        echo "
    ";
        // line 14
        $this->loadTemplate("OroRequireJSBundle::scripts.html.twig", "OroUserBundle::layout.html.twig", 14)->display(array_merge($context, array("compressed" =>  !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array()))));
        // line 15
        echo "    <script type=\"text/javascript\">
        require(['jquery', 'oroui/js/init-layout'],
        function(\$) {
            \$(function() {
                // emulates 'document ready state' for selenium tests
                document['page-rendered'] = true;
            });
        });
    </script>
    ";
        
        $__internal_342d95327dd104df84e9de46426bcbf2a4d3e1a15c9548dd3ce88e5faf8d29f5->leave($__internal_342d95327dd104df84e9de46426bcbf2a4d3e1a15c9548dd3ce88e5faf8d29f5_prof);

    }

    // line 27
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_473c2f35cd8910b757d0212121260b0f182e5836f87c02275642943058bf863e = $this->env->getExtension("native_profiler");
        $__internal_473c2f35cd8910b757d0212121260b0f182e5836f87c02275642943058bf863e->enter($__internal_473c2f35cd8910b757d0212121260b0f182e5836f87c02275642943058bf863e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        
        $__internal_473c2f35cd8910b757d0212121260b0f182e5836f87c02275642943058bf863e->leave($__internal_473c2f35cd8910b757d0212121260b0f182e5836f87c02275642943058bf863e_prof);

    }

    // line 42
    public function block_messages($context, array $blocks = array())
    {
        $__internal_ea377ca48270cb6e803a201e9cb5e7ab5068454b86a3367f6b9fe99943abfd42 = $this->env->getExtension("native_profiler");
        $__internal_ea377ca48270cb6e803a201e9cb5e7ab5068454b86a3367f6b9fe99943abfd42->enter($__internal_ea377ca48270cb6e803a201e9cb5e7ab5068454b86a3367f6b9fe99943abfd42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 43
        echo "                ";
        echo twig_escape_filter($this->env, (isset($context["messagesContent"]) ? $context["messagesContent"] : $this->getContext($context, "messagesContent")), "html", null, true);
        echo "
            ";
        
        $__internal_ea377ca48270cb6e803a201e9cb5e7ab5068454b86a3367f6b9fe99943abfd42->leave($__internal_ea377ca48270cb6e803a201e9cb5e7ab5068454b86a3367f6b9fe99943abfd42_prof);

    }

    // line 46
    public function block_header($context, array $blocks = array())
    {
        $__internal_1009843726f016564946ac19b14469ccf136aaaaf05156fc953c1ebadf6d8205 = $this->env->getExtension("native_profiler");
        $__internal_1009843726f016564946ac19b14469ccf136aaaaf05156fc953c1ebadf6d8205->enter($__internal_1009843726f016564946ac19b14469ccf136aaaaf05156fc953c1ebadf6d8205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 47
        echo "            ";
        
        $__internal_1009843726f016564946ac19b14469ccf136aaaaf05156fc953c1ebadf6d8205->leave($__internal_1009843726f016564946ac19b14469ccf136aaaaf05156fc953c1ebadf6d8205_prof);

    }

    // line 49
    public function block_main($context, array $blocks = array())
    {
        $__internal_f4433f82f7dd2ca52991cbaafc2655fbcd446113fcc0ae7beff08ef523204f4b = $this->env->getExtension("native_profiler");
        $__internal_f4433f82f7dd2ca52991cbaafc2655fbcd446113fcc0ae7beff08ef523204f4b->enter($__internal_f4433f82f7dd2ca52991cbaafc2655fbcd446113fcc0ae7beff08ef523204f4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 50
        echo "                ";
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "            ";
        
        $__internal_f4433f82f7dd2ca52991cbaafc2655fbcd446113fcc0ae7beff08ef523204f4b->leave($__internal_f4433f82f7dd2ca52991cbaafc2655fbcd446113fcc0ae7beff08ef523204f4b_prof);

    }

    // line 50
    public function block_content($context, array $blocks = array())
    {
        $__internal_abf8cc1ad46fe96a8c04df031760710ddc60b27ff518ccfc201c2806b1ea6d9e = $this->env->getExtension("native_profiler");
        $__internal_abf8cc1ad46fe96a8c04df031760710ddc60b27ff518ccfc201c2806b1ea6d9e->enter($__internal_abf8cc1ad46fe96a8c04df031760710ddc60b27ff518ccfc201c2806b1ea6d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 51
        echo "                ";
        
        $__internal_abf8cc1ad46fe96a8c04df031760710ddc60b27ff518ccfc201c2806b1ea6d9e->leave($__internal_abf8cc1ad46fe96a8c04df031760710ddc60b27ff518ccfc201c2806b1ea6d9e_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 51,  230 => 50,  223 => 52,  220 => 50,  214 => 49,  207 => 47,  201 => 46,  191 => 43,  185 => 42,  174 => 27,  158 => 15,  156 => 14,  153 => 13,  151 => 12,  148 => 11,  142 => 9,  140 => 8,  133 => 5,  127 => 4,  116 => 53,  114 => 49,  111 => 48,  109 => 46,  106 => 45,  104 => 42,  101 => 41,  98 => 40,  95 => 39,  89 => 38,  80 => 35,  75 => 34,  70 => 33,  65 => 32,  62 => 31,  60 => 30,  48 => 27,  45 => 26,  42 => 25,  40 => 4,  31 => 2,  28 => 1,);
    }
}
