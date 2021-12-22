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

/* propal/index.html.twig */
class __TwigTemplate_0f85df443c174a22522b2ce562276af3b88ce66f82a3af52eae99646b41fe586 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "propal/index.html.twig", 1);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des propositions commerciales</li>
        </ol>
    </nav>
    <div class=\"page-content\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "session", [], "any", false, false, false, 18), "flashBag", [], "any", false, false, false, 18), "get", [0 => "error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 19
            echo "            <div class=\"note note-warnning\">
                <p>";
            // line 20
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "session", [], "any", false, false, false, 23), "flashBag", [], "any", false, false, false, 23), "get", [0 => "success"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 24
            echo "            <div class=\"note note-success\">
                <p>";
            // line 25
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </div>
    <h2 class=\"text-center mt-2 text-nmary\">Propositions Commerciales</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <fieldset class=\"mb-3 list-filter\">
                <legend>Filtre</legend>
                ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                    <div class=\"form-group col-md-2\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 37, $this->source); })()), "statutpropal", [], "any", false, false, false, 37), 'widget', ["placeholder" => "-- Status propal --", "attr" => ["class" => "w-100", "required" => false]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 40, $this->source); })()), "entitypropal", [], "any", false, false, false, 40), 'widget', ["placeholder" => "-- Entité --", "attr" => ["class" => "w-100", "required" => false]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 43, $this->source); })()), "commercial", [], "any", false, false, false, 43), 'widget', ["placeholder" => "-- Commercial --", "attr" => ["class" => "w-100", "required" => false]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 46, $this->source); })()), "client", [], "any", false, false, false, 46), 'widget', ["placeholder" => "-- Client --", "attr" => ["class" => "w-100", "required" => false]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 49, $this->source); })()), "type", [], "any", false, false, false, 49), 'widget', ["placeholder" => "-- type --", "attr" => ["class" => "w-100", "required" => false]]);
        echo "
                    </div>
                    <div class=\"col-md-2\">
                        <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                        <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
                    </div>
                </div>
                ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
            </fieldset>
            <table class=\"table table-sm mb-0 table-striped\">
                <thead>
                <tr class=\"bg-info text-light\">
                    <th>Entité</th>
                    <th>Statut</th>
                    <th>Commercial</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Coût Ht</th>
                    <th>Fiabilité</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["propal"]) {
            // line 75
            echo "                    <tr data-propal-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 75), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_show", ["id" => twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">
                        <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "entite", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                        <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "statut", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                        <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "commercial", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                        <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "client", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                        <td>";
            // line 80
            if ((twig_get_attribute($this->env, $this->source, $context["propal"], "type", [], "any", false, false, false, 80) == 1)) {
                echo " Entreprise ";
            } else {
                echo " Particulier ";
            }
            echo "</td>
                        <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "nom", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                        <td> ";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "prenom", [], "any", false, false, false, 82), "html", null, true);
            echo " </td>
                        ";
            // line 83
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 83))) {
                // line 84
                echo "                        <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 84), "html", null, true);
                echo " €</td>
                        ";
            } else {
                // line 86
                echo "                        <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                        ";
            }
            // line 88
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 88) == "Froid")) {
                // line 89
                echo "                        <td class=\"bg-info text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 89), "html", null, true);
                echo " </td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 90
$context["propal"], "fiabilite", [], "any", false, false, false, 90) == "Chaud")) {
                // line 91
                echo "                        <td class=\"bg-danger text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 91), "html", null, true);
                echo " </td>
                        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 92
$context["propal"], "fiabilite", [], "any", false, false, false, 92) == "Tiede")) {
                // line 93
                echo "                        <td class=\"bg-warning text-white\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 93), "html", null, true);
                echo " </td>
                        ";
            } else {
                // line 95
                echo "                        <td> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 95), "html", null, true);
                echo " </td>
                        ";
            }
            // line 97
            echo "                        <td>
                            ";
            // line 98
            if (((isset($context["can_view"]) || array_key_exists("can_view", $context)) && (isset($context["can_view"]) || array_key_exists("can_view", $context) ? $context["can_view"] : (function () { throw new RuntimeError('Variable "can_view" does not exist.', 98, $this->source); })()))) {
                // line 99
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_show", ["id" => twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 99)]), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-eye fa-2x\"  style=\"margin-right: 10px;\"></i>
                                </a>
                            ";
            }
            // line 103
            echo "                            ";
            if (((isset($context["can_edit"]) || array_key_exists("can_edit", $context)) && (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 103, $this->source); })()))) {
                // line 104
                echo "                                <a onClick=\"deletePropal(\$(this))\">
                                    <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
                                </a>
                            ";
            }
            // line 108
            echo "                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "                </tbody>
                <tfoot>
                <tr >
                    <td colspan=\"6\" class=\"text-align-middle pt-3\">
                        <strong>Total : </strong> ";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 115, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 115), "html", null, true);
        echo "
                    </td>
                    <td colspan=\"6\" class=\"text-align-middle pt-3\">
                        ";
        // line 118
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 118, $this->source); })()));
        echo "
                    </td>
                </tr>
                </tfoot>
            </table>
            <div class=\"col-sm-12 text-center\">
                <a class=\"btn btn-primary\" href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller/ajoutpropal");
        echo "\">
                    <i class=\"fa fa-plus\"></i> Ajouter
                </a>
                <a class=\"btn btn-primary\" href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export");
        echo "\">Extraire propal</a>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 140
        $this->loadTemplate("Common/client-ajax-js.html.twig", "propal/index.html.twig", 140)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal_filter_form"]) || array_key_exists("propal_filter_form", $context) ? $context["propal_filter_form"] : (function () { throw new RuntimeError('Variable "propal_filter_form" does not exist.', 140, $this->source); })()), "client", [], "any", false, false, false, 140), "vars", [], "any", false, false, false, 140)]));
        // line 141
        echo "    <script>
        function deletePropal(elem)
        {
            var propal_id = elem.closest('tr').attr('data-propal-id');
            var deleteLink = '";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Propal_Delete", ["id" => "propal_id"]);
        echo "';
            deleteLink = deleteLink.replace('propal_id', propal_id);
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
                placeholder: \"-- Client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.contact.societe.asynch-search");
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
        // line 198
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "request", [], "any", false, false, false, 198), "query", [], "any", false, false, false, 198), "get", [0 => "client"], "method", false, false, false, 198)) {
            // line 199
            echo "                var data = {
                    id: \"";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "request", [], "any", false, false, false, 200), "query", [], "any", false, false, false, 200), "get", [0 => "client"], "method", false, false, false, 200), "html", null, true);
            echo "\",
                    text: '";
            // line 201
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "request", [], "any", false, false, false, 201), "query", [], "any", false, false, false, 201), "get", [0 => "client"], "method", false, false, false, 201), "js"), "html", null, true);
            echo "'
                };
                var newOption = new Option(data.text, data.id, true, true);
                \$('#client').append(newOption).trigger('change');
            ";
        }
        // line 206
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "propal/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  494 => 206,  486 => 201,  482 => 200,  479 => 199,  477 => 198,  463 => 187,  418 => 145,  412 => 141,  410 => 140,  401 => 135,  391 => 134,  375 => 127,  369 => 124,  360 => 118,  354 => 115,  348 => 111,  340 => 108,  334 => 104,  331 => 103,  323 => 99,  321 => 98,  318 => 97,  312 => 95,  306 => 93,  304 => 92,  299 => 91,  297 => 90,  292 => 89,  289 => 88,  283 => 86,  277 => 84,  275 => 83,  271 => 82,  267 => 81,  259 => 80,  255 => 79,  251 => 78,  247 => 77,  243 => 76,  236 => 75,  232 => 74,  211 => 56,  205 => 53,  198 => 49,  192 => 46,  186 => 43,  180 => 40,  174 => 37,  168 => 34,  160 => 28,  151 => 25,  148 => 24,  143 => 23,  134 => 20,  131 => 19,  127 => 18,  119 => 13,  115 => 11,  105 => 10,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des propositions commerciales</li>
        </ol>
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
    <h2 class=\"text-center mt-2 text-nmary\">Propositions Commerciales</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <fieldset class=\"mb-3 list-filter\">
                <legend>Filtre</legend>
                {{ form_start(propal_filter_form)  }}
                <div class=\"form-row\">
                    <div class=\"form-group col-md-2\">
                        {{ form_widget(propal_filter_form.statutpropal, { 'placeholder' : '-- Status propal --',  attr: {'class' : 'w-100','required': false} }) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        {{ form_widget(propal_filter_form.entitypropal, { 'placeholder' : '-- Entité --',  attr: {'class' : 'w-100','required': false} }) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        {{ form_widget(propal_filter_form.commercial, { 'placeholder' : '-- Commercial --',  attr: {'class' : 'w-100','required': false} }) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        {{ form_widget(propal_filter_form.client, { 'placeholder' : '-- Client --',  attr: {'class' : 'w-100','required': false} }) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        {{ form_widget(propal_filter_form.type, { 'placeholder' : '-- type --',  attr: {'class' : 'w-100','required': false} }) }}
                    </div>
                    <div class=\"col-md-2\">
                        <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                        <a href=\"{{ path('Liste_propositions_commerciales_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
                    </div>
                </div>
                {{ form_end(propal_filter_form)  }}
            </fieldset>
            <table class=\"table table-sm mb-0 table-striped\">
                <thead>
                <tr class=\"bg-info text-light\">
                    <th>Entité</th>
                    <th>Statut</th>
                    <th>Commercial</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Coût Ht</th>
                    <th>Fiabilité</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for propal in pagination %}
                    <tr data-propal-id=\"{{ propal.idpropal }}\" data-href=\"{{ path('propal_show', { id : propal.idpropal} ) }}\">
                        <td>{{ propal.entite }}</td>
                        <td>{{ propal.statut }}</td>
                        <td>{{ propal.commercial }}</td>
                        <td>{{ propal.client }}</td>
                        <td>{% if propal.type == 1 %} Entreprise {% else %} Particulier {% endif %}</td>
                        <td>{{ propal.nom }}</td>
                        <td> {{ propal.prenom}} </td>
                        {% if propal.coutht is not null %}
                        <td> {{ propal.coutht}} €</td>
                        {% else %}
                        <td> {{ propal.coutht}}</td>
                        {% endif %}
                        {% if propal.fiabilite == 'Froid' %}
                        <td class=\"bg-info text-white\"> {{ propal.fiabilite}} </td>
                        {% elseif propal.fiabilite == 'Chaud' %}
                        <td class=\"bg-danger text-white\"> {{ propal.fiabilite}} </td>
                        {% elseif propal.fiabilite == 'Tiede' %}
                        <td class=\"bg-warning text-white\"> {{ propal.fiabilite}} </td>
                        {% else %}
                        <td> {{ propal.fiabilite}} </td>
                        {% endif %}
                        <td>
                            {% if can_view is defined and can_view %}
                                <a href=\"{{ path('propal_show', { id : propal.idpropal} ) }}\">
                                    <i class=\"fas fa-eye fa-2x\"  style=\"margin-right: 10px;\"></i>
                                </a>
                            {% endif %}
                            {% if can_edit is defined and can_edit %}
                                <a onClick=\"deletePropal(\$(this))\">
                                    <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
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
            <div class=\"col-sm-12 text-center\">
                <a class=\"btn btn-primary\" href=\"{{ path('Liste_propositions_commerciales_Controller/ajoutpropal') }}\">
                    <i class=\"fa fa-plus\"></i> Ajouter
                </a>
                <a class=\"btn btn-primary\" href=\"{{ path('export') }}\">Extraire propal</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    {% include 'Common/client-ajax-js.html.twig' with { attrs: propal_filter_form.client.vars } %}
    <script>
        function deletePropal(elem)
        {
            var propal_id = elem.closest('tr').attr('data-propal-id');
            var deleteLink = '{{ path('Propal_Delete', {'id':'propal_id'}) }}';
            deleteLink = deleteLink.replace('propal_id', propal_id);
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
                placeholder: \"-- Client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.contact.societe.asynch-search') }}',
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
    </script>
{% endblock %}
", "propal/index.html.twig", "/home/jeremy/Bureau/project/app/templates/propal/index.html.twig");
    }
}
