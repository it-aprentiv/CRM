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

/* opca/show.html.twig */
class __TwigTemplate_535fbcc643c680da5edcb0bb26d21bfb1b8917b94af7e9b625d7cbd42982a095 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opca/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opca/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opca/show.html.twig", 1);
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

        echo "OPCO - CRM Aprentiv v2.0";
        
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
    <style>
        .scrollabletable{
            display: block;
            height: 300px;
            overflow-y: scroll;
            width: 100%;
        }
        .color-white{
            color:white;
        }
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 23
        echo "
    ";
        // line 24
        $macros["formMacros"] = $this;
        // line 25
        echo "
    ";
        // line 89
        echo "
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OPCA_Controller");
        echo "\" title=\"Liste des encaissements\">Liste des OPCO</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails OPCO</li>
            </ol>

            <div>
                ";
        // line 101
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "OPCO")) {
            // line 102
            echo "                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier l'OPCO
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                ";
        }
        // line 111
        echo "            </div>
        </div>

    </nav>
    ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "session", [], "any", false, false, false, 115), "flashBag", [], "any", false, false, false, 115), "get", [0 => "success"], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 116
            echo "        <div class=\"alert alert-success\">
            ";
            // line 117
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "    <h2 class=\"text-center mt-2 text-primary\">Détail OPCO</h2>

    ";
        // line 122
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 122, $this->source); })()), 'form_start');
        echo "

    <div class=\"row\">
        <div class=\"col-sm-9\">
            <fieldset>
                <legend>Informations OPCO</legend>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"form-group col-sm-6 text-center\">
                                ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 132, $this->source); })()), "nomStr", [], "any", false, false, false, 132), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO"]);
        // line 134
        echo "
                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 135, $this->source); })()), "nomStr", [], "any", false, false, false, 135), 'widget', ["attr" => ["disabled" => "true"]]);
        echo "
                            </div>
                            <div class=\"form-group col-sm-6 text-center\">
                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 138, $this->source); })()), "idSecteur", [], "any", false, false, false, 138), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Activité adhérents "]);
        // line 140
        echo "
                                <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 142, $this->source); })()), "idSecteur", [], "any", false, false, false, 142), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 149
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 149, $this->source); })()), "adresses", [], "any", false, false, false, 149), "children", [], "any", false, false, false, 149), 0, [], "array", false, false, false, 149), "children", [], "any", false, false, false, 149), "adresse", [], "array", false, false, false, 149), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "N°,voie"]);
        // line 151
        echo "
                                ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 152, $this->source); })()), "adresses", [], "any", false, false, false, 152), "children", [], "any", false, false, false, 152), 0, [], "array", false, false, false, 152), "children", [], "any", false, false, false, 152), "adresse", [], "array", false, false, false, 152), 'widget', ["attr" => ["disabled" => "true"]]);
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                                ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 155, $this->source); })()), "adresses", [], "any", false, false, false, 155), "children", [], "any", false, false, false, 155), 0, [], "array", false, false, false, 155), "children", [], "any", false, false, false, 155), "codePostal", [], "array", false, false, false, 155), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Code postal"]);
        // line 157
        echo "
                                ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 158, $this->source); })()), "adresses", [], "any", false, false, false, 158), "children", [], "any", false, false, false, 158), 0, [], "array", false, false, false, 158), "children", [], "any", false, false, false, 158), "codePostal", [], "array", false, false, false, 158), 'widget', ["attr" => ["disabled" => "true"]]);
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                                ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 161, $this->source); })()), "adresses", [], "any", false, false, false, 161), "children", [], "any", false, false, false, 161), 0, [], "array", false, false, false, 161), "children", [], "any", false, false, false, 161), "idVille", [], "array", false, false, false, 161), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Ville"]);
        // line 163
        echo "
                                ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 164, $this->source); })()), "adresses", [], "any", false, false, false, 164), "children", [], "any", false, false, false, 164), 0, [], "array", false, false, false, 164), "children", [], "any", false, false, false, 164), "idVille", [], "array", false, false, false, 164), 'widget', ["attr" => ["disabled" => "true"]]);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class=\"col-sm-3\">
            <fieldset>
                <legend>Notes</legend>
                <textarea style=\"height:119px\" type=\"text\" id=\"note\" name=\"note\" class=\"form-control\" disabled> ";
        // line 175
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["note"] ?? null), "notes", [], "any", true, true, false, 175)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["note"] ?? null), "notes", [], "any", false, false, false, 175), "")) : ("")), "html", null, true);
        echo "</textarea>
            </fieldset>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <fieldset>
                <legend>Coordonnées OPCO</legend>
                <div class=\"col-sm-12\">
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            <label class=\"font-weight-bold required\" for=\"telephone9\">Telephone</label>
                            <input type=\"text\" id=\"telephone9\" name=\"telephone9\" class=\"telephone-format form-control\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_opca"]) || array_key_exists("detail_opca", $context) ? $context["detail_opca"] : (function () { throw new RuntimeError('Variable "detail_opca" does not exist.', 188, $this->source); })()), "telephone", [], "any", false, false, false, 188), "html", null, true);
        echo "\" maxlength=\"14\" pattern=\".{14,14}\"  disabled>
                        </div>
                        <div class=\"text-center col-sm-6\">
                            <label class=\"font-weight-bold\" for=\"email2\">Email</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\">@</div>
                                </div>
                                <input type=\"email\" id=\"email2\" name=\"email2\" class=\"form-control\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_opca"]) || array_key_exists("detail_opca", $context) ? $context["detail_opca"] : (function () { throw new RuntimeError('Variable "detail_opca" does not exist.', 196, $this->source); })()), "email", [], "any", false, false, false, 196), "html", null, true);
        echo "\" disabled>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            <label class=\"font-weight-bold\" for=\"fax9\">Fax</label>
                            <input type=\"text\" id=\"fax9\" name=\"fax9\" class=\"form-control\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_opca"]) || array_key_exists("detail_opca", $context) ? $context["detail_opca"] : (function () { throw new RuntimeError('Variable "detail_opca" does not exist.', 203, $this->source); })()), "fax", [], "any", false, false, false, 203), "html", null, true);
        echo "\" disabled>
                        </div>
                        <div class=\"text-center col-sm-6\">
                            ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 206, $this->source); })()), "siteweb", [], "any", false, false, false, 206), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 208
        echo "
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\">http://</div>
                                </div>
                                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 213, $this->source); })()), "siteweb", [], "any", false, false, false, 213), 'widget', ["attr" => ["disabled" => "true"]]);
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class=\"col-md-6\">
            <fieldset class=\"position-relative\">
                <legend>Critères de financement</legend>
                <a href=\"javascript:void(0)\" class=\"plus-link\" id=\"addInputsCritere\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                ";
        // line 231
        echo "                <table class=\"table\" id=\"critereTable\">
                    <tr>
                        <th>Date</th>
                        <th>Dispositif</th>
                        <th>Commentaires</th>
                    </tr>
                    ";
        // line 237
        $context["i"] = 1;
        // line 238
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["critere"]) || array_key_exists("critere", $context) ? $context["critere"] : (function () { throw new RuntimeError('Variable "critere" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cri"]) {
            // line 239
            echo "                        <tr data-critere-id = \"";
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 239, $this->source); })()), "html", null, true);
            echo "\">
                        <input disabled type=\"hidden\" name=\"critere[";
            // line 240
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 240, $this->source); })()), "html", null, true);
            echo "][id]\"value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cri"], "id", [], "any", false, false, false, 240), "html", null, true);
            echo "\">
                        <td><input disabled type=\"text\" name=\"critere[";
            // line 241
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 241, $this->source); })()), "html", null, true);
            echo "][date]\" class=\"js-datepicker form-control\" placeholder=\"date\" value=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cri"], "date", [], "any", false, false, false, 241), "d-m-Y"), "html", null, true);
            echo "\"></td>
                        <td><input disabled type=\"text\" name=\"critere[";
            // line 242
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 242, $this->source); })()), "html", null, true);
            echo "][dispositif]\" class=\"form-control\" placeholder=\"Dispositif\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cri"], "dispositif", [], "any", false, false, false, 242), "html", null, true);
            echo "\"></td>
                        <td><input disabled type=\"text\" name=\"critere[";
            // line 243
            echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 243, $this->source); })()), "html", null, true);
            echo "][commentaire]\" class=\"form-control\" placeholder=\"Commentaire\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cri"], "commentaire", [], "any", false, false, false, 243), "html", null, true);
            echo "\"></td>
                        </tr>
                        ";
            // line 245
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 245, $this->source); })()) + 1);
            // line 246
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cri'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 247
        echo "                </table>
            </fieldset>
        </div>
    </div>

    <fieldset class=\"position-relative\">
        <legend>Contact OPCO</legend>
        <a href=\"javascript:void(0)\" class=\"row plus-link\" onclick=\"addTr(event)\">
            <span class=\"fa-stack fa-1x\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
            </span>
        </a>
        <br/><br/>
        <div class=\"row\">
            <div class=\"col-md-12 detail-wrapper\"
                 data-index=\"";
        // line 263
        echo twig_escape_filter($this->env, (isset($context["nbOpcaContact"]) || array_key_exists("nbOpcaContact", $context) ? $context["nbOpcaContact"] : (function () { throw new RuntimeError('Variable "nbOpcaContact" does not exist.', 263, $this->source); })()), "html", null, true);
        echo "\"
                 ";
        // line 264
        $context["defaultData"] = ["telephone" => "", "email" => "", "fax" => "", "portable" => ""];
        // line 265
        echo "                 data-prototype=\"";
        echo twig_escape_filter($this->env, twig_call_macro($macros["formMacros"], "macro_printContactRow", [twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 265, $this->source); })()), "opcas", [], "any", false, false, false, 265), "vars", [], "any", false, false, false, 265), "prototype", [], "any", false, false, false, 265), (isset($context["defaultData"]) || array_key_exists("defaultData", $context) ? $context["defaultData"] : (function () { throw new RuntimeError('Variable "defaultData" does not exist.', 265, $this->source); })())], 265, $context, $this->getSourceContext()), "html_attr");
        echo "\"
                 >
                <table class=\"table scrollabletable\">
                    <thead>
                        <tr class=\"text-center\">
                            <th>Civilité <span class=\"required\"></span></th>
                            <th>Nom <span class=\"required\"></span></th>
                            <th>Prénom(s) <span class=\"required\"></span></th>
                            <th>Qualité</th>
                            <th>Telephone</th>
                            <th>Fax</th>
                            <th>Portable</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody class=\"detail-body\" style=\"max-height: 300px;overflow:scroll \">
                        ";
        // line 281
        $context["i"] = 0;
        // line 282
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 282, $this->source); })()), "opcas", [], "any", false, false, false, 282));
        foreach ($context['_seq'] as $context["_key"] => $context["contactForm"]) {
            // line 283
            echo "                            ";
            $context["data"] = twig_get_attribute($this->env, $this->source, (isset($context["dataComplementaire"]) || array_key_exists("dataComplementaire", $context) ? $context["dataComplementaire"] : (function () { throw new RuntimeError('Variable "dataComplementaire" does not exist.', 283, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 283, $this->source); })()), [], "array", false, false, false, 283);
            // line 284
            echo "                            ";
            echo twig_call_macro($macros["formMacros"], "macro_printContactRow", [$context["contactForm"], (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 284, $this->source); })())], 284, $context, $this->getSourceContext());
            echo "
                            ";
            // line 285
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 285, $this->source); })()) + 1);
            // line 286
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 287
        echo "                    </tbody>
                </table>
            </div>
            <div class=\"\">
                ";
        // line 292
        echo "            </div>
        </div>
    </fieldset>

    <div class=\"text-center my-3\">
        <button type=\"submit\" class=\"btn btn-primary\" >Sauvegarder</button>
    </div>
    ";
        // line 299
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 299, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "

     ";
        // line 301
        $this->displayBlock('modal', $context, $blocks);
        // line 320
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 301
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 302
        echo "        ";
        // line 303
        echo "        <div class=\"modal fade\" id=\"modalActiviteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"forselect\" id=\"forselect\" />
                        ";
        // line 314
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SecteurActiviteController::SecteurActiviteForm"));
        echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 323
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 324
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    ";
        // line 331
        echo "    ";
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "opca/show.html.twig", 331)->display($context);
        // line 332
        echo "    
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('#bntEdit').click(function(e){
            e.preventDefault();
            common.enableFormFields();
            \$('#save').show();
            \$('#bntCancel').show();
            });
            \$('#bntCancel').click(function(e){
            e.preventDefault();
            history.go(0);
            });
            //AUTO COMPLETION VILLE
            \$('#opca_adresses_0_idVille').select2({
            placeholder: \"-- ville --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                    url: '";
        // line 351
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
            ";
        // line 361
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 361, $this->source); })()), "request", [], "any", false, false, false, 361), "query", [], "any", false, false, false, 361), "get", [0 => "ville"], "method", false, false, false, 361)) {
            // line 362
            echo "                var data = {
                id: \"";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 363, $this->source); })()), "request", [], "any", false, false, false, 363), "query", [], "any", false, false, false, 363), "get", [0 => "ville"], "method", false, false, false, 363), "html", null, true);
            echo "\",
                        text: '";
            // line 364
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 364, $this->source); })()), "request", [], "any", false, false, false, 364), "query", [], "any", false, false, false, 364), "get", [0 => "ville"], "method", false, false, false, 364), "html", null, true);
            echo "'
                };
                var newOption = new Option(data.text, data.text, true, true);
                \$('#opca_adresses_0_idVille').append(newOption).trigger('change');
            ";
        }
        // line 369
        echo "            //FIN AUTO COMPLETION

            // VILLE preselectionné
            // Fetch the preselected item, and add to the control
            setVilleValue();
            function setVilleValue() {
                var villeSelect = \$('#opca_adresses_0_idVille');
                if (";
        // line 376
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_opca"]) || array_key_exists("detail_opca", $context) ? $context["detail_opca"] : (function () { throw new RuntimeError('Variable "detail_opca" does not exist.', 376, $this->source); })()), "idVille", [], "any", false, false, false, 376), "html", null, true);
        echo ") {
                    var ville_id = ";
        // line 377
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_opca"]) || array_key_exists("detail_opca", $context) ? $context["detail_opca"] : (function () { throw new RuntimeError('Variable "detail_opca" does not exist.', 377, $this->source); })()), "idVille", [], "any", false, false, false, 377), "html", null, true);
        echo ";
                    var url = '";
        // line 378
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
            // FIN preselection
            //Adding field Critere de financement
            \$('#addInputsCritere').click(function(e){
                e.preventDefault();
                createCritereForm();
            });
            function createCritereForm(){
                var elem = document.getElementById('critereTable');
                var lastIndex = \$('#critereTable tr:last').attr('data-critere-id');
                console.log(lastIndex);
                var index = Number(lastIndex) + 1;
                var currentRow = elem.insertRow( - 1);
                var inputId = document.createElement('input');
                inputId.type = 'hidden';
                inputId.setAttribute('name', 'critere[' + index + '][id]');
                currentRow.appendChild(inputId);
                var date = document.createElement('input');
                date.type = 'text';
                date.setAttribute('name', 'critere[' + index + '][date]');
                date.setAttribute('class', 'js-datepicker form-control');
                date.setAttribute('placeholder', 'date');
                \$(date).datepicker({
                'format':'dd-mm-yyyy',
                        'autoclose': true,
                        'clearBtn': true,
                        'language': 'fr',
                });
                var dispositif = document.createElement('input');
                dispositif.type = 'text';
                dispositif.setAttribute('name', 'critere[' + index + '][dispositif]');
                dispositif.setAttribute('class', 'form-control');
                dispositif.setAttribute('placeholder', 'Dispositif');
                var commentaire = document.createElement('input');
                commentaire.type = 'text';
                commentaire.setAttribute('name', 'critere[' + index + '][commentaire]');
                commentaire.setAttribute('class', 'form-control');
                commentaire.setAttribute('placeholder', 'Commentaire');
                var close = document.createElement('a');
                close.type = 'button';
                close.setAttribute('value', 'x');
                close.setAttribute('class', 'btn-sm btn-danger removeInputCritere');
                var span = document.createElement('span');
                span.setAttribute('class','fa fa-trash-alt color-white');
                close.appendChild(span);
                \$(close).bind('click', function(){
                    \$(this).closest('tr').remove();
                });
                var currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(date);
                currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(dispositif);
                currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(commentaire);
                currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(close);
            }

            \$(\".js-datepicker\").each(function(){
                    \$(this).datepicker({
                    'format':'dd-mm-yyyy',
                            'autoclose': true,
                            'clearBtn': true,
                            'language': 'fr',
                    });
                });
            });

    </script>
    <script>
                \$(document).ready(function() {
        deleteHide();
        });
        var \$wrapper = \$('.detail-wrapper');
        function countTR(element) {
        var tr = element.children('tr');
        return tr.length;
        }

        function deleteHide() {
        if (countTR(\$('.detail-body')) === 1) {
        \$('.remove-detail').hide();
        } else {
        \$('.remove-detail').show();
        }
        }

        function addTr(e) {
            e.preventDefault();
            // Get the data-prototype explained earlier
            let prototype = \$wrapper.data('prototype');
            // get the new index
            let index = \$wrapper.data('index');
            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            let newForm = prototype.replace(/__name__/g, index);
            // increase the index with one for the next item
            \$wrapper.data('index', index + 1);
            // Display the form in the page before the \"new\" link
            \$('.detail-body').append(newForm);
            \$('body .opca-contacts :input').attr('disabled', false);
            deleteHide();
        }

        function deleteLine(element, e) {
            e.preventDefault();
            element.parents('tr').fadeOut().remove();
            deleteHide();
        }
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function macro_printContactRow($__form__ = null, $__dataComplementaire__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "dataComplementaire" => $__dataComplementaire__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printContactRow"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printContactRow"));

            // line 27
            echo "        <tr class=\"detail-line opca-contacts\">
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "idCivilite", [], "any", false, false, false, 31), 'widget', ["attr" => ["disabled" => "true"]]);
            echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "nom", [], "any", false, false, false, 38), 'widget', ["attr" => ["disabled" => "true"]]);
            echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "prenom", [], "any", false, false, false, 45), 'widget', ["attr" => ["disabled" => "true"]]);
            echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "qualite", [], "any", false, false, false, 52), 'widget', ["attr" => ["disabled" => "true"]]);
            echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "Telephone", [], "any", false, false, false, 59), 'widget', ["attr" => ["disabled" => "true", "value" => twig_get_attribute($this->env, $this->source, (isset($context["dataComplementaire"]) || array_key_exists("dataComplementaire", $context) ? $context["dataComplementaire"] : (function () { throw new RuntimeError('Variable "dataComplementaire" does not exist.', 59, $this->source); })()), "telephone", [], "any", false, false, false, 59), "maxlength" => 14]]);
            echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "Fax", [], "any", false, false, false, 66), 'widget', ["attr" => ["disabled" => "true", "value" => twig_get_attribute($this->env, $this->source, (isset($context["dataComplementaire"]) || array_key_exists("dataComplementaire", $context) ? $context["dataComplementaire"] : (function () { throw new RuntimeError('Variable "dataComplementaire" does not exist.', 66, $this->source); })()), "fax", [], "any", false, false, false, 66), "maxlength" => 14]]);
            echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 73
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "Portable", [], "any", false, false, false, 73), 'widget', ["attr" => ["disabled" => "true", "value" => twig_get_attribute($this->env, $this->source, (isset($context["dataComplementaire"]) || array_key_exists("dataComplementaire", $context) ? $context["dataComplementaire"] : (function () { throw new RuntimeError('Variable "dataComplementaire" does not exist.', 73, $this->source); })()), "portable", [], "any", false, false, false, 73), "maxlength" => 14]]);
            echo "
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "Email", [], "any", false, false, false, 80), 'widget', ["attr" => ["disabled" => "true", "value" => twig_get_attribute($this->env, $this->source, (isset($context["dataComplementaire"]) || array_key_exists("dataComplementaire", $context) ? $context["dataComplementaire"] : (function () { throw new RuntimeError('Variable "dataComplementaire" does not exist.', 80, $this->source); })()), "email", [], "any", false, false, false, 80)]]);
            echo "
                    </div>
                </div>
            </td>
            <td class=\"text-right\">
                <button class=\"btn-sm btn-danger remove-detail\" onclick=\"deleteLine(\$(this), event)\" ><span class=\"fa fa-trash-alt\"></span></button>
            </td>
        </tr>
    ";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "opca/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  869 => 80,  859 => 73,  849 => 66,  839 => 59,  829 => 52,  819 => 45,  809 => 38,  799 => 31,  793 => 27,  773 => 26,  632 => 378,  628 => 377,  624 => 376,  615 => 369,  607 => 364,  603 => 363,  600 => 362,  598 => 361,  585 => 351,  564 => 332,  561 => 331,  551 => 324,  541 => 323,  525 => 314,  512 => 303,  510 => 302,  500 => 301,  489 => 320,  487 => 301,  482 => 299,  473 => 292,  467 => 287,  461 => 286,  459 => 285,  454 => 284,  451 => 283,  446 => 282,  444 => 281,  424 => 265,  422 => 264,  418 => 263,  400 => 247,  394 => 246,  392 => 245,  385 => 243,  379 => 242,  373 => 241,  367 => 240,  362 => 239,  357 => 238,  355 => 237,  347 => 231,  327 => 213,  320 => 208,  318 => 206,  312 => 203,  302 => 196,  291 => 188,  275 => 175,  261 => 164,  258 => 163,  256 => 161,  250 => 158,  247 => 157,  245 => 155,  239 => 152,  236 => 151,  234 => 149,  224 => 142,  220 => 140,  218 => 138,  212 => 135,  209 => 134,  207 => 132,  194 => 122,  190 => 120,  181 => 117,  178 => 116,  174 => 115,  168 => 111,  157 => 102,  155 => 101,  146 => 95,  141 => 93,  135 => 89,  132 => 25,  130 => 24,  127 => 23,  117 => 22,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}OPCO - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
    <style>
        .scrollabletable{
            display: block;
            height: 300px;
            overflow-y: scroll;
            width: 100%;
        }
        .color-white{
            color:white;
        }
    </style>
{% endblock %}

