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

/* Master/PanelControllerTop.html.twig */
class __TwigTemplate_fcab7065b6be0df6cb06d8e1f664c13d6a000800f8504b68c681a31096515258 extends \Twig\Template
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
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerTop.html.twig", 20);
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
    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col\">
                <ul class=\"nav nav-tabs\" id=\"mainTabs\" role=\"tablist\">
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 28));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 29
            echo "                        <li class=\"nav-item\">
                            ";
            // line 30
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 30))) ? (" active") : (""));
            // line 31
            echo "                            ";
            $context["disable"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 31), "active", [], "any", false, false, false, 31)) ? ("") : (" disabled"));
            // line 32
            echo "                            <a href=\"#";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" class=\"nav-link";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
            echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\">
                                <i class=\"";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 33), "html", null, true);
            echo "\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">&nbsp;";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 34), "html", null, true);
            echo "</span>
                                ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 35) > 0)) {
                echo "<span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 35), "numbers", [], "method", false, false, false, 35), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 35), 1 => 0], "method", false, false, false, 35), "html", null, true);
                echo "</span>";
            }
            // line 36
            echo "                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </ul>
            </div>
        </div>
    </div>
";
    }

    // line 45
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    <div class=\"tab-content pt-3\" id=\"mainTabsContent\">
        ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 47));
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
            // line 48
            echo "            ";
            $context["active"] = ((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 48))) ? ("tab-pane show active") : ("tab-pane"));
            // line 49
            echo "            <div class=\"";
            echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
            echo "\" role=\"tabpanel\">
                ";
            // line 50
            twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 50);
            // line 51
            echo "                ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 51));
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
        // line 54
        echo "    </div>
";
    }

    // line 57
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: transparent;
        }
        .bg-header {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "Master/PanelControllerTop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 58,  172 => 57,  167 => 54,  149 => 51,  147 => 50,  140 => 49,  137 => 48,  120 => 47,  117 => 46,  113 => 45,  105 => 39,  97 => 36,  91 => 35,  87 => 34,  83 => 33,  73 => 32,  70 => 31,  68 => 30,  65 => 29,  61 => 28,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/PanelControllerTop.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\PanelControllerTop.html.twig");
    }
}
