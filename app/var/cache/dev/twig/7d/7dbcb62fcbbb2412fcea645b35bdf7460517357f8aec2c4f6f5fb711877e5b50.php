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

/* facture/formation.html_bck.twig */
class __TwigTemplate_6972ccf02eefb068f41bc6c61606f3c5c07d4c4d375efa5f52c646a114d927b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/formation.html_bck.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/formation.html_bck.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/formation.html_bck.twig", 1);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste facture formations</li>
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
            <th>MOIS</th>
            <th> Date OM</th>
            <th>Formateur ou organisme</th>
            <th>Statut Formateur</th>
            <th>CIAL</th>
            <th>CLIENT</th>
            <th>INTITUL&Eacute;</th>
            <th>TYPE</th>
            <th>DUR&Eacute;E EN JOURS</th>
            <th>DUR&Eacute;E EN HEURES</th>
            <th>NB STAGIAIRES</th>
            <th>DEMANDEUR</th>
            <th>MONTANT ACHAT HT</th>
            <th>MONTANT VENTE HT</th>
            <th>DIFF ACHAT/VTE</th>
            <th>%</th>
            <th>% ACHAT HT</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["datas"]) || array_key_exists("datas", $context) ? $context["datas"] : (function () { throw new RuntimeError('Variable "datas" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 81
            echo "            <tr>
                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "entite", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "mois", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "dateom", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "formateur", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "statutFormateur", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "commercial", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "societe", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "intitstage", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "typeformation", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "nbJ", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "nbH", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "nbStagiaires", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "demandeur", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "mntAchat", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "mntVente", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "diffMnt", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "percentage", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "achatPercentage", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "        </tbody>
        <tfoot>
        <tr>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                <strong>Total : </strong> ";
        // line 106
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 106, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 106), "html", null, true);
        echo "
            </td>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                ";
        // line 109
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 109, $this->source); })()));
        echo "
            </td>
        </tr>
        </tfoot>
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 117
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$(\".js-datepicker\").each(function(){
                \$(this).datepicker({
                    'format':'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            })
        });
    </script>
    ";
        // line 134
        $this->loadTemplate("Common/client-ajax-js.html.twig", "facture/formation.html_bck.twig", 134)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 134, $this->source); })()), "client", [], "any", false, false, false, 134), "vars", [], "any", false, false, false, 134)]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "facture/formation.html_bck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  383 => 134,  363 => 118,  353 => 117,  336 => 109,  330 => 106,  324 => 102,  315 => 99,  311 => 98,  307 => 97,  303 => 96,  299 => 95,  295 => 94,  291 => 93,  287 => 92,  283 => 91,  279 => 90,  275 => 89,  271 => 88,  267 => 87,  263 => 86,  259 => 85,  255 => 84,  251 => 83,  247 => 82,  244 => 81,  240 => 80,  210 => 53,  204 => 50,  200 => 48,  193 => 46,  187 => 44,  178 => 38,  175 => 37,  173 => 36,  168 => 35,  166 => 34,  163 => 33,  160 => 32,  157 => 31,  154 => 30,  151 => 29,  148 => 28,  145 => 27,  142 => 26,  139 => 25,  135 => 24,  130 => 22,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste facture formations</li>
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
            <th>MOIS</th>
            <th> Date OM</th>
            <th>Formateur ou organisme</th>
            <th>Statut Formateur</th>
            <th>CIAL</th>
            <th>CLIENT</th>
            <th>INTITUL&Eacute;</th>
            <th>TYPE</th>
            <th>DUR&Eacute;E EN JOURS</th>
            <th>DUR&Eacute;E EN HEURES</th>
            <th>NB STAGIAIRES</th>
            <th>DEMANDEUR</th>
            <th>MONTANT ACHAT HT</th>
            <th>MONTANT VENTE HT</th>
            <th>DIFF ACHAT/VTE</th>
            <th>%</th>
            <th>% ACHAT HT</th>
        </tr>
        </thead>
        <tbody>
        {% for facture in datas %}
            <tr>
                <td>{{ facture.entite }}</td>
                <td>{{ facture.mois }}</td>
                <td>{{ facture.dateom }}</td>
                <td>{{ facture.formateur }}</td>
                <td>{{ facture.statutFormateur }}</td>
                <td>{{ facture.commercial }}</td>
                <td>{{ facture.societe }}</td>
                <td>{{ facture.intitstage }}</td>
                <td>{{ facture.typeformation }}</td>
                <td>{{ facture.nbJ }}</td>
                <td>{{ facture.nbH }}</td>
                <td>{{ facture.nbStagiaires }}</td>
                <td>{{ facture.demandeur }}</td>
                <td>{{ facture.mntAchat }}</td>
                <td>{{ facture.mntVente }}</td>
                <td>{{ facture.diffMnt }}</td>
                <td>{{ facture.percentage }}</td>
                <td>{{ facture.achatPercentage }}</td>
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
            \$(\".js-datepicker\").each(function(){
                \$(this).datepicker({
                    'format':'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            })
        });
    </script>
    {% include 'Common/client-ajax-js.html.twig' with { attrs: form_filter.client.vars } %}
{% endblock %}", "facture/formation.html_bck.twig", "/home/jeremy/Bureau/project/app/templates/facture/formation.html_bck.twig");
    }
}
