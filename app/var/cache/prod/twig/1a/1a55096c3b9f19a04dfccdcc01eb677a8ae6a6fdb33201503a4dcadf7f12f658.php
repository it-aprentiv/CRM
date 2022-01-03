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
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_commercial", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Commercial"]);
        // line 94
        echo "
                                ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_commercial", [], "any", false, false, false, 95), 'widget', ["attr" => ["autocomplete" => "off"]]);
        echo "
        
                            </div>
                            
                            <div class=\"col-md-2 text-center\">
                                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "structure", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Entité"]);
        // line 102
        echo "
                                ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "structure", [], "any", false, false, false, 103), 'widget');
        echo "
                            </div>
                        ";
        // line 106
        echo "                            <div class=\"form-group col-md-10 text-center\">
                                    ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "sexe", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Identifiants OCPO"]);
        // line 109
        echo "
                                    ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "sexe", [], "any", false, false, false, 110), 'widget');
        echo "
                                </div>
                        </div>
                    </fieldset>
                    
                    <fieldset class=\"mt-3\">
                        <legend>Infos TNS</legend>
                        <div class=\"row\">
                            <div class=\"form-group col-md-3 text-center\">
                                ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siretTns", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Siret TNS / N° TI"]);
        // line 121
        echo "
                                ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siretTns", [], "any", false, false, false, 122), 'widget', ["attr" => ["pattern" => ".{14,14}", "class" => "number-format", "class" => "siret_format"]]);
        echo "
                            </div>
                            <div class=\"col-md-2 text-center\">
                                ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nafTns", [], "any", false, false, false, 125), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "NAF TNS"]);
        // line 127
        echo "
                                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nafTns", [], "any", false, false, false, 128), 'widget', ["attr" => ["pattern" => "[0-9]{4}[A-Za-z]{1}", "class" => "naf_format"]]);
        echo "
                            </div>
                            <div class=\"col-md-4 text-center\">
                                ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "activiteTns", [], "any", false, false, false, 131), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Activité TNS"]);
        // line 133
        echo "
                                <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalActiviteAdd\" data-forselect=\"tns\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "activiteTns", [], "any", false, false, false, 135), 'widget');
        echo "
                            </div>
                            <div class=\"text-center col-md-3\">
                                ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idOpcaTns", [], "any", false, false, false, 138), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO TNS"]);
        // line 140
        echo "
                                ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idOpcaTns", [], "any", false, false, false, 141), 'widget');
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
        // line 154
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "adresses", [], "any", false, false, false, 154), "vars", [], "any", false, false, false, 154), "prototype", [], "any", false, false, false, 154), 'widget'), "html_attr");
        echo "\">
                            <!-- Other adresse -->
                            ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "adresses", [], "any", false, false, false, 156));
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
            // line 157
            echo "                                <div class=\"row col-sm-12 pr-0 form_adresse\">
                                    <button type='button' class='removeaddresseelement close' type='button'><span aria-hidden='true'>×</span></button>
                                    <div id=\"contact_adresses_";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 159), "html", null, true);
            echo "\" class=\"adresseformadded\">
                                        <div class=\"col-sm-3\">
                                            ";
            // line 161
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 161)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["adresse"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"]]);
            // line 163
            echo "
                                            ";
            // line 164
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 164)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["adresse"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 167
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 167)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["codePostal"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Code Postal"]);
            // line 169
            echo "
                                            ";
            // line 170
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 170)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["codePostal"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2 text-center\">
                                            ";
            // line 173
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 173)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["idVille"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold d-inline text-center"], "label" => "Ville"]);
            // line 175
            echo " <a id=\"add-ville-link\" class=\"d-inline\" data-toggle=\"modal\" data-target=\"#modal-ville-add\" title=\"Ajouter une ville\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                                            
                                            ";
            // line 177
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 177)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["idVille"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-1\" align=\"center\">
                                            ";
            // line 180
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 180)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["principal"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 183
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 183)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["type_adresse"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Type adresse"]);
            // line 185
            echo "
                                            ";
            // line 186
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 186)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["type_adresse"] ?? null) : null), 'widget');
            echo "
                                        </div>
                                        <div class=\"col-sm-2\">
                                            ";
            // line 189
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 189)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["comp_adresse"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold  col-sm-12 text-center"], "label" => "Infos accès"]);
            // line 191
            echo "
                                            ";
            // line 192
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = twig_get_attribute($this->env, $this->source, $context["adresse"], "children", [], "any", false, false, false, 192)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["comp_adresse"] ?? null) : null), 'widget');
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
        // line 197
        echo "                        </div>
                    </fieldset>
                </div>
                <div class=\"col-sm-3 mt-3\">
                    <div class=\"col-sm-12\">
                        <div class=\"col-sm-12 well2 pb-3\">
                            <div class=\"col-sm-12\">
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 205
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_type", [], "any", false, false, false, 205), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Client / Prospect"]);
        // line 207
        echo "
                                    ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "id_type", [], "any", false, false, false, 208), 'widget');
        echo "
                                </div>
                                <div class=\"col-sm-12\">
                                    <label class=\"font-weight-bold text-center col-sm-12\">Sociétés liées</label>
                                    <div class=\"row\">
                                    
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 215
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 215), "vars", [], "any", false, false, false, 215), "prototype", [], "any", false, false, false, 215), "idSociete1", [], "any", false, false, false, 215), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 217
        echo "
                                                ";
        // line 218
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie1", [], "any", true, true, false, 218) && (twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie1", [], "any", false, false, false, 218) != ""))) {
            // line 219
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societeId1", [], "any", false, false, false, 219)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 223
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 225
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 225), "vars", [], "any", false, false, false, 225), "prototype", [], "any", false, false, false, 225), "idSociete1", [], "any", false, false, false, 225), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 228
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 228), "vars", [], "any", false, false, false, 228), "prototype", [], "any", false, false, false, 228), "idSociete2", [], "any", false, false, false, 228), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 230
        echo "
                                                ";
        // line 231
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie2", [], "any", true, true, false, 231) && (twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie2", [], "any", false, false, false, 231) != ""))) {
            // line 232
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societeId2", [], "any", false, false, false, 232)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 236
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 238
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 238), "vars", [], "any", false, false, false, 238), "prototype", [], "any", false, false, false, 238), "idSociete2", [], "any", false, false, false, 238), 'widget');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "prototype", [], "any", false, false, false, 243), "idSociete3", [], "any", false, false, false, 243), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 245
        echo "
                                                ";
        // line 246
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie3", [], "any", true, true, false, 246) && (twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie3", [], "any", false, false, false, 246) != ""))) {
            // line 247
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societeId3", [], "any", false, false, false, 247)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 251
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 253
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 253), "vars", [], "any", false, false, false, 253), "prototype", [], "any", false, false, false, 253), "idSociete3", [], "any", false, false, false, 253), 'widget');
        echo "
                                        </div>
                                        <div class=\"text-center col-sm-6 pl-0 pr-0\">
                                            ";
        // line 256
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 256), "vars", [], "any", false, false, false, 256), "prototype", [], "any", false, false, false, 256), "idSociete4", [], "any", false, false, false, 256), 'label', ["label_attr" => ["class" => "font-weight-bold"]]);
        // line 258
        echo "
                                                ";
        // line 259
        if ((twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie4", [], "any", true, true, false, 259) && (twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societelie4", [], "any", false, false, false, 259) != ""))) {
            // line 260
            echo "                                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, ($context["societeliedata"] ?? null), "societeId4", [], "any", false, false, false, 260)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                    </a>
                                                ";
        } else {
            // line 264
            echo "                                                        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                                ";
        }
        // line 266
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "societelie", [], "any", false, false, false, 266), "vars", [], "any", false, false, false, 266), "prototype", [], "any", false, false, false, 266), "idSociete4", [], "any", false, false, false, 266), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "solde", [], "any", false, false, false, 271), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Solde Dispo"]);
        // line 273
        echo "
                                    ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "solde", [], "any", false, false, false, 274), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "soldeDate", [], "any", false, false, false, 277), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Au"]);
        // line 279
        echo "
                                    ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "soldeDate", [], "any", false, false, false, 280), 'widget');
        echo "
                                </div>
                                <div class=\"text-center col-md-12\">
                                    ";
        // line 283
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siteweb", [], "any", false, false, false, 283), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Site web:"]);
        // line 285
        echo "
                                    <div class=\"input-group\">
                                        <div class=\"input-group-prepend\">
                                            <div class=\"input-group-text\">http://</div>
                                        </div>
                                        ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "siteweb", [], "any", false, false, false, 290), 'widget');
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
        // line 309
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "contactsoc", [], "any", false, false, false, 309), "vars", [], "any", false, false, false, 309), "prototype", [], "any", false, false, false, 309), 'widget'), "html_attr");
        echo "\">
                    <div class=\"row\">
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idCivilite", [], "any", false, false, false, 312), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
        // line 314
        echo "
                            ";
        // line 315
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "idCivilite", [], "any", false, false, false, 315), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 318
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nom", [], "any", false, false, false, 318), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
        // line 320
        echo "
                            ";
        // line 321
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "nom", [], "any", false, false, false, 321), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 324
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "prenom", [], "any", false, false, false, 324), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
        // line 326
        echo "
                            ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "prenom", [], "any", false, false, false, 327), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1 text-center\">
                            ";
        // line 330
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "qualite", [], "any", false, false, false, 330), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
        // line 332
        echo "
                            <a name=\"ajactivite\" value=\"+\" data-toggle=\"modal\" data-target=\"#modalQualiteAdd\"><i class=\"fa fa-plus-square\" style=\"font-size: 130%;\"></i></a>
                            ";
        // line 334
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "qualite", [], "any", false, false, false, 334), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-1\">
                            ";
        // line 337
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "interlocuteur", [], "any", false, false, false, 337), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Interlocuteur"]);
        // line 339
        echo "
                            ";
        // line 340
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "interlocuteur", [], "any", false, false, false, 340), 'widget');
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Telephone", [], "any", false, false, false, 343), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Téléphone"]);
        // line 345
        echo "
                            ";
        // line 346
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Telephone", [], "any", false, false, false, 346), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Portable", [], "any", false, false, false, 349), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Portable"]);
        // line 351
        echo "
                            ";
        // line 352
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Portable", [], "any", false, false, false, 352), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-1\">
                            ";
        // line 355
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Fax", [], "any", false, false, false, 355), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
        // line 357
        echo "
                            ";
        // line 358
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Fax", [], "any", false, false, false, 358), 'widget', ["attr" => ["pattern" => ".{14,14}", "maxlength" => "14"]]);
        echo "
                        </div>
                        <div class=\"text-center col-sm-2\">
                            ";
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Email", [], "any", false, false, false, 361), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
        // line 363
        echo "
                            ";
        // line 364
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "Email", [], "any", false, false, false, 364), 'widget');
        echo "
                        </div>
                    </div>
                    <!-- Other contact for this contact -->
                    ";
        // line 368
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "contactsoc", [], "any", false, false, false, 368), "children", [], "any", false, false, false, 368));
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
            // line 369
            echo "                        <div class=\"row contact_added\">
                            <button type=\"button\" class=\"removecontactelement close\"><span aria-hidden=\"true\">×</span></button>
                            <div id=\"contact_contactsoc_";
            // line 371
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 371), "html", null, true);
            echo "\" class=\"p-r\">
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "idCivilite", [], "any", false, false, false, 373), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Civilité"]);
            // line 375
            echo "
                                ";
            // line 376
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "idCivilite", [], "any", false, false, false, 376), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 379
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "nom", [], "any", false, false, false, 379), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Nom"]);
            // line 381
            echo "
                                ";
            // line 382
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "nom", [], "any", false, false, false, 382), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 385
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "prenom", [], "any", false, false, false, 385), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Prenom"]);
            // line 387
            echo "
                                ";
            // line 388
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "prenom", [], "any", false, false, false, 388), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1 text-center\">
                                ";
            // line 391
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "qualite", [], "any", false, false, false, 391), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qualité"]);
            // line 393
            echo "
                                ";
            // line 394
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "qualite", [], "any", false, false, false, 394), 'widget');
            echo "
                            </div>
                            <div class=\"col-sm-1\">
                                ";
            // line 397
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "interlocuteur", [], "any", false, false, false, 397), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Interlocuteur"]);
            // line 399
            echo "
                                ";
            // line 400
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "interlocuteur", [], "any", false, false, false, 400), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 403
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Telephone", [], "any", false, false, false, 403), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Telephone"]);
            // line 405
            echo "
                                ";
            // line 406
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Telephone", [], "any", false, false, false, 406), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 409
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Fax", [], "any", false, false, false, 409), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Fax"]);
            // line 411
            echo "
                                ";
            // line 412
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Fax", [], "any", false, false, false, 412), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-1\">
                                ";
            // line 415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = twig_get_attribute($this->env, $this->source, $context["contactsoc"], "children", [], "any", false, false, false, 415)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["Portable"] ?? null) : null), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Portable"]);
            // line 417
            echo "
                                ";
            // line 418
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Portable", [], "any", false, false, false, 418), 'widget');
            echo "
                            </div>
                            <div class=\"text-center col-sm-2\">
                                ";
            // line 421
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Email", [], "any", false, false, false, 421), 'label', ["label_attr" => ["class" => "font-weight-bold text-center"], "label" => "Email"]);
            // line 423
            echo "
                                ";
            // line 424
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["contactsoc"], "Email", [], "any", false, false, false, 424), 'widget');
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
        // line 429
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
        // line 447
        if ( !(null === ($context["dossierClient"] ?? null))) {
            echo "                  
                ";
            // line 448
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["dossierClient"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["dossier"]) {
                // line 449
                echo "                                           
                        
                            <tr data-id=\"";
                // line 451
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 451), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller/visualiserDossier", ["id" => twig_get_attribute($this->env, $this->source, $context["dossier"], "id", [], "any", false, false, false, 451)]), "html", null, true);
                echo "\">
                                <td>";
                // line 452
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "structure", [], "any", false, false, false, 452), "html", null, true);
                echo "</td>
                                <td>";
                // line 453
                (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 453), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 453), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 453), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 453), "d-m-Y"), "html", null, true))));
                echo "</td>
                                <td>";
                // line 454
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "nom", [], "any", false, false, false, 454), "html", null, true);
                echo "</td>
                                <td>";
                // line 455
                (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 455), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 455), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 455), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateFinPeriode", [], "any", false, false, false, 455), "d-m-Y"), "html", null, true))));
                echo "</td>
                                <td>
                                    ";
                // line 457
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 457))) {
                    // line 458
                    echo "                                        ";
                    (((((twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 458), "d-m-Y") == "31-12-1969") || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 458), "d-m-Y") == "01-01-1970")) || (twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 458), "d-m-Y") == "30-11--0001"))) ? (print ("")) : (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateAccord", [], "any", false, false, false, 458), "d-m-Y"), "html", null, true))));
                    echo "
                                    ";
                } else {
                    // line 460
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 460), "+3 month"), "d-m-Y"), "html", null, true);
                    echo "
                                    ";
                }
                // line 462
                echo "                                </td>
                                <td>";
                // line 463
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "mntAccorde", [], "any", false, false, false, 463), 2, ",", " "), "html", null, true);
                echo "</td>
            ";
                // line 465
                echo "                                ";
                // line 466
                echo "                                <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "dateEnvoi", [], "any", false, false, false, 466), "+6 month"), "d-m-Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 467
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dossier"], "commercial", [], "any", false, false, false, 467), "html", null, true);
                echo "</td>
                            </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dossier'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 470
            echo "            ";
        }
        // line 471
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
                    <th>Intitulé du stage</th>
                    <th>Commercial</th>
                    <th>Type</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Coût Ht</th>
                    <th>Fiabilité</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 492
        if ( !(null === ($context["clientPropal"] ?? null))) {
            echo "                  
                ";
            // line 493
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["clientPropal"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["propal"]) {
                // line 494
                echo "                    <tr data-propal-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 494), "html", null, true);
                echo "\" data-href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_show", ["id" => twig_get_attribute($this->env, $this->source, $context["propal"], "idpropal", [], "any", false, false, false, 494)]), "html", null, true);
                echo "\">
                        <td>";
                // line 495
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "entite", [], "any", false, false, false, 495), "html", null, true);
                echo "</td>
                        <td>";
                // line 496
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "statut", [], "any", false, false, false, 496), "html", null, true);
                echo "</td>
                        <td>";
                // line 497
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "formation", [], "any", false, false, false, 497), "html", null, true);
                echo "</td>
                        <td>";
                // line 498
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "commercial", [], "any", false, false, false, 498), "html", null, true);
                echo "</td>
                        <td>";
                // line 499
                if ((twig_get_attribute($this->env, $this->source, $context["propal"], "type", [], "any", false, false, false, 499) == 1)) {
                    echo " Entreprise ";
                } else {
                    echo " Particulier ";
                }
                echo "</td>
                        <td>";
                // line 500
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "nom", [], "any", false, false, false, 500), "html", null, true);
                echo "</td>
                        <td> ";
                // line 501
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "prenom", [], "any", false, false, false, 501), "html", null, true);
                echo " </td>
                        ";
                // line 502
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 502))) {
                    // line 503
                    echo "                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 503), "html", null, true);
                    echo " €</td>
                        ";
                } else {
                    // line 505
                    echo "                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "coutht", [], "any", false, false, false, 505), "html", null, true);
                    echo "</td>
                        ";
                }
                // line 507
                echo "                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 507) == "Froid")) {
                    // line 508
                    echo "                        <td class=\"bg-info text-white\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 508), "html", null, true);
                    echo " </td>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 509
