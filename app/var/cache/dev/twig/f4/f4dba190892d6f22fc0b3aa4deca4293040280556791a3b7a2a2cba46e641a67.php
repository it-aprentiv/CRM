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

/* Common/commentaire-bloc.html.twig */
class __TwigTemplate_5ac8d791235cb6a9244543d6d06facf381d44f608160f3c6b7f53d374f1360ce extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/commentaire-bloc.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/commentaire-bloc.html.twig"));

        // line 1
        echo "<fieldset class=\"position-relative col-md-12\">
    <legend>Commentaires</legend>
    <div class=\"position-absolute plus-link\">
        <a href=\"javascript:void(0)\" id=\"btnajoutcom\">
            <span class=\"fa-stack fa-1x\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
            </span>
        </a>
    </div>
    <table style=\"display: none\">
        <thead id=\"commentaire_prototype\">
            ";
        // line 13
        $this->displayBlock('comment_row', $context, $blocks);
        // line 65
        echo "        </thead>
    </table>
    <table class=\"table table-striped table-borderless col-sm-12 mt-3\">
        <thead>
            <tr class=\"row\">
                <th class=\"col-sm\">Date création</th>
                <th class=\"col-sm\">Commentaires</th>
                ";
        // line 72
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 72, $this->source); })()), "idAction", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "disabled", [], "any", false, false, false, 72)) {
            // line 73
            echo "                <th class=\"col-sm\">Action</th>
                ";
        }
        // line 75
        echo "                <th class=\"col-sm\">Date Action</th>
                ";
        // line 76
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 76, $this->source); })()), "idUserAction", [], "any", false, false, false, 76), "vars", [], "any", false, false, false, 76), "disabled", [], "any", false, false, false, 76)) {
            // line 77
            echo "                <th class=\"col-sm\">Qui</th>
                ";
        }
        // line 79
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 79, $this->source); })()), "idActionStatut", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "disabled", [], "any", false, false, false, 79)) {
            // line 80
            echo "                <th class=\"col-sm\">Statut action</th>
                ";
        }
        // line 82
        echo "                <th></th>
            </tr>
        </thead>
        <tbody id=\"commentaires_collection\">
            ";
        // line 86
        $context["rowNum"] = 0;
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commentaires"]) || array_key_exists("commentaires", $context) ? $context["commentaires"] : (function () { throw new RuntimeError('Variable "commentaires" does not exist.', 87, $this->source); })()));
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
            // line 88
            echo "                ";
            // line 89
            echo "                ";
            $context["indexRow"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 89);
            // line 90
            echo "                ";
            $context["attributes"] = [];
            // line 91
            echo "                ";
            $context["prototype"] = $context["commentaire"];
            // line 92
            echo "                ";
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
        // line 94
        echo "        </tbody>
    </table>
