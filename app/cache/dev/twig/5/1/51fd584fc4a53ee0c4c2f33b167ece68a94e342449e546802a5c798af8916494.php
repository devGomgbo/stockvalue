<?php

/* OroDataGridBundle:js:toolbar.html.twig */
class __TwigTemplate_51fd584fc4a53ee0c4c2f33b167ece68a94e342449e546802a5c798af8916494 extends Twig_Template
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
        $__internal_b2f8a341f9efdc7f80b6f3e9ab31482da5f76cbf63cebbef10dea4f8fe5bb919 = $this->env->getExtension("native_profiler");
        $__internal_b2f8a341f9efdc7f80b6f3e9ab31482da5f76cbf63cebbef10dea4f8fe5bb919->enter($__internal_b2f8a341f9efdc7f80b6f3e9ab31482da5f76cbf63cebbef10dea4f8fe5bb919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:toolbar.html.twig"));

        // line 1
        echo "<script type=\"text/html\" id=\"template-datagrid-toolbar\">
";
        // line 2
        if ($this->env->getExtension('mobile_extension')->isDesktop()) {
            // line 3
            echo "    <div class=\"grid-toolbar\">
        <div class=\"pull-left\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
            <div class=\"extra-actions-panel\"></div>
            ";
            // line 19
            echo "        </div>
        <div class=\"pull-right\">
            <div class=\"actions-panel pull-right form-horizontal\"></div>
            <div class=\"page-size pull-right form-horizontal\"></div>
        </div>
        <div class=\"pagination pagination-centered\"></div>
    </div>
";
        } else {
            // line 27
            echo "    <div class=\"grid-toolbar\">
        <div class=\"pagination-container\">
            <div class=\"pagination pull-left\"></div>
            <div class=\"pull-right\">
                <div class=\"page-size pull-right\"></div>
            </div>
            <div class=\"separator\">|</div>
        </div>
        <div class=\"pull-left\">
            <div class=\"mass-actions-panel btn-group icons-holder\"></div>
        </div>
    </div>
";
        }
        // line 40
        echo "</script>
";
        
        $__internal_b2f8a341f9efdc7f80b6f3e9ab31482da5f76cbf63cebbef10dea4f8fe5bb919->leave($__internal_b2f8a341f9efdc7f80b6f3e9ab31482da5f76cbf63cebbef10dea4f8fe5bb919_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:toolbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 40,  43 => 27,  33 => 19,  27 => 3,  25 => 2,  22 => 1,);
    }
}
