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

/* home/portail.html.twig */
class __TwigTemplate_272a33f9421cfcfe8b29830680718494f28f4ba5bfff25b662f2c788dc156a36 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/portail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/portail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/portail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Menu - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1 class=\"text-center mt-5\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>


            <div class=\"row\">
                 <div class=\"col col-md-3 mb-3 mx-auto\">
                        <canvas id=\"propals\" width=\"100\" height=\"100\"></canvas>
                    </div> 
                    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13) == "MUNIER Pascal")) {
            // line 14
            echo "                    <div class=\"col col-md-3 mb-3 mx-auto\">
                        <canvas id=\"leads\" width=\"100\" height=\"100\"></canvas>
                    </div>
                    <div class=\"col col-md-3 mb-3 mx-auto\">
                        <canvas id=\"notes\" width=\"100\" height=\"100\"></canvas>
                    </div>
                    ";
        }
        // line 21
        echo "                   
            </div>
        <a class=\"btn btn-info btn-portail mb-3\" href=\"#\" style=\" width:10% !important;margin:0 auto !important;display:block !important;float:none !important;\" onclick=\"btnlegend(\$(this))\">LEGENDE</a>
                <div class=\"row\">
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller", ["commercial" => (isset($context["nomCommercial"]) || array_key_exists("nomCommercial", $context) ? $context["nomCommercial"] : (function () { throw new RuntimeError('Variable "nomCommercial" does not exist.', 27, $this->source); })())]), "html", null, true);
        echo "\">VOS DOSSIERS</a>
                    </div>
                        
                        <table class=\"table table-sm table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Date de création</th>
                                    <th>Dispositif</th>
                                    <th>Client</th>
                                    <th>Intitulé du stage</th>
                                    <th>Montant signé</th>
                                    <th>Date estimée pour clôture</th>
                                    <th>Statut</th>
                                    <th>OPCO</th>
                                    <th>Date fin stage</th>
                                </tr>
                            </thead>
                            <tbody>


                                ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationDossier"]) || array_key_exists("paginationDossier", $context) ? $context["paginationDossier"] : (function () { throw new RuntimeError('Variable "paginationDossier" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            echo "                                                    
                                    <tr data-id=\"";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 48), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 49
            (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 49), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 49), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 49), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true))));
            echo "</td>
                                        <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dispositif", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "client", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "intituleStage", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "montantSigne", [], "any", false, false, false, 53), 2, ",", " "), "html", null, true);
            echo "</td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 54), "+6 month"), "d-m-Y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "statut", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "opca", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                                         ";
            // line 57
            if (((twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 57) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 57, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 57) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 57, $this->source); })()), "+5 day")))) {
                // line 58
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 59), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 61
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 61) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 61, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 61) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 61, $this->source); })()), "+10 day")))) {
                // line 62
                echo "
                                                <td class=\"bg-warning\">";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 63), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 65
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 65) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 65, $this->source); })()))) {
                // line 66
                echo "
                                                <td class=\"bg-success text-white\">";
                // line 67
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 67), "d-m-Y"), "html", null, true);
                echo "</td>
                                                
                                        ";
            } else {
                // line 70
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 71
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 71), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            }
            // line 74
            echo "                                        
                                        <td style=\"display: none;\">";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "commercial", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </tbody>
                        </table>
                    </div>

                    
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\">VOS PROPALES</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                                    <thead>
                                    <tr class=\"bg-info text-light\">
                                        <th>Statut</th>
                                        <th>Client</th>
                                        <th>Type</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Coût Ht</th>
                                        <th>Fiabilité</th>
                                        <th>Date de relance</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationPropal"]) || array_key_exists("paginationPropal", $context) ? $context["paginationPropal"] : (function () { throw new RuntimeError('Variable "paginationPropal" does not exist.', 102, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propal"]) {
            // line 103
            echo "                                        <tr data-propal-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 103), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_show", ["id" => twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 103)]), "html", null, true);
            echo "\">
                                            <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "statut", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                                            <td style=\"display: none;\">";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "commercial", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                                            <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "client", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                                            <td>";
            // line 107
            if ((twig_get_attribute($this->env, $this->source, $context["propal"], "type", [], "any", false, false, false, 107) == 1)) {
                echo " Entreprise ";
            } else {
                echo " Particulier ";
            }
            echo "</td>
                                            <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "nom", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "prenom", [], "any", false, false, false, 109), "html", null, true);
            echo " </td>
                                            ";
            // line 110
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 110))) {
                // line 111
                echo "                                            <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 111), "html", null, true);
                echo " €</td>
                                            ";
            } else {
                // line 113
                echo "                                            <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 113), "html", null, true);
                echo "</td>
                                            ";
            }
            // line 115
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 115) == "Froid")) {
                // line 116
                echo "                                            <td class=\"bg-info text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 116), "html", null, true);
                echo " </td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 117
$context["propal"], "fiabilite", [], "any", false, false, false, 117) == "Chaud")) {
                // line 118
                echo "                                            <td class=\"bg-danger text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 118), "html", null, true);
                echo " </td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 119
$context["propal"], "fiabilite", [], "any", false, false, false, 119) == "Tiede")) {
                // line 120
                echo "                                            <td class=\"bg-warning text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 120), "html", null, true);
                echo " </td>
                                            ";
            } else {
                // line 122
                echo "                                            <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 122), "html", null, true);
                echo " </td>
                                            ";
            }
            // line 124
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 124) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 124, $this->source); })()), "-1 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 124) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 124, $this->source); })()), "-4 day")))) {
                // line 125
                echo "
                                                <td class=\"bg-warning\">";
                // line 126
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 126), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 128
$context["propal"], "daterelance", [], "any", false, false, false, 128) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 128, $this->source); })()), "-5 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 128) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 128, $this->source); })()), "-9 day")))) {
                // line 129
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 130
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 130), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 132
$context["propal"], "daterelance", [], "any", false, false, false, 132) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 132, $this->source); })()), "-10 day"))) {
                // line 133
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 134
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 134), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 136
$context["propal"], "daterelance", [], "any", false, false, false, 136) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 136, $this->source); })()))) {
                // line 137
                echo "
                                                <td class=\"bg-success text-white\">";
                // line 138
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 138), "d-m-Y"), "html", null, true);
                echo "</td>        

                                        ";
            }
            // line 141
            echo "                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 143
        echo "                                    </tbody>
                                </table>

                    </div>
                        <div class=\"w-100\"></div>
                    <div class=\"col\"><div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149)]), "html", null, true);
        echo "\">VOS CLIENTS</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Societe</th>
                                    <th>Interlocuteur</th>
                                    <th>Ville</th>
                                    <th>OPCO</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationClient"]) || array_key_exists("paginationClient", $context) ? $context["paginationClient"] : (function () { throw new RuntimeError('Variable "paginationClient" does not exist.', 162, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 163
            echo "                                    <tr data-clientprospect-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 163), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 163)]), "html", null, true);
            echo "\">
                                        <td style=\"display:none;\">";
            // line 164
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "statut", [], "any", false, false, false, 164), "html", null, true);
            echo "</td>
                                        <td>";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "societe", [], "any", false, false, false, 165), "html", null, true);
            echo "</td>
                                        <td>";
            // line 166
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 166)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 166)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 167
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ville", [], "any", false, false, false, 167), "html", null, true);
            echo "</td>
                                        <td>";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "opca", [], "any", false, false, false, 168), "html", null, true);
            echo "</td>
                                        <td style=\"display: none;\">";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "commercial", [], "any", false, false, false, 169), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                            </tbody>
                            </table>
                    </div>
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["idType" => 1, "commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 177, $this->source); })()), "id", [], "any", false, false, false, 177)]), "html", null, true);
        echo "\">VOS PROSPECTS</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Societe</th>
                                    <th>Interlocuteur</th>
                                    <th>Ville</th>
                                    <th>OPCO</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationProspect"]) || array_key_exists("paginationProspect", $context) ? $context["paginationProspect"] : (function () { throw new RuntimeError('Variable "paginationProspect" does not exist.', 190, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 191
            echo "                                    <tr data-clientprospect-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 191), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 191)]), "html", null, true);
            echo "\">
                                        <td style=\"display:none;\">";
            // line 192
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "statut", [], "any", false, false, false, 192), "html", null, true);
            echo "</td>
                                        <td>";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "societe", [], "any", false, false, false, 193), "html", null, true);
            echo "</td>
                                        <td>";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 194)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 194)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ville", [], "any", false, false, false, 195), "html", null, true);
            echo "</td>
                                        <td>";
            // line 196
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "opca", [], "any", false, false, false, 196), "html", null, true);
            echo "</td>
                                        <td style=\"display: none;\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "commercial", [], "any", false, false, false, 197), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 200
        echo "                            </tbody>
                            </table>
                    </div>
                        <div class=\"w-100\"></div>
                    <div class=\"col\">
                    <div class=\"text-center\" id=\"AncreNote\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller", ["rappelleur" => (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 206, $this->source); })()), "actionStatut" => 1]), "html", null, true);
        echo "\">VOS NOTES ET ACTIONS</a>
                    </div>    
                        <table class=\"table table-sm table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Module</th>
                                    <th>Contact</th>
                                    <th>Date</th>
                                    <th>Note/Commentaire</th>
                                    <th>Action</th>
                                    <th>Date Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationNoteResponsable"]) || array_key_exists("paginationNoteResponsable", $context) ? $context["paginationNoteResponsable"] : (function () { throw new RuntimeError('Variable "paginationNoteResponsable" does not exist.', 221, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 222
            echo "                                    <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/showNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 222)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["noteConstant"]) || array_key_exists("noteConstant", $context) ? $context["noteConstant"] : (function () { throw new RuntimeError('Variable "noteConstant" does not exist.', 223, $this->source); })()), "getTableLibelle", [0 => twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 223)], "method", false, false, false, 223), "html", null, true);
            echo "</td>
                                        ";
            // line 224
            if ((twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 224) == "1_formation_dossier")) {
                // line 225
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "client", [], "any", false, false, false, 225), "html", null, true);
                echo "</td>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 226
