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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_9636d8a9910f25ebe3b0ec82fe69b0e5218688d2d7c342b96345c10d30259c31 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'navbarContent' => [$this, 'block_navbarContent'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" xml:lang=\"";
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("FS_LANG"), 0, 2), "html", null, true);
        echo "\" >
    <head>
        ";
        // line 23
        $this->displayBlock('meta', $context, $blocks);
        // line 31
        echo "        ";
        $this->displayBlock('icons', $context, $blocks);
        // line 35
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 41
        echo "        ";
        // line 42
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "css"], "method", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 43
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $context["css"], "html", null, true);
            echo "\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "        ";
        // line 55
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", [0 => "js"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 56
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $context["js"], "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 58);
        echo "
    </head>
    ";
        // line 60
        $this->displayBlock('fullBody', $context, $blocks);
        // line 131
        echo "</html>";
    }

    // line 23
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
            <title>";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 25);
        echo "</title>
            <meta name=\"description\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "meta-description"], "method", false, false, false, 26), "html", null, true);
        echo "\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
            <meta name=\"generator\" content=\"FacturaScripts\" />
            <meta name=\"robots\" content=\"noindex\" />
        ";
    }

    // line 31
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "            <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/favicon.ico"]), "html", null, true);
        echo "\" />
            <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/apple-icon-180x180.png"]), "html", null, true);
        echo "\" />
        ";
    }

    // line 35
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/css/bootstrap.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/@fortawesome/fontawesome-free/css/all.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.css"]), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/CSS/custom.css"]), "html", null, true);
        echo "\" />
        ";
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery/dist/jquery.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/bootbox/dist/bootbox.locales.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/jquery-ui-dist/jquery-ui.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["node_modules/pace-js/pace.min.js"]), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/JS/Custom.js"]), "html", null, true);
        echo "\"></script>
        ";
    }

    // line 60
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 61
        echo "        <body>
            ";
        // line 62
        $this->displayBlock('navbar', $context, $blocks);
        // line 106
        echo "            <div class=\"bg-header pt-3\">
                ";
        // line 107
        $this->displayBlock('messages', $context, $blocks);
        // line 120
        echo "                ";
        $this->displayBlock('bodyHeaderOptions', $context, $blocks);
        // line 122
        echo "            </div>
            ";
        // line 123
        $this->displayBlock('body', $context, $blocks);
        // line 125
        echo "            <br/>
            <br/>
            <br/>
            ";
        // line 128
        echo twig_get_attribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 128);
        echo "
        </body>
    ";
    }

    // line 62
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 63
        echo "                <nav class=\"navbar navbar-expand navbar-dark bg-dark sticky-top d-print-none\">
                    ";
        // line 64
        $this->displayBlock('navbarContent', $context, $blocks);
        // line 104
        echo "                </nav>
            ";
    }

    // line 64
    public function block_navbarContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        echo "                        <a class=\"navbar-brand d-none d-sm-inline\" href=\"";
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "homepage"], "method", false, false, false, 65), "html", null, true);
        echo "\">
                            <img src=\"";
        // line 66
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/logo-white.png"]), "html", null, true);
        echo "\" width=\"30\" height=\"30\" class=\"d-inline-block align-top\" alt=\"FacturaScripts\"/>
                            <span class=\"d-none d-xl-inline\">";
        // line 67
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "empresa", [], "any", false, false, false, 67), "nombrecorto", [], "any", false, false, false, 67);
        echo "</span>
                        </a>
                        <div class=\"navbar-collapse collapse\">
                            <ul class=\"navbar-nav pt-1\">
                                ";
        // line 71
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 71)->unwrap();
        // line 72
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 72));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 73
            echo "                                    ";
            echo twig_call_macro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 73, $context, $this->getSourceContext());
            echo "
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </ul>
                            <ul class=\"navbar-nav flex-row ml-auto\">
                                <li class=\"nav-item";
        // line 77
        echo (((($context["template"] ?? null) == "MegaSearch.html.twig")) ? (" active") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "search"], "method", false, false, false, 77), "html", null, true);
        echo "\">
                                    <a class=\"nav-link\" href=\"MegaSearch\">
                                        <i class=\"fas fa-search\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item\" title=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help"], "method", false, false, false, 82), "html", null, true);
        echo "\">
                                    <a class=\"nav-link\" href=\"https://facturascripts.com/ayuda\" target=\"_blank\">
                                        <i class=\"fas fa-question-circle\" aria-hidden=\"true\"></i>
                                    </a>
                                </li>
                                <li class=\"nav-item dropdown\" title=\"";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 87), "html", null, true);
        echo "\">
                                    <a class=\"nav-link dropdown-toggle mr-md-2\" href=\"#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-right\" aria-labelledby=\"user-list\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 92), "url", [], "method", false, false, false, 92), "html", null, true);
        echo "\">
                                            <i class=\"fas fa-user-circle fa-fw\" aria-hidden=\"true\"></i> ";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 93), "nick", [], "any", false, false, false, 93), "html", null, true);
        echo "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\" href=\"?logout=TRUE\">
                                            <i class=\"fas fa-door-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "logout"], "method", false, false, false, 97), "html", null, true);
        echo "
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    ";
    }

    // line 107
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 108
        echo "                    ";
        $macros["__internal_67dde12f05bf51f7b748f5de3a88f8d5a1efb251186154b62110dd0ec3df58e3"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 108)->unwrap();
        // line 109
        echo "                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                ";
        // line 112
        echo twig_call_macro($macros["__internal_67dde12f05bf51f7b748f5de3a88f8d5a1efb251186154b62110dd0ec3df58e3"], "macro_message", [($context["log"] ?? null), [0 => "error", 1 => "critical"], "danger"], 112, $context, $this->getSourceContext());
        echo "
                                ";
        // line 113
        echo twig_call_macro($macros["__internal_67dde12f05bf51f7b748f5de3a88f8d5a1efb251186154b62110dd0ec3df58e3"], "macro_message", [($context["log"] ?? null), [0 => "warning"], "warning"], 113, $context, $this->getSourceContext());
        echo "
                                ";
        // line 114
        echo twig_call_macro($macros["__internal_67dde12f05bf51f7b748f5de3a88f8d5a1efb251186154b62110dd0ec3df58e3"], "macro_message", [($context["log"] ?? null), [0 => "notice"], "success"], 114, $context, $this->getSourceContext());
        echo "
                                ";
        // line 115
        echo twig_call_macro($macros["__internal_67dde12f05bf51f7b748f5de3a88f8d5a1efb251186154b62110dd0ec3df58e3"], "macro_message", [($context["log"] ?? null), [0 => "info"], "info"], 115, $context, $this->getSourceContext());
        echo "
                            </div>
                        </div>
                    </div>
                ";
    }

    // line 120
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 121
        echo "                ";
    }

    // line 123
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 124
        echo "            ";
    }

    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  388 => 124,  384 => 123,  380 => 121,  376 => 120,  367 => 115,  363 => 114,  359 => 113,  355 => 112,  350 => 109,  347 => 108,  343 => 107,  332 => 97,  325 => 93,  321 => 92,  313 => 87,  305 => 82,  295 => 77,  291 => 75,  282 => 73,  277 => 72,  275 => 71,  268 => 67,  264 => 66,  257 => 65,  253 => 64,  248 => 104,  246 => 64,  243 => 63,  239 => 62,  232 => 128,  227 => 125,  225 => 123,  222 => 122,  219 => 120,  217 => 107,  214 => 106,  212 => 62,  209 => 61,  205 => 60,  199 => 52,  195 => 51,  191 => 50,  187 => 49,  183 => 48,  179 => 47,  174 => 46,  170 => 45,  164 => 39,  160 => 38,  156 => 37,  151 => 36,  147 => 35,  141 => 33,  136 => 32,  132 => 31,  123 => 26,  119 => 25,  116 => 24,  112 => 23,  108 => 131,  106 => 60,  100 => 58,  91 => 56,  86 => 55,  84 => 54,  81 => 45,  72 => 43,  67 => 42,  65 => 41,  62 => 35,  59 => 31,  57 => 23,  50 => 21,  47 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "Master/MenuTemplate.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Master\\MenuTemplate.html.twig");
    }
}
