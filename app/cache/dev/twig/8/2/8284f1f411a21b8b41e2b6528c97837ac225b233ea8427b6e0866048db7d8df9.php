<?php

/* OroSearchBundle:Search:searchBar.html.twig */
class __TwigTemplate_8284f1f411a21b8b41e2b6528c97837ac225b233ea8427b6e0866048db7d8df9 extends Twig_Template
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
        $__internal_19dc17e090bb86429beaac9382823600d90f0bac44296b9ddb47d53ae0e8b79d = $this->env->getExtension("native_profiler");
        $__internal_19dc17e090bb86429beaac9382823600d90f0bac44296b9ddb47d53ae0e8b79d->enter($__internal_19dc17e090bb86429beaac9382823600d90f0bac44296b9ddb47d53ae0e8b79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSearchBundle:Search:searchBar.html.twig"));

        // line 1
        if ($this->env->getExtension('oro_security_extension')->checkResourceIsGranted("oro_search")) {
            // line 2
            echo "<div class=\"dropdown header-dropdown-search header-utility-dropdown\">
    <a href=\"javascript:void(0);\" class=\"dropdown-toggle oro-dropdown-toggle\" title=\"";
            // line 3
            echo $this->env->getExtension('translator')->getTranslator()->trans("Search", array(), "messages");
            echo "\"><i class=\"icon-search\"></i></a>
    <ul class=\"dropdown-menu\">
        <li class=\"nav-header nav-header-title\">";
            // line 5
            echo $this->env->getExtension('translator')->getTranslator()->trans("Search", array(), "messages");
            echo "</li>
        <li class=\"dark\">
            <form method=\"get\" action=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("oro_search_results");
            echo "\" style=\"margin: 0\" id=\"top-search-form\" class=\"search-form\">
                <div id=\"search-div\" class=\"input-append input-prepend pull-left header-search\">
                    <div class=\"btn-group btn-block\">
                        <button data-toggle=\"dropdown\" class=\"btn dropdown-toggle\" id=\"search-bar-button\">
                            <span class=\"search-bar-type\">";
            // line 11
            echo $this->env->getExtension('translator')->getTranslator()->trans("All", array(), "messages");
            echo "</span>
                            <span class=\"icon-caret-down\"></span>
                        </button>
                        <ul class=\"dropdown-menu\" id=\"search-bar-dropdown\">
                            <li data-alias=\"\">
                                <a href=\"javascript: void(0);\">";
            // line 16
            echo $this->env->getExtension('translator')->getTranslator()->trans("All", array(), "messages");
            echo "</a>
                            </li>
                            ";
            // line 18
            $context["searchEntities"] = array();
            // line 19
            echo "                            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["className"] => $context["alias"]) {
                // line 20
                echo "                                ";
                $context["entityType"] = $this->env->getExtension('translator')->trans($this->env->getExtension('oro_entity_config')->getClassConfigValue($context["className"], "label"));
                // line 21
                echo "                                ";
                $context["searchEntities"] = twig_array_merge((isset($context["searchEntities"]) ? $context["searchEntities"] : $this->getContext($context, "searchEntities")), array($context["alias"] => (isset($context["entityType"]) ? $context["entityType"] : $this->getContext($context, "entityType"))));
                // line 22
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['className'], $context['alias'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "
                            ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["searchEntities"]) ? $context["searchEntities"] : $this->getContext($context, "searchEntities"))));
            foreach ($context['_seq'] as $context["alias"] => $context["name"]) {
                // line 25
                echo "                                <li data-alias=\"";
                echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                echo "\">
                                    <a href=\"javascript: void(0);\">";
                // line 26
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['alias'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                        </ul>
                    </div>
                    <div class=\"header-search-frame\">
                        <input type=\"hidden\" name=\"from\" id=\"search-bar-from\" value=\"\"/>
                        <input type=\"text\" id=\"search-bar-search\" class=\"span2 search\" placeholder=\"\" name=\"search\" value=\"\" autocomplete=\"off\"/>
                        <button type=\"submit\" class=\"btn btn-search btn-primary\">";
            // line 34
            echo $this->env->getExtension('translator')->getTranslator()->trans("Go", array(), "messages");
            echo "</button>
                        <div class=\"custom-dropdown\" id=\"search-dropdown\"></div>
                        <div class=\"search-more hide\"><a href=\"javascript:void(0);\" class=\"search-view-more-link\">";
            // line 36
            echo $this->env->getExtension('translator')->getTranslator()->trans("View more...", array(), "messages");
            echo "</a></div>
                    </div>
                </div>
            </form>
        </li>
    </ul>
</div>
<script type=\"text/javascript\">
    require(['orosearch/js/init-search-bar'])
</script>
";
        }
        
        $__internal_19dc17e090bb86429beaac9382823600d90f0bac44296b9ddb47d53ae0e8b79d->leave($__internal_19dc17e090bb86429beaac9382823600d90f0bac44296b9ddb47d53ae0e8b79d_prof);

    }

    public function getTemplateName()
    {
        return "OroSearchBundle:Search:searchBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 36,  104 => 34,  97 => 29,  88 => 26,  83 => 25,  79 => 24,  76 => 23,  70 => 22,  67 => 21,  64 => 20,  59 => 19,  57 => 18,  52 => 16,  44 => 11,  37 => 7,  32 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }
}
