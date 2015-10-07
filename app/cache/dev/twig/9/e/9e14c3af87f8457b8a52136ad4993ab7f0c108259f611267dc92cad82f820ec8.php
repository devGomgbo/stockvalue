<?php

/* OroUIBundle:Default/navbar:sided.html.twig */
class __TwigTemplate_9e14c3af87f8457b8a52136ad4993ab7f0c108259f611267dc92cad82f820ec8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("OroUIBundle:Default/navbar:blocks.html.twig", "OroUIBundle:Default/navbar:sided.html.twig", 2);
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
        $__internal_fd2fc5dbcd12751b153aa3206518f51c78815d746e9672a37e095cf04c26c71f = $this->env->getExtension("native_profiler");
        $__internal_fd2fc5dbcd12751b153aa3206518f51c78815d746e9672a37e095cf04c26c71f->enter($__internal_fd2fc5dbcd12751b153aa3206518f51c78815d746e9672a37e095cf04c26c71f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default/navbar:sided.html.twig"));

        // line 1
        if (($this->env->getExtension('mobile_extension')->isDesktop() && ($this->env->getExtension('config_extension')->getConfigValue("oro_ui.navbar_position") == (isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement"))))) {
            // line 3
            echo "<div class=\"main-menu-sided minimized\">
    <div class=\"scroller\" id=\"main-menu\">
        ";
            // line 5
            $this->displayBlock("application_menu", $context, $blocks);
            echo "
    </div>
    <div id=\"main-menu-toggler\" class=\"menu-toggler\"></div>
</div>
<script type=\"text/javascript\">
    require(['oroui/js/desktop/side-menu'], function (\$) {
        \$('.main-menu-sided').desktopSideMenu({
            toggleSelector: '#main-menu-toggler'
        });
    });
</script>
";
        }
        
        $__internal_fd2fc5dbcd12751b153aa3206518f51c78815d746e9672a37e095cf04c26c71f->leave($__internal_fd2fc5dbcd12751b153aa3206518f51c78815d746e9672a37e095cf04c26c71f_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:sided.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  36 => 3,  34 => 1,  14 => 2,);
    }
}
