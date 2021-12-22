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

/* propal/show.html.twig */
class __TwigTemplate_86ba83648345a89338d939e4db4ca76f209ec4ce14e9059a4559c6d6b3f1d397 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "propal/show.html.twig", 1);
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
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller");
        echo "\">Liste des propositions commerciales</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Edition Propal</li>
            </ol>
            <div>
                ";
        // line 19
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Dossiers")) {
            // line 20
            echo "                    <a href=\"javascript:void(0)\" class=\"update\" id=\"ModifBtn\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier la proposition
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                ";
        }
        // line 29
        echo "            </div>
        </div>
    </nav>
    <div class=\"page-content\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "flashBag", [], "any", false, false, false, 33), "get", [0 => "error"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 34
            echo "            <div class=\"note note-warnning\">
                <p>";
            // line 35
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "session", [], "any", false, false, false, 38), "flashBag", [], "any", false, false, false, 38), "get", [0 => "success"], "method", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 39
            echo "            <div class=\"note note-success\">
                <p>";
            // line 40
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </div>
    <h2 class=\"text-center mt-2 text-nmary\">Fiche Proposition Commerciales</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 47
        echo twig_include($this->env, $context, "propal/Parts/form.html.twig");
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    ";
        // line 59
        $this->loadTemplate("Common/client-ajax-js.html.twig", "propal/show.html.twig", 59)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 59, $this->source); })()), "clientpropal", [], "any", false, false, false, 59), "vars", [], "any", false, false, false, 59)]));
        // line 60
        echo "    ";
        $this->loadTemplate("propal/Parts/propal.js.html.twig", "propal/show.html.twig", 60)->display($context);
        // line 61
        echo "    <script>
        \$(document).ready(function(){
            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var client = ";
        // line 64
        echo json_encode((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 64, $this->source); })()));
        echo ";
            for (let key in client){
                if(client.hasOwnProperty(key)){
                    if(client[key] != null){
                        var dataselect = {
                            ide: key,
                            text: client[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.ide, true, true);
                        \$(\"#propal_clientpropal\").append(newOption).trigger(\"change\");
                        \$(\"#propal_clientpropal\").find('option[value=\"'+dataselect.ide+'\"]').attr(\"selected\",\"selected\");
                    }
                }
            }
            var adressesville = ";
        // line 78
        echo json_encode((isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 78, $this->source); })()));
        echo "
            for(let key in adressesville){
                if(adressesville[key] != null & key > 0){
                    setVilleValue(key,adressesville[key]);
                }
            }
        });
        
        function setVilleValue(key,idville) {
            var villeSelect = \$('#propal_ville');
            if ( idville > 0) {
                var ville_id = idville;
                var url = '";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.oneVille.asynch-search", ["idVille" => "ville_id"]);
        echo "';
                url = url.replace('ville_id', ville_id);
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    // create the option and append to Select2
                    var dataSelected = (data['results'][0]);
                    var option = new Option(dataSelected.text, dataSelected.text, true, true);
                    villeSelect.append(option).trigger('change');
                    // manually trigger the `select2:select` event
                    villeSelect.trigger({
                        type: 'select2:select',
                        params: {
                            data: data
                        }
                    });
                });
            }
        }
        \$(\"#propal_ville\").select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 115
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

        \$(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });
        
        let formation = \$('#propal_formation');
            formation.select2({
                placeholder: \"-- Intitulé stage --\",
                minimumInputLength: 3,
                allowClear: true,
                escapeMarkup: function (text) { return text; }, // Fix: erreur d'affichage des caractères
                ajax: {
                    url: '";
        // line 141
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
        // line 182
        if (twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 182, $this->source); })()), "formation", [], "any", false, false, false, 182)) {
            // line 183
            echo "            var data = {
                id: \"";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 184, $this->source); })()), "formation", [], "any", false, false, false, 184), "id", [], "any", false, false, false, 184), "html", null, true);
            echo "\",
                text: '";
            // line 185
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 185, $this->source); })()), "formation", [], "any", false, false, false, 185), "competence", [], "any", false, false, false, 185), "js"), "html", null, true);
            echo "',
            };
            var newOption = new Option(data.text, data.text, true, true);
            formation.append(newOption).trigger('change');
        ";
        }
        // line 190
        echo "    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propal/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 190,  375 => 185,  371 => 184,  368 => 183,  366 => 182,  322 => 141,  293 => 115,  265 => 90,  250 => 78,  233 => 64,  228 => 61,  225 => 60,  223 => 59,  213 => 53,  203 => 52,  189 => 47,  183 => 43,  174 => 40,  171 => 39,  166 => 38,  157 => 35,  154 => 34,  150 => 33,  144 => 29,  133 => 20,  131 => 19,  124 => 15,  120 => 14,  115 => 11,  105 => 10,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_propositions_commerciales_Controller') }}\">Liste des propositions commerciales</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Edition Propal</li>
            </ol>
            <div>
                {% if is_granted('edit', 'Dossiers') %}
                    <a href=\"javascript:void(0)\" class=\"update\" id=\"ModifBtn\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier la proposition
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>
        </div>
    </nav>
    <div class=\"page-content\">
        {% for flash_message in app.session.flashBag.get('error') %}
            <div class=\"note note-warnning\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
        {% for flash_message in app.session.flashBag.get('success') %}
            <div class=\"note note-success\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
    </div>
    <h2 class=\"text-center mt-2 text-nmary\">Fiche Proposition Commerciales</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ include('propal/Parts/form.html.twig') }}
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
        \$(document).ready(function(){
            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var client = {{ client|json_encode|raw }};
            for (let key in client){
                if(client.hasOwnProperty(key)){
                    if(client[key] != null){
                        var dataselect = {
                            ide: key,
                            text: client[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.ide, true, true);
                        \$(\"#propal_clientpropal\").append(newOption).trigger(\"change\");
                        \$(\"#propal_clientpropal\").find('option[value=\"'+dataselect.ide+'\"]').attr(\"selected\",\"selected\");
                    }
                }
            }
            var adressesville = {{ ville|json_encode|raw }}
            for(let key in adressesville){
                if(adressesville[key] != null & key > 0){
                    setVilleValue(key,adressesville[key]);
                }
            }
        });
        
        function setVilleValue(key,idville) {
            var villeSelect = \$('#propal_ville');
            if ( idville > 0) {
                var ville_id = idville;
                var url = '{{ path('crm.opca.oneVille.asynch-search', {idVille:'ville_id'}) }}';
                url = url.replace('ville_id', ville_id);
                \$.ajax({
                    type: 'GET',
                    url: url
                }).then(function (data) {
                    // create the option and append to Select2
                    var dataSelected = (data['results'][0]);
                    var option = new Option(dataSelected.text, dataSelected.text, true, true);
                    villeSelect.append(option).trigger('change');
                    // manually trigger the `select2:select` event
                    villeSelect.trigger({
                        type: 'select2:select',
                        params: {
                            data: data
                        }
                    });
                });
            }
        }
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

        \$(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });
        
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
            
        {% if propal.formation %}
            var data = {
                id: \"{{ propal.formation.id }}\",
                text: '{{ propal.formation.competence |escape('js') }}',
            };
            var newOption = new Option(data.text, data.text, true, true);
            formation.append(newOption).trigger('change');
        {% endif  %}
    </script>
{% endblock %}
", "propal/show.html.twig", "/var/www/templates/propal/show.html.twig");
    }
}
