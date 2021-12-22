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

/* security/login.html.twig */
class __TwigTemplate_445b361f322220d6496de03ad860d065b3b7a5ed2892f526d8d41ed563d73e74 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Authentification - CRM Aprentiv";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <div id=\"login\">
        <h2 class=\"text-center text-white pt-5\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/aprentiv-logo.png"), "html", null, true);
        echo "\" alt=\"CRM Aprentiv\"/>
            C.R.M
        </h2>
        <div class=\"container\">
            <div id=\"login-row\" class=\"row justify-content-center align-items-center\">
                <div id=\"login-column\" class=\"col-md-6\">
                    <div class=\"col-md-12\">
                        <form id=\"login-form\" class=\"form\" action=\"\" method=\"post\">
                            <div class=\"card\">
                                <div class=\"card-header card-header-dark\">
                                    <h3 class=\"text-center text-white\">AUTHENTIFICATION - CRM</h3>
                                </div>
                                <br>
                                <div class=\"row vdivide\">
                                    <div class=\"col-md-5\">
                                        <img id=\"cle-img\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/authentification_cle.png"), "html", null, true);
        echo "\" alt=\"login\"/>
                                    </div>
                                    <div class=\"col-md-7 no-disabled\">
                                        <div class=\"card-body\">
                                            ";
        // line 32
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })())) {
            // line 33
            echo "                                                <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })()), "messageKey", [], "any", false, false, false, 33), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 33, $this->source); })()), "messageData", [], "any", false, false, false, 33), "security"), "html", null, true);
            echo "</div>
                                            ";
        }
        // line 35
        echo "                                            <div class=\"form-group\">
                                                <label for=\"username\" class=\"text-theme-dark\">Nom d'utilisateur </label><br>
                                                <input type=\"text\" name=\"username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "\" id=\"username\" class=\"form-control\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"password\" class=\"text-theme-dark\">Mot de passe</label><br>
                                                <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group text-center\">
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                                                <input type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-theme-primary btn-md\" value=\"Se connecter\">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

        <div class=\"fixed-bottom door-footer\"></div>
        <img id=\"door-img\" src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("crm/images/authentification-porte.png"), "html", null, true);
        echo "\" class=\"fixed-bottom\" alt=\"door\"/>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 62,  161 => 44,  151 => 37,  147 => 35,  141 => 33,  139 => 32,  132 => 28,  114 => 13,  109 => 10,  99 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Authentification - CRM Aprentiv{% endblock %}

{% block header %}
    {# Pas de header dans page login  #}
{% endblock %}

{% block body %}

    <div id=\"login\">
        <h2 class=\"text-center text-white pt-5\">
            <img src=\"{{ asset('crm/images/aprentiv-logo.png') }}\" alt=\"CRM Aprentiv\"/>
            C.R.M
        </h2>
        <div class=\"container\">
            <div id=\"login-row\" class=\"row justify-content-center align-items-center\">
                <div id=\"login-column\" class=\"col-md-6\">
                    <div class=\"col-md-12\">
                        <form id=\"login-form\" class=\"form\" action=\"\" method=\"post\">
                            <div class=\"card\">
                                <div class=\"card-header card-header-dark\">
                                    <h3 class=\"text-center text-white\">AUTHENTIFICATION - CRM</h3>
                                </div>
                                <br>
                                <div class=\"row vdivide\">
                                    <div class=\"col-md-5\">
                                        <img id=\"cle-img\" src=\"{{ asset('crm/images/authentification_cle.png') }}\" alt=\"login\"/>
                                    </div>
                                    <div class=\"col-md-7 no-disabled\">
                                        <div class=\"card-body\">
                                            {% if error %}
                                                <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
                                            {% endif %}
                                            <div class=\"form-group\">
                                                <label for=\"username\" class=\"text-theme-dark\">Nom d'utilisateur </label><br>
                                                <input type=\"text\" name=\"username\" value=\"{{ last_username }}\" id=\"username\" class=\"form-control\" autocomplete=\"off\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label for=\"password\" class=\"text-theme-dark\">Mot de passe</label><br>
                                                <input type=\"password\" name=\"password\" id=\"password\" class=\"form-control\">
                                            </div>
                                            <div class=\"form-group text-center\">
                                                <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
                                                <input type=\"submit\" name=\"submit\" class=\"btn btn-primary btn-theme-primary btn-md\" value=\"Se connecter\">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>

        <div class=\"fixed-bottom door-footer\"></div>
        <img id=\"door-img\" src=\"{{ asset('crm/images/authentification-porte.png') }}\" class=\"fixed-bottom\" alt=\"door\"/>
    </div>

{% endblock %}
", "security/login.html.twig", "/var/www/templates/security/login.html.twig");
    }
}
