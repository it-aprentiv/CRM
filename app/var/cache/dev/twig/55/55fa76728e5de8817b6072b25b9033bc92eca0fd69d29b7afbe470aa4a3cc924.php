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

/* formation/edit.formation.html.twig */
class __TwigTemplate_b38ef462881a6baafe1f4339e8b98d85eeaac0491e406e6a23c5d5317fda4f22 extends \Twig\Template
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
            'commentaires' => [$this, 'block_commentaires'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/edit.formation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/edit.formation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/edit.formation.html.twig", 1);
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

        echo "Edition formation - CRM Aprentiv v2.0";
        
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
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
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formation_Mise_Place_Controller");
        echo "\">Formations</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails formation</li>
            </ol>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">EDITION FORMATION ";
        // line 24
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['App\Twig\AppExtension']->translateLetterToWord((isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 24, $this->source); })()))), "html", null, true);
        echo "</h2>

    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "        <div class=\"alert alert-success\">
            ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
    <div class=\"col-sm-12\">
        ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
        <div class=\"row well\">
            ";
        // line 35
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 35, $this->source); })())) || ("S" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 35, $this->source); })())))) {
            echo "                
                <div class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 38, $this->source); })()), "idClient", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société"]);
            // line 40
            echo "
                        ";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 41, $this->source); })()), "idClient", [], "any", false, false, false, 41), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
            echo "
                    </div>
                </div>
            ";
        }
        // line 45
        echo "            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 47, $this->source); })()), "idStructure", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Structure"]);
        // line 49
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 50, $this->source); })()), "idStructure", [], "any", false, false, false, 50), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 55, $this->source); })()), "ref", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° OM"]);
        // line 57
        echo "
                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 58, $this->source); })()), "ref", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "formation-field"]]);
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 63, $this->source); })()), "dateAccord", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date OM"]);
        // line 65
        echo "
                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 66, $this->source); })()), "dateAccord", [], "any", false, false, false, 66), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 71, $this->source); })()), "dossierType", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Type"]);
        // line 73
        echo "
                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 74, $this->source); })()), "dossierType", [], "any", false, false, false, 74), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 79, $this->source); })()), "idStatut", [], "any", false, false, false, 79), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Statut OM"]);
        // line 81
        echo "
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 82, $this->source); })()), "idStatut", [], "any", false, false, false, 82), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
        echo "
                </div>
            </div>
        </div>
        <br>
        <div class=\"row well\">
            <div class=\"col-sm-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group text-center\">
                                    <label class=\"font-weight-bold\">Lieu de stage</label>
                                    <nav class=\"nav nav-tabs\">
                                        ";
        // line 96
        $context["address_vivienne"] = twig_constant("App\\Constants\\AddressFormation::VIVIENNE_ADDRESS");
        // line 97
        echo "                                        ";
        if (("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 97, $this->source); })()))) {
            // line 98
            echo "                                            <a class=\"nav-item nav-link ";
            if (((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 98, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 98, $this->source); })()), "lieu", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "value", [], "any", false, false, false, 98))) {
                echo " active ";
            }
            echo "\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                            <a class=\"nav-item nav-link ";
            // line 99
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 99, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 99, $this->source); })()), "lieu", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 99, $this->source); })()), "lieu", [], "any", false, false, false, 99), "vars", [], "any", false, false, false, 99), "value", [], "any", false, false, false, 99) == (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 99, $this->source); })())))) {
                echo " active ";
            }
            echo "\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link ";
            // line 100
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 100, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 100, $this->source); })()), "lieu", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 100, $this->source); })()), "lieu", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "value", [], "any", false, false, false, 100) != (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 100, $this->source); })())))) {
                echo " active ";
            }
            echo "\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        ";
        } elseif (("R" ==         // line 101
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 101, $this->source); })()))) {
            // line 102
            echo "                                            <a class=\"nav-item nav-link ";
            if (((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 102, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 102, $this->source); })()), "lieu", [], "any", false, false, false, 102), "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102))) {
                echo " active ";
            }
            echo "\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                        ";
        } elseif (("S" ==         // line 103
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 103, $this->source); })()))) {
            // line 104
            echo "                                            <a class=\"nav-item nav-link ";
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 104, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 104, $this->source); })()), "lieu", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "value", [], "any", false, false, false, 104)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 104, $this->source); })()), "lieu", [], "any", false, false, false, 104), "vars", [], "any", false, false, false, 104), "value", [], "any", false, false, false, 104) == (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 104, $this->source); })())))) {
                echo " active ";
            }
            echo "\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link ";
            // line 105
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 105, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 105, $this->source); })()), "lieu", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 105, $this->source); })()), "lieu", [], "any", false, false, false, 105), "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105) != (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 105, $this->source); })())))) {
                echo " active ";
            }
            echo "\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        ";
        }
        // line 107
        echo "                                    </nav>
                                    <div class=\"tab-content\">
                                        ";
        // line 109
        if (("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 109, $this->source); })()))) {
            // line 110
            echo "                                            <div id=\"p1\" class=\"tab-pane ";
            if (((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 110, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 110, $this->source); })()), "lieu", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110))) {
                echo " active ";
            }
            echo "\" >
                                                ";
            // line 111
            if (((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 111, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 111, $this->source); })()), "lieu", [], "any", false, false, false, 111), "vars", [], "any", false, false, false, 111), "value", [], "any", false, false, false, 111))) {
                // line 112
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 112, $this->source); })()), "lieu", [], "any", false, false, false, 112), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                                ";
            }
            // line 114
            echo "                                            </div>
                                            <div class=\"tab-pane ";
            // line 115
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 115, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 115, $this->source); })()), "lieu", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 115, $this->source); })()), "lieu", [], "any", false, false, false, 115), "vars", [], "any", false, false, false, 115), "value", [], "any", false, false, false, 115) == (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 115, $this->source); })())))) {
                echo " active ";
            }
            echo "\" id=\"p2\">
                                                ";
            // line 116
            if (((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 116, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 116, $this->source); })()), "lieu", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "value", [], "any", false, false, false, 116))) {
                // line 117
                echo "                                                    <input type=\"text\" placeholder=\"";
                echo twig_escape_filter($this->env, (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 117, $this->source); })()), "html", null, true);
                echo "\" disabled=\"true\">
                                                ";
            }
            // line 119
            echo "                                            </div>
                                            <div class=\"tab-pane ";
            // line 120
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 120, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 120, $this->source); })()), "lieu", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 120, $this->source); })()), "lieu", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "value", [], "any", false, false, false, 120) != (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 120, $this->source); })())))) {
                echo " active ";
            }
            echo "\" id=\"p3\">
                                                ";
            // line 121
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 121, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 121, $this->source); })()), "lieu", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 121, $this->source); })()), "lieu", [], "any", false, false, false, 121), "vars", [], "any", false, false, false, 121), "value", [], "any", false, false, false, 121) != (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 121, $this->source); })())))) {
                // line 122
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 122, $this->source); })()), "lieu", [], "any", false, false, false, 122), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                                ";
            }
            // line 124
            echo "                                            </div>
                                        ";
        } elseif (("R" ==         // line 125
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 125, $this->source); })()))) {
            // line 126
            echo "                                            <div class=\"tab-pane ";
            if (((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 126, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 126, $this->source); })()), "lieu", [], "any", false, false, false, 126), "vars", [], "any", false, false, false, 126), "value", [], "any", false, false, false, 126))) {
                echo " active ";
            }
            echo "\" id=\"p1\">
                                                ";
            // line 127
            if (((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 127, $this->source); })()) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 127, $this->source); })()), "lieu", [], "any", false, false, false, 127), "vars", [], "any", false, false, false, 127), "value", [], "any", false, false, false, 127))) {
                // line 128
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 128, $this->source); })()), "lieu", [], "any", false, false, false, 128), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                                ";
            }
            // line 130
            echo "                                            </div>
                                        ";
        } elseif (("S" ==         // line 131
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 131, $this->source); })()))) {
            // line 132
            echo "                                            <div class=\"tab-pane ";
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 132, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 132, $this->source); })()), "lieu", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "value", [], "any", false, false, false, 132)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 132, $this->source); })()), "lieu", [], "any", false, false, false, 132), "vars", [], "any", false, false, false, 132), "value", [], "any", false, false, false, 132) == (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 132, $this->source); })())))) {
                echo " active ";
            }
            echo "\" id=\"p2\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 133
            echo twig_escape_filter($this->env, (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 133, $this->source); })()), "html", null, true);
            echo "\" disabled=\"true\">
                                            </div>
                                            <div class=\"tab-pane ";
            // line 135
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 135, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 135, $this->source); })()), "lieu", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "value", [], "any", false, false, false, 135)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 135, $this->source); })()), "lieu", [], "any", false, false, false, 135), "vars", [], "any", false, false, false, 135), "value", [], "any", false, false, false, 135) != (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 135, $this->source); })())))) {
                echo " active ";
            }
            echo "\" id=\"p3\">
                                                ";
            // line 136
            if ((((isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 136, $this->source); })()) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 136, $this->source); })()), "lieu", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "value", [], "any", false, false, false, 136)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 136, $this->source); })()), "lieu", [], "any", false, false, false, 136), "vars", [], "any", false, false, false, 136), "value", [], "any", false, false, false, 136) != (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 136, $this->source); })())))) {
                // line 137
                echo "                                                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 137, $this->source); })()), "lieu", [], "any", false, false, false, 137), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                                ";
            }
            // line 139
            echo "                                            </div>
                                        ";
        }
        // line 141
        echo "                                        <input type=\"hidden\" id=\"address_client\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "\">
                                    </div>
                                </div>
                                ";
        // line 144
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 144, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 144, $this->source); })())))) {
            // line 145
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                ";
            // line 148
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 148, $this->source); })()), "dureeJours", [], "any", false, false, false, 148), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Durée stage en J"]);
            // line 150
            echo "
                                                ";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 151, $this->source); })()), "dureeJours", [], "any", false, false, false, 151), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
            echo "
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            ";
            // line 155
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 155, $this->source); })()), "dureeHeures", [], "any", false, false, false, 155), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Durée stage en H"]);
            // line 157
            echo "
                                            ";
            // line 158
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 158, $this->source); })()), "dureeHeures", [], "any", false, false, false, 158), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
            echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                ";
            // line 164
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 164, $this->source); })()), "dureeHeures", [], "any", false, false, false, 164), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Du"]);
            // line 166
            echo "
                                                ";
            // line 167
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 167, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 167), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
            echo "
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                ";
            // line 172
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 172, $this->source); })()), "dureeHeures", [], "any", false, false, false, 172), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Au"]);
            // line 174
            echo "
                                                ";
            // line 175
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 175, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 175), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 180
        echo "                            </div>
                            <div class=\"col-sm-6\">
                                ";
        // line 182
        if (("S" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 182, $this->source); })()))) {
            // line 183
            echo "                                    <div class=\"form-group text-center\">
                                        ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 184, $this->source); })()), "soustraitance", [], "any", false, false, false, 184), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Sous-traitant"]);
            // line 186
            echo "
                                        ";
            // line 187
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 187, $this->source); })()), "soustraitance", [], "any", false, false, false, 187), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
            echo "
                                    </div>
                                ";
        }
        // line 190
        echo "
                                ";
        // line 191
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 191, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 191, $this->source); })())))) {
            // line 192
            echo "                                    <div class=\"form-group text-center\">
                                        ";
            // line 193
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 193, $this->source); })()), "idFormateur", [], "any", false, false, false, 193), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Formateur"]);
            // line 195
            echo "
                                        ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 196, $this->source); })()), "idFormateur", [], "any", false, false, false, 196), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
            echo "
                                    </div>
                                ";
        }
        // line 199
        echo "                                <div class=\"form-group text-center\">
                                    ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 200, $this->source); })()), "nom", [], "any", false, false, false, 200), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Intitulé du stage"]);
        // line 202
        echo "
                                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 203, $this->source); })()), "nom", [], "any", false, false, false, 203), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 209
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 209, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 209, $this->source); })())))) {
            // line 210
            echo "                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            ";
            // line 212
            if (twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 212, $this->source); })()), "stagiaires", [], "any", false, false, false, 212)) {
                // line 213
                echo "                                ";
                $context["param"] = twig_constant("\\App\\Constants\\ParamDossierStagiaire::DOSSIER_STAGIAIRE");
                // line 214
                echo "                                ";
                $this->loadTemplate("Common/stagiaire-bloc.html.twig", "formation/edit.formation.html.twig", 214)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 214, $this->source); })()), "stagiaires", [], "any", false, false, false, 214), "vars", [], "any", false, false, false, 214), "prototype", [], "any", false, false, false, 214), "stagiaires" => twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 214, $this->source); })()), "stagiaires", [], "any", false, false, false, 214), "param_dossier_stagiaire" => (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 214, $this->source); })())]));
                // line 215
                echo "                                ";
                twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 215, $this->source); })()), "stagiaires", [], "any", false, false, false, 215), "setRendered", [], "any", false, false, false, 215);
                // line 216
                echo "                            ";
            }
            // line 217
            echo "                        </div>
                    </div>
                ";
        }
        // line 220
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 222
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 223
            echo "                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Prix vente HT</div>
                                <div class=\"card-body\">
                                    ";
            // line 228
            if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 228, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 228, $this->source); })())))) {
                // line 229
                echo "                                        <div class=\"form-group\">
                                            ";
                // line 230
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 230, $this->source); })()), "pvTarifJ", [], "any", false, false, false, 230), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par J"]);
                // line 232
                echo "
                                            ";
                // line 233
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 233, $this->source); })()), "pvTarifJ", [], "any", false, false, false, 233), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field money-format"]]);
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 236
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 236, $this->source); })()), "pvTarifDj", [], "any", false, false, false, 236), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par 1/2 J"]);
                // line 238
                echo "
                                            ";
                // line 239
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 239, $this->source); })()), "pvTarifDj", [], "any", false, false, false, 239), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 242
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 242, $this->source); })()), "pvTarifH", [], "any", false, false, false, 242), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par H"]);
                // line 244
                echo "
                                            ";
                // line 245
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 245, $this->source); })()), "pvTarifH", [], "any", false, false, false, 245), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                        </div>
                                    ";
            }
            // line 248
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 249
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 249, $this->source); })()), "pvTotalHt", [], "any", false, false, false, 249), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Total HT"]);
            // line 251
            echo "
                                        ";
            // line 252
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 252, $this->source); })()), "pvTotalHt", [], "any", false, false, false, 252), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field money-format"]]);
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Coût formateur HT</div>
                                <div class=\"card-body\">
                                    ";
            // line 261
            if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 261, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 261, $this->source); })())))) {
                // line 262
                echo "                                        <div class=\"form-group\">
                                            ";
                // line 263
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 263, $this->source); })()), "pfmteurJ", [], "any", false, false, false, 263), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par J"]);
                // line 265
                echo "
                                            ";
                // line 266
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 266, $this->source); })()), "pfmteurJ", [], "any", false, false, false, 266), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field money-format"]]);
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 269
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 269, $this->source); })()), "pfmteurDj", [], "any", false, false, false, 269), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par 1/2 J"]);
                // line 271
                echo "
                                            ";
                // line 272
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 272, $this->source); })()), "pfmteurDj", [], "any", false, false, false, 272), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 275
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 275, $this->source); })()), "pfmteurH", [], "any", false, false, false, 275), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par H"]);
                // line 277
                echo "
                                            ";
                // line 278
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 278, $this->source); })()), "pfmteurH", [], "any", false, false, false, 278), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field"]]);
                echo "
                                        </div>
                                    ";
            }
            // line 281
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 282
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 282, $this->source); })()), "pfmteurTotalHt", [], "any", false, false, false, 282), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Total HT"]);
            // line 284
            echo "
                                        ";
            // line 285
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 285, $this->source); })()), "pfmteurTotalHt", [], "any", false, false, false, 285), 'widget', ["attr" => ["disabled" => "true", "class" => "formation-field money-format"]]);
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 text-center\">
                            <p>Marge brute : 
                                <span  id=\"marge_brute\">
                                    ";
            // line 295
            if (twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 295, $this->source); })()), "montantMarge", [], "any", false, false, false, 295)) {
                echo " 
                                        ";
                // line 296
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 296, $this->source); })()), "montantMarge", [], "any", false, false, false, 296), 2, ",", " "), "html", null, true);
                echo " 
                                    ";
            } else {
                // line 298
                echo "                                        ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 298, $this->source); })()), "pvTotalHt", [], "any", false, false, false, 298) * 1) - (twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 298, $this->source); })()), "pfmteurTotalHt", [], "any", false, false, false, 298) * 1)), 2, ",", " "), "html", null, true);
                echo "
                                    ";
            }
            // line 300
            echo "                                </span>
                            </p>
                        </div>
                    </div>
                ";
        }
        // line 305
        echo "            </div>
        </div>
        <br>
        <div class=\"row\" id=\"suivi-om\">
            <fieldset>
                <legend>ORDRES DE MISSION</legend>
                ";
        // line 311
        if (twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 311, $this->source); })()), "suiviMissions", [], "any", false, false, false, 311)) {
            // line 312
            echo "                    ";
            $this->loadTemplate("formation/childs/suiviom-bloc.html.twig", "formation/edit.formation.html.twig", 312)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 312, $this->source); })()), "suiviMissions", [], "any", false, false, false, 312), "vars", [], "any", false, false, false, 312), "prototype", [], "any", false, false, false, 312), "suiviMissions" => twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 312, $this->source); })()), "suiviMissions", [], "any", false, false, false, 312)]));
            echo "                
                    ";
            // line 313
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 313, $this->source); })()), "suiviMissions", [], "any", false, false, false, 313), "setRendered", [], "any", false, false, false, 313);
            // line 314
            echo "                ";
        }
        // line 315
        echo "            </fieldset>
        </div>
        <div class=\"row\">
            ";
        // line 318
        if (twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 318, $this->source); })()), "commentaires", [], "any", false, false, false, 318)) {
            // line 319
            echo "                ";
            $this->displayBlock('commentaires', $context, $blocks);
            // line 323
            echo "            ";
        }
        // line 324
        echo "        </div>
        <div class=\"row my-5\">
            <div class=\"col-sm-12\">
                <p class=\"text-center\">
                    ";
        // line 328
        if (((twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 328, $this->source); })()), "dossierType", [], "any", false, false, false, 328) == "Intra") || (twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 328, $this->source); })()), "dossierType", [], "any", false, false, false, 328) == "Inter"))) {
            // line 329
            echo "                        <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_export_om_word", ["idFormation" => twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 329, $this->source); })()), "id", [], "any", false, false, false, 329)]), "html", null, true);
            echo "\" target=\"_blank\">Ordre de mission</a>
                    ";
        }
        // line 331
        echo "                    <a class=\"btn btn-primary\" href=\"#\" id=\"mail_to_formateur\" data-id-formation=\"";
        ((twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 331, $this->source); })()), "idFormateur", [], "any", false, false, false, 331)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 331, $this->source); })()), "idFormateur", [], "any", false, false, false, 331), "id", [], "any", false, false, false, 331), "html", null, true))) : (print ("")));
        echo "\">Mail OM formateur</a>
                    ";
        // line 332
        if ((((isset($context["evaluation"]) || array_key_exists("evaluation", $context)) &&  !(null === (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 332, $this->source); })()))) &&  !twig_test_empty((isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 332, $this->source); })())))) {
            // line 333
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_programme_dossier", ["fichier" => (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 333, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Envoie évaluation stagiaires</a>
                    ";
        } else {
            // line 335
            echo "                        <a href=\"#\" class=\"btn btn-primary disabled\">Envoie évaluation stagiaires indisponible</a>
                    ";
        }
        // line 337
        echo "                    ";
        // line 338
        echo "                    <a class=\"btn btn-primary\" id=\"recap_for\" target=\"_blank\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_recap_formation", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["oFormation"]) || array_key_exists("oFormation", $context) ? $context["oFormation"] : (function () { throw new RuntimeError('Variable "oFormation" does not exist.', 338, $this->source); })()), "id", [], "any", false, false, false, 338)]), "html", null, true);
        echo "\">Récap formateur</a>
                    <a href=\"#\" type=\"button\" class=\"btn btn-primary\" id=\"update_formation\">MAJ formation</a>
                    ";
        // line 340
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Formations")) {
            // line 341
            echo "                        <button style=\"display: none\" type=\"submit\" class=\"btn btn-danger\" id=\"btn_update_formation\">Enregistrer mise à jour</button>
                    ";
        }
        // line 343
        echo "                </p>
            </div>

        </div>
        ";
        // line 347
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 347, $this->source); })()), 'form_end');
        echo "

        <div class=\"container\">
            <!-- The Modal -->
            <div class=\"modal fade\" id=\"myModal\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">

                        <!-- Modal Header -->
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">Modal Heading</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class=\"modal-body\">
                            <form id=\"evaluation_stagiaire\" action=\"\">
                                <div class=\"form-group\">
                                    <label for=\"email\">Adresse email</label>
                                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                                </div>
                                <div>
                                    <label for=\"objet\">Objet</label>
                                    <input type=\"text\" name=\"objet\" id=\"objet\" class=\"form-control\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"message\">Message</label>
                                    <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"3\" required>

                                    </textarea>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 319
    public function block_commentaires($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        // line 320
        echo "                    ";
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "formation/edit.formation.html.twig", 320)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 320, $this->source); })()), "commentaires", [], "any", false, false, false, 320), "vars", [], "any", false, false, false, 320), "prototype", [], "any", false, false, false, 320), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 320, $this->source); })()), "commentaires", [], "any", false, false, false, 320)]));
        echo "                            
                    ";
        // line 321
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 321, $this->source); })()), "commentaires", [], "any", false, false, false, 321), "setRendered", [], "any", false, false, false, 321);
        // line 322
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 392
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 393
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    ";
        // line 397
        echo twig_include($this->env, $context, "formation/childs/formation.js.twig");
        echo "
    ";
        // line 398
        echo twig_include($this->env, $context, "Common/commentaire-js.html.twig");
        echo "
    ";
        // line 399
        echo twig_include($this->env, $context, "Common/stagiaire-js.html.twig");
        echo "
    ";
        // line 400
        echo twig_include($this->env, $context, "formation/childs/suiviom-js.twig");
        echo "
    ";
        // line 401
        $this->loadTemplate("formation/childs/calcul.vente.achat.js.html.twig", "formation/edit.formation.html.twig", 401)->display(twig_array_merge($context, ["typeFormation" => (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 401, $this->source); })())]));
        // line 402
        echo "    <script>
        //Cacher les boutons ajout stagiaire, ajout suivi OM, ajout commentaires
        \$('#add_stagiaire, #add_suiviom, #btnajoutcom').attr('style', 'visibility: hidden');
        \$('document').ready(function () {
            var submit = false;
            var parentForm = \$('form#formation_form');

            // Veroullage des champs stagiaires au chargement de la page
            \$('input[name*=\"stagiaires\"], select[name*=\"stagiaires\"]').attr('disabled', 'disabled');

            //Veroullage des champs ordre de mission au chargement de la page
            \$('input[name*=\"suiviMissions\"], textarea[name*=\"suiviMissions\"], select[name*=\"suiviMissions\"]').attr('disabled', 'disabled');

            //Verouillage des champs suivi ordre de missions
            \$('input[name*=\"commentaires\"], select[name*=\"commentaires\"], textarea[name*=\"commentaires\"]').attr('disabled', 'disabled');

            // Déverouller les champs
            \$('a#update_formation').click(function (e) {
                e.preventDefault();
                \$('#add_stagiaire, #add_suiviom, #btnajoutcom').attr('style', 'visibility: visible').prop(\"disabled\", false);


                if (!submit) { //Si les champs sont déverouillés, alors sousmission formulaire
                    \$('#stagiaires_collection .form-control, #suiviom_collection .form-control, #commentaires_collection .form-control, .formation-field').each(function () {
                        if (this.hasAttribute('disabled')) {
                            \$(this).removeAttr('disabled');
                        }
                    });

                    \$('#btn_update_formation').attr('style', 'display: inline');
                    submit = true;
                }
            });

            /** Send email to formateur or relance formateur **/
            \$('#mail_to_formateur, #relance_formateur').click(function (e) {
                e.preventDefault();
                var idFormateur = \$(this).attr(\"data-id-formation\");

                \$.ajax({
                    url: \"";
        // line 442
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_send_om_formateur");
        echo "\",
                    type: 'POST',
                    data: {'idFormateur': idFormateur},
                    success: function (data) {
                        console.log(data);
                    }
                });
            });
            /** Fin Send email to formateur **/

            \$('.js-datepicker-note').datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });

            //Suppression commentaire
            \$('.delete-stagiaire').on('click', function () {
                removeStagiaire(this);
            });
            var dossierNom = \$('#formation_nom');
            var pathurl = '";
        // line 463
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.competence.asynch-search");
        echo "';
            var intitule = ";
        // line 464
        echo json_encode((isset($context["intitule"]) || array_key_exists("intitule", $context) ? $context["intitule"] : (function () { throw new RuntimeError('Variable "intitule" does not exist.', 464, $this->source); })()));
        echo ";
                    for (let key in intitule) {
                if (intitule[key] != null) {
                    setIntituleStage(intitule[key]);
                }
            }
            function setIntituleStage(intitule) {
                var intituleSelect = \$('#formation_nom');
                var url = '";
        // line 472
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.competence.asynch-search-one", ["initule" => "intitule"]);
        echo "';
                url = url.replace('intitule', intitule);
                \$.ajax({
                    type: 'GET',
                    url: url,
                    data: 'intitule=' + intitule
                }).then(function (data) {
                    // create the option and append to Select2
                    var dataSelected = (data['results'][0]);
                    var option = new Option(dataSelected.text, dataSelected.text, true, true);
                    intituleSelect.append(option).trigger('change');
                    // manually trigger the `select2:select` event
                    intituleSelect.trigger({
                        type: 'select2:select',
                        params: {
                            data: data
                        }
                    });
                });
            }
            dossierNom.select2({
                placeholder: \"-- Intitulé --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: pathurl,
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        var dataResults = data.results !== undefined ? data.results : [];
                        return {
                            results: \$.map(dataResults, function (item) {
                                return {
                                    text: item.text,
                                    id: item.idid
                                };
                            })
                        };
                    }
                }
            });
        });

                const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"formation_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#formation_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formation/edit.formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1003 => 472,  992 => 464,  988 => 463,  964 => 442,  922 => 402,  920 => 401,  916 => 400,  912 => 399,  908 => 398,  904 => 397,  896 => 393,  886 => 392,  876 => 322,  874 => 321,  869 => 320,  859 => 319,  804 => 347,  798 => 343,  794 => 341,  792 => 340,  786 => 338,  784 => 337,  780 => 335,  774 => 333,  772 => 332,  767 => 331,  761 => 329,  759 => 328,  753 => 324,  750 => 323,  747 => 319,  745 => 318,  740 => 315,  737 => 314,  735 => 313,  730 => 312,  728 => 311,  720 => 305,  713 => 300,  707 => 298,  702 => 296,  698 => 295,  685 => 285,  682 => 284,  680 => 282,  677 => 281,  671 => 278,  668 => 277,  666 => 275,  660 => 272,  657 => 271,  655 => 269,  649 => 266,  646 => 265,  644 => 263,  641 => 262,  639 => 261,  627 => 252,  624 => 251,  622 => 249,  619 => 248,  613 => 245,  610 => 244,  608 => 242,  602 => 239,  599 => 238,  597 => 236,  591 => 233,  588 => 232,  586 => 230,  583 => 229,  581 => 228,  574 => 223,  572 => 222,  568 => 220,  563 => 217,  560 => 216,  557 => 215,  554 => 214,  551 => 213,  549 => 212,  545 => 210,  543 => 209,  534 => 203,  531 => 202,  529 => 200,  526 => 199,  520 => 196,  517 => 195,  515 => 193,  512 => 192,  510 => 191,  507 => 190,  501 => 187,  498 => 186,  496 => 184,  493 => 183,  491 => 182,  487 => 180,  479 => 175,  476 => 174,  474 => 172,  466 => 167,  463 => 166,  461 => 164,  452 => 158,  449 => 157,  447 => 155,  440 => 151,  437 => 150,  435 => 148,  430 => 145,  428 => 144,  421 => 141,  417 => 139,  411 => 137,  409 => 136,  403 => 135,  398 => 133,  391 => 132,  389 => 131,  386 => 130,  380 => 128,  378 => 127,  371 => 126,  369 => 125,  366 => 124,  360 => 122,  358 => 121,  352 => 120,  349 => 119,  343 => 117,  341 => 116,  335 => 115,  332 => 114,  326 => 112,  324 => 111,  317 => 110,  315 => 109,  311 => 107,  304 => 105,  297 => 104,  295 => 103,  288 => 102,  286 => 101,  280 => 100,  274 => 99,  267 => 98,  264 => 97,  262 => 96,  245 => 82,  242 => 81,  240 => 79,  232 => 74,  229 => 73,  227 => 71,  219 => 66,  216 => 65,  214 => 63,  206 => 58,  203 => 57,  201 => 55,  193 => 50,  190 => 49,  188 => 47,  184 => 45,  177 => 41,  174 => 40,  172 => 38,  166 => 35,  161 => 33,  157 => 31,  148 => 28,  145 => 27,  141 => 26,  136 => 24,  126 => 17,  121 => 15,  116 => 12,  106 => 11,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edition formation - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('Liste_Formation_Mise_Place_Controller') }}\">Formations</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails formation</li>
            </ol>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">EDITION FORMATION {{ type_formation|translateLetterToWord|upper }}</h2>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"col-sm-12\">
        {{ form_start(formation_form) }}
        <div class=\"row well\">
            {% if 'A' == (type_formation) or 'S' == (type_formation) %}                
                <div class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_label(formation_form.idClient, 'Société', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(formation_form.idClient, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                    </div>
                </div>
            {% endif %}
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.idStructure, 'Structure', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.idStructure, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.ref, 'N° OM', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.ref, {'attr': {'class': 'formation-field'} }) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.dateAccord, 'Date OM', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.dateAccord, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.dossierType, 'Type', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.dossierType) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.idStatut, 'Statut OM', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.idStatut, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                </div>
            </div>
        </div>
        <br>
        <div class=\"row well\">
            <div class=\"col-sm-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group text-center\">
                                    <label class=\"font-weight-bold\">Lieu de stage</label>
                                    <nav class=\"nav nav-tabs\">
                                        {% set address_vivienne = constant('App\\\\Constants\\\\AddressFormation::VIVIENNE_ADDRESS') %}
                                        {% if 'A' == type_formation %}
                                            <a class=\"nav-item nav-link {% if address_vivienne == formation_form.lieu.vars.value %} active {% endif %}\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                            <a class=\"nav-item nav-link {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value == address_societe %} active {% endif %}\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value != address_societe %} active {% endif %}\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        {% elseif 'R' == type_formation %}
                                            <a class=\"nav-item nav-link {% if address_vivienne == formation_form.lieu.vars.value %} active {% endif %}\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                        {% elseif 'S' == type_formation %}
                                            <a class=\"nav-item nav-link {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value == address_societe %} active {% endif %}\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value != address_societe %} active {% endif %}\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        {% endif %}
                                    </nav>
                                    <div class=\"tab-content\">
                                        {% if 'A' == type_formation %}
                                            <div id=\"p1\" class=\"tab-pane {% if address_vivienne == formation_form.lieu.vars.value %} active {% endif %}\" >
                                                {% if address_vivienne == formation_form.lieu.vars.value %}
                                                    {{ form_widget(formation_form.lieu, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                                {% endif %}
                                            </div>
                                            <div class=\"tab-pane {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value == address_societe %} active {% endif %}\" id=\"p2\">
                                                {% if address_vivienne != formation_form.lieu.vars.value %}
                                                    <input type=\"text\" placeholder=\"{{ address_societe }}\" disabled=\"true\">
                                                {% endif %}
                                            </div>
                                            <div class=\"tab-pane {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value != address_societe %} active {% endif %}\" id=\"p3\">
                                                {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value != address_societe %}
                                                    {{ form_widget(formation_form.lieu, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                                {% endif %}
                                            </div>
                                        {% elseif 'R' == type_formation %}
                                            <div class=\"tab-pane {% if address_vivienne == formation_form.lieu.vars.value %} active {% endif %}\" id=\"p1\">
                                                {% if address_vivienne == formation_form.lieu.vars.value %}
                                                    {{ form_widget(formation_form.lieu, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                                {% endif %}
                                            </div>
                                        {% elseif 'S' == type_formation %}
                                            <div class=\"tab-pane {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value == address_societe %} active {% endif %}\" id=\"p2\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"{{ address_societe }}\" disabled=\"true\">
                                            </div>
                                            <div class=\"tab-pane {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value != address_societe %} active {% endif %}\" id=\"p3\">
                                                {% if address_vivienne != formation_form.lieu.vars.value and formation_form.lieu.vars.value != address_societe %}
                                                    {{ form_widget(formation_form.lieu, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                                {% endif %}
                                            </div>
                                        {% endif %}
                                        <input type=\"hidden\" id=\"address_client\" value=\"{{ address_societe }}\">
                                    </div>
                                </div>
                                {% if 'A' == type_formation or 'R' == type_formation %}
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                {{ form_label(formation_form.dureeJours, 'Durée stage en J', {
                                                    'label_attr': {'class': 'font-weight-bold'}
                                                }) }}
                                                {{ form_widget(formation_form.dureeJours, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            {{ form_label(formation_form.dureeHeures, 'Durée stage en H', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(formation_form.dureeHeures, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                {{ form_label(formation_form.dureeHeures, 'Du', {
                                                    'label_attr': {'class': 'font-weight-bold'}
                                                }) }}
                                                {{ form_widget(formation_form.dateDebutPeriode, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                {{ form_label(formation_form.dureeHeures, 'Au', {
                                                    'label_attr': {'class': 'font-weight-bold'}
                                                }) }}
                                                {{ form_widget(formation_form.dateFinPeriode, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"col-sm-6\">
                                {% if 'S' == type_formation %}
                                    <div class=\"form-group text-center\">
                                        {{ form_label(formation_form.soustraitance, 'Sous-traitant', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formation_form.soustraitance, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                    </div>
                                {% endif %}

                                {% if 'A' == type_formation or 'R' == type_formation %}
                                    <div class=\"form-group text-center\">
                                        {{ form_label(formation_form.idFormateur, 'Formateur', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formation_form.idFormateur, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                    </div>
                                {% endif %}
                                <div class=\"form-group text-center\">
                                    {{ form_label(formation_form.nom, 'Intitulé du stage', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(formation_form.nom, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% if 'A' == type_formation or 'R' == type_formation %}
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            {% if oFormation.stagiaires %}
                                {%  set param = constant('\\\\App\\\\Constants\\\\ParamDossierStagiaire::DOSSIER_STAGIAIRE') %}
                                {% include 'Common/stagiaire-bloc.html.twig' with { prototype: formation_form.stagiaires.vars.prototype, stagiaires: formation_form.stagiaires, param_dossier_stagiaire: param } %}
                                {% do formation_form.stagiaires.setRendered %}
                            {% endif %}
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"col-sm-4\">
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Prix vente HT</div>
                                <div class=\"card-body\">
                                    {% if 'A' == type_formation or 'R' == type_formation %}
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pvTarifJ, 'Tarif par J', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(formation_form.pvTarifJ, {'attr': {'disabled': 'true', 'class': 'formation-field money-format'}} ) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pvTarifDj, 'Tarif par 1/2 J', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(formation_form.pvTarifDj, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pvTarifH, 'Tarif par H', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(formation_form.pvTarifH, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                        </div>
                                    {% endif %}
                                    <div class=\"form-group\">
                                        {{ form_label(formation_form.pvTotalHt, 'Total HT', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formation_form.pvTotalHt, {'attr': {'disabled': 'true', 'class': 'formation-field money-format'}} ) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Coût formateur HT</div>
                                <div class=\"card-body\">
                                    {% if 'A' == type_formation or 'R' == type_formation %}
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pfmteurJ, 'Tarif par J', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(formation_form.pfmteurJ, {'attr': {'disabled': 'true', 'class': 'formation-field money-format'}} ) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pfmteurDj, 'Tarif par 1/2 J', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(formation_form.pfmteurDj, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pfmteurH, 'Tarif par H', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(formation_form.pfmteurH, {'attr': {'disabled': 'true', 'class': 'formation-field'}} ) }}
                                        </div>
                                    {% endif %}
                                    <div class=\"form-group\">
                                        {{ form_label(formation_form.pfmteurTotalHt, 'Total HT', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formation_form.pfmteurTotalHt, {'attr': {'disabled': 'true', 'class': 'formation-field money-format'}} ) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 text-center\">
                            <p>Marge brute : 
                                <span  id=\"marge_brute\">
                                    {% if oFormation.montantMarge %} 
                                        {{ oFormation.montantMarge|number_format(2, ',', ' ') }} 
                                    {% else %}
                                        {{ ((oFormation.pvTotalHt * 1) - (oFormation.pfmteurTotalHt * 1)) |number_format(2, ',', ' ') }}
                                    {% endif %}
                                </span>
                            </p>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        <br>
        <div class=\"row\" id=\"suivi-om\">
            <fieldset>
                <legend>ORDRES DE MISSION</legend>
                {% if oFormation.suiviMissions %}
                    {% include 'formation/childs/suiviom-bloc.html.twig' with { prototype: formation_form.suiviMissions.vars.prototype, suiviMissions: formation_form.suiviMissions } %}                
                    {% do formation_form.suiviMissions.setRendered %}
                {% endif %}
            </fieldset>
        </div>
        <div class=\"row\">
            {% if oFormation.commentaires %}
                {% block commentaires %}
                    {% include 'Common/commentaire-bloc.html.twig' with { prototype: formation_form.commentaires.vars.prototype, commentaires: formation_form.commentaires } %}                            
                    {% do formation_form.commentaires.setRendered %}
                {% endblock %}
            {% endif %}
        </div>
        <div class=\"row my-5\">
            <div class=\"col-sm-12\">
                <p class=\"text-center\">
                    {% if oFormation.dossierType == \"Intra\" or oFormation.dossierType == \"Inter\" %}
                        <a class=\"btn btn-primary\" href=\"{{ path('formation_export_om_word', {'idFormation': oFormation.id})}}\" target=\"_blank\">Ordre de mission</a>
                    {% endif %}
                    <a class=\"btn btn-primary\" href=\"#\" id=\"mail_to_formateur\" data-id-formation=\"{{ (oFormation.idFormateur) ? oFormation.idFormateur.id: '' }}\">Mail OM formateur</a>
                    {% if evaluation is defined and evaluation is not null and evaluation is not empty %}
                        <a href=\"{{ path(\"download_programme_dossier\",{'fichier':evaluation}) }}\" class=\"btn btn-primary\">Envoie évaluation stagiaires</a>
                    {% else %}
                        <a href=\"#\" class=\"btn btn-primary disabled\">Envoie évaluation stagiaires indisponible</a>
                    {% endif %}
                    {#<a class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#myModal\">Envoie évaluation stagiaires</a>#}
                    <a class=\"btn btn-primary\" id=\"recap_for\" target=\"_blank\" href=\"{{ path('export_recap_formation', { 'id': oFormation.id }) }}\">Récap formateur</a>
                    <a href=\"#\" type=\"button\" class=\"btn btn-primary\" id=\"update_formation\">MAJ formation</a>
                    {% if is_granted('edit', 'Formations') %}
                        <button style=\"display: none\" type=\"submit\" class=\"btn btn-danger\" id=\"btn_update_formation\">Enregistrer mise à jour</button>
                    {% endif %}
                </p>
            </div>

        </div>
        {{ form_end(formation_form) }}

        <div class=\"container\">
            <!-- The Modal -->
            <div class=\"modal fade\" id=\"myModal\">
                <div class=\"modal-dialog modal-lg\">
                    <div class=\"modal-content\">

                        <!-- Modal Header -->
                        <div class=\"modal-header\">
                            <h4 class=\"modal-title\">Modal Heading</h4>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class=\"modal-body\">
                            <form id=\"evaluation_stagiaire\" action=\"\">
                                <div class=\"form-group\">
                                    <label for=\"email\">Adresse email</label>
                                    <input type=\"email\" id=\"email\" name=\"email\" class=\"form-control\" required>
                                </div>
                                <div>
                                    <label for=\"objet\">Objet</label>
                                    <input type=\"text\" name=\"objet\" id=\"objet\" class=\"form-control\" required>
                                </div>
                                <div class=\"form-group\">
                                    <label for=\"message\">Message</label>
                                    <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"3\" required>

                                    </textarea>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
                            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    {{  include ('formation/childs/formation.js.twig') }}
    {{  include ('Common/commentaire-js.html.twig') }}
    {{  include ('Common/stagiaire-js.html.twig') }}
    {{  include ('formation/childs/suiviom-js.twig') }}
    {% include 'formation/childs/calcul.vente.achat.js.html.twig' with {'typeFormation': type_formation} %}
    <script>
        //Cacher les boutons ajout stagiaire, ajout suivi OM, ajout commentaires
        \$('#add_stagiaire, #add_suiviom, #btnajoutcom').attr('style', 'visibility: hidden');
        \$('document').ready(function () {
            var submit = false;
            var parentForm = \$('form#formation_form');

            // Veroullage des champs stagiaires au chargement de la page
            \$('input[name*=\"stagiaires\"], select[name*=\"stagiaires\"]').attr('disabled', 'disabled');

            //Veroullage des champs ordre de mission au chargement de la page
            \$('input[name*=\"suiviMissions\"], textarea[name*=\"suiviMissions\"], select[name*=\"suiviMissions\"]').attr('disabled', 'disabled');

            //Verouillage des champs suivi ordre de missions
            \$('input[name*=\"commentaires\"], select[name*=\"commentaires\"], textarea[name*=\"commentaires\"]').attr('disabled', 'disabled');

            // Déverouller les champs
            \$('a#update_formation').click(function (e) {
                e.preventDefault();
                \$('#add_stagiaire, #add_suiviom, #btnajoutcom').attr('style', 'visibility: visible').prop(\"disabled\", false);


                if (!submit) { //Si les champs sont déverouillés, alors sousmission formulaire
                    \$('#stagiaires_collection .form-control, #suiviom_collection .form-control, #commentaires_collection .form-control, .formation-field').each(function () {
                        if (this.hasAttribute('disabled')) {
                            \$(this).removeAttr('disabled');
                        }
                    });

                    \$('#btn_update_formation').attr('style', 'display: inline');
                    submit = true;
                }
            });

            /** Send email to formateur or relance formateur **/
            \$('#mail_to_formateur, #relance_formateur').click(function (e) {
                e.preventDefault();
                var idFormateur = \$(this).attr(\"data-id-formation\");

                \$.ajax({
                    url: \"{{ path('formation_send_om_formateur') }}\",
                    type: 'POST',
                    data: {'idFormateur': idFormateur},
                    success: function (data) {
                        console.log(data);
                    }
                });
            });
            /** Fin Send email to formateur **/

            \$('.js-datepicker-note').datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });

            //Suppression commentaire
            \$('.delete-stagiaire').on('click', function () {
                removeStagiaire(this);
            });
            var dossierNom = \$('#formation_nom');
            var pathurl = '{{ path('crm.dossier.competence.asynch-search') }}';
            var intitule = {{ intitule|json_encode|raw }};
                    for (let key in intitule) {
                if (intitule[key] != null) {
                    setIntituleStage(intitule[key]);
                }
            }
            function setIntituleStage(intitule) {
                var intituleSelect = \$('#formation_nom');
                var url = '{{ path('crm.dossier.competence.asynch-search-one', {initule:'intitule'}) }}';
                url = url.replace('intitule', intitule);
                \$.ajax({
                    type: 'GET',
                    url: url,
                    data: 'intitule=' + intitule
                }).then(function (data) {
                    // create the option and append to Select2
                    var dataSelected = (data['results'][0]);
                    var option = new Option(dataSelected.text, dataSelected.text, true, true);
                    intituleSelect.append(option).trigger('change');
                    // manually trigger the `select2:select` event
                    intituleSelect.trigger({
                        type: 'select2:select',
                        params: {
                            data: data
                        }
                    });
                });
            }
            dossierNom.select2({
                placeholder: \"-- Intitulé --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: pathurl,
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        var dataResults = data.results !== undefined ? data.results : [];
                        return {
                            results: \$.map(dataResults, function (item) {
                                return {
                                    text: item.text,
                                    id: item.idid
                                };
                            })
                        };
                    }
                }
            });
        });

                const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"formation_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#formation_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
    </script>
{% endblock %}", "formation/edit.formation.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/edit.formation.html.twig");
    }
}
