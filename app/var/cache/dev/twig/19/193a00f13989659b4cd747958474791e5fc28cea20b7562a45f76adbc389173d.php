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

/* dossier/devisPapier.html.twig */
class __TwigTemplate_f65d6441b801756e6d74acea54275c0a886acc96fbd111210a4ca55a71d8f605 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/devisPapier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/devisPapier.html.twig"));

        // line 1
        echo "<p style=\"padding-left: 500pt\">
                                                                                <span style=\"font-weight: bold; font-size: 16px;\">";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</span><br/>
                                                                                <span style=\"font-size: 16px;\"> ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "</span><br/>
                                                                                <span style=\"font-size: 16px;\"> ";
        // line 4
        (( !(null === (isset($context["oAdresse"]) || array_key_exists("oAdresse", $context) ? $context["oAdresse"] : (function () { throw new RuntimeError('Variable "oAdresse" does not exist.', 4, $this->source); })()))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oAdresse"]) || array_key_exists("oAdresse", $context) ? $context["oAdresse"] : (function () { throw new RuntimeError('Variable "oAdresse" does not exist.', 4, $this->source); })()), "codePostal", [], "any", false, false, false, 4), "html", null, true))) : (print ("")));
        echo ", ";
        (( !(null === (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 4, $this->source); })()))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ville"]) || array_key_exists("ville", $context) ? $context["ville"] : (function () { throw new RuntimeError('Variable "ville" does not exist.', 4, $this->source); })()), "nomVille", [], "any", false, false, false, 4), "html", null, true))) : (print ("")));
        echo "</span>
</p>
<br/><br/>
<p style=\"text-align: center;font-family: Calibri;font-size: 28px;font-weight: bold\">DEVIS DE LA FORMATION</p>
<br/>
<div style=\"text-align: center\">
    <table style=\"font-weight: bold;\">
        <tbody>
            <tr style=\"width: 500px\">
                <td>Stagiaires :</td>
                <td>                            ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["stagiaire"]) || array_key_exists("stagiaire", $context) ? $context["stagiaire"] : (function () { throw new RuntimeError('Variable "stagiaire" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "<br/></td>
            </tr>
            <tr>
                <td>Objectifs :</td>
                <td>                            ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Lieu de formation :</td>
                <td>                            ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 22, $this->source); })()), "lieu", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <td>Date du stage :</td>
                <td>                            Du ";
        // line 26
        (((twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "dateD", [], "any", false, false, false, 26)))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "dateD", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true))) : (print ("")));
        echo " au ";
        (((twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26) &&  !(null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "dateF", [], "any", false, false, false, 26)))) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 26, $this->source); })()), 0, [], "array", false, false, false, 26), "dateF", [], "any", false, false, false, 26), "d-m-Y"), "html", null, true))) : (print ("")));
        echo " <br/>
                            ";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["calendrier"]) || array_key_exists("calendrier", $context) ? $context["calendrier"] : (function () { throw new RuntimeError('Variable "calendrier" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "
                </td>
            </tr>
            <tr>
                <td>Durée de la formation :</td>
                <td>                            ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 32, $this->source); })()), "dureeJours", [], "any", false, false, false, 32), "html", null, true);
        echo " Jours</td>
            </tr>
            <tr>
                <td>Durée par stagiaire :</td>
                <td>                            ";
        // line 36
        (((twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36), "nbH", [], "any", false, false, false, 36))) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36), "nbH", [], "any", false, false, false, 36), 1, ","), "html", null, true))) : (print ("")));
        echo " Heures</td>
            </tr>
            <tr>
                <td>Horaires du stage :</td>
                <td>                            ";
        // line 40
        (((twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "dHeureM", [], "any", false, false, false, 40))) ? (print (twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "dHeureM", [], "any", false, false, false, 40) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "fHeureM", [], "any", false, false, false, 40)), "html", null, true))) : (print ("")));
        (((twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "dHeureAm", [], "any", false, false, false, 40))) ? (print (twig_escape_filter($this->env, ((("-" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "dHeureAm", [], "any", false, false, false, 40)) . "/") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oDatesFormation"]) || array_key_exists("oDatesFormation", $context) ? $context["oDatesFormation"] : (function () { throw new RuntimeError('Variable "oDatesFormation" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "fHeureAm", [], "any", false, false, false, 40)), "html", null, true))) : (print ("")));
        echo "
                </td>
            </tr>
            <tr>
                <td>Coût Total HT :</td>
                <td>                            ";
        // line 45
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new RuntimeError('Variable "montant" does not exist.', 45, $this->source); })()), 2, ",", " "), "html", null, true);
        echo " €</td>
            </tr>
            <tr>
                <td>Montant TVA :</td>
                <td>                            ";
        // line 49
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["tva"]) || array_key_exists("tva", $context) ? $context["tva"] : (function () { throw new RuntimeError('Variable "tva" does not exist.', 49, $this->source); })()), 2, ",", " "), "html", null, true);
        echo " €</td>
            </tr>
            <tr>
                <td>Coût Total TTC :</td>
                <td>                            ";
        // line 53
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 53, $this->source); })()), 2, ",", " "), "html", null, true);
        echo " €</td>
            </tr>
        </tbody>
    </table>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/devisPapier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 53,  134 => 49,  127 => 45,  118 => 40,  111 => 36,  104 => 32,  96 => 27,  90 => 26,  83 => 22,  76 => 18,  69 => 14,  54 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"padding-left: 500pt\">
                                                                                <span style=\"font-weight: bold; font-size: 16px;\">{{ client }}</span><br/>
                                                                                <span style=\"font-size: 16px;\"> {{ adresse }}</span><br/>
                                                                                <span style=\"font-size: 16px;\"> {{ oAdresse is not null ? oAdresse.codePostal : ''  }}, {{ ville is not null ? ville.nomVille  : '' }}</span>
