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

/* domiciliationlocation/index.html.twig */
class __TwigTemplate_e7fcebf5ff230013bf2c79100df04d17a978b646dace4ea94ffdeef6a1e75c70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "domiciliationlocation/index.html.twig", 1);
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

        echo "Domiciliation / Location - CRM Aprentiv v2.0";
        
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
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des domiciliations et locations</li>
            </ol>

            <div>
                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Domiciliation_Location_Controller/creation");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Ajouter un domiciliation</a>
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">Liste des domiciliations et locations</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 32, $this->source); })()), "ref", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => "-- N° Dossier --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                <p>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 35, $this->source); })()), "client", [], "any", false, false, false, 35), 'widget', ["placeholder" => "-- Client --"]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                <p>";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 38, $this->source); })()), "debut", [], "any", false, false, false, 38), 'widget', ["attr" => ["placeholder" => "-- Date début --"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 41, $this->source); })()), "fin", [], "any", false, false, false, 41), 'widget', ["attr" => ["placeholder" => "-- Date fin --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 44, $this->source); })()), "montantFacture", [], "any", false, false, false, 44), 'widget', ["attr" => ["placeholder" => "-- mnt facture --"]]);
        echo "
            </div>
        </div>
        <div class=\"form-row clearfix\">
            <div class=\"form-group col-md-4 row\">
                <div class=\"form-group col-md-4\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 50, $this->source); })()), "montantRegle", [], "any", false, false, false, 50), 'widget', ["attr" => ["placeholder" => "-- regle --"]]);
        echo "
                </div>
                <div class=\"form-group col-md-4\">
                    <div class=\"input-group\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 54, $this->source); })()), "montantDu", [], "any", false, false, false, 54), 'widget', ["attr" => ["placeholder" => "-- du --"]]);
        echo "
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\"> €</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 61, $this->source); })()), "statut", [], "any", false, false, false, 61), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-md-2\">
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 65, $this->source); })()), "refFacture", [], "any", false, false, false, 65), 'widget', ["attr" => ["placeholder" => "-- Ref facture --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 68, $this->source); })()), "dateEmission", [], "any", false, false, false, 68), 'widget', ["attr" => ["placeholder" => "-- Date émission --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 71, $this->source); })()), "dateEnc", [], "any", false, false, false, 71), 'widget', ["attr" => ["placeholder" => "-- Date encaissement --"]]);
        echo "
            </div>

            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Domiciliation_Location_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>N° DOSSIER</th>
            <th>CLIENT</th>
            <th>DATE DEBUT PERIODE</th>
            <th>DATE FIN PERIODE</th>
            ";
        // line 90
        echo "            <th>MONTANT HT FACTURE</th>
            <th>MONTANT HT REGLE</th>
            <th>MONTANT HT DU</th>
            <th>STATUT</th>
            <th>REF FACTURE</th>
            <th>DATE EMISSION</th>
            <th>DATE ENC</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 102
            echo "            <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.domiciliation.fiche", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 102)]), "html", null, true);
            echo "\">
                <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ref", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "client", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "debut", [], "any", false, false, false, 105), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fin", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
            echo "</td>
                ";
            // line 108
            echo "                <td>";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "fixe", [], "any", false, false, false, 108), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "recu", [], "any", false, false, false, 109), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "du", [], "any", false, false, false, 110), 2, ",", " "), "html", null, true);
            echo "</td>
                <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "statut", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ref_facture", [], "any", false, false, false, 112), "html", null, true);
            echo "</td>
                <td>";
            // line 113
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "creation", [], "any", false, false, false, 113), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 114
            ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "encaissement", [], "any", false, false, false, 114))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "encaissement", [], "any", false, false, false, 114), "d/m/Y"), "html", null, true))));
            echo "</td>
                <td>
                    <a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.domiciliation.fiche", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 116)]), "html", null, true);
            echo "\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <a href=\"javascript:void(0)\" class=\"delete-domiciliation\" data-id=\"";
            // line 119
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 119), "html", null, true);
            echo "\">
                        <i class=\"fas fa-trash-alt text-danger\"></i>
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        </tbody>

        <tfoot>
        <tr >
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                <strong>Total : </strong> ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 130, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 130), "html", null, true);
        echo "
            </td>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                ";
        // line 133
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 133, $this->source); })()));
        echo "
            </td>
        </tr>
        </tfoot>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });

            \$('#";
        // line 153
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 153, $this->source); })()), "client", [], "any", false, false, false, 153), "vars", [], "any", false, false, false, 153), "id", [], "any", false, false, false, 153), "html", null, true);
        echo "').select2({
                placeholder: \"-- Client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 158
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.contact.client.search_json");
        echo "',
                    data: function (params) {
                        var query = {
                            search: params.term,
                            limit: 20,
                            type: 'client'
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        return {
                            results: \$.map(data, function (item) {
                                return {
                                    text: item.nomStr,
                                    id: item.id
                                };
                            })
                        };
                    }
                },
            });

