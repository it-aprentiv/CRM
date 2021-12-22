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

/* contact/opca.modal.html.twig */
class __TwigTemplate_43dedcf7d6c1c58491e54854c9a6e37b383510891253b065ce92c641a50e048e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/opca.modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/opca.modal.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
    <div class=\"col-sm-12\">
        <div class=\"row well p-3\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"form-group col-sm-6 text-center\">
                        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 7, $this->source); })()), "nomStr", [], "any", false, false, false, 7), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCA"]);
        // line 9
        echo "
                        ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 10, $this->source); })()), "nomStr", [], "any", false, false, false, 10), 'widget');
        echo "
                    </div>
                    <div class=\"form-group col-sm-6 text-center\">
                        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 13, $this->source); })()), "idSecteur", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Activité adhérents "]);
        // line 15
        echo "
                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 17, $this->source); })()), "idSecteur", [], "any", false, false, false, 17), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 24, $this->source); })()), "adresses", [], "any", false, false, false, 24), "children", [], "any", false, false, false, 24), 0, [], "array", false, false, false, 24), "children", [], "any", false, false, false, 24), "adresse", [], "array", false, false, false, 24), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "N°,voie"]);
        // line 26
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 27, $this->source); })()), "adresses", [], "any", false, false, false, 27), "children", [], "any", false, false, false, 27), 0, [], "array", false, false, false, 27), "children", [], "any", false, false, false, 27), "adresse", [], "array", false, false, false, 27), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 30, $this->source); })()), "adresses", [], "any", false, false, false, 30), "children", [], "any", false, false, false, 30), 0, [], "array", false, false, false, 30), "children", [], "any", false, false, false, 30), "codePostal", [], "array", false, false, false, 30), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Code postale"]);
        // line 32
        echo "
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 33, $this->source); })()), "adresses", [], "any", false, false, false, 33), "children", [], "any", false, false, false, 33), 0, [], "array", false, false, false, 33), "children", [], "any", false, false, false, 33), "codePostal", [], "array", false, false, false, 33), 'widget');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                        ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 36, $this->source); })()), "adresses", [], "any", false, false, false, 36), "children", [], "any", false, false, false, 36), 0, [], "array", false, false, false, 36), "children", [], "any", false, false, false, 36), "idVille", [], "array", false, false, false, 36), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Ville"]);
        // line 38
        echo "
                        ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 39, $this->source); })()), "adresses", [], "any", false, false, false, 39), "children", [], "any", false, false, false, 39), 0, [], "array", false, false, false, 39), "children", [], "any", false, false, false, 39), "idVille", [], "array", false, false, false, 39), 'widget');
        echo "
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 40, $this->source); })()), "adresses", [], "any", false, false, false, 40), "children", [], "any", false, false, false, 40), 0, [], "array", false, false, false, 40), "children", [], "any", false, false, false, 40), "idVille", [], "array", false, false, false, 40), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-12 mb-3 mt-3\">
        <div class=\"row well p-3\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-8\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 52, $this->source); })()), "adresses", [], "any", false, false, false, 52), "children", [], "any", false, false, false, 52), 0, [], "array", false, false, false, 52), "children", [], "any", false, false, false, 52), "comp_adresse", [], "array", false, false, false, 52), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "N°,voie,nom de la voie"]);
        // line 54
        echo "
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 55, $this->source); })()), "adresses", [], "any", false, false, false, 55), "children", [], "any", false, false, false, 55), 0, [], "array", false, false, false, 55), "children", [], "any", false, false, false, 55), "comp_adresse", [], "array", false, false, false, 55), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 60, $this->source); })()), "Telephone", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Telephone"]);
        // line 62
        echo "
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 63, $this->source); })()), "Telephone", [], "any", false, false, false, 63), 'widget');
        echo "
                        </div>
                        <div class=\"text-center col-sm-6\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 66, $this->source); })()), "Email", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 68
        echo "
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 69, $this->source); })()), "Email", [], "any", false, false, false, 69), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 74, $this->source); })()), "Fax", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
        // line 76
        echo "
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 77, $this->source); })()), "Fax", [], "any", false, false, false, 77), 'widget');
        echo "
                        </div>
                        <div class=\"text-center col-sm-6\">
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 80, $this->source); })()), "siteweb", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 82
        echo "
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\">http://</div>
                                </div>
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 87, $this->source); })()), "siteweb", [], "any", false, false, false, 87), 'widget');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-12\">
        <div class=\"row well p-3\">
            <span><u><b><h4 style=\"margin-right: 0%;\">Contact </h4></b></u></span>
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-3 pl-0 pr-0\">
                        <div class=\"text-center col-md-12\">
                            ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 102, $this->source); })()), "idCivilite", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
        // line 104
        echo "
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 105, $this->source); })()), "idCivilite", [], "any", false, false, false, 105), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-sm-3 pl-0 pr-0\">
                        <div class=\"text-center col-md-12\">
                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 110, $this->source); })()), "nom", [], "any", false, false, false, 110), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 112
        echo "
                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 113, $this->source); })()), "nom", [], "any", false, false, false, 113), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-sm-3 pl-0 pr-0\">
                        <div class=\"text-center col-md-12 p-0\">
                            ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 118, $this->source); })()), "prenom", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prénom"]);
        // line 120
        echo "
                            ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 121, $this->source); })()), "prenom", [], "any", false, false, false, 121), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 125, $this->source); })()), "qualite", [], "any", false, false, false, 125), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
        // line 127
        echo "
                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalQualiteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 129, $this->source); })()), "qualite", [], "any", false, false, false, 129), 'widget');
        echo "
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=\"col-sm-12 mt-3\">
        <div class=\"form-group row justify-content-right\">
            <div class=\"col-sm-3 text-right\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
            <div class=\"col-sm-3 text-right\">
                <button type=\"submit\" class=\"btn btn-primary\" id=\"addopcato\" >Ajouter</button>
            </div>
        </div>
    </div>
