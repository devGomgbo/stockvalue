<?php

/* OroNavigationBundle:Menu:_dots_tabs-content.html.twig */
class __TwigTemplate_a7e7b2039d57726ee6aa381d7a2827a52fec9e64a15d98a0d915d3fb0b780181 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", 1);
        $this->blocks = array(
            'root' => array($this, 'block_root'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e0084830b977af2858695d1e0bec2f84c225add964b60211bc9eca59a730682 = $this->env->getExtension("native_profiler");
        $__internal_7e0084830b977af2858695d1e0bec2f84c225add964b60211bc9eca59a730682->enter($__internal_7e0084830b977af2858695d1e0bec2f84c225add964b60211bc9eca59a730682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0084830b977af2858695d1e0bec2f84c225add964b60211bc9eca59a730682->leave($__internal_7e0084830b977af2858695d1e0bec2f84c225add964b60211bc9eca59a730682_prof);

    }

    // line 3
    public function block_root($context, array $blocks = array())
    {
        $__internal_3581b0646ae9591f87bbc777a27093f2f62b021cb7e1b8c3c53b6ea4199e373a = $this->env->getExtension("native_profiler");
        $__internal_3581b0646ae9591f87bbc777a27093f2f62b021cb7e1b8c3c53b6ea4199e373a->enter($__internal_3581b0646ae9591f87bbc777a27093f2f62b021cb7e1b8c3c53b6ea4199e373a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 4
        echo "    ";
        $context["oro_menu"] = $this->loadTemplate("OroNavigationBundle:Menu:menu.html.twig", "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", 4);
        // line 5
        echo "
    <div class=\"tab-content\">
        ";
        // line 7
        $context["items"] = (isset($context["item"]) ? $context["item"] : $this->getContext($context, "item"));
        // line 8
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            ";
            $context["showNonAuthorized"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array(), "any", false, true), "showNonAuthorized", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["item"], "extras", array()), "showNonAuthorized", array()));
            // line 10
            echo "            ";
            $context["displayable"] = ($this->getAttribute($this->getAttribute($context["item"], "extras", array()), "isAllowed", array()) || (isset($context["showNonAuthorized"]) ? $context["showNonAuthorized"] : $this->getContext($context, "showNonAuthorized")));
            // line 11
            echo "            ";
            if ((isset($context["displayable"]) ? $context["displayable"] : $this->getContext($context, "displayable"))) {
                // line 12
                echo "                <div class=\"tab-pane\"
                     id=\"";
                // line 13
                echo twig_escape_filter($this->env, trim(twig_lower_filter($this->env, strtr($this->getAttribute($context["item"], "name", array()), array(" " => "_", "#" => "_")))), "html", null, true);
                echo "-content\">
                    ";
                // line 14
                $context["options"] = array("tabTitle" => $this->getAttribute($context["item"], "label", array()));
                // line 15
                echo "                    ";
                $context["options"] = array("defaultUrl" => $this->env->getExtension('routing')->getPath("oro_default"));
                // line 16
                echo "                    ";
                $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), $this->getAttribute($context["item"], "extras", array()));
                // line 17
                echo "                    ";
                echo $this->env->getExtension('oro_menu')->render($this->getAttribute($context["item"], "name", array()), (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
                echo "
                </div>
            ";
            }
            // line 20
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        ";
        $context["item"] = (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"));
        // line 22
        echo "    </div>
";
        
        $__internal_3581b0646ae9591f87bbc777a27093f2f62b021cb7e1b8c3c53b6ea4199e373a->leave($__internal_3581b0646ae9591f87bbc777a27093f2f62b021cb7e1b8c3c53b6ea4199e373a_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:_dots_tabs-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 22,  91 => 21,  85 => 20,  78 => 17,  75 => 16,  72 => 15,  70 => 14,  66 => 13,  63 => 12,  60 => 11,  57 => 10,  54 => 9,  49 => 8,  47 => 7,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