</fieldset>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function block_comment_row($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comment_row"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "comment_row"));

        // line 14
        echo "                ";
        if ( !(isset($context["indexRow"]) || array_key_exists("indexRow", $context))) {
            // line 15
            echo "                    ";
            $context["indexRow"] = "__name__";
            // line 16
            echo "                ";
        }
        // line 17
        echo "                ";
        if ( !(isset($context["attributes"]) || array_key_exists("attributes", $context))) {
            // line 18
            echo "                    ";
            $context["attributes"] = ["attr" => ["disabled" => true]];
            // line 19
            echo "                ";
        }
        // line 20
        echo "                <tr class=\"row\" id=\"commentaire_row-";
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 21, $this->source); })()));
        echo "
                    <td class=\"col-sm\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 23, $this->source); })()), "dateAdd", [], "any", false, false, false, 23), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 23, $this->source); })()));
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 24, $this->source); })()), "dateAdd", [], "any", false, false, false, 24), 'errors');
        echo "
                    </td>
                    <td class=\"col-sm\">
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 27, $this->source); })()), "texteNote", [], "any", false, false, false, 27), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 27, $this->source); })()));
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 28, $this->source); })()), "texteNote", [], "any", false, false, false, 28), 'errors');
        echo "
                    </td>
                    ";
        // line 30
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 30, $this->source); })()), "idAction", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "disabled", [], "any", false, false, false, 30)) {
            // line 31
            echo "                    <td class=\"col-sm\">
                        ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 32, $this->source); })()), "idAction", [], "any", false, false, false, 32), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 32, $this->source); })()));
            echo "
                        ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 33, $this->source); })()), "idAction", [], "any", false, false, false, 33), 'errors');
            echo "
                    </td>
                    ";
        }
        // line 36
        echo "                    <td class=\"col-sm\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 37, $this->source); })()), "dateAction", [], "any", false, false, false, 37), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 37, $this->source); })()));
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 38, $this->source); })()), "dateAction", [], "any", false, false, false, 38), 'errors');
        echo "
                    </td>
                    ";
        // line 40
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 40, $this->source); })()), "idUserAction", [], "any", false, false, false, 40), "vars", [], "any", false, false, false, 40), "disabled", [], "any", false, false, false, 40)) {
            // line 41
            echo "                    <td class=\"col-sm\">
                        ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 42, $this->source); })()), "idUserAction", [], "any", false, false, false, 42), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 42, $this->source); })()));
            echo "
                        ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 43, $this->source); })()), "idUserAction", [], "any", false, false, false, 43), 'errors');
            echo "
                    </td>
                    ";
        }
        // line 46
        echo "                    ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 46, $this->source); })()), "idActionStatut", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "disabled", [], "any", false, false, false, 46)) {
            // line 47
            echo "                    <td class=\"col-sm\">
                        ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 48, $this->source); })()), "idActionStatut", [], "any", false, false, false, 48), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 48, $this->source); })()));
            echo "
                        ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 49, $this->source); })()), "idActionStatut", [], "any", false, false, false, 49), 'errors');
            echo "
                    </td>
                    ";
        }
        // line 52
        echo "                     <td class=\"col-sm d-none\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 53, $this->source); })()), "idUserAdd", [], "any", false, false, false, 53), 'widget', (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 53, $this->source); })()));
        echo "
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 54, $this->source); })()), "idUserAdd", [], "any", false, false, false, 54), 'errors');
        echo "
                    </td>
                    <td>
                        <div>
                            <a href=\"javascript:void(0)\" class=\"delete-comment fa-2x\" title=\"Supprimer\" data-idrow=\"commentaire_row-";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["indexRow"]) || array_key_exists("indexRow", $context) ? $context["indexRow"] : (function () { throw new RuntimeError('Variable "indexRow" does not exist.', 58, $this->source); })()), "html", null, true);
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
        return "Common/commentaire-bloc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 58,  280 => 54,  276 => 53,  273 => 52,  267 => 49,  263 => 48,  260 => 47,  257 => 46,  251 => 43,  247 => 42,  244 => 41,  242 => 40,  237 => 38,  233 => 37,  230 => 36,  224 => 33,  220 => 32,  217 => 31,  215 => 30,  210 => 28,  206 => 27,  200 => 24,  196 => 23,  191 => 21,  186 => 20,  183 => 19,  180 => 18,  177 => 17,  174 => 16,  171 => 15,  168 => 14,  158 => 13,  145 => 94,  128 => 92,  125 => 91,  122 => 90,  119 => 89,  117 => 88,  99 => 87,  97 => 86,  91 => 82,  87 => 80,  84 => 79,  80 => 77,  78 => 76,  75 => 75,  71 => 73,  69 => 72,  60 => 65,  58 => 13,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"position-relative col-md-12\">
    <legend>Commentaires</legend>
    <div class=\"position-absolute plus-link\">
        <a href=\"javascript:void(0)\" id=\"btnajoutcom\">
            <span class=\"fa-stack fa-1x\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
            </span>
        </a>
    </div>
    <table style=\"display: none\">
        <thead id=\"commentaire_prototype\">
            {% block comment_row %}
                {% if indexRow is not defined %}
                    {% set indexRow = '__name__' %}
                {% endif %}
                {% if attributes is not defined %}
                    {% set attributes = { 'attr': { 'disabled': true } } %}
                {% endif %}
                <tr class=\"row\" id=\"commentaire_row-{{ indexRow }}\">
                    {{ form_widget(prototype.id, attributes) }}
                    <td class=\"col-sm\">
                        {{ form_widget(prototype.dateAdd, attributes) }}
                        {{ form_errors(prototype.dateAdd) }}
                    </td>
                    <td class=\"col-sm\">
                        {{ form_widget(prototype.texteNote, attributes) }}
                        {{ form_errors(prototype.texteNote) }}
                    </td>
                    {% if not prototype.idAction.vars.disabled %}
                    <td class=\"col-sm\">
                        {{ form_widget(prototype.idAction, attributes) }}
                        {{ form_errors(prototype.idAction) }}
                    </td>
                    {% endif %}
                    <td class=\"col-sm\">
                        {{ form_widget(prototype.dateAction, attributes) }}
                        {{ form_errors(prototype.dateAction) }}
                    </td>
                    {% if not prototype.idUserAction.vars.disabled %}
                    <td class=\"col-sm\">
                        {{ form_widget(prototype.idUserAction, attributes) }}
                        {{ form_errors(prototype.idUserAction) }}
                    </td>
                    {% endif %}
                    {% if not prototype.idActionStatut.vars.disabled %}
                    <td class=\"col-sm\">
                        {{ form_widget(prototype.idActionStatut, attributes) }}
                        {{ form_errors(prototype.idActionStatut) }}
                    </td>
                    {% endif %}
                     <td class=\"col-sm d-none\">
                        {{ form_widget(prototype.idUserAdd, attributes) }}
                        {{ form_errors(prototype.idUserAdd) }}
                    </td>
                    <td>
                        <div>
                            <a href=\"javascript:void(0)\" class=\"delete-comment fa-2x\" title=\"Supprimer\" data-idrow=\"commentaire_row-{{ indexRow }}\">
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
                <th class=\"col-sm\">Date création</th>
                <th class=\"col-sm\">Commentaires</th>
                {% if not prototype.idAction.vars.disabled %}
                <th class=\"col-sm\">Action</th>
                {% endif %}
                <th class=\"col-sm\">Date Action</th>
                {% if not prototype.idUserAction.vars.disabled %}
                <th class=\"col-sm\">Qui</th>
                {% endif %}
                {% if not prototype.idActionStatut.vars.disabled %}
                <th class=\"col-sm\">Statut action</th>
                {% endif %}
                <th></th>
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
</fieldset>
", "Common/commentaire-bloc.html.twig", "/var/www/templates/Common/commentaire-bloc.html.twig");
    }
}
