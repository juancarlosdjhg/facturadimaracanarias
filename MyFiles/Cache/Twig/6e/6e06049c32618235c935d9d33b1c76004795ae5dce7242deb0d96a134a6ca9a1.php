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

/* Master/ListController.html.twig */
class __TwigTemplate_9d3eb9aea41ca68200c73419331fa5889e2aa5f9e02681cbc33f142f94d17b6d extends \Twig\Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/ListController.html.twig", 20);
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
        echo "    <div class=\"container-fluid mb-1 d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-7\">
                ";
        // line 29
        echo "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 32)], "method", false, false, false, 32), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 34)) {
            // line 35
            echo "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 36)], "method", false, false, false, 36), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 39
        echo "                        <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
                    </ol>
                </nav>
                <div class=\"btn-group bg-white\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 43), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 43), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "name", [], "any", false, false, false, 46) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 46), "homepage", [], "any", false, false, false, 46))) {
            // line 47
            echo "                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 47), "html", null, true);
            echo "?defaultPage=FALSE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 47), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 51
            echo "                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 51), "html", null, true);
            echo "?defaultPage=TRUE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 51), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 55
        echo "                </div>
                ";
        // line 57
        echo "                <div class=\"btn-group\">
                    <div class=\"dropdown\">
                        <button class=\"btn btn-sm btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i> ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "options"], "method", false, false, false, 60), "html", null, true);
        echo "
                        </button>
                        <div class=\"dropdown-menu\">
                            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 63));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 64
            echo "                                <a class=\"dropdown-item\" href=\"EditPageOption?code=";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "&url=";
            echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "model", [], "any", false, false, false, 64), "url", [], "method", false, false, false, 64)), "html", null, true);
            echo "\">
                                    <i class=\"";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 65), "html", null, true);
            echo " fa-fw\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 65), "html", null, true);
            echo "
                                </a>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-5 text-right\">
                <h1 class=\"h3 d-none d-md-inline-block\">
                    ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 74), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 74), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
                <br class=\"d-md-none\"/>
            </div>
        </div>
    </div>
    ";
        // line 81
        echo "    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 82));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 83
            echo "            <li class=\"nav-item\">
                ";
            // line 84
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 84))) ? (" active") : (""));
            // line 85
            echo "                <a href=\"#";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" class=\"nav-link";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\">
                    <i class=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 86), "html", null, true);
            echo " fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 87), "html", null, true);
            echo "</span>
                    ";
            // line 88
            if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 88) > 0)) {
                echo "<span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 88), "numbers", [], "method", false, false, false, 88), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 88), 1 => 0], "method", false, false, false, 88), "html", null, true);
                echo "</span>";
            }
            // line 89
            echo "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "    </ul>
";
    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 98
        echo "    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 99));
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
            // line 100
            echo "            ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 100))) ? (" show active") : (""));
            // line 101
            echo "            <div class=\"tab-pane fade";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\">
                ";
            // line 102
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 102);
            // line 103
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 103));
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
        // line 106
        echo "    </div>
";
    }

    // line 109
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 110
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        .bg-header {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 119
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function () {
            if (document.location.hash) {
                \$(\".nav-tabs a[href=\\\\\" + document.location.hash + \"]\").tab('show');
            }
            \$('.nav-tabs a').click(function (e) {
                \$(this).tab('show');
                var scrollmem = \$('body').scrollTop();
                window.location.hash = this.hash;
                \$('html,body').scrollTop(scrollmem);
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Master/ListController.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 119,  307 => 118,  295 => 110,  291 => 109,  286 => 106,  268 => 103,  266 => 102,  259 => 101,  256 => 100,  239 => 99,  236 => 98,  231 => 96,  227 => 95,  222 => 92,  214 => 89,  208 => 88,  204 => 87,  200 => 86,  191 => 85,  189 => 84,  186 => 83,  182 => 82,  179 => 81,  168 => 74,  160 => 68,  149 => 65,  142 => 64,  138 => 63,  132 => 60,  127 => 57,  124 => 55,  114 => 51,  104 => 47,  102 => 46,  94 => 43,  86 => 39,  80 => 36,  77 => 35,  75 => 34,  70 => 32,  65 => 29,  60 => 25,  58 => 24,  53 => 23,  49 => 22,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListController.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\ListController.html.twig");
    }
}
