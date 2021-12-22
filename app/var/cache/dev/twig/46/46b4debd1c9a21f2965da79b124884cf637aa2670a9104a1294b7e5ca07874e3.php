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

/* facture/voir.html.twig */
class __TwigTemplate_4116b1c84e533dfe5a16dad7ea783d06139ecbcec0756d3cd3f30b1c6d7b5182 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/voir.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/voir.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/voir.html.twig", 1);
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

        echo "Facture - CRM Aprentiv v2.0";
        
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
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wickedpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Factures_Avoirs_Controller");
        echo "\">Liste Factures et Avoirs</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails facture/avoir</li>
            </ol>

            <div>
                ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Factures / Avoirs dossiers")) {
            // line 28
            echo "                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier
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

    <h2 class=\"text-center my-3 text-primary\" id=\"heading-title\">DETAIL DE LA FACTURE ET AVOIR</h2>
    ";
        // line 43
        $this->loadTemplate("facture/form.html.twig", "facture/voir.html.twig", 43)->display(twig_array_merge($context, ["montant_htn_htn1" => (((isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context))) ? ((isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context) ? $context["montant_htn_htn1"] : (function () { throw new RuntimeError('Variable "montant_htn_htn1" does not exist.', 43, $this->source); })())) : (null))]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 48
        $this->loadTemplate("Common/commentaire-js.html.twig", "facture/voir.html.twig", 48)->display($context);
        // line 49
        echo "    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 53
        $this->loadTemplate("facture/Parts/facture_avoirs_dossier.js.html.twig", "facture/voir.html.twig", 53)->display($context);
        // line 54
        echo "    <script>
        // \$(document).on('click', '.delete-comment', function () {
        // removeComment(this);
        // });

        \$(document).ready(function () {
            calculatettlht(\$(\".mnthtnfact\").first());
            calculatettlhtav(\$(\".mnthtnfactavoir\").first());
            toogleInputs(true);
            \$('#btnajoutcom').hide();
            \$('.delete-comment').hide();
            \$('#subFactAvoir').val('Valider').hide();
            \$('.modif-btn').prop(\"disabled\", false);

            \$(\"#facture_avoir_dateCreation\").on(\"change\", function () {
                var date = \$(this).val();
                var tab = date.split(\"/\");
                var dd = tab[1] + \"/\" + tab[0] + \"/\" + tab[2];
                var dat = new Date(dd);
                dat.setMonth(dat.getMonth() + 3);
                \$(\"#datapayementestime\").datepicker('setDate', dat);
            });

            \$(\"#facture_avoir_dateCreation\").trigger('change');

            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var societec = ";
        // line 80
        echo json_encode((isset($context["societe"]) || array_key_exists("societe", $context) ? $context["societe"] : (function () { throw new RuntimeError('Variable "societe" does not exist.', 80, $this->source); })()));
        echo ";
            for (let key in societec){
                if(societec.hasOwnProperty(key)){
                    if(societec[key] != null){
                        var dataselect = {
                            id: key,
                            text: societec[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.id, true, true);
                        \$('#facture_avoir_idContact').append(newOption).trigger('change');
                    }
                }
            }
            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var opcac = ";
        // line 94
        echo json_encode((isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 94, $this->source); })()));
        echo ";
            for (let key in opcac){
                if(opcac.hasOwnProperty(key)){
                    if(opcac[key] != null){
                        var dataselect = {
                            id: key,
                            text: opcac[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.id, true, true);
                        \$('#facture_avoir_idOpca').append(newOption).trigger('change');
                    }
                }
            }
        });

        \$(document).on('click', '.modif-btn', function () {
            toogleInputs(false);
            \$('#subFactAvoir').show();
            \$('#btnajoutcom').show();
            \$('.delete-comment').show();
            disablePrototypeInputs();
            \$('.annule-modif').show();
            \$(this).hide();
        });

        \$('.js-datepicker-note,.js-datepicker').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });


        \$('#facture_avoir_idOpca').select2({
            placeholder: \"-- OPCO --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.opca.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        \$('#facture_avoir_idContact').select2({
            placeholder: \"--Sélectionnez--\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.client.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        // gestion activation et desactivation des inputs
        function toogleInputs(value)
        {
            if (value === undefined) {
                value = false;
            }
            var inputs = document.getElementsByTagName('input');
            var inputsSelect = document.getElementsByTagName('select');
            var textArea = document.getElementsByTagName('textarea');
            var i;
            for (i = 0; i < inputs.length; i++)
            {
                inputs[i].disabled = value;
            }
            for (i = 0; i < inputsSelect.length; i++)
            {
                inputsSelect[i].disabled = value;
            }
            for (i = 0; i < textArea.length; i++)
            {
                textArea[i].disabled = value;
            }
        }

        function disablePrototypeInputs() {
            var inputs = \$('#commentaire_prototype :input');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].disabled = true;
            }
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 148,  285 => 131,  245 => 94,  228 => 80,  200 => 54,  198 => 53,  192 => 49,  190 => 48,  185 => 47,  175 => 46,  165 => 43,  157 => 37,  146 => 28,  144 => 27,  136 => 22,  132 => 21,  127 => 18,  117 => 17,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Facture - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/wickedpicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">



{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Factures_Avoirs_Controller') }}\">Liste Factures et Avoirs</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails facture/avoir</li>
            </ol>

            <div>
                {% if is_granted('edit', 'Factures / Avoirs dossiers') %}
                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>

        </div>
    </nav>

    <h2 class=\"text-center my-3 text-primary\" id=\"heading-title\">DETAIL DE LA FACTURE ET AVOIR</h2>
    {% include 'facture/form.html.twig' with {'montant_htn_htn1' : montant_htn_htn1 is defined ? montant_htn_htn1 : null } %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% include 'Common/commentaire-js.html.twig' %}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    {% include 'facture/Parts/facture_avoirs_dossier.js.html.twig' %}
    <script>
        // \$(document).on('click', '.delete-comment', function () {
        // removeComment(this);
        // });

        \$(document).ready(function () {
            calculatettlht(\$(\".mnthtnfact\").first());
            calculatettlhtav(\$(\".mnthtnfactavoir\").first());
            toogleInputs(true);
            \$('#btnajoutcom').hide();
            \$('.delete-comment').hide();
            \$('#subFactAvoir').val('Valider').hide();
            \$('.modif-btn').prop(\"disabled\", false);

            \$(\"#facture_avoir_dateCreation\").on(\"change\", function () {
                var date = \$(this).val();
                var tab = date.split(\"/\");
                var dd = tab[1] + \"/\" + tab[0] + \"/\" + tab[2];
                var dat = new Date(dd);
                dat.setMonth(dat.getMonth() + 3);
                \$(\"#datapayementestime\").datepicker('setDate', dat);
            });

            \$(\"#facture_avoir_dateCreation\").trigger('change');

            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var societec = {{ societe|json_encode|raw }};
            for (let key in societec){
                if(societec.hasOwnProperty(key)){
                    if(societec[key] != null){
                        var dataselect = {
                            id: key,
                            text: societec[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.id, true, true);
                        \$('#facture_avoir_idContact').append(newOption).trigger('change');
                    }
                }
            }
            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var opcac = {{ opca|json_encode|raw }};
            for (let key in opcac){
                if(opcac.hasOwnProperty(key)){
                    if(opcac[key] != null){
                        var dataselect = {
                            id: key,
                            text: opcac[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.id, true, true);
                        \$('#facture_avoir_idOpca').append(newOption).trigger('change');
                    }
                }
            }
        });

        \$(document).on('click', '.modif-btn', function () {
            toogleInputs(false);
            \$('#subFactAvoir').show();
            \$('#btnajoutcom').show();
            \$('.delete-comment').show();
            disablePrototypeInputs();
            \$('.annule-modif').show();
            \$(this).hide();
        });

        \$('.js-datepicker-note,.js-datepicker').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });


        \$('#facture_avoir_idOpca').select2({
            placeholder: \"-- OPCO --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.dossier.opca.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        \$('#facture_avoir_idContact').select2({
            placeholder: \"--Sélectionnez--\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.dossier.client.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        // gestion activation et desactivation des inputs
        function toogleInputs(value)
        {
            if (value === undefined) {
                value = false;
            }
            var inputs = document.getElementsByTagName('input');
            var inputsSelect = document.getElementsByTagName('select');
            var textArea = document.getElementsByTagName('textarea');
            var i;
            for (i = 0; i < inputs.length; i++)
            {
                inputs[i].disabled = value;
            }
            for (i = 0; i < inputsSelect.length; i++)
            {
                inputsSelect[i].disabled = value;
            }
            for (i = 0; i < textArea.length; i++)
            {
                textArea[i].disabled = value;
            }
        }

        function disablePrototypeInputs() {
            var inputs = \$('#commentaire_prototype :input');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].disabled = true;
            }
        }
    </script>
{% endblock %}", "facture/voir.html.twig", "/var/www/templates/facture/voir.html.twig");
    }
}
