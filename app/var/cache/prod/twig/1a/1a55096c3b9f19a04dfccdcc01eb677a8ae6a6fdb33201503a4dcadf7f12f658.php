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
class __TwigTemplate_2b83e62bef16a5e541faae4dce15fbb20dcc1b5170d12b04ab72e995bb461199 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/edit.html.twig", 1);
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
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css\">
";
    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 21), "flashBag", [], "any", false, false, false, 21), "get", [0 => "error_message"], "method", false, false, false, 21));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, false, false, 26), "flashBag", [], "any", false, false, false, 26), "get", [0 => "success_message"], "method", false, false, false, 26));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contact_forme"] ?? null), 'form_start');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nomStr", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Société"]);
        // line 45
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nomStr", [], "any", false, false, false, 46), 'widget');
        echo "
                            </div>
                            <div class=\"form-group col-md-4 text-center\">
                                ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idSecteur", [], "any", false, false, false, 49), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Activité entreprise"]);
        // line 51
        echo "
                                <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"ctn\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idSecteur", [], "any", false, false, false, 53), 'widget');
        echo "
                            </div>
                            <div class=\"form-group col-md-3 text-center\">
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "noSiret", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Siret entreprise"]);
        // line 58
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "noSiret", [], "any", false, false, false, 59), 'widget', ["attr" => ["pattern" => ".{14,14}", "class" => "siret_format"]]);
        echo "
                            </div>
                            <div class=\"form-group col-md-2 text-center\">
                                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "noNaf", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "NAF entreprise"]);
        // line 64
        echo "
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "noNaf", [], "any", false, false, false, 65), 'widget', ["attr" => ["pattern" => "[0-9]{4}[A-Za-z]{1}", "class" => "naf_format"]]);
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"form-group col-md-2 text-center\">
                                ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "effectif", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nbr salariés"]);
        // line 72
        echo "
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "effectif", [], "any", false, false, false, 73), 'widget');
        echo "
                            </div>
                            <div class=\"form-group col-md-3 text-center\">
                                ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "opca", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO1"]);
        // line 78
        echo "
                                <!-- <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalopcaadd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a> -->
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "opca", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                            
                            <div class=\"form-group col-md-2 text-center\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "noAdherent", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° Adhérent"]);
        // line 86
        echo "
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "noAdherent", [], "any", false, false, false, 87), 'widget');
        echo "
                            </div>

                            <div class=\"col-md-3 text-center\">
                                ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_commercial", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial"]);
        // line 93
        echo "
                                ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_commercial", [], "any", false, false, false, 94), 'widget', ["attr" => ["autocomplete" => "off"]]);
        echo "
                            </div>
                            
                            <div class=\"col-md-2 text-center\">
                                ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "structure", [], "any", false, false, false, 98), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Entité"]);
        // line 100
        echo "
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "structure", [], "any", false, false, false, 101), 'widget');
        echo "
                            </div>
                        ";
        // line 104
        echo "                            <div class=\"form-group col-md-10 text-center\">
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "sexe", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Identifiants OCPO"]);
        // line 107
        echo "
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "sexe", [], "any", false, false, false, 108), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siretTns", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Siret TNS / N° TI"]);
        // line 119
        echo "
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siretTns", [], "any", false, false, false, 120), 'widget', ["attr" => ["pattern" => ".{14,14}", "class" => "number-format", "class" => "siret_format"]]);
        echo "
                            </div>
                            <div class=\"col-md-2 text-center\">
                                ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nafTns", [], "any", false, false, false, 123), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "NAF TNS"]);
        // line 125
        echo "
                                ";
        // line 126
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nafTns", [], "any", false, false, false, 126), 'widget', ["attr" => ["pattern" => "[0-9]{4}[A-Za-z]{1}", "class" => "naf_format"]]);
        echo "
                            </div>
                            <div class=\"col-md-4 text-center\">
                                ";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "activiteTns", [], "any", false, false, false, 129), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Activité TNS"]);
        // line 131
        echo "
                                <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"tns\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "activiteTns", [], "any", false, false, false, 133), 'widget');
        echo "
                            </div>
                            <div class=\"text-center col-md-3\">
                                ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idOpcaTns", [], "any", false, false, false, 136), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO TNS"]);
        // line 138
        echo "
                                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idOpcaTns", [], "any", false, false, false, 139), 'widget');
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
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "adresses", [], "any", false, false, false, 152), "vars", [], "any", false, false, false, 152), "prototype", [], "any", false, false, false, 152), 'widget'), "html_attr");
        echo "\">
                            <!-- Other adresse -->
                            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "adresses", [], "any", false, false, false, 154));
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 159)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["adresse"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"]]);
            // line 161
            echo "
                                            ";
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 162)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["adresse"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 165)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["codePostal"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Code Postal"]);
            // line 167
            echo "
                                            ";
            // line 168
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 168)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["codePostal"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2 text-center\">
                                            ";
            // line 171
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 171)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["idVille"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold d-inline text-center"], "label" => "Ville"]);
            // line 173
            echo " <a id=\"add-ville-link\" class=\"d-inline\" data-toggle=\"modal\" data-target=\"#modal-ville-add\" title=\"Ajouter une ville\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            
                                            ";
            // line 175
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 175)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["idVille"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-1\" align=\"center\">
                                            ";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 178)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["principal"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 181
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 181)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["type_adresse"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Type adresse"]);
            // line 183
            echo "
                                            ";
            // line 184
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 184)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["type_adresse"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 187
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 187)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["comp_adresse"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Infos accès"]);
            // line 189
            echo "
                                            ";
            // line 190
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 190)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["comp_adresse"] ?? null) : null), 'widget');
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_type", [], "any", false, false, false, 203), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Client / Prospect"]);
        // line 205
        echo "
                                    ";
        // line 206
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_type", [], "any", false, false, false, 206), 'widget');
        echo "
                                </div>
                                <div class=\"col-sm-12\">
                                    <label class=\"font-weight-bold text-center col-sm-12\">Sociétés liées</label>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 212), "vars", [], "any", false, false, false, 212), "prototype", [], "any", false, false, false, 212), "idSociete1", [], "any", false, false, false, 212), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 214
        echo "
                                            ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "prototype", [], "any", false, false, false, 215), "idSociete1", [], "any", false, false, false, 215), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 218), "vars", [], "any", false, false, false, 218), "prototype", [], "any", false, false, false, 218), "idSociete2", [], "any", false, false, false, 218), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 220
        echo "
                                            ";
        // line 221
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 221), "vars", [], "any", false, false, false, 221), "prototype", [], "any", false, false, false, 221), "idSociete2", [], "any", false, false, false, 221), 'widget');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 226), "vars", [], "any", false, false, false, 226), "prototype", [], "any", false, false, false, 226), "idSociete3", [], "any", false, false, false, 226), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 228
        echo "
                                            ";
        // line 229
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 229), "vars", [], "any", false, false, false, 229), "prototype", [], "any", false, false, false, 229), "idSociete3", [], "any", false, false, false, 229), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 232), "vars", [], "any", false, false, false, 232), "prototype", [], "any", false, false, false, 232), "idSociete4", [], "any", false, false, false, 232), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 234
        echo "
                                            ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 235), "vars", [], "any", false, false, false, 235), "prototype", [], "any", false, false, false, 235), "idSociete4", [], "any", false, false, false, 235), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "solde", [], "any", false, false, false, 240), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Solde Dispo"]);
        // line 242
        echo "
                                    ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "solde", [], "any", false, false, false, 243), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 246
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "soldeDate", [], "any", false, false, false, 246), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Au"]);
        // line 248
        echo "
                                    ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "soldeDate", [], "any", false, false, false, 249), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siteweb", [], "any", false, false, false, 252), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 254
        echo "
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text\">http://</div>
                                        </div>
                                        ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siteweb", [], "any", false, false, false, 259), 'widget');
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
        // line 278
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "contactsoc", [], "any", false, false, false, 278), "vars", [], "any", false, false, false, 278), "prototype", [], "any", false, false, false, 278), 'widget'), "html_attr");
        echo "\">
                    <div class=\"row\">
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 281
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idCivilite", [], "any", false, false, false, 281), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
        // line 283
        echo "
                            ";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idCivilite", [], "any", false, false, false, 284), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nom", [], "any", false, false, false, 287), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 289
        echo "
                            ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nom", [], "any", false, false, false, 290), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "prenom", [], "any", false, false, false, 293), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
        // line 295
        echo "
                            ";
        // line 296
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "prenom", [], "any", false, false, false, 296), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "qualite", [], "any", false, false, false, 299), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
        // line 301
        echo "
                            <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalQualiteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "qualite", [], "any", false, false, false, 303), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1\">
                            ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "interlocuteur", [], "any", false, false, false, 306), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Interlocuteur"]);
        // line 308
        echo "
                            ";
        // line 309
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "interlocuteur", [], "any", false, false, false, 309), 'widget');
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Telephone", [], "any", false, false, false, 312), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Téléphone"]);
        // line 314
        echo "
                            ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Telephone", [], "any", false, false, false, 315), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Portable", [], "any", false, false, false, 318), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Portable"]);
        // line 320
        echo "
                            ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Portable", [], "any", false, false, false, 321), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-1\">
                            ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Fax", [], "any", false, false, false, 324), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
        // line 326
        echo "
                            ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Fax", [], "any", false, false, false, 327), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Email", [], "any", false, false, false, 330), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 332
        echo "
                            ";
        // line 333
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Email", [], "any", false, false, false, 333), 'widget');
        echo "
                        </div>
                    </div>
                    <!-- Other contact for this contact -->
                    ";
        // line 337
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "contactsoc", [], "any", false, false, false, 337), "children", [], "any", false, false, false, 337));
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
            // line 338
            echo "                        <div class=\"row contact_added\">
                            <button type=\"button\" class=\"removecontactelement close\"><span aria-hidden=\"true\">×</span></button>
                            <div id=\"contact_contactsoc_";
            // line 340
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 340), "html", null, true);
            echo "\" class=\"p-r\">
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 342
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "idCivilite", [], "any", false, false, false, 342), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
            // line 344
            echo "
                                ";
            // line 345
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "idCivilite", [], "any", false, false, false, 345), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 348
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "nom", [], "any", false, false, false, 348), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
            // line 350
            echo "
                                ";
            // line 351
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "nom", [], "any", false, false, false, 351), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 354
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "prenom", [], "any", false, false, false, 354), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
            // line 356
            echo "
                                ";
            // line 357
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "prenom", [], "any", false, false, false, 357), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 360
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "qualite", [], "any", false, false, false, 360), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
            // line 362
            echo "
                                ";
            // line 363
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "qualite", [], "any", false, false, false, 363), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1\">
                                ";
            // line 366
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "interlocuteur", [], "any", false, false, false, 366), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Interlocuteur"]);
            // line 368
            echo "
                                ";
            // line 369
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "interlocuteur", [], "any", false, false, false, 369), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 372
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Telephone", [], "any", false, false, false, 372), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Telephone"]);
            // line 374
            echo "
                                ";
            // line 375
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Telephone", [], "any", false, false, false, 375), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 378
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Fax", [], "any", false, false, false, 378), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
            // line 380
            echo "
                                ";
            // line 381
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Fax", [], "any", false, false, false, 381), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-1\">
                                ";
            // line 384
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["contactsoc"], "children", [], "any", false, false, false, 384)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["Portable"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Portable"]);
            // line 386
            echo "
                                ";
            // line 387
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Portable", [], "any", false, false, false, 387), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 390
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Email", [], "any", false, false, false, 390), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
            // line 392
            echo "
                                ";
            // line 393
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Email", [], "any", false, false, false, 393), 'widget');
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
        // line 398
        echo "                </div> 
            </fieldset>
";
        // line 400
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dossierClient"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
            // line 401
            if ((null === $context["dossier"])) {
            } else {
                // line 403
                echo "        <div class=\"col-sm-9 mt-4\">
            <fieldset>
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
                            <th>OPCO</th>
                            <th>Commercial</th>
                        </tr>
                    </thead>
                    <tbody> 
                        
                            <tr data-id=\"";
                // line 421
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 421), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 421)]), "html", null, true);
                echo "\">
                                <td>";
                // line 422
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "idStructure", [], "any", false, false, false, 422), "html", null, true);
                echo "</td>
                                <td>";
                // line 423
                (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 423), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 423), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 423), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 423), "d-m-Y"), "html", null, true))));
                echo "</td>
                                <td>";
                // line 424
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "themeformation", [], "any", false, false, false, 424), "html", null, true);
                echo "</td>
                                <td>";
                // line 425
                (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 425), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 425), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 425), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 425), "d-m-Y"), "html", null, true))));
                echo "</td>
                                <td>
                                    ";
                // line 427
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 427))) {
                    // line 428
                    echo "                                        ";
                    (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 428), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 428), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 428), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 428), "d-m-Y"), "html", null, true))));
                    echo "
                                    ";
                } else {
                    // line 430
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 430), "+3 month"), "d-m-Y"), "html", null, true);
                    echo "
                                    ";
                }
                // line 432
                echo "                                </td>
                                <td>";
                // line 433
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "mntAccorde", [], "any", false, false, false, 433), 2, ",", " "), "html", null, true);
                echo "</td>
            ";
                // line 435
                echo "                                ";
                // line 436
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 436), "+6 month"), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 437
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "idOpca", [], "any", false, false, false, 437), "html", null, true);
                echo "</td>
                                <td>";
                // line 438
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "idCommercial", [], "any", false, false, false, 438), "html", null, true);
                echo "</td>
                            </tr>
                        
                    </tbody>
                </table>
            </fieldset>
        </div>
