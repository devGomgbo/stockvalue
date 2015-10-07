<?php

/* OroUIBundle:Default/navbar:top.html.twig */
class __TwigTemplate_cce5292022ae60fdf95c6e8865e9df0bd5751167d84aeb027d91531bf864f2c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default/navbar:top.html.twig", 2);
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."OroUIBundle:Default/navbar:blocks.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6b09119569350b6e21c01e6db4b1faf9cc8b3cab7685e4ddb72eeca59d2bbaf = $this->env->getExtension("native_profiler");
        $__internal_a6b09119569350b6e21c01e6db4b1faf9cc8b3cab7685e4ddb72eeca59d2bbaf->enter($__internal_a6b09119569350b6e21c01e6db4b1faf9cc8b3cab7685e4ddb72eeca59d2bbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default/navbar:top.html.twig"));

        // line 1
        if (($this->env->getExtension('mobile_extension')->isMobile() || ($this->env->getExtension('config_extension')->getConfigValue("oro_ui.navbar_position") == "top"))) {
            // line 3
            echo "<div id=\"main-menu\" class=\"main-menu-top\">
    ";
            // line 4
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
</div>
";
        }
        
        $__internal_a6b09119569350b6e21c01e6db4b1faf9cc8b3cab7685e4ddb72eeca59d2bbaf->leave($__internal_a6b09119569350b6e21c01e6db4b1faf9cc8b3cab7685e4ddb72eeca59d2bbaf_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  36 => 3,  34 => 1,  14 => 2,);
    }
}
