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

/* propal/Parts/form.html.twig */
class __TwigTemplate_51a3a3160db9e88b36e69dd64ecacde4efa84946fb9f90fa67facd659fdfa82a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/Parts/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/Parts/form.html.twig"));

        // line 1
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1, $this->source); })()) == "create"))) {
            // line 2
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
            echo "
";
        } else {
            // line 4
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 4, $this->source); })()), 'form_start');
            echo "
";
        }
        // line 6
        echo "
<div class=\"col-sm-12\">
    <fieldset class=\"col-sm-12\">
        <legend>Infos client</legend>
        <div class=\"row\">
             <div class=\"col-sm-3\">
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 12, $this->source); })()), "clientpropal", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Client"]);
        // line 14
        echo "
                ";
        // line 15
        if (twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 15, $this->source); })()), "clientpropal", [], "any", false, false, false, 15)) {
            // line 16
            echo "                                ";
            // line 17
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 17, $this->source); })()), "clientpropal", [], "any", false, false, false, 17), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                </a>
                            ";
        }
        // line 21
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 21, $this->source); })()), "clientpropal", [], "any", false, false, false, 21), 'widget');
        echo "
            </div>
            <div class=\"col-sm-3\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "Nom"]);
        // line 26
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 27, $this->source); })()), "nom", [], "any", false, false, false, 27), 'widget');
        echo "
            </div>
            <div class=\"col-sm-3\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 30, $this->source); })()), "prenom", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "Prénom"]);
        // line 32
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 33, $this->source); })()), "prenom", [], "any", false, false, false, 33), 'widget');
        echo "
            </div>
            <div class=\"col-sm-3\">
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 36, $this->source); })()), "type", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Entreprise/Particulier"]);
        // line 38
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 39, $this->source); })()), "type", [], "any", false, false, false, 39), 'widget');
        echo "
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-3\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 44, $this->source); })()), "adresse", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "N° / Voie"]);
        // line 46
        echo "
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 47, $this->source); })()), "adresse", [], "any", false, false, false, 47), 'widget');
        echo "
            </div>
            <div class=\"col-sm-2\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 50, $this->source); })()), "codepostal", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Code Postal"]);
        // line 52
        echo "
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 53, $this->source); })()), "codepostal", [], "any", false, false, false, 53), 'widget');
        echo "
            </div>
            <div class=\"col-sm-2\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 56, $this->source); })()), "ville", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "Ville"]);
        // line 58
        echo "
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 59, $this->source); })()), "ville", [], "any", false, false, false, 59), 'widget');
        echo "
            </div>
            <div class=\"col-sm-2\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 62, $this->source); })()), "telephone", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Téléphone"]);
        // line 64
        echo "
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 65, $this->source); })()), "telephone", [], "any", false, false, false, 65), 'widget');
        echo "
            </div>
            <div class=\"col-sm-3\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 68, $this->source); })()), "email", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Email"]);
        // line 70
        echo "
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 71, $this->source); })()), "email", [], "any", false, false, false, 71), 'widget');
        echo "
            </div>
            <div class=\"col-sm-3\">
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 74, $this->source); })()), "typepropal", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Type"]);
        // line 76
        echo "
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 77, $this->source); })()), "typepropal", [], "any", false, false, false, 77), 'widget');
        echo "
            </div>
            <div class=\"col-sm-3\">
                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 80, $this->source); })()), "fiabilite", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Fiabilité"]);
        // line 82
        echo "
                ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 83, $this->source); })()), "fiabilite", [], "any", false, false, false, 83), 'widget');
        echo "
            </div>
        </div>
    </fieldset>
</div>


<div class=\"col-sm-12\">
    <fieldset class=\"col-sm-12\">
        <legend>Infos Propal</legend>
        <div class=\"row\">
            <div class=\"col-sm-2\">
                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 95, $this->source); })()), "entitypropal", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Entité"]);
        // line 97
        echo "
                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 98, $this->source); })()), "entitypropal", [], "any", false, false, false, 98), 'widget');
        echo "
            </div>
            <div class=\"col-sm-2\">
                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 101, $this->source); })()), "statutpropal", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Statut Propal"]);
        // line 103
        echo "
                ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 104, $this->source); })()), "statutpropal", [], "any", false, false, false, 104), 'widget');
        echo "
            </div>
            <div class=\"col-sm-2\">
                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 107, $this->source); })()), "commercialpropal", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial"]);
        // line 109
        echo "
                ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 110, $this->source); })()), "commercialpropal", [], "any", false, false, false, 110), 'widget');
        echo "
            </div>
        </div>
    </fieldset>
