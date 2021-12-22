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

/* Common/DocPrint/Contact/OrderDeMission.html.twig */
class __TwigTemplate_29d1be6a9d86153c3e3397a393167fa3becf0187f82a3d3cd2c4fef4f62aa7bf extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Contact/OrderDeMission.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/DocPrint/Contact/OrderDeMission.html.twig"));

        // line 1
        echo "<p style=\"font-family: Calibri;font-size: 13px;\">
Nous prévenons le client que vous allez le contacter dans les jours qui suivent afin de convenir des dates et horaires de stage.
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Dès que vous aurez finalisé les modalités de stage avec le client (dates, horaires, lieu …), ou s’il souhaite reporter son stage à une date ultérieure, ou encore s’il annule une ou plusieurs dates prévues, nous vous remercions de bien vouloir nous avertir par mail pour le bon suivi des stages mis en place.<br/>En cas de stage dans les locaux d’Aprentiv, ne pas oublier de nous contacter afin vous assurer de la disponibilité de la salle.
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Pour rappel, en cas de désistement tardif de la part du client, charge à vous de leur demander de respecter un délai d’annulation d’au moins 48 heures, faute de quoi la séance sera décomptée.
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Le règlement de votre facture se fera à 30 jours fin de mois sur justificatifs (Listes Emargement complétées et signées par le formateur et le(s) stagiaire(s)).<br/>Pour tout ce qui concerne le suivi de vos paiements merci de vous adresser à laetitia@aprentiv.com
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Annulation de mission : dans le cas ou la mission proposée n’entre pas dans le champ de vos compétences et/ou votre planning, merci d’en informer le Service administratif par mail.<br/>Si le stage est annulé par le(s) stagiaire(s) partiellement ou en totalité, seul le nombre d’heures effectivement réalisées sera réglé.
</p>
<p style=\"font-family: Calibri;font-size: 13px;font-style: italic\">
NB : Le présent bon de commande n’autorise en aucune manière le formateur à user de son influence auprès des stagiaires pour les inciter à acheter des services ou des biens, de manière directe ou indirecte, sans notre accord explicite.
</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/DocPrint/Contact/OrderDeMission.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p style=\"font-family: Calibri;font-size: 13px;\">
Nous prévenons le client que vous allez le contacter dans les jours qui suivent afin de convenir des dates et horaires de stage.
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Dès que vous aurez finalisé les modalités de stage avec le client (dates, horaires, lieu …), ou s’il souhaite reporter son stage à une date ultérieure, ou encore s’il annule une ou plusieurs dates prévues, nous vous remercions de bien vouloir nous avertir par mail pour le bon suivi des stages mis en place.<br/>En cas de stage dans les locaux d’Aprentiv, ne pas oublier de nous contacter afin vous assurer de la disponibilité de la salle.
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Pour rappel, en cas de désistement tardif de la part du client, charge à vous de leur demander de respecter un délai d’annulation d’au moins 48 heures, faute de quoi la séance sera décomptée.
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Le règlement de votre facture se fera à 30 jours fin de mois sur justificatifs (Listes Emargement complétées et signées par le formateur et le(s) stagiaire(s)).<br/>Pour tout ce qui concerne le suivi de vos paiements merci de vous adresser à laetitia@aprentiv.com
</p>
<p style=\"font-family: Calibri;font-size: 13px\">
Annulation de mission : dans le cas ou la mission proposée n’entre pas dans le champ de vos compétences et/ou votre planning, merci d’en informer le Service administratif par mail.<br/>Si le stage est annulé par le(s) stagiaire(s) partiellement ou en totalité, seul le nombre d’heures effectivement réalisées sera réglé.
</p>
<p style=\"font-family: Calibri;font-size: 13px;font-style: italic\">
NB : Le présent bon de commande n’autorise en aucune manière le formateur à user de son influence auprès des stagiaires pour les inciter à acheter des services ou des biens, de manière directe ou indirecte, sans notre accord explicite.
</p>", "Common/DocPrint/Contact/OrderDeMission.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/DocPrint/Contact/OrderDeMission.html.twig");
    }
}
