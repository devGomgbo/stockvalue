<?php

/* OroNavigationBundle::macros.html.twig */
class __TwigTemplate_c74154b3bf234de4069a5cbed0a11312921900ae647e59a0981a8f85cec15669 extends Twig_Template
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
        $__internal_e339137270726658c6ba8809cc79a1f66ab7f35634f2f0e8a52eb2a85c00b22f = $this->env->getExtension("native_profiler");
        $__internal_e339137270726658c6ba8809cc79a1f66ab7f35634f2f0e8a52eb2a85c00b22f->enter($__internal_e339137270726658c6ba8809cc79a1f66ab7f35634f2f0e8a52eb2a85c00b22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle::macros.html.twig"));

        
        $__internal_e339137270726658c6ba8809cc79a1f66ab7f35634f2f0e8a52eb2a85c00b22f->leave($__internal_e339137270726658c6ba8809cc79a1f66ab7f35634f2f0e8a52eb2a85c00b22f_prof);

    }

    // line 1
    public function getrenderClientLink($__config__ = null, $__urlParameters__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "config" => $__config__,
            "urlParameters" => $__urlParameters__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_49ff22c8c6de12a3d94223b1f35378ec4217826f8598c309d81c005e329e46d0 = $this->env->getExtension("native_profiler");
            $__internal_49ff22c8c6de12a3d94223b1f35378ec4217826f8598c309d81c005e329e46d0->enter($__internal_49ff22c8c6de12a3d94223b1f35378ec4217826f8598c309d81c005e329e46d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderClientLink"));

            // line 2
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroNavigationBundle::macros.html.twig", 2);
            // line 3
            echo "    ";
            echo             // line 4
$context["UI"]->getclientLink(array("dataUrl" => $this->env->getExtension('routing')->getPath($this->getAttribute(            // line 5
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "dataUrl", array()), (isset($context["urlParameters"]) ? $context["urlParameters"] : $this->getContext($context, "urlParameters"))), "aCss" => $this->getAttribute(            // line 6
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "aCss", array()), "iCss" => $this->getAttribute(            // line 7
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "iCss", array()), "label" => $this->env->getExtension('translator')->trans($this->getAttribute(            // line 8
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "label", array())), "widget" => array("type" => $this->getAttribute($this->getAttribute(            // line 10
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "type", array()), "multiple" => $this->getAttribute($this->getAttribute(            // line 11
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "multiple", array()), "refresh-widget-alias" => $this->getAttribute($this->getAttribute(            // line 12
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "refreshWidgetAlias", array()), "reload-grid-name" => $this->getAttribute($this->getAttribute(            // line 13
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "reloadGridName", array()), "options" => array("alias" => $this->getAttribute($this->getAttribute($this->getAttribute(            // line 15
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "options", array()), "alias", array()), "dialogOptions" => array("title" => $this->env->getExtension('translator')->trans($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 17
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "options", array()), "dialogOptions", array()), "title", array())), "allowMaximize" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 18
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "options", array()), "dialogOptions", array()), "allowMaximize", array()), "allowMinimize" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 19
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "options", array()), "dialogOptions", array()), "allowMinimize", array()), "dblclick" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 20
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "options", array()), "dialogOptions", array()), "dblclick", array()), "maximizedHeightDecreaseBy" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 21
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "options", array()), "dialogOptions", array()), "maximizedHeightDecreaseBy", array()), "width" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 22
(isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "widget", array()), "options", array()), "dialogOptions", array()), "width", array()))))));
            // line 27
            echo "
";
            
            $__internal_49ff22c8c6de12a3d94223b1f35378ec4217826f8598c309d81c005e329e46d0->leave($__internal_49ff22c8c6de12a3d94223b1f35378ec4217826f8598c309d81c005e329e46d0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  63 => 22,  62 => 21,  61 => 20,  60 => 19,  59 => 18,  58 => 17,  57 => 15,  56 => 13,  55 => 12,  54 => 11,  53 => 10,  52 => 8,  51 => 7,  50 => 6,  49 => 5,  48 => 4,  46 => 3,  43 => 2,  27 => 1,);
    }
}
