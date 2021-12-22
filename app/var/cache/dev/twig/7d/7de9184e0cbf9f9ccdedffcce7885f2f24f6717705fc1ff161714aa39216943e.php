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

/* formation/create.formation.html.twig */
class __TwigTemplate_29fe4443181b2b44218156b4e1a6bfc606e66dfc8fdf527d4f167872a21ccbdc extends \Twig\Template
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
            'commentaires' => [$this, 'block_commentaires'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/create.formation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/create.formation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "formation/create.formation.html.twig", 1);
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

        echo "Création formation - CRM Aprentiv v2.0";
        
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
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
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\">
                    <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formation_Mise_Place_Controller");
        echo "\">Formations</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails formation</li>
            </ol>
        </div>
    </nav>
    <h2 class=\"text-center mt-2 text-primary\">CREATION FORMATION ";
        // line 23
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->extensions['App\Twig\AppExtension']->translateLetterToWord((isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 23, $this->source); })()))), "html", null, true);
        echo "</h2>

    ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            echo "        <div class=\"alert alert-success\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    <div class=\"col-sm-12\">
        ";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 32, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
        <div class=\"row well\">
            ";
        // line 34
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 34, $this->source); })())) || ("S" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 34, $this->source); })())))) {
            // line 35
            echo "                <div class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        ";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 37, $this->source); })()), "idClient", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société"]);
            // line 39
            echo "
                        ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 40, $this->source); })()), "idClient", [], "any", false, false, false, 40), 'widget');
            echo "
                    </div>
                </div>
            ";
        }
        // line 44
        echo "            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 46, $this->source); })()), "idStructure", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Structure"]);
        // line 48
        echo "
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 49, $this->source); })()), "idStructure", [], "any", false, false, false, 49), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 54, $this->source); })()), "ref", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° OM"]);
        // line 56
        echo "
                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 57, $this->source); })()), "ref", [], "any", false, false, false, 57), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 62, $this->source); })()), "dateAccord", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date OM"]);
        // line 64
        echo "
                    ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 65, $this->source); })()), "dateAccord", [], "any", false, false, false, 65), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 70, $this->source); })()), "dossierType", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Type"]);
        // line 72
        echo "
                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 73, $this->source); })()), "dossierType", [], "any", false, false, false, 73), 'widget');
        echo "
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 78, $this->source); })()), "idStatut", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Statut OM"]);
        // line 80
        echo "
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 81, $this->source); })()), "idStatut", [], "any", false, false, false, 81), 'widget');
        echo "
                </div>
            </div>
        </div>
        <br>
        <div class=\"row well\">
            <div class=\"col-sm-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group text-center\">
                                    <label class=\"font-weight-bold\">Lieu de stage</label>
                                    <nav class=\"nav nav-tabs\">
                                        ";
        // line 95
        $context["address_vivienne"] = twig_constant("App\\Constants\\AddressFormation::VIVIENNE_ADDRESS");
        // line 96
        echo "                                        ";
        $context["address_societe"] = (((isset($context["address_societe"]) || array_key_exists("address_societe", $context))) ? ((isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 96, $this->source); })())) : (""));
        // line 97
        echo "                                        ";
        if (("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 97, $this->source); })()))) {
            // line 98
            echo "                                            <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                            <a class=\"nav-item nav-link\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        ";
        } elseif (("R" ==         // line 101
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 101, $this->source); })()))) {
            // line 102
            echo "                                            <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                        ";
        } elseif (("S" ==         // line 103
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 103, $this->source); })()))) {
            // line 104
            echo "                                            <a class=\"nav-item nav-link\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        ";
        }
        // line 107
        echo "                                    </nav>
                                    <div class=\"tab-content\">
                                        ";
        // line 109
        $context["address_vivienne"] = twig_constant("App\\Constants\\AddressFormation::VIVIENNE_ADDRESS");
        // line 110
        echo "                                        ";
        if (("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 110, $this->source); })()))) {
            // line 111
            echo "                                            <div class=\"tab-pane active\" id=\"p1\">
                                                ";
            // line 112
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 112, $this->source); })()), "lieu", [], "any", false, false, false, 112), 'widget', ["attr" => ["placeholder" =>             // line 113
(isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 113, $this->source); })()), "value" =>             // line 114
(isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 114, $this->source); })())]]);
            // line 117
            echo "
                                            </div>
                                            <div class=\"tab-pane\" id=\"p2\"></div>
                                            <div class=\"tab-pane\" id=\"p3\"></div>
                                        ";
        } elseif (("R" ==         // line 121
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 121, $this->source); })()))) {
            // line 122
            echo "                                            <div class=\"tab-pane active\" id=\"p1\">
                                                <div class=\"tab-pane\" id=\"p1\">
                                                    ";
            // line 124
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 124, $this->source); })()), "lieu", [], "any", false, false, false, 124), 'widget', ["attr" => ["placeholder" =>             // line 125
(isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 125, $this->source); })()), "value" =>             // line 126
(isset($context["address_vivienne"]) || array_key_exists("address_vivienne", $context) ? $context["address_vivienne"] : (function () { throw new RuntimeError('Variable "address_vivienne" does not exist.', 126, $this->source); })())]]);
            // line 129
            echo "
                                                </div>
                                            </div>
                                        ";
        } elseif (("S" ==         // line 132
(isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 132, $this->source); })()))) {
            // line 133
            echo "                                            <div class=\"tab-pane active\" id=\"p2\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"";
            // line 134
            echo twig_escape_filter($this->env, (isset($context["address_societe"]) || array_key_exists("address_societe", $context) ? $context["address_societe"] : (function () { throw new RuntimeError('Variable "address_societe" does not exist.', 134, $this->source); })()), "html", null, true);
            echo "\">
                                            </div>
                                            <div class=\"tab-pane\" id=\"p3\">
                                                ";
            // line 137
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 137, $this->source); })()), "lieu", [], "any", false, false, false, 137), 'widget');
            echo "
                                            </div>
                                        ";
        }
        // line 140
        echo "                                        <input type=\"hidden\" id=\"address_client\" value=\"\">
                                    </div>
                                </div>
                                ";
        // line 143
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 143, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 143, $this->source); })())))) {
            // line 144
            echo "                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                ";
            // line 147
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 147, $this->source); })()), "dureeJours", [], "any", false, false, false, 147), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Durée stage en J"]);
            // line 149
            echo "
                                                ";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 150, $this->source); })()), "dureeJours", [], "any", false, false, false, 150), 'widget');
            echo "
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            ";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 154, $this->source); })()), "dureeHeures", [], "any", false, false, false, 154), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Durée stage en H"]);
            // line 156
            echo "
                                            ";
            // line 157
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 157, $this->source); })()), "dureeHeures", [], "any", false, false, false, 157), 'widget');
            echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                ";
            // line 163
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 163, $this->source); })()), "dureeHeures", [], "any", false, false, false, 163), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Du"]);
            // line 165
            echo "
                                                ";
            // line 166
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 166, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 166), 'widget');
            echo "
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                ";
            // line 171
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 171, $this->source); })()), "dureeHeures", [], "any", false, false, false, 171), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Au"]);
            // line 173
            echo "
                                                ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 174, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 174), 'widget');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 179
        echo "                            </div>
                            <div class=\"col-sm-6\">
                                ";
        // line 181
        if (("S" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 181, $this->source); })()))) {
            // line 182
            echo "                                    <div class=\"form-group text-center\">
                                        ";
            // line 183
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 183, $this->source); })()), "soustraitance", [], "any", false, false, false, 183), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Sous-traitant"]);
            // line 185
            echo "
                                        ";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 186, $this->source); })()), "soustraitance", [], "any", false, false, false, 186), 'widget');
            echo "
                                    </div>
                                ";
        }
        // line 189
        echo "
                                ";
        // line 190
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 190, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 190, $this->source); })())))) {
            // line 191
            echo "                                    <div class=\"form-group text-center\">
                                        ";
            // line 192
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 192, $this->source); })()), "idFormateur", [], "any", false, false, false, 192), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Formateur"]);
            // line 194
            echo "
                                        ";
            // line 195
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 195, $this->source); })()), "idFormateur", [], "any", false, false, false, 195), 'widget');
            echo "
                                    </div>
                                ";
        }
        // line 198
        echo "                                <div class=\"form-group text-center\">
                                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 199, $this->source); })()), "nom", [], "any", false, false, false, 199), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Intitulé du stage"]);
        // line 201
        echo "
                                    ";
        // line 202
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 202, $this->source); })()), "nom", [], "any", false, false, false, 202), 'widget');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 208
        if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 208, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 208, $this->source); })())))) {
            // line 209
            echo "                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            ";
            // line 211
            $this->loadTemplate("Common/stagiaire-bloc.html.twig", "formation/create.formation.html.twig", 211)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 211, $this->source); })()), "stagiaires", [], "any", false, false, false, 211), "vars", [], "any", false, false, false, 211), "prototype", [], "any", false, false, false, 211), "stagiaires" => twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 211, $this->source); })()), "stagiaires", [], "any", false, false, false, 211)]));
            // line 212
            echo "                            ";
            twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 212, $this->source); })()), "stagiaires", [], "any", false, false, false, 212), "setRendered", [], "any", false, false, false, 212);
            // line 213
            echo "                        </div>
                    </div>
                ";
        }
        // line 216
        echo "            </div>
            <div class=\"col-sm-4\">
                ";
        // line 218
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 219
            echo "                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Prix vente HT</div>
                                <div class=\"card-body\">
                                    ";
            // line 224
            if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 224, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 224, $this->source); })())))) {
                // line 225
                echo "                                        <div class=\"form-group\">
                                            ";
                // line 226
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 226, $this->source); })()), "pvTarifJ", [], "any", false, false, false, 226), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par J"]);
                // line 228
                echo "
                                            ";
                // line 229
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 229, $this->source); })()), "pvTarifJ", [], "any", false, false, false, 229), 'widget');
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 232
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 232, $this->source); })()), "pvTarifDj", [], "any", false, false, false, 232), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par 1/2 J"]);
                // line 234
                echo "
                                            ";
                // line 235
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 235, $this->source); })()), "pvTarifDj", [], "any", false, false, false, 235), 'widget');
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 238
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 238, $this->source); })()), "pvTarifH", [], "any", false, false, false, 238), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par H"]);
                // line 240
                echo "
                                            ";
                // line 241
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 241, $this->source); })()), "pvTarifH", [], "any", false, false, false, 241), 'widget');
                echo "
                                        </div>
                                    ";
            }
            // line 244
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 245
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 245, $this->source); })()), "pvTotalHt", [], "any", false, false, false, 245), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Total HT"]);
            // line 247
            echo "
                                        ";
            // line 248
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 248, $this->source); })()), "pvTotalHt", [], "any", false, false, false, 248), 'widget');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Coût formateur HT</div>
                                <div class=\"card-body\">
                                    ";
            // line 257
            if ((("A" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 257, $this->source); })())) || ("R" == (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 257, $this->source); })())))) {
                // line 258
                echo "                                        <div class=\"form-group\">
                                            ";
                // line 259
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 259, $this->source); })()), "pfmteurJ", [], "any", false, false, false, 259), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par J"]);
                // line 261
                echo "
                                            ";
                // line 262
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 262, $this->source); })()), "pfmteurJ", [], "any", false, false, false, 262), 'widget');
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 265
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 265, $this->source); })()), "pfmteurDj", [], "any", false, false, false, 265), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par 1/2 J"]);
                // line 267
                echo "
                                            ";
                // line 268
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 268, $this->source); })()), "pfmteurDj", [], "any", false, false, false, 268), 'widget');
                echo "
                                        </div>
                                        <div class=\"form-group\">
                                            ";
                // line 271
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 271, $this->source); })()), "pfmteurH", [], "any", false, false, false, 271), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Tarif par H"]);
                // line 273
                echo "
                                            ";
                // line 274
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 274, $this->source); })()), "pfmteurH", [], "any", false, false, false, 274), 'widget');
                echo "
                                        </div>
                                    ";
            }
            // line 277
            echo "                                    <div class=\"form-group\">
                                        ";
            // line 278
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 278, $this->source); })()), "pfmteurTotalHt", [], "any", false, false, false, 278), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Total HT"]);
            // line 280
            echo "
                                        ";
            // line 281
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 281, $this->source); })()), "pfmteurTotalHt", [], "any", false, false, false, 281), 'widget');
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 text-center\">
                            <p>Marge brute: <span  id=\"marge_brute\"></span></p>
                        </div>
                    </div>
                ";
        }
        // line 293
        echo "            </div>
        </div>
        <br>
        <div class=\"row\">
            <fieldset>
                <legend>ORDRES DE MISSION</legend>
                ";
        // line 299
        $this->loadTemplate("formation/childs/suiviom-bloc.html.twig", "formation/create.formation.html.twig", 299)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 299, $this->source); })()), "suiviMissions", [], "any", false, false, false, 299), "vars", [], "any", false, false, false, 299), "prototype", [], "any", false, false, false, 299), "suiviMissions" => twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 299, $this->source); })()), "suiviMissions", [], "any", false, false, false, 299)]));
        // line 300
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 300, $this->source); })()), "suiviMissions", [], "any", false, false, false, 300), "setRendered", [], "any", false, false, false, 300);
        // line 301
        echo "            </fieldset>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    ";
        // line 306
        $this->displayBlock('commentaires', $context, $blocks);
        // line 310
        echo "                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"text-center\">
                    <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                </p>
            </div>
        </div>
        ";
        // line 320
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 320, $this->source); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 306
    public function block_commentaires($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaires"));

        // line 307
        echo "                        ";
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "formation/create.formation.html.twig", 307)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 307, $this->source); })()), "commentaires", [], "any", false, false, false, 307), "vars", [], "any", false, false, false, 307), "prototype", [], "any", false, false, false, 307), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 307, $this->source); })()), "commentaires", [], "any", false, false, false, 307)]));
        // line 308
        echo "                        ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formation_form"]) || array_key_exists("formation_form", $context) ? $context["formation_form"] : (function () { throw new RuntimeError('Variable "formation_form" does not exist.', 308, $this->source); })()), "commentaires", [], "any", false, false, false, 308), "setRendered", [], "any", false, false, false, 308);
        // line 309
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 324
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 325
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    ";
        // line 329
        echo twig_include($this->env, $context, "formation/childs/formation.js.twig");
        echo "
    ";
        // line 330
        echo twig_include($this->env, $context, "Common/commentaire-js.html.twig");
        echo "
    ";
        // line 331
        echo twig_include($this->env, $context, "Common/stagiaire-js.html.twig");
        echo "
    ";
        // line 332
        echo twig_include($this->env, $context, "formation/childs/suiviom-js.twig");
        echo "
    ";
        // line 333
        $this->loadTemplate("formation/childs/calcul.vente.achat.js.html.twig", "formation/create.formation.html.twig", 333)->display(twig_array_merge($context, ["typeFormation" => (isset($context["type_formation"]) || array_key_exists("type_formation", $context) ? $context["type_formation"] : (function () { throw new RuntimeError('Variable "type_formation" does not exist.', 333, $this->source); })())]));
        // line 334
        echo "    <script>
        \$(document).ready(function () {
            var pathurl = '";
        // line 336
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.competence.asynch-search");
        echo "';
            var dossierNom = \$('#formation_nom');
            dossierNom.select2({
                placeholder: \"-- Intitulé --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: pathurl,
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        var dataResults = data.results !== undefined ? data.results : [];
                        return {
                            results: \$.map(dataResults, function (item) {
                                return {
                                    text: item.text,
                                    id: item.idid
                                };
                            })
                        };
                    }
                }
            });
        });
          const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"formation_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#formation_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "formation/create.formation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  722 => 336,  718 => 334,  716 => 333,  712 => 332,  708 => 331,  704 => 330,  700 => 329,  692 => 325,  682 => 324,  672 => 309,  669 => 308,  666 => 307,  656 => 306,  642 => 320,  630 => 310,  628 => 306,  621 => 301,  618 => 300,  616 => 299,  608 => 293,  593 => 281,  590 => 280,  588 => 278,  585 => 277,  579 => 274,  576 => 273,  574 => 271,  568 => 268,  565 => 267,  563 => 265,  557 => 262,  554 => 261,  552 => 259,  549 => 258,  547 => 257,  535 => 248,  532 => 247,  530 => 245,  527 => 244,  521 => 241,  518 => 240,  516 => 238,  510 => 235,  507 => 234,  505 => 232,  499 => 229,  496 => 228,  494 => 226,  491 => 225,  489 => 224,  482 => 219,  480 => 218,  476 => 216,  471 => 213,  468 => 212,  466 => 211,  462 => 209,  460 => 208,  451 => 202,  448 => 201,  446 => 199,  443 => 198,  437 => 195,  434 => 194,  432 => 192,  429 => 191,  427 => 190,  424 => 189,  418 => 186,  415 => 185,  413 => 183,  410 => 182,  408 => 181,  404 => 179,  396 => 174,  393 => 173,  391 => 171,  383 => 166,  380 => 165,  378 => 163,  369 => 157,  366 => 156,  364 => 154,  357 => 150,  354 => 149,  352 => 147,  347 => 144,  345 => 143,  340 => 140,  334 => 137,  328 => 134,  325 => 133,  323 => 132,  318 => 129,  316 => 126,  315 => 125,  314 => 124,  310 => 122,  308 => 121,  302 => 117,  300 => 114,  299 => 113,  298 => 112,  295 => 111,  292 => 110,  290 => 109,  286 => 107,  281 => 104,  279 => 103,  276 => 102,  274 => 101,  269 => 98,  266 => 97,  263 => 96,  261 => 95,  244 => 81,  241 => 80,  239 => 78,  231 => 73,  228 => 72,  226 => 70,  218 => 65,  215 => 64,  213 => 62,  205 => 57,  202 => 56,  200 => 54,  192 => 49,  189 => 48,  187 => 46,  183 => 44,  176 => 40,  173 => 39,  171 => 37,  167 => 35,  165 => 34,  160 => 32,  156 => 30,  147 => 27,  144 => 26,  140 => 25,  135 => 23,  126 => 17,  121 => 15,  116 => 12,  106 => 11,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Création formation - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <div class=\"d-flex justify-content-between breadcrumb\">
            <ol class=\"list-unstyled d-flex my-0\">
                <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
                <li class=\"breadcrumb-item\">
                    <a href=\"{{ path('Liste_Formation_Mise_Place_Controller') }}\">Formations</a>
                </li>
                <li class=\"breadcrumb-item active\" aria-current=\"page\">Détails formation</li>
            </ol>
        </div>
    </nav>
    <h2 class=\"text-center mt-2 text-primary\">CREATION FORMATION {{ type_formation|translateLetterToWord|upper }}</h2>

    {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"col-sm-12\">
        {{ form_start(formation_form,{'attr':{'class':'list-filter'}}) }}
        <div class=\"row well\">
            {% if 'A' == (type_formation) or 'S' == (type_formation) %}
                <div class=\"col-sm\">
                    <div class=\"form-group text-center\">
                        {{ form_label(formation_form.idClient, 'Société', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                        {{ form_widget(formation_form.idClient) }}
                    </div>
                </div>
            {% endif %}
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.idStructure, 'Structure', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.idStructure) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.ref, 'N° OM', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.ref) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.dateAccord, 'Date OM', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.dateAccord) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.dossierType, 'Type', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.dossierType) }}
                </div>
            </div>
            <div class=\"col-sm\">
                <div class=\"form-group text-center\">
                    {{ form_label(formation_form.idStatut, 'Statut OM', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
                    {{ form_widget(formation_form.idStatut) }}
                </div>
            </div>
        </div>
        <br>
        <div class=\"row well\">
            <div class=\"col-sm-8\">
                <div class=\"row\">
                    <div class=\"col-sm-12\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"form-group text-center\">
                                    <label class=\"font-weight-bold\">Lieu de stage</label>
                                    <nav class=\"nav nav-tabs\">
                                        {% set address_vivienne = constant('App\\\\Constants\\\\AddressFormation::VIVIENNE_ADDRESS') %}
                                        {% set address_societe = (address_societe is defined)? address_societe : '' %}
                                        {% if 'A' == type_formation %}
                                            <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                            <a class=\"nav-item nav-link\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        {% elseif 'R' == type_formation %}
                                            <a class=\"nav-item nav-link active\" href=\"#p1\" data-toggle=\"tab\">Vivienne</a>
                                        {% elseif 'S' == type_formation %}
                                            <a class=\"nav-item nav-link\" href=\"#p2\" data-toggle=\"tab\">Client</a>
                                            <a class=\"nav-item nav-link\" href=\"#p3\" data-toggle=\"tab\">Autre</a>
                                        {% endif %}
                                    </nav>
                                    <div class=\"tab-content\">
                                        {% set address_vivienne = constant('App\\\\Constants\\\\AddressFormation::VIVIENNE_ADDRESS') %}
                                        {% if 'A' == type_formation %}
                                            <div class=\"tab-pane active\" id=\"p1\">
                                                {{ form_widget(formation_form.lieu, { 'attr': {
                                                            'placeholder': address_vivienne ,
                                                            'value': address_vivienne ,
                                                        }
                                                    })
                                                }}
                                            </div>
                                            <div class=\"tab-pane\" id=\"p2\"></div>
                                            <div class=\"tab-pane\" id=\"p3\"></div>
                                        {% elseif 'R' == type_formation %}
                                            <div class=\"tab-pane active\" id=\"p1\">
                                                <div class=\"tab-pane\" id=\"p1\">
                                                    {{ form_widget(formation_form.lieu, { 'attr': {
                                                            'placeholder': address_vivienne ,
                                                            'value': address_vivienne ,
                                                        }
                                                        })
                                                    }}
                                                </div>
                                            </div>
                                        {% elseif 'S' == type_formation %}
                                            <div class=\"tab-pane active\" id=\"p2\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"{{ address_societe }}\">
                                            </div>
                                            <div class=\"tab-pane\" id=\"p3\">
                                                {{ form_widget(formation_form.lieu)}}
                                            </div>
                                        {% endif %}
                                        <input type=\"hidden\" id=\"address_client\" value=\"\">
                                    </div>
                                </div>
                                {% if 'A' == type_formation or 'R' == type_formation %}
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                {{ form_label(formation_form.dureeJours, 'Durée stage en J', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                                {{ form_widget(formation_form.dureeJours) }}
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            {{ form_label(formation_form.dureeHeures, 'Durée stage en H', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(formation_form.dureeHeures) }}
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                {{ form_label(formation_form.dureeHeures, 'Du', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                                {{ form_widget(formation_form.dateDebutPeriode) }}
                                            </div>
                                        </div>
                                        <div class=\"col-sm-6\">
                                            <div class=\"form-group text-center\">
                                                {{ form_label(formation_form.dureeHeures, 'Au', {
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                                {{ form_widget(formation_form.dateFinPeriode) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                            <div class=\"col-sm-6\">
                                {% if 'S' == type_formation %}
                                    <div class=\"form-group text-center\">
                                        {{ form_label(formation_form.soustraitance, 'Sous-traitant', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formation_form.soustraitance) }}
                                    </div>
                                {% endif %}

                                {% if 'A' == type_formation or 'R' == type_formation %}
                                    <div class=\"form-group text-center\">
                                        {{ form_label(formation_form.idFormateur, 'Formateur', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                        {{ form_widget(formation_form.idFormateur) }}
                                    </div>
                                {% endif %}
                                <div class=\"form-group text-center\">
                                    {{ form_label(formation_form.nom, 'Intitulé du stage', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(formation_form.nom) }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {% if 'A' == type_formation or 'R' == type_formation %}
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            {% include 'Common/stagiaire-bloc.html.twig' with { prototype: formation_form.stagiaires.vars.prototype, stagiaires: formation_form.stagiaires } %}
                            {% do formation_form.stagiaires.setRendered %}
                        </div>
                    </div>
                {% endif %}
            </div>
            <div class=\"col-sm-4\">
                {% if is_granted('ROLE_ADMIN') %}
                    <div class=\"row\">
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Prix vente HT</div>
                                <div class=\"card-body\">
                                    {% if 'A' == type_formation or 'R' == type_formation %}
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pvTarifJ, 'Tarif par J', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(formation_form.pvTarifJ) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pvTarifDj, 'Tarif par 1/2 J', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(formation_form.pvTarifDj) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pvTarifH, 'Tarif par H', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(formation_form.pvTarifH) }}
                                        </div>
                                    {% endif %}
                                    <div class=\"form-group\">
                                        {{ form_label(formation_form.pvTotalHt, 'Total HT', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formation_form.pvTotalHt) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-sm-6\">
                            <div class=\"card\">
                                <div class=\"card-header font-weight-bold\">Coût formateur HT</div>
                                <div class=\"card-body\">
                                    {% if 'A' == type_formation or 'R' == type_formation %}
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pfmteurJ, 'Tarif par J', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(formation_form.pfmteurJ) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pfmteurDj, 'Tarif par 1/2 J', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(formation_form.pfmteurDj) }}
                                        </div>
                                        <div class=\"form-group\">
                                            {{ form_label(formation_form.pfmteurH, 'Tarif par H', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(formation_form.pfmteurH) }}
                                        </div>
                                    {% endif %}
                                    <div class=\"form-group\">
                                        {{ form_label(formation_form.pfmteurTotalHt, 'Total HT', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(formation_form.pfmteurTotalHt) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-sm-12 text-center\">
                            <p>Marge brute: <span  id=\"marge_brute\"></span></p>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        <br>
        <div class=\"row\">
            <fieldset>
                <legend>ORDRES DE MISSION</legend>
                {% include 'formation/childs/suiviom-bloc.html.twig' with { prototype: formation_form.suiviMissions.vars.prototype, suiviMissions : formation_form.suiviMissions } %}
                {% do formation_form.suiviMissions.setRendered %}
            </fieldset>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    {% block commentaires %}
                        {% include 'Common/commentaire-bloc.html.twig' with { prototype: formation_form.commentaires.vars.prototype, commentaires: formation_form.commentaires } %}
                        {% do formation_form.commentaires.setRendered %}
                    {% endblock %}
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <p class=\"text-center\">
                    <button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
                </p>
            </div>
        </div>
        {{ form_end(formation_form) }}

    </div>
{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    {{  include ('formation/childs/formation.js.twig') }}
    {{  include ('Common/commentaire-js.html.twig') }}
    {{  include ('Common/stagiaire-js.html.twig') }}
    {{  include ('formation/childs/suiviom-js.twig') }}
    {%   include 'formation/childs/calcul.vente.achat.js.html.twig' with {'typeFormation': type_formation}  %}
    <script>
        \$(document).ready(function () {
            var pathurl = '{{ path('crm.dossier.competence.asynch-search') }}';
            var dossierNom = \$('#formation_nom');
            dossierNom.select2({
                placeholder: \"-- Intitulé --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: pathurl,
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    processResults: function (data) {
                        var dataResults = data.results !== undefined ? data.results : [];
                        return {
                            results: \$.map(dataResults, function (item) {
                                return {
                                    text: item.text,
                                    id: item.idid
                                };
                            })
                        };
                    }
                }
            });
        });
          const date_spliter = (fakedate) => {
    let date = fakedate.split(\"/\");
    let real_date = new Date(`\${date[2]}-\${parseInt(date[1])}-\${parseInt(date[0])}`)
    return real_date;
}
let date_debut = document.getElementById(\"formation_dateDebutPeriode\")
let current_set_date = date_debut.value;

setInterval(()=>{
    if(current_set_date === date_debut.value){
        return;
    }else{
        current_set_date = date_debut.value;
        \$('#formation_dateFinPeriode').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
}).datepicker(\"update\",date_spliter(current_set_date)).datepicker('fill'); // setDate()
    }
},500)
    </script>

{% endblock %}", "formation/create.formation.html.twig", "/home/jeremy/Bureau/project/app/templates/formation/create.formation.html.twig");
    }
}
