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

/* lead/lead.html.twig */
class __TwigTemplate_a97b2fa8a119d6a8106c8d3642b4f9d6beb4af63cd14ae7836589bd53664038e extends \Twig\Template
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
            'modal' => [$this, 'block_modal'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/lead.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/lead.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lead/lead.html.twig", 1);
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

        echo "Lead - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Lead_Controller");
        echo "\">Liste des Leads</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création lead</li>
        </ol>
    </nav>

    <div class=\"page-content\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "flashBag", [], "any", false, false, false, 21), "get", [0 => "error_message"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "            <div class=\"note note-warnning\">
                <p>";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "flashBag", [], "any", false, false, false, 26), "get", [0 => "success_message"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 27
            echo "            <div class=\"note note-success\">
                <p>";
            // line 28
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
               <div class=\"row col-md-12\">
               </div>
               <h2 class=\"text-center mt-2 text-nmary\">FICHE LEAD</h2>
\t<div class=\"row\">
\t\t";
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start');
        echo "

\t\t<div class=\"row col-md-12\">
\t\t\t<fieldset class=\"col-sm-12 p-3 m-3 well\">
\t\t\t\t<legend>LEAD</legend>

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"form-group col-md-2 text-center\">
\t\t\t\t\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "societe", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société"]);
        // line 49
        echo "
\t\t\t\t\t\t\t";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "societe", [], "any", false, false, false, 50), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "civilite", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
        // line 55
        echo "
\t\t\t\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "civilite", [], "any", false, false, false, 56), 'widget');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "nom", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 62
        echo "
\t\t\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "nom", [], "any", false, false, false, 63), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-1 text-center\">
\t\t\t\t\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "prenom", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
        // line 68
        echo "
\t\t\t\t\t\t\t";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "prenom", [], "any", false, false, false, 69), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "telephone", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Téléphone"]);
        // line 74
        echo "
\t\t\t\t\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "telephone", [], "any", false, false, false, 75), 'widget');
        echo "
\t\t\t\t\t\t\t</div>\t\t\t
\t\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "email", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 80
        echo "
\t\t\t\t\t\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "email", [], "any", false, false, false, 81), 'widget');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "ville", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Ville"]);
        // line 86
        echo "
\t\t\t\t\t\t\t\t";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "ville", [], "any", false, false, false, 87), 'widget');
        echo "
\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "commercial", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial"]);
        // line 92
        echo "
\t\t\t\t\t\t\t";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "commercial", [], "any", false, false, false, 93), 'widget', ["attr" => ["autocomplete" => "off"]]);
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-2\">
\t\t\t\t\t\t\t";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "origine", [], "any", false, false, false, 96), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Origine du lead"]);
        // line 98
        echo "
\t\t\t\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "origine", [], "any", false, false, false, 99), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-center col-sm-1\">
\t\t\t\t\t\t\t";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "statut", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Statut du lead"]);
        // line 104
        echo "