</div>

<div class=\"col-sm-12 mt-3\">
    <fieldset class=\"col-sm-12\">
        <legend>Besoin</legend>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 123, $this->source); })()), "formation", [], "any", false, false, false, 123), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Formation"]);
        // line 125
        echo "
                        ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 126, $this->source); })()), "formation", [], "any", false, false, false, 126), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-3\">
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 129, $this->source); })()), "personnes", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Personnes concernées"]);
        // line 131
        echo "
                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 132, $this->source); })()), "personnes", [], "any", false, false, false, 132), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-2\">
                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 135, $this->source); })()), "coutht", [], "any", false, false, false, 135), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "Coût HT"]);
        // line 137
        echo "
                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 138, $this->source); })()), "coutht", [], "any", false, false, false, 138), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-1\">
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 141, $this->source); })()), "montantTVA", [], "any", false, false, false, 141), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "TVA (%)"]);
        // line 143
        echo "
                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 144, $this->source); })()), "montantTVA", [], "any", false, false, false, 144), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-2\">
                        ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 147, $this->source); })()), "coutTTC", [], "any", false, false, false, 147), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "Coût TTC"]);
        // line 149
        echo "
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 150, $this->source); })()), "coutTTC", [], "any", false, false, false, 150), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 159, $this->source); })()), "besoin", [], "any", false, false, false, 159), 'label', ["label_attr" => ["class" => "font-weight-bold "], "label" => "Besoin"]);
        // line 161
        echo "
                        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 162, $this->source); })()), "besoin", [], "any", false, false, false, 162), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 165, $this->source); })()), "prerequis", [], "any", false, false, false, 165), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Prérequis"]);
        // line 167
        echo "
                        ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 168, $this->source); })()), "prerequis", [], "any", false, false, false, 168), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 171, $this->source); })()), "objectif", [], "any", false, false, false, 171), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Objectif"]);
        // line 173
        echo "
                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 174, $this->source); })()), "objectif", [], "any", false, false, false, 174), 'widget', ["attr" => ["autocomplete" => "off"]]);
        echo "
                    </div>

                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-2\">
                        <label class=\"font-weight-bold d-block text-center required\">Durée</label>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                ";
        // line 188
        if ((twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 188, $this->source); })()), "durrej", [], "any", false, false, false, 188) == "")) {
            // line 189
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 189, $this->source); })()), "durrej", [], "any", false, false, false, 189), 'widget', ["attr" => ["value" => 0]]);
            echo "  
                                ";
        } else {
            // line 191
            echo "                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 191, $this->source); })()), "durrej", [], "any", false, false, false, 191), 'widget');
            echo "                       
                                ";
        }
        // line 193
        echo "                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text p-1\" id=\"inputGroupPrepend\">Jr</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                    ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 200, $this->source); })()), "durreh", [], "any", false, false, false, 200), 'widget');
        echo "
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text p-1\" id=\"inputGroupPrepend\">Hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"font-weight-bold d-block text-center\">Dates</label>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                    ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 213, $this->source); })()), "datedebutpropal", [], "any", false, false, false, 213), 'widget');
        echo "
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">Debut</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                    ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 221, $this->source); })()), "datefinpropal", [], "any", false, false, false, 221), 'widget');
        echo "
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">Fin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-2\">
                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 230, $this->source); })()), "lieupropal", [], "any", false, false, false, 230), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Lieu"]);
        // line 232
        echo "
                        ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 233, $this->source); })()), "lieupropal", [], "any", false, false, false, 233), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-2\">
                        ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 236, $this->source); })()), "dateedition", [], "any", false, false, false, 236), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date Edition"]);
        // line 238
        echo "
                        ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 239, $this->source); })()), "dateedition", [], "any", false, false, false, 239), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-2\">
                        ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 242, $this->source); })()), "daterelance", [], "any", false, false, false, 242), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date relance"]);
        // line 244
        echo "
                        ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 245, $this->source); })()), "daterelance", [], "any", false, false, false, 245), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>
