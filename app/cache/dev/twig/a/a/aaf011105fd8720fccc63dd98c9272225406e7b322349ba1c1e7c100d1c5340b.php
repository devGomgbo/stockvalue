<?php

/* OroDataGridBundle:js:grid-view-label.html.twig */
class __TwigTemplate_aaf011105fd8720fccc63dd98c9272225406e7b322349ba1c1e7c100d1c5340b extends Twig_Template
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
        $__internal_46dfb0be304c83b09f0f2fb17ad17d21f12d179f615a0a139533acd15708de5d = $this->env->getExtension("native_profiler");
        $__internal_46dfb0be304c83b09f0f2fb17ad17d21f12d179f615a0a139533acd15708de5d->enter($__internal_46dfb0be304c83b09f0f2fb17ad17d21f12d179f615a0a139533acd15708de5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDataGridBundle:js:grid-view-label.html.twig"));

        // line 1
        echo "<script type=\"text/template\" id=\"template-datagrid-grid-view-label\">
    <% if (navbar) { %>
        <h1 class=\"oro-subtitle\"><%= title %><span class=\"caret\"></span></h1>
    <% } else { %>
        <%= title %><span class=\"caret\"></span>
    <% } %>
</script>
";
        
        $__internal_46dfb0be304c83b09f0f2fb17ad17d21f12d179f615a0a139533acd15708de5d->leave($__internal_46dfb0be304c83b09f0f2fb17ad17d21f12d179f615a0a139533acd15708de5d_prof);

    }

    public function getTemplateName()
    {
        return "OroDataGridBundle:js:grid-view-label.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
