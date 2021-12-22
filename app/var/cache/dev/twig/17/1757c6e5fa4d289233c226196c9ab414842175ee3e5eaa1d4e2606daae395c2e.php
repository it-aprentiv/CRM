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

/* catalogue/index.html.twig */
class __TwigTemplate_17fa26c024222c5c02369335c7796337ce5d973be23d05b9e958c9a0ea94c32f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "catalogue/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "catalogue/index.html.twig", 1);
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

        echo "Catalogue de Formation - CRM Aprentiv v2.0";
        
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Catalogue de formation</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">CATALOGUE DE FORMATION</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-5\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 26, $this->source); })()), "nomFormation", [], "any", false, false, false, 26), 'widget');
        echo "
            </div>
            <div class=\"form-group col-md-5\">
                <p>";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 29, $this->source); })()), "type", [], "any", false, false, false, 29), 'widget');
        echo "</p>
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Catalogue_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 36, $this->source); })()), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm\">
        <thead>
        <tr class=\"bg-info text-light\">
            <!--th class=\"align-middle\">Structure</th-->
            <th>Type</th>
            <th>Nom de formation</th>
            <th> Durrée(J)</th>
            <th>Durrée(H)</th>
            <th>Tarif/heure</th>
            <th>Tarif/jour</th>
            <th>Tarif demi-journée</th>
            <th>Date de debut</th>
            <th>Date de fin</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["catalogue"]) {
            // line 57
            echo "            <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cataloge_voir", ["id" => twig_get_attribute($this->env, $this->source, $context["catalogue"], "id", [], "any", false, false, false, 57)]), "html", null, true);
            echo "\">
                <td>";
            // line 58
            echo (((null === twig_get_attribute($this->env, $this->source, $context["catalogue"], "type", [], "any", false, false, false, 58))) ? ("") : ((((twig_get_attribute($this->env, $this->source, $context["catalogue"], "type", [], "any", false, false, false, 58) == "A")) ? ("INTRA") : ("INTER"))));
            echo "</td>
                <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "nomFormation", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dureeJ", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dureeH", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "tarHtH", [], "any", false, false, false, 62), 2, ",", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "tarJ", [], "any", false, false, false, 63), 2, ",", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "tarHtDj", [], "any", false, false, false, 64), 2, ",", "."), "html", null, true);
            echo "</td>
                <td>";
            // line 65
            (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateDebut", [], "any", false, false, false, 65), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateDebut", [], "any", false, false, false, 65), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateDebut", [], "any", false, false, false, 65), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateDebut", [], "any", false, false, false, 65), "d-m-Y"), "html", null, true))));
            echo "</td>
                <td>";
            // line 66
            (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateFin", [], "any", false, false, false, 66), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateFin", [], "any", false, false, false, 66), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateFin", [], "any", false, false, false, 66), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["catalogue"], "dateFin", [], "any", false, false, false, 66), "d-m-Y"), "html", null, true))));
            echo "</td>
                <td>
                    <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cataloge_voir", ["id" => twig_get_attribute($this->env, $this->source, $context["catalogue"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <a data-url=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("catalogue_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["catalogue"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\"
                       onclick=\"deleteLine(\$(this))\">
                        <i class=\"fas fa-trash-alt text-danger\"></i>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['catalogue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "        </tbody>

        <tfoot>
        <tr>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                <strong>Total : </strong> ";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 83, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 83), "html", null, true);
        echo "
            </td>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                ";
        // line 86
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 86, $this->source); })()));
        echo "
            </td>
        </tr>
        </tfoot>
    </table>

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <nav class=\"navbar navbar-expand-sm bg-light navbar-light justify-content-center\">
                <div class=\"col-sm-3\">
                    <a class=\"nav-link btn btn-info\" href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_formation_catalogue", ["typeFormation" => twig_constant("\\App\\Constants\\FormationType::FORMATION_INTRA")]), "html", null, true);
        echo "\">Catalogue des formations INTRA</a>
                </div>
                <div class=\"col-sm-3\">
                    <a class=\"nav-link btn btn-info\" href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create_formation_catalogue", ["typeFormation" => twig_constant("\\App\\Constants\\FormationType::FORMATION_INTER")]), "html", null, true);
        echo "\">Catalogue des formations INTER</a>
                </div>
            </nav>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 106
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 107
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <script>
        function deleteLine(elem) {
            var deleteLink = elem.attr('data-url');
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
                    .done(function (data) {
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
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "catalogue/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 107,  292 => 106,  276 => 99,  270 => 96,  257 => 86,  251 => 83,  244 => 78,  231 => 71,  225 => 68,  220 => 66,  216 => 65,  212 => 64,  208 => 63,  204 => 62,  200 => 61,  196 => 60,  192 => 59,  188 => 58,  183 => 57,  179 => 56,  156 => 36,  150 => 33,  143 => 29,  137 => 26,  131 => 23,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catalogue de Formation - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Catalogue de formation</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">CATALOGUE DE FORMATION</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(form_filter,{'attr' : {'class':'list-filter'}}) }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-5\">
                {{ form_widget(form_filter.nomFormation) }}
            </div>
            <div class=\"form-group col-md-5\">
                <p>{{ form_widget(form_filter.type) }}</p>
            </div>
            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Catalogue_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(form_filter) }}
    </fieldset>

    <table class=\"table table-sm\">
        <thead>
        <tr class=\"bg-info text-light\">
            <!--th class=\"align-middle\">Structure</th-->
            <th>Type</th>
            <th>Nom de formation</th>
            <th> Durrée(J)</th>
            <th>Durrée(H)</th>
            <th>Tarif/heure</th>
            <th>Tarif/jour</th>
            <th>Tarif demi-journée</th>
            <th>Date de debut</th>
            <th>Date de fin</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for catalogue in pagination %}
            <tr data-href=\"{{ path('cataloge_voir', {'id': catalogue.id}) }}\">
                <td>{{ catalogue.type is null?'':catalogue.type == 'A'?'INTRA':'INTER'}}</td>
                <td>{{ catalogue.nomFormation }}</td>
                <td>{{ catalogue.dureeJ }}</td>
                <td>{{ catalogue.dureeH }}</td>
                <td>{{ catalogue.tarHtH|number_format(2, ',', '.') }}</td>
                <td>{{ catalogue.tarJ|number_format(2, ',', '.') }}</td>
                <td>{{ catalogue.tarHtDj|number_format(2, ',', '.') }}</td>
                <td>{{ (( (catalogue.dateDebut | date('d-m-Y')) == '31-12-1969') or ((catalogue.dateDebut | date('d-m-Y')) == '01-01-1970') or ((catalogue.dateDebut | date('d-m-Y')) == '30-11--0001')) ? '' : catalogue.dateDebut | date('d-m-Y') }}</td>
                <td>{{ (( (catalogue.dateFin | date('d-m-Y')) == '31-12-1969') or ((catalogue.dateFin | date('d-m-Y')) == '01-01-1970') or ((catalogue.dateFin | date('d-m-Y')) == '30-11--0001')) ? '' : catalogue.dateFin | date('d-m-Y') }}</td>
                <td>
                    <a href=\"{{ path('cataloge_voir', {'id': catalogue.id}) }}\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <a data-url=\"{{ path('catalogue_delete',  {'id': catalogue.id}) }}\"
                       onclick=\"deleteLine(\$(this))\">
                        <i class=\"fas fa-trash-alt text-danger\"></i>
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

    <div class=\"row\">
        <div class=\"col-sm-12\">
            <nav class=\"navbar navbar-expand-sm bg-light navbar-light justify-content-center\">
                <div class=\"col-sm-3\">
                    <a class=\"nav-link btn btn-info\" href=\"{{ path('create_formation_catalogue', {'typeFormation': constant('\\\\App\\\\Constants\\\\FormationType::FORMATION_INTRA')}) }}\">Catalogue des formations INTRA</a>
                </div>
                <div class=\"col-sm-3\">
                    <a class=\"nav-link btn btn-info\" href=\"{{ path('create_formation_catalogue', {'typeFormation': constant('\\\\App\\\\Constants\\\\FormationType::FORMATION_INTER')}) }}\">Catalogue des formations INTER</a>
                </div>
            </nav>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <script>
        function deleteLine(elem) {
            var deleteLink = elem.attr('data-url');
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
                    .done(function (data) {
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
    </script>

{% endblock %}", "catalogue/index.html.twig", "/home/jeremy/Bureau/project/app/templates/catalogue/index.html.twig");
    }
}
