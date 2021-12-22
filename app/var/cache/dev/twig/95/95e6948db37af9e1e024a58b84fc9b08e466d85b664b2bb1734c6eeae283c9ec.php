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

/* opca/index.html.twig */
class __TwigTemplate_b565ee3acf8ca308cfcfd8183197dbc879e5b1df6f7f708ac51d34216f7054e6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opca/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opca/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opca/index.html.twig", 1);
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

        echo "OPCA - CRM Aprentiv v2.0";
        
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
            <li class=\"breadcrumb-item active\" aria-current=\"page\">OPCO</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES OPCO</h2>
    ";
        // line 20
        echo "    ";
        // line 21
        echo "    ";
        // line 22
        echo "    ";
        // line 23
        echo "    ";
        // line 24
        echo "    ";
        // line 25
        echo "    ";
        // line 26
        echo "    ";
        // line 27
        echo "    ";
        // line 28
        echo "    ";
        // line 29
        echo "    ";
        // line 30
        echo "    ";
        // line 31
        echo "    ";
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "    ";
        // line 41
        echo "    ";
        // line 42
        echo "    ";
        // line 43
        echo "    ";
        // line 44
        echo "    ";
        // line 45
        echo "    ";
        // line 46
        echo "    ";
        // line 47
        echo "    ";
        // line 48
        echo "    ";
        // line 49
        echo "    ";
        // line 50
        echo "    ";
        // line 51
        echo "    ";
        // line 52
        echo "    ";
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        // line 56
        echo "    ";
        // line 57
        echo "    ";
        // line 58
        echo "    ";
        // line 59
        echo "    ";
        // line 60
        echo "    ";
        // line 61
        echo "    ";
        // line 62
        echo "    ";
        // line 63
        echo "    <table class=\"table table-sm list-filter table-striped\">
        <thead>
            ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 65, $this->source); })()), 'form_start');
        echo "
            <tr>
                <td> ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 67, $this->source); })()), "opca", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "OPCO"]]);
        echo "</td>
                <td>";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 68, $this->source); })()), "telephone", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Téléphone"]]);
        echo "</td>
                <td>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 69, $this->source); })()), "email", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Email"]]);
        echo "</td>
                <td>";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 70, $this->source); })()), "adresse", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Adresse"]]);
        echo "</td>
                <td>";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 71, $this->source); })()), "compAdresse", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Complément d 'adresse"]]);
        echo "</td>
                <td>";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 72, $this->source); })()), "codePostal", [], "any", false, false, false, 72), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Code Postal"]]);
        echo "</td>
                <td>";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 73, $this->source); })()), "ville", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "Ville"]]);
        echo "</td>
                <td>
                    <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OPCA_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
                </td>
            </tr>
            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_filter_form"]) || array_key_exists("opca_filter_form", $context) ? $context["opca_filter_form"] : (function () { throw new RuntimeError('Variable "opca_filter_form" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
            <tr class=\"bg-info text-light\">
                <th>OPCO</th>
                <th>Téléphone</th>
                    ";
        // line 84
        echo "                <th>E-mail</th>
                    ";
        // line 86
        echo "                <th>Adresse</th>
                <th>Complément d'adresse</th>
                <th>Code postale</th>
                <th>Ville</th>
                <th colspan=\"2\">Action</th>
            </tr>
        </thead>
        <tbody>

            ";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 95, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["opca"]) {
            // line 96
            echo "                <tr data-opca-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "contact_id", [], "any", false, false, false, 96), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OPCA_Controller/showOpca", ["idOpca" => twig_get_attribute($this->env, $this->source, $context["opca"], "contact_id", [], "any", false, false, false, 96)]), "html", null, true);
            echo "\">
                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "opca", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                    <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "telephone", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                    ";
            // line 100
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "email", [], "any", false, false, false, 100), "html", null, true);
            echo "</td>
                    ";
            // line 102
            echo "                    <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "adresse", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
                    <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "compAdresse", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
                    <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "code_postal", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
                    <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["opca"], "ville", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OPCA_Controller/showOpca", ["idOpca" => twig_get_attribute($this->env, $this->source, $context["opca"], "contact_id", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a onclick=\"deleteOpca(\$(this))\">
                            <i class=\"fas fa-trash-alt text-danger\"></i>
                        </a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['opca'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "        </tbody>

        <tfoot>
            <tr >
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    <strong>Total : </strong> ";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 121, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 121), "html", null, true);
        echo "
                </td>
                <td colspan=\"6\" class=\"text-align-middle pt-3\">
                    ";
        // line 124
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 124, $this->source); })()));
        echo "
                </td>
            </tr>
        </tfoot>
    </table>
    <div class=\"text-center my-3 list-filter\">
        <a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opca_create");
        echo "\" class=\"btn btn-primary\" >Ajouter un OPCO</a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 135
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 136
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function deleteOpca(elem)
        {
            var opca_id = elem.closest('tr').attr('data-opca-id');
            var deleteLink = '";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OPCA_Controller/deleteOpca", ["idOpca" => "opcaId"]);
        echo "';
            deleteLink = deleteLink.replace('opcaId', opca_id);
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
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "opca/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  391 => 141,  382 => 136,  372 => 135,  358 => 130,  349 => 124,  343 => 121,  336 => 116,  321 => 107,  316 => 105,  312 => 104,  308 => 103,  303 => 102,  298 => 100,  294 => 98,  290 => 97,  283 => 96,  279 => 95,  268 => 86,  265 => 84,  258 => 79,  252 => 76,  246 => 73,  242 => 72,  238 => 71,  234 => 70,  230 => 69,  226 => 68,  222 => 67,  217 => 65,  213 => 63,  211 => 62,  209 => 61,  207 => 60,  205 => 59,  203 => 58,  201 => 57,  199 => 56,  197 => 55,  195 => 54,  193 => 53,  191 => 52,  189 => 51,  187 => 50,  185 => 49,  183 => 48,  181 => 47,  179 => 46,  177 => 45,  175 => 44,  173 => 43,  171 => 42,  169 => 41,  167 => 40,  165 => 39,  163 => 38,  161 => 37,  159 => 36,  157 => 35,  155 => 34,  153 => 33,  151 => 32,  149 => 31,  147 => 30,  145 => 29,  143 => 28,  141 => 27,  139 => 26,  137 => 25,  135 => 24,  133 => 23,  131 => 22,  129 => 21,  127 => 20,  118 => 13,  114 => 11,  104 => 10,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}OPCA - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">OPCO</li>
        </ol>
    </nav>

    <h2 class=\"text-center mt-2 text-primary\">LISTE DES OPCO</h2>
    {#<fieldset class=\"mb-3\">#}
    {#<legend>Filtre</legend>#}
    {#{{ form_start(opca_filter_form)  }}#}
    {#<div class=\"form-row\">#}
    {#<div class=\"form-group col-md-2\">#}
    {#{{ form_widget(opca_filter_form.opca, {attr: {'class' : 'w-100', placeholder : 'OPCA'} }) }}#}
    {#</div>#}
    {#<div class=\"form-group col-md-1\">#}
    {#<p>{{ form_widget(opca_filter_form.telephone, {attr: {'class' : 'w-100', placeholder : 'Téléphone'} }) }}</p>#}
    {#</div>#}
    {#&#123;&#35;<div class=\"form-group col-md-1\">&#35;&#125;#}
    {#&#123;&#35;&#123;&#35;{{ form_label(contact_filter_form.societe) }}&#35;&#125;&#35;&#125;#}
    {#&#123;&#35;<p>{{ form_widget(opca_filter_form.fax, { attr : {'class' : 'w-100', placeholder : 'Fax' } } )  }}</p>&#35;&#125;#}
    {#&#123;&#35;</div>&#35;&#125;#}
    {#<div class=\"form-group col-md-1\">#}
    {#&#123;&#35;{{ form_label(contact_filter_form.nom) }}&#35;&#125;#}
    {#{{ form_widget(opca_filter_form.email, { attr: {'class' : 'w-100', placeholder : 'Email'} } ) }}#}
    {#</div>#}
    {#&#123;&#35;<div class=\"form-group col-md-1\">&#35;&#125;#}
    {#&#123;&#35;&#123;&#35;{{ form_label(contact_filter_form.prenom) }}&#35;&#125;&#35;&#125;#}
    {#&#123;&#35;{{ form_widget(opca_filter_form.siteWeb, { attr: {'class' : 'w-100', placeholder : 'Site Web'} } ) }}&#35;&#125;#}
    {#&#123;&#35;</div>&#35;&#125;#}
    {#<div class=\"form-group col-md-2\">#}
    {#&#123;&#35;{{ form_label(contact_filter_form.adresse) }}&#35;&#125;#}
    {#{{ form_widget(opca_filter_form.adresse, { attr: {'class' : 'w-100', placeholder : 'Adresse'} } ) }}#}
    {#</div>#}
    {#<div class=\"form-group col-md-1\">#}
    {#&#123;&#35;{{ form_label(contact_filter_form.adresse) }}&#35;&#125;#}
    {#{{ form_widget(opca_filter_form.compAdresse, { attr: {'class' : 'w-100', placeholder : 'Complément d \\'adresse'} } ) }}#}
    {#</div>#}
    {#<div class=\"form-group col-md-1\">#}
    {#&#123;&#35;{{ form_label(contact_filter_form.adresse) }}&#35;&#125;#}
    {#{{ form_widget(opca_filter_form.codePostal, { attr: {'class' : 'w-100', placeholder : 'Code Postal'} } ) }}#}
    {#</div>#}
    {#<div class=\"form-group col-md-1\">#}
    {#&#123;&#35;{{ form_label(contact_filter_form.adresse) }}&#35;&#125;#}
    {#{{ form_widget(opca_filter_form.ville, { attr: {'class' : 'w-100', placeholder : 'Ville'} } ) }}#}
    {#</div>#}
    {#<div class=\"form-group col-md-1\">#}
    {#<button type=\"submit\" class=\"btn btn-info\">Rechercher</button>#}
    {#</div>#}
    {#</div>#}
    {#{{ form_end(opca_filter_form)  }}#}
    {#</fieldset>#}
    <table class=\"table table-sm list-filter table-striped\">
        <thead>
            {{ form_start(opca_filter_form)  }}
            <tr>
                <td> {{ form_widget(opca_filter_form.opca, {attr: {'class' : 'w-100', placeholder : 'OPCO'} }) }}</td>
                <td>{{ form_widget(opca_filter_form.telephone, {attr: {'class' : 'w-100', placeholder : 'Téléphone'} }) }}</td>
                <td>{{ form_widget(opca_filter_form.email, { attr: {'class' : 'w-100', placeholder : 'Email'} } ) }}</td>
                <td>{{ form_widget(opca_filter_form.adresse, { attr: {'class' : 'w-100', placeholder : 'Adresse'} } ) }}</td>
                <td>{{ form_widget(opca_filter_form.compAdresse, { attr: {'class' : 'w-100', placeholder : 'Complément d \\'adresse'} } ) }}</td>
                <td>{{ form_widget(opca_filter_form.codePostal, { attr: {'class' : 'w-100', placeholder : 'Code Postal'} } ) }}</td>
                <td>{{ form_widget(opca_filter_form.ville, { attr: {'class' : 'w-100', placeholder : 'Ville'} } ) }}</td>
                <td>
                    <button type=\"submit\" class=\"btn btn-info\">Rechercher</button>
                    <a href=\"{{ path('OPCA_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser le filtre\"><i class=\"fas fa-undo\"></i></a>
                </td>
            </tr>
            {{ form_end(opca_filter_form)  }}
            <tr class=\"bg-info text-light\">
                <th>OPCO</th>
                <th>Téléphone</th>
                    {#<th>Fax</th>#}
                <th>E-mail</th>
                    {#<th>Site Web</th>#}
                <th>Adresse</th>
                <th>Complément d'adresse</th>
                <th>Code postale</th>
                <th>Ville</th>
                <th colspan=\"2\">Action</th>
            </tr>
        </thead>
        <tbody>

            {% for opca in pagination %}
                <tr data-opca-id=\"{{ opca.contact_id }}\" data-href=\"{{ path('OPCA_Controller/showOpca', {idOpca:opca.contact_id}) }}\">
                    <td>{{ opca.opca }}</td>
                    <td>{{ opca.telephone }}</td>
                    {#<td>{{ opca.fax }}</td>#}
                    <td>{{ opca.email }}</td>
                    {#<td>{{ opca.site_web }}</td>#}
                    <td>{{ opca.adresse }}</td>
                    <td>{{ opca.compAdresse }}</td>
                    <td>{{ opca.code_postal }}</td>
                    <td>{{ opca.ville }}</td>
                    <td>
                        <a href=\"{{ path('OPCA_Controller/showOpca', {idOpca:opca.contact_id}) }}\">
                            <i class=\"fas fa-eye\"></i>
                        </a>
                        <a onclick=\"deleteOpca(\$(this))\">
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
    <div class=\"text-center my-3 list-filter\">
        <a href=\"{{ path('opca_create') }}\" class=\"btn btn-primary\" >Ajouter un OPCO</a>
    </div>

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        function deleteOpca(elem)
        {
            var opca_id = elem.closest('tr').attr('data-opca-id');
            var deleteLink = '{{ path('OPCA_Controller/deleteOpca', {'idOpca':'opcaId'}) }}';
            deleteLink = deleteLink.replace('opcaId', opca_id);
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
    </script>
{% endblock %}
", "opca/index.html.twig", "/var/www/templates/opca/index.html.twig");
    }
}
