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

/* formateur/edit.html.twig */
class __TwigTemplate_a104c4a94d9208d020433b697a6034c9140d469fdaf07caa9690d5b3733db756 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formateur/edit.html.twig", 1);
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
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
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
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller");
        echo "\">Liste des formateurs</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Editer</li>
            </ol>

            <div>
                ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Formateurs")) {
            // line 22
            echo "                    <a href=\"javascript:void(0)\" id=\"maj\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier le fiche formateur
                    </a>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formateur_Controller/editFormateur", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26)]), "html", null, true);
            echo "\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                ";
        }
        // line 31
        echo "            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS FORMATEURS</h2>
    ";
        // line 36
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 36, $this->source); })()), 'form_start');
        echo "
    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37), 'widget');
        echo "
    <div class=\"row\">
        <div class=\"col-sm-12\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <fieldset>
                        <legend>
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 44, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Statut"]);
        // line 46
        echo "
                        </legend>
                        <div class=\"col-sm-12\">
                            ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 49, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 49), 'widget');
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
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 58, $this->source); })()), "nomStr", [], "any", false, false, false, 58), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société ou organisme:"]);
        // line 60
        echo "
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 61, $this->source); })()), "nomStr", [], "any", false, false, false, 61), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 64, $this->source); })()), "noSiret", [], "any", false, false, false, 64), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° SIRET:"]);
        // line 66
        echo "
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 67, $this->source); })()), "noSiret", [], "any", false, false, false, 67), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group\">
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 70, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° Sécurité Sociale:"]);
        // line 72
        echo "
                                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 73, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 73), 'widget');
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
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 85, $this->source); })()), "pieceIdentite", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Piéce d'identité :"]);
        // line 87
        echo "
                                        ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 88, $this->source); })()), "pieceIdentite", [], "any", false, false, false, 88), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-sm-6\">
                                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 91, $this->source); })()), "valididtePieceIdentite", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Validité :"]);
        // line 93
        echo "
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 94, $this->source); })()), "valididtePieceIdentite", [], "any", false, false, false, 94), 'widget');
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
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 103, $this->source); })()), "idCivilite", [], "any", false, false, false, 103), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilté :"]);
        // line 105
        echo "
                                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 106, $this->source); })()), "idCivilite", [], "any", false, false, false, 106), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 109, $this->source); })()), "nom", [], "any", false, false, false, 109), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom :"]);
        // line 111
        echo "
                                        ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 112, $this->source); })()), "nom", [], "any", false, false, false, 112), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 115, $this->source); })()), "prenom", [], "any", false, false, false, 115), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prénom:"]);
        // line 117
        echo "
                                        ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 118, $this->source); })()), "prenom", [], "any", false, false, false, 118), 'widget');
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
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 127, $this->source); })()), "Competenceformateur", [], "any", false, false, false, 127), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Comptétence/Spécialité:"]);
        // line 129
        echo "
                                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 130, $this->source); })()), "Competenceformateur", [], "any", false, false, false, 130), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 133, $this->source); })()), "siteweb", [], "any", false, false, false, 133), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 135
        echo "
                                        ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 136, $this->source); })()), "siteweb", [], "any", false, false, false, 136), 'widget');
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
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 145, $this->source); })()), "adresses", [], "any", false, false, false, 145), "children", [], "any", false, false, false, 145), 0, [], "array", false, false, false, 145), "children", [], "any", false, false, false, 145), "adresse", [], "array", false, false, false, 145), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Adresse"]);
        // line 147
        echo "
                                        ";
        // line 148
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 148, $this->source); })()), "adresses", [], "any", false, false, false, 148), "children", [], "any", false, false, false, 148), 0, [], "array", false, false, false, 148), "children", [], "any", false, false, false, 148), "adresse", [], "array", false, false, false, 148), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 151, $this->source); })()), "adresses", [], "any", false, false, false, 151), "children", [], "any", false, false, false, 151), 0, [], "array", false, false, false, 151), "children", [], "any", false, false, false, 151), "codePostal", [], "array", false, false, false, 151), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Code postale"]);
        // line 153
        echo "
                                        ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 154, $this->source); })()), "adresses", [], "any", false, false, false, 154), "children", [], "any", false, false, false, 154), 0, [], "array", false, false, false, 154), "children", [], "any", false, false, false, 154), "codePostal", [], "array", false, false, false, 154), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 157
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 157, $this->source); })()), "adresses", [], "any", false, false, false, 157), "children", [], "any", false, false, false, 157), 0, [], "array", false, false, false, 157), "children", [], "any", false, false, false, 157), "idVille", [], "array", false, false, false, 157), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Ville:"]);
        // line 159
        echo "
                                        ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 160, $this->source); })()), "adresses", [], "any", false, false, false, 160), "children", [], "any", false, false, false, 160), 0, [], "array", false, false, false, 160), "children", [], "any", false, false, false, 160), "idVille", [], "array", false, false, false, 160), 'widget');
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
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 169, $this->source); })()), "Telephone", [], "any", false, false, false, 169), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Téléphone :"]);
        // line 171
        echo "
                                        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 172, $this->source); })()), "Telephone", [], "any", false, false, false, 172), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 175
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 175, $this->source); })()), "Email", [], "any", false, false, false, 175), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Email :"]);
        // line 177
        echo "
                                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 178, $this->source); })()), "Email", [], "any", false, false, false, 178), 'widget');
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
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 187, $this->source); })()), "Portable", [], "any", false, false, false, 187), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Portable :"]);
        // line 189
        echo "
                                        ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 190, $this->source); })()), "Portable", [], "any", false, false, false, 190), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-md-4\">
                                        ";
        // line 193
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 193, $this->source); })()), "Fax", [], "any", false, false, false, 193), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Fax :"]);
        // line 195
        echo "
                                        ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 196, $this->source); })()), "Fax", [], "any", false, false, false, 196), 'widget');
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
                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 209, $this->source); })()), "id", [], "any", false, false, false, 209), 'widget');
        echo "
                                    <div class=\"text-center col-sm-12\">
                                        ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 211, $this->source); })()), "commentaire", [], "any", false, false, false, 211), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Commentaire :"]);
        // line 213
        echo "
                                        ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 214, $this->source); })()), "commentaire", [], "any", false, false, false, 214), 'widget');
        echo "
                                    </div><br />
                                    <div class=\"text-center col-sm-12\">
                                        ";
        // line 217
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 217, $this->source); })()), "disponibilite", [], "any", false, false, false, 217), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Disponibilité :"]);
        // line 219
        echo "
                                        ";
        // line 220
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["commentaire_dispo"]) || array_key_exists("commentaire_dispo", $context) ? $context["commentaire_dispo"] : (function () { throw new RuntimeError('Variable "commentaire_dispo" does not exist.', 220, $this->source); })()), "disponibilite", [], "any", false, false, false, 220), 'widget');
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
        // line 233
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "formateur/edit.html.twig", 233)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 233, $this->source); })()), "formateurcommentaires", [], "any", false, false, false, 233), "vars", [], "any", false, false, false, 233), "prototype", [], "any", false, false, false, 233), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 233, $this->source); })()), "formateurcommentaires", [], "any", false, false, false, 233)]));
        // line 234
        echo "            ";
        // line 235
        echo "            ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 235, $this->source); })()), "formateurcommentaires", [], "any", false, false, false, 235), "setRendered", [], "any", false, false, false, 235);
        // line 236
        echo "        </div>
    </div>
    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Enregistrer</button>
            </div>
        </div>
    </div>
    ";
        // line 245
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formateur_form"]) || array_key_exists("formateur_form", $context) ? $context["formateur_form"] : (function () { throw new RuntimeError('Variable "formateur_form" does not exist.', 245, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 247
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 248
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 249
        $this->loadTemplate("Common/commentaire-js.html.twig", "formateur/edit.html.twig", 249)->display($context);
        // line 250
        echo "    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            var adressesville = ";
        // line 255
        echo json_encode((isset($context["adressesvilledata"]) || array_key_exists("adressesvilledata", $context) ? $context["adressesvilledata"] : (function () { throw new RuntimeError('Variable "adressesvilledata" does not exist.', 255, $this->source); })()));
        echo "
            for(let key in adressesville){
                if(adressesville[key] != null & adressesville[key] > 0){
                    setVilleValue(key,adressesville[key]);
                }
                \$('#formateur_adresses_'+key+'_idVille').select2({
                    placeholder: \"-- ville --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: '";
        // line 265
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
            }
            function setVilleValue(key,idville) {
                var villeSelect = \$('#formateur_adresses_'+key+'_idVille');
                if ( idville > 0) {
                    var ville_id = idville;
                    var url = '";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.oneVille.asynch-search", ["idVille" => "ville_id"]);
        echo "';
                    url = url.replace('ville_id', ville_id);
                    \$.ajax({
                        type: 'GET',
                        url: url
                    }).then(function (data) {
                        // create the option and append to Select2
                        var dataSelected = (data['results'][0]);
                        var option = new Option(dataSelected.text, dataSelected.text, true, true);
                        villeSelect.append(option).trigger('change');
                        // manually trigger the `select2:select` event
                        villeSelect.trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                    });
                }
            }
            \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });
        });

        \$(document).ready(function () {
            \$('#dataformateur *').prop(\"disabled\", true);
            \$('#commentaires_collection .delete-comment').addClass('disabled');

            \$('#maj').click(function () {
                \$('#dataformateur *').prop(\"disabled\", false);
                \$('#commentaire_prototype *').prop(\"disabled\", true);
                \$('#commentaires_collection .delete-comment').removeClass('disabled');
                \$('.cancel-update').removeClass('d-none');
                \$(this).addClass('d-none');
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formateur/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  546 => 280,  528 => 265,  515 => 255,  508 => 250,  506 => 249,  501 => 248,  491 => 247,  479 => 245,  468 => 236,  465 => 235,  463 => 234,  461 => 233,  445 => 220,  442 => 219,  440 => 217,  434 => 214,  431 => 213,  429 => 211,  424 => 209,  408 => 196,  405 => 195,  403 => 193,  397 => 190,  394 => 189,  392 => 187,  380 => 178,  377 => 177,  375 => 175,  369 => 172,  366 => 171,  364 => 169,  352 => 160,  349 => 159,  347 => 157,  341 => 154,  338 => 153,  336 => 151,  330 => 148,  327 => 147,  325 => 145,  313 => 136,  310 => 135,  308 => 133,  302 => 130,  299 => 129,  297 => 127,  285 => 118,  282 => 117,  280 => 115,  274 => 112,  271 => 111,  269 => 109,  263 => 106,  260 => 105,  258 => 103,  246 => 94,  243 => 93,  241 => 91,  235 => 88,  232 => 87,  230 => 85,  215 => 73,  212 => 72,  210 => 70,  204 => 67,  201 => 66,  199 => 64,  193 => 61,  190 => 60,  188 => 58,  176 => 49,  171 => 46,  169 => 44,  159 => 37,  155 => 36,  148 => 31,  140 => 26,  134 => 22,  132 => 21,  124 => 16,  120 => 15,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formateurs - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Formateur_Controller') }}\">Liste des formateurs</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Editer</li>
            </ol>

            <div>
                {% if is_granted('edit', 'Formateurs') %}
                    <a href=\"javascript:void(0)\" id=\"maj\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier le fiche formateur
                    </a>
                    <a href=\"{{ path('Liste_Formateur_Controller/editFormateur', { 'id': formateur_form.id.vars.value }) }}\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS FORMATEURS</h2>
    {{ form_start(formateur_form) }}
    {{ form_widget(formateur_form.id) }}
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
                                        {{ form_label(formateur_form.idCivilite, 'Civilté :', {
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
                                        {{ form_label(formateur_form.prenom, 'Prénom:',{
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
                                        {{ form_label(formateur_form.Competenceformateur, 'Comptétence/Spécialité:',{
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
                                    {{ form_widget(commentaire_dispo.id) }}
                                    <div class=\"text-center col-sm-12\">
                                        {{ form_label(commentaire_dispo.commentaire, 'Commentaire :', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(commentaire_dispo.commentaire) }}
                                    </div><br />
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
                <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Enregistrer</button>
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
            var adressesville = {{ adressesvilledata|json_encode|raw }}
            for(let key in adressesville){
                if(adressesville[key] != null & adressesville[key] > 0){
                    setVilleValue(key,adressesville[key]);
                }
                \$('#formateur_adresses_'+key+'_idVille').select2({
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
            }
            function setVilleValue(key,idville) {
                var villeSelect = \$('#formateur_adresses_'+key+'_idVille');
                if ( idville > 0) {
                    var ville_id = idville;
                    var url = '{{ path('crm.opca.oneVille.asynch-search', {idVille:'ville_id'}) }}';
                    url = url.replace('ville_id', ville_id);
                    \$.ajax({
                        type: 'GET',
                        url: url
                    }).then(function (data) {
                        // create the option and append to Select2
                        var dataSelected = (data['results'][0]);
                        var option = new Option(dataSelected.text, dataSelected.text, true, true);
                        villeSelect.append(option).trigger('change');
                        // manually trigger the `select2:select` event
                        villeSelect.trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                    });
                }
            }
            \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });
        });

        \$(document).ready(function () {
            \$('#dataformateur *').prop(\"disabled\", true);
            \$('#commentaires_collection .delete-comment').addClass('disabled');

            \$('#maj').click(function () {
                \$('#dataformateur *').prop(\"disabled\", false);
                \$('#commentaire_prototype *').prop(\"disabled\", true);
                \$('#commentaires_collection .delete-comment').removeClass('disabled');
                \$('.cancel-update').removeClass('d-none');
                \$(this).addClass('d-none');
            });
        });

    </script>
{% endblock %}", "formateur/edit.html.twig", "/home/jeremy/Bureau/project/app/templates/formateur/edit.html.twig");
    }
}
