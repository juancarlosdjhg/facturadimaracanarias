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

/* Login/Login.html.twig */
class __TwigTemplate_1601c8863fc7e875eec7c4ca090d72eb20911f385790a51f764eaa15f623fd84 extends \Twig\Template
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
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MicroTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MicroTemplate.html.twig", "Login/Login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <form action=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
                    <div class=\"card mt-4\">
                        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\">
                            <img class=\"card-img-top\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), ["Dinamic/Assets/Images/horizontal-logo.png"]), "html", null, true);
        echo "\" alt=\"FacturaScripts\"/>
                        </a>
                        <div class=\"card-body\">
                            <p class=\"card-text text-center\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login-text"], "method", false, false, false, 14), "html", null, true);
        echo "</p>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"text\" name=\"fsNick\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 22), "html", null, true);
        echo "\"
                                           required=\"\" autocomplete=\"off\" autofocus=\"\"/>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"input-group\">
                                    <span class=\"input-group-prepend\">
                                        <span class=\"input-group-text\">
                                            <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                        </span>
                                    </span>
                                    <input type=\"password\" name=\"fsPassword\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "password"], "method", false, false, false, 33), "html", null, true);
        echo "\"
                                           required=\"\" autocomplete=\"off\"/>
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-block btn-primary\">
                                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "login"], "method", false, false, false, 38), "html", null, true);
        echo "
                            </button>
                        </div>
                        <div class=\"card-footer text-center\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#newPasswordModal\">
                                ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "i-forgot-password"], "method", false, false, false, 43), "html", null, true);
        echo "
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class=\"row justify-content-md-center\">
            <div class=\"col-md-6\">
                <div class=\"card mt-4 text-white bg-secondary\">
                    <div class=\"card-header\">FacturaScripts</div>
                    <div class=\"card-body\">
                        <p class=\"card-text\">
                            FacturaScripts es un software libre de contabilidad, facturación y CRM.
                            No dudes en consultar la web oficial o las cuentas de facebook, twitter o youtube.
                        </p>
                        <a href=\"https://facturascripts.com\" class=\"badge badge-light\">facturascripts.com</a>
                        <a href=\"https://www.facebook.com/facturascripts/\" class=\"badge badge-light\">facebook</a>
                        <a href=\"https://twitter.com/facturascripts\" class=\"badge badge-light\">twitter</a>
                        <a href=\"https://www.youtube.com/channel/UCtsptMQYpW2wJZkvak6NYng\" class=\"badge badge-light\">youtube</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action=\"";
        // line 68
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), [""]), "html", null, true);
        echo "\" method=\"post\" class=\"form\">
        <div class=\"modal fade\" id=\"newPasswordModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 73), "html", null, true);
        echo "</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-user fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"text\" name=\"fsNewUserPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "user"], "method", false, false, false, 86), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-key fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "new-password"], "method", false, false, false, 97), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-eye fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsNewPasswd2\" class=\"form-control\" maxlength=\"50\" placeholder=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "repeat-new-password"], "method", false, false, false, 108), "html", null, true);
        echo "\"
                                       required=\"\" autocomplete=\"off\"/>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <b>";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "database"], "method", false, false, false, 113), "html", null, true);
        echo "</b>
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\">
                                    <span class=\"input-group-text\">
                                        <i class=\"fas fa-database fa-fw\" aria-hidden=\"true\"></i>
                                    </span>
                                </span>
                                <input type=\"password\" name=\"fsDbPasswd\" class=\"form-control\" placeholder=\"";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "db-password"], "method", false, false, false, 120), "html", null, true);
        echo "\"
                                       autocomplete=\"off\"/>
                            </div>
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 126), "html", null, true);
        echo "</button>
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 127
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "save"], "method", false, false, false, 127), "html", null, true);
        echo "</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 135
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 136
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        body {
            background-color: #333A40;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "Login/Login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 136,  237 => 135,  226 => 127,  222 => 126,  213 => 120,  203 => 113,  195 => 108,  181 => 97,  167 => 86,  151 => 73,  143 => 68,  115 => 43,  107 => 38,  99 => 33,  85 => 22,  74 => 14,  68 => 11,  64 => 10,  59 => 8,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Login/Login.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\Login\\Login.html.twig");
    }
}
