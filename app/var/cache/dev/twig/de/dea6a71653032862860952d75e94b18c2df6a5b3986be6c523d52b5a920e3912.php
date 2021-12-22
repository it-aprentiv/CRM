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

/* facture/form.html.twig */
class __TwigTemplate_3e6f62fa15a0f2d7811248f62c927ec3cff213fa99e15c543dd1be5d2eb7c8a1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/form.html.twig"));

        // line 1
        if ((isset($context["type"]) || array_key_exists("type", $context))) {
            // line 2
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "popUp-ajout list-filter", "method" => "post"]]);
            echo "
";
        } else {
            // line 4
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "popUp-ajout", "method" => "post"]]);
            echo "
";
        }
        // line 6
        echo "
";
        // line 8
        echo "<fieldset>
    <legend>Informations générales</legend>
    <div class=\"row\">
        <div class=\"col-sm-2\">
            <div class=\"form-group text-center\">
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "idContact", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Societe"]);
        // line 15
        echo " 
            
            ";
        // line 17
        if ((isset($context["client"]) || array_key_exists("client", $context))) {
            // line 18
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" target=\"_blank\" title=\"Fiche client : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 18, $this->source); })()), "nomStr", [], "any", false, false, false, 18), "html", null, true);
            echo "\"><i class=\"fas fa-user\"></i></a>
            ";
        }
        // line 20
        echo "            
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "idContact", [], "any", false, false, false, 21), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group text-center\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "dest1", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Destination"]);
        // line 28
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "dest1", [], "any", false, false, false, 29), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "idStructure", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Struture "]);
        // line 36
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "idStructure", [], "any", false, false, false, 37), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "idResponsable", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial "]);
        // line 45
        echo "
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "idResponsable", [], "any", false, false, false, 46), 'widget');
        echo "
                </div>
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group text-center\">
                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "idOpca", [], "any", false, false, false, 52), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "OPCO"]);
        // line 54
        echo "
                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "idOpca", [], "any", false, false, false, 55), 'widget');
        echo "
            </div>
        </div>

        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "idStatut", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Statut "]);
        // line 64
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "idStatut", [], "any", false, false, false, 65), 'widget');
        echo "
                </div>
            </div>
        </div>
    </div>
</fieldset>