$context["propal"], "fiabilite", [], "any", false, false, false, 509) == "Chaud")) {
                    // line 510
                    echo "                        <td class=\"bg-danger text-white\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 510), "html", null, true);
                    echo " </td>
                        ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 511
$context["propal"], "fiabilite", [], "any", false, false, false, 511) == "Tiede")) {
                    // line 512
                    echo "                        <td class=\"bg-warning text-white\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 512), "html", null, true);
                    echo " </td>
                        ";
                } else {
                    // line 514
                    echo "                        <td> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["propal"], "fiabilite", [], "any", false, false, false, 514), "html", null, true);
                    echo " </td>
                        ";
                }
                // line 516
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 518
            echo "                ";
        }
        // line 519
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
        // line 536
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
        // line 546
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "commentaires", [], "any", false, false, false, 546), "vars", [], "any", false, false, false, 546), "prototype", [], "any", false, false, false, 546), 'widget'), "html_attr");
        echo "\">
                    ";
        // line 547
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["contact_forme"] ?? null), "commentaires", [], "any", false, false, false, 547));
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
            // line 548
            echo "                        <tr>
                            <th colspan=\"6\">
                                <div class=\"row\">
                                    <div class=\"comment_contains\">
                                        <button type=\"button\" class=\"removecommentelement close\"><span aria-hidden=\"true\">×</span></button>
                                        <div id=\"contact_commentaires_";
            // line 553
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 553), "html", null, true);
            echo "\" class=\"comment_contains_form\">
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 555
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 555)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["dateAdd"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 558
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 558)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["texteNote"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 561
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 561)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["idAction"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 564
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 564)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["dateAction"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 567
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 567)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["idUserAction"] ?? null) : null), 'widget');
            echo "
                                            </div>
                                            <div class=\"col-sm-2 form-group\">
                                                ";
            // line 570
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = twig_get_attribute($this->env, $this->source, $context["comment"], "children", [], "any", false, false, false, 570)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["idActionStatut"] ?? null) : null), 'widget');
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
        // line 578
        echo "                    </tbody>
                    </thead>
                </table>
            </fieldset>
            <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
                <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
                    <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                        <a href=\"";
        // line 585
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_propositions_commerciales_Controller/ajoutpropal", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 585)]), "html", null, true);
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
        // line 594
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Liste_Dossiers_Controller", ["client" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "nomStr", [], "any", false, false, false, 594)]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Dossiers</a>
                    </div>
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                        <a href=\"";
        // line 597
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
        // line 610
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["contact_forme"] ?? null), 'form_end', ["render_rest" => false]);
        echo "
    </div>
