<?php

/* OroConfigBundle::macros.html.twig */
class __TwigTemplate_289a6d3a5eebc0dd5d61aa514aa3bbd067c967b04eb976e9ee1e70defc5aa6b4 extends Twig_Template
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
        $__internal_37baf9988dd5393f99b3ad5d8876ca0c7b19a6d986fcd0cff6cf747be9cf1aef = $this->env->getExtension("native_profiler");
        $__internal_37baf9988dd5393f99b3ad5d8876ca0c7b19a6d986fcd0cff6cf747be9cf1aef->enter($__internal_37baf9988dd5393f99b3ad5d8876ca0c7b19a6d986fcd0cff6cf747be9cf1aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OroConfigBundle::macros.html.twig"));

        // line 33
        echo "
";
        // line 57
        echo "
";
        // line 75
        echo "
";
        // line 160
        echo "
";
        // line 221
        echo "
";
        // line 246
        echo "
";
        
        $__internal_37baf9988dd5393f99b3ad5d8876ca0c7b19a6d986fcd0cff6cf747be9cf1aef->leave($__internal_37baf9988dd5393f99b3ad5d8876ca0c7b19a6d986fcd0cff6cf747be9cf1aef_prof);

    }

    // line 4
    public function getrenderTitleAndButtons($__pageTitle__ = null, $__buttons__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "pageTitle" => $__pageTitle__,
            "buttons" => $__buttons__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0e300c2ad9b09e8ecafe0870eee9d5126b33b4beefc8b7035e52491de7e94473 = $this->env->getExtension("native_profiler");
            $__internal_0e300c2ad9b09e8ecafe0870eee9d5126b33b4beefc8b7035e52491de7e94473->enter($__internal_0e300c2ad9b09e8ecafe0870eee9d5126b33b4beefc8b7035e52491de7e94473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTitleAndButtons"));

            // line 5
            echo "    <div class=\"container-fluid configuration-header clearfix\">
    ";
            // line 6
            if (twig_test_iterable((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")))) {
                // line 7
                echo "        <div class=\"customer-info customer-simple pull-left\">
        ";
                // line 8
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")));
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
                foreach ($context['_seq'] as $context["_key"] => $context["title"]) {
                    // line 9
                    echo "            ";
                    if ( !$this->getAttribute($context["loop"], "last", array())) {
                        // line 10
                        echo "            <div class=\"sub-title\">
                ";
                        // line 11
                        echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                        echo "
            </div>
            <span class=\"separator\">/</span>
            ";
                    } else {
                        // line 15
                        echo "            <h1 class=\"user-name\">";
                        echo twig_escape_filter($this->env, $context["title"], "html", null, true);
                        echo "</h1>
            ";
                    }
                    // line 17
                    echo "        ";
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['title'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "        </div>
    ";
            } else {
                // line 20
                echo "        <h1>
            ";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["pageTitle"]) ? $context["pageTitle"] : $this->getContext($context, "pageTitle")), "html", null, true);
                echo "
        </h1>
    ";
            }
            // line 24
            echo "        <div class=\"pull-right\">
            ";
            // line 25
            if (array_key_exists("buttons", $context)) {
                // line 26
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["buttons"]) ? $context["buttons"] : $this->getContext($context, "buttons")));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 27
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["button"], "html", null, true);
                    echo "
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            ";
            }
            // line 30
            echo "        </div>
    </div>
";
            
            $__internal_0e300c2ad9b09e8ecafe0870eee9d5126b33b4beefc8b7035e52491de7e94473->leave($__internal_0e300c2ad9b09e8ecafe0870eee9d5126b33b4beefc8b7035e52491de7e94473_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 44
    public function getrenderScrollData($__data__ = null, $__form__ = null, $__activeTabName__ = false, $__activeSubTabName__ = false, $__routeName__ = "oro_config_configuration_system", $__routeParameters__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "form" => $__form__,
            "activeTabName" => $__activeTabName__,
            "activeSubTabName" => $__activeSubTabName__,
            "routeName" => $__routeName__,
            "routeParameters" => $__routeParameters__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_bce9cb4f32f2796237651d30381bbfbabcf33135f87624352b4f466e530d622f = $this->env->getExtension("native_profiler");
            $__internal_bce9cb4f32f2796237651d30381bbfbabcf33135f87624352b4f466e530d622f->enter($__internal_bce9cb4f32f2796237651d30381bbfbabcf33135f87624352b4f466e530d622f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderScrollData"));

            // line 45
            echo "    ";
            $context["UI"] = $this->loadTemplate("OroUIBundle::macros.html.twig", "OroConfigBundle::macros.html.twig", 45);
            // line 46
            echo "    <div class=\"system-configuration-container left-panel-container\">
        <div class=\"placeholder\">
            <div class=\"scrollable-container\">
                ";
            // line 49
            if (((isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : $this->getContext($context, "activeSubTabName")) && ((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")) != false))) {
                // line 50
                echo "                    ";
                echo $this->getAttribute($this, "renderTabs", array(0 => (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), 1 => (isset($context["activeTabName"]) ? $context["activeTabName"] : $this->getContext($context, "activeTabName")), 2 => (isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : $this->getContext($context, "activeSubTabName")), 3 => (isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")), 4 => (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters"))), "method");
                echo "
                    ";
                // line 51
                echo $this->getAttribute($this, "renderTabContent", array(0 => (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form"))), "method");
                echo "
                ";
            }
            // line 53
            echo "            </div>
        </div>
    </div>
";
            
            $__internal_bce9cb4f32f2796237651d30381bbfbabcf33135f87624352b4f466e530d622f->leave($__internal_bce9cb4f32f2796237651d30381bbfbabcf33135f87624352b4f466e530d622f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getrenderTabNavItem($__data__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0763a113219852e11f283159e75182a0c28b916d7ee454c4d3f71c76a5c4b6ae = $this->env->getExtension("native_profiler");
            $__internal_0763a113219852e11f283159e75182a0c28b916d7ee454c4d3f71c76a5c4b6ae->enter($__internal_0763a113219852e11f283159e75182a0c28b916d7ee454c4d3f71c76a5c4b6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTabNavItem"));

            // line 68
            echo "    <li ";
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "isActive", array())) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 69
            if ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "isActive", array())) {
                echo "javascript:void(0);";
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "url", array()), "html", null, true);
            }
            echo "\">
            ";
            // line 70
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "icon", array()) != ""))) {
                echo "<i class=\"icon fa ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 71
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "title", array())), "html", null, true);
            echo "
        </a>
    </li>
";
            
            $__internal_0763a113219852e11f283159e75182a0c28b916d7ee454c4d3f71c76a5c4b6ae->leave($__internal_0763a113219852e11f283159e75182a0c28b916d7ee454c4d3f71c76a5c4b6ae_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 85
    public function getrenderTabs($__data__ = null, $__activeTabName__ = false, $__activeSubTabName__ = false, $__routeName__ = "oro_config_configuration_system", $__routeParameters__ = array())
    {
        $context = $this->env->mergeGlobals(array(
            "data" => $__data__,
            "activeTabName" => $__activeTabName__,
            "activeSubTabName" => $__activeSubTabName__,
            "routeName" => $__routeName__,
            "routeParameters" => $__routeParameters__,
            "varargs" => func_num_args() > 5 ? array_slice(func_get_args(), 5) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0179562825dbdba0468d2659c9062a2b51f82ff4f504e757b00751171f396aa3 = $this->env->getExtension("native_profiler");
            $__internal_0179562825dbdba0468d2659c9062a2b51f82ff4f504e757b00751171f396aa3->enter($__internal_0179562825dbdba0468d2659c9062a2b51f82ff4f504e757b00751171f396aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTabs"));

            // line 86
            echo "    <div class=\"left-panel\">
        <div class=\"system-configuration-search\">
            ";
            // line 94
            echo "            <div class=\"clearfix\">
                ";
            // line 95
            echo $this->getAttribute($this, "renderCollapseExpandActions", array(0 => "#sidebar-menu-tree"), "method");
            echo "
            </div>
        </div>
        ";
            // line 98
            if (twig_test_iterable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")))) {
                // line 99
                echo "        <ul class=\"system-configuration-accordion accordion\" id=\"sidebar-menu-tree\">
            ";
                // line 100
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")));
                foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                    // line 101
                    echo "            ";
                    $context["tabData"] = twig_array_merge(array("isActive" => (                    // line 102
(isset($context["activeTabName"]) ? $context["activeTabName"] : $this->getContext($context, "activeTabName")) && ((isset($context["activeTabName"]) ? $context["activeTabName"] : $this->getContext($context, "activeTabName")) == $this->getAttribute($context["tab"], "name", array()))), "name" => $this->getAttribute(                    // line 103
$context["tab"], "name", array()), "url" => $this->env->getExtension('routing')->getPath(                    // line 104
(isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")), twig_array_merge(array("activeGroup" => $this->getAttribute($context["tab"], "name", array())), (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters"))))), $this->getAttribute(                    // line 105
$context["tab"], "toViewData", array()));
                    // line 107
                    echo "            <li class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    <a href=\"#config_tab_";
                    // line 109
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "name", array()), "html", null, true);
                    echo "\" data-toggle=\"collapse\"
                       class=\"accordion-toggle";
                    // line 110
                    if ( !$this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "isActive", array())) {
                        echo " collapsed";
                    }
                    echo "\">";
                    // line 111
                    if (($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : null), "icon", array(), "any", true, true) && ($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "icon", array()) != ""))) {
                        echo "<i class=\"icon ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "icon", array()), "html", null, true);
                        echo "\"></i>";
                    }
                    // line 112
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "title", array())), "html", null, true);
                    // line 113
                    echo "</a>
                </div>
                <div id=\"config_tab_";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "name", array()), "html", null, true);
                    echo "\" class=\"accordion-body collapse";
                    if ($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "isActive", array())) {
                        echo " in";
                    }
                    echo "\">
                    <div class=\"accordion-inner\"><ul>
                    ";
                    // line 117
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($context["tab"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                        // line 118
                        echo "                        ";
                        $context["activeSubTab"] = null;
                        // line 119
                        echo "                        ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($context["group"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["subTab"]) {
                            // line 120
                            echo "                            ";
                            if ((($this->getAttribute((isset($context["tabData"]) ? $context["tabData"] : $this->getContext($context, "tabData")), "isActive", array()) && (isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : $this->getContext($context, "activeSubTabName"))) && ((isset($context["activeSubTabName"]) ? $context["activeSubTabName"] : $this->getContext($context, "activeSubTabName")) == $this->getAttribute($context["subTab"], "name", array())))) {
                                // line 121
                                echo "                                ";
                                $context["activeSubTab"] = $context["subTab"];
                                // line 122
                                echo "                            ";
                            }
                            // line 123
                            echo "                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subTab'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 124
                        echo "                        ";
                        $context["groupData"] = twig_array_merge(array("isActive" =>  !(null ===                         // line 125
(isset($context["activeSubTab"]) ? $context["activeSubTab"] : $this->getContext($context, "activeSubTab"))), "name" => $this->getAttribute(                        // line 126
$context["group"], "name", array())), $this->getAttribute(                        // line 127
$context["group"], "toViewData", array()));
                        // line 129
                        echo "                        <li class=\"accordion-group\">
                            <div class=\"accordion-heading\">
                                <a href=\"#config_tab_group_";
                        // line 131
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : $this->getContext($context, "groupData")), "name", array()), "html", null, true);
                        echo "\" data-toggle=\"collapse\"
                                   class=\"accordion-toggle";
                        // line 132
                        if ( !$this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : $this->getContext($context, "groupData")), "isActive", array())) {
                            echo " collapsed";
                        }
                        echo "\">";
                        // line 133
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : $this->getContext($context, "groupData")), "title", array())), "html", null, true);
                        // line 134
                        echo "</a>
                            </div>
                            <div id=\"config_tab_group_";
                        // line 136
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : $this->getContext($context, "groupData")), "name", array()), "html", null, true);
                        echo "\"
                                 class=\"accordion-body collapse collapse-inner";
                        // line 137
                        if ($this->getAttribute((isset($context["groupData"]) ? $context["groupData"] : $this->getContext($context, "groupData")), "isActive", array())) {
                            echo " in";
                        }
                        echo "\">
                                <div class=\"accordion-inner\"><ul>
                                ";
                        // line 139
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($context["group"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["subTab"]) {
                            // line 140
                            echo "                                    ";
                            $context["subTabData"] = twig_array_merge(array("isActive" => (                            // line 141
(isset($context["activeSubTab"]) ? $context["activeSubTab"] : $this->getContext($context, "activeSubTab")) == $context["subTab"]), "name" => $this->getAttribute(                            // line 142
$context["subTab"], "name", array()), "url" => $this->env->getExtension('routing')->getPath(                            // line 143
(isset($context["routeName"]) ? $context["routeName"] : $this->getContext($context, "routeName")), twig_array_merge(array("activeGroup" => $this->getAttribute($context["tab"], "name", array()), "activeSubGroup" => $this->getAttribute($context["subTab"], "name", array())), (isset($context["routeParameters"]) ? $context["routeParameters"] : $this->getContext($context, "routeParameters"))))), $this->getAttribute(                            // line 144
$context["subTab"], "toViewData", array()));
                            // line 146
                            echo "                                    ";
                            echo $this->getAttribute($this, "renderTabNavItem", array(0 => (isset($context["subTabData"]) ? $context["subTabData"] : $this->getContext($context, "subTabData"))), "method");
                            echo "
                                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subTab'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 148
                        echo "                                </ul></div>
                            </div>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 152
                    echo "                    </ul></div>
                </div>
            </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 156
                echo "        </ul>
        ";
            }
            // line 158
            echo "    </div>
";
            
            $__internal_0179562825dbdba0468d2659c9062a2b51f82ff4f504e757b00751171f396aa3->leave($__internal_0179562825dbdba0468d2659c9062a2b51f82ff4f504e757b00751171f396aa3_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 166
    public function getrenderTabContent($__form__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6dba412f85f41a132acdb6c9a68a29a64747313d6e60e87f357a638733cf9cbe = $this->env->getExtension("native_profiler");
            $__internal_6dba412f85f41a132acdb6c9a68a29a64747313d6e60e87f357a638733cf9cbe->enter($__internal_6dba412f85f41a132acdb6c9a68a29a64747313d6e60e87f357a638733cf9cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderTabContent"));

            // line 167
            echo "    ";
            $context["data"] = array("formErrors" =>             // line 168
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors'), "dataBlocks" => call_user_func_array($this->env->getFunction('form_data_blocks')->getCallable(), array($this->env, $context,             // line 169
(isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")))), "hiddenData" =>             // line 170
$this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest'));
            // line 172
            echo "
    ";
            // line 173
            $context["data"] = $this->env->getExtension('oro_form_process')->process($this->env, (isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), (isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            // line 174
            echo "
    <div class=\"system-configuration-content content form-container\" id=\"configuration-options-block\">
        <div class=\"pull-right\">
            <input type=\"hidden\" name=\"input_action\" value=\"\" data-form-id=\"";
            // line 177
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\"/>
        </div>
        ";
            // line 179
            if (($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "formErrors", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array())))) {
                // line 180
                echo "            <div class=\"customer-info-actions container-fluid well-small alert-wrap\">
                <div class=\"alert alert-error\">
                    <button class=\"close\" type=\"button\" data-dismiss=\"alert\" data-target=\".alert-wrap\">×</button>
                    ";
                // line 183
                echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "formErrors", array());
                echo "
                </div>
            </div>
        ";
            }
            // line 187
            echo "
        ";
            // line 188
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "dataBlocks", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["scrollBlock"]) {
                // line 189
                echo "        ";
                $context["accordionId"] = ("system-configuration-collapse" . $this->getAttribute($context["loop"], "index", array()));
                // line 190
                echo "        <div class=\"accordion\">
            <div class=\"accordion-group\">
                <div class=\"accordion-heading\">
                    ";
                // line 193
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 194
                    echo "                    <div class=\"pull-right\">
                        ";
                    // line 195
                    echo $this->getAttribute($this, "renderCollapseExpandActions", array(0 => "#configuration-options-block"), "method");
                    echo "
                    </div>
                    ";
                }
                // line 198
                echo "                    <a href=\"#";
                echo twig_escape_filter($this->env, (isset($context["accordionId"]) ? $context["accordionId"] : $this->getContext($context, "accordionId")), "html", null, true);
                echo "\" data-toggle=\"collapse\" class=\"accordion-toggle\">
                        ";
                // line 199
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["scrollBlock"], "title", array())), "html", null, true);
                echo "
                    </a>
                </div>
                <div class=\"accordion-body in collapse\" id=\"";
                // line 202
                echo twig_escape_filter($this->env, (isset($context["accordionId"]) ? $context["accordionId"] : $this->getContext($context, "accordionId")), "html", null, true);
                echo "\" >
                    <div class=\"accordion-inner\">
                        ";
                // line 204
                if (($this->getAttribute($context["scrollBlock"], "description", array(), "any", true, true) && ($this->getAttribute($context["scrollBlock"], "description", array()) != ""))) {
                    // line 205
                    echo "                            <p>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["scrollBlock"], "description", array())), "html", null, true);
                    echo "</p>
                        ";
                }
                // line 207
                echo "
                        ";
                // line 208
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["scrollBlock"], "subblocks", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["subblock"]) {
                    // line 209
                    echo "                            ";
                    echo $this->getAttribute($this, "renderFieldset", array(0 => $context["subblock"]), "method");
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subblock'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 211
                echo "                    </div>
                </div>
            </div>
        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scrollBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "        <div class=\"hide\">
            ";
            // line 217
            echo $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "hiddenData", array());
            echo "
        </div>
    </div>
