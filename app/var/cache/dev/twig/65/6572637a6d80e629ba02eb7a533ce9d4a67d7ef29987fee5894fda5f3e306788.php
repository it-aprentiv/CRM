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

/* Common/DocPrint/Dossier/IMP.html.twig */
class __TwigTemplate_93b66eddf4653ac4228eafad24db3c2079daee4f5df62f8b5c156f89c6b1fe2c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Dossier/IMP.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Dossier/IMP.html.twig"));

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
<p style=\"font-family: Calibri;font-size: 15px;font-weight: bold\">OBJET : DOCUMENTS DE CLÔTURE A RETOURNER</p>
<br/>
<div style=\"margin-left: 20px; font-family: Calibri; font-size: 15px\">
<p style=\"font-family: Calibri;font-size: 15px;\">Madame, Monsieur,</p>
";
        // line 14
        if (((isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 14, $this->source); })()) == "FIFPL")) {
            // line 15
            echo "<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative de votre dossier, je vous prie de bien vouloir trouver ci-joint une facture de …………… € TTC, un avoir de …………… € TTC ainsi que les autres documents à nous retourner signés.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Nous vous remercions de bien vouloir nous adresser votre règlement par chèque, à notre ordre, pour le montant correspondant à la différence entre la facture et l’avoir, soit …………… €.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Nous attirons votre attention sur le fait que votre courrier devra nous parvenir au plus tard le .. / .. / ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ".</p>
<p style=\"font-family: Calibri;font-size: 15px;\">A réception de celui-ci, nous acquitterons la facture auprès de ";
            // line 18
            ((((isset($context["opca"]) || array_key_exists("opca", $context)) && (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 18, $this->source); })()))) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 18, $this->source); })()), "nomStr", [], "any", false, false, false, 18), ["&" => "&amp;"]), "html", null, true))) : (print ("")));
            echo " afin que vous obteniez le remboursement. Compte tenu du délai de traitement de votre OPCA, la date d’encaissement de votre chèque se fera vers le .. /.. /";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ". Sous réserve de votre confirmation de la réception du remboursement.</p>
";
        } elseif ((        // line 19
(isset($context["target"]) || array_key_exists("target", $context) ? $context["target"] : (function () { throw new RuntimeError('Variable "target" does not exist.', 19, $this->source); })()) == "FIFPL-2")) {
            // line 20
            echo "<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative de votre dossier formation, vous trouverez ci-joint la facture à nous régler par chèque ainsi que les documents à nous retourner signés aux endroits indiqués.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">A réception de celui-ci, nous acquitterons la facture auprès de ";
            // line 21
            ((((isset($context["opca"]) || array_key_exists("opca", $context)) && (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 21, $this->source); })()))) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 21, $this->source); })()), "nomStr", [], "any", false, false, false, 21), ["&" => "&amp;"]), "html", null, true))) : (print ("")));
            echo " afin que vous obteniez le remboursement. Compte tenu du délai de traitement de votre OPCA, la date d’encaissement de votre chèque se fera vers le .. /.. /";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ". Sous réserve de votre confirmation de la réception du remboursement.</p>
";
        } else {
            // line 23
            echo "<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative de votre dossier, vous trouverez ci-joint la facture à nous régler par chèque ainsi que les documents à nous retourner signés aux endroits indiqués.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Nous attirons votre attention sur le fait que votre courrier devra nous parvenir au plus tard le .. / .. / ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ".</p>
<p style=\"font-family: Calibri;font-size: 15px;\">A réception de celui-ci, nous acquitterons la facture auprès de ";
            // line 25
            ((((isset($context["opca"]) || array_key_exists("opca", $context)) && (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 25, $this->source); })()))) ? (print (twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 25, $this->source); })()), "nomStr", [], "any", false, false, false, 25), ["&" => "&amp;"]), "html", null, true))) : (print ("")));
            echo " afin que vous obteniez le remboursement. Compte tenu du délai de traitement de votre OPCO, la date d’encaissement de votre chèque se fera vers le .. /.. /";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
            echo ".</p>
";
        }
        // line 28
        echo "<p style=\"font-family: Calibri;font-size: 15px;\">Restant à votre disposition pour tout renseignement complémentaire, recevez, Madame, Monsieur, l’expression de nos salutations distinguées.</p>
