<?php

/* OroAddressBundle:Include:fields.html.twig */
class __TwigTemplate_bf30f44668f93376bc6e02f32d823cad31513dcfb103aa5b5598e13ac356fd3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_region_widget' => array($this, 'block_oro_region_widget'),
            'oro_email_widget' => array($this, 'block_oro_email_widget'),
            'oro_phone_widget' => array($this, 'block_oro_phone_widget'),
            'oro_address_widget' => array($this, 'block_oro_address_widget'),
            'oro_address_rows' => array($this, 'block_oro_address_rows'),
            'oro_typed_address_widget' => array($this, 'block_oro_typed_address_widget'),
            'oro_typed_address_rows' => array($this, 'block_oro_typed_address_rows'),
            'oro_address_collection_widget' => array($this, 'block_oro_address_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92695fa6d9633b9be00e19f82b733ef9e29dd2f87424b43ba1bfbe5ae2456b0f = $this->env->getExtension("native_profiler");
        $__internal_92695fa6d9633b9be00e19f82b733ef9e29dd2f87424b43ba1bfbe5ae2456b0f->enter($__internal_92695fa6d9633b9be00e19f82b733ef9e29dd2f87424b43ba1bfbe5ae2456b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroAddressBundle:Include:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_region_widget', $context, $blocks);
        // line 58
        echo "
";
        // line 59
        $this->displayBlock('oro_email_widget', $context, $blocks);
        // line 77
        echo "
";
        // line 78
        $this->displayBlock('oro_phone_widget', $context, $blocks);
        // line 96
        echo "
";
        // line 97
        $this->displayBlock('oro_address_widget', $context, $blocks);
        // line 106
        echo "
";
        // line 107
        $this->displayBlock('oro_address_rows', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('oro_typed_address_widget', $context, $blocks);
        // line 129
        echo "
";
        // line 130
        $this->displayBlock('oro_typed_address_rows', $context, $blocks);
        // line 135
        echo "
";
        // line 136
        $this->displayBlock('oro_address_collection_widget', $context, $blocks);
        // line 142
        echo "
";
        
        $__internal_92695fa6d9633b9be00e19f82b733ef9e29dd2f87424b43ba1bfbe5ae2456b0f->leave($__internal_92695fa6d9633b9be00e19f82b733ef9e29dd2f87424b43ba1bfbe5ae2456b0f_prof);

    }

    // line 1
    public function block_oro_region_widget($context, array $blocks = array())
    {
        $__internal_cd1cd7cfe92e05018b80204de0b34d465a18114c461559746404a48f37b5bd40 = $this->env->getExtension("native_profiler");
        $__internal_cd1cd7cfe92e05018b80204de0b34d465a18114c461559746404a48f37b5bd40->enter($__internal_cd1cd7cfe92e05018b80204de0b34d465a18114c461559746404a48f37b5bd40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_region_widget"));

        // line 2
        echo "    ";
        // line 3
        echo "    ";
        $context["_block"] = $this->renderBlock("oro_region_updater_js", $context, $blocks);
        // line 4
        echo "    ";
        if (twig_test_empty((isset($context["_block"]) ? $context["_block"] : $this->getContext($context, "_block")))) {
            // line 5
            echo "        ";
            $this->loadTemplate("OroAddressBundle:Include:javascript.html.twig", "OroAddressBundle:Include:fields.html.twig", 5)->display($context);
            // line 6
            echo "        ";
            $this->displayBlock("oro_region_updater_js", $context, $blocks);
            echo "
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if (( !array_key_exists("country_field", $context) || twig_test_empty((isset($context["country_field"]) ? $context["country_field"] : $this->getContext($context, "country_field"))))) {
            // line 10
            echo "        ";
            $context["country_field"] = strtr((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), array("region" => "country"));
            // line 11
            echo "    ";
        }
        // line 12
        echo "    ";
        $context["country_field"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), (isset($context["country_field"]) ? $context["country_field"] : $this->getContext($context, "country_field")), array(), "array");
        // line 13
        echo "
    ";
        // line 14
        if (( !array_key_exists("region_text_field", $context) || twig_test_empty((isset($context["region_text_field"]) ? $context["region_text_field"] : $this->getContext($context, "region_text_field"))))) {
            // line 15
            echo "        ";
            $context["region_text_field"] = ((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")) . "_text");
            // line 16
            echo "    ";
        }
        // line 17
        echo "    ";
        $context["region_text_field"] = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), (isset($context["region_text_field"]) ? $context["region_text_field"] : $this->getContext($context, "region_text_field")), array(), "array");
        // line 18
        echo "
    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("data-validation" => twig_jsonencode_filter(array("NotBlank" => null)))));
        echo "
    ";
        // line 20
        $context["showSelect"] = ( !twig_test_empty((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) && twig_test_empty($this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : $this->getContext($context, "region_text_field")), "vars", array()), "value", array())));
        // line 21
        echo "
    <script type=\"text/javascript\">
        require(['jquery', 'oroaddress/js/region/view', 'oroaddress/js/region/collection'],
        function(\$, RegionView, RegionCollection){
            \$(function() {
                /** @type oro.region.View */
                new RegionView({
                    el: \$('#";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["country_field"]) ? $context["country_field"] : $this->getContext($context, "country_field")), "vars", array()), "id", array()), "html", null, true);
        echo "'),
                    target: \$('#";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "'),
                    simpleEl: \$('#";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : $this->getContext($context, "region_text_field")), "vars", array()), "id", array()), "html", null, true);
        echo "'),
                    collection: new RegionCollection(),
                    showSelect: ";
        // line 32
        echo twig_jsonencode_filter((isset($context["showSelect"]) ? $context["showSelect"] : $this->getContext($context, "showSelect")));
        echo "
                });
            });
        });
    </script>

    <style type=\"text/css\">
        ";
        // line 39
        if ((isset($context["showSelect"]) ? $context["showSelect"] : $this->getContext($context, "showSelect"))) {
            // line 40
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " {
                display: block;
            }

            #";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : $this->getContext($context, "region_text_field")), "vars", array()), "id", array()), "html", null, true);
            echo " {
                display: none;
            }
        ";
        } else {
            // line 48
            echo "            #";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo " {
                display: none;
            }

            #";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["region_text_field"]) ? $context["region_text_field"] : $this->getContext($context, "region_text_field")), "vars", array()), "id", array()), "html", null, true);
            echo " {
                display: block;
            }
        ";
        }
        // line 56
        echo "    </style>
