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

/* commission/suivi_detail.hml.twig */
class __TwigTemplate_e7b0bc952aaab7e82674bbf776ad16782e38fba258b5a4279e5c3f50beb448d5 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commission/suivi_detail.hml.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commission/suivi_detail.hml.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
<table class=\"table table-stripped table-bordered\">
    <tbody>
        <tr>
            <td class=\"titre\"> Ref Dossier</td>
            <td class=\"valeur\"><b>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 6, $this->source); })()), "num_intern", [], "any", false, false, false, 6), "html", null, true);
        echo "</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Client</td>
            <td class=\"valeur\"><b>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 12, $this->source); })()), "nomclient", [], "any", false, false, false, 12), "html", null, true);
        echo "</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Mois et Année Signature</td>
            <td class=\"valeur\"><b>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 18, $this->source); })()), "datesign", [], "any", false, false, false, 18), "m/Y"), "html", null, true);
        echo "</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant demandé</td>
            <td class=\"valeur\"><b>";
        // line 24
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 24, $this->source); })()), "mntsigne", [], "any", false, false, false, 24), 2, ",", " "), "html", null, true);
        echo " €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant accordé</td>
            <td class=\"valeur\"><b>";
        // line 30
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 30, $this->source); })()), "mntaccorde", [], "any", false, false, false, 30), 2, ",", " "), "html", null, true);
        echo " €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant HT Facture</td>
            <td class=\"valeur\"><b>";
        // line 36
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 36, $this->source); })()), "mntfacture", [], "any", false, false, false, 36), 2, ",", " "), "html", null, true);
        echo " €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant Encaisse TTC</td>
            <td class=\"valeur\"><b>";
        // line 42
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 42, $this->source); })()), "mntTtc", [], "any", false, false, false, 42), 2, ",", " "), "html", null, true);
        echo " €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Taux de commission</td>
            <td class=\"valeur\"><b>";
        // line 48
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 48, $this->source); })()), "tauxCom", [], "any", false, false, false, 48), 2, ",", " "), "html", null, true);
        echo " %</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant de la commission</td>
            <td class=\"valeur\"><b>";
        // line 54
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 54, $this->source); })()), "mntfacture", [], "any", false, false, false, 54) * twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 54, $this->source); })()), "tauxCom", [], "any", false, false, false, 54)) / 100), 2, ",", " "), "html", null, true);
        echo " €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Commercial</td>
            <td class=\"valeur\"><b>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 60, $this->source); })()), "com", [], "any", false, false, false, 60), "html", null, true);
        echo "</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Date de paiement de la commission</td>
            <td class=\"valeur\"><b>";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 66, $this->source); })()), "dateReelleEncaiss", [], "any", false, false, false, 66), "m-Y"), "html", null, true);
        echo "</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Statut de la commission</td>
            <td class=\"valeur\">
                ";
        // line 73
        if ((twig_get_attribute($this->env, $this->source, (isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 73, $this->source); })()), "source", [], "any", false, false, false, 73) == "domiciliation/location")) {
            // line 74
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "statutPaiementCommission", [], "any", false, false, false, 74), 'widget');
            echo "
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 75
(isset($context["detail"]) || array_key_exists("detail", $context) ? $context["detail"] : (function () { throw new RuntimeError('Variable "detail" does not exist.', 75, $this->source); })()), "source", [], "any", false, false, false, 75) == "dossier")) {
            // line 76
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "payencaiss", [], "any", false, false, false, 76), 'widget');
            echo "
                ";
        }
        // line 78
        echo "            </td>
        </tr>
        <tr>
        </tr>
    </tbody>
</table>
";
        // line 84
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'form_end');
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "commission/suivi_detail.hml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 84,  166 => 78,  160 => 76,  158 => 75,  153 => 74,  151 => 73,  141 => 66,  132 => 60,  123 => 54,  114 => 48,  105 => 42,  96 => 36,  87 => 30,  78 => 24,  69 => 18,  60 => 12,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{'attr':{'class':'list-filter'}}) }}
<table class=\"table table-stripped table-bordered\">
    <tbody>
        <tr>
            <td class=\"titre\"> Ref Dossier</td>
            <td class=\"valeur\"><b>{{ detail.num_intern }}</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Client</td>
            <td class=\"valeur\"><b>{{ detail.nomclient }}</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Mois et Année Signature</td>
            <td class=\"valeur\"><b>{{ detail.datesign|date('m/Y') }}</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant demandé</td>
            <td class=\"valeur\"><b>{{ detail.mntsigne | number_format(2, ',', ' ') }} €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant accordé</td>
            <td class=\"valeur\"><b>{{ detail.mntaccorde | number_format(2, ',', ' ') }} €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant HT Facture</td>
            <td class=\"valeur\"><b>{{ detail.mntfacture | number_format(2, ',', ' ') }} €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant Encaisse TTC</td>
            <td class=\"valeur\"><b>{{ detail.mntTtc | number_format(2, ',', ' ') }} €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Taux de commission</td>
            <td class=\"valeur\"><b>{{ detail.tauxCom | number_format(2, ',', ' ')}} %</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Montant de la commission</td>
            <td class=\"valeur\"><b>{{ (detail.mntfacture * detail.tauxCom / 100) |number_format(2, ',', ' ') }} €</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Commercial</td>
            <td class=\"valeur\"><b>{{ detail.com }}</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Date de paiement de la commission</td>
            <td class=\"valeur\"><b>{{ detail.dateReelleEncaiss | date('m-Y') }}</b></td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td class=\"titre\"> Statut de la commission</td>
            <td class=\"valeur\">
                {% if detail.source == 'domiciliation/location' %}
                    {{ form_widget(form.statutPaiementCommission) }}
                {% elseif detail.source == 'dossier' %}
                    {{ form_widget(form.payencaiss) }}
                {% endif %}
            </td>
        </tr>
        <tr>
        </tr>
    </tbody>
</table>
{{ form_end(form) }}

", "commission/suivi_detail.hml.twig", "/home/jeremy/Bureau/project/app/templates/commission/suivi_detail.hml.twig");
    }
}