<div class=\"row\">
    <div class=\"col-sm-6\">
        <fieldset class=\"form-group\">
            <legend>Facture</legend>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 82
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "ref", [], "any", false, false, false, 82), 'row');
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "dateCreation", [], "any", false, false, false, 86), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <label for=\"\">Date paiement estimé</label>
                        <input readonly class=\"js-datepicker text-center form-control\" type=\"text\" name=\"\" id=\"datapayementestime\" data-date-format=\"dd/mm/yyyy\">
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "totalHt", [], "any", false, false, false, 95), 'row', ["attr" => ["value" => ((((isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context)) &&  !(null === (isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context) ? $context["montant_htn_htn1"] : (function () { throw new RuntimeError('Variable "montant_htn_htn1" does not exist.', 95, $this->source); })())))) ? (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context) ? $context["montant_htn_htn1"] : (function () { throw new RuntimeError('Variable "montant_htn_htn1" does not exist.', 95, $this->source); })()), "HTN", [], "array", false, false, false, 95), 2, ",", " ")) : ((((isset($context["facture"]) || array_key_exists("facture", $context))) ? (twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 95, $this->source); })()), "totalHt", [], "any", false, false, false, 95)) : (""))))]]);
        echo "
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "resteARegler", [], "any", false, false, false, 98), 'row', ["attr" => ["value" => ((((isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context)) &&  !(null === (isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context) ? $context["montant_htn_htn1"] : (function () { throw new RuntimeError('Variable "montant_htn_htn1" does not exist.', 98, $this->source); })())))) ? (twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["montant_htn_htn1"]) || array_key_exists("montant_htn_htn1", $context) ? $context["montant_htn_htn1"] : (function () { throw new RuntimeError('Variable "montant_htn_htn1" does not exist.', 98, $this->source); })()), "HTN+1", [], "array", false, false, false, 98), 2, ",", " ")) : ((((isset($context["facture"]) || array_key_exists("facture", $context))) ? (twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 98, $this->source); })()), "resteARegler", [], "any", false, false, false, 98)) : (""))))]]);
        echo "
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "totalRegleHt", [], "any", false, false, false, 101), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "pourcentageTva", [], "any", false, false, false, 105), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\">";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "mntTva", [], "any", false, false, false, 107), 'row');
        echo "</div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "totalRegle", [], "any", false, false, false, 110), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "intituleFacture", [], "any", false, false, false, 114), 'row');
        echo "
                </div>
            </div>
                
            <div class=\"row\">
                <div class=\"col-md-12 text-center mt-3 pt-3 border-top\">
                    ";
        // line 120
        if ((isset($context["facture"]) || array_key_exists("facture", $context))) {
            // line 121
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_avoirs_print", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 121, $this->source); })()), "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" id=\"etitFact\"> 
                            <i class=\"fas fa-file-excel\"></i> Editer Facture 
                        </a>
                    ";
        }
        // line 125
        echo "                </div>
            </div>
        </fieldset>
    </div>
    <div class=\"col-sm-6\">
        <fieldset class=\"form-group\">
            <legend>Avoir</legend>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        ";
        // line 138
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 138), "ref", [], "any", false, false, false, 138), 'row');
        echo "
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 142), "dateCreation", [], "any", false, false, false, 142), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 145), "natureAvoir", [], "any", false, false, false, 145), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 148, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 148), "montantHTN", [], "any", false, false, false, 148), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <label for=\"\">HT N+1</label>
                        <input class=\"form-control money-format mnthtnfactavoir\" type=\"text\" name=\"\" id=\"\" data-ttlht='ttlhtfctavr' ";
        // line 153
        echo ((((isset($context["type"]) || array_key_exists("type", $context)) && ((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 153, $this->source); })()) == "create"))) ? ("") : (""));
        echo ">
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 157, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 157), "totalHt", [], "any", false, false, false, 157), 'row');
        echo "
                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 158), "mntTtc", [], "any", false, false, false, 158), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 162, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 162), "pourcentageTva", [], "any", false, false, false, 162), 'row');
        echo "
                </div>
                <div class=\"col-sm-4\">";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 164, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 164), "mntTva", [], "any", false, false, false, 164), 'row');
        echo "</div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 167), "totalTtc", [], "any", false, false, false, 167), 'row');
        echo "</div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 171), "intituleFacture", [], "any", false, false, false, 171), 'row');
        echo "
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-12 text-center mt-3 pt-3 border-top\">
                    ";
        // line 177
        if (((isset($context["facture"]) || array_key_exists("facture", $context)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 177, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 177)))) {
            // line 178
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editer_avoirs", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 178, $this->source); })()), "idAvoirLiee", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" id=\"etitFact\"> 
                            <i class=\"fas fa-file-excel\"></i> Editer Avoir 
                        </a>
                    ";
        } else {
            // line 182
            echo "                        <a href=\"javascript:void(0)\" class=\"btn btn-primary btn-lg\" id=\"etitFact\"> 
                            <i class=\"fas fa-file-excel\"></i> Editer Avoir 
                        </a>
                    ";
        }
        // line 186
        echo "                </div>
            </div>
                
        </fieldset>
    </div>
</div>
";
        // line 193
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        ";
        // line 196
        echo "        ";
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "facture/form.html.twig", 196)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "commentaires", [], "any", false, false, false, 196), "vars", [], "any", false, false, false, 196), "prototype", [], "any", false, false, false, 196), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "commentaires", [], "any", false, false, false, 196)]));
        // line 197
        echo "        ";
        // line 198
        echo "        ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "commentaires", [], "any", false, false, false, 198), "setRendered", [], "any", false, false, false, 198);
        // line 199
        echo "    </div>
</div>
<br>

