<?php

/* OroUserBundle:Role:update.html.twig */
class __TwigTemplate_e969bfdc1746b66a71663aa8a9cbf3fc808aa5cd5024f3771c45d7dca7ede767 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:update.html.twig", "OroUserBundle:Role:update.html.twig", 1);
        $this->blocks = array(
            'navButtons' => array($this, 'block_navButtons'),
            'pageHeader' => array($this, 'block_pageHeader'),
            'content_data' => array($this, 'block_content_data'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:update.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0aca76186f54301ce9b6179a9b298e998ec3721e1bea026d1e6cfb1663159f8 = $this->env->getExtension("native_profiler");
        $__internal_a0aca76186f54301ce9b6179a9b298e998ec3721e1bea026d1e6cfb1663159f8->enter($__internal_a0aca76186f54301ce9b6179a9b298e998ec3721e1bea026d1e6cfb1663159f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle:Role:update.html.twig"));

        // line 2
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUserBundle:Role:update.html.twig", 2);
        // line 4
        $context["entityId"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array());

        $this->env->getExtension("oro_title")->set(array("params" => array("%role%" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 5
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()))));
        // line 6
        $context["gridName"] = "role-users-grid";
        // line 7
        $context["formAction"] = (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) ? ($this->env->getExtension('routing')->getPath("oro_user_role_update", array("id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))))) : ($this->env->getExtension('routing')->getPath("oro_user_role_create")));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0aca76186f54301ce9b6179a9b298e998ec3721e1bea026d1e6cfb1663159f8->leave($__internal_a0aca76186f54301ce9b6179a9b298e998ec3721e1bea026d1e6cfb1663159f8_prof);

    }

    // line 9
    public function block_navButtons($context, array $blocks = array())
    {
        $__internal_d7593e111bba070ea6d1fb980c64dc823050edec6af65cba0e6c00140a6f58bb = $this->env->getExtension("native_profiler");
        $__internal_d7593e111bba070ea6d1fb980c64dc823050edec6af65cba0e6c00140a6f58bb->enter($__internal_d7593e111bba070ea6d1fb980c64dc823050edec6af65cba0e6c00140a6f58bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navButtons"));

        // line 10
        echo "    ";
        if (((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")) && $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("DELETE", $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array())))) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "deleteButton", array(0 => array("dataUrl" => $this->env->getExtension('routing')->getPath("oro_api_delete_role", array("id" =>             // line 12
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")))), "dataRedirect" => $this->env->getExtension('routing')->getPath("oro_user_role_index"), "aCss" => "no-hash remove-button", "dataId" =>             // line 15
(isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId")), "id" => "btn-remove-role", "entity_label" => $this->env->getExtension('translator')->trans("oro.user.role.entity_label"), "disabled" =>  !            // line 18
(isset($context["allow_delete"]) ? $context["allow_delete"] : $this->getContext($context, "allow_delete")))), "method"), "html", null, true);
            // line 20
            echo "
        ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "buttonSeparator", array(), "method"), "html", null, true);
            echo "
    ";
        }
        // line 23
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "cancelButton", array(0 => $this->env->getExtension('routing')->getPath("oro_user_role_index")), "method"), "html", null, true);
        echo "
    ";
        // line 24
        $context["html"] = $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndCloseButton", array(), "method");
        // line 25
        echo "    ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "id", array()) || $this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_user_role_update"))) {
            // line 26
            echo "        ";
            $context["html"] = ((isset($context["html"]) ? $context["html"] : $this->getContext($context, "html")) . $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "saveAndStayButton", array(), "method"));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["UI"]) ? $context["UI"] : $this->getContext($context, "UI")), "dropdownSaveButton", array(0 => array("html" => (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html")))), "method"), "html", null, true);
        echo "
";
        
        $__internal_d7593e111bba070ea6d1fb980c64dc823050edec6af65cba0e6c00140a6f58bb->leave($__internal_d7593e111bba070ea6d1fb980c64dc823050edec6af65cba0e6c00140a6f58bb_prof);

    }

    // line 31
    public function block_pageHeader($context, array $blocks = array())
    {
        $__internal_88e09a51d8c0515b1a57234a519a9c63523ec4190b78e77a306fe5709886a6ab = $this->env->getExtension("native_profiler");
        $__internal_88e09a51d8c0515b1a57234a519a9c63523ec4190b78e77a306fe5709886a6ab->enter($__internal_88e09a51d8c0515b1a57234a519a9c63523ec4190b78e77a306fe5709886a6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pageHeader"));

        // line 32
        echo "    ";
        if ((isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))) {
            // line 33
            echo "        ";
            $context["breadcrumbs"] = array("entity" => $this->getAttribute($this->getAttribute(            // line 34
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "indexPath" => $this->env->getExtension('routing')->getPath("oro_user_role_index"), "indexLabel" => $this->env->getExtension('translator')->trans("oro.user.role.entity_plural_label"), "entityTitle" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 37
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "value", array()), "label", array()));
            // line 40
            echo "        ";
            $this->displayParentBlock("pageHeader", $context, $blocks);
            echo "
    ";
        } else {
            // line 42
            echo "        ";
            $context["title"] = $this->env->getExtension('translator')->trans("oro.ui.create_entity", array("%entityName%" => $this->env->getExtension('translator')->trans("oro.user.role.entity_label")));
            // line 43
            echo "        ";
            $this->loadTemplate("OroUIBundle::page_title_block.html.twig", "OroUserBundle:Role:update.html.twig", 43)->display(array_merge($context, array("title" => (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")))));
            // line 44
            echo "    ";
        }
        
        $__internal_88e09a51d8c0515b1a57234a519a9c63523ec4190b78e77a306fe5709886a6ab->leave($__internal_88e09a51d8c0515b1a57234a519a9c63523ec4190b78e77a306fe5709886a6ab_prof);

    }

    // line 47
    public function block_content_data($context, array $blocks = array())
    {
        $__internal_9500b1ff9c00e84ebbb5198cdade33b8078df145b424a6a65b64c9a78a08b33c = $this->env->getExtension("native_profiler");
        $__internal_9500b1ff9c00e84ebbb5198cdade33b8078df145b424a6a65b64c9a78a08b33c->enter($__internal_9500b1ff9c00e84ebbb5198cdade33b8078df145b424a6a65b64c9a78a08b33c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_data"));

        // line 48
        echo "    ";
        $context["id"] = "role-profile";
        // line 49
        echo "
    ";
        // line 50
        $context["dataBlocks"] = array(0 => array("title" => $this->env->getExtension('translator')->trans("General"), "class" => "active", "subblocks" => array(0 => array("title" => "", "data" => array(0 =>         // line 57
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "appendUsers", array()), 'widget', array("id" => "roleAppendUsers")), 1 =>         // line 58
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "removeUsers", array()), 'widget', array("id" => "roleRemoveUsers")), 2 =>         // line 59
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "label", array()), 'row'))))));
        // line 64
        echo "
    ";
        // line 65
        $context["additionalData"] = array();
        // line 66
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            if (($this->getAttribute($this->getAttribute($context["child"], "vars", array(), "any", false, true), "extra_field", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["child"], "vars", array()), "extra_field", array()))) {
                // line 67
                echo "        ";
                $context["additionalData"] = twig_array_merge((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")), array(0 => $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row')));
                // line 68
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    ";
        if ( !twig_test_empty((isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")))) {
            // line 70
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("Additional"), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" =>             // line 75
(isset($context["additionalData"]) ? $context["additionalData"] : $this->getContext($context, "additionalData")))))));
            // line 78
            echo "    ";
        }
        // line 79
        echo "
    ";
        // line 80
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privilegesConfig"]) ? $context["privilegesConfig"] : $this->getContext($context, "privilegesConfig")));
        foreach ($context['_seq'] as $context["privilegeBlock"] => $context["privilegeConfig"]) {
            // line 81
            echo "        ";
            $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans($this->getAttribute(            // line 82
$context["privilegeConfig"], "label", array())), "subblocks" => array(0 => array("title" => "", "useSpan" => false, "data" => array(0 =>             // line 88
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "children", array()), $context["privilegeBlock"], array(), "array"), 'widget')))))));
            // line 93
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['privilegeBlock'], $context['privilegeConfig'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
    ";
        // line 95
        $context["dataBlocks"] = twig_array_merge((isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")), array(0 => array("title" => $this->env->getExtension('translator')->trans("oro.user.entity_plural_label"), "subblocks" => array(0 => array("title" => null, "useSpan" => false, "data" => array(0 =>         // line 102
$context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("role_id" => (isset($context["entityId"]) ? $context["entityId"] : $this->getContext($context, "entityId"))), array("cssClass" => "inner-grid"))))))));
        // line 106
        echo "
    ";
        // line 107
        $context["data"] = array("formErrors" => ((        // line 108
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) ? ($this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors')) : (null)), "dataBlocks" =>         // line 109
(isset($context["dataBlocks"]) ? $context["dataBlocks"] : $this->getContext($context, "dataBlocks")));
        // line 111
        echo "    ";
        $this->displayParentBlock("content_data", $context, $blocks);
        echo "
";
        
        $__internal_9500b1ff9c00e84ebbb5198cdade33b8078df145b424a6a65b64c9a78a08b33c->leave($__internal_9500b1ff9c00e84ebbb5198cdade33b8078df145b424a6a65b64c9a78a08b33c_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle:Role:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 111,  208 => 109,  207 => 108,  206 => 107,  203 => 106,  201 => 102,  200 => 95,  197 => 94,  191 => 93,  189 => 88,  188 => 82,  186 => 81,  182 => 80,  179 => 79,  176 => 78,  174 => 75,  172 => 70,  169 => 69,  162 => 68,  159 => 67,  153 => 66,  151 => 65,  148 => 64,  146 => 59,  145 => 58,  144 => 57,  143 => 50,  140 => 49,  137 => 48,  131 => 47,  123 => 44,  120 => 43,  117 => 42,  111 => 40,  109 => 37,  108 => 34,  106 => 33,  103 => 32,  97 => 31,  87 => 28,  84 => 27,  81 => 26,  78 => 25,  76 => 24,  71 => 23,  66 => 21,  63 => 20,  61 => 18,  60 => 15,  59 => 12,  57 => 11,  54 => 10,  48 => 9,  41 => 1,  39 => 7,  37 => 6,  35 => 5,  32 => 4,  30 => 2,  11 => 1,);
    }
}