<div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
    <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
            <button type=\"submit\" class=\"btn btn-primary btn-md btn-block\" id=\"SaveBtn\">
                ";
        // line 256
        if (((isset($context["type"]) || array_key_exists("type", $context)) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 256, $this->source); })()) == "create"))) {
            // line 257
            echo "                    Ajouter
                ";
        } else {
            // line 259
            echo "                    Enregistrer les modifications
                ";
        }
        // line 261
        echo "            </button>
        </div>
        ";
        // line 263
        if ( !(isset($context["type"]) || array_key_exists("type", $context))) {
            // line 264
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 264, $this->source); })()), "entitypropal", [], "any", false, false, false, 264) == "proform")) {
                // line 265
                echo "            <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                    <a href=\"";
                // line 266
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_generate_docproform", ["id" => (isset($context["idpropal"]) || array_key_exists("idpropal", $context) ? $context["idpropal"] : (function () { throw new RuntimeError('Variable "idpropal" does not exist.', 266, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-md btn-block\" id=\"createdocpropalproform\">
                        Editer Propal
                    </a>
            </div>
        ";
            } else {
                // line 271
                echo "            <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                    <a href=\"";
                // line 272
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_generate_doc", ["id" => (isset($context["idpropal"]) || array_key_exists("idpropal", $context) ? $context["idpropal"] : (function () { throw new RuntimeError('Variable "idpropal" does not exist.', 272, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-md btn-block\" id=\"createdocpropal\">
                        Editer Propal
                    </a>
            </div>
        ";
            }
            // line 276
            echo "          
            <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                <a href=\"";
            // line 278
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_generate_conv", ["id" => (isset($context["idpropal"]) || array_key_exists("idpropal", $context) ? $context["idpropal"] : (function () { throw new RuntimeError('Variable "idpropal" does not exist.', 278, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-md btn-block\" id=\"createconvpropal\">
                    Editer conv
                </a>
            </div>

        <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                <a href=\"";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/ajoutdossier", ["id_entite" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 284, $this->source); })()), "entitypropal", [], "any", false, false, false, 284), "vars", [], "any", false, false, false, 284), "value", [], "any", false, false, false, 284), "id_formation" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal"]) || array_key_exists("propal", $context) ? $context["propal"] : (function () { throw new RuntimeError('Variable "propal" does not exist.', 284, $this->source); })()), "formation", [], "any", false, false, false, 284), "id", [], "any", false, false, false, 284), "id_commercial" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 284, $this->source); })()), "commercialpropal", [], "any", false, false, false, 284), "vars", [], "any", false, false, false, 284), "value", [], "any", false, false, false, 284), "coutht" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 284, $this->source); })()), "coutht", [], "any", false, false, false, 284), "vars", [], "any", false, false, false, 284), "value", [], "any", false, false, false, 284), "client" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 284, $this->source); })()), "clientpropal", [], "any", false, false, false, 284), "vars", [], "any", false, false, false, 284), "value", [], "any", false, false, false, 284)]), "html", null, true);
            echo "\", target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" id=\"createdossier\" onclick=\"ModifStatut()\">
                    Ajouter Dossier
                </a>
            </div>
        ";
        }
        // line 289
        echo "    </div>
</div>

";
        // line 293
        echo "<script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js\"></script>
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@10\"></script>

<script>

