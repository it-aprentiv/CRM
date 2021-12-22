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

/* dossier/create.html.twig */
class __TwigTemplate_3be89e4a9caf4042f09f1a77381c7e51b38224a6751f125c55c3bd3e47094165 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/create.html.twig", 1);
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

        echo "Dossier - CRM Aprentiv v2.0";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
    <link href=\"https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\" />
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
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller");
        echo "\">Liste des Dossiers</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">AJOUT DE DOSSIER</h2>
    
    ";
        // line 25
        $this->loadTemplate("dossier/part/dossier-form.html.twig", "dossier/create.html.twig", 25)->display($context);
        // line 26
        echo "    
    <!--- Modal formation --->
    ";
        // line 28
        $this->loadTemplate("dossier/part/calendrier.html.twig", "dossier/create.html.twig", 28)->display(twig_array_merge($context, ["formation_dates" => (((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context))) ? ((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 28, $this->source); })())) : ([]))]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    ";
        // line 34
        $this->loadTemplate("dossier/part/dossier-autocomplete-js.html.twig", "dossier/create.html.twig", 34)->display(twig_array_merge($context, ["listAutocomplete" =>         // line 35
(isset($context["listAutocomplete"]) || array_key_exists("listAutocomplete", $context) ? $context["listAutocomplete"] : (function () { throw new RuntimeError('Variable "listAutocomplete" does not exist.', 35, $this->source); })()), "opcaId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
(isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 36, $this->source); })()), "idOpca", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "numInterne" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 37, $this->source); })()), "ref", [], "any", false, false, false, 37), "vars", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37), "datefin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 38
(isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 38, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]));
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        $this->loadTemplate("Common/commentaire-js.html.twig", "dossier/create.html.twig", 42)->display(twig_array_merge($context, ["addAutocomplete" => "addAutocomplete"]));
        // line 43
        echo "    ";
        $this->loadTemplate("Common/stagiaire-js.html.twig", "dossier/create.html.twig", 43)->display($context);
        // line 44
        echo "    ";
        $this->loadTemplate("Common/client-ajax-js.html.twig", "dossier/create.html.twig", 44)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 44, $this->source); })()), "idClient", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44)]));
        // line 45
        echo "    ";
        $this->loadTemplate("Common/opca-ajax-js.html.twig", "dossier/create.html.twig", 45)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 45, $this->source); })()), "idOpca", [], "any", false, false, false, 45), "vars", [], "any", false, false, false, 45)]));
        // line 46
        echo "    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    <!--script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script-->
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wickedpicker.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 52
        $this->loadTemplate("Common/collection-function-js.html.twig", "dossier/create.html.twig", 52)->display($context);
        // line 53
        echo "    ";
        $this->loadTemplate("Common/dossier-js.html.twig", "dossier/create.html.twig", 53)->display($context);
        // line 54
        echo "    
    
    <script type=\"text/javascript\">
        \$(function() {
            common.enableFormFields();
        });
        
        //Add Nouveau intitulé Stage
        \$('#tag-form-submit').on('click', function(e) {
            e.preventDefault();
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_competence");
        echo "\",
                data: \$('form.tagForm').serialize(),
                success: function(response) {
                    \$('#popupAddStage').modal('hide');
                },
                error: function() {
                    alert('Error');
                }
            });
            return false;
        });
        function getlieudossier(){
            var lieu = \$(\".lieudossier.active :input\").first().val();
            \$(\"#dossier_lieu\").val(lieu);
        }
        \$(\"form.popUp-ajout.list-filter\").on('submit', function(e){
            var lieu = \$(\".lieudossier.active :input\").first().val();
            \$(\"#dossier_lieu\").val(lieu);
        });
        var \$collectionfacturation;
        var \$collectionavoir;
        var boutonremovefacturation = \"<button type='button' class='removefacturationelement close' type='button'><span aria-hidden='true'>×</span></button>\";
        var boutonremoveavoir = \"<button type='button' class='removeavoirelement close' type='button'><span aria-hidden='true'>×</span></button>\";
        \$(document).ready(function () {
            \$collectionfacturation = \$(\"#ajout_facture\");
            \$collectionavoir = \$(\"#ajout_avoir\");
            \$collectionfacturation.data(\"index\", \$collectionfacturation.find('.form_facture').length);
            \$collectionavoir.data(\"index\", \$collectionavoir.find('.form_avoir').length);
            \$('.datepickerFacture').datepicker(
                {
                    'format':'dd/mm/yyyy',
                    'autoclose': true,
                    'endDate': '+0d',
                    'language': 'fr',
                }
            );
        });



 window.onload = () => {
        let newDate = new Date();
        let thisMonth = newDate.getUTCMonth()
        let addMonth = 2;

        receptionDate=new Date();
        receptionDate.setUTCMonth(thisMonth + addMonth);
       
\$(\"#dossier_dateAccord\").datepicker(\"setDate\",receptionDate)

/*    if(date_accord.value == \"\"){
        date_debut.value = setDate(new Date());
        date_fin.value = setDate(new Date(),{day: 1}) 
        }
    */
    }

      
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"dossier_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#dossier_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)


  //   
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dossier/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 66,  210 => 54,  207 => 53,  205 => 52,  201 => 51,  194 => 46,  191 => 45,  188 => 44,  185 => 43,  182 => 42,  180 => 41,  178 => 38,  177 => 37,  176 => 36,  175 => 35,  174 => 34,  168 => 32,  158 => 31,  148 => 28,  144 => 26,  142 => 25,  132 => 18,  128 => 17,  124 => 15,  114 => 14,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossier - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/wickedpicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
    <link href=\"https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Dossiers_Controller') }}\">Liste des Dossiers</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">AJOUT DE DOSSIER</h2>
    
    {% include 'dossier/part/dossier-form.html.twig' %}
    
    <!--- Modal formation --->
    {% include 'dossier/part/calendrier.html.twig' with { formation_dates : formated_formation_dates is defined ? formated_formation_dates : [] } %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    {% include 'dossier/part/dossier-autocomplete-js.html.twig' with {
            listAutocomplete: listAutocomplete,
            opcaId: doc_form.idOpca.vars.id,
            numInterne: doc_form.ref.vars.id,
            datefin: doc_form.dateFinPeriode.vars.id
        }
    %}
    {# addAutocomplete = function js who config autocomplete #}
    {% include 'Common/commentaire-js.html.twig' with { addAutocomplete: 'addAutocomplete' }%}
    {% include 'Common/stagiaire-js.html.twig' %}
    {% include 'Common/client-ajax-js.html.twig' with { attrs: doc_form.idClient.vars } %}
    {% include 'Common/opca-ajax-js.html.twig' with { attrs: doc_form.idOpca.vars } %}
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    <!--script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script-->
    <script src=\"{{ asset('assets/js/wickedpicker.js') }}\"></script>
    {% include 'Common/collection-function-js.html.twig' %}
    {% include 'Common/dossier-js.html.twig'%}
    
    
    <script type=\"text/javascript\">
        \$(function() {
            common.enableFormFields();
        });
        
        //Add Nouveau intitulé Stage
        \$('#tag-form-submit').on('click', function(e) {
            e.preventDefault();
            \$.ajax({
                type: \"POST\",
                url: \"{{ path('ajout_competence') }}\",
                data: \$('form.tagForm').serialize(),
                success: function(response) {
                    \$('#popupAddStage').modal('hide');
                },
                error: function() {
                    alert('Error');
                }
            });
            return false;
        });
        function getlieudossier(){
            var lieu = \$(\".lieudossier.active :input\").first().val();
            \$(\"#dossier_lieu\").val(lieu);
        }
        \$(\"form.popUp-ajout.list-filter\").on('submit', function(e){
            var lieu = \$(\".lieudossier.active :input\").first().val();
            \$(\"#dossier_lieu\").val(lieu);
        });
        var \$collectionfacturation;
        var \$collectionavoir;
        var boutonremovefacturation = \"<button type='button' class='removefacturationelement close' type='button'><span aria-hidden='true'>×</span></button>\";
        var boutonremoveavoir = \"<button type='button' class='removeavoirelement close' type='button'><span aria-hidden='true'>×</span></button>\";
        \$(document).ready(function () {
            \$collectionfacturation = \$(\"#ajout_facture\");
            \$collectionavoir = \$(\"#ajout_avoir\");
            \$collectionfacturation.data(\"index\", \$collectionfacturation.find('.form_facture').length);
            \$collectionavoir.data(\"index\", \$collectionavoir.find('.form_avoir').length);
            \$('.datepickerFacture').datepicker(
                {
                    'format':'dd/mm/yyyy',
                    'autoclose': true,
                    'endDate': '+0d',
                    'language': 'fr',
                }
            );
        });



 window.onload = () => {
        let newDate = new Date();
        let thisMonth = newDate.getUTCMonth()
        let addMonth = 2;

        receptionDate=new Date();
        receptionDate.setUTCMonth(thisMonth + addMonth);
       
\$(\"#dossier_dateAccord\").datepicker(\"setDate\",receptionDate)

/*    if(date_accord.value == \"\"){
        date_debut.value = setDate(new Date());
        date_fin.value = setDate(new Date(),{day: 1}) 
        }
    */
    }

      
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"dossier_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#dossier_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)


  //   
    </script>
{% endblock %}", "dossier/create.html.twig", "/home/jeremy/Bureau/project/app/templates/dossier/create.html.twig");
    }
}
