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

/* Master/PanelControllerBottom.html.twig */
class __TwigTemplate_0abde11e5c61c9d2e542c100d7c75a3c723693f5e6852165fe66f0a6137a2c39 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerBottom.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 27
        echo "                ";
        $context["firstView"] = twig_first($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 27));
        // line 28
        echo "                ";
        $context["firstViewName"] = twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 28);
        // line 29
        echo "                ";
        twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => ($context["firstViewName"] ?? null)], "method", false, false, false, 29);
        // line 30
        echo "                ";
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["firstView"] ?? null), "template", [], "any", false, false, false, 30));
        echo "
            </div>
        </div>
        ";
        // line 33
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 33)) > 2)) {
            // line 34
            echo "            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 37), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 37))));
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
                // line 38
                echo "                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 38), "active", [], "any", false, false, false, 38)) {
                    // line 39
                    echo "                                <li class=\"nav-item\">
                                    ";
                    // line 40
                    $context["active"] = (((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 40)) || ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 40) == ($context["firstViewName"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 40) == 1)))) ? (" active") : (""));
                    // line 41
                    echo "                                    <a href=\"#";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\" class=\"nav-link";
                    echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                    echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
                    echo "\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"";
                    echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                    echo "\">
                                        <i class=\"";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 42), "html", null, true);
                    echo "\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;";
                    // line 43
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 43), "html", null, true);
                    echo "</span>
                                        ";
                    // line 44
                    if ((twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 44) > 0)) {
                        // line 45
                        echo "                                            <span class=\"badge badge-secondary\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 45), "numbers", [], "method", false, false, false, 45), "format", [0 => twig_get_attribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 45), 1 => 0], "method", false, false, false, 45), "html", null, true);
                        echo "</span>
                                        ";
                    }
                    // line 47
                    echo "                                    </a>
                                </li>
                            ";
                }
                // line 50
                echo "                        ";
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
            // line 51
            echo "                    </ul>
                </div>
            </div>
        ";
        }
        // line 55
        echo "        <div class=\"tab-content\" id=\"mainTabsContent\">
            ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 56), 1, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 56))));
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
            // line 57
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 57), "active", [], "any", false, false, false, 57)) {
                // line 58
                echo "                    ";
                $context["active"] = (((($context["viewName"] == twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 58)) || ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 58) == ($context["firstViewName"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 58) == 1)))) ? (" show active") : (""));
                // line 59
                echo "                    <div class=\"tab-pane";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, $context["viewName"], "html", null, true);
                echo "\" role=\"tabpanel\">
                        ";
                // line 60
                twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [0 => $context["viewName"]], "method", false, false, false, 60);
                // line 61
                echo "                        ";
                echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 61));
                echo "
                    </div>
                ";
            }
            // line 64
            echo "            ";
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
        // line 65
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Master/PanelControllerBottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 65,  196 => 64,  189 => 61,  187 => 60,  180 => 59,  177 => 58,  174 => 57,  157 => 56,  154 => 55,  148 => 51,  134 => 50,  129 => 47,  123 => 45,  121 => 44,  117 => 43,  113 => 42,  103 => 41,  101 => 40,  98 => 39,  95 => 38,  78 => 37,  73 => 34,  71 => 33,  64 => 30,  61 => 29,  58 => 28,  55 => 27,  50 => 23,  46 => 22,  35 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/PanelControllerBottom.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\PanelControllerBottom.html.twig");
    }
}
