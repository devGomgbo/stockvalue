<?php

/* OroImapBundle:Form:fields.html.twig */
class __TwigTemplate_a8fd86f8213745c62c5ddc7a0527606fdb95e54cefb68252cbec0dab9c76224f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_imap_configuration_check_row' => array($this, 'block_oro_imap_configuration_check_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ae3130fd061f15f0f988365b041a78059acbdb1bd8a7afb4033985979c5ec91c = $this->env->getExtension("native_profiler");
        $__internal_ae3130fd061f15f0f988365b041a78059acbdb1bd8a7afb4033985979c5ec91c->enter($__internal_ae3130fd061f15f0f988365b041a78059acbdb1bd8a7afb4033985979c5ec91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroImapBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_imap_configuration_check_row', $context, $blocks);
        
        $__internal_ae3130fd061f15f0f988365b041a78059acbdb1bd8a7afb4033985979c5ec91c->leave($__internal_ae3130fd061f15f0f988365b041a78059acbdb1bd8a7afb4033985979c5ec91c_prof);

    }

    public function block_oro_imap_configuration_check_row($context, array $blocks = array())
    {
        $__internal_ded883d86be2475f1b0280c023471fbe2ef8b33ac42c4ee2391f70610b47e6b1 = $this->env->getExtension("native_profiler");
        $__internal_ded883d86be2475f1b0280c023471fbe2ef8b33ac42c4ee2391f70610b47e6b1->enter($__internal_ded883d86be2475f1b0280c023471fbe2ef8b33ac42c4ee2391f70610b47e6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_imap_configuration_check_row"));

        // line 2
        echo "    ";
        $context["data"] = $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "parent", array()), "vars", array()), "value", array());
        // line 3
        echo "    ";
        if (((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "username", array(), "any", true, true))) {
            // line 4
            echo "        ";
            $context["forEntity"] = "user";
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            $context["forEntity"] = "mailbox";
            // line 7
            echo "    ";
        }
        // line 8
        echo "    ";
        $context["options"] = array("elementNamePrototype" =>         // line 9
(isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "id" => ((($this->getAttribute($this->getAttribute($this->getAttribute(        // line 10
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()) && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "value", array(), "any", false, true), "id", array(), "any", true, true))) ? ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()), "vars", array()), "value", array()), "id", array())) : (null)), "forEntity" =>         // line 11
(isset($context["forEntity"]) ? $context["forEntity"] : $this->getContext($context, "forEntity")), "organization" => ((((        // line 12
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")) && $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "organization", array(), "any", true, true)) && $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "organization", array()))) ? ($this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "organization", array()), "id", array())) : (null)));
        // line 14
        echo "    ";
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-page-component-module" => "oroimap/js/app/components/check-connection-btn", "data-page-component-options" => twig_jsonencode_filter(        // line 16
(isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")))));
        // line 18
        echo "    ";
        $context["wrapperId"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_wrapper");
        // line 19
        echo "
    <div class=\"control-group\" id=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["wrapperId"]) ? $context["wrapperId"] : $this->getContext($context, "wrapperId")), "html", null, true);
        echo "\">
        <div class=\"controls\">";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => (isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr"))));
        echo "</div>
    </div>
    <div class=\"container-config-group\"
         data-page-component-module=\"oroimap/js/app/components/check-config-settings\"
         data-page-component-options=\"\">
    </div>
    <style type=\"text/css\">
        ";
        // line 28
        echo twig_escape_filter($this->env, ("#" . (isset($context["wrapperId"]) ? $context["wrapperId"] : $this->getContext($context, "wrapperId"))), "html", null, true);
        echo " .alert {
            margin-top: 10px;
        }
    </style>
";
        
        $__internal_ded883d86be2475f1b0280c023471fbe2ef8b33ac42c4ee2391f70610b47e6b1->leave($__internal_ded883d86be2475f1b0280c023471fbe2ef8b33ac42c4ee2391f70610b47e6b1_prof);

    }

    public function getTemplateName()
    {
        return "OroImapBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  74 => 21,  70 => 20,  67 => 19,  64 => 18,  62 => 16,  60 => 14,  58 => 12,  57 => 11,  56 => 10,  55 => 9,  53 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  38 => 3,  35 => 2,  23 => 1,);
    }
}
