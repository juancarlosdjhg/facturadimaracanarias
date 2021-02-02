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

/* Master/BusinessDocumentView.html.twig */
class __TwigTemplate_494dff62505092ffbbba40e3f28f65a6235d88a9f010e679046d53150df56c3f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'extras' => [$this, 'block_extras'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["thisView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script type=\"text/javascript\">
    businessDocViewLineData = ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getLineData", [], "method", false, false, false, 23);
        echo ";
    businessDocViewFormName = \"form";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 24), "html", null, true);
        echo "\";
    businessDocViewUrl = \"";
        // line 25
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 25), "url", [0 => "edit"], "method", false, false, false, 25);
        echo "\";
    function businessDocViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 28), "html", null, true);
        echo "\",
            message: \"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 29), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 33), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 36), "html", null, true);
        echo "',
                    className: \"btn-danger\"
                }
            },
            callback: function (result) {
                if (result) {
                    \$(\"#form\" + viewName + \" :input[name=\\\"action\\\"]\").val(\"delete\");
                    \$(\"#form\" + viewName).submit();
                }
            }
        });

        return false;
    }
</script>

<form id=\"form";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 52), "html", null, true);
        echo "\" action=\"#\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 54), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 55), "primaryColumnValue", [], "method", false, false, false, 55), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumn", [], "method", false, false, false, 56), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 56), "primaryColumnValue", [], "method", false, false, false, 56), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"idestado\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 57), "idestado", [], "any", false, false, false, 57), "html", null, true);
        echo "\" id=\"doc_idestado\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 58), "newToken", [], "method", false, false, false, 58), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 59
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 59), "card", [], "any", false, false, false, 59)) ? ("") : ("container-fluid"));
        echo "\">
        <div class=\"form-row\">
            ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 61), "subjectColumn", [], "method", false, false, false, 61) == "codcliente")) {
            // line 62
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customerSelect", [($context["i18n"] ?? null), "codcliente", "codcliente", twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 62), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 62)], 62, $context, $this->getSourceContext());
            echo "
            ";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["thisView"] ?? null), "model", [], "any", false, false, false, 63), "subjectColumn", [], "method", false, false, false, 63) == "codproveedor")) {
            // line 64
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_supplierSelect", [($context["i18n"] ?? null), "codproveedor", "codproveedor", twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 64), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getNewSubjectUrl", [], "method", false, false, false, 64)], 64, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 66
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codalmacen", "codalmacen", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 66), "codalmacen", [], "any", false, false, false, 66), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Almacen"], "method", false, false, false, 66)], 66, $context, $this->getSourceContext());
        echo "
            ";
        // line 67
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codserie", "codserie", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 67), "codserie", [], "any", false, false, false, 67), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Serie"], "method", false, false, false, 67)], 67, $context, $this->getSourceContext());
        echo "
            ";
        // line 68
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_fecha", "fecha", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 68), "fecha", [], "any", false, false, false, 68), "text", "fas fa-calendar-alt", ["class" => "form-control datepicker"]], 68, $context, $this->getSourceContext());
        echo "
            ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCustomFields", [], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 70
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", [("doc_" . twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70)), twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70), twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getViewModelValue", [0 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 70), 1 => twig_get_attribute($this->env, $this->source, $context["field"], "name", [], "any", false, false, false, 70)], "method", false, false, false, 70), "text", twig_get_attribute($this->env, $this->source,             // line 71
$context["field"], "icon", [], "any", false, false, false, 71), ["placeholder" => twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["field"], "label", [], "any", false, false, false, 71)], "method", false, false, false, 71)]], 70, $context, $this->getSourceContext());
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codpago", "codpago", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 73), "codpago", [], "any", false, false, false, 73), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "FormaPago"], "method", false, false, false, 73)], 73, $context, $this->getSourceContext());
        echo "
            ";
        // line 74
        echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_coddivisa", "coddivisa", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 74), "coddivisa", [], "any", false, false, false, 74), twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getSelectValues", [0 => "Divisa"], "method", false, false, false, 74)], 74, $context, $this->getSourceContext());
        echo "
            <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
                <div class=\"input-group\">
                    <input type=\"text\" id=\"doc_total\" name=\"total\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 77), "total", [], "any", false, false, false, 77), "html", null, true);
        echo "\" class=\"form-control text-right\" disabled=\"\" />
                    <div class=\"input-group-append\">
                        ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 79), "btnSave", [], "any", false, false, false, 79)) {
            // line 80
            echo "                            <button type=\"button\" class=\"btn btn-primary\" onclick=\"businessDocViewSave();\">
                                <i class=\"fas fa-save\" aria-hidden=\"true\"></i>
                            </button>
                        ";
        }
        // line 84
        echo "                    </div>
                </div>
            </div>
            ";
        // line 87
        echo twig_call_macro($macros["_self"], "macro_statusSelect", [twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 87), ($context["thisView"] ?? null), ($context["i18n"] ?? null)], 87, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 89
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 89), "exists", [], "method", false, false, false, 89)) {
            // line 90
            echo "            <div class=\"row\">
                ";
            // line 91
            echo twig_call_macro($macros["_self"], "macro_parentDocuments", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 91), "parentDocuments", [], "method", false, false, false, 91), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 91, $context, $this->getSourceContext());
            echo "
                ";
            // line 92
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 92), "femail", [], "any", false, false, false, 92)) {
                // line 93
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-info text-center\">
                            <i class=\"fas fa-envelope fa-fw\" aria-hidden=\"true\"></i> ";
                // line 95
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 95), "femail", [], "any", false, false, false, 95), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 99
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 99), "paid", [], "method", false, false, false, 99)) {
                // line 100
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-success text-center\">
                            <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i> ";
                // line 102
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "paid"], "method", false, false, false, 102), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 106
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 106), "editable", [], "any", false, false, false, 106) == false)) {
                // line 107
                echo "                    <div class=\"col-sm\">
                        <div class=\"alert alert-danger text-center\">
                            <i class=\"fas fa-lock fa-fw\"></i> ";
                // line 109
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "non-editable-document"], "method", false, false, false, 109), "html", null, true);
                echo "
                        </div>
                    </div>
                ";
            }
            // line 113
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_childrenDocuments", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 113), "childrenDocuments", [], "method", false, false, false, 113), ($context["fsc"] ?? null), ($context["i18n"] ?? null)], 113, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 116
        echo "        <div id=\"document-lines\"></div>
        <div class=\"form-row mt-2\">
            ";
        // line 118
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showDocSubType", [], "any", false, false, false, 118)) {
            // line 119
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codsubtipodoc", "codsubtipodoc", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 119), "codsubtipodoc", [], "any", false, false, false, 119), twig_get_attribute($this->env, $this->source,             // line 120
($context["thisView"] ?? null), "getSelectValues", [0 => "BusinessDocSubType"], "method", false, false, false, 120), true, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "doc-subtype"], "method", false, false, false, 120)], 119, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 122
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "showDocOperation", [], "any", false, false, false, 122)) {
            // line 123
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customSelect", ["doc_codoperaciondoc", "codoperaciondoc", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 123), "codoperaciondoc", [], "any", false, false, false, 123), twig_get_attribute($this->env, $this->source,             // line 124
($context["thisView"] ?? null), "getSelectValues", [0 => "BusinessDocTypeOperation"], "method", false, false, false, 124), true, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "doc-operation"], "method", false, false, false, 124)], 123, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 126
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_netosindto", "netosindto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 126), "netosindto", [], "any", false, false, false, 126), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 127
($context["i18n"] ?? null), "trans", [0 => "subtotal"], "method", false, false, false, 127)], 126, $context, $this->getSourceContext());
        echo "
            ";
        // line 128
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 128), "editable", [], "any", false, false, false, 128)) {
            // line 129
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor1", "dtopor1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 129), "dtopor1", [], "any", false, false, false, 129), "number", "fas fa-percentage", ["class" => "form-control"], twig_get_attribute($this->env, $this->source,             // line 130
($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 130)], 129, $context, $this->getSourceContext());
            echo "
                ";
            // line 131
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor2", "dtopor2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 131), "dtopor2", [], "any", false, false, false, 131), "number", "fas fa-percentage", ["class" => "form-control"], twig_get_attribute($this->env, $this->source,             // line 132
($context["i18n"] ?? null), "trans", [0 => "global-dto-2"], "method", false, false, false, 132)], 131, $context, $this->getSourceContext());
            echo "
            ";
        } else {
            // line 134
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor1", "dtopor1", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 134), "dtopor1", [], "any", false, false, false, 134), "number", "fas fa-percentage", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 135
($context["i18n"] ?? null), "trans", [0 => "global-dto"], "method", false, false, false, 135)], 134, $context, $this->getSourceContext());
            echo "
                ";
            // line 136
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_dtopor2", "dtopor2", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 136), "dtopor2", [], "any", false, false, false, 136), "number", "fas fa-percentage", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 137
($context["i18n"] ?? null), "trans", [0 => "global-dto-2"], "method", false, false, false, 137)], 136, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 139
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_neto", "neto", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 139), "neto", [], "any", false, false, false, 139), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 140
($context["i18n"] ?? null), "trans", [0 => "net"], "method", false, false, false, 140)], 139, $context, $this->getSourceContext());
        echo "
            ";
        // line 141
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totaliva", "totaliva", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 141), "totaliva", [], "any", false, false, false, 141), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 142
($context["i18n"] ?? null), "trans", [0 => "taxes"], "method", false, false, false, 142)], 141, $context, $this->getSourceContext());
        echo "
            ";
        // line 143
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 143), "totalrecargo", [], "any", false, false, false, 143) != 0)) {
            // line 144
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalrecargo", "totalrecargo", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 144), "totalrecargo", [], "any", false, false, false, 144), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 145
($context["i18n"] ?? null), "trans", [0 => "re"], "method", false, false, false, 145)], 144, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 147
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 147), "totalirpf", [], "any", false, false, false, 147) != 0)) {
            // line 148
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalirpf", "totalirpf", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 148), "totalirpf", [], "any", false, false, false, 148), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 149
($context["i18n"] ?? null), "trans", [0 => "irpf"], "method", false, false, false, 149)], 148, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 151
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 151), "totalsuplidos", [], "any", false, false, false, 151) != 0)) {
            // line 152
            echo "                ";
            echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_totalsuplidos", "totalsuplidos", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 152), "totalsuplidos", [], "any", false, false, false, 152), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,             // line 153
($context["i18n"] ?? null), "trans", [0 => "supplied-amount"], "method", false, false, false, 153)], 152, $context, $this->getSourceContext());
            echo "
            ";
        }
        // line 155
        echo "            ";
        echo twig_call_macro($macros["_self"], "macro_customInput", ["doc_total2", "total", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 155), "total", [], "any", false, false, false, 155), "text", "", ["class" => "form-control", "disabled" => ""], twig_get_attribute($this->env, $this->source,         // line 156
($context["i18n"] ?? null), "trans", [0 => "total"], "method", false, false, false, 156)], 155, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"form-row mb-2\">
            ";
        // line 159
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getRow", [0 => "business"], "method", false, false, false, 159), "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 159)], "method", false, false, false, 159);
        echo "
        </div>
        <div class=\"form-row\">
            ";
        // line 162
        if ((twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getMaxLines", [], "method", false, false, false, 162) < 200)) {
            // line 163
            echo "                <div class=\"col-12\">
                    <p class=\"alert alert-warning\" role=\"alert\">
                        ";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "max-input-vars-warning", 1 => ["%numlines%" => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getMaxLines", [], "method", false, false, false, 165)]], "method", false, false, false, 165), "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        // line 169
        echo "            <div class=\"col\">
                ";
        // line 170
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 170) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 170), "btnDelete", [], "any", false, false, false, 170))) {
            // line 171
            echo "                    <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"businessDocViewDelete('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 171), "html", null, true);
            echo "');\">
                        <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 173
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 173), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 176
        echo "            </div>
            <div class=\"col text-center\">
                ";
        // line 178
        $this->displayBlock('extras', $context, $blocks);
        // line 181
        echo "            </div>
            <div class=\"col text-right\">
                ";
        // line 183
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 183), "btnUndo", [], "any", false, false, false, 183)) {
            // line 184
            echo "                    <a class=\"btn btn-sm btn-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "model", [], "any", false, false, false, 184), "url", [], "method", false, false, false, 184), "html", null, true);
            echo "\">
                        <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 186), "html", null, true);
            echo "</span>
                    </a>
                ";
        }
        // line 189
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "settings", [], "any", false, false, false, 189), "btnSave", [], "any", false, false, false, 189)) {
            // line 190
            echo "                    <button type=\"button\" class=\"btn btn-sm btn-primary\" onclick=\"businessDocViewSave();\">
                        <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 191), "html", null, true);
            echo "
                    </button>
                ";
        }
        // line 194
        echo "            </div>
        </div>
    </div>