<div class=\"row\">
    <div class=\"col-sm-4\"></div>
    <div class=\"col-sm-4 text-center\">
        <button class=\"btn btn-warning btn-lg\">
            ";
        // line 207
        if ((isset($context["facture"]) || array_key_exists("facture", $context))) {
            // line 208
            echo "                Mettre à jour
            ";
        } else {
            // line 210
            echo "                Enregistrer
            ";
        }
        // line 212
        echo "        </button>
    </div>
    <div class=\"col-sm-4 text-center\">
        ";
        // line 215
        if ((isset($context["facture"]) || array_key_exists("facture", $context))) {
            // line 216
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("encaissement_create_from_facture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 216, $this->source); })()), "id", [], "any", false, false, false, 216)]), "html", null, true);
            echo "\"
               class=\"btn btn-primary btn-lg\" id=\"encFact\">
                Encaissement
            </a>
        ";
        }
        // line 221
        echo "    </div>
</div>
";
        // line 223
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  409 => 223,  405 => 221,  396 => 216,  394 => 215,  389 => 212,  385 => 210,  381 => 208,  379 => 207,  369 => 199,  366 => 198,  364 => 197,  361 => 196,  357 => 193,  349 => 186,  343 => 182,  335 => 178,  333 => 177,  324 => 171,  317 => 167,  311 => 164,  306 => 162,  299 => 158,  295 => 157,  288 => 153,  280 => 148,  274 => 145,  268 => 142,  260 => 138,  248 => 125,  240 => 121,  238 => 120,  229 => 114,  222 => 110,  216 => 107,  211 => 105,  204 => 101,  198 => 98,  192 => 95,  180 => 86,  172 => 82,  155 => 65,  152 => 64,  150 => 62,  140 => 55,  137 => 54,  135 => 52,  126 => 46,  123 => 45,  121 => 43,  112 => 37,  109 => 36,  107 => 34,  99 => 29,  96 => 28,  94 => 26,  86 => 21,  83 => 20,  75 => 18,  73 => 17,  69 => 15,  67 => 13,  60 => 8,  57 => 6,  51 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if(type is defined) %}
    {{ form_start(form,{ 'attr' : {'class': 'popUp-ajout list-filter' , 'method' : 'post' }  }) }}
{% else %}
    {{ form_start(form,{ 'attr' : {'class': 'popUp-ajout' , 'method' : 'post' }  }) }}
{% endif %}

{#  Entete de filtre generale  #}
<fieldset>
    <legend>Informations générales</legend>
    <div class=\"row\">
        <div class=\"col-sm-2\">
            <div class=\"form-group text-center\">
                {{ form_label(form.idContact, 'Societe', {
                'label_attr': {'class': 'font-weight-bold required'}
            }) }} 
            
            {% if client is defined %}
                <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : client.id} ) }}\" target=\"_blank\" title=\"Fiche client : {{ client.nomStr }}\"><i class=\"fas fa-user\"></i></a>
            {% endif %}
            
                {{ form_widget(form.idContact) }}
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group text-center\">
                {{ form_label(form.dest1, 'Destination', {
                'label_attr': {'class': 'font-weight-bold required'}
            }) }}
                {{ form_widget(form.dest1) }}
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group\">
                {{ form_label(form.idStructure , 'Struture ',{
                'label_attr': {'class': 'font-weight-bold required'}
            }) }}
                {{ form_widget(form.idStructure) }}
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    {{ form_label(form.idResponsable , 'Commercial ',{
                    'label_attr': {'class': 'font-weight-bold required'}
                }) }}
                    {{ form_widget(form.idResponsable) }}
                </div>
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group text-center\">
                {{ form_label(form.idOpca, 'OPCO', {
                'label_attr': {'class': 'font-weight-bold required'}
            }) }}
                {{ form_widget(form.idOpca) }}
            </div>
        </div>

        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    {{ form_label(form.idStatut , 'Statut ',{
                    'label_attr': {'class': 'font-weight-bold required'}
                }) }}
                    {{ form_widget(form.idStatut) }}
                </div>
            </div>
        </div>
    </div>
</fieldset>

