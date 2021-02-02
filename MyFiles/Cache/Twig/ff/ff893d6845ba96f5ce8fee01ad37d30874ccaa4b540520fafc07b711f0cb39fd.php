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

/* Macro/Menu.html.twig */
class __TwigTemplate_0b45f2c4b5112da54b406675d15c778823ca844e5b4cb52762d89c5e5291c021 extends \Twig\Template
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
    }

    // line 21
    public function macro_showMenu($__menuItem__ = null, $__parent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menuItem" => $__menuItem__,
            "parent" => $__parent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 22
            echo "    ";
            $macros["macros"] = $this;
            // line 23
            echo "    ";
            $context["active"] = ((twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "active", [], "any", false, false, false, 23)) ? (" active") : (""));
            // line 24
            echo "    ";
            $context["menuId"] = ((twig_test_empty(($context["parent"] ?? null))) ? (("menu-" . twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 24))) : ((($context["parent"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "name", [], "any", false, false, false, 24))));
            // line 25
            echo "
    ";
            // line 26
            if (twig_test_empty(($context["parent"] ?? null))) {
                // line 27
                echo "        ";
                // line 28
                echo "        <li class=\"nav-item dropdown";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\">
            <a class=\"nav-link dropdown-toggle\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                ";
                // line 30
                $context["title"] = twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 30);
                // line 31
                echo "                <span class=\"d-md-none\">";
                echo twig_escape_filter($this->env, twig_slice($this->env, ($context["title"] ?? null), 0, 2), "html", null, true);
                echo "</span>
                <span class=\"d-none d-md-inline-block\">";
                // line 32
                echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
                echo "</span>
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"";
                // line 34
                echo twig_escape_filter($this->env, ($context["menuId"] ?? null), "html", null, true);
                echo "\">
    ";
            } else {
                // line 36
                echo "        ";
                // line 37
                echo "        <li class=\"dropdown-submenu\">
            <a class=\"dropdown-item";
                // line 38
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\" href=\"#\">
                <i class=\"fas fa-folder-open fa-fw\" aria-hidden=\"true\"></i>
                &nbsp;";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 40), "html", null, true);
                echo "
            </a>
            <ul class=\"dropdown-menu\" aria-labelledby=\"";
                // line 42
                echo twig_escape_filter($this->env, ($context["menuId"] ?? null), "html", null, true);
                echo "\">
    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuItem"] ?? null), "menu", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 46
                echo "        ";
                $context["extraClass"] = ((twig_get_attribute($this->env, $this->source, $context["item"], "active", [], "any", false, false, false, 46)) ? (" active") : (""));
                // line 47
                echo "
        ";
                // line 48
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "menu", [], "any", false, false, false, 48))) {
                    // line 49
                    echo "            <li>
                <a class=\"dropdown-item";
                    // line 50
                    echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 50), "html", null, true);
                    echo "\">
                    <i class=\"";
                    // line 51
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 51), "html", null, true);
                    echo " fa-fw\" aria-hidden=\"true\"></i> &nbsp;";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 51), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                } else {
                    // line 55
                    echo "            ";
                    echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["item"], ($context["menuId"] ?? null)], 55, $context, $this->getSourceContext());
                    echo "
        ";
                }
                // line 57
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    </ul>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Macro/Menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 58,  154 => 57,  148 => 55,  139 => 51,  133 => 50,  130 => 49,  128 => 48,  125 => 47,  122 => 46,  118 => 45,  115 => 44,  110 => 42,  105 => 40,  100 => 38,  97 => 37,  95 => 36,  90 => 34,  85 => 32,  80 => 31,  78 => 30,  72 => 28,  70 => 27,  68 => 26,  65 => 25,  62 => 24,  59 => 23,  56 => 22,  42 => 21,  37 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Macro/Menu.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Macro\\Menu.html.twig");
    }
}
