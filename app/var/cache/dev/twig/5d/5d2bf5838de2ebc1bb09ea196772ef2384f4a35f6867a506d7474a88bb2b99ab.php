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
class __TwigTemplate_fd713800e0f24c15a3b7831daf3ad89d385d60df0c9da5583436380024ef9c43 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 86
        echo "
            ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "flashes", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 88
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 89
                echo "                    <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo " my-2\">
                        ";
                // line 90
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
            ";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 99
        echo "        </div>
        ";
        // line 100
        $this->displayBlock('modal', $context, $blocks);
        // line 102
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 168
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

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
        echo twig_escape_filter($this->env, (isset($context["asset_version"]) || array_key_exists("asset_version", $context) ? $context["asset_version"] : (function () { throw new RuntimeError('Variable "asset_version" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\"/>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "CRM v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["user_menus"]) || array_key_exists("user_menus", $context) ? $context["user_menus"] : (function () { throw new RuntimeError('Variable "user_menus" does not exist.', 37, $this->source); })()));
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54) == "MUNIER Pascal")) {
            // line 55
            echo "                        <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.stats");
            echo "\" class=\"btn btn-info mr-1\">Statistiques</a>
                        <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_Controller");
            echo "\" class=\"btn btn-info mr-1\">ACTIVITÉ</a>
                        ";
        }
        // line 58
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
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "username", [], "any", false, false, false, 68), "html", null, true);
        echo " [";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "droit", [], "any", false, false, false, 68), "html", null, true);
        echo "]
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarUserDropdown\">
                                        <a class=\"dropdown-item\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.view");
        echo "\" title=\"Infos profil\">
                                            <i class=\"fas fa-user\"></i> 
                                            Mon Profil
                                        </a>
                                        <a class=\"dropdown-item\" href=\"";
        // line 75
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "
                ";
        // line 97
        $this->displayBlock('commentaires', $context, $blocks);
        // line 98
        echo "            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 97
    public function block_commentaires($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 101
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 102
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 103
        echo "            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.13.0/jquery-ui.js\"></script>
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
        // line 119
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/common.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, (isset($context["asset_version"]) || array_key_exists("asset_version", $context) ? $context["asset_version"] : (function () { throw new RuntimeError('Variable "asset_version" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/number-utils.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, (isset($context["asset_version"]) || array_key_exists("asset_version", $context) ? $context["asset_version"] : (function () { throw new RuntimeError('Variable "asset_version" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/facture-utils.js"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, (isset($context["asset_version"]) || array_key_exists("asset_version", $context) ? $context["asset_version"] : (function () { throw new RuntimeError('Variable "asset_version" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "\"></script>
            <script>
                ";
        // line 124
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
        // line 145
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  454 => 145,  432 => 124,  425 => 121,  419 => 120,  413 => 119,  395 => 103,  385 => 102,  375 => 101,  365 => 100,  347 => 97,  337 => 98,  335 => 97,  332 => 96,  322 => 95,  301 => 75,  294 => 71,  286 => 68,  272 => 58,  267 => 56,  262 => 55,  260 => 54,  256 => 53,  252 => 51,  244 => 48,  234 => 46,  231 => 45,  227 => 44,  221 => 41,  216 => 38,  212 => 37,  199 => 27,  195 => 26,  192 => 25,  182 => 24,  163 => 19,  149 => 16,  140 => 9,  130 => 8,  119 => 168,  116 => 102,  114 => 100,  111 => 99,  109 => 95,  106 => 94,  100 => 93,  91 => 90,  86 => 89,  81 => 88,  77 => 87,  74 => 86,  72 => 24,  64 => 19,  61 => 18,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
    <head>
        <!-- Required meta tags -->
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <!-- Bootstrap CSS -->
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.7.2/css/all.css\"
                  integrity=\"sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr\"
                  crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
                  integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\"
                  crossorigin=\"anonymous\">
            <!--link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css\"-->
            <link rel=\"stylesheet\" href=\"{{ asset('crm/common.css') }}?v={{ asset_version }}\"/>
        {% endblock %}

        <title>{% block title %}CRM v2.0{% endblock %}</title>
    </head>
    <body>
        <div class=\"container-fluid\">

            {% block header %}
                <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
                    <a class=\"navbar-brand\" style=\"\" href=\"{{ path('home.index') }}\">
                        <img src=\"{{ asset('crm/images/aprentiv-logo-2.png') }}\" class=\"logo\"/>
                    </a>
                    <div class=\"calque01\"></div>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
                            aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
    
                    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                        <ul class=\"navbar-nav mr-auto\">
                        {% for key, menu_items in user_menus %}
                                <li class=\"nav-item dropdown\">
                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\" role=\"button\"
                                       data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        {{ key | upper }}
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                        {% for item in menu_items %}
                                            <a class=\"dropdown-item\"
                                               href=\"{{ item.urlmenu is not empty ?  path(item.urlmenu) : '#' }}\">{{ item.nomMenu }}</a>
                                        {% endfor %}
                                    </div>
                                </li>
                            {% endfor %}
                        </ul>

                        <a href=\"{{ path('home.portail') }}\" class=\"portail\">PORTAIL</a>
                        {% if app.user  == 'MUNIER Pascal'%}
                        <a href=\"{{ path('home.stats') }}\" class=\"btn btn-info mr-1\">Statistiques</a>
                        <a href=\"{{ path('Log_Controller') }}\" class=\"btn btn-info mr-1\">ACTIVITÉ</a>
                        {% endif %}
                        <a href=\"{{ path('Fiche_lead_Controller/ajoutLead') }}\" class=\"btn btn-info\">CREER LEAD</a>
                        <div class=\"my-2 my-lg-0 text-light\">
                            <ul class=\"navbar-nav mr-auto\">
                                <li class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle text-light btn\" id=\"navbarUserDropdown\"
                                       role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"fa-stack fa-1x\">
                                            <i class=\"fas fa-circle fa-stack-2x text-info\"></i>
                                            <i class=\"fas fa-user fa-stack-1x text-white\"></i>
                                        </span>
                                            Hello {{ app.user.username }} [{{ app.user.droit }}]
                                    </a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"navbarUserDropdown\">
                                        <a class=\"dropdown-item\" href=\"{{ path('user.view') }}\" title=\"Infos profil\">
                                            <i class=\"fas fa-user\"></i> 
                                            Mon Profil
                                        </a>
                                        <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\" title=\"Fermer la session\">
                                            <i class=\"fas fa-sign-out-alt\"></i> 
                                            Deconnexion
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            {% endblock %}

            {% for label, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ label }} my-2\">
                        {{ message }}
                    </div>
                {% endfor %}
            {% endfor %}

            {% block body %}

                {% block commentaires %}{% endblock %}
            {% endblock %}
        </div>
        {% block modal %}
        {% endblock %}
        {% block javascripts %}
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css\">
  <link rel=\"stylesheet\" href=\"/resources/demos/style.css\">
  <script src=\"https://code.jquery.com/jquery-3.6.0.js\"></script>
  <script src=\"https://code.jquery.com/ui/1.13.0/jquery-ui.js\"></script>
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
            
            <script src=\"{{ asset('crm/common.js') }}?v={{ asset_version }}\"></script>
            <script src=\"{{ asset('assets/js/number-utils.js') }}?v={{ asset_version }}\"></script>
            <script src=\"{{ asset('assets/js/facture-utils.js') }}?v={{ asset_version }}\"></script>
            <script>
                {#  Activer et désactiver les champs des formulaires --> #}
                    common.disableFormFields('#commentaires_collection :input, .list-filter :input, .no-disabled :input, #btn_update_formation, .not-disabling');

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
                {# Activer et désactiver les champs du formulaire <-- #}


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
        {% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/templates/base.html.twig");
    }
}
