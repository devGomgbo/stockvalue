<?php

/* OroSyncBundle::maintenance_js.html.twig */
class __TwigTemplate_3b062e7d9478142cf350fbe0d3cd93c952013ba0b8a2f7263f8afa90ded3706a extends Twig_Template
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
        $__internal_2130b7498d814fdfebb6a42550f135527b94d35438ab2f2726f9532f2e133be6 = $this->env->getExtension("native_profiler");
        $__internal_2130b7498d814fdfebb6a42550f135527b94d35438ab2f2726f9532f2e133be6->enter($__internal_2130b7498d814fdfebb6a42550f135527b94d35438ab2f2726f9532f2e133be6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroSyncBundle::maintenance_js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    require(['orosync/js/sync', 'oroui/js/modal', 'orotranslation/js/translator'],
    function(sync, Modal, __) {
        var dialog = null;

        sync.subscribe('oro/maintenance', function (response) {
            var userId = null;
            ";
        // line 8
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 9
            echo "                userId = ";
            echo $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array());
            echo ";
            ";
        }
        // line 11
        echo "
            if (response.isOn && (!userId || parseInt(userId) != parseInt(response.userId))) {
                var regExp = new RegExp('\\n', 'g');
                if (dialog) {
                    dialog.close();
                    dialog.remove();
                }
                dialog = new Modal({
                    'content': __('oro.platform.maintenance_mode_on_message').replace(regExp, '<br/>'),
                    'className': 'modal oro-modal-danger oro-modal-maintenance',
                    'allowCancel': false,
                    'title': __('oro.platform.maintenance_mode_on_title')
                });
                dialog.open();
            } else if (dialog) {
                dialog.close();
            }
        });
    });
</script>
";
        
        $__internal_2130b7498d814fdfebb6a42550f135527b94d35438ab2f2726f9532f2e133be6->leave($__internal_2130b7498d814fdfebb6a42550f135527b94d35438ab2f2726f9532f2e133be6_prof);

    }

    public function getTemplateName()
    {
        return "OroSyncBundle::maintenance_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  33 => 9,  31 => 8,  22 => 1,);
    }
}