{% block body %}

    {% import _self as formMacros %}

    {% macro printContactRow(form, dataComplementaire) %}
        <tr class=\"detail-line opca-contacts\">
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.idCivilite, {attr: {'disabled':'true'} }) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.nom, {attr: {'disabled':'true'} }) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.prenom, {attr: {'disabled':'true'} }) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.qualite, {attr: {'disabled':'true'} }) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.Telephone,{attr: {'disabled':'true','value':dataComplementaire.telephone, 'maxlength':14} }) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.Fax, {attr: {'disabled':'true','value':dataComplementaire.fax, 'maxlength':14} }) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.Portable, {attr: {'disabled':'true','value':dataComplementaire.portable, 'maxlength':14} }) }}
                    </div>
                </div>
            </td>
            <td>
                <div class=\"form-group\">
                    <div class=\"col-sm-12\">
                        {{ form_widget(form.Email, {attr: {'disabled':'true','value':dataComplementaire.email} }) }}
                    </div>
                </div>
            </td>
            <td class=\"text-right\">
                <button class=\"btn-sm btn-danger remove-detail\" onclick=\"deleteLine(\$(this), event)\" ><span class=\"fa fa-trash-alt\"></span></button>
            </td>
        </tr>
    {% endmacro %}

    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">
                    <a href=\"{{ path('OPCA_Controller') }}\" title=\"Liste des encaissements\">Liste des OPCO</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails OPCO</li>
            </ol>

            <div>
                {% if is_granted('edit', 'OPCO') %}
                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier l'OPCO
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>
        </div>

    </nav>
    {% for msg in app.session.flashBag.get('success') %}
        <div class=\"alert alert-success\">
            {{ msg }}
        </div>
    {% endfor %}
    <h2 class=\"text-center mt-2 text-primary\">Détail OPCO</h2>

    {{ form_start(opca_form) }}

    <div class=\"row\">
        <div class=\"col-sm-9\">
            <fieldset>
                <legend>Informations OPCO</legend>
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"form-group col-sm-6 text-center\">
                                {{ form_label(opca_form.nomStr, 'OPCO', {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                                {{ form_widget(opca_form.nomStr, {attr : {'disabled' : 'true'}}) }}
                            </div>
                            <div class=\"form-group col-sm-6 text-center\">
                                {{ form_label(opca_form.idSecteur, 'Activité adhérents ',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                    {{ form_widget(opca_form.idSecteur) }}
                            </div>
                        </div>
                    </div>
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                {{ form_label(opca_form.adresses.children[0].children[\"adresse\"], 'N°,voie',{
                                'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                            }) }}
                                {{ form_widget(opca_form.adresses.children[0].children[\"adresse\"], {attr : {'disabled' : 'true'}}) }}
                            </div>
                            <div class=\"col-sm-4\">
                                {{ form_label(opca_form.adresses.children[0].children[\"codePostal\"], 'Code postal',{
                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                            }) }}
                                {{ form_widget(opca_form.adresses.children[0].children[\"codePostal\"], {attr : {'disabled' : 'true'}}) }}
                            </div>
                            <div class=\"col-sm-4\">
                                {{ form_label(opca_form.adresses.children[0].children[\"idVille\"], 'Ville',{
                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                            }) }}
                                {{ form_widget(opca_form.adresses.children[0].children[\"idVille\"], {attr : {'disabled' : 'true'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class=\"col-sm-3\">
            <fieldset>
                <legend>Notes</legend>
                <textarea style=\"height:119px\" type=\"text\" id=\"note\" name=\"note\" class=\"form-control\" disabled> {{ note.notes|default('') }}</textarea>
            </fieldset>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <fieldset>
                <legend>Coordonnées OPCO</legend>
                <div class=\"col-sm-12\">
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            <label class=\"font-weight-bold required\" for=\"telephone9\">Telephone</label>
                            <input type=\"text\" id=\"telephone9\" name=\"telephone9\" class=\"telephone-format form-control\" value=\"{{ detail_opca.telephone }}\" maxlength=\"14\" pattern=\".{14,14}\"  disabled>
                        </div>
                        <div class=\"text-center col-sm-6\">
                            <label class=\"font-weight-bold\" for=\"email2\">Email</label>
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\">@</div>
                                </div>
                                <input type=\"email\" id=\"email2\" name=\"email2\" class=\"form-control\" value=\"{{ detail_opca.email }}\" disabled>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            <label class=\"font-weight-bold\" for=\"fax9\">Fax</label>
                            <input type=\"text\" id=\"fax9\" name=\"fax9\" class=\"form-control\" value=\"{{ detail_opca.fax }}\" disabled>
                        </div>
                        <div class=\"text-center col-sm-6\">
                            {{ form_label(opca_form.siteweb, 'Site web:',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\">http://</div>
                                </div>
                                {{ form_widget(opca_form.siteweb,{attr : {'disabled' : 'true'}}) }}
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>

        <div class=\"col-md-6\">
            <fieldset class=\"position-relative\">
                <legend>Critères de financement</legend>
                <a href=\"javascript:void(0)\" class=\"plus-link\" id=\"addInputsCritere\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                {#                <input disabled type=\"button\" value=\"+\" id=\"addInputsCritere\">#}
                <table class=\"table\" id=\"critereTable\">
                    <tr>
                        <th>Date</th>
                        <th>Dispositif</th>
                        <th>Commentaires</th>
                    </tr>
                    {% set i = 1 %}
                    {% for cri in critere %}
                        <tr data-critere-id = \"{{ i }}\">
                        <input disabled type=\"hidden\" name=\"critere[{{ i }}][id]\"value=\"{{ cri.id }}\">
                        <td><input disabled type=\"text\" name=\"critere[{{ i}}][date]\" class=\"js-datepicker form-control\" placeholder=\"date\" value=\"{{ cri.date | date('d-m-Y') }}\"></td>
                        <td><input disabled type=\"text\" name=\"critere[{{ i}}][dispositif]\" class=\"form-control\" placeholder=\"Dispositif\" value=\"{{ cri.dispositif }}\"></td>
                        <td><input disabled type=\"text\" name=\"critere[{{ i}}][commentaire]\" class=\"form-control\" placeholder=\"Commentaire\" value=\"{{ cri.commentaire }}\"></td>
                        </tr>
                        {% set i = i + 1  %}
                    {% endfor %}
                </table>
            </fieldset>
        </div>
    </div>

    <fieldset class=\"position-relative\">
        <legend>Contact OPCO</legend>
        <a href=\"javascript:void(0)\" class=\"row plus-link\" onclick=\"addTr(event)\">
            <span class=\"fa-stack fa-1x\">
                <i class=\"fas fa-circle fa-stack-2x\"></i>
                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
            </span>
        </a>
        <br/><br/>
        <div class=\"row\">
            <div class=\"col-md-12 detail-wrapper\"
                 data-index=\"{{ nbOpcaContact }}\"
                 {% set defaultData = { 'telephone':'','email':'','fax':'','portable':''} %}
                 data-prototype=\"{{ formMacros.printContactRow(opca_form.opcas.vars.prototype, defaultData )|e('html_attr') }}\"
                 >
                <table class=\"table scrollabletable\">
                    <thead>
                        <tr class=\"text-center\">
                            <th>Civilité <span class=\"required\"></span></th>
                            <th>Nom <span class=\"required\"></span></th>
                            <th>Prénom(s) <span class=\"required\"></span></th>
                            <th>Qualité</th>
                            <th>Telephone</th>
                            <th>Fax</th>
                            <th>Portable</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody class=\"detail-body\" style=\"max-height: 300px;overflow:scroll \">
                        {% set i = 0 %}
                        {% for contactForm in opca_form.opcas %}
                            {% set data =  dataComplementaire[i] %}
                            {{ formMacros.printContactRow(contactForm, data ) }}
                            {% set i = i + 1 %}
                        {% endfor %}
                    </tbody>
                </table>
            </div>
            <div class=\"\">
                {#{{ form_widget(opca_form.opcas) }}#}
            </div>
        </div>
    </fieldset>

    <div class=\"text-center my-3\">
        <button type=\"submit\" class=\"btn btn-primary\" >Sauvegarder</button>
    </div>
    {{ form_end(opca_form,{'render_rest': false}) }}

     {% block modal %}
        {# APR-167 : Fix champ Activité adhérents #}
        <div class=\"modal fade\" id=\"modalActiviteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"forselect\" id=\"forselect\" />
                        {{ render(controller('App\\\\Controller\\\\SecteurActiviteController::SecteurActiviteForm')) }}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}
    
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    {# APR-167 : Fix bug : activité adhérents #}
    {% include 'contact/Parts/contact.js.html.twig' %}
    
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$('#bntEdit').click(function(e){
            e.preventDefault();
            common.enableFormFields();
            \$('#save').show();
            \$('#bntCancel').show();
            });
            \$('#bntCancel').click(function(e){
            e.preventDefault();
            history.go(0);
            });
            //AUTO COMPLETION VILLE
            \$('#opca_adresses_0_idVille').select2({
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
            {% if app.request.query.get('ville') %}
                var data = {
                id: \"{{ app.request.query.get('ville') }}\",
                        text: '{{ app.request.query.get('ville') }}'
                };
                var newOption = new Option(data.text, data.text, true, true);
                \$('#opca_adresses_0_idVille').append(newOption).trigger('change');
            {% endif  %}
            //FIN AUTO COMPLETION

            // VILLE preselectionné
            // Fetch the preselected item, and add to the control
            setVilleValue();
            function setVilleValue() {
                var villeSelect = \$('#opca_adresses_0_idVille');
                if ({{ detail_opca.idVille }}) {
                    var ville_id = {{ detail_opca.idVille }};
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
            // FIN preselection
            //Adding field Critere de financement
            \$('#addInputsCritere').click(function(e){
                e.preventDefault();
                createCritereForm();
            });
            function createCritereForm(){
                var elem = document.getElementById('critereTable');
                var lastIndex = \$('#critereTable tr:last').attr('data-critere-id');
                console.log(lastIndex);
                var index = Number(lastIndex) + 1;
                var currentRow = elem.insertRow( - 1);
                var inputId = document.createElement('input');
                inputId.type = 'hidden';
                inputId.setAttribute('name', 'critere[' + index + '][id]');
                currentRow.appendChild(inputId);
                var date = document.createElement('input');
                date.type = 'text';
                date.setAttribute('name', 'critere[' + index + '][date]');
                date.setAttribute('class', 'js-datepicker form-control');
                date.setAttribute('placeholder', 'date');
                \$(date).datepicker({
                'format':'dd-mm-yyyy',
                        'autoclose': true,
                        'clearBtn': true,
                        'language': 'fr',
                });
                var dispositif = document.createElement('input');
                dispositif.type = 'text';
                dispositif.setAttribute('name', 'critere[' + index + '][dispositif]');
                dispositif.setAttribute('class', 'form-control');
                dispositif.setAttribute('placeholder', 'Dispositif');
                var commentaire = document.createElement('input');
                commentaire.type = 'text';
                commentaire.setAttribute('name', 'critere[' + index + '][commentaire]');
                commentaire.setAttribute('class', 'form-control');
                commentaire.setAttribute('placeholder', 'Commentaire');
                var close = document.createElement('a');
                close.type = 'button';
                close.setAttribute('value', 'x');
                close.setAttribute('class', 'btn-sm btn-danger removeInputCritere');
                var span = document.createElement('span');
                span.setAttribute('class','fa fa-trash-alt color-white');
                close.appendChild(span);
                \$(close).bind('click', function(){
                    \$(this).closest('tr').remove();
                });
                var currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(date);
                currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(dispositif);
                currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(commentaire);
                currentCell = currentRow.insertCell( - 1);
                currentCell.appendChild(close);
            }

            \$(\".js-datepicker\").each(function(){
                    \$(this).datepicker({
                    'format':'dd-mm-yyyy',
                            'autoclose': true,
                            'clearBtn': true,
                            'language': 'fr',
                    });
                });
            });

    </script>
    <script>
                \$(document).ready(function() {
        deleteHide();
        });
        var \$wrapper = \$('.detail-wrapper');
        function countTR(element) {
        var tr = element.children('tr');
        return tr.length;
        }

        function deleteHide() {
        if (countTR(\$('.detail-body')) === 1) {
        \$('.remove-detail').hide();
        } else {
        \$('.remove-detail').show();
        }
        }

        function addTr(e) {
            e.preventDefault();
            // Get the data-prototype explained earlier
            let prototype = \$wrapper.data('prototype');
            // get the new index
            let index = \$wrapper.data('index');
            // Replace '__name__' in the prototype's HTML to
            // instead be a number based on how many items we have
            let newForm = prototype.replace(/__name__/g, index);
            // increase the index with one for the next item
            \$wrapper.data('index', index + 1);
            // Display the form in the page before the \"new\" link
            \$('.detail-body').append(newForm);
            \$('body .opca-contacts :input').attr('disabled', false);
            deleteHide();
        }

        function deleteLine(element, e) {
            e.preventDefault();
            element.parents('tr').fadeOut().remove();
            deleteHide();
        }
    </script>

{% endblock %}
", "opca/show.html.twig", "/home/jeremy/Bureau/project/app/templates/opca/show.html.twig");
    }
}
