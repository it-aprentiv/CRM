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

/* utilisateur/index.html.twig */
class __TwigTemplate_8528796716d2c2cda63500f77df6473cebf23b7461763b46057770b323f72617 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/index.html.twig", 1);
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

        echo "Client/Prospect - CRM Aprentiv v2.0";
        
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
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des utilisateurs</li>
            </ol>
            <div>
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update.generate-form-asynch", ["id" => 0]);
        echo "\" class=\" open-user-form\"><i class=\"fa fa-plus-circle\"></i> Ajouter un utilisateur</a>
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES UTILISATEURS</h2>

    <section class=\"row mb-3\">
        <div class=\"col-md-6 list-filter\">
            <fieldset>
                <legend>Rechercher</legend>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userFilterForm"]) || array_key_exists("userFilterForm", $context) ? $context["userFilterForm"] : (function () { throw new RuntimeError('Variable "userFilterForm" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
                <div class=\"form-row\">
                    <div class=\"form-group col-md-5\">
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userFilterForm"]) || array_key_exists("userFilterForm", $context) ? $context["userFilterForm"] : (function () { throw new RuntimeError('Variable "userFilterForm" does not exist.', 32, $this->source); })()), "nomPrenom", [], "any", false, false, false, 32), 'widget', ["attr" => ["placeholder" => "-- Nom ou prénoms --"]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-5\">
                        ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["userFilterForm"]) || array_key_exists("userFilterForm", $context) ? $context["userFilterForm"] : (function () { throw new RuntimeError('Variable "userFilterForm" does not exist.', 35, $this->source); })()), "poste", [], "any", false, false, false, 35), 'widget', ["attr" => ["placeholder" => "-- Poste --"]]);
        echo "
                    </div>
                    <div class=\"form-group col-md-2\">
                        <button class=\"btn btn-primary p-1\" type=\"submit\">Filtrer</button>
                    </div>
                </div>
                ";
        // line 41
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["userFilterForm"]) || array_key_exists("userFilterForm", $context) ? $context["userFilterForm"] : (function () { throw new RuntimeError('Variable "userFilterForm" does not exist.', 41, $this->source); })()), 'form_end');
        echo "
            </fieldset>
        </div>

        <div class=\"col-md-6\">
            <fieldset>
                <legend>Légendes</legend>
                <div class=\"text-center\">
                    <ul class=\"list-inline d-inline-block\">
                        <li class=\"list-inline-item\"><span class=\"d-inline-block px-2 bg-danger text-light rounded-circle\">&nbsp;</span> Aucun accès
                        </li>
                        <li class=\"list-inline-item\"><span class=\"d-inline-block px-2 bg-warning text-light rounded-circle\">&nbsp;</span> Accès en
                            lecture seulement
                        </li>
                        <li class=\"list-inline-item\"><span class=\"d-inline-block px-2 bg-info text-light rounded-circle\">&nbsp;</span> Accès en
                            lecture et écriture
                        </li>
                    </ul>
                </div>
            </fieldset>
        </div>

    </section>

    <table class=\"table-responsive table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Nom & Prénom(s)</th>
                <th>Rôle/Poste</th>

                ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_menus"]) || array_key_exists("all_menus", $context) ? $context["all_menus"] : (function () { throw new RuntimeError('Variable "all_menus" does not exist.', 71, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 72
            echo "                    <th>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "nomMenu", [], "any", false, false, false, 72), "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 79
            echo "                <tr data-user-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "idutilisateur", [], "any", false, false, false, 79), "html", null, true);
            echo "\">
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "nomutilisateur", [], "any", false, false, false, 80), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "prenomutilisateur", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "poste", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["all_menus"]) || array_key_exists("all_menus", $context) ? $context["all_menus"] : (function () { throw new RuntimeError('Variable "all_menus" does not exist.', 82, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 83
                echo "                        ";
                $context["userMenuAccess"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "menu_access", [], "array", false, true, false, 83), twig_get_attribute($this->env, $this->source, $context["item"], "nomMenu", [], "any", false, false, false, 83), [], "array", true, true, false, 83)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 84
$context["utilisateur"], "menu_access", [], "array", false, false, false, 84), twig_get_attribute($this->env, $this->source, $context["item"], "nomMenu", [], "any", false, false, false, 84), [], "array", false, false, false, 84)) : ( -1));
                // line 85
                echo "                        <td>
                            ";
                // line 86
                if (((isset($context["userMenuAccess"]) || array_key_exists("userMenuAccess", $context) ? $context["userMenuAccess"] : (function () { throw new RuntimeError('Variable "userMenuAccess" does not exist.', 86, $this->source); })()) ==  -1)) {
                    // line 87
                    echo "                                <span class=\"d-inline-block px-2 bg-danger text-light rounded-circle\">&nbsp;</span>
                            ";
                } elseif ((                // line 88
(isset($context["userMenuAccess"]) || array_key_exists("userMenuAccess", $context) ? $context["userMenuAccess"] : (function () { throw new RuntimeError('Variable "userMenuAccess" does not exist.', 88, $this->source); })()) == 0)) {
                    // line 89
                    echo "                                <span class=\"d-inline-block px-2 bg-warning text-light rounded-circle\">&nbsp;</span>
                            ";
                } elseif ((                // line 90
(isset($context["userMenuAccess"]) || array_key_exists("userMenuAccess", $context) ? $context["userMenuAccess"] : (function () { throw new RuntimeError('Variable "userMenuAccess" does not exist.', 90, $this->source); })()) == 1)) {
                    // line 91
                    echo "                                <span class=\"d-inline-block px-2 bg-info text-light rounded-circle\">&nbsp;</span>
                            ";
                }
                // line 93
                echo "                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "                    <td>
                        <span>
                            <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.update.generate-form-asynch", ["id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "idutilisateur", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"open-user-form\" title=\"Modifier\">
                                <i class=\"fas fa-pencil-alt text-primary\"></i>
                            </a>
                        </span>
                        <span>
                            <a href=\"javascript:void(0)\" class=\"do-delete-confirm\" title=\"Supprimer\">
                                <i class=\"fas fa-trash-alt text-danger\"></i>
                            </a>
                        </span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "        </tbody>
        <tfoot>
            <tr >
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 113, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 113), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 116
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 116, $this->source); })()));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>


    ";
        // line 124
        echo "    <div class=\"modal fade\" id=\"user-modal-form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"user-form\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header list-filter\">
                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">
                        <span class=\"fa-stack fa-1x\">
                            <i class=\"fas fa-circle fa-stack-2x text-info\"></i>
                            <i class=\"fas fa-user fa-stack-1x text-white\"></i>
                        </span>
                        Gestion utilisateur</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Oups, une erreur s'est produite lors du chargement du contenu ... !
                </div>
                <div class=\"modal-footer list-filter\">
                    <strong class=\"alert alert-warning d-none mb-0\" id=\"create-alert\"></strong>
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"save-data\">
                        <span class=\"spinner spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\"></span>
                        Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script>
        ";
        // line 161
        echo "            \$('.open-user-form').on('click', function (e) {
                e.preventDefault();

                \$('.modal-body').load(\$(this).attr('href'), function () {
                    \$('#user-modal-form').modal({show: true});
                });
            });
        ";
        // line 169
        echo "
        ";
        // line 171
        echo "            \$('#save-data').on('click', function (e) {

                let spinner = \$(this).find('span.spinner');
                spinner.addClass('d-inline-block');
                e.preventDefault();

                \$.ajax({
                    type: 'POST',
                    url: \$('form[name=\"utilisateur\"]').attr('action'),
                    data: \$('#user-form').serialize(),
                    success: function (response) {

                        if (response.success) {
                            window.location.reload();
                        } else {
                            console.log(response.message);
                            // @TODO : afficher erreurs
                            spinner.removeClass('d-inline-block');
                            spinner.addClass('d-none');
                            \$('#create-alert').html(response.message).removeClass('d-none').addClass('d-inline-block');
                        }

                        spinner.removeClass('d-inline-block');
                        spinner.addClass('d-none');
                    }

                });
            });
        ";
        // line 200
        echo "
        ";
        // line 202
        echo "            \$('.do-delete-confirm').on('click', function (e) {
                const userId = \$(this).closest('tr').data('user-id');
                console.log(userId);
                
                swal({
                    title: \"Confirmation !\",
                    text: \"Voulez vous supprimer cet utilisateur ?\",
                    icon: \"warning\",
                    buttons: true,
                    dangerMode: true
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            \$.ajax({
                                type: \"POST\",
                                url: \"";
        // line 217
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user.delete-asynch");
        echo "\",
                                data: {id: userId}
                            })
                            .done(function (response) {
                                if (response.success) {
                                    swal(\"Supprimé avec succés!\", {
                                        icon: \"success\"
                                    }).then(function() {
                                        // window.location.reload();
                                        console.log(\"here\");
                                    });
                                } else {
                                    swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimée!\", \"error\");
                                }
                            });
                        }
                    });
            });
        ";
        // line 236
        echo "
        ";
        // line 238
        echo "        \$('body').on('change', '#utilisateur_isAdmin' ,function() {
            if (this.value == 1) {
                \$('body .utilisateur-menu').val(1).trigger('change');
            }
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "utilisateur/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 238,  449 => 236,  428 => 217,  411 => 202,  408 => 200,  378 => 171,  375 => 169,  366 => 161,  359 => 157,  349 => 156,  310 => 124,  300 => 116,  294 => 113,  288 => 109,  270 => 97,  266 => 95,  259 => 93,  255 => 91,  253 => 90,  250 => 89,  248 => 88,  245 => 87,  243 => 86,  240 => 85,  238 => 84,  236 => 83,  232 => 82,  228 => 81,  222 => 80,  217 => 79,  213 => 78,  207 => 74,  198 => 72,  194 => 71,  161 => 41,  152 => 35,  146 => 32,  140 => 29,  126 => 18,  119 => 14,  114 => 11,  104 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Client/Prospect - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\"/>
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des utilisateurs</li>
            </ol>
            <div>
                <a href=\"{{ path('user.update.generate-form-asynch', { id : 0 } ) }}\" class=\" open-user-form\"><i class=\"fa fa-plus-circle\"></i> Ajouter un utilisateur</a>
            </div>
        </div>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES UTILISATEURS</h2>

    <section class=\"row mb-3\">
        <div class=\"col-md-6 list-filter\">
            <fieldset>
                <legend>Rechercher</legend>
                {{ form_start(userFilterForm,{'attr' : {'class' : 'list-filter'}}) }}
                <div class=\"form-row\">
                    <div class=\"form-group col-md-5\">
                        {{ form_widget(userFilterForm.nomPrenom, { attr : { 'placeholder' : '-- Nom ou prénoms --' } }) }}
                    </div>
                    <div class=\"form-group col-md-5\">
                        {{ form_widget(userFilterForm.poste, { attr : { 'placeholder' : '-- Poste --' } } ) }}
                    </div>
                    <div class=\"form-group col-md-2\">
                        <button class=\"btn btn-primary p-1\" type=\"submit\">Filtrer</button>
                    </div>
                </div>
                {{ form_end(userFilterForm) }}
            </fieldset>
        </div>

        <div class=\"col-md-6\">
            <fieldset>
                <legend>Légendes</legend>
                <div class=\"text-center\">
                    <ul class=\"list-inline d-inline-block\">
                        <li class=\"list-inline-item\"><span class=\"d-inline-block px-2 bg-danger text-light rounded-circle\">&nbsp;</span> Aucun accès
                        </li>
                        <li class=\"list-inline-item\"><span class=\"d-inline-block px-2 bg-warning text-light rounded-circle\">&nbsp;</span> Accès en
                            lecture seulement
                        </li>
                        <li class=\"list-inline-item\"><span class=\"d-inline-block px-2 bg-info text-light rounded-circle\">&nbsp;</span> Accès en
                            lecture et écriture
                        </li>
                    </ul>
                </div>
            </fieldset>
        </div>

    </section>

    <table class=\"table-responsive table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Nom & Prénom(s)</th>
                <th>Rôle/Poste</th>

                {% for item in all_menus %}
                    <th>{{ item.nomMenu }}</th>
                    {% endfor %}
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for  utilisateur in pagination %}
                <tr data-user-id=\"{{ utilisateur.idutilisateur }}\">
                    <td>{{ utilisateur.nomutilisateur }} {{ utilisateur.prenomutilisateur }}</td>
                    <td>{{ utilisateur.poste }}</td>
                    {% for item in all_menus %}
                        {% set userMenuAccess = utilisateur['menu_access'][item.nomMenu] is defined ?
                        utilisateur['menu_access'][item.nomMenu] : -1 %}
                        <td>
                            {% if userMenuAccess == -1 %}
                                <span class=\"d-inline-block px-2 bg-danger text-light rounded-circle\">&nbsp;</span>
                            {% elseif userMenuAccess == 0 %}
                                <span class=\"d-inline-block px-2 bg-warning text-light rounded-circle\">&nbsp;</span>
                            {% elseif userMenuAccess == 1 %}
                                <span class=\"d-inline-block px-2 bg-info text-light rounded-circle\">&nbsp;</span>
                            {% endif %}
                        </td>
                    {% endfor %}
                    <td>
                        <span>
                            <a href=\"{{ path('user.update.generate-form-asynch', { id : utilisateur.idutilisateur } ) }}\" class=\"open-user-form\" title=\"Modifier\">
                                <i class=\"fas fa-pencil-alt text-primary\"></i>
                            </a>
                        </span>
                        <span>
                            <a href=\"javascript:void(0)\" class=\"do-delete-confirm\" title=\"Supprimer\">
                                <i class=\"fas fa-trash-alt text-danger\"></i>
                            </a>
                        </span>
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


    {# MODAL : MAJ utilisateur >> #}
    <div class=\"modal fade\" id=\"user-modal-form\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"user-form\"
         aria-hidden=\"true\">
        <div class=\"modal-dialog modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header list-filter\">
                    <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">
                        <span class=\"fa-stack fa-1x\">
                            <i class=\"fas fa-circle fa-stack-2x text-info\"></i>
                            <i class=\"fas fa-user fa-stack-1x text-white\"></i>
                        </span>
                        Gestion utilisateur</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    Oups, une erreur s'est produite lors du chargement du contenu ... !
                </div>
                <div class=\"modal-footer list-filter\">
                    <strong class=\"alert alert-warning d-none mb-0\" id=\"create-alert\"></strong>
                    <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
                    <button type=\"button\" class=\"btn btn-primary\" id=\"save-data\">
                        <span class=\"spinner spinner-border spinner-border-sm d-none\" role=\"status\" aria-hidden=\"true\"></span>
                        Enregistrer
                    </button>
                </div>
            </div>
        </div>
    </div>
    {# MODAL : MAJ utilisateur << #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script>
        {# MODAL : Formulaire dynamique gestion droit utilisateur #}
            \$('.open-user-form').on('click', function (e) {
                e.preventDefault();

                \$('.modal-body').load(\$(this).attr('href'), function () {
                    \$('#user-modal-form').modal({show: true});
                });
            });
        {# End MODAL : Formulaire dynamique gestion droit utilisateur #}

        {# POST formulaire : enregistre les informations  #}
            \$('#save-data').on('click', function (e) {

                let spinner = \$(this).find('span.spinner');
                spinner.addClass('d-inline-block');
                e.preventDefault();

                \$.ajax({
                    type: 'POST',
                    url: \$('form[name=\"utilisateur\"]').attr('action'),
                    data: \$('#user-form').serialize(),
                    success: function (response) {

                        if (response.success) {
                            window.location.reload();
                        } else {
                            console.log(response.message);
                            // @TODO : afficher erreurs
                            spinner.removeClass('d-inline-block');
                            spinner.addClass('d-none');
                            \$('#create-alert').html(response.message).removeClass('d-none').addClass('d-inline-block');
                        }

                        spinner.removeClass('d-inline-block');
                        spinner.addClass('d-none');
                    }

                });
            });
        {# End POST formulaire #}

        {# DELETE User Begin #}
            \$('.do-delete-confirm').on('click', function (e) {
                const userId = \$(this).closest('tr').data('user-id');
                console.log(userId);
                
                swal({
                    title: \"Confirmation !\",
                    text: \"Voulez vous supprimer cet utilisateur ?\",
                    icon: \"warning\",
                    buttons: true,
                    dangerMode: true
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            \$.ajax({
                                type: \"POST\",
                                url: \"{{ path('user.delete-asynch') }}\",
                                data: {id: userId}
                            })
                            .done(function (response) {
                                if (response.success) {
                                    swal(\"Supprimé avec succés!\", {
                                        icon: \"success\"
                                    }).then(function() {
                                        // window.location.reload();
                                        console.log(\"here\");
                                    });
                                } else {
                                    swal(\"Erreur\", \"Cette ligne n'a pas pu être supprimée!\", \"error\");
                                }
                            });
                        }
                    });
            });
        {# DELETE User Fin #}

        {# Donner tous les droits si on selection admin  #}
        \$('body').on('change', '#utilisateur_isAdmin' ,function() {
            if (this.value == 1) {
                \$('body .utilisateur-menu').val(1).trigger('change');
            }
        });
    </script>
{% endblock %}", "utilisateur/index.html.twig", "/home/jeremy/Bureau/project/app/templates/utilisateur/index.html.twig");
    }
}
