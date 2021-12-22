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

/* formation/childs/stagiaires-block.html.twig */
class __TwigTemplate_44937db86af052a8ea3b381217d6df18ea0b9021ba8c6dc7dcfc07122232f14e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stagiaire_row' => [$this, 'block_stagiaire_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/stagiaires-block.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/stagiaires-block.html.twig"));

        // line 1
        echo "
<center>
    <input type=\"button\" class=\"btn btn-warning\" style=\"border-radius: 5%;\" id=\"add_stagiaire\" value=\"Ajouter un stagiaire\">
</center>
<table style=\"display: none\">
    <thead id=\"stagiaire_prototype\">
    ";
        // line 7
        $this->displayBlock('stagiaire_row', $context, $blocks);
        // line 53
        echo "    </thead>
</table>
<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm\">Nom</th>
        <th class=\"col-sm\">Prénom</th>
        <th class=\"col-sm\">Email</th>
        <th class=\"col-sm\">Date de naissance</th>
        <th class=\"col-sm\">Niveau d'etude</th>
        <th class=\"col-sm\">N° sécurité social</th>
        <th></th>
    </tr>
    </thead>
    <tbody id=\"stagiaires_collection\">
    ";
        // line 68
        $context["rowNum"] = 0;
        // line 69
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stagiaires"]) || array_key_exists("stagiaires", $context) ? $context["stagiaires"] : (function () { throw new RuntimeError('Variable "stagiaires" does not exist.', 69, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["stagiaire"]) {
            // line 70
            echo "    ";
            // line 71
            echo "    ";
            $context["indexRow"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71);
            // line 72
            echo "    ";
            $context["attributes"] = [];
            // line 73
            echo "        ";
            // line 78
            echo "    ";
            $context["prototype"] = $context["stagiaire"];
            // line 79
            echo "    ";
            $this->displayBlock("stagiaire_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stagiaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </tbody>
</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stagiaire_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stagiaire_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stagiaire_row"));

        // line 8
        echo "    ";
        if ( !(isset($context["indexRow"]) || array_key_exists("indexRow", $context))) {
            // line 9
            echo "    ";
            $context["indexRow"] = "__name__";
            // line 10
            echo "    ";
        }
        // line 11
        echo "    ";
        if ( !(isset($context["attributes"]) || array_key_exists("attributes", $context))) {
            // line 12
            echo "    ";
            $context["attributes"] = ["attr" => ["disabled" => true]];
            // line 13
            echo "    ";
        }
        // line 14
        echo "    ";
        if ( !(isset($context["email"]) || array_key_exists("email", $context))) {
            // line 15
            echo "    ";
            $context["email"] = "";
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    <tr class=\"row\" id=\"stagiaire_row-";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\">
        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 19, $this->source); })()));
        echo "
        <td class=\"col-sm\">
            ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 21, $this->source); })()), "nom", [], "any", false, false, false, 21), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 21, $this->source); })()));
        echo "
            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 22, $this->source); })()), "nom", [], "any", false, false, false, 22), 'errors');
        echo "
        </td>
        <td class=\"col-sm\">
            ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 25, $this->source); })()), "prenom", [], "any", false, false, false, 25), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 25, $this->source); })()));
        echo "
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), 'errors');
        echo "
        </td>
        <td class=\"col-sm\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 29, $this->source); })()), "Email", [], "any", false, false, false, 29), 'widget');
        echo "
            ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 30, $this->source); })()), "Email", [], "any", false, false, false, 30), 'errors');
        echo "
        </td>
        <td class=\"col-sm\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 33, $this->source); })()), "dateNaissance", [], "any", false, false, false, 33), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 33, $this->source); })()));
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 34, $this->source); })()), "dateNaissance", [], "any", false, false, false, 34), 'errors');
        echo "
        </td>
        <td class=\"col-sm\">
            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 37, $this->source); })()), "niveauetude", [], "any", false, false, false, 37), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 37, $this->source); })()));
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 38, $this->source); })()), "niveauetude", [], "any", false, false, false, 38), 'errors');
        echo "
        </td>
        <td class=\"col-sm\">
            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 41, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 41), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 41, $this->source); })()));
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 42, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 42), 'errors');
        echo "
        </td>
        <td>
            <div>
                <a href=\"javascript:void(0)\" class=\"delete-stagiaire\" title=\"Supprimer\" style=\"font-size: 140%;\" data-idrow=\"stagiaire_row-";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 46, $this->source); })()), "html", null, true);
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
        return "formation/childs/stagiaires-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 46,  237 => 42,  233 => 41,  227 => 38,  223 => 37,  217 => 34,  213 => 33,  207 => 30,  203 => 29,  197 => 26,  193 => 25,  187 => 22,  183 => 21,  178 => 19,  174 => 18,  171 => 17,  168 => 16,  165 => 15,  162 => 14,  159 => 13,  156 => 12,  153 => 11,  150 => 10,  147 => 9,  144 => 8,  134 => 7,  121 => 81,  104 => 79,  101 => 78,  99 => 73,  96 => 72,  93 => 71,  91 => 70,  73 => 69,  71 => 68,  54 => 53,  52 => 7,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<center>
    <input type=\"button\" class=\"btn btn-warning\" style=\"border-radius: 5%;\" id=\"add_stagiaire\" value=\"Ajouter un stagiaire\">