$context["note"], "nomTable", [], "any", false, false, false, 226) == "lead") && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["note"], "societe", [], "any", false, false, false, 226)))) {
                // line 227
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "nomLead", [], "any", false, false, false, 227)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "prenomLead", [], "any", false, false, false, 227)), "html", null, true);
                echo "</td>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 228
$context["note"], "nomTable", [], "any", false, false, false, 228) == "lead")) {
                // line 229
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "societe", [], "any", false, false, false, 229), "html", null, true);
                echo "</td>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 230
$context["note"], "nomTable", [], "any", false, false, false, 230) == "1_contact") && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["note"], "contact", [], "any", false, false, false, 230)))) {
                // line 231
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "nom", [], "any", false, false, false, 231)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "prenom", [], "any", false, false, false, 231)), "html", null, true);
                echo "</td>      
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 232
$context["note"], "nomTable", [], "any", false, false, false, 232) == "1_contact")) {
                // line 233
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "contact", [], "any", false, false, false, 233), "html", null, true);
                echo "</td>
                                        ";
            } else {
                // line 235
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "nonCon", [], "any", false, false, false, 235), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 237
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "date", [], "any", false, false, false, 237), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 238
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "noteCommentaire", [], "any", false, false, false, 238), "html", null, true);
            echo "</td>
                                        <td>";
            // line 239
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "action", [], "any", false, false, false, 239), "html", null, true);
            echo "</td>
                                        <td style=\"display: none;\">";
            // line 240
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "statutAction", [], "any", false, false, false, 240), "html", null, true);
            echo "</td>
                                        
                                        ";
            // line 242
            if (((twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 242) <= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 242, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 242) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 242, $this->source); })()), "-4 day")))) {
                // line 243
                echo "
                                                <td class=\"bg-warning\">";
                // line 244
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 244), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 246
$context["note"], "dateAction", [], "any", false, false, false, 246) <= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 246, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 246) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 246, $this->source); })()), "-9 day")))) {
                // line 247
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 248
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 248), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 250
$context["note"], "dateAction", [], "any", false, false, false, 250) < twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 250, $this->source); })()), "-9 day"))) {
                // line 251
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 252
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 252), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 254
$context["note"], "dateAction", [], "any", false, false, false, 254) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 254, $this->source); })()))) {
                // line 255
                echo "
                                                <td class=\"bg-success text-white\">";
                // line 256
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 256), "d-m-Y"), "html", null, true);
                echo "</td>        

                                        ";
            }
            // line 259
            echo "
                                            <td style=\"display: none;\">";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "rappelleur", [], "any", false, false, false, 260), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "responsable", [], "any", false, false, false, 260), "html", null, true);
            echo "</td>
                                            <td><a  href=\"";
            // line 261
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note.update", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 261)]), "html", null, true);
            echo "#AncreNote\" class=\"btn btn-success\">Fait</a></td>
                                        </tr>                                  
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 264
        echo "                                </tbody>
                        </table>
                    </div>                 
                </div>
                
                    <div class=\"col\"><div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Lead_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 270, $this->source); })()), "id", [], "any", false, false, false, 270)]), "html", null, true);
        echo "\">VOS LEADS</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Nom Prénom</th>
                                    <th>Société</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Ville</th>
                                    <th>Origine</th>
                                    <th>Statut</th>
                                    ";
        // line 283
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "user", [], "any", false, false, false, 283), "idutilisateur", [], "any", false, false, false, 283) == 29)) {
            // line 284
            echo "                                        <th>Commercial</th>
                                    ";
        } else {
            // line 286
            echo "                                    ";
        }
        // line 287
        echo "                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 290
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationLead"]) || array_key_exists("paginationLead", $context) ? $context["paginationLead"] : (function () { throw new RuntimeError('Variable "paginationLead" does not exist.', 290, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 291
            echo "                                    <tr data-lead-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 291), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_lead_Controller/editLead", ["id" => twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 291)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 292
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["lead"], "nom", [], "any", false, false, false, 292)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["lead"], "prenom", [], "any", false, false, false, 292)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 293
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "societe", [], "any", false, false, false, 293), "html", null, true);
            echo "</td>
                                        <td>";
            // line 294
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "telephone", [], "any", false, false, false, 294), "html", null, true);
            echo "</td>
                                        <td>";
            // line 295
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "email", [], "any", false, false, false, 295), "html", null, true);
            echo "</td>
                                        <td>";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "ville", [], "any", false, false, false, 296), "html", null, true);
            echo "</td>
                                        <td>";
            // line 297
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "origine", [], "any", false, false, false, 297), "html", null, true);
            echo "</td>
                                        <td>";
            // line 298
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "statut", [], "any", false, false, false, 298), "html", null, true);
            echo "</td>
                                    ";
            // line 299
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 299, $this->source); })()), "user", [], "any", false, false, false, 299), "idutilisateur", [], "any", false, false, false, 299) == 29)) {
                // line 300
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "commercial", [], "any", false, false, false, 300), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 302
                echo "                                        <td style=\"display: none;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "commercial", [], "any", false, false, false, 302), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 304
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo "                            </tbody>
                            </table>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 309
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 310
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js\" integrity=\"sha256-D2tkh/3EROq+XuDEmgxOLW1oNxf0rLNlOwsPIUX+co4=\" crossorigin=\"anonymous\"></script>        
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0\"></script>
<script>
Chart.register(ChartDataLabels);
        var myhtml = document.createElement(\"div\");
                     myhtml.innerHTML = \"<h5>Dossier :</h5><p>La date de fin de stage est dans plus de 10 jours</p><p style='background-color:green;padding:10px;width:50px;margin:auto'></p><p>La date de fin de stage est dans 10 jours ou moins</p><p style='background-color:orange;padding:10px;width:50px;margin:auto'></p><p>La date de fin de stage est dans 5 jours ou moins</p><p style='background-color:red;padding:10px;width:50px;margin:auto'></p><br><h5>Propal/Note :</h5><p>La date de relance/d'action n'est pas depassée</p><p style='background-color:green;padding:10px;width:50px;margin:auto'></p><p>La date de relance/d'action est depassée depuis 1 jours</p><p style='background-color:orange;padding:10px;width:50px;margin:auto'></p><p>La date de relance/d'action est depassée depuis 5 jours</p><p style='background-color:red;padding:10px;width:50px;margin:auto'></p><p>La date de relance/d'action est depassée depuis 10 jours</p><p style='background-color:red;width:55px;margin:auto'><i class='fas fa-exclamation-triangle' style='margin-right:3px;'></i></p>\";

         function btnlegend(elem)
         {
                    swal({
                    content: myhtml,
                    icon: 'warning',
                        })
        }
        </script>
    <script>
      const ctx2 = document.getElementById('propals').getContext('2d');
        const propals = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Froid', 'Tiede', 'Chaud'],
                datasets: [{
                    data: [";
        // line 337
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propalStats"]) || array_key_exists("propalStats", $context) ? $context["propalStats"] : (function () { throw new RuntimeError('Variable "propalStats" does not exist.', 337, $this->source); })()), 0, [], "array", false, false, false, 337), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propalStats"]) || array_key_exists("propalStats", $context) ? $context["propalStats"] : (function () { throw new RuntimeError('Variable "propalStats" does not exist.', 337, $this->source); })()), 1, [], "array", false, false, false, 337), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propalStats"]) || array_key_exists("propalStats", $context) ? $context["propalStats"] : (function () { throw new RuntimeError('Variable "propalStats" does not exist.', 337, $this->source); })()), 2, [], "array", false, false, false, 337), "html", null, true);
        echo "],
                    backgroundColor: [
                        'rgb(54, 162, 235, 1)',
                        'rgb(255, 205, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        ],
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
        enabled: false
    },
                plugins: {
                    title: {
                        display: true,
                        text: 'PROPAL',
                        fullSize:true
                    },
        datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(2)+\"%\";
                return percentage;
            },
            color: '#fff',
                }
                }
            }
        });
    
