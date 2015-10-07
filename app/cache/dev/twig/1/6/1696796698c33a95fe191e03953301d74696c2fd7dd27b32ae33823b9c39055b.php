<?php

/* OroSecurityBundle:Organization:selector.html.twig */
class __TwigTemplate_1696796698c33a95fe191e03953301d74696c2fd7dd27b32ae33823b9c39055b extends Twig_Template
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
        $__internal_637f866d74ef50ebbdb874c350eca3ba9f37933f84875994e9b528c9a9e82225 = $this->env->getExtension("native_profiler");
        $__internal_637f866d74ef50ebbdb874c350eca3ba9f37933f84875994e9b528c9a9e82225->enter($__internal_637f866d74ef50ebbdb874c350eca3ba9f37933f84875994e9b528c9a9e82225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSecurityBundle:Organization:selector.html.twig"));

        // line 1
        $context["curr_organization"] = $this->env->getExtension('oro_security_organization_extension')->getCurrentOrganization();
        // line 2
        $context["organizations"] = $this->env->getExtension('oro_security_organization_extension')->getOrganizations();
        // line 3
        echo "
";
        // line 4
        ob_start();
        // line 5
        ob_start();
        // line 6
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("organization_name", $context)) ? (_twig_default_filter((isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "organization_name")) : ("organization_name")), array());
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        $context["organization_name"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 9
        echo "
";
        // line 10
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 11
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations"))) > 1)) {
                // line 12
                echo "        <div class=\"nav top-search fix_logo\">
            <div class=\"dropdown header-utility-dropdown\">
                <i class=\"icon-ellipsis-vertical dropdown-toggle btn-organization-switcher\" data-toggle=\"dropdown\"></i>
                <ul class=\"dropdown-menu dropdown-organization-switcher\">
                    ";
                // line 16
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                    // line 17
                    echo "                        <li>
                            ";
                    // line 18
                    if (((isset($context["curr_organization"]) ? $context["curr_organization"] : $this->getContext($context, "curr_organization")) && ($this->getAttribute((isset($context["curr_organization"]) ? $context["curr_organization"] : $this->getContext($context, "curr_organization")), "getId", array(), "method") == $this->getAttribute($context["organization"], "id", array())))) {
                        // line 19
                        echo "                            <span class=\"selected\"><b>";
                        echo $this->getAttribute($context["organization"], "name", array());
                        echo "</b></span>
                            ";
                    } else {
                        // line 21
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_security_switch_organization", array("id" => $this->getAttribute($context["organization"], "id", array()))), "html", null, true);
                        echo "\"
                               class=\"organization-switcher no-hash\">
                                ";
                        // line 23
                        echo $this->getAttribute($context["organization"], "name", array());
                        echo "
                            </a>
                            ";
                    }
                    // line 26
                    echo "                        </li>
                        ";
                    // line 27
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 28
                        echo "                        <li class=\"divider\"><span></span></li>
                        ";
                    }
                    // line 30
                    echo "                    ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "                </ul>
            </div>
            ";
                // line 33
                echo $this->getAttribute($this, "organization_name_and_logo", array(0 => (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name"))), "method");
                echo "
        </div>
        <script type=\"text/javascript\">
            require(['orosecurity/js/init-organization-selector'])
        </script>
    ";
            } else {
                // line 39
                echo "        ";
                echo $this->getAttribute($this, "organization_name_and_logo", array(0 => (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name"))), "method");
                echo "
    ";
            }
        } else {
            // line 42
            echo "    ";
            // line 43
            echo "    ";
            if ((twig_length_filter($this->env, (isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations"))) > 1)) {
                // line 44
                echo "        <ul class=\"nav organization-switcher\">
            <li class=\"dropdown\">
                <h1 class=\"logo dropdown-toggle\" data-toggle=\"dropdown\">
                    <span>
                        <a href=\"javascript: void(0);\">
                            ";
                // line 49
                if ($this->env->getExtension('oro_theme')->getThemeLogo()) {
                    // line 50
                    echo "                                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeLogo()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, trim(strip_tags((isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")))), "html", null, true);
                    echo "\">
                            ";
                } else {
                    // line 52
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
                }
                // line 54
                echo "                        </a>
                        <span class=\"caret\"></span>
                    </span>
                </h1>
                <ul class=\"dropdown-menu\">
                    ";
                // line 59
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["organizations"]) ? $context["organizations"] : $this->getContext($context, "organizations")));
                foreach ($context['_seq'] as $context["_key"] => $context["organization"]) {
                    // line 60
                    echo "                        <li ";
                    if (((isset($context["curr_organization"]) ? $context["curr_organization"] : $this->getContext($context, "curr_organization")) && ($this->getAttribute((isset($context["curr_organization"]) ? $context["curr_organization"] : $this->getContext($context, "curr_organization")), "getId", array(), "method") == $this->getAttribute($context["organization"], "id", array())))) {
                        echo "class=\"current\"";
                    }
                    echo ">
                            <a href=\"";
                    // line 61
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oro_security_switch_organization", array("id" => $this->getAttribute($context["organization"], "id", array()))), "html", null, true);
                    echo "\" class=\"no-hash\">
                                ";
                    // line 62
                    echo $this->getAttribute($context["organization"], "name", array());
                    echo "
                            </a>
                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['organization'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 66
                echo "                </ul>
            </li>
        </ul>
        <script type=\"text/javascript\">
            require(['orosecurity/js/init-organization-selector'])
        </script>
    ";
            } else {
                // line 73
                echo "        <h1 class=\"logo\">
            <span>
                <a href=\"";
                // line 75
                echo $this->env->getExtension('routing')->getPath("oro_default");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, trim(strip_tags((isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")))), "html", null, true);
                echo "\">
                    ";
                // line 76
                if ($this->env->getExtension('oro_theme')->getThemeLogo()) {
                    // line 77
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeLogo()), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, trim(strip_tags((isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")))), "html", null, true);
                    echo "\">
                    ";
                } else {
                    // line 79
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
                }
                // line 81
                echo "                </a>
            </span>
        </h1>
    ";
            }
        }
        // line 86
        echo "
";
        
        $__internal_637f866d74ef50ebbdb874c350eca3ba9f37933f84875994e9b528c9a9e82225->leave($__internal_637f866d74ef50ebbdb874c350eca3ba9f37933f84875994e9b528c9a9e82225_prof);

    }

    // line 87
    public function getorganization_name_and_logo($__organization_name__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "organization_name" => $__organization_name__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_276c644a516ba26c0e40b5b7ed58dc284ef0986107737143029de5e915488c1c = $this->env->getExtension("native_profiler");
            $__internal_276c644a516ba26c0e40b5b7ed58dc284ef0986107737143029de5e915488c1c->enter($__internal_276c644a516ba26c0e40b5b7ed58dc284ef0986107737143029de5e915488c1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "organization_name_and_logo"));

            // line 88
            echo "    ";
            if (twig_length_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")))) {
                // line 89
                echo "        ";
                $context["logo"] = $this->env->getExtension('oro_theme')->getThemeLogo();
                // line 90
                echo "        <h1 class=\"logo logo-";
                echo (((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo"))) ? ("image") : ("text"));
                echo "\">
            <a href=\"";
                // line 91
                echo $this->env->getExtension('routing')->getPath("oro_default");
                echo "\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
                echo "\">
                ";
                // line 92
                if ((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo"))) {
                    // line 93
                    echo "                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["logo"]) ? $context["logo"] : $this->getContext($context, "logo"))), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
                    echo "\">
                ";
                } else {
                    // line 95
                    echo twig_escape_filter($this->env, (isset($context["organization_name"]) ? $context["organization_name"] : $this->getContext($context, "organization_name")), "html", null, true);
                }
                // line 97
                echo "            </a>
        </h1>
    ";
            } else {
                // line 100
                echo "        <span class=\"logo-placeholder\"></span>
    ";
            }
            
            $__internal_276c644a516ba26c0e40b5b7ed58dc284ef0986107737143029de5e915488c1c->leave($__internal_276c644a516ba26c0e40b5b7ed58dc284ef0986107737143029de5e915488c1c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Organization:selector.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 100,  284 => 97,  281 => 95,  273 => 93,  271 => 92,  265 => 91,  260 => 90,  257 => 89,  254 => 88,  239 => 87,  231 => 86,  224 => 81,  221 => 79,  213 => 77,  211 => 76,  205 => 75,  201 => 73,  192 => 66,  182 => 62,  178 => 61,  171 => 60,  167 => 59,  160 => 54,  157 => 52,  149 => 50,  147 => 49,  140 => 44,  137 => 43,  135 => 42,  128 => 39,  119 => 33,  115 => 31,  101 => 30,  97 => 28,  95 => 27,  92 => 26,  86 => 23,  80 => 21,  74 => 19,  72 => 18,  69 => 17,  52 => 16,  46 => 12,  43 => 11,  41 => 10,  38 => 9,  33 => 6,  31 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }
}
