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

/* Tab/RefundFacturaCliente.html.twig */
class __TwigTemplate_a30e7bfe8bb52217a19b9f88411e90789f0df194438b9f3ecb825eca670a6a8b extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["mainViewName"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMainViewName", [], "method", false, false, false, 21);
        // line 22
        echo "
";
        // line 23
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 23), "exists", [], "method", false, false, false, 23)) {
            // line 24
            echo "    <script>
        function refundAll() {
            var refundableQty = document.getElementsByClassName(\"refundable\");
            var inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
            for (i = 0; i < inputToBeRefunded.length; i++) {
                inputToBeRefunded.item(i).value = refundableQty.item(i).innerHTML;
            }

            return false;
        }
        function refundNone() {
            var inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
            for (i = 0; i < inputToBeRefunded.length; i++) {
                inputToBeRefunded.item(i).value = 0;
            }

            return false;
        }
    </script>
    <form method=\"post\">
        <input type=\"hidden\" name=\"action\" value=\"new-refund\"/>
        <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 45), "html", null, true);
            echo "\"/>
        <input type=\"hidden\" name=\"idfactura\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 46), "primaryColumnValue", [], "method", false, false, false, 46), "html", null, true);
            echo "\"/>
        <div class=\"container-fluid\">
            <div class=\"row\">
                <div class=\"col text-right\">
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" onClick=\"return refundNone();\">
                        ";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-none"], "method", false, false, false, 51), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-sm btn-outline-secondary\" onClick=\"return refundAll();\">
                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-all"], "method", false, false, false, 54), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
        <div class=\"table-responsive\">
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "product"], "method", false, false, false, 63), "html", null, true);
            echo "</th>
                        <th>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 64), "html", null, true);
            echo "</th>
                        <th class=\"text-right\" width=\"200\">";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "quantity"], "method", false, false, false, 65), "html", null, true);
            echo "</th>
                        <th class=\"text-right\" width=\"200\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-refund"], "method", false, false, false, 66), "html", null, true);
            echo "</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 70), "getLines", [], "method", false, false, false, 70));
            foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
                // line 71
                echo "                        ";
                $context["refunded"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 71), "refundedItemAmount", [0 => twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 71)], "method", false, false, false, 71);
                // line 72
                echo "                        <tr>
                            <td>
                                <div class=\"form-control\">";
                // line 74
                echo twig_get_attribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 74);
                echo "</div>
                            </td>
                            <td>
                                <div class=\"form-control\">";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["line"], "descripcion", [], "any", false, false, false, 77);
                echo "</div>
                            </td>
                            <td>
                                <div class=\"form-control text-right refundable\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 80), "html", null, true);
                echo "</div>
                            </td>
                            <td class=\"table-warning\">
                                <input type=\"number\" name=\"refund_";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 83), "html", null, true);
                echo "\" value=\"0\" min=\"0\" max=\"";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 83) - ($context["refunded"] ?? null)), "html", null, true);
                echo "\" step=\"any\"
                                       class=\"form-control text-right to_refund\" autocomplete=\"off\"/>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            echo "                </tbody>
            </table>
        </div>
        <div class=\"container-fluid\">
            <div class=\"form-row\">
                <div class=\"col mb-2\">
                    <textarea name=\"observaciones\" class=\"form-control\" placeholder=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "observations"], "method", false, false, false, 94), "html", null, true);
            echo "\"></textarea>
                </div>
            </div>
            <div class=\"form-row\">
                ";
            // line 98
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["codserie", "codserie", twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codserierec", 2 => "R"], "method", false, false, false, 98), twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 98)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["mainViewName"] ?? null)] ?? null) : null), "getSelectValues", [0 => "Serie"], "method", false, false, false, 98)], 98, $context, $this->getSourceContext());
            echo "
                ";
            // line 99
            echo twig_call_macro($macros["_self"], "macro_customInput", ["fecha", "fecha", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 99), "today", [], "method", false, false, false, 99), "text", "fas fa-calendar-alt", ["class" => "form-control datepicker"]], 99, $context, $this->getSourceContext());
            echo "
                <div class=\"col text-right\">
                    <button type=\"submit\" class=\"btn btn-sm btn-primary\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 102), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </form>
";
        }
        // line 109
        echo "
";
        // line 127
        echo "
";
    }

    // line 110
    public function macro_customSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__allowHide__ = true, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "allowHide" => $__allowHide__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 111
            echo "    ";
            if ((($context["allowHide"] ?? null) && (twig_length_filter($this->env, ($context["allValues"] ?? null)) == 1))) {
                // line 112
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 113
                    echo "            <input type=\"hidden\" id=\"";
                    echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"/>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 115
                echo "    ";
            } else {
                // line 116
                echo "        <div class=\"col-sm-2 mb-2\">
            <select id=\"";
                // line 117
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"form-control\">
                ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 119
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"\"";
                    }
                    echo ">
                        ";
                    // line 120
                    echo twig_escape_filter($this->env, $context["option"], "html", null, true);
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "            </select>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 128
    public function macro_customInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__icon__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 129
            echo "    <div class=\"col-sm-2 mb-2\">
        ";
            // line 130
            if (($context["icon"] ?? null)) {
                // line 131
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 134
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
            ";
            }
            // line 138
            echo "
            <input type=\"";
            // line 139
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
                   ";
            // line 140
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 140)) {
                // line 141
                echo "                       class=\"form-control\"
                   ";
            }
            // line 143
            echo "
                   ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 145
                echo "                       ";
                echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrValue"], "html", null, true);
                echo "\"
                   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['attrValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo " /> ";
            // line 147
            echo "
            ";
            // line 148
            if (($context["icon"] ?? null)) {
                // line 149
                echo "            </div>
        ";
            }
            // line 151
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Tab/RefundFacturaCliente.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 151,  367 => 149,  365 => 148,  362 => 147,  360 => 146,  349 => 145,  345 => 144,  342 => 143,  338 => 141,  336 => 140,  326 => 139,  323 => 138,  316 => 134,  311 => 131,  309 => 130,  306 => 129,  288 => 128,  276 => 123,  267 => 120,  258 => 119,  254 => 118,  248 => 117,  245 => 116,  242 => 115,  229 => 113,  224 => 112,  221 => 111,  204 => 110,  199 => 127,  196 => 109,  186 => 102,  180 => 99,  176 => 98,  169 => 94,  161 => 88,  148 => 83,  142 => 80,  136 => 77,  130 => 74,  126 => 72,  123 => 71,  119 => 70,  112 => 66,  108 => 65,  104 => 64,  100 => 63,  88 => 54,  82 => 51,  74 => 46,  70 => 45,  47 => 24,  45 => 23,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Tab/RefundFacturaCliente.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Tab\\RefundFacturaCliente.html.twig");
    }
}
