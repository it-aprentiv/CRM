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

/* Common\DocPrint\Dossier\ELE.html.twig */
class __TwigTemplate_9997269960af3331005e5852d845f2636f299f8ef93c43b43854d7ccae5ef3a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common\\DocPrint\\Dossier\\ELE.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common\\DocPrint\\Dossier\\ELE.html.twig"));

        // line 1
        echo "<table>
    <tr>
        <td>";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "&nbsp;";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
        <td style=\"font-family: Calibri;font-size: 15px;\">
            <p style=\"font-weight: bold\">";
        // line 5
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 5, $this->source); })()), "contact", [], "any", false, false, false, 5), "nomSociete", [], "any", false, false, false, 5), ["&" => "&amp;"]), "html", null, true);
        echo "</p><p style=\"font-weight: bold\">A l'attention de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 5, $this->source); })()), "contact", [], "any", false, false, false, 5), "interlocuteur", [], "any", false, false, false, 5), "html", null, true);
        echo "</p><p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 5, $this->source); })()), "adresse", [], "any", false, false, false, 5), "adresse", [], "any", false, false, false, 5), "html", null, true);
        echo "</p><p>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 5, $this->source); })()), "adresse", [], "any", false, false, false, 5), "codePostal", [], "any", false, false, false, 5), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 5, $this->source); })()), "adresse", [], "any", false, false, false, 5), "ville", [], "any", false, false, false, 5), "html", null, true);
        echo "</p><p><br/>Paris le, ";
        echo twig_escape_filter($this->env, (isset($context["datejour"]) || array_key_exists("datejour", $context) ? $context["datejour"] : (function () { throw new RuntimeError('Variable "datejour" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</p>
        </td>
    </tr>
</table>
<br/>
<p style=\"font-family: Calibri;font-size: 15px;font-weight: bold\">OBJET : DOCUMENTS DE CLOTURE A RETOURNER</p>
<br/><br/>
<p style=\"font-family: Calibri;font-size: 15px;\">Madame, Monsieur,</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative 
";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 15, $this->source); })()), "dispositif", [], "any", false, false, false, 15) == "CPF")) {
            // line 16
            echo "de votre dossier,  
";
        } else {
            // line 18
            echo "du dossier de formation de : 
    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 19, $this->source); })()), "stagiaires", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["stagiaire"]) {
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "stagiaire", [], "any", false, false, false, 20), "prenom", [], "any", false, false, false, 20), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "stagiaire", [], "any", false, false, false, 20), "nom", [], "any", false, false, false, 20), "html", null, true);
                echo ", 
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stagiaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo " 
";
        }
        // line 23
        echo "nous vous prions de bien vouloir trouver <b>ci-joint les documents, à nous renvoyer complétés et signés aux endroits indiqués par retour du courrier.</b></p>
<p style=\"font-family: Calibri;font-size: 15px;\">Dans cette attente, nous restons à votre disposition pour tout renseignement complémentaire et vous prions d’agréer, Madame, Monsieur, l’expression de nos salutations distinguées.</p>
<br/><br/>
<table>
<tr>
<td>";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            echo "&nbsp;";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
<td style=\"font-family: Calibri;font-size: 15px;\">
<p>Véronique LOUBAUD</p>
<p>Attachée de Direction</p>
</td>
</tr>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common\\DocPrint\\Dossier\\ELE.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 28,  108 => 23,  104 => 21,  94 => 20,  90 => 19,  87 => 18,  83 => 16,  81 => 15,  59 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table>
    <tr>
        <td>{% for i in range(1,110) %}&nbsp;{% endfor %}</td>
        <td style=\"font-family: Calibri;font-size: 15px;\">
            <p style=\"font-weight: bold\">{{ contact.contact.nomSociete | replace({'&' : '&amp;'}) }}</p><p style=\"font-weight: bold\">A l'attention de {{ contact.contact.interlocuteur }}</p><p>{{ contact.adresse.adresse}}</p><p>{{ contact.adresse.codePostal}} {{ contact.adresse.ville}}</p><p><br/>Paris le, {{ datejour }}</p>
        </td>
    </tr>
</table>
<br/>
<p style=\"font-family: Calibri;font-size: 15px;font-weight: bold\">OBJET : DOCUMENTS DE CLOTURE A RETOURNER</p>
<br/><br/>
<p style=\"font-family: Calibri;font-size: 15px;\">Madame, Monsieur,</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative 
{# APR-137 : Retour #}
{% if dossier.dispositif == 'CPF'  %}
de votre dossier,  
{% else %}
du dossier de formation de : 
    {% for stagiaire in dossier.stagiaires %}
{{ stagiaire.stagiaire.prenom }} {{ stagiaire.stagiaire.nom }}, 
    {% endfor %} 
{% endif %}
nous vous prions de bien vouloir trouver <b>ci-joint les documents, à nous renvoyer complétés et signés aux endroits indiqués par retour du courrier.</b></p>
<p style=\"font-family: Calibri;font-size: 15px;\">Dans cette attente, nous restons à votre disposition pour tout renseignement complémentaire et vous prions d’agréer, Madame, Monsieur, l’expression de nos salutations distinguées.</p>
<br/><br/>
<table>
<tr>
<td>{% for i in range(1,110) %}&nbsp;{% endfor %}</td>
<td style=\"font-family: Calibri;font-size: 15px;\">
<p>Véronique LOUBAUD</p>
<p>Attachée de Direction</p>
</td>
</tr>
</table>
", "Common\\DocPrint\\Dossier\\ELE.html.twig", "/var/www/templates/Common/DocPrint/Dossier/ELE.html.twig");
    }
}
