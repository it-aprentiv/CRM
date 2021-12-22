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

/* utilisateur/_user-form.html.twig */
class __TwigTemplate_a5dafa704297af1c56e97dfe965cc7ea26d5ee44b2ef17e519f440012f5916fc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_user-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/_user-form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "user-form"]]);
        echo "

    <fieldset>
        <legend>Informations utilisateur</legend>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 7, $this->source); })()), "nomutilisateur", [], "any", false, false, false, 7), 'label', ["label" => "Nom"]);
        echo "
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 8, $this->source); })()), "nomutilisateur", [], "any", false, false, false, 8), 'widget');
        echo "
            </div>
            <div class=\"form-group col-md-4\">
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 11, $this->source); })()), "username", [], "any", false, false, false, 11), 'label', ["label" => "Prénom(s)"]);
        echo "
                ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 12, $this->source); })()), "username", [], "any", false, false, false, 12), 'widget');
        echo "
            </div>
            <div class=\"form-group col-md-4\">
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 15, $this->source); })()), "newPassword", [], "any", false, false, false, 15), 'label', ["label" => "Mot de passe"]);
        echo "
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 16, $this->source); })()), "newPassword", [], "any", false, false, false, 16), 'widget');
        echo "
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 22, $this->source); })()), "isAdmin", [], "any", false, false, false, 22), 'label', ["label" => "Est admin ?"]);
        echo "
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 23, $this->source); })()), "isAdmin", [], "any", false, false, false, 23), 'widget');
        echo "
            </div>
            <div class=\"form-group col-md-6\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 26, $this->source); })()), "poste", [], "any", false, false, false, 26), 'label', ["label" => "Poste"]);
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 27, $this->source); })()), "poste", [], "any", false, false, false, 27), 'widget');
        echo "
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>Gestion des droits d'accès aux menus</legend>
        <div class=\"form-row\">
            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 36
            echo "                <div class=\"form-group col-md-3\">
                    <strong>";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 37, $this->source); })()), ("menu" . twig_get_attribute($this->env, $this->source, $context["menu"], "idmenu", [], "any", false, false, false, 37)), [], "array", false, false, false, 37), 'label');
            echo "</strong>
                    ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 38, $this->source); })()), ("menu" . twig_get_attribute($this->env, $this->source, $context["menu"], "idmenu", [], "any", false, false, false, 38)), [], "array", false, false, false, 38), 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "        </div>
    </fieldset>
";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/_user-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 43,  130 => 41,  121 => 38,  117 => 37,  114 => 36,  110 => 35,  99 => 27,  95 => 26,  89 => 23,  85 => 22,  76 => 16,  72 => 15,  66 => 12,  62 => 11,  56 => 8,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(user_form, { attr : {id : 'user-form'} }) }}

    <fieldset>
        <legend>Informations utilisateur</legend>
        <div class=\"form-row\">
            <div class=\"form-group col-md-4\">
                {{ form_label(user_form.nomutilisateur, 'Nom') }}
                {{ form_widget(user_form.nomutilisateur) }}
            </div>
            <div class=\"form-group col-md-4\">
                {{ form_label(user_form.username, 'Prénom(s)') }}
                {{ form_widget(user_form.username) }}
            </div>
            <div class=\"form-group col-md-4\">
                {{ form_label(user_form.newPassword, 'Mot de passe') }}
                {{ form_widget(user_form.newPassword) }}
            </div>
        </div>

        <div class=\"form-row\">
            <div class=\"form-group col-md-6\">
                {{ form_label(user_form.isAdmin, 'Est admin ?') }}
                {{ form_widget(user_form.isAdmin) }}
            </div>
            <div class=\"form-group col-md-6\">
                {{ form_label(user_form.poste, 'Poste') }}
                {{ form_widget(user_form.poste) }}
            </div>
        </div>
    </fieldset>

    <fieldset>
        <legend>Gestion des droits d'accès aux menus</legend>
        <div class=\"form-row\">
            {% for menu in menus %}
                <div class=\"form-group col-md-3\">
                    <strong>{{ form_label(user_form['menu' ~ menu.idmenu]) }}</strong>
                    {{ form_widget(user_form['menu' ~ menu.idmenu]) }}
                </div>
            {% endfor %}
        </div>
    </fieldset>
{{ form_end(user_form) }}
", "utilisateur/_user-form.html.twig", "/var/www/templates/utilisateur/_user-form.html.twig");
    }
}
