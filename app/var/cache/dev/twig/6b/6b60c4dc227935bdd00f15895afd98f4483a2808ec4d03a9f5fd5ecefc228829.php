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

/* opca/create.html.twig */
class __TwigTemplate_c70d5813f92fae95514198333318d39896c35a3b8d70692fb09eba8bd8a91f56 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opca/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "opca/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "opca/create.html.twig", 1);
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

        echo "OPCO - CRM Aprentiv v2.0";
        
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
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home.index");
        echo "\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("OPCA_Controller");
        echo "\">Liste des OPCO</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <div class=\"page-content\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "session", [], "any", false, false, false, 21), "flashBag", [], "any", false, false, false, 21), "get", [0 => "error_message"], "method", false, false, false, 21));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 22
            echo "            <div class=\"note note-warnning\">
                <p>";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "flashBag", [], "any", false, false, false, 26), "get", [0 => "success_message"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 27
            echo "            <div class=\"note note-success\">
                <p>";
            // line 28
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
    <h2 class=\"text-center mt-2 text-nmary\">FICHE D'AJOUT OPCO</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 35, $this->source); })()), 'form_start', ["id" => "opca-create", "attr" => ["class" => "list-filter"]]);
        echo "
            <div class=\"col-sm-12\">
                <div class=\"row p-3\">
                    <div class=\"col-sm-9\">
                        <fieldset>
                            <legend class=\"font-weight-bold\">Informations OPCO</legend>
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <div class=\"form-group col-sm-6 text-center\">
                                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 44, $this->source); })()), "nomStr", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO"]);
        // line 46
        echo "
                                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 47, $this->source); })()), "nomStr", [], "any", false, false, false, 47), 'widget');
        echo "
                                    </div>
                                    <div class=\"form-group col-sm-6 text-center\">
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 50, $this->source); })()), "idSecteur", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Activité adhérents "]);
        // line 52
        echo "
                                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 54, $this->source); })()), "idSecteur", [], "any", false, false, false, 54), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 61, $this->source); })()), "adresses", [], "any", false, false, false, 61), "children", [], "any", false, false, false, 61), 0, [], "array", false, false, false, 61), "children", [], "any", false, false, false, 61), "adresse", [], "array", false, false, false, 61), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "N°,voie"]);
        // line 63
        echo "
                                        ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 64, $this->source); })()), "adresses", [], "any", false, false, false, 64), "children", [], "any", false, false, false, 64), 0, [], "array", false, false, false, 64), "children", [], "any", false, false, false, 64), "adresse", [], "array", false, false, false, 64), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-sm-4\">
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 67, $this->source); })()), "adresses", [], "any", false, false, false, 67), "children", [], "any", false, false, false, 67), 0, [], "array", false, false, false, 67), "children", [], "any", false, false, false, 67), "codePostal", [], "array", false, false, false, 67), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Code postale"]);
        // line 69
        echo "
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 70, $this->source); })()), "adresses", [], "any", false, false, false, 70), "children", [], "any", false, false, false, 70), 0, [], "array", false, false, false, 70), "children", [], "any", false, false, false, 70), "codePostal", [], "array", false, false, false, 70), 'widget');
        echo "
                                    </div>
                                    <div class=\"col-sm-4\">
                                        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 73, $this->source); })()), "adresses", [], "any", false, false, false, 73), "children", [], "any", false, false, false, 73), 0, [], "array", false, false, false, 73), "children", [], "any", false, false, false, 73), "idVille", [], "array", false, false, false, 73), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Ville"]);
        // line 75
        echo "
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 76, $this->source); })()), "adresses", [], "any", false, false, false, 76), "children", [], "any", false, false, false, 76), 0, [], "array", false, false, false, 76), "children", [], "any", false, false, false, 76), "idVille", [], "array", false, false, false, 76), 'widget');
        echo "
                                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 77, $this->source); })()), "adresses", [], "any", false, false, false, 77), "children", [], "any", false, false, false, 77), 0, [], "array", false, false, false, 77), "children", [], "any", false, false, false, 77), "idVille", [], "array", false, false, false, 77), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class=\"col-sm-3\">
                        <fieldset>
                            <legend class=\"font-weight-bold\">Note</legend>
                            <div class=\"col-sm-12\">
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 87, $this->source); })()), "commentaires", [], "any", false, false, false, 87), "children", [], "any", false, false, false, 87), 0, [], "array", false, false, false, 87), "children", [], "any", false, false, false, 87), "texteNote", [], "array", false, false, false, 87), 'widget', ["attr" => ["required" => false]]);
        echo "
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 mb-3 mt-3\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"col-sm-12\">
                            <fieldset>
                                <legend class=\"font-weight-bold\">Coordonnées OPCO</legend>
                                <div class=\"col-sm-12\">
                                    ";
        // line 108
        echo "                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6\">
                                            ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 110, $this->source); })()), "Telephone", [], "any", false, false, false, 110), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Telephone"]);
        // line 112
        echo "
                                            ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 113, $this->source); })()), "Telephone", [], "any", false, false, false, 113), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6\">
                                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 116, $this->source); })()), "Email", [], "any", false, false, false, 116), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 118
        echo "
                                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 119, $this->source); })()), "Email", [], "any", false, false, false, 119), 'widget');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6\">
                                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 124, $this->source); })()), "Fax", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
        // line 126
        echo "
                                            ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 127, $this->source); })()), "Fax", [], "any", false, false, false, 127), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6\">
                                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 130, $this->source); })()), "siteweb", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 132
        echo "
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <div class=\"input-group-text\">http://</div>
                                                </div>
                                                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 137, $this->source); })()), "siteweb", [], "any", false, false, false, 137), 'widget');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <fieldset>
                            <legend class=\"font-weight-bold\">Critères de financement</legend>
                            <a href=\"javascript:void(0)\" class=\"plus-link\" id=\"addInputsCritere\">
                                <span class=\"fa-stack fa-1x\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                            <table class=\"table\" id=\"critereTable\">
                                <tr>
                                    <th>Date</th>
                                    <th>Dispositif</th>
                                    <th>Commentaires</th>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <fieldset class=\"col-md-12\">
                        <legend>Contact</legend>
                        <a href=\"javascript:void(0)\" class=\"plus-link\" id=\"adcontact\">
                            <span class=\"fa-stack fa-1x\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>

                        <div class=\"col-sm-12 p-3 mb-3 well\" id=\"contactadded\" data-prototype=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 176, $this->source); })()), "contactsoc", [], "any", false, false, false, 176), "vars", [], "any", false, false, false, 176), "prototype", [], "any", false, false, false, 176), 'widget'), "html_attr");
        echo "\">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
                    </div>
                </div>
            </div>
            ";
        // line 188
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["opca_form"]) || array_key_exists("opca_form", $context) ? $context["opca_form"] : (function () { throw new RuntimeError('Variable "opca_form" does not exist.', 188, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
        </div>
    </div>
        
        
    ";
        // line 193
        $this->displayBlock('modal', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 194
        echo "        ";
        // line 195
        echo "        <div class=\"modal fade\" id=\"modalActiviteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"forselect\" id=\"forselect\" />
                        ";
        // line 206
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SecteurActiviteController::SecteurActiviteForm"));
        echo "
                    </div>
                </div>
            </div>
        </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 214
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 215
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    ";
        // line 222
        echo "    ";
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "opca/create.html.twig", 222)->display($context);
        // line 223
        echo "    
    <script>
        var \$collectioncontact;
        var boutonremovecontact = \"<button type='button' class='removecontactelement close' type='button'><span aria-hidden='true'>×</span></button>\";
        \$(document).ready(function () {
            \$collectioncontact = \$(\"#contactadded\");
            \$collectioncontact.data(\"index\", \$collectioncontact.find('.contact_added').length);
        })
        //
        \$(\"#adcontact\").click(function () {
            addnewcontact();
        });
        // Fonction pour l'ajout du formulaire d'ajout de contact dans la page client/prospect
        function addnewcontact()
        {
            var prototype = \$collectioncontact.data(\"prototype\");
            console.log(prototype);
            let index = \$collectioncontact.data(\"index\");
            let newform = prototype;
            newform = newform.replace(/__name__/g, index + 1);
            let row = '<div class=\"row contact_added\">';
            row = row + boutonremovecontact + newform;
            row = row + '</div>';
            \$collectioncontact.append(row);
            \$collectioncontact.data(\"index\", index + 1);
            \$(\".removecontactelement\").bind('click', function (event) {
                \$(this).parents(\".contact_added\").remove();
            });
        }
        //Adding field Critere de financement
        \$('#addInputsCritere').click(function (e) {
            e.preventDefault();
            createCritereForm();
        });
        function createCritereForm() {
            var elem = document.getElementById('critereTable');
            var lastIndex = \$('#critereTable tr').length;
            var index = Number(lastIndex) + 1;
            var currentRow = elem.insertRow(-1);
            var inputId = document.createElement('input');
            inputId.type = 'hidden';
            inputId.setAttribute('name', 'critere[' + index + '][id]');
            currentRow.appendChild(inputId);
            var date = document.createElement('input');
            date.type = 'text';
            date.setAttribute('name', 'critere[' + index + '][date]');
            date.setAttribute('class', 'js-datepicker form-control');
            date.setAttribute('placeholder', 'date');
            \$(date).datepicker({
                'format': 'dd-mm-yyyy',
                'autoclose': true,
                'clearBtn': true,
                'language': 'fr',
            });
            var dispositif = document.createElement('input');
            dispositif.type = 'text';
            dispositif.setAttribute('name', 'critere[' + index + '][dispositif]');
            dispositif.setAttribute('class', 'form-control');
            dispositif.setAttribute('placeholder', 'Dispositif');
            var commentaire = document.createElement('input');
            commentaire.type = 'text';
            commentaire.setAttribute('name', 'critere[' + index + '][commentaire]');
            commentaire.setAttribute('class', 'form-control');
            commentaire.setAttribute('placeholder', 'Commentaire');
            var close = document.createElement('a');
            close.type = 'button';
            close.setAttribute('value', 'x');
            close.setAttribute('class', 'btn btn-danger removeInputCritere');
            \$(close).bind('click', function () {
                \$(this).closest('tr').remove();
            })

            var currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(date);
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(dispositif);
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(commentaire);
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(close);
        }
        \$(\"#contact_adresses_0_idVille\").select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 309
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.ville.asynch-search");
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
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "opca/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  545 => 309,  457 => 223,  454 => 222,  444 => 215,  434 => 214,  418 => 206,  405 => 195,  403 => 194,  384 => 193,  376 => 188,  361 => 176,  319 => 137,  312 => 132,  310 => 130,  304 => 127,  301 => 126,  299 => 124,  291 => 119,  288 => 118,  286 => 116,  280 => 113,  277 => 112,  275 => 110,  271 => 108,  255 => 87,  242 => 77,  238 => 76,  235 => 75,  233 => 73,  227 => 70,  224 => 69,  222 => 67,  216 => 64,  213 => 63,  211 => 61,  201 => 54,  197 => 52,  195 => 50,  189 => 47,  186 => 46,  184 => 44,  172 => 35,  166 => 31,  157 => 28,  154 => 27,  149 => 26,  140 => 23,  137 => 22,  133 => 21,  124 => 15,  120 => 14,  116 => 12,  106 => 11,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}OPCO - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"{{ path('OPCA_Controller') }}\">Liste des OPCO</a></li>
            <li class=\"breadcrumb-item active\" aria-current=\"page\">Création</li>
        </ol>
    </nav>

    <div class=\"page-content\">
        {% for flash_message in app.session.flashBag.get('error_message') %}
            <div class=\"note note-warnning\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
        {% for flash_message in app.session.flashBag.get('success_message') %}
            <div class=\"note note-success\">
                <p>{{ flash_message }}</p>
            </div>
        {% endfor %}
    </div>
    <h2 class=\"text-center mt-2 text-nmary\">FICHE D'AJOUT OPCO</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ form_start(opca_form,{id : 'opca-create', 'attr':{'class':'list-filter'}}) }}
            <div class=\"col-sm-12\">
                <div class=\"row p-3\">
                    <div class=\"col-sm-9\">
                        <fieldset>
                            <legend class=\"font-weight-bold\">Informations OPCO</legend>
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <div class=\"form-group col-sm-6 text-center\">
                                        {{ form_label(opca_form.nomStr, 'OPCO', {
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(opca_form.nomStr) }}
                                    </div>
                                    <div class=\"form-group col-sm-6 text-center\">
                                        {{ form_label(opca_form.idSecteur, 'Activité adhérents ',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            {{ form_widget(opca_form.idSecteur) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-sm-12\">
                                <div class=\"row\">
                                    <div class=\"col-sm-4\">
                                        {{ form_label(opca_form.adresses.children[0].children[\"adresse\"], 'N°,voie',{
                                            'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                                        }) }}
                                        {{ form_widget(opca_form.adresses.children[0].children[\"adresse\"]) }}
                                    </div>
                                    <div class=\"col-sm-4\">
                                        {{ form_label(opca_form.adresses.children[0].children[\"codePostal\"], 'Code postale',{
                                            'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                        }) }}
                                        {{ form_widget(opca_form.adresses.children[0].children[\"codePostal\"]) }}
                                    </div>
                                    <div class=\"col-sm-4\">
                                        {{ form_label(opca_form.adresses.children[0].children[\"idVille\"], 'Ville',{
                                            'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                        }) }}
                                        {{ form_widget(opca_form.adresses.children[0].children[\"idVille\"]) }}
                                        {{ form_widget(opca_form.adresses.children[0].children[\"idVille\"]) }}
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class=\"col-sm-3\">
                        <fieldset>
                            <legend class=\"font-weight-bold\">Note</legend>
                            <div class=\"col-sm-12\">
                                {{ form_widget(opca_form.commentaires.children[0].children[\"texteNote\"],{'attr':{'required':false}}) }}
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 mb-3 mt-3\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <div class=\"col-sm-12\">
                            <fieldset>
                                <legend class=\"font-weight-bold\">Coordonnées OPCO</legend>
                                <div class=\"col-sm-12\">
                                    {#<div class=\"row justify-content-center\">
                                        <div class=\"col-sm-8\">
                                            {{ form_label(opca_form.adresses.children[0].children[\"comp_adresse\"], 'N°,voie,nom de la voie',{
                                            'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                                        }) }}
                                            {{ form_widget(opca_form.adresses.children[0].children[\"comp_adresse\"]) }}
                                        </div>
                                    </div>#}
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6\">
                                            {{ form_label(opca_form.Telephone, 'Telephone',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            {{ form_widget(opca_form.Telephone) }}
                                        </div>
                                        <div class=\"text-center col-sm-6\">
                                            {{ form_label(opca_form.Email, 'Email',{
                                            'label_attr': {'class': 'font-weight-bold text-center'}
                                        }) }}
                                            {{ form_widget(opca_form.Email) }}
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6\">
                                            {{ form_label(opca_form.Fax, 'Fax',{
                                            'label_attr': {'class': 'font-weight-bold text-center'}
                                        }) }}
                                            {{ form_widget(opca_form.Fax) }}
                                        </div>
                                        <div class=\"text-center col-sm-6\">
                                            {{ form_label(opca_form.siteweb, 'Site web:',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <div class=\"input-group-text\">http://</div>
                                                </div>
                                                {{ form_widget(opca_form.siteweb) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class=\"col-sm-6\">
                        <fieldset>
                            <legend class=\"font-weight-bold\">Critères de financement</legend>
                            <a href=\"javascript:void(0)\" class=\"plus-link\" id=\"addInputsCritere\">
                                <span class=\"fa-stack fa-1x\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                            <table class=\"table\" id=\"critereTable\">
                                <tr>
                                    <th>Date</th>
                                    <th>Dispositif</th>
                                    <th>Commentaires</th>
                                </tr>
                            </table>
                        </fieldset>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12\">
                <div class=\"row\">
                    <fieldset class=\"col-md-12\">
                        <legend>Contact</legend>
                        <a href=\"javascript:void(0)\" class=\"plus-link\" id=\"adcontact\">
                            <span class=\"fa-stack fa-1x\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>

                        <div class=\"col-sm-12 p-3 mb-3 well\" id=\"contactadded\" data-prototype=\"{{ form_widget(opca_form.contactsoc.vars.prototype)|e('html_attr') }}\">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
                    </div>
                </div>
            </div>
            {{ form_end(opca_form,{'render_rest': false}) }}
        </div>
    </div>
        
        
    {% block modal %}
        {# APR-167 : Fix champ Activité adhérents #}
        <div class=\"modal fade\" id=\"modalActiviteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Fermer\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        <input type=\"hidden\" name=\"forselect\" id=\"forselect\" />
                        {{ render(controller('App\\\\Controller\\\\SecteurActiviteController::SecteurActiviteForm')) }}
                    </div>
                </div>
            </div>
        </div>
    {% endblock %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    {# APR-167 : Fix bug : activité adhérents #}
    {% include 'contact/Parts/contact.js.html.twig' %}
    
    <script>
        var \$collectioncontact;
        var boutonremovecontact = \"<button type='button' class='removecontactelement close' type='button'><span aria-hidden='true'>×</span></button>\";
        \$(document).ready(function () {
            \$collectioncontact = \$(\"#contactadded\");
            \$collectioncontact.data(\"index\", \$collectioncontact.find('.contact_added').length);
        })
        //
        \$(\"#adcontact\").click(function () {
            addnewcontact();
        });
        // Fonction pour l'ajout du formulaire d'ajout de contact dans la page client/prospect
        function addnewcontact()
        {
            var prototype = \$collectioncontact.data(\"prototype\");
            console.log(prototype);
            let index = \$collectioncontact.data(\"index\");
            let newform = prototype;
            newform = newform.replace(/__name__/g, index + 1);
            let row = '<div class=\"row contact_added\">';
            row = row + boutonremovecontact + newform;
            row = row + '</div>';
            \$collectioncontact.append(row);
            \$collectioncontact.data(\"index\", index + 1);
            \$(\".removecontactelement\").bind('click', function (event) {
                \$(this).parents(\".contact_added\").remove();
            });
        }
        //Adding field Critere de financement
        \$('#addInputsCritere').click(function (e) {
            e.preventDefault();
            createCritereForm();
        });
        function createCritereForm() {
            var elem = document.getElementById('critereTable');
            var lastIndex = \$('#critereTable tr').length;
            var index = Number(lastIndex) + 1;
            var currentRow = elem.insertRow(-1);
            var inputId = document.createElement('input');
            inputId.type = 'hidden';
            inputId.setAttribute('name', 'critere[' + index + '][id]');
            currentRow.appendChild(inputId);
            var date = document.createElement('input');
            date.type = 'text';
            date.setAttribute('name', 'critere[' + index + '][date]');
            date.setAttribute('class', 'js-datepicker form-control');
            date.setAttribute('placeholder', 'date');
            \$(date).datepicker({
                'format': 'dd-mm-yyyy',
                'autoclose': true,
                'clearBtn': true,
                'language': 'fr',
            });
            var dispositif = document.createElement('input');
            dispositif.type = 'text';
            dispositif.setAttribute('name', 'critere[' + index + '][dispositif]');
            dispositif.setAttribute('class', 'form-control');
            dispositif.setAttribute('placeholder', 'Dispositif');
            var commentaire = document.createElement('input');
            commentaire.type = 'text';
            commentaire.setAttribute('name', 'critere[' + index + '][commentaire]');
            commentaire.setAttribute('class', 'form-control');
            commentaire.setAttribute('placeholder', 'Commentaire');
            var close = document.createElement('a');
            close.type = 'button';
            close.setAttribute('value', 'x');
            close.setAttribute('class', 'btn btn-danger removeInputCritere');
            \$(close).bind('click', function () {
                \$(this).closest('tr').remove();
            })

            var currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(date);
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(dispositif);
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(commentaire);
            currentCell = currentRow.insertCell(-1);
            currentCell.appendChild(close);
        }
        \$(\"#contact_adresses_0_idVille\").select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.opca.ville.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
    </script>
{% endblock %}", "opca/create.html.twig", "/home/jeremy/Bureau/project/app/templates/opca/create.html.twig");
    }
}
