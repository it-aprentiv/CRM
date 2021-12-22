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

/* /encaissement/_factures-avoirs.html.twig */
class __TwigTemplate_586eb462bdbc5fb8469d8f2d12cd158261b91c2b7a1f7153f4231e47c9cc24f4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/encaissement/_factures-avoirs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/encaissement/_factures-avoirs.html.twig"));

        // line 1
        if ((isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "    
    ";
            // line 3
            $context["montantTTC"] = null;
            // line 4
            echo "    ";
            $context["factureId"] = null;
            // line 5
            echo "    ";
            $context["factureRef"] = null;
            // line 6
            echo "    
    ";
            // line 8
            echo "    ";
            if (((isset($context["context"]) || array_key_exists("context", $context)) && ((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 8, $this->source); })()) == "dom/loc"))) {
                // line 9
                echo "        ";
                $context["montantTTC"] = ((twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 9, $this->source); })()), "ttc", [], "any", false, false, false, 9)) ? (twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 9, $this->source); })()), "ttc", [], "any", false, false, false, 9)) : (twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 9, $this->source); })()), "montant", [], "any", false, false, false, 9)));
                // line 10
                echo "        ";
                $context["factureId"] = twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 10, $this->source); })()), "idfacturedom", [], "any", false, false, false, 10);
                // line 11
                echo "        ";
                $context["factureRef"] = twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 11, $this->source); })()), "numero", [], "any", false, false, false, 11);
                // line 12
                echo "    ";
            } else {
                // line 13
                echo "        ";
                $context["montantTTC"] = ((twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 13, $this->source); })()), "mntTtc", [], "any", false, false, false, 13)) ? (twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 13, $this->source); })()), "mntTtc", [], "any", false, false, false, 13)) : (twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 13, $this->source); })()), "totalRegle", [], "any", false, false, false, 13)));
                // line 14
                echo "        ";
                $context["factureId"] = twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14);
                // line 15
                echo "        ";
                $context["factureRef"] = twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 15, $this->source); })()), "ref", [], "any", false, false, false, 15);
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    ";
            // line 18
            if ( !(isset($context["deletable"]) || array_key_exists("deletable", $context))) {
                // line 19
                echo "        ";
                $context["deletable"] = true;
                // line 20
                echo "    ";
            }
            // line 21
            echo "    
    <fieldset class=\"facture-item position-relative\">
        <input type=\"hidden\" class=\"id_fact\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 23, $this->source); })()), "html", null, true);
            echo "\">
        <legend class=\"col-form-label\"><i class=\"fas fa-list-alt\" aria-hidden=\"true\"></i></legend>

        ";
            // line 26
            if ((isset($context["deletable"]) || array_key_exists("deletable", $context) ? $context["deletable"] : (function () { throw new RuntimeError('Variable "deletable" does not exist.', 26, $this->source); })())) {
                // line 27
                echo "        <a href=\"javascript:void(0)\" class=\"remove-facture-liee text-danger position-absolute\" title=\"Supprimer la facture\">
            <i class=\"fas fa-trash-alt\"></i>
        </a>
        ";
            }
            // line 31
            echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                <label class=\"required\">Num facture</label>
                <input type=\"text\" disabled=\"disabled\" class=\"form-control\" value=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["factureRef"]) || array_key_exists("factureRef", $context) ? $context["factureRef"] : (function () { throw new RuntimeError('Variable "factureRef" does not exist.', 35, $this->source); })()), "html", null, true);
            echo "\">
            </div>
            <div class=\"form-group col-md-6\">
                <label class=\"required\">Montant TTC</label>
                <div class=\"input-group\">
                    <input type=\"text\" disabled=\"disabled\" class=\"form-control montantttcfacture\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montantTTC"]) || array_key_exists("montantTTC", $context) ? $context["montantTTC"] : (function () { throw new RuntimeError('Variable "montantTTC" does not exist.', 40, $this->source); })()), 2, ",", " "), "html", null, true);
            echo "\">
                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\"> €</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "num_avoir", [], "any", true, true, false, 48) && twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 48, $this->source); })()), "num_avoir", [], "any", false, false, false, 48))) {
                // line 49
                echo "                ";
                $context["avoirLabelClass"] = "required";
                // line 50
                echo "            ";
            } else {
                // line 51
                echo "                ";
                $context["avoirLabelClass"] = "";
                // line 52
                echo "            ";
            }
            // line 53
            echo "            <div class=\"form-group col-md-6\">
                <label ";
            // line 54
            if ((isset($context["avoirLabelClass"]) || array_key_exists("avoirLabelClass", $context) ? $context["avoirLabelClass"] : (function () { throw new RuntimeError('Variable "avoirLabelClass" does not exist.', 54, $this->source); })())) {
                echo "class=\"";
                echo twig_escape_filter($this->env, (isset($context["avoirLabelClass"]) || array_key_exists("avoirLabelClass", $context) ? $context["avoirLabelClass"] : (function () { throw new RuntimeError('Variable "avoirLabelClass" does not exist.', 54, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">Num avoir</label>
                <input type=\"text\" disabled=\"disabled\" class=\"form-control\" value=\"";
            // line 55
            (((twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "num_avoir", [], "any", true, true, false, 55) && twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 55, $this->source); })()), "num_avoir", [], "any", false, false, false, 55))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 55, $this->source); })()), "num_avoir", [], "any", false, false, false, 55), "html", null, true))) : (print ("--")));
            echo "\">
            </div>
            <div class=\"form-group col-md-6\">
                <label ";
            // line 58
            if ((isset($context["avoirLabelClass"]) || array_key_exists("avoirLabelClass", $context) ? $context["avoirLabelClass"] : (function () { throw new RuntimeError('Variable "avoirLabelClass" does not exist.', 58, $this->source); })())) {
                echo "class=\"";
                echo twig_escape_filter($this->env, (isset($context["avoirLabelClass"]) || array_key_exists("avoirLabelClass", $context) ? $context["avoirLabelClass"] : (function () { throw new RuntimeError('Variable "avoirLabelClass" does not exist.', 58, $this->source); })()), "html", null, true);
                echo "\"";
            }
            echo ">Montant TTC</label>
                <div class=\"input-group\">
                    <input type=\"text\" disabled=\"disabled\" class=\"form-control\" id=\"montant-ttc-avoir\" value=\"";
            // line 60
            (((twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "num_avoir", [], "any", true, true, false, 60) && twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 60, $this->source); })()), "num_avoir", [], "any", false, false, false, 60))) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 60, $this->source); })()), "avoirMontantTTC", [], "any", false, false, false, 60), 2, ",", " "), "html", null, true))) : (print ("--")));
            echo "\">
                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\"> €</span>
                    </div>
                </div>
            </div>
        </div>
        <p>
            <input type=\"hidden\" name=\"factureLieesIds[]\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["factureId"]) || array_key_exists("factureId", $context) ? $context["factureId"] : (function () { throw new RuntimeError('Variable "factureId" does not exist.', 68, $this->source); })()), "html", null, true);
            echo "\" />
        </p>
    </fieldset>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/encaissement/_factures-avoirs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 68,  180 => 60,  171 => 58,  165 => 55,  157 => 54,  154 => 53,  151 => 52,  148 => 51,  145 => 50,  142 => 49,  140 => 48,  129 => 40,  121 => 35,  115 => 31,  109 => 27,  107 => 26,  101 => 23,  97 => 21,  94 => 20,  91 => 19,  89 => 18,  86 => 17,  83 => 16,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 6,  53 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if facture %}
    
    {% set montantTTC = null %}
    {% set factureId = null %}
    {% set factureRef = null %}
    
    {# Ajout gestion dom/loc   #}
    {% if context is defined and context == 'dom/loc' %}
        {% set montantTTC = facture.ttc ? facture.ttc : facture.montant %}
        {% set factureId = facture.idfacturedom %}
        {% set factureRef = facture.numero %}
    {% else %}
        {% set montantTTC = facture.mntTtc ? facture.mntTtc : facture.totalRegle %}
        {% set factureId = facture.id %}
        {% set factureRef = facture.ref %}
    {% endif %}

    {% if deletable is not defined %}
        {% set deletable = true %}
    {% endif %}
    
    <fieldset class=\"facture-item position-relative\">
        <input type=\"hidden\" class=\"id_fact\" value=\"{{ factureId }}\">
        <legend class=\"col-form-label\"><i class=\"fas fa-list-alt\" aria-hidden=\"true\"></i></legend>

        {% if deletable %}
        <a href=\"javascript:void(0)\" class=\"remove-facture-liee text-danger position-absolute\" title=\"Supprimer la facture\">
            <i class=\"fas fa-trash-alt\"></i>
        </a>
        {% endif %}

        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                <label class=\"required\">Num facture</label>
                <input type=\"text\" disabled=\"disabled\" class=\"form-control\" value=\"{{ factureRef }}\">
            </div>
            <div class=\"form-group col-md-6\">
                <label class=\"required\">Montant TTC</label>
                <div class=\"input-group\">
                    <input type=\"text\" disabled=\"disabled\" class=\"form-control montantttcfacture\" value=\"{{ montantTTC | number_format(2, ',', ' ') }}\">
                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\"> €</span>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            {% if facture.num_avoir is defined and facture.num_avoir %}
                {% set avoirLabelClass = 'required' %}
            {% else %}
                {% set avoirLabelClass = '' %}
            {% endif %}
            <div class=\"form-group col-md-6\">
                <label {% if avoirLabelClass %}class=\"{{ avoirLabelClass }}\"{% endif %}>Num avoir</label>
                <input type=\"text\" disabled=\"disabled\" class=\"form-control\" value=\"{{ facture.num_avoir is defined and facture.num_avoir ? facture.num_avoir : \"--\" }}\">
            </div>
            <div class=\"form-group col-md-6\">
                <label {% if avoirLabelClass %}class=\"{{ avoirLabelClass }}\"{% endif %}>Montant TTC</label>
                <div class=\"input-group\">
                    <input type=\"text\" disabled=\"disabled\" class=\"form-control\" id=\"montant-ttc-avoir\" value=\"{{ facture.num_avoir is defined and facture.num_avoir ? facture.avoirMontantTTC  | number_format(2, ',', ' ') : \"--\" }}\">
                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\"> €</span>
                    </div>
                </div>
            </div>
        </div>
        <p>
            <input type=\"hidden\" name=\"factureLieesIds[]\" value=\"{{ factureId }}\" />
        </p>
    </fieldset>

{% endif %}", "/encaissement/_factures-avoirs.html.twig", "/var/www/templates/encaissement/_factures-avoirs.html.twig");
    }
}
