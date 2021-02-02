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

/* Wizard.html.twig */
class __TwigTemplate_d0f91badf12ca85c898368ec5c4fb98b163a1aa37ae0280f2f5506683f402898 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <!-- Macros Template Imports -->
    ";
        // line 24
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard.html.twig", 24)->unwrap();
        // line 25
        echo "
    ";
        // line 26
        $context["ciudad"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 26)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 26), "ciudad", [], "any", false, false, false, 26)) : (""));
        // line 27
        echo "    ";
        $context["codpais"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 27)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 27), "codpais", [], "any", false, false, false, 27)) : (twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codpais", 2 => "ESP"], "method", false, false, false, 27)));
        // line 28
        echo "    ";
        $context["provincia"] = ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 28)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 28), "provincia", [], "any", false, false, false, 28)) : (""));
        // line 29
        echo "
    <div class=\"bg-primary pt-5 pb-5\">
        <br/>
        <br/>
        <br/>
    </div>
    <div class=\"container card shadow\" style=\"margin-top: -100px;\">
        <div class=\"row\">
            <div class=\"col-12\">
                <h1 class=\"h3 mt-3\">
                    <i class=\"fas fa-magic\" aria-hidden=\"true\"></i> ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 39), "html", null, true);
        echo "
                    <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 40), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 40), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 44), "html", null, true);
        echo "</p>
                <hr/>
            </div>
        </div>
        <form method=\"post\" class=\"form\" id=\"formWizard\">
            <input type=\"hidden\" name=\"action\" value=\"step1\" />
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 53
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["empresa", "empresa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 53), "nombre", [], "any", false, false, false, 53), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "company-name"], "method", false, false, false, 53), "", ["autofocus" => "", "maxlength" => "100", "required" => ""]], 53, $context, $this->getSourceContext());
        // line 54
        echo "
                    </div>
                </div>
                <div class=\"col-sm-2\">
                    <div class=\"form-group\">
                        ";
        // line 59
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["tipoidfiscal", "tipoidfiscal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 59), "tipoidfiscal", [], "any", false, false, false, 59), twig_get_attribute($this->env, $this->source,         // line 60
($context["fsc"] ?? null), "getSelectValues", [0 => "IdentificadorFiscal"], "method", false, false, false, 60), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "fiscal-id"], "method", false, false, false, 60)], 59, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 65
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["cifnif", "cifnif", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 65), "cifnif", [], "any", false, false, false, 65), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "fiscal-number"], "method", false, false, false, 65), "", ["maxlength" => "30"]], 65, $context, $this->getSourceContext());
        // line 66
        echo "
                    </div>
                </div>
                <div class=\"col-sm-12\">
                    <div class=\"form-group form-check\">
                        ";
        // line 71
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 71), "personafisica", [], "any", false, false, false, 71)) {
            // line 72
            echo "                            <input type=\"checkbox\" name=\"personafisica\" value=\"1\" id=\"checkboxPersona\" class=\"form-check-input\" checked=\"\" />
                        ";
        } else {
            // line 74
            echo "                            <input type=\"checkbox\" name=\"personafisica\" value=\"1\" id=\"checkboxPersona\" class=\"form-check-input\" />
                        ";
        }
        // line 76
        echo "                        <label for=\"checkboxPersona\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "is-person"], "method", false, false, false, 76), "html", null, true);
        echo "</label>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 81
        if (twig_constant_is_defined("FS_INITIAL_CODPAIS")) {
            // line 82
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Pais"], "method", false, false, false, 82), twig_get_attribute($this->env, $this->source,             // line 83
($context["i18n"] ?? null), "trans", [0 => "country"], "method", false, false, false, 83), "fas fa-globe-americas", ["disabled" => ""]], 82, $context, $this->getSourceContext());
            echo "
                        ";
        } else {
            // line 85
            echo "                            ";
            echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codpais", "codpais", ($context["codpais"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Pais"], "method", false, false, false, 85), twig_get_attribute($this->env, $this->source,             // line 86
($context["i18n"] ?? null), "trans", [0 => "country"], "method", false, false, false, 86), "fas fa-globe-americas"], 85, $context, $this->getSourceContext());
            echo "
                        ";
        }
        // line 88
        echo "                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 92
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["provincia", "provincia", ($context["provincia"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "province"], "method", false, false, false, 92)], 92, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 97
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["ciudad", "ciudad", ($context["ciudad"] ?? null), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "city"], "method", false, false, false, 97)], 97, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"form-group\">
                        ";
        // line 102
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["direccion", "direccion", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 102), "direccion", [], "any", false, false, false, 102), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "address"], "method", false, false, false, 102), "fas fa-map-marked", ["maxlength" => "100", "required" => ""]], 102, $context, $this->getSourceContext());
        // line 103
        echo "
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        ";
        // line 108
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["apartado", "apartado", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 108), "apartado", [], "any", false, false, false, 108), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "post-office-box"], "method", false, false, false, 108), null, ["maxlength" => "10", "placeholder" => twig_get_attribute($this->env, $this->source,         // line 109
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 109)]], 108, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-group\">
                        ";
        // line 114
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["codpostal", "codpostal", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 114), "codpostal", [], "any", false, false, false, 114), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "zip-code"], "method", false, false, false, 114), null, ["maxlength" => "10"]], 114, $context, $this->getSourceContext());
        // line 115
        echo "
                    </div>
                </div>
                ";
        // line 118
        if ((twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 118), "email", [], "any", false, false, false, 118)) || twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 118), "email", [], "any", false, false, false, 118)))) {
            // line 119
            echo "                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 121
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["email", "email", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 121), "email", [], "any", false, false, false, 121), "email", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "email"], "method", false, false, false, 121), "fas fa-envelope", ["required" => "", "class" => "form-control"]], 121, $context, $this->getSourceContext());
            // line 122
            echo "
                        </div>
                    </div>
                ";
        }
        // line 126
        echo "                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 128
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono1", "telefono1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 128), "telefono1", [], "any", false, false, false, 128), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone"], "method", false, false, false, 128), "fas fa-phone", ["maxlength" => "30"]], 128, $context, $this->getSourceContext());
        // line 129
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 134
        echo twig_call_macro($macros["forms"], "macro_simpleInput", ["telefono2", "telefono2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 134), "telefono2", [], "any", false, false, false, 134), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "phone2"], "method", false, false, false, 134), "fas fa-mobile-alt", ["maxlength" => "30"]], 134, $context, $this->getSourceContext());
        // line 135
        echo "
                    </div>
                </div>
            </div>
            ";
        // line 139
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 139), "verifyPassword", [0 => "admin"], "method", false, false, false, 139)) {
            // line 140
            echo "                <div class=\"row\">
                    <div class=\"col mt-3\">
                        <h3 class=\"h4 text-info\">
                            <i class=\"fas fa-key\" aria-hidden=\"true\"></i> ";
            // line 143
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "you-should-change-passwd"], "method", false, false, false, 143), "html", null, true);
            echo "
                        </h3>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
            // line 149
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["user", "user", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 149), "nick", [], "any", false, false, false, 149), "text", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 149), "fas fa-user", ["readonly" => ""]], 149, $context, $this->getSourceContext());
            echo "
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 153
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["password", "password", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 153), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 154
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 154)]], 153, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <div class=\"form-group\">
                            ";
            // line 159
            echo twig_call_macro($macros["forms"], "macro_simpleInput", ["repassword", "repassword", "", "password", twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 159), "fas fa-key", ["class" => "form-control", "placeholder" => twig_get_attribute($this->env, $this->source,             // line 160
($context["i18n"] ?? null), "trans", [0 => "optional"], "method", false, false, false, 160)]], 159, $context, $this->getSourceContext());
            echo "
                        </div>
                    </div>
                </div>
            ";
        }
        // line 165
        echo "            <div class=\"row mb-3 mt-2\">
                <div class=\"col text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                        ";
        // line 168
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 168), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 176
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 177
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 178
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/custom.css"]), "html", null, true);
        echo "\" />
