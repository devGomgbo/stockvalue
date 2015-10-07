<?php

/* OroEmailBundle:Dashboard:recentEmailsGrid.html.twig */
class __TwigTemplate_d22d77fa9b07d5c88f35875ad6c7ff25f328b8954e51fbf59755913d5d40c1da extends Twig_Template
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
        $__internal_e889688b67ad80761b80b02e41dd36be34be4e8755df93c6e8441204c4cea471 = $this->env->getExtension("native_profiler");
        $__internal_e889688b67ad80761b80b02e41dd36be34be4e8755df93c6e8441204c4cea471->enter($__internal_e889688b67ad80761b80b02e41dd36be34be4e8755df93c6e8441204c4cea471_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig"));

        // line 1
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), array("userId" => (isset($context["loggedUserId"]) ? $context["loggedUserId"] : $this->getContext($context, "loggedUserId"))));
        echo "
";
        
        $__internal_e889688b67ad80761b80b02e41dd36be34be4e8755df93c6e8441204c4cea471->leave($__internal_e889688b67ad80761b80b02e41dd36be34be4e8755df93c6e8441204c4cea471_prof);

    }

    public function getTemplateName()
    {
        return "OroEmailBundle:Dashboard:recentEmailsGrid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  24 => 2,  22 => 1,);
    }
}