const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"domiciliation_debut\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#domiciliation_fin').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)

            ";
        // line 202
        echo "            \$('.delete-domiciliation').on('click', function (e) {
                 e.preventDefault();
                 const domId = \$(this).attr('data-id');

                 swal({
                     title: \"Confirmation!\",
                     text: \"Voulez vous supprimer ce domiciliation/ cette location ?\",
                     icon: \"warning\",
                     buttons: true,
                     dangerMode: true,
                 }).then((willDelete) => {
                     if (willDelete) {
                         \$.ajax({
                             type: \"POST\",
                             url: \"";
        // line 216
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.domiciliation.delete");
        echo "\",
                             data: { iddom : domId }
                         }).done(function(data){
                             if (data.success == true) {
                                 swal(data.message, {
                                     icon: \"success\",
                                 }).then((ok) => {
                                     location.reload();
                                 });
                             } else {
                                 swal(\"Erreur\", data.message, \"error\");
                             }
                         }).fail(function () {
                             swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimé!\", \"error\");
                         })
                     }
                 });
            });
            ";
        // line 235
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "domiciliationlocation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 235,  453 => 216,  437 => 202,  391 => 158,  383 => 153,  367 => 141,  357 => 140,  341 => 133,  335 => 130,  328 => 125,  316 => 119,  310 => 116,  305 => 114,  301 => 113,  297 => 112,  293 => 111,  289 => 110,  285 => 109,  280 => 108,  276 => 106,  272 => 105,  268 => 104,  264 => 103,  259 => 102,  255 => 101,  242 => 90,  229 => 79,  223 => 76,  215 => 71,  209 => 68,  203 => 65,  196 => 61,  186 => 54,  179 => 50,  170 => 44,  164 => 41,  158 => 38,  152 => 35,  146 => 32,  140 => 29,  128 => 20,  120 => 15,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Domiciliation / Location - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des domiciliations et locations</li>
            </ol>

            <div>
                <a href=\"{{ path('Domiciliation_Location_Controller/creation') }}\"><i class=\"fa fa-plus-circle\"></i> Ajouter un domiciliation</a>
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">Liste des domiciliations et locations</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(filter)  }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {{ form_widget(filter.ref, { attr: { 'placeholder' : '-- N° Dossier --' } }) }}
            </div>
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(filter.client, { 'placeholder' : '-- Client --' }) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(filter.debut, { attr: {'placeholder': '-- Date début --' } })  }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(filter.fin, { attr: { placeholder : '-- Date fin --'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(filter.montantFacture, { attr: { placeholder : '-- mnt facture --'} }) }}
            </div>
        </div>
        <div class=\"form-row clearfix\">
            <div class=\"form-group col-md-4 row\">
                <div class=\"form-group col-md-4\">
                    {{ form_widget(filter.montantRegle, { attr: { placeholder : '-- regle --'} }) }}
                </div>
                <div class=\"form-group col-md-4\">
                    <div class=\"input-group\">
                        {{ form_widget(filter.montantDu, { attr: { placeholder : '-- du --'} }) }}
                        <div class=\"input-group-append\">
                            <span class=\"input-group-text\"> €</span>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    {{ form_widget(filter.statut) }}
                </div>
            </div>
            <div class=\"col-md-2\">
                {{ form_widget(filter.refFacture, { attr: { placeholder : '-- Ref facture --'} }) }}
            </div>
            <div class=\"col-md-2\">
                {{ form_widget(filter.dateEmission, { attr: { placeholder : '-- Date émission --'} }) }}
            </div>
            <div class=\"col-md-2\">
                {{ form_widget(filter.dateEnc, { attr: { placeholder : '-- Date encaissement --' } }) }}
            </div>

            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Domiciliation_Location_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(filter)  }}
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>N° DOSSIER</th>
            <th>CLIENT</th>
            <th>DATE DEBUT PERIODE</th>
            <th>DATE FIN PERIODE</th>
            {#<th>MONTANT ACCORDE</th>#}
            <th>MONTANT HT FACTURE</th>
            <th>MONTANT HT REGLE</th>
            <th>MONTANT HT DU</th>
            <th>STATUT</th>
            <th>REF FACTURE</th>
            <th>DATE EMISSION</th>
            <th>DATE ENC</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for item in pagination %}
            <tr data-href=\"{{ path('crm.domiciliation.fiche', { 'id': item.id }) }}\">
                <td>{{ item.ref }}</td>
                <td>{{ item.client }}</td>
                <td>{{ item.debut|date(\"d/m/Y\") }}</td>
                <td>{{ item.fin|date(\"d/m/Y\") }}</td>
                {#<td>{{ item.recu }}</td>#}
                <td>{{ item.fixe | number_format(2, ',', ' ')  }}</td>
                <td>{{ item.recu | number_format(2, ',', ' ')  }}</td>
                <td>{{ item.du | number_format(2, ',', ' ')  }}</td>
                <td>{{ item.statut }}</td>
                <td>{{ item.ref_facture }}</td>
                <td>{{ item.creation|date(\"d/m/Y\") }}</td>
                <td>{{ item.encaissement is empty ? \"\" : item.encaissement|date(\"d/m/Y\") }}</td>
                <td>
                    <a href=\"{{ path('crm.domiciliation.fiche', { 'id': item.id }) }}\">
                        <i class=\"fas fa-eye\"></i>
                    </a>
                    <a href=\"javascript:void(0)\" class=\"delete-domiciliation\" data-id=\"{{ item.id }}\">
                        <i class=\"fas fa-trash-alt text-danger\"></i>
                    </a>
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
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.js-datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });

            \$('#{{ filter.client.vars.id }}').select2({
                placeholder: \"-- Client --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.contact.client.search_json') }}',
                    data: function (params) {
                        var query = {
                            search: params.term,
                            limit: 20,
                            type: 'client'
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        return {
                            results: \$.map(data, function (item) {
                                return {
                                    text: item.nomStr,
                                    id: item.id
                                };
                            })
                        };
                    }
                },
            });

const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"domiciliation_debut\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#domiciliation_fin').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)

            {# Suppression domiciliation #}
            \$('.delete-domiciliation').on('click', function (e) {
                 e.preventDefault();
                 const domId = \$(this).attr('data-id');

                 swal({
                     title: \"Confirmation!\",
                     text: \"Voulez vous supprimer ce domiciliation/ cette location ?\",
                     icon: \"warning\",
                     buttons: true,
                     dangerMode: true,
                 }).then((willDelete) => {
                     if (willDelete) {
                         \$.ajax({
                             type: \"POST\",
                             url: \"{{ path('crm.domiciliation.delete') }}\",
                             data: { iddom : domId }
                         }).done(function(data){
                             if (data.success == true) {
                                 swal(data.message, {
                                     icon: \"success\",
                                 }).then((ok) => {
                                     location.reload();
                                 });
                             } else {
                                 swal(\"Erreur\", data.message, \"error\");
                             }
                         }).fail(function () {
                             swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimé!\", \"error\");
                         })
                     }
                 });
            });
            {# Fin suppression domiciliation #}
        });
    </script>
{% endblock %}
", "domiciliationlocation/index.html.twig", "/var/www/templates/domiciliationlocation/index.html.twig");
    }
}