</form>

";
        // line 217
        echo "
";
        // line 244
        echo "
";
        // line 267
        echo "
";
        // line 290
        echo "
";
        // line 333
        echo "
";
        // line 386
        echo "
";
    }

    // line 178
    public function block_extras($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 179
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 179), "render", [0 => false, 1 => twig_get_attribute($this->env, $this->source, ($context["thisView"] ?? null), "getViewName", [], "method", false, false, false, 179)], "method", false, false, false, 179);
        echo "
                ";
    }

    // line 199
    public function macro_customSelect($__id__ = null, $__name__ = null, $__value__ = null, $__allValues__ = [], $__allowHide__ = true, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "allValues" => $__allValues__,
            "allowHide" => $__allowHide__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 200
            echo "    ";
            if ((($context["allowHide"] ?? null) && (twig_length_filter($this->env, ($context["allValues"] ?? null)) == 1))) {
                // line 201
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 202
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
                // line 204
                echo "    ";
            } else {
                // line 205
                echo "        <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
            ";
                // line 206
                echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
                echo "
            <select id=\"";
                // line 207
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "\" name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" class=\"form-control\">
                ";
                // line 208
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allValues"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                    // line 209
                    echo "                    <option value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\"";
                    if ((($context["value"] ?? null) == $context["key"])) {
                        echo " selected=\"\"";
                    }
                    echo ">
                        ";
                    // line 210
                    echo $context["option"];
                    echo "
                    </option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 213
                echo "            </select>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 218
    public function macro_customInput($__id__ = null, $__name__ = null, $__value__ = null, $__type__ = "text", $__icon__ = null, $__attributes__ = null, $__label__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "name" => $__name__,
            "value" => $__value__,
            "type" => $__type__,
            "icon" => $__icon__,
            "attributes" => $__attributes__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 219
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        ";
            // line 220
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
        ";
            // line 221
            if (($context["icon"] ?? null)) {
                // line 222
                echo "            <div class=\"input-group\">
                <span class=\"input-group-prepend\">
                    <span class=\"input-group-text\">
                        <i class=\"";
                // line 225
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i>
                    </span>
                </span>
            ";
            }
            // line 229
            echo "
            <input type=\"";
            // line 230
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo ($context["value"] ?? null);
            echo "\"
                   ";
            // line 231
            if ( !twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 231)) {
                // line 232
                echo "                       class=\"form-control\"
                   ";
            }
            // line 234
            echo "
                   ";
            // line 235
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
            foreach ($context['_seq'] as $context["attribute"] => $context["attrValue"]) {
                // line 236
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
            // line 237
            echo " /> ";
            // line 238
            echo "
            ";
            // line 239
            if (($context["icon"] ?? null)) {
                // line 240
                echo "            </div>
        ";
            }
            // line 242
            echo "    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 245
    public function macro_customerSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 246
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 249
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 249)) {
                // line 250
                echo "                    <a href=\"EditCliente?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 250), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 254
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-customer"], "method", false, false, false, 254), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 258
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 259
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 259), "html", null, true);
            echo "\"/>
            ";
            // line 260
            $context["autofocus"] = ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codcliente", [], "any", false, false, false, 260)) ? ("") : ("autofocus=\"\""));
            // line 261
            echo "            <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombrecliente", [], "any", false, false, false, 261);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 262
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Cliente\" data-fieldcode=\"codcliente\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "customer"], "method", false, false, false, 263), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["autofocus"] ?? null), "html", null, true);
            echo " autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 268
    public function macro_supplierSelect($__i18n__ = null, $__id__ = null, $__name__ = null, $__model__ = null, $__newUrl__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "i18n" => $__i18n__,
            "id" => $__id__,
            "name" => $__name__,
            "model" => $__model__,
            "newUrl" => $__newUrl__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 269
            echo "    <div class=\"col-sm-3 col-md-2 col-lg mb-2\">
        <div class=\"input-group\">
            <span class=\"input-group-prepend\">
                ";
            // line 272
            if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 272)) {
                // line 273
                echo "                    <a href=\"EditProveedor?code=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 273), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-info\">
                        <i class=\"fas fa-user-cog fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            } else {
                // line 277
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, ($context["newUrl"] ?? null), "html", null, true);
                echo "\" class=\"btn btn-success\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-supplier"], "method", false, false, false, 277), "html", null, true);
                echo "\">
                        <i class=\"fas fa-user-plus fa-fw\" aria-hidden=\"true\"></i>
                    </a>
                ";
            }
            // line 281
            echo "            </span>
            <input type=\"hidden\" id=\"";
            // line 282
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "Autocomplete\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 282), "html", null, true);
            echo "\"/>
            ";
            // line 283
            $context["autofocus"] = ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "codproveedor", [], "any", false, false, false, 283)) ? ("") : ("autofocus=\"\""));
            // line 284
            echo "            <input type=\"text\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "nombre", [], "any", false, false, false, 284);
            echo "\" class=\"form-control autocomplete-dc\"
                   data-field=\"";
            // line 285
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" data-source=\"Proveedor\" data-fieldcode=\"codproveedor\" data-fieldtitle=\"nombre\"
                   placeholder=\"";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "supplier"], "method", false, false, false, 286), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["autofocus"] ?? null), "html", null, true);
            echo " autocomplete=\"off\"/>
        </div>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 291
    public function macro_statusSelect($__model__ = null, $__view__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "model" => $__model__,
            "view" => $__view__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 292
            echo "    ";
            $context["status"] = twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getStatus", [], "method", false, false, false, 292);
            // line 293
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "exists", [], "method", false, false, false, 293) == false)) {
                // line 294
                echo "    ";
            } elseif (twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "generadoc", [], "any", false, false, false, 294)) {
                // line 295
                echo "        <div class=\"col mb-2\">
            <button class=\"btn btn-block btn-secondary\" type=\"button\">
                <i class=\"";
                // line 297
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 297), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 297), "html", null, true);
                echo "
            </button>
        </div>
    ";
            } else {
                // line 301
                echo "        <div class=\"col mb-2\">
            <div class=\"dropdown\">
                <button class=\"btn btn-block btn-secondary dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"";
                // line 304
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "icon", [], "method", false, false, false, 304), "html", null, true);
                echo " fa-fw\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["status"] ?? null), "nombre", [], "any", false, false, false, 304), "html", null, true);
                echo "
                </button>
                <div class=\"dropdown-menu dropdown-menu-right\">
                    ";
                // line 307
                $context["showDocumentStitcher"] = false;
                // line 308
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["view"] ?? null), "documentStatus", [], "any", false, false, false, 308));
                foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
                    // line 309
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "idestado", [], "any", false, false, false, 309) == twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 309))) {
                        // line 310
                        echo "                            <a class=\"dropdown-item active\" href=\"#\">
                                <i class=\"";
                        // line 311
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 311), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 311), "html", null, true);
                        echo "
                            </a>
                        ";
                    } else {
                        // line 314
                        echo "                            <a class=\"dropdown-item\" href=\"#\" onclick=\"\$('#doc_idestado').val('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 314), "html", null, true);
                        echo "'); businessDocViewSave();\">
                                ";
                        // line 315
                        if (twig_get_attribute($this->env, $this->source, $context["status"], "generadoc", [], "any", false, false, false, 315)) {
                            // line 316
                            echo "                                    ";
                            $context["showDocumentStitcher"] = true;
                            // line 317
                            echo "                                ";
                        }
                        // line 318
                        echo "                                <i class=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "icon", [], "method", false, false, false, 318), "html", null, true);
                        echo " fa-fw\" aria-hidden=\"true\"></i> ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 318), "html", null, true);
                        echo "
                            </a>
                        ";
                    }
                    // line 321
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 322
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "exists", [], "method", false, false, false, 322) && ($context["showDocumentStitcher"] ?? null))) {
                    // line 323
                    echo "                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"DocumentStitcher?model=";
                    // line 324
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "modelClassName", [], "method", false, false, false, 324), "html", null, true);
                    echo "&codes=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 324), "html", null, true);
                    echo "\">
                            <i class=\"fas fa-magic fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 325
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "group-or-split"], "method", false, false, false, 325), "html", null, true);
                    echo "
                        </a>
                    ";
                }
                // line 328
                echo "                </div>
            </div>
        </div>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 334
    public function macro_parentDocuments($__relatedDocuments__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "relatedDocuments" => $__relatedDocuments__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 335
            echo "    ";
            if ((twig_length_filter($this->env, ($context["relatedDocuments"] ?? null)) > 2)) {
                // line 336
                echo "        <div class=\"col-sm\">
            <div class=\"alert alert-warning text-center\">
                <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#parentsModal\">";
                // line 339
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "previous-documents"], "method", false, false, false, 339), "html", null, true);
                echo "</a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"parentsModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i>
                            ";
                // line 348
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "previous-documents"], "method", false, false, false, 348), "html", null, true);
                echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
                // line 357
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 358
                    echo "                                    <tr>
                                        <td>
                                            <a href=\"";
                    // line 360
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "method", false, false, false, 360), "html", null, true);
                    echo "\">
                                                ";
                    // line 361
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "modelClassName", [], "method", false, false, false, 361)], "method", false, false, false, 361), "html", null, true);
                    echo "
                                                ";
                    // line 362
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "primaryDescription", [], "method", false, false, false, 362), "html", null, true);
                    echo "
                                            </a>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 365
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 365), "coins", [], "method", false, false, false, 365), "format", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "total", [], "any", false, false, false, 365)], "method", false, false, false, 365), "html", null, true);
                    echo "</td>
                                        <td class=\"text-right\">";
                    // line 366
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "fecha", [], "any", false, false, false, 366), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 369
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 376
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["relatedDoc"]) {
                    // line 377
                    echo "            <div class=\"col-sm\">
                <div class=\"alert alert-warning text-center\">
                    <i class=\"fas fa-backward fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 379
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "modelClassName", [], "method", false, false, false, 379)], "method", false, false, false, 379), "html", null, true);
                    echo "
                    <a href=\"";
                    // line 380
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "url", [], "method", false, false, false, 380), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "primaryDescription", [], "method", false, false, false, 380), "html", null, true);
                    echo "</a>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedDoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 384
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 387
    public function macro_childrenDocuments($__relatedDocuments__ = null, $__fsc__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "relatedDocuments" => $__relatedDocuments__,
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 388
            echo "    ";
            if ((twig_length_filter($this->env, ($context["relatedDocuments"] ?? null)) > 2)) {
                // line 389
                echo "        <div class=\"col-sm\">
            <div class=\"alert alert-success text-center\">
                <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i>
                <a href=\"#\" data-toggle=\"modal\" data-target=\"#childrenModal\">";
                // line 392
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "documents-generated"], "method", false, false, false, 392), "html", null, true);
                echo "</a>
            </div>
        </div>
        <div class=\"modal fade\" id=\"childrenModal\" tabindex=\"-1\" role=\"dialog\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i>
                            ";
                // line 401
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "documents-generated"], "method", false, false, false, 401), "html", null, true);
                echo "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-hover mb-0\">
                            <tbody>
                                ";
                // line 410
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["doc"]) {
                    // line 411
                    echo "                                    <tr>
                                        <td>
                                            <a href=\"";
                    // line 413
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "url", [], "method", false, false, false, 413), "html", null, true);
                    echo "\">
                                                ";
                    // line 414
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "modelClassName", [], "method", false, false, false, 414)], "method", false, false, false, 414), "html", null, true);
                    echo "
                                                ";
                    // line 415
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "primaryDescription", [], "method", false, false, false, 415), "html", null, true);
                    echo "
                                            </a>
                                        </td>
                                        <td class=\"text-right\">";
                    // line 418
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "toolBox", [], "method", false, false, false, 418), "coins", [], "method", false, false, false, 418), "format", [0 => twig_get_attribute($this->env, $this->source, $context["doc"], "total", [], "any", false, false, false, 418)], "method", false, false, false, 418), "html", null, true);
                    echo "</td>
                                        <td class=\"text-right\">";
                    // line 419
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doc"], "fecha", [], "any", false, false, false, 419), "html", null, true);
                    echo "</td>
                                    </tr>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 422
                echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    ";
            } else {
                // line 429
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["relatedDocuments"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["relatedDoc"]) {
                    // line 430
                    echo "            <div class=\"col-sm\">
                <div class=\"alert alert-success text-center\">
                    <i class=\"fas fa-forward fa-fw\" aria-hidden=\"true\"></i> ";
                    // line 432
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "modelClassName", [], "method", false, false, false, 432)], "method", false, false, false, 432), "html", null, true);
                    echo "
                    <a href=\"";
                    // line 433
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "url", [], "method", false, false, false, 433), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["relatedDoc"], "primaryDescription", [], "method", false, false, false, 433), "html", null, true);
                    echo "</a>
                </div>
            </div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['relatedDoc'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 437
                echo "    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Master/BusinessDocumentView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1194 => 437,  1182 => 433,  1178 => 432,  1174 => 430,  1169 => 429,  1160 => 422,  1151 => 419,  1147 => 418,  1141 => 415,  1137 => 414,  1133 => 413,  1129 => 411,  1125 => 410,  1113 => 401,  1101 => 392,  1096 => 389,  1093 => 388,  1078 => 387,  1068 => 384,  1056 => 380,  1052 => 379,  1048 => 377,  1043 => 376,  1034 => 369,  1025 => 366,  1021 => 365,  1015 => 362,  1011 => 361,  1007 => 360,  1003 => 358,  999 => 357,  987 => 348,  975 => 339,  970 => 336,  967 => 335,  952 => 334,  939 => 328,  933 => 325,  927 => 324,  924 => 323,  921 => 322,  915 => 321,  906 => 318,  903 => 317,  900 => 316,  898 => 315,  893 => 314,  885 => 311,  882 => 310,  879 => 309,  874 => 308,  872 => 307,  864 => 304,  859 => 301,  850 => 297,  846 => 295,  843 => 294,  840 => 293,  837 => 292,  822 => 291,  807 => 286,  803 => 285,  796 => 284,  794 => 283,  786 => 282,  783 => 281,  773 => 277,  765 => 273,  763 => 272,  758 => 269,  741 => 268,  726 => 263,  722 => 262,  715 => 261,  713 => 260,  705 => 259,  702 => 258,  692 => 254,  684 => 250,  682 => 249,  677 => 246,  660 => 245,  650 => 242,  646 => 240,  644 => 239,  641 => 238,  639 => 237,  628 => 236,  624 => 235,  621 => 234,  617 => 232,  615 => 231,  605 => 230,  602 => 229,  595 => 225,  590 => 222,  588 => 221,  584 => 220,  581 => 219,  562 => 218,  550 => 213,  541 => 210,  532 => 209,  528 => 208,  522 => 207,  518 => 206,  515 => 205,  512 => 204,  499 => 202,  494 => 201,  491 => 200,  473 => 199,  466 => 179,  462 => 178,  457 => 386,  454 => 333,  451 => 290,  448 => 267,  445 => 244,  442 => 217,  435 => 194,  429 => 191,  426 => 190,  423 => 189,  417 => 186,  411 => 184,  409 => 183,  405 => 181,  403 => 178,  399 => 176,  393 => 173,  387 => 171,  385 => 170,  382 => 169,  375 => 165,  371 => 163,  369 => 162,  363 => 159,  357 => 156,  355 => 155,  350 => 153,  348 => 152,  345 => 151,  340 => 149,  338 => 148,  335 => 147,  330 => 145,  328 => 144,  326 => 143,  322 => 142,  321 => 141,  317 => 140,  315 => 139,  310 => 137,  309 => 136,  305 => 135,  303 => 134,  298 => 132,  297 => 131,  293 => 130,  291 => 129,  289 => 128,  285 => 127,  283 => 126,  278 => 124,  276 => 123,  273 => 122,  268 => 120,  266 => 119,  264 => 118,  260 => 116,  253 => 113,  246 => 109,  242 => 107,  239 => 106,  232 => 102,  228 => 100,  225 => 99,  218 => 95,  214 => 93,  212 => 92,  208 => 91,  205 => 90,  203 => 89,  198 => 87,  193 => 84,  187 => 80,  185 => 79,  180 => 77,  174 => 74,  169 => 73,  161 => 71,  159 => 70,  155 => 69,  151 => 68,  147 => 67,  142 => 66,  136 => 64,  134 => 63,  129 => 62,  127 => 61,  122 => 59,  118 => 58,  114 => 57,  108 => 56,  104 => 55,  100 => 54,  95 => 52,  76 => 36,  70 => 33,  63 => 29,  59 => 28,  53 => 25,  49 => 24,  45 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/BusinessDocumentView.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\BusinessDocumentView.html.twig");
    }
}
