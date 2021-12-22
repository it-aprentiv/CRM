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

/* note/index.html.twig */
class __TwigTemplate_c4a6f4a6cfee8f9ddbdf9c0669d9cc876324acd30ebfd40f1f201249a08c59ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "note/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "note/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Note - CRM Aprentiv v2.0";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste notes et actions</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES NOTES ET ACTIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 22, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-3\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 25, $this->source); })()), "nomTable", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Module"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 28, $this->source); })()), "nomStr", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Contact"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 32
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 32, $this->source); })()), "dateAdd", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => "Date "]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 35, $this->source); })()), "author", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Auteur"]]);
        echo "
            </div>
        </div>
        <div class=\"form-row mt-2\">
            ";
        // line 42
        echo "
            <div class=\"form-group col-md-3\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 44, $this->source); })()), "texteNote", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Note/Commentaire"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 47, $this->source); })()), "nomAction", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Action"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 51
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 51, $this->source); })()), "dateAction", [], "any", false, false, false, 51), 'widget', ["attr" => ["placeholder" => "Date Action"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 54, $this->source); })()), "rappelleur", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Responsable"]]);
        echo "
            </div>
            ";
        // line 57
        echo "            <div class=\"form-group col-md-3 mt-2\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 58, $this->source); })()), "actionStatut", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "statut"]]);
        echo "
            </div>

            ";
        // line 64
        echo "            <div class=\"form-group col-md-2 mt-3\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>


        ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["note_filter"]) || array_key_exists("note_filter", $context) ? $context["note_filter"] : (function () { throw new RuntimeError('Variable "note_filter" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Module</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Auteur</th>
                <th>Note/Commentaire</th>
                <th>Action</th>
                <th>Status action</th>
                <th>Date Action</th>
                <th>Responsable</th>
                <th colspan=\"2\">Voir</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new RuntimeError('Variable "notes" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 91
            echo "                <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/showNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\">
                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["noteConstant"]) || array_key_exists("noteConstant", $context) ? $context["noteConstant"] : (function () { throw new RuntimeError('Variable "noteConstant" does not exist.', 92, $this->source); })()), "getTableLibelle", [0 => twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 92)], "method", false, false, false, 92), "html", null, true);
            echo "</td>
                    ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 93) == "1_formation_dossier")) {
                // line 94
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "client", [], "any", false, false, false, 94), "html", null, true);
                echo "</td>
                    ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 95
$context["note"], "nomTable", [], "any", false, false, false, 95) == "lead") && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["note"], "societe", [], "any", false, false, false, 95)))) {
                // line 96
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "nomLead", [], "any", false, false, false, 96)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "prenomLead", [], "any", false, false, false, 96)), "html", null, true);
                echo "</td>
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 97
$context["note"], "nomTable", [], "any", false, false, false, 97) == "lead")) {
                // line 98
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "societe", [], "any", false, false, false, 98), "html", null, true);
                echo "</td>
                    ";
            } elseif (((twig_get_attribute($this->env, $this->source,             // line 99
$context["note"], "nomTable", [], "any", false, false, false, 99) == "1_contact") && twig_test_empty(twig_get_attribute($this->env, $this->source, $context["note"], "contact", [], "any", false, false, false, 99)))) {
                // line 100
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "nom", [], "any", false, false, false, 100)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["note"], "prenom", [], "any", false, false, false, 100)), "html", null, true);
                echo "</td>      
                    ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 101
