<?php

/* OroEntityBundle:Collector:orm.html.twig */
class __TwigTemplate_6b85c111fdae59fe9a305132733d8177a612511cb4dfa033419d27a3ba11a257 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'stats' => array($this, 'block_stats'),
            'hydrations' => array($this, 'block_hydrations'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) ? ("WebProfilerBundle:Profiler:ajax_layout.html.twig") : ("WebProfilerBundle:Profiler:layout.html.twig")), "OroEntityBundle:Collector:orm.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fdbd3c56842236b956d51cb35350255afd930a252b02b2a48f85c3bcf270948a = $this->env->getExtension("native_profiler");
        $__internal_fdbd3c56842236b956d51cb35350255afd930a252b02b2a48f85c3bcf270948a->enter($__internal_fdbd3c56842236b956d51cb35350255afd930a252b02b2a48f85c3bcf270948a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroEntityBundle:Collector:orm.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdbd3c56842236b956d51cb35350255afd930a252b02b2a48f85c3bcf270948a->leave($__internal_fdbd3c56842236b956d51cb35350255afd930a252b02b2a48f85c3bcf270948a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5b11f9dc535fab556e79a47a8bdd68e27331e47d7feaf3f432234a970d58d04 = $this->env->getExtension("native_profiler");
        $__internal_f5b11f9dc535fab556e79a47a8bdd68e27331e47d7feaf3f432234a970d58d04->enter($__internal_f5b11f9dc535fab556e79a47a8bdd68e27331e47d7feaf3f432234a970d58d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "    <img width=\"20\" height=\"28\" alt=\"Doctrine ORM\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwgAADsIBFShKgAAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAc1JREFUSEutlb9Lw0AUxzMJ4u/BxcG/QhxcStdSBEXc2kUUV91KxcFujiIUBAeXghV0Mv1BV9OmpTRpOnaIKXZowUUFB2n8vnAp1FzTxuTg0x4v731yeXdNBdM0A4Ub9AM36Adu0A9CoVC4jUQiMhEKhUwiFoul4vH4Jq+AoGuUY+fb9eQSaIKEvn2RcJPZUM6fmj65LCEF6I68wmmwV2sJo9GodYd6vb6tadpjs9l8BQYPXH8Cu9lsdkZgg4SDwWCBHOQaCvP5fC+Xy51JkrSP4ktVVZ9RLI7hvtVqHYF1tsolntAC0rdSqbSDGPX1fRJjhRA1IPwiqSzLyXA4/EHxcdBg3/xHxpZfQZYED4qiJCD8tIvdYMJZmo8IIfoBPXCt6/pWu92+MQxDcgM5dyQE8zzhN7D6WC6XTxGbuodY4SLmo0JRFA8gq5KwVqtdeOkh4O6yDg7RyxMcm2OPPXSukFbGULHCvXQ6/ZLJZAw3kNNgQuem4Nj0bWmlUkkg5qWHc5g7ergKWQpiDcfm3OM5dD4y+2kKxWJxrdvtbnjpIVihOVdIg3rS6XQUoE1AYcLloTDw1xd9BPqCDfwvgFfgB27QD9ygH7jB/2MKvwXZez+M9nkbAAAAAElFTkSuQmCC\"/>
    <span class=\"sf-toolbar-status\">";
        // line 6
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrations:</b>
        <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydrationCount", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydration time</b>
        <span>";
        // line 15
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydrationTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Hydrated entities:</b>
        <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydratedEntities", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persists:</b>
        <span>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "persist", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Persist time</b>
        <span>";
        // line 27
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "persist", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detaches:</b>
        <span>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "detach", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Detach time</b>
        <span>";
        // line 35
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "detach", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merges:</b>
        <span>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "merge", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Merge time</b>
        <span>";
        // line 43
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "merge", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Removes:</b>
        <span>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "remove", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Remove time</b>
        <span>";
        // line 51
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "remove", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refreshes:</b>
        <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Refresh time</b>
        <span>";
        // line 59
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flushes:</b>
        <span>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "flush", array()), "count", array()), "html", null, true);
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>Flush time</b>
        <span>";
        // line 67
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "flush", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b><abbr title=\"Total execution time of all monitored ORM hydrations and operations\">Total time</abbr></b>
        <span>";
        // line 71
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 74
        echo "    ";
        $this->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig", "OroEntityBundle:Collector:orm.html.twig", 74)->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
        
        $__internal_f5b11f9dc535fab556e79a47a8bdd68e27331e47d7feaf3f432234a970d58d04->leave($__internal_f5b11f9dc535fab556e79a47a8bdd68e27331e47d7feaf3f432234a970d58d04_prof);

    }

    // line 77
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f82355c5bfb783416405c0b6e9eef06526874b4680300490f6e83b6cdcfe2021 = $this->env->getExtension("native_profiler");
        $__internal_f82355c5bfb783416405c0b6e9eef06526874b4680300490f6e83b6cdcfe2021->enter($__internal_f82355c5bfb783416405c0b6e9eef06526874b4680300490f6e83b6cdcfe2021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 78
        echo "    <span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAAABGdBTUEAALGPC/xhBQAAAAlwSFlzAAAOwQAADsEBuJFr7QAAABh0RVh0U29mdHdhcmUAcGFpbnQubmV0IDQuMC41ZYUyZQAAAqdJREFUSEu9lslvEmEYh7EHEpdWvXjy0n9CL4bVE+GkBwkR6EHDIglKDx7RUNIDSwynmtjELRo5GFMNS9jbGNIoskYCF+NBD5JIwKWHtjP+3glDEIelTOVLnvbLxzfv05f5deaTxGKxdY1Gs03I5XKWMBgMbqPReI5lWclBoGvoWr4OX5ccEppgQ5P/kJhGwkPXDtRqkoMT0QL9JUIXioHvjhPpdDrOPLjpsKDa5OiJJBj0QS6Xu1QqlZ5WKpU6aIM9wAqwA7aw91axWLwAFhuNxkK1WpWizhzVotETabXav0SRSOQ98GUymeV8Pr+KYm/K5XIeFIcBWRKsQXKjUCgoID3TLyLHP6JoNMpA9BN8jMfjKx6P57rdbneBlXFYrdY7er1+GTWvTSJiCYj2IYouLS29VCgU32Qy2Y9xqNVqDppTLSAdJdrtiphkMrlpNptTSqXyN+0ZB41AIMCqVCqaShiGmad1QREED8Ph8FfI9lOp1JbFYslMKiKJyWRisZ8TgZO0PqwjO7gCniAQrw8i6mcS0Rd09QhcRHrO45/u+bSikV8dRJS6XfAZ9+guYnu7Vqsl6vX6u0lBxJ91RUdHifjUMYlEIu50OsMiUndiZEe86BBSt0DrgiIIyuAX+L+pw7vjKjpaQ8S30+n0K5vNlhQRhuEdQfQW3XghcmWz2Ztut/u+CNHwMNC9QUdtUMJXtxoMBu95vd6yz+f75Pf7J8Llcn3oio4PFVEQuuzhWRdzOBwb06ZuXBh6qUNHmwjD1KkDp2l9WEc0vuMekUhs6k7RuqAIYViExISONiCKiHzWHaM5Jxp8lYMjoVBICtlZvGFleDI8FiGao7ngmaF/NJvN+Vardbndbj/odDov8Ds0IdyJikZPNLPjFv2YyQFyNkfi2Pofu0Bt+h/LrYUAAAAASUVORK5CYII=\" alt=\"\"/></span>
    <strong>Doctrine ORM</strong>
    <span class=\"count\">
        <span>";
        // line 82
        echo twig_escape_filter($this->env, sprintf("%0.0f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</span>
    </span>
</span>
";
        
        $__internal_f82355c5bfb783416405c0b6e9eef06526874b4680300490f6e83b6cdcfe2021->leave($__internal_f82355c5bfb783416405c0b6e9eef06526874b4680300490f6e83b6cdcfe2021_prof);

    }

    // line 87
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f022705a8c0d838da3c3546134cc727def2dc88372b683a8f9166e1072a1841f = $this->env->getExtension("native_profiler");
        $__internal_f022705a8c0d838da3c3546134cc727def2dc88372b683a8f9166e1072a1841f->enter($__internal_f022705a8c0d838da3c3546134cc727def2dc88372b683a8f9166e1072a1841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 88
        echo "    ";
        $this->displayBlock("stats", $context, $blocks);
        echo "
    ";
        // line 89
        $this->displayBlock("hydrations", $context, $blocks);
        echo "
";
        
        $__internal_f022705a8c0d838da3c3546134cc727def2dc88372b683a8f9166e1072a1841f->leave($__internal_f022705a8c0d838da3c3546134cc727def2dc88372b683a8f9166e1072a1841f_prof);

    }

    // line 92
    public function block_stats($context, array $blocks = array())
    {
        $__internal_ef5262b64ce3146f8fb4169d916af934cd9977ff8fe4d10594e98d6be04c8aaf = $this->env->getExtension("native_profiler");
        $__internal_ef5262b64ce3146f8fb4169d916af934cd9977ff8fe4d10594e98d6be04c8aaf->enter($__internal_ef5262b64ce3146f8fb4169d916af934cd9977ff8fe4d10594e98d6be04c8aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stats"));

        // line 93
        echo "    <h2>ORM Stats</h2>

    <table>
        <tbody>
            <tr>
                <th>Hydrations</th>
                <td><pre>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydrationCount", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Hydration time</th>
                <td><pre>";
        // line 103
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydrationTime", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
            <tr>
                <th>Hydrated entities</th>
                <td><pre>";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydratedEntities", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Persists</th>
                <td><pre>";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "persist", array()), "count", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Persist time</th>
                <td><pre>";
        // line 115
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "persist", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
            <tr>
                <th>Detaches</th>
                <td><pre>";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "detach", array()), "count", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Detach time</th>
                <td><pre>";
        // line 123
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "detach", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
            <tr>
                <th>Merges</th>
                <td><pre>";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "merge", array()), "count", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Merge time</th>
                <td><pre>";
        // line 131
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "merge", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
            <tr>
                <th>Removes</th>
                <td><pre>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "remove", array()), "count", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Remove time</th>
                <td><pre>";
        // line 139
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "remove", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
            <tr>
                <th>Refreshes</th>
                <td><pre>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "count", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Refresh time</th>
                <td><pre>";
        // line 147
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "refresh", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
            <tr>
                <th>Flushes</th>
                <td><pre>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "flush", array()), "count", array()), "html", null, true);
        echo "</pre></td>
            </tr>
            <tr>
                <th>Flush time</th>
                <td><pre>";
        // line 155
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "stats", array()), "flush", array()), "time", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
            <tr>
                <th><abbr title=\"Total execution time of all monitored ORM hydrations and operations\">Total time</abbr></th>
                <td><pre>";
        // line 159
        echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "totalTime", array()) * 1000)), "html", null, true);
        echo " ms</pre></td>
            </tr>
        </tbody>
    </table>