";
            
            $__internal_6dba412f85f41a132acdb6c9a68a29a64747313d6e60e87f357a638733cf9cbe->leave($__internal_6dba412f85f41a132acdb6c9a68a29a64747313d6e60e87f357a638733cf9cbe_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 229
    public function getrenderFieldset($__block__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "block" => $__block__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_6435c0ec50d4df9b8b92b2007fefac167766b1b2b5ce650d71e59fb33450c50b = $this->env->getExtension("native_profiler");
            $__internal_6435c0ec50d4df9b8b92b2007fefac167766b1b2b5ce650d71e59fb33450c50b->enter($__internal_6435c0ec50d4df9b8b92b2007fefac167766b1b2b5ce650d71e59fb33450c50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderFieldset"));

            // line 230
            echo "    <fieldset class=\"form-horizontal form-horizontal-large\">
        <h5 class=\"user-fieldset\">
            <span>";
            // line 232
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "title", array())), "html", null, true);
            echo "</span>
        </h5>

        ";
            // line 235
            if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "description", array(), "any", true, true) && ($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "description", array()) != ""))) {
                // line 236
                echo "            <div class=\"container-fluid\">
                <p>";
                // line 237
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "description", array())), "html", null, true);
                echo "</p>
            </div>
        ";
            }
            // line 240
            echo "
        ";
            // line 241
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["dataBlock"]) {
                // line 242
                echo "            ";
                echo $context["dataBlock"];
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dataBlock'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 244
            echo "    </fieldset>
";
            
            $__internal_6435c0ec50d4df9b8b92b2007fefac167766b1b2b5ce650d71e59fb33450c50b->leave($__internal_6435c0ec50d4df9b8b92b2007fefac167766b1b2b5ce650d71e59fb33450c50b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 252
    public function getrenderCollapseExpandActions($__target__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "target" => $__target__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_77de9949e8444b74c65ffb9194955d9f8b6e3d2784113ffc655436ea36c1f83f = $this->env->getExtension("native_profiler");
            $__internal_77de9949e8444b74c65ffb9194955d9f8b6e3d2784113ffc655436ea36c1f83f->enter($__internal_77de9949e8444b74c65ffb9194955d9f8b6e3d2784113ffc655436ea36c1f83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "renderCollapseExpandActions"));

            // line 253
            echo "    <ul class=\"inline small-text\">
        <li><a href=\"";
            // line 254
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), "html", null, true);
            echo "\" data-action=\"accordion:expand-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.config.actions.expand_all"), "html", null, true);
            echo "</a></li>
        <li class=\"separator\">|</li>
        <li><a href=\"";
            // line 256
            echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), "html", null, true);
            echo "\" data-action=\"accordion:collapse-all\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oro.config.actions.collapse_all"), "html", null, true);
            echo "</a></li>
    </ul>
