<?php

/* OroUIBundle:Form:translatable.html.twig */
class __TwigTemplate_7ec69f5e39ce8df241144c42efa3f21a29ffe26df796a52d830ddef1e2375d08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'a2lix_translations_widget' => array($this, 'block_a2lix_translations_widget'),
            'a2lix_translations_gedmo_widget' => array($this, 'block_a2lix_translations_gedmo_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b720d1ce8a87fad1be7abf88ef6460a8b11cb49934bca6d4f8d6262cf7fff2f9 = $this->env->getExtension("native_profiler");
        $__internal_b720d1ce8a87fad1be7abf88ef6460a8b11cb49934bca6d4f8d6262cf7fff2f9->enter($__internal_b720d1ce8a87fad1be7abf88ef6460a8b11cb49934bca6d4f8d6262cf7fff2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Form:translatable.html.twig"));

        // line 1
        $this->displayBlock('a2lix_translations_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('a2lix_translations_gedmo_widget', $context, $blocks);
        
        $__internal_b720d1ce8a87fad1be7abf88ef6460a8b11cb49934bca6d4f8d6262cf7fff2f9->leave($__internal_b720d1ce8a87fad1be7abf88ef6460a8b11cb49934bca6d4f8d6262cf7fff2f9_prof);

    }

    // line 1
    public function block_a2lix_translations_widget($context, array $blocks = array())
    {
        $__internal_bba3ee6daccf4c4f17c35960fe2cd95dc82fcaad8ee7a6fa3ab71ccffe8f20a0 = $this->env->getExtension("native_profiler");
        $__internal_bba3ee6daccf4c4f17c35960fe2cd95dc82fcaad8ee7a6fa3ab71ccffe8f20a0->enter($__internal_bba3ee6daccf4c4f17c35960fe2cd95dc82fcaad8ee7a6fa3ab71ccffe8f20a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_widget"));

        // line 2
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 5
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 6
            echo "
            <li ";
            // line 7
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "class=\"active\"";
            }
            echo ">
                <a href=\".a2lix_translationsFields-";
            // line 8
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo "\" data-toggle=\"tab\">
                   ";
            // line 9
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
            echo "
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 17
            echo "            ";
            $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
            // line 18
            echo "
            <div class=\"a2lix_translationsFields-";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
            echo " tab-pane ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                echo "active";
            }
            echo "\">
                ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>
    </div>
";
        
        $__internal_bba3ee6daccf4c4f17c35960fe2cd95dc82fcaad8ee7a6fa3ab71ccffe8f20a0->leave($__internal_bba3ee6daccf4c4f17c35960fe2cd95dc82fcaad8ee7a6fa3ab71ccffe8f20a0_prof);

    }

    // line 27
    public function block_a2lix_translations_gedmo_widget($context, array $blocks = array())
    {
        $__internal_f6a33bf5d01bd747103e66393cdea8cedb7f21ba99b88a7dde3aa767b64a2292 = $this->env->getExtension("native_profiler");
        $__internal_f6a33bf5d01bd747103e66393cdea8cedb7f21ba99b88a7dde3aa767b64a2292->enter($__internal_f6a33bf5d01bd747103e66393cdea8cedb7f21ba99b88a7dde3aa767b64a2292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "a2lix_translations_gedmo_widget"));

        // line 28
        echo "    <div class=\"a2lix_translations tabbable\">
        <ul class=\"a2lix_translationsLocales nav nav-tabs\">
        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 31
            echo "            ";
            $context["isDefaultLocale"] = ("defaultLocale" == $this->getAttribute($this->getAttribute($context["translationsLocales"], "vars", array()), "name", array()));
            // line 32
            echo "
            ";
            // line 33
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 34
                echo "                ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 35
                echo "
                <li ";
                // line 36
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "class=\"active\"";
                }
                echo ">
                    <a href=\"javascript:void(0);\" data-target=\".a2lix_translationsFields-";
                // line 37
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo "\" data-toggle=\"tab\">
                        ";
                // line 38
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))), "html", null, true);
                echo " ";
                if ((isset($context["isDefaultLocale"]) ? $context["isDefaultLocale"] : $this->getContext($context, "isDefaultLocale"))) {
                    echo "[Default]";
                }
                // line 39
                echo "                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </ul>

        <div class=\"a2lix_translationsFields tab-content\">
        ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsLocales"]) {
            // line 47
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["translationsLocales"]);
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 48
                echo "                ";
                $context["locale"] = $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array());
                // line 49
                echo "
                <div class=\"a2lix_translationsFields-";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), "html", null, true);
                echo " tab-pane ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()) == (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")))) {
                    echo "active";
                }
                echo "\">
                    ";
                // line 51
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["translationsFields"], 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsLocales'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        </div>
    </div>
";
        
        $__internal_f6a33bf5d01bd747103e66393cdea8cedb7f21ba99b88a7dde3aa767b64a2292->leave($__internal_f6a33bf5d01bd747103e66393cdea8cedb7f21ba99b88a7dde3aa767b64a2292_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Form:translatable.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  220 => 55,  214 => 54,  205 => 51,  197 => 50,  194 => 49,  191 => 48,  186 => 47,  182 => 46,  177 => 43,  171 => 42,  163 => 39,  157 => 38,  153 => 37,  147 => 36,  144 => 35,  141 => 34,  137 => 33,  134 => 32,  131 => 31,  127 => 30,  123 => 28,  117 => 27,  108 => 23,  99 => 20,  91 => 19,  88 => 18,  85 => 17,  81 => 16,  76 => 13,  66 => 9,  62 => 8,  56 => 7,  53 => 6,  50 => 5,  46 => 4,  42 => 2,  36 => 1,  29 => 27,  26 => 26,  24 => 1,);
    }
}