";
        
        $__internal_ef5262b64ce3146f8fb4169d916af934cd9977ff8fe4d10594e98d6be04c8aaf->leave($__internal_ef5262b64ce3146f8fb4169d916af934cd9977ff8fe4d10594e98d6be04c8aaf_prof);

    }

    // line 166
    public function block_hydrations($context, array $blocks = array())
    {
        $__internal_74225fcd6410dcdfeac3e3493c1b73989b14db63a4383d40e6b590afef36f9f0 = $this->env->getExtension("native_profiler");
        $__internal_74225fcd6410dcdfeac3e3493c1b73989b14db63a4383d40e6b590afef36f9f0->enter($__internal_74225fcd6410dcdfeac3e3493c1b73989b14db63a4383d40e6b590afef36f9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hydrations"));

        // line 167
        echo "    <h2>Hydrations</h2>

    ";
        // line 169
        if (twig_test_empty($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydrations", array()))) {
            // line 170
            echo "        <p>
            <em>No hydrations.</em>
        </p>
    ";
        } else {
            // line 174
            echo "        <table class=\"alt\" id=\"hydrationsPlaceholder\">
            <thead>
            <tr>
                <th onclick=\"javascript:sortTable(this, 0, 'hydrations')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span>&#9650;</span></th>
                <th onclick=\"javascript:sortTable(this, 1, 'hydrations')\" style=\"cursor: pointer;\">Time<span></span></th>
                <th onclick=\"javascript:sortTable(this, 2, 'hydrations')\" style=\"cursor: pointer;\">Entities<span></span></th>
                <th>Type</th>
                <th>Alias Map</th>
            </tr>
            </thead>
            <tbody id=\"hydrations\">
            ";
            // line 185
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hydrations", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["i"] => $context["hydration"]) {
                // line 186
                echo "                <tr id=\"hydrationNo-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $context["i"]), "html", null, true);
                echo "\">
                    <td>";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 188
                if ($this->getAttribute($context["hydration"], "time", array(), "any", true, true)) {
                    // line 189
                    echo "                            ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", ($this->getAttribute($context["hydration"], "time", array()) * 1000)), "html", null, true);
                    echo "&nbsp;ms
                        ";
                } else {
                    // line 191
                    echo "                            Unknown
                        ";
                }
                // line 193
                echo "                    </td>
                    <td>";
                // line 194
                if ($this->getAttribute($context["hydration"], "resultCount", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hydration"], "resultCount", array()), "html", null, true);
                } else {
                    echo "Unknown";
                }
                echo "</td>
                    <td>";
                // line 195
                if ($this->getAttribute($context["hydration"], "type", array(), "any", true, true)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["hydration"], "type", array()), "html", null, true);
                    echo " ";
                } else {
                    echo "Unknown";
                }
                echo "</td>
                    <td>
                        ";
                // line 197
                if ($this->getAttribute($context["hydration"], "aliasMap", array(), "any", true, true)) {
                    // line 198
                    echo "                        <ul>
                            ";
                    // line 199
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["hydration"], "aliasMap", array()));
                    foreach ($context['_seq'] as $context["alias"] => $context["class"]) {
                        // line 200
                        echo "                                <li>";
                        echo twig_escape_filter($this->env, $context["alias"], "html", null, true);
                        echo " => ";
                        echo twig_escape_filter($this->env, $context["class"], "html", null, true);
                        echo "</li>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['alias'], $context['class'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 202
                    echo "                        </ul>
                        ";
                } else {
                    // line 203
                    echo "Unknown";
                }
                // line 204
                echo "                    </td>
                </tr>
            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['hydration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 207
            echo "            </tbody>
        </table>

        <script type=\"text/javascript\">//<![CDATA[

        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                items = [],
                target = document.getElementById(targetId),
                rows = target.children,
                headers = header.parentElement.children,
                i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '&#9650;' : '&#9660;';

            items.sort(function(a, b) {
                return direction*(parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

    //]]></script>

    <style>
        h3 {
            margin-bottom: 0px;
        }

        code {
            display: none;
        }

        code pre {
            padding: 5px;
        }
    </style>
    ";
        }
        // line 263
        echo "
";
        
        $__internal_74225fcd6410dcdfeac3e3493c1b73989b14db63a4383d40e6b590afef36f9f0->leave($__internal_74225fcd6410dcdfeac3e3493c1b73989b14db63a4383d40e6b590afef36f9f0_prof);

    }

    public function getTemplateName()
    {
        return "OroEntityBundle:Collector:orm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  548 => 263,  490 => 207,  474 => 204,  471 => 203,  467 => 202,  456 => 200,  452 => 199,  449 => 198,  447 => 197,  437 => 195,  429 => 194,  426 => 193,  422 => 191,  416 => 189,  414 => 188,  410 => 187,  403 => 186,  386 => 185,  373 => 174,  367 => 170,  365 => 169,  361 => 167,  355 => 166,  342 => 159,  335 => 155,  328 => 151,  321 => 147,  314 => 143,  307 => 139,  300 => 135,  293 => 131,  286 => 127,  279 => 123,  272 => 119,  265 => 115,  258 => 111,  251 => 107,  244 => 103,  237 => 99,  229 => 93,  223 => 92,  214 => 89,  209 => 88,  203 => 87,  192 => 82,  186 => 78,  180 => 77,  172 => 74,  166 => 71,  159 => 67,  152 => 63,  145 => 59,  138 => 55,  131 => 51,  124 => 47,  117 => 43,  110 => 39,  103 => 35,  96 => 31,  89 => 27,  82 => 23,  75 => 19,  68 => 15,  61 => 11,  57 => 9,  54 => 8,  49 => 6,  46 => 5,  43 => 4,  37 => 3,  22 => 1,);
    }
}
