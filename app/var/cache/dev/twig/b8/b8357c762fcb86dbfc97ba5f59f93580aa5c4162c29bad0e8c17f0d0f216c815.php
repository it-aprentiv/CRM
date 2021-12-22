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

/* encaissement/edit.html.twig */
class __TwigTemplate_1ebf4ae39c19310252ab20e17434af44e1cce0bcc25b6d51bd56440a7d2341ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/edit.html.twig"));

        // line 5
        $context["textButton"] = "MAJ encaissement";
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "encaissement/edit.html.twig", 1);
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

        echo "Encaissements Edit - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Encaissement_Controller");
        echo "\" title=\"Liste des encaissements\">Liste des
                        encaissements</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Encaissement</li>
            </ol>

            <div>
                ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Encaissements")) {
            // line 28
            echo "                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier l'encaissement
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                ";
        }
        // line 37
        echo "            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS ENCAISSEMENTS</h2>

    ";
        // line 43
        $this->loadTemplate("encaissement/form_encaissement.html.twig", "encaissement/edit.html.twig", 43)->display($context);
        // line 44
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    ";
        // line 55
        $this->loadTemplate("Common/commentaire-js.html.twig", "encaissement/edit.html.twig", 55)->display($context);
        // line 56
        echo "
    <script>
        \$(function() {
            ";
        // line 60
        echo "            \$('.js-datepicker').each(function() {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });

            ";
        // line 70
        echo "            \$('#encaissement_societes').select2({
                placeholder: '--Sélectionnez--',
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.client.asynch-search");
        echo "',
                    data: function(params) {
                        var query = {
                            search: params.term,
                            byid: true,
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                },
            });

            let societeData = {};
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["societes_liees"]) || array_key_exists("societes_liees", $context) ? $context["societes_liees"] : (function () { throw new RuntimeError('Variable "societes_liees" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["societe"]) {
            // line 89
            echo "            societeData = {
                id: \"";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "idSociete", [], "any", false, false, false, 90), "html", null, true);
            echo "\",
                text: '";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["societe"], "societe", [], "any", false, false, false, 91), "html", null, true);
            echo "',
            };

            var newOption = new Option(societeData.text, societeData.id, true, true);
            \$('#encaissement_societes').append(newOption).trigger('change');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['societe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            ";
        // line 98
        echo "
            \$('#encaissement_opca').select2({
                placeholder: '--Sélectionnez--',
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.list-asynch");
        echo "',
                    data: function(params) {
                        var query = {
                            search: params.term,
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                },
            });
            ";
        // line 114
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["encaissement_infos"]) || array_key_exists("encaissement_infos", $context) ? $context["encaissement_infos"] : (function () { throw new RuntimeError('Variable "encaissement_infos" does not exist.', 114, $this->source); })()), "opca_id", [], "any", false, false, false, 114))) {
            // line 115
            echo "            let opcaData = {
                id: \"";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["encaissement_infos"]) || array_key_exists("encaissement_infos", $context) ? $context["encaissement_infos"] : (function () { throw new RuntimeError('Variable "encaissement_infos" does not exist.', 116, $this->source); })()), "opca_id", [], "any", false, false, false, 116), "html", null, true);
            echo "\",
                text: '";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["encaissement_infos"]) || array_key_exists("encaissement_infos", $context) ? $context["encaissement_infos"] : (function () { throw new RuntimeError('Variable "encaissement_infos" does not exist.', 117, $this->source); })()), "opca_nom_str", [], "any", false, false, false, 117), "html", null, true);
            echo "',
            };

            var newOption = new Option(opcaData.text, opcaData.id, true, true);
            \$('#encaissement_opca').append(newOption).trigger('change');
            ";
        }
        // line 123
        echo "
            \$('#autocomplete-facture').select2({
                placeholder: '-- Sélectionnez une référence facture --',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.facture.asynch-search");
        echo "',
                    data: function(params) {
                        var query = {
                            search: params.term,
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                },
            });

            ";
        // line 141
        echo "            \$('#add-facture-avoir').on('click', function(e) {
                e.preventDefault();
                const facId = \$('#autocomplete-facture').val();

                if (facId) {
                    // Récupérer le form
                    let factureAvoirInfosRequest = \$.ajax({
                        url: '";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.encaissement.factures-avoirs-infos");
        echo "',
                        method: 'POST',
                        data: {fid: facId},
                    });

                    factureAvoirInfosRequest.done(function(response) {
                        \$(response).appendTo(\$('#factures-wrapper'));
                    });
                    // Ajouter le form facture/avoir
                }
            });
            ";
        // line 160
        echo "
            \$(document).on('click', '.remove-facture-liee',function () {
                let \$factureItem = \$(this).closest('fieldset');
                \$factureItem.remove();
            });
            
        });
    </script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.date-until-now').datepicker(
                {
                    'format':'dd/mm/yyyy',
                    'autoclose': true,
                    'endDate': '+0d',
                    'language': 'fr',
                }
            );
    
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "encaissement/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 160,  330 => 148,  321 => 141,  307 => 129,  299 => 123,  290 => 117,  286 => 116,  283 => 115,  281 => 114,  268 => 104,  260 => 98,  258 => 97,  246 => 91,  242 => 90,  239 => 89,  235 => 88,  219 => 75,  212 => 70,  201 => 60,  196 => 56,  194 => 55,  184 => 49,  174 => 48,  162 => 44,  160 => 43,  152 => 37,  141 => 28,  139 => 27,  129 => 20,  124 => 18,  119 => 15,  109 => 14,  93 => 8,  83 => 7,  64 => 3,  53 => 1,  51 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Encaissements Edit - CRM Aprentiv v2.0{% endblock %}

