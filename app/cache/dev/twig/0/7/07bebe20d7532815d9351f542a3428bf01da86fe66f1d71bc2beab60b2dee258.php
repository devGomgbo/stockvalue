<?php

/* OroDashboardBundle:Dashboard:tabbedWidget.html.twig */
class __TwigTemplate_07bebe20d7532815d9351f542a3428bf01da86fe66f1d71bc2beab60b2dee258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroDashboardBundle:Dashboard:widget.html.twig", "OroDashboardBundle:Dashboard:tabbedWidget.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'tab_content' => array($this, 'block_tab_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroDashboardBundle:Dashboard:widget.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a77e785dc8c1b7ce5197671e185d73e055b94f9da29d76996626cfe9350255b5 = $this->env->getExtension("native_profiler");
        $__internal_a77e785dc8c1b7ce5197671e185d73e055b94f9da29d76996626cfe9350255b5->enter($__internal_a77e785dc8c1b7ce5197671e185d73e055b94f9da29d76996626cfe9350255b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroDashboardBundle:Dashboard:tabbedWidget.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a77e785dc8c1b7ce5197671e185d73e055b94f9da29d76996626cfe9350255b5->leave($__internal_a77e785dc8c1b7ce5197671e185d73e055b94f9da29d76996626cfe9350255b5_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_9bf30df362cf8ac72462f97cf00d262d75431bde9a4c9b77f23f48dae4114fab = $this->env->getExtension("native_profiler");
        $__internal_9bf30df362cf8ac72462f97cf00d262d75431bde9a4c9b77f23f48dae4114fab->enter($__internal_9bf30df362cf8ac72462f97cf00d262d75431bde9a4c9b77f23f48dae4114fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"tab-container\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tabs"]) ? $context["tabs"] : $this->getContext($context, "tabs")));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 7
            echo "                <li";
            if (((isset($context["activeTab"]) ? $context["activeTab"] : $this->getContext($context, "activeTab")) == $this->getAttribute($context["tab"], "name", array()))) {
                echo " class=\"active\"";
            }
            echo "><a
                    href=\"javascript:void(0);\" class=\"no-hash tab-button\"
                    data-name=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "url", array()), "html", null, true);
            echo "\">
                        ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["tab"], "label", array()), "html", null, true);
            echo "
                        ";
            // line 11
            if ($this->getAttribute($context["tab"], "afterHtml", array(), "any", true, true)) {
                // line 12
                echo "                            ";
                echo $this->getAttribute($context["tab"], "afterHtml", array());
                echo "
                        ";
            }
            // line 14
            echo "                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        </ul>
        <div class=\"tab-content\">
            <div class=\"content\">
                ";
        // line 20
        $this->displayBlock('tab_content', $context, $blocks);
        // line 23
        echo "            </div>
        </div>
    </div>
    <script type=\"text/javascript\">
        require(['jquery', 'underscore', 'oroui/js/mediator', 'oroui/js/error', 'oroui/js/app/views/loading-mask-view'],
        function(\$, _, mediator, error, LoadingMask){
            var loadingMask = null;
            \$(document).on('click', '#";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["widgetContentId"]) ? $context["widgetContentId"] : $this->getContext($context, "widgetContentId")), "html", null, true);
        echo " .tab-button', function (e) {
                var \$el = \$(this);
                var \$prevTab = \$el.closest('.nav-tabs').find('li.active');
                var \$currentTab = \$el.closest('li');
                \$prevTab.removeClass('active');
                \$currentTab.addClass('active');

                var \$tabContent = \$el.closest('.widget-content').find('.tab-content');
                if (!loadingMask) {
                    loadingMask = new LoadingMask({container: \$tabContent});
                }

                loadingMask.show();
                \$.ajax({
                    url: \$el.data('url'),
                    dataType: 'html',
                    error: function(jqXHR) {
                        loadingMask.hide();
                        \$currentTab.removeClass('active');
                        \$prevTab.addClass('active');
                        error.handle({}, jqXHR, {enforce: true});
                    },
                    success: function(data) {
                        \$tabContent.find('.content')
                            .trigger('content:remove')
                            .html(data)
                            .trigger('content:changed');
                        loadingMask.hide();
                    }
                });
            });
        });
    </script>
    ";
        // line 63
        $this->displayParentBlock("content", $context, $blocks);
        echo "
";
        
        $__internal_9bf30df362cf8ac72462f97cf00d262d75431bde9a4c9b77f23f48dae4114fab->leave($__internal_9bf30df362cf8ac72462f97cf00d262d75431bde9a4c9b77f23f48dae4114fab_prof);

    }

    // line 20
    public function block_tab_content($context, array $blocks = array())
    {
        $__internal_efcff5f27244ae614e8c1b5bb808fae82ab1d144eea084d9a4a0fa2c528630bf = $this->env->getExtension("native_profiler");
        $__internal_efcff5f27244ae614e8c1b5bb808fae82ab1d144eea084d9a4a0fa2c528630bf->enter($__internal_efcff5f27244ae614e8c1b5bb808fae82ab1d144eea084d9a4a0fa2c528630bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_content"));

        // line 21
        echo "                    ";
        echo (isset($context["activeTabContent"]) ? $context["activeTabContent"] : $this->getContext($context, "activeTabContent"));
        echo "
                ";
        
        $__internal_efcff5f27244ae614e8c1b5bb808fae82ab1d144eea084d9a4a0fa2c528630bf->leave($__internal_efcff5f27244ae614e8c1b5bb808fae82ab1d144eea084d9a4a0fa2c528630bf_prof);

    }

    public function getTemplateName()
    {
        return "OroDashboardBundle:Dashboard:tabbedWidget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 21,  144 => 20,  135 => 63,  99 => 30,  90 => 23,  88 => 20,  83 => 17,  75 => 14,  69 => 12,  67 => 11,  63 => 10,  57 => 9,  49 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }
}
