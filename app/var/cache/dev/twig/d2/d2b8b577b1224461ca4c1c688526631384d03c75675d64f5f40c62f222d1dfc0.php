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

/* lead/editLead.html.twig */
class __TwigTemplate_a65267b82ffed0f37bffebf9854263d9c9e3af9226913748fc6689024fe2fd08 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/editLead.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/editLead.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lead/editLead.html.twig", 1);
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

        echo "Client/Prospect - CRM Aprentiv v2.0
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "\t<nav aria-label=\"breadcrumb\">
\t\t<ol class=\"breadcrumb\">
\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\">
\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"breadcrumb-item active\">
\t\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Lead_Controller");
        echo "\">Liste des leads</a>
\t\t\t</li>
\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
\t\t</ol>
\t</nav>

\t<div class=\"page-content\">
\t\t";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "session", [], "any", false, false, false, 28), "flashBag", [], "any", false, false, false, 28), "get", [0 => "error_message"], "method", false, false, false, 28));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "\t\t\t<div class=\"note note-warnning\">
\t\t\t\t<p>";
            // line 30
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "flashBag", [], "any", false, false, false, 33), "get", [0 => "success_message"], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 34
            echo "\t\t\t<div class=\"note note-success\">
\t\t\t\t<p>";
            // line 35
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t</div>
\t<h2 class=\"text-center mt-2 text-nmary\">FICHE LEAD</h2>
\t<div class=\"row\">
\t\t";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        echo "

\t\t<div class=\"row col-md-12\">
\t\t\t<fieldset class=\"col-sm-12 p-3 m-3 well\">
\t\t\t\t<legend>LEAD</legend>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"form-group col-md-2 text-center\">
\t\t\t\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "societe", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société"]);
        // line 51
        echo "
\t\t\t\t\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "societe", [], "any", false, false, false, 52), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "civilite", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
        // line 57
        echo "
\t\t\t\t\t\t\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "civilite", [], "any", false, false, false, 58), 'widget');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "nom", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 64
        echo "
\t\t\t\t\t\t\t";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "nom", [], "any", false, false, false, 65), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "prenom", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
        // line 70
        echo "
\t\t\t\t\t\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "prenom", [], "any", false, false, false, 71), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "telephone", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Téléphone"]);
        // line 76
        echo "
\t\t\t\t\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "telephone", [], "any", false, false, false, 77), 'widget');
        echo "
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 82
        echo "
\t\t\t\t\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "email", [], "any", false, false, false, 83), 'widget');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "ville", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Ville"]);
        // line 88
        echo "
\t\t\t\t\t\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "ville", [], "any", false, false, false, 89), 'widget');
        echo "
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "commercial", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial"]);
        // line 94
        echo "
\t\t\t\t\t\t\t";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "commercial", [], "any", false, false, false, 95), 'widget', ["attr" => ["autocomplete" => "off"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "origine", [], "any", false, false, false, 98), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Origine du lead"]);
        // line 100
        echo "
\t\t\t\t\t\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "origine", [], "any", false, false, false, 101), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-1\">
\t\t\t\t\t\t\t";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "statut", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Statut du lead"]);
        // line 106
        echo "
\t\t\t\t\t\t\t";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "statut", [], "any", false, false, false, 107), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset class=\"col-sm-12 p-3 m-3 well\">
\t\t\t\t<legend>COMMENTAIRES</legend>
\t\t\t\t<a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
\t\t\t\t\t<span class=\"fa-stack fa-1x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t<i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t";
        // line 122
        echo "\t\t\t\t<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
\t\t\t\t\t<thead class=\"\">
\t\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Date création</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Commentaires</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Action</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Date Action</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Qui</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Statut action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"commentaires_collection\" data-prototype=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "commentaires", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "prototype", [], "any", false, false, false, 133), 'widget'), "html_attr");
        echo "\">
