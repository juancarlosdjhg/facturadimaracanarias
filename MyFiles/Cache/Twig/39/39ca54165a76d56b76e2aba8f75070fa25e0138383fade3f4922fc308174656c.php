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

/* Master/EditView.html.twig */
class __TwigTemplate_d8f6b900f49bddb9bcc5dfbdba249ced50d0e88f9aafd4543cbbce71c42ce2bf extends \Twig\Template
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
        $context["action"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 21), "exists", [], "method", false, false, false, 21)) ? ("edit") : ("insert"));
        // line 22
        echo "
<script type=\"text/javascript\">
    function editViewDelete(viewName) {
        bootbox.confirm({
            title: \"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 26), "html", null, true);
        echo "\",
            message: \"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 27), "html", null, true);
        echo "\",
            closeButton: false,
            buttons: {
                cancel: {
                    label: '<i class=\"fas fa-times\"></i> ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 31), "html", null, true);
        echo "'
                },
                confirm: {
                    label: '<i class=\"fas fa-check\"></i> ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm"], "method", false, false, false, 34), "html", null, true);
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

";
        // line 51
        echo "<div class=\"row\">
    ";
        // line 52
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "header"], "method", false, false, false, 52);
        // line 53
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 53), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 53);
        echo "
</div>

<form id=\"form";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 56), "html", null, true);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 58), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 59), "primaryColumnValue", [], "method", false, false, false, 59), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 60), "newToken", [], "method", false, false, false, 60), "html", null, true);
        echo "\"/>
    <div class=\"";
        // line 61
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 61), "card", [], "any", false, false, false, 61)) ? ("card shadow") : (""));
        echo "\">
        <div class=\"";
        // line 62
        echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 62), "card", [], "any", false, false, false, 62)) ? ("card-body") : ("container-fluid"));
        echo "\">
            <div class=\"row\">
                <div class=\"col-12 text-right\">
                    ";
        // line 66
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "statistics"], "method", false, false, false, 66);
        // line 67
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => ($context["fsc"] ?? null)], "method", false, false, false, 67);
        echo "
                </div>
            </div>
            <div class=\"form-row\">
                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 72
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "edit", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 72)], "method", false, false, false, 72);
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "            </div>
            <div class=\"row\">
                ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 76) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 76), "btnDelete", [], "any", false, false, false, 76))) {
            // line 77
            echo "                    <div class=\"col\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\" onclick=\"editViewDelete('";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 78), "html", null, true);
            echo "');\">
                            <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 80), "html", null, true);
            echo "</span>
                        </button>
                    </div>
                ";
        }
        // line 84
        echo "                ";
        $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 84) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 84), "btnDelete", [], "any", false, false, false, 84))) ? ("text-center") : (""));
        // line 85
        echo "                <div class=\"col ";
        echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
        echo "\">
                    ";
        // line 87
        echo "                    ";
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "actions"], "method", false, false, false, 87);
        // line 88
        echo "                    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => false, 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 88)], "method", false, false, false, 88);
        echo "
                </div>
                <div class=\"col text-right\">
                    ";
        // line 91
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 91), "btnUndo", [], "any", false, false, false, 91)) {
            // line 92
            echo "                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fas fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "undo"], "method", false, false, false, 94), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 97
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 97), "btnSave", [], "any", false, false, false, 97)) {
            // line 98
            echo "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fas fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 100), "html", null, true);
            echo "</span>
                        </button>
                    ";
        }
        // line 103
        echo "                </div>
            </div>
        </div>
    </div>
</form>

<br/>

";
        // line 112
        echo "<div class=\"row\">
    ";
        // line 113
        $context["row"] = twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", [0 => "footer"], "method", false, false, false, 113);
        // line 114
        echo "    ";
        echo twig_get_attribute($this->env, $this->source, ($context["row"] ?? null), "render", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 114), 1 => "", 2 => ($context["fsc"] ?? null)], "method", false, false, false, 114);
        echo "
</div>

";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 119
            echo "    ";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "modal", [0 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 119), 1 => twig_get_attribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 119)], "method", false, false, false, 119);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "Master/EditView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 119,  235 => 118,  228 => 114,  226 => 113,  223 => 112,  213 => 103,  207 => 100,  203 => 98,  200 => 97,  194 => 94,  190 => 92,  188 => 91,  181 => 88,  178 => 87,  173 => 85,  170 => 84,  163 => 80,  158 => 78,  155 => 77,  153 => 76,  149 => 74,  140 => 72,  136 => 71,  128 => 67,  125 => 66,  119 => 62,  115 => 61,  111 => 60,  107 => 59,  103 => 58,  99 => 57,  95 => 56,  88 => 53,  86 => 52,  83 => 51,  64 => 34,  58 => 31,  51 => 27,  47 => 26,  41 => 22,  39 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/EditView.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\EditView.html.twig");
    }
}
