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

/* Common/DocPrint/Dossier/ECD.html.twig */
class __TwigTemplate_4816adea73dea9b30720b5a045558d6cc0b308a1f1df49223f027b6b521646fd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Dossier/ECD.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Dossier/ECD.html.twig"));

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

<br/><br/>
<p style=\"font-family: Calibri;font-size: 15px;font-weight: bold\">OBJET : COPIES DE DOSSIER(S)</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Madame, Monsieur,</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Suite à votre récent entretien avec Monsieur/Madame ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 13, $this->source); })()), "contact", [], "any", false, false, false, 13), "commercial", [], "any", false, false, false, 13), "html", null, true);
        echo ", je vous remercie de l’accueil que vous lui avez réservé ainsi que de votre confiance.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Vous trouverez, ci-joint, copies des documents transmis à \"";
        // line 14
        (( !(null === (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 14, $this->source); })()))) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 14, $this->source); })()), "nomStr", [], "any", false, false, false, 14), ["&" => "&amp;"]), "html", null, true))) : (print ("")));
        echo "\" afin d’obtenir le financement de votre formation.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Je vous confirme prendre le relais pour le suivi de votre dossier. N’hésitez pas à me contacter, par téléphone  au 01.42.96.37.35, ou par mail : veronique@aprentiv.com</p>
<p style=\"font-family: Calibri;font-size: 15px;color: blue\">D’autre part, pour le bon suivi de vos dossiers, je vous remercie de bien vouloir me tenir informée dès réception d’un courrier de votre OPCO et de m’en adresser copie par tout moyen à votre convenance (mail ou fax)</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Dans l’attente de nos prochains contacts, recevez, Madame, Monsieur, l’expression de mes sincères salutations.</p>
<br/><br/>

<table>
<tr>
<td>";
        // line 22
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
        return "Common/DocPrint/Dossier/ECD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 22,  84 => 14,  80 => 13,  59 => 5,  47 => 3,  43 => 1,);
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

<br/><br/>
<p style=\"font-family: Calibri;font-size: 15px;font-weight: bold\">OBJET : COPIES DE DOSSIER(S)</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Madame, Monsieur,</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Suite à votre récent entretien avec Monsieur/Madame {{ contact.contact.commercial }}, je vous remercie de l’accueil que vous lui avez réservé ainsi que de votre confiance.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Vous trouverez, ci-joint, copies des documents transmis à \"{{ opca is not null ? opca.nomStr | replace({'&' : '&amp;'}) : '' }}\" afin d’obtenir le financement de votre formation.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Je vous confirme prendre le relais pour le suivi de votre dossier. N’hésitez pas à me contacter, par téléphone  au 01.42.96.37.35, ou par mail : veronique@aprentiv.com</p>
<p style=\"font-family: Calibri;font-size: 15px;color: blue\">D’autre part, pour le bon suivi de vos dossiers, je vous remercie de bien vouloir me tenir informée dès réception d’un courrier de votre OPCO et de m’en adresser copie par tout moyen à votre convenance (mail ou fax)</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Dans l’attente de nos prochains contacts, recevez, Madame, Monsieur, l’expression de mes sincères salutations.</p>
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

", "Common/DocPrint/Dossier/ECD.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/DocPrint/Dossier/ECD.html.twig");
    }
}
