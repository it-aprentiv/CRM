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

/* qualite/modal.add.qualite.html.twig */
class __TwigTemplate_b57bf38a942212243cd58e5a669811b8df57dae456ae36e39461b261106353c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qualite/modal.add.qualite.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "qualite/modal.add.qualite.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["add_forme"]) || array_key_exists("add_forme", $context) ? $context["add_forme"] : (function () { throw new RuntimeError('Variable "add_forme" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
<div class=\"form-group row\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["add_forme"]) || array_key_exists("add_forme", $context) ? $context["add_forme"] : (function () { throw new RuntimeError('Variable "add_forme" does not exist.', 3, $this->source); })()), "nomQualite", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-3 col-form-label"], "label" => "Designation"]);
        // line 5
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["add_forme"]) || array_key_exists("add_forme", $context) ? $context["add_forme"] : (function () { throw new RuntimeError('Variable "add_forme" does not exist.', 7, $this->source); })()), "nomQualite", [], "any", false, false, false, 7), 'widget');
        echo "
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col-sm-9 text-right\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
    </div>
    <div class=\"col-sm-3 text-right\">
        <button type=\"submit\" class=\"btn btn-primary\" id=\"addqualiteto\" >Ajouter</button>
    </div>
</div>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["add_forme"]) || array_key_exists("add_forme", $context) ? $context["add_forme"] : (function () { throw new RuntimeError('Variable "add_forme" does not exist.', 18, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "qualite/modal.add.qualite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 18,  54 => 7,  50 => 5,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(add_forme,{'attr':{'class':'list-filter'}}) }}
<div class=\"form-group row\">
    {{ form_label(add_forme.nomQualite, 'Designation',{
        'label_attr': {'class': 'font-weight-bold col-sm-3 col-form-label'}
    }) }}
    <div class=\"col-sm-9\">
        {{ form_widget(add_forme.nomQualite) }}
    </div>
</div>
<div class=\"form-group row\">
    <div class=\"col-sm-9 text-right\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
    </div>
    <div class=\"col-sm-3 text-right\">
        <button type=\"submit\" class=\"btn btn-primary\" id=\"addqualiteto\" >Ajouter</button>
    </div>
</div>
{{ form_end(add_forme) }}", "qualite/modal.add.qualite.html.twig", "/var/www/templates/qualite/modal.add.qualite.html.twig");
    }
}
