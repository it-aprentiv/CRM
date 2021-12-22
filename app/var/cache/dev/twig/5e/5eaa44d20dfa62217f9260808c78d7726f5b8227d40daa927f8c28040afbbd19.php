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

/* utilisateur/view.html.twig */
class __TwigTemplate_76c1fddfff14ef4961eb6b92eac82b5bc7b258cd8ec1306903b29a375a9a33fe extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "PROFIL UTILISATEUR";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>

            ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "droit", [], "any", false, false, false, 10) == "superadmin")) {
            // line 11
            echo "                <li class=\"breadcrumb-item active\">
                    <a href=\"";
            // line 12
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome/Liste_utilisateur");
            echo "\">
                        Liste des utilisateurs
                    </a>
                </li>
            ";
        }
        // line 17
        echo "            <li class=\"breadcrumb-item active\" aria-current=\"page\">Profil</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">PROFIL UTILISATEUR</h2>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-md-6\">
            ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 24, $this->source); })()), 'form_start');
        echo "
            <div class=\"form-group\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 26, $this->source); })()), "nomutilisateur", [], "any", false, false, false, 26), 'label', ["label" => "Nom"]);
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 27, $this->source); })()), "nomutilisateur", [], "any", false, false, false, 27), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), 'label');
        echo "
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), 'widget');
        echo "
            </div>
            <div class=\"form-group\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 34, $this->source); })()), "newPassword", [], "any", false, false, false, 34), 'label', ["label" => "Saisir nouveau mot de passe"]);
        echo "
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 35, $this->source); })()), "newPassword", [], "any", false, false, false, 35), 'widget');
        echo "
            </div>
            
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
            </div>
            ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["user_form"]) || array_key_exists("user_form", $context) ? $context["user_form"] : (function () { throw new RuntimeError('Variable "user_form" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 41,  148 => 35,  144 => 34,  138 => 31,  134 => 30,  128 => 27,  124 => 26,  119 => 24,  110 => 17,  102 => 12,  99 => 11,  97 => 10,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}PROFIL UTILISATEUR{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>

            {% if app.user.droit == 'superadmin' %}
                <li class=\"breadcrumb-item active\">
                    <a href=\"{{ path('welcome/Liste_utilisateur') }}\">
                        Liste des utilisateurs
                    </a>
                </li>
            {% endif %}
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Profil</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">PROFIL UTILISATEUR</h2>
    <div class=\"row d-flex justify-content-center\">
        <div class=\"col-md-6\">
            {{ form_start(user_form) }}
            <div class=\"form-group\">
                {{ form_label(user_form.nomutilisateur, 'Nom') }}
                {{ form_widget(user_form.nomutilisateur) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(user_form.username) }}
                {{ form_widget(user_form.username) }}
            </div>
            <div class=\"form-group\">
                {{ form_label(user_form.newPassword, 'Saisir nouveau mot de passe') }}
                {{ form_widget(user_form.newPassword) }}
            </div>
            
            <div class=\"text-center\">
                <button type=\"submit\" class=\"btn btn-info\">Mettre à jour</button>
            </div>
            {{ form_end(user_form) }}
        </div>
    </div>
{% endblock %}
", "utilisateur/view.html.twig", "/var/www/templates/utilisateur/view.html.twig");
    }
}
