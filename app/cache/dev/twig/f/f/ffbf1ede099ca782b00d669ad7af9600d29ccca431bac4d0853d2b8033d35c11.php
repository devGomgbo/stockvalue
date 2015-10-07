<?php

/* OroUIBundle::page_title_block.html.twig */
class __TwigTemplate_ffbf1ede099ca782b00d669ad7af9600d29ccca431bac4d0853d2b8033d35c11 extends Twig_Template
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
        $__internal_b870df5e379afeae28dce6bf439724b8f1cdaacb34860ce3e1c7fefd27222e74 = $this->env->getExtension("native_profiler");
        $__internal_b870df5e379afeae28dce6bf439724b8f1cdaacb34860ce3e1c7fefd27222e74->enter($__internal_b870df5e379afeae28dce6bf439724b8f1cdaacb34860ce3e1c7fefd27222e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle::page_title_block.html.twig"));

        // line 1
        if (array_key_exists("title", $context)) {
            // line 2
            echo "    <div class=\"pull-left\">
        <h1 class=\"oro-subtitle\">";
            // line 3
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "</h1>
    </div>
";
        }
        
        $__internal_b870df5e379afeae28dce6bf439724b8f1cdaacb34860ce3e1c7fefd27222e74->leave($__internal_b870df5e379afeae28dce6bf439724b8f1cdaacb34860ce3e1c7fefd27222e74_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle::page_title_block.html.twig";
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
