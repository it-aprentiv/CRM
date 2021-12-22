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
class __TwigTemplate_4e3d74d40ea0046682179adfd9ccf5c050b942b704780369b4e726a693c7927b extends \Twig\Template
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
        echo "
    <h1 class=\"text-center mt-5\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

        <a class=\"btn btn-info btn-portail mb-3\" href=\"#\" style=\" width:10% !important;margin:0 auto !important;display:block !important;float:none !important;\" onclick=\"btnlegend(\$(this))\">LEGENDE</a>
                <div class=\"row\">
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller", ["commercial" => (isset($context["nomCommercial"]) || array_key_exists("nomCommercial", $context) ? $context["nomCommercial"] : (function () { throw new RuntimeError('Variable "nomCommercial" does not exist.', 13, $this->source); })())]), "html", null, true);
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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationDossier"]) || array_key_exists("paginationDossier", $context) ? $context["paginationDossier"] : (function () { throw new RuntimeError('Variable "paginationDossier" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            echo "                                                    
                                    <tr data-id=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 35
            (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 35), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 35), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 35), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 35), "d-m-Y"), "html", null, true))));
            echo "</td>
                                        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dispositif", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "client", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                        <td>";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "intituleStage", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "montantSigne", [], "any", false, false, false, 39), 2, ",", " "), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 40), "+6 month"), "d-m-Y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "statut", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "opca", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                                         ";
            // line 43
            if (((twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 43) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 43, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 43) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 43, $this->source); })()), "+5 day")))) {
                // line 44
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 47
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 47) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 47, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 47) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 47, $this->source); })()), "+10 day")))) {
                // line 48
                echo "
                                                <td class=\"bg-warning\">";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 51) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 51, $this->source); })()))) {
                // line 52
                echo "
                                                <td class=\"bg-success text-white\">";
                // line 53
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 53), "d-m-Y"), "html", null, true);
                echo "</td>
                                                
                                        ";
            } else {
                // line 56
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 57), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            }
            // line 60
            echo "                                        
                                        <td style=\"display: none;\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "commercial", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                        </table>
                    </div>

                    
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
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
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationPropal"]) || array_key_exists("paginationPropal", $context) ? $context["paginationPropal"] : (function () { throw new RuntimeError('Variable "paginationPropal" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propal"]) {
            // line 89
            echo "                                        <tr data-propal-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 89), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_show", ["id" => twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\">
                                            <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "statut", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                            <td style=\"display: none;\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "commercial", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                            <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "client", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                                            <td>";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["propal"], "type", [], "any", false, false, false, 93) == 1)) {
                echo " Entreprise ";
            } else {
                echo " Particulier ";
            }
            echo "</td>
                                            <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "nom", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                                            <td> ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "prenom", [], "any", false, false, false, 95), "html", null, true);
            echo " </td>
                                            ";
            // line 96
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 96))) {
                // line 97
                echo "                                            <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 97), "html", null, true);
                echo " €</td>
                                            ";
            } else {
                // line 99
                echo "                                            <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 99), "html", null, true);
                echo "</td>
                                            ";
            }
            // line 101
            echo "                                            ";
            if ((twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 101) == "Froid")) {
                // line 102
                echo "                                            <td class=\"bg-info text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 102), "html", null, true);
                echo " </td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 103
$context["propal"], "fiabilite", [], "any", false, false, false, 103) == "Chaud")) {
                // line 104
                echo "                                            <td class=\"bg-danger text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 104), "html", null, true);
                echo " </td>
                                            ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 105
$context["propal"], "fiabilite", [], "any", false, false, false, 105) == "Tiede")) {
                // line 106
                echo "                                            <td class=\"bg-warning text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 106), "html", null, true);
                echo " </td>
                                            ";
            } else {
                // line 108
                echo "                                            <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 108), "html", null, true);
                echo " </td>
                                            ";
            }
            // line 110
            echo "                                        ";
            if (((twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 110) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 110, $this->source); })()), "-1 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 110) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 110, $this->source); })()), "-4 day")))) {
                // line 111
                echo "
                                                <td class=\"bg-warning\">";
                // line 112
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 112), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 114
$context["propal"], "daterelance", [], "any", false, false, false, 114) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 114, $this->source); })()), "-5 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 114) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 114, $this->source); })()), "-9 day")))) {
                // line 115
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 116
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 116), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 118
$context["propal"], "daterelance", [], "any", false, false, false, 118) <= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 118, $this->source); })()), "-10 day"))) {
                // line 119
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 120
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 120), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 122
$context["propal"], "daterelance", [], "any", false, false, false, 122) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 122, $this->source); })()))) {
                // line 123
                echo "
                                                <td class=\"bg-success text-white\">";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 124), "d-m-Y"), "html", null, true);
                echo "</td>        

                                        ";
            }
            // line 127
            echo "                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                                    </tbody>
                                </table>

                    </div>
                        <div class=\"w-100\"></div>
                    <div class=\"col\"><div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
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
        // line 148
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationClient"]) || array_key_exists("paginationClient", $context) ? $context["paginationClient"] : (function () { throw new RuntimeError('Variable "paginationClient" does not exist.', 148, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 149
            echo "                                    <tr data-clientprospect-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 149), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 149)]), "html", null, true);
            echo "\">
                                        <td style=\"display:none;\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "statut", [], "any", false, false, false, 150), "html", null, true);
            echo "</td>
                                        <td>";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "societe", [], "any", false, false, false, 151), "html", null, true);
            echo "</td>
                                        <td>";
            // line 152
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 152)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 152)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 153
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ville", [], "any", false, false, false, 153), "html", null, true);
            echo "</td>
                                        <td>";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "opca", [], "any", false, false, false, 154), "html", null, true);
            echo "</td>
                                        <td style=\"display: none;\">";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "commercial", [], "any", false, false, false, 155), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "                            </tbody>
                            </table>
                    </div>
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["idType" => 1, "commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 163, $this->source); })()), "id", [], "any", false, false, false, 163)]), "html", null, true);
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
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationProspect"]) || array_key_exists("paginationProspect", $context) ? $context["paginationProspect"] : (function () { throw new RuntimeError('Variable "paginationProspect" does not exist.', 176, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 177
            echo "                                    <tr data-clientprospect-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 177), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 177)]), "html", null, true);
            echo "\">
                                        <td style=\"display:none;\">";
            // line 178
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "statut", [], "any", false, false, false, 178), "html", null, true);
            echo "</td>
                                        <td>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "societe", [], "any", false, false, false, 179), "html", null, true);
            echo "</td>
                                        <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 180)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 180)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ville", [], "any", false, false, false, 181), "html", null, true);
            echo "</td>
                                        <td>";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "opca", [], "any", false, false, false, 182), "html", null, true);
            echo "</td>
                                        <td style=\"display: none;\">";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "commercial", [], "any", false, false, false, 183), "html", null, true);
            echo "</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "                            </tbody>
                            </table>
                    </div>
                        <div class=\"w-100\"></div>
                    <div class=\"col\">
                    <div class=\"text-center\" id=\"AncreNote\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller", ["rappelleur" => (isset($context["currentUser"]) || array_key_exists("currentUser", $context) ? $context["currentUser"] : (function () { throw new RuntimeError('Variable "currentUser" does not exist.', 192, $this->source); })()), "actionStatut" => 1]), "html", null, true);
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
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationNoteResponsable"]) || array_key_exists("paginationNoteResponsable", $context) ? $context["paginationNoteResponsable"] : (function () { throw new RuntimeError('Variable "paginationNoteResponsable" does not exist.', 207, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 208
            echo "                                    <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/showNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 208)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["noteConstant"]) || array_key_exists("noteConstant", $context) ? $context["noteConstant"] : (function () { throw new RuntimeError('Variable "noteConstant" does not exist.', 209, $this->source); })()), "getTableLibelle", [0 => twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 209)], "method", false, false, false, 209), "html", null, true);
            echo "</td>
                                        ";
            // line 210
            if ((twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 210) == "1_formation_dossier")) {
                // line 211
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "client", [], "any", false, false, false, 211), "html", null, true);
                echo "</td>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 212
