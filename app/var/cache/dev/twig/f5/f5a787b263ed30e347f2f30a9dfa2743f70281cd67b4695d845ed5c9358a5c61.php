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

/* formation/childs/suiviom-bloc.html.twig */
class __TwigTemplate_5f77fcf8bd655a8d2574bfa4e7093bd7965496d3fbee2178abc5d9221bc4c243 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'suiviom_row' => [$this, 'block_suiviom_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/suiviom-bloc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/suiviom-bloc.html.twig"));

        // line 1
        echo "<div class=\"position-absolute plus-link\">
    <a href=\"javascript:void(0)\" id=\"add_suiviom\">
        <span class=\"fa-stack fa-1x\">
            <i class=\"fas fa-circle fa-stack-2x\"></i>
            <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
        </span>
    </a>
</div>

";
        // line 13
        echo "<table style=\"display: none\">
    <thead id=\"suiviom_prototype\">
        ";
        // line 15
        $this->displayBlock('suiviom_row', $context, $blocks);
        // line 66
        echo "    </thead>
</table>
<table class=\"table table-striped table-borderless col-sm-12\">
    <thead>
        <tr class=\"row\">
            <th class=\"col-sm text-center\">Réception facture</th>
            <th class=\"col-sm text-center\">Mois facture</th>
            <th class=\"col-sm text-center\">Heure fait</th>
            <th class=\"col-sm text-center\">Heure restant</th>
            <th class=\"col-sm text-center\">Date de la fature</th>
            <th class=\"col-sm text-center\">N° de la fature</th>
            <th class=\"col-sm text-center\">Montant HT</th>
            <th class=\"col-sm text-center\">Date validation</th>
            <th class=\"col-sm text-center\"> </th>
        </tr>
    </thead>
    <tbody id=\"suiviom_collection\">
        ";
        // line 83
        $context["rowNum"] = 0;
        // line 84
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suiviMissions"]) || array_key_exists("suiviMissions", $context) ? $context["suiviMissions"] : (function () { throw new RuntimeError('Variable "suiviMissions" does not exist.', 84, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["suiviom"]) {
            // line 85
            echo "            ";
            // line 86
            echo "            ";
            $context["indexRow"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 86);
            // line 87
            echo "            ";
            $context["attributes"] = [];
            // line 88
            echo "            ";
            $context["prototype"] = $context["suiviom"];
            // line 89
            echo "            ";
            $this->displayBlock("suiviom_row", $context, $blocks);
            echo "
        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['suiviom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "    </tbody>
</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_suiviom_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suiviom_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "suiviom_row"));

        // line 16
        echo "            ";
        if ( !(isset($context["indexRow"]) || array_key_exists("indexRow", $context))) {
            // line 17
            echo "                ";
            $context["indexRow"] = "__name__";
            // line 18
            echo "            ";
        }
        // line 19
        echo "            ";
        if ( !(isset($context["attributes"]) || array_key_exists("attributes", $context))) {
            // line 20
            echo "                ";
            $context["attributes"] = ["attr" => ["disabled" => true]];
            // line 21
            echo "            ";
        }
        // line 22
        echo "
            <tr class=\"row\" id=\"suiviom_row-";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 24, $this->source); })()));
        echo "
                <td class=\"col-sm row\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 26, $this->source); })()), "recepfac", [], "any", false, false, false, 26), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 26, $this->source); })()));
        echo "
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 27, $this->source); })()), "recepfac", [], "any", false, false, false, 27), 'errors');
        echo "
                </td>
                <td class=\"col-sm\">
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 30, $this->source); })()), "moisfac", [], "any", false, false, false, 30), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 30, $this->source); })()));
        echo "
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 31, $this->source); })()), "moisfac", [], "any", false, false, false, 31), 'errors');
        echo "
                </td>
                <td class=\"col-sm\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 34, $this->source); })()), "heurefait", [], "any", false, false, false, 34), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 34, $this->source); })()));
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 35, $this->source); })()), "heurefait", [], "any", false, false, false, 35), 'errors');
        echo "
                </td>
                <td class=\"col-sm\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 38, $this->source); })()), "heurerestant", [], "any", false, false, false, 38), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 38, $this->source); })()));
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 39, $this->source); })()), "heurerestant", [], "any", false, false, false, 39), 'errors');
        echo "
                </td>
                <td class=\"col-sm\">
                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 42, $this->source); })()), "datefac", [], "any", false, false, false, 42), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 42, $this->source); })()));
        echo "
                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 43, $this->source); })()), "datefac", [], "any", false, false, false, 43), 'errors');
        echo "
                </td>
                <td class=\"col-sm\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 46, $this->source); })()), "numfac", [], "any", false, false, false, 46), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 46, $this->source); })()));
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 47, $this->source); })()), "numfac", [], "any", false, false, false, 47), 'errors');
        echo "
                </td>
                <td class=\"col-sm\">
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 50, $this->source); })()), "montantht", [], "any", false, false, false, 50), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 50, $this->source); })()));
        echo "
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 51, $this->source); })()), "montantht", [], "any", false, false, false, 51), 'errors');
        echo "
                </td>
                <td class=\"col-sm\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 54, $this->source); })()), "datevalidation", [], "any", false, false, false, 54), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 54, $this->source); })()));
        echo "
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 55, $this->source); })()), "datevalidation", [], "any", false, false, false, 55), 'errors');
        echo "
                </td>
                <td>
                    <div>
                        <a href=\"javascript:void(0)\" class=\"delete-suiviom\" title=\"Supprimer\" style=\"font-size: 140%;\" data-idrow=\"suiviom_row-";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </div>
                </td>
            </tr>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formation/childs/suiviom-bloc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 59,  255 => 55,  251 => 54,  245 => 51,  241 => 50,  235 => 47,  231 => 46,  225 => 43,  221 => 42,  215 => 39,  211 => 38,  205 => 35,  201 => 34,  195 => 31,  191 => 30,  185 => 27,  181 => 26,  176 => 24,  172 => 23,  169 => 22,  166 => 21,  163 => 20,  160 => 19,  157 => 18,  154 => 17,  151 => 16,  141 => 15,  128 => 91,  111 => 89,  108 => 88,  105 => 87,  102 => 86,  100 => 85,  82 => 84,  80 => 83,  61 => 66,  59 => 15,  55 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"position-absolute plus-link\">
    <a href=\"javascript:void(0)\" id=\"add_suiviom\">
        <span class=\"fa-stack fa-1x\">
            <i class=\"fas fa-circle fa-stack-2x\"></i>
            <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
        </span>
    </a>
