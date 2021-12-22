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

/* stagiaire/create.html.twig */
class __TwigTemplate_4fcf2b4c717606b0eba50897eae7f812363493ac246951e0d11238e33acfd932 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "stagiaire/create.html.twig"));

        // line 1
        echo "<div class=\"testForm\">
    ";
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => "popUp-ajout-stagiaire list-filter"]]);
        echo "
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"form-group col-12 \">
                <label class=\"title\">";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 8
        echo "
                </label>
                <div class=\"small-input required-field\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 11, $this->source); })()), "nom", [], "any", false, false, false, 11), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 15, $this->source); })()), "prenom", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "\tPrénom"]);
        // line 17
        echo "
                </label>
                <div class=\"small-input required-field\">
                    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 20, $this->source); })()), "prenom", [], "any", false, false, false, 20), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "\tEmail"]);
        // line 26
        echo "
                </label>
                <div class=\"small-input required-field\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 33, $this->source); })()), "date_naissance", [], "any", false, false, false, 33), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "\tDate de naissance"]);
        // line 35
        echo "
                </label>
                <div class=\"small-input required-field\">
                    ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 38, $this->source); })()), "date_naissance", [], "any", false, false, false, 38), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 42, $this->source); })()), "niveauetude", [], "any", false, false, false, 42), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Niveau d'étude"]);
        // line 44
        echo "
                </label>
                <div class=\"small-input required-field\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 47, $this->source); })()), "niveauetude", [], "any", false, false, false, 47), 'widget');
        echo "
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 51, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "\tNuméro de sécurité sociale"]);
        // line 53
        echo "
                </label>
                <div class=\"small-input required-field\">
                    ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 56, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 56), 'widget');
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 61, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "stagiaire/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 61,  130 => 56,  125 => 53,  123 => 51,  116 => 47,  111 => 44,  109 => 42,  102 => 38,  97 => 35,  95 => 33,  88 => 29,  83 => 26,  81 => 24,  74 => 20,  69 => 17,  67 => 15,  60 => 11,  55 => 8,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"testForm\">
    {{ form_start(data, { 'attr' : {'class': 'popUp-ajout-stagiaire list-filter' }  }) }}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"form-group col-12 \">
                <label class=\"title\">{{ form_label(data.nom, 'Nom', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                <div class=\"small-input required-field\">
                    {{ form_widget(data.nom) }}
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">{{ form_label(data.prenom, '\tPrénom', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                <div class=\"small-input required-field\">
                    {{ form_widget(data.prenom) }}
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">{{ form_label(data.email, '\tEmail', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                <div class=\"small-input required-field\">
                    {{ form_widget(data.email) }}
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">{{ form_label(data.date_naissance, '\tDate de naissance', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                <div class=\"small-input required-field\">
                    {{ form_widget(data.date_naissance) }}
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">{{ form_label(data.niveauetude, \"Niveau d'étude\", {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                <div class=\"small-input required-field\">
                    {{ form_widget(data.niveauetude) }}
                </div>
            </div>
            <div class=\"form-group col-12 \">
                <label class=\"title\">{{ form_label(data.nsecuritesocial, '\tNuméro de sécurité sociale', {
                    'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                </label>
                <div class=\"small-input required-field\">
                    {{ form_widget(data.nsecuritesocial) }}
                </div>
            </div>
        </div>
    </div>
    {{ form_end(data) }}
</div>
", "stagiaire/create.html.twig", "/home/jeremy/Bureau/project/app/templates/stagiaire/create.html.twig");
    }
}
