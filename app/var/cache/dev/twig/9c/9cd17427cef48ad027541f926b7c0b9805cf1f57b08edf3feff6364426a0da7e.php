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

/* facture/index.html.twig */
class __TwigTemplate_dfc19a255894bdd16d8bf0cdc7a3c2d658290381660896a44232fa7d5b01c4f8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/index.html.twig", 1);
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        // line 13
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste Factures et Avoirs</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES FACTURES ET AVOIRS</h2>
    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 26, $this->source); })()), "structure", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Structure"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                <p>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 29, $this->source); })()), "dateCreation", [], "any", false, false, false, 29), 'widget', ["attr" => ["placeholder" => "Date de création"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                <p>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 32, $this->source); })()), "ref", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "N° Facture/Avoir"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 35, $this->source); })()), "noDossierRef", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "N° Dossier interne"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 38, $this->source); })()), "numDossierOpca", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "N° Dossier OPCO"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 41, $this->source); })()), "destinataire", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Destinataire"]]);
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 46, $this->source); })()), "client", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "client"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 49, $this->source); })()), "opca", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "OPCO"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 53
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 53, $this->source); })()), "intituleStage", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Intitulé stage"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 57
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 57, $this->source); })()), "commercial", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Commercial"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 61
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 61, $this->source); })()), "statut", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Status"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Factures_Avoirs_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 68
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["facture_filter_form"]) || array_key_exists("facture_filter_form", $context) ? $context["facture_filter_form"] : (function () { throw new RuntimeError('Variable "facture_filter_form" does not exist.', 68, $this->source); })()), 'form_end');
        echo "
    </fieldset>
    <table class=\"table table-sm table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>Structure</th>
            <th>Date</th>
            <th>N°Facture/Avoir</th>
            <th>N°Dossier interne</th>
            <th>N°Dossier OPCO</th>
            <th>Destinataire</th>
            <th>Client</th>
            <th>OPCO</th>
            <th>Intitulé stage (libelle facture)</th>
            <th>Commercial</th>
            <th>Statut Facture/Avoir</th>
            <th>Total HT</th>
            <th>TVA Collectée</th>
            <th>Total TTC</th>
            <th> >Action</th>
        </tr>
        </thead>
        <tbody>

        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 92, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 93
            echo "            <tr data-facture-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "factureId", [], "any", false, false, false, 93), "html", null, true);
            echo "\" data-avoir-id=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["facture"], "idAvoirLiee", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["facture"], "idAvoirLiee", [], "any", false, false, false, 93), "0")) : ("0")), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_Avoir_Voir", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "factureId", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\">
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "structure", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateCreation", [], "any", false, false, false, 95), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "ref", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id_dossier", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" target=\"_black\" title=\"Voir dossier\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "noDossierRef", [], "any", false, false, false, 98), "html", null, true);
            echo "</a>
                </td>
                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "numDossierOpca", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, $context["facture"], "dest1", [], "any", false, false, false, 102) == twig_constant("DESTINATAIRE_CLIENT", (isset($context["factureConst"]) || array_key_exists("factureConst", $context) ? $context["factureConst"] : (function () { throw new RuntimeError('Variable "factureConst" does not exist.', 102, $this->source); })())))) {
                // line 103
                echo "                        Client
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 104
$context["facture"], "dest1", [], "any", false, false, false, 104) == twig_constant("DESTINATAIRE_OPCA", (isset($context["factureConst"]) || array_key_exists("factureConst", $context) ? $context["factureConst"] : (function () { throw new RuntimeError('Variable "factureConst" does not exist.', 104, $this->source); })())))) {
                // line 105
                echo "                        OPCA
                    ";
            } else {
                // line 107
                echo "                        Autre
                    ";
            }
            // line 109
            echo "                </td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 110)) ? (twig_get_attribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 110)) : (twig_get_attribute($this->env, $this->source, $context["facture"], "nomClient", [], "any", false, false, false, 110))), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "opca", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "intituleFacture", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "commercial", [], "any", false, false, false, 113), "html", null, true);
            echo "</td>
                <td>";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "statut", [], "any", false, false, false, 114), "html", null, true);
            echo "</td>
                <td>";
            // line 115
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "totalRegleHt", [], "any", false, false, false, 115), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "mntTva", [], "any", false, false, false, 116), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 117
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["facture"], "totalRegleHt", [], "any", false, false, false, 117) + twig_get_attribute($this->env, $this->source, $context["facture"], "mntTva", [], "any", false, false, false, 117)), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_Avoir_Voir", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "factureId", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                        
                    <a onclick=\"deleteFacture(\$(this))\" href=\"javascript:void(0)\">
