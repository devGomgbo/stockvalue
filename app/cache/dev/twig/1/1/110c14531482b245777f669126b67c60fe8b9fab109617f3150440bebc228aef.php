<?php

/* OroNavigationBundle:Menu:dots_tabs.html.twig */
class __TwigTemplate_110c14531482b245777f669126b67c60fe8b9fab109617f3150440bebc228aef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroNavigationBundle:Menu:menu_base.html.twig", "OroNavigationBundle:Menu:dots_tabs.html.twig", 1);
        $this->blocks = array(
            'compressed_root' => array($this, 'block_compressed_root'),
            'root' => array($this, 'block_root'),
            'navbar_tabs' => array($this, 'block_navbar_tabs'),
            'navbar_tabs_content' => array($this, 'block_navbar_tabs_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroNavigationBundle:Menu:menu_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_94b56c33d1b0881df80620ad44dc91ed8335c8f253475b2465d24b463e57be79 = $this->env->getExtension("native_profiler");
        $__internal_94b56c33d1b0881df80620ad44dc91ed8335c8f253475b2465d24b463e57be79->enter($__internal_94b56c33d1b0881df80620ad44dc91ed8335c8f253475b2465d24b463e57be79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Menu:dots_tabs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94b56c33d1b0881df80620ad44dc91ed8335c8f253475b2465d24b463e57be79->leave($__internal_94b56c33d1b0881df80620ad44dc91ed8335c8f253475b2465d24b463e57be79_prof);

    }

    // line 2
    public function block_compressed_root($context, array $blocks = array())
    {
        $__internal_7ecd14cc313acc8329aff1bb8d5c32019857da8b27e076c54a454f5a3be78a26 = $this->env->getExtension("native_profiler");
        $__internal_7ecd14cc313acc8329aff1bb8d5c32019857da8b27e076c54a454f5a3be78a26->enter($__internal_7ecd14cc313acc8329aff1bb8d5c32019857da8b27e076c54a454f5a3be78a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "compressed_root"));

        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "        ";
        $this->displayBlock("root", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_7ecd14cc313acc8329aff1bb8d5c32019857da8b27e076c54a454f5a3be78a26->leave($__internal_7ecd14cc313acc8329aff1bb8d5c32019857da8b27e076c54a454f5a3be78a26_prof);

    }

    // line 8
    public function block_root($context, array $blocks = array())
    {
        $__internal_596cf8152eef8693fa39e9cca6e45f9613167830b132045d92cb7420b07a1134 = $this->env->getExtension("native_profiler");
        $__internal_596cf8152eef8693fa39e9cca6e45f9613167830b132045d92cb7420b07a1134->enter($__internal_596cf8152eef8693fa39e9cca6e45f9613167830b132045d92cb7420b07a1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "root"));

        // line 9
        echo "    ";
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "hasChildren", array()) &&  !($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "depth", array()) === 0)) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "displayChildren", array()))) {
            // line 10
            echo "        ";
            $this->displayBlock("navbar_tabs", $context, $blocks);
            echo "
        ";
            // line 11
            $this->displayBlock("navbar_tabs_content", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_596cf8152eef8693fa39e9cca6e45f9613167830b132045d92cb7420b07a1134->leave($__internal_596cf8152eef8693fa39e9cca6e45f9613167830b132045d92cb7420b07a1134_prof);

    }

    // line 15
    public function block_navbar_tabs($context, array $blocks = array())
    {
        $__internal_ba517f60aed88b7a6fbb87b578211ba5532b6b5068dd5c6146d4492c6b2f9a81 = $this->env->getExtension("native_profiler");
        $__internal_ba517f60aed88b7a6fbb87b578211ba5532b6b5068dd5c6146d4492c6b2f9a81->enter($__internal_ba517f60aed88b7a6fbb87b578211ba5532b6b5068dd5c6146d4492c6b2f9a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_tabs"));

        // line 16
        echo "    ";
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("template" => "OroNavigationBundle:Menu:_dots_tabs.html.twig", "depth" => 1));
        // line 17
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "
";
        
        $__internal_ba517f60aed88b7a6fbb87b578211ba5532b6b5068dd5c6146d4492c6b2f9a81->leave($__internal_ba517f60aed88b7a6fbb87b578211ba5532b6b5068dd5c6146d4492c6b2f9a81_prof);

    }

    // line 20
    public function block_navbar_tabs_content($context, array $blocks = array())
    {
        $__internal_11b760f5e9bc028098323d18e8d286a5f77c57a8247097a2fbaa25d0f73485b7 = $this->env->getExtension("native_profiler");
        $__internal_11b760f5e9bc028098323d18e8d286a5f77c57a8247097a2fbaa25d0f73485b7->enter($__internal_11b760f5e9bc028098323d18e8d286a5f77c57a8247097a2fbaa25d0f73485b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar_tabs_content"));

        // line 21
        echo "    ";
        $context["options"] = twig_array_merge((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), array("template" => "OroNavigationBundle:Menu:_dots_tabs-content.html.twig", "depth" => 1));
        // line 22
        echo "    ";
        echo $this->env->getExtension('knp_menu')->render((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        echo "
";
        
        $__internal_11b760f5e9bc028098323d18e8d286a5f77c57a8247097a2fbaa25d0f73485b7->leave($__internal_11b760f5e9bc028098323d18e8d286a5f77c57a8247097a2fbaa25d0f73485b7_prof);

    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Menu:dots_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 22,  106 => 21,  100 => 20,  90 => 17,  87 => 16,  81 => 15,  71 => 11,  66 => 10,  63 => 9,  57 => 8,  46 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
