<?php

/* OroUIBundle:actions:index.html.twig */
class __TwigTemplate_54f9ce1bbf0e4eb993587bdf6ce6a2d68740b87634de652ac6282becdb1d6693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'before_content_addition' => array($this, 'block_before_content_addition'),
            'content' => array($this, 'block_content'),
            'navButtons' => array($this, 'block_navButtons'),
            'content_datagrid' => array($this, 'block_content_datagrid'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate($this->getAttribute((isset($context["bap"]) ? $context["bap"] : $this->getContext($context, "bap")), "layout", array()), "OroUIBundle:actions:index.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31488cc9fe761e8611e0d9884897441daa3036b597b60eacaf54bd2c629fdca7 = $this->env->getExtension("native_profiler");
        $__internal_31488cc9fe761e8611e0d9884897441daa3036b597b60eacaf54bd2c629fdca7->enter($__internal_31488cc9fe761e8611e0d9884897441daa3036b597b60eacaf54bd2c629fdca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroUIBundle:actions:index.html.twig"));

        // line 2
        $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroUIBundle:actions:index.html.twig", 2);
        // line 3
        $context["dataGrid"] = $this->loadTemplate("OroDataGridBundle::macros.html.twig", "OroUIBundle:actions:index.html.twig", 3);
        // line 4
        $context["buttonsPlaceholderData"] = array();
        // line 5
        if (array_key_exists("entity_class", $context)) {
            // line 6
            $context["buttonsPlaceholderData"] = array("entity_class" => (isset($context["entity_class"]) ? $context["entity_class"] : $this->getContext($context, "entity_class")));
        }
        // line 1
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31488cc9fe761e8611e0d9884897441daa3036b597b60eacaf54bd2c629fdca7->leave($__internal_31488cc9fe761e8611e0d9884897441daa3036b597b60eacaf54bd2c629fdca7_prof);

    }

    // line 9
    public function block_before_content_addition($context, array $blocks = array())
    {
        $__internal_37e39bc89f1b197bdb8afae59ece9d07a37d3ced6ab00339e8ad4cb68351d952 = $this->env->getExtension("native_profiler");
        $__internal_37e39bc89f1b197bdb8afae59ece9d07a37d3ced6ab00339e8ad4cb68351d952->enter($__internal_37e39bc89f1b197bdb8afae59ece9d07a37d3ced6ab00339e8ad4cb68351d952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "before_content_addition"));

        // line 10
        echo "    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("index_before_content_addition", $context)) ? (_twig_default_filter((isset($context["index_before_content_addition"]) ? $context["index_before_content_addition"] : $this->getContext($context, "index_before_content_addition")), "index_before_content_addition")) : ("index_before_content_addition")), array());
        
        $__internal_37e39bc89f1b197bdb8afae59ece9d07a37d3ced6ab00339e8ad4cb68351d952->leave($__internal_37e39bc89f1b197bdb8afae59ece9d07a37d3ced6ab00339e8ad4cb68351d952_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_403fa36547f661c4f50b4996030a14e7e9b2bd6e11a624791b58fee801506713 = $this->env->getExtension("native_profiler");
        $__internal_403fa36547f661c4f50b4996030a14e7e9b2bd6e11a624791b58fee801506713->enter($__internal_403fa36547f661c4f50b4996030a14e7e9b2bd6e11a624791b58fee801506713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div class=\"container-fluid page-title\">
        <div class=\"navigation clearfix navbar-extra navbar-extra-right\">
            <div class=\"row\">
                <div class=\"pull-left pull-left-extra\">
                    <div class=\"pull-left\">
                        <h1 class=\"oro-subtitle\">";
        // line 19
        echo twig_escape_filter($this->env, ((array_key_exists("pageTitle", $context)) ? ((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle"))) : ("")), "html", null, true);
        echo "</h1>
                    </div>
                </div>
                <div class=\"pull-right title-buttons-container invisible\"
                         data-page-component-module=\"oroui/js/app/components/view-component\"
                         data-page-component-options=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array("view" => "oroui/js/app/views/hidden-initialization-view")), "html", null, true);
        echo "\"
                         data-layout=\"separate\">
                    ";
        // line 26
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("index_navButtons_before", $context)) ? (_twig_default_filter((isset($context["index_navButtons_before"]) ? $context["index_navButtons_before"] : $this->getContext($context, "index_navButtons_before")), "index_navButtons_before")) : ("index_navButtons_before")), (isset($context["buttonsPlaceholderData"]) ? $context["buttonsPlaceholderData"] : $this->getContext($context, "buttonsPlaceholderData")));
        // line 27
        echo "                    ";
        $this->displayBlock('navButtons', $context, $blocks);
        // line 28
        echo "                    ";
        echo $this->env->getExtension('oro_placeholder')->renderPlaceholder(((array_key_exists("index_navButtons_after", $context)) ? (_twig_default_filter((isset($context["index_navButtons_after"]) ? $context["index_navButtons_after"] : $this->getContext($context, "index_navButtons_after")), "index_navButtons_after")) : ("index_navButtons_after")), (isset($context["buttonsPlaceholderData"]) ? $context["buttonsPlaceholderData"] : $this->getContext($context, "buttonsPlaceholderData")));
        // line 29
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        // line 33
        $this->displayBlock('content_datagrid', $context, $blocks);
        
        $__internal_403fa36547f661c4f50b4996030a14e7e9b2bd6e11a624791b58fee801506713->leave($__internal_403fa36547f661c4f50b4996030a14e7e9b2bd6e11a624791b58fee801506713_prof);

    }

    // line 27
    public function block_navButtons($context, array $blocks = array())
    {
        $__internal_1d91498866ca38365170ef34cefcb2c5232d9a181b8ff1d1a49593154e3fab5f = $this->env->getExtension("native_profiler");
        $__internal_1d91498866ca38365170ef34cefcb2c5232d9a181b8ff1d1a49593154e3fab5f->enter($__internal_1d91498866ca38365170ef34cefcb2c5232d9a181b8ff1d1a49593154e3fab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navButtons"));

        
        $__internal_1d91498866ca38365170ef34cefcb2c5232d9a181b8ff1d1a49593154e3fab5f->leave($__internal_1d91498866ca38365170ef34cefcb2c5232d9a181b8ff1d1a49593154e3fab5f_prof);

    }

    // line 33
    public function block_content_datagrid($context, array $blocks = array())
    {
        $__internal_938ed16c99fde19754e880a471f17fdfeaee580d6688e143a5d32d3345a16253 = $this->env->getExtension("native_profiler");
        $__internal_938ed16c99fde19754e880a471f17fdfeaee580d6688e143a5d32d3345a16253->enter($__internal_938ed16c99fde19754e880a471f17fdfeaee580d6688e143a5d32d3345a16253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_datagrid"));

        // line 34
        echo "        ";
        if (array_key_exists("gridName", $context)) {
            // line 35
            echo "            ";
            if (array_key_exists("gridScope", $context)) {
                // line 36
                echo "                ";
                $context["gridName"] = $this->env->getExtension('oro_datagrid')->buildGridFullName((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), (isset($context["gridScope"]) ? $context["gridScope"] : $this->getContext($context, "gridScope")));
                // line 37
                echo "            ";
            }
            // line 38
            echo "            ";
            $context["renderParams"] = twig_array_merge(((array_key_exists("renderParams", $context)) ? (_twig_default_filter((isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")), array())) : (array())), array("enableFullScreenLayout" => true, "enableViews" => true, "showViewsInNavbar" => true));
            // line 43
            echo "
            ";
            // line 44
            echo $context["dataGrid"]->getrenderGrid((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")), ((array_key_exists("params", $context)) ? (_twig_default_filter((isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")), array())) : (array())), (isset($context["renderParams"]) ? $context["renderParams"] : $this->getContext($context, "renderParams")));
            echo "

            ";
            // line 47
            echo "            <script type=\"text/javascript\">
                require(['oronavigation/js/content/grid-builder'], function (GridTagBuilder) {
                    GridTagBuilder.allowTracking(";
            // line 49
            echo twig_jsonencode_filter((isset($context["gridName"]) ? $context["gridName"] : $this->getContext($context, "gridName")));
            echo ");
                });
            </script>
        ";
        }
        // line 53
        echo "    ";
        
        $__internal_938ed16c99fde19754e880a471f17fdfeaee580d6688e143a5d32d3345a16253->leave($__internal_938ed16c99fde19754e880a471f17fdfeaee580d6688e143a5d32d3345a16253_prof);

    }

    public function getTemplateName()
    {
        return "OroUIBundle:actions:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  153 => 49,  149 => 47,  144 => 44,  141 => 43,  138 => 38,  135 => 37,  132 => 36,  129 => 35,  126 => 34,  120 => 33,  109 => 27,  102 => 33,  96 => 29,  93 => 28,  90 => 27,  88 => 26,  83 => 24,  75 => 19,  68 => 14,  62 => 13,  54 => 10,  48 => 9,  41 => 1,  38 => 6,  36 => 5,  34 => 4,  32 => 3,  30 => 2,  21 => 1,);
    }
}