{% set textButton = 'MAJ encaissement' %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <a href=\"{{ path('Liste_Encaissement_Controller') }}\" title=\"Liste des encaissements\">Liste des
                        encaissements</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Encaissement</li>
            </ol>

            <div>
                {% if is_granted('edit', 'Encaissements') %}
                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier l'encaissement
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS ENCAISSEMENTS</h2>

    {% include 'encaissement/form_encaissement.html.twig' %}


{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    {% include 'Common/commentaire-js.html.twig' %}

    <script>
        \$(function() {
            {# Utilisation date picker pour les filtres de type date #}
            \$('.js-datepicker').each(function() {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });

            {# Autocompletion recherche societe -->> #}
            \$('#encaissement_societes').select2({
                placeholder: '--Sélectionnez--',
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.dossier.client.asynch-search') }}',
                    data: function(params) {
                        var query = {
                            search: params.term,
                            byid: true,
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                },
            });

            let societeData = {};
            {% for societe in societes_liees %}
            societeData = {
                id: \"{{ societe.idSociete }}\",
                text: '{{ societe.societe }}',
            };

            var newOption = new Option(societeData.text, societeData.id, true, true);
            \$('#encaissement_societes').append(newOption).trigger('change');
            {% endfor %}
            {# Autocompletion recherche commercical <<-- #}

            \$('#encaissement_opca').select2({
                placeholder: '--Sélectionnez--',
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.opca.list-asynch') }}',
                    data: function(params) {
                        var query = {
                            search: params.term,
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                },
            });
            {% if encaissement_infos.opca_id is not null %}
            let opcaData = {
                id: \"{{ encaissement_infos.opca_id }}\",
                text: '{{ encaissement_infos.opca_nom_str }}',
            };

            var newOption = new Option(opcaData.text, opcaData.id, true, true);
            \$('#encaissement_opca').append(newOption).trigger('change');
            {% endif %}

            \$('#autocomplete-facture').select2({
                placeholder: '-- Sélectionnez une référence facture --',
                minimumInputLength: 2,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.facture.asynch-search') }}',
                    data: function(params) {
                        var query = {
                            search: params.term,
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                },
            });

            {#  Ajout de nouvelle facture --> #}
            \$('#add-facture-avoir').on('click', function(e) {
                e.preventDefault();
                const facId = \$('#autocomplete-facture').val();

                if (facId) {
                    // Récupérer le form
                    let factureAvoirInfosRequest = \$.ajax({
                        url: '{{ path('crm.encaissement.factures-avoirs-infos') }}',
                        method: 'POST',
                        data: {fid: facId},
                    });

                    factureAvoirInfosRequest.done(function(response) {
                        \$(response).appendTo(\$('#factures-wrapper'));
                    });
                    // Ajouter le form facture/avoir
                }
            });
            {#  Ajout de nouvelle facture <-- #}

            \$(document).on('click', '.remove-facture-liee',function () {
                let \$factureItem = \$(this).closest('fieldset');
                \$factureItem.remove();
            });
            
        });
    </script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.date-until-now').datepicker(
                {
                    'format':'dd/mm/yyyy',
                    'autoclose': true,
                    'endDate': '+0d',
                    'language': 'fr',
                }
            );
    
        });
    </script>
{% endblock %}", "encaissement/edit.html.twig", "/home/jeremy/Bureau/project/app/templates/encaissement/edit.html.twig");
    }
}
