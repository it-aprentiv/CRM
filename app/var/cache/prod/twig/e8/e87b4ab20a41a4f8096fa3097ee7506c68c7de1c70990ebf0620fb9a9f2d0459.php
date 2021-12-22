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

/* base.html.twig */
class __TwigTemplate_1afce4fa4f036608f0c30a58702e5fb456dd9c99ad1090d068996a88bcabbbc5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'commentaires' => [$this, 'block_commentaires'],
            'modal' => [$this, 'block_modal'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <!-- Bootstrap CSS -->
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "
        <title>";
        // line 19
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>
        <div class=\"container-fluid\">

            ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 85
        echo "
            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "flashes", [], "any", false, false, false, 86));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 87
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 88
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " my-2\">
                        ";
                // line 89
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "
            ";
        // line 94
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "        </div>
        ";
        // line 99
        $this->displayBlock('modal', $context, $blocks);
        // line 101
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 164
        echo "    </body>
</html>";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
                  integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\"
                  crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
                  integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\"
                  crossorigin=\"anonymous\">
            <!--link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\"-->
            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/common.css"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["asset_version"] ?? null), "html", null, true);
        echo "\"/>
        ";
    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "CRM v2.0";
    }

    // line 24
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" style=\"\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/aprentiv-logo-2.png"), "html", null, true);
        echo "\" class=\"logo\"/>
                    </a>
                    <div class=\"calque01\"></div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
    
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["user_menus"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["menu_items"]) {
            // line 38
            echo "                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        ";
            // line 41
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $context["key"]), "html", null, true);
            echo "
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["menu_items"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                echo "                                            <a class=\"dropdown-item\"
                                               href=\"";
                // line 46
                echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "urlmenu", [], "any", false, false, false, 46))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["item"], "urlmenu", [], "any", false, false, false, 46))) : ("#"));
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nomMenu", [], "any", false, false, false, 46), "html", null, true);
                echo "</a>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "                                    </div>
                                </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['menu_items'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                        </ul>

                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.portail");
        echo "\" class=\"portail\">PORTAIL</a>
                        ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 54) == "MUNIER Pascal")) {
            // line 55
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_Controller");
            echo "\" class=\"btn btn-info mr-1\">ACTIVITÉ</a>
                        ";
        }
        // line 57
        echo "                        <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_lead_Controller/ajoutLead");
        echo "\" class=\"btn btn-info\">CREER LEAD</a>
                        <div class=\"my-2 my-lg-0 text-light\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle text-light btn\" id=\"navbarUserDropdown\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"fa-stack fa-1x\">
                                            <i class=\"fas fa-circle fa-stack-2x text-info\"></i>
                                            <i class=\"fas fa-user fa-stack-1x text-white\"></i>
                                        </span>
                                            Hello ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 67), "username", [], "any", false, false, false, 67), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 67), "droit", [], "any", false, false, false, 67), "html", null, true);
        echo "]
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarUserDropdown\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.view");
        echo "\" title=\"Infos profil\">
                                            <i class=\"fas fa-user\"></i> 
                                            Mon Profil
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" title=\"Fermer la session\">
                                            <i class=\"fas fa-sign-out-alt\"></i> 
                                            Deconnexion
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            ";
    }

    // line 94
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 95
        echo "
                ";
        // line 96
        $this->displayBlock('commentaires', $context, $blocks);
        // line 97
        echo "            ";
    }

    // line 96
    public function block_commentaires($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 99
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 100
        echo "        ";
    }

    // line 101
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\"
                    integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\"
            crossorigin=\"anonymous\"></script>
            <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\"
                    integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\"
            crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js\"></script>
            <script src=\"//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/i18n/fr.js\"></script>
            
            <script src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/common.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["asset_version"] ?? null), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/number-utils.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["asset_version"] ?? null), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/facture-utils.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, ($context["asset_version"] ?? null), "html", null, true);
        echo "\"></script>
            <script>
                ";
        // line 120
        echo "                    common.disableFormFields('#commentaires_collection :input, .list-filter :input, .no-disabled :input, #btn_update_formation, .not-disabling');

                    \$('.update').on('click', function (e) {
                        e.preventDefault();
                        common.enableFormFields('#commentaire_prototype :input, #commentaires_collection :input');

                        \$('.cancel-update').removeClass('d-none');
                        \$(this).addClass('d-none');
                        
                        \$('#btnajoutcom').show();
                    });

                    \$('.cancel-update').on('click', function (e) {
                        e.preventDefault();
                        \$(this).addClass('d-none');
                        \$('.update').removeClass('d-none');
                        common.disableFormFields('#commentaires_collection :input');
                        
                        \$('#btnajoutcom').hide();
                    });
                ";
        // line 141
        echo "

                    function chargement(parameters) {
                        var selecteur = parameters.selecteur;
                        var modal = parameters.modal;
                        var chiffre = parameters.chiffre;
                        var html = \"\";

                        if (chiffre !== undefined) {
                            html = '<div class=\"progress progress-striped\" style=\"margin-bottom:0;\"><div class=\"progress-bar\" role=\"progressbar\" style=\"width: ' + chiffre + '%\"> ' + chiffre + '% Complete </div></div>';
                            /* html = html + \"<div class='text-center'>\"
                             + chiffre
                             + \"</div>\"*/
                        } else {
                            html = '<div class=\"progress progress-striped\" style=\"margin-bottom:0;\"><div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"5\" style=\"width: 100%\"> Chargement </div></div>';
                        }


                        \$(selecteur).html(html);

                    }
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 141,  335 => 120,  328 => 117,  322 => 116,  316 => 115,  301 => 102,  297 => 101,  293 => 100,  289 => 99,  283 => 96,  279 => 97,  277 => 96,  274 => 95,  270 => 94,  255 => 74,  248 => 70,  240 => 67,  226 => 57,  220 => 55,  218 => 54,  214 => 53,  210 => 51,  202 => 48,  192 => 46,  189 => 45,  185 => 44,  179 => 41,  174 => 38,  170 => 37,  157 => 27,  153 => 26,  150 => 25,  146 => 24,  139 => 19,  131 => 16,  122 => 9,  118 => 8,  113 => 164,  110 => 101,  108 => 99,  105 => 98,  103 => 94,  100 => 93,  94 => 92,  85 => 89,  80 => 88,  75 => 87,  71 => 86,  68 => 85,  66 => 24,  58 => 19,  55 => 18,  53 => 8,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
