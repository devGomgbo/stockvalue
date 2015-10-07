<?php

/* OroDataGridBundle:js:view-name-modal.html.twig */
class __TwigTemplate_e73d368f32e9e9f3acec7cc34f40161d041ead2c6c9e6397752aeaf891a82c19 extends Twig_Template
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
        $__internal_3d46bd10b3a16be049efc7a036a3fb702e0d7023fb94ee7c9e85647ab42f0921 = $this->env->getExtension("native_profiler");
        $__internal_3d46bd10b3a16be049efc7a036a3fb702e0d7023fb94ee7c9e85647ab42f0921->enter($__internal_3d46bd10b3a16be049efc7a036a3fb702e0d7023fb94ee7c9e85647ab42f0921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:view-name-modal.html.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"template-datagrid-view-name-modal\">
    <div class=\"form-horizontal\">
        <div class=\"control-group\">
            <label class=\"control-label\" for=\"gridViewName\"><%= label %>:</label>
            <div class=\"controls\">
                <input id=\"gridViewName\" name=\"name\" type=\"text\" value=\"<%= value %>\">
            </div>
        </div>
    </div>
</script>

<script type=\"text/template\" id=\"template-datagrid-view-name-error-modal\">
    <span for=\"gridViewName\" class=\"validation-failed\"><%= error %></span>
</script>
";
        
        $__internal_3d46bd10b3a16be049efc7a036a3fb702e0d7023fb94ee7c9e85647ab42f0921->leave($__internal_3d46bd10b3a16be049efc7a036a3fb702e0d7023fb94ee7c9e85647ab42f0921_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:view-name-modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
