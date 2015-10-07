<?php

/* OroEntityConfigBundle:Config:index.html.twig */
class __TwigTemplate_2fccb434295e795125c8d4da79fd77325a4142e5db41659ecaad4604dbf0d8ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:actions:index.html.twig", "OroEntityConfigBundle:Config:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a35fe3758f0da175656b0e99799cdb078f9e9ef683b9513b4a76912ea24bbf20 = $this->env->getExtension("native_profiler");
        $__internal_a35fe3758f0da175656b0e99799cdb078f9e9ef683b9513b4a76912ea24bbf20->enter($__internal_a35fe3758f0da175656b0e99799cdb078f9e9ef683b9513b4a76912ea24bbf20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityConfigBundle:Config:index.html.twig"));

        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroEntityConfigBundle:Config:index.html.twig", 2);
        // line 4
        $context["gridName"] = "entityconfig-grid";
        // line 5
        $context["pageTitle"] = $this->env->getExtension('translator')->trans("oro.entity_config.menu.entities_list.label");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a35fe3758f0da175656b0e99799cdb078f9e9ef683b9513b4a76912ea24bbf20->leave($__internal_a35fe3758f0da175656b0e99799cdb078f9e9ef683b9513b4a76912ea24bbf20_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_1058368738cd1210dc32b5fad4bf2b7c7fb04a97cbc76167c734463bde94bec5 = $this->env->getExtension("native_profiler");
        $__internal_1058368738cd1210dc32b5fad4bf2b7c7fb04a97cbc76167c734463bde94bec5->enter($__internal_1058368738cd1210dc32b5fad4bf2b7c7fb04a97cbc76167c734463bde94bec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js")))) {
            // line 9
            echo "        <script type=\"text/javascript\">
            require(";
            // line 10
            echo twig_jsonencode_filter((isset($context["require_js"]) ? $context["require_js"] : $this->getContext($context, "require_js")));
            echo ")
        </script>
    ";
        }
        // line 13
        echo "    ";
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_1058368738cd1210dc32b5fad4bf2b7c7fb04a97cbc76167c734463bde94bec5->leave($__internal_1058368738cd1210dc32b5fad4bf2b7c7fb04a97cbc76167c734463bde94bec5_prof);

    }

    // line 16
    public function block_navButtons($context, array $blocks = array())
    {
        $__internal_9eece3b674b5a5a69e3eb608011cdbc66e3b7889d2cdd93ff7e2631ed74f3372 = $this->env->getExtension("native_profiler");
        $__internal_9eece3b674b5a5a69e3eb608011cdbc66e3b7889d2cdd93ff7e2631ed74f3372->enter($__internal_9eece3b674b5a5a69e3eb608011cdbc66e3b7889d2cdd93ff7e2631ed74f3372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navButtons"));

        // line 17
        echo "    ";
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_entityconfig_manage")) {
            // line 18
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["buttonConfig"]) ? $context["buttonConfig"] : $this->getContext($context, "buttonConfig")));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 19
                echo "            ";
                echo $context["UI"]->getaddButton(array("path" => $this->env->getExtension('routing')->getPath($this->getAttribute(                // line 20
$context["button"], "route", array()), (($this->getAttribute($context["button"], "args", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "args", array()), array())) : (array()))), "title" => $this->env->getExtension('translator')->trans((($this->getAttribute(                // line 21
$context["button"], "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "title", array()), $this->getAttribute($context["button"], "name", array()))) : ($this->getAttribute($context["button"], "name", array())))), "label" => $this->env->getExtension('translator')->trans($this->getAttribute(                // line 22
$context["button"], "name", array())), "aCss" => (($this->getAttribute(                // line 23
$context["button"], "aCss", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "aCss", array()), "")) : (""))));
                // line 24
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "    ";
        }
        
        $__internal_9eece3b674b5a5a69e3eb608011cdbc66e3b7889d2cdd93ff7e2631ed74f3372->leave($__internal_9eece3b674b5a5a69e3eb608011cdbc66e3b7889d2cdd93ff7e2631ed74f3372_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityConfigBundle:Config:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 26,  91 => 24,  89 => 23,  88 => 22,  87 => 21,  86 => 20,  84 => 19,  79 => 18,  76 => 17,  70 => 16,  60 => 13,  54 => 10,  51 => 9,  48 => 8,  42 => 7,  35 => 1,  33 => 5,  31 => 4,  29 => 2,  11 => 1,);
    }
}