";
            
            $__internal_77de9949e8444b74c65ffb9194955d9f8b6e3d2784113ffc655436ea36c1f83f->leave($__internal_77de9949e8444b74c65ffb9194955d9f8b6e3d2784113ffc655436ea36c1f83f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "OroConfigBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  744 => 256,  737 => 254,  734 => 253,  719 => 252,  704 => 244,  695 => 242,  691 => 241,  688 => 240,  682 => 237,  679 => 236,  677 => 235,  671 => 232,  667 => 230,  652 => 229,  634 => 217,  631 => 216,  613 => 211,  604 => 209,  600 => 208,  597 => 207,  591 => 205,  589 => 204,  584 => 202,  578 => 199,  573 => 198,  567 => 195,  564 => 194,  562 => 193,  557 => 190,  554 => 189,  537 => 188,  534 => 187,  527 => 183,  522 => 180,  520 => 179,  515 => 177,  510 => 174,  508 => 173,  505 => 172,  503 => 170,  502 => 169,  501 => 168,  499 => 167,  484 => 166,  469 => 158,  465 => 156,  456 => 152,  447 => 148,  438 => 146,  436 => 144,  435 => 143,  434 => 142,  433 => 141,  431 => 140,  427 => 139,  420 => 137,  416 => 136,  412 => 134,  410 => 133,  405 => 132,  401 => 131,  397 => 129,  395 => 127,  394 => 126,  393 => 125,  391 => 124,  385 => 123,  382 => 122,  379 => 121,  376 => 120,  371 => 119,  368 => 118,  364 => 117,  355 => 115,  351 => 113,  349 => 112,  343 => 111,  338 => 110,  334 => 109,  330 => 107,  328 => 105,  327 => 104,  326 => 103,  325 => 102,  323 => 101,  319 => 100,  316 => 99,  314 => 98,  308 => 95,  305 => 94,  301 => 86,  282 => 85,  263 => 71,  257 => 70,  249 => 69,  242 => 68,  227 => 67,  210 => 53,  205 => 51,  200 => 50,  198 => 49,  193 => 46,  190 => 45,  170 => 44,  154 => 30,  151 => 29,  142 => 27,  137 => 26,  135 => 25,  132 => 24,  126 => 21,  123 => 20,  119 => 18,  105 => 17,  99 => 15,  92 => 11,  89 => 10,  86 => 9,  69 => 8,  66 => 7,  64 => 6,  61 => 5,  45 => 4,  37 => 246,  34 => 221,  31 => 160,  28 => 75,  25 => 57,  22 => 33,);
    }
}
