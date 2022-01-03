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
class __TwigTemplate_d7e68e9d9b1e9605f5125081195e168eb084ee116e33e1f76b0e50611c3fb6ea extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/portail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Menu - CRM Aprentiv v2.0";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<h1 class=\"text-center mt-5\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6), "html", null, true);
        echo "</h1>


            <div class=\"row\">
                 <div class=\"col col-md-3 mb-3 mx-auto\">
                        <canvas id=\"propals\" width=\"100\" height=\"100\"></canvas>
                    </div> 
                    ";
        // line 13
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 13) == "MUNIER Pascal")) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller", ["commercial" => ($context["nomCommercial"] ?? null)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationDossier"] ?? null));
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
            if (((twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 57) >= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 57) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "+5 day")))) {
                // line 58
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 59), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 61
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 61) >= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 61) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "+10 day")))) {
                // line 62
                echo "
                                                <td class=\"bg-warning\">";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 63), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 65
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 65) >= ($context["currentDate"] ?? null))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 85)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationPropal"] ?? null));
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
            if (((twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 124) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-1 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 124) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-4 day")))) {
                // line 125
                echo "
                                                <td class=\"bg-warning\">";
                // line 126
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 126), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 128
$context["propal"], "daterelance", [], "any", false, false, false, 128) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-5 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 128) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-9 day")))) {
                // line 129
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 130
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 130), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 132
$context["propal"], "daterelance", [], "any", false, false, false, 132) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-10 day"))) {
                // line 133
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 134
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 134), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 136
$context["propal"], "daterelance", [], "any", false, false, false, 136) >= ($context["currentDate"] ?? null))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 149)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationClient"] ?? null));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["idType" => 1, "commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 177)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationProspect"] ?? null));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller", ["rappelleur" => ($context["currentUser"] ?? null), "actionStatut" => 1]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationNoteResponsable"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 222
            echo "                                    <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/showNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 222)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 223
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noteConstant"] ?? null), "getTableLibelle", [0 => twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 223)], "method", false, false, false, 223), "html", null, true);
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
            if (((twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 242) <= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 242) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-4 day")))) {
                // line 243
                echo "
                                                <td class=\"bg-warning\">";
                // line 244
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 244), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 246
$context["note"], "dateAction", [], "any", false, false, false, 246) <= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 246) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-9 day")))) {
                // line 247
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 248
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 248), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 250
$context["note"], "dateAction", [], "any", false, false, false, 250) < twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-9 day"))) {
                // line 251
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 252
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 252), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 254
$context["note"], "dateAction", [], "any", false, false, false, 254) >= ($context["currentDate"] ?? null))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Lead_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 270)]), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 283), "idutilisateur", [], "any", false, false, false, 283) == 29)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationLead"] ?? null));
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 299), "idutilisateur", [], "any", false, false, false, 299) == 29)) {
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
    }

    // line 309
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["propalStats"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["propalStats"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["propalStats"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 378) == "MUNIER Pascal")) {
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["leadStats"] ?? null), "enCours", [], "any", false, false, false, 386), "html", null, true);
            echo "), parseInt(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["leadStats"] ?? null), "dClient", [], "any", false, false, false, 386), "html", null, true);
            echo "), parseInt(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["leadStats"] ?? null), "dProspect", [], "any", false, false, false, 386), "html", null, true);
            echo "), parseInt(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["leadStats"] ?? null), "sSuite", [], "any", false, false, false, 386), "html", null, true);
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noteStats"] ?? null), "fait", [], "any", false, false, false, 433), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noteStats"] ?? null), "aFaire", [], "any", false, false, false, 433), "html", null, true);
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
        return array (  959 => 471,  916 => 433,  860 => 386,  851 => 379,  849 => 378,  801 => 337,  770 => 310,  766 => 309,  760 => 306,  753 => 304,  747 => 302,  741 => 300,  739 => 299,  735 => 298,  731 => 297,  727 => 296,  723 => 295,  719 => 294,  715 => 293,  709 => 292,  702 => 291,  698 => 290,  693 => 287,  690 => 286,  686 => 284,  684 => 283,  668 => 270,  660 => 264,  651 => 261,  646 => 260,  643 => 259,  637 => 256,  634 => 255,  632 => 254,  627 => 252,  624 => 251,  622 => 250,  617 => 248,  614 => 247,  612 => 246,  607 => 244,  604 => 243,  602 => 242,  597 => 240,  593 => 239,  589 => 238,  584 => 237,  578 => 235,  572 => 233,  570 => 232,  563 => 231,  561 => 230,  556 => 229,  554 => 228,  547 => 227,  545 => 226,  540 => 225,  538 => 224,  534 => 223,  529 => 222,  525 => 221,  507 => 206,  499 => 200,  490 => 197,  486 => 196,  482 => 195,  476 => 194,  472 => 193,  468 => 192,  461 => 191,  457 => 190,  441 => 177,  434 => 172,  425 => 169,  421 => 168,  417 => 167,  411 => 166,  407 => 165,  403 => 164,  396 => 163,  392 => 162,  376 => 149,  368 => 143,  361 => 141,  355 => 138,  352 => 137,  350 => 136,  345 => 134,  342 => 133,  340 => 132,  335 => 130,  332 => 129,  330 => 128,  325 => 126,  322 => 125,  319 => 124,  313 => 122,  307 => 120,  305 => 119,  300 => 118,  298 => 117,  293 => 116,  290 => 115,  284 => 113,  278 => 111,  276 => 110,  272 => 109,  268 => 108,  260 => 107,  256 => 106,  252 => 105,  248 => 104,  241 => 103,  237 => 102,  217 => 85,  208 => 78,  199 => 75,  196 => 74,  190 => 71,  187 => 70,  181 => 67,  178 => 66,  176 => 65,  171 => 63,  168 => 62,  166 => 61,  161 => 59,  158 => 58,  156 => 57,  152 => 56,  148 => 55,  144 => 54,  140 => 53,  136 => 52,  132 => 51,  128 => 50,  124 => 49,  118 => 48,  112 => 47,  89 => 27,  81 => 21,  72 => 14,  70 => 13,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/portail.html.twig", "/home/jeremy/Bureau/project/app/templates/home/portail.html.twig");
    }
}
