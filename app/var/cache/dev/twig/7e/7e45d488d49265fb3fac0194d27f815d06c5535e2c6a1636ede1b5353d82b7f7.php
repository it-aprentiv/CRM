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

/* Common\DocPrint\Contact\ConventionContent.html.twig */
class __TwigTemplate_f39fb07d9e449acd3c568e59dfb48f64441f4cabbdc4bb258c7dee57b85b0ff6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common\\DocPrint\\Contact\\ConventionContent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common\\DocPrint\\Contact\\ConventionContent.html.twig"));

        // line 1
        echo "<p style=\"font-family:Arial;font-size: 12px\">
    Est conclue la convention de formation professionnelle suivante, en application du Livre III du chapitre 6 du code du Travail sur la Formation Professionnelle Continue.
</p>
<ol style=\"font-family:Arial;font-size: 12px\">
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">OBJET DE LA CONVENTION :</span><br/>
L’intitulé du stage de formation est : ";
        // line 7
        (((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 7, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), ["&" => "&amp;"]), "html", null, true))) : (print ("")));
        echo "<br/>
Nature de l’action : 1. Adaptation poste de travail - 2. Evolution/Maintien dans l’emploi - 3. Développement des compétences<br/>
Modalité de sanction : Attestation d’assiduité et de fin de stage
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">DATE, DURÉE ET LIEU :</span><br/>
La formation a une durée de ";
        // line 13
        (((isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_round(twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })()), "total_jours", [], "any", false, false, false, 13)), "html", null, true))) : (print ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")));
        echo " jours (soit ";
        (((isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })()), "total_heures", [], "any", false, false, false, 13), "html", null, true))) : (print ("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;")));
        echo "h) et se tiendra du ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })()), "date_debut", [], "any", false, false, false, 13)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })()), "date_debut", [], "any", false, false, false, 13), "dateD", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true))) : (print ("...")));
        echo " au ";
        ((twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })()), "date_fin", [], "any", false, false, false, 13)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 13, $this->source); })()), "date_fin", [], "any", false, false, false, 13), "dateF", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true))) : (print ("...")));
        echo "<br/>
Calendrier du stage : ";
        // line 14
        (((isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 14, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 14, $this->source); })()), "calendar_text", [], "any", false, false, false, 14), "html", null, true))) : (print ("")));
        echo " 
<br/>
Horaires du stage : ";
        // line 16
        ((((isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()), "hour_start_am", [], "any", false, false, false, 16)))) ? (print (twig_escape_filter($this->env, (((("de " . twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()), "hour_start_am", [], "any", false, false, false, 16)) . " à ") . twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()), "hour_end_am", [], "any", false, false, false, 16)) . ((((isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()) && twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()), "hour_start_pm", [], "any", false, false, false, 16))) ? ((((" et " . twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()), "hour_start_pm", [], "any", false, false, false, 16)) . " à ") . twig_get_attribute($this->env, $this->source, (isset($context["formated_dates_stage"]) || array_key_exists("formated_dates_stage", $context) ? $context["formated_dates_stage"] : (function () { throw new RuntimeError('Variable "formated_dates_stage" does not exist.', 16, $this->source); })()), "hour_end_pm", [], "any", false, false, false, 16))) : (""))), "html", null, true))) : (print ("")));
        echo " <br/>
Elle se déroulera au : ";
        // line 17
        (((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 17, $this->source); })())) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 17, $this->source); })()), "lieu", [], "any", false, false, false, 17), "html", null, true))) : (print ("")));
        echo "
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">MOYENS PEDAGOGIQUES ET TECHNIQUES :</span><br/>
Le Programme de l’action de formation est joint en annexe.<br/>
La formation est dispensée selon les conditions générales ci-dessous :<br/>
                - En entreprise (intra)                                          &#9744;     Hors entreprise (inter)       &#9744;<br/>
                - Formation en présentielle                                 &#9744;     Formation à distance\t &#9744;<br/>
