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

/* commission/suivi_coms.html.twig */
class __TwigTemplate_14f2bfecc652d9edaa53af866be9e271ab04c19a9694b74ba172e2dcbf905c7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commission/suivi_coms.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commission/suivi_coms.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "commission/suivi_coms.html.twig", 1);
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

        echo "Suivi-Commission - CRM Aprentiv v2.0";
        
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Suivi des commission</li>
        </ol>
    </nav>

    ";
        // line 20
        echo "    <div class=\"modal fade no-disabled\" id=\"extract-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"extract-modal-title\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"extract-modal-title\">Extractions</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form class=\"container-fluid\" target=\"_blank\" action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.extract");
        echo "\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossenattaccord-modal\" >Dossier en attente d'accord</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#suiviencaiss-modal\" >Suivi des encaissements</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossfactopca-modal\" >Dossiers facturé OPCO</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dosslocation-modal\" >Gestion des dossiers de location</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossfactclient-modal\" >Dossiers facturé Client</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"button\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#suivicom-modal\" >Gestion et Suivis des comissions </button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#customextract-modal\" ><b>Extraction des dossiers personnalisé</b></button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossprospere-modal\" >Gestion des Dossiers PROSPERE </button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossproform-modal\" >Gestion des Dossiers PROFORM </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal extraction dossier en attente accord -->
    ";
        // line 70
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 70)->display(twig_array_merge($context, ["id" => "dossenattaccord", "titleModal" => "Extraction dossier en attente accord", "status" => [], "displayColumns" =>         // line 75
(isset($context["dossierEnattenteExtractColumns"]) || array_key_exists("dossierEnattenteExtractColumns", $context) ? $context["dossierEnattenteExtractColumns"] : (function () { throw new RuntimeError('Variable "dossierEnattenteExtractColumns" does not exist.', 75, $this->source); })()), "typeExtract" => twig_constant("DOSSIER_EN_ATTENTE_ACCORD",         // line 76
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 76, $this->source); })()))]));
        // line 79
        echo "    <!-- fin Modal extraction dossier en attente accord  -->

    <!-- Modal extraction suivi encaissement -->
    ";
        // line 82
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 82)->display(twig_array_merge($context, ["id" => "suiviencaiss", "titleModal" => "Extraction suivi des encaissements", "status" => [], "displayColumns" =>         // line 87
(isset($context["suiviencaissExtractColumns"]) || array_key_exists("suiviencaissExtractColumns", $context) ? $context["suiviencaissExtractColumns"] : (function () { throw new RuntimeError('Variable "suiviencaissExtractColumns" does not exist.', 87, $this->source); })()), "typeExtract" => twig_constant("SUIVI_ENCAISSEMENT",         // line 88
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 88, $this->source); })()))]));
        // line 91
        echo "    <!-- fin Modal extraction suivi encaissement  -->

    <!-- Modal extraction dossier facturé opca -->
    ";
        // line 94
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 94)->display(twig_array_merge($context, ["id" => "dossfactopca", "titleModal" => "Extraction dossiers facturé OPCO", "status" => [], "displayColumns" =>         // line 99
(isset($context["dossFactOpcaExtractColumns"]) || array_key_exists("dossFactOpcaExtractColumns", $context) ? $context["dossFactOpcaExtractColumns"] : (function () { throw new RuntimeError('Variable "dossFactOpcaExtractColumns" does not exist.', 99, $this->source); })()), "typeExtract" => twig_constant("DOSSIER_FACT_OPCA",         // line 100
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 100, $this->source); })()))]));
        // line 103
        echo "    <!-- fin Modal extraction dossier facturé opca  -->

    <!-- Modal extraction dossier facturé client -->
    ";
        // line 106
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 106)->display(twig_array_merge($context, ["id" => "dossfactclient", "titleModal" => "Extraction dossiers facturés Client", "status" => [], "displayColumns" =>         // line 111
(isset($context["dossFactClientExtractColumns"]) || array_key_exists("dossFactClientExtractColumns", $context) ? $context["dossFactClientExtractColumns"] : (function () { throw new RuntimeError('Variable "dossFactClientExtractColumns" does not exist.', 111, $this->source); })()), "typeExtract" => twig_constant("DOSSIER_FACT_CLIENT",         // line 112
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 112, $this->source); })()))]));
        // line 115
        echo "    <!-- fin Modal extraction dossier facturé client  -->

    <!-- Modal extraction dossier location -->
    ";
        // line 118
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 118)->display(twig_array_merge($context, ["id" => "dosslocation", "titleModal" => "Extraction gestion des dossiers de location", "status" => [], "displayColumns" =>         // line 123
(isset($context["gestionlocExtractColumns"]) || array_key_exists("gestionlocExtractColumns", $context) ? $context["gestionlocExtractColumns"] : (function () { throw new RuntimeError('Variable "gestionlocExtractColumns" does not exist.', 123, $this->source); })()), "typeExtract" => twig_constant("GESTION_DOSSIER_LOC",         // line 124
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 124, $this->source); })()))]));
        // line 127
        echo "    <!-- fin Modal extraction dossier location  -->

    <!-- Modal extraction dossier prospère -->
    ";
        // line 130
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 130)->display(twig_array_merge($context, ["id" => "dossprospere", "titleModal" => "Extraction gestion des dossiers PROSPERE", "status" => [], "displayColumns" =>         // line 135
(isset($context["dossprospereExtractColumns"]) || array_key_exists("dossprospereExtractColumns", $context) ? $context["dossprospereExtractColumns"] : (function () { throw new RuntimeError('Variable "dossprospereExtractColumns" does not exist.', 135, $this->source); })()), "typeExtract" => twig_constant("GESTION_DOSSIER_PROS",         // line 136
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 136, $this->source); })()))]));
        // line 139
        echo "    <!-- fin Modal extraction dossier prospère  -->

    <!-- Modal extraction dossier proform -->
    ";
        // line 142
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 142)->display(twig_array_merge($context, ["id" => "dossproform", "titleModal" => "Extraction gestion des dossiers PROFORM", "status" => [], "displayColumns" =>         // line 147
(isset($context["dossproformExtractColumns"]) || array_key_exists("dossproformExtractColumns", $context) ? $context["dossproformExtractColumns"] : (function () { throw new RuntimeError('Variable "dossproformExtractColumns" does not exist.', 147, $this->source); })()), "typeExtract" => twig_constant("GESTION_DOSSIER_PROFORM",         // line 148
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 148, $this->source); })()))]));
        // line 151
        echo "    <!-- fin Modal extraction dossier proform  -->

    <!-- Modal extraction suivi commissions -->
    ";
        // line 154
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 154)->display(twig_array_merge($context, ["id" => "suivicom", "titleModal" => "Extraction gestion des dossiers et suivis des commissions", "datePaiement" => true, "status" =>         // line 159
(isset($context["comStatuts"]) || array_key_exists("comStatuts", $context) ? $context["comStatuts"] : (function () { throw new RuntimeError('Variable "comStatuts" does not exist.', 159, $this->source); })()), "displayColumns" =>         // line 160
(isset($context["suivicomColumns"]) || array_key_exists("suivicomColumns", $context) ? $context["suivicomColumns"] : (function () { throw new RuntimeError('Variable "suivicomColumns" does not exist.', 160, $this->source); })()), "typeExtract" => twig_constant("GESTION_SUIVI_COM",         // line 161
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 161, $this->source); })())), "allCommercials" =>         // line 162
(isset($context["commercials"]) || array_key_exists("commercials", $context) ? $context["commercials"] : (function () { throw new RuntimeError('Variable "commercials" does not exist.', 162, $this->source); })())]));
        // line 165
        echo "    <!-- fin Modal extraction suivi commissions -->

    <!-- Modal extraction personnalité -->
    ";
        // line 168
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "commission/suivi_coms.html.twig", 168)->display(twig_array_merge($context, ["id" => "customextract", "titleModal" => "Extraction des dossiers personnalisés", "anneeDebutFin" => true, "status" =>         // line 173
(isset($context["dossierStatut"]) || array_key_exists("dossierStatut", $context) ? $context["dossierStatut"] : (function () { throw new RuntimeError('Variable "dossierStatut" does not exist.', 173, $this->source); })()), "displayColumns" =>         // line 174
(isset($context["customextractColumns"]) || array_key_exists("customextractColumns", $context) ? $context["customextractColumns"] : (function () { throw new RuntimeError('Variable "customextractColumns" does not exist.', 174, $this->source); })()), "typeExtract" => twig_constant("EXTRACTION_PERSONNALISE",         // line 175
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 175, $this->source); })()))]));
        // line 178
        echo "    ";
        // line 179
        echo "            
            
            
    <h2 class=\"text-center mt-2 text-primary\">SUIVI DES COMMISSIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 186
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 186, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 189, $this->source); })()), "clientID", [], "any", false, false, false, 189), 'widget', ["attr" => ["placeholder" => "Client", "class" => "w-100"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                <p>";
        // line 192
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 192, $this->source); })()), "refDossier", [], "any", false, false, false, 192), 'widget', ["attr" => ["placeholder" => "Reference Dossier", "class" => "w-100"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 196
        echo "                <p>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 196, $this->source); })()), "montantAccorde", [], "any", false, false, false, 196), 'widget', ["attr" => ["placeholder" => "Montant accordé", "class" => "w-100"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 200
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 200, $this->source); })()), "montantCom", [], "any", false, false, false, 200), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Montant de la commission"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 204
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 204, $this->source); })()), "montantDemande", [], "any", false, false, false, 204), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Montant demandé"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 208
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 208, $this->source); })()), "montantFacture", [], "any", false, false, false, 208), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Montant Facture"]]);
        echo "
            </div>
        </div>
        <div class=\"form-row clearfix\">
            <div class=\"col-md-2\">
                ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 213, $this->source); })()), "montantEncaisse", [], "any", false, false, false, 213), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Montant en Caisse"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 217
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 217, $this->source); })()), "dateSign", [], "any", false, false, false, 217), 'widget', ["attr" => ["placeholder" => "Date de signature"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 221
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 221, $this->source); })()), "tauxComm", [], "any", false, false, false, 221), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Taux de commission"]]);
        echo "
            </div>
             ";
        // line 223
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_DIRECTION"))) {
            // line 224
            echo "                 ";
            echo " 
                <div class=\"col-md-2\">
                    ";
            // line 227
            echo "                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 227, $this->source); })()), "cial", [], "any", false, false, false, 227), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Commercial"]]);
            echo "
                </div>
            ";
        }
        // line 230
        echo "            
           
            <div class=\"col-md-2\">
                ";
        // line 234
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 234, $this->source); })()), "statutCom", [], "any", false, false, false, 234), 'widget', ["attr" => ["class" => "w-100"]]);
        echo "
            </div>

            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Suivi_Commissions_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 242
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_filter"]) || array_key_exists("form_filter", $context) ? $context["form_filter"] : (function () { throw new RuntimeError('Variable "form_filter" does not exist.', 242, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Ref_DOSSIER</th>
                <th>Client</th>
                <th> Date signature</th>
                <th>Montant demandé</th>
                <th>Montant accordé</th>
                <th>Montant HT Facture</th>
                <th>Montant Encaisse TTC</th>
                <th>Taux de commission</th>
                <th>Montant de la commission</th>
                <th>Commercial</th>
                <th>Statut_comm</th>
                <th>Date paiement_comm</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 264, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commission"]) {
            // line 265
            echo "                <tr>
                    <td>
                        ";
            // line 267
            if (twig_get_attribute($this->env, $this->source, $context["commission"], "form_dossier_id", [], "any", false, false, false, 267)) {
                // line 268
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["commission"], "form_dossier_id", [], "any", false, false, false, 268)]), "html", null, true);
                echo "\" target=\"_blank\">
                                ";
                // line 269
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "num_intern", [], "any", false, false, false, 269), "html", null, true);
                echo "
                            </a>
                        ";
            }
            // line 272
            echo "                    </td>
                    <td>";
            // line 273
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "nomclient", [], "any", false, false, false, 273), "html", null, true);
            echo "</td>
                    <td>";
            // line 274
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "datesign", [], "any", false, false, false, 274), "m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 275
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "mntsigne", [], "any", false, false, false, 275), 2, ",", " "), "html", null, true);
            echo "</td>
                    <td>";
            // line 276
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "mntaccorde", [], "any", false, false, false, 276), 2, ",", " "), "html", null, true);
            echo "</td>
                    <td>";
            // line 277
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "mntfacture", [], "any", false, false, false, 277), 2, ",", " "), "html", null, true);
            echo "</td>
                    <td>";
            // line 278
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "mntTtc", [], "any", false, false, false, 278), 2, ",", " "), "html", null, true);
            echo "</td>
                    <td>";
            // line 279
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "tauxCom", [], "any", false, false, false, 279), "html", null, true);
            echo "</td>
                    <td>";
            // line 280
            (((twig_get_attribute($this->env, $this->source, $context["commission"], "tauxCom", [], "any", false, false, false, 280) > 0)) ? (print (twig_escape_filter($this->env, twig_number_format_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["commission"], "mntfacture", [], "any", false, false, false, 280) * twig_get_attribute($this->env, $this->source, $context["commission"], "tauxCom", [], "any", false, false, false, 280)) / 100), 2, ",", " "), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "com", [], "any", false, false, false, 281), "html", null, true);
            echo "</td>
                    <td>";
            // line 282
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "statut", [], "any", false, false, false, 282), "html", null, true);
            echo "</td>
                    <td>";
            // line 283
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commission"], "dateReelleEncaiss", [], "any", false, false, false, 283), "m-Y"), "html", null, true);
            echo " ";
            echo "</td>
                    <td>
                        <a href=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Suivi_Commissions_Detail", ["id" => twig_get_attribute($this->env, $this->source, $context["commission"], "id", [], "any", false, false, false, 285)]), "html", null, true);
            echo "\"
                           class=\"action-com\" data-formtitle=\"Detail de la commission\" data-mod=\"#gen\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Suivi_Commissions_Supprimer", ["id" => twig_get_attribute($this->env, $this->source, $context["commission"], "id", [], "any", false, false, false, 289)]), "html", null, true);
            echo "\"
                           class=\"action-com\" data-formtitle=\"Supprimer la commission\" data-mod=\"#gen\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "        </tbody>

        <tfoot>
            <tr>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 301
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 301, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 301), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 304
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 304, $this->source); })()));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>
                
    <div class=\"d-flex justify-content-center my-4 no-disabled\">
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#extract-modal\"><b>Extractions</b></button>
    </div>
                
    ";
        // line 314
        $this->loadTemplate("partial/modal.html.twig", "commission/suivi_coms.html.twig", 314)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 317
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 318
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <script type=\"text/javascript\">
        /**
         * Action pour les boutton avec modal
         */
        \$(document).on('click', '.action-com', function (e) {
            e.preventDefault();
            var titre = \$(this).attr('data-formTitle');
            var modal = \$(this).attr('data-mod');
            \$(modal + \"_modal_title\").html(titre);
            \$(modal + \"_modal_save\").hide();
            \$(modal + \"_modal_discard\").hide();
            \$(modal + \"_modal\").modal(\"show\");
            chargement({selecteur: modal + \"_modal_body\"});
            \$(modal + '_modal').modal('show');
            var url = \$(this).attr(\"href\");
            var texte = null;
            \$.get(url, function (data) {
                texte = data;
            }).done(function () {
                \$(modal + \"_modal_save\").show();
                \$(modal + \"_modal_discard\").show();
                \$(modal + \"_modal_body\").html(texte);
            });
        });

        /**
         * Action quand on valide un formulaire venant du modal general
         */
        \$(document).on('click', '#gen_modal_save', function () {
            var form = \$('#gen_modal_body').find('form');
            /*console.log(cible);*/

            var url = form.attr('action');
            var dataForm = form.serializeArray();

            chargement({selecteur: '#gen_modal_body'});

            \$.ajax({
                url: url,
                type: 'POST',
                data: dataForm,
                dataType: 'json', // tell jQuery not to process the data
                success: function (data) {
                    \$('#gen_modal_save').show();
                    \$('#gen_modal_discard').show();
                    if (typeof data === 'string') {
                        \$('#gen_modal_body').html(data);
                    } else {
                        \$('#gen_modal').modal('hide');
                        \$('.modal').modal('hide');
                        if (data.success) {
                            location.reload(true);
                        }
                    }
                }
            });
        });

        \$(\".js-datepicker\").each(function () {
            \$(this).datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'clearBtn': true,
                'language': 'fr',
            });
        });
    </script>

    ";
        // line 392
        echo "    ";
        $this->loadTemplate("dossier/part/custom-extract-js.html.twig", "commission/suivi_coms.html.twig", 392)->display($context);
        // line 393
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "commission/suivi_coms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 393,  611 => 392,  534 => 318,  524 => 317,  514 => 314,  501 => 304,  495 => 301,  488 => 296,  475 => 289,  468 => 285,  462 => 283,  458 => 282,  454 => 281,  450 => 280,  446 => 279,  442 => 278,  438 => 277,  434 => 276,  430 => 275,  426 => 274,  422 => 273,  419 => 272,  413 => 269,  408 => 268,  406 => 267,  402 => 265,  398 => 264,  373 => 242,  367 => 239,  358 => 234,  353 => 230,  346 => 227,  341 => 224,  339 => 223,  333 => 221,  326 => 217,  320 => 213,  311 => 208,  304 => 204,  297 => 200,  290 => 196,  284 => 192,  278 => 189,  272 => 186,  263 => 179,  261 => 178,  259 => 175,  258 => 174,  257 => 173,  256 => 168,  251 => 165,  249 => 162,  248 => 161,  247 => 160,  246 => 159,  245 => 154,  240 => 151,  238 => 148,  237 => 147,  236 => 142,  231 => 139,  229 => 136,  228 => 135,  227 => 130,  222 => 127,  220 => 124,  219 => 123,  218 => 118,  213 => 115,  211 => 112,  210 => 111,  209 => 106,  204 => 103,  202 => 100,  201 => 99,  200 => 94,  195 => 91,  193 => 88,  192 => 87,  191 => 82,  186 => 79,  184 => 76,  183 => 75,  182 => 70,  139 => 30,  127 => 20,  119 => 14,  115 => 12,  105 => 11,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Suivi-Commission - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Suivi des commission</li>
        </ol>
    </nav>

    {#<!-- APR-217 : Duplication bouton extraction : @TODO code à factoriser  -->#}
    <div class=\"modal fade no-disabled\" id=\"extract-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"extract-modal-title\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"extract-modal-title\">Extractions</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <form class=\"container-fluid\" target=\"_blank\" action=\"{{ path('crm.dossier.extract') }}\" method=\"post\">
                        <div class=\"row\">
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossenattaccord-modal\" >Dossier en attente d'accord</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#suiviencaiss-modal\" >Suivi des encaissements</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossfactopca-modal\" >Dossiers facturé OPCO</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dosslocation-modal\" >Gestion des dossiers de location</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossfactclient-modal\" >Dossiers facturé Client</button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"button\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#suivicom-modal\" >Gestion et Suivis des comissions </button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#customextract-modal\" ><b>Extraction des dossiers personnalisé</b></button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossprospere-modal\" >Gestion des Dossiers PROSPERE </button>
                            </div>
                            <div class=\"col-md-6 my-2\">
                                <button type=\"submit\" name=\"filtreextract\" class=\"btn btn-primary w-100\" data-toggle=\"modal\" data-dismiss=\"modal\" data-target=\"#dossproform-modal\" >Gestion des Dossiers PROFORM </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal extraction dossier en attente accord -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'dossenattaccord',
            titleModal: 'Extraction dossier en attente accord',
            status: {},
            displayColumns: dossierEnattenteExtractColumns,
            typeExtract: constant('DOSSIER_EN_ATTENTE_ACCORD', extractConst),
        }
    %}
    <!-- fin Modal extraction dossier en attente accord  -->

    <!-- Modal extraction suivi encaissement -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'suiviencaiss',
            titleModal: 'Extraction suivi des encaissements',
            status: {},
            displayColumns: suiviencaissExtractColumns,
            typeExtract: constant('SUIVI_ENCAISSEMENT', extractConst),
        }
    %}
    <!-- fin Modal extraction suivi encaissement  -->

    <!-- Modal extraction dossier facturé opca -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'dossfactopca',
            titleModal: 'Extraction dossiers facturé OPCO',
            status: {},
            displayColumns: dossFactOpcaExtractColumns,
            typeExtract: constant('DOSSIER_FACT_OPCA', extractConst),
        }
    %}
    <!-- fin Modal extraction dossier facturé opca  -->

    <!-- Modal extraction dossier facturé client -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'dossfactclient',
            titleModal: 'Extraction dossiers facturés Client',
            status: {},
            displayColumns: dossFactClientExtractColumns,
            typeExtract: constant('DOSSIER_FACT_CLIENT', extractConst),
        }
    %}
    <!-- fin Modal extraction dossier facturé client  -->

    <!-- Modal extraction dossier location -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'dosslocation',
            titleModal: 'Extraction gestion des dossiers de location',
            status: {},
            displayColumns: gestionlocExtractColumns,
            typeExtract: constant('GESTION_DOSSIER_LOC', extractConst),
        }
    %}
    <!-- fin Modal extraction dossier location  -->

    <!-- Modal extraction dossier prospère -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'dossprospere',
            titleModal: 'Extraction gestion des dossiers PROSPERE',
            status: {},
            displayColumns: dossprospereExtractColumns,
            typeExtract: constant('GESTION_DOSSIER_PROS', extractConst),
        }
    %}
    <!-- fin Modal extraction dossier prospère  -->

    <!-- Modal extraction dossier proform -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'dossproform',
            titleModal: 'Extraction gestion des dossiers PROFORM',
            status: {},
            displayColumns: dossproformExtractColumns,
            typeExtract: constant('GESTION_DOSSIER_PROFORM', extractConst),
        }
    %}
    <!-- fin Modal extraction dossier proform  -->

    <!-- Modal extraction suivi commissions -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'suivicom',
            titleModal: 'Extraction gestion des dossiers et suivis des commissions',
            datePaiement: true,
            status: comStatuts,
            displayColumns: suivicomColumns,
            typeExtract: constant('GESTION_SUIVI_COM', extractConst),
            allCommercials: commercials
        }
    %}
    <!-- fin Modal extraction suivi commissions -->

    <!-- Modal extraction personnalité -->
    {% include 'dossier/part/custom-extract-modal.html.twig' with
        {
            id: 'customextract',
            titleModal: 'Extraction des dossiers personnalisés',
            anneeDebutFin: true,
            status: dossierStatut,
            displayColumns: customextractColumns,
            typeExtract: constant('EXTRACTION_PERSONNALISE', extractConst)
        }
    %}
    {#<!-- Fin Modal extraction personnalité -->#}
            
            
            
    <h2 class=\"text-center mt-2 text-primary\">SUIVI DES COMMISSIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(form_filter,{'attr' : {'class':'list-filter'}}) }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {{ form_widget(form_filter.clientID, { attr: {'placeholder' : 'Client',  'class' : 'w-100'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(form_filter.refDossier, { attr: {'placeholder' : 'Reference Dossier',  'class' : 'w-100'} }) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.societe) }}#}
                <p>{{ form_widget(form_filter.montantAccorde, { attr : {'placeholder' : 'Montant accordé',  'class' : 'w-100' } } ) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.nom) }}#}
                {{ form_widget(form_filter.montantCom, { attr: {'class' : 'w-100', placeholder : 'Montant de la commission'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.prenom) }}#}
                {{ form_widget(form_filter.montantDemande, { attr: {'class' : 'w-100', placeholder : 'Montant demandé'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(form_filter.adresse) }}#}
                {{ form_widget(form_filter.montantFacture, { attr: {'class' : 'w-100', placeholder : 'Montant Facture'} } ) }}
            </div>
        </div>
        <div class=\"form-row clearfix\">
            <div class=\"col-md-2\">
                {{ form_widget(form_filter.montantEncaisse, { attr: { 'class' : 'w-100', placeholder : 'Montant en Caisse'} } ) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(form_filter.codePostal) }}#}
                {{ form_widget(form_filter.dateSign, { attr: { placeholder: 'Date de signature'} } ) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(form_filter.telephone) }}#}
                {{ form_widget(form_filter.tauxComm, { attr: { 'class' : 'w-100', placeholder : 'Taux de commission'} } ) }}
            </div>
             {% if is_granted('ROLE_ADMIN') or is_granted('ROLE_DIRECTION')  %}
                 {# APR-168 : Filtre #} 
                <div class=\"col-md-2\">
                    {#{{ form_label(form_filter.opca) }}#}
                    {{ form_widget(form_filter.cial, { attr: { 'class' : 'w-100', placeholder : 'Commercial'} }) }}
                </div>
            {% endif %}
            
           
            <div class=\"col-md-2\">
                {#{{ form_label(form_filter.commercial) }}#}
                {{ form_widget(form_filter.statutCom, { attr: { 'class' : 'w-100'} }) }}
            </div>

            <div class=\"col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Suivi_Commissions_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(form_filter, { render_rest : false } ) }}
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Ref_DOSSIER</th>
                <th>Client</th>
                <th> Date signature</th>
                <th>Montant demandé</th>
                <th>Montant accordé</th>
                <th>Montant HT Facture</th>
                <th>Montant Encaisse TTC</th>
                <th>Taux de commission</th>
                <th>Montant de la commission</th>
                <th>Commercial</th>
                <th>Statut_comm</th>
                <th>Date paiement_comm</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for commission in pagination %}
                <tr>
                    <td>
                        {% if commission.form_dossier_id %}
                            <a href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', {id : commission.form_dossier_id}) }}\" target=\"_blank\">
                                {{ commission.num_intern }}
                            </a>
                        {% endif %}
                    </td>
                    <td>{{ commission.nomclient }}</td>
                    <td>{{ commission.datesign|date('m-Y') }}</td>
                    <td>{{ commission.mntsigne|number_format(2, ',', ' ') }}</td>
                    <td>{{ commission.mntaccorde|number_format(2, ',', ' ') }}</td>
                    <td>{{ commission.mntfacture|number_format(2, ',', ' ') }}</td>
                    <td>{{ commission.mntTtc|number_format(2, ',', ' ') }}</td>
                    <td>{{ commission.tauxCom }}</td>
                    <td>{{ commission.tauxCom > 0 ? (commission.mntfacture * commission.tauxCom / 100) |number_format(2, ',', ' ') : '' }}</td>
                    <td>{{ commission.com }}</td>
                    <td>{{ commission.statut }}</td>
                    <td>{{ commission.dateReelleEncaiss |date('m-Y') }} {# Uniformisation avec V1 : date paiement comm = mois de date Reelle Encaissement #}</td>
                    <td>
                        <a href=\"{{ path('Suivi_Commissions_Detail', {'id': commission.id}) }}\"
                           class=\"action-com\" data-formtitle=\"Detail de la commission\" data-mod=\"#gen\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a href=\"{{ path('Suivi_Commissions_Supprimer',  {'id': commission.id}) }}\"
                           class=\"action-com\" data-formtitle=\"Supprimer la commission\" data-mod=\"#gen\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>

        <tfoot>
            <tr>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> {{ pagination.getTotalItemCount }}
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    {{ knp_pagination_render(pagination) }}
                </td>
            </tr>
        </tfoot>
    </table>
                
    <div class=\"d-flex justify-content-center my-4 no-disabled\">
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#extract-modal\"><b>Extractions</b></button>
    </div>
                
    {% include 'partial/modal.html.twig' %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <script type=\"text/javascript\">
        /**
         * Action pour les boutton avec modal
         */
        \$(document).on('click', '.action-com', function (e) {
            e.preventDefault();
            var titre = \$(this).attr('data-formTitle');
            var modal = \$(this).attr('data-mod');
            \$(modal + \"_modal_title\").html(titre);
            \$(modal + \"_modal_save\").hide();
            \$(modal + \"_modal_discard\").hide();
            \$(modal + \"_modal\").modal(\"show\");
            chargement({selecteur: modal + \"_modal_body\"});
            \$(modal + '_modal').modal('show');
            var url = \$(this).attr(\"href\");
            var texte = null;
            \$.get(url, function (data) {
                texte = data;
            }).done(function () {
                \$(modal + \"_modal_save\").show();
                \$(modal + \"_modal_discard\").show();
                \$(modal + \"_modal_body\").html(texte);
            });
        });

        /**
         * Action quand on valide un formulaire venant du modal general
         */
        \$(document).on('click', '#gen_modal_save', function () {
            var form = \$('#gen_modal_body').find('form');
            /*console.log(cible);*/

            var url = form.attr('action');
            var dataForm = form.serializeArray();

            chargement({selecteur: '#gen_modal_body'});

            \$.ajax({
                url: url,
                type: 'POST',
                data: dataForm,
                dataType: 'json', // tell jQuery not to process the data
                success: function (data) {
                    \$('#gen_modal_save').show();
                    \$('#gen_modal_discard').show();
                    if (typeof data === 'string') {
                        \$('#gen_modal_body').html(data);
                    } else {
                        \$('#gen_modal').modal('hide');
                        \$('.modal').modal('hide');
                        if (data.success) {
                            location.reload(true);
                        }
                    }
                }
            });
        });

        \$(\".js-datepicker\").each(function () {
            \$(this).datepicker({
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'clearBtn': true,
                'language': 'fr',
            });
        });
    </script>

    {# Debut APR-217 : Duplication du bouton : Extraction  #}
    {% include 'dossier/part/custom-extract-js.html.twig' %}
    {# Fin APR-217 : Duplication du bouton : Extraction   #}
{% endblock %}", "commission/suivi_coms.html.twig", "/home/jeremy/Bureau/project/app/templates/commission/suivi_coms.html.twig");
    }
}
