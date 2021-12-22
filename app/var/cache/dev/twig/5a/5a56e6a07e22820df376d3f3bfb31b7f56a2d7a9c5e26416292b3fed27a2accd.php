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

/* encaissement/_details-factures-avoirs.html.twig */
class __TwigTemplate_8bbfe54461e96d43af45c9ed76611fa7e0f9caad1e214fa644a5f924a046e4a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/_details-factures-avoirs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/_details-factures-avoirs.html.twig"));

        // line 1
        if (( !(isset($context["source"]) || array_key_exists("source", $context)) || ((isset($context["source"]) || array_key_exists("source", $context)) && ((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 1, $this->source); })()) == "dossier")))) {
            // line 2
            echo "    <fieldset>
        <legend>REGLEMENT CLIENT</legend>
        
        <div class=\"form-group col-md-4\">
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 6, $this->source); })()), "typereglclient", [], "any", false, false, false, 6), 'row');
            echo "
        </div>
        

        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 12, $this->source); })()), "chequeattencaiss", [], "any", false, false, false, 12), 'row');
            echo "
            </div>
            <div class=\"form-group col-md-4\">
                ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 15, $this->source); })()), "numcheque", [], "any", false, false, false, 15), 'row');
            echo "
            </div>
            <div class=\"form-group col-md-4\">
                ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 18, $this->source); })()), "datecheque", [], "any", false, false, false, 18), 'row');
            echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 23, $this->source); })()), "mntantReglementclient", [], "any", false, false, false, 23), 'row');
            echo "
            </div>
            <div class=\"form-group col-md-4\">
                ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 26, $this->source); })()), "dtvalidite", [], "any", false, false, false, 26), 'row');
            echo "
            </div>
        </div>
    </fieldset>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <fieldset>
                <legend>DETAILS ENCAISSEMENT</legend>
                ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 35, $this->source); })()), "montantHTEncaisse", [], "any", false, false, false, 35), 'row', ["attr" => ["readonly" => "readonly"]]);
            echo "
                ";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 36, $this->source); })()), "montantTTCEncaisse", [], "any", false, false, false, 36), 'row', ["attr" => ["readonly" => "readonly"]]);
            echo "
                ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 37, $this->source); })()), "dateReelleEncaiss", [], "any", false, false, false, 37), 'row');
            echo "
                ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 38, $this->source); })()), "restedu", [], "any", false, false, false, 38), 'row', ["attr" => ["readonly" => "readonly"]]);
            echo "
            </fieldset>
        </div>
        <div class=\"col-md-6\">
            <fieldset>
                <legend>Commission</legend>
                ";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 44, $this->source); })()), "taux_commission", [], "any", false, false, false, 44), 'row');
            echo "
                ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 45, $this->source); })()), "montant_commission", [], "any", false, false, false, 45), 'row');
            echo "
                ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 46, $this->source); })()), "statut_paiement_commission", [], "any", false, false, false, 46), 'row');
            echo "
            </fieldset>
        </div>
    </div>

    <fieldset>
        <legend>REGLEMENT OPCA</legend>
        <div class=\"form-row\">
            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 54, $this->source); })()), "typereglopca", [], "any", false, false, false, 54), 'row');
            echo "
        </div>
    </fieldset>
";
        } else {
            // line 58
            echo "    ";
            // line 59
            echo "    <div class=\"row\">
        <div class=\"col-md-6\">
            <fieldset>
                <legend>DETAILS ENCAISSEMENT</legend>
                ";
            // line 63
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 63, $this->source); })()), "montantHTEncaisse", [], "any", false, false, false, 63), 'row');
            echo "
                ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 64, $this->source); })()), "montantTTCEncaisse", [], "any", false, false, false, 64), 'row');
            echo "
                ";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 65, $this->source); })()), "dateReelleEncaiss", [], "any", false, false, false, 65), 'row');
            echo "
                ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 66, $this->source); })()), "restedu", [], "any", false, false, false, 66), 'row', ["attr" => ["readonly" => "readonly"]]);
            echo "
            </fieldset>
        </div>
        <div class=\"col-md-6\">
            <fieldset>
                <legend>REGLEMENT CLIENT</legend>
                <div class=\"form-group\">
                    ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 73, $this->source); })()), "typereglclient", [], "any", false, false, false, 73), 'row');
            echo "
                </div>
            </fieldset> 
        </div>
    </div>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "encaissement/_details-factures-avoirs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 73,  165 => 66,  161 => 65,  157 => 64,  153 => 63,  147 => 59,  145 => 58,  138 => 54,  127 => 46,  123 => 45,  119 => 44,  110 => 38,  106 => 37,  102 => 36,  98 => 35,  86 => 26,  80 => 23,  72 => 18,  66 => 15,  60 => 12,  51 => 6,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if source is not defined or (source is defined and source == 'dossier') %}
    <fieldset>
        <legend>REGLEMENT CLIENT</legend>
        
        <div class=\"form-group col-md-4\">
            {{ form_row(encaissement_form.typereglclient) }}
        </div>
        

        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                {{ form_row(encaissement_form.chequeattencaiss) }}
            </div>
            <div class=\"form-group col-md-4\">
                {{ form_row(encaissement_form.numcheque) }}
            </div>
            <div class=\"form-group col-md-4\">
                {{ form_row(encaissement_form.datecheque) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                {{ form_row(encaissement_form.mntantReglementclient) }}
            </div>
            <div class=\"form-group col-md-4\">
                {{ form_row(encaissement_form.dtvalidite) }}
            </div>
        </div>
    </fieldset>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <fieldset>
                <legend>DETAILS ENCAISSEMENT</legend>
                {{ form_row(encaissement_form.montantHTEncaisse,{'attr':{'readonly': 'readonly'}}) }}
                {{ form_row(encaissement_form.montantTTCEncaisse,{'attr':{'readonly': 'readonly'}}) }}
                {{ form_row(encaissement_form.dateReelleEncaiss) }}
                {{ form_row(encaissement_form.restedu,{'attr':{'readonly': 'readonly'}}) }}
            </fieldset>
        </div>
        <div class=\"col-md-6\">
            <fieldset>
                <legend>Commission</legend>
                {{ form_row(encaissement_form.taux_commission) }}
                {{ form_row(encaissement_form.montant_commission) }}
                {{ form_row(encaissement_form.statut_paiement_commission) }}
            </fieldset>
        </div>
    </div>

    <fieldset>
        <legend>REGLEMENT OPCA</legend>
        <div class=\"form-row\">
            {{ form_row(encaissement_form.typereglopca) }}
        </div>
    </fieldset>
{% else  %}
    {# Retour APR-79 : Formulaire pour encaissement domiciliation/location #}
    <div class=\"row\">
        <div class=\"col-md-6\">
            <fieldset>
                <legend>DETAILS ENCAISSEMENT</legend>
                {{ form_row(encaissement_form.montantHTEncaisse) }}
                {{ form_row(encaissement_form.montantTTCEncaisse) }}
                {{ form_row(encaissement_form.dateReelleEncaiss) }}
                {{ form_row(encaissement_form.restedu,{'attr':{'readonly': 'readonly'}}) }}
            </fieldset>
        </div>
        <div class=\"col-md-6\">
            <fieldset>
                <legend>REGLEMENT CLIENT</legend>
                <div class=\"form-group\">
                    {{ form_row(encaissement_form.typereglclient) }}
                </div>
            </fieldset> 
        </div>
    </div>

{% endif %}", "encaissement/_details-factures-avoirs.html.twig", "/home/jeremy/Bureau/project/app/templates/encaissement/_details-factures-avoirs.html.twig");
    }
}
