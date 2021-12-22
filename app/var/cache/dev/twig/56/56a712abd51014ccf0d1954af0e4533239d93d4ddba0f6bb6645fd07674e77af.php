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

/* Common/DocPrint/Propal/ConventionContent.html.twig */
class __TwigTemplate_e5a09fe2665c5bf0e3110e4d09840456c318433247bcdba8eda59aa329fd4edc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Propal/ConventionContent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Propal/ConventionContent.html.twig"));

        // line 1
        echo "<p style=\"font-family:Arial;font-size: 12px\">
    Est conclue la convention de formation professionnelle suivante, en application du Livre III du chapitre 6 du code du Travail sur la Formation Professionnelle Continue.
</p>
<ol style=\"font-family:Arial;font-size: 12px\">
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">OBJET DE LA CONVENTION :</span><br/>
L’intitulé du stage de formation est : ";
        // line 7
        (((isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 7, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 7, $this->source); })()), "formation", [], "any", false, false, false, 7), ["&" => "&amp;"]), "html", null, true))) : (print ("")));
        echo "<br/>
Nature de l’action : 1. Adaptation poste de travail - 2. Evolution/Maintien dans l’emploi - 3. Développement des compétences<br/>
Modalité de sanction : Attestation d’assiduité et de fin de stage + feuille(s) d’émargement</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">DATE, DURÉE ET LIEU :</span><br/>
La formation a une durée de ";
        // line 11
        (((isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 11, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 11, $this->source); })()), "durrej", [], "any", false, false, false, 11)), "html", null, true))) : (print ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")));
        echo " jours (soit ";
        (((isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 11, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 11, $this->source); })()), "durreh", [], "any", false, false, false, 11), "html", null, true))) : (print ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")));
        echo "h) et se tiendra du ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 11, $this->source); })()), "datedebutpropal", [], "any", false, false, false, 11))) {
            (((isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 11, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 11, $this->source); })()), "datedebutpropal", [], "any", false, false, false, 11), "d/m/Y"), "html", null, true))) : (print ("...")));
        } else {
            echo "                
    ";
        }
        // line 12
        echo " au ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 12, $this->source); })()), "datefinpropal", [], "any", false, false, false, 12))) {
            (((isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 12, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 12, $this->source); })()), "datefinpropal", [], "any", false, false, false, 12), "d/m/Y"), "html", null, true))) : (print ("...")));
        } else {
            // line 13
            echo "        ";
        }
        echo "<br/>
Elle se déroulera au : ";
        // line 14
        (((isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 14, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 14, $this->source); })()), "lieupropal", [], "any", false, false, false, 14), "html", null, true))) : (print ("")));
        echo "</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">MOYENS PEDAGOGIQUES ET TECHNIQUES :</span><br/>
Le Programme de l’action de formation est joint en annexe.<br/>
La formation est dispensée selon les conditions générales ci-dessous :<br/>
                - En entreprise (intra)                                          &#9744;     Hors entreprise (inter)       &#9744;<br/>
                - Formation en présentielle                                 &#9744;     Formation à distance\t &#9744;<br/>
- Salle de cours : six stagiaires maximum, animée par un formateur ;<br/>
- Cours de langue : Supports variés sous forme de CD audio, vidéo et ouvrages pédagogiques ; mises en situations authentiques et jeux de rôles<br/>
- Stages bureautique : chaque stagiaire travaillant individuellement sur un micro-ordinateur est guidé par un support de cours ;<br/>
- Les formateurs ont plusieurs années d’expérience dans les domaines qu’ils enseignent.</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">ANNEXES :</span><br/>
&#9679; Le Programme de l’action de formation est joint en annexe,<br/>
&#9679; Le règlement intérieur figure en annexe, vous voudrez bien le remettre au(x) stagiaire(s).</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">PARTICIPANTS :</span><br/>
Le nombre de participant est de : ";
        // line 28
        (((twig_length_filter($this->env, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 28, $this->source); })())) > 0)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 28, $this->source); })()), "personnes", [], "any", false, false, false, 28)), "html", null, true))) : (print ("")));
        echo "<br/>
L’organisme de formation accueillera : <br/></li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">COUT ET MODE DE REGLEMENT FORMATION :</span><br/>
Le prix de l’action est fixé à :  ";
        // line 31
        (((isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 31, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 31, $this->source); })()), "coutht", [], "any", false, false, false, 31), "html", null, true))) : (print ("")));
        echo " € HT.<br/>
L’entreprise s’engage à verser la totalité du prix susmentionné selon les modalités de paiement suivantes, soit :<br/>
-Par règlement de ";
        // line 33
        echo " à l’organisme de formation (subrogation).<br/>
-Si l’organisme collecteur, à savoir ";
        // line 34
        echo " règle la partie prise en charge à l’entreprise, le contractant en reversera la totalité en fin de stage à l’organisme de formation.<br/>
