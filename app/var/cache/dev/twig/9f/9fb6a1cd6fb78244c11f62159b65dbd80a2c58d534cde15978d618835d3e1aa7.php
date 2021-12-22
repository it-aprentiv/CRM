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

/* lead/index.html.twig */
class __TwigTemplate_2743529d8f2d238d1369a63a157cb53c6ba633b0b5ef3e9e194b07a7f11bcd95 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lead/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "lead/index.html.twig", 1);
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

        echo "Menu - CRM Aprentiv v2.0";
        
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
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
        echo " <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des leads</li>
        </ol>
    </nav>

     <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                ";
        // line 24
        echo "                <p>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "societe", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "w-100 py-3"]]);
        echo "</p>
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 28
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Nom --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 32
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "prenom", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Prénom --"]]);
        echo "
            </div>
            <div class=\"form-group col-md-2\">
                ";
        // line 36
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "ville", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Ville --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 40
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "commercial", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Commercial --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "statut", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Statut lead --"]]);
        echo "
            </div>
            <div class=\"col-md-2\">
                ";
        // line 47
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "origine", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "w-100", "placeholder" => "-- Origine du lead --"]]);
        echo "
            </div>

            <div class=\"col-md-2 mt-2\">
                <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Lead_Controller");
        echo "\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form_end');
        echo "
    </fieldset>
    <div class=\"page-content\">
        ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "session", [], "any", false, false, false, 57), "flashBag", [], "any", false, false, false, 57), "get", [0 => "error"], "method", false, false, false, 57));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 58
            echo "            <div class=\"note note-warnning\">
                <p>";
            // line 59
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "flashBag", [], "any", false, false, false, 62), "get", [0 => "success"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 63
            echo "            <div class=\"note note-success\">
                <p>";
            // line 64
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "    </div>
    <h2 class=\"text-center mt-2 text-nmary\">LEADS</h2>
     <div class=\"row\">
        <div class=\"col-sm-12\">
            <table class=\"table table-sm mb-0 table-striped\">
                <thead>
                <tr class=\"bg-info text-light\">
                    <th>Societe</th>
                    <th>Statut</th>
                    <th>Commercial</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Ville</th>
                    <th>Origine</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["leadPage"]) || array_key_exists("leadPage", $context) ? $context["leadPage"] : (function () { throw new RuntimeError('Variable "leadPage" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lead"]) {
            // line 86
            echo "                    <tr data-lead-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\" data-href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_lead_Controller/editLead", ["id" => twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\">
                        <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "societe", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
                        <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "statut", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                        <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "commercial", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                        <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "nom", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                        <td> ";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "prenom", [], "any", false, false, false, 91), "html", null, true);
            echo " </td>
                        <td> ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "ville", [], "any", false, false, false, 92), "html", null, true);
            echo " </td>
                        <td> ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lead"], "origine", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                        <td>
                            ";
            // line 95
            if (((isset($context["can_view"]) || array_key_exists("can_view", $context)) && (isset($context["can_view"]) || array_key_exists("can_view", $context) ? $context["can_view"] : (function () { throw new RuntimeError('Variable "can_view" does not exist.', 95, $this->source); })()))) {
                // line 96
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_lead_Controller/editLead", ["id" => twig_get_attribute($this->env, $this->source, $context["lead"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                echo "\">
                                    <i class=\"fas fa-eye fa-2x\"></i>
                                </a>
                            ";
            }
            // line 100
            echo "                            ";
            if (((isset($context["can_edit"]) || array_key_exists("can_edit", $context)) && (isset($context["can_edit"]) || array_key_exists("can_edit", $context) ? $context["can_edit"] : (function () { throw new RuntimeError('Variable "can_edit" does not exist.', 100, $this->source); })()))) {
                // line 101
                echo "                                <a onClick=\"deleteLead(\$(this))\">
                                    <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
                                </a>
                            ";
            }
            // line 105
            echo "                        </td>
                    </tr>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lead'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                </tbody>
                <tfoot>
                <tr >
                    <td colspan=\"6\" class=\"text-align-middle pt-3\">
                        <strong>Total : </strong> ";
        // line 113
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["leadPage"]) || array_key_exists("leadPage", $context) ? $context["leadPage"] : (function () { throw new RuntimeError('Variable "leadPage" does not exist.', 113, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 113), "html", null, true);
        echo "
                    </td>
                    <td colspan=\"6\" class=\"text-align-middle pt-3\">
                        ";
        // line 116
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["leadPage"]) || array_key_exists("leadPage", $context) ? $context["leadPage"] : (function () { throw new RuntimeError('Variable "leadPage" does not exist.', 116, $this->source); })()));
        echo "
                    </td>
                </tr>
                </tfoot>
            </table>
            <div class=\"col-sm-12 text-center\">
                <a class=\"btn btn-primary\" href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_lead_Controller/ajoutLead");
        echo "\">Ajouter lead</a>
                ";
        // line 123
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "idutilisateur", [], "any", false, false, false, 123) == "29")) {
            // line 124
            echo "            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"";
            // line 125
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("export_lead");
            echo "\" class=\"btn btn-primary btn-block\">Exporter lead</a>
            </div>
            ";
        }
        // line 128
        echo "            </div>
            
            </table>
        </div>
    </div>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script>
        function deleteLead(elem)
        {
            var lead_id = elem.closest('tr').attr('data-lead-id');
            var deleteLink = '";
        // line 146
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Lead_Delete", ["id" => "lead_id"]);
        echo "';
            deleteLink = deleteLink.replace('lead_id', lead_id);
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
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.lead.societe.asynch-search");
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
        // line 198
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 198, $this->source); })()), "request", [], "any", false, false, false, 198), "query", [], "any", false, false, false, 198), "get", [0 => "societe"], "method", false, false, false, 198)) {
            // line 199
            echo "                    var data = {
                        id: \"";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "request", [], "any", false, false, false, 200), "query", [], "any", false, false, false, 200), "get", [0 => "societe"], "method", false, false, false, 200), "html", null, true);
            echo "\",
                        text: '";
            // line 201
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "request", [], "any", false, false, false, 201), "query", [], "any", false, false, false, 201), "get", [0 => "societe"], "method", false, false, false, 201), "js"), "html", null, true);
            echo "'
                    };

                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#societe').append(newOption).trigger('change');

            ";
        }
        // line 208
        echo "            });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "lead/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  469 => 208,  459 => 201,  455 => 200,  452 => 199,  450 => 198,  436 => 187,  392 => 146,  379 => 137,  369 => 136,  353 => 128,  347 => 125,  344 => 124,  342 => 123,  338 => 122,  329 => 116,  323 => 113,  317 => 109,  308 => 105,  302 => 101,  299 => 100,  291 => 96,  289 => 95,  284 => 93,  280 => 92,  276 => 91,  272 => 90,  268 => 89,  264 => 88,  260 => 87,  253 => 86,  249 => 85,  229 => 67,  220 => 64,  217 => 63,  212 => 62,  203 => 59,  200 => 58,  196 => 57,  190 => 54,  185 => 52,  176 => 47,  170 => 43,  163 => 40,  156 => 36,  149 => 32,  142 => 28,  135 => 24,  129 => 20,  119 => 13,  115 => 11,  105 => 10,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu - CRM Aprentiv v2.0{% endblock %}
{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
 <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Liste des leads</li>
        </ol>
    </nav>

     <fieldset class=\"mb-3 list-filter\">
        <legend>Filtre</legend>
        {{ form_start(form)  }}
        <div class=\"form-row\">
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.societe) }}#}
                <p>{{ form_widget(form.societe, { attr : {'class' : 'w-100 py-3'} } )  }}</p>
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.nom) }}#}
                {{ form_widget(form.nom, { attr: {'class' : 'w-100', placeholder : '-- Nom --'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.prenom) }}#}
                {{ form_widget(form.prenom, { attr: {'class' : 'w-100', placeholder : '-- Prénom --'} } ) }}
            </div>
            <div class=\"form-group col-md-2\">
                {#{{ form_label(contact_filter_form.adresse) }}#}
                {{ form_widget(form.ville, { attr: {'class' : 'w-100', placeholder : '-- Ville --'} } ) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(contact_filter_form.commercial) }}#}
                {{ form_widget(form.commercial, { attr: { 'class' : 'w-100', placeholder : '-- Commercial --'} }) }}
            </div>
            <div class=\"col-md-2\">
                {{ form_widget(form.statut, { attr: { 'class' : 'w-100', placeholder : '-- Statut lead --'} }) }}
            </div>
            <div class=\"col-md-2\">
                {#{{ form_label(contact_filter_form.opca) }}#}
                {{ form_widget(form.origine, { attr: { 'class' : 'w-100', placeholder : '-- Origine du lead --'} }) }}
            </div>

            <div class=\"col-md-2 mt-2\">
                <button type=\"submit\" class=\"btn btn-info py-1\">Rechercher</button>
                <a href=\"{{ path('Liste_Lead_Controller') }}\" class=\"text-warning\" title=\"Réinitialiser filtre\"><i class=\"fas fa-undo\"></i></a>
            </div>
        {{ form_end(form)  }}
    </fieldset>
    <div class=\"page-content\">
        {% for flash_message in app.session.flashBag.get('error') %}
            <div class=\"note note-warnning\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
        {% for flash_message in app.session.flashBag.get('success') %}
            <div class=\"note note-success\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
    </div>
    <h2 class=\"text-center mt-2 text-nmary\">LEADS</h2>
     <div class=\"row\">
        <div class=\"col-sm-12\">
            <table class=\"table table-sm mb-0 table-striped\">
                <thead>
                <tr class=\"bg-info text-light\">
                    <th>Societe</th>
                    <th>Statut</th>
                    <th>Commercial</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Ville</th>
                    <th>Origine</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                {% for lead in leadPage %}
                    <tr data-lead-id=\"{{ lead.id }}\" data-href=\"{{ path('Fiche_lead_Controller/editLead', { id : lead.id} ) }}\">
                        <td>{{ lead.societe }}</td>
                        <td>{{ lead.statut }}</td>
                        <td>{{ lead.commercial }}</td>
                        <td>{{ lead.nom }}</td>
                        <td> {{ lead.prenom}} </td>
                        <td> {{ lead.ville }} </td>
                        <td> {{ lead.origine}}</td>
                        <td>
                            {% if can_view is defined and can_view %}
                                <a href=\"{{ path('Fiche_lead_Controller/editLead', { id : lead.id} ) }}\">
                                    <i class=\"fas fa-eye fa-2x\"></i>
                                </a>
                            {% endif %}
                            {% if can_edit is defined and can_edit %}
                                <a onClick=\"deleteLead(\$(this))\">
                                    <i class=\"fas fa-trash-alt text-danger fa-2x\"></i>
                                </a>
                            {% endif %}
                        </td>
                    </tr>
                    
                {% endfor %}
                </tbody>
                <tfoot>
                <tr >
                    <td colspan=\"6\" class=\"text-align-middle pt-3\">
                        <strong>Total : </strong> {{ leadPage.getTotalItemCount }}
                    </td>
                    <td colspan=\"6\" class=\"text-align-middle pt-3\">
                        {{ knp_pagination_render(leadPage) }}
                    </td>
                </tr>
                </tfoot>
            </table>
            <div class=\"col-sm-12 text-center\">
                <a class=\"btn btn-primary\" href=\"{{ path('Fiche_lead_Controller/ajoutLead') }}\">Ajouter lead</a>
                {% if app.user.idutilisateur == '29'%}
            <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                <a href=\"{{ path(\"export_lead\") }}\" class=\"btn btn-primary btn-block\">Exporter lead</a>
            </div>
            {% endif %}
            </div>
            
            </table>
        </div>
    </div>
    
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    <script>
        function deleteLead(elem)
        {
            var lead_id = elem.closest('tr').attr('data-lead-id');
            var deleteLink = '{{ path('Lead_Delete', {'id':'lead_id'}) }}';
            deleteLink = deleteLink.replace('lead_id', lead_id);
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
                    url: '{{ path('crm.lead.societe.asynch-search') }}',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    }
                }
            });

            {% if app.request.query.get('societe') %}
                    var data = {
                        id: \"{{ app.request.query.get('societe') }}\",
                        text: '{{ app.request.query.get('societe')|e('js') }}'
                    };

                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#societe').append(newOption).trigger('change');

            {% endif  %}
            });

    </script>
{% endblock %}
", "lead/index.html.twig", "/var/www/templates/lead/index.html.twig");
    }
}
