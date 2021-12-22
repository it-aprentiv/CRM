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

/* domiciliationlocation/create.html.twig */
class __TwigTemplate_746dc85a5380b2a8f60c5c434651322ddc6720475e3b67ebc4c67ebd66f4e1a3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/create.html.twig"));

        // line 3
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 3, $this->source); })()), [0 => $this->getTemplateName()], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "domiciliationlocation/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Domiciliation et location - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/form.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Domiciliation_Location_Controller");
        echo "\" title=\"Liste des domiciliations/locations\">";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</li>
            </ol>
            <div>
                ";
        // line 23
        if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Dossiers") && (isset($context["is_modif"]) || array_key_exists("is_modif", $context))) && (isset($context["is_modif"]) || array_key_exists("is_modif", $context) ? $context["is_modif"] : (function () { throw new RuntimeError('Variable "is_modif" does not exist.', 23, $this->source); })()))) {
            // line 24
            echo "                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier la fiche
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                ";
        }
        // line 33
        echo "            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">FICHE DOMICILIATION/LOCATION</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 40, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
            <div class=\"row p-3 mb-3 well\">
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 45, $this->source); })()), "client", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Client"]);
        // line 47
        echo "
                            </div>
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 49, $this->source); })()), "client", [], "any", false, false, false, 49), 'widget');
        echo "
                            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 50, $this->source); })()), "client", [], "any", false, false, false, 50), 'errors');
        echo "
                        </div>
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 54, $this->source); })()), "type", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Type"]);
        // line 56
        echo "
                                <a id=\"typeDom\" style=\"background:#fff;color:green;cursor: pointer\" name=\"typeDom\" data-toggle=\"modal\" data-target=\"#modalType\" ><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                            </div>
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 59, $this->source); })()), "type", [], "any", false, false, false, 59), 'widget');
        echo "
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 60, $this->source); })()), "type", [], "any", false, false, false, 60), 'errors');
        echo "
                        </div>
                        <div class=\"form-group col-md-4 text-center\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 63, $this->source); })()), "partenaire", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Partenaire"]);
        // line 65
        echo "
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 66, $this->source); })()), "partenaire", [], "any", false, false, false, 66), 'widget', ["label_attr" => ["class" => "font-weight-bold star-on-required"]]);
        // line 69
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            <div class=\"label-field\">
                                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 77, $this->source); })()), "ref", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "N° de ref"]);
        // line 79
        echo "
                            </div>
                            ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 81, $this->source); })()), "ref", [], "any", false, false, false, 81), 'widget');
        echo "
                            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 82, $this->source); })()), "ref", [], "any", false, false, false, 82), 'errors');
        echo "
                        </div>
                        <div class=\"form-group col-md-6 text-center none-in-domiciliation\">
                            <div class=\"label-field\">
                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 86, $this->source); })()), "salle", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Salles"]);
        // line 88
        echo "
                            </div>
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 90, $this->source); })()), "salle", [], "any", false, false, false, 90), 'widget', ["attr" => ["onchange" => "loadDefaultTarif()"]]);
        // line 94
        echo "
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 95, $this->source); })()), "salle", [], "any", false, false, false, 95), 'errors');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"row\">
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 103, $this->source); })()), "lieu", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Lieu"]);
        // line 105
        echo "
                            </div>
                            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 107, $this->source); })()), "lieu", [], "any", false, false, false, 107), 'widget');
        echo "
                            ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 108, $this->source); })()), "lieu", [], "any", false, false, false, 108), 'errors');
        echo "
                        </div>
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 112, $this->source); })()), "statut", [], "any", false, false, false, 112), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Statut"]);
        // line 114
        echo "
                            </div>
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 116, $this->source); })()), "statut", [], "any", false, false, false, 116), 'widget');
        echo "
                            ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 117, $this->source); })()), "statut", [], "any", false, false, false, 117), 'errors');
        echo "
                        </div>

                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 122, $this->source); })()), "commercial", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Commercial"]);
        // line 124
        echo "
                            </div>
                            ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 126, $this->source); })()), "commercial", [], "any", false, false, false, 126), 'widget');
        echo "
                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 127, $this->source); })()), "commercial", [], "any", false, false, false, 127), 'errors');
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row well p-3\">
                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 136, $this->source); })()), "signature", [], "any", false, false, false, 136), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Date signature"]);
        // line 138
        echo "
                    </div>
                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 140, $this->source); })()), "signature", [], "any", false, false, false, 140), 'widget');
        echo "
                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 141, $this->source); })()), "signature", [], "any", false, false, false, 141), 'errors');
        echo "
                </div>

                <div class=\"form-group col-md-2 text-center none-in-domiciliation\">
                    <div class=\"label-field\">
                        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 146, $this->source); })()), "fixe", [], "any", false, false, false, 146), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Montant fixé"]);
        // line 148
        echo "
                    </div>
                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 150, $this->source); })()), "fixe", [], "any", false, false, false, 150), 'widget');
        echo "
                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 151, $this->source); })()), "fixe", [], "any", false, false, false, 151), 'errors');
        echo "
                </div>

                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 156, $this->source); })()), "debut", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Début période"]);
        // line 158
        echo "
                    </div>
                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 160, $this->source); })()), "debut", [], "any", false, false, false, 160), 'widget');
        echo "
                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 161, $this->source); })()), "debut", [], "any", false, false, false, 161), 'errors');
        echo "
                </div>

                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 166, $this->source); })()), "fin", [], "any", false, false, false, 166), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Fin période"]);
        // line 168
        echo "
                    </div>
                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 170, $this->source); })()), "fin", [], "any", false, false, false, 170), 'widget');
        echo "
                    ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 171, $this->source); })()), "fin", [], "any", false, false, false, 171), 'errors');
        echo "
                </div>

                <div class=\"form-group col-md-1 text-center none-in-domiciliation\">
                    <div class=\"label-field\">
                        ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 176, $this->source); })()), "nbj", [], "any", false, false, false, 176), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Nb J"]);
        // line 178
        echo "
                    </div>
                    ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 180, $this->source); })()), "nbj", [], "any", false, false, false, 180), 'widget');
        echo "
                    ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 181, $this->source); })()), "nbj", [], "any", false, false, false, 181), 'errors');
        echo "
                </div>
                <div class=\"form-group col-md-1 text-center none-in-domiciliation\">
                    <div class=\"label-field\">
                        ";
        // line 185
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 185, $this->source); })()), "nbh", [], "any", false, false, false, 185), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Nb H"]);
        // line 187
        echo "
                    </div>
                    ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 189, $this->source); })()), "nbh", [], "any", false, false, false, 189), 'widget');
        echo "
                    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 190, $this->source); })()), "nbh", [], "any", false, false, false, 190), 'errors');
        echo "
                </div>
                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 194, $this->source); })()), "creation", [], "any", false, false, false, 194), 'label', ["label_attr" => ["class" => "font-weight-bold star-on-required"], "label" => "Date création"]);
        // line 196
        echo "
                    </div>
                    ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 198, $this->source); })()), "creation", [], "any", false, false, false, 198), 'widget');
        echo "
                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 199, $this->source); })()), "creation", [], "any", false, false, false, 199), 'errors');
        echo "
                </div>
            </div>


            <div class=\"col-sm-12 p-3 mt-3 well\">
                ";
        // line 205
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 205, $this->source); })()), "facture", [], "any", false, false, false, 205), "vars", [], "any", false, false, false, 205), "valid", [], "any", false, false, false, 205)) {
            // line 206
            echo "                    ";
            $context["isFactureActive"] = true;
            // line 207
            echo "                ";
        } else {
            // line 208
            echo "                    ";
            $context["isFactureActive"] = false;
            // line 209
            echo "                ";
        }
        // line 210
        echo "                ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 210, $this->source); })()), "commentaires", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "valid", [], "any", false, false, false, 210)) {
            // line 211
            echo "                    ";
            $context["isFactureActive"] = false;
            // line 212
            echo "                ";
        }
        // line 213
        echo "                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\" ><a class=\"nav-link ";
        // line 214
        if ( !(isset($context["isFactureActive"]) || array_key_exists("isFactureActive", $context) ? $context["isFactureActive"] : (function () { throw new RuntimeError('Variable "isFactureActive" does not exist.', 214, $this->source); })())) {
            echo "active";
        }
        echo "\" href=\"#tabnote\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tabnote\" aria-selected=\"true\">Notes</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link ";
        // line 215
        if ((isset($context["isFactureActive"]) || array_key_exists("isFactureActive", $context) ? $context["isFactureActive"] : (function () { throw new RuntimeError('Variable "isFactureActive" does not exist.', 215, $this->source); })())) {
            echo "active";
        }
        echo "\" href=\"#tabfacture\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tabfacture\" aria-selected=\"false\">Facturation</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div id=\"tabnote\" class=\"tab-pane fade ";
        // line 218
        if ( !(isset($context["isFactureActive"]) || array_key_exists("isFactureActive", $context) ? $context["isFactureActive"] : (function () { throw new RuntimeError('Variable "isFactureActive" does not exist.', 218, $this->source); })())) {
            echo "show active";
        }
        echo "\" role=\"tabpanel\" aria-labelledby=\"tabnote-tab\">
                        ";
        // line 219
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "domiciliationlocation/create.html.twig", 219)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 219, $this->source); })()), "commentaires", [], "any", false, false, false, 219), "vars", [], "any", false, false, false, 219), "prototype", [], "any", false, false, false, 219), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 219, $this->source); })()), "commentaires", [], "any", false, false, false, 219)]));
        // line 220
        echo "                        ";
        // line 221
        echo "                        ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 221, $this->source); })()), "commentaires", [], "any", false, false, false, 221), "setRendered", [], "any", false, false, false, 221);
        // line 222
        echo "                    </div>
                    <div id=\"tabfacture\" class=\"tab-pane fade row ";
        // line 223
        if ((isset($context["isFactureActive"]) || array_key_exists("isFactureActive", $context) ? $context["isFactureActive"] : (function () { throw new RuntimeError('Variable "isFactureActive" does not exist.', 223, $this->source); })())) {
            echo "show active";
        }
        echo "\" role=\"tabpanel\" aria-labelledby=\"tabfacture-tab\" style=\"text-align: center\">
                        <div class=\"col-sm-12\">
                            <div class=\"input-group mb-3 col-sm-2\">
                                <input type=\"text\" class=\"form-control\" value=\"AJOUTER\" readonly>
                                <div class=\"input-group-append\">
                                    <input class=\"input-group-text btn btn-light\" type=\"button\" onclick=\"ajoutFacture();\" value=\"+\">
                                </div>
                            </div>
                        </div>
                        <div id=\"facture_form\" class=\"col col-sm-8\" ";
        // line 232
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 232, $this->source); })()), "facture", [], "any", false, false, false, 232), "vars", [], "any", false, false, false, 232), "display", [], "any", false, false, false, 232)) {
            echo "style=\"display:none;\"";
        }
        echo ">
                            ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 233, $this->source); })()), "facture", [], "any", false, false, false, 233), 'row');
        echo "
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-12 p-3 mt-3 well\" style=\"text-align: center\">
                <input type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 5%;\" value=\"Enregistrer\" ";
        // line 240
        echo ((((isset($context["is_modif"]) || array_key_exists("is_modif", $context)) && (isset($context["is_modif"]) || array_key_exists("is_modif", $context) ? $context["is_modif"] : (function () { throw new RuntimeError('Variable "is_modif" does not exist.', 240, $this->source); })()))) ? ("disabled=\"disabled\"") : (""));
        echo " >
            </div>
            ";
        // line 242
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 242, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    ";
        // line 245
        $this->loadTemplate("domiciliationlocation/part/ajout-type.html.twig", "domiciliationlocation/create.html.twig", 245)->display(twig_array_merge($context, ["typeId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 245, $this->source); })()), "type", [], "any", false, false, false, 245), "vars", [], "any", false, false, false, 245), "id", [], "any", false, false, false, 245)]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 248
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 249
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 250
        $this->loadTemplate("domiciliationlocation/part/ajout-type-js.html.twig", "domiciliationlocation/create.html.twig", 250)->display($context);
        // line 251
        echo "    ";
        $this->loadTemplate("Common/commentaire-js.html.twig", "domiciliationlocation/create.html.twig", 251)->display($context);
        // line 252
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 255
        $this->loadTemplate("Common/client-ajax-js.html.twig", "domiciliationlocation/create.html.twig", 255)->display(twig_array_merge($context, ["attrs" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 255, $this->source); })()), "client", [], "any", false, false, false, 255), "vars", [], "any", false, false, false, 255), ["structure" => "proform"])]));
        // line 256
        echo "
    <script type=\"text/javascript\">

                                        // charger montant fixe par défaut
                                        function loadDefaultTarif(){
                                        var tarif = \$('#";
        // line 261
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 261, $this->source); })()), "salle", [], "any", false, false, false, 261), "vars", [], "any", false, false, false, 261), "id", [], "any", false, false, false, 261), "html", null, true);
        echo " option:selected').attr('title');
                                        var montantFixe = \$('#";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 262, $this->source); })()), "fixe", [], "any", false, false, false, 262), "vars", [], "any", false, false, false, 262), "id", [], "any", false, false, false, 262), "html", null, true);
        echo "');
                                        montantFixe.val(tarif);
                                        montantFixe.trigger('blur');
                                        }

                                        function showFacture() {
                                        var factureForm = \$('#facture_form');
                                        factureForm.find('input').removeAttr('disabled');
                                        factureForm.show();
                                        }

                                        function ajoutFacture(){

                                        var factureNumero = \$('#";
        // line 275
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 275, $this->source); })()), "facture", [], "any", false, false, false, 275), "numero", [], "any", false, false, false, 275), "vars", [], "any", false, false, false, 275), "id", [], "any", false, false, false, 275), "html", null, true);
        echo "');
                                        if (factureNumero.val()) {
                                        return false;
                                        }

                                        \$.ajax({
                                        type: 'GET',
                                                url: \"";
        // line 282
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_generate_numero");
        echo "\",
                                                data: { structure: \"";
        // line 283
        echo twig_escape_filter($this->env, twig_constant("App\\Constants\\Structure::LIB_PROFORM"), "html", null, true);
        echo "\" },
                                                success: function (response) {
                                                if (!response.error) {
                                                \$('#";
        // line 286
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 286, $this->source); })()), "facture", [], "any", false, false, false, 286), "numero", [], "any", false, false, false, 286), "vars", [], "any", false, false, false, 286), "id", [], "any", false, false, false, 286), "html", null, true);
        echo "').val(response.numero);
                                                showFacture();
                                                // MAJ montant facture si location : 
                                                if (\$('#";
        // line 289
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 289, $this->source); })()), "type", [], "any", false, false, false, 289), "vars", [], "any", false, false, false, 289), "id", [], "any", false, false, false, 289), "html", null, true);
        echo "').val() ==  ";
        echo twig_escape_filter($this->env, twig_constant("App\\Constants\\Typedom::LOCATION"), "html", null, true);
        echo " ) {
                                                updateMontantFacture();
                                                }
                                                } else {
                                                alert(response.message)
                                                }
                                                },
                                                error: function () {
                                                alert('Erreur de la génération de numéro !');
                                                }
                                        });
                                        }

                                        function setRequired(div, required){
                                        \$(div).each(function () {
                                        if (required) {
                                        \$(this).find('[name]').attr('required', 'required');
                                        \$(this).find('label').addClass('required');
                                        } else {
                                        \$(this).find('[name]').removeAttr('required');
                                        \$(this).find('label.required').removeClass('required');
                                        }
                                        });
                                        }

                                        function setFieldRequired(\$oField) {
                                        // Set required
                                        \$oField.attr(\"required\", \"required\");
                                        \$oField.prev('div').find('label').addClass('required');
                                        }

                                        function removeFieldRequired(\$oField) {
                                        \$oField.removeAttr('required');
                                        \$oField.prev('div').find('label.required').removeClass('required');
                                        \$oField.val(\"\");
                                        }

                                        function removeFieldRequiredWithValue(\$oField) {
                                        \$oField.removeAttr('required');
                                        var isDefined = \$oField.prev('div').attr('class');
                                        if (typeof isDefined != 'undefined') {
                                        \$oField.prev('div').find('label.required').removeClass('required');
                                        } else {
                                        \$oField.closest('div').prev('div').find('label.required').removeClass('required');
                                        }

                                        }

                                        // MAJ Montant facture
                                        function updateMontantFacture() {
                                        let factureNumero = \$('#";
        // line 339
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 339, $this->source); })()), "facture", [], "any", false, false, false, 339), "numero", [], "any", false, false, false, 339), "vars", [], "any", false, false, false, 339), "id", [], "any", false, false, false, 339), "html", null, true);
        echo "');
                                        if (factureNumero.val()) {
                                        var iDuration = common.parseMoney(\$('#";
        // line 341
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 341, $this->source); })()), "nbj", [], "any", false, false, false, 341), "vars", [], "any", false, false, false, 341), "id", [], "any", false, false, false, 341), "html", null, true);
        echo "').val());
                                        if (common.parseMoney(\$('#";
        // line 342
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 342, $this->source); })()), "nbh", [], "any", false, false, false, 342), "vars", [], "any", false, false, false, 342), "id", [], "any", false, false, false, 342), "html", null, true);
        echo "').val()) > 0) {
                                        iDuration = common.parseMoney(\$('#";
        // line 343
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 343, $this->source); })()), "nbh", [], "any", false, false, false, 343), "vars", [], "any", false, false, false, 343), "id", [], "any", false, false, false, 343), "html", null, true);
        echo "').val());
                                        }

                                        let iMontantFacture = iDuration * common.parseMoney(\$('#";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 346, $this->source); })()), "fixe", [], "any", false, false, false, 346), "vars", [], "any", false, false, false, 346), "id", [], "any", false, false, false, 346), "html", null, true);
        echo "').val());
                                        \$('#";
        // line 347
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 347, $this->source); })()), "facture", [], "any", false, false, false, 347), "montant", [], "any", false, false, false, 347), "vars", [], "any", false, false, false, 347), "id", [], "any", false, false, false, 347), "html", null, true);
        echo "').val(common.formatMoney(iMontantFacture));
                                        }
                                        }


                                        \$(document).ready(function () {
        ";
        // line 354
        echo "                var isModifForm = false;
        ";
        // line 355
        if (((isset($context["is_modif"]) || array_key_exists("is_modif", $context)) && (isset($context["is_modif"]) || array_key_exists("is_modif", $context) ? $context["is_modif"] : (function () { throw new RuntimeError('Variable "is_modif" does not exist.', 355, $this->source); })()))) {
            // line 356
            echo "                isModifForm = true;
                removeFieldRequiredWithValue(\$('#";
            // line 357
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 357, $this->source); })()), "fixe", [], "any", false, false, false, 357), "vars", [], "any", false, false, false, 357), "id", [], "any", false, false, false, 357), "html", null, true);
            echo "'));
        ";
        }
        // line 359
        echo "
        ";
        // line 360
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 360, $this->source); })()), "facture", [], "any", false, false, false, 360), "vars", [], "any", false, false, false, 360), "value", [], "any", false, false, false, 360)) {
            // line 361
            echo "                showFacture();
        ";
        }
        // line 363
        echo "
        ";
        // line 365
        echo "                var reference = \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 365, $this->source); })()), "ref", [], "any", false, false, false, 365), "vars", [], "any", false, false, false, 365), "id", [], "any", false, false, false, 365), "html", null, true);
        echo "');
                \$('#";
        // line 366
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 366, $this->source); })()), "type", [], "any", false, false, false, 366), "vars", [], "any", false, false, false, 366), "id", [], "any", false, false, false, 366), "html", null, true);
        echo "').change(function(){
                var selected = \$(this).find('option:selected').text();
                // set not required if domiciliation
                var isDom = selected === \"";
        // line 369
        echo twig_escape_filter($this->env, twig_constant("App\\Entity\\Typedom::DOMICILIATION"), "html", null, true);
        echo "\";
                setRequired('.none-in-domiciliation', !isDom);
        ";
        // line 372
        echo "                    if (!isDom) {
                    removeFieldRequired(\$('#";
        // line 373
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 373, $this->source); })()), "nbh", [], "any", false, false, false, 373), "vars", [], "any", false, false, false, 373), "id", [], "any", false, false, false, 373), "html", null, true);
        echo "'));
        ";
        // line 376
        echo "                        }
        ";
        // line 378
        echo "                    if (isModifForm){
                    removeFieldRequiredWithValue(\$('#";
        // line 379
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 379, $this->source); })()), "fixe", [], "any", false, false, false, 379), "vars", [], "any", false, false, false, 379), "id", [], "any", false, false, false, 379), "html", null, true);
        echo "'));
                    }

        ";
        // line 382
        if ((( !(isset($context["is_modif"]) || array_key_exists("is_modif", $context)) ||  !(isset($context["is_modif"]) || array_key_exists("is_modif", $context) ? $context["is_modif"] : (function () { throw new RuntimeError('Variable "is_modif" does not exist.', 382, $this->source); })())) || ((isset($context["is_modif"]) || array_key_exists("is_modif", $context) ? $context["is_modif"] : (function () { throw new RuntimeError('Variable "is_modif" does not exist.', 382, $this->source); })()) && twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 382, $this->source); })()), "ref", [], "any", false, false, false, 382), "vars", [], "any", false, false, false, 382), "value", [], "any", false, false, false, 382))))) {
            // line 383
            echo "                    \$.ajax({
                    type: 'POST',
                            url: \"";
            // line 385
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.domiciliation.generer_reference");
            echo "\",
                            data: { type: \$('#";
            // line 386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 386, $this->source); })()), "type", [], "any", false, false, false, 386), "vars", [], "any", false, false, false, 386), "id", [], "any", false, false, false, 386), "html", null, true);
            echo "').val() },
                            success: function (response) {
                            if (response.success) {
                            reference.val(response.reference);
                            } else {
                            reference.val('');
                            alert(response.message);
                            }
                            },
                            error: function () {
                            reference.val('');
                            alert('Erreur inattendue. Veuillez recommencer SVP.');
                            }
                    });
        ";
        }
        // line 401
        echo "                    });
        ";
        // line 402
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["domicil_form"] ?? null), "vars", [], "any", false, true, false, 402), "attr", [], "any", false, true, false, 402), "id", [], "any", true, true, false, 402)) {
            // line 403
            echo "                \$('form#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 403, $this->source); })()), "vars", [], "any", false, false, false, 403), "attr", [], "any", false, false, false, 403), "id", [], "any", false, false, false, 403), "html", null, true);
            echo "').on('submit', function (event) {
                if (!reference.val()) {
                alert('Le référence ne doit pas être vide !');
                event.preventDefault();
                }
                var numeroFacture = \$('#";
            // line 408
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 408, $this->source); })()), "facture", [], "any", false, false, false, 408), "numero", [], "any", false, false, false, 408), "vars", [], "any", false, false, false, 408), "id", [], "any", false, false, false, 408), "html", null, true);
            echo "');
                if (numeroFacture.val().length === 0 && numeroFacture.is(':enabled')) {
                alert('Le numéro de facture ne doit pas être vide !');
                event.preventDefault();
                }
                });
        ";
        }
        // line 415
        echo "
                \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                        'autoclose': true,
                        'language': 'fr',
                });
        ";
        // line 422
        echo "                \$('#";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 422, $this->source); })()), "nbj", [], "any", false, false, false, 422), "vars", [], "any", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
        echo ", #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 422, $this->source); })()), "nbh", [], "any", false, false, false, 422), "vars", [], "any", false, false, false, 422), "id", [], "any", false, false, false, 422), "html", null, true);
        echo "').on('keyup blur', function(e) {

                if (\$('#";
        // line 424
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 424, $this->source); })()), "type", [], "any", false, false, false, 424), "vars", [], "any", false, false, false, 424), "id", [], "any", false, false, false, 424), "html", null, true);
        echo "').val() ==  ";
        echo twig_escape_filter($this->env, twig_constant("App\\Constants\\Typedom::LOCATION"), "html", null, true);
        echo " ) {
                // Si on met à jour le champ nbJ => On rend obligatoire le champ
                // et on ne rend pas obligatoire 
                if (\$(this).attr('id') == '";
        // line 427
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 427, $this->source); })()), "nbj", [], "any", false, false, false, 427), "vars", [], "any", false, false, false, 427), "id", [], "any", false, false, false, 427), "html", null, true);
        echo "') {
                removeFieldRequired(\$('#";
        // line 428
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 428, $this->source); })()), "nbh", [], "any", false, false, false, 428), "vars", [], "any", false, false, false, 428), "id", [], "any", false, false, false, 428), "html", null, true);
        echo "'));
                setFieldRequired(\$(this));
                } else {
                removeFieldRequired(\$('#";
        // line 431
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 431, $this->source); })()), "nbj", [], "any", false, false, false, 431), "vars", [], "any", false, false, false, 431), "id", [], "any", false, false, false, 431), "html", null, true);
        echo "'));
                setFieldRequired(\$(this));
                }

        ";
        // line 436
        echo "                        const iDuration = \$(this).val();
                        let factureNumero = \$('#";
        // line 437
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 437, $this->source); })()), "facture", [], "any", false, false, false, 437), "numero", [], "any", false, false, false, 437), "vars", [], "any", false, false, false, 437), "id", [], "any", false, false, false, 437), "html", null, true);
        echo "');
                        if (factureNumero.val()) {
                        let iMontantFacture = iDuration * common.parseMoney(\$('#";
        // line 439
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 439, $this->source); })()), "fixe", [], "any", false, false, false, 439), "vars", [], "any", false, false, false, 439), "id", [], "any", false, false, false, 439), "html", null, true);
        echo "').val());
                        \$('#";
        // line 440
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 440, $this->source); })()), "facture", [], "any", false, false, false, 440), "montant", [], "any", false, false, false, 440), "vars", [], "any", false, false, false, 440), "id", [], "any", false, false, false, 440), "html", null, true);
        echo "').val(common.formatMoney(iMontantFacture));
                        }
                        }
                        });
                        // Si montant fixe modifié : alors modifer montant facture
                        \$('#";
        // line 445
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 445, $this->source); })()), "fixe", [], "any", false, false, false, 445), "vars", [], "any", false, false, false, 445), "id", [], "any", false, false, false, 445), "html", null, true);
        echo ", #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 445, $this->source); })()), "salle", [], "any", false, false, false, 445), "vars", [], "any", false, false, false, 445), "id", [], "any", false, false, false, 445), "html", null, true);
        echo "').on('change keyup blur', function() {
                        updateMontantFacture();
                        });
        ";
        // line 449
        echo "
                var typeVal = \$('#";
        // line 450
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 450, $this->source); })()), "type", [], "any", false, false, false, 450), "vars", [], "any", false, false, false, 450), "id", [], "any", false, false, false, 450), "html", null, true);
        echo "').val();
                manageFactureFields(typeVal);
                manageNbJHFields(typeVal);
                \$('#";
        // line 453
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 453, $this->source); })()), "type", [], "any", false, false, false, 453), "vars", [], "any", false, false, false, 453), "id", [], "any", false, false, false, 453), "html", null, true);
        echo "').on('change', function(e) {
        ";
        // line 455
        echo "                    manageNbJHFields(\$(this).val());
        ";
        // line 457
        echo "
        ";
        // line 459
        echo "                    manageFactureFields(\$(this).val());
        ";
        // line 461
        echo "                    });
                    });
        ";
        // line 464
        echo "            function manageFactureFields(typeVal) {
            var inputDepotGarantie = \$('#domiciliation_facture_depotGarantie');
            var inputRemise = \$('#domiciliation_facture_remise');
            // Cacher les conteneur des 2 champs factures : dépôt garantie et remise
            \$(inputDepotGarantie).closest('.form-group').hide();
            \$(inputRemise).closest('.form-group').hide();
            // Si le type n'est pas défini on cache le dépôt de garantie (caractéristique domiciliation)
            if (Boolean(typeVal)) {
            // Si domiciliation alors cacher le champ tarif réduit
            // Afficher le champ : Dépôt de garantie 
            if (typeVal == ";
        // line 474
        echo twig_escape_filter($this->env, twig_constant("App\\Constants\\Typedom::DOMICILIATION"), "html", null, true);
        echo ") {
            \$(inputDepotGarantie).closest('.form-group').show();
            } else if (typeVal == ";
        // line 476
        echo twig_escape_filter($this->env, twig_constant("App\\Constants\\Typedom::LOCATION"), "html", null, true);
        echo "){
            // APR-116 Si location : cache le champ Dépôt de garantie
            // Afficher le champ : Tarif réduit
            \$(inputRemise).closest('.form-group').show();
            }
            }
            }
        ";
        // line 484
        echo "
        ";
        // line 486
        echo "            function manageNbJHFields(typeVal) {
            if (typeVal ==  ";
        // line 487
        echo twig_escape_filter($this->env, twig_constant("App\\Constants\\Typedom::DOMICILIATION"), "html", null, true);
        echo " ) {
            \$('#";
        // line 488
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 488, $this->source); })()), "nbh", [], "any", false, false, false, 488), "vars", [], "any", false, false, false, 488), "id", [], "any", false, false, false, 488), "html", null, true);
        echo "').prop('disabled', true).val('');
            \$('#";
        // line 489
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 489, $this->source); })()), "nbj", [], "any", false, false, false, 489), "vars", [], "any", false, false, false, 489), "id", [], "any", false, false, false, 489), "html", null, true);
        echo "').prop('disabled', true).val('');
            } else {
            \$('#";
        // line 491
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 491, $this->source); })()), "nbh", [], "any", false, false, false, 491), "vars", [], "any", false, false, false, 491), "id", [], "any", false, false, false, 491), "html", null, true);
        echo "').prop('disabled', false);
            \$('#";
        // line 492
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["domicil_form"]) || array_key_exists("domicil_form", $context) ? $context["domicil_form"] : (function () { throw new RuntimeError('Variable "domicil_form" does not exist.', 492, $this->source); })()), "nbj", [], "any", false, false, false, 492), "vars", [], "any", false, false, false, 492), "id", [], "any", false, false, false, 492), "html", null, true);
        echo "').prop('disabled', false);
            }
            }
        ";
        // line 496
        echo "

            \$('#domiciliation_creation, #domiciliation_facture_date').datepicker({
                format: \"dd/mm/yyyy\",
                endDate: '+0d',
                'language': 'fr',
            });
            \$('#domiciliation_facture_date').datepicker({
                format: \"dd/mm/yyyy\",
                endDate: '+0d',
                'language': 'fr',
            });
            
            const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"domiciliation_debut\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#domiciliation_fin').datepicker({
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
        return "domiciliationlocation/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  982 => 496,  976 => 492,  972 => 491,  967 => 489,  963 => 488,  959 => 487,  956 => 486,  953 => 484,  943 => 476,  938 => 474,  926 => 464,  922 => 461,  919 => 459,  916 => 457,  913 => 455,  909 => 453,  903 => 450,  900 => 449,  892 => 445,  884 => 440,  880 => 439,  875 => 437,  872 => 436,  865 => 431,  859 => 428,  855 => 427,  847 => 424,  839 => 422,  831 => 415,  821 => 408,  812 => 403,  810 => 402,  807 => 401,  789 => 386,  785 => 385,  781 => 383,  779 => 382,  773 => 379,  770 => 378,  767 => 376,  763 => 373,  760 => 372,  755 => 369,  749 => 366,  744 => 365,  741 => 363,  737 => 361,  735 => 360,  732 => 359,  727 => 357,  724 => 356,  722 => 355,  719 => 354,  710 => 347,  706 => 346,  700 => 343,  696 => 342,  692 => 341,  687 => 339,  632 => 289,  626 => 286,  620 => 283,  616 => 282,  606 => 275,  590 => 262,  586 => 261,  579 => 256,  577 => 255,  572 => 252,  569 => 251,  567 => 250,  562 => 249,  552 => 248,  542 => 245,  536 => 242,  531 => 240,  521 => 233,  515 => 232,  501 => 223,  498 => 222,  495 => 221,  493 => 220,  491 => 219,  485 => 218,  477 => 215,  471 => 214,  468 => 213,  465 => 212,  462 => 211,  459 => 210,  456 => 209,  453 => 208,  450 => 207,  447 => 206,  445 => 205,  436 => 199,  432 => 198,  428 => 196,  426 => 194,  419 => 190,  415 => 189,  411 => 187,  409 => 185,  402 => 181,  398 => 180,  394 => 178,  392 => 176,  384 => 171,  380 => 170,  376 => 168,  374 => 166,  366 => 161,  362 => 160,  358 => 158,  356 => 156,  348 => 151,  344 => 150,  340 => 148,  338 => 146,  330 => 141,  326 => 140,  322 => 138,  320 => 136,  308 => 127,  304 => 126,  300 => 124,  298 => 122,  290 => 117,  286 => 116,  282 => 114,  280 => 112,  273 => 108,  269 => 107,  265 => 105,  263 => 103,  252 => 95,  249 => 94,  247 => 90,  243 => 88,  241 => 86,  234 => 82,  230 => 81,  226 => 79,  224 => 77,  214 => 69,  212 => 66,  209 => 65,  207 => 63,  201 => 60,  197 => 59,  192 => 56,  190 => 54,  183 => 50,  179 => 49,  175 => 47,  173 => 45,  165 => 40,  156 => 33,  145 => 24,  143 => 23,  137 => 20,  131 => 19,  127 => 18,  122 => 15,  112 => 14,  100 => 11,  93 => 8,  83 => 7,  64 => 5,  53 => 1,  51 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% form_theme domicil_form _self %}

