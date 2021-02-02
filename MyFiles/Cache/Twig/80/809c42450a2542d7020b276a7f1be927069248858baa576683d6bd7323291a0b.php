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

/* Master/ListView.html.twig */
class __TwigTemplate_9619fb95b426afa7a43af3085dd91b539f27bb679a1132ffac7ba599604a1b62 extends \Twig\Template
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
        $context["formName"] = ("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 21));
        // line 22
        echo "
<script type=\"text/javascript\">
    var listViewDeleteCancel = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var listViewDeleteConfirm = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var listViewDeleteMessage = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 26), "html", null, true);
        echo "\";
    var listViewDeleteTitle = \"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 27), "html", null, true);
        echo "\";
</script>

<form id=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 32), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"loadfilter\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 33), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"offset\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 34), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"order\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 35), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 36
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 36), "card", [], "any", false, false, false, 36)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 37
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 37), "card", [], "any", false, false, false, 37)) ? ("container-fluid pt-3") : ("container-fluid"));
        echo "\">
            <div class=\"form-row\">
                ";
        // line 40
        echo "                <div class=\"col mb-2\">
                    <div class=\"btn-group\">
                        ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 42), "btnNew", [], "any", false, false, false, 42)) {
            // line 43
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "modalInsert", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                <button type=\"button\" class=\"btn btn-success\" data-toggle=\"modal\" data-target=\"#modal";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 44), "modalInsert", [], "any", false, false, false, 44), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </button>
                            ";
            } else {
                // line 48
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "btnNewUrl", [], "method", false, false, false, 48)]), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new"], "method", false, false, false, 48), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                                </a>
                            ";
            }
            // line 52
            echo "                        ";
        }
        // line 53
        echo "                        ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 53), "btnDelete", [], "any", false, false, false, 53)) {
            // line 54
            echo "                            <button type=\"button\" class=\"btn btn-danger\" onclick=\"listViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 54), "html", null, true);
            echo "');\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 54), "html", null, true);
            echo "\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
        }
        // line 58
        echo "                    </div>
                    ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 59), "btnPrint", [], "any", false, false, false, 59)) {
            // line 60
            echo "                        <div class=\"btn-group\">
                            ";
            // line 61
            echo twig_call_macro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["currentView"] ?? null), ($context["i18n"] ?? null)], 61, $context, $this->getSourceContext());
            echo "
                        </div>
                    ";
        }
        // line 64
        echo "                    ";
        // line 65
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 65), "render", [0 => true, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 65)], "method", false, false, false, 65);
        echo "
                    ";
        // line 67
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 67), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 67);
        echo "
                </div>
                <div class=\"col-sm mb-2\">
                    ";
        // line 71
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_searchControl", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 71, $context, $this->getSourceContext());
        echo "
                </div>
                <div class=\"col-md text-right mb-2\">
                    ";
        // line 75
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_filterButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 75, $context, $this->getSourceContext());
        echo "
                    ";
        // line 77
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_legendButton", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 77, $context, $this->getSourceContext());
        echo "
                    ";
        // line 79
        echo "                    ";
        echo twig_call_macro($macros["_self"], "macro_sortButton", [($context["currentView"] ?? null)], 79, $context, $this->getSourceContext());
        echo "
                </div>
            </div>
            ";
        // line 83
        echo "            ";
        $context["divFiltersStyle"] = ((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 83)) ? ("") : ("display: none;"));
        // line 84
        echo "            <div id=\"form";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 84), "html", null, true);
        echo "Filters\" class=\"form-row align-items-center border-bottom\" style=\"";
        echo twig_escape_filter($this->env, ($context["divFiltersStyle"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["filterName"] => $context["filter"]) {
            // line 86
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["filter"], "render", [], "method", false, false, false, 86);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['filterName'], $context['filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "            </div>
            ";
        // line 90
        echo "            <div class=\"row\">
                ";
        // line 91
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 91), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 91), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 91);
        echo "
            </div>
        </div>
        ";
        // line 95
        echo "        <div class=\"table-responsive\">
            ";
        // line 96
        $context["tableClass"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 96), "appSettings", [], "method", false, false, false, 96), "get", [0 => "default", 1 => "tablesize"], "method", false, false, false, 96) == "small")) ? ("table-sm") : (""));
        // line 97
        echo "            <table class=\"table table-hover mb-0 ";
        echo twig_escape_filter($this->env, ($context["tableClass"] ?? null), "html", null, true);
        echo "\">
                <thead>
                    <tr>
                        ";
        // line 100
        if (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 100)) > 0) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 100), "checkBoxes", [], "any", false, false, false, 100))) {
            // line 101
            echo "                            <th width=\"50\">
                                <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                    <input class=\"form-check-input listActionCB\" type=\"checkbox\" />
                                </div>
                            </th>
                        ";
        }
        // line 107
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 107));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 108
            echo "                            ";
            echo twig_get_attribute($this->env, $this->source, $context["column"], "tableHeader", [], "method", false, false, false, 108);
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                    </tr>
                </thead>
                <tbody>
                    ";
        // line 113
        $context["rowStatus"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 113);
        // line 114
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 114));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 115
            echo "                        ";
            $context["trClass"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 115), "clickable", [], "any", false, false, false, 115)) ? (("clickableRow " . twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 115))) : (twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trClass", [0 => $context["model"]], "method", false, false, false, 115)));
            // line 116
            echo "                        ";
            $context["trTitle"] = twig_get_attribute($this->env, $this->source, ($context["rowStatus"] ?? null), "trTitle", [0 => $context["model"]], "method", false, false, false, 116);
            // line 117
            echo "                        <tr class=\"";
            echo twig_escape_filter($this->env, ($context["trClass"] ?? null), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, ($context["trTitle"] ?? null), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["model"], "url", [], "method", false, false, false, 117)]), "html", null, true);
            echo "\">
                            ";
            // line 118
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 118), "checkBoxes", [], "any", false, false, false, 118)) {
                // line 119
                echo "                                <td class=\"cancelClickable\">
                                    <div class=\"form-check form-check-inline mb-2 mr-sm-2 mb-sm-0\">
                                        <input class=\"form-check-input listAction\" type=\"checkbox\" name=\"code[]\" value=\"";
                // line 121
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 121), "html", null, true);
                echo "\" />
                                    </div>
                                </td>
                            ";
            }
            // line 125
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 125));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 126
                echo "                                ";
                echo twig_get_attribute($this->env, $this->source, $context["column"], "tableCell", [0 => $context["model"]], "method", false, false, false, 126);
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo "                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            echo "                        <tr class=\"table-warning\">
                            <td colspan=\"";
            // line 131
            echo twig_escape_filter($this->env, (1 + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 131))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 131), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 138
        echo "        ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 138))) {
            // line 139
            echo "            <div class=\"table-responsive\">
                <table class=\"table table-hover mb-0\">
                    <thead>
                        <tr>
                            <th>
                            </th>
                            ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 146
                echo "                                <th class=\"text-right text-capitalize\">
                                    ";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 147)], "method", false, false, false, 147), "html", null, true);
                echo "
                                </th>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            echo "                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class=\"text-right\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "page-total-amount"], "method", false, false, false, 154), "html", null, true);
            echo "</td>
                            ";
            // line 155
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 155));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 156
                echo "                                <td class=\"text-right\">
                                    ";
                // line 157
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 157), "numbers", [], "method", false, false, false, 157), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "page", [], "any", false, false, false, 157)], "method", false, false, false, 157), "html", null, true);
                echo "
                                </td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 160
            echo "                        </tr>
                        <tr>
                            <td class=\"text-right\">";
            // line 162
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "total-amount"], "method", false, false, false, 162), "html", null, true);
            echo "</td>
                            ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "totalAmounts", [], "any", false, false, false, 163));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 164
                echo "                                <td class=\"text-right\">
                                    ";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 165), "numbers", [], "method", false, false, false, 165), "format", [0 => twig_get_attribute($this->env, $this->source, $context["item"], "total", [], "any", false, false, false, 165)], "method", false, false, false, 165), "html", null, true);
                echo "
                                </td>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 168
            echo "                        </tr>
                    </tbody>
                </table>
            </div>
        ";
        }
        // line 173
        echo "        ";
        // line 174
        echo "        ";
        $context["pages"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 174);
        // line 175
        echo "        ";
        if ((twig_length_filter($this->env, ($context["pages"] ?? null)) > 0)) {
            // line 176
            echo "            <div class=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 176), "card", [], "any", false, false, false, 176)) ? ("card-footer text-center") : ("pt-3 text-center"));
            echo "\">
                <div class=\"btn-group bg-white\">
                    ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 178));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 179
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 179)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 180
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\" onclick=\"listViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 180), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 180), "html", null, true);
                echo "');\">
                            ";
                // line 181
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 181), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 184
            echo "                </div>
            </div>
        ";
        }
        // line 187
        echo "    </div>
    <br/>
    ";
        // line 190
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 192
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 192), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 192), 1 => "listViewSetAction", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 192);
        echo "
        </div>
    </div>
    ";
        // line 196
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 196)) {
            // line 197
            echo "        ";
            echo twig_call_macro($macros["_self"], "macro_filterSaveModal", [($context["currentView"] ?? null), ($context["i18n"] ?? null)], 197, $context, $this->getSourceContext());
            echo "
    ";
        }
        // line 199
        echo "</form>

