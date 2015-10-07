<?php

/* OroUIBundle:Default:help.html.twig */
class __TwigTemplate_7bbfc22bf03227fa7519cb7eb61acc5f11fc671fad2bb1c0046f6d35b7873cf8 extends Twig_Template
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
        $__internal_e88125f9e3befdc4f426054b599353485260e0118bc6992dcdb2b4e386f156de = $this->env->getExtension("native_profiler");
        $__internal_e88125f9e3befdc4f426054b599353485260e0118bc6992dcdb2b4e386f156de->enter($__internal_e88125f9e3befdc4f426054b599353485260e0118bc6992dcdb2b4e386f156de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default:help.html.twig"));

        // line 1
        echo "<li><a class=\"help no-hash\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_help')->getHelpLinkUrl(), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"icon-question-sign\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Get help"), "html", null, true);
        echo "\"></i></a></li>
";
        
        $__internal_e88125f9e3befdc4f426054b599353485260e0118bc6992dcdb2b4e386f156de->leave($__internal_e88125f9e3befdc4f426054b599353485260e0118bc6992dcdb2b4e386f156de_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default:help.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
