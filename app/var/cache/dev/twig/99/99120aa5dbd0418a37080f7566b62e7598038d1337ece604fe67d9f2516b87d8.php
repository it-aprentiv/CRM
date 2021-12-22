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

/* contact/edit.html.twig */
class __TwigTemplate_b7480c948f8e663c2aa877cd1d1960a692720aa59ad90e2fdec3237700417bdb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/edit.html.twig", 1);
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
    <h2 class=\"text-center mt-2 text-nmary\">FICHE CLIENT / PROSPECT</h2>
    <div class=\"row\">
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 34, $this->source); })()), 'form_start');
        echo "
        <div class=\"col-sm-12\">

            <div class=\"row\">
                <div class=\"col-sm-9\">
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
                            <div class=\"form-group col-md-4 text-center\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 49, $this->source); })()), "idSecteur", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Activité entreprise"]);
        // line 51
        echo "
                                <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 53, $this->source); })()), "idSecteur", [], "any", false, false, false, 53), 'widget');
        echo "
                            </div>
                            <div class=\"form-group col-md-3 text-center\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 56, $this->source); })()), "noSiret", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Siret entreprise"]);
        // line 58
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 59, $this->source); })()), "noSiret", [], "any", false, false, false, 59), 'widget', ["attr" => ["pattern" => ".{14,14}", "class" => "siret_format"]]);
        echo "
                            </div>
                            <div class=\"form-group col-md-2 text-center\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 62, $this->source); })()), "noNaf", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "NAF entreprise"]);
        // line 64
        echo "
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 65, $this->source); })()), "noNaf", [], "any", false, false, false, 65), 'widget', ["attr" => ["pattern" => "[0-9]{4}[A-Za-z]{1}", "class" => "naf_format"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-2 text-center\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 70, $this->source); })()), "effectif", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nbr salariés"]);
        // line 72
        echo "
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 73, $this->source); })()), "effectif", [], "any", false, false, false, 73), 'widget');
        echo "
                            </div>
                            <div class=\"form-group col-md-3 text-center\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 76, $this->source); })()), "opca", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO1"]);
        // line 78
        echo "
                                <!-- <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalopcaadd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a> -->
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 80, $this->source); })()), "opca", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            
                            <div class=\"form-group col-md-2 text-center\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 84, $this->source); })()), "noAdherent", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° Adhérent"]);
        // line 86
        echo "
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 87, $this->source); })()), "noAdherent", [], "any", false, false, false, 87), 'widget');
        echo "
                            </div>

                            <div class=\"col-md-3 text-center\">
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 91, $this->source); })()), "id_commercial", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial"]);
        // line 93
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 94, $this->source); })()), "id_commercial", [], "any", false, false, false, 94), 'widget', ["attr" => ["autocomplete" => "off"]]);
        echo "
                            </div>
                            
                            <div class=\"col-md-2 text-center\">
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 98, $this->source); })()), "structure", [], "any", false, false, false, 98), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Entité"]);
        // line 100
        echo "
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 101, $this->source); })()), "structure", [], "any", false, false, false, 101), 'widget');
        echo "
                            </div>
                        ";
        // line 104
        echo "                            <div class=\"form-group col-md-10 text-center\">
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 105, $this->source); })()), "sexe", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Identifiants OCPO"]);
        // line 107
        echo "
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 108, $this->source); })()), "sexe", [], "any", false, false, false, 108), 'widget');
        echo "
                                </div>
                        </div>
                    </fieldset>
                    
                    <fieldset class=\"mt-3\">
                        <legend>Infos TNS</legend>
                        <div class=\"row\">
                            <div class=\"form-group col-md-3 text-center\">
                                ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 117, $this->source); })()), "siretTns", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Siret TNS / N° TI"]);
        // line 119
        echo "
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 120, $this->source); })()), "siretTns", [], "any", false, false, false, 120), 'widget', ["attr" => ["pattern" => ".{14,14}", "class" => "number-format", "class" => "siret_format"]]);
        echo "
                            </div>
                            <div class=\"col-md-2 text-center\">
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 123, $this->source); })()), "nafTns", [], "any", false, false, false, 123), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "NAF TNS"]);
        // line 125
        echo "
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 126, $this->source); })()), "nafTns", [], "any", false, false, false, 126), 'widget', ["attr" => ["pattern" => "[0-9]{4}[A-Za-z]{1}", "class" => "naf_format"]]);
        echo "
                            </div>
                            <div class=\"col-md-4 text-center\">
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 129, $this->source); })()), "activiteTns", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Activité TNS"]);
        // line 131
        echo "
                                <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"tns\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 133, $this->source); })()), "activiteTns", [], "any", false, false, false, 133), 'widget');
        echo "
                            </div>
                            <div class=\"text-center col-md-3\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 136, $this->source); })()), "idOpcaTns", [], "any", false, false, false, 136), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO TNS"]);
        // line 138
        echo "
                                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 139, $this->source); })()), "idOpcaTns", [], "any", false, false, false, 139), 'widget');
        echo "
                            </div>
                        </div>
                    </fieldset>
                    
                    <fieldset class=\"mt-3\">
                        <legend>ADRESSES</legend>
                        <a href=\"javascript:void(0)\" id=\"ajoutadresse\" class=\"row plus-link\" title=\"Ajouter une adresse\">
                            <span class=\"fa-stack fa-1x\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                        <div class=\"row\" id=\"contact_adresse\" data-prototype=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 152, $this->source); })()), "adresses", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "prototype", [], "any", false, false, false, 152), 'widget'), "html_attr");
        echo "\">
                            <!-- Other adresse -->
                            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 154, $this->source); })()), "adresses", [], "any", false, false, false, 154));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
            // line 155
            echo "                                <div class=\"row col-sm-12 pr-0 form_adresse\">
                                    <button type='button' class='removeaddresseelement close' type='button'><span aria-hidden='true'>×</span></button>
                                    <div id=\"contact_adresses_";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 157), "html", null, true);
            echo "\" class=\"adresseformadded\">
                                        <div class=\"col-sm-3\">
                                            ";
            // line 159
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 159), "adresse", [], "array", false, false, false, 159), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"]]);
            // line 161
            echo "
                                            ";
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 162), "adresse", [], "array", false, false, false, 162), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 165), "codePostal", [], "array", false, false, false, 165), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Code Postal"]);
            // line 167
            echo "
                                            ";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 168), "codePostal", [], "array", false, false, false, 168), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2 text-center\">
                                            ";
            // line 171
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 171), "idVille", [], "array", false, false, false, 171), 'label', ["label_attr" => ["class" => "font-weight-bold d-inline text-center"], "label" => "Ville"]);
            // line 173
            echo " <a id=\"add-ville-link\" class=\"d-inline\" data-toggle=\"modal\" data-target=\"#modal-ville-add\" title=\"Ajouter une ville\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            
                                            ";
            // line 175
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 175), "idVille", [], "array", false, false, false, 175), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-1\" align=\"center\">
                                            ";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 178), "principal", [], "array", false, false, false, 178), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 181), "type_adresse", [], "array", false, false, false, 181), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Type adresse"]);
            // line 183
            echo "
                                            ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 184), "type_adresse", [], "array", false, false, false, 184), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 187
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 187), "comp_adresse", [], "array", false, false, false, 187), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Infos accès"]);
            // line 189
            echo "
                                            ";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 190), "comp_adresse", [], "array", false, false, false, 190), 'widget');
            echo "
                                        </div>
                                    </div>
                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 195
        echo "                        </div>
                    </fieldset>
                </div>
                <div class=\"col-sm-3 mt-3\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-12 well2 pb-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 203, $this->source); })()), "id_type", [], "any", false, false, false, 203), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Client / Prospect"]);
        // line 205
        echo "
                                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 206, $this->source); })()), "id_type", [], "any", false, false, false, 206), 'widget');
        echo "
                                </div>
                                <div class=\"col-sm-12\">
                                    <label class=\"font-weight-bold text-center col-sm-12\">Sociétés liées</label>
                                    <div class=\"row\">
                                    
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 213, $this->source); })()), "societelie", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "prototype", [], "any", false, false, false, 213), "idSociete1", [], "any", false, false, false, 213), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 215
        echo "
                                                ";
        // line 216
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie1", [], "any", true, true, false, 216) && (twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 216, $this->source); })()), "societelie1", [], "any", false, false, false, 216) != ""))) {
            // line 217
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 217, $this->source); })()), "societeId1", [], "any", false, false, false, 217)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 221
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 223
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 223, $this->source); })()), "societelie", [], "any", false, false, false, 223), "vars", [], "any", false, false, false, 223), "prototype", [], "any", false, false, false, 223), "idSociete1", [], "any", false, false, false, 223), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 226, $this->source); })()), "societelie", [], "any", false, false, false, 226), "vars", [], "any", false, false, false, 226), "prototype", [], "any", false, false, false, 226), "idSociete2", [], "any", false, false, false, 226), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 228
        echo "
                                                ";
        // line 229
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie2", [], "any", true, true, false, 229) && (twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 229, $this->source); })()), "societelie2", [], "any", false, false, false, 229) != ""))) {
            // line 230
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 230, $this->source); })()), "societeId2", [], "any", false, false, false, 230)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 234
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 236
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 236, $this->source); })()), "societelie", [], "any", false, false, false, 236), "vars", [], "any", false, false, false, 236), "prototype", [], "any", false, false, false, 236), "idSociete2", [], "any", false, false, false, 236), 'widget');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 241, $this->source); })()), "societelie", [], "any", false, false, false, 241), "vars", [], "any", false, false, false, 241), "prototype", [], "any", false, false, false, 241), "idSociete3", [], "any", false, false, false, 241), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 243
        echo "
                                                ";
        // line 244
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie3", [], "any", true, true, false, 244) && (twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 244, $this->source); })()), "societelie3", [], "any", false, false, false, 244) != ""))) {
            // line 245
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 245, $this->source); })()), "societeId3", [], "any", false, false, false, 245)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 249
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 251
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 251, $this->source); })()), "societelie", [], "any", false, false, false, 251), "vars", [], "any", false, false, false, 251), "prototype", [], "any", false, false, false, 251), "idSociete3", [], "any", false, false, false, 251), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 254, $this->source); })()), "societelie", [], "any", false, false, false, 254), "vars", [], "any", false, false, false, 254), "prototype", [], "any", false, false, false, 254), "idSociete4", [], "any", false, false, false, 254), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 256
        echo "
                                                ";
        // line 257
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie4", [], "any", true, true, false, 257) && (twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 257, $this->source); })()), "societelie4", [], "any", false, false, false, 257) != ""))) {
            // line 258
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 258, $this->source); })()), "societeId4", [], "any", false, false, false, 258)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 262
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 264
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 264, $this->source); })()), "societelie", [], "any", false, false, false, 264), "vars", [], "any", false, false, false, 264), "prototype", [], "any", false, false, false, 264), "idSociete4", [], "any", false, false, false, 264), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 269
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 269, $this->source); })()), "solde", [], "any", false, false, false, 269), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Solde Dispo"]);
        // line 271
        echo "
                                    ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 272, $this->source); })()), "solde", [], "any", false, false, false, 272), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 275
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 275, $this->source); })()), "soldeDate", [], "any", false, false, false, 275), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Au"]);
        // line 277
        echo "
                                    ";
        // line 278
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 278, $this->source); })()), "soldeDate", [], "any", false, false, false, 278), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 281, $this->source); })()), "siteweb", [], "any", false, false, false, 281), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 283
        echo "
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text\">http://</div>
                                        </div>
                                        ";
        // line 288
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 288, $this->source); })()), "siteweb", [], "any", false, false, false, 288), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                     
                  
    <div class=\"row col-md-12\">
        <fieldset class=\"mx-3\">
            <legend>CONTACTS</legend>
            <a href=\"javascript:void(0)\" id=\"adcontact\" class=\"row plus-link\" title=\"Ajouter un nouveau contact\">
                <span class=\"fa-stack fa-1x\">
                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                    <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                </span>
            </a>
            <div class=\"col-md-12 p-0\" id=\"contactadded\" data-prototype=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 307, $this->source); })()), "contactsoc", [], "any", false, false, false, 307), "vars", [], "any", false, false, false, 307), "prototype", [], "any", false, false, false, 307), 'widget'), "html_attr");
        echo "\">
                    <div class=\"row\">
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 310, $this->source); })()), "idCivilite", [], "any", false, false, false, 310), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
        // line 312
        echo "
                            ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 313, $this->source); })()), "idCivilite", [], "any", false, false, false, 313), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 316
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 316, $this->source); })()), "nom", [], "any", false, false, false, 316), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 318
        echo "
                            ";
        // line 319
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 319, $this->source); })()), "nom", [], "any", false, false, false, 319), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 322
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 322, $this->source); })()), "prenom", [], "any", false, false, false, 322), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
        // line 324
        echo "
                            ";
        // line 325
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 325, $this->source); })()), "prenom", [], "any", false, false, false, 325), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 328
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 328, $this->source); })()), "qualite", [], "any", false, false, false, 328), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
        // line 330
        echo "
                            <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalQualiteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                            ";
        // line 332
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 332, $this->source); })()), "qualite", [], "any", false, false, false, 332), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1\">
                            ";
        // line 335
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 335, $this->source); })()), "interlocuteur", [], "any", false, false, false, 335), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Interlocuteur"]);
        // line 337
        echo "
                            ";
        // line 338
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 338, $this->source); })()), "interlocuteur", [], "any", false, false, false, 338), 'widget');
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 341
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 341, $this->source); })()), "Telephone", [], "any", false, false, false, 341), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Téléphone"]);
        // line 343
        echo "
                            ";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 344, $this->source); })()), "Telephone", [], "any", false, false, false, 344), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 347
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 347, $this->source); })()), "Portable", [], "any", false, false, false, 347), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Portable"]);
        // line 349
        echo "
                            ";
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 350, $this->source); })()), "Portable", [], "any", false, false, false, 350), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-1\">
                            ";
        // line 353
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 353, $this->source); })()), "Fax", [], "any", false, false, false, 353), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
        // line 355
        echo "
                            ";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 356, $this->source); })()), "Fax", [], "any", false, false, false, 356), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 359
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 359, $this->source); })()), "Email", [], "any", false, false, false, 359), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 361
        echo "
                            ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 362, $this->source); })()), "Email", [], "any", false, false, false, 362), 'widget');
        echo "
                        </div>
                    </div>
                    <!-- Other contact for this contact -->
                    ";
        // line 366
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 366, $this->source); })()), "contactsoc", [], "any", false, false, false, 366), "children", [], "any", false, false, false, 366));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["contactsoc"]) {
            // line 367
            echo "                        <div class=\"row contact_added\">
                            <button type=\"button\" class=\"removecontactelement close\"><span aria-hidden=\"true\">×</span></button>
                            <div id=\"contact_contactsoc_";
            // line 369
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 369), "html", null, true);
            echo "\" class=\"p-r\">
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "idCivilite", [], "any", false, false, false, 371), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
            // line 373
            echo "
                                ";
            // line 374
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "idCivilite", [], "any", false, false, false, 374), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 377
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "nom", [], "any", false, false, false, 377), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
            // line 379
            echo "
                                ";
            // line 380
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "nom", [], "any", false, false, false, 380), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 383
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "prenom", [], "any", false, false, false, 383), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
            // line 385
            echo "
                                ";
            // line 386
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "prenom", [], "any", false, false, false, 386), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 389
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "qualite", [], "any", false, false, false, 389), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
            // line 391
            echo "
                                ";
            // line 392
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "qualite", [], "any", false, false, false, 392), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1\">
                                ";
            // line 395
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "interlocuteur", [], "any", false, false, false, 395), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Interlocuteur"]);
            // line 397
            echo "
                                ";
            // line 398
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "interlocuteur", [], "any", false, false, false, 398), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 401
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Telephone", [], "any", false, false, false, 401), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Telephone"]);
            // line 403
            echo "
                                ";
            // line 404
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Telephone", [], "any", false, false, false, 404), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 407
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Fax", [], "any", false, false, false, 407), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
            // line 409
            echo "
                                ";
            // line 410
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Fax", [], "any", false, false, false, 410), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-1\">
                                ";
            // line 413
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["contactsoc"], "children", [], "any", false, false, false, 413), "Portable", [], "array", false, false, false, 413), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Portable"]);
            // line 415
            echo "
                                ";
            // line 416
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Portable", [], "any", false, false, false, 416), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 419
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Email", [], "any", false, false, false, 419), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
            // line 421
            echo "
                                ";
            // line 422
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Email", [], "any", false, false, false, 422), 'widget');
            echo "
                            </div>
                            </div>
                        </div>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contactsoc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 427
        echo "                </div> 
            </fieldset>
            <div class=\"col-sm-9 mt-4\">
                    <fieldset><legend>DOSSIERS</legend>
            <table class=\"table table-sm table-striped\">
                    <thead>
                        <tr class=\"bg-info text-light\">
                            <th>Structure</th>
                            <th>Date de création</th>
                            <th>Intitulé du stage</th>
                            <th>Date fin stage</th>
                            <th>Date estimée pour récépt accord</th>
                            <th>Montant accordé</th>
                            <th>Date estimée pour clôture</th>
                            <th>Commercial</th>
                        </tr>
                    </thead>   
            <tbody>           
            ";
        // line 445
        if ( !(null === (isset($context["dossierClient"]) || array_key_exists("dossierClient", $context) ? $context["dossierClient"] : (function () { throw new RuntimeError('Variable "dossierClient" does not exist.', 445, $this->source); })()))) {
            echo "                  
                ";
            // line 446
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dossierClient"]) || array_key_exists("dossierClient", $context) ? $context["dossierClient"] : (function () { throw new RuntimeError('Variable "dossierClient" does not exist.', 446, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
                // line 447
                echo "                                           
                        
                            <tr data-id=\"";
                // line 449
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 449), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 449)]), "html", null, true);
                echo "\">
                                <td>";
                // line 450
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "structure", [], "any", false, false, false, 450), "html", null, true);
                echo "</td>
                                <td>";
                // line 451
                (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 451), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 451), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 451), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 451), "d-m-Y"), "html", null, true))));
                echo "</td>
                                <td>";
                // line 452
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "themeformation", [], "any", false, false, false, 452), "html", null, true);
                echo "</td>
                                <td>";
                // line 453
                (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 453), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 453), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 453), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 453), "d-m-Y"), "html", null, true))));
                echo "</td>
                                <td>
                                    ";
                // line 455
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 455))) {
                    // line 456
                    echo "                                        ";
                    (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 456), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 456), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 456), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 456), "d-m-Y"), "html", null, true))));
                    echo "
                                    ";
                } else {
                    // line 458
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 458), "+3 month"), "d-m-Y"), "html", null, true);
                    echo "
                                    ";
                }
                // line 460
                echo "                                </td>
                                <td>";
                // line 461
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "mntAccorde", [], "any", false, false, false, 461), 2, ",", " "), "html", null, true);
                echo "</td>
            ";
                // line 463
                echo "                                ";
                // line 464
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 464), "+6 month"), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 465
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "commercial", [], "any", false, false, false, 465), "html", null, true);
                echo "</td>
                            </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 468
            echo "            ";
        }
        // line 469
        echo "        </tbody>
                </table>
        </fieldset>        
            </div>
              <div class=\"col-sm-9 mt-4\">
            <fieldset><legend>PROPALES</legend>
             <table class=\"table table-sm table-striped\">
                <thead>
                <tr class=\"bg-info text-light\">
                    <th>Entité</th>
                    <th>Statut</th>
                    <th>Commercial</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Coût Ht</th>
                    <th>Fiabilité</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 490
        if ( !(null === (isset($context["clientPropal"]) || array_key_exists("clientPropal", $context) ? $context["clientPropal"] : (function () { throw new RuntimeError('Variable "clientPropal" does not exist.', 490, $this->source); })()))) {
            echo "                  
                ";
            // line 491
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clientPropal"]) || array_key_exists("clientPropal", $context) ? $context["clientPropal"] : (function () { throw new RuntimeError('Variable "clientPropal" does not exist.', 491, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["propal"]) {
                // line 492
                echo "                    <tr data-propal-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 492), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_show", ["id" => twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 492)]), "html", null, true);
                echo "\">
                        <td>";
                // line 493
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "entite", [], "any", false, false, false, 493), "html", null, true);
                echo "</td>
                        <td>";
                // line 494
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "statut", [], "any", false, false, false, 494), "html", null, true);
                echo "</td>
                        <td>";
                // line 495
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "commercial", [], "any", false, false, false, 495), "html", null, true);
                echo "</td>
                        <td>";
                // line 496
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "client", [], "any", false, false, false, 496), "html", null, true);
                echo "</td>
                        <td>";
                // line 497
                if ((twig_get_attribute($this->env, $this->source, $context["propal"], "type", [], "any", false, false, false, 497) == 1)) {
                    echo " Entreprise ";
                } else {
                    echo " Particulier ";
                }
                echo "</td>
                        <td>";
                // line 498
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "nom", [], "any", false, false, false, 498), "html", null, true);
                echo "</td>
                        <td> ";
                // line 499
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "prenom", [], "any", false, false, false, 499), "html", null, true);
                echo " </td>
                        ";
                // line 500
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 500))) {
                    // line 501
                    echo "                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 501), "html", null, true);
                    echo " €</td>
                        ";
                } else {
                    // line 503
                    echo "                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 503), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 505
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 505) == "Froid")) {
                    // line 506
                    echo "                        <td class=\"bg-info text-white\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 506), "html", null, true);
                    echo " </td>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 507
$context["propal"], "fiabilite", [], "any", false, false, false, 507) == "Chaud")) {
                    // line 508
                    echo "                        <td class=\"bg-danger text-white\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 508), "html", null, true);
                    echo " </td>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 509
$context["propal"], "fiabilite", [], "any", false, false, false, 509) == "Tiede")) {
                    // line 510
                    echo "                        <td class=\"bg-warning text-white\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 510), "html", null, true);
                    echo " </td>
                        ";
                } else {
                    // line 512
                    echo "                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 512), "html", null, true);
                    echo " </td>
                        ";
                }
                // line 514
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 516
            echo "                ";
        }
        // line 517
        echo "                </tbody>
            </table>
         </fieldset>        
        </div>


            <fieldset class=\"col-sm-12 p-3 m-3 well\">
                <legend>COMMENTAIRES</legend>
                <a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                ";
        // line 534
        echo "                <table class=\"table table-striped table-borderless col-sm-12 mt-3\">
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
        // line 544
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 544, $this->source); })()), "commentaires", [], "any", false, false, false, 544), "vars", [], "any", false, false, false, 544), "prototype", [], "any", false, false, false, 544), 'widget'), "html_attr");
        echo "\">
                    ";
        // line 545
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 545, $this->source); })()), "commentaires", [], "any", false, false, false, 545));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 546
            echo "                        <tr>
                            <th colspan=\"6\">
                                <div class=\"row\">
                                    <div class=\"comment_contains\">
                                        <button type=\"button\" class=\"removecommentelement close\"><span aria-hidden=\"true\">×</span></button>
                                        <div id=\"contact_commentaires_";
            // line 551
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 551), "html", null, true);
            echo "\" class=\"comment_contains_form\">
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 553
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 553), "dateAdd", [], "array", false, false, false, 553), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 556
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 556), "texteNote", [], "array", false, false, false, 556), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 559
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 559), "idAction", [], "array", false, false, false, 559), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 562
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 562), "dateAction", [], "array", false, false, false, 562), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 565
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 565), "idUserAction", [], "array", false, false, false, 565), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 568
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 568), "idActionStatut", [], "array", false, false, false, 568), 'widget');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 576
        echo "                    </tbody>
                    </thead>
                </table>
            </fieldset>
            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                        <a href=\"";
        // line 583
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller/ajoutpropal", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 583, $this->source); })()), "id", [], "any", false, false, false, 583)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Créer Propal</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                        <a name=\"editerdocument\" data-toggle=\"modal\" data-target=\"#modalEditerDocument\" class=\"btn btn-primary btn-block\" style=\"color:white;\">Editer un document</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"button\" id=\"editthis\" class=\"btn btn-primary btn-block\">MAJ Fiche</button>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                        <a href=\"";
        // line 592
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller", ["client" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 592, $this->source); })()), "nomStr", [], "any", false, false, false, 592)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Dossiers</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                        <a href=\"";
        // line 595
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Formation_Mise_Place_Controller");
        echo "\" class=\"btn btn-primary btn-block\">Formations</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 p-3\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div id=\"saveedit\" class=\"btn-group mr-2 d-none\" role=\"group\" aria-label=\"First group\">
                        <button type=\"submit\" class=\"btn btn-danger btn-block\">Mettre à jour</button>
                    </div>
                </div>
            </div>

        </div>
        ";
        // line 608
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contact_forme"]) || array_key_exists("contact_forme", $context) ? $context["contact_forme"] : (function () { throw new RuntimeError('Variable "contact_forme" does not exist.', 608, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 612
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 613
        echo "    <div class=\"modal fade\" id=\"modalopcaadd\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout Qualité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 623
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\ContactController::OpcaModalAdd"));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalActiviteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 638
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\SecteurActiviteController::SecteurActiviteForm"));
        echo "
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalQualiteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout Qualité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    ";
        // line 653
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\QualiteController::QualiteFormAdd"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 659
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
        // line 669
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VilleController::create"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 675
        echo "    
    <div class=\"modal fade\" id=\"modalEditerDocument\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                        <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                            <a href=\"";
        // line 687
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 687, $this->source); })()), "id", [], "any", false, false, false, 687), "type" => 1]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Bon de commmande</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                            <a href=\"";
        // line 690
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 690, $this->source); })()), "id", [], "any", false, false, false, 690), "type" => 2]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Convention</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                            <a href=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["contact"]) || array_key_exists("contact", $context) ? $context["contact"] : (function () { throw new RuntimeError('Variable "contact" does not exist.', 693, $this->source); })()), "id", [], "any", false, false, false, 693), "type" => 3]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 702
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 703
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 708
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "contact/edit.html.twig", 708)->display($context);
        // line 709
        echo "    <script language=\"javascript\">
        \$(document).ready( function() {
            \$(\"#contactgenerale *\").prop(\"disabled\", true);
            \$(\"#content_bouton .btn\").prop(\"disabled\", false);
            \$(\"#editthis\").click(function(){
                \$(\"#contactgenerale *\").prop(\"disabled\", false);
                \$(\"#saveedit\").removeClass(\"d-none\");
                \$(\"#saveedit\").find('button').prop(\"disabled\", false);
                \$(\"#ajcom\").prop(\"disabled\", false);
            });
            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var societelie = ";
        // line 720
        echo json_encode((isset($context["societeliedata"]) || array_key_exists("societeliedata", $context) ? $context["societeliedata"] : (function () { throw new RuntimeError('Variable "societeliedata" does not exist.', 720, $this->source); })()));
        echo ";
            for (let key in societelie){
                if(societelie.hasOwnProperty(key)){
                    if(societelie[key] != null){
                        var dataselect = {
                            id: societelie[key],
                            text: societelie[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.id, true, true);
                        \$('.'+key).append(newOption).trigger('change');
                    }
                }
            }
            var adressesville = ";
        // line 733
        echo json_encode((isset($context["adressesvilledata"]) || array_key_exists("adressesvilledata", $context) ? $context["adressesvilledata"] : (function () { throw new RuntimeError('Variable "adressesvilledata" does not exist.', 733, $this->source); })()));
        echo "
            for(let key in adressesville){
                if(adressesville[key] != null & adressesville[key] > 0){
                    setVilleValue(key,adressesville[key]);
                }
                \$('#contact_adresses_'+key+'_idVille').select2({
                    placeholder: \"-- ville --\",
                    minimumInputLength: 3,
                    allowClear: true,
                    ajax: {
                        url: '";
        // line 743
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
            }
            function setVilleValue(key,idville) {
                var villeSelect = \$('#contact_adresses_'+key+'_idVille');
                if ( idville > 0) {
                    var ville_id = idville;
                    var url = '";
        // line 758
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.oneVille.asynch-search", ["idVille" => "ville_id"]);
        echo "';
                    url = url.replace('ville_id', ville_id);
                    \$.ajax({
                        type: 'GET',
                        url: url
                    }).then(function (data) {
                        // create the option and append to Select2
                        var dataSelected = (data['results'][0]);
                        var option = new Option(dataSelected.text, dataSelected.text, true, true);
                        villeSelect.append(option).trigger('change');
                        // manually trigger the `select2:select` event
                        villeSelect.trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                    });
                }
            }
            var opca1 = ";
        // line 778
        echo json_encode((isset($context["opca1"]) || array_key_exists("opca1", $context) ? $context["opca1"] : (function () { throw new RuntimeError('Variable "opca1" does not exist.', 778, $this->source); })()));
        echo ";
            var opcaTns = ";
        // line 779
        echo json_encode((isset($context["idOpcaTns"]) || array_key_exists("idOpcaTns", $context) ? $context["idOpcaTns"] : (function () { throw new RuntimeError('Variable "idOpcaTns" does not exist.', 779, $this->source); })()));
        echo ";
            if (opca1) {
                setSelectValue('opca', opca1);
            }
            if (opcaTns) {
                setSelectValue('idOpcaTns', opcaTns);
            }
            
            // APR-121
            var secteurActiviteOptions = ";
        // line 788
        echo json_encode((isset($context["secteurActiviteOptions"]) || array_key_exists("secteurActiviteOptions", $context) ? $context["secteurActiviteOptions"] : (function () { throw new RuntimeError('Variable "secteurActiviteOptions" does not exist.', 788, $this->source); })()));
        echo ";
            
            if (secteurActiviteOptions) {
                setSelectValue(\"idSecteur\", secteurActiviteOptions);
            }
            
            var activiteTNSOptions = ";
        // line 794
        echo json_encode((isset($context["activiteTNSOptions"]) || array_key_exists("activiteTNSOptions", $context) ? $context["activiteTNSOptions"] : (function () { throw new RuntimeError('Variable "activiteTNSOptions" does not exist.', 794, $this->source); })()));
        echo ";
            
            if (activiteTNSOptions) {
                setSelectValue(\"activiteTns\", activiteTNSOptions);
            }
            
            // Mise à jour de la valeur pour un champ d'autocompletion
            function setSelectValue(key,data) {
                var opcaSelect = \$('#contact_'+key);
                // create the option and append to Select2
                var option = new Option(data['text'], data['id'], true, true);
                opcaSelect.append(option).trigger('change');
                // manually trigger the `select2:select` event
                opcaSelect.trigger({
                    type: 'select2:select',
                    params: {
                        data: data
                    }
                });
            }
            \$(\".removeaddresseelement\").bind('click',function(event){
                \$(this).parents(\".form_adresse\").remove();
            });
            \$(\".removecontactelement\").bind('click',function(event){
                \$(this).parents(\".contact_added\").remove();
            });
            \$(\".removecommentelement\").bind('click',function(event){
                \$(this).parents(\".comment_contains\").parents(\"tr\").remove();
            });
            
            ";
        // line 825
        echo "            \$('#saveedit').on('click', function(e){
                e.preventDefault();
                let commercialId = \$('#contact_id_commercial').val();
                let structureId = \$('#contact_structure').val();
                let contactType = \$('#contact_id_type').val();
                \$('#contact_id_commercial').val(commercialId);
                \$('#contact_structure').val(structureId);
                \$('#contact_id_type').val(contactType);
                \$('#contactgenerale').submit();
            });
            ";
        // line 836
        echo "        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1591 => 836,  1579 => 825,  1546 => 794,  1537 => 788,  1525 => 779,  1521 => 778,  1498 => 758,  1480 => 743,  1467 => 733,  1451 => 720,  1438 => 709,  1436 => 708,  1427 => 703,  1417 => 702,  1399 => 693,  1393 => 690,  1387 => 687,  1373 => 675,  1365 => 669,  1353 => 659,  1345 => 653,  1327 => 638,  1309 => 623,  1297 => 613,  1287 => 612,  1274 => 608,  1258 => 595,  1252 => 592,  1240 => 583,  1231 => 576,  1209 => 568,  1203 => 565,  1197 => 562,  1191 => 559,  1185 => 556,  1179 => 553,  1174 => 551,  1167 => 546,  1150 => 545,  1146 => 544,  1134 => 534,  1118 => 517,  1115 => 516,  1108 => 514,  1102 => 512,  1096 => 510,  1094 => 509,  1089 => 508,  1087 => 507,  1082 => 506,  1079 => 505,  1073 => 503,  1067 => 501,  1065 => 500,  1061 => 499,  1057 => 498,  1049 => 497,  1045 => 496,  1041 => 495,  1037 => 494,  1033 => 493,  1026 => 492,  1022 => 491,  1018 => 490,  995 => 469,  992 => 468,  983 => 465,  978 => 464,  976 => 463,  972 => 461,  969 => 460,  963 => 458,  957 => 456,  955 => 455,  950 => 453,  946 => 452,  942 => 451,  938 => 450,  932 => 449,  928 => 447,  924 => 446,  920 => 445,  900 => 427,  881 => 422,  878 => 421,  876 => 419,  870 => 416,  867 => 415,  865 => 413,  859 => 410,  856 => 409,  854 => 407,  848 => 404,  845 => 403,  843 => 401,  837 => 398,  834 => 397,  832 => 395,  826 => 392,  823 => 391,  821 => 389,  815 => 386,  812 => 385,  810 => 383,  804 => 380,  801 => 379,  799 => 377,  793 => 374,  790 => 373,  788 => 371,  783 => 369,  779 => 367,  762 => 366,  755 => 362,  752 => 361,  750 => 359,  744 => 356,  741 => 355,  739 => 353,  733 => 350,  730 => 349,  728 => 347,  722 => 344,  719 => 343,  717 => 341,  711 => 338,  708 => 337,  706 => 335,  700 => 332,  696 => 330,  694 => 328,  688 => 325,  685 => 324,  683 => 322,  677 => 319,  674 => 318,  672 => 316,  666 => 313,  663 => 312,  661 => 310,  655 => 307,  633 => 288,  626 => 283,  624 => 281,  618 => 278,  615 => 277,  613 => 275,  607 => 272,  604 => 271,  602 => 269,  593 => 264,  589 => 262,  581 => 258,  579 => 257,  576 => 256,  574 => 254,  567 => 251,  563 => 249,  555 => 245,  553 => 244,  550 => 243,  548 => 241,  539 => 236,  535 => 234,  527 => 230,  525 => 229,  522 => 228,  520 => 226,  513 => 223,  509 => 221,  501 => 217,  499 => 216,  496 => 215,  494 => 213,  484 => 206,  481 => 205,  479 => 203,  469 => 195,  450 => 190,  447 => 189,  445 => 187,  439 => 184,  436 => 183,  434 => 181,  428 => 178,  422 => 175,  418 => 173,  416 => 171,  410 => 168,  407 => 167,  405 => 165,  399 => 162,  396 => 161,  394 => 159,  389 => 157,  385 => 155,  368 => 154,  363 => 152,  347 => 139,  344 => 138,  342 => 136,  336 => 133,  332 => 131,  330 => 129,  324 => 126,  321 => 125,  319 => 123,  313 => 120,  310 => 119,  308 => 117,  296 => 108,  293 => 107,  291 => 105,  288 => 104,  283 => 101,  280 => 100,  278 => 98,  271 => 94,  268 => 93,  266 => 91,  259 => 87,  256 => 86,  254 => 84,  247 => 80,  243 => 78,  241 => 76,  235 => 73,  232 => 72,  230 => 70,  222 => 65,  219 => 64,  217 => 62,  211 => 59,  208 => 58,  206 => 56,  200 => 53,  196 => 51,  194 => 49,  188 => 46,  185 => 45,  183 => 43,  171 => 34,  166 => 31,  157 => 28,  154 => 27,  149 => 26,  140 => 23,  137 => 22,  133 => 21,  124 => 15,  120 => 14,  116 => 12,  106 => 11,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    {% extends 'base.html.twig' %}

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
    <h2 class=\"text-center mt-2 text-nmary\">FICHE CLIENT / PROSPECT</h2>
    <div class=\"row\">
        {{ form_start(contact_forme) }}
        <div class=\"col-sm-12\">

            <div class=\"row\">
                <div class=\"col-sm-9\">
                    <fieldset>
                        <legend>Infos client</legend>
                        <div class=\"row\">
                            <div class=\"form-group col-md-3 text-center\">
                                {{ form_label(contact_forme.nomStr, 'Société', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contact_forme.nomStr) }}
                            </div>
                            <div class=\"form-group col-md-4 text-center\">
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
                            <div class=\"form-group col-md-2 text-center\">
                                {{ form_label(contact_forme.noNaf, 'NAF entreprise', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contact_forme.noNaf,{'attr':{'pattern':'[0-9]{4}[A-Za-z]{1}','class':'naf_format'}}) }}
                            </div>
                        </div>
                        <div class=\"row\">
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
                                {{ form_widget(contact_forme.opca,{'attr':{'class':'form-control'}}) }}
                            </div>
                            
                            <div class=\"form-group col-md-2 text-center\">
                                {{ form_label(contact_forme.noAdherent, 'N° Adhérent',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contact_forme.noAdherent) }}
                            </div>

                            <div class=\"col-md-3 text-center\">
                                {{ form_label(contact_forme.id_commercial, 'Commercial',{
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
                                {{ form_widget(contact_forme.id_commercial, { attr: {autocomplete : 'off'} } ) }}
                            </div>
                            
                            <div class=\"col-md-2 text-center\">
                                {{ form_label(contact_forme.structure, 'Entité',{
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
                                {{ form_widget(contact_forme.structure) }}
                            </div>
                        {#champ \"sexe\" en base de donnée inutilisé, je lai donc utilisé pour y stocké les ID des OPCO#}
                            <div class=\"form-group col-md-10 text-center\">
                                    {{ form_label(contact_forme.sexe, 'Identifiants OCPO', {
                                        'label_attr': {'class': 'font-weight-bold'}
                                    }) }}
                                    {{ form_widget(contact_forme.sexe) }}
                                </div>
                        </div>
                    </fieldset>
                    
                    <fieldset class=\"mt-3\">
                        <legend>Infos TNS</legend>
                        <div class=\"row\">
                            <div class=\"form-group col-md-3 text-center\">
                                {{ form_label(contact_forme.siretTns, 'Siret TNS / N° TI',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contact_forme.siretTns,{'attr':{'pattern':'.{14,14}','class':'number-format','class':'siret_format'}}) }}
                            </div>
                            <div class=\"col-md-2 text-center\">
                                {{ form_label(contact_forme.nafTns, 'NAF TNS',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contact_forme.nafTns,{'attr':{'pattern':'[0-9]{4}[A-Za-z]{1}','class':'naf_format'}}) }}
                            </div>
                            <div class=\"col-md-4 text-center\">
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
                    
                    <fieldset class=\"mt-3\">
                        <legend>ADRESSES</legend>
                        <a href=\"javascript:void(0)\" id=\"ajoutadresse\" class=\"row plus-link\" title=\"Ajouter une adresse\">
                            <span class=\"fa-stack fa-1x\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                            </span>
                        </a>
                        <div class=\"row\" id=\"contact_adresse\" data-prototype=\"{{ form_widget(contact_forme.adresses.vars.prototype)|e('html_attr') }}\">
                            <!-- Other adresse -->
                            {% for adresse in contact_forme.adresses %}
                                <div class=\"row col-sm-12 pr-0 form_adresse\">
                                    <button type='button' class='removeaddresseelement close' type='button'><span aria-hidden='true'>×</span></button>
                                    <div id=\"contact_adresses_{{ loop.index }}\" class=\"adresseformadded\">
                                        <div class=\"col-sm-3\">
                                            {{ form_label(adresse.children[\"adresse\"], '',{
                                                'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(adresse.children[\"adresse\"]) }}
                                        </div>
                                        <div class=\"col-sm-2\">
                                            {{ form_label(adresse.children[\"codePostal\"], 'Code Postal',{
                                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(adresse.children[\"codePostal\"]) }}
                                        </div>
                                        <div class=\"col-sm-2 text-center\">
                                            {{ form_label(adresse.children[\"idVille\"], 'Ville',{
                                                'label_attr': {'class': 'font-weight-bold d-inline text-center'}
                                            }) }} <a id=\"add-ville-link\" class=\"d-inline\" data-toggle=\"modal\" data-target=\"#modal-ville-add\" title=\"Ajouter une ville\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            
                                            {{ form_widget(adresse.children[\"idVille\"]) }}
                                        </div>
                                        <div class=\"col-sm-1\" align=\"center\">
                                            {{ form_widget(adresse.children[\"principal\"]) }}
                                        </div>
                                        <div class=\"col-sm-2\">
                                            {{ form_label(adresse.children[\"type_adresse\"], 'Type adresse',{
                                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(adresse.children[\"type_adresse\"]) }}
                                        </div>
                                        <div class=\"col-sm-2\">
                                            {{ form_label(adresse.children[\"comp_adresse\"], 'Infos accès',{
                                                'label_attr': {'class': 'font-weight-bold  col-sm-12 text-center'}
                                            }) }}
                                            {{ form_widget(adresse.children[\"comp_adresse\"]) }}
                                        </div>
                                    </div>
                                </div>
                            {% endfor %}
                        </div>
                    </fieldset>
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
                                                {% if societeliedata.societelie1 is defined and societeliedata.societelie1 != \"\" %}
                                                    <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', {id : societeliedata.societeId1} ) }}\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                {% else %}
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                {% endif %}
                                            {{ form_widget(contact_forme.societelie.vars.prototype.idSociete1) }}
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            {{ form_label(contact_forme.societelie.vars.prototype.idSociete2, '',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                                {% if societeliedata.societelie2 is defined and societeliedata.societelie2 != \"\" %}
                                                    <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', {id : societeliedata.societeId2} ) }}\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                {% else %}
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                {% endif %}
                                            {{ form_widget(contact_forme.societelie.vars.prototype.idSociete2) }}
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            {{ form_label(contact_forme.societelie.vars.prototype.idSociete3, '',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                                {% if societeliedata.societelie3 is defined and societeliedata.societelie3 != \"\" %}
                                                    <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', {id : societeliedata.societeId3} ) }}\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                {% else %}
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                {% endif %}
                                            {{ form_widget(contact_forme.societelie.vars.prototype.idSociete3) }}
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            {{ form_label(contact_forme.societelie.vars.prototype.idSociete4, '',{
                                                'label_attr': {'class': 'font-weight-bold'}
                                            }) }}
                                                {% if societeliedata.societelie4 is defined and societeliedata.societelie4 != \"\" %}
                                                    <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', {id : societeliedata.societeId4} ) }}\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                {% else %}
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                {% endif %}
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
        </div>                     
                  
    <div class=\"row col-md-12\">
        <fieldset class=\"mx-3\">
            <legend>CONTACTS</legend>
            <a href=\"javascript:void(0)\" id=\"adcontact\" class=\"row plus-link\" title=\"Ajouter un nouveau contact\">
                <span class=\"fa-stack fa-1x\">
                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                    <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                </span>
            </a>
            <div class=\"col-md-12 p-0\" id=\"contactadded\" data-prototype=\"{{ form_widget(contact_forme.contactsoc.vars.prototype)|e('html_attr') }}\">
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
                            {{ form_label(contact_forme.interlocuteur, 'Interlocuteur',{
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
                        <div class=\"text-center col-sm-1\">
                            {{ form_label(contact_forme.Fax, 'Fax',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
                            {{ form_widget(contact_forme.Fax,{'attr':{'pattern':'.{14,14}', 'maxlength':\"14\"}}) }}
                        </div>
                        <div class=\"text-center col-sm-2\">
                            {{ form_label(contact_forme.Email, 'Email',{
                                'label_attr': {'class': 'font-weight-bold text-center'}
                            }) }}
                            {{ form_widget(contact_forme.Email) }}
                        </div>
                    </div>
                    <!-- Other contact for this contact -->
                    {% for contactsoc in contact_forme.contactsoc.children %}
                        <div class=\"row contact_added\">
                            <button type=\"button\" class=\"removecontactelement close\"><span aria-hidden=\"true\">×</span></button>
                            <div id=\"contact_contactsoc_{{ loop.index }}\" class=\"p-r\">
                            <div class=\"col-sm-1 text-center\">
                                {{ form_label(contactsoc.idCivilite, 'Civilité',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contactsoc.idCivilite) }}
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                {{ form_label(contactsoc.nom, 'Nom',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contactsoc.nom) }}
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                {{ form_label(contactsoc.prenom, 'Prenom',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contactsoc.prenom) }}
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                {{ form_label(contactsoc.qualite, 'Qualité',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contactsoc.qualite) }}
                            </div>
                            <div class=\"col-sm-1\">
                                {{ form_label(contactsoc.interlocuteur, 'Interlocuteur',{
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                                {{ form_widget(contactsoc.interlocuteur) }}
                            </div>
                            <div class=\"text-center col-sm-2\">
                                {{ form_label(contactsoc.Telephone, 'Telephone',{
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
                                {{ form_widget(contactsoc.Telephone) }}
                            </div>
                            <div class=\"text-center col-sm-2\">
                                {{ form_label(contactsoc.Fax, 'Fax',{
                                    'label_attr': {'class': 'font-weight-bold text-center'}
                                }) }}
                                {{ form_widget(contactsoc.Fax) }}
                            </div>
                            <div class=\"text-center col-sm-1\">
                                {{ form_label(contactsoc.children[\"Portable\"], 'Portable',{
                                    'label_attr': {'class': 'font-weight-bold text-center'}
                                }) }}
                                {{ form_widget(contactsoc.Portable) }}
                            </div>
                            <div class=\"text-center col-sm-2\">
                                {{ form_label(contactsoc.Email, 'Email',{
                                    'label_attr': {'class': 'font-weight-bold text-center'}
                                }) }}
                                {{ form_widget(contactsoc.Email) }}
                            </div>
                            </div>
                        </div>
                    {% endfor %}
                </div> 
            </fieldset>
            <div class=\"col-sm-9 mt-4\">
                    <fieldset><legend>DOSSIERS</legend>
            <table class=\"table table-sm table-striped\">
                    <thead>
                        <tr class=\"bg-info text-light\">
                            <th>Structure</th>
                            <th>Date de création</th>
                            <th>Intitulé du stage</th>
                            <th>Date fin stage</th>
                            <th>Date estimée pour récépt accord</th>
                            <th>Montant accordé</th>
                            <th>Date estimée pour clôture</th>
                            <th>Commercial</th>
                        </tr>
                    </thead>   
            <tbody>           
            {% if dossierClient is not null %}                  
                {% for dossier in dossierClient %}
                                           
                        
                            <tr data-id=\"{{ dossier.id }}\" data-href=\"{{ path('Liste_Dossiers_Controller/visualiserDossier', {id:dossier.id}) }}\">
                                <td>{{ dossier.structure }}</td>
                                <td>{{ (( (dossier.dateEnvoi | date('d-m-Y')) == '31-12-1969') or ((dossier.dateEnvoi | date('d-m-Y')) == '01-01-1970') or ((dossier.dateEnvoi | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateEnvoi | date('d-m-Y') }}</td>
                                <td>{{ dossier.themeformation }}</td>
                                <td>{{ (( (dossier.dateFinPeriode | date('d-m-Y')) == '31-12-1969') or ((dossier.dateFinPeriode | date('d-m-Y')) == '01-01-1970') or ((dossier.dateFinPeriode | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateFinPeriode | date('d-m-Y')}}</td>
                                <td>
                                    {% if dossier.dateAccord is not empty %}
                                        {{ (( (dossier.dateAccord | date('d-m-Y')) == '31-12-1969') or ((dossier.dateAccord | date('d-m-Y')) == '01-01-1970') or ((dossier.dateAccord | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateAccord | date('d-m-Y')}}
                                    {% else %}
                                        {{ dossier.dateEnvoi | date_modify('+3 month') | date('d-m-Y') }}
                                    {% endif %}
                                </td>
                                <td>{{ dossier.mntAccorde |number_format(2, ',', ' ') }}</td>
            {#                    <td>  {{ (( (dossier.dateFinPeriode | date('d-m-Y')) == '31-12-1969') or ((dossier.dateFinPeriode | date('d-m-Y')) == '01-01-1970') or ((dossier.dateFinPeriode | date('d-m-Y')) == '30-11--0001')) ? '' : dossier.dateFinPeriode | date('d-m-Y')}}</td>#}
                                {# APR-194 : Date estimee pour clôtre = date de création du dossier + 6 mois #}
                                <td>{{ dossier.dateEnvoi | date_modify('+6 month') | date('d-m-Y') }}</td>
                                <td>{{ dossier.commercial }}</td>
                            </tr>
                {% endfor %}
            {% endif %}
        </tbody>
                </table>
        </fieldset>        
            </div>
              <div class=\"col-sm-9 mt-4\">
            <fieldset><legend>PROPALES</legend>
             <table class=\"table table-sm table-striped\">
                <thead>
                <tr class=\"bg-info text-light\">
                    <th>Entité</th>
                    <th>Statut</th>
                    <th>Commercial</th>
                    <th>Client</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Coût Ht</th>
                    <th>Fiabilité</th>
                </tr>
                </thead>
                <tbody>
                {% if clientPropal is not null %}                  
                {% for propal in clientPropal %}
                    <tr data-propal-id=\"{{ propal.idpropal }}\" data-href=\"{{ path('propal_show', { id : propal.idpropal} ) }}\">
                        <td>{{ propal.entite }}</td>
                        <td>{{ propal.statut }}</td>
                        <td>{{ propal.commercial }}</td>
                        <td>{{ propal.client }}</td>
                        <td>{% if propal.type == 1 %} Entreprise {% else %} Particulier {% endif %}</td>
                        <td>{{ propal.nom }}</td>
                        <td> {{ propal.prenom}} </td>
                        {% if propal.coutht is not null %}
                        <td> {{ propal.coutht}} €</td>
                        {% else %}
                        <td> {{ propal.coutht}}</td>
                        {% endif %}
                        {% if propal.fiabilite == 'Froid' %}
                        <td class=\"bg-info text-white\"> {{ propal.fiabilite}} </td>
                        {% elseif propal.fiabilite == 'Chaud' %}
                        <td class=\"bg-danger text-white\"> {{ propal.fiabilite}} </td>
                        {% elseif propal.fiabilite == 'Tiede' %}
                        <td class=\"bg-warning text-white\"> {{ propal.fiabilite}} </td>
                        {% else %}
                        <td> {{ propal.fiabilite}} </td>
                        {% endif %}
                    </tr>
                {% endfor %}
                {% endif %}
                </tbody>
            </table>
         </fieldset>        
        </div>


            <fieldset class=\"col-sm-12 p-3 m-3 well\">
                <legend>COMMENTAIRES</legend>
                <a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                {#<center>
                    <input type=\"button\" class=\"btn btn-warning\" style=\"border-radius: 5%;\" name=\"ajcom\" id=\"ajcom\" value=\"Ajouter un commentaire\">
                </center>#}
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
                    {% for comment in contact_forme.commentaires %}
                        <tr>
                            <th colspan=\"6\">
                                <div class=\"row\">
                                    <div class=\"comment_contains\">
                                        <button type=\"button\" class=\"removecommentelement close\"><span aria-hidden=\"true\">×</span></button>
                                        <div id=\"contact_commentaires_{{ loop.index }}\" class=\"comment_contains_form\">
                                            <div class=\"col-sm-2 form-group\">
                                                {{ form_widget(comment.children[\"dateAdd\"]) }}
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                {{ form_widget(comment.children[\"texteNote\"]) }}
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                {{ form_widget(comment.children[\"idAction\"]) }}
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                {{ form_widget(comment.children[\"dateAction\"]) }}
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                {{ form_widget(comment.children[\"idUserAction\"]) }}
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                {{ form_widget(comment.children[\"idActionStatut\"]) }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                    {% endfor %}
                    </tbody>
                    </thead>
                </table>
            </fieldset>
            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                        <a href=\"{{ path(\"Liste_propositions_commerciales_Controller/ajoutpropal\", {id : contact.id }) }}\" class=\"btn btn-primary btn-block\">Créer Propal</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                        <a name=\"editerdocument\" data-toggle=\"modal\" data-target=\"#modalEditerDocument\" class=\"btn btn-primary btn-block\" style=\"color:white;\">Editer un document</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                        <button type=\"button\" id=\"editthis\" class=\"btn btn-primary btn-block\">MAJ Fiche</button>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                        <a href=\"{{ path(\"Liste_Dossiers_Controller\", { 'client' : contact.nomStr } ) }}\" class=\"btn btn-primary btn-block\">Dossiers</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                        <a href=\"{{ path(\"Liste_Formation_Mise_Place_Controller\") }}\" class=\"btn btn-primary btn-block\">Formations</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-12 p-3\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div id=\"saveedit\" class=\"btn-group mr-2 d-none\" role=\"group\" aria-label=\"First group\">
                        <button type=\"submit\" class=\"btn btn-danger btn-block\">Mettre à jour</button>
                    </div>
                </div>
            </div>

        </div>
        {{ form_end(contact_forme,{'render_rest': false}) }}
    </div>
{% endblock %}

{% block modal %}
    <div class=\"modal fade\" id=\"modalopcaadd\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout Qualité</h5>
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
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Ajout activité</h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    {{ render(controller('App\\\\Controller\\\\SecteurActiviteController::SecteurActiviteForm')) }}
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalQualiteAdd\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
            <div class=\"modal-content list-filter\">
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
    
    <div class=\"modal fade\" id=\"modalEditerDocument\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\" role=\"document\">
            <div class=\"modal-content list-filter\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                        <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                            <a href=\"{{ path(\"client_prospect_printdocument\", { id : contact.id, type: 1} ) }}\" class=\"btn btn-primary btn-block\">Bon de commmande</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                            <a href=\"{{ path(\"client_prospect_printdocument\", { id : contact.id, type: 2}) }}\" class=\"btn btn-primary btn-block\">Convention</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                            <a href=\"{{ path(\"client_prospect_printdocument\", { id : contact.id, type: 3}) }}\" class=\"btn btn-primary btn-block\">Rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    {% include 'contact/Parts/contact.js.html.twig' %}
    <script language=\"javascript\">
        \$(document).ready( function() {
            \$(\"#contactgenerale *\").prop(\"disabled\", true);
            \$(\"#content_bouton .btn\").prop(\"disabled\", false);
            \$(\"#editthis\").click(function(){
                \$(\"#contactgenerale *\").prop(\"disabled\", false);
                \$(\"#saveedit\").removeClass(\"d-none\");
                \$(\"#saveedit\").find('button').prop(\"disabled\", false);
                \$(\"#ajcom\").prop(\"disabled\", false);
            });
            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var societelie = {{ societeliedata|json_encode|raw }};
            for (let key in societelie){
                if(societelie.hasOwnProperty(key)){
                    if(societelie[key] != null){
                        var dataselect = {
                            id: societelie[key],
                            text: societelie[key]
                        }
                        var newOption = new Option(dataselect.text, dataselect.id, true, true);
                        \$('.'+key).append(newOption).trigger('change');
                    }
                }
            }
            var adressesville = {{ adressesvilledata|json_encode|raw }}
            for(let key in adressesville){
                if(adressesville[key] != null & adressesville[key] > 0){
                    setVilleValue(key,adressesville[key]);
                }
                \$('#contact_adresses_'+key+'_idVille').select2({
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
            }
            function setVilleValue(key,idville) {
                var villeSelect = \$('#contact_adresses_'+key+'_idVille');
                if ( idville > 0) {
                    var ville_id = idville;
                    var url = '{{ path('crm.opca.oneVille.asynch-search', {idVille:'ville_id'}) }}';
                    url = url.replace('ville_id', ville_id);
                    \$.ajax({
                        type: 'GET',
                        url: url
                    }).then(function (data) {
                        // create the option and append to Select2
                        var dataSelected = (data['results'][0]);
                        var option = new Option(dataSelected.text, dataSelected.text, true, true);
                        villeSelect.append(option).trigger('change');
                        // manually trigger the `select2:select` event
                        villeSelect.trigger({
                            type: 'select2:select',
                            params: {
                                data: data
                            }
                        });
                    });
                }
            }
            var opca1 = {{  opca1|json_encode|raw  }};
            var opcaTns = {{  idOpcaTns|json_encode|raw  }};
            if (opca1) {
                setSelectValue('opca', opca1);
            }
            if (opcaTns) {
                setSelectValue('idOpcaTns', opcaTns);
            }
            
            // APR-121
            var secteurActiviteOptions = {{ secteurActiviteOptions | json_encode | raw }};
            
            if (secteurActiviteOptions) {
                setSelectValue(\"idSecteur\", secteurActiviteOptions);
            }
            
            var activiteTNSOptions = {{ activiteTNSOptions | json_encode | raw }};
            
            if (activiteTNSOptions) {
                setSelectValue(\"activiteTns\", activiteTNSOptions);
            }
            
            // Mise à jour de la valeur pour un champ d'autocompletion
            function setSelectValue(key,data) {
                var opcaSelect = \$('#contact_'+key);
                // create the option and append to Select2
                var option = new Option(data['text'], data['id'], true, true);
                opcaSelect.append(option).trigger('change');
                // manually trigger the `select2:select` event
                opcaSelect.trigger({
                    type: 'select2:select',
                    params: {
                        data: data
                    }
                });
            }
            \$(\".removeaddresseelement\").bind('click',function(event){
                \$(this).parents(\".form_adresse\").remove();
            });
            \$(\".removecontactelement\").bind('click',function(event){
                \$(this).parents(\".contact_added\").remove();
            });
            \$(\".removecommentelement\").bind('click',function(event){
                \$(this).parents(\".comment_contains\").parents(\"tr\").remove();
            });
            
            {# APR-183 : HACK bug firefox #}
            \$('#saveedit').on('click', function(e){
                e.preventDefault();
                let commercialId = \$('#contact_id_commercial').val();
                let structureId = \$('#contact_structure').val();
                let contactType = \$('#contact_id_type').val();
                \$('#contact_id_commercial').val(commercialId);
                \$('#contact_structure').val(structureId);
                \$('#contact_id_type').val(contactType);
                \$('#contactgenerale').submit();
            });
            {# FIN APR-183 #}
        });
    </script>
{% endblock %}", "contact/edit.html.twig", "/home/jeremy/Bureau/project/app/templates/contact/edit.html.twig");
    }
}