- Salle de cours : six stagiaires maximum, animée par un formateur ;<br/>
- Cours de langue : Supports variés sous forme de CD audio, vidéo et ouvrages pédagogiques ; mises en situations authentiques et jeux de rôles<br/>
- Stages bureautique : chaque stagiaire travaillant individuellement sur un micro-ordinateur est guidé par un support de cours ;<br/>
- Les formateurs ont plusieurs années d’expérience dans les domaines qu’ils enseignent.
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">ANNEXES :</span><br/>
&#9679; Le Programme de l’action de formation est joint en annexe,<br/>
&#9679; Le règlement intérieur figure en annexe, vous voudrez bien le remettre au(x) stagiaire(s).
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">PARTICIPANTS :</span><br/>
Le nombre de participant(s) est de : ";
        // line 37
        (((twig_length_filter($this->env, (isset($context["stagiaires"]) || array_key_exists("stagiaires", $context) ? $context["stagiaires"] : (function () { throw new RuntimeError('Variable "stagiaires" does not exist.', 37, $this->source); })())) > 0)) ? (print (twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["stagiaires"]) || array_key_exists("stagiaires", $context) ? $context["stagiaires"] : (function () { throw new RuntimeError('Variable "stagiaires" does not exist.', 37, $this->source); })())), "html", null, true))) : (print ("")));
        echo "<br/>
L’organisme de formation accueillera : <br/>
";
        // line 39
        if ((twig_length_filter($this->env, (isset($context["stagiaires"]) || array_key_exists("stagiaires", $context) ? $context["stagiaires"] : (function () { throw new RuntimeError('Variable "stagiaires" does not exist.', 39, $this->source); })())) > 0)) {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stagiaires"]) || array_key_exists("stagiaires", $context) ? $context["stagiaires"] : (function () { throw new RuntimeError('Variable "stagiaires" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["stagiaire"]) {
                // line 41
                echo "    <p>&#9679; ";
                echo twig_escape_filter($this->env, $context["stagiaire"], "html", null, true);
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stagiaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 44
        echo "    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">COUT ET MODE DE REGLEMENT FORMATION :</span><br/>
Le prix de l’action est fixé à :                                  € HT.<br/>
L’entreprise s’engage à verser la totalité du prix susmentionné selon les modalités de paiement suivantes, soit :<br/>
-Par règlement de ";
        // line 49
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 49, $this->source); })()), ["&" => "&amp;"]), "html", null, true);
        echo " à l’organisme de formation (subrogation).<br/>
-Si l’organisme collecteur, à savoir ";
        // line 50
        echo twig_escape_filter($this->env, twig_replace_filter((isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 50, $this->source); })()), ["&" => "&amp;"]), "html", null, true);
        echo " règle la partie prise en charge à l’entreprise, le contractant en reversera la totalité en fin de stage à l’organisme de formation.<br/>
-Par règlement direct à l’organisme de formation avec un versement de 50% du montant total à l’inscription et 50% avant le début de la formation.
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">DEDIT ET RETRACTATION DE L’ENTREPRISE :</span><br/>
A compter de la date du présent contrat, le signataire à un délai de 10 jours pour se rétracter. Passé ce délai, en cas de dédit par le client à moins de 15 jours calendaires avant le début de l’action de formation objet de la présente convention, celle-ci sera redevable de 50% du montant total de la prestation à titre de dédommagement. Ce montant sera de 100% à moins de 5 jours de la prestation.
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">RECOURS :</span><br/>
Tout litige dans l’application du présent contrat devra faire l’objet d’une conciliation amiable. En cas d’échec, la juridiction de Paris est la seule compétente pour régler un éventuel litige.
    </li>
</ol>
<br/>
Fait en double exemplaire à Paris, le :";
        // line 63
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y"), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common\\DocPrint\\Contact\\ConventionContent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 63,  135 => 50,  131 => 49,  124 => 44,  114 => 41,  109 => 40,  107 => 39,  102 => 37,  79 => 17,  75 => 16,  70 => 14,  60 => 13,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"font-family:Arial;font-size: 12px\">
    Est conclue la convention de formation professionnelle suivante, en application du Livre III du chapitre 6 du code du Travail sur la Formation Professionnelle Continue.
