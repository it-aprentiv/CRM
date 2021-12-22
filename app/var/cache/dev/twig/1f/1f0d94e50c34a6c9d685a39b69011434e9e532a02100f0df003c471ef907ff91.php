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

/* encaissement/form_encaissement.html.twig */
class __TwigTemplate_6e70f3ece89d448e322693a0321263a06a296829ea618e44e32ccc36b7aa89a9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/form_encaissement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "encaissement/form_encaissement.html.twig"));

        // line 2
        echo "
";
        // line 3
        if ((isset($context["type"]) || array_key_exists("type", $context))) {
            // line 4
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 4, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
            echo "
";
        } else {
            // line 6
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 6, $this->source); })()), 'form_start');
            echo "
";
        }
        // line 8
        echo "<fieldset>
    <legend>Informations générales</legend>
    <div class=\"form-row\">
        <div class=\"form-group col-md-2\">
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 12, $this->source); })()), "structure", [], "any", false, false, false, 12), 'row');
        echo "
        </div>
        <div class=\"form-group col-md-3\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 15, $this->source); })()), "societes", [], "any", false, false, false, 15), 'label', ["label" => "Client"]);
        echo "
            ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 16, $this->source); })()), "societes", [], "any", false, false, false, 16), 'widget');
        echo "
        </div>
        ";
        // line 18
        if (( !(isset($context["source"]) || array_key_exists("source", $context)) || ((isset($context["source"]) || array_key_exists("source", $context)) && ((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 18, $this->source); })()) == "dossier")))) {
            // line 19
            echo "            <div class=\"form-group col-md-2\">
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 20, $this->source); })()), "payeur", [], "any", false, false, false, 20), 'row');
            echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 23, $this->source); })()), "opca", [], "any", false, false, false, 23), 'row');
            echo "
            </div>
        ";
        }
        // line 25
        echo " 
        <div class=\"form-group col-md-2\">
            ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 27, $this->source); })()), "commercial", [], "any", false, false, false, 27), 'row');
        echo "
        </div>
    </div>
</fieldset>