";
    }

    // line 614
    public function block_modal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 615
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
        // line 625
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
        // line 640
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
        // line 655
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\QualiteController::QualiteFormAdd"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 661
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
        // line 671
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\VilleController::create"));
        echo "
                </div>
            </div>
        </div>
    </div>
    ";
        // line 677
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
        // line 689
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 689), "type" => 1]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Bon de commmande</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                            <a href=\"";
        // line 692
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 692), "type" => 2]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Convention</a>
                        </div>
                        <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                            <a href=\"";
        // line 695
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "id", [], "any", false, false, false, 695), "type" => 3]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-block\">Rendez-vous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 704
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 705
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.fr.min.js\"></script>
    ";
        // line 710
        $this->loadTemplate("contact/Parts/contact.js.html.twig", "contact/edit.html.twig", 710)->display($context);
        // line 711
        echo "    <script language=\"javascript\">
        \$(document).ready( function() {
            \$(\"#contactgenerale *\").prop(\"disabled\", true);
            \$(\"#content_bouton .btn\").prop(\"disabled\", false);
            \$(\"#editthis\").click(function(){
                \$(\"#contactgenerale *\").prop(\"disabled\", false);
                \$(\"#saveedit\").removeClass(\"d-none\");
                ";
        // line 718
        if (((twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 718) == "MUNIER Pascal") || (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 718) == "CREPEAU Francis"))) {
            // line 719
            echo "                    
                ";
        } else {
            // line 721
            echo "                \$(\"#contact_id_commercial\").prop(\"disabled\",true)
                ";
        }
        // line 723
        echo "                \$(\"#saveedit\").find('button').prop(\"disabled\", false);
                \$(\"#ajcom\").prop(\"disabled\", false);
            });
            // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
            var societelie = ";
        // line 727
        echo json_encode(($context["societeliedata"] ?? null));
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
        // line 740
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
        // line 750
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
        // line 765
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
        // line 785
        echo json_encode(($context["opca1"] ?? null));
        echo ";
            var opcaTns = ";
        // line 786
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
        // line 795
        echo json_encode(($context["secteurActiviteOptions"] ?? null));
        echo ";
            
            if (secteurActiviteOptions) {
                setSelectValue(\"idSecteur\", secteurActiviteOptions);
            }
            
            var activiteTNSOptions = ";
        // line 801
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
        // line 832
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
        // line 843
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
        return array (  1539 => 843,  1527 => 832,  1494 => 801,  1485 => 795,  1473 => 786,  1469 => 785,  1446 => 765,  1428 => 750,  1415 => 740,  1399 => 727,  1393 => 723,  1389 => 721,  1385 => 719,  1383 => 718,  1374 => 711,  1372 => 710,  1363 => 705,  1359 => 704,  1347 => 695,  1341 => 692,  1335 => 689,  1321 => 677,  1313 => 671,  1301 => 661,  1293 => 655,  1275 => 640,  1257 => 625,  1245 => 615,  1241 => 614,  1234 => 610,  1218 => 597,  1212 => 594,  1200 => 585,  1191 => 578,  1169 => 570,  1163 => 567,  1157 => 564,  1151 => 561,  1145 => 558,  1139 => 555,  1134 => 553,  1127 => 548,  1110 => 547,  1106 => 546,  1094 => 536,  1078 => 519,  1075 => 518,  1068 => 516,  1062 => 514,  1056 => 512,  1054 => 511,  1049 => 510,  1047 => 509,  1042 => 508,  1039 => 507,  1033 => 505,  1027 => 503,  1025 => 502,  1021 => 501,  1017 => 500,  1009 => 499,  1005 => 498,  1001 => 497,  997 => 496,  993 => 495,  986 => 494,  982 => 493,  978 => 492,  955 => 471,  952 => 470,  943 => 467,  938 => 466,  936 => 465,  932 => 463,  929 => 462,  923 => 460,  917 => 458,  915 => 457,  910 => 455,  906 => 454,  902 => 453,  898 => 452,  892 => 451,  888 => 449,  884 => 448,  880 => 447,  860 => 429,  841 => 424,  838 => 423,  836 => 421,  830 => 418,  827 => 417,  825 => 415,  819 => 412,  816 => 411,  814 => 409,  808 => 406,  805 => 405,  803 => 403,  797 => 400,  794 => 399,  792 => 397,  786 => 394,  783 => 393,  781 => 391,  775 => 388,  772 => 387,  770 => 385,  764 => 382,  761 => 381,  759 => 379,  753 => 376,  750 => 375,  748 => 373,  743 => 371,  739 => 369,  722 => 368,  715 => 364,  712 => 363,  710 => 361,  704 => 358,  701 => 357,  699 => 355,  693 => 352,  690 => 351,  688 => 349,  682 => 346,  679 => 345,  677 => 343,  671 => 340,  668 => 339,  666 => 337,  660 => 334,  656 => 332,  654 => 330,  648 => 327,  645 => 326,  643 => 324,  637 => 321,  634 => 320,  632 => 318,  626 => 315,  623 => 314,  621 => 312,  615 => 309,  593 => 290,  586 => 285,  584 => 283,  578 => 280,  575 => 279,  573 => 277,  567 => 274,  564 => 273,  562 => 271,  553 => 266,  549 => 264,  541 => 260,  539 => 259,  536 => 258,  534 => 256,  527 => 253,  523 => 251,  515 => 247,  513 => 246,  510 => 245,  508 => 243,  499 => 238,  495 => 236,  487 => 232,  485 => 231,  482 => 230,  480 => 228,  473 => 225,  469 => 223,  461 => 219,  459 => 218,  456 => 217,  454 => 215,  444 => 208,  441 => 207,  439 => 205,  429 => 197,  410 => 192,  407 => 191,  405 => 189,  399 => 186,  396 => 185,  394 => 183,  388 => 180,  382 => 177,  378 => 175,  376 => 173,  370 => 170,  367 => 169,  365 => 167,  359 => 164,  356 => 163,  354 => 161,  349 => 159,  345 => 157,  328 => 156,  323 => 154,  307 => 141,  304 => 140,  302 => 138,  296 => 135,  292 => 133,  290 => 131,  284 => 128,  281 => 127,  279 => 125,  273 => 122,  270 => 121,  268 => 119,  256 => 110,  253 => 109,  251 => 107,  248 => 106,  243 => 103,  240 => 102,  238 => 100,  230 => 95,  227 => 94,  225 => 92,  217 => 87,  214 => 86,  212 => 84,  205 => 80,  201 => 78,  199 => 76,  193 => 73,  190 => 72,  188 => 70,  180 => 65,  177 => 64,  175 => 62,  169 => 59,  166 => 58,  164 => 56,  158 => 53,  154 => 51,  152 => 49,  146 => 46,  143 => 45,  141 => 43,  129 => 34,  124 => 31,  115 => 28,  112 => 27,  107 => 26,  98 => 23,  95 => 22,  91 => 21,  82 => 15,  78 => 14,  74 => 12,  70 => 11,  61 => 6,  57 => 5,  50 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/edit.html.twig", "/home/jeremy/Bureau/project/app/templates/contact/edit.html.twig");
    }
}
