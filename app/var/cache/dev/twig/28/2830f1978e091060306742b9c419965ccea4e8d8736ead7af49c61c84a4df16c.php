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

/* facture/voirDom.html.twig */
class __TwigTemplate_a1ba215de1508abddedcf3296c739da49c97025558e258c90add81ff55ceead7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/voirDom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/voirDom.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/voirDom.html.twig", 1);
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
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
             <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Domiciliation_Location_Controller/factures");
        echo "\">liste des
                        factures domiciliation</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Visualiser</li>
            </ol>

            <div>
                ";
        // line 29
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Factures Domiciliation / Location")) {
            // line 30
            echo "                    <a href=\"javascript:void(0)\" class=\"modif-btn not-disabling\">
                        <i class=\"fa fa-pen\"></i>
                        Modifier
                    </a>
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_Domiciliation_Voir", ["idFactDom" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 34, $this->source); })()), "idfacturedom", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"
                       class=\"text-danger float-right annule-modif not-disabling\"
                        style=\"display: none\"
                    >
                        <i class=\"fa fa-ban\"></i>
                        Annuler la modification
                    </a>
                ";
        }
        // line 42
        echo "            </div>
        </div>
    </nav>
    ";
        // line 45
        $this->loadTemplate("facture/editDom.html.twig", "facture/voirDom.html.twig", 45)->display($context);
        
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
    ";
        // line 50
        $this->loadTemplate("Common/commentaire-js.html.twig", "facture/voirDom.html.twig", 50)->display($context);
        // line 51
        echo "    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 55
        $this->loadTemplate("Common/client-ajax-js.html.twig", "facture/voirDom.html.twig", 55)->display(twig_array_merge($context, ["attrs" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "domiciliation", [], "any", false, false, false, 55), "client", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), ["structure" => "proform"])]));
        // line 56
        echo "
    <script>
        // \$(document).on('click', '.delete-comment', function () {
        // removeComment(this);
        // });

        \$(document).ready(function() {
            \$('#btnajoutcom').hide();
            \$('.delete-comment').hide();
        });

        \$(document).on('click', '.modif-btn', function() {
            toogleInputs(false);
            \$('#btnajoutcom').show();
            \$('.delete-comment').show();
            \$('.annule-modif').show();
            \$(this).hide();
        });

        \$(document).on('keyup', '.taux-tva', function() {
            loadMntValue(\$(this));
        });

        \$(document).on('blur', '.taux-tva', function() {
            loadMntValue(\$(this));
        });

        \$('.js-datepicker-note').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });
        
        // APR-223
        \$('.taux-tva').trigger('keyup');
        
        function loadMntValue(element) {
            var value = element.val();

            //var valueField = elt.val().replace(/[^0-9\\.]/g, '');
            value = value.replace(',', '.');

            value = value.replace(/[^0-9\\.]/g, '');

            element.val(value);

            value = (value === '') ? 0 : value;
            var brutHT = \$(element.attr('data-ht')).val();
            brutHT = brutHT.replace(/\\s/g, '');
            brutHT = brutHT.replace(',', '.');
            brutHT = (brutHT === '') ? 0 : brutHT;
            var htField = parseFloat(brutHT);
            var tvaField = \$(element.attr('data-tva'));
            var ttcField = \$(element.attr('data-ttc'));
            var mntTva = parseFloat(value) * htField / 100;
            var mntTTC = htField + mntTva;
            tvaField.val(mntTva);
            ttcField.val(mntTTC);

        }

        // gestion activation et desactivation des inputs
        function toogleInputs(value) {
            if (value === undefined) {
                value = false;
            }
            var btnNotToogle = '.not-disabling, #commentaire_prototype :input';
            if (value) {
                common.disableFormFields(btnNotToogle);
            } else {
                common.enableFormFields(btnNotToogle);
            }
        }
        
        // APR-223 
        \$('#editer-facture, #encaisser-facture').on('click', function(e) {
            common.enableFormFields();
            
            setTimeout(function() {
                document.location.reload();
            }, 1000);
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/voirDom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 56,  203 => 55,  197 => 51,  195 => 50,  190 => 49,  180 => 48,  170 => 45,  165 => 42,  154 => 34,  148 => 30,  146 => 29,  137 => 23,  133 => 22,  128 => 19,  118 => 18,  100 => 9,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
    <link rel=\"stylesheet\"
          href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">



{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
             <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\"><a href=\"{{ path('Domiciliation_Location_Controller/factures') }}\">liste des
                        factures domiciliation</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Visualiser</li>
            </ol>

            <div>
                {% if is_granted('edit', 'Factures Domiciliation / Location') %}
                    <a href=\"javascript:void(0)\" class=\"modif-btn not-disabling\">
                        <i class=\"fa fa-pen\"></i>
                        Modifier
                    </a>
                    <a href=\"{{ path('Facture_Domiciliation_Voir', {'idFactDom': facture.idfacturedom}) }}\"
                       class=\"text-danger float-right annule-modif not-disabling\"
                        style=\"display: none\"
                    >
                        <i class=\"fa fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>
        </div>
    </nav>
    {% include 'facture/editDom.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% include 'Common/commentaire-js.html.twig' %}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    {% include 'Common/client-ajax-js.html.twig' with { attrs: form.domiciliation.client.vars|merge({ 'structure': 'proform' }) } %}

    <script>
        // \$(document).on('click', '.delete-comment', function () {
        // removeComment(this);
        // });

        \$(document).ready(function() {
            \$('#btnajoutcom').hide();
            \$('.delete-comment').hide();
        });

        \$(document).on('click', '.modif-btn', function() {
            toogleInputs(false);
            \$('#btnajoutcom').show();
            \$('.delete-comment').show();
            \$('.annule-modif').show();
            \$(this).hide();
        });

        \$(document).on('keyup', '.taux-tva', function() {
            loadMntValue(\$(this));
        });

        \$(document).on('blur', '.taux-tva', function() {
            loadMntValue(\$(this));
        });

        \$('.js-datepicker-note').datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });
        
        // APR-223
        \$('.taux-tva').trigger('keyup');
        
        function loadMntValue(element) {
            var value = element.val();

            //var valueField = elt.val().replace(/[^0-9\\.]/g, '');
            value = value.replace(',', '.');

            value = value.replace(/[^0-9\\.]/g, '');

            element.val(value);

            value = (value === '') ? 0 : value;
            var brutHT = \$(element.attr('data-ht')).val();
            brutHT = brutHT.replace(/\\s/g, '');
            brutHT = brutHT.replace(',', '.');
            brutHT = (brutHT === '') ? 0 : brutHT;
            var htField = parseFloat(brutHT);
            var tvaField = \$(element.attr('data-tva'));
            var ttcField = \$(element.attr('data-ttc'));
            var mntTva = parseFloat(value) * htField / 100;
            var mntTTC = htField + mntTva;
            tvaField.val(mntTva);
            ttcField.val(mntTTC);

        }

        // gestion activation et desactivation des inputs
        function toogleInputs(value) {
            if (value === undefined) {
                value = false;
            }
            var btnNotToogle = '.not-disabling, #commentaire_prototype :input';
            if (value) {
                common.disableFormFields(btnNotToogle);
            } else {
                common.enableFormFields(btnNotToogle);
            }
        }
        
        // APR-223 
        \$('#editer-facture, #encaisser-facture').on('click', function(e) {
            common.enableFormFields();
            
            setTimeout(function() {
                document.location.reload();
            }, 1000);
        });

    </script>
{% endblock %}", "facture/voirDom.html.twig", "/home/jeremy/Bureau/project/app/templates/facture/voirDom.html.twig");
    }
}
