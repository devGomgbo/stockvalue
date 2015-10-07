<?php

/* OroSecurityBundle:Form:fields.html.twig */
class __TwigTemplate_0380446db5bda3dacc097849af4ce60c4c04cff367d08f207c6d483c5601489f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_acl_access_level_selector_widget' => array($this, 'block_oro_acl_access_level_selector_widget'),
            'oro_acl_privilege_identity_widget' => array($this, 'block_oro_acl_privilege_identity_widget'),
            'oro_acl_label_widget' => array($this, 'block_oro_acl_label_widget'),
            'oro_acl_object_name_widget' => array($this, 'block_oro_acl_object_name_widget'),
            'oro_acl_collection_widget' => array($this, 'block_oro_acl_collection_widget'),
            'oro_acl_privilege_widget' => array($this, 'block_oro_acl_privilege_widget'),
            'oro_acl_permission_widget' => array($this, 'block_oro_acl_permission_widget'),
            'oro_acl_permission_collection_widget' => array($this, 'block_oro_acl_permission_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7528c6f1eb55a648ce3d45bd6a87f9ab0c32be279c8b2b6ce5ec7b219d1f9f32 = $this->env->getExtension("native_profiler");
        $__internal_7528c6f1eb55a648ce3d45bd6a87f9ab0c32be279c8b2b6ce5ec7b219d1f9f32->enter($__internal_7528c6f1eb55a648ce3d45bd6a87f9ab0c32be279c8b2b6ce5ec7b219d1f9f32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSecurityBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_acl_access_level_selector_widget', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('oro_acl_privilege_identity_widget', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('oro_acl_label_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('oro_acl_object_name_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('oro_acl_collection_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('oro_acl_privilege_widget', $context, $blocks);
        // line 88
        echo "
";
        // line 89
        $this->displayBlock('oro_acl_permission_widget', $context, $blocks);
        // line 93
        echo "
";
        // line 94
        $this->displayBlock('oro_acl_permission_collection_widget', $context, $blocks);
        
        $__internal_7528c6f1eb55a648ce3d45bd6a87f9ab0c32be279c8b2b6ce5ec7b219d1f9f32->leave($__internal_7528c6f1eb55a648ce3d45bd6a87f9ab0c32be279c8b2b6ce5ec7b219d1f9f32_prof);

    }

    // line 1
    public function block_oro_acl_access_level_selector_widget($context, array $blocks = array())
    {
        $__internal_bdce9dd2139273cde604ec086c2f7bc4ba9c03f041b445002634a45bb8f97d27 = $this->env->getExtension("native_profiler");
        $__internal_bdce9dd2139273cde604ec086c2f7bc4ba9c03f041b445002634a45bb8f97d27->enter($__internal_bdce9dd2139273cde604ec086c2f7bc4ba9c03f041b445002634a45bb8f97d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_access_level_selector_widget"));

        // line 2
        echo "    ";
        $context["additionalClass"] = "";
        // line 3
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "privileges_config", array(), "any", false, true), "view_type", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "parent", array()), "vars", array()), "privileges_config", array()), "view_type", array()) != "grid"))) {
            // line 4
            echo "        ";
            $context["additionalClass"] = "span2";
            // line 5
            echo "    ";
        }
        // line 6
        echo "    <div class=\"access_level_value ";
        echo twig_escape_filter($this->env, (isset($context["additionalClass"]) ? $context["additionalClass"] : $this->getContext($context, "additionalClass")), "html", null, true);
        echo "\"
         data-identity=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["identity"]) ? $context["identity"] : $this->getContext($context, "identity")), "html", null, true);
        echo "\"
         data-selector-id=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\"
         data-selector-name=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"
         data-value=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "\"
    >
        <div class=\"access_level_value_link\">
            <a href=\"javascript:void(0);\">
                ";
        // line 14
        $context["label"] = ((( !array_key_exists("level_label", $context) || twig_test_empty((isset($context["level_label"]) ? $context["level_label"] : $this->getContext($context, "level_label"))))) ? ((        // line 15
(isset($context["translation_prefix"]) ? $context["translation_prefix"] : $this->getContext($context, "translation_prefix")) . "NONE")) : ((        // line 16
(isset($context["translation_prefix"]) ? $context["translation_prefix"] : $this->getContext($context, "translation_prefix")) . (isset($context["level_label"]) ? $context["level_label"] : $this->getContext($context, "level_label")))));
        // line 18
        echo "                ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "
            </a>
            ";
        // line 20
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 21
        echo "            ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
        </div>
        <div class=\"access_level_value_choice\" style=\"display: none\"></div>
    </div>
