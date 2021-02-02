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

/* Master/EditListViewInLine.html.twig */
class __TwigTemplate_ef816c41d801faaf48050dab8691549dd7dbfb247c1c15e5925f879053c6ad1f extends \Twig\Template
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
        $context["currentView"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        echo "
<script type=\"text/javascript\">
    var editListViewDeleteCancel = \"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 23), "html", null, true);
        echo "\";
    var editListViewDeleteConfirm = \"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 24), "html", null, true);
        echo "\";
    var editListViewDeleteMessage = \"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 25), "html", null, true);
        echo "\";
    var editListViewDeleteTitle = \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 26), "html", null, true);
        echo "\";
</script>

<div class=\"";
        // line 29
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 29), "card", [], "any", false, false, false, 29)) ? ("") : ("container-fluid"));
        echo "\">
    ";
        // line 31
        echo "    <div class=\"row\">
        ";
        // line 32
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 32);
        // line 33
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 33), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 33);
        echo "
    </div>

    ";
        // line 37
        echo "    <div>
        ";
        // line 38
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 38);
        // line 39
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 39);
        echo "
    </div>

    ";
        // line 43
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 43), "btnNew", [], "any", false, false, false, 43)) {
            // line 44
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44)) . "New");
            // line 45
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"insert\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 47), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 48), "newToken", [], "method", false, false, false, 48), "html", null, true);
            echo "\"/>
            <div class=\"card border-success shadow mb-2\">
                <div class=\"card-body p-2\">
                    <button class=\"btn btn-sm btn-outline-success\" type=\"button\" data-toggle=\"collapse\"
                            data-target=\"#";
            // line 52
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\" aria-expanded=\"false\" aria-controls=\"collapseExample\">
                        <i class=\"fas fa-plus-square fa-fw\" aria-hidden=\"true\"></i>
                        ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 54), "html", null, true);
            echo "
                    </button>
                    &nbsp;
                    ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "title", [], "any", false, false, false, 57), "html", null, true);
            echo "
                </div>
                <div class=\"collapse\" id=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "Collapse\">
                    <div class=\"card-body border-top\">
                        <div class=\"form-row align-items-end\">
                            <div class=\"col\">
                                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 63));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 64
                echo "                                    ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 64)], "method", false, false, false, 64);
                echo "
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "                            </div>
                            <div class=\"col-sm-2 text-right\">
                                <button class=\"btn btn-sm btn-success\" type=\"submit\">
                                    <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 70), "html", null, true);
            echo "</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        // line 79
        echo "
    ";
        // line 81
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["counter"] => $context["model"]) {
            // line 82
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 82)) . $context["counter"]);
            // line 83
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"edit\"/>
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 85), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"code\" value=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["model"], "primaryColumnValue", [], "method", false, false, false, 86), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"multireqtoken\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 87), "newToken", [], "method", false, false, false, 87), "html", null, true);
            echo "\"/>
            <div class=\"card shadow mb-2\">
                <div class=\"form-row align-items-end\">
                    <div class=\"col pt-2\">
                        ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 91));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 92
                echo "                            ";
                echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => $context["model"]], "method", false, false, false, 92);
                echo "
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    </div>
                    <div class=\"col-sm-2 text-right pb-2 pr-3\">
                        ";
            // line 96
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 96), "btnDelete", [], "any", false, false, false, 96)) {
                // line 97
                echo "                            <button type=\"button\" class=\"btn btn-sm btn-danger\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 97), "html", null, true);
                echo "\"
                                    onclick=\"editListViewDelete('";
                // line 98
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 98) . $context["counter"]), "html", null, true);
                echo "');\">
                                <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 102
            echo "                        ";
            // line 103
            echo "                        ";
            $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 103);
            // line 104
            echo "                        ";
            echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => (twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 104) . $context["counter"])], "method", false, false, false, 104);
            echo "
                        ";
            // line 105
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 105), "btnUndo", [], "any", false, false, false, 105)) {
                // line 106
                echo "                            <button class=\"btn btn-sm btn-secondary\" type=\"reset\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 106), "html", null, true);
                echo "\">
                                <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 110
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 110), "btnSave", [], "any", false, false, false, 110)) {
                // line 111
                echo "                            <button class=\"btn btn-sm btn-primary\" type=\"submit\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 111), "html", null, true);
                echo "\">
                                <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            </button>
                        ";
            }
            // line 115
            echo "                    </div>
                </div>
            </div>
        </form>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['counter'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "
    ";
        // line 122
        echo "    ";
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 122)) > 0)) {
            // line 123
            echo "        ";
            $context["formName"] = (("form" . twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 123)) . "Offset");
            // line 124
            echo "        <form id=\"";
            echo twig_escape_filter($this->env, ($context["formName"] ?? null), "html", null, true);
            echo "\" method=\"post\">
            <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 125), "html", null, true);
            echo "\"/>
            <input type=\"hidden\" name=\"offset\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "offset", [], "any", false, false, false, 126), "html", null, true);
            echo "\"/>
            <div class=\"text-center pt-3\">
                <div class=\"btn-group bg-white\">
                    ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getPagination", [], "method", false, false, false, 129));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 130
                echo "                        ";
                $context["btnClass"] = ((twig_get_attribute($this->env, $this->source, $context["page"], "active", [], "any", false, false, false, 130)) ? ("btn btn-outline-dark active") : ("btn btn-outline-dark"));
                // line 131
                echo "                        <button type=\"button\" class=\"";
                echo twig_escape_filter($this->env, ($context["btnClass"] ?? null), "html", null, true);
                echo "\" onclick=\"editListViewSetOffset('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 131), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "offset", [], "any", false, false, false, 131), "html", null, true);
                echo "');\">
                            ";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "num", [], "any", false, false, false, 132), "html", null, true);
                echo "
                        </button>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                </div>
            </div>
        </form>
    ";
        }
        // line 139
        echo "
    ";
        // line 141
        echo "    <div class=\"row\">
        ";
        // line 142
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 142);
        // line 143
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 143), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 143);
        echo "
    </div>
</div>

";
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 148));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 149
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 149), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 149)], "method", false, false, false, 149);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditListViewInLine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 149,  341 => 148,  333 => 143,  331 => 142,  328 => 141,  325 => 139,  319 => 135,  310 => 132,  301 => 131,  298 => 130,  294 => 129,  288 => 126,  284 => 125,  279 => 124,  276 => 123,  273 => 122,  270 => 120,  260 => 115,  252 => 111,  249 => 110,  241 => 106,  239 => 105,  234 => 104,  231 => 103,  229 => 102,  222 => 98,  217 => 97,  215 => 96,  211 => 94,  202 => 92,  198 => 91,  191 => 87,  187 => 86,  183 => 85,  177 => 83,  174 => 82,  169 => 81,  166 => 79,  154 => 70,  148 => 66,  139 => 64,  135 => 63,  128 => 59,  123 => 57,  117 => 54,  112 => 52,  105 => 48,  101 => 47,  95 => 45,  92 => 44,  89 => 43,  82 => 39,  80 => 38,  77 => 37,  70 => 33,  68 => 32,  65 => 31,  61 => 29,  55 => 26,  51 => 25,  47 => 24,  43 => 23,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditListViewInLine.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\EditListViewInLine.html.twig");
    }
}
