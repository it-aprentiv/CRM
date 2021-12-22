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

/* contact/index.html.twig */
class __TwigTemplate_9948a95dbdd398e8da0c62ec72e8a2c727d3822f71710812476adccec43c10b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Client/Prospect - CRM Aprentiv v2.0";
        
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des clients / Prospects</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES CLIENTS / PROSPECTS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-1\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 25, $this->source); })()), "structure", [], "any", false, false, false, 25), 'widget', ["placeholder" => "-- Entité --", "attr" => ["class" => "w-100"]]);
        echo "
            </div>
            <div class=\"form-group col-md-1\">
                <p>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 28, $this->source); })()), "idType", [], "any", false, false, false, 28), 'widget', ["placeholder" => "-- Statut --", "attr" => ["class" => "w-100"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 32
        echo "                <p>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 32, $this->source); })()), "societe", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "w-100 py-3"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 36
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Email --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 40
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 40, $this->source); })()), "nom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Nom --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 44
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 44, $this->source); })()), "prenom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Prénom --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 48
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 48, $this->source); })()), "adresse", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Adresse --"]]);
        echo "
            </div>
        </div>
        <div class=\"form-row clearfix\">
            <div class=\"col-md-2\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 53, $this->source); })()), "ville", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Ville --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 57
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 57, $this->source); })()), "codePostal", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Code postal --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 61
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 61, $this->source); })()), "telephone", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Téléphone --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 65
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 65, $this->source); })()), "opca", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- OPCO --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 69
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 69, $this->source); })()), "commercial", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Commercial --"]]);
        echo "
            </div>
            
            <div class=\"col-md-2 mt-2\">
                <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 77, $this->source); })()), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm mb-0 table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Entité</th>
                <th>Statut</th>
                <th>Societe</th>
                <th>Interlocuteur</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postale</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>OPCO</th>
                <th>Cial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 99
            echo "                <tr data-clientprospect-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 99), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">
                    <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "entite", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "statut", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "societe", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 103)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 103)), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "adresse", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ville", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "codePostal", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "opca", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "commercial", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 112
            if (((isset($context["can_view"]) || array_key_exists("can_view", $context)) && (isset($context["can_view"]) || array_key_exists("can_view", $context) ? $context["can_view"] : (function () { throw new RuntimeError('Variable "can_view" does not exist.', 112, $this->source); })()))) {
                // line 113
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\">
                            <i class=\"fas fa-eye fa-2x\"  style=\"margin-right: 10px;\"></i>
                        </a>
                        ";
            }
            // line 117
            echo "                        ";
            if (((isset($context["can_edit"]) || array_key_exists("can_edit", $context)) && (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 117, $this->source); })()))) {
                // line 118
                echo "                        <a onClick=\"deleteClientProspect(\$(this))\">
                            <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
                        </a>
                        ";
            }
            // line 122
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
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
        // line 138
        if (((isset($context["can_edit"]) || array_key_exists("can_edit", $context)) && (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 138, $this->source); })()))) {
            // line 139
            echo "    <div class=\"col-sm-12 p-0\" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"";
            // line 142
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/ajoutclient");
            echo "\" class=\"btn btn-primary btn-block\">Ajouter une fiche</a>
            </div>
            ";
        }
        // line 145
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 145, $this->source); })()), "user", [], "any", false, false, false, 145) == "MUNIER Pascal")) {
            // line 146
            echo "            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"";
            // line 147
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_prospect");
            echo "\" class=\"btn btn-primary btn-block\">Exporter prospects</a>    
            </div>
            ";
        }
        // line 150
        echo "        </div>
        
    </div>
    

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 157
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 158
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    

    <script>

        function deleteClientProspect(elem)
        {
            var clientprospect_id = elem.closest('tr').attr('data-clientprospect-id');
            var deleteLink = '";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Client_Prospect_Delete", ["id" => "clientprospect_id"]);
        echo "';
            deleteLink = deleteLink.replace('clientprospect_id', clientprospect_id);
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
            \$('#societe').select2({
                placeholder: \"-- Société --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 208
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
        // line 219
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 219, $this->source); })()), "request", [], "any", false, false, false, 219), "query", [], "any", false, false, false, 219), "get", [0 => "societe"], "method", false, false, false, 219)) {
            // line 220
            echo "                    var data = {
                        id: \"";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "request", [], "any", false, false, false, 221), "query", [], "any", false, false, false, 221), "get", [0 => "societe"], "method", false, false, false, 221), "html", null, true);
            echo "\",
                        text: '";
            // line 222
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "request", [], "any", false, false, false, 222), "query", [], "any", false, false, false, 222), "get", [0 => "societe"], "method", false, false, false, 222), "js"), "html", null, true);
            echo "'
                    };

                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#societe').append(newOption).trigger('change');

            ";
        }
        // line 229
        echo "            
             \$('#";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 230, $this->source); })()), "opca", [], "any", false, false, false, 230), "vars", [], "any", false, false, false, 230), "id", [], "any", false, false, false, 230), "html", null, true);
        echo "').select2({
                placeholder: \"-- OPCO --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 235
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
        // line 246
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 246, $this->source); })()), "request", [], "any", false, false, false, 246), "query", [], "any", false, false, false, 246), "get", [0 => "opca"], "method", false, false, false, 246)) {
            // line 247
            echo "                    var data = {
                        id: \"";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 248, $this->source); })()), "request", [], "any", false, false, false, 248), "query", [], "any", false, false, false, 248), "get", [0 => "opca"], "method", false, false, false, 248), "html", null, true);
            echo "\",
                        text: '";
            // line 249
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 249, $this->source); })()), "request", [], "any", false, false, false, 249), "query", [], "any", false, false, false, 249), "get", [0 => "opca"], "method", false, false, false, 249), "js"), "html", null, true);
            echo "'
                    };

                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_filter_form"]) || array_key_exists("contact_filter_form", $context) ? $context["contact_filter_form"] : (function () { throw new RuntimeError('Variable "contact_filter_form" does not exist.', 253, $this->source); })()), "opca", [], "any", false, false, false, 253), "vars", [], "any", false, false, false, 253), "id", [], "any", false, false, false, 253), "html", null, true);
            echo "').append(newOption).trigger('change');

            ";
        }
        // line 256
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  544 => 256,  538 => 253,  531 => 249,  527 => 248,  524 => 247,  522 => 246,  508 => 235,  500 => 230,  497 => 229,  487 => 222,  483 => 221,  480 => 220,  478 => 219,  464 => 208,  419 => 166,  407 => 158,  397 => 157,  382 => 150,  376 => 147,  373 => 146,  370 => 145,  364 => 142,  359 => 139,  357 => 138,  349 => 133,  343 => 130,  336 => 125,  328 => 122,  322 => 118,  319 => 117,  311 => 113,  309 => 112,  304 => 110,  300 => 109,  296 => 108,  292 => 107,  288 => 106,  284 => 105,  280 => 104,  274 => 103,  270 => 102,  266 => 101,  262 => 100,  255 => 99,  251 => 98,  227 => 77,  221 => 74,  212 => 69,  205 => 65,  198 => 61,  191 => 57,  185 => 53,  176 => 48,  169 => 44,  162 => 40,  155 => 36,  148 => 32,  142 => 28,  136 => 25,  130 => 22,  118 => 13,  114 => 11,  104 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Client/Prospect - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des clients / Prospects</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES CLIENTS / PROSPECTS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(contact_filter_form)  }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-1\">
                {{ form_widget(contact_filter_form.structure, { 'placeholder' : '-- Entité --',  attr: {'class' : 'w-100'} }) }}
            </div>
            <div class=\"form-group col-md-1\">
                <p>{{ form_widget(contact_filter_form.idType, { 'placeholder' : '-- Statut --',  attr: {'class' : 'w-100'} }) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.societe) }}#}
                <p>{{ form_widget(contact_filter_form.societe, { attr : {'class' : 'w-100 py-3' } } )  }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.nom) }}#}
                {{ form_widget(contact_filter_form.email, { attr: {'class' : 'w-100', placeholder : '-- Email --'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.nom) }}#}
                {{ form_widget(contact_filter_form.nom, { attr: {'class' : 'w-100', placeholder : '-- Nom --'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.prenom) }}#}
                {{ form_widget(contact_filter_form.prenom, { attr: {'class' : 'w-100', placeholder : '-- Prénom --'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(contact_filter_form.adresse, { attr: {'class' : 'w-100', placeholder : '-- Adresse --'} } ) }}
            </div>
        </div>
        <div class=\"form-row clearfix\">
            <div class=\"col-md-2\">
                {{ form_widget(contact_filter_form.ville, { attr: { 'class' : 'w-100', placeholder : '-- Ville --'} } ) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(contact_filter_form.codePostal) }}#}
                {{ form_widget(contact_filter_form.codePostal, { attr: { 'class' : 'w-100', placeholder : '-- Code postal --'} } ) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(contact_filter_form.telephone) }}#}
                {{ form_widget(contact_filter_form.telephone, { attr: { 'class' : 'w-100', placeholder : '-- Téléphone --'} } ) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(contact_filter_form.opca) }}#}
                {{ form_widget(contact_filter_form.opca, { attr: { 'class' : 'w-100', placeholder : '-- OPCO --'} }) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(contact_filter_form.commercial) }}#}
                {{ form_widget(contact_filter_form.commercial, { attr: { 'class' : 'w-100', placeholder : '-- Commercial --'} }) }}
            </div>
            
            <div class=\"col-md-2 mt-2\">
                <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                <a href=\"{{ path('Liste_Client_Prospect_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(contact_filter_form)  }}
    </fieldset>

    <table class=\"table table-sm mb-0 table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Entité</th>
                <th>Statut</th>
                <th>Societe</th>
                <th>Interlocuteur</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postale</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>OPCO</th>
                <th>Cial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for contact in pagination %}
                <tr data-clientprospect-id=\"{{ contact.contact_id }}\" data-href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : contact.contact_id} ) }}\">
                    <td>{{ contact.entite }}</td>
                    <td>{{ contact.statut }}</td>
                    <td>{{ contact.societe }}</td>
                    <td>{{ contact.nom | ucwords}} {{ contact.prenom | ucwords }}</td>
                    <td>{{ contact.adresse }}</td>
                    <td>{{ contact.ville }}</td>
                    <td>{{ contact.codePostal }}</td>
                    <td>{{ contact.telephone }}</td>
                    <td>{{ contact.email}}</td>
                    <td>{{ contact.opca }}</td>
                    <td>{{ contact.commercial }}</td>
                    <td>
                        {% if can_view is defined and can_view %}
                        <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : contact.contact_id} ) }}\">
                            <i class=\"fas fa-eye fa-2x\"  style=\"margin-right: 10px;\"></i>
                        </a>
                        {% endif %}
                        {% if can_edit is defined and can_edit %}
                        <a onClick=\"deleteClientProspect(\$(this))\">
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
    {% if can_edit is defined and can_edit %}
    <div class=\"col-sm-12 p-0\" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"{{ path(\"Fiche_client_prospect_Controller/ajoutclient\") }}\" class=\"btn btn-primary btn-block\">Ajouter une fiche</a>
            </div>
            {% endif %}
            {% if app.user  == 'MUNIER Pascal'%}
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"{{ path(\"export_prospect\") }}\" class=\"btn btn-primary btn-block\">Exporter prospects</a>    
            </div>
            {% endif %}
        </div>
        
    </div>
    

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    

    <script>

        function deleteClientProspect(elem)
        {
            var clientprospect_id = elem.closest('tr').attr('data-clientprospect-id');
            var deleteLink = '{{ path('Client_Prospect_Delete', {'id':'clientprospect_id'}) }}';
            deleteLink = deleteLink.replace('clientprospect_id', clientprospect_id);
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
            \$('#societe').select2({
                placeholder: \"-- Société --\",
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

            {% if app.request.query.get('societe') %}
                    var data = {
                        id: \"{{ app.request.query.get('societe') }}\",
                        text: '{{ app.request.query.get('societe')|e('js') }}'
                    };

                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#societe').append(newOption).trigger('change');

            {% endif  %}
            
             \$('#{{ contact_filter_form.opca.vars.id }}').select2({
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
                    \$('#{{ contact_filter_form.opca.vars.id }}').append(newOption).trigger('change');

            {% endif  %}
        });
    </script>
{% endblock %}", "contact/index.html.twig", "/var/www/templates/contact/index.html.twig");
    }
}
