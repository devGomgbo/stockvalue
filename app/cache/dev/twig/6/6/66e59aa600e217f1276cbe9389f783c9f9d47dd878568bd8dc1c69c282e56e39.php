<?php

/* OroNavigationBundle:Include:contentTags.html.twig */
class __TwigTemplate_66e59aa600e217f1276cbe9389f783c9f9d47dd878568bd8dc1c69c282e56e39 extends Twig_Template
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
        $__internal_8ed9795fd0d95e1975a61a0634c2d656fb25eba20c98f63f83b3c1d63610a2cb = $this->env->getExtension("native_profiler");
        $__internal_8ed9795fd0d95e1975a61a0634c2d656fb25eba20c98f63f83b3c1d63610a2cb->enter($__internal_8ed9795fd0d95e1975a61a0634c2d656fb25eba20c98f63f83b3c1d63610a2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroNavigationBundle:Include:contentTags.html.twig"));

        
        $__internal_8ed9795fd0d95e1975a61a0634c2d656fb25eba20c98f63f83b3c1d63610a2cb->leave($__internal_8ed9795fd0d95e1975a61a0634c2d656fb25eba20c98f63f83b3c1d63610a2cb_prof);

    }

    // line 1
    public function getnavigationContentTags($__data__ = null, $__includeCollectionTag__ = false)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "includeCollectionTag" => $__includeCollectionTag__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_04726ecb941429637bc47e12fa1a6ed9ceb084d5176e3d7d8366dc5dfddf40bb = $this->env->getExtension("native_profiler");
            $__internal_04726ecb941429637bc47e12fa1a6ed9ceb084d5176e3d7d8366dc5dfddf40bb->enter($__internal_04726ecb941429637bc47e12fa1a6ed9ceb084d5176e3d7d8366dc5dfddf40bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "navigationContentTags"));

            // line 2
            echo "    <script type=\"text/javascript\">
        require([ 'oronavigation/js/content-manager'],
        function (contentManager) {
            contentManager.tagContent(";
            // line 5
            echo twig_jsonencode_filter($this->env->getExtension('oro_navigation.content_tags')->generate((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["includeCollectionTag"]) ? $context["includeCollectionTag"] : $this->getContext($context, "includeCollectionTag"))));
            echo ");
        });
    </script>
";
            
            $__internal_04726ecb941429637bc47e12fa1a6ed9ceb084d5176e3d7d8366dc5dfddf40bb->leave($__internal_04726ecb941429637bc47e12fa1a6ed9ceb084d5176e3d7d8366dc5dfddf40bb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroNavigationBundle:Include:contentTags.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 5,  43 => 2,  27 => 1,);
    }
}