";
    }

    // line 181
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 182
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/pace-js/pace.min.js"]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 184
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/JS/Custom.js"]), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function () {
            \$(\"#formWizard\").submit(function () {
                \$(\"#btnWizard\").prop('disabled', true);
                \$(\"#btnWizard\").html('<i class=\"fas fa-spinner fa-spin\"></i>');
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "Wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 184,  330 => 183,  325 => 182,  321 => 181,  315 => 178,  310 => 177,  306 => 176,  295 => 168,  290 => 165,  282 => 160,  281 => 159,  273 => 154,  272 => 153,  265 => 149,  256 => 143,  251 => 140,  249 => 139,  243 => 135,  241 => 134,  234 => 129,  232 => 128,  228 => 126,  222 => 122,  220 => 121,  216 => 119,  214 => 118,  209 => 115,  207 => 114,  199 => 109,  198 => 108,  191 => 103,  189 => 102,  181 => 97,  173 => 92,  167 => 88,  162 => 86,  160 => 85,  155 => 83,  153 => 82,  151 => 81,  142 => 76,  138 => 74,  134 => 72,  132 => 71,  125 => 66,  123 => 65,  115 => 60,  114 => 59,  107 => 54,  105 => 53,  93 => 44,  84 => 40,  80 => 39,  68 => 29,  65 => 28,  62 => 27,  60 => 26,  57 => 25,  55 => 24,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Wizard.html.twig");
    }
}