-Par règlement direct à l’organisme de formation avec un versement de 50% du montant total à l’inscription et 50% avant le début de la formation.</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">DEDIT ET RETRACTATION DE L’ENTREPRISE :</span><br/>
A compter de la date du présent contrat, le signataire à un délai de 10 jours pour se rétracter. Passé ce délai, en cas de dédit par le client à moins de 15 jours calendaires avant le début de l’action de formation objet de la présente convention, celle-ci sera redevable de 50% du montant total de la prestation à titre de dédommagement. Ce montant sera de 100% à moins de 5 jours de la prestation.</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">RECOURS :</span><br/>
Tout litige dans l’application du présent contrat devra faire l’objet d’une conciliation amiable. En cas d’échec, la juridiction de Paris est la seule compétente pour régler un éventuel litige.</li></ol><br/>
<br/>
Fait en double exemplaire à Paris, le :";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/DocPrint/Propal/ConventionContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 41,  110 => 34,  107 => 33,  102 => 31,  96 => 28,  79 => 14,  74 => 13,  69 => 12,  58 => 11,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"font-family:Arial;font-size: 12px\">
    Est conclue la convention de formation professionnelle suivante, en application du Livre III du chapitre 6 du code du Travail sur la Formation Professionnelle Continue.
</p>
<ol style=\"font-family:Arial;font-size: 12px\">
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">OBJET DE LA CONVENTION :</span><br/>
L’intitulé du stage de formation est : {{ propal ?  propal.formation |replace({'&' : \"&amp;\"})  }}<br/>
Nature de l’action : 1. Adaptation poste de travail - 2. Evolution/Maintien dans l’emploi - 3. Développement des compétences<br/>
Modalité de sanction : Attestation d’assiduité et de fin de stage + feuille(s) d’émargement</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">DATE, DURÉE ET LIEU :</span><br/>
La formation a une durée de {{ propal ? propal.durrej | round : \"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\" }} jours (soit {{ propal ? propal.durreh : \"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\" }}h) et se tiendra du {% if propal.datedebutpropal is not empty %}{{ propal ? propal.datedebutpropal | date('d/m/Y') : '...' }}{% else %}                
    {% endif %} au {% if propal.datefinpropal is not empty %}{{ propal ? propal.datefinpropal | date('d/m/Y')  : '...' }}{% else %}
        {% endif %}<br/>
Elle se déroulera au : {{ propal ? propal.lieupropal : '' }}</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">MOYENS PEDAGOGIQUES ET TECHNIQUES :</span><br/>
Le Programme de l’action de formation est joint en annexe.<br/>
La formation est dispensée selon les conditions générales ci-dessous :<br/>
                - En entreprise (intra)                                          &#9744;     Hors entreprise (inter)       &#9744;<br/>
                - Formation en présentielle                                 &#9744;     Formation à distance\t &#9744;<br/>
- Salle de cours : six stagiaires maximum, animée par un formateur ;<br/>
- Cours de langue : Supports variés sous forme de CD audio, vidéo et ouvrages pédagogiques ; mises en situations authentiques et jeux de rôles<br/>
- Stages bureautique : chaque stagiaire travaillant individuellement sur un micro-ordinateur est guidé par un support de cours ;<br/>
- Les formateurs ont plusieurs années d’expérience dans les domaines qu’ils enseignent.</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">ANNEXES :</span><br/>
&#9679; Le Programme de l’action de formation est joint en annexe,<br/>
&#9679; Le règlement intérieur figure en annexe, vous voudrez bien le remettre au(x) stagiaire(s).</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">PARTICIPANTS :</span><br/>
Le nombre de participant est de : {{ propal | length > 0 ? propal.personnes | length : '' }}<br/>
L’organisme de formation accueillera : <br/></li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">COUT ET MODE DE REGLEMENT FORMATION :</span><br/>
Le prix de l’action est fixé à :  {{propal ? propal.coutht : '' }} € HT.<br/>
L’entreprise s’engage à verser la totalité du prix susmentionné selon les modalités de paiement suivantes, soit :<br/>
-Par règlement de {#{{ opca | replace({'&' : '&amp;'}) }}#} à l’organisme de formation (subrogation).<br/>
-Si l’organisme collecteur, à savoir {#{{ opca | replace({'&' : '&amp;'}) }}#} règle la partie prise en charge à l’entreprise, le contractant en reversera la totalité en fin de stage à l’organisme de formation.<br/>
-Par règlement direct à l’organisme de formation avec un versement de 50% du montant total à l’inscription et 50% avant le début de la formation.</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">DEDIT ET RETRACTATION DE L’ENTREPRISE :</span><br/>
A compter de la date du présent contrat, le signataire à un délai de 10 jours pour se rétracter. Passé ce délai, en cas de dédit par le client à moins de 15 jours calendaires avant le début de l’action de formation objet de la présente convention, celle-ci sera redevable de 50% du montant total de la prestation à titre de dédommagement. Ce montant sera de 100% à moins de 5 jours de la prestation.</li><li>
<span style=\"font-family: Arial Black;font-size: 10px\">RECOURS :</span><br/>
Tout litige dans l’application du présent contrat devra faire l’objet d’une conciliation amiable. En cas d’échec, la juridiction de Paris est la seule compétente pour régler un éventuel litige.</li></ol><br/>
<br/>
Fait en double exemplaire à Paris, le :{{ \"now\"|date(\"d/m/Y\") }}
", "Common/DocPrint/Propal/ConventionContent.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/DocPrint/Propal/ConventionContent.html.twig");
    }
}