\t\t\t\t\t\t";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "commentaires", [], "any", false, false, false, 134));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 135
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th colspan=\"6\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"comment_contains\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"removecommentelement close\">
\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"lead_commentaires_";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 142), "html", null, true);
            echo "\" class=\"comment_contains_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 144), "dateAdd", [], "array", false, false, false, 144), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 147), "texteNote", [], "array", false, false, false, 147), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 150), "idAction", [], "array", false, false, false, 150), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 153
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 153), "dateAction", [], "array", false, false, false, 153), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 156
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 156), "idUserAction", [], "array", false, false, false, 156), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 159
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 159), "idActionStatut", [], "array", false, false, false, 159), 'widget');
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</thead>
\t\t\t</table>
\t\t</fieldset>
\t\t";
        // line 171
        $context["Nom"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "nom", [], "any", false, false, false, 171);
        // line 172
        echo "\t\t";
        $context["Prenom"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "prenom", [], "any", false, false, false, 172);
        // line 173
        echo "\t\t";
        $context["NomPrenom"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Nom"]) || array_key_exists("Nom", $context) ? $context["Nom"] : (function () { throw new RuntimeError('Variable "Nom" does not exist.', 173, $this->source); })()), "vars", [], "any", false, false, false, 173), "value", [], "any", false, false, false, 173) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["Prenom"]) || array_key_exists("Prenom", $context) ? $context["Prenom"] : (function () { throw new RuntimeError('Variable "Prenom" does not exist.', 173, $this->source); })()), "vars", [], "any", false, false, false, 173), "value", [], "any", false, false, false, 173));
        // line 174
        echo "\t\t<div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
\t\t\t<div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t<button type=\"button\" id=\"editthis\" class=\"btn btn-primary btn-block\">MAJ Fiche</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t";
        // line 180
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "societe", [], "any", false, false, false, 180), "vars", [], "any", false, false, false, 180), "value", [], "any", false, false, false, 180) == null)) {
            // line 181
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/ajoutclient", ["id_type" => 2, "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "nom", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "value", [], "any", false, false, false, 181), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "prenom", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "value", [], "any", false, false, false, 181), "tel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "telephone", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "value", [], "any", false, false, false, 181), "mail" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "email", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "value", [], "any", false, false, false, 181), "id_civilite" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "civilite", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "value", [], "any", false, false, false, 181), "id_commercial" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 181, $this->source); })()), "commercial", [], "any", false, false, false, 181), "vars", [], "any", false, false, false, 181), "value", [], "any", false, false, false, 181), "nomprenom" => (isset($context["NomPrenom"]) || array_key_exists("NomPrenom", $context) ? $context["NomPrenom"] : (function () { throw new RuntimeError('Variable "NomPrenom" does not exist.', 181, $this->source); })())]), "html", null, true);
            echo "\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutClient()\">
\t\t\t\t\t\t\tAjouter Client
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 185
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/ajoutclient", ["id_type" => 2, "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "nom", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "prenom", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "tel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "telephone", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "mail" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "email", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "id_civilite" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "civilite", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "id_commercial" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "commercial", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "societe" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "societe", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185)]), "html", null, true);
            echo "\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutClient()\">
\t\t\t\t\t\t\tAjouter Client
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 189
        echo "\t\t\t\t</div>