{% block title %}Domiciliation et location - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
    <link href=\"{{ asset('assets/css/form.css') }}\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"{{ path('Domiciliation_Location_Controller') }}\" title=\"Liste des domiciliations/locations\">{{ title }}</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">{{ title }}</li>
            </ol>
            <div>
                {% if is_granted('edit', 'Dossiers') and is_modif is defined and is_modif %}
                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier la fiche
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">FICHE DOMICILIATION/LOCATION</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ form_start(domicil_form,{'attr':{'class':'list-filter'}}) }}
            <div class=\"row p-3 mb-3 well\">
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">{{ form_label(domicil_form.client, 'Client', {
                                'label_attr': {'class': 'font-weight-bold star-on-required'}
                            }) }}
                            </div>
                            {{ form_widget(domicil_form.client) }}
                            {{ form_errors(domicil_form.client) }}
                        </div>
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                {{ form_label(domicil_form.type, 'Type', {
                                    'label_attr': {'class': 'font-weight-bold star-on-required'}
                                }) }}
                                <a id=\"typeDom\" style=\"background:#fff;color:green;cursor: pointer\" name=\"typeDom\" data-toggle=\"modal\" data-target=\"#modalType\" ><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                            </div>
                            {{ form_widget(domicil_form.type) }}
                            {{ form_errors(domicil_form.type) }}
                        </div>
                        <div class=\"form-group col-md-4 text-center\">
                            {{ form_label(domicil_form.partenaire, 'Partenaire', {
                                'label_attr': {'class': 'font-weight-bold star-on-required'}
                            }) }}
                            {{ form_widget(domicil_form.partenaire, {
                                    'label_attr': {'class': 'font-weight-bold star-on-required'}
                                })
                            }}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-3\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            <div class=\"label-field\">
                                {{ form_label(domicil_form.ref, 'N° de ref', {
                                    'label_attr': {'class': 'font-weight-bold star-on-required'}
                                }) }}
                            </div>
                            {{ form_widget(domicil_form.ref) }}
                            {{ form_errors(domicil_form.ref) }}
                        </div>
                        <div class=\"form-group col-md-6 text-center none-in-domiciliation\">
                            <div class=\"label-field\">
                                {{ form_label(domicil_form.salle, 'Salles', {
                                    'label_attr': {'class': 'font-weight-bold star-on-required'}
                                }) }}
                            </div>
                            {{ form_widget(domicil_form.salle, {
                                'attr': {
                                    'onchange': 'loadDefaultTarif()'
                                }
                            }) }}
                            {{ form_errors(domicil_form.salle) }}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-5\">
                    <div class=\"row\">
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                {{ form_label(domicil_form.lieu, 'Lieu', {
                                    'label_attr': {'class': 'font-weight-bold star-on-required'}
                                }) }}
                            </div>
                            {{ form_widget(domicil_form.lieu) }}
                            {{ form_errors(domicil_form.lieu) }}
                        </div>
                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                {{ form_label(domicil_form.statut, 'Statut', {
                                    'label_attr': {'class': 'font-weight-bold star-on-required'}
                                }) }}
                            </div>
                            {{ form_widget(domicil_form.statut) }}
                            {{ form_errors(domicil_form.statut) }}
                        </div>

                        <div class=\"form-group col-md-4 text-center\">
                            <div class=\"label-field\">
                                {{ form_label(domicil_form.commercial, 'Commercial', {
                                    'label_attr': {'class': 'font-weight-bold star-on-required'}
                                }) }}
                            </div>
                            {{ form_widget(domicil_form.commercial) }}
                            {{ form_errors(domicil_form.commercial) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row well p-3\">
                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        {{ form_label(domicil_form.signature, 'Date signature', {
                            'label_attr': {'class': 'font-weight-bold star-on-required'}
                        }) }}
                    </div>
                    {{ form_widget(domicil_form.signature) }}
                    {{ form_errors(domicil_form.signature) }}
                </div>

                <div class=\"form-group col-md-2 text-center none-in-domiciliation\">
                    <div class=\"label-field\">
                        {{ form_label(domicil_form.fixe, 'Montant fixé', {
                            'label_attr': {'class': 'font-weight-bold star-on-required'}
                        }) }}
                    </div>
                    {{ form_widget(domicil_form.fixe) }}
                    {{ form_errors(domicil_form.fixe) }}
                </div>

                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        {{ form_label(domicil_form.debut, 'Début période', {
                            'label_attr': {'class': 'font-weight-bold star-on-required'}
                        }) }}
                    </div>
                    {{ form_widget(domicil_form.debut) }}
                    {{ form_errors(domicil_form.debut) }}
                </div>

                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        {{ form_label(domicil_form.fin, 'Fin période', {
                            'label_attr': {'class': 'font-weight-bold star-on-required'}
                        }) }}
                    </div>
                    {{ form_widget(domicil_form.fin) }}
                    {{ form_errors(domicil_form.fin) }}
                </div>

                <div class=\"form-group col-md-1 text-center none-in-domiciliation\">
                    <div class=\"label-field\">
                        {{ form_label(domicil_form.nbj, 'Nb J', {
                            'label_attr': {'class': 'font-weight-bold star-on-required'}
                        }) }}
                    </div>
                    {{ form_widget(domicil_form.nbj) }}
                    {{ form_errors(domicil_form.nbj) }}
                </div>
                <div class=\"form-group col-md-1 text-center none-in-domiciliation\">
                    <div class=\"label-field\">
                        {{ form_label(domicil_form.nbh, 'Nb H', {
                            'label_attr': {'class': 'font-weight-bold star-on-required'}
                        }) }}
                    </div>
                    {{ form_widget(domicil_form.nbh) }}
                    {{ form_errors(domicil_form.nbh) }}
                </div>
                <div class=\"form-group col-md-2 text-center\">
                    <div class=\"label-field\">
                        {{ form_label(domicil_form.creation, 'Date création', {
                            'label_attr': {'class': 'font-weight-bold star-on-required'}
                        }) }}
                    </div>
                    {{ form_widget(domicil_form.creation) }}
                    {{ form_errors(domicil_form.creation) }}
                </div>
            </div>


            <div class=\"col-sm-12 p-3 mt-3 well\">
                {% if not domicil_form.facture.vars.valid %}
                    {% set isFactureActive = true %}
                {% else %}
                    {% set isFactureActive = false %}
                {% endif %}
                {% if not domicil_form.commentaires.vars.valid %}
                    {% set isFactureActive = false %}
                {% endif %}
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\" ><a class=\"nav-link {% if not isFactureActive %}active{% endif %}\" href=\"#tabnote\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tabnote\" aria-selected=\"true\">Notes</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link {% if isFactureActive %}active{% endif %}\" href=\"#tabfacture\" data-toggle=\"tab\" role=\"tab\" aria-controls=\"tabfacture\" aria-selected=\"false\">Facturation</a></li>
                </ul>
                <div class=\"tab-content\">
                    <div id=\"tabnote\" class=\"tab-pane fade {% if not isFactureActive %}show active{% endif %}\" role=\"tabpanel\" aria-labelledby=\"tabnote-tab\">
                        {% include 'Common/commentaire-bloc.html.twig' with { prototype: domicil_form.commentaires.vars.prototype, commentaires: domicil_form.commentaires } %}
                        {# pour empecher l'application d'afficher un bloc commentaire à la fin #}
                        {% do domicil_form.commentaires.setRendered %}
                    </div>
                    <div id=\"tabfacture\" class=\"tab-pane fade row {% if isFactureActive %}show active{% endif %}\" role=\"tabpanel\" aria-labelledby=\"tabfacture-tab\" style=\"text-align: center\">
                        <div class=\"col-sm-12\">
                            <div class=\"input-group mb-3 col-sm-2\">
                                <input type=\"text\" class=\"form-control\" value=\"AJOUTER\" readonly>
                                <div class=\"input-group-append\">
                                    <input class=\"input-group-text btn btn-light\" type=\"button\" onclick=\"ajoutFacture();\" value=\"+\">
                                </div>
                            </div>
                        </div>
                        <div id=\"facture_form\" class=\"col col-sm-8\" {% if not domicil_form.facture.vars.display %}style=\"display:none;\"{% endif %}>
                            {{ form_row(domicil_form.facture) }}
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-12 p-3 mt-3 well\" style=\"text-align: center\">
                <input type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 5%;\" value=\"Enregistrer\" {{ is_modif is defined and is_modif ? 'disabled=\"disabled\"' : '' }} >
            </div>
            {{ form_end(domicil_form) }}
        </div>
    </div>
    {% include 'domiciliationlocation/part/ajout-type.html.twig' with { typeId: domicil_form.type.vars.id } %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% include 'domiciliationlocation/part/ajout-type-js.html.twig' %}
    {% include 'Common/commentaire-js.html.twig' %}

    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    {% include 'Common/client-ajax-js.html.twig' with { attrs: domicil_form.client.vars|merge({ 'structure': 'proform' }) } %}

    <script type=\"text/javascript\">

                                        // charger montant fixe par défaut
                                        function loadDefaultTarif(){
                                        var tarif = \$('#{{ domicil_form.salle.vars.id }} option:selected').attr('title');
                                        var montantFixe = \$('#{{ domicil_form.fixe.vars.id }}');
                                        montantFixe.val(tarif);
                                        montantFixe.trigger('blur');
                                        }

                                        function showFacture() {
                                        var factureForm = \$('#facture_form');
                                        factureForm.find('input').removeAttr('disabled');
                                        factureForm.show();
                                        }

                                        function ajoutFacture(){

                                        var factureNumero = \$('#{{ domicil_form.facture.numero.vars.id }}');
                                        if (factureNumero.val()) {
                                        return false;
                                        }

                                        \$.ajax({
                                        type: 'GET',
                                                url: \"{{ path('facture_generate_numero') }}\",
                                                data: { structure: \"{{ constant('App\\\\Constants\\\\Structure::LIB_PROFORM') }}\" },
                                                success: function (response) {
                                                if (!response.error) {
                                                \$('#{{ domicil_form.facture.numero.vars.id }}').val(response.numero);
                                                showFacture();
                                                // MAJ montant facture si location : 
                                                if (\$('#{{ domicil_form.type.vars.id }}').val() ==  {{ constant('App\\\\Constants\\\\Typedom::LOCATION') }} ) {
                                                updateMontantFacture();
                                                }
                                                } else {
                                                alert(response.message)
                                                }
                                                },
                                                error: function () {
                                                alert('Erreur de la génération de numéro !');
                                                }
                                        });
                                        }

                                        function setRequired(div, required){
                                        \$(div).each(function () {
                                        if (required) {
                                        \$(this).find('[name]').attr('required', 'required');
                                        \$(this).find('label').addClass('required');
                                        } else {
                                        \$(this).find('[name]').removeAttr('required');
                                        \$(this).find('label.required').removeClass('required');
                                        }
                                        });
                                        }

                                        function setFieldRequired(\$oField) {
                                        // Set required
                                        \$oField.attr(\"required\", \"required\");
                                        \$oField.prev('div').find('label').addClass('required');
                                        }

                                        function removeFieldRequired(\$oField) {
                                        \$oField.removeAttr('required');
                                        \$oField.prev('div').find('label.required').removeClass('required');
                                        \$oField.val(\"\");
                                        }

                                        function removeFieldRequiredWithValue(\$oField) {
                                        \$oField.removeAttr('required');
                                        var isDefined = \$oField.prev('div').attr('class');
                                        if (typeof isDefined != 'undefined') {
                                        \$oField.prev('div').find('label.required').removeClass('required');
                                        } else {
                                        \$oField.closest('div').prev('div').find('label.required').removeClass('required');
                                        }

                                        }

                                        // MAJ Montant facture
                                        function updateMontantFacture() {
                                        let factureNumero = \$('#{{ domicil_form.facture.numero.vars.id }}');
                                        if (factureNumero.val()) {
                                        var iDuration = common.parseMoney(\$('#{{ domicil_form.nbj.vars.id }}').val());
                                        if (common.parseMoney(\$('#{{ domicil_form.nbh.vars.id }}').val()) > 0) {
                                        iDuration = common.parseMoney(\$('#{{ domicil_form.nbh.vars.id }}').val());
                                        }

                                        let iMontantFacture = iDuration * common.parseMoney(\$('#{{ domicil_form.fixe.vars.id }}').val());
                                        \$('#{{ domicil_form.facture.montant.vars.id }}').val(common.formatMoney(iMontantFacture));
                                        }
                                        }


                                        \$(document).ready(function () {
        {#  APR-112 : Lors de MAJ, ne pas rendre obligatoire le champ montant fixé#}
                var isModifForm = false;
        {% if is_modif is defined and is_modif %}
                isModifForm = true;
                removeFieldRequiredWithValue(\$('#{{ domicil_form.fixe.vars.id }}'));
        {% endif %}

        {% if domicil_form.facture.vars.value %}
                showFacture();
        {% endif %}

        {# charger reference #}
                var reference = \$('#{{ domicil_form.ref.vars.id }}');
                \$('#{{ domicil_form.type.vars.id }}').change(function(){
                var selected = \$(this).find('option:selected').text();
                // set not required if domiciliation
                var isDom = selected === \"{{ constant('App\\\\Entity\\\\Typedom::DOMICILIATION') }}\";
                setRequired('.none-in-domiciliation', !isDom);
        {# Retour APR-59 : Si type = location : Soit NbH, soit NBJ est obligatoire #}
                    if (!isDom) {
                    removeFieldRequired(\$('#{{ domicil_form.nbh.vars.id }}'));
        {#\$('#{{ domicil_form.nbh.vars.id }}').removeAttr('required');
        \$('#{{ domicil_form.nbh.vars.id }}').prev('div').find('label.required').removeClass('required');#}
                        }
        {#  APR-112 : Lors de MAJ, ne pas rendre obligatoire le champ montant fixé#}
                    if (isModifForm){
                    removeFieldRequiredWithValue(\$('#{{ domicil_form.fixe.vars.id }}'));
                    }

        {% if is_modif is not defined or not is_modif or (is_modif and domicil_form.ref.vars.value is empty ) %}
                    \$.ajax({
                    type: 'POST',
                            url: \"{{ path('crm.domiciliation.generer_reference') }}\",
                            data: { type: \$('#{{ domicil_form.type.vars.id }}').val() },
                            success: function (response) {
                            if (response.success) {
                            reference.val(response.reference);
                            } else {
                            reference.val('');
                            alert(response.message);
                            }
                            },
                            error: function () {
                            reference.val('');
                            alert('Erreur inattendue. Veuillez recommencer SVP.');
                            }
                    });
        {% endif %}
                    });
        {% if domicil_form.vars.attr.id is defined %}
                \$('form#{{ domicil_form.vars.attr.id }}').on('submit', function (event) {
                if (!reference.val()) {
                alert('Le référence ne doit pas être vide !');
                event.preventDefault();
                }
                var numeroFacture = \$('#{{ domicil_form.facture.numero.vars.id }}');
                if (numeroFacture.val().length === 0 && numeroFacture.is(':enabled')) {
                alert('Le numéro de facture ne doit pas être vide !');
                event.preventDefault();
                }
                });
        {% endif %}

                \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                        'autoclose': true,
                        'language': 'fr',
                });
        {# Retour APR-59 : Gestion champs NbH et NbJ si type = location #}
                \$('#{{ domicil_form.nbj.vars.id }}, #{{ domicil_form.nbh.vars.id }}').on('keyup blur', function(e) {

                if (\$('#{{ domicil_form.type.vars.id }}').val() ==  {{ constant('App\\\\Constants\\\\Typedom::LOCATION') }} ) {
                // Si on met à jour le champ nbJ => On rend obligatoire le champ
                // et on ne rend pas obligatoire 
                if (\$(this).attr('id') == '{{ domicil_form.nbj.vars.id }}') {
                removeFieldRequired(\$('#{{ domicil_form.nbh.vars.id }}'));
                setFieldRequired(\$(this));
                } else {
                removeFieldRequired(\$('#{{ domicil_form.nbj.vars.id }}'));
                setFieldRequired(\$(this));
                }

        {# Retour APR-59 : Mettre à jour le montant de la facture = montant fixé * durée (nbj ou nbh) #}
                        const iDuration = \$(this).val();
                        let factureNumero = \$('#{{ domicil_form.facture.numero.vars.id }}');
                        if (factureNumero.val()) {
                        let iMontantFacture = iDuration * common.parseMoney(\$('#{{ domicil_form.fixe.vars.id }}').val());
                        \$('#{{ domicil_form.facture.montant.vars.id }}').val(common.formatMoney(iMontantFacture));
                        }
                        }
                        });
                        // Si montant fixe modifié : alors modifer montant facture
                        \$('#{{ domicil_form.fixe.vars.id }}, #{{ domicil_form.salle.vars.id }}').on('change keyup blur', function() {
                        updateMontantFacture();
                        });
        {# Retour APR-59 : Gestion champs NbH et NbJ si type = location #}

                var typeVal = \$('#{{ domicil_form.type.vars.id }}').val();
                manageFactureFields(typeVal);
                manageNbJHFields(typeVal);
                \$('#{{ domicil_form.type.vars.id }}').on('change', function(e) {
        {# APR-115 : déactivation des champs Nb H et Nb J  #}
                    manageNbJHFields(\$(this).val());
        {# APR-115 : déactivation des champs Nb H et Nb J  #}

        {# APR-113 : Facture > Champ dépôt de garantie +  APR-116 : Facture champ tarif réduit #}
                    manageFactureFields(\$(this).val());
        {# Fin APR-113 + APR-116 #}
                    });
                    });
        {# APR-113 + APR-116 #}
            function manageFactureFields(typeVal) {
            var inputDepotGarantie = \$('#domiciliation_facture_depotGarantie');
            var inputRemise = \$('#domiciliation_facture_remise');
            // Cacher les conteneur des 2 champs factures : dépôt garantie et remise
            \$(inputDepotGarantie).closest('.form-group').hide();
            \$(inputRemise).closest('.form-group').hide();
            // Si le type n'est pas défini on cache le dépôt de garantie (caractéristique domiciliation)
            if (Boolean(typeVal)) {
            // Si domiciliation alors cacher le champ tarif réduit
            // Afficher le champ : Dépôt de garantie 
            if (typeVal == {{ constant('App\\\\Constants\\\\Typedom::DOMICILIATION') }}) {
            \$(inputDepotGarantie).closest('.form-group').show();
            } else if (typeVal == {{ constant('App\\\\Constants\\\\Typedom::LOCATION') }}){
            // APR-116 Si location : cache le champ Dépôt de garantie
            // Afficher le champ : Tarif réduit
            \$(inputRemise).closest('.form-group').show();
            }
            }
            }
        {# APR-113 + APR-116 #}

        {# APR-115 #}
            function manageNbJHFields(typeVal) {
            if (typeVal ==  {{ constant('App\\\\Constants\\\\Typedom::DOMICILIATION') }} ) {
            \$('#{{ domicil_form.nbh.vars.id }}').prop('disabled', true).val('');
            \$('#{{ domicil_form.nbj.vars.id }}').prop('disabled', true).val('');
            } else {
            \$('#{{ domicil_form.nbh.vars.id }}').prop('disabled', false);
            \$('#{{ domicil_form.nbj.vars.id }}').prop('disabled', false);
            }
            }
        {# APR-115 #}


            \$('#domiciliation_creation, #domiciliation_facture_date').datepicker({
                format: \"dd/mm/yyyy\",
                endDate: '+0d',
                'language': 'fr',
            });
            \$('#domiciliation_facture_date').datepicker({
                format: \"dd/mm/yyyy\",
                endDate: '+0d',
                'language': 'fr',
            });
            
            const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"domiciliation_debut\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#domiciliation_fin').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
            
    </script>
{% endblock %}
", "domiciliationlocation/create.html.twig", "/home/jeremy/Bureau/project/app/templates/domiciliationlocation/create.html.twig");
    }
}
