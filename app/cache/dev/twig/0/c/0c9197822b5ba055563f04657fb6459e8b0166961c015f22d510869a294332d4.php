<?php

/* OroDashboardBundle:Dashboard:quickLaunchpad.html.twig */
class __TwigTemplate_0c9197822b5ba055563f04657fb6459e8b0166961c015f22d510869a294332d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroDashboardBundle:Dashboard:quickLaunchpad.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_77c71392a9841cdc9f203f71fd5d501c2acdd498945ec20d19d99fb0a0fc04b2 = $this->env->getExtension("native_profiler");
        $__internal_77c71392a9841cdc9f203f71fd5d501c2acdd498945ec20d19d99fb0a0fc04b2->enter($__internal_77c71392a9841cdc9f203f71fd5d501c2acdd498945ec20d19d99fb0a0fc04b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Dashboard:quickLaunchpad.html.twig"));

        // line 3
        $context["widgetType"] = "quick-launchpad";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77c71392a9841cdc9f203f71fd5d501c2acdd498945ec20d19d99fb0a0fc04b2->leave($__internal_77c71392a9841cdc9f203f71fd5d501c2acdd498945ec20d19d99fb0a0fc04b2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c8bca7a4a92209ff1b5af74c9cca7f2a1a847e157e607d9a784a1adb5fe3e6df = $this->env->getExtension("native_profiler");
        $__internal_c8bca7a4a92209ff1b5af74c9cca7f2a1a847e157e607d9a784a1adb5fe3e6df->enter($__internal_c8bca7a4a92209ff1b5af74c9cca7f2a1a847e157e607d9a784a1adb5fe3e6df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <ul class=\"quick-launchpad-toolbar\">
        ";
        // line 7
        $context["itemWidth"] = (((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) > 0)) ? (twig_round((100 / twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")))), 1)) : (100));
        // line 8
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "            <li style=\"width: ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["loop"], "last", array())) ? ((100 - ((twig_length_filter($this->env, (isset($context["items"]) ? $context["items"] : $this->getContext($context, "items"))) - 1) * (isset($context["itemWidth"]) ? $context["itemWidth"] : $this->getContext($context, "itemWidth"))))) : ((isset($context["itemWidth"]) ? $context["itemWidth"] : $this->getContext($context, "itemWidth")))), "html", null, true);
            echo "%\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($context["item"], "route", array()), $this->getAttribute($context["item"], "route_parameters", array())), "html", null, true);
            echo "\">
                    <span class=\"title-box\">";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["item"], "label", array())), "html", null, true);
            echo "</span>
                    <span class=\"list-content\">
                        <i class=\"icon-";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "icon", array()), "html", null, true);
            echo "\"></i>
                    </span>
                </a>
            </li>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
    ";
        // line 19
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_c8bca7a4a92209ff1b5af74c9cca7f2a1a847e157e607d9a784a1adb5fe3e6df->leave($__internal_c8bca7a4a92209ff1b5af74c9cca7f2a1a847e157e607d9a784a1adb5fe3e6df_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:quickLaunchpad.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 19,  99 => 18,  80 => 13,  75 => 11,  71 => 10,  66 => 9,  48 => 8,  46 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }
}
