<?php

/* OroNavigationBundle:Shortcut:shortcuts.html.twig */
class __TwigTemplate_fadc58a4eb7b64e9d5f77f5f54a747bc7309c80d6193567016dbd57dab95690c extends Twig_Template
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
        $__internal_adb91bd163664097b72d4a3e1d6f06006e4768ba7fb3c2773e85e893d1870ae9 = $this->env->getExtension("native_profiler");
        $__internal_adb91bd163664097b72d4a3e1d6f06006e4768ba7fb3c2773e85e893d1870ae9->enter($__internal_adb91bd163664097b72d4a3e1d6f06006e4768ba7fb3c2773e85e893d1870ae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Shortcut:shortcuts.html.twig"));

        // line 1
        echo $this->env->getExtension('oro_menu')->render("shortcuts", array("source" => "oro_api_get_shortcuts", "details" => $this->env->getExtension('routing')->getPath("oro_shortcut_actionslist")));
        echo "
";
        
        $__internal_adb91bd163664097b72d4a3e1d6f06006e4768ba7fb3c2773e85e893d1870ae9->leave($__internal_adb91bd163664097b72d4a3e1d6f06006e4768ba7fb3c2773e85e893d1870ae9_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Shortcut:shortcuts.html.twig";
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
