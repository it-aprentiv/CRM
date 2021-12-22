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

/* competence/index.html.twig */
class __TwigTemplate_27130a4f068169f5edea3c033208881460ad1209d06af2d1a7cb38480281f5dd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "competence/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "competence/index.html.twig", 1);
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

        echo "Competence index";
        
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Intitulé de stage</li>
        </ol>
    </nav>
    <h2 class=\"text-center mt-2 text-primary\">INTITULE DE STAGE</h2>
    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["competence_filter_form"]) || array_key_exists("competence_filter_form", $context) ? $context["competence_filter_form"] : (function () { throw new RuntimeError('Variable "competence_filter_form" does not exist.', 21, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["competence_filter_form"]) || array_key_exists("competence_filter_form", $context) ? $context["competence_filter_form"] : (function () { throw new RuntimeError('Variable "competence_filter_form" does not exist.', 24, $this->source); })()), "intitule", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Intitulé --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_index");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["competence_filter_form"]) || array_key_exists("competence_filter_form", $context) ? $context["competence_filter_form"] : (function () { throw new RuntimeError('Variable "competence_filter_form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
    </fieldset>
    <table class=\"table table-sm mb-0\">
        <thead>
            <tr class=\"bg-info text-light text-center\">
                <th>Intitulé</th>
                <th>Théme formation</th>
                <th>Théme generale</th>
                <th>Programme de formation</th>
                <th>Document évaluation</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 46
            echo "            <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 46)]), "html", null, true);
            echo "\">
                <td class=\"text-center\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "competence", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "themeformation", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["competence"], "themegenerale", [], "any", false, false, false, 49), "html", null, true);
            echo "</td>
                <td class=\"text-center\">
                    ";
            // line 51
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["competence"], "catalogueProgramme", [], "any", false, false, false, 51))) {
                // line 52
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_programme_dossier", ["fichier" => twig_get_attribute($this->env, $this->source, $context["competence"], "catalogueProgramme", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                            <i class=\"fa fa-file\" aria-hidden=\"true\"></i>
                        </a>
                    ";
            }
            // line 56
            echo "                </td>
                <td class=\"text-center\">
                
                    ";
            // line 59
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["competence"], "evaluation", [], "any", false, false, false, 59))) {
                // line 60
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_programme_dossier", ["fichier" => twig_get_attribute($this->env, $this->source, $context["competence"], "evaluation", [], "any", false, false, false, 60)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                            <i class=\"fa fa-file\" aria-hidden=\"true\"></i>
                        </a>
                    ";
            }
            // line 64
            echo "                </td>
                <td>
                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_show", ["id" => twig_get_attribute($this->env, $this->source, $context["competence"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            echo "            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </tbody>
        <tfoot>
        <tr >
            <td class=\"text-align-middle pt-3\">
                <strong>Total : </strong> ";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 78), "html", null, true);
        echo "
            </td>
            <td colspan=\"5\" class=\"text-align-middle pt-3\">
                ";
        // line 81
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 81, $this->source); })()));
        echo "
            </td>
        </tr>
        </tfoot>
    </table>
    <div class=\"d-flex justify-content-center no-disabled\">
        <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence_new");
        echo "\" class=\"btn btn-primary\">Ajouter</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "competence/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 93,  270 => 92,  256 => 87,  247 => 81,  241 => 78,  235 => 74,  226 => 70,  217 => 66,  213 => 64,  205 => 60,  203 => 59,  198 => 56,  190 => 52,  188 => 51,  183 => 49,  179 => 48,  175 => 47,  170 => 46,  165 => 45,  148 => 31,  142 => 28,  135 => 24,  129 => 21,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Competence index{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Intitulé de stage</li>
        </ol>
    </nav>
    <h2 class=\"text-center mt-2 text-primary\">INTITULE DE STAGE</h2>
    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(competence_filter_form)  }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {{ form_widget(competence_filter_form.intitule, { attr: {'class' : 'w-100', 'placeholder' : '-- Intitulé --'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                <a href=\"{{ path('competence_index') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(competence_filter_form)  }}
    </fieldset>
    <table class=\"table table-sm mb-0\">
        <thead>
            <tr class=\"bg-info text-light text-center\">
                <th>Intitulé</th>
                <th>Théme formation</th>
                <th>Théme generale</th>
                <th>Programme de formation</th>
                <th>Document évaluation</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
        {% for competence in pagination %}
            <tr data-href=\"{{ path('competence_show', {'id': competence.id}) }}\">
                <td class=\"text-center\">{{ competence.competence }}</td>
                <td class=\"text-center\">{{ competence.themeformation }}</td>
                <td class=\"text-center\">{{ competence.themegenerale }}</td>
                <td class=\"text-center\">
                    {% if competence.catalogueProgramme is not empty %}
                        <a href=\"{{ path(\"download_programme_dossier\",{'fichier':competence.catalogueProgramme}) }}\" class=\"btn btn-primary\">
                            <i class=\"fa fa-file\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </td>
                <td class=\"text-center\">
                
                    {% if competence.evaluation is not empty %}
                        <a href=\"{{ path(\"download_programme_dossier\",{'fichier':competence.evaluation}) }}\" class=\"btn btn-primary\">
                            <i class=\"fa fa-file\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </td>
                <td>
                    <a href=\"{{ path('competence_show', {'id': competence.id}) }}\"><i class=\"fas fa-eye\"></i></a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"14\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr >
            <td class=\"text-align-middle pt-3\">
                <strong>Total : </strong> {{ pagination.getTotalItemCount }}
            </td>
            <td colspan=\"5\" class=\"text-align-middle pt-3\">
                {{ knp_pagination_render(pagination) }}
            </td>
        </tr>
        </tfoot>
    </table>
    <div class=\"d-flex justify-content-center no-disabled\">
        <a href=\"{{ path('competence_new') }}\" class=\"btn btn-primary\">Ajouter</a>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
{% endblock %}
", "competence/index.html.twig", "/home/jeremy/Bureau/project/app/templates/competence/index.html.twig");
    }
}