<br/><br/>
<table>
<tr>
<td>";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 123));
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

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/DocPrint/Dossier/IMP.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  123 => 28,  116 => 25,  112 => 24,  109 => 23,  102 => 21,  99 => 20,  97 => 19,  91 => 18,  87 => 17,  83 => 15,  81 => 14,  59 => 5,  47 => 3,  43 => 1,);
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
<p style=\"font-family: Calibri;font-size: 15px;font-weight: bold\">OBJET : DOCUMENTS DE CLÔTURE A RETOURNER</p>
<br/>
<div style=\"margin-left: 20px; font-family: Calibri; font-size: 15px\">
<p style=\"font-family: Calibri;font-size: 15px;\">Madame, Monsieur,</p>
{% if target == 'FIFPL' %}
<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative de votre dossier, je vous prie de bien vouloir trouver ci-joint une facture de …………… € TTC, un avoir de …………… € TTC ainsi que les autres documents à nous retourner signés.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Nous vous remercions de bien vouloir nous adresser votre règlement par chèque, à notre ordre, pour le montant correspondant à la différence entre la facture et l’avoir, soit …………… €.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Nous attirons votre attention sur le fait que votre courrier devra nous parvenir au plus tard le .. / .. / {{ \"now\"|date(\"Y\") }}.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">A réception de celui-ci, nous acquitterons la facture auprès de {{ opca is defined and opca ? opca.nomStr | replace({'&' : '&amp;'}) : '' }} afin que vous obteniez le remboursement. Compte tenu du délai de traitement de votre OPCA, la date d’encaissement de votre chèque se fera vers le .. /.. /{{ \"now\"|date(\"Y\") }}. Sous réserve de votre confirmation de la réception du remboursement.</p>
{% elseif target == 'FIFPL-2' %}
<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative de votre dossier formation, vous trouverez ci-joint la facture à nous régler par chèque ainsi que les documents à nous retourner signés aux endroits indiqués.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">A réception de celui-ci, nous acquitterons la facture auprès de {{ opca is defined and opca ? opca.nomStr | replace({'&' : '&amp;'}) : '' }} afin que vous obteniez le remboursement. Compte tenu du délai de traitement de votre OPCA, la date d’encaissement de votre chèque se fera vers le .. /.. /{{ \"now\"|date(\"Y\") }}. Sous réserve de votre confirmation de la réception du remboursement.</p>
{% else %}
<p style=\"font-family: Calibri;font-size: 15px;\">Afin de procéder à la clôture administrative de votre dossier, vous trouverez ci-joint la facture à nous régler par chèque ainsi que les documents à nous retourner signés aux endroits indiqués.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">Nous attirons votre attention sur le fait que votre courrier devra nous parvenir au plus tard le .. / .. / {{ \"now\"|date(\"Y\") }}.</p>
<p style=\"font-family: Calibri;font-size: 15px;\">A réception de celui-ci, nous acquitterons la facture auprès de {{ opca is defined and opca ? opca.nomStr | replace({'&' : '&amp;'}) : \"\" }} afin que vous obteniez le remboursement. Compte tenu du délai de traitement de votre OPCO, la date d’encaissement de votre chèque se fera vers le .. /.. /{{ \"now\"|date(\"Y\") }}.</p>
{% endif %}
{#<p style=\"color: red\"><b>Charge à vous de nous contacter au cas où vous n’auriez pas encore reçu ce remboursement</b></p>#}
<p style=\"font-family: Calibri;font-size: 15px;\">Restant à votre disposition pour tout renseignement complémentaire, recevez, Madame, Monsieur, l’expression de nos salutations distinguées.</p>
<br/><br/>
<table>
<tr>
<td>{% for i in range(1,123) %}&nbsp;{% endfor %}</td>
<td style=\"font-family: Calibri;font-size: 15px;\">
<p>Véronique LOUBAUD</p>
<p>Attachée de Direction</p>
</td>
</tr>
</table>

</div>", "Common/DocPrint/Dossier/IMP.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/DocPrint/Dossier/IMP.html.twig");
    }
}