</p>
<br/><br/>
<p style=\"text-align: center;font-family: Calibri;font-size: 28px;font-weight: bold\">DEVIS DE LA FORMATION</p>
<br/>
<div style=\"text-align: center\">
    <table style=\"font-weight: bold;\">
        <tbody>
            <tr style=\"width: 500px\">
                <td>Stagiaires :</td>
                <td>                            {{ stagiaire }}<br/></td>
            </tr>
            <tr>
                <td>Objectifs :</td>
                <td>                            {{ dossier.nom }}</td>
            </tr>
            <tr>
                <td>Lieu de formation :</td>
                <td>                            {{ dossier.lieu }}</td>
            </tr>
            <tr>
                <td>Date du stage :</td>
                <td>                            Du {{ oDatesFormation[0] and oDatesFormation[0].dateD is not null ? oDatesFormation[0].dateD | date('d-m-Y') : ''  }} au {{ oDatesFormation[0] and oDatesFormation[0].dateF is not null ? oDatesFormation[0].dateF | date('d-m-Y') : ''  }} <br/>
                            {{ calendrier }}
                </td>
            </tr>
            <tr>
                <td>Durée de la formation :</td>
                <td>                            {{ dossier.dureeJours }} Jours</td>
            </tr>
            <tr>
                <td>Durée par stagiaire :</td>
                <td>                            {{ oDatesFormation[0] and oDatesFormation[0].nbH ? oDatesFormation[0].nbH | number_format(1, ',') : ''   }} Heures</td>
            </tr>
            <tr>
                <td>Horaires du stage :</td>
                <td>                            {{ oDatesFormation[0] and oDatesFormation[0].dHeureM ? oDatesFormation[0].dHeureM ~ \"/\" ~ oDatesFormation[0].fHeureM }}{{ oDatesFormation[0] and oDatesFormation[0].dHeureAm ? \"-\" ~ oDatesFormation[0].dHeureAm ~\"/\"~ oDatesFormation[0].fHeureAm : \"\" }}
                </td>
            </tr>
            <tr>
                <td>Coût Total HT :</td>
                <td>                            {{ montant | number_format(2, \",\", \" \") }} €</td>
            </tr>
            <tr>
                <td>Montant TVA :</td>
                <td>                            {{ tva | number_format(2, \",\", \" \") }} €</td>
            </tr>
            <tr>
                <td>Coût Total TTC :</td>
                <td>                            {{ ttc | number_format(2, \",\", \" \") }} €</td>
            </tr>
        </tbody>
    </table>
</div>", "dossier/devisPapier.html.twig", "/home/jeremy/Bureau/project/app/templates/dossier/devisPapier.html.twig");
    }
}