</center>
<table style=\"display: none\">
    <thead id=\"stagiaire_prototype\">
    {% block stagiaire_row %}
    {% if indexRow is not defined %}
    {% set indexRow = '__name__' %}
    {% endif %}
    {% if attributes is not defined %}
    {% set attributes = { 'attr': { 'disabled': true } } %}
    {% endif %}
    {% if email is not defined %}
    {% set email = ''  %}
    {% endif %}

    <tr class=\"row\" id=\"stagiaire_row-{{ indexRow }}\">
        {{ form_widget(prototype.id, attributes) }}
        <td class=\"col-sm\">
            {{ form_widget(prototype.nom, attributes) }}
            {{ form_errors(prototype.nom) }}
        </td>
        <td class=\"col-sm\">
            {{ form_widget(prototype.prenom, attributes) }}
            {{ form_errors(prototype.prenom) }}
        </td>
        <td class=\"col-sm\">
            {{ form_widget(prototype.Email) }}
            {{ form_errors(prototype.Email) }}
        </td>
        <td class=\"col-sm\">
            {{ form_widget(prototype.dateNaissance, attributes) }}
            {{ form_errors(prototype.dateNaissance) }}
        </td>
        <td class=\"col-sm\">
            {{ form_widget(prototype.niveauetude, attributes) }}
            {{ form_errors(prototype.niveauetude) }}
        </td>
        <td class=\"col-sm\">
            {{ form_widget(prototype.nsecuritesocial, attributes) }}
            {{ form_errors(prototype.nsecuritesocial) }}
        </td>
        <td>
            <div>
                <a href=\"javascript:void(0)\" class=\"delete-stagiaire\" title=\"Supprimer\" style=\"font-size: 140%;\" data-idrow=\"stagiaire_row-{{ indexRow }}\">
                    <i class=\"fas fa-trash-alt text-danger\"></i>
                </a>
            </div>
        </td>
    </tr>
    {% endblock %}
    </thead>
</table>
<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr class=\"row\">
        <th class=\"col-sm\">Nom</th>
        <th class=\"col-sm\">Prénom</th>
        <th class=\"col-sm\">Email</th>
        <th class=\"col-sm\">Date de naissance</th>
        <th class=\"col-sm\">Niveau d'etude</th>
        <th class=\"col-sm\">N° sécurité social</th>
        <th></th>
    </tr>
    </thead>
    <tbody id=\"stagiaires_collection\">
    {% set rowNum = 0 %}
    {% for stagiaire in stagiaires %}
    {# utiliser les info du stagiaires pour construire le bloc comment_row #}
    {% set indexRow = loop.index %}
    {% set attributes = {} %}
        {#{% if data is defined %}
        {% if indexRow <= data|length  %}
        {% set email = data[indexRow - 1].email %}
        {% endif %}
        {% endif %}#}
    {% set prototype = stagiaire %}
    {{ block('stagiaire_row') }}
    {% endfor %}
    </tbody>
</table>

", "formation/childs/stagiaires-block.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/stagiaires-block.html.twig");
    }
}
