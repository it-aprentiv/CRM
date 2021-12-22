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

/* domiciliationlocation/part/ajout-type.html.twig */
class __TwigTemplate_8c06625c20e9dac4957ab8e4dcda8c9f03f0a3d9125b5143e5620450615fb3d9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/part/ajout-type.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/part/ajout-type.html.twig"));

        // line 1
        echo "<div id=\"modalType\" class=\"modal fade list-filter\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Ajout Type</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body row\" id=\"modalbody\">
                <div class=\"col-sm-5\" style=\"text-align: right\">
                    <label for=\"ajout_type_libelle\"><b>Designation </b> &nbsp;</label>:
                </div>
                <div class=\"col-sm-7\">
                    <input type=\"text\" class=\"form-control\" name=\"ajout_type_libelle\" id=\"ajout_type_libelle\">
                </div>
            </div>  <!-- //fin modal body -->
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"ajout_type_close_btn\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"ajout_type_btn\" select-tag-id=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["typeId"]) || array_key_exists("typeId", $context) ? $context["typeId"] : (function () { throw new RuntimeError('Variable "typeId" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\"><b> Ajouter</b></button>
            </div>
        </div>

    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "domiciliationlocation/part/ajout-type.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 22,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"modalType\" class=\"modal fade list-filter\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h4 class=\"modal-title\">Ajout Type</h4>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body row\" id=\"modalbody\">
                <div class=\"col-sm-5\" style=\"text-align: right\">
                    <label for=\"ajout_type_libelle\"><b>Designation </b> &nbsp;</label>:
                </div>
                <div class=\"col-sm-7\">
                    <input type=\"text\" class=\"form-control\" name=\"ajout_type_libelle\" id=\"ajout_type_libelle\">
                </div>
            </div>  <!-- //fin modal body -->
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"ajout_type_close_btn\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\" id=\"ajout_type_btn\" select-tag-id=\"{{ typeId }}\"><b> Ajouter</b></button>
            </div>
        </div>

    </div>
</div>", "domiciliationlocation/part/ajout-type.html.twig", "/home/jeremy/Bureau/project/app/templates/domiciliationlocation/part/ajout-type.html.twig");
    }
}
