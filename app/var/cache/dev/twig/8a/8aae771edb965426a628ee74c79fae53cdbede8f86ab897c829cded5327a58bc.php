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

/* formateur/create.html.twig */
class __TwigTemplate_b5916350bfe06e3353654aa2089448ca6a1e2fea1f92dd56a48f636775040307 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formateur/create.html.twig", 1);
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

        echo "Formateurs - CRM Aprentiv v2.0";
        
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller");
        echo "\">Liste des formateurs</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">CREATION FORMATEURS</h2>
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <fieldset>
                        <legend>
                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 28, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Statut"]);
        // line 30
        echo "
                        </legend>
                        <div class=\"col-sm-12\">
                            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 33, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 33), 'widget');
        echo "
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Societé</legend>
                        <div class=\"col-sm-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 42, $this->source); })()), "nomStr", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société ou organisme:"]);
        // line 44
        echo "
                                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 45, $this->source); })()), "nomStr", [], "any", false, false, false, 45), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 48, $this->source); })()), "noSiret", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° SIRET:"]);
        // line 50
        echo "
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 51, $this->source); })()), "noSiret", [], "any", false, false, false, 51), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 54, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° Sécurité Sociale:"]);
        // line 56
        echo "
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 57, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 57), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Coordonnées</legend>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-sm-6\">
                                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 69, $this->source); })()), "pieceIdentite", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Piéce d'identité :"]);
        // line 71
        echo "
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 72, $this->source); })()), "pieceIdentite", [], "any", false, false, false, 72), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 75, $this->source); })()), "valididtePieceIdentite", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Validité :"]);
        // line 77
        echo "
                                        ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 78, $this->source); })()), "valididtePieceIdentite", [], "any", false, false, false, 78), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 87, $this->source); })()), "idCivilite", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité :"]);
        // line 89
        echo "
                                        ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 90, $this->source); })()), "idCivilite", [], "any", false, false, false, 90), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 93, $this->source); })()), "nom", [], "any", false, false, false, 93), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom :"]);
        // line 95
        echo "
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 96, $this->source); })()), "nom", [], "any", false, false, false, 96), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 99, $this->source); })()), "prenom", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prénom :"]);
        // line 101
        echo "
                                        ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 102, $this->source); })()), "prenom", [], "any", false, false, false, 102), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 111, $this->source); })()), "Competenceformateur", [], "any", false, false, false, 111), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Compétence/Spécialité :"]);
        // line 113
        echo "
                                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 114, $this->source); })()), "Competenceformateur", [], "any", false, false, false, 114), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 117, $this->source); })()), "siteweb", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 119
        echo "
                                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 120, $this->source); })()), "siteweb", [], "any", false, false, false, 120), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 129, $this->source); })()), "adresses", [], "any", false, false, false, 129), "children", [], "any", false, false, false, 129), 0, [], "array", false, false, false, 129), "children", [], "any", false, false, false, 129), "adresse", [], "array", false, false, false, 129), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Adresse"]);
        // line 131
        echo "
                                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 132, $this->source); })()), "adresses", [], "any", false, false, false, 132), "children", [], "any", false, false, false, 132), 0, [], "array", false, false, false, 132), "children", [], "any", false, false, false, 132), "adresse", [], "array", false, false, false, 132), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 135, $this->source); })()), "adresses", [], "any", false, false, false, 135), "children", [], "any", false, false, false, 135), 0, [], "array", false, false, false, 135), "children", [], "any", false, false, false, 135), "codePostal", [], "array", false, false, false, 135), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Code postale"]);
        // line 137
        echo "
                                        ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 138, $this->source); })()), "adresses", [], "any", false, false, false, 138), "children", [], "any", false, false, false, 138), 0, [], "array", false, false, false, 138), "children", [], "any", false, false, false, 138), "codePostal", [], "array", false, false, false, 138), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 141, $this->source); })()), "adresses", [], "any", false, false, false, 141), "children", [], "any", false, false, false, 141), 0, [], "array", false, false, false, 141), "children", [], "any", false, false, false, 141), "idVille", [], "array", false, false, false, 141), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Ville:"]);
        // line 143
        echo "
                                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 144, $this->source); })()), "adresses", [], "any", false, false, false, 144), "children", [], "any", false, false, false, 144), 0, [], "array", false, false, false, 144), "children", [], "any", false, false, false, 144), "idVille", [], "array", false, false, false, 144), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 153, $this->source); })()), "Telephone", [], "any", false, false, false, 153), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Téléphone :"]);
        // line 155
        echo "
                                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 156, $this->source); })()), "Telephone", [], "any", false, false, false, 156), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 159, $this->source); })()), "Email", [], "any", false, false, false, 159), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Email :"]);
        // line 161
        echo "
                                        ";
        // line 162
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 162, $this->source); })()), "Email", [], "any", false, false, false, 162), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        ";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 171, $this->source); })()), "Portable", [], "any", false, false, false, 171), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Portable :"]);
        // line 173
        echo "
                                        ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 174, $this->source); })()), "Portable", [], "any", false, false, false, 174), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 177, $this->source); })()), "Fax", [], "any", false, false, false, 177), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Fax :"]);
        // line 179
        echo "
                                        ";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 180, $this->source); })()), "Fax", [], "any", false, false, false, 180), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class=\"col-md-4\">
                    <fieldset>
                        <legend>Commentaire/Disponibilité</legend>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <div class=\"text-center col-sm-12\">
                                        ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 194, $this->source); })()), "commentaire", [], "any", false, false, false, 194), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Commentaire :"]);
        // line 196
        echo "
                                        ";
        // line 197
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 197, $this->source); })()), "commentaire", [], "any", false, false, false, 197), 'widget');
        echo "
                                    </div>
                                    <div class=\"text-center col-sm-12\">
                                        ";
        // line 200
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 200, $this->source); })()), "disponibilite", [], "any", false, false, false, 200), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Disponibilité :"]);
        // line 202
        echo "
                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 203, $this->source); })()), "disponibilite", [], "any", false, false, false, 203), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 215
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "formateur/create.html.twig", 215)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 215, $this->source); })()), "formateurcommentaires", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "prototype", [], "any", false, false, false, 215), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 215, $this->source); })()), "formateurcommentaires", [], "any", false, false, false, 215)]));
        // line 216
        echo "            ";
        // line 217
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 217, $this->source); })()), "formateurcommentaires", [], "any", false, false, false, 217), "setRendered", [], "any", false, false, false, 217);
        // line 218
        echo "        </div>
    </div>
    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
            </div>
        </div>
    </div>
    ";
        // line 227
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 227, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 231
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 232
        $this->loadTemplate("Common/commentaire-js.html.twig", "formateur/create.html.twig", 232)->display($context);
        // line 233
        echo "    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#formateur_adresses_0_idVille').select2({
                placeholder: \"-- ville --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 243
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.ville.asynch-search");
        echo "',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    }
                }
            });
            \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formateur/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  488 => 243,  476 => 233,  474 => 232,  469 => 231,  459 => 230,  447 => 227,  436 => 218,  433 => 217,  431 => 216,  429 => 215,  414 => 203,  411 => 202,  409 => 200,  403 => 197,  400 => 196,  398 => 194,  381 => 180,  378 => 179,  376 => 177,  370 => 174,  367 => 173,  365 => 171,  353 => 162,  350 => 161,  348 => 159,  342 => 156,  339 => 155,  337 => 153,  325 => 144,  322 => 143,  320 => 141,  314 => 138,  311 => 137,  309 => 135,  303 => 132,  300 => 131,  298 => 129,  286 => 120,  283 => 119,  281 => 117,  275 => 114,  272 => 113,  270 => 111,  258 => 102,  255 => 101,  253 => 99,  247 => 96,  244 => 95,  242 => 93,  236 => 90,  233 => 89,  231 => 87,  219 => 78,  216 => 77,  214 => 75,  208 => 72,  205 => 71,  203 => 69,  188 => 57,  185 => 56,  183 => 54,  177 => 51,  174 => 50,  172 => 48,  166 => 45,  163 => 44,  161 => 42,  149 => 33,  144 => 30,  142 => 28,  132 => 21,  123 => 15,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formateurs - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Formateur_Controller') }}\">Liste des formateurs</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">CREATION FORMATEURS</h2>
    {{ form_start(formateur_form,{'attr':{'class':'list-filter'}}) }}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <fieldset>
                        <legend>
                            {{ form_label(formateur_form.idStatutFmt, 'Statut', {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                        </legend>
                        <div class=\"col-sm-12\">
                            {{ form_widget(formateur_form.idStatutFmt) }}
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Societé</legend>
                        <div class=\"col-sm-12\">
                            <div class=\"row\">
                                <div class=\"col-sm-4\">
                                    <div class=\"form-group\">
                                        {{ form_label(formateur_form.nomStr, 'Société ou organisme:', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.nomStr) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(formateur_form.noSiret, 'N° SIRET:', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.noSiret) }}
                                    </div>
                                    <div class=\"form-group\">
                                        {{ form_label(formateur_form.nsecuritesocial, 'N° Sécurité Sociale:', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.nsecuritesocial) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Coordonnées</legend>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-sm-6\">
                                        {{ form_label(formateur_form.pieceIdentite, \"Piéce d'identité :\", {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.pieceIdentite) }}
                                    </div>
                                    <div class=\"col-sm-6\">
                                        {{ form_label(formateur_form.valididtePieceIdentite, 'Validité :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.valididtePieceIdentite) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.idCivilite, 'Civilité :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.idCivilite) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.nom, 'Nom :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.nom) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.prenom, 'Prénom :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.prenom) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.Competenceformateur, 'Compétence/Spécialité :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.Competenceformateur) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.siteweb, 'Site web:',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.siteweb) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.adresses.children[0].children[\"adresse\"], 'Adresse',{
                                            'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                                        }) }}
                                        {{ form_widget(formateur_form.adresses.children[0].children[\"adresse\"]) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.adresses.children[0].children[\"codePostal\"], 'Code postale',{
                                            'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                                        }) }}
                                        {{ form_widget(formateur_form.adresses.children[0].children[\"codePostal\"]) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.adresses.children[0].children[\"idVille\"], 'Ville:',{
                                            'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                                        }) }}
                                        {{ form_widget(formateur_form.adresses.children[0].children[\"idVille\"]) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.Telephone, 'Téléphone :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.Telephone) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.Email, 'Email :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.Email) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row mt-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"row form-group\">
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.Portable, 'Portable :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.Portable) }}
                                    </div>
                                    <div class=\"col-md-4\">
                                        {{ form_label(formateur_form.Fax, 'Fax :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formateur_form.Fax) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class=\"col-md-4\">
                    <fieldset>
                        <legend>Commentaire/Disponibilité</legend>
                        <div class=\"row\">
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <div class=\"text-center col-sm-12\">
                                        {{ form_label(commentaire_dispo.commentaire, 'Commentaire :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(commentaire_dispo.commentaire) }}
                                    </div>
                                    <div class=\"text-center col-sm-12\">
                                        {{ form_label(commentaire_dispo.disponibilite, 'Disponibilité :', {
                                            'label_attr': {'class': 'font-weight-bold'},
                                        }) }}
                                        {{ form_widget(commentaire_dispo.disponibilite) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% include 'Common/commentaire-bloc.html.twig' with { prototype: formateur_form.formateurcommentaires.vars.prototype, commentaires: formateur_form.formateurcommentaires } %}
            {# pour empecher l'application d'afficher un bloc commentaire à la fin #}
            {% do formateur_form.formateurcommentaires.setRendered %}
        </div>
    </div>
    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
            </div>
        </div>
    </div>
    {{ form_end(formateur_form, {'render_rest': false}) }}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% include 'Common/commentaire-js.html.twig' %}
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('#formateur_adresses_0_idVille').select2({
                placeholder: \"-- ville --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '{{ path('crm.opca.ville.asynch-search') }}',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    }
                }
            });
            \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });
        });
    </script>
{% endblock %}", "formateur/create.html.twig", "/home/jeremy/Bureau/project/app/templates/formateur/create.html.twig");
    }
}