";
        
        $__internal_cd1cd7cfe92e05018b80204de0b34d465a18114c461559746404a48f37b5bd40->leave($__internal_cd1cd7cfe92e05018b80204de0b34d465a18114c461559746404a48f37b5bd40_prof);

    }

    // line 59
    public function block_oro_email_widget($context, array $blocks = array())
    {
        $__internal_9f90b537b0a1713cad1bb5412347b32c6c777f79c20bf863cff0e30b6d5307db = $this->env->getExtension("native_profiler");
        $__internal_9f90b537b0a1713cad1bb5412347b32c6c777f79c20bf863cff0e30b6d5307db->enter($__internal_9f90b537b0a1713cad1bb5412347b32c6c777f79c20bf863cff0e30b6d5307db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_email_widget"));

        // line 60
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
            <label class=\"add-on\" title=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary", array()), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
        ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 69
                echo "            <div class=\"collection-element-other clearfix\">
                ";
                // line 70
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("title" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))));
                echo "
            </div>
            ";
                // line 72
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </div>
    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        
        $__internal_9f90b537b0a1713cad1bb5412347b32c6c777f79c20bf863cff0e30b6d5307db->leave($__internal_9f90b537b0a1713cad1bb5412347b32c6c777f79c20bf863cff0e30b6d5307db_prof);

    }

    // line 78
    public function block_oro_phone_widget($context, array $blocks = array())
    {
        $__internal_514d052f0d63b5134f82d1c003099d2f61ac8a8b94f4df8d49efdf787c025e13 = $this->env->getExtension("native_profiler");
        $__internal_514d052f0d63b5134f82d1c003099d2f61ac8a8b94f4df8d49efdf787c025e13->enter($__internal_514d052f0d63b5134f82d1c003099d2f61ac8a8b94f4df8d49efdf787c025e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_phone_widget"));

        // line 79
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append collection-element-primary\">
            ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'widget');
        echo "
            <label class=\"add-on\" title=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Primary"), "html", null, true);
        echo "\">
                ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary", array()), 'widget');
        echo "
            </label>
        </div>
        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone", array()), 'errors');
        echo "
        ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 88
                echo "            <div class=\"collection-element-other clearfix\">
                ";
                // line 89
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget', array("attr" => array("title" => $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "label", array()))));
                echo "
            </div>
            ";
                // line 91
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'errors');
                echo "
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "    </div>
    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        
        $__internal_514d052f0d63b5134f82d1c003099d2f61ac8a8b94f4df8d49efdf787c025e13->leave($__internal_514d052f0d63b5134f82d1c003099d2f61ac8a8b94f4df8d49efdf787c025e13_prof);

    }

    // line 97
    public function block_oro_address_widget($context, array $blocks = array())
    {
        $__internal_b1ddc056dd9a413203f909ffa7df66d6800e1e03320a0f3993bf104f64cec907 = $this->env->getExtension("native_profiler");
        $__internal_b1ddc056dd9a413203f909ffa7df66d6800e1e03320a0f3993bf104f64cec907->enter($__internal_b1ddc056dd9a413203f909ffa7df66d6800e1e03320a0f3993bf104f64cec907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_address_widget"));

        // line 98
        echo "    ";
        if ( !twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 99
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 100
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
        </div>
    ";
        } else {
            // line 103
            echo "        ";
            $this->displayBlock("oro_address_rows", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_b1ddc056dd9a413203f909ffa7df66d6800e1e03320a0f3993bf104f64cec907->leave($__internal_b1ddc056dd9a413203f909ffa7df66d6800e1e03320a0f3993bf104f64cec907_prof);

    }

    // line 107
    public function block_oro_address_rows($context, array $blocks = array())
    {
        $__internal_4042889afc5ef5d7ab1647a1e006088de5f65d12efc1ece5284b3ea9a5b0a5be = $this->env->getExtension("native_profiler");
        $__internal_4042889afc5ef5d7ab1647a1e006088de5f65d12efc1ece5284b3ea9a5b0a5be->enter($__internal_4042889afc5ef5d7ab1647a1e006088de5f65d12efc1ece5284b3ea9a5b0a5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_address_rows"));

        // line 108
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'row');
        echo "
    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row');
        echo "
    ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "namePrefix", array()), 'row');
        echo "
    ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'row');
        echo "
    ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "middleName", array()), 'row');
        echo "
    ";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'row');
        echo "
    ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nameSuffix", array()), 'row');
        echo "
    ";
        // line 115
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "organization", array()), 'row');
        echo "
    ";
        // line 116
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "country", array()), 'row');
        echo "
    ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street", array()), 'row');
        echo "
    ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "street2", array()), 'row');
        echo "
    ";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'row');
        echo "
    ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region_text", array()), 'row');
        echo "
    ";
        // line 121
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), 'row');
        echo "
    ";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postalCode", array()), 'row');
        echo "
    ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        
        $__internal_4042889afc5ef5d7ab1647a1e006088de5f65d12efc1ece5284b3ea9a5b0a5be->leave($__internal_4042889afc5ef5d7ab1647a1e006088de5f65d12efc1ece5284b3ea9a5b0a5be_prof);

    }

    // line 126
    public function block_oro_typed_address_widget($context, array $blocks = array())
    {
        $__internal_505585df17f5d04751090fe782241e80519ceeac99f43fa2d83788701dde6a6d = $this->env->getExtension("native_profiler");
        $__internal_505585df17f5d04751090fe782241e80519ceeac99f43fa2d83788701dde6a6d->enter($__internal_505585df17f5d04751090fe782241e80519ceeac99f43fa2d83788701dde6a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_typed_address_widget"));

        // line 127
        echo "    ";
        $this->displayBlock("oro_typed_address_rows", $context, $blocks);
        echo "
";
        
        $__internal_505585df17f5d04751090fe782241e80519ceeac99f43fa2d83788701dde6a6d->leave($__internal_505585df17f5d04751090fe782241e80519ceeac99f43fa2d83788701dde6a6d_prof);

    }

    // line 130
    public function block_oro_typed_address_rows($context, array $blocks = array())
    {
        $__internal_804a8b8950e8b56fbe3fcb4fbdfd58b655badb23fa5d347c265714b8e96d8276 = $this->env->getExtension("native_profiler");
        $__internal_804a8b8950e8b56fbe3fcb4fbdfd58b655badb23fa5d347c265714b8e96d8276->enter($__internal_804a8b8950e8b56fbe3fcb4fbdfd58b655badb23fa5d347c265714b8e96d8276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_typed_address_rows"));

        // line 131
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "types", array()), 'row');
        echo "
    ";
        // line 132
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary", array()), 'row');
        echo "
    ";
        // line 133
        $this->displayBlock("oro_address_rows", $context, $blocks);
        echo "
";
        
        $__internal_804a8b8950e8b56fbe3fcb4fbdfd58b655badb23fa5d347c265714b8e96d8276->leave($__internal_804a8b8950e8b56fbe3fcb4fbdfd58b655badb23fa5d347c265714b8e96d8276_prof);

    }

    // line 136
    public function block_oro_address_collection_widget($context, array $blocks = array())
    {
        $__internal_24084f977947ef45d623d455478f2a1a5d22fb60a28aaee521840b27333c977a = $this->env->getExtension("native_profiler");
        $__internal_24084f977947ef45d623d455478f2a1a5d22fb60a28aaee521840b27333c977a->enter($__internal_24084f977947ef45d623d455478f2a1a5d22fb60a28aaee521840b27333c977a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_address_collection_widget"));

        // line 137
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "class", array()) . " ")) : ("")) . "oro-address-collection")));
        // line 138
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 139
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_collection");
        // line 140
        echo "    ";
        echo $this->getAttribute($this, "oro_collection_validate_types_js", array(0 => $context), "method");
        echo "
