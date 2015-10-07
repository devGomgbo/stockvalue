<?php

/* OroUIBundle:Default/navbar:blocks.html.twig */
class __TwigTemplate_1cd5a7cc6418e8d0368fdb68c33171dda1dc1c7431bbc7be72364be607746beb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'application_menu' => array($this, 'block_application_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'navbar' => array($this, 'block_navbar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e9a50e412b868902e48d44ff155446cee70d393360bf83438dbaece20311942c = $this->env->getExtension("native_profiler");
        $__internal_e9a50e412b868902e48d44ff155446cee70d393360bf83438dbaece20311942c->enter($__internal_e9a50e412b868902e48d44ff155446cee70d393360bf83438dbaece20311942c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:Default/navbar:blocks.html.twig"));

        // line 1
        $this->displayBlock('application_menu', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('user_menu', $context, $blocks);
        // line 14
        echo "
";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        
        $__internal_e9a50e412b868902e48d44ff155446cee70d393360bf83438dbaece20311942c->leave($__internal_e9a50e412b868902e48d44ff155446cee70d393360bf83438dbaece20311942c_prof);

    }

    // line 1
    public function block_application_menu($context, array $blocks = array())
    {
        $__internal_6583461c9c5c330434b1c874eb5830bc0b87a0dedab208a5d0b926b91ef5b09c = $this->env->getExtension("native_profiler");
        $__internal_6583461c9c5c330434b1c874eb5830bc0b87a0dedab208a5d0b926b91ef5b09c->enter($__internal_6583461c9c5c330434b1c874eb5830bc0b87a0dedab208a5d0b926b91ef5b09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "application_menu"));

        // line 2
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("application_menu", $context)) ? (_twig_default_filter((isset($context["application_menu"]) ? $context["application_menu"] : $this->getContext($context, "application_menu")), "application_menu")) : ("application_menu")), array());
        
        $__internal_6583461c9c5c330434b1c874eb5830bc0b87a0dedab208a5d0b926b91ef5b09c->leave($__internal_6583461c9c5c330434b1c874eb5830bc0b87a0dedab208a5d0b926b91ef5b09c_prof);

    }

    // line 5
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_de7c1491f3064a55bf1de1255db6de63814f9f5b883082a401668f29824343aa = $this->env->getExtension("native_profiler");
        $__internal_de7c1491f3064a55bf1de1255db6de63814f9f5b883082a401668f29824343aa->enter($__internal_de7c1491f3064a55bf1de1255db6de63814f9f5b883082a401668f29824343aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 6
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("user_menu", $context)) ? (_twig_default_filter((isset($context["user_menu"]) ? $context["user_menu"] : $this->getContext($context, "user_menu")), "user_menu")) : ("user_menu")), array());
        // line 7
        echo "    ";
        
        $__internal_de7c1491f3064a55bf1de1255db6de63814f9f5b883082a401668f29824343aa->leave($__internal_de7c1491f3064a55bf1de1255db6de63814f9f5b883082a401668f29824343aa_prof);

    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_2fbf635d3b500fd2ac744187a92e866f0f8983a9c49455a730256c5846080512 = $this->env->getExtension("native_profiler");
        $__internal_2fbf635d3b500fd2ac744187a92e866f0f8983a9c49455a730256c5846080512->enter($__internal_2fbf635d3b500fd2ac744187a92e866f0f8983a9c49455a730256c5846080512_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 16
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("navbar", $context)) ? (_twig_default_filter((isset($context["navbar"]) ? $context["navbar"] : $this->getContext($context, "navbar")), "navbar")) : ("navbar")), array());
        
        $__internal_2fbf635d3b500fd2ac744187a92e866f0f8983a9c49455a730256c5846080512->leave($__internal_2fbf635d3b500fd2ac744187a92e866f0f8983a9c49455a730256c5846080512_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:Default/navbar:blocks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 16,  72 => 15,  65 => 7,  62 => 6,  56 => 5,  48 => 2,  42 => 1,  35 => 15,  32 => 14,  30 => 5,  27 => 4,  25 => 1,);
    }
}