";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 202));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 203
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 203), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 203)], "method", false, false, false, 203);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "
";
        // line 246
        echo "
";
        // line 282
        echo "
";
        // line 310
        echo "
";
        // line 335
        echo "
";
        // line 350
        echo "
";
    }

    // line 207
    public function macro_filterButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 208
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "filters", [], "any", false, false, false, 208))) {
                // line 209
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 209);
                // line 210
                echo "        ";
                $context["saveFilters"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilters", [], "any", false, false, false, 210);
                // line 211
                echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-light\" onclick=\"listViewShowFilters('";
                // line 212
                echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                echo "');\">
                <i class=\"fas fa-filter fa-fw\" aria-hidden=\"true\"></i> ";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "filters"], "method", false, false, false, 213), "html", null, true);
                echo "
            </button>
            ";
                // line 215
                if ( !twig_test_empty(($context["saveFilters"] ?? null))) {
                    // line 216
                    echo "                <button type=\"button\" class=\"btn btn-light dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <span class=\"sr-only\"></span>
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                    // line 220
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["saveFilters"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["pageFilter"]) {
                        // line 221
                        echo "                        ";
                        $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 221) == twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 221))) ? (" active") : (""));
                        // line 222
                        echo "                        ";
                        $context["icon"] = ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["pageFilter"], "nick", [], "any", false, false, false, 222))) ? ("fa-users") : ("fa-user"));
                        // line 223
                        echo "                        <a class=\"dropdown-item";
                        echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                        echo "\" href=\"#\" onclick=\"listViewSetLoadFilter('";
                        echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                        echo "', '";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "id", [], "any", false, false, false, 223), "html", null, true);
                        echo "');\">
                            <i class=\"fas ";
                        // line 224
                        echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pageFilter"], "description", [], "any", false, false, false, 224), "html", null, true);
                        echo "
                        </a>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pageFilter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 227
                    echo "                </div>
            ";
                }
                // line 229
                echo "        </div>
        ";
                // line 230
                if (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "pageFilterKey", [], "any", false, false, false, 230)) {
                    // line 231
                    echo "            <div class=\"btn-group ml-1\">
                <button type=\"button\" class=\"btn btn-warning\" onclick=\"listViewSetLoadFilter('";
                    // line 232
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "', '');\">
                    <i class=\"fas fa-times fa-fw\"></i>
                </button>
                <button type=\"button\" class=\"btn btn-danger\" title=\"";
                    // line 235
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "remove-filter"], "method", false, false, false, 235), "html", null, true);
                    echo "\" onclick=\"listViewSetAction('";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "', 'delete-filter');\">
                    <i class=\"fas fa-trash-alt fa-fw\"></i>
                </button>
            </div>
        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 239
