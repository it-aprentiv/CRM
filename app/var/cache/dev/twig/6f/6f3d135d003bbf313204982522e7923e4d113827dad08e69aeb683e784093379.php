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

/* Common/facture_commentaires.html.twig */
class __TwigTemplate_6c35e09de91e32b4c649a7b831131082187089d8df2e27be386c2d4b75be534a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'comment_row' => [$this, 'block_comment_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/facture_commentaires.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/facture_commentaires.html.twig"));

        // line 1
        echo "<center>
    <input type=\"button\" class=\"btn btn-warning\" style=\"border-radius: 5%;\" id=\"btnajoutcom\" value=\"Ajouter un commentaire\">
</center>
<table style=\"display: none\">
    <thead id=\"commentaire_prototype\">
    ";
        // line 6
        $this->displayBlock('comment_row', $context, $blocks);
        // line 48
        echo "    </thead>
</table>
<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
    <thead>
    <tr>
        <th>Date création</th>
        <th>Commentaires</th>
        <th>Action</th>
        <th>Date Action</th>
        <th>Qui</th>
        <th>Statut action</th>
        <th style=\"width: 5%;\"></th>
    </tr>
    </thead>
    <tbody id=\"commentaires_collection\">
    ";
        // line 63
        $context["rowNum"] = 0;
        // line 64
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 64, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 65
            echo "        ";
            // line 66
            echo "        ";
            $context["indexRow"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 66);
            // line 67
            echo "        ";
            $context["attributes"] = [];
            // line 68
            echo "        ";
            $context["prototype"] = $context["commentaire"];
            // line 69
            echo "        ";
            $this->displayBlock("comment_row", $context, $blocks);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "    </tbody>
</table>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_comment_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comment_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comment_row"));

        // line 7
        echo "        ";
        if ( !(isset($context["indexRow"]) || array_key_exists("indexRow", $context))) {
            // line 8
            echo "            ";
            $context["indexRow"] = "__name__";
            // line 9
            echo "        ";
        }
        // line 10
        echo "        ";
        if ( !(isset($context["attributes"]) || array_key_exists("attributes", $context))) {
            // line 11
            echo "            ";
            $context["attributes"] = ["attr" => ["disabled" => true]];
            // line 12
            echo "        ";
        }
        // line 13
        echo "        <tr id=\"commentaire_row-";
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 14, $this->source); })()));
        echo "
            <td >
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 16, $this->source); })()), "dateAdd", [], "any", false, false, false, 16), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 16, $this->source); })()));
        echo "
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 17, $this->source); })()), "dateAdd", [], "any", false, false, false, 17), 'errors');
        echo "
            </td>
            <td >
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 20, $this->source); })()), "texteNote", [], "any", false, false, false, 20), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 20, $this->source); })()));
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 21, $this->source); })()), "texteNote", [], "any", false, false, false, 21), 'errors');
        echo "
            </td>
            <td >
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 24, $this->source); })()), "idAction", [], "any", false, false, false, 24), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 24, $this->source); })()));
        echo "
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 25, $this->source); })()), "idAction", [], "any", false, false, false, 25), 'errors');
        echo "
            </td>
            <td >
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 28, $this->source); })()), "dateAction", [], "any", false, false, false, 28), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 28, $this->source); })()));
        echo "
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 29, $this->source); })()), "dateAction", [], "any", false, false, false, 29), 'errors');
        echo "
            </td>
            <td>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 32, $this->source); })()), "idUserAction", [], "any", false, false, false, 32), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 32, $this->source); })()));
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 33, $this->source); })()), "idUserAction", [], "any", false, false, false, 33), 'errors');
        echo "
            </td>
            <td >
                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 36, $this->source); })()), "idActionStatut", [], "any", false, false, false, 36), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 36, $this->source); })()));
        echo "
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 37, $this->source); })()), "idActionStatut", [], "any", false, false, false, 37), 'errors');
        echo "
            </td>
            <td>
                <div>
                    <a href=\"javascript:void(0)\" class=\"delete-comment\" title=\"Supprimer\" style=\"font-size: 140%;\" data-idrow=\"commentaire_row-";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 41, $this->source); })()), "html", null, true);
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
        return "Common/facture_commentaires.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 41,  223 => 37,  219 => 36,  213 => 33,  209 => 32,  203 => 29,  199 => 28,  193 => 25,  189 => 24,  183 => 21,  179 => 20,  173 => 17,  169 => 16,  164 => 14,  159 => 13,  156 => 12,  153 => 11,  150 => 10,  147 => 9,  144 => 8,  141 => 7,  131 => 6,  118 => 71,  101 => 69,  98 => 68,  95 => 67,  92 => 66,  90 => 65,  72 => 64,  70 => 63,  53 => 48,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<center>
    <input type=\"button\" class=\"btn btn-warning\" style=\"border-radius: 5%;\" id=\"btnajoutcom\" value=\"Ajouter un commentaire\">
</center>
<table style=\"display: none\">
    <thead id=\"commentaire_prototype\">
    {% block comment_row %}
        {% if indexRow is not defined %}
            {% set indexRow = '__name__' %}
        {% endif %}
        {% if attributes is not defined %}
            {% set attributes = { 'attr': { 'disabled': true } } %}
        {% endif %}
        <tr id=\"commentaire_row-{{ indexRow }}\">
            {{ form_widget(prototype.id, attributes) }}
            <td >
                {{ form_widget(prototype.dateAdd, attributes) }}
                {{ form_errors(prototype.dateAdd) }}
            </td>
            <td >
                {{ form_widget(prototype.texteNote, attributes) }}
                {{ form_errors(prototype.texteNote) }}
            </td>
            <td >
                {{ form_widget(prototype.idAction, attributes) }}
                {{ form_errors(prototype.idAction) }}
            </td>
            <td >
                {{ form_widget(prototype.dateAction, attributes) }}
                {{ form_errors(prototype.dateAction) }}
            </td>
            <td>
                {{ form_widget(prototype.idUserAction, attributes) }}
                {{ form_errors(prototype.idUserAction) }}
            </td>
            <td >
                {{ form_widget(prototype.idActionStatut, attributes) }}
                {{ form_errors(prototype.idActionStatut) }}
            </td>
            <td>
                <div>
                    <a href=\"javascript:void(0)\" class=\"delete-comment\" title=\"Supprimer\" style=\"font-size: 140%;\" data-idrow=\"commentaire_row-{{ indexRow }}\">
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
    <tr>
        <th>Date création</th>
        <th>Commentaires</th>
        <th>Action</th>
        <th>Date Action</th>
        <th>Qui</th>
        <th>Statut action</th>
        <th style=\"width: 5%;\"></th>
    </tr>
    </thead>
    <tbody id=\"commentaires_collection\">
    {% set rowNum = 0 %}
    {% for commentaire in commentaires %}
        {# utiliser les info du commentaire pour construire le bloc comment_row #}
        {% set indexRow = loop.index %}
        {% set attributes = {} %}
        {% set prototype = commentaire %}
        {{ block('comment_row') }}
    {% endfor %}
    </tbody>
</table>

", "Common/facture_commentaires.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/facture_commentaires.html.twig");
    }
}