";
        
        $__internal_bdce9dd2139273cde604ec086c2f7bc4ba9c03f041b445002634a45bb8f97d27->leave($__internal_bdce9dd2139273cde604ec086c2f7bc4ba9c03f041b445002634a45bb8f97d27_prof);

    }

    // line 27
    public function block_oro_acl_privilege_identity_widget($context, array $blocks = array())
    {
        $__internal_ad84fc1ca51cfc8917f2843db655c3f0844752be5646bdc6b31d2988f7643394 = $this->env->getExtension("native_profiler");
        $__internal_ad84fc1ca51cfc8917f2843db655c3f0844752be5646bdc6b31d2988f7643394->enter($__internal_ad84fc1ca51cfc8917f2843db655c3f0844752be5646bdc6b31d2988f7643394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_privilege_identity_widget"));

        // line 28
        echo "    ";
        $context["class"] = "";
        // line 29
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "privileges_config", array(), "any", false, true), "view_type", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "privileges_config", array()), "view_type", array()) != "grid"))) {
            // line 30
            echo "        ";
            $context["class"] = "span8";
            // line 31
            echo "    ";
        }
        // line 32
        echo "
    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))));
        echo "
";
        
        $__internal_ad84fc1ca51cfc8917f2843db655c3f0844752be5646bdc6b31d2988f7643394->leave($__internal_ad84fc1ca51cfc8917f2843db655c3f0844752be5646bdc6b31d2988f7643394_prof);

    }

    // line 36
    public function block_oro_acl_label_widget($context, array $blocks = array())
    {
        $__internal_f8fd39c255c252c3f5a6de4a0f39b31bb43b3c576898d19ed788e8768ba4ca76 = $this->env->getExtension("native_profiler");
        $__internal_f8fd39c255c252c3f5a6de4a0f39b31bb43b3c576898d19ed788e8768ba4ca76->enter($__internal_f8fd39c255c252c3f5a6de4a0f39b31bb43b3c576898d19ed788e8768ba4ca76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_label_widget"));

        // line 37
        echo "    <strong>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        echo "</strong>
    ";
        // line 38
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 39
        echo "    ";
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
";
        
        $__internal_f8fd39c255c252c3f5a6de4a0f39b31bb43b3c576898d19ed788e8768ba4ca76->leave($__internal_f8fd39c255c252c3f5a6de4a0f39b31bb43b3c576898d19ed788e8768ba4ca76_prof);

    }

    // line 42
    public function block_oro_acl_object_name_widget($context, array $blocks = array())
    {
        $__internal_b9acaaad436f367531d3e1a3a86e3bb44e1deade57afdec8b44cae4e3df4e51d = $this->env->getExtension("native_profiler");
        $__internal_b9acaaad436f367531d3e1a3a86e3bb44e1deade57afdec8b44cae4e3df4e51d->enter($__internal_b9acaaad436f367531d3e1a3a86e3bb44e1deade57afdec8b44cae4e3df4e51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_object_name_widget"));

        // line 43
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oid", array()), 'widget');
        echo "
    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
";
        
        $__internal_b9acaaad436f367531d3e1a3a86e3bb44e1deade57afdec8b44cae4e3df4e51d->leave($__internal_b9acaaad436f367531d3e1a3a86e3bb44e1deade57afdec8b44cae4e3df4e51d_prof);

    }

    // line 47
    public function block_oro_acl_collection_widget($context, array $blocks = array())
    {
        $__internal_4ee99e818834d46029348ef3d6ff2f0f7516330312fe57abc7ed2f3c2db1367b = $this->env->getExtension("native_profiler");
        $__internal_4ee99e818834d46029348ef3d6ff2f0f7516330312fe57abc7ed2f3c2db1367b->enter($__internal_4ee99e818834d46029348ef3d6ff2f0f7516330312fe57abc7ed2f3c2db1367b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_collection_widget"));

        // line 48
        echo "    <div data-page-component-module=\"";
        echo twig_escape_filter($this->env, (isset($context["page_component_module"]) ? $context["page_component_module"] : $this->getContext($context, "page_component_module")));
        echo "\" data-page-component-options=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["page_component_options"]) ? $context["page_component_options"] : $this->getContext($context, "page_component_options"))));
        echo "\">
        ";
        // line 49
        if (($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "view_type", array()) == "grid")) {
            // line 50
            echo "            <table class=\"table table-striped acl-table\">
                <tbody>
                <tr>
                    <th>
                        &nbsp;
                    </th>
                    ";
            // line 56
            $context["width"] = twig_number_format_filter($this->env, ((100 / (twig_length_filter($this->env, $this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array")) + 1)) - 1), 0);
            // line 57
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 58
                echo "                        <th width=\"";
                echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
                echo "%\">
                            ";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["field"]), "html", null, true);
                echo "
                        </th>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                </tr>
                ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 64
                echo "                    ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 69
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 70
                echo "                <div class=\"security-row row-fluid\">
                    ";
                // line 71
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        ";
        }
        // line 75
        echo "    </div>
";
        
        $__internal_4ee99e818834d46029348ef3d6ff2f0f7516330312fe57abc7ed2f3c2db1367b->leave($__internal_4ee99e818834d46029348ef3d6ff2f0f7516330312fe57abc7ed2f3c2db1367b_prof);

    }

    // line 78
    public function block_oro_acl_privilege_widget($context, array $blocks = array())
    {
        $__internal_808344bdc0f155e07de7abb0a3e3f3c9e7d8d745a346daa381131041032c3b53 = $this->env->getExtension("native_profiler");
        $__internal_808344bdc0f155e07de7abb0a3e3f3c9e7d8d745a346daa381131041032c3b53->enter($__internal_808344bdc0f155e07de7abb0a3e3f3c9e7d8d745a346daa381131041032c3b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_privilege_widget"));

        // line 79
        echo "     ";
        ob_start();
        // line 80
        echo "         <tr ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "identity", array()), "name", array()) == "(default)")) {
            echo "class=\"default-field\"";
        }
        echo ">
             <td>
                 ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "identity", array()), 'widget');
        echo "
             </td>
             ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "permissions", array()), 'widget');
        echo "
         </tr>
     ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_808344bdc0f155e07de7abb0a3e3f3c9e7d8d745a346daa381131041032c3b53->leave($__internal_808344bdc0f155e07de7abb0a3e3f3c9e7d8d745a346daa381131041032c3b53_prof);

    }

    // line 89
    public function block_oro_acl_permission_widget($context, array $blocks = array())
    {
        $__internal_93f0c098cde6b0fe9cd44167632a7310caf6bd1e85934c7bcd64ac7106e53a0d = $this->env->getExtension("native_profiler");
        $__internal_93f0c098cde6b0fe9cd44167632a7310caf6bd1e85934c7bcd64ac7106e53a0d->enter($__internal_93f0c098cde6b0fe9cd44167632a7310caf6bd1e85934c7bcd64ac7106e53a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_permission_widget"));

        // line 90
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "accessLevel", array()), 'widget');
        echo "
    ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
";
        
        $__internal_93f0c098cde6b0fe9cd44167632a7310caf6bd1e85934c7bcd64ac7106e53a0d->leave($__internal_93f0c098cde6b0fe9cd44167632a7310caf6bd1e85934c7bcd64ac7106e53a0d_prof);

    }

    // line 94
    public function block_oro_acl_permission_collection_widget($context, array $blocks = array())
    {
        $__internal_70f28cd56d757494f3f984229b2977fff9f0aeaed574a7abcdda2b832a57fde9 = $this->env->getExtension("native_profiler");
        $__internal_70f28cd56d757494f3f984229b2977fff9f0aeaed574a7abcdda2b832a57fde9->enter($__internal_70f28cd56d757494f3f984229b2977fff9f0aeaed574a7abcdda2b832a57fde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_acl_permission_collection_widget"));

        // line 95
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["privileges_config"]) ? $context["privileges_config"] : $this->getContext($context, "privileges_config")), "permissions", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 96
            echo "        <td>
            ";
            // line 97
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["permission"]) {
                // line 98
                echo "                ";
                if (($this->getAttribute($this->getAttribute($this->getAttribute($context["permission"], "vars", array()), "value", array()), "name", array()) == $context["field"])) {
                    // line 99
                    echo "                    ";
                    echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["permission"], 'widget');
                    echo "
                ";
                }
                // line 101
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['permission'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "            &nbsp;
        </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_70f28cd56d757494f3f984229b2977fff9f0aeaed574a7abcdda2b832a57fde9->leave($__internal_70f28cd56d757494f3f984229b2977fff9f0aeaed574a7abcdda2b832a57fde9_prof);

    }

    public function getTemplateName()
    {
        return "OroSecurityBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  391 => 102,  385 => 101,  379 => 99,  376 => 98,  372 => 97,  369 => 96,  364 => 95,  358 => 94,  349 => 91,  344 => 90,  338 => 89,  327 => 84,  322 => 82,  314 => 80,  311 => 79,  305 => 78,  297 => 75,  294 => 74,  285 => 71,  282 => 70,  277 => 69,  272 => 66,  263 => 64,  259 => 63,  256 => 62,  247 => 59,  242 => 58,  237 => 57,  235 => 56,  227 => 50,  225 => 49,  218 => 48,  212 => 47,  203 => 44,  198 => 43,  192 => 42,  182 => 39,  180 => 38,  175 => 37,  169 => 36,  160 => 33,  157 => 32,  154 => 31,  151 => 30,  148 => 29,  145 => 28,  139 => 27,  126 => 21,  124 => 20,  118 => 18,  116 => 16,  115 => 15,  114 => 14,  107 => 10,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  87 => 5,  84 => 4,  81 => 3,  78 => 2,  72 => 1,  65 => 94,  62 => 93,  60 => 89,  57 => 88,  55 => 78,  52 => 77,  50 => 47,  47 => 46,  45 => 42,  42 => 41,  40 => 36,  37 => 35,  35 => 27,  32 => 26,  30 => 1,);
    }
}