($context["currentView"] ?? null), "showFilters", [], "any", false, false, false, 239)) {
                    // line 240
                    echo "            <button type=\"button\" class=\"btn btn-info ml-1\" data-toggle=\"modal\" data-target=\"#savefilter";
                    echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 240), "html", null, true);
                    echo "\">
                <i class=\"fas fa-save fa-fw\"></i>
            </button>
        ";
                }
                // line 244
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 247
    public function macro_filterSaveModal($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 248
            echo "    ";
            $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 248);
            // line 249
            echo "    <div class=\"modal\" id=\"savefilter";
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">
                        <i class=\"fas fa-filter fa-fw\"></i> ";
            // line 254
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save-filter"], "method", false, false, false, 254), "html", null, true);
            echo "
                    </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row\">
                        <div class=\"col\">
                            <div class=\"form-group\">
                                <label>";
            // line 264
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 264), "html", null, true);
            echo "</label>
                                <input type=\"text\" name=\"filter-description\" class=\"form-control noEnterKey\" autofocus=\"\"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">
                        ";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 272), "html", null, true);
            echo "
                    </button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"listViewSetAction('";
            // line 274
            echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
            echo "', 'save-filter');\">
                        ";
            // line 275
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "accept"], "method", false, false, false, 275), "html", null, true);
            echo "
                    </button>
                </div>
            </div>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 283
    public function macro_legendButton($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 284
            echo "    ";
            $context["legend"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "status"], "method", false, false, false, 284), "legend", [], "method", false, false, false, 284);
            // line 285
            echo "    ";
            if (($context["legend"] ?? null)) {
                // line 286
                echo "        ";
                $context["viewName"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 286);
                // line 287
                echo "        <div class=\"btn-group\">
            <button type=\"button\" class=\"btn btn-light\" data-toggle=\"modal\" data-target=\"#statuslegend";
                // line 288
                echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                echo "\">
                <i class=\"fas fa-info fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-xl-inline\">";
                // line 290
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "colors"], "method", false, false, false, 290), "html", null, true);
                echo "</span>
            </button>
        </div>
        <div class=\"modal fade\" id=\"statuslegend";
                // line 293
                echo twig_escape_filter($this->env, ($context["viewName"] ?? null), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-info-circle fa-fw\"></i> ";
                // line 298
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "colors"], "method", false, false, false, 298), "html", null, true);
                echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">×</span>
                        </button>
                    </div>
                    ";
                // line 304
                echo ($context["legend"] ?? null);
                echo "
                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 311
    public function macro_printButton($__fsc__ = null, $__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 312
            echo "    <div class=\"dropdown\">
        <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
        </button>
        <div class=\"dropdown-menu\">
            ";
            // line 317
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 317), "options", [], "method", false, false, false, 317));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 318
                echo "                <a href=\"#\" class=\"dropdown-item\" onclick=\"listViewPrintAction('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 318), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "');\">
                    <i class=\"";
                // line 319
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 319), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    ";
                // line 320
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 320)], "method", false, false, false, 320), "html", null, true);
                echo "
                </a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "            ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 323), "tools", [], "any", false, false, false, 323))) {
                // line 324
                echo "                <div class=\"dropdown-divider\"></div>
                ";
                // line 325
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 325), "tools", [], "method", false, false, false, 325));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 326
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 326)]), "html", null, true);
                    echo "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 327
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 327), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 328
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 328)], "method", false, false, false, 328), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 331
                echo "            ";
            }
            // line 332
            echo "        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 336
    public function macro_searchControl($__currentView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 337
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "searchFields", [], "any", false, false, false, 337))) {
                // line 338
                echo "        <div class=\"form-group\">
            <div class=\"input-group\">
                <input class=\"form-control\" type=\"text\" name=\"query\" value=\"";
                // line 340
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "query", [], "any", false, false, false, 340), "html", null, true);
                echo "\" autocomplete=\"off\" placeholder=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 340), "html", null, true);
                echo "\"/>
                <span class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-secondary\">
                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                    </button>
                </span>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 351
    public function macro_sortButton($__currentView__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "currentView" => $__currentView__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 352
            echo "    ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 352))) {
                // line 353
                echo "        <div class=\"btn-group\">
            <button class=\"btn btn-light dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
                ";
                // line 355
                $context["icon"] = ((((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 355)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 355)] ?? null) : null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["type"] ?? null) : null) == "ASC")) ? ("fas fa-arrow-up") : ("fas fa-arrow-down"));
                // line 356
                echo "                <i class=\"";
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                <span class=\"d-none d-lg-inline\">";
                // line 357
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 357)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 357)] ?? null) : null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["label"] ?? null) : null), "html", null, true);
                echo "</span>
                <span class=\"caret\"></span>
            </button>
            <div class=\"dropdown-menu dropdown-menu-right\">
                ";
                // line 361
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderOptions", [], "any", false, false, false, 361));
                foreach ($context['_seq'] as $context["key"] => $context["orderby"]) {
                    // line 362
                    echo "                    ";
                    $context["activeClass"] = (((twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "orderKey", [], "any", false, false, false, 362) == $context["key"])) ? (" active") : (""));
                    // line 363
                    echo "                    ";
                    $context["icon"] = (((twig_get_attribute($this->env, $this->source, $context["orderby"], "type", [], "any", false, false, false, 363) == "ASC")) ? ("fas fa-arrow-up") : ("fas fa-arrow-down"));
                    // line 364
                    echo "                    <a class=\"dropdown-item";
                    echo twig_escape_filter($this->env, ($context["activeClass"] ?? null), "html", null, true);
                    echo "\" href=\"#\" onclick=\"listViewSetOrder('";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 364), "html", null, true);
                    echo "', '";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "');\">
                        <i class=\"";
                    // line 365
                    echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["orderby"], "label", [], "any", false, false, false, 365), "html", null, true);
                    echo "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['orderby'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 368
                echo "            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/ListView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  988 => 368,  977 => 365,  968 => 364,  965 => 363,  962 => 362,  958 => 361,  951 => 357,  946 => 356,  944 => 355,  940 => 353,  937 => 352,  924 => 351,  903 => 340,  899 => 338,  896 => 337,  882 => 336,  871 => 332,  868 => 331,  859 => 328,  855 => 327,  850 => 326,  846 => 325,  843 => 324,  840 => 323,  831 => 320,  827 => 319,  820 => 318,  816 => 317,  809 => 312,  794 => 311,  779 => 304,  770 => 298,  762 => 293,  756 => 290,  751 => 288,  748 => 287,  745 => 286,  742 => 285,  739 => 284,  725 => 283,  709 => 275,  705 => 274,  700 => 272,  689 => 264,  676 => 254,  667 => 249,  664 => 248,  650 => 247,  640 => 244,  630 => 240,  628 => 239,  619 => 235,  613 => 232,  610 => 231,  608 => 230,  605 => 229,  601 => 227,  590 => 224,  581 => 223,  578 => 222,  575 => 221,  571 => 220,  565 => 216,  563 => 215,  558 => 213,  554 => 212,  551 => 211,  548 => 210,  545 => 209,  542 => 208,  528 => 207,  523 => 350,  520 => 335,  517 => 310,  514 => 282,  511 => 246,  508 => 205,  499 => 203,  495 => 202,  491 => 199,  485 => 197,  482 => 196,  476 => 192,  472 => 190,  468 => 187,  463 => 184,  454 => 181,  445 => 180,  442 => 179,  438 => 178,  432 => 176,  429 => 175,  426 => 174,  424 => 173,  417 => 168,  408 => 165,  405 => 164,  401 => 163,  397 => 162,  393 => 160,  384 => 157,  381 => 156,  377 => 155,  373 => 154,  367 => 150,  358 => 147,  355 => 146,  351 => 145,  343 => 139,  340 => 138,  335 => 134,  324 => 131,  321 => 130,  315 => 128,  306 => 126,  301 => 125,  294 => 121,  290 => 119,  288 => 118,  279 => 117,  276 => 116,  273 => 115,  267 => 114,  265 => 113,  260 => 110,  251 => 108,  246 => 107,  238 => 101,  236 => 100,  229 => 97,  227 => 96,  224 => 95,  218 => 91,  215 => 90,  212 => 88,  203 => 86,  199 => 85,  192 => 84,  189 => 83,  182 => 79,  177 => 77,  172 => 75,  165 => 71,  158 => 67,  153 => 65,  151 => 64,  145 => 61,  142 => 60,  140 => 59,  137 => 58,  127 => 54,  124 => 53,  121 => 52,  111 => 48,  103 => 44,  100 => 43,  98 => 42,  94 => 40,  89 => 37,  85 => 36,  81 => 35,  77 => 34,  73 => 33,  69 => 32,  64 => 30,  58 => 27,  54 => 26,  50 => 25,  46 => 24,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/ListView.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\ListView.html.twig");
    }
}