<div class=\"row\">
    <div class=\"col-sm-6\">
        <fieldset class=\"form-group\">
            <legend>Facture</legend>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        {#<label for=\"\">N° facture</label>
                        <input class=\"form-control\" type=\"text\" name=\"\" id=\"#num-facture\"
                               value=\"{{ form.vars.value.ref | default('') }}\" readonly>#}
                        {{ form_row(form.ref) }}
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.dateCreation) }}
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <label for=\"\">Date paiement estimé</label>
                        <input readonly class=\"js-datepicker text-center form-control\" type=\"text\" name=\"\" id=\"datapayementestime\" data-date-format=\"dd/mm/yyyy\">
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.totalHt, { attr : { 'value' : montant_htn_htn1 is defined and montant_htn_htn1 is not null ? montant_htn_htn1['HTN'] | number_format(2, ',', ' ') : (facture is defined ? facture.totalHt : \"\") } }  ) }}
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.resteARegler, { attr : { 'value' : montant_htn_htn1 is defined and montant_htn_htn1 is not null ? montant_htn_htn1['HTN+1'] | number_format(2, ',', ' ') : (facture is defined ? facture.resteARegler : \"\") } }) }}
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.totalRegleHt) }}
                </div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.pourcentageTva) }}
                </div>
                <div class=\"col-sm-4\">{{ form_row(form.mntTva) }}</div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">{{ form_row(form.totalRegle) }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    {{ form_row(form.intituleFacture) }}
                </div>
            </div>
                
            <div class=\"row\">
                <div class=\"col-md-12 text-center mt-3 pt-3 border-top\">
                    {% if facture is defined %}
                        <a href=\"{{ path(\"facture_avoirs_print\", { id : facture.id}) }}\" class=\"btn btn-primary btn-lg\" id=\"etitFact\"> 
                            <i class=\"fas fa-file-excel\"></i> Editer Facture 
                        </a>
                    {% endif %}
                </div>
            </div>
        </fieldset>
    </div>
    <div class=\"col-sm-6\">
        <fieldset class=\"form-group\">
            <legend>Avoir</legend>
            <div class=\"row\">
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        {#<label for=\"\">N° Avoir</label>
                        <input class=\"form-control\" type=\"text\" name=\"\" id=\"\"
                               value=\"{{ form.idAvoirLiee.vars.value.ref | default('') }}\" readonly>#}
                        {{ form_row(form.idAvoirLiee.ref) }}
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.idAvoirLiee.dateCreation) }}
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.idAvoirLiee.natureAvoir) }}
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.idAvoirLiee.montantHTN) }}
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-group\">
                        <label for=\"\">HT N+1</label>
                        <input class=\"form-control money-format mnthtnfactavoir\" type=\"text\" name=\"\" id=\"\" data-ttlht='ttlhtfctavr' {{ type is defined and type == 'create' ? '' : ''}}>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.idAvoirLiee.totalHt) }}
                    {{ form_row(form.idAvoirLiee.mntTtc) }}
                </div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">
                    {{ form_row(form.idAvoirLiee.pourcentageTva) }}
                </div>
                <div class=\"col-sm-4\">{{ form_row(form.idAvoirLiee.mntTva) }}</div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\"></div>
                <div class=\"col-sm-4\">{{ form_row(form.idAvoirLiee.totalTtc) }}</div>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-12\">
                    {{ form_row(form.idAvoirLiee.intituleFacture) }}
                </div>
            </div>
            
            <div class=\"row\">
                <div class=\"col-md-12 text-center mt-3 pt-3 border-top\">
                    {% if facture is defined and facture.idAvoirLiee is not empty %}
                        <a href=\"{{ path(\"editer_avoirs\", { id : facture.idAvoirLiee.id }) }}\" class=\"btn btn-primary btn-lg\" id=\"etitFact\"> 
                            <i class=\"fas fa-file-excel\"></i> Editer Avoir 
                        </a>
                    {% else %}
                        <a href=\"javascript:void(0)\" class=\"btn btn-primary btn-lg\" id=\"etitFact\"> 
                            <i class=\"fas fa-file-excel\"></i> Editer Avoir 
                        </a>
                    {% endif %}
                </div>
            </div>
                
        </fieldset>
    </div>
</div>
{#About Commentaire#}
<div class=\"row\">
    <div class=\"col-sm-12\">
        {#        {% include 'Common/facture_commentaires.html.twig' with { prototype: form.commentaires.vars.prototype, commentaires: form.commentaires } %}#}
        {% include 'Common/commentaire-bloc.html.twig' with { prototype: form.commentaires.vars.prototype, commentaires: form.commentaires } %}
        {# pour empecher l'application d'afficher un bloc commentaire à la fin #}
        {% do form.commentaires.setRendered %}
    </div>
</div>
<br>

<div class=\"row\">
    <div class=\"col-sm-4\"></div>
    <div class=\"col-sm-4 text-center\">
        <button class=\"btn btn-warning btn-lg\">
            {% if facture is defined %}
                Mettre à jour
            {% else %}
                Enregistrer
            {% endif %}
        </button>
    </div>
    <div class=\"col-sm-4 text-center\">
        {% if facture is defined %}
            <a href=\"{{ path('encaissement_create_from_facture', {'id': facture.id}) }}\"
               class=\"btn btn-primary btn-lg\" id=\"encFact\">
                Encaissement
            </a>
        {% endif %}
    </div>
</div>
{{ form_end(form) }}", "facture/form.html.twig", "/var/www/templates/facture/form.html.twig");
    }
}