</div>

{#<center>
    <input type=\"button\" class=\"btn btn-warning no-disabled\" style=\"border-radius: 5%;\" id=\"add_suiviom\" value=\"Ajouter un suivi OM\">
</center>#}
<table style=\"display: none\">
    <thead id=\"suiviom_prototype\">
        {% block suiviom_row %}
            {% if indexRow is not defined %}
                {% set indexRow = '__name__' %}
            {% endif %}
            {% if attributes is not defined %}
                {% set attributes = { 'attr': { 'disabled': true } } %}
            {% endif %}

            <tr class=\"row\" id=\"suiviom_row-{{ indexRow }}\">
                {{ form_widget(prototype.id, attributes) }}
                <td class=\"col-sm row\">
                    {{ form_widget(prototype.recepfac, attributes) }}
                    {{ form_errors(prototype.recepfac) }}
                </td>
                <td class=\"col-sm\">
                    {{ form_widget(prototype.moisfac, attributes) }}
                    {{ form_errors(prototype.moisfac) }}
                </td>
                <td class=\"col-sm\">
                    {{ form_widget(prototype.heurefait, attributes) }}
                    {{ form_errors(prototype.heurefait) }}
                </td>
                <td class=\"col-sm\">
                    {{ form_widget(prototype.heurerestant, attributes) }}
                    {{ form_errors(prototype.heurerestant) }}
                </td>
                <td class=\"col-sm\">
                    {{ form_widget(prototype.datefac, attributes) }}
                    {{ form_errors(prototype.datefac) }}
                </td>
                <td class=\"col-sm\">
                    {{ form_widget(prototype.numfac, attributes) }}
                    {{ form_errors(prototype.numfac) }}
                </td>
                <td class=\"col-sm\">
                    {{ form_widget(prototype.montantht, attributes) }}
                    {{ form_errors(prototype.montantht) }}
                </td>
                <td class=\"col-sm\">
                    {{ form_widget(prototype.datevalidation, attributes) }}
                    {{ form_errors(prototype.datevalidation) }}
                </td>
                <td>
                    <div>
                        <a href=\"javascript:void(0)\" class=\"delete-suiviom\" title=\"Supprimer\" style=\"font-size: 140%;\" data-idrow=\"suiviom_row-{{ indexRow }}\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </div>
                </td>
            </tr>
        {% endblock %}
    </thead>
</table>
<table class=\"table table-striped table-borderless col-sm-12\">
    <thead>
        <tr class=\"row\">
            <th class=\"col-sm text-center\">Réception facture</th>
            <th class=\"col-sm text-center\">Mois facture</th>
            <th class=\"col-sm text-center\">Heure fait</th>
            <th class=\"col-sm text-center\">Heure restant</th>
            <th class=\"col-sm text-center\">Date de la fature</th>
            <th class=\"col-sm text-center\">N° de la fature</th>
            <th class=\"col-sm text-center\">Montant HT</th>
            <th class=\"col-sm text-center\">Date validation</th>
            <th class=\"col-sm text-center\"> </th>
        </tr>
    </thead>
    <tbody id=\"suiviom_collection\">
        {% set rowNum = 0 %}
        {% for suiviom in suiviMissions %}
            {# utiliser les info du stagiaires pour construire le bloc suiviom_row #}
            {% set indexRow = loop.index %}
            {% set attributes = {} %}
            {% set prototype = suiviom %}
            {{ block('suiviom_row') }}
        {% endfor %}
    </tbody>
</table>

", "formation/childs/suiviom-bloc.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/suiviom-bloc.html.twig");
    }
}
