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

/* data-fix/entities-error-500.html.twig */
class __TwigTemplate_5146076a913058261f06ddb0e728ccdde81206f1f8b2e89696f1813cc062c5fb extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data-fix/entities-error-500.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "data-fix/entities-error-500.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "data-fix/entities-error-500.html.twig", 1);
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

        echo "Client/Prospect - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data fix</li>
            </ol>
            <div>
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update.generate-form-asynch", ["id" => 0]);
        echo "\" class=\" open-user-form\"><i class=\"fa fa-plus-circle\"></i> Ajouter un utilisateur</a>
            </div>
        </div>
    </nav>

    <h1>Liste des fiches avec erreur 500</h1>


    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
            <h2 class=\"text-center mt-2 text-primary\">CLIENTS/PROSPECTS liés à des OPCO supprimés</h2>

            <p class=\"bg-light p-1\">
                ";
        // line 31
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["a_clients_with_bad_OPCO_links"]) || array_key_exists("a_clients_with_bad_OPCO_links", $context) ? $context["a_clients_with_bad_OPCO_links"] : (function () { throw new RuntimeError('Variable "a_clients_with_bad_OPCO_links" does not exist.', 31, $this->source); })())), "html", null, true);
        echo " fiche(s) en erreur !
            </p>
            
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Client</th>
                        <th>Commercial</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a_clients_with_bad_OPCO_links"]) || array_key_exists("a_clients_with_bad_OPCO_links", $context) ? $context["a_clients_with_bad_OPCO_links"] : (function () { throw new RuntimeError('Variable "a_clients_with_bad_OPCO_links" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 46
            echo "                        <tr>
                            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                            <td>";
            // line 48
            echo (((twig_get_attribute($this->env, $this->source, $context["contact"], "id_type", [], "any", false, false, false, 48) == 1)) ? ("Client") : ("Prospect"));
            echo "</td>
                            <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "nom_str", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "collaborateur", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" target=\"_blank\">Vérifier</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </tbody>
            </table>


            <div class=\"row text-right\">
                <div class=\"col-md-12\">
                    <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data-fix.contact.client.fix-bad-opco-links");
        echo "\" class=\"text-center btn btn-warning text-bold\">Corriger les erreurs</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
             <h2 class=\"text-center mt-2 text-primary\">DOSSIERS liés à des OPCO supprimés ou innexistants</h2>

            <p class=\"bg-light p-1\">
                ";
        // line 70
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["a_dossiers_with_bad_opco_links"]) || array_key_exists("a_dossiers_with_bad_opco_links", $context) ? $context["a_dossiers_with_bad_opco_links"] : (function () { throw new RuntimeError('Variable "a_dossiers_with_bad_opco_links" does not exist.', 70, $this->source); })())), "html", null, true);
        echo " fiche(s) en erreur !
            </p>
            
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ref dossier</th>
                        <th>Commercial</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a_dossiers_with_bad_opco_links"]) || array_key_exists("a_dossiers_with_bad_opco_links", $context) ? $context["a_dossiers_with_bad_opco_links"] : (function () { throw new RuntimeError('Variable "a_dossiers_with_bad_opco_links" does not exist.', 83, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 84
            echo "                        <tr>
                            <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                            <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "ref", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "nom_prenom", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" target=\"_blank\">Vérifier</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                </tbody>
            </table>


            <div class=\"row text-right\">
                <div class=\"col-md-12\">
                    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data-fix.dossier.fix-bad-opco-links", ["t" => "OPCO"]);
        echo "\" class=\"text-center btn btn-warning text-bold\">Corriger les erreurs</a>
                </div>
            </div>

        </div>

    </div>
                
                
    
    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
             <h2 class=\"text-center mt-2 text-primary\">DOSSIERS liés à des clients supprimés</h2>

            <p class=\"bg-light p-1\">
                ";
        // line 114
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["a_dossiers_with_bad_clients_links"]) || array_key_exists("a_dossiers_with_bad_clients_links", $context) ? $context["a_dossiers_with_bad_clients_links"] : (function () { throw new RuntimeError('Variable "a_dossiers_with_bad_clients_links" does not exist.', 114, $this->source); })())), "html", null, true);
        echo " fiche(s) en erreur !
            </p>
            
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ref dossier</th>
                        <th>Commercial</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["a_dossiers_with_bad_clients_links"]) || array_key_exists("a_dossiers_with_bad_clients_links", $context) ? $context["a_dossiers_with_bad_clients_links"] : (function () { throw new RuntimeError('Variable "a_dossiers_with_bad_clients_links" does not exist.', 127, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 128
            echo "                        <tr>
                            <td>";
            // line 129
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 129), "html", null, true);
            echo "</td>
                            <td>";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "ref", [], "any", false, false, false, 130), "html", null, true);
            echo "</td>
                            <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "nom_prenom", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 133)]), "html", null, true);
            echo "\" target=\"_blank\">Vérifier</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "                </tbody>
            </table>


            <div class=\"row text-right\">
                <div class=\"col-md-12\">
                    <a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("data-fix.dossier.fix-bad-opco-links", ["t" => "client"]);
        echo "\" class=\"text-center btn btn-warning text-bold\">Corriger les erreurs</a>
                </div>
            </div>

        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "data-fix/entities-error-500.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 143,  329 => 137,  319 => 133,  314 => 131,  310 => 130,  306 => 129,  303 => 128,  299 => 127,  283 => 114,  265 => 99,  257 => 93,  247 => 89,  242 => 87,  238 => 86,  234 => 85,  231 => 84,  227 => 83,  211 => 70,  200 => 62,  192 => 56,  182 => 52,  177 => 50,  173 => 49,  169 => 48,  165 => 47,  162 => 46,  158 => 45,  141 => 31,  125 => 18,  118 => 14,  113 => 11,  103 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Client/Prospect - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Data fix</li>
            </ol>
            <div>
                <a href=\"{{ path('user.update.generate-form-asynch', { id : 0 } ) }}\" class=\" open-user-form\"><i class=\"fa fa-plus-circle\"></i> Ajouter un utilisateur</a>
            </div>
        </div>
    </nav>

    <h1>Liste des fiches avec erreur 500</h1>


    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
            <h2 class=\"text-center mt-2 text-primary\">CLIENTS/PROSPECTS liés à des OPCO supprimés</h2>

            <p class=\"bg-light p-1\">
                {{ a_clients_with_bad_OPCO_links | length }} fiche(s) en erreur !
            </p>
            
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Type</th>
                        <th>Client</th>
                        <th>Commercial</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for contact in a_clients_with_bad_OPCO_links %}
                        <tr>
                            <td>{{ contact.id }}</td>
                            <td>{{ contact.id_type == 1 ? 'Client' : 'Prospect' }}</td>
                            <td>{{ contact.nom_str }}</td>
                            <td>{{ contact.collaborateur }}</td>
                            <td>
                                <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : contact.id} ) }}\" target=\"_blank\">Vérifier</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>


            <div class=\"row text-right\">
                <div class=\"col-md-12\">
                    <a href=\"{{ path('data-fix.contact.client.fix-bad-opco-links') }}\" class=\"text-center btn btn-warning text-bold\">Corriger les erreurs</a>
                </div>
            </div>
        </div>
        <div class=\"col-md-6\">
             <h2 class=\"text-center mt-2 text-primary\">DOSSIERS liés à des OPCO supprimés ou innexistants</h2>

            <p class=\"bg-light p-1\">
                {{ a_dossiers_with_bad_opco_links | length }} fiche(s) en erreur !
            </p>
            
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ref dossier</th>
                        <th>Commercial</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for dossier in a_dossiers_with_bad_opco_links %}
                        <tr>
                            <td>{{ dossier.id }}</td>
                            <td>{{ dossier.ref }}</td>
                            <td>{{ dossier.nom_prenom }}</td>
                            <td>
                                <a href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', { id : dossier.id} ) }}\" target=\"_blank\">Vérifier</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>


            <div class=\"row text-right\">
                <div class=\"col-md-12\">
                    <a href=\"{{ path('data-fix.dossier.fix-bad-opco-links', {t: 'OPCO'}) }}\" class=\"text-center btn btn-warning text-bold\">Corriger les erreurs</a>
                </div>
            </div>

        </div>

    </div>
                
                
    
    <div class=\"row mt-5\">
        <div class=\"col-md-6\">
             <h2 class=\"text-center mt-2 text-primary\">DOSSIERS liés à des clients supprimés</h2>

            <p class=\"bg-light p-1\">
                {{ a_dossiers_with_bad_clients_links | length }} fiche(s) en erreur !
            </p>
            
            <table class=\"table\">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Ref dossier</th>
                        <th>Commercial</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    {% for dossier in a_dossiers_with_bad_clients_links %}
                        <tr>
                            <td>{{ dossier.id }}</td>
                            <td>{{ dossier.ref }}</td>
                            <td>{{ dossier.nom_prenom }}</td>
                            <td>
                                <a href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', { id : dossier.id} ) }}\" target=\"_blank\">Vérifier</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>


            <div class=\"row text-right\">
                <div class=\"col-md-12\">
                    <a href=\"{{ path('data-fix.dossier.fix-bad-opco-links', {t: 'client'}) }}\" class=\"text-center btn btn-warning text-bold\">Corriger les erreurs</a>
                </div>
            </div>

        </div>

    </div>

{% endblock %}", "data-fix/entities-error-500.html.twig", "/home/jeremy/Bureau/project/app/templates/data-fix/entities-error-500.html.twig");
    }
}
