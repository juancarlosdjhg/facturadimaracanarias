<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Master/PanelController.html.twig */
class __TwigTemplate_3bbde0ca0508d1645003ced6bc41dcfecf5c03c9a066bb796694dea708e33247 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/PanelController.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    ";
        // line 24
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 25));
        // line 26
        echo "    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 30
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 33)], "method", false, false, false, 33), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 35)) {
            // line 36
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 37)], "method", false, false, false, 37), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 40
        echo "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 41), "url", [0 => "list"], "method", false, false, false, 41), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 41)], "method", false, false, false, 41), "html", null, true);
        echo "</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            ";
        // line 44
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 44), "primaryDescription", [], "method", false, false, false, 44);
        echo "
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 52
        echo "            <div class=\"col-md col-6 mb-2\">
                <div class=\"btn-group bg-white\">
                    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 54), "url", [0 => "list"], "method", false, false, false, 54), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "all"], "method", false, false, false, 56), "html", null, true);
        echo "</span>
                    </a>
                    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", [0 => "edit"], "method", false, false, false, 58), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 58), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 63
        echo "                ";
        echo twig_call_macro($macros["_self"], "macro_optionsButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 63, $context, $this->getSourceContext());
        echo "
            </div>
            ";
        // line 66
        echo "            <div class=\"col-md col-6 text-right\">
                ";
        // line 67
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 67) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 67), "btnNew", [], "any", false, false, false, 67))) {
            // line 68
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 68), "url", [0 => "new"], "method", false, false, false, 68), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 70), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 73
        echo "                ";
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 73) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 73), "btnPrint", [], "any", false, false, false, 73))) {
            // line 74
            echo "                    ";
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 74, $context, $this->getSourceContext());
            echo "
                ";
        }
        // line 76
        echo "            </div>
            ";
        // line 78
        echo "            <div class=\"col-md d-none d-md-inline-block text-right\">
                <h1 class=\"h4\">
                    ";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 80)], "method", false, false, false, 80), "html", null, true);
        echo "<br/>
                    ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 81)) {
            // line 82
            echo "                        <small class=\"text-info\">";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 82), "primaryDescription", [], "method", false, false, false, 82);
            echo "</small>
                    ";
        } else {
            // line 84
            echo "                        <small class=\"text-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 84), "html", null, true);
            echo "</small>
                    ";
        }
        // line 86
        echo "                </h1>
            </div>
            ";
        // line 89
        echo "            <div class=\"col-lg-1 d-none d-lg-inline-block text-center\">
                ";
        // line 90
        $context["image"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 90);
        // line 91
        echo "                ";
        if (twig_test_empty(($context["image"] ?? null))) {
            // line 92
            echo "                    <i class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 92), "html", null, true);
            echo " fa-3x\" aria-hidden=\"true\"></i>
                ";
        } else {
            // line 94
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, ($context["image"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 94), "html", null, true);
            echo "\" class=\"img-thumbnail\" style=\"margin-bottom: 10px;\"/>
                ";
        }
        // line 96
        echo "            </div>
        </div>
    </div>
