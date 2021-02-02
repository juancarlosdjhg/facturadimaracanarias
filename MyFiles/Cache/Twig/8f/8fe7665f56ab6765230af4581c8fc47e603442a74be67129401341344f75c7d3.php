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

/* AdminPlugins.html.twig */
class __TwigTemplate_9fc5709c0861fb2f81bfcfa64e0fa234ff2cdfa1a0b91e342607886e5f74c37e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 22)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["title"] ?? null) : null)], "method", false, false, false, 22));
        // line 23
        $context["allPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getAllPlugins", [], "method", false, false, false, 23);
        // line 24
        $context["installedPlugins"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPlugins", [], "method", false, false, false, 24);
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "AdminPlugins.html.twig", 20);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        echo "    ";
        $this->displayParentBlock("bodyHeaderOptions", $context, $blocks);
        echo "
    <div class=\"container-fluid mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group bg-white\">
                    <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 32), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "refresh"], "method", false, false, false, 32), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 35
        if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 35)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 35), "homepage", [], "any", false, false, false, 35))) {
            // line 36
            echo "                        <a class=\"btn btn-sm btn-outline-secondary active\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 36), "html", null, true);
            echo "?defaultPage=FALSE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "marked-as-homepage"], "method", false, false, false, 36), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 40
            echo "                        <a class=\"btn btn-sm btn-outline-secondary\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 40), "html", null, true);
            echo "?defaultPage=TRUE\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "mark-as-homepage"], "method", false, false, false, 40), "html", null, true);
            echo "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 44
        echo "                </div>
                ";
        // line 45
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 46
            echo "                    <button class=\"btn btn-sm btn-success\" type=\"button\" data-toggle=\"modal\" data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add"], "method", false, false, false, 48), "html", null, true);
            echo "</span>
                    </button>
                ";
        }
        // line 51
        echo "                <div class=\"btn-group bg-white\">
                    <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 52), "html", null, true);
        echo "?action=rebuild\" class=\"btn btn-sm btn-outline-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "rebuild"], "method", false, false, false, 54), "html", null, true);
        echo "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 60
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo " <i class=\"";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 60)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["icon"] ?? null) : null), "html", null, true);
        echo "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed-plugins"], "method", false, false, false, 68), "html", null, true);
        echo "
                ";
        // line 69
        if ((twig_length_filter($this->env, ($context["installedPlugins"] ?? null)) > 0)) {
            // line 70
            echo "                    <span class=\"badge badge-secondary\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["installedPlugins"] ?? null)), "html", null, true);
            echo "</span>
                ";
        }
        // line 72
        echo "            </a>
        </li>
        ";
        // line 74
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 75
            echo "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "more-plugins"], "method", false, false, false, 78), "html", null, true);
            echo "</span>
                    ";
            // line 79
            if ((twig_length_filter($this->env, ($context["allPlugins"] ?? null)) > 0)) {
                // line 80
                echo "                        <span class=\"badge badge-secondary\">";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["allPlugins"] ?? null)), "html", null, true);
                echo "</span>
                    ";
            }
            // line 82
            echo "                </a>
            </li>
        ";
        }
        // line 85
        echo "    </ul>
";
    }

    // line 88
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 89
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 92
        echo twig_call_macro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["installedPlugins"] ?? null)], 92, $context, $this->getSourceContext());
        echo "
        </div>
        ";
        // line 94
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 95
            echo "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 96
            echo twig_call_macro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null), ($context["i18n"] ?? null), ($context["allPlugins"] ?? null)], 96, $context, $this->getSourceContext());
            echo "
            </div>
        ";
        }
        // line 99
        echo "    </div>

    ";
        // line 102
        echo "    ";
        if ( !twig_constant("FS_DISABLE_ADD_PLUGINS")) {
            // line 103
            echo "        <form action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 103), "html", null, true);
            echo "\" name=\"upload-plugins\" method=\"post\" class=\"form\" enctype=\"multipart/form-data\">
            <input type=\"hidden\" name=\"action\" value=\"upload\" />
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "add-new-plugin"], "method", false, false, false, 109), "html", null, true);
            echo "</h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "close"], "method", false, false, false, 110), "html", null, true);
            echo "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 114
            if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 114) < 99)) {
                // line 115
                echo "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 116)]], "method", false, false, false, 116), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 119
            echo "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "select-plugin-zip-file"], "method", false, false, false, 121), "html", null, true);
            echo "
                                <input type=\"file\" name=\"plugin[]\" multiple=\"\" accept=\"application/zip\" required=\"\"/>
                                ";
            // line 123
            if ((twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 123) >= 99)) {
                // line 124
                echo "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "help-server-accepts-filesize", 1 => ["%size%" => twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 125)]], "method", false, false, false, 125), "html", null, true);
                echo "
                                    </small>
                                ";
            }
            // line 128
            echo "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 130), "html", null, true);
            echo "</button>
                                <button type=\"submit\" class=\"btn btn-primary\">";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "continue"], "method", false, false, false, 131), "html", null, true);
            echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
    }

    // line 141
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "
    <style>
        .bg-header {
            background-color: #FAFBFC;
        }
    </style>
