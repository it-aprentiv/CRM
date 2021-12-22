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

/* facture/formation.html.twig */
class __TwigTemplate_c7491ab2a630ced72f4ae0ea0e88d02d53b9a22024956078a01016a62b78889c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/formation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/formation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/formation.html.twig", 1);
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

        echo "Factures Formations";
        
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Factures formations</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE FACTURES FORMATIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
        <div class=\"form-row\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 24, $this->source); })()), "children", [], "any", false, false, false, 24), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "attr", [], "any", false, false, false, 24), "ordre-field", [], "array", false, false, false, 24) <=> twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 24, $this->source); })()), "vars", [], "any", false, false, false, 24), "attr", [], "any", false, false, false, 24), "ordre-field", [], "array", false, false, false, 24)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["field_form"]) {
            // line 25
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_form"], "vars", [], "any", false, true, false, 25), "attr", [], "any", false, true, false, 25), "class", [], "any", true, true, false, 25)) {
                // line 26
                echo "                    ";
                $context["class"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field_form"], "vars", [], "any", false, false, false, 26), "attr", [], "any", false, false, false, 26), "class", [], "any", false, false, false, 26);
                // line 27
                echo "                ";
            } else {
                // line 28
                echo "                    ";
                $context["class"] = "";
                // line 29
                echo "                ";
            }
            // line 30
            echo "                ";
            if (!twig_in_filter("money-type", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 30, $this->source); })()))) {
                // line 31
                echo "                    ";
                $context["class"] = ((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 31, $this->source); })()) . " w-100");
                // line 32
                echo "                ";
            }
            // line 33
            echo "                <div class=\"form-group col-md-2\">
                    ";
            // line 34
            if (twig_in_filter("crm-money-type", (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 34, $this->source); })()))) {
                // line 35
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field_form"], 'widget', ["attr" => ["class" => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 35, $this->source); })())]]);
                echo "
                    ";
            } elseif (twig_in_filter("number-money-type",             // line 36
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 36, $this->source); })()))) {
                // line 37
                echo "                        <div class=\"input-group\">
                            ";
                // line 38
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field_form"], 'widget', ["attr" => ["class" => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 38, $this->source); })())]]);
                echo "
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\"> €</span>
                            </div>
                        </div>
                    ";
            } else {
                // line 44
                echo "                        <p>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field_form"], 'widget', ["attr" => ["class" => (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 44, $this->source); })())]]);
                echo "</p>
                    ";
            }
            // line 46
            echo "                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_formation_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>ENTITE</th>
                <th>Num Facture</th>
                <th>Formateur</th>
                <th>CLIENT</th>
                <th>Réception facture</th>
                <th>Date facture</th>
                <th>MOIS</th>
                <th>Intitulé</th>
                <th>Heure fait</th>
                <th>Heure restant</th>
                <th>MONTANT HT</th>
                <th>Date validation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 76
            echo "                <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id_formation", [], "any", false, false, false, 76)]), "html", null, true);
            echo "#suivi-om\">
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "structure", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "numfac", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "nom_formateur", [], "any", false, false, false, 79), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "prenom_formateur", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "client", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "recepfac", [], "any", false, false, false, 81), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "datefac", [], "any", false, false, false, 82), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->intMonthToLetter(twig_get_attribute($this->env, $this->source, $context["facture"], "moisfac", [], "any", false, false, false, 83)), "html", null, true);
            echo "</td>
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "intitule_stage", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "heurefait", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "heurerestant", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                    <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "montantht", [], "any", false, false, false, 87), 2, ",", " "), "html", null, true);
            echo " €</td>
                    <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateValidation", [], "any", false, false, false, 88), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>
                        <a target=\"_blank\" href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("edit_formation", ["id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id_formation", [], "any", false, false, false, 90)]), "html", null, true);
            echo "#suivi-om\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "        </tbody>
        <tfoot>
            <tr>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 100, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 100), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 103
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 103, $this->source); })()));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 111
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 112
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".js-datepicker\").each(function () {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });


            \$('#client').select2({
                placeholder: \"-- client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 133
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
        // line 144
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 144, $this->source); })()), "request", [], "any", false, false, false, 144), "query", [], "any", false, false, false, 144), "get", [0 => "client"], "method", false, false, false, 144)) {
            // line 145
            echo "                var data = {
                    id: \"";
            // line 146
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "request", [], "any", false, false, false, 146), "query", [], "any", false, false, false, 146), "get", [0 => "client"], "method", false, false, false, 146), "html", null, true);
            echo "\",
                    text: '";
            // line 147
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "request", [], "any", false, false, false, 147), "query", [], "any", false, false, false, 147), "get", [0 => "client"], "method", false, false, false, 147), "js"), "html", null, true);
            echo "'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#client').append(newOption).trigger('change');

        ";
        }
        // line 154
        echo "

                var dossierNom = \$('#intitule');
                var pathurl = '";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.competence.asynch-search");
        echo "';
               ";
        // line 159
        echo "                
                
                dossierNom.select2({
                    placeholder: \"-- Intitulé --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: pathurl,
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
                                        text: item.text,
                                        id: item.idid
                                    };
                                })
                            };
                        }
                    }
                });

            });
    </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 159,  409 => 157,  404 => 154,  394 => 147,  390 => 146,  387 => 145,  385 => 144,  371 => 133,  346 => 112,  336 => 111,  319 => 103,  313 => 100,  307 => 96,  295 => 90,  290 => 88,  286 => 87,  282 => 86,  278 => 85,  274 => 84,  270 => 83,  266 => 82,  262 => 81,  258 => 80,  252 => 79,  248 => 78,  244 => 77,  239 => 76,  235 => 75,  210 => 53,  204 => 50,  200 => 48,  193 => 46,  187 => 44,  178 => 38,  175 => 37,  173 => 36,  168 => 35,  166 => 34,  163 => 33,  160 => 32,  157 => 31,  154 => 30,  151 => 29,  148 => 28,  145 => 27,  142 => 26,  139 => 25,  135 => 24,  130 => 22,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Factures Formations{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Factures formations</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE FACTURES FORMATIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        {{ form_start(form_filter,{'attr':{'class':'list-filter'}}) }}
        <div class=\"form-row\">
            {% for field_form in form_filter.children|sort((a, b) => a.vars.attr['ordre-field'] <=> b.vars.attr['ordre-field']) %}
                {% if field_form.vars.attr.class is defined %}
                    {% set class = field_form.vars.attr.class %}
                {% else %}
                    {% set class = '' %}
                {% endif %}
                {% if 'money-type' not in class %}
                    {% set class = class~\" w-100\" %}
                {% endif %}
                <div class=\"form-group col-md-2\">
                    {% if 'crm-money-type' in class %}
                        {{ form_widget(field_form, { attr: {'class' : class} }) }}
                    {% elseif 'number-money-type' in class %}
                        <div class=\"input-group\">
                            {{ form_widget(field_form, { attr: {'class' : class} }) }}
                            <div class=\"input-group-append\">
                                <span class=\"input-group-text\"> €</span>
                            </div>
                        </div>
                    {% else %}
                        <p>{{ form_widget(field_form, { attr: {'class' : class} }) }}</p>
                    {% endif %}
                </div>
            {% endfor %}
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Facture_formation_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(form_filter) }}
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>ENTITE</th>
                <th>Num Facture</th>
                <th>Formateur</th>
                <th>CLIENT</th>
                <th>Réception facture</th>
                <th>Date facture</th>
                <th>MOIS</th>
                <th>Intitulé</th>
                <th>Heure fait</th>
                <th>Heure restant</th>
                <th>MONTANT HT</th>
                <th>Date validation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            {% for facture in pagination %}
                <tr data-href=\"{{ path('edit_formation', {'id': facture.id_formation}) }}#suivi-om\">
                    <td>{{ facture.structure }}</td>
                    <td>{{ facture.numfac }}</td>
                    <td>{{ facture.nom_formateur }} {{ facture.prenom_formateur }}</td>
                    <td>{{ facture.client }}</td>
                    <td>{{ facture.recepfac | date('d-m-Y') }}</td>
                    <td>{{ facture.datefac | date('d-m-Y') }}</td>
                    <td>{{ facture.moisfac | month_letter }}</td>
                    <td>{{ facture.intitule_stage }}</td>
                    <td>{{ facture.heurefait }}</td>
                    <td>{{ facture.heurerestant }}</td>
                    <td>{{ facture.montantht | number_format(2, ',', ' ') }} €</td>
                    <td>{{ facture.dateValidation | date('d-m-Y') }}</td>
                    <td>
                        <a target=\"_blank\" href=\"{{ path('edit_formation', {'id': facture.id_formation}) }}#suivi-om\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
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

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".js-datepicker\").each(function () {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });


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


                var dossierNom = \$('#intitule');
                var pathurl = '{{ path('crm.dossier.competence.asynch-search') }}';
               {# var intitule = '{{ intitule|json_encode|raw }}';#}
                
                
                dossierNom.select2({
                    placeholder: \"-- Intitulé --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: pathurl,
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
                                        text: item.text,
                                        id: item.idid
                                    };
                                })
                            };
                        }
                    }
                });

            });
    </script>
    {#{% include 'Common/client-ajax-js.html.twig' with { attrs: form_filter.client.vars } %}#}
{% endblock %}", "facture/formation.html.twig", "/home/jeremy/Bureau/project/app/templates/facture/formation.html.twig");
    }
}