$context["note"], "nomTable", [], "any", false, false, false, 212) == "lead") && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["note"], "societe", [], "any", false, false, false, 212)))) {
                // line 213
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "nomLead", [], "any", false, false, false, 213)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "prenomLead", [], "any", false, false, false, 213)), "html", null, true);
                echo "</td>
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 214
$context["note"], "nomTable", [], "any", false, false, false, 214) == "lead")) {
                // line 215
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "societe", [], "any", false, false, false, 215), "html", null, true);
                echo "</td>
                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 216
$context["note"], "nomTable", [], "any", false, false, false, 216) == "1_contact") && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["note"], "contact", [], "any", false, false, false, 216)))) {
                // line 217
                echo "                                        <td>";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "nom", [], "any", false, false, false, 217)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "prenom", [], "any", false, false, false, 217)), "html", null, true);
                echo "</td>      
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 218
$context["note"], "nomTable", [], "any", false, false, false, 218) == "1_contact")) {
                // line 219
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "contact", [], "any", false, false, false, 219), "html", null, true);
                echo "</td>
                                        ";
            } else {
                // line 221
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "nonCon", [], "any", false, false, false, 221), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 223
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "date", [], "any", false, false, false, 223), "d/m/Y"), "html", null, true);
            echo "</td>
                                        <td>";
            // line 224
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "noteCommentaire", [], "any", false, false, false, 224), "html", null, true);
            echo "</td>
                                        <td>";
            // line 225
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "action", [], "any", false, false, false, 225), "html", null, true);
            echo "</td>
                                        <td style=\"display: none;\">";
            // line 226
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "statutAction", [], "any", false, false, false, 226), "html", null, true);
            echo "</td>
                                        
                                        ";
            // line 228
            if (((twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 228) <= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 228, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 228) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 228, $this->source); })()), "-4 day")))) {
                // line 229
                echo "
                                                <td class=\"bg-warning\">";
                // line 230
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 230), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 232
$context["note"], "dateAction", [], "any", false, false, false, 232) <= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 232, $this->source); })())) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 232) >= twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 232, $this->source); })()), "-9 day")))) {
                // line 233
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 234
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 234), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 236
$context["note"], "dateAction", [], "any", false, false, false, 236) < twig_date_modify_filter($this->env, (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 236, $this->source); })()), "-9 day"))) {
                // line 237
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 238
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 238), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 240
$context["note"], "dateAction", [], "any", false, false, false, 240) >= (isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 240, $this->source); })()))) {
                // line 241
                echo "
                                                <td class=\"bg-success text-white\">";
                // line 242
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 242), "d-m-Y"), "html", null, true);
                echo "</td>        

                                        ";
            }
            // line 245
            echo "
                                            <td style=\"display: none;\">";
            // line 246
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "rappelleur", [], "any", false, false, false, 246), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "responsable", [], "any", false, false, false, 246), "html", null, true);
            echo "</td>
                                            <td><a  href=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("note.update", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 247)]), "html", null, true);
            echo "#AncreNote\" class=\"btn btn-success\">Fait</a></td>
                                        </tr>                                  
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 250
        echo "                                </tbody>
                        </table>
                    </div>                 
                </div>
                
                    <div class=\"col\"><div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Lead_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, (isset($context["idCommercial"]) || array_key_exists("idCommercial", $context) ? $context["idCommercial"] : (function () { throw new RuntimeError('Variable "idCommercial" does not exist.', 256, $this->source); })()), "id", [], "any", false, false, false, 256)]), "html", null, true);
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
        // line 269
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "user", [], "any", false, false, false, 269), "idutilisateur", [], "any", false, false, false, 269) == 29)) {
            // line 270
            echo "                                        <th>Commercial</th>
                                    ";
        } else {
            // line 272
            echo "                                    ";
        }
        // line 273
        echo "                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 276
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationLead"]) || array_key_exists("paginationLead", $context) ? $context["paginationLead"] : (function () { throw new RuntimeError('Variable "paginationLead" does not exist.', 276, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 277
            echo "                                    <tr data-lead-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 277), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_lead_Controller/editLead", ["id" => twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 277)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["lead"], "nom", [], "any", false, false, false, 278)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["lead"], "prenom", [], "any", false, false, false, 278)), "html", null, true);
            echo "</td>
                                        <td>";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "societe", [], "any", false, false, false, 279), "html", null, true);
            echo "</td>
                                        <td>";
            // line 280
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "telephone", [], "any", false, false, false, 280), "html", null, true);
            echo "</td>
                                        <td>";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "email", [], "any", false, false, false, 281), "html", null, true);
            echo "</td>
                                        <td>";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "ville", [], "any", false, false, false, 282), "html", null, true);
            echo "</td>
                                        <td>";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "origine", [], "any", false, false, false, 283), "html", null, true);
            echo "</td>
                                        <td>";
            // line 284
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "statut", [], "any", false, false, false, 284), "html", null, true);
            echo "</td>
                                    ";
            // line 285
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 285, $this->source); })()), "user", [], "any", false, false, false, 285), "idutilisateur", [], "any", false, false, false, 285) == 29)) {
                // line 286
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "commercial", [], "any", false, false, false, 286), "html", null, true);
                echo "</td>
                                    ";
            } else {
                // line 288
                echo "                                        <td style=\"display: none;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "commercial", [], "any", false, false, false, 288), "html", null, true);
                echo "</td>
                                    ";
            }
            // line 290
            echo "                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        echo "                            </tbody>
                            </table>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 295
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 296
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
        <script>
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
        return array (  794 => 296,  784 => 295,  772 => 292,  765 => 290,  759 => 288,  753 => 286,  751 => 285,  747 => 284,  743 => 283,  739 => 282,  735 => 281,  731 => 280,  727 => 279,  721 => 278,  714 => 277,  710 => 276,  705 => 273,  702 => 272,  698 => 270,  696 => 269,  680 => 256,  672 => 250,  663 => 247,  658 => 246,  655 => 245,  649 => 242,  646 => 241,  644 => 240,  639 => 238,  636 => 237,  634 => 236,  629 => 234,  626 => 233,  624 => 232,  619 => 230,  616 => 229,  614 => 228,  609 => 226,  605 => 225,  601 => 224,  596 => 223,  590 => 221,  584 => 219,  582 => 218,  575 => 217,  573 => 216,  568 => 215,  566 => 214,  559 => 213,  557 => 212,  552 => 211,  550 => 210,  546 => 209,  541 => 208,  537 => 207,  519 => 192,  511 => 186,  502 => 183,  498 => 182,  494 => 181,  488 => 180,  484 => 179,  480 => 178,  473 => 177,  469 => 176,  453 => 163,  446 => 158,  437 => 155,  433 => 154,  429 => 153,  423 => 152,  419 => 151,  415 => 150,  408 => 149,  404 => 148,  388 => 135,  380 => 129,  373 => 127,  367 => 124,  364 => 123,  362 => 122,  357 => 120,  354 => 119,  352 => 118,  347 => 116,  344 => 115,  342 => 114,  337 => 112,  334 => 111,  331 => 110,  325 => 108,  319 => 106,  317 => 105,  312 => 104,  310 => 103,  305 => 102,  302 => 101,  296 => 99,  290 => 97,  288 => 96,  284 => 95,  280 => 94,  272 => 93,  268 => 92,  264 => 91,  260 => 90,  253 => 89,  249 => 88,  229 => 71,  220 => 64,  211 => 61,  208 => 60,  202 => 57,  199 => 56,  193 => 53,  190 => 52,  188 => 51,  183 => 49,  180 => 48,  178 => 47,  173 => 45,  170 => 44,  168 => 43,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  144 => 37,  140 => 36,  136 => 35,  130 => 34,  124 => 33,  101 => 13,  92 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu - CRM Aprentiv v2.0{% endblock %}

{% block body %}

    <h1 class=\"text-center mt-5\">{{ app.user }}</h1>

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
        <script>
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
        {% endblock %}
", "home/portail.html.twig", "/home/jeremy/Bureau/project/app/templates/home/portail.html.twig");
    }
}