";
            }
            // line 446
            echo "       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 447
        echo "            <fieldset class=\"col-sm-12 p-3 m-3 well\">
                <legend>COMMENTAIRES</legend>
                <a href=\"javascript:void(0)\" id=\"ajcom\" class=\"row plus-link\" title=\"Ajouter un nouveau commentaire\">
                    <span class=\"fa-stack fa-1x\">
                        <i class=\"fas fa-circle fa-stack-2x\"></i>
                        <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                    </span>
                </a>
                ";
        // line 458
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
        // line 468
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "commentaires", [], "any", false, false, false, 468), "vars", [], "any", false, false, false, 468), "prototype", [], "any", false, false, false, 468), 'widget'), "html_attr");
        echo "\">
                    ";
        // line 469
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "commentaires", [], "any", false, false, false, 469));
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
            // line 470
            echo "                        <tr>
                            <th colspan=\"6\">
                                <div class=\"row\">
                                    <div class=\"comment_contains\">
                                        <button type=\"button\" class=\"removecommentelement close\"><span aria-hidden=\"true\">×</span></button>
                                        <div id=\"contact_commentaires_";
            // line 475
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 475), "html", null, true);
            echo "\" class=\"comment_contains_form\">
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 477
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 477)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["dateAdd"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 480)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["texteNote"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 483
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 483)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["idAction"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 486
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 486)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["dateAction"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 489
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 489)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["idUserAction"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 492
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 492)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["idActionStatut"] ?? null) : null), 'widget');
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
        // line 500
        echo "                    </tbody>
                    </thead>
                </table>
            </fieldset>
            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                        <a href=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller/ajoutpropal", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 507)]), "html", null, true);
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
        // line 516
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller", ["client" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "nomStr", [], "any", false, false, false, 516)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Dossiers</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                        <a href=\"";
        // line 519
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
        // line 532
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contact_forme"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
    }

    // line 536
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 537
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
        // line 547
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
        // line 562
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
        // line 577
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\QualiteController::QualiteFormAdd"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 583
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
        // line 593
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VilleController::create"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 599
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
        // line 611
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 611), "type" => 1]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Bon de commmande</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                            <a href=\"";
        // line 614
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 614), "type" => 2]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Convention</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                            <a href=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 617), "type" => 3]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 626
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 627
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 632
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "contact/edit.html.twig", 632)->display($context);
        // line 633
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
        // line 644
        echo json_encode(($context["societeliedata"] ?? null));
        echo ";
            if(societelie){
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
            }
           
            var adressesville = ";
        // line 660
        echo json_encode(($context["adressesvilledata"] ?? null));
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
        // line 670
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
        // line 685
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
        // line 705
        echo json_encode(($context["opca1"] ?? null));
        echo ";
            var opcaTns = ";
        // line 706
        echo json_encode(($context["idOpcaTns"] ?? null));
        echo ";
            if (opca1) {
                setSelectValue('opca', opca1);
            }
            if (opcaTns) {
                setSelectValue('idOpcaTns', opcaTns);
            }
            
            // APR-121
            var secteurActiviteOptions = ";
        // line 715
        echo json_encode(($context["secteurActiviteOptions"] ?? null));
        echo ";
            
            if (secteurActiviteOptions) {
                setSelectValue(\"idSecteur\", secteurActiviteOptions);
            }
            
            var activiteTNSOptions = ";
        // line 721
        echo json_encode(($context["activiteTNSOptions"] ?? null));
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
        // line 752
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
        // line 763
        echo "        });
    </script>
";
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
        return array (  1346 => 763,  1334 => 752,  1301 => 721,  1292 => 715,  1280 => 706,  1276 => 705,  1253 => 685,  1235 => 670,  1222 => 660,  1203 => 644,  1190 => 633,  1188 => 632,  1179 => 627,  1175 => 626,  1163 => 617,  1157 => 614,  1151 => 611,  1137 => 599,  1129 => 593,  1117 => 583,  1109 => 577,  1091 => 562,  1073 => 547,  1061 => 537,  1057 => 536,  1050 => 532,  1034 => 519,  1028 => 516,  1016 => 507,  1007 => 500,  985 => 492,  979 => 489,  973 => 486,  967 => 483,  961 => 480,  955 => 477,  950 => 475,  943 => 470,  926 => 469,  922 => 468,  910 => 458,  900 => 447,  894 => 446,  883 => 438,  879 => 437,  874 => 436,  872 => 435,  868 => 433,  865 => 432,  859 => 430,  853 => 428,  851 => 427,  846 => 425,  842 => 424,  838 => 423,  834 => 422,  828 => 421,  808 => 403,  805 => 401,  801 => 400,  797 => 398,  778 => 393,  775 => 392,  773 => 390,  767 => 387,  764 => 386,  762 => 384,  756 => 381,  753 => 380,  751 => 378,  745 => 375,  742 => 374,  740 => 372,  734 => 369,  731 => 368,  729 => 366,  723 => 363,  720 => 362,  718 => 360,  712 => 357,  709 => 356,  707 => 354,  701 => 351,  698 => 350,  696 => 348,  690 => 345,  687 => 344,  685 => 342,  680 => 340,  676 => 338,  659 => 337,  652 => 333,  649 => 332,  647 => 330,  641 => 327,  638 => 326,  636 => 324,  630 => 321,  627 => 320,  625 => 318,  619 => 315,  616 => 314,  614 => 312,  608 => 309,  605 => 308,  603 => 306,  597 => 303,  593 => 301,  591 => 299,  585 => 296,  582 => 295,  580 => 293,  574 => 290,  571 => 289,  569 => 287,  563 => 284,  560 => 283,  558 => 281,  552 => 278,  530 => 259,  523 => 254,  521 => 252,  515 => 249,  512 => 248,  510 => 246,  504 => 243,  501 => 242,  499 => 240,  491 => 235,  488 => 234,  486 => 232,  480 => 229,  477 => 228,  475 => 226,  467 => 221,  464 => 220,  462 => 218,  456 => 215,  453 => 214,  451 => 212,  442 => 206,  439 => 205,  437 => 203,  427 => 195,  408 => 190,  405 => 189,  403 => 187,  397 => 184,  394 => 183,  392 => 181,  386 => 178,  380 => 175,  376 => 173,  374 => 171,  368 => 168,  365 => 167,  363 => 165,  357 => 162,  354 => 161,  352 => 159,  347 => 157,  343 => 155,  326 => 154,  321 => 152,  305 => 139,  302 => 138,  300 => 136,  294 => 133,  290 => 131,  288 => 129,  282 => 126,  279 => 125,  277 => 123,  271 => 120,  268 => 119,  266 => 117,  254 => 108,  251 => 107,  249 => 105,  246 => 104,  241 => 101,  238 => 100,  236 => 98,  229 => 94,  226 => 93,  224 => 91,  217 => 87,  214 => 86,  212 => 84,  205 => 80,  201 => 78,  199 => 76,  193 => 73,  190 => 72,  188 => 70,  180 => 65,  177 => 64,  175 => 62,  169 => 59,  166 => 58,  164 => 56,  158 => 53,  154 => 51,  152 => 49,  146 => 46,  143 => 45,  141 => 43,  129 => 34,  124 => 31,  115 => 28,  112 => 27,  107 => 26,  98 => 23,  95 => 22,  91 => 21,  82 => 15,  78 => 14,  74 => 12,  70 => 11,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/edit.html.twig", "/var/www/templates/contact/edit.html.twig");
    }
}
