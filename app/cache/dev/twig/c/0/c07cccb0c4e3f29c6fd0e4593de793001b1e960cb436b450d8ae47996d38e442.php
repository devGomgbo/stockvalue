<?php

/* OroSSOBundle:Security:oauthLogin.html.twig */
class __TwigTemplate_c07cccb0c4e3f29c6fd0e4593de793001b1e960cb436b450d8ae47996d38e442 extends Twig_Template
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
        $__internal_903d4383b71c331deccc3a16457e4794644399ff20d29be1e166e3b30192c27f = $this->env->getExtension("native_profiler");
        $__internal_903d4383b71c331deccc3a16457e4794644399ff20d29be1e166e3b30192c27f->enter($__internal_903d4383b71c331deccc3a16457e4794644399ff20d29be1e166e3b30192c27f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSSOBundle:Security:oauthLogin.html.twig"));

        // line 1
        if ($this->env->getExtension('config_extension')->getConfigValue("oro_sso.enable_google_sso")) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.sso.login.alternative.label"), "html", null, true);
            echo "
    ";
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('hwi_oauth')->getResourceOwners());
            foreach ($context['_seq'] as $context["_key"] => $context["owner"]) {
                // line 4
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('hwi_oauth')->getAuthorizationUrl($context["owner"]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["owner"]), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['owner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_903d4383b71c331deccc3a16457e4794644399ff20d29be1e166e3b30192c27f->leave($__internal_903d4383b71c331deccc3a16457e4794644399ff20d29be1e166e3b30192c27f_prof);

    }

    public function getTemplateName()
    {
        return "OroSSOBundle:Security:oauthLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }
}