</p>
<ol style=\"font-family:Arial;font-size: 12px\">
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">OBJET DE LA CONVENTION :</span><br/>
L’intitulé du stage de formation est : {{ dossier ?  dossier.nom |replace({'&' : \"&amp;\"})  }}<br/>
Nature de l’action : 1. Adaptation poste de travail - 2. Evolution/Maintien dans l’emploi - 3. Développement des compétences<br/>
Modalité de sanction : Attestation d’assiduité et de fin de stage
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">DATE, DURÉE ET LIEU :</span><br/>
La formation a une durée de {{ formated_dates_stage ? formated_dates_stage.total_jours | round : \"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\" }} jours (soit {{ formated_dates_stage ? formated_dates_stage.total_heures : \"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\" }}h) et se tiendra du {{ formated_dates_stage.date_debut ? formated_dates_stage.date_debut.dateD | date('d/m/Y') : '...' }} au {{ formated_dates_stage.date_fin ? formated_dates_stage.date_fin.dateF | date('d/m/Y')  : '...' }}<br/>
Calendrier du stage : {{ formated_dates_stage ? formated_dates_stage.calendar_text : \"\"  }} 
<br/>
Horaires du stage : {{ formated_dates_stage and formated_dates_stage.hour_start_am is not empty ? \"de \"~formated_dates_stage.hour_start_am ~\" à \"~ formated_dates_stage.hour_end_am ~  (formated_dates_stage and formated_dates_stage.hour_start_pm ? \" et \"~formated_dates_stage.hour_start_pm  ~ \" à \" ~ formated_dates_stage.hour_end_pm ) : ''  }} <br/>
Elle se déroulera au : {{ dossier ? dossier.lieu : '' }}
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">MOYENS PEDAGOGIQUES ET TECHNIQUES :</span><br/>
Le Programme de l’action de formation est joint en annexe.<br/>
La formation est dispensée selon les conditions générales ci-dessous :<br/>
                - En entreprise (intra)                                          &#9744;     Hors entreprise (inter)       &#9744;<br/>
                - Formation en présentielle                                 &#9744;     Formation à distance\t &#9744;<br/>
- Salle de cours : six stagiaires maximum, animée par un formateur ;<br/>
- Cours de langue : Supports variés sous forme de CD audio, vidéo et ouvrages pédagogiques ; mises en situations authentiques et jeux de rôles<br/>
- Stages bureautique : chaque stagiaire travaillant individuellement sur un micro-ordinateur est guidé par un support de cours ;<br/>
- Les formateurs ont plusieurs années d’expérience dans les domaines qu’ils enseignent.
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">ANNEXES :</span><br/>
&#9679; Le Programme de l’action de formation est joint en annexe,<br/>
&#9679; Le règlement intérieur figure en annexe, vous voudrez bien le remettre au(x) stagiaire(s).
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">PARTICIPANTS :</span><br/>
Le nombre de participant(s) est de : {{ stagiaires | length > 0 ? stagiaires | length : '' }}<br/>
L’organisme de formation accueillera : <br/>
{% if stagiaires | length > 0 %}
    {% for stagiaire in stagiaires %}
    <p>&#9679; {{ stagiaire }}</p>
    {% endfor %}
{% endif %}
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">COUT ET MODE DE REGLEMENT FORMATION :</span><br/>
Le prix de l’action est fixé à :                                  € HT.<br/>
L’entreprise s’engage à verser la totalité du prix susmentionné selon les modalités de paiement suivantes, soit :<br/>
-Par règlement de {{ opca | replace({'&' : '&amp;'}) }} à l’organisme de formation (subrogation).<br/>
-Si l’organisme collecteur, à savoir {{ opca | replace({'&' : '&amp;'}) }} règle la partie prise en charge à l’entreprise, le contractant en reversera la totalité en fin de stage à l’organisme de formation.<br/>
-Par règlement direct à l’organisme de formation avec un versement de 50% du montant total à l’inscription et 50% avant le début de la formation.
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">DEDIT ET RETRACTATION DE L’ENTREPRISE :</span><br/>
A compter de la date du présent contrat, le signataire à un délai de 10 jours pour se rétracter. Passé ce délai, en cas de dédit par le client à moins de 15 jours calendaires avant le début de l’action de formation objet de la présente convention, celle-ci sera redevable de 50% du montant total de la prestation à titre de dédommagement. Ce montant sera de 100% à moins de 5 jours de la prestation.
    </li>
    <li>
<span style=\"font-family: Arial Black;font-size: 10px\">RECOURS :</span><br/>
Tout litige dans l’application du présent contrat devra faire l’objet d’une conciliation amiable. En cas d’échec, la juridiction de Paris est la seule compétente pour régler un éventuel litige.
    </li>
</ol>
<br/>
Fait en double exemplaire à Paris, le :{{ \"now\"|date(\"d/m/Y\") }}
", "Common\\DocPrint\\Contact\\ConventionContent.html.twig", "/var/www/templates/Common/DocPrint/Contact/ConventionContent.html.twig");
    }
}