";
        // line 378
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 378, $this->source); })()), "user", [], "any", false, false, false, 378) == "MUNIER Pascal")) {
            // line 379
            echo "      
           const ctx = document.getElementById('leads').getContext('2d');
            const leads = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['En cours', 'Devenu client', 'Devenu prospect', 'Sans suite'],
                datasets: [{
                    data: [parseInt(";
            // line 386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leadStats"]) || array_key_exists("leadStats", $context) ? $context["leadStats"] : (function () { throw new RuntimeError('Variable "leadStats" does not exist.', 386, $this->source); })()), "enCours", [], "any", false, false, false, 386), "html", null, true);
            echo "), parseInt(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leadStats"]) || array_key_exists("leadStats", $context) ? $context["leadStats"] : (function () { throw new RuntimeError('Variable "leadStats" does not exist.', 386, $this->source); })()), "dClient", [], "any", false, false, false, 386), "html", null, true);
            echo "), parseInt(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leadStats"]) || array_key_exists("leadStats", $context) ? $context["leadStats"] : (function () { throw new RuntimeError('Variable "leadStats" does not exist.', 386, $this->source); })()), "dProspect", [], "any", false, false, false, 386), "html", null, true);
            echo "), parseInt(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leadStats"]) || array_key_exists("leadStats", $context) ? $context["leadStats"] : (function () { throw new RuntimeError('Variable "leadStats" does not exist.', 386, $this->source); })()), "sSuite", [], "any", false, false, false, 386), "html", null, true);
            echo ")],
                    backgroundColor: [
                        'rgb(255, 99, 132, 1)',
                        'rgb(54, 162, 235, 1)',
                        'rgb(255, 205, 86, 1)',
                        'rgba(30, 130, 76, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(30, 130, 76, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
        enabled: false
    },
                plugins: {
                    title: {
                        display: true,
                        text: 'LEAD',
                        fullSize:true
                    },
                    datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(2)+\"%\";
                return percentage;
            },
            color: '#fff',
                }
                }
            }
        });
        const ctx3 = document.getElementById('notes').getContext('2d');
        const myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: ['Fait', 'A faire'],
                datasets: [{
                    data: [";
            // line 433
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["noteStats"]) || array_key_exists("noteStats", $context) ? $context["noteStats"] : (function () { throw new RuntimeError('Variable "noteStats" does not exist.', 433, $this->source); })()), "fait", [], "any", false, false, false, 433), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["noteStats"]) || array_key_exists("noteStats", $context) ? $context["noteStats"] : (function () { throw new RuntimeError('Variable "noteStats" does not exist.', 433, $this->source); })()), "aFaire", [], "any", false, false, false, 433), "html", null, true);
            echo "],
                    backgroundColor: [
                        'rgb(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
        enabled: false
    },
                plugins: {
                    title: {
                        display: true,
                        text: 'NOTE',
                        fullSize:true
                    },
                    datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(2)+\"%\";
                return percentage;
            },
            color: '#fff',
                }
                }
            }
        });
        ";
        }
        // line 471
        echo "        </script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/portail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1001 => 471,  958 => 433,  902 => 386,  893 => 379,  891 => 378,  843 => 337,  812 => 310,  802 => 309,  790 => 306,  783 => 304,  777 => 302,  771 => 300,  769 => 299,  765 => 298,  761 => 297,  757 => 296,  753 => 295,  749 => 294,  745 => 293,  739 => 292,  732 => 291,  728 => 290,  723 => 287,  720 => 286,  716 => 284,  714 => 283,  698 => 270,  690 => 264,  681 => 261,  676 => 260,  673 => 259,  667 => 256,  664 => 255,  662 => 254,  657 => 252,  654 => 251,  652 => 250,  647 => 248,  644 => 247,  642 => 246,  637 => 244,  634 => 243,  632 => 242,  627 => 240,  623 => 239,  619 => 238,  614 => 237,  608 => 235,  602 => 233,  600 => 232,  593 => 231,  591 => 230,  586 => 229,  584 => 228,  577 => 227,  575 => 226,  570 => 225,  568 => 224,  564 => 223,  559 => 222,  555 => 221,  537 => 206,  529 => 200,  520 => 197,  516 => 196,  512 => 195,  506 => 194,  502 => 193,  498 => 192,  491 => 191,  487 => 190,  471 => 177,  464 => 172,  455 => 169,  451 => 168,  447 => 167,  441 => 166,  437 => 165,  433 => 164,  426 => 163,  422 => 162,  406 => 149,  398 => 143,  391 => 141,  385 => 138,  382 => 137,  380 => 136,  375 => 134,  372 => 133,  370 => 132,  365 => 130,  362 => 129,  360 => 128,  355 => 126,  352 => 125,  349 => 124,  343 => 122,  337 => 120,  335 => 119,  330 => 118,  328 => 117,  323 => 116,  320 => 115,  314 => 113,  308 => 111,  306 => 110,  302 => 109,  298 => 108,  290 => 107,  286 => 106,  282 => 105,  278 => 104,  271 => 103,  267 => 102,  247 => 85,  238 => 78,  229 => 75,  226 => 74,  220 => 71,  217 => 70,  211 => 67,  208 => 66,  206 => 65,  201 => 63,  198 => 62,  196 => 61,  191 => 59,  188 => 58,  186 => 57,  182 => 56,  178 => 55,  174 => 54,  170 => 53,  166 => 52,  162 => 51,  158 => 50,  154 => 49,  148 => 48,  142 => 47,  119 => 27,  111 => 21,  102 => 14,  100 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu - CRM Aprentiv v2.0{% endblock %}