if (propal_statutpropal.value != 4)
        {
            function ModifStatut() 
            {
                document.getElementById(\"ModifBtn\").click();
                document.getElementById('propal_statutpropal').value = 4;
                document.getElementById(\"SaveBtn\").click();

                    let timerInterval
                    Swal.fire({
                    icon: 'warning',
                    title: 'Propal',
                    html: 'statut en cours de changement..',
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                        const content = Swal.getContent()
                        if (content) {
                            const b = content.querySelector('b')
                            if (b) {
                            b.textContent = Swal.getTimerLeft()
                            }
                        }
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        swal(
                            'Statut changé !',
                            'Le statut de la propal est passé en \"Dossier créé\" !',
                            'success'
                            )
                        }
                    })
                        }
                        
        }
    
";
        // line 350
        echo "    if (document.getElementById('propal_montantTVA').value == \"\")
    {
        document.getElementById('propal_montantTVA').value = 20;
    }
    if (document.getElementById('propal_dateedition').value == \"\")
    {
        dateNow = new Date();
        if((dateNow.getMonth() + 1) < 10)
        {
            month = \"0\" + (dateNow.getMonth() + 1);
        }
        else
        {
            month = \"\" + (dateNow.getMonth() + 1);
        }
        ";
        // line 365
        if (((isset($context["isCreatePropal"]) || array_key_exists("isCreatePropal", $context)) && (isset($context["isCreatePropal"]) || array_key_exists("isCreatePropal", $context) ? $context["isCreatePropal"] : (function () { throw new RuntimeError('Variable "isCreatePropal" does not exist.', 365, $this->source); })()))) {
            // line 366
            echo "            document.getElementById('propal_dateedition').value = \"\" + dateNow.getDate() + \"/\" + month + \"/\" + dateNow.getFullYear();
        ";
        }
        // line 368
        echo "    }
    if (document.getElementById('propal_daterelance').value == \"\")
    {
        ";
        // line 371
        if (((isset($context["isCreatePropal"]) || array_key_exists("isCreatePropal", $context)) && (isset($context["isCreatePropal"]) || array_key_exists("isCreatePropal", $context) ? $context["isCreatePropal"] : (function () { throw new RuntimeError('Variable "isCreatePropal" does not exist.', 371, $this->source); })()))) {
            // line 372
            echo "            dateRelance = new Date();
            dateRelance.setDate(dateRelance.getDate() + 10);
            if((dateRelance.getMonth() + 1) < 10)
            {
                month = \"0\" + (dateRelance.getMonth() + 1);
            }
            else
            {
                month = \"\" + (dateRelance.getMonth() + 1);
            }
            document.getElementById('propal_daterelance').value = \"\" + dateRelance.getDate() + \"/\" + month + \"/\" + dateRelance.getFullYear();
        ";
        } else {
            // line 384
            echo "            if (document.getElementById('propal_dateedition').value != \"\")
            {
                dateEdition = document.getElementById('propal_dateedition').value.split(\"/\");
                dateEdition = new Date(dateEdition[2], dateEdition[1] - 1, dateEdition[0]);
                dateEdition.setDate(dateEdition.getDate() + 10);
                if((dateEdition.getMonth() + 1) < 10)
                {
                    month = \"0\" + (dateEdition.getMonth() + 1);
                }
                else
                {
                    month = \"\" + (dateEdition.getMonth() + 1);
                }
                document.getElementById('propal_daterelance').value = \"\" + dateEdition.getDate() + \"/\" + month + \"/\" + dateEdition.getFullYear();
            }
        ";
        }
        // line 400
        echo "
    }
</script>

";
        // line 404
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["propal_form"]) || array_key_exists("propal_form", $context) ? $context["propal_form"] : (function () { throw new RuntimeError('Variable "propal_form" does not exist.', 404, $this->source); })()), 'form_end', ["render_rest" => false]);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "propal/Parts/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  645 => 404,  639 => 400,  621 => 384,  607 => 372,  605 => 371,  600 => 368,  596 => 366,  594 => 365,  577 => 350,  526 => 293,  521 => 289,  513 => 284,  504 => 278,  500 => 276,  492 => 272,  489 => 271,  481 => 266,  478 => 265,  475 => 264,  473 => 263,  469 => 261,  465 => 259,  461 => 257,  459 => 256,  445 => 245,  442 => 244,  440 => 242,  434 => 239,  431 => 238,  429 => 236,  423 => 233,  420 => 232,  418 => 230,  406 => 221,  395 => 213,  379 => 200,  370 => 193,  364 => 191,  358 => 189,  356 => 188,  339 => 174,  336 => 173,  334 => 171,  328 => 168,  325 => 167,  323 => 165,  317 => 162,  314 => 161,  312 => 159,  300 => 150,  297 => 149,  295 => 147,  289 => 144,  286 => 143,  284 => 141,  278 => 138,  275 => 137,  273 => 135,  267 => 132,  264 => 131,  262 => 129,  256 => 126,  253 => 125,  251 => 123,  235 => 110,  232 => 109,  230 => 107,  224 => 104,  221 => 103,  219 => 101,  213 => 98,  210 => 97,  208 => 95,  193 => 83,  190 => 82,  188 => 80,  182 => 77,  179 => 76,  177 => 74,  171 => 71,  168 => 70,  166 => 68,  160 => 65,  157 => 64,  155 => 62,  149 => 59,  146 => 58,  144 => 56,  138 => 53,  135 => 52,  133 => 50,  127 => 47,  124 => 46,  122 => 44,  114 => 39,  111 => 38,  109 => 36,  103 => 33,  100 => 32,  98 => 30,  92 => 27,  89 => 26,  87 => 24,  80 => 21,  72 => 17,  70 => 16,  68 => 15,  65 => 14,  63 => 12,  55 => 6,  50 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if type is defined and type == 'create' %}
{{ form_start(propal_form, {'attr':{ 'class': 'list-filter'}} ) }}
{% else %}
{{ form_start(propal_form ) }}
{% endif %}

<div class=\"col-sm-12\">
    <fieldset class=\"col-sm-12\">
        <legend>Infos client</legend>
        <div class=\"row\">
             <div class=\"col-sm-3\">
                {{ form_label(propal_form.clientpropal, 'Client', {
                    'label_attr': {'class': 'font-weight-bold required'}
                }) }}
                {% if propal.clientpropal %}
                                {# APR-140 : Lien vers fiche client #}
                                <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : propal.clientpropal.id} ) }}\" title=\"Voir fiche client\" target=\"_blank\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                </a>
                            {% endif %}
                {{ form_widget(propal_form.clientpropal) }}
            </div>
            <div class=\"col-sm-3\">
                {{ form_label(propal_form.nom, 'Nom', {
                    'label_attr': {'class': 'font-weight-bold '}
                }) }}
                {{ form_widget(propal_form.nom) }}
            </div>
            <div class=\"col-sm-3\">
                {{ form_label(propal_form.prenom, 'Prénom', {
                    'label_attr': {'class': 'font-weight-bold '}
                }) }}
                {{ form_widget(propal_form.prenom) }}
            </div>
            <div class=\"col-sm-3\">
                {{ form_label(propal_form.type, 'Entreprise/Particulier', {
                    'label_attr': {'class': 'font-weight-bold required'}
                }) }}
                {{ form_widget(propal_form.type) }}
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-3\">
                {{ form_label(propal_form.adresse, 'N° / Voie', {
                    'label_attr': {'class': 'font-weight-bold '}
                }) }}
                {{ form_widget(propal_form.adresse) }}
            </div>
            <div class=\"col-sm-2\">
                {{ form_label(propal_form.codepostal, 'Code Postal', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(propal_form.codepostal) }}
            </div>
            <div class=\"col-sm-2\">
                {{ form_label(propal_form.ville, 'Ville', {
                    'label_attr': {'class': 'font-weight-bold '}
                }) }}
                {{ form_widget(propal_form.ville) }}
            </div>
            <div class=\"col-sm-2\">
                {{ form_label(propal_form.telephone, 'Téléphone', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(propal_form.telephone) }}
            </div>
            <div class=\"col-sm-3\">
                {{ form_label(propal_form.email, 'Email', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(propal_form.email) }}
            </div>
            <div class=\"col-sm-3\">
                {{ form_label(propal_form.typepropal, 'Type', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(propal_form.typepropal) }}
            </div>
            <div class=\"col-sm-3\">
                {{ form_label(propal_form.fiabilite, 'Fiabilité', {
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                {{ form_widget(propal_form.fiabilite) }}
            </div>
        </div>
    </fieldset>
</div>


<div class=\"col-sm-12\">
    <fieldset class=\"col-sm-12\">
        <legend>Infos Propal</legend>
        <div class=\"row\">
            <div class=\"col-sm-2\">
                {{ form_label(propal_form.entitypropal, 'Entité', {
                    'label_attr': {'class': 'font-weight-bold required'}
                }) }}
                {{ form_widget(propal_form.entitypropal) }}
            </div>
            <div class=\"col-sm-2\">
                {{ form_label(propal_form.statutpropal, 'Statut Propal', {
                    'label_attr': {'class': 'font-weight-bold required'}
                }) }}
                {{ form_widget(propal_form.statutpropal) }}
            </div>
            <div class=\"col-sm-2\">
                {{ form_label(propal_form.commercialpropal, 'Commercial', {
                    'label_attr': {'class': 'font-weight-bold required'}
                }) }}
                {{ form_widget(propal_form.commercialpropal) }}
            </div>
        </div>
    </fieldset>
</div>

<div class=\"col-sm-12 mt-3\">
    <fieldset class=\"col-sm-12\">
        <legend>Besoin</legend>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_label(propal_form.formation, 'Formation', {
                            'label_attr': {'class': 'font-weight-bold required'}
                        }) }}
                        {{ form_widget(propal_form.formation) }}
                    </div>
                    <div class=\"col-sm-3\">
                        {{ form_label(propal_form.personnes, 'Personnes concernées', {
                            'label_attr': {'class': 'font-weight-bold required'}
                        }) }}
                        {{ form_widget(propal_form.personnes) }}
                    </div>
                    <div class=\"col-sm-2\">
                        {{ form_label(propal_form.coutht, 'Coût HT', {
                            'label_attr': {'class': 'font-weight-bold '}
                        }) }}
                        {{ form_widget(propal_form.coutht) }}
                    </div>
                    <div class=\"col-sm-1\">
                        {{ form_label(propal_form.montantTVA, 'TVA (%)', {
                            'label_attr': {'class': 'font-weight-bold '}
                        }) }}
                        {{ form_widget(propal_form.montantTVA) }}
                    </div>
                    <div class=\"col-sm-2\">
                        {{ form_label(propal_form.coutTTC, 'Coût TTC', {
                            'label_attr': {'class': 'font-weight-bold '}
                        }) }}
                        {{ form_widget(propal_form.coutTTC) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_label(propal_form.besoin, 'Besoin', {
                            'label_attr': {'class': 'font-weight-bold '}
                        }) }}
                        {{ form_widget(propal_form.besoin) }}
                    </div>
                    <div class=\"col-sm-4\">
                        {{ form_label(propal_form.prerequis, 'Prérequis', {
                            'label_attr': {'class': 'font-weight-bold required'}
                        }) }}
                        {{ form_widget(propal_form.prerequis) }}
                    </div>
                    <div class=\"col-sm-4\">
                        {{ form_label(propal_form.objectif, 'Objectif', {
                            'label_attr': {'class': 'font-weight-bold required'}
                        }) }}
                        {{ form_widget(propal_form.objectif, {'attr' : {'autocomplete' : 'off'}}) }}
                    </div>

                </div>
            </div>
        </div>
        <div class=\"row mt-3\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-2\">
                        <label class=\"font-weight-bold d-block text-center required\">Durée</label>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                {% if propal_form.durrej == \"\" %}
                                    {{ form_widget(propal_form.durrej, {attr: {value : 0}}) }}  
                                {% else %}
                                    {{ form_widget(propal_form.durrej) }}                       
                                {% endif %}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text p-1\" id=\"inputGroupPrepend\">Jr</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                    {{ form_widget(propal_form.durreh) }}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text p-1\" id=\"inputGroupPrepend\">Hr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-4\">
                        <label class=\"font-weight-bold d-block text-center\">Dates</label>
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                    {{ form_widget(propal_form.datedebutpropal) }}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">Debut</span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-6\">
                                <div class=\"input-group\">
                                    {{ form_widget(propal_form.datefinpropal) }}
                                    <div class=\"input-group-append\">
                                        <span class=\"input-group-text\" id=\"inputGroupPrepend\">Fin</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-2\">
                        {{ form_label(propal_form.lieupropal, 'Lieu', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(propal_form.lieupropal) }}
                    </div>
                    <div class=\"col-sm-2\">
                        {{ form_label(propal_form.dateedition, 'Date Edition', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(propal_form.dateedition) }}
                    </div>
                    <div class=\"col-sm-2\">
                        {{ form_label(propal_form.daterelance, 'Date relance', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(propal_form.daterelance) }}
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
</div>
<div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
    <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
            <button type=\"submit\" class=\"btn btn-primary btn-md btn-block\" id=\"SaveBtn\">
                {% if type is defined and type == 'create' %}
                    Ajouter
                {% else %}
                    Enregistrer les modifications
                {% endif %}
            </button>
        </div>
        {% if type is not defined %}
        {% if propal.entitypropal == 'proform' %}
            <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                    <a href=\"{{ path('propal_generate_docproform',{id:idpropal}) }}\" class=\"btn btn-primary btn-md btn-block\" id=\"createdocpropalproform\">
                        Editer Propal
                    </a>
            </div>
        {% else %}
            <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                    <a href=\"{{ path('propal_generate_doc',{id:idpropal}) }}\" class=\"btn btn-primary btn-md btn-block\" id=\"createdocpropal\">
                        Editer Propal
                    </a>
            </div>
        {% endif %}          
            <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                <a href=\"{{ path('propal_generate_conv',{id:idpropal}) }}\" class=\"btn btn-primary btn-md btn-block\" id=\"createconvpropal\">
                    Editer conv
                </a>
            </div>

        <div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
                <a href=\"{{ path('Liste_Dossiers_Controller/ajoutdossier', {id_entite:propal_form.entitypropal.vars.value, id_formation:propal.formation.id, id_commercial:propal_form.commercialpropal.vars.value, coutht:propal_form.coutht.vars.value, client:propal_form.clientpropal.vars.value}) }}\", target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" id=\"createdossier\" onclick=\"ModifStatut()\">
                    Ajouter Dossier
                </a>
            </div>
        {% endif %}
    </div>
</div>

{# APR-204 #}
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.29.2/sweetalert2.all.js\"></script>
<script src=\"//cdn.jsdelivr.net/npm/sweetalert2@10\"></script>

<script>

if (propal_statutpropal.value != 4)
        {
            function ModifStatut() 
            {
                document.getElementById(\"ModifBtn\").click();
                document.getElementById('propal_statutpropal').value = 4;
                document.getElementById(\"SaveBtn\").click();

                    let timerInterval
                    Swal.fire({
                    icon: 'warning',
                    title: 'Propal',
                    html: 'statut en cours de changement..',
                    timer: 3500,
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                        timerInterval = setInterval(() => {
                        const content = Swal.getContent()
                        if (content) {
                            const b = content.querySelector('b')
                            if (b) {
                            b.textContent = Swal.getTimerLeft()
                            }
                        }
                        }, 100)
                    },
                    willClose: () => {
                        clearInterval(timerInterval)
                    }
                    }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {
                        swal(
                            'Statut changé !',
                            'Le statut de la propal est passé en \"Dossier créé\" !',
                            'success'
                            )
                        }
                    })
                        }
                        
        }
    
{#if (document.getElementById('propal_coutht').value == \"\")
    {
        document.getElementById('propal_coutht').value = 0;
    }
    if (document.getElementById('propal_durrej').value == \"\")
    {
        document.getElementById('propal_durrej').value = 0;
    }#}
    if (document.getElementById('propal_montantTVA').value == \"\")
    {
        document.getElementById('propal_montantTVA').value = 20;
    }
    if (document.getElementById('propal_dateedition').value == \"\")
    {
        dateNow = new Date();
        if((dateNow.getMonth() + 1) < 10)
        {
            month = \"0\" + (dateNow.getMonth() + 1);
        }
        else
        {
            month = \"\" + (dateNow.getMonth() + 1);
        }
        {% if ((isCreatePropal is defined) and isCreatePropal) %}
            document.getElementById('propal_dateedition').value = \"\" + dateNow.getDate() + \"/\" + month + \"/\" + dateNow.getFullYear();
        {% endif %}
    }
    if (document.getElementById('propal_daterelance').value == \"\")
    {
        {% if ((isCreatePropal is defined) and isCreatePropal) %}
            dateRelance = new Date();
            dateRelance.setDate(dateRelance.getDate() + 10);
            if((dateRelance.getMonth() + 1) < 10)
            {
                month = \"0\" + (dateRelance.getMonth() + 1);
            }
            else
            {
                month = \"\" + (dateRelance.getMonth() + 1);
            }
            document.getElementById('propal_daterelance').value = \"\" + dateRelance.getDate() + \"/\" + month + \"/\" + dateRelance.getFullYear();
        {% else %}
            if (document.getElementById('propal_dateedition').value != \"\")
            {
                dateEdition = document.getElementById('propal_dateedition').value.split(\"/\");
                dateEdition = new Date(dateEdition[2], dateEdition[1] - 1, dateEdition[0]);
                dateEdition.setDate(dateEdition.getDate() + 10);
                if((dateEdition.getMonth() + 1) < 10)
                {
                    month = \"0\" + (dateEdition.getMonth() + 1);
                }
                else
                {
                    month = \"\" + (dateEdition.getMonth() + 1);
                }
                document.getElementById('propal_daterelance').value = \"\" + dateEdition.getDate() + \"/\" + month + \"/\" + dateEdition.getFullYear();
            }
        {% endif %}

    }
</script>

{{ form_end(propal_form,{'render_rest':false}) }}", "propal/Parts/form.html.twig", "/home/jeremy/Bureau/project/app/templates/propal/Parts/form.html.twig");
    }
}
