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

/* formateur/index.html.twig */
class __TwigTemplate_9b6d39972bada527db7efd5535a5aca8d07c1f002c6876bd1660ee71766e3d5a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formateur/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Formateurs - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des formateurs</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES FORMATEURS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formateur_filter_form"]) || array_key_exists("formateur_filter_form", $context) ? $context["formateur_filter_form"] : (function () { throw new RuntimeError('Variable "formateur_filter_form" does not exist.', 26, $this->source); })()), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"form-group col-md-3\">
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_filter_form"]) || array_key_exists("formateur_filter_form", $context) ? $context["formateur_filter_form"] : (function () { throw new RuntimeError('Variable "formateur_filter_form" does not exist.', 29, $this->source); })()), "nomStr", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Société du formateur ou organisme"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_filter_form"]) || array_key_exists("formateur_filter_form", $context) ? $context["formateur_filter_form"] : (function () { throw new RuntimeError('Variable "formateur_filter_form" does not exist.', 32, $this->source); })()), "nom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Nom"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_filter_form"]) || array_key_exists("formateur_filter_form", $context) ? $context["formateur_filter_form"] : (function () { throw new RuntimeError('Variable "formateur_filter_form" does not exist.', 35, $this->source); })()), "prenom", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Prénom"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_filter_form"]) || array_key_exists("formateur_filter_form", $context) ? $context["formateur_filter_form"] : (function () { throw new RuntimeError('Variable "formateur_filter_form" does not exist.', 38, $this->source); })()), "competence", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Compétence"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_filter_form"]) || array_key_exists("formateur_filter_form", $context) ? $context["formateur_filter_form"] : (function () { throw new RuntimeError('Variable "formateur_filter_form" does not exist.', 41, $this->source); })()), "statut", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Statut"]]);
        echo "
            </div>
            <div class=\"form-group col-md-1\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formateur_filter_form"]) || array_key_exists("formateur_filter_form", $context) ? $context["formateur_filter_form"] : (function () { throw new RuntimeError('Variable "formateur_filter_form" does not exist.', 48, $this->source); })()), 'form_end');
        echo "
    </fieldset>
    <table class=\"table table-xs table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>Société du formateur ou organisme</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Compétence</th>
            <th>Statut du formateur</th>
            <th>Active (oui/non)</th>
            <th>Potentiel(oui/non)</th>
            <th>Black listé(oui/non)</th>
            <th colspan=\"2\">Actions</th>
        </tr>
        </thead>
        <tbody>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formateur"]) {
            // line 66
            echo "                <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller/editFormateur", ["id" => twig_get_attribute($this->env, $this->source, $context["formateur"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "nomStr", [], "any", false, false, false, 67), "html", null, true);
            echo "</td>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "nom", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "prenom", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "competence", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formateur"], "statut", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>

                    ";
            // line 73
            if ((twig_get_attribute($this->env, $this->source, $context["formateur"], "statutFmt", [], "any", false, false, false, 73) == 1)) {
                // line 74
                echo "                        <td>Oui</td>
                    ";
            } else {
                // line 76
                echo "                        <td>Non</td>
                    ";
            }
            // line 78
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["formateur"], "statut", [], "any", false, false, false, 78) == "Potentiel")) {
                // line 79
                echo "                        <td>Oui</td>
                    ";
            } else {
                // line 81
                echo "                        <td>Non</td>
                    ";
            }
            // line 83
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["formateur"], "statut", [], "any", false, false, false, 83) == "Black listé")) {
                // line 84
                echo "                        <td>Oui</td>
                    ";
            } else {
                // line 86
                echo "                        <td>Non</td>
                    ";
            }
            // line 88
            echo "                    <td>
                        <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller/editFormateur", ["id" => twig_get_attribute($this->env, $this->source, $context["formateur"], "id", [], "any", false, false, false, 89)]), "html", null, true);
            echo "\" target=\"_blank\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a onclick=\"deleteFormateur('";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller/deleteFormateur", ["id" => twig_get_attribute($this->env, $this->source, $context["formateur"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "')\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "        </tbody>
        <tfoot>
        <tr >
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                <strong>Total : </strong> ";
        // line 102
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 102, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 102), "html", null, true);
        echo "
            </td>
            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                ";
        // line 105
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 105, $this->source); })()));
        echo "
            </td>
        </tr>
        </tfoot>
    </table>
    <div class=\"text-center form-group col-md-12\">
        <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller/ajoutFormateur");
        echo "\" class=\"btn btn-info\">Ajouter un formateur</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function deleteFormateur(deleteLink)
        {
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
        return "formateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 116,  310 => 115,  297 => 111,  288 => 105,  282 => 102,  276 => 98,  264 => 92,  258 => 89,  255 => 88,  251 => 86,  247 => 84,  244 => 83,  240 => 81,  236 => 79,  233 => 78,  229 => 76,  225 => 74,  223 => 73,  218 => 71,  214 => 70,  210 => 69,  206 => 68,  202 => 67,  197 => 66,  193 => 65,  173 => 48,  167 => 45,  160 => 41,  154 => 38,  148 => 35,  142 => 32,  136 => 29,  130 => 26,  118 => 17,  114 => 15,  104 => 14,  90 => 10,  80 => 9,  61 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{#{% block title %}Hello FormateurController!{% endblock %}
{% block body %}
    {% include '_en-construction.html.twig' %}
{% endblock %}#}
{% block title %}Formateurs - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des formateurs</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES FORMATEURS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(formateur_filter_form) }}
        <div class=\"row\">
            <div class=\"form-group col-md-3\">
                {{ form_widget(formateur_filter_form.nomStr, {attr: {'class' : 'w-100', placeholder : 'Société du formateur ou organisme'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(formateur_filter_form.nom, {attr: {'class' : 'w-100', placeholder : 'Nom'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(formateur_filter_form.prenom, {attr: {'class' : 'w-100', placeholder : 'Prénom'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(formateur_filter_form.competence, {attr: {'class' : 'w-100', placeholder : 'Compétence'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                {{ form_widget(formateur_filter_form.statut, {attr: {'class' : 'w-100', placeholder : 'Statut'} }) }}
            </div>
            <div class=\"form-group col-md-1\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Liste_Formateur_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(formateur_filter_form) }}
    </fieldset>
    <table class=\"table table-xs table-striped\">
        <thead>
        <tr class=\"bg-info text-light\">
            <th>Société du formateur ou organisme</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Compétence</th>
            <th>Statut du formateur</th>
            <th>Active (oui/non)</th>
            <th>Potentiel(oui/non)</th>
            <th>Black listé(oui/non)</th>
            <th colspan=\"2\">Actions</th>
        </tr>
        </thead>
        <tbody>
            {% for formateur in pagination %}
                <tr data-href=\"{{ path('Liste_Formateur_Controller/editFormateur', {id:formateur.id}) }}\">
                    <td>{{ formateur.nomStr }}</td>
                    <td>{{ formateur.nom }}</td>
                    <td>{{ formateur.prenom }}</td>
                    <td>{{ formateur.competence }}</td>
                    <td>{{ formateur.statut }}</td>

                    {% if formateur.statutFmt == 1 %}
                        <td>Oui</td>
                    {% else %}
                        <td>Non</td>
                    {% endif %}
                    {% if formateur.statut == 'Potentiel' %}
                        <td>Oui</td>
                    {% else %}
                        <td>Non</td>
                    {% endif %}
                    {% if formateur.statut == 'Black listé' %}
                        <td>Oui</td>
                    {% else %}
                        <td>Non</td>
                    {% endif %}
                    <td>
                        <a href=\"{{ path('Liste_Formateur_Controller/editFormateur', {id:formateur.id}) }}\" target=\"_blank\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a onclick=\"deleteFormateur('{{ path('Liste_Formateur_Controller/deleteFormateur', {id:formateur.id}) }}')\">
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
    <div class=\"text-center form-group col-md-12\">
        <a href=\"{{ path('Liste_Formateur_Controller/ajoutFormateur') }}\" class=\"btn btn-info\">Ajouter un formateur</a>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function deleteFormateur(deleteLink)
        {
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
", "formateur/index.html.twig", "/home/jeremy/Bureau/project/app/templates/formateur/index.html.twig");
    }
}
