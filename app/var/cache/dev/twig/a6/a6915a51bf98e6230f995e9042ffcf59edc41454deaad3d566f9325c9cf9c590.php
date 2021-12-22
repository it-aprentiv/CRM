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

/* dossier/index.html.twig */
class __TwigTemplate_2974315ea916864a5b096e7116f7c009610acb1d401c5c8c583926cd4d85ac0e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/index.html.twig", 1);
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

        echo "Dossiers- CRM Aprentiv v2.0";
        
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
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/dossier.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des dossiers ";
        // line 16
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", [0 => "client"], "method", false, false, false, 16))) ? (print (twig_escape_filter($this->env, ("de " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "query", [], "any", false, false, false, 16), "get", [0 => "client"], "method", false, false, false, 16)), "html", null, true))) : (print ("")));
        echo "</li>
        </ol>
    </nav>

    <!-- Modal extraction -->
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
                    <form class=\"container-fluid\" target=\"_blank\" action=\"";
        // line 31
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
        // line 71
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 71)->display(twig_array_merge($context, ["id" => "dossenattaccord", "titleModal" => "Extraction dossier en attente accord", "status" => [], "displayColumns" =>         // line 76
(isset($context["dossierEnattenteExtractColumns"]) || array_key_exists("dossierEnattenteExtractColumns", $context) ? $context["dossierEnattenteExtractColumns"] : (function () { throw new RuntimeError('Variable "dossierEnattenteExtractColumns" does not exist.', 76, $this->source); })()), "typeExtract" => twig_constant("DOSSIER_EN_ATTENTE_ACCORD",         // line 77
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 77, $this->source); })()))]));
        // line 80
        echo "    <!-- fin Modal extraction dossier en attente accord  -->

    <!-- Modal extraction suivi encaissement -->
    ";
        // line 83
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 83)->display(twig_array_merge($context, ["id" => "suiviencaiss", "titleModal" => "Extraction suivi des encaissements", "status" => [], "displayColumns" =>         // line 88
(isset($context["suiviencaissExtractColumns"]) || array_key_exists("suiviencaissExtractColumns", $context) ? $context["suiviencaissExtractColumns"] : (function () { throw new RuntimeError('Variable "suiviencaissExtractColumns" does not exist.', 88, $this->source); })()), "typeExtract" => twig_constant("SUIVI_ENCAISSEMENT",         // line 89
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 89, $this->source); })()))]));
        // line 92
        echo "    <!-- fin Modal extraction suivi encaissement  -->

    <!-- Modal extraction dossier facturé opca -->
    ";
        // line 95
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 95)->display(twig_array_merge($context, ["id" => "dossfactopca", "titleModal" => "Extraction dossiers facturé OPCO", "status" => [], "displayColumns" =>         // line 100
(isset($context["dossFactOpcaExtractColumns"]) || array_key_exists("dossFactOpcaExtractColumns", $context) ? $context["dossFactOpcaExtractColumns"] : (function () { throw new RuntimeError('Variable "dossFactOpcaExtractColumns" does not exist.', 100, $this->source); })()), "typeExtract" => twig_constant("DOSSIER_FACT_OPCA",         // line 101
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 101, $this->source); })()))]));
        // line 104
        echo "    <!-- fin Modal extraction dossier facturé opca  -->

    <!-- Modal extraction dossier facturé client -->
    ";
        // line 107
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 107)->display(twig_array_merge($context, ["id" => "dossfactclient", "titleModal" => "Extraction dossiers facturés Client", "status" => [], "displayColumns" =>         // line 112
(isset($context["dossFactClientExtractColumns"]) || array_key_exists("dossFactClientExtractColumns", $context) ? $context["dossFactClientExtractColumns"] : (function () { throw new RuntimeError('Variable "dossFactClientExtractColumns" does not exist.', 112, $this->source); })()), "typeExtract" => twig_constant("DOSSIER_FACT_CLIENT",         // line 113
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 113, $this->source); })()))]));
        // line 116
        echo "    <!-- fin Modal extraction dossier facturé client  -->

    <!-- Modal extraction dossier location -->
    ";
        // line 119
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 119)->display(twig_array_merge($context, ["id" => "dosslocation", "titleModal" => "Extraction gestion des dossiers de location", "status" => [], "displayColumns" =>         // line 124
(isset($context["gestionlocExtractColumns"]) || array_key_exists("gestionlocExtractColumns", $context) ? $context["gestionlocExtractColumns"] : (function () { throw new RuntimeError('Variable "gestionlocExtractColumns" does not exist.', 124, $this->source); })()), "typeExtract" => twig_constant("GESTION_DOSSIER_LOC",         // line 125
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 125, $this->source); })()))]));
        // line 128
        echo "    <!-- fin Modal extraction dossier location  -->

    <!-- Modal extraction dossier prospère -->
    ";
        // line 131
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 131)->display(twig_array_merge($context, ["id" => "dossprospere", "titleModal" => "Extraction gestion des dossiers PROSPERE", "status" => [], "displayColumns" =>         // line 136
(isset($context["dossprospereExtractColumns"]) || array_key_exists("dossprospereExtractColumns", $context) ? $context["dossprospereExtractColumns"] : (function () { throw new RuntimeError('Variable "dossprospereExtractColumns" does not exist.', 136, $this->source); })()), "typeExtract" => twig_constant("GESTION_DOSSIER_PROS",         // line 137
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 137, $this->source); })()))]));
        // line 140
        echo "    <!-- fin Modal extraction dossier prospère  -->

    <!-- Modal extraction dossier proform -->
    ";
        // line 143
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 143)->display(twig_array_merge($context, ["id" => "dossproform", "titleModal" => "Extraction gestion des dossiers PROFORM", "status" => [], "displayColumns" =>         // line 148
(isset($context["dossproformExtractColumns"]) || array_key_exists("dossproformExtractColumns", $context) ? $context["dossproformExtractColumns"] : (function () { throw new RuntimeError('Variable "dossproformExtractColumns" does not exist.', 148, $this->source); })()), "typeExtract" => twig_constant("GESTION_DOSSIER_PROFORM",         // line 149
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 149, $this->source); })()))]));
        // line 152
        echo "    <!-- fin Modal extraction dossier proform  -->

    <!-- Modal extraction suivi commissions -->
    ";
        // line 155
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 155)->display(twig_array_merge($context, ["id" => "suivicom", "titleModal" => "Extraction gestion des dossiers et suivis des commissions", "datePaiement" => true, "status" =>         // line 160
(isset($context["comStatuts"]) || array_key_exists("comStatuts", $context) ? $context["comStatuts"] : (function () { throw new RuntimeError('Variable "comStatuts" does not exist.', 160, $this->source); })()), "displayColumns" =>         // line 161
(isset($context["suivicomColumns"]) || array_key_exists("suivicomColumns", $context) ? $context["suivicomColumns"] : (function () { throw new RuntimeError('Variable "suivicomColumns" does not exist.', 161, $this->source); })()), "typeExtract" => twig_constant("GESTION_SUIVI_COM",         // line 162
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 162, $this->source); })())), "allCommercials" =>         // line 163
(isset($context["commercials"]) || array_key_exists("commercials", $context) ? $context["commercials"] : (function () { throw new RuntimeError('Variable "commercials" does not exist.', 163, $this->source); })())]));
        // line 166
        echo "    <!-- fin Modal extraction suivi commissions -->

    <!-- Modal extraction personnalité -->
    ";
        // line 169
        $this->loadTemplate("dossier/part/custom-extract-modal.html.twig", "dossier/index.html.twig", 169)->display(twig_array_merge($context, ["id" => "customextract", "titleModal" => "Extraction des dossiers personnalisés", "anneeDebutFin" => true, "status" =>         // line 174
(isset($context["dossierStatut"]) || array_key_exists("dossierStatut", $context) ? $context["dossierStatut"] : (function () { throw new RuntimeError('Variable "dossierStatut" does not exist.', 174, $this->source); })()), "displayColumns" =>         // line 175
(isset($context["customextractColumns"]) || array_key_exists("customextractColumns", $context) ? $context["customextractColumns"] : (function () { throw new RuntimeError('Variable "customextractColumns" does not exist.', 175, $this->source); })()), "typeExtract" => twig_constant("EXTRACTION_PERSONNALISE",         // line 176
(isset($context["extractConst"]) || array_key_exists("extractConst", $context) ? $context["extractConst"] : (function () { throw new RuntimeError('Variable "extractConst" does not exist.', 176, $this->source); })()))]));
        // line 179
        echo "    <!-- Fin Modal extraction personnalité -->

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES DOSSIERS ";
        // line 181
        (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "request", [], "any", false, false, false, 181), "query", [], "any", false, false, false, 181), "get", [0 => "client"], "method", false, false, false, 181))) ? (print (twig_escape_filter($this->env, ("de " . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 181, $this->source); })()), "request", [], "any", false, false, false, 181), "query", [], "any", false, false, false, 181), "get", [0 => "client"], "method", false, false, false, 181)), "html", null, true))) : (print ("")));
        echo "</h2>
    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 184
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 184, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 187, $this->source); })()), "structure", [], "any", false, false, false, 187), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Structure"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                <p>";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 190, $this->source); })()), "moisSignature", [], "any", false, false, false, 190), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Mois de signature"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 194
        echo "                <p>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 194, $this->source); })()), "anneeSignature", [], "any", false, false, false, 194), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Année de signature"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 198
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 198, $this->source); })()), "dateCreation", [], "any", false, false, false, 198), 'widget', ["attr" => ["placeholder" => "Date de création"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 202
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 202, $this->source); })()), "numInterne", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "N° interne"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 206
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 206, $this->source); })()), "client", [], "any", false, false, false, 206), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Client"]]);
        echo "
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 212
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 212, $this->source); })()), "intituleStage", [], "any", false, false, false, 212), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Intitulé du stage"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 216
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 216, $this->source); })()), "dateFinStage", [], "any", false, false, false, 216), 'widget', ["attr" => ["placeholder" => "Date de fin de stage"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 220
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 220, $this->source); })()), "dateEstimeRecep", [], "any", false, false, false, 220), 'widget', ["attr" => ["placeholder" => "Date estimé pour recep accord"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 224
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 224, $this->source); })()), "montantSigne", [], "any", false, false, false, 224), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Montant signé"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 228
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 228, $this->source); })()), "montantAccorde", [], "any", false, false, false, 228), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Montant accordé"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 232
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 232, $this->source); })()), "dateEstimeCloture", [], "any", false, false, false, 232), 'widget', ["attr" => ["placeholder" => "Date estimé pour clôture"]]);
        echo "
            </div>
        </div>
        <br>
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 239
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 239, $this->source); })()), "statusDossier", [], "any", false, false, false, 239), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Status du dossier"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 243
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 243, $this->source); })()), "opca", [], "any", false, false, false, 243), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "OPCO"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 247
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 247, $this->source); })()), "commercial", [], "any", false, false, false, 247), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Commercial"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 251
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 254
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_dossier_filter_form"]) || array_key_exists("formation_dossier_filter_form", $context) ? $context["formation_dossier_filter_form"] : (function () { throw new RuntimeError('Variable "formation_dossier_filter_form" does not exist.', 254, $this->source); })()), 'form_end');
        echo "
    </fieldset>
    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Structure</th>
                <th>Mois de signature</th>
                <th>Année de signature</th>
                <th>Date de création</th>
                <th>N° interne</th>
                <th>Client</th>
                <th>Intitulé du stage</th>
                <th>Date fin stage</th>
                <th>Date estimée pour récépt accord</th>
                <th>Montant signé</th>
                <th>Montant accordé</th>
                <th>Date estimée pour clôture</th>
                <th>Statut</th>
                <th>OPCO</th>
                <th>Commercial</th>
                <th> >Action</th>
            </tr>
        </thead>
        <tbody>
            
            ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 279, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 280
            echo "                <tr data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 280), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 280)]), "html", null, true);
            echo "\">
                    <td>";
            // line 281
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "structure", [], "any", false, false, false, 281), "html", null, true);
            echo "</td>
                    <td>";
            // line 282
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->intMonthToLetter(twig_get_attribute($this->env, $this->source, $context["dossier"], "mois", [], "any", false, false, false, 282)), "html", null, true);
            echo "</td>
                    <td>";
            // line 283
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "annee", [], "any", false, false, false, 283), "html", null, true);
            echo "</td>
                    <td>";
            // line 284
            (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 284), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 284), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 284), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 284), "d-m-Y"), "html", null, true))));
            echo "</td>
                    <td>";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "numInterne", [], "any", false, false, false, 285), "html", null, true);
            echo "</td>
                    <td>";
            // line 286
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "client", [], "any", false, false, false, 286), "html", null, true);
            echo "</td>
                    <td>";
            // line 287
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "intituleStage", [], "any", false, false, false, 287), "html", null, true);
            echo "</td>
                    <td>";
            // line 288
            (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 288), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 288), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 288), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 288), "d-m-Y"), "html", null, true))));
            echo "</td>
                    <td>
                        ";
            // line 290
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 290))) {
                // line 291
                echo "                            ";
                (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 291), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 291), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 291), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 291), "d-m-Y"), "html", null, true))));
                echo "
                        ";
            } else {
                // line 293
                echo "                            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 293), "+3 month"), "d-m-Y"), "html", null, true);
                echo "
                        ";
            }
            // line 295
            echo "                    </td>
                    <td>";
            // line 296
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "montantSigne", [], "any", false, false, false, 296), 2, ",", " "), "html", null, true);
            echo "</td>
                    <td>";
            // line 297
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "montantAccorde", [], "any", false, false, false, 297), 2, ",", " "), "html", null, true);
            echo "</td>