{% block body %}
<h1 class=\"text-center mt-5\">{{ app.user }}</h1>


            <div class=\"row\">
                 <div class=\"col col-md-3 mb-3 mx-auto\">
                        <canvas id=\"propals\" width=\"100\" height=\"100\"></canvas>
                    </div> 
                    {% if app.user == \"MUNIER Pascal\" %}
                    <div class=\"col col-md-3 mb-3 mx-auto\">
                        <canvas id=\"leads\" width=\"100\" height=\"100\"></canvas>
                    </div>
                    <div class=\"col col-md-3 mb-3 mx-auto\">
                        <canvas id=\"notes\" width=\"100\" height=\"100\"></canvas>
                    </div>
                    {% endif %}
                   
            </div>
        <a class=\"btn btn-info btn-portail mb-3\" href=\"#\" style=\" width:10% !important;margin:0 auto !important;display:block !important;float:none !important;\" onclick=\"btnlegend(\$(this))\">LEGENDE</a>
                <div class=\"row\">
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"{{ path('Liste_Dossiers_Controller', {'commercial': nomCommercial}) }}\">VOS DOSSIERS</a>
                    </div>
                        
                        <table class=\"table table-sm table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Date de création</th>
                                    <th>Dispositif</th>
                                    <th>Client</th>
                                    <th>Intitulé du stage</th>
                                    <th>Montant signé</th>
                                    <th>Date estimée pour clôture</th>
                                    <th>Statut</th>
                                    <th>OPCO</th>
                                    <th>Date fin stage</th>
                                </tr>
                            </thead>
                            <tbody>


                                {% for dossier in paginationDossier %}                                                    
                                    <tr data-id=\"{{ dossier.id }}\" data-href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', {id:dossier.id}) }}\">
                                        <td>{{ (( (dossier.dateEnvoi | date('d-m-Y')) == '31-12-1969') or ((dossier.dateEnvoi | date('d-m-Y')) == '01-01-1970') or ((dossier.dateEnvoi | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateEnvoi | date('d-m-Y') }}</td>
                                        <td>{{ dossier.dispositif }}</td>
                                        <td>{{ dossier.client }}</td>
                                        <td>{{ dossier.intituleStage }}</td>
                                        <td>{{ dossier.montantSigne |number_format(2, ',', ' ') }}</td>
                                        <td>{{ dossier.dateEnvoi | date_modify('+6 month') | date('d-m-Y') }}</td>
                                        <td>{{ dossier.statut }}</td>
                                        <td>{{ dossier.opca }}</td>
                                         {% if dossier.dateFinPeriode >= currentDate and dossier.dateFinPeriode <= currentDate|date_modify('+5 day') %}

                                                <td class=\"bg-danger text-white\">{{ dossier.dateFinPeriode | date('d-m-Y')}}</td>

                                        {% elseif dossier.dateFinPeriode >= currentDate and dossier.dateFinPeriode <= currentDate|date_modify('+10 day') %}

                                                <td class=\"bg-warning\">{{ dossier.dateFinPeriode | date('d-m-Y')}}</td>

                                        {% elseif dossier.dateFinPeriode >= currentDate %}

                                                <td class=\"bg-success text-white\">{{ dossier.dateFinPeriode | date('d-m-Y')}}</td>
                                                
                                        {% else %}

                                                <td class=\"bg-danger text-white\">{{ dossier.dateFinPeriode | date('d-m-Y')}}</td>

                                        {% endif %}
                                        
                                        <td style=\"display: none;\">{{ dossier.commercial }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>

                    
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"{{ path('Liste_propositions_commerciales_Controller', {'commercial': idCommercial.id}) }}\">VOS PROPALES</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                                    <thead>
                                    <tr class=\"bg-info text-light\">
                                        <th>Statut</th>
                                        <th>Client</th>
                                        <th>Type</th>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                        <th>Coût Ht</th>
                                        <th>Fiabilité</th>
                                        <th>Date de relance</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for propal in paginationPropal %}
                                        <tr data-propal-id=\"{{ propal.idpropal }}\" data-href=\"{{ path('propal_show', { id : propal.idpropal} ) }}\">
                                            <td>{{ propal.statut }}</td>
                                            <td style=\"display: none;\">{{ propal.commercial }}</td>
                                            <td>{{ propal.client }}</td>
                                            <td>{% if propal.type == 1 %} Entreprise {% else %} Particulier {% endif %}</td>
                                            <td>{{ propal.nom }}</td>
                                            <td> {{ propal.prenom}} </td>
                                            {% if propal.coutht is not null %}
                                            <td> {{ propal.coutht}} €</td>
                                            {% else %}
                                            <td> {{ propal.coutht}}</td>
                                            {% endif %}
                                            {% if propal.fiabilite == 'Froid' %}
                                            <td class=\"bg-info text-white\"> {{ propal.fiabilite}} </td>
                                            {% elseif propal.fiabilite == 'Chaud' %}
                                            <td class=\"bg-danger text-white\"> {{ propal.fiabilite}} </td>
                                            {% elseif propal.fiabilite == 'Tiede' %}
                                            <td class=\"bg-warning text-white\"> {{ propal.fiabilite}} </td>
                                            {% else %}
                                            <td> {{ propal.fiabilite}} </td>
                                            {% endif %}
                                        {% if propal.daterelance <= currentDate|date_modify('-1 day') and propal.daterelance >=  currentDate|date_modify('-4 day') %}

                                                <td class=\"bg-warning\">{{ propal.daterelance | date('d-m-Y')}}</td>

                                        {% elseif propal.daterelance  <= currentDate|date_modify('-5 day') and propal.daterelance >=  currentDate|date_modify('-9 day') %}

                                                <td class=\"bg-danger text-white\">{{ propal.daterelance | date('d-m-Y')}}</td>

                                        {% elseif propal.daterelance <= currentDate|date_modify('-10 day') %}

                                                <td class=\"bg-danger text-white\">{{ propal.daterelance | date('d-m-Y')}}<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        {% elseif propal.daterelance >= currentDate %}

                                                <td class=\"bg-success text-white\">{{ propal.daterelance | date('d-m-Y')}}</td>        

                                        {% endif %}
                                        </tr>
                                    {% endfor %}
                                    </tbody>
                                </table>

                    </div>
                        <div class=\"w-100\"></div>
                    <div class=\"col\"><div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"{{ path('Liste_Client_Prospect_Controller', {'commercial': idCommercial.id}) }}\">VOS CLIENTS</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Societe</th>
                                    <th>Interlocuteur</th>
                                    <th>Ville</th>
                                    <th>OPCO</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for contact in paginationClient %}
                                    <tr data-clientprospect-id=\"{{ contact.contact_id }}\" data-href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : contact.contact_id} ) }}\">
                                        <td style=\"display:none;\">{{ contact.statut }}</td>
                                        <td>{{ contact.societe }}</td>
                                        <td>{{ contact.nom | ucwords}} {{ contact.prenom | ucwords }}</td>
                                        <td>{{ contact.ville }}</td>
                                        <td>{{ contact.opca }}</td>
                                        <td style=\"display: none;\">{{ contact.commercial }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                            </table>
                    </div>
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"{{ path('Liste_Client_Prospect_Controller', {'idType': 1, 'commercial': idCommercial.id }) }}\">VOS PROSPECTS</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Societe</th>
                                    <th>Interlocuteur</th>
                                    <th>Ville</th>
                                    <th>OPCO</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for contact in paginationProspect %}
                                    <tr data-clientprospect-id=\"{{ contact.contact_id }}\" data-href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : contact.contact_id} ) }}\">
                                        <td style=\"display:none;\">{{ contact.statut }}</td>
                                        <td>{{ contact.societe }}</td>
                                        <td>{{ contact.nom | ucwords}} {{ contact.prenom | ucwords }}</td>
                                        <td>{{ contact.ville }}</td>
                                        <td>{{ contact.opca }}</td>
                                        <td style=\"display: none;\">{{ contact.commercial }}</td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                            </table>
                    </div>
                        <div class=\"w-100\"></div>
                    <div class=\"col\">
                    <div class=\"text-center\" id=\"AncreNote\">
                        <a class=\"btn btn-info btn-portail\" href=\"{{ path('Liste_notes_actions_Controller', {'rappelleur': currentUser, 'actionStatut': 1}) }}\">VOS NOTES ET ACTIONS</a>
                    </div>    
                        <table class=\"table table-sm table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Module</th>
                                    <th>Contact</th>
                                    <th>Date</th>
                                    <th>Note/Commentaire</th>
                                    <th>Action</th>
                                    <th>Date Action</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for note in paginationNoteResponsable %}
                                    <tr data-href=\"{{ path('Liste_notes_actions_Controller/showNote', {id:note.id}) }}\">
                                        <td>{{ noteConstant.getTableLibelle(note.nomTable) }}</td>
                                        {% if note.nomTable == '1_formation_dossier' %}
                                        <td>{{ note.client }}</td>
                                        {% elseif note.nomTable == 'lead' and note.societe is empty %}
                                        <td>{{ note.nomLead | ucwords}} {{ note.prenomLead | ucwords }}</td>
                                        {% elseif note.nomTable == 'lead' %}
                                        <td>{{ note.societe }}</td>
                                        {% elseif note.nomTable == '1_contact' and note.contact is empty %}
                                        <td>{{ note.nom | ucwords}} {{ note.prenom | ucwords }}</td>      
                                        {% elseif note.nomTable == '1_contact' %}
                                        <td>{{ note.contact }}</td>
                                        {% else %}
                                        <td>{{note.nonCon}}</td>
                                        {% endif %}
                                        <td>{{ note.date|date('d/m/Y') }}</td>
                                        <td>{{ note.noteCommentaire }}</td>
                                        <td>{{ note.action }}</td>
                                        <td style=\"display: none;\">{{ note.statutAction }}</td>
                                        
                                        {% if note.dateAction <= currentDate and note.dateAction >= currentDate|date_modify('-4 day') %}

                                                <td class=\"bg-warning\">{{ note.dateAction|date('d-m-Y')}}</td>

                                        {% elseif note.dateAction  <= currentDate and note.dateAction >= currentDate|date_modify('-9 day') %}

                                                <td class=\"bg-danger text-white\">{{ note.dateAction | date('d-m-Y')}}</td>

                                        {% elseif note.dateAction < currentDate|date_modify('-9 day') %}

                                                <td class=\"bg-danger text-white\">{{ note.dateAction | date('d-m-Y')}}<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        {% elseif note.dateAction >= currentDate %}

                                                <td class=\"bg-success text-white\">{{ note.dateAction | date('d-m-Y')}}</td>        

                                        {% endif %}

                                            <td style=\"display: none;\">{{ note.rappelleur }}{{ note.responsable }}</td>
                                            <td><a  href=\"{{ path('note.update', {id:note.id}) }}#AncreNote\" class=\"btn btn-success\">Fait</a></td>
                                        </tr>                                  
                                    {% endfor %}
                                </tbody>
                        </table>
                    </div>                 
                </div>
                
                    <div class=\"col\"><div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"{{ path('Liste_Lead_Controller', {'commercial': idCommercial.id }) }}\">VOS LEADS</a>
                    </div>
                        
                        <table class=\"table table-sm mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                            <thead>
                                <tr class=\"bg-info text-light\">
                                    <th>Nom Prénom</th>
                                    <th>Société</th>
                                    <th>Téléphone</th>
                                    <th>Email</th>
                                    <th>Ville</th>
                                    <th>Origine</th>
                                    <th>Statut</th>
                                    {% if app.user.idutilisateur == 29 %}
                                        <th>Commercial</th>
                                    {% else %}
                                    {% endif %}
                                </tr>
                            </thead>
                            <tbody>
                                {% for lead in paginationLead %}
                                    <tr data-lead-id=\"{{ lead.id }}\" data-href=\"{{ path('Fiche_lead_Controller/editLead', { id : lead.id} ) }}\">
                                        <td>{{ lead.nom | ucwords}} {{ lead.prenom | ucwords }}</td>
                                        <td>{{ lead.societe }}</td>
                                        <td>{{ lead.telephone }}</td>
                                        <td>{{ lead.email }}</td>
                                        <td>{{ lead.ville}}</td>
                                        <td>{{ lead.origine }}</td>
                                        <td>{{ lead.statut }}</td>
                                    {% if app.user.idutilisateur == 29 %}
                                        <td>{{ lead.commercial }}</td>
                                    {% else %}
                                        <td style=\"display: none;\">{{ lead.commercial }}</td>
                                    {% endif %}
                                    </tr>
                                {% endfor %}
                            </tbody>
                            </table>
        {% endblock %}
        {% block javascripts %}
        {{ parent() }}

    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js\" integrity=\"sha256-D2tkh/3EROq+XuDEmgxOLW1oNxf0rLNlOwsPIUX+co4=\" crossorigin=\"anonymous\"></script>        
