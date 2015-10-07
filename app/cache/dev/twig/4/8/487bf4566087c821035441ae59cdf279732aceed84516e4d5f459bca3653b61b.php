<?php

/* OroNavigationBundle:ApplicationMenu:pinButton.html.twig */
class __TwigTemplate_487bf4566087c821035441ae59cdf279732aceed84516e4d5f459bca3653b61b extends Twig_Template
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
        $__internal_a572950213fab2eb55d137c5f293d7da0b2f8361e91645621e9bd036b537e097 = $this->env->getExtension("native_profiler");
        $__internal_a572950213fab2eb55d137c5f293d7da0b2f8361e91645621e9bd036b537e097->enter($__internal_a572950213fab2eb55d137c5f293d7da0b2f8361e91645621e9bd036b537e097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:ApplicationMenu:pinButton.html.twig"));

        // line 1
        $context["contentProviderContent"] = twig_first($this->env, $this->getAttribute((isset($context["oro_ui_content_provider_manager"]) ? $context["oro_ui_content_provider_manager"] : $this->getContext($context, "oro_ui_content_provider_manager")), "getContent", array(0 => array(0 => "navigationElements")), "method"));
        // line 2
        echo "<div id=\"bookmark-buttons\">
    <div class=\"navigation clearfix\">
        <div class=\"top-action-box\">
            <button class=\"btn favorite-button\" ";
        // line 5
        if (($this->getAttribute((isset($context["contentProviderContent"]) ? $context["contentProviderContent"] : $this->getContext($context, "contentProviderContent")), "favoriteButton", array(), "array") == false)) {
            echo "style=\"display: none\"";
        }
        // line 6
        echo "                    data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderSerialized(), "html", null, true);
        echo "\"
                    data-title-rendered-short=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderShort(), "html", null, true);
        echo "\"
                    title=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.favorites.button.title"), "html", null, true);
        echo "\">
                        <i class=\"icon-star hide-text\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.favorites.button"), "html", null, true);
        echo "</i>
            </button>
            <button class=\"btn minimize-button\" ";
        // line 11
        if (($this->getAttribute((isset($context["contentProviderContent"]) ? $context["contentProviderContent"] : $this->getContext($context, "contentProviderContent")), "pinButton", array(), "array") == false)) {
            echo "style=\"display: none\"";
        }
        // line 12
        echo "                    data-title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderSerialized(), "html", null, true);
        echo "\"
                    data-title-rendered-short=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('oro_title')->renderShort(), "html", null, true);
        echo "\"
                    title=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.pins.button.title"), "html", null, true);
        echo "\">
                        <i class=\"icon-pushpin hide-text\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.navigation.pins.button"), "html", null, true);
        echo "</i>
            </button>
        </div>
    </div>
</div>
";
        
        $__internal_a572950213fab2eb55d137c5f293d7da0b2f8361e91645621e9bd036b537e097->leave($__internal_a572950213fab2eb55d137c5f293d7da0b2f8361e91645621e9bd036b537e097_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:ApplicationMenu:pinButton.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  64 => 14,  60 => 13,  55 => 12,  51 => 11,  46 => 9,  42 => 8,  38 => 7,  33 => 6,  29 => 5,  24 => 2,  22 => 1,);
    }
}
