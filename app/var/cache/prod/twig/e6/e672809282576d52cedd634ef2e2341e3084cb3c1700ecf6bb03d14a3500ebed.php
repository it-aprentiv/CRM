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
class __TwigTemplate_824f55a59d4e322201493d6aed2821c1526d71fb947260cf1775204b6924c9ff extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "note/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Note - CRM Aprentiv v2.0";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\" rel=\"stylesheet\" />
";
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["note_filter"] ?? null), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-3\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "nomTable", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Module"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "nomStr", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Contact"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 32
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "dateAdd", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => "Date "]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "author", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Auteur"]]);
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "texteNote", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Note/Commentaire"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "nomAction", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Action"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 51
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "dateAction", [], "any", false, false, false, 51), 'widget', ["attr" => ["placeholder" => "Date Action"]]);
        echo "
            </div>
            <div class=\"form-group col-md-3\">
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "rappelleur", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Responsable"]]);
        echo "
            </div>
            ";
        // line 57
        echo "            <div class=\"form-group col-md-3 mt-2\">
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["note_filter"] ?? null), "actionStatut", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "statut"]]);
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["note_filter"] ?? null), 'form_end');
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
        $context['_seq'] = twig_ensure_traversable(($context["notes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 91
            echo "                <tr data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_notes_actions_Controller/showNote", ["id" => twig_get_attribute($this->env, $this->source, $context["note"], "id", [], "any", false, false, false, 91)]), "html", null, true);
            echo "\">
                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["noteConstant"] ?? null), "getTableLibelle", [0 => twig_get_attribute($this->env, $this->source, $context["note"], "nomTable", [], "any", false, false, false, 92)], "method", false, false, false, 92), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "getTotalItemCount", [], "any", false, false, false, 131), "html", null, true);
        echo "
                            </td>
                            <td colspan=\"6\" class=\"text-align-middle pt-3\">
                                ";
        // line 134
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
                            </td>
                        </tr>
                    </tfoot>
                </table>
                
                ";
    }

    // line 142
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  339 => 143,  335 => 142,  324 => 134,  318 => 131,  312 => 127,  300 => 121,  294 => 118,  289 => 116,  286 => 115,  282 => 114,  276 => 112,  274 => 111,  270 => 110,  266 => 109,  262 => 108,  256 => 107,  251 => 106,  245 => 104,  239 => 102,  237 => 101,  230 => 100,  228 => 99,  223 => 98,  221 => 97,  214 => 96,  212 => 95,  207 => 94,  205 => 93,  201 => 92,  196 => 91,  192 => 90,  170 => 71,  162 => 66,  158 => 64,  152 => 58,  149 => 57,  144 => 54,  137 => 51,  131 => 47,  125 => 44,  121 => 42,  114 => 35,  107 => 32,  101 => 28,  95 => 25,  89 => 22,  77 => 13,  73 => 11,  69 => 10,  60 => 5,  56 => 4,  49 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "note/index.html.twig", "/home/jeremy/Bureau/project/app/templates/note/index.html.twig");
    }
}
