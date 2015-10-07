<?php

/* OroUserBundle:Security:login.html.twig */
class __TwigTemplate_aff9f4d70e5737aec886a7a8c99925cd882920cf18200c732ac267d2456d3f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUserBundle::layout.html.twig", "OroUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'bodyClass' => array($this, 'block_bodyClass'),
            'messages' => array($this, 'block_messages'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_153ed808817b7fba2897ae8cc2fedea0239e2c3ab8467761f006c2c8f3035b86 = $this->env->getExtension("native_profiler");
        $__internal_153ed808817b7fba2897ae8cc2fedea0239e2c3ab8467761f006c2c8f3035b86->enter($__internal_153ed808817b7fba2897ae8cc2fedea0239e2c3ab8467761f006c2c8f3035b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_153ed808817b7fba2897ae8cc2fedea0239e2c3ab8467761f006c2c8f3035b86->leave($__internal_153ed808817b7fba2897ae8cc2fedea0239e2c3ab8467761f006c2c8f3035b86_prof);

    }

    // line 3
    public function block_bodyClass($context, array $blocks = array())
    {
        $__internal_a352071749bc16a52710c262972b61e0acd11611b27f7db46442cf187d4bfbf4 = $this->env->getExtension("native_profiler");
        $__internal_a352071749bc16a52710c262972b61e0acd11611b27f7db46442cf187d4bfbf4->enter($__internal_a352071749bc16a52710c262972b61e0acd11611b27f7db46442cf187d4bfbf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bodyClass"));

        echo "login-page";
        
        $__internal_a352071749bc16a52710c262972b61e0acd11611b27f7db46442cf187d4bfbf4->leave($__internal_a352071749bc16a52710c262972b61e0acd11611b27f7db46442cf187d4bfbf4_prof);

    }

    // line 4
    public function block_messages($context, array $blocks = array())
    {
        $__internal_866f2dfa9c9a63a0adf33c007e82e27883aa1bb95bbb511989ce921cca498a0f = $this->env->getExtension("native_profiler");
        $__internal_866f2dfa9c9a63a0adf33c007e82e27883aa1bb95bbb511989ce921cca498a0f->enter($__internal_866f2dfa9c9a63a0adf33c007e82e27883aa1bb95bbb511989ce921cca498a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        
        $__internal_866f2dfa9c9a63a0adf33c007e82e27883aa1bb95bbb511989ce921cca498a0f->leave($__internal_866f2dfa9c9a63a0adf33c007e82e27883aa1bb95bbb511989ce921cca498a0f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_0a8d6156da2625500b4e7d42cc8742fb234f94871ef44d60e1e7f65c31a9cdbd = $this->env->getExtension("native_profiler");
        $__internal_0a8d6156da2625500b4e7d42cc8742fb234f94871ef44d60e1e7f65c31a9cdbd->enter($__internal_0a8d6156da2625500b4e7d42cc8742fb234f94871ef44d60e1e7f65c31a9cdbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "<div class=\"container\">

    <form id=\"login-form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("oro_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\" style=\"margin-top:5px;\">
        <div class=\"title-box\">
            ";
        // line 11
        if ($this->env->getExtension('oro_theme')->getThemeLogo()) {
            // line 12
            echo "            <h1 class=\"oro-title logo-";
            echo (($this->env->getExtension('oro_theme')->getThemeLogo()) ? ("image") : ("text"));
            echo "\">
                <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->env->getExtension('oro_theme')->getThemeLogo()), "html", null, true);
            echo "\">
            </h1>
            <span class=\"divider-vertical\"></span>
            ";
        }
        // line 17
        echo "            <h2 class=\"title\" style=\"text-align:center;\">
              <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/stock.png"), "html", null, true);
        echo "\" alt=\"stockvalue\">
            </h2>
        </div>
        <fieldset>
        
            <script type=\"text/javascript\">
                require(['jquery'], function (\$) {
                    var \$form = \$('#login-form');
                    \$form.on('submit', function () {
                        \$form.find('button').attr('disabled', 'disabled');
                    });
                });
            </script>
            ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "                <div class=\"alert alert-error\">
                    <div>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
                </div>
            ";
        }
        // line 36
        echo "            ";
        echo twig_escape_filter($this->env, (isset($context["messagesContent"]) ? $context["messagesContent"] : $this->getContext($context, "messagesContent")), "html", null, true);
        // line 37
        $context["usernameLabel"] = $this->env->getExtension('translator')->trans("Username");
        // line 38
        $context["passwordLabel"] = $this->env->getExtension('translator')->trans("Password");
        // line 39
        $context["organizationLabel"] = $this->env->getExtension('translator')->trans("Organization");
        // line 40
        $context["showLabels"] = ((twig_length_filter($this->env, (isset($context["usernameLabel"]) ? $context["usernameLabel"] : $this->getContext($context, "usernameLabel"))) <= 9) && ($this->env->getExtension('translator')->trans((isset($context["passwordLabel"]) ? $context["passwordLabel"] : $this->getContext($context, "passwordLabel"))) <= 9));
        // line 41
        echo "            <div class=\"input-prepend\">
                ";
        // line 42
        if ((isset($context["showLabels"]) ? $context["showLabels"] : $this->getContext($context, "showLabels"))) {
            // line 43
            echo "                <span class=\"add-on\">";
            echo twig_escape_filter($this->env, (isset($context["usernameLabel"]) ? $context["usernameLabel"] : $this->getContext($context, "usernameLabel")), "html", null, true);
            echo "</span>
                ";
        }
        // line 45
        echo "                <input type=\"text\" id=\"prependedInput\" class=\"span2\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username or Email"), "html", null, true);
        echo "\" autofocus/>
            </div>
            <div class=\"input-prepend\">
                ";
        // line 48
        if ((isset($context["showLabels"]) ? $context["showLabels"] : $this->getContext($context, "showLabels"))) {
            // line 49
            echo "                <span class=\"add-on\">";
            echo twig_escape_filter($this->env, (isset($context["passwordLabel"]) ? $context["passwordLabel"] : $this->getContext($context, "passwordLabel")), "html", null, true);
            echo "</span>
                ";
        }
        // line 51
        echo "                <input type=\"password\" id=\"prependedInput2\" class=\"span2\" name=\"_password\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
        echo "\" autocomplete=\"off\" />
            </div>
            <label class=\"checkbox oro-remember-me\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /> ";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Remember me on this computer"), "html", null, true);
        echo "
            </label>
            <div class=\"control-group form-row\">
                <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("oro_user_reset_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot your password?"), "html", null, true);
        echo "</a>
                <button type=\"submit\" class=\"btn btn-large  btn-primary pull-right\" id=\"_submit\" name=\"_submit\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Log in"), "html", null, true);
        echo "</button>
            </div>
            ";
        // line 60
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("oro_user_login_form", $context)) ? (_twig_default_filter((isset($context["oro_user_login_form"]) ? $context["oro_user_login_form"] : $this->getContext($context, "oro_user_login_form")), "oro_user_login_form")) : ("oro_user_login_form")), array());
        // line 61
        echo "        </fieldset>
        <input type=\"hidden\" name=\"_target_path\" value=\"\"  style=\"margin-bottom:100px;\" />
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    </form>
</div>
";
        
        $__internal_0a8d6156da2625500b4e7d42cc8742fb234f94871ef44d60e1e7f65c31a9cdbd->leave($__internal_0a8d6156da2625500b4e7d42cc8742fb234f94871ef44d60e1e7f65c31a9cdbd_prof);

    }

    public function getTemplateName()
    {
        return "OroUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 63,  183 => 61,  181 => 60,  176 => 58,  170 => 57,  164 => 54,  157 => 51,  151 => 49,  149 => 48,  140 => 45,  134 => 43,  132 => 42,  129 => 41,  127 => 40,  125 => 39,  123 => 38,  121 => 37,  118 => 36,  112 => 33,  109 => 32,  107 => 31,  91 => 18,  88 => 17,  81 => 13,  76 => 12,  74 => 11,  69 => 9,  65 => 7,  59 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
