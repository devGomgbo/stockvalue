<?php

/* OroWindowsBundle:Include:javascript.html.twig */
class __TwigTemplate_a1ea288ee83a6008ba4703b980b01b918fbe99310678303631c2f3b68eab9f2f extends Twig_Template
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
        $__internal_01a1bfda35678abe00f0638c49ed0eadb20e8c1fa2b601e212f2adaab6c46627 = $this->env->getExtension("native_profiler");
        $__internal_01a1bfda35678abe00f0638c49ed0eadb20e8c1fa2b601e212f2adaab6c46627->enter($__internal_01a1bfda35678abe00f0638c49ed0eadb20e8c1fa2b601e212f2adaab6c46627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroWindowsBundle:Include:javascript.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    require(['orowindows/js/dialog/state/model'],
    function(StateModel) {
        StateModel.prototype.urlRoot = ";
        // line 4
        echo twig_jsonencode_filter($this->env->getExtension('routing')->getPath("oro_api_get_windows"));
        echo ";
    });
</script>
";
        
        $__internal_01a1bfda35678abe00f0638c49ed0eadb20e8c1fa2b601e212f2adaab6c46627->leave($__internal_01a1bfda35678abe00f0638c49ed0eadb20e8c1fa2b601e212f2adaab6c46627_prof);

    }

    public function getTemplateName()
    {
        return "OroWindowsBundle:Include:javascript.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
