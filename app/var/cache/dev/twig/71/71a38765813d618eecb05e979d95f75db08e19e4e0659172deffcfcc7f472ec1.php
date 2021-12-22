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

/* dossier/part/calendrier-principal.html.twig */
class __TwigTemplate_4ef87a0620f2c1728d4cadff5d0c37f3092dc342d13de2496805533df933c3a5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/calendrier-principal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/calendrier-principal.html.twig"));

        // line 1
        echo "<table class=\"table table-bordered table-striped mb-0\" id=\"datesdossier\">
    <thead>
        <tr>
            <td class=\"text-center\">
                <a href=\"#\" id=\"remove-selected-dates\">Supprimer</a>
            </td>
            <td colspan=\"5\" class=\"text-center\">
                <span><b>Ajouter des dates de formation </b></span>
                <input type=\"button\" id=\"btn-add-formation\" data-toggle=\"modal\" data-target=\"#formationModal\"  value=\"+\">
                ";
        // line 10
        if ((isset($context["id"]) || array_key_exists("id", $context))) {
            // line 11
            echo "                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier.date.refresh_calendar", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\" id=\"refresh-calendar\" >Refresh</a>
                ";
        }
        // line 13
        echo "            </td>
        </tr>
    </thead>
    <tr>
        <th class=\"text-center\">
            <input type=\"checkbox\" id=\"toogle-formation-dates-check\" />
        </th>
        <th class=\"text-center\">Date</th>
        <th class=\"text-center\">Heure début</th>
        <th class=\"text-center\">Heure Fin</th>
        <th class=\"text-center\">Duree</th>
        <th class=\"text-center\">Action</th>
    </tr>
    <tbody id=\"formation-date-items\" >
        ";
        // line 27
        if ((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context))) {
            // line 28
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 28, $this->source); })()), "dates", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
                // line 29
                echo "                <tr class=\"text-center\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "id", [], "any", false, false, false, 29), "html", null, true);
                echo "\">
                    <td><input type=\"checkbox\" name=\"formation_date_item[]\" class=\"format-date-item\" value=\"\" /></td>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "dateD", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "dateD", [], "any", false, false, false, 32), "H:i"), "html", null, true);
                echo "</td>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "dateF", [], "any", false, false, false, 33), "H:i"), "html", null, true);
                echo "</td>
                    <td class=\"formation_date_nb_h\">";
                // line 34
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "nbH", [], "any", false, false, false, 34), 2, "."), "html", null, true);
                echo "</td>
                    <td><a href=\"#\" class=\"delete-formation-date\" alt=\"Supprimer la date\"><i class=\"fas fa-trash-o\">Supprimer</i></a></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        ";
        }
        // line 39
        echo "    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/part/calendrier-principal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 39,  113 => 38,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  85 => 29,  80 => 28,  78 => 27,  62 => 13,  56 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table table-bordered table-striped mb-0\" id=\"datesdossier\">
    <thead>
        <tr>
            <td class=\"text-center\">
                <a href=\"#\" id=\"remove-selected-dates\">Supprimer</a>
            </td>
            <td colspan=\"5\" class=\"text-center\">
                <span><b>Ajouter des dates de formation </b></span>
                <input type=\"button\" id=\"btn-add-formation\" data-toggle=\"modal\" data-target=\"#formationModal\"  value=\"+\">
                {% if id is defined %}
                    <a href=\"{{ path('dossier.date.refresh_calendar', {id: dossier.id }) }}\" id=\"refresh-calendar\" >Refresh</a>
                {% endif %}
            </td>
        </tr>
    </thead>
    <tr>
        <th class=\"text-center\">
            <input type=\"checkbox\" id=\"toogle-formation-dates-check\" />
        </th>
        <th class=\"text-center\">Date</th>
        <th class=\"text-center\">Heure début</th>
        <th class=\"text-center\">Heure Fin</th>
        <th class=\"text-center\">Duree</th>
        <th class=\"text-center\">Action</th>
    </tr>
    <tbody id=\"formation-date-items\" >
        {% if formated_formation_dates is defined %}
            {% for date in formated_formation_dates.dates %}
                <tr class=\"text-center\" data-id=\"{{ date.id }}\">
                    <td><input type=\"checkbox\" name=\"formation_date_item[]\" class=\"format-date-item\" value=\"\" /></td>
                    <td>{{ date.dateD | date('d/m/Y') }}</td>
                    <td>{{ date.dateD | date('H:i') }}</td>
                    <td>{{ date.dateF | date('H:i') }}</td>
                    <td class=\"formation_date_nb_h\">{{ date.nbH | number_format(2, '.') }}</td>
                    <td><a href=\"#\" class=\"delete-formation-date\" alt=\"Supprimer la date\"><i class=\"fas fa-trash-o\">Supprimer</i></a></td>
                </tr>
            {% endfor %}
        {% endif %}
    </tbody>
</table>", "dossier/part/calendrier-principal.html.twig", "/var/www/templates/dossier/part/calendrier-principal.html.twig");
    }
}
