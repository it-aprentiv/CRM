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

/* encaissement/index.html.twig */
class __TwigTemplate_c1f070030629e45afee0da7936658125695b8eff24f5781ff4ebe22e88bbffdb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "encaissement/index.html.twig", 1);
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

        echo "Encaissements - CRM Aprentiv v2.0";
        
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
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des encaissements</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES ENCAISSEMENTS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 23, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-1\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 26, $this->source); })()), "source", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "--Source--"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 29, $this->source); })()), "numDossier", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- N°Dossier --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 32, $this->source); })()), "numFacture", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- N°Facture --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-1\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 35, $this->source); })()), "payeur", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Payeur --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-1\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 38, $this->source); })()), "dateEncaissement", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "js-datepicker w-100", "placeholder" => "-- Date encaissement --", "autocomplete" => "off"]]);
        echo "
            </div>
            <div class=\"form-group col-md-1\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 41, $this->source); })()), "tauxCommission", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Taux commission --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 44, $this->source); })()), "commercial", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Cial --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-1\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 47, $this->source); })()), "statutCommission", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Statut comm --"]]);
        echo "
            </div>
            <div class=\"col-md-1\">
                <button class=\"btn btn-primary py-1\" type=\"submit\">Filtrer</button>
                <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Encaissement_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["encaissement_filter_form"]) || array_key_exists("encaissement_filter_form", $context) ? $context["encaissement_filter_form"] : (function () { throw new RuntimeError('Variable "encaissement_filter_form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Source</th>
                <th>N° dossier</th>
                <th>N° Facture</th>
                <th>Payeur</th>
                <th>Date encaissement</th>
                <th>Taux commission</th>
                <th>Cial</th>
                <th>Statut commission</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["encaissement"]) {
            // line 73
            echo "                <tr data-eid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" data-fid=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "facture_id", [], "any", false, false, false, 73), "html", null, true);
            echo "\" 
                    ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, $context["encaissement"], "source", [], "any", false, false, false, 74) == "dossier")) {
                // line 75
                echo "                            data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encaissement_create_from_facture", ["id" => twig_get_attribute($this->env, $this->source, $context["encaissement"], "facture_id", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\"
                        ";
            } else {
                // line 77
                echo "                            data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture.dom_loc.encaisser", ["id" => twig_get_attribute($this->env, $this->source, $context["encaissement"], "facture_id", [], "any", false, false, false, 77)]), "html", null, true);
                echo "\"
                        ";
            }
            // line 79
            echo "                    >
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "source", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "no_dossier_ref", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "num_facture", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "payeur", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "date_encaissement", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "taux_commission", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "commercial", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                    <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["encaissement"], "statut_commission", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 89
            if ((twig_get_attribute($this->env, $this->source, $context["encaissement"], "source", [], "any", false, false, false, 89) == "dossier")) {
                // line 90
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encaissement_create_from_facture", ["id" => twig_get_attribute($this->env, $this->source, $context["encaissement"], "facture_id", [], "any", false, false, false, 90)]), "html", null, true);
                echo "\" title=\"Détail encaissment\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                        ";
            } else {
                // line 94
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture.dom_loc.encaisser", ["id" => twig_get_attribute($this->env, $this->source, $context["encaissement"], "facture_id", [], "any", false, false, false, 94)]), "html", null, true);
                echo "\" title=\"Détail encaissment\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                        ";
            }
            // line 98
            echo "                        ";
            if (((isset($context["can_edit"]) || array_key_exists("can_edit", $context)) && (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 98, $this->source); })()))) {
                // line 99
                echo "                            <a href=\"javascript:void(0)\" class=\"delete-encaissement\">
                                <i class=\"fas fa-trash-alt text-danger\"></i>
                            </a>
                        ";
            }
            // line 103
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['encaissement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "        </tbody>

        <tfoot>
            <tr >
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 111, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 111), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 114
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 114, $this->source); })()));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <script>
        \$(function () {
        ";
        // line 132
        echo "                \$(\".js-datepicker\").each(function () {
                    \$(this).datepicker({
                        'format': 'dd/mm/yyyy',
                        'autoclose': true,
                        'clearBtn': true,
                        'language': 'fr',
                    });
                });

        ";
        // line 142
        echo "                \$('#commercial').select2({
                    placeholder: \"--Cial--\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: '";
        // line 147
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
        // line 157
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "request", [], "any", false, false, false, 157), "query", [], "any", false, false, false, 157), "get", [0 => "commercial"], "method", false, false, false, 157)) {
            // line 158
            echo "                var data = {
                    id: \"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "request", [], "any", false, false, false, 159), "query", [], "any", false, false, false, 159), "get", [0 => "commercial"], "method", false, false, false, 159), "html", null, true);
            echo "\",
                    text: '";
            // line 160
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "request", [], "any", false, false, false, 160), "query", [], "any", false, false, false, 160), "get", [0 => "commercial"], "method", false, false, false, 160), "html", null, true);
            echo "'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#commercial').append(newOption).trigger('change');
        ";
        }
        // line 166
        echo "        ";
        // line 167
        echo "

        ";
        // line 170
        echo "                \$('.delete-encaissement').on('click', function (e) {
                    e.preventDefault();
                    const encaissementId = \$(this).closest('tr').attr('data-eid');
                    const factureId = \$(this).closest('tr').attr('data-fid');

                    swal({
                        title: \"Confirmation!\",
                        text: \"Voulez vous supprimer cet encaissement ?\",
                        icon: \"warning\",
                        buttons: true,
                        dangerMode: true,
                    })
                            .then((willDelete) => {
                                if (willDelete) {
                                    \$.ajax({
                                        type: \"POST\",
                                        url: \"";
        // line 186
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encaissement.delete");
        echo "\",
                                        data: {eid: encaissementId, fid: factureId}
                                    })
                                            .done(function (data) {
                                                if (data.success == true) {
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

                });
        ";
        // line 205
        echo "
            });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "encaissement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 205,  434 => 186,  416 => 170,  412 => 167,  410 => 166,  401 => 160,  397 => 159,  394 => 158,  392 => 157,  379 => 147,  372 => 142,  361 => 132,  349 => 123,  339 => 122,  322 => 114,  316 => 111,  309 => 106,  301 => 103,  295 => 99,  292 => 98,  284 => 94,  276 => 90,  274 => 89,  269 => 87,  265 => 86,  261 => 85,  257 => 84,  253 => 83,  249 => 82,  245 => 81,  241 => 80,  238 => 79,  232 => 77,  226 => 75,  224 => 74,  217 => 73,  213 => 72,  192 => 54,  186 => 51,  179 => 47,  173 => 44,  167 => 41,  161 => 38,  155 => 35,  149 => 32,  143 => 29,  137 => 26,  131 => 23,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Encaissements - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des encaissements</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES ENCAISSEMENTS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(encaissement_filter_form)  }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-1\">
                {{ form_widget(encaissement_filter_form.source, {  attr: {'class' : 'w-100', 'placeholder' : '--Source--'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(encaissement_filter_form.numDossier, {  attr: {'class' : 'w-100', 'placeholder' : '-- N°Dossier --'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(encaissement_filter_form.numFacture, { attr: {'class' : 'w-100', 'placeholder' : '-- N°Facture --'} }) }}
            </div>
            <div class=\"form-group col-md-1\">
                {{ form_widget(encaissement_filter_form.payeur, { attr: {'class' : 'w-100', 'placeholder' : '-- Payeur --'} }) }}
            </div>
            <div class=\"form-group col-md-1\">
                {{ form_widget(encaissement_filter_form.dateEncaissement, { attr: {'class' : 'js-datepicker w-100', 'placeholder' : '-- Date encaissement --', 'autocomplete': 'off'} }) }}
            </div>
            <div class=\"form-group col-md-1\">
                {{ form_widget(encaissement_filter_form.tauxCommission, { attr: {'class' : 'w-100', 'placeholder' : '-- Taux commission --'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(encaissement_filter_form.commercial, { attr: {'class' : 'w-100', 'placeholder' : '-- Cial --',} }) }}
            </div>
            <div class=\"form-group col-md-1\">
                {{ form_widget(encaissement_filter_form.statutCommission, { attr: {'class' : 'w-100', 'placeholder' : '-- Statut comm --'} }) }}
            </div>
            <div class=\"col-md-1\">
                <button class=\"btn btn-primary py-1\" type=\"submit\">Filtrer</button>
                <a href=\"{{ path('Liste_Encaissement_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(encaissement_filter_form)  }}
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Source</th>
                <th>N° dossier</th>
                <th>N° Facture</th>
                <th>Payeur</th>
                <th>Date encaissement</th>
                <th>Taux commission</th>
                <th>Cial</th>
                <th>Statut commission</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for encaissement in pagination %}
                <tr data-eid=\"{{ encaissement.id }}\" data-fid=\"{{ encaissement.facture_id }}\" 
                    {% if encaissement.source == 'dossier' %}
                            data-href=\"{{ path('encaissement_create_from_facture', { id : encaissement.facture_id }) }}\"
                        {% else %}
                            data-href=\"{{ path('facture.dom_loc.encaisser', { id : encaissement.facture_id }) }}\"
                        {% endif %}
                    >
                    <td>{{ encaissement.source }}</td>
                    <td>{{ encaissement.no_dossier_ref }}</td>
                    <td>{{ encaissement.num_facture }}</td>
                    <td>{{ encaissement.payeur }}</td>
                    <td>{{ encaissement.date_encaissement | date('d/m/Y') }}</td>
                    <td>{{ encaissement.taux_commission }}</td>
                    <td>{{ encaissement.commercial }}</td>
                    <td>{{ encaissement.statut_commission }}</td>
                    <td>
                        {% if encaissement.source == 'dossier' %}
                            <a href=\"{{ path('encaissement_create_from_facture', { id : encaissement.facture_id }) }}\" title=\"Détail encaissment\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                        {% else %}
                            <a href=\"{{ path('facture.dom_loc.encaisser', { id : encaissement.facture_id }) }}\" title=\"Détail encaissment\">
                                <i class=\"fas fa-eye\"></i>
                            </a>
                        {% endif %}
                        {% if can_edit is defined and can_edit %}
                            <a href=\"javascript:void(0)\" class=\"delete-encaissement\">
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

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <script>
        \$(function () {
        {# Utilisation date picker pour les filtres de type date #}
                \$(\".js-datepicker\").each(function () {
                    \$(this).datepicker({
                        'format': 'dd/mm/yyyy',
                        'autoclose': true,
                        'clearBtn': true,
                        'language': 'fr',
                    });
                });

        {# Autocompletion recherche commercical -->> #}
                \$('#commercial').select2({
                    placeholder: \"--Cial--\",
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
        {% endif %}
        {# Autocompletion recherche commercical <<-- #}


        {# Suppression encaissement -->> #}
                \$('.delete-encaissement').on('click', function (e) {
                    e.preventDefault();
                    const encaissementId = \$(this).closest('tr').attr('data-eid');
                    const factureId = \$(this).closest('tr').attr('data-fid');

                    swal({
                        title: \"Confirmation!\",
                        text: \"Voulez vous supprimer cet encaissement ?\",
                        icon: \"warning\",
                        buttons: true,
                        dangerMode: true,
                    })
                            .then((willDelete) => {
                                if (willDelete) {
                                    \$.ajax({
                                        type: \"POST\",
                                        url: \"{{ path('encaissement.delete') }}\",
                                        data: {eid: encaissementId, fid: factureId}
                                    })
                                            .done(function (data) {
                                                if (data.success == true) {
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

                });
        {# Suppression encaissement <<-- #}

            });
    </script>
{% endblock %}", "encaissement/index.html.twig", "/var/www/templates/encaissement/index.html.twig");
    }
}