\t\t\t\t<div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 192, $this->source); })()), "societe", [], "any", false, false, false, 192), "vars", [], "any", false, false, false, 192), "value", [], "any", false, false, false, 192) == null)) {
            // line 193
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/ajoutclient", ["id_type" => 1, "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "nom", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "prenom", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "tel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "telephone", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "mail" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "email", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "id_civilite" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "civilite", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "id_commercial" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "commercial", [], "any", false, false, false, 193), "vars", [], "any", false, false, false, 193), "value", [], "any", false, false, false, 193), "nomprenom" => (isset($context["NomPrenom"]) || array_key_exists("NomPrenom", $context) ? $context["NomPrenom"] : (function () { throw new RuntimeError('Variable "NomPrenom" does not exist.', 193, $this->source); })())]), "html", null, true);
            echo "\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutProspect()\">
\t\t\t\t\t\t\tAjouter Prospect
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        } else {
            // line 197
            echo "\t\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/ajoutclient", ["id_type" => 1, "nom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "nom", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197), "prenom" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "prenom", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197), "tel" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "telephone", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197), "mail" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "email", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197), "id_civilite" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "civilite", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197), "id_commercial" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "commercial", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197), "societe" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 197, $this->source); })()), "societe", [], "any", false, false, false, 197), "vars", [], "any", false, false, false, 197), "value", [], "any", false, false, false, 197)]), "html", null, true);
            echo "\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutProspect()\">
\t\t\t\t\t\t\tAjouter Prospect
\t\t\t\t\t\t</a>
\t\t\t\t\t";
        }
        // line 201
        echo "\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-12 p-3\">
\t\t\t<div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t<div id=\"saveedit\" class=\"btn-group mr-2 d-none\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-block\" id=\"SaveBtn\">Mettre à jour</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 213
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
\t</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 217
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 218
        echo "
";
        // line 219
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
<script>
\t
    function statutClient() 
            {
                document.getElementById(\"editthis\").click();
                document.getElementById('statut').value = \"Devenu client\";
                document.getElementById(\"SaveBtn\").click();
            }
               function statutProspect() 
            {
                document.getElementById(\"editthis\").click();
                document.getElementById('statut').value = \"Devenu prospect\";
                document.getElementById(\"SaveBtn\").click();
            }
    </script>
    ";
        // line 239
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "lead/editLead.html.twig", 239)->display($context);
        // line 240
        echo "    <script language=\"javascript\">
        \$(document).ready( function() {
            \$(\"#contactgenerale *\").prop(\"disabled\", true);
            \$(\"#content_bouton .btn\").prop(\"disabled\", false);
            \$(\"#editthis\").click(function(){
                \$(\"#contactgenerale *\").prop(\"disabled\", false);
                \$(\"#saveedit\").removeClass(\"d-none\");
                \$(\"#saveedit\").find('button').prop(\"disabled\", false);
                \$(\"#ajcom\").prop(\"disabled\", false);
            });

            // Mise à jour de la valeur pour un champ d'autocompletion
            function setSelectValue(key,data) {
                var opcaSelect = \$('#contact_'+key);
                // create the option and append to Select2
                var option = new Option(data['text'], data['id'], true, true);
                opcaSelect.append(option).trigger('change');
                // manually trigger the `select2:select` event
                opcaSelect.trigger({
                    type: 'select2:select',
                    params: {
                        data: data
                    }
                });
            }

            \$(\".removecontactelement\").bind('click',function(event){
                \$(this).parents(\".contact_added\").remove();
            });
            \$(\".removecommentelement\").bind('click',function(event){
                \$(this).parents(\".comment_contains\").parents(\"tr\").remove();
            });

\t\t\t\$('#saveedit').on('click', function(e){
                e.preventDefault();
                let commercialId = \$('#contact_id_commercial').val();
                let contactType = \$('#contact_id_type').val();
                \$('#contact_id_commercial').val(commercialId);
                \$('#contact_id_type').val(contactType);
                \$('#contactgenerale').submit();
            });
            });
\t\t\t
\t\t</script> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lead/editLead.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  537 => 240,  535 => 239,  512 => 219,  509 => 218,  499 => 217,  485 => 213,  471 => 201,  463 => 197,  455 => 193,  453 => 192,  448 => 189,  440 => 185,  432 => 181,  430 => 180,  422 => 174,  419 => 173,  416 => 172,  414 => 171,  408 => 167,  386 => 159,  380 => 156,  374 => 153,  368 => 150,  362 => 147,  356 => 144,  351 => 142,  342 => 135,  325 => 134,  321 => 133,  308 => 122,  293 => 107,  290 => 106,  288 => 104,  282 => 101,  279 => 100,  277 => 98,  271 => 95,  268 => 94,  266 => 92,  260 => 89,  257 => 88,  255 => 86,  249 => 83,  246 => 82,  244 => 80,  238 => 77,  235 => 76,  233 => 74,  227 => 71,  224 => 70,  222 => 68,  216 => 65,  213 => 64,  211 => 62,  204 => 58,  201 => 57,  199 => 55,  193 => 52,  190 => 51,  188 => 49,  177 => 41,  172 => 38,  163 => 35,  160 => 34,  155 => 33,  146 => 30,  143 => 29,  139 => 28,  129 => 21,  121 => 16,  116 => 13,  106 => 12,  91 => 7,  81 => 6,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Client/Prospect - CRM Aprentiv v2.0
{% endblock %}

{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
\t<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
\t<nav aria-label=\"breadcrumb\">
\t\t<ol class=\"breadcrumb\">
\t\t\t<li class=\"breadcrumb-item\">
\t\t\t\t<a href=\"{{ path('home.index') }}\">
\t\t\t\t\t<i class=\"fas fa-home\"></i>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"breadcrumb-item active\">
\t\t\t\t<a href=\"{{ path('Liste_Lead_Controller') }}\">Liste des leads</a>
\t\t\t</li>
\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
\t\t</ol>
\t</nav>

\t<div class=\"page-content\">
\t\t{% for flash_message in app.session.flashBag.get('error_message') %}
\t\t\t<div class=\"note note-warnning\">
\t\t\t\t<p>{{ flash_message }}</p>
\t\t\t</div>
\t\t{% endfor %}
\t\t{% for flash_message in app.session.flashBag.get('success_message') %}
\t\t\t<div class=\"note note-success\">
\t\t\t\t<p>{{ flash_message }}</p>
\t\t\t</div>
\t\t{% endfor %}
\t</div>
\t<h2 class=\"text-center mt-2 text-nmary\">FICHE LEAD</h2>
\t<div class=\"row\">
\t\t{{ form_start(form) }}

\t\t<div class=\"row col-md-12\">
\t\t\t<fieldset class=\"col-sm-12 p-3 m-3 well\">
\t\t\t\t<legend>LEAD</legend>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"form-group col-md-2 text-center\">
\t\t\t\t\t\t\t{{ form_label(form.societe, 'Société', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
\t\t\t\t\t\t\t{{ form_widget(form.societe) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t{{ form_label(form.civilite, 'Civilité',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
\t\t\t\t\t\t\t{{ form_widget(form.civilite) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t{{ form_label(form.nom, 'Nom',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
\t\t\t\t\t\t\t{{ form_widget(form.nom) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t{{ form_label(form.prenom, 'Prenom',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
\t\t\t\t\t\t\t{{ form_widget(form.prenom) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t{{ form_label(form.telephone, 'Téléphone',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.telephone) }}
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t{{ form_label(form.email, 'Email',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.email) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t{{ form_label(form.ville, 'Ville',{
                            \t\t\t'label_attr': {'class': 'font-weight-bold text-center'}
                            \t\t\t}) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.ville) }}
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t{{ form_label(form.commercial, 'Commercial',{
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
\t\t\t\t\t\t\t{{ form_widget(form.commercial, { attr: {autocomplete : 'off'} } ) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t{{ form_label(form.origine, 'Origine du lead',{
                                'label_attr': {'class': 'font-weight-bold required'}
                            }) }}
\t\t\t\t\t\t\t{{ form_widget(form.origine) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-1\">
\t\t\t\t\t\t\t{{ form_label(form.statut, 'Statut du lead',{
                                'label_attr': {'class': 'font-weight-bold required'}
                            }) }}
\t\t\t\t\t\t\t{{ form_widget(form.statut) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t</fieldset>
\t\t\t<fieldset class=\"col-sm-12 p-3 m-3 well\">
\t\t\t\t<legend>COMMENTAIRES</legend>
\t\t\t\t<a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
\t\t\t\t\t<span class=\"fa-stack fa-1x\">
\t\t\t\t\t\t<i class=\"fas fa-circle fa-stack-2x\"></i>
\t\t\t\t\t\t<i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t{#<center>
\t\t\t\t                <input type=\"button\" class=\"btn btn-warning\" style=\"border-radius: 5%;\" name=\"ajcom\" id=\"ajcom\" value=\"Ajouter un commentaire\">
\t\t\t\t                </center>#}
\t\t\t\t<table class=\"table table-striped table-borderless col-sm-12 mt-3\">
\t\t\t\t\t<thead class=\"\">
\t\t\t\t\t\t<tr class=\"row\">
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Date création</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Commentaires</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Action</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Date Action</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Qui</th>
\t\t\t\t\t\t\t<th class=\"col-sm-2\">Statut action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody id=\"commentaires_collection\" data-prototype=\"{{ form_widget(form.commentaires.vars.prototype)|e('html_attr') }}\">
\t\t\t\t\t\t{% for comment in form.commentaires %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<th colspan=\"6\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"comment_contains\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"removecommentelement close\">
\t\t\t\t\t\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t<div id=\"lead_commentaires_{{ loop.index }}\" class=\"comment_contains_form\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(comment.children[\"dateAdd\"]) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(comment.children[\"texteNote\"]) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(comment.children[\"idAction\"]) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(comment.children[\"dateAction\"]) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(comment.children[\"idUserAction\"]) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-2 form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(comment.children[\"idActionStatut\"]) }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</thead>
\t\t\t</table>
\t\t</fieldset>
\t\t{% set Nom = form.nom %}
\t\t{% set Prenom = form.prenom %}
\t\t{% set NomPrenom = Nom.vars.value ~ ' ' ~ Prenom.vars.value %}
\t\t<div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
\t\t\t<div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t<div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t<button type=\"button\" id=\"editthis\" class=\"btn btn-primary btn-block\">MAJ Fiche</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t{% if form.societe.vars.value == null %}
\t\t\t\t\t\t<a href=\"{{ path('Fiche_client_prospect_Controller/ajoutclient', {'id_type': 2, nom:form.nom.vars.value, prenom:form.prenom.vars.value, tel:form.telephone.vars.value, mail:form.email.vars.value, id_civilite:form.civilite.vars.value, id_commercial:form.commercial.vars.value, nomprenom:NomPrenom}) }}\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutClient()\">
\t\t\t\t\t\t\tAjouter Client
\t\t\t\t\t\t</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('Fiche_client_prospect_Controller/ajoutclient', {'id_type': 2, nom:form.nom.vars.value, prenom:form.prenom.vars.value, tel:form.telephone.vars.value, mail:form.email.vars.value, id_civilite:form.civilite.vars.value, id_commercial:form.commercial.vars.value, societe:form.societe.vars.value}) }}\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutClient()\">
\t\t\t\t\t\t\tAjouter Client
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t\t<div class=\"btn-group mr-2 list-filter\" role=\"group\" aria-label=\"Third group\">
\t\t\t\t\t{% if form.societe.vars.value == null %}
\t\t\t\t\t\t<a href=\"{{ path('Fiche_client_prospect_Controller/ajoutclient', {'id_type': 1, nom:form.nom.vars.value, prenom:form.prenom.vars.value, tel:form.telephone.vars.value, mail:form.email.vars.value, id_civilite:form.civilite.vars.value, id_commercial:form.commercial.vars.value, nomprenom:NomPrenom}) }}\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutProspect()\">
\t\t\t\t\t\t\tAjouter Prospect
\t\t\t\t\t\t</a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<a href=\"{{ path('Fiche_client_prospect_Controller/ajoutclient', {'id_type': 1, nom:form.nom.vars.value, prenom:form.prenom.vars.value, tel:form.telephone.vars.value, mail:form.email.vars.value, id_civilite:form.civilite.vars.value, id_commercial:form.commercial.vars.value, societe:form.societe.vars.value}) }}\" , target=\"_blank\" class=\"btn btn-primary btn-md btn-block\" onclick=\"statutProspect()\">
\t\t\t\t\t\t\tAjouter Prospect
\t\t\t\t\t\t</a>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>

\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-sm-12 p-3\">
\t\t\t<div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
\t\t\t\t<div id=\"saveedit\" class=\"btn-group mr-2 d-none\" role=\"group\" aria-label=\"First group\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-danger btn-block\" id=\"SaveBtn\">Mettre à jour</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{{ form_end(form,{'render_rest': false}) }}
\t</div>
</div>
{% endblock %}
{% block javascripts %}

{{ parent() }}

<script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
<script>
\t
    function statutClient() 
            {
                document.getElementById(\"editthis\").click();
                document.getElementById('statut').value = \"Devenu client\";
                document.getElementById(\"SaveBtn\").click();
            }
               function statutProspect() 
            {
                document.getElementById(\"editthis\").click();
                document.getElementById('statut').value = \"Devenu prospect\";
                document.getElementById(\"SaveBtn\").click();
            }
    </script>
    {% include 'contact/Parts/contact.js.html.twig' %}
    <script language=\"javascript\">
        \$(document).ready( function() {
            \$(\"#contactgenerale *\").prop(\"disabled\", true);
            \$(\"#content_bouton .btn\").prop(\"disabled\", false);
            \$(\"#editthis\").click(function(){
                \$(\"#contactgenerale *\").prop(\"disabled\", false);
                \$(\"#saveedit\").removeClass(\"d-none\");
                \$(\"#saveedit\").find('button').prop(\"disabled\", false);
                \$(\"#ajcom\").prop(\"disabled\", false);
            });

            // Mise à jour de la valeur pour un champ d'autocompletion
            function setSelectValue(key,data) {
                var opcaSelect = \$('#contact_'+key);
                // create the option and append to Select2
                var option = new Option(data['text'], data['id'], true, true);
                opcaSelect.append(option).trigger('change');
                // manually trigger the `select2:select` event
                opcaSelect.trigger({
                    type: 'select2:select',
                    params: {
                        data: data
                    }
                });
            }

            \$(\".removecontactelement\").bind('click',function(event){
                \$(this).parents(\".contact_added\").remove();
            });
            \$(\".removecommentelement\").bind('click',function(event){
                \$(this).parents(\".comment_contains\").parents(\"tr\").remove();
            });

\t\t\t\$('#saveedit').on('click', function(e){
                e.preventDefault();
                let commercialId = \$('#contact_id_commercial').val();
                let contactType = \$('#contact_id_type').val();
                \$('#contact_id_commercial').val(commercialId);
                \$('#contact_id_type').val(contactType);
                \$('#contactgenerale').submit();
            });
            });
\t\t\t
\t\t</script> 

{% endblock %}
", "lead/editLead.html.twig", "/var/www/templates/lead/editLead.html.twig");
    }
}