<script src=\"https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0\"></script>
<script>
Chart.register(ChartDataLabels);
        var myhtml = document.createElement(\"div\");
                     myhtml.innerHTML = \"<h5>Dossier :</h5><p>La date de fin de stage est dans plus de 10 jours</p><p style='background-color:green;padding:10px;width:50px;margin:auto'></p><p>La date de fin de stage est dans 10 jours ou moins</p><p style='background-color:orange;padding:10px;width:50px;margin:auto'></p><p>La date de fin de stage est dans 5 jours ou moins</p><p style='background-color:red;padding:10px;width:50px;margin:auto'></p><br><h5>Propal/Note :</h5><p>La date de relance/d'action n'est pas depassée</p><p style='background-color:green;padding:10px;width:50px;margin:auto'></p><p>La date de relance/d'action est depassée depuis 1 jours</p><p style='background-color:orange;padding:10px;width:50px;margin:auto'></p><p>La date de relance/d'action est depassée depuis 5 jours</p><p style='background-color:red;padding:10px;width:50px;margin:auto'></p><p>La date de relance/d'action est depassée depuis 10 jours</p><p style='background-color:red;width:55px;margin:auto'><i class='fas fa-exclamation-triangle' style='margin-right:3px;'></i></p>\";

         function btnlegend(elem)
         {
                    swal({
                    content: myhtml,
                    icon: 'warning',
                        })
        }
        </script>
    <script>
      const ctx2 = document.getElementById('propals').getContext('2d');
        const propals = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Froid', 'Tiede', 'Chaud'],
                datasets: [{
                    data: [{{ propalStats[0] }},{{ propalStats[1] }},{{ propalStats[2] }}],
                    backgroundColor: [
                        'rgb(54, 162, 235, 1)',
                        'rgb(255, 205, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        ],
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
        enabled: false
    },
                plugins: {
                    title: {
                        display: true,
                        text: 'PROPAL',
                        fullSize:true
                    },
        datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(2)+\"%\";
                return percentage;
            },
            color: '#fff',
                }
                }
            }
        });
    
