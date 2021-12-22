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

/* contact/create.html.twig */
class __TwigTemplate_8e1f26da24d22850197031c37c7f982babe4999ba9181acd613a63dfc2080cbc extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/create.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/create.html.twig", 1);
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Client_Prospect_Controller");
        echo "\">Liste des clients / Prospects</a></li>
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
    <h2 class=\"text-center mt-2 text-nmary\">FICHE D'AJOUT DE CLIENT</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 35, $this->source); })()), 'form_start', ["attr" => ["class" => "list-filter"]]);
        echo "
            <div class=\"row\">
                <div class=\"col-sm-9 mt-3\">
                    <div class=\"col-sm-12\">
                        <fieldset>
                            <legend>Infos client</legend>
                            <div class=\"row\">
                                <div class=\"form-group col-md-3 text-center\">
                                    ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 43, $this->source); })()), "nomStr", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société"]);
        // line 45
        echo "
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 46, $this->source); })()), "nomStr", [], "any", false, false, false, 46), 'widget');
        echo "
                                </div>

                                <div class=\"form-group col-md-3 text-center\">
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 50, $this->source); })()), "idSecteur", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Activité entreprise"]);
        // line 52
        echo "
                                    <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 54, $this->source); })()), "idSecteur", [], "any", false, false, false, 54), 'widget');
        echo "
                                </div>
                                <div class=\"form-group col-md-3 text-center\">
                                    ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 57, $this->source); })()), "noSiret", [], "any", false, false, false, 57), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Siret entreprise"]);
        // line 59
        echo "
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 60, $this->source); })()), "noSiret", [], "any", false, false, false, 60), 'widget', ["attr" => ["pattern" => ".{14,14}", "class" => "siret_format"]]);
        echo "
                                </div>
                                <div class=\"form-group col-md-3 text-center\">
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 63, $this->source); })()), "noNaf", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "NAF entreprise"]);
        // line 65
        echo "
                                    ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 66, $this->source); })()), "noNaf", [], "any", false, false, false, 66), 'widget', ["attr" => ["pattern" => "[0-9]{4}[A-Za-z]{1}", "class" => "naf_format"]]);
        echo "
                                </div>
                                <div class=\"form-group col-md-2 text-center\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 69, $this->source); })()), "effectif", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nbr salariés"]);
        // line 71
        echo "
                                    ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 72, $this->source); })()), "effectif", [], "any", false, false, false, 72), 'widget');
        echo "
                                </div>
                                <div class=\"form-group col-md-3 text-center\">
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 75, $this->source); })()), "opca", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO1"]);
        // line 77
        echo "
                                    <!-- <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalopcaadd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a> -->
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 79, $this->source); })()), "opca", [], "any", false, false, false, 79), 'widget');
        echo "
                                </div>

                                <div class=\"form-group col-md-2 text-center\">
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 83, $this->source); })()), "noAdherent", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° Adhérent"]);
        // line 85
        echo "
                                    ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 86, $this->source); })()), "noAdherent", [], "any", false, false, false, 86), 'widget');
        echo "
                                </div>
                                <div class=\"col-sm-3 text-center\">
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 89, $this->source); })()), "id_commercial", [], "any", false, false, false, 89), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial"]);
        // line 91
        echo "
                                    ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 92, $this->source); })()), "id_commercial", [], "any", false, false, false, 92), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-2\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 95, $this->source); })()), "structure", [], "any", false, false, false, 95), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Entité"]);
        // line 97
        echo "
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 98, $this->source); })()), "structure", [], "any", false, false, false, 98), 'widget');
        echo "
                                </div>
                                ";
        // line 101
        echo "                                <div class=\"form-group col-md-10 text-center\">
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 102, $this->source); })()), "sexe", [], "any", false, false, false, 102), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Identifiants OPCO"]);
        // line 104
        echo "
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 105, $this->source); })()), "sexe", [], "any", false, false, false, 105), 'widget');
        echo "
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Infos TNS</legend>
                                <div class=\"row \">
                                    <div class=\"col-sm-3 form-group text-center\">
                                        ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 113, $this->source); })()), "siretTns", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Siret TNS / N° TI"]);
        // line 115
        echo "
                                        ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 116, $this->source); })()), "siretTns", [], "any", false, false, false, 116), 'widget', ["attr" => ["pattern" => ".{14,14}", "class" => "number-format", "class" => "siret_format"]]);
        echo "
                                    </div>
                                    <div class=\"col-sm-3 text-center\">
                                        ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 119, $this->source); })()), "nafTns", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "NAF TNS"]);
        // line 121
        echo "
                                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 122, $this->source); })()), "nafTns", [], "any", false, false, false, 122), 'widget', ["attr" => ["pattern" => "[0-9]{4}[A-Za-z]{1}", "class" => "naf_format"]]);
        echo "
                                    </div>
                                    <div class=\"col-sm-3 text-center\">
                                        ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 125, $this->source); })()), "activiteTns", [], "any", false, false, false, 125), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Activité TNS"]);
        // line 127
        echo "
                                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"tns\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                        ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 129, $this->source); })()), "activiteTns", [], "any", false, false, false, 129), 'widget');
        echo "
                                    </div>
                                    <div class=\"text-center col-md-3\">
                                        ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 132, $this->source); })()), "idOpcaTns", [], "any", false, false, false, 132), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO TNS"]);
        // line 134
        echo "
                                        ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 135, $this->source); })()), "idOpcaTns", [], "any", false, false, false, 135), 'widget');
        echo "
                                    </div>
                                </div>
                        </fieldset>

                        <fieldset>
                            <legend>ADRESSE</legend>
                            <a href=\"javascript:void(0)\" id=\"ajoutadresse\" class=\"row plus-link\" title=\"Ajouter une adresse\">
                            <span class=\"fa-stack fa-1x\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                            </span>
                            </a>
                            <div class=\"row p-3 mb-3\">
                                <div class=\"row\" id=\"contact_adresse\" data-prototype=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 149, $this->source); })()), "adresses", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "prototype", [], "any", false, false, false, 149), 'widget'), "html_attr");
        echo "\">
                                    <div class=\"row col-sm-12 pr-0 form_adresse\">
                                        <div class=\"col-sm-3\">
                                            ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 152, $this->source); })()), "adresses", [], "any", false, false, false, 152), "children", [], "any", false, false, false, 152), 0, [], "array", false, false, false, 152), "children", [], "any", false, false, false, 152), "adresse", [], "array", false, false, false, 152), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "N°,voie,nom de la voie"]);
        // line 154
        echo "
                                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 155, $this->source); })()), "adresses", [], "any", false, false, false, 155), "children", [], "any", false, false, false, 155), 0, [], "array", false, false, false, 155), "children", [], "any", false, false, false, 155), "adresse", [], "array", false, false, false, 155), 'widget');
        echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 158, $this->source); })()), "adresses", [], "any", false, false, false, 158), "children", [], "any", false, false, false, 158), 0, [], "array", false, false, false, 158), "children", [], "any", false, false, false, 158), "codePostal", [], "array", false, false, false, 158), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Code Postal"]);
        // line 160
        echo "
                                            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 161, $this->source); })()), "adresses", [], "any", false, false, false, 161), "children", [], "any", false, false, false, 161), 0, [], "array", false, false, false, 161), "children", [], "any", false, false, false, 161), "codePostal", [], "array", false, false, false, 161), 'widget');
        echo "
                                        </div>
                                        <div class=\"col-sm-2 text-center\">
                                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 164, $this->source); })()), "adresses", [], "any", false, false, false, 164), "children", [], "any", false, false, false, 164), 0, [], "array", false, false, false, 164), "children", [], "any", false, false, false, 164), "idVille", [], "array", false, false, false, 164), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Ville"]);
        // line 166
        echo " <a id=\"add-ville-link\" class=\"d-inline\" data-toggle=\"modal\" data-target=\"#modal-ville-add\" title=\"Ajouter une ville\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            ";
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 167, $this->source); })()), "adresses", [], "any", false, false, false, 167), "children", [], "any", false, false, false, 167), 0, [], "array", false, false, false, 167), "children", [], "any", false, false, false, 167), "idVille", [], "array", false, false, false, 167), 'widget', ["attr" => ["id" => "select_ville_0"]]);
        echo "
                                        </div>
                                        <div class=\"col-sm-1\" align=\"center\">
                                            ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 170, $this->source); })()), "adresses", [], "any", false, false, false, 170), "children", [], "any", false, false, false, 170), 0, [], "array", false, false, false, 170), "children", [], "any", false, false, false, 170), "principal", [], "array", false, false, false, 170), 'widget');
        echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 173, $this->source); })()), "adresses", [], "any", false, false, false, 173), "children", [], "any", false, false, false, 173), 0, [], "array", false, false, false, 173), "children", [], "any", false, false, false, 173), "type_adresse", [], "array", false, false, false, 173), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Type adresse"]);
        // line 175
        echo "
                                            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 176, $this->source); })()), "adresses", [], "any", false, false, false, 176), "children", [], "any", false, false, false, 176), 0, [], "array", false, false, false, 176), "children", [], "any", false, false, false, 176), "type_adresse", [], "array", false, false, false, 176), 'widget');
        echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
        // line 179
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 179, $this->source); })()), "adresses", [], "any", false, false, false, 179), "children", [], "any", false, false, false, 179), 0, [], "array", false, false, false, 179), "children", [], "any", false, false, false, 179), "comp_adresse", [], "array", false, false, false, 179), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Infos accès"]);
        // line 181
        echo "
                                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 182, $this->source); })()), "adresses", [], "any", false, false, false, 182), "children", [], "any", false, false, false, 182), 0, [], "array", false, false, false, 182), "children", [], "any", false, false, false, 182), "comp_adresse", [], "array", false, false, false, 182), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                </div>
                <div class=\"col-sm-3 mt-3\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-12 well2 pb-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 196, $this->source); })()), "id_type", [], "any", false, false, false, 196), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Client / Prospect"]);
        // line 198
        echo "
                                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 199, $this->source); })()), "id_type", [], "any", false, false, false, 199), 'widget');
        echo "
                                </div>
                                <div class=\"col-sm-12\">
                                    <label class=\"font-weight-bold text-center col-sm-12\">Sociétés liées</label>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 205, $this->source); })()), "societelie", [], "any", false, false, false, 205), "vars", [], "any", false, false, false, 205), "prototype", [], "any", false, false, false, 205), "idSociete1", [], "any", false, false, false, 205), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 207
        echo "
                                            ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 208, $this->source); })()), "societelie", [], "any", false, false, false, 208), "vars", [], "any", false, false, false, 208), "prototype", [], "any", false, false, false, 208), "idSociete1", [], "any", false, false, false, 208), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 211
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 211, $this->source); })()), "societelie", [], "any", false, false, false, 211), "vars", [], "any", false, false, false, 211), "prototype", [], "any", false, false, false, 211), "idSociete2", [], "any", false, false, false, 211), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 213
        echo "
                                            ";
        // line 214
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 214, $this->source); })()), "societelie", [], "any", false, false, false, 214), "vars", [], "any", false, false, false, 214), "prototype", [], "any", false, false, false, 214), "idSociete2", [], "any", false, false, false, 214), 'widget');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 219, $this->source); })()), "societelie", [], "any", false, false, false, 219), "vars", [], "any", false, false, false, 219), "prototype", [], "any", false, false, false, 219), "idSociete3", [], "any", false, false, false, 219), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 221
        echo "
                                            ";
        // line 222
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 222, $this->source); })()), "societelie", [], "any", false, false, false, 222), "vars", [], "any", false, false, false, 222), "prototype", [], "any", false, false, false, 222), "idSociete3", [], "any", false, false, false, 222), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 225
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 225, $this->source); })()), "societelie", [], "any", false, false, false, 225), "vars", [], "any", false, false, false, 225), "prototype", [], "any", false, false, false, 225), "idSociete4", [], "any", false, false, false, 225), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 227
        echo "
                                            ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 228, $this->source); })()), "societelie", [], "any", false, false, false, 228), "vars", [], "any", false, false, false, 228), "prototype", [], "any", false, false, false, 228), "idSociete4", [], "any", false, false, false, 228), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 233, $this->source); })()), "solde", [], "any", false, false, false, 233), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Solde Dispo"]);
        // line 235
        echo "
                                    ";
        // line 236
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 236, $this->source); })()), "solde", [], "any", false, false, false, 236), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 239, $this->source); })()), "soldeDate", [], "any", false, false, false, 239), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Au"]);
        // line 241
        echo "
                                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 242, $this->source); })()), "soldeDate", [], "any", false, false, false, 242), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 245, $this->source); })()), "siteweb", [], "any", false, false, false, 245), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 247
        echo "
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text\">http://</div>
                                        </div>
                                        ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 252, $this->source); })()), "siteweb", [], "any", false, false, false, 252), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <fieldset class=\"mx-3\">
                <legend>CONTACTS</legend>
                <a href=\"javascript:void(0)\" id=\"adcontact\" class=\"row plus-link d-inline-block\" title=\"Ajouter un nouveau contact\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                <div class=\"col-sm-12 p-3 mb-3\" id=\"contactadded\" data-prototype=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 268, $this->source); })()), "contactsoc", [], "any", false, false, false, 268), "vars", [], "any", false, false, false, 268), "prototype", [], "any", false, false, false, 268), 'widget'), "html_attr");
        echo "\">
                    <div class=\"row\">
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 271, $this->source); })()), "idCivilite", [], "any", false, false, false, 271), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
        // line 273
        echo "
                            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 274, $this->source); })()), "idCivilite", [], "any", false, false, false, 274), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 277, $this->source); })()), "nom", [], "any", false, false, false, 277), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 279
        echo "
                            ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 280, $this->source); })()), "nom", [], "any", false, false, false, 280), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 283, $this->source); })()), "prenom", [], "any", false, false, false, 283), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
        // line 285
        echo "
                            ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 286, $this->source); })()), "prenom", [], "any", false, false, false, 286), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 289
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 289, $this->source); })()), "qualite", [], "any", false, false, false, 289), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
        // line 291
        echo "
                            <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalQualiteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                            ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 293, $this->source); })()), "qualite", [], "any", false, false, false, 293), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1\">
                            ";
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 296, $this->source); })()), "qualite", [], "any", false, false, false, 296), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Interlocuteur"]);
        // line 298
        echo "
                            ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 299, $this->source); })()), "interlocuteur", [], "any", false, false, false, 299), 'widget');
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 302, $this->source); })()), "Telephone", [], "any", false, false, false, 302), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Téléphone"]);
        // line 304
        echo "
                            ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 305, $this->source); })()), "Telephone", [], "any", false, false, false, 305), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 308, $this->source); })()), "Portable", [], "any", false, false, false, 308), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Portable"]);
        // line 310
        echo "
                            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 311, $this->source); })()), "Portable", [], "any", false, false, false, 311), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 314, $this->source); })()), "Email", [], "any", false, false, false, 314), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 316
        echo "
                            ";
        // line 317
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 317, $this->source); })()), "Email", [], "any", false, false, false, 317), 'widget');
        echo "
                        </div>
                        <div class=\"text-center col-sm-1\">
                            ";
        // line 320
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 320, $this->source); })()), "Fax", [], "any", false, false, false, 320), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
        // line 322
        echo "
                            ";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 323, $this->source); })()), "Fax", [], "any", false, false, false, 323), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class=\"col-sm-12 p-3 m-3 well\">
                <legend>COMMENTAIRES</legend>
                <a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                <div class=\"col-sm-12 p-3 mt-3 well\">
                    <table class=\"table table-striped table-borderless col-sm-12 mt-3\">
                        <thead class=\"\">
                        <tr class=\"row\">
                            <th class=\"col-sm-2\">Date création</th>
                            <th class=\"col-sm-2\">Commentaires</th>
                            <th class=\"col-sm-2\">Action</th>
                            <th class=\"col-sm-2\">Date Action</th>
                            <th class=\"col-sm-2\">Qui</th>
                            <th class=\"col-sm-2\">Statut action</th>
                        </tr>
                        <tbody id=\"commentaires_collection\" data-prototype=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 348, $this->source); })()), "commentaires", [], "any", false, false, false, 348), "vars", [], "any", false, false, false, 348), "prototype", [], "any", false, false, false, 348), 'widget'), "html_attr");
        echo "\">

                        </tbody>
                        </thead>
                    </table>
                </div>
            </fieldset>

            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
                    </div>
                </div>
            </div>

            ";
        // line 364
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 364, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 369
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 370
        echo "    <div class=\"modal fade\" id=\"modalopcaadd\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header list-filter\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout OPCA</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 380
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ContactController::OpcaModalAdd"));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalActiviteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <input type=\"hidden\" name=\"forselect\" id=\"forselect\" />
                    ";
        // line 396
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SecteurActiviteController::SecteurActiviteForm"));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalQualiteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout Qualité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 411
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\QualiteController::QualiteFormAdd"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 417
        echo "    <div class=\"modal fade\" id=\"modal-ville-add\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajouter une nouvelle ville</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 427
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VilleController::create"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 435
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 436
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    ";
        // line 442
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "contact/create.html.twig", 442)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  826 => 442,  816 => 436,  806 => 435,  790 => 427,  778 => 417,  770 => 411,  752 => 396,  733 => 380,  721 => 370,  711 => 369,  697 => 364,  678 => 348,  650 => 323,  647 => 322,  645 => 320,  639 => 317,  636 => 316,  634 => 314,  628 => 311,  625 => 310,  623 => 308,  617 => 305,  614 => 304,  612 => 302,  606 => 299,  603 => 298,  601 => 296,  595 => 293,  591 => 291,  589 => 289,  583 => 286,  580 => 285,  578 => 283,  572 => 280,  569 => 279,  567 => 277,  561 => 274,  558 => 273,  556 => 271,  550 => 268,  531 => 252,  524 => 247,  522 => 245,  516 => 242,  513 => 241,  511 => 239,  505 => 236,  502 => 235,  500 => 233,  492 => 228,  489 => 227,  487 => 225,  481 => 222,  478 => 221,  476 => 219,  468 => 214,  465 => 213,  463 => 211,  457 => 208,  454 => 207,  452 => 205,  443 => 199,  440 => 198,  438 => 196,  421 => 182,  418 => 181,  416 => 179,  410 => 176,  407 => 175,  405 => 173,  399 => 170,  393 => 167,  390 => 166,  388 => 164,  382 => 161,  379 => 160,  377 => 158,  371 => 155,  368 => 154,  366 => 152,  360 => 149,  343 => 135,  340 => 134,  338 => 132,  332 => 129,  328 => 127,  326 => 125,  320 => 122,  317 => 121,  315 => 119,  309 => 116,  306 => 115,  304 => 113,  293 => 105,  290 => 104,  288 => 102,  285 => 101,  280 => 98,  277 => 97,  275 => 95,  269 => 92,  266 => 91,  264 => 89,  258 => 86,  255 => 85,  253 => 83,  246 => 79,  242 => 77,  240 => 75,  234 => 72,  231 => 71,  229 => 69,  223 => 66,  220 => 65,  218 => 63,  212 => 60,  209 => 59,  207 => 57,  201 => 54,  197 => 52,  195 => 50,  188 => 46,  185 => 45,  183 => 43,  172 => 35,  166 => 31,  157 => 28,  154 => 27,  149 => 26,  140 => 23,  137 => 22,  133 => 21,  124 => 15,  120 => 14,  116 => 12,  106 => 11,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Client/Prospect - CRM Aprentiv v2.0{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link href=\"https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
{% endblock %}

{% block body %}
    <nav aria-label=\"breadcrumb\">
        <ol class=\"breadcrumb\">
            <li class=\"breadcrumb-item\"><a href=\"{{ path('home.index') }}\"><i class=\"fas fa-home\"></i></a></li>
            <li class=\"breadcrumb-item active\"><a href=\"{{ path('Liste_Client_Prospect_Controller') }}\">Liste des clients / Prospects</a></li>
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
    <h2 class=\"text-center mt-2 text-nmary\">FICHE D'AJOUT DE CLIENT</h2>
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ form_start(contact_forme,{'attr':{'class':'list-filter'}}) }}
            <div class=\"row\">
                <div class=\"col-sm-9 mt-3\">
                    <div class=\"col-sm-12\">
                        <fieldset>
                            <legend>Infos client</legend>
                            <div class=\"row\">
                                <div class=\"form-group col-md-3 text-center\">
                                    {{ form_label(contact_forme.nomStr, 'Société', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.nomStr) }}
                                </div>

                                <div class=\"form-group col-md-3 text-center\">
                                    {{ form_label(contact_forme.idSecteur, 'Activité entreprise',{
                                        'label_attr': {'class': 'font-weight-bold required'}
                                    }) }}
                                    <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                    {{ form_widget(contact_forme.idSecteur) }}
                                </div>
                                <div class=\"form-group col-md-3 text-center\">
                                    {{ form_label(contact_forme.noSiret, 'Siret entreprise',{
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.noSiret,{'attr':{'pattern':'.{14,14}','class':'siret_format'}}) }}
                                </div>
                                <div class=\"form-group col-md-3 text-center\">
                                    {{ form_label(contact_forme.noNaf, 'NAF entreprise', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.noNaf,{'attr':{'pattern':'[0-9]{4}[A-Za-z]{1}','class':'naf_format'}}) }}
                                </div>
                                <div class=\"form-group col-md-2 text-center\">
                                    {{ form_label(contact_forme.effectif, 'Nbr salariés', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.effectif) }}
                                </div>
                                <div class=\"form-group col-md-3 text-center\">
                                    {{ form_label(contact_forme.opca, 'OPCO1',{
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    <!-- <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalopcaadd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a> -->
                                    {{ form_widget(contact_forme.opca) }}
                                </div>

                                <div class=\"form-group col-md-2 text-center\">
                                    {{ form_label(contact_forme.noAdherent, 'N° Adhérent',{
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.noAdherent) }}
                                </div>
                                <div class=\"col-sm-3 text-center\">
                                    {{ form_label(contact_forme.id_commercial, 'Commercial',{
                                        'label_attr': {'class': 'font-weight-bold required'}
                                    }) }}
                                    {{ form_widget(contact_forme.id_commercial) }}
                                </div>
                                <div class=\"text-center col-md-2\">
                                    {{ form_label(contact_forme.structure, 'Entité',{
                                        'label_attr': {'class': 'font-weight-bold required'}
                                    }) }}
                                    {{ form_widget(contact_forme.structure) }}
                                </div>
                                {#champ \"sexe\" en base de donnée inutilisé, je lai donc utilisé pour y stocké les ID des OPCO#}
                                <div class=\"form-group col-md-10 text-center\">
                                    {{ form_label(contact_forme.sexe, 'Identifiants OPCO', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.sexe) }}
                                </div>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend>Infos TNS</legend>
                                <div class=\"row \">
                                    <div class=\"col-sm-3 form-group text-center\">
                                        {{ form_label(contact_forme.siretTns, 'Siret TNS / N° TI',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(contact_forme.siretTns,{'attr':{'pattern':'.{14,14}','class':'number-format','class':'siret_format'}}) }}
                                    </div>
                                    <div class=\"col-sm-3 text-center\">
                                        {{ form_label(contact_forme.nafTns, 'NAF TNS',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(contact_forme.nafTns,{'attr':{'pattern':'[0-9]{4}[A-Za-z]{1}','class':'naf_format'}}) }}
                                    </div>
                                    <div class=\"col-sm-3 text-center\">
                                        {{ form_label(contact_forme.activiteTns, 'Activité TNS',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"tns\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                        {{ form_widget(contact_forme.activiteTns) }}
                                    </div>
                                    <div class=\"text-center col-md-3\">
                                        {{ form_label(contact_forme.idOpcaTns, 'OPCO TNS',{
                                            'label_attr': {'class': 'font-weight-bold'}
                                        }) }}
                                        {{ form_widget(contact_forme.idOpcaTns) }}
                                    </div>
                                </div>
                        </fieldset>

                        <fieldset>
                            <legend>ADRESSE</legend>
                            <a href=\"javascript:void(0)\" id=\"ajoutadresse\" class=\"row plus-link\" title=\"Ajouter une adresse\">
                            <span class=\"fa-stack fa-1x\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                            </span>
                            </a>
                            <div class=\"row p-3 mb-3\">
                                <div class=\"row\" id=\"contact_adresse\" data-prototype=\"{{ form_widget(contact_forme.adresses.vars.prototype)|e('html_attr') }}\">
                                    <div class=\"row col-sm-12 pr-0 form_adresse\">
                                        <div class=\"col-sm-3\">
                                            {{ form_label(contact_forme.adresses.children[0].children[\"adresse\"], 'N°,voie,nom de la voie',{
                                                'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(contact_forme.adresses.children[0].children[\"adresse\"]) }}
                                        </div>
                                        <div class=\"col-sm-2\">
                                            {{ form_label(contact_forme.adresses.children[0].children[\"codePostal\"], 'Code Postal',{
                                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(contact_forme.adresses.children[0].children[\"codePostal\"]) }}
                                        </div>
                                        <div class=\"col-sm-2 text-center\">
                                            {{ form_label(contact_forme.adresses.children[0].children[\"idVille\"], 'Ville',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }} <a id=\"add-ville-link\" class=\"d-inline\" data-toggle=\"modal\" data-target=\"#modal-ville-add\" title=\"Ajouter une ville\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            {{ form_widget(contact_forme.adresses.children[0].children[\"idVille\"],{ 'attr': {'id': 'select_ville_0'} }) }}
                                        </div>
                                        <div class=\"col-sm-1\" align=\"center\">
                                            {{ form_widget(contact_forme.adresses.children[0].children[\"principal\"]) }}
                                        </div>
                                        <div class=\"col-sm-2\">
                                            {{ form_label(contact_forme.adresses.children[0].children[\"type_adresse\"], 'Type adresse',{
                                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(contact_forme.adresses.children[0].children[\"type_adresse\"]) }}
                                        </div>
                                        <div class=\"col-sm-2\">
                                            {{ form_label(contact_forme.adresses.children[0].children[\"comp_adresse\"], 'Infos accès',{
                                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(contact_forme.adresses.children[0].children[\"comp_adresse\"]) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                </div>
                <div class=\"col-sm-3 mt-3\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-12 well2 pb-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"text-center col-md-12\">
                                    {{ form_label(contact_forme.id_type, 'Client / Prospect',{
                                        'label_attr': {'class': 'font-weight-bold required'}
                                    }) }}
                                    {{ form_widget(contact_forme.id_type) }}
                                </div>
                                <div class=\"col-sm-12\">
                                    <label class=\"font-weight-bold text-center col-sm-12\">Sociétés liées</label>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            {{ form_label(contact_forme.societelie.vars.prototype.idSociete1, '',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(contact_forme.societelie.vars.prototype.idSociete1) }}
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            {{ form_label(contact_forme.societelie.vars.prototype.idSociete2, '',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(contact_forme.societelie.vars.prototype.idSociete2) }}
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            {{ form_label(contact_forme.societelie.vars.prototype.idSociete3, '',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(contact_forme.societelie.vars.prototype.idSociete3) }}
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            {{ form_label(contact_forme.societelie.vars.prototype.idSociete4, '',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                            {{ form_widget(contact_forme.societelie.vars.prototype.idSociete4) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center col-md-12\">
                                    {{ form_label(contact_forme.solde, 'Solde Dispo',{
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.solde) }}
                                </div>
                                <div class=\"text-center col-md-12\">
                                    {{ form_label(contact_forme.soldeDate, 'Au',{
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.soldeDate) }}
                                </div>
                                <div class=\"text-center col-md-12\">
                                    {{ form_label(contact_forme.siteweb, 'Site web:',{
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text\">http://</div>
                                        </div>
                                        {{ form_widget(contact_forme.siteweb) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <fieldset class=\"mx-3\">
                <legend>CONTACTS</legend>
                <a href=\"javascript:void(0)\" id=\"adcontact\" class=\"row plus-link d-inline-block\" title=\"Ajouter un nouveau contact\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                <div class=\"col-sm-12 p-3 mb-3\" id=\"contactadded\" data-prototype=\"{{ form_widget(contact_forme.contactsoc.vars.prototype)|e('html_attr') }}\">
                    <div class=\"row\">
                        <div class=\"col-sm-1 text-center\">
                            {{ form_label(contact_forme.idCivilite, 'Civilité',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(contact_forme.idCivilite) }}
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            {{ form_label(contact_forme.nom, 'Nom',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(contact_forme.nom) }}
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            {{ form_label(contact_forme.prenom, 'Prenom',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(contact_forme.prenom) }}
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            {{ form_label(contact_forme.qualite, 'Qualité',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalQualiteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                            {{ form_widget(contact_forme.qualite) }}
                        </div>
                        <div class=\"col-sm-1\">
                            {{ form_label(contact_forme.qualite, 'Interlocuteur',{
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(contact_forme.interlocuteur) }}
                        </div>
                        <div class=\"text-center col-sm-2\">
                            {{ form_label(contact_forme.Telephone, 'Téléphone',{
                                'label_attr': {'class': 'font-weight-bold required'}
                            }) }}
                            {{ form_widget(contact_forme.Telephone,{'attr':{'pattern':'.{14,14}', 'maxlength':\"14\"}}) }}
                        </div>
                        <div class=\"text-center col-sm-2\">
                            {{ form_label(contact_forme.Portable, 'Portable',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
                            {{ form_widget(contact_forme.Portable,{'attr':{'pattern':'.{14,14}', 'maxlength':\"14\"}}) }}
                        </div>
                        <div class=\"text-center col-sm-2\">
                            {{ form_label(contact_forme.Email, 'Email',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
                            {{ form_widget(contact_forme.Email) }}
                        </div>
                        <div class=\"text-center col-sm-1\">
                            {{ form_label(contact_forme.Fax, 'Fax',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
                            {{ form_widget(contact_forme.Fax,{'attr':{'pattern':'.{14,14}', 'maxlength':\"14\"}}) }}
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset class=\"col-sm-12 p-3 m-3 well\">
                <legend>COMMENTAIRES</legend>
                <a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                <div class=\"col-sm-12 p-3 mt-3 well\">
                    <table class=\"table table-striped table-borderless col-sm-12 mt-3\">
                        <thead class=\"\">
                        <tr class=\"row\">
                            <th class=\"col-sm-2\">Date création</th>
                            <th class=\"col-sm-2\">Commentaires</th>
                            <th class=\"col-sm-2\">Action</th>
                            <th class=\"col-sm-2\">Date Action</th>
                            <th class=\"col-sm-2\">Qui</th>
                            <th class=\"col-sm-2\">Statut action</th>
                        </tr>
                        <tbody id=\"commentaires_collection\" data-prototype=\"{{ form_widget(contact_forme.commentaires.vars.prototype)|e('html_attr') }}\">

                        </tbody>
                        </thead>
                    </table>
                </div>
            </fieldset>

            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">Ajouter</button>
                    </div>
                </div>
            </div>

            {{ form_end(contact_forme,{'render_rest': false}) }}
        </div>
    </div>
{% endblock %}

{% block modal %}
    <div class=\"modal fade\" id=\"modalopcaadd\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header list-filter\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout OPCA</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('App\\\\Controller\\\\ContactController::OpcaModalAdd')) }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalActiviteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
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
    <div class=\"modal fade\" id=\"modalQualiteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout Qualité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('App\\\\Controller\\\\QualiteController::QualiteFormAdd')) }}
                </div>
            </div>
        </div>
    </div>
    {#  Modal : Ajouter une nouvelle ville #}
    <div class=\"modal fade\" id=\"modal-ville-add\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajouter une nouvelle ville</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('App\\\\Controller\\\\VilleController::create')) }}
                </div>
            </div>
        </div>
    </div>
    {# Fin modal ajouter une nouvelle ville #}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    
    {% include 'contact/Parts/contact.js.html.twig' %}
{% endblock %}", "contact/create.html.twig", "/var/www/templates/contact/create.html.twig");
    }
}
