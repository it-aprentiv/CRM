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
class __TwigTemplate_d2e9e37f4380798c52ee09cb04baf637a174d25b290061728901c034f155b937 extends \Twig\Template
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
        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["add_forme"] ?? null), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
<div class=\"form-group row\">
    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["add_forme"] ?? null), "nomQualite", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-3 col-form-label"], "label" => "Designation"]);
        // line 5
        echo "
    <div class=\"col-sm-9\">
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["add_forme"] ?? null), "nomQualite", [], "any", false, false, false, 7), 'widget');
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["add_forme"] ?? null), 'form_end');
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
        return array (  62 => 18,  48 => 7,  44 => 5,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "qualite/modal.add.qualite.html.twig", "/var/www/templates/qualite/modal.add.qualite.html.twig");
    }
}