";
    }

    // line 150
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 151
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 152
        if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
            // line 153
            echo "        <script type=\"text/javascript\">
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 156
            echo twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "confirm-delete"], "method", false, false, false, 156);
            echo "\",
                    message: \"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "are-you-sure"], "method", false, false, false, 157), "html", null, true);
            echo "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 161
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "cancel"], "method", false, false, false, 161), "html", null, true);
            echo "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 164), "html", null, true);
            echo "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            window.location = \"";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 170), "html", null, true);
            echo "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName;
                        }
                    }
                });
            }
        </script>
    ";
        }
    }

    // line 179
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 180
            echo "    ";
            if ((($context["value"] ?? null) < 1)) {
                // line 181
                echo "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 186
($context["value"] ?? null) < 2)) {
                // line 187
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 192
($context["value"] ?? null) < 3)) {
                // line 193
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 198
($context["value"] ?? null) < 4)) {
                // line 199
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 204
($context["value"] ?? null) < 5)) {
                // line 205
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 211
                echo "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 219
    public function macro_showAllPlugins($__fsc__ = null, $__i18n__ = null, $__allPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "allPlugins" => $__allPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 220
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th width=\"140\">";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "health"], "method", false, false, false, 224), "html", null, true);
            echo "</th>
                    <th>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 225), "html", null, true);
            echo "</th>
                    <th>";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 226), "html", null, true);
            echo "</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 231
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["allPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 232
                echo "                    ";
                $context["extraClass"] = (((twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 232) > 2)) ? ("table-success") : ((((twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 232) == 0)) ? ("table-danger") : ("table-warning"))));
                // line 233
                echo "                    <tr class=\"clickableRow ";
                echo twig_escape_filter($this->env, ($context["extraClass"] ?? null), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 233), "html", null, true);
                echo "\" data-target=\"_blank\">
                        <td>";
                // line 234
                echo twig_call_macro($macros["_self"], "macro_healthStatus", [twig_get_attribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 234)], 234, $context, $this->getSourceContext());
                echo "</td>
                        <td>";
                // line 235
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 235), "html", null, true);
                echo "</td>
                        <td>";
                // line 236
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 236), "html", null, true));
                echo "</td>
                        <td class=\"text-center\">
                            ";
                // line 238
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "installed", [], "any", false, false, false, 238)) {
                    // line 239
                    echo "                                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i>
                                ";
                    // line 240
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "installed"], "method", false, false, false, 240), "html", null, true);
                    echo "
                            ";
                }
                // line 242
                echo "                        </td>
                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 245
                echo "                    <tr class=\"table-warning\">
                        <td colspan=\"4\"><b>";
                // line 246
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 246), "html", null, true);
                echo "</b></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 254
    public function macro_showInstalledPlugins($__fsc__ = null, $__i18n__ = null, $__installedPlugins__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "i18n" => $__i18n__,
            "installedPlugins" => $__installedPlugins__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 255
            echo "    <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\">
            <thead>
                <tr>
                    <th>";
            // line 259
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "name"], "method", false, false, false, 259), "html", null, true);
            echo "</th>
                    <th class=\"text-right\">";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "version"], "method", false, false, false, 260), "html", null, true);
            echo "</th>
                    <th>";
            // line 261
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "description"], "method", false, false, false, 261), "html", null, true);
            echo "</th>
                    <th></th>
                    <th class=\"text-center\">";
            // line 263
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "actions"], "method", false, false, false, 263), "html", null, true);
            echo "</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 267
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["installedPlugins"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 268
                echo "                    ";
                $context["trClass"] = " class=\"table-danger\"";
                // line 269
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 269)) {
                    // line 270
                    echo "                        ";
                    $context["trClass"] = " class=\"table-success\"";
                    // line 271
                    echo "                    ";
                } elseif (twig_get_attribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 271)) {
                    // line 272
                    echo "                        ";
                    $context["trClass"] = "";
                    // line 273
                    echo "                    ";
                }
                // line 274
                echo "                    <tr";
                echo ($context["trClass"] ?? null);
                echo ">
                        <td>";
                // line 275
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 275), "html", null, true);
                echo "</td>
                        ";
                // line 276
                if ((twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 276) == 0)) {
                    // line 277
                    echo "                            <td class=\"text-right text-danger\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 277), "html", null, true);
                    echo "</td>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 278
$context["plugin"], "version", [], "any", false, false, false, 278) < 1)) {
                    // line 279
                    echo "                            <td class=\"text-right text-warning\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 279), "html", null, true);
                    echo "</td>
                        ";
                } else {
                    // line 281
                    echo "                            <td class=\"text-right\">v";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 281), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 283
                echo "                        <td>";
                echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 283), "html", null, true));
                echo "</td>
                        ";
                // line 284
                if (twig_get_attribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 284)) {
                    // line 285
                    echo "                            <td></td>
                            <td>
                                <a class=\"btn btn-block btn-sm btn-secondary\" href=\"";
                    // line 287
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 287), "html", null, true);
                    echo "?action=disable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 287), "html", null, true);
                    echo "\">
                                    <i class=\"fas fa-times fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                    // line 289
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "disable"], "method", false, false, false, 289), "html", null, true);
                    echo "</span>
                                </a>
                            </td>
                        ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 292
