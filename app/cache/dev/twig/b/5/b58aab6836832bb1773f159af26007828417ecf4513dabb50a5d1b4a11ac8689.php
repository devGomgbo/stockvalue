<?php

/* OroEntityExtendBundle:Form:fields.html.twig */
class __TwigTemplate_b58aab6836832bb1773f159af26007828417ecf4513dabb50a5d1b4a11ac8689 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_entity_extend_enum_value_widget' => array($this, 'block_oro_entity_extend_enum_value_widget'),
            'oro_entity_extend_enum_value_collection_widget' => array($this, 'block_oro_entity_extend_enum_value_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_108d93a269dcb393cc944085a79f66cc9fc84acc8e649c237e433167191f22cf = $this->env->getExtension("native_profiler");
        $__internal_108d93a269dcb393cc944085a79f66cc9fc84acc8e649c237e433167191f22cf->enter($__internal_108d93a269dcb393cc944085a79f66cc9fc84acc8e649c237e433167191f22cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityExtendBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_entity_extend_enum_value_widget', $context, $blocks);
        // line 17
        echo "
";
        // line 18
        $this->displayBlock('oro_entity_extend_enum_value_collection_widget', $context, $blocks);
        // line 25
        echo "
";
        
        $__internal_108d93a269dcb393cc944085a79f66cc9fc84acc8e649c237e433167191f22cf->leave($__internal_108d93a269dcb393cc944085a79f66cc9fc84acc8e649c237e433167191f22cf_prof);

    }

    // line 1
    public function block_oro_entity_extend_enum_value_widget($context, array $blocks = array())
    {
        $__internal_cd53c34fdbbceabcbf2ed21cb5f0e7dd3de2c2b07b9718b964bb26e8691e7d22 = $this->env->getExtension("native_profiler");
        $__internal_cd53c34fdbbceabcbf2ed21cb5f0e7dd3de2c2b07b9718b964bb26e8691e7d22->enter($__internal_cd53c34fdbbceabcbf2ed21cb5f0e7dd3de2c2b07b9718b964bb26e8691e7d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_extend_enum_value_widget"));

        // line 2
        echo "    <div class=\"float-holder ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), "vars", array()), "errors", array())) > 0)) {
            echo " validation-error";
        }
        echo "\">
        <div class=\"input-append input-append-sortable collection-element-primary\">
            ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))));
        echo "
            <label class=\"add-on";
        // line 5
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_extend.enum_options.default.tooltip", array(), "tooltips"), "html", null, true);
        echo "\">
                ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_default", array()), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))));
        echo "
            </label>
            <label class=\"add-on";
        // line 8
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.entity_extend.enum_options.priority.tooltip", array(), "tooltips"), "html", null, true);
        echo "\">
                <i class=\"icon-list ui-sortable-handle";
        // line 9
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled";
        }
        echo "\"></i>
                ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "priority", array()), 'widget', array("disabled" => (isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))));
        echo "
            </label>
        </div>
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'errors');
        echo "
    </div>
    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
";
        
        $__internal_cd53c34fdbbceabcbf2ed21cb5f0e7dd3de2c2b07b9718b964bb26e8691e7d22->leave($__internal_cd53c34fdbbceabcbf2ed21cb5f0e7dd3de2c2b07b9718b964bb26e8691e7d22_prof);

    }

    // line 18
    public function block_oro_entity_extend_enum_value_collection_widget($context, array $blocks = array())
    {
        $__internal_4af1dece50e36358f192b503ca09a847d2bc55bd3e3fa819a50690ff8df11e22 = $this->env->getExtension("native_profiler");
        $__internal_4af1dece50e36358f192b503ca09a847d2bc55bd3e3fa819a50690ff8df11e22->enter($__internal_4af1dece50e36358f192b503ca09a847d2bc55bd3e3fa819a50690ff8df11e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_entity_extend_enum_value_collection_widget"));

        // line 19
        echo "    ";
        $this->displayBlock("oro_collection_widget", $context, $blocks);
        echo "
    ";
        // line 20
        if ( !(isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            // line 21
            echo "        ";
            $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_collection");
            // line 22
            echo "        ";
            echo $this->getAttribute($this, "oro_entity_extend_enum_value_collection_js", array(0 => $context), "method");
            echo "
    ";
        }
        
        $__internal_4af1dece50e36358f192b503ca09a847d2bc55bd3e3fa819a50690ff8df11e22->leave($__internal_4af1dece50e36358f192b503ca09a847d2bc55bd3e3fa819a50690ff8df11e22_prof);

    }

    // line 26
    public function getoro_entity_extend_enum_value_collection_js($__context__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "context" => $__context__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_18c711c0c9831e27f9f0f8063e17f585316f4a53110b94c0ec61db1afed312b6 = $this->env->getExtension("native_profiler");
            $__internal_18c711c0c9831e27f9f0f8063e17f585316f4a53110b94c0ec61db1afed312b6->enter($__internal_18c711c0c9831e27f9f0f8063e17f585316f4a53110b94c0ec61db1afed312b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "oro_entity_extend_enum_value_collection_js"));

            // line 27
            echo "    <script type=\"text/javascript\">
        require(['jquery', 'jquery-ui'],
        function(\$){
            \$(function() {
                var container = \$('#";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "id", array()), "html", null, true);
            echo "');

                ";
            // line 33
            if (($this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "multiple", array()) == false)) {
                // line 34
                echo "                container.on('click', '[name\$=\"[is_default]\"]', function(e) {
                    container.find('[name\$=\"[is_default]\"]').each(function (idx, el) {
                        if (el.checked && el.id != e.currentTarget.id) {
                            el.checked = false;
                        }
                    });
                });
                ";
            }
            // line 42
            echo "
                var reindex_values = function() {
                    var index = 1;
                    \$('#";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["context"]) ? $context["context"] : $this->getContext($context, "context")), "id", array()), "html", null, true);
            echo " [name\$=\"[priority]\"]').each(function(i, el){
                        \$(el).val(index++);
                    })
                };

                container.sortable({
                    cursor: 'move',
                    delay : 100,
                    containment: \"parent\",
                    stop  : reindex_values
                });

                reindex_values();
                container.parent().on('click', 'a.add-list-item', reindex_values);
            });
        });
    </script>
";
            
            $__internal_18c711c0c9831e27f9f0f8063e17f585316f4a53110b94c0ec61db1afed312b6->leave($__internal_18c711c0c9831e27f9f0f8063e17f585316f4a53110b94c0ec61db1afed312b6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroEntityExtendBundle:Form:fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 45,  169 => 42,  159 => 34,  157 => 33,  152 => 31,  146 => 27,  131 => 26,  120 => 22,  117 => 21,  115 => 20,  110 => 19,  104 => 18,  95 => 15,  90 => 13,  84 => 10,  78 => 9,  70 => 8,  65 => 6,  57 => 5,  53 => 4,  45 => 2,  39 => 1,  31 => 25,  29 => 18,  26 => 17,  24 => 1,);
    }
}
