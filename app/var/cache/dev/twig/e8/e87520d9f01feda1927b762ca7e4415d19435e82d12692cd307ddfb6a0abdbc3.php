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

/* dossier/part/calendrier-refresh-dates.html.twig */
class __TwigTemplate_fb8ce0af71fad6221481020b55148d50170cf72a5d2ebbf031048feb9ef39e2e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/calendrier-refresh-dates.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/calendrier-refresh-dates.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dates"]) || array_key_exists("dates", $context) ? $context["dates"] : (function () { throw new RuntimeError('Variable "dates" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 2
            echo "    ";
            if (((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 2, $this->source); })()) == "update")) {
                // line 3
                echo "        <tr class=\"text-center\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "id", [], "any", false, false, false, 3), "html", null, true);
                echo "\">
            <td><input type=\"checkbox\" name=\"\" class=\"format-date-item\" value=\"\"></td>
            <td>";
                // line 5
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "dateD", [], "any", false, false, false, 5), "d/m/Y"), "html", null, true);
                echo "</td>
            <td>";
                // line 6
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "dateD", [], "any", false, false, false, 6), "H:i"), "html", null, true);
                echo "</td>
            <td>";
                // line 7
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "dateF", [], "any", false, false, false, 7), "H:i"), "html", null, true);
                echo "</td>
            <td class=\"formation_date_nb_h\">";
                // line 8
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "nbH", [], "any", false, false, false, 8), 2, "."), "html", null, true);
                echo "</td>
            <td><a href=\"#\" class=\"delete-formation-date\" alt=\"Supprimer la date\"><i class=\"fas fa-trash-o\">Supprimer</i></a></td>
        </tr>
    ";
            } elseif ((            // line 11
(isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 11, $this->source); })()) == "create")) {
                // line 12
                echo "        ";
                $context["heureDebut"] = ((twig_get_attribute($this->env, $this->source, $context["date"], "d_heure_m", [], "any", false, false, false, 12)) ? (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["date"], "d_heure_m", [], "any", false, false, false, 12), [" " => ""])) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["date"], "d_heure_am", [], "any", false, false, false, 12), [" " => ""])));
                // line 13
                echo "        ";
                $context["heureFin"] = ((twig_get_attribute($this->env, $this->source, $context["date"], "f_heure_m", [], "any", false, false, false, 13)) ? (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["date"], "f_heure_m", [], "any", false, false, false, 13), [" " => ""])) : (twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["date"], "f_heure_am", [], "any", false, false, false, 13), [" " => ""])));
                // line 14
                echo "        <tr class=\"text-center\" data-id=\"0\" 
            data-date_debut=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "date_debut", [], "any", false, false, false, 15), "html", null, true);
                echo "\" 
            data-d_heure_m=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "d_heure_m", [], "any", false, false, false, 16), "html", null, true);
                echo "\" 
            data-f_heure_m=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "f_heure_m", [], "any", false, false, false, 17), "html", null, true);
                echo "\" 
            data-d_heure_am=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "d_heure_am", [], "any", false, false, false, 18), "html", null, true);
                echo "\"
            data-f_heure_am=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "f_heure_am", [], "any", false, false, false, 19), "html", null, true);
                echo "\"
            data-duree=\"";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "duree", [], "any", false, false, false, 20), "html", null, true);
                echo "\"
        >
            <td>
                <input type=\"checkbox\" name=\"delete-item\" class=\"format-date-item\" />
                <input type=\"hidden\" name=\"dossier[formation_date_item][]\" value=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "date_debut", [], "any", false, false, false, 24), "html", null, true);
                echo "|";
                echo twig_escape_filter($this->env, (isset($context["heureDebut"]) || array_key_exists("heureDebut", $context) ? $context["heureDebut"] : (function () { throw new RuntimeError('Variable "heureDebut" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "|";
                echo twig_escape_filter($this->env, (isset($context["heureFin"]) || array_key_exists("heureFin", $context) ? $context["heureFin"] : (function () { throw new RuntimeError('Variable "heureFin" does not exist.', 24, $this->source); })()), "html", null, true);
                echo "|";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "duree", [], "any", false, false, false, 24), "html", null, true);
                echo "\" />
            </td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "date_debut", [], "any", false, false, false, 26), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, (isset($context["heureDebut"]) || array_key_exists("heureDebut", $context) ? $context["heureDebut"] : (function () { throw new RuntimeError('Variable "heureDebut" does not exist.', 27, $this->source); })()), "html", null, true);
                echo "</td>
            <td>";
                // line 28
                echo twig_escape_filter($this->env, (isset($context["heureFin"]) || array_key_exists("heureFin", $context) ? $context["heureFin"] : (function () { throw new RuntimeError('Variable "heureFin" does not exist.', 28, $this->source); })()), "html", null, true);
                echo "</td>
            <td class=\"formation_date_nb_h\">";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["date"], "duree", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
            <td><a href=\"#\" class=\"delete-formation-date\" alt=\"Supprimer la date\"><i class=\"fas fa-trash-o\">Supprimer</i></a></td>
        </tr>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/part/calendrier-refresh-dates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 29,  131 => 28,  127 => 27,  123 => 26,  112 => 24,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  89 => 16,  85 => 15,  82 => 14,  79 => 13,  76 => 12,  74 => 11,  68 => 8,  64 => 7,  60 => 6,  56 => 5,  50 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for date in dates %}
    {% if context == 'update' %}
        <tr class=\"text-center\" data-id=\"{{ date.id }}\">
            <td><input type=\"checkbox\" name=\"\" class=\"format-date-item\" value=\"\"></td>
            <td>{{ date.dateD | date('d/m/Y') }}</td>
            <td>{{ date.dateD | date('H:i') }}</td>
            <td>{{ date.dateF | date('H:i') }}</td>
            <td class=\"formation_date_nb_h\">{{ date.nbH | number_format(2, '.') }}</td>
            <td><a href=\"#\" class=\"delete-formation-date\" alt=\"Supprimer la date\"><i class=\"fas fa-trash-o\">Supprimer</i></a></td>
        </tr>
    {% elseif context == 'create' %}
        {% set heureDebut = date.d_heure_m ? date.d_heure_m | replace({' ': ''}) : date.d_heure_am | replace({' ': ''}) %}
        {% set heureFin = date.f_heure_m ? date.f_heure_m | replace({' ': ''}) : date.f_heure_am | replace({' ': ''}) %}
        <tr class=\"text-center\" data-id=\"0\" 
            data-date_debut=\"{{ date.date_debut }}\" 
            data-d_heure_m=\"{{ date.d_heure_m }}\" 
            data-f_heure_m=\"{{ date.f_heure_m }}\" 
            data-d_heure_am=\"{{ date.d_heure_am }}\"
            data-f_heure_am=\"{{ date.f_heure_am }}\"
            data-duree=\"{{ date.duree }}\"
        >
            <td>
                <input type=\"checkbox\" name=\"delete-item\" class=\"format-date-item\" />
                <input type=\"hidden\" name=\"dossier[formation_date_item][]\" value=\"{{ date.date_debut }}|{{ heureDebut }}|{{ heureFin }}|{{ date.duree }}\" />
            </td>
            <td>{{ date.date_debut }}</td>
            <td>{{ heureDebut  }}</td>
            <td>{{ heureFin  }}</td>
            <td class=\"formation_date_nb_h\">{{ date.duree }}</td>
            <td><a href=\"#\" class=\"delete-formation-date\" alt=\"Supprimer la date\"><i class=\"fas fa-trash-o\">Supprimer</i></a></td>
        </tr>
    {% endif %}
{% endfor %}
", "dossier/part/calendrier-refresh-dates.html.twig", "/home/jeremy/Bureau/project/app/templates/dossier/part/calendrier-refresh-dates.html.twig");
    }
}