";
        
        $__internal_24084f977947ef45d623d455478f2a1a5d22fb60a28aaee521840b27333c977a->leave($__internal_24084f977947ef45d623d455478f2a1a5d22fb60a28aaee521840b27333c977a_prof);

    }

    // line 143
    public function getoro_collection_validate_types_js($__context__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_918fcade8adc191cb0db624e8d709a4fe17087e0573233820c338bb632540160 = $this->env->getExtension("native_profiler");
            $__internal_918fcade8adc191cb0db624e8d709a4fe17087e0573233820c338bb632540160->enter($__internal_918fcade8adc191cb0db624e8d709a4fe17087e0573233820c338bb632540160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "oro_collection_validate_types_js"));

            // line 144
            echo "    ";
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "form", array(), "any", false, true), "vars", array(), "any", false, true), "prototype", array(), "any", false, true), "types", array(), "any", true, true)) {
                // line 145
                echo "        <script type=\"text/javascript\">
            require(['jquery'],
            function(\$){
                \$(function() {
                    var container = \$('#";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "id", array()), "html", null, true);
                echo "');
                    /**
                     * Allow only 1 item with selected type
                     */
                    container.on('click', '[name\$=\"[types][]\"]', function() {
                        if (this.checked) {
                            container.find('[name\$=\"[types][]\"][value=\"' + this.value + '\"]').each(function (idx, el) {
                                el.checked = false;
                            });
                            this.checked = true;
                        }
                    });
                });
            });
        </script>
    ";
            }
            
            $__internal_918fcade8adc191cb0db624e8d709a4fe17087e0573233820c338bb632540160->leave($__internal_918fcade8adc191cb0db624e8d709a4fe17087e0573233820c338bb632540160_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroAddressBundle:Include:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 149,  530 => 145,  527 => 144,  512 => 143,  502 => 140,  500 => 139,  495 => 138,  492 => 137,  486 => 136,  477 => 133,  473 => 132,  468 => 131,  462 => 130,  452 => 127,  446 => 126,  437 => 123,  433 => 122,  429 => 121,  425 => 120,  421 => 119,  417 => 118,  413 => 117,  409 => 116,  405 => 115,  401 => 114,  397 => 113,  393 => 112,  389 => 111,  385 => 110,  381 => 109,  376 => 108,  370 => 107,  359 => 103,  353 => 100,  348 => 99,  345 => 98,  339 => 97,  330 => 94,  327 => 93,  318 => 91,  313 => 89,  310 => 88,  305 => 87,  301 => 86,  295 => 83,  291 => 82,  287 => 81,  279 => 79,  273 => 78,  264 => 75,  261 => 74,  252 => 72,  247 => 70,  244 => 69,  239 => 68,  235 => 67,  229 => 64,  225 => 63,  221 => 62,  213 => 60,  207 => 59,  199 => 56,  192 => 52,  184 => 48,  177 => 44,  169 => 40,  167 => 39,  157 => 32,  152 => 30,  148 => 29,  144 => 28,  135 => 21,  133 => 20,  129 => 19,  126 => 18,  123 => 17,  120 => 16,  117 => 15,  115 => 14,  112 => 13,  109 => 12,  106 => 11,  103 => 10,  101 => 9,  98 => 8,  92 => 6,  89 => 5,  86 => 4,  83 => 3,  81 => 2,  75 => 1,  67 => 142,  65 => 136,  62 => 135,  60 => 130,  57 => 129,  55 => 126,  52 => 125,  50 => 107,  47 => 106,  45 => 97,  42 => 96,  40 => 78,  37 => 77,  35 => 59,  32 => 58,  30 => 1,);
    }
}
