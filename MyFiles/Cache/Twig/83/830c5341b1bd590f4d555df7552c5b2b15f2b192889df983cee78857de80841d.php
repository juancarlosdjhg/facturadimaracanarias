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

/* Wizard-2.html.twig */
class __TwigTemplate_9c8d94533db15bb67f8fc586848a19d03af8cd3acdadc7698788128fe0862f66 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Wizard-2.html.twig", 20);
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
        $macros["forms"] = $this->loadTemplate("Macro/Forms.html.twig", "Wizard-2.html.twig", 24)->unwrap();
        // line 25
        echo "    ";
        $context["codimpuesto"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codimpuesto"], "method", false, false, false, 25);
        // line 26
        echo "    ";
        $context["codretencion"] = twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", [0 => "default", 1 => "codretencion"], "method", false, false, false, 26);
        // line 27
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
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard"], "method", false, false, false, 37), "html", null, true);
        echo "
                    <a href=\"";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 38), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 38), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </h1>
                <p>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "wizard-p"], "method", false, false, false, 42), "html", null, true);
        echo "</p>
                <hr/>
            </div>
        </div>
        <form action=\"#\" method=\"post\" class=\"form\" id=\"formWizard\">
            <input type=\"hidden\" name=\"action\" value=\"step2\" />
            <div class=\"row align-items-end\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 51
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["regimeniva", "regimeniva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 51), "regimeniva", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getRegimenIva", [], "method", false, false, false, 51), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "vat-regime"], "method", false, false, false, 51)], 51, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 56
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codimpuesto", "codimpuesto", ($context["codimpuesto"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Impuesto", 1 => true], "method", false, false, false, 56), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-tax"], "method", false, false, false, 56)], 56, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 61
        echo twig_call_macro($macros["forms"], "macro_simpleSelect", ["codretencion", "codretencion", ($context["codretencion"] ?? null), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getSelectValues", [0 => "Retencion", 1 => true], "method", false, false, false, 61), twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "default-retention"], "method", false, false, false, 61)], 61, $context, $this->getSourceContext());
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cost-price-policy"], "method", false, false, false, 66), "html", null, true);
        echo "
                        <select name=\"costpricepolicy\" class=\"form-control\">
                            <option value=\"\">------</option>
                            <option value=\"last-price\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "last-purchase-price"], "method", false, false, false, 69), "html", null, true);
        echo "</option>
                            <option value=\"average-price\">";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "average-purchase-price"], "method", false, false, false, 70), "html", null, true);
        echo "</option>
                            <option value=\"actual-price\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actual-cost-price"], "method", false, false, false, 71), "html", null, true);
        echo "</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-sm\">
                    <div class=\"form-group form-check\">
                        <input type=\"checkbox\" name=\"ventasinstock\" value=\"1\" id=\"cbNoStock\" class=\"form-check-input\" />
                        <label for=\"cbNoStock\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "allow-sale-without-stock"], "method", false, false, false, 78), "html", null, true);
        echo "</label>
                    </div>
                </div>
            </div>
            <div class=\"row mt-4\">
                <div class=\"col-sm\">
                    <div class=\"form-group form-check\">
                        <input type=\"checkbox\" name=\"defaultplan\" value=\"1\" id=\"checkboxPlan\" class=\"form-check-input\" checked=\"\" />
                        <label for=\"checkboxPlan\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "load-def-acc-plan"], "method", false, false, false, 86), "html", null, true);
        echo "</label>
                    </div>
                </div>
                <div class=\"col-sm text-right\">
                    <button type=\"submit\" class=\"btn btn-primary\" id=\"btnWizard\">
                        ";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 91), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 99
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 101
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/custom.css"]), "html", null, true);
        echo "\" />
";
    }

    // line 104
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 105
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 106
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/pace-js/pace.min.js"]), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 107
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
        return "Wizard-2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 107,  202 => 106,  197 => 105,  193 => 104,  187 => 101,  182 => 100,  178 => 99,  167 => 91,  159 => 86,  148 => 78,  138 => 71,  134 => 70,  130 => 69,  124 => 66,  116 => 61,  108 => 56,  100 => 51,  88 => 42,  79 => 38,  75 => 37,  63 => 27,  60 => 26,  57 => 25,  55 => 24,  52 => 23,  48 => 22,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Wizard-2.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Wizard-2.html.twig");
    }
}