";
    }

    // line 101
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "    ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 102));
        // line 103
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 106
        echo "            ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 106)) > 1)) {
            // line 107
            echo "                <div class=\"col-lg-2 d-none d-lg-inline-block\">
                    <div class=\"nav flex-column nav-pills\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 109));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 110
                echo "                            ";
                $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 110))) ? (" active") : (""));
                // line 111
                echo "                            ";
                $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 111), "active", [], "any", false, false, false, 111)) ? ("") : (" disabled"));
                // line 112
                echo "                            <a class=\"nav-link";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "-tab\" data-toggle=\"pill\" href=\"#";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\"
                               role=\"tab\" aria-controls=\"";
                // line 113
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" aria-expanded=\"true\">
                                ";
                // line 114
                if (((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 114) >= 1) && ($context["viewName"] != twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 114)))) {
                    // line 115
                    echo "                                    <span class='badge badge-secondary float-right'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 115), "html", null, true);
                    echo "</span>
                                ";
                }
                // line 117
                echo "                                <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 117), "html", null, true);
                echo " fa-fw d-none d-xl-inline-block\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 117), "html", null, true);
                echo "
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                    </div>
                </div>
            ";
        }
        // line 123
        echo "            ";
        // line 124
        echo "            ";
        $context["rightPanelClass"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 124)) > 1)) ? ("col-lg-10") : ("col"));
        // line 125
        echo "            <div class=\"";
        echo twig_escape_filter($this->env, ($context["rightPanelClass"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 127
        echo "                ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 127)) > 1)) {
            // line 128
            echo "                    <div class=\"nav nav-tabs d-lg-none\" role=\"tablist\">
                        ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 129));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 130
                echo "                            ";
                $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 130))) ? (" active") : (""));
                // line 131
                echo "                            ";
                $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 131), "active", [], "any", false, false, false, 131)) ? ("") : (" disabled"));
                // line 132
                echo "                            <a class=\"nav-link";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "-tab2\" data-toggle=\"tab\" href=\"#";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\"
                               role=\"tab\" aria-controls=\"";
                // line 133
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" aria-expanded=\"true\">
                                ";
                // line 134
                if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 134) > 1)) {
                    echo "<span class='badge badge-secondary float-right'>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 134), "html", null, true);
                    echo "</span>";
                }
                // line 135
                echo "                                <i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 135), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 138
            echo "                    </div>
                ";
        }
        // line 140
        echo "                ";
        // line 141
        echo "                <div class=\"tab-content\" id=\"mainTabsContent\">
                    ";
        // line 142
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 142));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 143
            echo "                        ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 143))) ? (" show active") : (""));
            // line 144
            echo "                        <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "-tab\">
                            ";
            // line 145
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 145);
            // line 146
            echo "                            ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 146));
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 155
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 156
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 164
    public function macro_optionsButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 165
            echo "    <div class=\"btn-group\">
        <div class=\"dropdown\">
            <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-md-inline-block\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 169), "html", null, true);
            echo "</span>
            </button>
            <div class=\"dropdown-menu\">
                ";
            // line 172
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 172));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 173
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 173), "active", [], "any", false, false, false, 173) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 173)))) {
                    // line 174
                    echo "                        <a class=\"dropdown-item\" href=\"EditPageOption?code=";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "&url=";
                    echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 174), "url", [], "method", false, false, false, 174)), "html", null, true);
                    echo "\">
                            <i class=\"";
                    // line 175
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 175), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 175), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 178
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 179
            echo "            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 184
    public function macro_printButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 185
            echo "    <div class=\"btn-group bg-white\">
        <a href=\"";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 186), "url", [], "method", false, false, false, 186), "html", null, true);
            echo "&action=export&option=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 186), "defaultOption", [], "method", false, false, false, 186), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-sm btn-outline-secondary\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "print"], "method", false, false, false, 188), "html", null, true);
            echo "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more"], "method", false, false, false, 191), "html", null, true);
            echo "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 194), "options", [], "method", false, false, false, 194));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 195
                echo "                ";
                if (($context["key"] != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 195), "defaultOption", [], "method", false, false, false, 195))) {
                    // line 196
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 196), "url", [], "method", false, false, false, 196), "html", null, true);
                    echo "&action=export&option=";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 197
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 197), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 198
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 198)], "method", false, false, false, 198), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 201
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 202
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 202), "tools", [], "any", false, false, false, 202))) {
                // line 203
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 204
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 204), "tools", [], "method", false, false, false, 204));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 205
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 205), "html", null, true);
                    echo "\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 206
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 206), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 207
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 207)], "method", false, false, false, 207), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 210
                echo "            ";
            }
            // line 211
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/PanelController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  593 => 211,  590 => 210,  581 => 207,  577 => 206,  572 => 205,  568 => 204,  565 => 203,  562 => 202,  556 => 201,  550 => 198,  546 => 197,  539 => 196,  536 => 195,  532 => 194,  526 => 191,  520 => 188,  513 => 186,  510 => 185,  495 => 184,  483 => 179,  477 => 178,  469 => 175,  462 => 174,  459 => 173,  455 => 172,  449 => 169,  443 => 165,  428 => 164,  416 => 156,  412 => 155,  404 => 149,  386 => 146,  384 => 145,  375 => 144,  372 => 143,  355 => 142,  352 => 141,  350 => 140,  346 => 138,  336 => 135,  330 => 134,  326 => 133,  316 => 132,  313 => 131,  310 => 130,  306 => 129,  303 => 128,  300 => 127,  295 => 125,  292 => 124,  290 => 123,  285 => 120,  273 => 117,  267 => 115,  265 => 114,  261 => 113,  251 => 112,  248 => 111,  245 => 110,  241 => 109,  237 => 107,  234 => 106,  230 => 103,  227 => 102,  223 => 101,  216 => 96,  208 => 94,  202 => 92,  199 => 91,  197 => 90,  194 => 89,  190 => 86,  184 => 84,  178 => 82,  176 => 81,  172 => 80,  168 => 78,  165 => 76,  159 => 74,  156 => 73,  150 => 70,  144 => 68,  142 => 67,  139 => 66,  133 => 63,  124 => 58,  119 => 56,  114 => 54,  110 => 52,  100 => 44,  92 => 41,  89 => 40,  83 => 37,  80 => 36,  78 => 35,  73 => 33,  68 => 30,  63 => 26,  60 => 25,  58 => 24,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/PanelController.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\PanelController.html.twig");
    }
}
