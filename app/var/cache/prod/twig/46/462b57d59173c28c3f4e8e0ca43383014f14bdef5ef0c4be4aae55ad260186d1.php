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

/* contact/index.html.twig */
class __TwigTemplate_2db2c376607e54299e94b94bfd2043438cdd67018d6fa75948ff7f66b031efaa extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Client/Prospect - CRM Aprentiv v2.0";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des clients / Prospects</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES CLIENTS / PROSPECTS</h2>

    <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contact_filter_form"] ?? null), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-1\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "structure", [], "any", false, false, false, 25), 'widget', ["placeholder" => "-- Entité --", "attr" => ["class" => "w-100"]]);
        echo "
            </div>
            <div class=\"form-group col-md-1\">
                <p>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "idType", [], "any", false, false, false, 28), 'widget', ["placeholder" => "-- Statut --", "attr" => ["class" => "w-100"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 32
        echo "                <p>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "societe", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "w-100 py-3"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 36
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "email", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Email --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 40
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "nom", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Nom --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 44
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "prenom", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Prénom --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 48
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "adresse", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Adresse --"]]);
        echo "
            </div>
        </div>
        <div class=\"form-row clearfix\">
            <div class=\"col-md-2\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "ville", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Ville --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 57
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "codePostal", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Code postal --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 61
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "telephone", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Téléphone --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 65
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "opca", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- OPCO --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 69
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "commercial", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Commercial --"]]);
        echo "
            </div>
            
            <div class=\"col-md-2 mt-2\">
                <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        </div>
        ";
        // line 77
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contact_filter_form"] ?? null), 'form_end');
        echo "
    </fieldset>

    <table class=\"table table-sm mb-0 table-striped\">
        <thead>
            <tr class=\"bg-info text-light\">
                <th>Entité</th>
                <th>Statut</th>
                <th>Societe</th>
                <th>Interlocuteur</th>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code postale</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>OPCO</th>
                <th>Cial</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
            // line 99
            echo "                <tr data-clientprospect-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 99), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 99)]), "html", null, true);
            echo "\">
                    <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "entite", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                    <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "statut", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
                    <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "societe", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "nom", [], "any", false, false, false, 103)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['App\Twig\AppExtension']->phpUcwords(twig_get_attribute($this->env, $this->source, $context["contact"], "prenom", [], "any", false, false, false, 103)), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "adresse", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "ville", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                    <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "codePostal", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
                    <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "telephone", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
                    <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "email", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                    <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "opca", [], "any", false, false, false, 109), "html", null, true);
            echo "</td>
                    <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["contact"], "commercial", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                    <td>
                        ";
            // line 112
            if (((isset($context["can_view"]) || array_key_exists("can_view", $context)) && ($context["can_view"] ?? null))) {
                // line 113
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, $context["contact"], "contact_id", [], "any", false, false, false, 113)]), "html", null, true);
                echo "\">
                            <i class=\"fas fa-eye fa-2x\"  style=\"margin-right: 10px;\"></i>
                        </a>
                        ";
            }
            // line 117
            echo "                        ";
            if (((isset($context["can_edit"]) || array_key_exists("can_edit", $context)) && ($context["can_edit"] ?? null))) {
                // line 118
                echo "                        <a onClick=\"deleteClientProspect(\$(this))\">
                            <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
                        </a>
                        ";
            }
            // line 122
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        echo "        </tbody>

        <tfoot>
            <tr >
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "getTotalItemCount", [], "any", false, false, false, 130), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 133
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["pagination"] ?? null));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>
    ";
        // line 138
        if (((isset($context["can_edit"]) || array_key_exists("can_edit", $context)) && ($context["can_edit"] ?? null))) {
            // line 139
            echo "    <div class=\"col-sm-12 p-0\" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"";
            // line 142
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/ajoutclient");
            echo "\" class=\"btn btn-primary btn-block\">Ajouter une fiche</a>
            </div>
            ";
        }
        // line 145
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 145) == "MUNIER Pascal")) {
            // line 146
            echo "            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"";
            // line 147
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_prospect");
            echo "\" class=\"btn btn-primary btn-block\">Exporter prospects</a>    
            </div>
            ";
        }
        // line 150
        echo "        </div>
        
    </div>
    