\t\t\t\t\t\t\t";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "statut", [], "any", false, false, false, 105), 'widget');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</fieldset>

            <fieldset class=\"col-sm-12 p-3 m-3 well\">
                <legend>COMMENTAIRES</legend>
                <a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                <div class=\"col-sm-12 p-3 mt-3 well\">
                    <table class=\"table table-striped table-borderless col-sm-12 mt-3\">
                        <thead class=\"\">
                        <tr class=\"row\">
                            <th class=\"col-sm-2\">Date création</th>
                            <th class=\"col-sm-2\">Commentaires</th>
                            <th class=\"col-sm-2\">Action</th>
                            <th class=\"col-sm-2\">Date Action</th>
                            <th class=\"col-sm-2\">Qui</th>
                            <th class=\"col-sm-2\">Statut action</th>
                        </tr>
                            <tbody id=\"commentaires_collection\" data-prototype=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "commentaires", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "prototype", [], "any", false, false, false, 130), 'widget'), "html_attr");
        echo "\">
                        </tbody>
                        </thead>
                    </table>
                </div>
            </fieldset>

            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
                    </div>
                     
            </div>
            ";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 149
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 150
        echo "            ";
        // line 151
        echo "                <div class=\"modal fade\" id=\"modal-ville-add\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content list-filter\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajouter une nouvelle ville</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VilleController::create"));
        echo "
                            </div>
                        </div>
                    </div>
                </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 169
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 170
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    

    <script> 

       
            window.onload = function() {
                    jQuery(document).ready(function () {
            var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();

                today = dd + '/' + mm + '/' + yyyy;
                document.getElementById(\"ajcom\").click();
                document.getElementById('commentaires_1_texteNote').value = \"Définir un commercial\";
                document.getElementById('commentaires_1_idAction').value = 68;
                document.getElementById('commentaires_1_dateAction').value = today;
                document.getElementById('commentaires_1_idUserAction').value = 56;
                document.getElementById('commentaires_1_idActionStatut').value = 1;
                    });
            };


          

        </script>
    ";
        // line 201
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "lead/lead.html.twig", 201)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lead/lead.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 201,  404 => 170,  394 => 169,  378 => 161,  366 => 151,  364 => 150,  354 => 149,  340 => 144,  323 => 130,  295 => 105,  292 => 104,  290 => 102,  284 => 99,  281 => 98,  279 => 96,  273 => 93,  270 => 92,  268 => 90,  262 => 87,  259 => 86,  257 => 84,  251 => 81,  248 => 80,  246 => 78,  240 => 75,  237 => 74,  235 => 72,  229 => 69,  226 => 68,  224 => 66,  218 => 63,  215 => 62,  213 => 60,  206 => 56,  203 => 55,  201 => 53,  195 => 50,  192 => 49,  190 => 47,  179 => 39,  171 => 34,  166 => 31,  157 => 28,  154 => 27,  149 => 26,  140 => 23,  137 => 22,  133 => 21,  124 => 15,  120 => 14,  116 => 12,  106 => 11,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Lead - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Lead_Controller') }}\">Liste des Leads</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création lead</li>
        </ol>
    </nav>

    <div class=\"page-content\">
        {% for flash_message in app.session.flashBag.get('error_message') %}
            <div class=\"note note-warnning\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
        {% for flash_message in app.session.flashBag.get('success_message') %}
            <div class=\"note note-success\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
    </div>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ form_start(form,{'attr':{'class':'list-filter'}}) }}
               <div class=\"row col-md-12\">
               </div>
               <h2 class=\"text-center mt-2 text-nmary\">FICHE LEAD</h2>
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
\t\t\t\t</div>
\t\t\t</fieldset>

            <fieldset class=\"col-sm-12 p-3 m-3 well\">
                <legend>COMMENTAIRES</legend>
                <a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                <div class=\"col-sm-12 p-3 mt-3 well\">
                    <table class=\"table table-striped table-borderless col-sm-12 mt-3\">
                        <thead class=\"\">
                        <tr class=\"row\">
                            <th class=\"col-sm-2\">Date création</th>
                            <th class=\"col-sm-2\">Commentaires</th>
                            <th class=\"col-sm-2\">Action</th>
                            <th class=\"col-sm-2\">Date Action</th>
                            <th class=\"col-sm-2\">Qui</th>
                            <th class=\"col-sm-2\">Statut action</th>
                        </tr>
                            <tbody id=\"commentaires_collection\" data-prototype=\"{{ form_widget(form.commentaires.vars.prototype)|e('html_attr') }}\">
                        </tbody>
                        </thead>
                    </table>
                </div>
            </fieldset>

            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
                    </div>
                     
            </div>
            {{ form_end(form,{'render_rest': false}) }}
        </div>
    </div>
{% endblock %}

{% block modal %}
            {#  Modal : Ajouter une nouvelle ville #}
                <div class=\"modal fade\" id=\"modal-ville-add\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                        <div class=\"modal-content list-filter\">
                            <div class=\"modal-header\">
                                <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajouter une nouvelle ville</h5>
                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                    <span aria-hidden=\"true\">&times;</span>
                                </button>
                            </div>
                            <div class=\"modal-body\">
                                {{ render(controller('App\\\\Controller\\\\VilleController::create')) }}
                            </div>
                        </div>
                    </div>
                </div>
                {# Fin modal ajouter une nouvelle ville #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    

    <script> 

       
            window.onload = function() {
                    jQuery(document).ready(function () {
            var today = new Date();
                var dd = String(today.getDate()).padStart(2, '0');
                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                var yyyy = today.getFullYear();

                today = dd + '/' + mm + '/' + yyyy;
                document.getElementById(\"ajcom\").click();
                document.getElementById('commentaires_1_texteNote').value = \"Définir un commercial\";
                document.getElementById('commentaires_1_idAction').value = 68;
                document.getElementById('commentaires_1_dateAction').value = today;
                document.getElementById('commentaires_1_idUserAction').value = 56;
                document.getElementById('commentaires_1_idActionStatut').value = 1;
                    });
            };


          

        </script>
    {% include 'contact/Parts/contact.js.html.twig' %}
{% endblock %}", "lead/lead.html.twig", "/var/www/templates/lead/lead.html.twig");
    }
}