<div class=\"row\">
    <div class=\"col-md-4\">
       ";
        // line 38
        echo "
        <fieldset>
            <legend class=\"d-flex justify-content-between\">
                <span>Factures / Avoirs</span>
            </legend>

            ";
        // line 52
        echo "
            ";
        // line 53
        $context["num_facture_princ"] = null;
        // line 54
        echo "
            ";
        // line 55
        if ((isset($context["facture_principale"]) || array_key_exists("facture_principale", $context))) {
            // line 56
            echo "
                ";
            // line 57
            if (((isset($context["context"]) || array_key_exists("context", $context)) && ((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 57, $this->source); })()) == "dom/loc"))) {
                // line 58
                echo "                    ";
                $context["num_facture_princ"] = twig_get_attribute($this->env, $this->source, (isset($context["facture_principale"]) || array_key_exists("facture_principale", $context) ? $context["facture_principale"] : (function () { throw new RuntimeError('Variable "facture_principale" does not exist.', 58, $this->source); })()), "numero", [], "any", false, false, false, 58);
                // line 59
                echo "                ";
            } else {
                // line 60
                echo "                    ";
                $context["num_facture_princ"] = twig_get_attribute($this->env, $this->source, (isset($context["facture_principale"]) || array_key_exists("facture_principale", $context) ? $context["facture_principale"] : (function () { throw new RuntimeError('Variable "facture_principale" does not exist.', 60, $this->source); })()), "ref", [], "any", false, false, false, 60);
                // line 61
                echo "                ";
            }
            // line 62
            echo "            ";
        }
        // line 63
        echo "

            ";
        // line 65
        $this->loadTemplate("/encaissement/_factures-avoirs.html.twig", "encaissement/form_encaissement.html.twig", 65)->display(twig_array_merge($context, ["facture" => ((        // line 66
(isset($context["facture_principale"]) || array_key_exists("facture_principale", $context))) ? ((isset($context["facture_principale"]) || array_key_exists("facture_principale", $context) ? $context["facture_principale"] : (function () { throw new RuntimeError('Variable "facture_principale" does not exist.', 66, $this->source); })())) : (null)), "context" => ((        // line 67
(isset($context["context"]) || array_key_exists("context", $context))) ? ((isset($context["context"]) || array_key_exists("context", $context) ? $context["context"] : (function () { throw new RuntimeError('Variable "context" does not exist.', 67, $this->source); })())) : ("")), "deletable" => false]));
        // line 71
        echo "
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures_liees"]) || array_key_exists("factures_liees", $context) ? $context["factures_liees"] : (function () { throw new RuntimeError('Variable "factures_liees" does not exist.', 72, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 73
            echo "                ";
            if (((twig_get_attribute($this->env, $this->source, $context["facture"], "ref", [], "any", false, false, false, 73) != twig_get_attribute($this->env, $this->source, (isset($context["encaissement_infos"]) || array_key_exists("encaissement_infos", $context) ? $context["encaissement_infos"] : (function () { throw new RuntimeError('Variable "encaissement_infos" does not exist.', 73, $this->source); })()), "num_facture", [], "any", false, false, false, 73)) && (twig_get_attribute($this->env, $this->source, $context["facture"], "ref", [], "any", false, false, false, 73) != (isset($context["num_facture_princ"]) || array_key_exists("num_facture_princ", $context) ? $context["num_facture_princ"] : (function () { throw new RuntimeError('Variable "num_facture_princ" does not exist.', 73, $this->source); })())))) {
                // line 74
                echo "                    ";
                $this->loadTemplate("/encaissement/_factures-avoirs.html.twig", "encaissement/form_encaissement.html.twig", 74)->display(twig_array_merge($context, ["facture" => $context["facture"]]));
                echo " 
                ";
            }
            // line 76
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
            ";
        // line 79
        echo "            <div id=\"factures-wrapper\"></div>
            ";
        // line 81
        echo "
        </fieldset>
    </div>
    <div class=\"col-md-8\">
        ";
        // line 85
        $this->loadTemplate("encaissement/_details-factures-avoirs.html.twig", "encaissement/form_encaissement.html.twig", 85)->display(twig_array_merge($context, ["encaissement_form" => (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 85, $this->source); })()), "source" => (((isset($context["source"]) || array_key_exists("source", $context))) ? ((isset($context["source"]) || array_key_exists("source", $context) ? $context["source"] : (function () { throw new RuntimeError('Variable "source" does not exist.', 85, $this->source); })())) : ("dossier"))]));
        // line 86
        echo "    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
        ";
        // line 92
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "encaissement/form_encaissement.html.twig", 92)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 92, $this->source); })()), "commentaires", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "prototype", [], "any", false, false, false, 92), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 92, $this->source); })()), "commentaires", [], "any", false, false, false, 92)]));
        // line 93
        echo "        ";
        // line 94
        echo "        ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 94, $this->source); })()), "commentaires", [], "any", false, false, false, 94), "setRendered", [], "any", false, false, false, 94);
        // line 95
        echo "    </div>
</div>

<p class=\"text-center mt-3\">
    ";
        // line 99
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Encaissements")) {
            // line 100
            echo "        <button class=\"btn btn-warning\" id=\"enc_submit_button\">";
            echo twig_escape_filter($this->env, (isset($context["textButton"]) || array_key_exists("textButton", $context) ? $context["textButton"] : (function () { throw new RuntimeError('Variable "textButton" does not exist.', 100, $this->source); })()), "html", null, true);
            echo "</button>
    ";
        }
        // line 102
        echo "</p>
