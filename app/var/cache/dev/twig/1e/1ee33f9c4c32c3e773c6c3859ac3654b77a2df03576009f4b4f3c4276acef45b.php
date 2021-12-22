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

/* dossier/show.html.twig */
class __TwigTemplate_7979abce7a12d664e16347cb4d3c5ae7af2cb0863adfebe26c81b24f74e8b7f6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dossier/show.html.twig", 1);
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

        echo "Dossier - CRM Aprentiv v2.0";
        
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
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wickedpicker.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
    <link href=\"https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller");
        echo "\">Liste des Dossiers</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails dossier</li>
            </ol>

            <div>
                ";
        // line 24
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("edit", "Dossiers")) {
            // line 25
            echo "                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier le dossier
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                ";
        }
        // line 34
        echo "            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAIL DU DOSSIER</h2>
    ";
        // line 40
        echo "        ";
        $this->loadTemplate("dossier/part/dossier-form.html.twig", "dossier/show.html.twig", 40)->display($context);
        // line 41
        echo "    ";
        // line 42
        echo "
    ";
        // line 44
        echo "    <form id=\"pagedegarde-form\" action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dossier_Generate_Doc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44), "type" => 4]), "html", null, true);
        echo "\" target=\"_blank\" method=\"post\" style=\"display: none;\">
        <input type=\"hidden\" id=\"pgarde-client\" name=\"client\"/>
        <input type=\"hidden\" id=\"pgarde-opca\" name=\"opca\" />
        <input type=\"hidden\" id=\"pgarde-intitstage\" name=\"intitstage\"/>
        <input type=\"hidden\" id=\"pgarde-datedebut\" name=\"datedebut\"/>
        <input type=\"hidden\" id=\"pgarde-datefin\" name=\"datefin\"/>
        <input type=\"hidden\" id=\"pgarde-montant\" name=\"montant\"/>
    </form>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 56
        echo "    <!--- Modal formation --->
    ";
        // line 57
        $this->loadTemplate("dossier/part/calendrier.html.twig", "dossier/show.html.twig", 57)->display(twig_array_merge($context, ["formation_dates" => (isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 57, $this->source); })())]));
        // line 58
        echo "
    <div id=\"confirm-delete-date-modal\" class=\"modal fade\">
        <div class=\"modal-body\" role=\"dialog\">
            Confirmer la suppression ?
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-primary\" id=\"confirm-delete-date\">Supprimer</button>
            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-secondary\" id=\"#cancel-delete-date\">Annuler</button>
        </div>
    </div>


    <div class=\"modal fade\" id=\"modaldossierimpre\">
        <div class=\"modal-dialog modal-dialog-centered no-disabled modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2>Edition courrier</h2>
                </div>
                <div class=\"modal-body\">
                    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                                <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dossier_Generate_Doc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80), "type" => 1]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">ECD</a>
                            </div>
                            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                                <a href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dossier_Generate_Doc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83), "type" => 2]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">ELE</a>
                            </div>
                            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                                ";
        // line 86
        if ((isset($context["opco_is_fifpl"]) || array_key_exists("opco_is_fifpl", $context))) {
            // line 87
            echo "                                    ";
            // line 88
            echo "                                    <a href=\"javascript:void(0)\" id=\"show-fifpl-choices\" class=\"btn btn-primary btn-block\">IMP</a>
                                ";
        } else {
            // line 90
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dossier_Generate_Doc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90), "type" => 3]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">IMP</a>
                                ";
        }
        // line 92
        echo "                            </div>
                        </div>
                            
                        <p class=\"text-center mt-3 d-none\" id=\"fifpl-choices\">
                            <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dossier_Generate_Doc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "type" => 3, "target" => "FIFPL"]), "html", null, true);
        echo "\" class=\"d-inline-block btn btn-dark\">FIFPL</a>
                            <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Dossier_Generate_Doc", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97), "type" => 3, "target" => "FIFPL2"]), "html", null, true);
        echo "\" class=\"d-inline-block btn btn-dark\">FIFPL2</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"emmargementpapier\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3>Selectionner</h3>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body p-0\">
                    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                                <label class=\"mr-2 font-weight-bold\" for=\"inlineFormCustomSelectStag\">Stagiaire</label>
                                <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelectStag\">
                                    ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listestagiaires"]) || array_key_exists("listestagiaires", $context) ? $context["listestagiaires"] : (function () { throw new RuntimeError('Variable "listestagiaires" does not exist.', 119, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["stagiaire"]) {
            // line 120
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "id", [], "any", false, false, false, 120), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "prenom", [], "any", false, false, false, 120), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["stagiaire"], "nom", [], "any", false, false, false, 120), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["stagiaireemail"]) || array_key_exists("stagiaireemail", $context) ? $context["stagiaireemail"] : (function () { throw new RuntimeError('Variable "stagiaireemail" does not exist.', 120, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 120) - 1), [], "array", false, false, false, 120), "email", [], "array", false, false, false, 120), "html", null, true);
            echo ")</option>
                                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stagiaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                            <button type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\" class=\"btn btn-secondary mb-2 mr-3\">Annuler</button>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                            <button type=\"button\" class=\"btn btn-primary mb-2\" id=\"creeremmargementdoc\">Valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 143
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    ";
        // line 145
        $this->loadTemplate("dossier/part/dossier-autocomplete-js.html.twig", "dossier/show.html.twig", 145)->display(twig_array_merge($context, ["listAutocomplete" =>         // line 146
(isset($context["listAutocomplete"]) || array_key_exists("listAutocomplete", $context) ? $context["listAutocomplete"] : (function () { throw new RuntimeError('Variable "listAutocomplete" does not exist.', 146, $this->source); })()), "opcaId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 147
(isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 147, $this->source); })()), "idOpca", [], "any", false, false, false, 147), "vars", [], "any", false, false, false, 147), "id", [], "any", false, false, false, 147), "numInterne" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 148
(isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 148, $this->source); })()), "ref", [], "any", false, false, false, 148), "vars", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148), "datefin" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 149
(isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 149, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149)]));
        // line 152
        echo "    ";
        $this->loadTemplate("Common/commentaire-js.html.twig", "dossier/show.html.twig", 152)->display(twig_array_merge($context, ["addAutocomplete" => "addAutocomplete"]));
        // line 153
        echo "    ";
        $this->loadTemplate("Common/stagiaire-js.html.twig", "dossier/show.html.twig", 153)->display($context);
        // line 154
        echo "    ";
        $this->loadTemplate("Common/client-ajax-js.html.twig", "dossier/show.html.twig", 154)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 154, $this->source); })()), "idClient", [], "any", false, false, false, 154), "vars", [], "any", false, false, false, 154)]));
        // line 155
        echo "    ";
        $this->loadTemplate("Common/opca-ajax-js.html.twig", "dossier/show.html.twig", 155)->display(twig_array_merge($context, ["attrs" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 155, $this->source); })()), "idOpca", [], "any", false, false, false, 155), "vars", [], "any", false, false, false, 155)]));
        // line 156
        echo "
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <!--script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script-->
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/wickedpicker.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 163
        $this->loadTemplate("Common/collection-function-js.html.twig", "dossier/show.html.twig", 163)->display($context);
        // line 164
        echo "    ";
        $this->loadTemplate("Common/dossier-js.html.twig", "dossier/show.html.twig", 164)->display($context);
        // line 165
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dossier/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 165,  407 => 164,  405 => 163,  401 => 162,  393 => 156,  390 => 155,  387 => 154,  384 => 153,  381 => 152,  379 => 149,  378 => 148,  377 => 147,  376 => 146,  375 => 145,  369 => 143,  359 => 142,  331 => 122,  308 => 120,  291 => 119,  266 => 97,  262 => 96,  256 => 92,  250 => 90,  246 => 88,  244 => 87,  242 => 86,  236 => 83,  230 => 80,  206 => 58,  204 => 57,  201 => 56,  191 => 55,  170 => 44,  167 => 42,  165 => 41,  162 => 40,  155 => 34,  144 => 25,  142 => 24,  134 => 19,  130 => 18,  125 => 15,  115 => 14,  101 => 9,  97 => 8,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dossier - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/wickedpicker.css') }}\" rel=\"stylesheet\"/>
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\"/>
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
    <link href=\"https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Dossiers_Controller') }}\">Liste des Dossiers</a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails dossier</li>
            </ol>

            <div>
                {% if is_granted('edit', 'Dossiers') %}
                    <a href=\"javascript:void(0)\" class=\"update\">
                        <i class=\"fas fa-edit\"></i>
                        Modifier le dossier
                    </a>
                    <a href=\"javascript:void(0)\" class=\"text-danger cancel-update d-none\">
                        <i class=\"fas fa-ban\"></i>
                        Annuler la modification
                    </a>
                {% endif %}
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAIL DU DOSSIER</h2>
    {# BEGIN FORMULAIRE DOSSIER #}
        {% include 'dossier/part/dossier-form.html.twig' %}
    {# FIN FORMULAIRE DOSSIER #}

    {# envoyer les valeurs chcisis #}
    <form id=\"pagedegarde-form\" action=\"{{ path(\"Dossier_Generate_Doc\", {id: dossier.id,type: 4}) }}\" target=\"_blank\" method=\"post\" style=\"display: none;\">
        <input type=\"hidden\" id=\"pgarde-client\" name=\"client\"/>
        <input type=\"hidden\" id=\"pgarde-opca\" name=\"opca\" />
        <input type=\"hidden\" id=\"pgarde-intitstage\" name=\"intitstage\"/>
        <input type=\"hidden\" id=\"pgarde-datedebut\" name=\"datedebut\"/>
        <input type=\"hidden\" id=\"pgarde-datefin\" name=\"datefin\"/>
        <input type=\"hidden\" id=\"pgarde-montant\" name=\"montant\"/>
    </form>

{% endblock %}

{% block modal %}
    <!--- Modal formation --->
    {% include 'dossier/part/calendrier.html.twig' with { formation_dates : formated_formation_dates } %}

    <div id=\"confirm-delete-date-modal\" class=\"modal fade\">
        <div class=\"modal-body\" role=\"dialog\">
            Confirmer la suppression ?
        </div>
        <div class=\"modal-footer\">
            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-primary\" id=\"confirm-delete-date\">Supprimer</button>
            <button type=\"button\" data-dismiss=\"modal\" class=\"btn btn-secondary\" id=\"#cancel-delete-date\">Annuler</button>
        </div>
    </div>


    <div class=\"modal fade\" id=\"modaldossierimpre\">
        <div class=\"modal-dialog modal-dialog-centered no-disabled modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h2>Edition courrier</h2>
                </div>
                <div class=\"modal-body\">
                    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                                <a href=\"{{ path(\"Dossier_Generate_Doc\", {id: dossier.id,type: 1}) }}\" class=\"btn btn-primary btn-block\">ECD</a>
                            </div>
                            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                                <a href=\"{{ path(\"Dossier_Generate_Doc\", {id:dossier.id,type: 2}) }}\" class=\"btn btn-primary btn-block\">ELE</a>
                            </div>
                            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                                {% if opco_is_fifpl is defined %}
                                    {# SI OPCO = FIFPL => afficher le choix du document à editer #}
                                    <a href=\"javascript:void(0)\" id=\"show-fifpl-choices\" class=\"btn btn-primary btn-block\">IMP</a>
                                {% else %}
                                    <a href=\"{{ path(\"Dossier_Generate_Doc\", {id:dossier.id,type: 3}) }}\" class=\"btn btn-primary btn-block\">IMP</a>
                                {% endif %}
                            </div>
                        </div>
                            
                        <p class=\"text-center mt-3 d-none\" id=\"fifpl-choices\">
                            <a href=\"{{ path(\"Dossier_Generate_Doc\", {id:dossier.id,type: 3, target: 'FIFPL' }) }}\" class=\"d-inline-block btn btn-dark\">FIFPL</a>
                            <a href=\"{{ path(\"Dossier_Generate_Doc\", {id:dossier.id,type: 3, target: 'FIFPL2' }) }}\" class=\"d-inline-block btn btn-dark\">FIFPL2</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"emmargementpapier\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3>Selectionner</h3>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body p-0\">
                    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                                <label class=\"mr-2 font-weight-bold\" for=\"inlineFormCustomSelectStag\">Stagiaire</label>
                                <select class=\"custom-select mr-sm-2\" id=\"inlineFormCustomSelectStag\">
                                    {% for stagiaire in listestagiaires %}
                                        <option value=\"{{ stagiaire.id }}\">{{ stagiaire.prenom }} {{ stagiaire.nom }} ({{ stagiaireemail[loop.index - 1][\"email\"] }})</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                            <button type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\" class=\"btn btn-secondary mb-2 mr-3\">Annuler</button>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                            <button type=\"button\" class=\"btn btn-primary mb-2\" id=\"creeremmargementdoc\">Valider</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    {% include 'dossier/part/dossier-autocomplete-js.html.twig' with {
        listAutocomplete: listAutocomplete,
        opcaId: doc_form.idOpca.vars.id,
        numInterne: doc_form.ref.vars.id,
        datefin: doc_form.dateFinPeriode.vars.id
    }
    %}
    {% include 'Common/commentaire-js.html.twig' with { addAutocomplete: 'addAutocomplete' } %}
    {% include 'Common/stagiaire-js.html.twig' %}
    {% include 'Common/client-ajax-js.html.twig' with { attrs: doc_form.idClient.vars } %}
    {% include 'Common/opca-ajax-js.html.twig' with { attrs: doc_form.idOpca.vars } %}

    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>

    <!--script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js\" type=\"text/javascript\"></script-->
    <script src=\"{{ asset('assets/js/wickedpicker.js') }}\"></script>
    {% include 'Common/collection-function-js.html.twig' %}
    {% include 'Common/dossier-js.html.twig'%}

{% endblock %}", "dossier/show.html.twig", "/var/www/templates/dossier/show.html.twig");
    }
}
