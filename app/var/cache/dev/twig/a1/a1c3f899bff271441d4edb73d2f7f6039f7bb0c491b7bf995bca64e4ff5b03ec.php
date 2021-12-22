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

/* formation/index.html.twig */
class __TwigTemplate_c5ad84484bdde97debebfa5963d8aefed10050c4939a69d78591d2dafe6cc076 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/index.html.twig", 1);
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

        echo "Formation - CRM Aprentiv v2.0";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "?v=";
        echo twig_escape_filter($this->env, (isset($context["asset_version"]) || array_key_exists("asset_version", $context) ? $context["asset_version"] : (function () { throw new RuntimeError('Variable "asset_version" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des formations mise en place</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE FORMATIONS MISE EN PLACE</h2>

<fieldset class=\"mb-3 list-filter\">
    <legend>Filtre</legend>
    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
    <div class=\"form-row\">
        <div class=\"form-group col-md\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 27, $this->source); })()), "entite", [], "any", false, false, false, 27), 'widget', ["placeholder" => "-- Entité --"]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 30, $this->source); })()), "mois", [], "any", false, false, false, 30), 'widget', ["placeholder" => "-- Mois --"]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 33, $this->source); })()), "dateOM", [], "any", false, false, false, 33), 'widget', ["attr" => ["placeholder" => "-- Date OM --", "type" => "date"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 36, $this->source); })()), "formateurOrganisme", [], "any", false, false, false, 36), 'widget', ["placeholder" => "Formateur/Organisme"]);
        echo "
        </div>
        ";
        // line 41
        echo "        <div class=\"form-group col-md\">
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 42, $this->source); })()), "cial", [], "any", false, false, false, 42), 'widget', ["attr" => ["placeholder" => "-- Commercial --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 45, $this->source); })()), "client", [], "any", false, false, false, 45), 'widget', ["placeholder" => "-- Client --"]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 48, $this->source); })()), "intitule", [], "any", false, false, false, 48), 'widget', ["attr" => ["placeholder" => "-- Intitulé --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 51, $this->source); })()), "type", [], "any", false, false, false, 51), 'widget', ["placeholder" => "-- Type --"]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 54, $this->source); })()), "domaineCompetence", [], "any", false, false, false, 54), 'widget', ["attr" => ["placeholder" => "Domaine comtpétence"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 57, $this->source); })()), "dureeEnJour", [], "any", false, false, false, 57), 'widget', ["attr" => ["placeholder" => "-- Durée en jour --"]]);
        echo "
        </div>
    </div>
    <br>
    <div class=\"form-row\">
        <div class=\"form-group col-md\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 63, $this->source); })()), "dureeEnHeure", [], "any", false, false, false, 63), 'widget', ["attr" => ["placeholder" => "-- Durée en heure --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 66, $this->source); })()), "nbStagiaire", [], "any", false, false, false, 66), 'widget', ["attr" => ["placeholder" => "-- Nb stagiaire --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 69, $this->source); })()), "demandeur", [], "any", false, false, false, 69), 'widget', ["attr" => ["placeholder" => "-- Demandeur --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 72, $this->source); })()), "montantAchatHT", [], "any", false, false, false, 72), 'widget', ["attr" => ["placeholder" => "-- Montant achat HT --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 75, $this->source); })()), "montantVenteHT", [], "any", false, false, false, 75), 'widget', ["attr" => ["placeholder" => "-- Montant Vente HT --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 78, $this->source); })()), "diffAchatVente", [], "any", false, false, false, 78), 'widget', ["attr" => ["placeholder" => "-- Diff Achat/Vnete --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 81, $this->source); })()), "pourcentage", [], "any", false, false, false, 81), 'widget', ["attr" => ["placeholder" => "-- Pourcentage --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 84, $this->source); })()), "pourcentageAchatHT", [], "any", false, false, false, 84), 'widget', ["attr" => ["placeholder" => "-- Poucentage Achat HT --"]]);
        echo "
        </div>
        <div class=\"form-group col-md\">
            <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
            <a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formation_Mise_Place_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
        </div>
    </div>
    ";
        // line 91
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_filter_form"]) || array_key_exists("formation_filter_form", $context) ? $context["formation_filter_form"] : (function () { throw new RuntimeError('Variable "formation_filter_form" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
</fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Entité</th>
                <th>Mois</th>
                <th>Date OM</th>
                <th>Formateur ou organisme</th>
                ";
        // line 102
        echo "                <th>Cial</th>
                <th>Client</th>
                <th>Intitulé</th>
                <th>Type</th>
                <th>Domaine de compétence</th>
                <th>Durée en jours</th>
                <th>Durée en heures</th>
                <th>Nb stagiaires</th>
                <th>Demandeur</th>
                <th>Montant Achat HT</th>
                <th>Montant Vente HT</th>
                <th>Diff Achat/Vente HT</th>
                <th>%</th>
                <th>% Achat HT</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 121, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 122
            echo "            <tr data-formation-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 122), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 122)]), "html", null, true);
            echo "\">
                ";
            // line 123
            $context["trans_month_hash"] = ["01" => "Janvier", "02" => "Fevrier", "03" => "Mars", "04" => "Avril", "05" => "Mai", "06" => "Juin", "07" => "Juilllet", "08" => "Aout", "09" => "Septembre", "10" => "Octobre", "11" => "Novembre", "12" => "Décembre"];
            // line 124
            echo "                <td>";
            ((twig_get_attribute($this->env, $this->source, $context["formation"], "entite", [], "any", false, false, false, 124)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "entite", [], "any", false, false, false, 124), "html", null, true))) : (print ("")));
            echo "</td>
                <td> ";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["trans_month_hash"]) || array_key_exists("trans_month_hash", $context) ? $context["trans_month_hash"] : (function () { throw new RuntimeError('Variable "trans_month_hash" does not exist.', 125, $this->source); })()), twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateOM", [], "any", false, false, false, 125), "m"), [], "array", false, false, false, 125), "html", null, true);
            echo "</td>
                <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dateOM", [], "any", false, false, false, 126), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 127
            ((twig_get_attribute($this->env, $this->source, $context["formation"], "formateur", [], "any", false, false, false, 127)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "formateur", [], "any", false, false, false, 127), "html", null, true))) : (print ("")));
            echo " </td>
                ";
            // line 129
            echo "                <td> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "commercial", [], "any", false, false, false, 129), "html", null, true);
            echo "  </td>
                <td>";
            // line 130
            ((twig_get_attribute($this->env, $this->source, $context["formation"], "client", [], "any", false, false, false, 130)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "client", [], "any", false, false, false, 130), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "intitule", [], "any", false, false, false, 131), "html", null, true);
            echo "</td>
                <td>";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->translateLetterToWord(twig_get_attribute($this->env, $this->source, $context["formation"], "type", [], "any", false, false, false, 132)), "html", null, true);
            echo " </td>
                <td>";
            // line 133
            echo "</td>
                 <td>";
            // line 134
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dureeEnJour", [], "any", false, false, false, 134), "html", null, true);
            echo "</td>
                 <td>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "dureeEnHeure", [], "any", false, false, false, 135), "html", null, true);
            echo "</td>
                 <td>";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "nbStagiaires", [], "any", false, false, false, 136), "html", null, true);
            echo "</td>
                 <td>";
            // line 137
            echo "</td>
                <td>";
            // line 138
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "pfmteurTotalHt", [], "any", false, false, false, 138), 2, ",", "."), "html", null, true);
            echo "</td>
                <td> ";
            // line 139
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "pvTotalHt", [], "any", false, false, false, 139), 2, ",", "."), "html", null, true);
            echo "</td>
                ";
            // line 140
            $context["diff"] = ($this->extensions['App\Twig\AppExtension']->textNumberTofloat(twig_get_attribute($this->env, $this->source, $context["formation"], "pvTotalHt", [], "any", false, false, false, 140)) - $this->extensions['App\Twig\AppExtension']->textNumberTofloat(twig_get_attribute($this->env, $this->source, $context["formation"], "pfmteurTotalHt", [], "any", false, false, false, 140)));
            // line 141
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 141, $this->source); })()), 2, ",", "."), "html", null, true);
            echo " </td>
                ";
            // line 142
            $context["pourcentage"] = 0;
            // line 143
            echo "                ";
            if (($this->extensions['App\Twig\AppExtension']->textNumberTofloat(twig_get_attribute($this->env, $this->source, $context["formation"], "pvTotalHt", [], "any", false, false, false, 143)) > 0)) {
                // line 144
                echo "                   ";
                $context["pourcentage"] = (((isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 144, $this->source); })()) / $this->extensions['App\Twig\AppExtension']->textNumberTofloat(twig_get_attribute($this->env, $this->source, $context["formation"], "pvTotalHt", [], "any", false, false, false, 144))) * 100);
                // line 145
                echo "                ";
            }
            // line 146
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["pourcentage"]) || array_key_exists("pourcentage", $context) ? $context["pourcentage"] : (function () { throw new RuntimeError('Variable "pourcentage" does not exist.', 146, $this->source); })()), 2, ",", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 147
            echo "</td>

                <td>
                    <a target=\"_blank\" href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "idFormation", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    ";
            // line 153
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Formations")) {
                // line 154
                echo "                        <a onclick=\"deleteFormation(\$(this))\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    ";
            }
            // line 158
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "        </tbody>

        <tfoot>
            <tr >
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 166
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 166, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 166), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 169
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 169, $this->source); })()));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>
</fieldset>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <nav class=\"navbar navbar-expand-sm bg-light navbar-light justify-content-center\">
            <div class=\"col-sm-3\">
                <a class=\"nav-link btn btn-info\" target=\"_blank\" href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_formation", ["typeFormation" => twig_constant("\\App\\Constants\\FormationType::FORMATION_INTRA")]), "html", null, true);
        echo "\">Ajouter formation intra</a>
            </div>
            <div class=\"col-sm-3\">
                <a class=\"nav-link btn btn-info\" target=\"_blank\" href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_formation", ["typeFormation" => twig_constant("\\App\\Constants\\FormationType::FORMATION_INTER")]), "html", null, true);
        echo "\">Ajouter formation inter</a>
            </div>
            <div class=\"col-sm-3\">
                <a class=\"nav-link btn btn-info\" target=\"_blank\" href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_formation", ["typeFormation" => twig_constant("\\App\\Constants\\FormationType::FORMATION_SOUS_TRAITANCE")]), "html", null, true);
        echo "\">Ajouter formation sous-traitance</a>
            </div>
        </nav>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 193
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 194
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
<script>
    \$('.js-datepicker').datepicker({
        'format': 'dd/mm/yyyy',
        'autoclose': true,
        language: 'fr'
    });

    function deleteFormation(elem)
    {
        var formation_id = elem.closest('tr').attr('data-formation-id');
        var deleteLink = '";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_delete", ["id" => "formation_id"]);
        echo "';
        deleteLink = deleteLink.replace('formation_id', formation_id);
        swal({
            title: \"Confirmation!\",
            text: \"Voulez vous supprimer cette ligne?\",
            icon: \"warning\",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    \$.ajax({
                        type: \"GET\",
                        url: deleteLink,
                    })
                        .done(function(data){
                            if (data.status == \"Success\") {
                                swal(\"Supprimé avec succés!\", {
                                    icon: \"success\",
                                }).then((ok) => {
                                    location.reload();
                                });
                            } else {
                                swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimé!\", \"error\");
                            }
                        });
                }
            });
    }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  503 => 208,  485 => 194,  475 => 193,  459 => 186,  453 => 183,  447 => 180,  433 => 169,  427 => 166,  420 => 161,  412 => 158,  406 => 154,  404 => 153,  398 => 150,  393 => 147,  388 => 146,  385 => 145,  382 => 144,  379 => 143,  377 => 142,  372 => 141,  370 => 140,  366 => 139,  362 => 138,  359 => 137,  355 => 136,  351 => 135,  347 => 134,  344 => 133,  340 => 132,  336 => 131,  332 => 130,  327 => 129,  323 => 127,  319 => 126,  315 => 125,  310 => 124,  308 => 123,  301 => 122,  297 => 121,  276 => 102,  263 => 91,  257 => 88,  250 => 84,  244 => 81,  238 => 78,  232 => 75,  226 => 72,  220 => 69,  214 => 66,  208 => 63,  199 => 57,  193 => 54,  187 => 51,  181 => 48,  175 => 45,  169 => 42,  166 => 41,  161 => 36,  155 => 33,  149 => 30,  143 => 27,  137 => 24,  125 => 15,  121 => 13,  111 => 12,  96 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formation - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}?v={{ asset_version }}\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des formations mise en place</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE FORMATIONS MISE EN PLACE</h2>

