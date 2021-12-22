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

/* partial/modal.html.twig */
class __TwigTemplate_05b061d7c1d978e865448771a437cf0fa327171a20876507c8701d92f06b23f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/modal.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partial/modal.html.twig"));

        // line 1
        echo "
<div class=\"modal fade\" id=\"gen_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-scrollable\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">

                ";
        // line 9
        echo "                <h4 class=\"modal-title\" id=\"gen_modal_title\">Modal title</h4>

            </div>

            <div class=\"modal-body\" id=\"gen_modal_body\">

            </div>

            <div class=\"modal-footer text-center list-filter no-disabled\">
                <button type=\"button\" class=\"btn btn-danger\" id=\"gen_modal_discard\" data-dismiss=\"modal\">
                    <span class=\"fa fa-window-close\"></span>&nbsp;&nbsp;Annuler
                </button>
                <button type=\"button\" id=\"gen_modal_save\" class=\"btn btn-primary\">
                    <span class=\"fa fa-check\"></span>&nbsp;&nbsp;Valider
                </button>

            </div>

        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partial/modal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"modal fade\" id=\"gen_modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-scrollable\" role=\"document\">
        <div class=\"modal-content\">

            <div class=\"modal-header\">

                {#<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>#}
                <h4 class=\"modal-title\" id=\"gen_modal_title\">Modal title</h4>

            </div>

            <div class=\"modal-body\" id=\"gen_modal_body\">

            </div>

            <div class=\"modal-footer text-center list-filter no-disabled\">
                <button type=\"button\" class=\"btn btn-danger\" id=\"gen_modal_discard\" data-dismiss=\"modal\">
                    <span class=\"fa fa-window-close\"></span>&nbsp;&nbsp;Annuler
                </button>
                <button type=\"button\" id=\"gen_modal_save\" class=\"btn btn-primary\">
                    <span class=\"fa fa-check\"></span>&nbsp;&nbsp;Valider
                </button>

            </div>

        </div>
    </div>
</div>", "partial/modal.html.twig", "/home/jeremy/Bureau/project/app/templates/partial/modal.html.twig");
    }
}