{% if app.user == \"MUNIER Pascal\" %}
      
           const ctx = document.getElementById('leads').getContext('2d');
            const leads = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['En cours', 'Devenu client', 'Devenu prospect', 'Sans suite'],
                datasets: [{
                    data: [parseInt({{ leadStats.enCours }}), parseInt({{ leadStats.dClient }}), parseInt({{ leadStats.dProspect }}), parseInt({{ leadStats.sSuite }})],
                    backgroundColor: [
                        'rgb(255, 99, 132, 1)',
                        'rgb(54, 162, 235, 1)',
                        'rgb(255, 205, 86, 1)',
                        'rgba(30, 130, 76, 1)',
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(30, 130, 76, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
        enabled: false
    },
                plugins: {
                    title: {
                        display: true,
                        text: 'LEAD',
                        fullSize:true
                    },
                    datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(2)+\"%\";
                return percentage;
            },
            color: '#fff',
                }
                }
            }
        });
        const ctx3 = document.getElementById('notes').getContext('2d');
        const myChart3 = new Chart(ctx3, {
            type: 'pie',
            data: {
                labels: ['Fait', 'A faire'],
                datasets: [{
                    data: [{{ noteStats.fait }}, {{ noteStats.aFaire }}],
                    backgroundColor: [
                        'rgb(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                tooltips: {
        enabled: false
    },
                plugins: {
                    title: {
                        display: true,
                        text: 'NOTE',
                        fullSize:true
                    },
                    datalabels: {
            formatter: (value, ctx) => {
                let sum = 0;
                let dataArr = ctx.chart.data.datasets[0].data;
                dataArr.map(data => {
                    sum += data;
                });
                let percentage = (value*100 / sum).toFixed(2)+\"%\";
                return percentage;
            },
            color: '#fff',
                }
                }
            }
        });
        {% endif %}
        </script>
        {% endblock %}
", "home/portail.html.twig", "/var/www/templates/home/portail.html.twig");
    }
}
