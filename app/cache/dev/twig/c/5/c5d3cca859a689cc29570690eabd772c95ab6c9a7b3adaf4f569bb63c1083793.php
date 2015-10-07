<?php

/* OroCalendarBundle:Form:fields.html.twig */
class __TwigTemplate_c5d3cca859a689cc29570690eabd772c95ab6c9a7b3adaf4f569bb63c1083793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'oro_calendar_choice_row' => array($this, 'block_oro_calendar_choice_row'),
            'oro_calendar_choice_template_row' => array($this, 'block_oro_calendar_choice_template_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5996e7b6de076e6bfebe3c93dd55c231bbee0f7173b95ba0c5a0a617ccf49b3e = $this->env->getExtension("native_profiler");
        $__internal_5996e7b6de076e6bfebe3c93dd55c231bbee0f7173b95ba0c5a0a617ccf49b3e->enter($__internal_5996e7b6de076e6bfebe3c93dd55c231bbee0f7173b95ba0c5a0a617ccf49b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroCalendarBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('oro_calendar_choice_row', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('oro_calendar_choice_template_row', $context, $blocks);
        
        $__internal_5996e7b6de076e6bfebe3c93dd55c231bbee0f7173b95ba0c5a0a617ccf49b3e->leave($__internal_5996e7b6de076e6bfebe3c93dd55c231bbee0f7173b95ba0c5a0a617ccf49b3e_prof);

    }

    // line 1
    public function block_oro_calendar_choice_row($context, array $blocks = array())
    {
        $__internal_57410539f919be81dc3e816fd3402b88192eb13d5323f19c7fa4b818cfd99db3 = $this->env->getExtension("native_profiler");
        $__internal_57410539f919be81dc3e816fd3402b88192eb13d5323f19c7fa4b818cfd99db3->enter($__internal_57410539f919be81dc3e816fd3402b88192eb13d5323f19c7fa4b818cfd99db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_calendar_choice_row"));

        // line 2
        echo "    ";
        if ( !twig_test_empty((isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices")))) {
            // line 3
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 1)) {
                // line 4
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row');
                echo "
        ";
            } else {
                // line 6
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'row', array("label" => false));
                echo "
        ";
            }
            // line 8
            echo "    ";
        }
        
        $__internal_57410539f919be81dc3e816fd3402b88192eb13d5323f19c7fa4b818cfd99db3->leave($__internal_57410539f919be81dc3e816fd3402b88192eb13d5323f19c7fa4b818cfd99db3_prof);

    }

    // line 11
    public function block_oro_calendar_choice_template_row($context, array $blocks = array())
    {
        $__internal_ec890486e1971be99d8a0ea863b02dce2cf6266ac547530c5e20edfe96c758f8 = $this->env->getExtension("native_profiler");
        $__internal_ec890486e1971be99d8a0ea863b02dce2cf6266ac547530c5e20edfe96c758f8->enter($__internal_ec890486e1971be99d8a0ea863b02dce2cf6266ac547530c5e20edfe96c758f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "oro_calendar_choice_template_row"));

        // line 12
        echo "    <% var ";
        echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
        echo "Template = '';
    if (";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "TemplateType === 'single') {
        ";
        // line 14
        echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
        echo "Template = '";
        // line 15
        ob_start();
        // line 16
        echo "        <div class=\"control-group\">
            <div class=\"controls\">
                <div id=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" class=\"horizontal validate-group\">
                    <div class=\"oro-clearfix\">
                        <input type=\"checkbox\" id=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_0\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "[]\" value=\"< %= calendars[0].uid % >\">
                        <label for=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "_0\">< %= ";
        echo twig_jsonencode_filter($this->env->getExtension('translator')->trans("oro.calendar.add_to_calendar"));
        echo ".replace(\"%name%\", calendars[0].name) % ><em>&nbsp;</em></label>
                    </div>
                </div>
            </div>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 27
        echo "';
    } else if (";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "TemplateType === 'multiple') {
        ";
        // line 29
        echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
        echo "Template = '";
        // line 30
        ob_start();
        // line 31
        echo "        <div class=\"control-group\">
            <label data-required=\"1\" class=\"control-label required\" for=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))), "html", null, true);
        echo "<em>*</em></label>
            <div class=\"controls\">
                <select id=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\" data-required=\"1\">
                < % for (var i = 0; i < calendars.length; i++) { % >
                    <option value=\"< %= calendars[i].uid % >\">< %= calendars[i].name % ></option>
                < % } % >
                </select>
            </div>
        </div>
        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 42
        echo "';
    } %>
    <% if (";
        // line 44
        echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
        echo "Template) { %>
        <%= _.template(";
        // line 45
        echo (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"));
        echo "Template.replace(/\\< %/g, '<' + '%').replace(/% \\>/g, '%' + '>'))({calendars: calendars}) %>
    <% } %>
";
        
        $__internal_ec890486e1971be99d8a0ea863b02dce2cf6266ac547530c5e20edfe96c758f8->leave($__internal_ec890486e1971be99d8a0ea863b02dce2cf6266ac547530c5e20edfe96c758f8_prof);

    }

    public function getTemplateName()
    {
        return "OroCalendarBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  157 => 45,  153 => 44,  149 => 42,  136 => 34,  129 => 32,  126 => 31,  124 => 30,  121 => 29,  117 => 28,  114 => 27,  103 => 21,  97 => 20,  92 => 18,  88 => 16,  86 => 15,  83 => 14,  79 => 13,  74 => 12,  68 => 11,  60 => 8,  54 => 6,  48 => 4,  45 => 3,  42 => 2,  36 => 1,  29 => 11,  26 => 10,  24 => 1,);
    }
}
