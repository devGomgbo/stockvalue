<?php

/* ::base.html.twig */
class __TwigTemplate_1003090499c4eff69e5cf49d84fdfac6d10e8e23d0c94a87d2718778b05de40b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("OroUIBundle:Default:index.html.twig", "::base.html.twig", 1);
        $this->blocks = array(
            'head_script' => array($this, 'block_head_script'),
            'head_style' => array($this, 'block_head_style'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OroUIBundle:Default:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79fa7a29fe13e8c04ba9bc8d32fd8a6287511a49d4381c957d0388acae36ca06 = $this->env->getExtension("native_profiler");
        $__internal_79fa7a29fe13e8c04ba9bc8d32fd8a6287511a49d4381c957d0388acae36ca06->enter($__internal_79fa7a29fe13e8c04ba9bc8d32fd8a6287511a49d4381c957d0388acae36ca06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79fa7a29fe13e8c04ba9bc8d32fd8a6287511a49d4381c957d0388acae36ca06->leave($__internal_79fa7a29fe13e8c04ba9bc8d32fd8a6287511a49d4381c957d0388acae36ca06_prof);

    }

    // line 3
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_f5425c12f93c6cc1dbdf4554b6ad1489cb67e5a622c1445877fb534b08cdeeb6 = $this->env->getExtension("native_profiler");
        $__internal_f5425c12f93c6cc1dbdf4554b6ad1489cb67e5a622c1445877fb534b08cdeeb6->enter($__internal_f5425c12f93c6cc1dbdf4554b6ad1489cb67e5a622c1445877fb534b08cdeeb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 4
        echo "    ";
        $this->displayParentBlock("head_script", $context, $blocks);
        echo "
    ";
        // line 5
        $this->displayBlock("head_script_component", $context, $blocks);
        echo "
";
        
        $__internal_f5425c12f93c6cc1dbdf4554b6ad1489cb67e5a622c1445877fb534b08cdeeb6->leave($__internal_f5425c12f93c6cc1dbdf4554b6ad1489cb67e5a622c1445877fb534b08cdeeb6_prof);

    }

    // line 8
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_7147d0e13ce8df2375dbb682bb3de4020872d8838ba1a62d62000bfcdc878607 = $this->env->getExtension("native_profiler");
        $__internal_7147d0e13ce8df2375dbb682bb3de4020872d8838ba1a62d62000bfcdc878607->enter($__internal_7147d0e13ce8df2375dbb682bb3de4020872d8838ba1a62d62000bfcdc878607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 9
        echo "    ";
        $this->displayParentBlock("head_style", $context, $blocks);
        echo "
    ";
        // line 10
        $this->displayBlock("head_style_component", $context, $blocks);
        echo "
";
        
        $__internal_7147d0e13ce8df2375dbb682bb3de4020872d8838ba1a62d62000bfcdc878607->leave($__internal_7147d0e13ce8df2375dbb682bb3de4020872d8838ba1a62d62000bfcdc878607_prof);

    }

    // line 13
    public function block_main($context, array $blocks = array())
    {
        $__internal_7c1117c1e26fa03bf850597654c94d62054482e601351e7b10ebce6c242e4e5b = $this->env->getExtension("native_profiler");
        $__internal_7c1117c1e26fa03bf850597654c94d62054482e601351e7b10ebce6c242e4e5b->enter($__internal_7c1117c1e26fa03bf850597654c94d62054482e601351e7b10ebce6c242e4e5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 14
        echo "    ";
        $this->displayParentBlock("main", $context, $blocks);
        echo "
    ";
        // line 15
        echo $this->env->getExtension('oro_windows')->render($this->env);
        echo "
";
        
        $__internal_7c1117c1e26fa03bf850597654c94d62054482e601351e7b10ebce6c242e4e5b->leave($__internal_7c1117c1e26fa03bf850597654c94d62054482e601351e7b10ebce6c242e4e5b_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 15,  82 => 14,  76 => 13,  67 => 10,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
