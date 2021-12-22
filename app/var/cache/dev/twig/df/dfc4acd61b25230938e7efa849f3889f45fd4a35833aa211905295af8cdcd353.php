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

/* formateur/show.html.twig */
class __TwigTemplate_1f84819d00752a3098c436368698365e02b08c9235b85ba7c5ebdf8d4b4241ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formateur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formateur/show.html.twig", 1);
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

        echo "Formateurs - CRM Aprentiv v2.0";
        
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des formateurs</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS FORMATEURS</h2>
    <div class=\"row form-group\">
        <div class=\"col-md-8\">
            <div class=\"col-md-6\">
                <fieldset>
                    <legend>Statut</legend>
                    <div class=\"col-sm-10\">
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 27, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 27), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 27, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 27) == 1)) {
            echo " checked=\"checked\"";
        }
        echo ">
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Actif</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input font-weight-bold\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 32, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 32), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 32, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 32) == 2)) {
            echo " checked=\"checked\"";
        }
        echo ">
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Inactif</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input font-weight-bold\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 37, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 37), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 37, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 37) == 3)) {
            echo " checked=\"checked\"";
        }
        echo ">
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Black listé</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 42, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 42), "html", null, true);
        echo "\" ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 42, $this->source); })()), "idStatutFmt", [], "any", false, false, false, 42) == 4)) {
            echo " checked=\"checked\"";
        }
        echo ">
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Potentiel</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class=\"col-md-10\">
                <fieldset>
                    <legend>Société</legend>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label class=\"font-weight-bold\">Société ou organisme:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 54, $this->source); })()), "nomStr", [], "any", false, false, false, 54), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"font-weight-bold\">N° SIRET:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 58, $this->source); })()), "noSiret", [], "any", false, false, false, 58), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"font-weight-bold\">N° Sécurité Sociale:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 62, $this->source); })()), "nsecuritesocial", [], "any", false, false, false, 62), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class=\"col-md-10\">
                <fieldset>
                    <legend>Coordonnées</legend>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Piéce d'identité :</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 73, $this->source); })()), "pieceIdentite", [], "any", false, false, false, 73), "html", null, true);
        echo "\"
                                   readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Validité :</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 78, $this->source); })()), "validite", [], "any", false, false, false, 78), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Nom :</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 84, $this->source); })()), "nom", [], "any", false, false, false, 84), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Prénom:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 88, $this->source); })()), "prenom", [], "any", false, false, false, 88), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Site web:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 92, $this->source); })()), "siteweb", [], "any", false, false, false, 92), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <br>
                    <div class=\"row form-group\">
                        <div class=\"col-md-1\">
                            <label class=\"font-weight-bold\">N°:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 99, $this->source); })()), "numero", [], "any", false, false, false, 99), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-1\">
                            <label class=\"font-weight-bold\">Voie:</label>
                            <input type=\"text\" class=\"form-control\" value=\"\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Adresse:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 107
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 107, $this->source); })()), "adresse", [], "any", false, false, false, 107), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"font-weight-bold\">Code postale:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 111, $this->source); })()), "codePostal", [], "any", false, false, false, 111), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Ville:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 115, $this->source); })()), "ville", [], "any", false, false, false, 115), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <br>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Téléphone :</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 122, $this->source); })()), "telephone", [], "any", false, false, false, 122), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Email:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 126, $this->source); })()), "email", [], "any", false, false, false, 126), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <br>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Portable:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 133, $this->source); })()), "portable", [], "any", false, false, false, 133), "html", null, true);
        echo "\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Fax:</label>
                            <input type=\"text\" class=\"form-control\" value=\"";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["detail_formateur"]) || array_key_exists("detail_formateur", $context) ? $context["detail_formateur"] : (function () { throw new RuntimeError('Variable "detail_formateur" does not exist.', 137, $this->source); })()), "fax", [], "any", false, false, false, 137), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"col-md-12\"><br></div>
            <div class=\"col-md-12\">
                <fieldset>
                    <legend>Commentaire/Disponibilité</legend>
                    <div class=\"row\">
                        <div class=\"text-center col-md-6\">
                            <label class=\"font-weight-bold\" for=\"fax9\">Commentaires</label>
                            <textarea style=\"height: 200px;\" id=\"\" name=\"\" class=\"form-control\"></textarea>
                        </div>
                        <div class=\"text-center col-md-6\">
                            <label class=\"font-weight-bold\" for=\"\">Disponibilités</label>
                            <textarea style=\"height: 200px;\" id=\"\" name=\"\"
                                      class=\"form-control\"></textarea>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class=\"col-md-12\">
        ";
        // line 164
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "formateur/show.html.twig", 164)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_commentaire"]) || array_key_exists("formateur_commentaire", $context) ? $context["formateur_commentaire"] : (function () { throw new RuntimeError('Variable "formateur_commentaire" does not exist.', 164, $this->source); })()), "commentaires", [], "any", false, false, false, 164), "vars", [], "any", false, false, false, 164), "prototype", [], "any", false, false, false, 164), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["formateur_commentaire"]) || array_key_exists("formateur_commentaire", $context) ? $context["formateur_commentaire"] : (function () { throw new RuntimeError('Variable "formateur_commentaire" does not exist.', 164, $this->source); })()), "commentaires", [], "any", false, false, false, 164)]));
        // line 165
        echo "        ";
        // line 166
        echo "        ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formateur_commentaire"]) || array_key_exists("formateur_commentaire", $context) ? $context["formateur_commentaire"] : (function () { throw new RuntimeError('Variable "formateur_commentaire" does not exist.', 166, $this->source); })()), "commentaires", [], "any", false, false, false, 166), "setRendered", [], "any", false, false, false, 166);
        // line 167
        echo "    </div>
    <div class=\"col-md-12 row\">
        <div class=\"col-md-5\"></div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Mise à jour</button>
        </div>
        <div class=\"col-md-5\"></div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 177
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 178
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 179
        $this->loadTemplate("Common/commentaire-js.html.twig", "formateur/show.html.twig", 179)->display($context);
        // line 180
        echo "    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formateur/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 180,  388 => 179,  383 => 178,  373 => 177,  355 => 167,  352 => 166,  350 => 165,  348 => 164,  318 => 137,  311 => 133,  301 => 126,  294 => 122,  284 => 115,  277 => 111,  270 => 107,  259 => 99,  249 => 92,  242 => 88,  235 => 84,  226 => 78,  218 => 73,  204 => 62,  197 => 58,  190 => 54,  171 => 42,  159 => 37,  147 => 32,  135 => 27,  118 => 13,  114 => 11,  104 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Formateurs - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des formateurs</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">DETAILS FORMATEURS</h2>
    <div class=\"row form-group\">
        <div class=\"col-md-8\">
            <div class=\"col-md-6\">
                <fieldset>
                    <legend>Statut</legend>
                    <div class=\"col-sm-10\">
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"{{ detail_formateur.idStatutFmt }}\" {% if detail_formateur.idStatutFmt == 1 %} checked=\"checked\"{% endif %}>
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Actif</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input font-weight-bold\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"{{ detail_formateur.idStatutFmt }}\" {% if detail_formateur.idStatutFmt == 2 %} checked=\"checked\"{% endif %}>
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Inactif</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input font-weight-bold\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"{{ detail_formateur.idStatutFmt }}\" {% if detail_formateur.idStatutFmt == 3 %} checked=\"checked\"{% endif %}>
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Black listé</label>
                        </div>
                        <div class=\"form-check form-check-inline\">
                            <input class=\"form-check-input\" type=\"radio\" name=\"\" id=\"\"
                                   value=\"{{ detail_formateur.idStatutFmt }}\" {% if detail_formateur.idStatutFmt == 4 %} checked=\"checked\"{% endif %}>
                            <label class=\"form-check-label font-weight-bold\" for=\"\">Potentiel</label>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class=\"col-md-10\">
                <fieldset>
                    <legend>Société</legend>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label class=\"font-weight-bold\">Société ou organisme:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.nomStr }}\" readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"font-weight-bold\">N° SIRET:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.noSiret }}\" readonly>
                        </div>
                        <div class=\"form-group\">
                            <label class=\"font-weight-bold\">N° Sécurité Sociale:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.nsecuritesocial }}\" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class=\"col-md-10\">
                <fieldset>
                    <legend>Coordonnées</legend>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Piéce d'identité :</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.pieceIdentite }}\"
                                   readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Validité :</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.validite }}\" readonly>
                        </div>
                    </div>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Nom :</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.nom }}\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Prénom:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.prenom }}\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Site web:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.siteweb }}\" readonly>
                        </div>
                    </div>
                    <br>
                    <div class=\"row form-group\">
                        <div class=\"col-md-1\">
                            <label class=\"font-weight-bold\">N°:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.numero }}\" readonly>
                        </div>
                        <div class=\"col-md-1\">
                            <label class=\"font-weight-bold\">Voie:</label>
                            <input type=\"text\" class=\"form-control\" value=\"\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Adresse:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.adresse }}\" readonly>
                        </div>
                        <div class=\"col-md-2\">
                            <label class=\"font-weight-bold\">Code postale:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.codePostal }}\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Ville:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.ville }}\" readonly>
                        </div>
                    </div>
                    <br>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Téléphone :</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.telephone }}\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Email:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.email }}\" readonly>
                        </div>
                    </div>
                    <br>
                    <div class=\"row form-group\">
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Portable:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.portable }}\" readonly>
                        </div>
                        <div class=\"col-md-4\">
                            <label class=\"font-weight-bold\">Fax:</label>
                            <input type=\"text\" class=\"form-control\" value=\"{{ detail_formateur.fax }}\" readonly>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"col-md-12\"><br></div>
            <div class=\"col-md-12\">
                <fieldset>
                    <legend>Commentaire/Disponibilité</legend>
                    <div class=\"row\">
                        <div class=\"text-center col-md-6\">
                            <label class=\"font-weight-bold\" for=\"fax9\">Commentaires</label>
                            <textarea style=\"height: 200px;\" id=\"\" name=\"\" class=\"form-control\"></textarea>
                        </div>
                        <div class=\"text-center col-md-6\">
                            <label class=\"font-weight-bold\" for=\"\">Disponibilités</label>
                            <textarea style=\"height: 200px;\" id=\"\" name=\"\"
                                      class=\"form-control\"></textarea>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
    <div class=\"col-md-12\">
        {% include 'Common/commentaire-bloc.html.twig' with { prototype: formateur_commentaire.commentaires.vars.prototype, commentaires: formateur_commentaire.commentaires } %}
        {# pour empecher l'application d'afficher un bloc commentaire à la fin #}
        {% do formateur_commentaire.commentaires.setRendered %}
    </div>
    <div class=\"col-md-12 row\">
        <div class=\"col-md-5\"></div>
        <div class=\"col-md-2\">
            <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Mise à jour</button>
        </div>
        <div class=\"col-md-5\"></div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% include 'Common/commentaire-js.html.twig' %}
    
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr',
            });
        });
    </script>
{% endblock %}", "formateur/show.html.twig", "/home/jeremy/Bureau/project/app/templates/formateur/show.html.twig");
    }
}