$context["plugin"], "compatible", [], "any", false, false, false, 292)) {
                    // line 293
                    echo "                            <td>
                                ";
                    // line 294
                    if ( !twig_constant("FS_DISABLE_RM_PLUGINS")) {
                        // line 295
                        echo "                                    <a class=\"btn btn-block btn-sm btn-danger\" href=\"#\" onclick=\"deletePlugin('";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 295), "html", null, true);
                        echo "');\">
                                        <i class=\"fas fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">";
                        // line 297
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "delete"], "method", false, false, false, 297), "html", null, true);
                        echo "</span>
                                    </a>
                                ";
                    }
                    // line 300
                    echo "                            </td>
                            <td>
                                <a class=\"btn btn-block btn-sm btn-success\" href=\"";
                    // line 302
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 302), "html", null, true);
                    echo "?action=enable&amp;plugin=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 302), "html", null, true);
                    echo "\">
                                    <i class=\"fas fa-check fa-fw\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                    // line 304
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "enable"], "method", false, false, false, 304), "html", null, true);
                    echo "</span>
                                </a>
                            </td>
                        ";
                } else {
                    // line 308
                    echo "                            <td colspan=\"2\"></td>
                        ";
                }
                // line 310
                echo "                    </tr>
                ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 312
                echo "                    <tr class=\"table-warning\">
                        <td colspan=\"5\"><b>";
                // line 313
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [0 => "no-data"], "method", false, false, false, 313), "html", null, true);
                echo "</b></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 316
            echo "            </tbody>
        </table>
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "AdminPlugins.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 316,  716 => 313,  713 => 312,  707 => 310,  703 => 308,  696 => 304,  689 => 302,  685 => 300,  679 => 297,  673 => 295,  671 => 294,  668 => 293,  666 => 292,  660 => 289,  653 => 287,  649 => 285,  647 => 284,  642 => 283,  636 => 281,  630 => 279,  628 => 278,  623 => 277,  621 => 276,  617 => 275,  612 => 274,  609 => 273,  606 => 272,  603 => 271,  600 => 270,  597 => 269,  594 => 268,  589 => 267,  582 => 263,  577 => 261,  573 => 260,  569 => 259,  563 => 255,  548 => 254,  536 => 249,  527 => 246,  524 => 245,  517 => 242,  512 => 240,  509 => 239,  507 => 238,  502 => 236,  498 => 235,  494 => 234,  487 => 233,  484 => 232,  479 => 231,  471 => 226,  467 => 225,  463 => 224,  457 => 220,  442 => 219,  427 => 211,  419 => 205,  417 => 204,  410 => 199,  408 => 198,  401 => 193,  399 => 192,  392 => 187,  390 => 186,  383 => 181,  380 => 180,  367 => 179,  355 => 170,  346 => 164,  340 => 161,  333 => 157,  329 => 156,  324 => 153,  322 => 152,  317 => 151,  313 => 150,  301 => 142,  297 => 141,  284 => 131,  280 => 130,  276 => 128,  270 => 125,  267 => 124,  265 => 123,  260 => 121,  256 => 119,  250 => 116,  247 => 115,  245 => 114,  238 => 110,  234 => 109,  224 => 103,  221 => 102,  217 => 99,  211 => 96,  208 => 95,  206 => 94,  201 => 92,  194 => 89,  190 => 88,  185 => 85,  180 => 82,  174 => 80,  172 => 79,  168 => 78,  163 => 75,  161 => 74,  157 => 72,  151 => 70,  149 => 69,  145 => 68,  132 => 60,  123 => 54,  118 => 52,  115 => 51,  109 => 48,  105 => 46,  103 => 45,  100 => 44,  90 => 40,  80 => 36,  78 => 35,  70 => 32,  61 => 27,  57 => 26,  52 => 20,  50 => 24,  48 => 23,  46 => 22,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "AdminPlugins.html.twig", "C:\\xampp\\htdocs\\factura\\Dinamic\\View\\AdminPlugins.html.twig");
    }
}
