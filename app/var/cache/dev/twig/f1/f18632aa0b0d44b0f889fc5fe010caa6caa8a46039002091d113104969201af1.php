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

/* log/index.html.twig */
class __TwigTemplate_006000a82d8d097d8559df28fbaa69e17261420e64b69fa22fa8f838e88f5b1e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "log/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "log/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "log/index.html.twig", 1);
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

        echo "LOG";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
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
        echo "   <h2 class=\"text-center mt-2 text-nmary\">Journalisation</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <fieldset class=\"mb-3 list-filter\">
                <legend>Filtre</legend>
                ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["log_filter_form"]) || array_key_exists("log_filter_form", $context) ? $context["log_filter_form"] : (function () { throw new RuntimeError('Variable "log_filter_form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                  
                    <div class=\"form-group col-md-2\">
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["log_filter_form"]) || array_key_exists("log_filter_form", $context) ? $context["log_filter_form"] : (function () { throw new RuntimeError('Variable "log_filter_form" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), 'widget', ["placeholder" => "Utilisateur", "attr" => ["class" => "w-100", "required" => false]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["log_filter_form"]) || array_key_exists("log_filter_form", $context) ? $context["log_filter_form"] : (function () { throw new RuntimeError('Variable "log_filter_form" does not exist.', 23, $this->source); })()), "creation", [], "any", false, false, false, 23), 'widget', ["placeholder" => "Date", "attr" => ["class" => "js-datepicker", "required" => false]]);
        echo "
                    </div>
                    <div class=\"col-md-2\">
                        <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                        <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Log_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
                    </div>
                </div>
                ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["log_filter_form"]) || array_key_exists("log_filter_form", $context) ? $context["log_filter_form"] : (function () { throw new RuntimeError('Variable "log_filter_form" does not exist.', 30, $this->source); })()), 'form_end');
        echo "
            </fieldset>
                        <table class=\"table table-xl mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                <thead>
                        <tr class=\"bg-info text-light\">
                        <th>Message</th>
                        <th>Adresse</th>
                        <th>Utilisateur</th>
                        <th>Date</th>
                </thead>
                 <tbody>
                                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paginationLog"]) || array_key_exists("paginationLog", $context) ? $context["paginationLog"] : (function () { throw new RuntimeError('Variable "paginationLog" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 42
            echo "                                <tr>
                                        ";
            // line 43
            if ((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 43)) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "Connexion") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144)))) {
                // line 44
                echo "                                        <td class=\"bg-success text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
                                        ";
            } elseif ((is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source,             // line 45
$context["log"], "message", [], "any", false, false, false, 45)) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "supprimé(e)") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 === substr($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, -strlen($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002))))) {
                // line 46
                echo "                                        <td class=\"bg-warning text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 46), "html", null, true);
                echo "</td>
                                        ";
            } else {
                // line 48
                echo "                                        <td class=\"bg-info text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "message", [], "any", false, false, false, 48), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 50
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["log"], "levelName", [], "any", false, false, false, 50) == "80.11.169.201")) {
                // line 51
                echo "                                        <td>Aprentiv</td>
                                        ";
            } else {
                // line 53
                echo "                                        <td class=\"bg-danger text-white\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "levelName", [], "any", false, false, false, 53), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 55
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["log"], "user", [], "any", false, false, false, 55) == null)) {
                // line 56
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "user", [], "any", false, false, false, 56), "html", null, true);
                echo "</td>
                                        ";
            } else {
                // line 58
                echo "                                        <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "user", [], "any", false, false, false, 58), "nomutilisateur", [], "any", false, false, false, 58), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 60
            echo "                                        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "createdAt", [], "any", false, false, false, 60), "d/m/Y H:i"), "html", null, true);
            echo "</td>
                                        
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            </tbody>
                <tfoot>
                        <tr>
                            <td colspan=\"2\" class=\"text-align-middle pt-3\">
                                <strong>Total : </strong> ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["paginationLog"]) || array_key_exists("paginationLog", $context) ? $context["paginationLog"] : (function () { throw new RuntimeError('Variable "paginationLog" does not exist.', 68, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 68), "html", null, true);
        echo "
                            </td>
                            <td colspan=\"2\" class=\"text-align-middle pt-3\">
                                ";
        // line 71
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["paginationLog"]) || array_key_exists("paginationLog", $context) ? $context["paginationLog"] : (function () { throw new RuntimeError('Variable "paginationLog" does not exist.', 71, $this->source); })()));
        echo "
                            </td>
                        </tr>
                    </tfoot>
                        </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
        <script type=\"text/javascript\">
            \$(\".js-datepicker\").each(function () {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });
        </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "log/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 78,  257 => 77,  241 => 71,  235 => 68,  229 => 64,  218 => 60,  212 => 58,  206 => 56,  203 => 55,  197 => 53,  193 => 51,  190 => 50,  184 => 48,  178 => 46,  176 => 45,  171 => 44,  169 => 43,  166 => 42,  162 => 41,  148 => 30,  142 => 27,  135 => 23,  129 => 20,  122 => 16,  115 => 11,  105 => 10,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}LOG{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
   <h2 class=\"text-center mt-2 text-nmary\">Journalisation</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <fieldset class=\"mb-3 list-filter\">
                <legend>Filtre</legend>
                {{ form_start(log_filter_form)  }}
                <div class=\"form-row\">
                  
                    <div class=\"form-group col-md-2\">
                        {{ form_widget(log_filter_form.user, { 'placeholder' : 'Utilisateur',  attr: {'class' : 'w-100','required': false} }) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        {{ form_widget(log_filter_form.creation, { 'placeholder' : 'Date',  attr: {'class' : 'js-datepicker','required': false} }) }}
                    </div>
                    <div class=\"col-md-2\">
                        <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                        <a href=\"{{ path('Log_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
                    </div>
                </div>
                {{ form_end(log_filter_form)  }}
            </fieldset>
                        <table class=\"table table-xl mb-0 table-striped table-hover mt-2 mb-5 font-weight-bold\">
                <thead>
                        <tr class=\"bg-info text-light\">
                        <th>Message</th>
                        <th>Adresse</th>
                        <th>Utilisateur</th>
                        <th>Date</th>
                </thead>
                 <tbody>
                                {% for log in paginationLog %}
                                <tr>
                                        {% if log.message starts with 'Connexion' %}
                                        <td class=\"bg-success text-white\">{{ log.message }}</td>
                                        {% elseif log.message ends with 'supprimé(e)'%}
                                        <td class=\"bg-warning text-white\">{{ log.message }}</td>
                                        {% else %}
                                        <td class=\"bg-info text-white\">{{ log.message }}</td>
                                        {% endif %}
                                        {% if log.levelName == \"80.11.169.201\" %}
                                        <td>Aprentiv</td>
                                        {% else %}
                                        <td class=\"bg-danger text-white\">{{ log.levelName }}</td>
                                        {% endif %}
                                        {% if log.user == null %}
                                        <td>{{ log.user }}</td>
                                        {% else %}
                                        <td>{{ log.user.nomutilisateur }}</td>
                                        {% endif %}
                                        <td>{{ log.createdAt|date('d/m/Y H:i') }}</td>
                                        
                                </tr>
                                {% endfor %}
                            </tbody>
                <tfoot>
                        <tr>
                            <td colspan=\"2\" class=\"text-align-middle pt-3\">
                                <strong>Total : </strong> {{ paginationLog.getTotalItemCount }}
                            </td>
                            <td colspan=\"2\" class=\"text-align-middle pt-3\">
                                {{ knp_pagination_render(paginationLog) }}
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
            \$(\".js-datepicker\").each(function () {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });
        </script>
{% endblock %}", "log/index.html.twig", "/var/www/templates/log/index.html.twig");
    }
}
