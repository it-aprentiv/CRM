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
        echo "
    <h1 class=\"text-center mt-5\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>

        <a class=\"btn btn-info btn-portail mb-3\" href=\"#\" style=\" width:10% !important;margin:0 auto !important;display:block !important;float:none !important;\" onclick=\"btnlegend(\$(this))\">LEGENDE</a>
                <div class=\"row\">
                    <div class=\"col\">
                    <div class=\"text-center\">
                        <a class=\"btn btn-info btn-portail\" href=\"";
        // line 13
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
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationDossier"] ?? null));
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
            if (((twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 43) >= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 43) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "+5 day")))) {
                // line 44
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 45), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 47
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 47) >= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 47) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "+10 day")))) {
                // line 48
                echo "
                                                <td class=\"bg-warning\">";
                // line 49
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 49), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 51
$context["dossier"], "dateFinPeriode", [], "any", false, false, false, 51) >= ($context["currentDate"] ?? null))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 71)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationPropal"] ?? null));
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
            if (((twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 110) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-1 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 110) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-4 day")))) {
                // line 111
                echo "
                                                <td class=\"bg-warning\">";
                // line 112
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 112), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 114
$context["propal"], "daterelance", [], "any", false, false, false, 114) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-5 day")) && (twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 114) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-9 day")))) {
                // line 115
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 116
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 116), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 118
$context["propal"], "daterelance", [], "any", false, false, false, 118) <= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-10 day"))) {
                // line 119
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 120
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "daterelance", [], "any", false, false, false, 120), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 122
$context["propal"], "daterelance", [], "any", false, false, false, 122) >= ($context["currentDate"] ?? null))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 135)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationClient"] ?? null));
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller", ["idType" => 1, "commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 163)]), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationProspect"] ?? null));
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
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paginationNoteResponsable"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 208
            echo "                                    <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/showNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 208)]), "html", null, true);
            echo "\">
                                        <td>";
            // line 209
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noteConstant"] ?? null), "getTableLibelle", [0 => twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 209)], "method", false, false, false, 209), "html", null, true);
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
            if (((twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 228) <= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 228) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-4 day")))) {
                // line 229
                echo "
                                                <td class=\"bg-warning\">";
                // line 230
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 230), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 232
$context["note"], "dateAction", [], "any", false, false, false, 232) <= ($context["currentDate"] ?? null)) && (twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 232) >= twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-9 day")))) {
                // line 233
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 234
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 234), "d-m-Y"), "html", null, true);
                echo "</td>

                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 236
$context["note"], "dateAction", [], "any", false, false, false, 236) < twig_date_modify_filter($this->env, ($context["currentDate"] ?? null), "-9 day"))) {
                // line 237
                echo "
                                                <td class=\"bg-danger text-white\">";
                // line 238
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 238), "d-m-Y"), "html", null, true);
                echo "<i class=\"fas fa-exclamation-triangle\"></i></td>
                                        
                                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 240
$context["note"], "dateAction", [], "any", false, false, false, 240) >= ($context["currentDate"] ?? null))) {
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Lead_Controller", ["commercial" => twig_get_attribute($this->env, $this->source, ($context["idCommercial"] ?? null), "id", [], "any", false, false, false, 256)]), "html", null, true);
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 269), "idutilisateur", [], "any", false, false, false, 269) == 29)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["paginationLead"] ?? null));
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
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 285), "idutilisateur", [], "any", false, false, false, 285) == 29)) {
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
    }

    // line 295
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  752 => 296,  748 => 295,  742 => 292,  735 => 290,  729 => 288,  723 => 286,  721 => 285,  717 => 284,  713 => 283,  709 => 282,  705 => 281,  701 => 280,  697 => 279,  691 => 278,  684 => 277,  680 => 276,  675 => 273,  672 => 272,  668 => 270,  666 => 269,  650 => 256,  642 => 250,  633 => 247,  628 => 246,  625 => 245,  619 => 242,  616 => 241,  614 => 240,  609 => 238,  606 => 237,  604 => 236,  599 => 234,  596 => 233,  594 => 232,  589 => 230,  586 => 229,  584 => 228,  579 => 226,  575 => 225,  571 => 224,  566 => 223,  560 => 221,  554 => 219,  552 => 218,  545 => 217,  543 => 216,  538 => 215,  536 => 214,  529 => 213,  527 => 212,  522 => 211,  520 => 210,  516 => 209,  511 => 208,  507 => 207,  489 => 192,  481 => 186,  472 => 183,  468 => 182,  464 => 181,  458 => 180,  454 => 179,  450 => 178,  443 => 177,  439 => 176,  423 => 163,  416 => 158,  407 => 155,  403 => 154,  399 => 153,  393 => 152,  389 => 151,  385 => 150,  378 => 149,  374 => 148,  358 => 135,  350 => 129,  343 => 127,  337 => 124,  334 => 123,  332 => 122,  327 => 120,  324 => 119,  322 => 118,  317 => 116,  314 => 115,  312 => 114,  307 => 112,  304 => 111,  301 => 110,  295 => 108,  289 => 106,  287 => 105,  282 => 104,  280 => 103,  275 => 102,  272 => 101,  266 => 99,  260 => 97,  258 => 96,  254 => 95,  250 => 94,  242 => 93,  238 => 92,  234 => 91,  230 => 90,  223 => 89,  219 => 88,  199 => 71,  190 => 64,  181 => 61,  178 => 60,  172 => 57,  169 => 56,  163 => 53,  160 => 52,  158 => 51,  153 => 49,  150 => 48,  148 => 47,  143 => 45,  140 => 44,  138 => 43,  134 => 42,  130 => 41,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  106 => 35,  100 => 34,  94 => 33,  71 => 13,  62 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/portail.html.twig", "/var/www/templates/home/portail.html.twig");
    }
}