";
            // line 299
            echo "                    ";
            // line 300
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 300), "+6 month"), "d-m-Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 301
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "statut", [], "any", false, false, false, 301), "html", null, true);
            echo "</td>
                    <td>";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "opca", [], "any", false, false, false, 302), "html", null, true);
            echo "</td>
                    <td>";
            // line 303
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "commercial", [], "any", false, false, false, 303), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 305)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a onclick=\"deleteDossier(\$(this))\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 314
        echo "        </tbody>

        <tfoot>
            <tr >
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 319
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 319, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 319), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 322
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 322, $this->source); })()));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>

    <div class=\"d-flex justify-content-center my-4 no-disabled\">
        <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#extract-modal\"><b>Extractions</b></button>
        
        <a href=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/ajoutdossier", ["client" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 331, $this->source); })()), "request", [], "any", false, false, false, 331), "query", [], "any", false, false, false, 331), "get", [0 => "client"], "method", false, false, false, 331)]), "html", null, true);
        echo "\" class=\"ml-3 btn btn-primary\">Créer</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 336
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 337
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script>
                            function deleteDossier(elem)
                            {
                                //get dossier id
                                var dossier_id = elem.closest('tr').attr('data-id');
                                //handle link
                                var deleteLink = '";
        // line 348
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossier_Controller/deleteDossier", ["idDossier" => "dossierId"]);
        echo "';
                                deleteLink = deleteLink.replace('dossierId', dossier_id);
                                // show dialog
                                swal({
                                    title: \"Confirmation!\",
                                    text: \"Voulez vous supprimer ce dossier?\",
                                    icon: \"warning\",
                                    buttons: true,
                                    dangerMode: true,
                                })
                                        .then((willDelete) => {
                                            if (willDelete) {
                                                \$.ajax({
                                                    type: \"GET\",
                                                    url: deleteLink,
                                                })
                                                        .done(function (data) {
                                                            if (data.status == \"Success\") {
                                                                swal(\"Supprimé avec succés!\", {
                                                                    icon: \"success\",
                                                                }).then((ok) => {
                                                                    location.reload();
                                                                });
                                                            } else {
                                                                swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimé!\", \"error\");
                                                            }
                                                        });
                                            }
                                        });
                            }

                            \$(function () {
                                \$('#client').select2({
                                    placeholder: \"-- client --\",
                                    minimumInputLength: 3,
                                    allowClear: true,
                                    ajax: {
                                        url: '";
        // line 385
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.client.asynch-search");
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
        // line 396
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 396, $this->source); })()), "request", [], "any", false, false, false, 396), "query", [], "any", false, false, false, 396), "get", [0 => "client"], "method", false, false, false, 396)) {
            // line 397
            echo "                var data = {
                    id: \"";
            // line 398
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 398, $this->source); })()), "request", [], "any", false, false, false, 398), "query", [], "any", false, false, false, 398), "get", [0 => "client"], "method", false, false, false, 398), "html", null, true);
            echo "\",
                    text: '";
            // line 399
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 399, $this->source); })()), "request", [], "any", false, false, false, 399), "query", [], "any", false, false, false, 399), "get", [0 => "client"], "method", false, false, false, 399), "js"), "html", null, true);
            echo "'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#client').append(newOption).trigger('change');

        ";
        }
        // line 406
        echo "            });

            \$(function () {
                \$('#opca').select2({
                    placeholder: \"-- OPCO --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: '";
        // line 414
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.opca.asynch-search");
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
        // line 425
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 425, $this->source); })()), "request", [], "any", false, false, false, 425), "query", [], "any", false, false, false, 425), "get", [0 => "opca"], "method", false, false, false, 425)) {
            // line 426
            echo "                var data = {
                    id: \"";
            // line 427
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 427, $this->source); })()), "request", [], "any", false, false, false, 427), "query", [], "any", false, false, false, 427), "get", [0 => "opca"], "method", false, false, false, 427), "html", null, true);
            echo "\",
                    text: '";
            // line 428
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 428, $this->source); })()), "request", [], "any", false, false, false, 428), "query", [], "any", false, false, false, 428), "get", [0 => "opca"], "method", false, false, false, 428), "js"), "html", null, true);
            echo "'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#opca').append(newOption).trigger('change');

        ";
        }
        // line 435
        echo "            });
            //filre commercial
            \$(function () {
                \$('#commercial').select2({
                    placeholder: \"-- commercial --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: '";
        // line 443
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.commercial.asynch-search");
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
        // line 454
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 454, $this->source); })()), "request", [], "any", false, false, false, 454), "query", [], "any", false, false, false, 454), "get", [0 => "commercial"], "method", false, false, false, 454)) {
            // line 455
            echo "                var data = {
                    id: \"";
            // line 456
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 456, $this->source); })()), "request", [], "any", false, false, false, 456), "query", [], "any", false, false, false, 456), "get", [0 => "commercial"], "method", false, false, false, 456), "html", null, true);
            echo "\",
                    text: '";
            // line 457
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 457, $this->source); })()), "request", [], "any", false, false, false, 457), "query", [], "any", false, false, false, 457), "get", [0 => "commercial"], "method", false, false, false, 457), "html", null, true);
            echo "'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#commercial').append(newOption).trigger('change');

        ";
        }
        // line 464
        echo "            });
            \$(\".js-datepicker\").each(function () {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"dossier_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#dossier_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
    </script>
    ";
        // line 493
        $this->loadTemplate("dossier/part/custom-extract-js.html.twig", "dossier/index.html.twig", 493)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dossier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  784 => 493,  753 => 464,  743 => 457,  739 => 456,  736 => 455,  734 => 454,  720 => 443,  710 => 435,  700 => 428,  696 => 427,  693 => 426,  691 => 425,  677 => 414,  667 => 406,  657 => 399,  653 => 398,  650 => 397,  648 => 396,  634 => 385,  594 => 348,  579 => 337,  569 => 336,  555 => 331,  543 => 322,  537 => 319,  530 => 314,  515 => 305,  510 => 303,  506 => 302,  502 => 301,  497 => 300,  495 => 299,  491 => 297,  487 => 296,  484 => 295,  478 => 293,  472 => 291,  470 => 290,  465 => 288,  461 => 287,  457 => 286,  453 => 285,  449 => 284,  445 => 283,  441 => 282,  437 => 281,  430 => 280,  426 => 279,  398 => 254,  392 => 251,  384 => 247,  377 => 243,  370 => 239,  360 => 232,  353 => 228,  346 => 224,  339 => 220,  332 => 216,  325 => 212,  316 => 206,  309 => 202,  302 => 198,  295 => 194,  289 => 190,  283 => 187,  277 => 184,  271 => 181,  267 => 179,  265 => 176,  264 => 175,  263 => 174,  262 => 169,  257 => 166,  255 => 163,  254 => 162,  253 => 161,  252 => 160,  251 => 155,  246 => 152,  244 => 149,  243 => 148,  242 => 143,  237 => 140,  235 => 137,  234 => 136,  233 => 131,  228 => 128,  226 => 125,  225 => 124,  224 => 119,  219 => 116,  217 => 113,  216 => 112,  215 => 107,  210 => 104,  208 => 101,  207 => 100,  206 => 95,  201 => 92,  199 => 89,  198 => 88,  197 => 83,  192 => 80,  190 => 77,  189 => 76,  188 => 71,  145 => 31,  127 => 16,  123 => 15,  119 => 13,  109 => 12,  97 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossiers- CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
    <link href=\"{{ asset('assets/css/dossier.css') }}\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des dossiers {{ app.request.query.get('client') is not empty ? 'de '~app.request.query.get('client') : '' }}</li>
        </ol>
    </nav>

    <!-- Modal extraction -->
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
    <!-- Fin Modal extraction personnalité -->

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES DOSSIERS {{ app.request.query.get('client') is not empty ? 'de '~app.request.query.get('client') : '' }}</h2>
    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(formation_dossier_filter_form)  }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {{ form_widget(formation_dossier_filter_form.structure, {attr: {'class' : 'w-100', placeholder : 'Structure'} }) }}
            </div>
            <div class=\"form-group col-md-2\">
                <p>{{ form_widget(formation_dossier_filter_form.moisSignature, {attr: {'class' : 'w-100', placeholder : 'Mois de signature'} }) }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.societe) }}#}
                <p>{{ form_widget(formation_dossier_filter_form.anneeSignature, { attr : {'class' : 'w-100', placeholder : 'Année de signature' } } )  }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.nom) }}#}
                {{ form_widget(formation_dossier_filter_form.dateCreation, { attr: {placeholder : 'Date de création'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.prenom) }}#}
                {{ form_widget(formation_dossier_filter_form.numInterne, { attr: {'class' : 'w-100', placeholder : 'N° interne'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.client, { attr: {'class' : 'w-100', placeholder : 'Client'} } ) }}
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.intituleStage, { attr: {'class' : 'w-100', placeholder : 'Intitulé du stage'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.dateFinStage, { attr: {placeholder : 'Date de fin de stage'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.dateEstimeRecep, { attr: {placeholder : 'Date estimé pour recep accord'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.montantSigne, { attr: {'class' : 'w-100', placeholder : 'Montant signé'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.prenom) }}#}
                {{ form_widget(formation_dossier_filter_form.montantAccorde, { attr: {'class' : 'w-100', placeholder : 'Montant accordé'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.dateEstimeCloture, { attr: {placeholder : 'Date estimé pour clôture'} } ) }}
            </div>
        </div>
        <br>
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.statusDossier, { attr: {'class' : 'w-100', placeholder : 'Status du dossier'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.opca, { attr: {'class' : 'w-100', placeholder : 'OPCO'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(formation_dossier_filter_form.commercial, { attr: {'class' : 'w-100', placeholder : 'Commercial'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Liste_Dossiers_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        {{ form_end(formation_dossier_filter_form)  }}
    </fieldset>
    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Structure</th>
                <th>Mois de signature</th>
                <th>Année de signature</th>
                <th>Date de création</th>
                <th>N° interne</th>
                <th>Client</th>
                <th>Intitulé du stage</th>
                <th>Date fin stage</th>
                <th>Date estimée pour récépt accord</th>
                <th>Montant signé</th>
                <th>Montant accordé</th>
                <th>Date estimée pour clôture</th>
                <th>Statut</th>
                <th>OPCO</th>
                <th>Commercial</th>
                <th> >Action</th>
            </tr>
        </thead>
        <tbody>
            
            {% for dossier in pagination %}
                <tr data-id=\"{{ dossier.id }}\" data-href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', {id:dossier.id}) }}\">
                    <td>{{ dossier.structure }}</td>
                    <td>{{ dossier.mois | month_letter }}</td>
                    <td>{{ dossier.annee }}</td>
                    <td>{{ (( (dossier.dateEnvoi | date('d-m-Y')) == '31-12-1969') or ((dossier.dateEnvoi | date('d-m-Y')) == '01-01-1970') or ((dossier.dateEnvoi | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateEnvoi | date('d-m-Y') }}</td>
                    <td>{{ dossier.numInterne }}</td>
                    <td>{{ dossier.client }}</td>
                    <td>{{ dossier.intituleStage }}</td>
                    <td>{{ (( (dossier.dateFinPeriode | date('d-m-Y')) == '31-12-1969') or ((dossier.dateFinPeriode | date('d-m-Y')) == '01-01-1970') or ((dossier.dateFinPeriode | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateFinPeriode | date('d-m-Y')}}</td>
                    <td>
                        {% if dossier.dateAccord is not empty %}
                            {{ (( (dossier.dateAccord | date('d-m-Y')) == '31-12-1969') or ((dossier.dateAccord | date('d-m-Y')) == '01-01-1970') or ((dossier.dateAccord | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateAccord | date('d-m-Y')}}
                        {% else %}
                            {{ dossier.dateEnvoi | date_modify('+3 month') | date('d-m-Y') }}
                        {% endif %}
                    </td>
                    <td>{{ dossier.montantSigne |number_format(2, ',', ' ') }}</td>
                    <td>{{ dossier.montantAccorde |number_format(2, ',', ' ') }}</td>
{#                    <td>  {{ (( (dossier.dateFinPeriode | date('d-m-Y')) == '31-12-1969') or ((dossier.dateFinPeriode | date('d-m-Y')) == '01-01-1970') or ((dossier.dateFinPeriode | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateFinPeriode | date('d-m-Y')}}</td>#}
                    {# APR-194 : Date estimee pour clôtre = date de création du dossier + 6 mois #}
                    <td>{{ dossier.dateEnvoi | date_modify('+6 month') | date('d-m-Y') }}</td>
                    <td>{{ dossier.statut }}</td>
                    <td>{{ dossier.opca }}</td>
                    <td>{{ dossier.commercial }}</td>
                    <td>
                        <a href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', {id:dossier.id}) }}\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a onclick=\"deleteDossier(\$(this))\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>

        <tfoot>
            <tr >
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
        
        <a href=\"{{ path('Liste_Dossiers_Controller/ajoutdossier', {client : app.request.query.get('client')} ) }}\" class=\"ml-3 btn btn-primary\">Créer</a>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script>
                            function deleteDossier(elem)
                            {
                                //get dossier id
                                var dossier_id = elem.closest('tr').attr('data-id');
                                //handle link
                                var deleteLink = '{{ path('Liste_Dossier_Controller/deleteDossier', {'idDossier':'dossierId'}) }}';
                                deleteLink = deleteLink.replace('dossierId', dossier_id);
                                // show dialog
                                swal({
                                    title: \"Confirmation!\",
                                    text: \"Voulez vous supprimer ce dossier?\",
                                    icon: \"warning\",
                                    buttons: true,
                                    dangerMode: true,
                                })
                                        .then((willDelete) => {
                                            if (willDelete) {
                                                \$.ajax({
                                                    type: \"GET\",
                                                    url: deleteLink,
                                                })
                                                        .done(function (data) {
                                                            if (data.status == \"Success\") {
                                                                swal(\"Supprimé avec succés!\", {
                                                                    icon: \"success\",
                                                                }).then((ok) => {
                                                                    location.reload();
                                                                });
                                                            } else {
                                                                swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimé!\", \"error\");
                                                            }
                                                        });
                                            }
                                        });
                            }

                            \$(function () {
                                \$('#client').select2({
                                    placeholder: \"-- client --\",
                                    minimumInputLength: 3,
                                    allowClear: true,
                                    ajax: {
                                        url: '{{ path('crm.dossier.client.asynch-search') }}',
                                        data: function (params) {
                                            var query = {
                                                search: params.term
                                            };
                                            // Query parameters will be ?search=[term]&type=public
                                            return query;
                                        }
                                    }
                                });

        {% if app.request.query.get('client') %}
                var data = {
                    id: \"{{ app.request.query.get('client') }}\",
                    text: '{{ app.request.query.get('client')|e('js') }}'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#client').append(newOption).trigger('change');

        {% endif  %}
            });

            \$(function () {
                \$('#opca').select2({
                    placeholder: \"-- OPCO --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: '{{ path('crm.dossier.opca.asynch-search') }}',
                        data: function (params) {
                            var query = {
                                search: params.term
                            };
                            // Query parameters will be ?search=[term]&type=public
                            return query;
                        }
                    }
                });

        {% if app.request.query.get('opca') %}
                var data = {
                    id: \"{{ app.request.query.get('opca') }}\",
                    text: '{{ app.request.query.get('opca')|e('js') }}'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#opca').append(newOption).trigger('change');

        {% endif  %}
            });
            //filre commercial
            \$(function () {
                \$('#commercial').select2({
                    placeholder: \"-- commercial --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: '{{ path('crm.dossier.commercial.asynch-search') }}',
                        data: function (params) {
                            var query = {
                                search: params.term
                            };
                            // Query parameters will be ?search=[term]&type=public
                            return query;
                        }
                    }
                });

        {% if app.request.query.get('commercial') %}
                var data = {
                    id: \"{{ app.request.query.get('commercial') }}\",
                    text: '{{ app.request.query.get('commercial') }}'
                };

                var newOption = new Option(data.text, data.id, true, true);
                \$('#commercial').append(newOption).trigger('change');

        {% endif  %}
            });
            \$(\".js-datepicker\").each(function () {
                \$(this).datepicker({
                    'format': 'dd/mm/yyyy',
                    'autoclose': true,
                    'clearBtn': true,
                    'language': 'fr',
                });
            });
const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"dossier_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#dossier_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
    </script>
    {% include 'dossier/part/custom-extract-js.html.twig' %}
{% endblock %}
", "dossier/index.html.twig", "/home/jeremy/Bureau/project/app/templates/dossier/index.html.twig");
    }
}
