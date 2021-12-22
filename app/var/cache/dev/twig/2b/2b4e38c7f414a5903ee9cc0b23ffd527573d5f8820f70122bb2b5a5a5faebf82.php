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

/* home/index.html.twig */
class __TwigTemplate_385541dd4e72146e34d1a2228416417e3602add6b135889c22fefa106b416169 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        echo "Menu - CRM Aprentiv v2.0";
        
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
        echo "
    <div class=\"row\">
        <div class=\"col-md-2\">
        </div>
        <div class=\"col-md-4 mt-3 \">
            <div class=\"card m-t-3 card-menu\">
                <div class=\"card-header\">
                    <h3 class=\"text-well\">GESTION</h3>
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_menus"]) || array_key_exists("user_menus", $context) ? $context["user_menus"] : (function () { throw new RuntimeError('Variable "user_menus" does not exist.', 16, $this->source); })()), "gestion", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_gestion"]) {
            // line 17
            echo "                        <li class=\"list-group-item list-menu\">
                            <a class=\"menu\" href=\"";
            // line 18
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu_gestion"], "urlmenu", [], "any", false, false, false, 18))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menu_gestion"], "urlmenu", [], "any", false, false, false, 18))) : ("#"));
            echo "\">
                                ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu_gestion"], "nomMenu", [], "any", false, false, false, 19), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_gestion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-md-4 mt-3\">
            <div class=\"card card-menu\">
                <div class=\"card-header\">
                    <h3 class=\"text-well\">CREATION</h3>
                </div>
                <ul class=\"list-group list-group-flush\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user_menus"]) || array_key_exists("user_menus", $context) ? $context["user_menus"] : (function () { throw new RuntimeError('Variable "user_menus" does not exist.', 32, $this->source); })()), "creation", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["_key"] => $context["menu_creation"]) {
            // line 33
            echo "                        <li class=\"list-group-item list-menu\">
                            <a class=\"d-block w-100 menu\" href=\"";
            // line 34
            echo (( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["menu_creation"], "urlmenu", [], "any", false, false, false, 34))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, $context["menu_creation"], "urlmenu", [], "any", false, false, false, 34))) : ("#"));
            echo "\">
                                ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["menu_creation"], "nomMenu", [], "any", false, false, false, 35), "html", null, true);
            echo "
                            </a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu_creation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                </ul>
            </div>
        </div>
        <div class=\"col-md-2\">
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 39,  143 => 35,  139 => 34,  136 => 33,  132 => 32,  121 => 23,  111 => 19,  107 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu - CRM Aprentiv v2.0{% endblock %}

{% block body %}

    <div class=\"row\">
        <div class=\"col-md-2\">
        </div>
        <div class=\"col-md-4 mt-3 \">
            <div class=\"card m-t-3 card-menu\">
                <div class=\"card-header\">
                    <h3 class=\"text-well\">GESTION</h3>
                </div>
                <ul class=\"list-group list-group-flush\">
                    {% for menu_gestion in user_menus.gestion %}
                        <li class=\"list-group-item list-menu\">
                            <a class=\"menu\" href=\"{{ menu_gestion.urlmenu is not empty ?  path(menu_gestion.urlmenu) : '#'}}\">
                                {{ menu_gestion.nomMenu }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"col-md-4 mt-3\">
            <div class=\"card card-menu\">
                <div class=\"card-header\">
                    <h3 class=\"text-well\">CREATION</h3>
                </div>
                <ul class=\"list-group list-group-flush\">
                    {% for menu_creation in user_menus.creation %}
                        <li class=\"list-group-item list-menu\">
                            <a class=\"d-block w-100 menu\" href=\"{{ menu_creation.urlmenu is not empty ?  path(menu_creation.urlmenu) : '#'}}\">
                                {{ menu_creation.nomMenu }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </div>
        </div>
        <div class=\"col-md-2\">
        </div>
    </div>
{% endblock %}
", "home/index.html.twig", "/var/www/templates/home/index.html.twig");
    }
}
