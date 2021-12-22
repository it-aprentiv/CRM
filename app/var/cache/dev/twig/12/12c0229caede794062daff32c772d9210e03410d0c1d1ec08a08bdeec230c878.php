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

/* facture/domiciliation-location.html.twig */
class __TwigTemplate_0fa6e33ec04ab35d51a4a1716c7d624c30fadfb634e73afa94efab744fdd1a23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/domiciliation-location.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/domiciliation-location.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/domiciliation-location.html.twig", 1);
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

        echo "Facture/Domiciliation";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
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
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste Factures/Domiciliation</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES FACTURES/DOMICILIATIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
        <div class=\"form-row\">
            <!--<div class=\"form-group col-md-2\">
                { { form_widget(form_filter.structure, { attr: {'placeholder' : 'Client',  'class' : 'w-100'} }) }}
            </div> -->
            <div class=\"form-group col-md-2\">
                <p>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 29, $this->source); })()), "client", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-100 py-3"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                <p>";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 32, $this->source); })()), "type", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => "Reference Dossier", "class" => "w-100"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 36
        echo "                <p>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 36, $this->source); })()), "reference", [], "any", false, false, false, 36), 'widget', ["attr" => ["placeholder" => "Réference", "class" => "w-100"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 40
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 40, $this->source); })()), "numFacture", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Numéro de facture"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 44
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 44, $this->source); })()), "dossierStatut", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-100"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Domiciliation_Location_Controller/factures");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>Structure</th>
            <th>N° facture</th>
            <th> N° Ref</th>
            <th>Client</th>
            <th>Type</th>
            <th>Partenaire</th>
            <th>Date facture</th>
            <th>Date estimée de paiement</th>
            <th>Montant HT</th>
            <th>Montant TTC</th>
            <th>Commercial</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 73, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["factureDom"]) {
            // line 74
            echo "            <tr>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "structure", [], "any", false, false, false, 75), "html", null, true);
            echo "</td>
                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "numero", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.domiciliation.fiche", ["id" => twig_get_attribute($this->env, $this->source, $context["factureDom"], "idDom", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "ref", [], "any", false, false, false, 77), "html", null, true);
            echo "</a></td>
                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "nomStr", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "type", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                <td>";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["factureDom"], "partenaire", [], "any", false, false, false, 80) == 1)) {
                echo " ";
                echo "Oui";
                echo " ";
            } else {
                echo "Non";
                echo " ";
            }
            echo "</td>
                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "datefacture", [], "any", false, false, false, 81), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "dateestimepaiement", [], "any", false, false, false, 82), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "ht", [], "any", false, false, false, 83), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "ttc", [], "any", false, false, false, 84), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "commercial", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["factureDom"], "statut", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_Domiciliation_Voir", ["idFactDom" => twig_get_attribute($this->env, $this->source, $context["factureDom"], "idfacturedom", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\"
                       class=\"action-com\" data-formtitle=\"Detail de la commission\" data-mod=\"#gen\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <!-- <a href=\"#\"
                       class=\"action-com\" data-formtitle=\"Supprimer la commission\" data-mod=\"#gen\">
                        <i class=\"fas fa-trash-alt text-danger\"></i>
                    </a> -->
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factureDom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "        </tbody>

        <tfoot>
        <tr>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                <strong>Total : </strong> ";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 104, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 104), "html", null, true);
        echo "
            </td>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                ";
        // line 107
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 107, $this->source); })()));
        echo "
            </td>
        </tr>
        </tfoot>
    </table>

    <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
            <a class=\"btn btn-info\" href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Domiciliation_Location_Controller/creation");
        echo "\">
                <i class=\"fa fa-plus\"></i>
                Ajouter
            </a>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#facture_domiciliation_filter_client').select2({
                placeholder: \"-- client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 135
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
        // line 145
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "request", [], "any", false, false, false, 145), "query", [], "any", false, false, false, 145), "get", [0 => "facture_domiciliation_filter"], "method", false, false, false, 145)) {
            // line 146
            echo "
                var data = {
                    id: \"";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "request", [], "any", false, false, false, 148), "query", [], "any", false, false, false, 148), "get", [0 => "facture_domiciliation_filter"], "method", false, false, false, 148), "client", [], "array", false, false, false, 148), "html", null, true);
            echo "\",
                    text: '";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "request", [], "any", false, false, false, 149), "query", [], "any", false, false, false, 149), "get", [0 => "facture_domiciliation_filter"], "method", false, false, false, 149), "client", [], "array", false, false, false, 149), "html", null, true);
            echo "'
                };
                var newOption = new Option(data.text, data.id, true, true);
                \$('#facture_domiciliation_filter_client').append(newOption).trigger('change');

            ";
        }
        // line 155
        echo "
        });
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/domiciliation-location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 155,  377 => 149,  373 => 148,  369 => 146,  367 => 145,  354 => 135,  339 => 124,  329 => 123,  311 => 115,  300 => 107,  294 => 104,  287 => 99,  270 => 88,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  245 => 81,  234 => 80,  230 => 79,  226 => 78,  220 => 77,  216 => 76,  212 => 75,  209 => 74,  205 => 73,  180 => 51,  174 => 48,  166 => 44,  159 => 40,  152 => 36,  146 => 32,  140 => 29,  131 => 23,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Facture/Domiciliation{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste Factures/Domiciliation</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES FACTURES/DOMICILIATIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(form_filter,{'attr':{'class':'list-filter'}}) }}
        <div class=\"form-row\">
            <!--<div class=\"form-group col-md-2\">
                { { form_widget(form_filter.structure, { attr: {'placeholder' : 'Client',  'class' : 'w-100'} }) }}
            </div> -->
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(form_filter.client, { attr : {'class' : 'w-100 py-3' } } )  }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(form_filter.type, { attr: {'placeholder' : 'Reference Dossier',  'class' : 'w-100'} }) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.societe) }}#}
                <p>{{ form_widget(form_filter.reference, { attr : {'placeholder' : 'Réference',  'class' : 'w-100' } } ) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.nom) }}#}
                {{ form_widget(form_filter.numFacture, { attr: {'class' : 'w-100', placeholder : 'Numéro de facture'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.nom) }}#}
                {{ form_widget(form_filter.dossierStatut, { attr: {'class' : 'w-100'} } ) }}
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Domiciliation_Location_Controller/factures') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(form_filter) }}
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>Structure</th>
            <th>N° facture</th>
            <th> N° Ref</th>
            <th>Client</th>
            <th>Type</th>
            <th>Partenaire</th>
            <th>Date facture</th>
            <th>Date estimée de paiement</th>
            <th>Montant HT</th>
            <th>Montant TTC</th>
            <th>Commercial</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for factureDom in pagination %}
            <tr>
                <td>{{ factureDom.structure }}</td>
                <td>{{ factureDom.numero }}</td>
                <td><a href=\"{{ path('crm.domiciliation.fiche', {id : factureDom.idDom}) }}\" target=\"_blank\">{{ factureDom.ref }}</a></td>
                <td>{{ factureDom.nomStr }}</td>
                <td>{{ factureDom.type }}</td>
                <td>{% if factureDom.partenaire == 1 %} {{ \"Oui\" }} {% else %}{{ \"Non\" }} {% endif %}</td>
                <td>{{ factureDom.datefacture|date('d-m-Y') }}</td>
                <td>{{ factureDom.dateestimepaiement|date('d-m-Y') }}</td>
                <td>{{ factureDom.ht|number_format(2, ',', ' ') }}</td>
                <td>{{ factureDom.ttc|number_format(2, ',', ' ') }}</td>
                <td>{{ factureDom.commercial }}</td>
                <td>{{ factureDom.statut }}</td>
                <td>
                    <a href=\"{{ path('Facture_Domiciliation_Voir', {'idFactDom': factureDom.idfacturedom}) }}\"
                       class=\"action-com\" data-formtitle=\"Detail de la commission\" data-mod=\"#gen\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <!-- <a href=\"#\"
                       class=\"action-com\" data-formtitle=\"Supprimer la commission\" data-mod=\"#gen\">
                        <i class=\"fas fa-trash-alt text-danger\"></i>
                    </a> -->
                </td>
            </tr>
        {% endfor %}
        </tbody>

        <tfoot>
        <tr>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                <strong>Total : </strong> {{ pagination.getTotalItemCount }}
            </td>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                {{ knp_pagination_render(pagination) }}
            </td>
        </tr>
        </tfoot>
    </table>

    <div class=\"row\">
        <div class=\"col-sm-12 text-center\">
            <a class=\"btn btn-info\" href=\"{{ path('Domiciliation_Location_Controller/creation') }}\">
                <i class=\"fa fa-plus\"></i>
                Ajouter
            </a>
        </div>
    </div>

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#facture_domiciliation_filter_client').select2({
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
            {% if app.request.query.get('facture_domiciliation_filter') %}

                var data = {
                    id: \"{{ app.request.query.get('facture_domiciliation_filter')['client']}}\",
                    text: '{{ app.request.query.get('facture_domiciliation_filter')['client'] }}'
                };
                var newOption = new Option(data.text, data.id, true, true);
                \$('#facture_domiciliation_filter_client').append(newOption).trigger('change');

            {% endif  %}

        });
    </script>
    {#{% include 'Common/client-ajax-js.html.twig' with { attrs: form_filter.client.vars } %}#}
{% endblock %}", "facture/domiciliation-location.html.twig", "/home/jeremy/Bureau/project/app/templates/facture/domiciliation-location.html.twig");
    }
}
