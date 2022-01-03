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

/* secteur_activite/modal.add.activite.html.twig */
class __TwigTemplate_7d9feaf0d5b8b4a6ae65f3e0f586a674544a26c6ab2deb9929dd4c0a16b0d615 extends \Twig\Template
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["add_forme"] ?? null), "secteur", [], "any", false, false, false, 3), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-2 col-form-label"], "label" => "Secteur"]);
        // line 5
        echo "
        <div class=\"col-sm-10\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["add_forme"] ?? null), "secteur", [], "any", false, false, false, 7), 'widget');
        echo "
        </div>
    </div>
    <div class=\"form-group row\">
        <div class=\"col-sm-9 text-right\">
            <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
        </div>
        <div class=\"col-sm-3 text-right\">
            <button type=\"submit\" class=\"btn btn-primary\" id=\"addsecteuractiviteto\">Ajouter</button>
        </div>
    </div>
";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["add_forme"] ?? null), 'form_end');
    }

    public function getTemplateName()
    {
        return "secteur_activite/modal.add.activite.html.twig";
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
        return new Source("", "secteur_activite/modal.add.activite.html.twig", "/home/jeremy/Bureau/project/app/templates/secteur_activite/modal.add.activite.html.twig");
    }
}
