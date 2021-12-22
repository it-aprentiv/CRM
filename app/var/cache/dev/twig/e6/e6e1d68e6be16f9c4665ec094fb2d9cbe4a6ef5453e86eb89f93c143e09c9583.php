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

/* note/show.html.twig */
class __TwigTemplate_a97a07d92410ba6e93df57cf1c1f6e2764c53c8490f42fec41f27e42c4aa4a29 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "note/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Note - CRM Aprentiv v2.0";
        
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste notes et actions</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS NOTES ET ACTIONS</h2>
    <fieldset class=\"mb-4\">
        <legend>Détails</legend>
        <table class=\"table table-bordered\">
            <tr>
                <td class=\"bg-info text-light text-center\">Module</td>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 23, $this->source); })()), "nomTable", [], "any", false, false, false, 23), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Contact</td>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 27, $this->source); })()), "contact", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Date</td>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 31, $this->source); })()), "date", [], "any", false, false, false, 31), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Créateur</td>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 35, $this->source); })()), "createurNom", [], "any", false, false, false, 35), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 35, $this->source); })()), "createurPrenom", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Note/Commentaire</td>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 39, $this->source); })()), "noteCommentaire", [], "any", false, false, false, 39), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Action</td>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 43, $this->source); })()), "action", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Date action</td>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 47, $this->source); })()), "dateAction", [], "any", false, false, false, 47), "d-m-Y"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Responsable</td>
                <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 51, $this->source); })()), "responsable", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Action</td>
                <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 55, $this->source); })()), "action", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Status action</td>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_note"]) || array_key_exists("detail_note", $context) ? $context["detail_note"] : (function () { throw new RuntimeError('Variable "detail_note" does not exist.', 59, $this->source); })()), "statutAction", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
            </tr>
        </table>
    </fieldset>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "note/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 59,  189 => 55,  182 => 51,  175 => 47,  168 => 43,  161 => 39,  152 => 35,  145 => 31,  138 => 27,  131 => 23,  117 => 12,  113 => 10,  103 => 9,  89 => 5,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Note - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste notes et actions</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS NOTES ET ACTIONS</h2>
    <fieldset class=\"mb-4\">
        <legend>Détails</legend>
        <table class=\"table table-bordered\">
            <tr>
                <td class=\"bg-info text-light text-center\">Module</td>
                <td>{{ detail_note.nomTable }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Contact</td>
                <td>{{ detail_note.contact }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Date</td>
                <td>{{ detail_note.date| date('d-m-Y') }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Créateur</td>
                <td>{{ detail_note.createurNom }} {{ detail_note.createurPrenom }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Note/Commentaire</td>
                <td>{{ detail_note.noteCommentaire }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Action</td>
                <td>{{ detail_note.action }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Date action</td>
                <td>{{ detail_note.dateAction | date('d-m-Y') }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Responsable</td>
                <td>{{ detail_note.responsable }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Action</td>
                <td>{{ detail_note.action }}</td>
            </tr>
            <tr>
                <td class=\"bg-info text-light text-center\">Status action</td>
                <td>{{ detail_note.statutAction }}</td>
            </tr>
        </table>
    </fieldset>
{% endblock %}", "note/show.html.twig", "/home/jeremy/Bureau/project/app/templates/note/show.html.twig");
    }
}