";
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["encaissement_form"]) || array_key_exists("encaissement_form", $context) ? $context["encaissement_form"] : (function () { throw new RuntimeError('Variable "encaissement_form" does not exist.', 103, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "encaissement/form_encaissement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 103,  244 => 102,  238 => 100,  236 => 99,  230 => 95,  227 => 94,  225 => 93,  223 => 92,  215 => 86,  213 => 85,  207 => 81,  204 => 79,  201 => 77,  187 => 76,  181 => 74,  178 => 73,  161 => 72,  158 => 71,  156 => 67,  155 => 66,  154 => 65,  150 => 63,  147 => 62,  144 => 61,  141 => 60,  138 => 59,  135 => 58,  133 => 57,  130 => 56,  128 => 55,  125 => 54,  123 => 53,  120 => 52,  112 => 38,  102 => 27,  98 => 25,  92 => 23,  86 => 20,  83 => 19,  81 => 18,  76 => 16,  72 => 15,  66 => 12,  60 => 8,  54 => 6,  48 => 4,  46 => 3,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# /!\\ Ce template gère 2 types d'encaissement selon le type de facture (source) : facture dossier ou facture domiciliation/location #}

{% if(type is defined) %}
    {{ form_start(encaissement_form,{ 'attr' : { 'class': 'list-filter'  }}) }}
{% else %}
    {{ form_start(encaissement_form) }}
{% endif %}
<fieldset>
    <legend>Informations générales</legend>
    <div class=\"form-row\">
        <div class=\"form-group col-md-2\">
            {{ form_row(encaissement_form.structure) }}
        </div>
        <div class=\"form-group col-md-3\">
            {{ form_label(encaissement_form.societes, \"Client\") }}
            {{ form_widget(encaissement_form.societes) }}
        </div>
        {% if source is not defined or source is defined and source == 'dossier' %}
            <div class=\"form-group col-md-2\">
                {{ form_row(encaissement_form.payeur) }}
            </div>
            <div class=\"form-group col-md-3\">
                {{ form_row(encaissement_form.opca) }}
            </div>
        {% endif %} 
        <div class=\"form-group col-md-2\">
            {{ form_row(encaissement_form.commercial) }}
        </div>
    </div>
</fieldset>

<div class=\"row\">
    <div class=\"col-md-4\">
       {# <fieldset>
            <legend>Sociétés</legend>
            {{ form_row(encaissement_form.societes) }}
        </fieldset>#}

        <fieldset>
            <legend class=\"d-flex justify-content-between\">
                <span>Factures / Avoirs</span>
            </legend>

            {# <div class=\"form-row\">
                <div class=\"form-group col-md-9\">
                    <select id=\"autocomplete-facture\" class=\"w-100\" ></select>
                </div>
                <div class=\"form-group col-md-3\">
                    <button class=\"btn btn-primary\" id=\"add-facture-avoir\">Ajouter</button>
                </div>
            </div> #}

            {% set num_facture_princ = null %}

            {% if facture_principale is defined %}

                {% if context is defined and context == 'dom/loc' %}
                    {% set num_facture_princ = facture_principale.numero %}
                {% else %}
                    {% set num_facture_princ = facture_principale.ref %}
                {% endif %}
            {% endif %}


            {%  include '/encaissement/_factures-avoirs.html.twig' with { 
                    facture : facture_principale is defined ? facture_principale : null,
                    context : context is defined ? context : \"\",
                    deletable : false
                }
            %}

            {% for facture in factures_liees %}
                {% if facture.ref != encaissement_infos.num_facture  and facture.ref != num_facture_princ %}
                    {%  include '/encaissement/_factures-avoirs.html.twig' with { facture : facture } %} 
                {% endif %}
            {% endfor %}

            {# Liste des factures et avoirs liés : à récupérer dynamiquement --> #}
            <div id=\"factures-wrapper\"></div>
            {# Liste des factures et avoirs liés <-- #}

        </fieldset>
    </div>
    <div class=\"col-md-8\">
        {% include 'encaissement/_details-factures-avoirs.html.twig' with { encaissement_form : encaissement_form, source : source is defined ? source : 'dossier' } %}
    </div>
</div>


<div class=\"row\">
    <div class=\"col-md-12\">
        {% include 'Common/commentaire-bloc.html.twig' with { prototype: encaissement_form.commentaires.vars.prototype, commentaires: encaissement_form.commentaires } %}
        {# pour empecher l'application d'afficher un bloc commentaire à la fin #}
        {% do encaissement_form.commentaires.setRendered %}
    </div>
</div>

<p class=\"text-center mt-3\">
    {% if is_granted('edit', 'Encaissements') %}
        <button class=\"btn btn-warning\" id=\"enc_submit_button\">{{ textButton }}</button>
    {% endif %}
</p>
{{ form_end(encaissement_form) }}", "encaissement/form_encaissement.html.twig", "/home/jeremy/Bureau/project/app/templates/encaissement/form_encaissement.html.twig");
    }
}
