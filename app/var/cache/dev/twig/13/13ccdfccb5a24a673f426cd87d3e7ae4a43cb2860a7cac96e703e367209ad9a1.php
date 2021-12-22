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

/* propal/create.html.twig */
class __TwigTemplate_dd95148c03f12895dd8a44ef24213e7f6d82b2e7890a45c53f501b560f801603 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "propal/create.html.twig", 1);
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

        echo "Propal - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
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
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller");
        echo "\">Liste des propositions commerciales</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>
    <h2 class=\"text-center mt-2 text-nmary\">Proposition Commerciale</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 21
        echo twig_include($this->env, $context, "propal/Parts/form.html.twig", ["type" => "create"]);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 32
        $this->loadTemplate("Common/client-ajax-js.html.twig", "propal/create.html.twig", 32)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 32, $this->source); })()), "clientpropal", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32)]));
        // line 33
        echo "    ";
        $this->loadTemplate("propal/Parts/propal.js.html.twig", "propal/create.html.twig", 33)->display($context);
        // line 34
        echo "    <script>
        \$(document).ready(function () {
            \$(\"#propal_durreh\").attr('required', 'required');
            \$(\"#propal_durrej\").attr('required', 'required');
        });

        \$(\"#propal_ville\").select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.ville.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        \$(\".js-datepicker\").each(function () {
            \$(this).datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        ";
        // line 64
        echo "        ";
        if (((isset($context["client"]) || array_key_exists("client", $context)) &&  !(null === (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 64, $this->source); })())))) {
            // line 65
            echo "            let client = {
                id: \"";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 66, $this->source); })()), "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\",
                text: \"";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 67, $this->source); })()), "nomStr", [], "any", false, false, false, 67), "html", null, true);
            echo "\"
            };

            var newOption = new Option(client.text, client.id, true, true);
            \$('#propal_clientpropal').append(newOption).trigger('change');
        ";
        }
        // line 73
        echo "
        ";
        // line 74
        if (((isset($context["clientVille"]) || array_key_exists("clientVille", $context)) &&  !(null === (isset($context["clientVille"]) || array_key_exists("clientVille", $context) ? $context["clientVille"] : (function () { throw new RuntimeError('Variable "clientVille" does not exist.', 74, $this->source); })())))) {
            // line 75
            echo "            let clientVille = {
                id: \"";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientVille"]) || array_key_exists("clientVille", $context) ? $context["clientVille"] : (function () { throw new RuntimeError('Variable "clientVille" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76), "html", null, true);
            echo "\",
                text: \"";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["clientVille"]) || array_key_exists("clientVille", $context) ? $context["clientVille"] : (function () { throw new RuntimeError('Variable "clientVille" does not exist.', 77, $this->source); })()), "nomVille", [], "any", false, false, false, 77), "html", null, true);
            echo "\"
            };

            var newVilleOption = new Option(clientVille.text, clientVille.id, true, true);
            \$('#propal_ville').append(newVilleOption).trigger('change');
        ";
        }
        // line 83
        echo "

            let formation = \$('#propal_formation');
            formation.select2({
                placeholder: \"-- Intitulé stage --\",
                minimumInputLength: 3,
                allowClear: true,
                escapeMarkup: function (text) { return text; }, // Fix: erreur d'affichage des caractères
                ajax: {
                    url: '";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.competence.asynch-search");
        echo "',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        var dataResults = data.results !== undefined ? data.results : [];
                        return {
                            results: \$.map(dataResults, function (item) {
                                return {
                                    text: common.escapeHTML(item.text),
                                    id: item.id
                                };
                            })
                        };
                    }
                }
            });
  
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"propal_datedebutpropal\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#propal_datefinpropal').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
        ";
        // line 133
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 133, $this->source); })()), "request", [], "any", false, false, false, 133), "query", [], "any", false, false, false, 133), "get", [0 => "competence"], "method", false, false, false, 133)) {
            // line 134
            echo "            var data = {
                id: \"";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "request", [], "any", false, false, false, 135), "query", [], "any", false, false, false, 135), "get", [0 => "competence"], "method", false, false, false, 135), "html", null, true);
            echo "\",
                text: '";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "request", [], "any", false, false, false, 136), "query", [], "any", false, false, false, 136), "get", [0 => "competence"], "method", false, false, false, 136), "html", null, true);
            echo "',
            };
            var newOption = new Option(data.text, data.text, true, true);
            dossierNom.append(newOption).trigger('change');
        ";
        }
        // line 141
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propal/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 141,  309 => 136,  305 => 135,  302 => 134,  300 => 133,  256 => 92,  245 => 83,  236 => 77,  232 => 76,  229 => 75,  227 => 74,  224 => 73,  215 => 67,  211 => 66,  208 => 65,  205 => 64,  184 => 45,  171 => 34,  168 => 33,  166 => 32,  157 => 27,  147 => 26,  133 => 21,  123 => 14,  119 => 13,  115 => 11,  105 => 10,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Propal - CRM Aprentiv v2.0{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_propositions_commerciales_Controller') }}\">Liste des propositions commerciales</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>
    <h2 class=\"text-center mt-2 text-nmary\">Proposition Commerciale</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ include('propal/Parts/form.html.twig', {type:'create'}) }}
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    {% include 'Common/client-ajax-js.html.twig' with { attrs: propal_form.clientpropal.vars } %}
    {% include 'propal/Parts/propal.js.html.twig' %}
    <script>
        \$(document).ready(function () {
            \$(\"#propal_durreh\").attr('required', 'required');
            \$(\"#propal_durrej\").attr('required', 'required');
        });

        \$(\"#propal_ville\").select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.opca.ville.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        \$(\".js-datepicker\").each(function () {
            \$(this).datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        {# APR-105 :  fiche client/prospect > Bouton Créer un propal > Reprendre info client #}
        {% if client is defined and client is not null %}
            let client = {
                id: \"{{ client.id }}\",
                text: \"{{ client.nomStr }}\"
            };

            var newOption = new Option(client.text, client.id, true, true);
            \$('#propal_clientpropal').append(newOption).trigger('change');
        {% endif %}

        {% if clientVille is defined and clientVille is not null %}
            let clientVille = {
                id: \"{{ clientVille.id }}\",
                text: \"{{ clientVille.nomVille }}\"
            };

            var newVilleOption = new Option(clientVille.text, clientVille.id, true, true);
            \$('#propal_ville').append(newVilleOption).trigger('change');
        {% endif %}


            let formation = \$('#propal_formation');
            formation.select2({
                placeholder: \"-- Intitulé stage --\",
                minimumInputLength: 3,
                allowClear: true,
                escapeMarkup: function (text) { return text; }, // Fix: erreur d'affichage des caractères
                ajax: {
                    url: '{{ path('crm.dossier.competence.asynch-search') }}',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        var dataResults = data.results !== undefined ? data.results : [];
                        return {
                            results: \$.map(dataResults, function (item) {
                                return {
                                    text: common.escapeHTML(item.text),
                                    id: item.id
                                };
                            })
                        };
                    }
                }
            });
  
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"propal_datedebutpropal\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#propal_datefinpropal').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
        {% if app.request.query.get('competence') %}
            var data = {
                id: \"{{ app.request.query.get('competence') }}\",
                text: '{{ app.request.query.get('competence') }}',
            };
            var newOption = new Option(data.text, data.text, true, true);
            dossierNom.append(newOption).trigger('change');
        {% endif  %}
    </script>
{% endblock %}
", "propal/create.html.twig", "/var/www/templates/propal/create.html.twig");
    }
}
