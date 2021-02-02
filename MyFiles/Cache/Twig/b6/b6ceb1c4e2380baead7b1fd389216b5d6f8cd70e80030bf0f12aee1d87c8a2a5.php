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

/* Macro/Forms.html.twig */
class __TwigTemplate_60f2e0a4a999b3465837a4a3b81aa0cd34b2071f496a895c704003444d91e2d1 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "
";
        // line 64
        echo "
";
    }

    // line 37
    public function macro_simpleInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 38
            echo "        ";
            if (($context["label"] ?? null)) {
                // line 39
                echo "            <label for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if (($context["icon"] ?? null)) {
                // line 43
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 46
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
        ";
            }
            // line 50
            echo "
                <input type=\"";
            // line 51
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
                        ";
            // line 52
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 52)) {
                // line 53
                echo "                            class=\"form-control\"
                        ";
            }
            // line 55
            echo "
                        ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 57
                echo "                            ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo " /> ";
            // line 59
            echo "
        ";
            // line 60
            if (($context["icon"] ?? null)) {
                // line 61
                echo "            </div>
        ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 82
    public function macro_simpleSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__label__ = null, $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "label" => $__label__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 83
            echo "    ";
            if (($context["label"] ?? null)) {
                // line 84
                echo "        <label for=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "</label>
    ";
            }
            // line 86
            echo "
    ";
            // line 87
            if (($context["icon"] ?? null)) {
                // line 88
                echo "        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                <span class=\"input-group-text\">
                    <i class=\"";
                // line 91
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                </span>
            </span>
    ";
            }
            // line 95
            echo "
        <select id=\"";
            // line 96
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                ";
            // line 97
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 97)) {
                // line 98
                echo "                class=\"form-control\"
                ";
            }
            // line 100
            echo "
                ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 102
                echo "                    ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "> ";
            // line 104
            echo "
            ";
            // line 105
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 106
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\"";
                if ((($context["value"] ?? null) == $context["key"])) {
                    echo " selected=\"selected\"";
                }
                echo ">
                    ";
                // line 107
                echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                echo "
                </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "        </select>

    ";
            // line 112
            if (($context["icon"] ?? null)) {
                // line 113
                echo "        </div>
    ";
            }
            // line 115
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Forms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 115,  260 => 113,  258 => 112,  254 => 110,  245 => 107,  236 => 106,  232 => 105,  229 => 104,  227 => 103,  216 => 102,  212 => 101,  209 => 100,  205 => 98,  203 => 97,  197 => 96,  194 => 95,  187 => 91,  182 => 88,  180 => 87,  177 => 86,  169 => 84,  166 => 83,  147 => 82,  136 => 61,  134 => 60,  131 => 59,  129 => 58,  118 => 57,  114 => 56,  111 => 55,  107 => 53,  105 => 52,  95 => 51,  92 => 50,  85 => 46,  80 => 43,  78 => 42,  75 => 41,  67 => 39,  64 => 38,  45 => 37,  40 => 64,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Forms.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Macro\\Forms.html.twig");
    }
}