-                        <i class=\"fas fa-trash-alt text-danger\"></i>
-                   </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "        </tbody>

        <tfoot>
        <tr >
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                <strong>Total : </strong> ";
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 134), "html", null, true);
        echo "
            </td>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                ";
        // line 137
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 137, $this->source); })()));
        echo "
            </td>
        </tr>
        </tfoot>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 145
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 146
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script>
        function deleteFacture(elem)
        {
            var facture_id = elem.closest('tr').attr('data-facture-id');
            var avoir_id = elem.closest('tr').attr('data-avoir-id');
            var deleteLink = '";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_Controller/deleteFacture", ["idFacture" => "factureId", "idAvoir" => "avoirId"]), "html", null, true);
        echo "';
            deleteLink = deleteLink.replace('factureId', facture_id);
            deleteLink = deleteLink.replace('avoirId', avoir_id);
            console.log(deleteLink);
            swal({
                title: \"Confirmation!\",
                text: \"Voulez vous supprimer la facture?\",
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
                            swal({
                                title: \"Error!\",
                                text: data.message,
                                icon: \"warning\",
                                buttons: false,
                                dangerMode: true,
                            });
                        }
                    });
        }
        });
        }

        \$(function () {
            \$('#client').select2({
                placeholder: \"-- client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.client.asynch-search");
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

            ";
        // line 211
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 211, $this->source); })()), "request", [], "any", false, false, false, 211), "query", [], "any", false, false, false, 211), "get", [0 => "client"], "method", false, false, false, 211)) {
            // line 212
            echo "            var data = {
                id: \"";
            // line 213
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 213, $this->source); })()), "request", [], "any", false, false, false, 213), "query", [], "any", false, false, false, 213), "get", [0 => "client"], "method", false, false, false, 213), "html", null, true);
            echo "\",
                text: '";
            // line 214
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 214, $this->source); })()), "request", [], "any", false, false, false, 214), "query", [], "any", false, false, false, 214), "get", [0 => "client"], "method", false, false, false, 214), "js"), "html", null, true);
            echo "'
            };

            var newOption = new Option(data.text, data.id, true, true);
            \$('#client').append(newOption).trigger('change');

            ";
        }
        // line 221
        echo "        });

        \$(function () {
            \$('#opca').select2({
                placeholder: \"-- OPCO --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 229
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.opca.asynch-search");
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

            ";
        // line 240
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "request", [], "any", false, false, false, 240), "query", [], "any", false, false, false, 240), "get", [0 => "opca"], "method", false, false, false, 240)) {
            // line 241
            echo "            var data = {
                id: \"";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 242, $this->source); })()), "request", [], "any", false, false, false, 242), "query", [], "any", false, false, false, 242), "get", [0 => "opca"], "method", false, false, false, 242), "html", null, true);
            echo "\",
                text: '";
            // line 243
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 243, $this->source); })()), "request", [], "any", false, false, false, 243), "query", [], "any", false, false, false, 243), "get", [0 => "opca"], "method", false, false, false, 243), "js"), "html", null, true);
            echo "'
            };

            var newOption = new Option(data.text, data.id, true, true);
            \$('#opca').append(newOption).trigger('change');

            ";
        }
        // line 250
        echo "        });
        //filre commercial
        \$(function () {
            \$('#commercial').select2({
                placeholder: \"-- commercial --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.commercial.asynch-search");
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

            ";
        // line 269
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "request", [], "any", false, false, false, 269), "query", [], "any", false, false, false, 269), "get", [0 => "commercial"], "method", false, false, false, 269)) {
            // line 270
            echo "            var data = {
                id: \"";
            // line 271
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 271, $this->source); })()), "request", [], "any", false, false, false, 271), "query", [], "any", false, false, false, 271), "get", [0 => "commercial"], "method", false, false, false, 271), "html", null, true);
            echo "\",
                text: '";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 272, $this->source); })()), "request", [], "any", false, false, false, 272), "query", [], "any", false, false, false, 272), "get", [0 => "commercial"], "method", false, false, false, 272), "html", null, true);
            echo "'
            };

            var newOption = new Option(data.text, data.id, true, true);
            \$('#commercial').append(newOption).trigger('change');

            ";
        }
        // line 279
        echo "        });

        \$(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'clearBtn': true,
                'language': 'fr',
            });
        })

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 279,  558 => 272,  554 => 271,  551 => 270,  549 => 269,  535 => 258,  525 => 250,  515 => 243,  511 => 242,  508 => 241,  506 => 240,  492 => 229,  482 => 221,  472 => 214,  468 => 213,  465 => 212,  463 => 211,  449 => 200,  402 => 156,  388 => 146,  378 => 145,  361 => 137,  355 => 134,  348 => 129,  332 => 119,  327 => 117,  323 => 116,  319 => 115,  315 => 114,  311 => 113,  307 => 112,  303 => 111,  299 => 110,  296 => 109,  292 => 107,  288 => 105,  286 => 104,  283 => 103,  281 => 102,  276 => 100,  269 => 98,  264 => 96,  260 => 95,  256 => 94,  247 => 93,  243 => 92,  216 => 68,  210 => 65,  202 => 61,  195 => 57,  188 => 53,  182 => 49,  176 => 46,  168 => 41,  162 => 38,  156 => 35,  150 => 32,  144 => 29,  138 => 26,  132 => 23,  121 => 15,  117 => 13,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Facture - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    {#{% include '_en-construction.html.twig' %}#}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste Factures et Avoirs</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES FACTURES ET AVOIRS</h2>
    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(facture_filter_form,{'attr':{'class':'list-filter'}})  }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {{ form_widget(facture_filter_form.structure, {attr: {'class' : 'w-100', placeholder : 'Structure'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(facture_filter_form.dateCreation, {attr: {placeholder : 'Date de création'} }) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(facture_filter_form.ref, { attr : {'class' : 'w-100', placeholder : 'N° Facture/Avoir' } } )  }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(facture_filter_form.noDossierRef, { attr: {'class' : 'w-100', placeholder : 'N° Dossier interne'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(facture_filter_form.numDossierOpca, { attr: {'class' : 'w-100', placeholder : 'N° Dossier OPCO'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(facture_filter_form.destinataire, { attr: {'class' : 'w-100', placeholder : 'Destinataire'} } ) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {{ form_widget(facture_filter_form.client, { attr: {'class' : 'w-100', placeholder : 'client'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(facture_filter_form.opca, { attr: {'class' : 'w-100', placeholder : 'OPCO'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(facture_filter_form.intituleStage, { attr: {'class' : 'w-100', placeholder : 'Intitulé stage'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(facture_filter_form.commercial, { attr: {'class' : 'w-100', placeholder : 'Commercial'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.prenom) }}#}
                {{ form_widget(facture_filter_form.statut, { attr: {'class' : 'w-100', placeholder : 'Status'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Liste_Factures_Avoirs_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(facture_filter_form)  }}
    </fieldset>
    <table class=\"table table-sm table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>Structure</th>
            <th>Date</th>
            <th>N°Facture/Avoir</th>
            <th>N°Dossier interne</th>
            <th>N°Dossier OPCO</th>
            <th>Destinataire</th>
            <th>Client</th>
            <th>OPCO</th>
            <th>Intitulé stage (libelle facture)</th>
            <th>Commercial</th>
            <th>Statut Facture/Avoir</th>
            <th>Total HT</th>
            <th>TVA Collectée</th>
            <th>Total TTC</th>
            <th> >Action</th>
        </tr>
        </thead>
        <tbody>

        {% for facture in pagination %}
            <tr data-facture-id=\"{{ facture.factureId }}\" data-avoir-id=\"{{ facture.idAvoirLiee|default('0') }}\" data-href=\"{{ path('Facture_Avoir_Voir', {'id': facture.factureId}) }}\">
                <td>{{ facture.structure }}</td>
                <td>{{ facture.dateCreation | date('d-m-Y') }}</td>
                <td>{{ facture.ref }}</td>
                <td>
                    <a href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', {id: facture.id_dossier }) }}\" target=\"_black\" title=\"Voir dossier\">{{ facture.noDossierRef }}</a>
                </td>
                <td>{{ facture.numDossierOpca }}</td>
                <td>
                    {% if facture.dest1 == constant('DESTINATAIRE_CLIENT', factureConst) %}
                        Client
                    {% elseif facture.dest1 == constant('DESTINATAIRE_OPCA', factureConst) %}
                        OPCA
                    {% else %}
                        Autre
                    {% endif %}
                </td>
                <td>{{ facture.client?facture.client:facture.nomClient }}</td>
                <td>{{ facture.opca}}</td>
                <td>{{ facture.intituleFacture}}</td>
                <td>{{ facture.commercial}}</td>
                <td>{{ facture.statut }}</td>
                <td>{{ facture.totalRegleHt |number_format(2, ',', ' ') }}</td>
                <td>{{ facture.mntTva |number_format(2, ',', ' ') }}</td>
                <td>{{ (facture.totalRegleHt  + facture.mntTva) |number_format(2, ',', ' ') }}</td>
                <td>
                    <a href=\"{{ path('Facture_Avoir_Voir', {'id': facture.factureId}) }}\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                        
                    <a onclick=\"deleteFacture(\$(this))\" href=\"javascript:void(0)\">
-                        <i class=\"fas fa-trash-alt text-danger\"></i>
-                   </a>
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

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script>
        function deleteFacture(elem)
        {
            var facture_id = elem.closest('tr').attr('data-facture-id');
            var avoir_id = elem.closest('tr').attr('data-avoir-id');
            var deleteLink = '{{ path('Facture_Controller/deleteFacture', {'idFacture':'factureId', 'idAvoir':'avoirId'}) }}';
            deleteLink = deleteLink.replace('factureId', facture_id);
            deleteLink = deleteLink.replace('avoirId', avoir_id);
            console.log(deleteLink);
            swal({
                title: \"Confirmation!\",
                text: \"Voulez vous supprimer la facture?\",
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
                            swal({
                                title: \"Error!\",
                                text: data.message,
                                icon: \"warning\",
                                buttons: false,
                                dangerMode: true,
                            });
                        }
                    });
        }
        });
        }

        \$(function () {
            \$('#client').select2({
                placeholder: \"-- client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.dossier.client.asynch-search') }}',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    }
                }
            });

            {% if app.request.query.get('client') %}
            var data = {
                id: \"{{ app.request.query.get('client') }}\",
                text: '{{ app.request.query.get('client')|e('js') }}'
            };

            var newOption = new Option(data.text, data.id, true, true);
            \$('#client').append(newOption).trigger('change');

            {% endif  %}
        });

        \$(function () {
            \$('#opca').select2({
                placeholder: \"-- OPCO --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.dossier.opca.asynch-search') }}',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    }
                }
            });

            {% if app.request.query.get('opca') %}
            var data = {
                id: \"{{ app.request.query.get('opca') }}\",
                text: '{{ app.request.query.get('opca')|e('js') }}'
            };

            var newOption = new Option(data.text, data.id, true, true);
            \$('#opca').append(newOption).trigger('change');

            {% endif  %}
        });
        //filre commercial
        \$(function () {
            \$('#commercial').select2({
                placeholder: \"-- commercial --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.dossier.commercial.asynch-search') }}',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    }
                }
            });

            {% if app.request.query.get('commercial') %}
            var data = {
                id: \"{{ app.request.query.get('commercial') }}\",
                text: '{{ app.request.query.get('commercial') }}'
            };

            var newOption = new Option(data.text, data.id, true, true);
            \$('#commercial').append(newOption).trigger('change');

            {% endif  %}
        });

        \$(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'clearBtn': true,
                'language': 'fr',
            });
        })

    </script>
{% endblock %}
", "facture/index.html.twig", "/var/www/templates/facture/index.html.twig");
    }
}