<fieldset class=\"mb-3 list-filter\">
    <legend>Filtre</legend>
    {{ form_start(formation_filter_form) }}
    <div class=\"form-row\">
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.entite, { 'placeholder' : '-- Entité --' }) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.mois, { 'placeholder' : '-- Mois --' }) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.dateOM, { attr: { 'placeholder' : '-- Date OM --' , 'type': 'date'}}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.formateurOrganisme, { 'placeholder' : 'Formateur/Organisme' }) }}
        </div>
        {#<div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.statutFormateur, { 'placeholder' : 'Statut formateur' }) }}
        </div>#}
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.cial, { attr: { 'placeholder' : '-- Commercial --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.client, {'placeholder' : '-- Client --' }) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.intitule, { attr: { 'placeholder' : '-- Intitulé --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.type, { 'placeholder' : '-- Type --' }) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.domaineCompetence, { attr: { 'placeholder' : 'Domaine comtpétence' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.dureeEnJour, { attr: { 'placeholder' : '-- Durée en jour --' }}) }}
        </div>
    </div>
    <br>
    <div class=\"form-row\">
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.dureeEnHeure, { attr: { 'placeholder' : '-- Durée en heure --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.nbStagiaire, { attr: { 'placeholder' : '-- Nb stagiaire --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.demandeur, { attr: { 'placeholder' : '-- Demandeur --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.montantAchatHT, { attr: { 'placeholder' : '-- Montant achat HT --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.montantVenteHT, { attr: { 'placeholder' : '-- Montant Vente HT --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.diffAchatVente, { attr: { 'placeholder' : '-- Diff Achat/Vnete --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.pourcentage, { attr: { 'placeholder' : '-- Pourcentage --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            {{ form_widget(formation_filter_form.pourcentageAchatHT, { attr: { 'placeholder' : '-- Poucentage Achat HT --' }}) }}
        </div>
        <div class=\"form-group col-md\">
            <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
            <a href=\"{{ path('Liste_Formation_Mise_Place_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
        </div>
    </div>
    {{ form_end(formation_filter_form) }}
</fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Entité</th>
                <th>Mois</th>
                <th>Date OM</th>
                <th>Formateur ou organisme</th>
                {#<th>Statut formateur</th>#}
                <th>Cial</th>
                <th>Client</th>
                <th>Intitulé</th>
                <th>Type</th>
                <th>Domaine de compétence</th>
                <th>Durée en jours</th>
                <th>Durée en heures</th>
                <th>Nb stagiaires</th>
                <th>Demandeur</th>
                <th>Montant Achat HT</th>
                <th>Montant Vente HT</th>
                <th>Diff Achat/Vente HT</th>
                <th>%</th>
                <th>% Achat HT</th>
                <th>Actions</th>
            </tr>
        </thead>

        <tbody>
        {% for formation in pagination %}
            <tr data-formation-id=\"{{ formation.idFormation }}\" data-href=\"{{ path('edit_formation', {'id': formation.idFormation}) }}\">
                {% set trans_month_hash = {\"01\": \"Janvier\", \"02\": \"Fevrier\", \"03\": \"Mars\", \"04\": \"Avril\", \"05\": \"Mai\", \"06\": \"Juin\", \"07\": \"Juilllet\", \"08\" : \"Aout\", \"09\": \"Septembre\", \"10\": \"Octobre\", \"11\": \"Novembre\", \"12\": \"Décembre\" } %}
                <td>{{ formation.entite? formation.entite : '' }}</td>
                <td> {{ trans_month_hash[formation.dateOM|date('m')] }}</td>
                <td>{{ formation.dateOM|date('d/m/Y') }}</td>
                <td>{{ formation.formateur? formation.formateur : '' }} </td>
                {#<td>{{ formation.OMStatut? formation.OMStatut| striptags | slice(0, 12) ~ '...'  : '' }} </td>#}
                <td> {{ formation.commercial }}  </td>
                <td>{{ formation.client? formation.client: '' }}</td>
                <td>{{ formation.intitule }}</td>
                <td>{{ formation.type|translateLetterToWord }} </td>
                <td>{#formation.domaineCompetence #}</td>
                 <td>{{ formation.dureeEnJour }}</td>
                 <td>{{ formation.dureeEnHeure }}</td>
                 <td>{{ formation.nbStagiaires }}</td>
                 <td>{# formation.demandeur #}</td>
                <td>{{ formation.pfmteurTotalHt|number_format(2, ',', '.') }}</td>
                <td> {{ formation.pvTotalHt|number_format(2, ',', '.') }}</td>
                {% set diff = formation.pvTotalHt|float - formation.pfmteurTotalHt|float %}
                <td>{{ diff|number_format(2, ',', '.') }} </td>
                {% set pourcentage = 0 %}
                {% if formation.pvTotalHt|float > 0 %}
                   {% set pourcentage = (diff/formation.pvTotalHt|float) * 100 %}
                {% endif %}
                <td>{{ pourcentage|number_format(2, ',', '.') }}</td>
                <td>{# % achat HT #}</td>

                <td>
                    <a target=\"_blank\" href=\"{{ path('edit_formation', {'id': formation.idFormation}) }}\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    {% if is_granted('edit', 'Formations') %}
                        <a onclick=\"deleteFormation(\$(this))\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
        </tbody>

        <tfoot>
            <tr >
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> {{ pagination.getTotalItemCount }}
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    {{ knp_pagination_render(pagination) }}
                </td>
            </tr>
        </tfoot>
    </table>
</fieldset>

<div class=\"row\">
    <div class=\"col-sm-12\">
        <nav class=\"navbar navbar-expand-sm bg-light navbar-light justify-content-center\">
            <div class=\"col-sm-3\">
                <a class=\"nav-link btn btn-info\" target=\"_blank\" href=\"{{ path('create_formation', {'typeFormation': constant('\\\\App\\\\Constants\\\\FormationType::FORMATION_INTRA')}) }}\">Ajouter formation intra</a>
            </div>
            <div class=\"col-sm-3\">
                <a class=\"nav-link btn btn-info\" target=\"_blank\" href=\"{{ path('create_formation', {'typeFormation': constant('\\\\App\\\\Constants\\\\FormationType::FORMATION_INTER')}) }}\">Ajouter formation inter</a>
            </div>
            <div class=\"col-sm-3\">
                <a class=\"nav-link btn btn-info\" target=\"_blank\" href=\"{{ path('create_formation', {'typeFormation': constant('\\\\App\\\\Constants\\\\FormationType::FORMATION_SOUS_TRAITANCE')}) }}\">Ajouter formation sous-traitance</a>
            </div>
        </nav>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
<script>
    \$('.js-datepicker').datepicker({
        'format': 'dd/mm/yyyy',
        'autoclose': true,
        language: 'fr'
    });

    function deleteFormation(elem)
    {
        var formation_id = elem.closest('tr').attr('data-formation-id');
        var deleteLink = '{{ path('formation_delete', {'id':'formation_id'}) }}';
        deleteLink = deleteLink.replace('formation_id', formation_id);
        swal({
            title: \"Confirmation!\",
            text: \"Voulez vous supprimer cette ligne?\",
            icon: \"warning\",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    \$.ajax({
                        type: \"GET\",
                        url: deleteLink,
                    })
                        .done(function(data){
                            if (data.status == \"Success\") {
                                swal(\"Supprimé avec succés!\", {
                                    icon: \"success\",
                                }).then((ok) => {
                                    location.reload();
                                });
                            } else {
                                swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimé!\", \"error\");
                            }
                        });
                }
            });
    }
</script>

{% endblock %}
", "formation/index.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/index.html.twig");
    }
}