";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 146, $this->source); })()), 'form_end', ["render_rest" => false]);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "contact/opca.modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 146,  244 => 129,  240 => 127,  238 => 125,  231 => 121,  228 => 120,  226 => 118,  218 => 113,  215 => 112,  213 => 110,  205 => 105,  202 => 104,  200 => 102,  182 => 87,  175 => 82,  173 => 80,  167 => 77,  164 => 76,  162 => 74,  154 => 69,  151 => 68,  149 => 66,  143 => 63,  140 => 62,  138 => 60,  130 => 55,  127 => 54,  125 => 52,  110 => 40,  106 => 39,  103 => 38,  101 => 36,  95 => 33,  92 => 32,  90 => 30,  84 => 27,  81 => 26,  79 => 24,  69 => 17,  65 => 15,  63 => 13,  57 => 10,  54 => 9,  52 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(opca_form,{'attr':{'class':'list-filter'}}) }}
    <div class=\"col-sm-12\">
        <div class=\"row well p-3\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"form-group col-sm-6 text-center\">
                        {{ form_label(opca_form.nomStr, 'OPCA', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(opca_form.nomStr) }}
                    </div>
                    <div class=\"form-group col-sm-6 text-center\">
                        {{ form_label(opca_form.idSecteur, 'Activité adhérents ',{
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
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
                        {{ form_widget(opca_form.adresses.children[0].children[\"adresse\"]) }}
                    </div>
                    <div class=\"col-sm-4\">
                        {{ form_label(opca_form.adresses.children[0].children[\"codePostal\"], 'Code postale',{
                            'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                        }) }}
                        {{ form_widget(opca_form.adresses.children[0].children[\"codePostal\"]) }}
                    </div>
                    <div class=\"col-sm-4\">
                        {{ form_label(opca_form.adresses.children[0].children[\"idVille\"], 'Ville',{
                            'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                        }) }}
                        {{ form_widget(opca_form.adresses.children[0].children[\"idVille\"]) }}
                        {{ form_widget(opca_form.adresses.children[0].children[\"idVille\"]) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-12 mb-3 mt-3\">
        <div class=\"row well p-3\">
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12\">
                    <div class=\"row justify-content-center\">
                        <div class=\"col-sm-8\">
                            {{ form_label(opca_form.adresses.children[0].children[\"comp_adresse\"], 'N°,voie,nom de la voie',{
                                    'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                            }) }}
                            {{ form_widget(opca_form.adresses.children[0].children[\"comp_adresse\"]) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            {{ form_label(opca_form.Telephone, 'Telephone',{
                                'label_attr': {'class': 'font-weight-bold required'}
                            }) }}
                            {{ form_widget(opca_form.Telephone) }}
                        </div>
                        <div class=\"text-center col-sm-6\">
                            {{ form_label(opca_form.Email, 'Email',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
                            {{ form_widget(opca_form.Email) }}
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"text-center col-sm-6\">
                            {{ form_label(opca_form.Fax, 'Fax',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
                            {{ form_widget(opca_form.Fax) }}
                        </div>
                        <div class=\"text-center col-sm-6\">
                            {{ form_label(opca_form.siteweb, 'Site web:',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <div class=\"input-group-text\">http://</div>
                                </div>
                                {{ form_widget(opca_form.siteweb) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-sm-12\">
        <div class=\"row well p-3\">
            <span><u><b><h4 style=\"margin-right: 0%;\">Contact </h4></b></u></span>
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <div class=\"col-sm-3 pl-0 pr-0\">
                        <div class=\"text-center col-md-12\">
                            {{ form_label(opca_form.idCivilite, 'Civilité',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(opca_form.idCivilite) }}
                        </div>
                    </div>
                    <div class=\"col-sm-3 pl-0 pr-0\">
                        <div class=\"text-center col-md-12\">
                            {{ form_label(opca_form.nom, 'Nom',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(opca_form.nom) }}
                        </div>
                    </div>
                    <div class=\"col-sm-3 pl-0 pr-0\">
                        <div class=\"text-center col-md-12 p-0\">
                            {{ form_label(opca_form.prenom, 'Prénom',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(opca_form.prenom) }}
                        </div>
                    </div>
                    <div class=\"col-sm-3\">
                        {{ form_label(opca_form.qualite, 'Qualité',{
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalQualiteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                        {{ form_widget(opca_form.qualite) }}
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class=\"col-sm-12 mt-3\">
        <div class=\"form-group row justify-content-right\">
            <div class=\"col-sm-3 text-right\">
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
            </div>
            <div class=\"col-sm-3 text-right\">
                <button type=\"submit\" class=\"btn btn-primary\" id=\"addopcato\" >Ajouter</button>
            </div>
        </div>
    </div>
{{ form_end(opca_form,{'render_rest': false}) }}", "contact/opca.modal.html.twig", "/home/jeremy/Bureau/project/app/templates/contact/opca.modal.html.twig");
    }
}