$context["note"], "nomTable", [], "any", false, false, false, 101) == "1_contact")) {
                // line 102
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "contact", [], "any", false, false, false, 102), "html", null, true);
                echo "</td>
                    ";
            } else {
                // line 104
                echo "                    <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "nonCon", [], "any", false, false, false, 104), "html", null, true);
                echo "</td>
                    ";
            }
            // line 106
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "date", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "createurNom", [], "any", false, false, false, 107), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "createurPrenom", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "noteCommentaire", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "action", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "statutAction", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                    <td>";
            // line 111
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 111), "timestamp", [], "any", false, false, false, 111)) {
                // line 112
                echo "                        ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "dateAction", [], "any", false, false, false, 112), "d/m/Y"), "html", null, true);
                echo "
                    ";
            } else {
                // line 114
                echo "
                        ";
            }
            // line 115
            echo " </td>
                        <td>";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["note"], "idUserAction", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/showNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\" target=\"_blank\">
                                <i class=\"fas fa-eye fa-2x\"  style=\"margin-right: 10px;\"></i>
                            </a>
                            <a onclick=\"deleteNote('";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/deleteNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 121)]), "html", null, true);
            echo "')\">
                                <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
                            </a>
                        </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                    </tbody>
                    <tfoot>
                        <tr >
                            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                                <strong>Total : </strong> ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 131, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 131), "html", null, true);
        echo "
                            </td>
                            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                                ";
        // line 134
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 134, $this->source); })()));
        echo "
                            </td>
                        </tr>
                    </tfoot>
                </table>
                
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
        echo "                        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

                        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
                        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
                        <script type=\"text/javascript\">
                                function deleteNote(deleteLink)
                                {
                                    swal({
                                        title: \"Confirmation!\",
                                        text: \"Voulez vous supprimer cette ligne?\",
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
                                \$(document).ready(function () {
                                    \$('.js-datepicker').datepicker({
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
        return "note/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 143,  383 => 142,  366 => 134,  360 => 131,  354 => 127,  342 => 121,  336 => 118,  331 => 116,  328 => 115,  324 => 114,  318 => 112,  316 => 111,  312 => 110,  308 => 109,  304 => 108,  298 => 107,  293 => 106,  287 => 104,  281 => 102,  279 => 101,  272 => 100,  270 => 99,  265 => 98,  263 => 97,  256 => 96,  254 => 95,  249 => 94,  247 => 93,  243 => 92,  238 => 91,  234 => 90,  212 => 71,  204 => 66,  200 => 64,  194 => 58,  191 => 57,  186 => 54,  179 => 51,  173 => 47,  167 => 44,  163 => 42,  156 => 35,  149 => 32,  143 => 28,  137 => 25,  131 => 22,  119 => 13,  115 => 11,  105 => 10,  90 => 5,  80 => 4,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title %}Note - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste notes et actions</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES NOTES ET ACTIONS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(note_filter) }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-3\">
                {{ form_widget(note_filter.nomTable, {attr: {'class' : 'w-100', placeholder : 'Module'} }) }}
            </div>
            <div class=\"form-group col-md-3\">
                {{ form_widget(note_filter.nomStr, {attr: {'class' : 'w-100', placeholder : 'Contact'} }) }}
            </div>
            <div class=\"form-group col-md-3\">
                {#{{ form_widget(note_filter.dateAdd, {attr: {'class' : 'w-100', placeholder : 'Date'} }) }}#}
                {{ form_widget(note_filter.dateAdd, { attr: { placeholder : 'Date '} }) }}
            </div>
            <div class=\"form-group col-md-3\">
                {{ form_widget(note_filter.author, {attr: {'class' : 'w-100', placeholder : 'Auteur'} }) }}
            </div>
        </div>
        <div class=\"form-row mt-2\">
            {#<div class=\"form-group col-md-1\">
            {{ form_widget(note_filter.nomutilisateur, {attr: {'class' : 'w-100', placeholder : 'Créateur'} }) }}
            </div>#}

            <div class=\"form-group col-md-3\">
                {{ form_widget(note_filter.texteNote, {attr: {'class' : 'w-100', placeholder : 'Note/Commentaire'} }) }}
            </div>
            <div class=\"form-group col-md-3\">
                {{ form_widget(note_filter.nomAction, {attr: {'class' : 'w-100', placeholder : 'Action'} }) }}
            </div>
            <div class=\"form-group col-md-3\">
                {#{{ form_widget(note_filter.dateAction, {attr: {'class' : 'w-100 date-picker', placeholder : 'Date Action'} }) }}#}
                {{ form_widget(note_filter.dateAction, { attr: { placeholder : 'Date Action'} }) }}
            </div>
            <div class=\"form-group col-md-3\">
                {{ form_widget(note_filter.rappelleur, {attr: {'class' : 'w-100', placeholder : 'Responsable'} }) }}
            </div>
            {#CHAMP AJOUTé POUR LE FILTRE DE RECHERCHE PAR STATUT#}
            <div class=\"form-group col-md-3 mt-2\">
                {{ form_widget(note_filter.actionStatut, {attr: {'class' : 'w-100', placeholder : 'statut'} }) }}
            </div>

            {#<div class=\"form-group col-md-1\">
            {{ form_widget(note_filter.username, {attr: {'class' : 'w-100', placeholder : 'Username'} }) }}
        </div>#}
            <div class=\"form-group col-md-2 mt-3\">
                <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                <a href=\"{{ path('Liste_notes_actions_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>


        {{ form_end(note_filter) }}
    </fieldset>

    <table class=\"table table-sm table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Module</th>
                <th>Contact</th>
                <th>Date</th>
                <th>Auteur</th>
                <th>Note/Commentaire</th>
                <th>Action</th>
                <th>Status action</th>
                <th>Date Action</th>
                <th>Responsable</th>
                <th colspan=\"2\">Voir</th>
            </tr>
        </thead>
        <tbody>
            {% for note in notes %}
                <tr data-href=\"{{ path('Liste_notes_actions_Controller/showNote', {id:note.id}) }}\">
                    <td>{{ noteConstant.getTableLibelle(note.nomTable) }}</td>
                    {% if note.nomTable == '1_formation_dossier' %}
                    <td>{{ note.client }}</td>
                    {% elseif note.nomTable == 'lead' and note.societe is empty %}
                    <td>{{ note.nomLead | ucwords}} {{ note.prenomLead | ucwords }}</td>
                    {% elseif note.nomTable == 'lead' %}
                    <td>{{ note.societe }}</td>
                    {% elseif note.nomTable == '1_contact' and note.contact is empty %}
                    <td>{{ note.nom | ucwords}} {{ note.prenom | ucwords }}</td>      
                    {% elseif note.nomTable == '1_contact' %}
                    <td>{{ note.contact }}</td>
                    {% else %}
                    <td>{{note.nonCon}}</td>
                    {% endif %}
                    <td>{{ note.date|date('d/m/Y') }}</td>
                    <td>{{ note.createurNom }} {{ note.createurPrenom }}</td>
                    <td>{{ note.noteCommentaire }}</td>
                    <td>{{ note.action }}</td>
                    <td>{{ note.statutAction }}</td>
                    <td>{% if note.dateAction.timestamp  %}
                        {{ note.dateAction|date('d/m/Y') }}
                    {% else %}

                        {% endif %} </td>
                        <td>{{ note.idUserAction }}</td>
                        <td>
                            <a href=\"{{ path('Liste_notes_actions_Controller/showNote', {id:note.id}) }}\" target=\"_blank\">
                                <i class=\"fas fa-eye fa-2x\"  style=\"margin-right: 10px;\"></i>
                            </a>
                            <a onclick=\"deleteNote('{{ path('Liste_notes_actions_Controller/deleteNote', {id:note.id}) }}')\">
                                <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
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
                
                {% endblock %}

                    {% block javascripts %}
                        {{ parent() }}

                        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
                        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
                        <script type=\"text/javascript\">
                                function deleteNote(deleteLink)
                                {
                                    swal({
                                        title: \"Confirmation!\",
                                        text: \"Voulez vous supprimer cette ligne?\",
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
                                \$(document).ready(function () {
                                    \$('.js-datepicker').datepicker({
                                        format: 'dd/mm/yyyy',
                                        'autoclose': true,
                                        'language': 'fr',
                                    });
                                });
                        </script>
                    {% endblock %}", "note/index.html.twig", "/var/www/templates/note/index.html.twig");
    }
}