";
    }

    // line 157
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 158
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    

    <script>

        function deleteClientProspect(elem)
        {
            var clientprospect_id = elem.closest('tr').attr('data-clientprospect-id');
            var deleteLink = '";
        // line 166
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Client_Prospect_Delete", ["id" => "clientprospect_id"]);
        echo "';
            deleteLink = deleteLink.replace('clientprospect_id', clientprospect_id);
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
                    .done(function(data){
                        if (data.status == \"Success\") {
                            swal(\"Supprimé avec succés!\", {
                                icon: \"success\",
                            }).then((ok) => {
                                location.reload();
                            });
                        } else {
                            swal({
                                title: \"Error!\",
                                text: data.message,
                                icon: \"warning\",
                                buttons: false,
                                dangerMode: true,
                            });
                        }
                    });
                }
            });
        }

        \$(function () {
            \$('#societe').select2({
                placeholder: \"-- Société --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.contact.societe.asynch-search");
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
        // line 219
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 219), "query", [], "any", false, false, false, 219), "get", [0 => "societe"], "method", false, false, false, 219)) {
            // line 220
            echo "                    var data = {
                        id: \"";
            // line 221
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 221), "query", [], "any", false, false, false, 221), "get", [0 => "societe"], "method", false, false, false, 221), "html", null, true);
            echo "\",
                        text: '";
            // line 222
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 222), "query", [], "any", false, false, false, 222), "get", [0 => "societe"], "method", false, false, false, 222), "js"), "html", null, true);
            echo "'
                    };

                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#societe').append(newOption).trigger('change');

            ";
        }
        // line 229
        echo "            
             \$('#";
        // line 230
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "opca", [], "any", false, false, false, 230), "vars", [], "any", false, false, false, 230), "id", [], "any", false, false, false, 230), "html", null, true);
        echo "').select2({
                placeholder: \"-- OPCO --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 235
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
        // line 246
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 246), "query", [], "any", false, false, false, 246), "get", [0 => "opca"], "method", false, false, false, 246)) {
            // line 247
            echo "                    var data = {
                        id: \"";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 248), "query", [], "any", false, false, false, 248), "get", [0 => "opca"], "method", false, false, false, 248), "html", null, true);
            echo "\",
                        text: '";
            // line 249
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 249), "query", [], "any", false, false, false, 249), "get", [0 => "opca"], "method", false, false, false, 249), "js"), "html", null, true);
            echo "'
                    };

                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_filter_form"] ?? null), "opca", [], "any", false, false, false, 253), "vars", [], "any", false, false, false, 253), "id", [], "any", false, false, false, 253), "html", null, true);
            echo "').append(newOption).trigger('change');

            ";
        }
        // line 256
        echo "        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 256,  484 => 253,  477 => 249,  473 => 248,  470 => 247,  468 => 246,  454 => 235,  446 => 230,  443 => 229,  433 => 222,  429 => 221,  426 => 220,  424 => 219,  410 => 208,  365 => 166,  353 => 158,  349 => 157,  340 => 150,  334 => 147,  331 => 146,  328 => 145,  322 => 142,  317 => 139,  315 => 138,  307 => 133,  301 => 130,  294 => 125,  286 => 122,  280 => 118,  277 => 117,  269 => 113,  267 => 112,  262 => 110,  258 => 109,  254 => 108,  250 => 107,  246 => 106,  242 => 105,  238 => 104,  232 => 103,  228 => 102,  224 => 101,  220 => 100,  213 => 99,  209 => 98,  185 => 77,  179 => 74,  170 => 69,  163 => 65,  156 => 61,  149 => 57,  143 => 53,  134 => 48,  127 => 44,  120 => 40,  113 => 36,  106 => 32,  100 => 28,  94 => 25,  88 => 22,  76 => 13,  72 => 11,  68 => 10,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "/home/jeremy/Bureau/project/app/templates/contact/index.html.twig");
    }
}
