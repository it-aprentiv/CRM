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

/* dossier/part/dossier-form.html.twig */
class __TwigTemplate_c788b7e8702d9e6c0f1bea2c5de4e89c06f06f15e83a54697ea8a2fbb71ba2e2 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/dossier-form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/dossier-form.html.twig"));

        // line 1
        $macros["formMacros"] = $this->macros["formMacros"] = $this;
        // line 2
        echo "
";
        // line 69
        echo "
";
        // line 70
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 70, $this->source); })()), 'form_start', ["attr" => ["class" => "popUp-ajout", "method" => "post", "onsubmit" => "checkRequireField();"]]);
        echo "
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"col-sm-12\">
            <div class=\"row p-3 mb-3 well\">
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 78, $this->source); })()), "idClient", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "client"]);
        // line 80
        echo " 
                            ";
        // line 81
        if (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 81, $this->source); })()), "idClient", [], "any", false, false, false, 81)) {
            // line 82
            echo "                                ";
            // line 83
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Fiche_client_prospect_Controller/editClient", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 83, $this->source); })()), "idClient", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" title=\"Voir fiche client\" target=\"_blank\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                </a>
                            ";
        }
        // line 87
        echo "                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 87, $this->source); })()), "idClient", [], "any", false, false, false, 87), 'widget');
        echo "
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 90, $this->source); })()), "idStructure", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Structure "]);
        // line 92
        echo "
                            ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 93, $this->source); })()), "idStructure", [], "any", false, false, false, 93), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 100, $this->source); })()), "dossierType", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Type "]);
        // line 102
        echo "
                            ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 103, $this->source); })()), "dossierType", [], "any", false, false, false, 103), 'widget');
        echo "
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 106, $this->source); })()), "idCommercial", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Commercial "]);
        // line 108
        echo "
                            ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 109, $this->source); })()), "idCommercial", [], "any", false, false, false, 109), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 116, $this->source); })()), "idStatut", [], "any", false, false, false, 116), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Statut "]);
        // line 118
        echo "
                            ";
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 119, $this->source); })()), "idStatut", [], "any", false, false, false, 119), 'widget');
        echo "
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 122, $this->source); })()), "datesigntext", [], "any", false, false, false, 122), 'label', ["label_attr" => ["class" => "font-weight-bold", "required" => ""], "label" => "Mois de signature "]);
        // line 124
        echo "
                            ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 125, $this->source); })()), "datesigntext", [], "any", false, false, false, 125), 'widget');
        echo "  
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
";
        // line 135
        echo "<div class=\"row row p-3 mb-3 \">
    <div class=\"col-sm-4 well\">
        <div class=\"row\">
            <div class=\"form-group col-md-6 text-right\">
                ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 139, $this->source); })()), "idOpca", [], "any", false, false, false, 139), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "OPCO"]);
        // line 141
        echo "
            </div>
            <div class=\"col-md-6\"> ";
        // line 143
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 143, $this->source); })()), "idOpca", [], "any", false, false, false, 143), 'widget');
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6 text-right\">
                ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 147, $this->source); })()), "dispositif", [], "any", false, false, false, 147), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Dispositif"]);
        // line 149
        echo "
            </div>
            <div class=\"col-md-6\"> ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 151, $this->source); })()), "dispositif", [], "any", false, false, false, 151), 'widget');
        echo "</div>

        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6 text-right\">
                ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 156, $this->source); })()), "ref", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° dossier interne"]);
        // line 158
        echo "
            </div>
            <div class=\"col-md-6\">";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 160, $this->source); })()), "ref", [], "any", false, false, false, 160), 'widget');
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\" col-md-6 text-right\">
                ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 164, $this->source); })()), "mntDemande", [], "any", false, false, false, 164), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Montant HT"]);
        // line 166
        echo "
            </div>
            <div class=\"col-md-6\">";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 168, $this->source); })()), "mntDemande", [], "any", false, false, false, 168), 'widget', ["attr" => ["id" => "montant"]]);
        echo "</div>
        </div>
        <div class=\"row\">
            <div class=\" col-md-6 text-right\">";
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 171, $this->source); })()), "durparjour", [], "any", false, false, false, 171), 'label', ["label_attr" => ["class" => "font-weight-bold required"], "label" => "Durée par jour"]);
        // line 173
        echo "</div>
            <div class=\"col-md-6\">";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 174, $this->source); })()), "durparjour", [], "any", false, false, false, 174), 'widget');
        echo "</div>
        </div>
    </div>

    <div class=\"col-sm-8\">
        <div class=\"col-sm-12 table-wrapper-scroll-y my-custom-scrollbar\">
            ";
        // line 180
        $this->loadTemplate("dossier/part/calendrier-principal.html.twig", "dossier/part/dossier-form.html.twig", 180)->display(twig_array_merge($context, ["formation_dates" => (((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context))) ? ((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 180, $this->source); })())) : ([]))]));
        // line 181
        echo "        </div>
    </div>
</div>

";
        // line 186
        echo "<div class=\"row p-3 mb-3 \">
    <div class=\"col-md-6\">
        <fieldset>
            <legend><b> Dates du stage </b></legend>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"form-group col-md-6 text-center\">
                            ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 194, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 194), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "du"]);
        // line 196
        echo "

                            ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 198, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "datetimepick text-center"]]);
        echo "
                        </div>
                        <div class=\"form-group col-sm-6 text-center\">
                            ";
        // line 201
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 201, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 201), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "au"]);
        // line 203
        echo "
                            ";
        // line 204
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 204, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 204), 'widget', ["attr" => ["class" => "datetimepick text-center"]]);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-sm-4 text-center\"></div>
                        <div class=\"col-sm-4 text-center font-weight-bold\">N</div>
                        <div class=\"col-sm-4text-center font-weight-bold\">N+1</div>
                    </div>
                    <div class=\"row\" >
                        <div class=\"col-sm-4 text-right font-weight-bold\">Nbr J </div>
                        <div class=\"col-sm-4 text-center font-weight-bold\"><input type=\"text \" class=\"form-control\" name=\"nbrj\" id=\"nbrj\" value=\"";
        // line 216
        (((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 216, $this->source); })()), "total_jours_n", [], "any", false, false, false, 216), "html", null, true))) : (print (0)));
        echo "\" readonly=\"\"></div>
                        <div class=\"col-sm-4 text-center font-weight-bold\"><input type=\"text\" class=\"form-control\" id=\"nbrj2\" name=\"nbrj2\" value=\"";
        // line 217
        (((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 217, $this->source); })()), "total_jours_n1", [], "any", false, false, false, 217), "html", null, true))) : (print (0)));
        echo "\"  readonly=\"\"></div>
                    </div>
                    <div class=\"row\" >
                        <div class=\"col-sm-4 text-right font-weight-bold\">Nbr H </div>
                        <div class=\"col-sm-4 text-center\"><input type=\"text\" class=\"form-control\" name=\"nbrh\" id=\"nbrh\" value=\"";
        // line 221
        (((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 221, $this->source); })()), "total_heures_n", [], "any", false, false, false, 221), "html", null, true))) : (print (0)));
        echo "\"  readonly=\"\"></div>
                        <div class=\"col-sm-4 text-center\"><input type=\"text\" class=\"form-control\" id=\"nbrh2\" name=\"nbrh2\" value=\"";
        // line 222
        (((isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context))) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formated_formation_dates"]) || array_key_exists("formated_formation_dates", $context) ? $context["formated_formation_dates"] : (function () { throw new RuntimeError('Variable "formated_formation_dates" does not exist.', 222, $this->source); })()), "total_heures_n1", [], "any", false, false, false, 222), "html", null, true))) : (print (0)));
        echo "\"  readonly=\"\"></div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>


    <div class=\"col-md-6\">
        <fieldset>
            <legend><b>Commission Commercial</b>       <a class=\"btn btn-info btn-portail\" href=\"#\" onclick=\"btnlegend(\$(this))\">LEGENDE</a></legend>
            <div class=\"row\">
                <div class=\"col-sm-2 text-right\">
                    ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 235, $this->source); })()), "tauxCom", [], "any", false, false, false, 235), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "%"]);
        // line 237
        echo "</div>
                <div class=\"col-sm-4\">";
        // line 238
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 238, $this->source); })()), "tauxCom", [], "any", false, false, false, 238), 'widget', ["attr" => ["id" => "pourcent"]]);
        echo "</div>
                <div class=\"col-sm-2 text-right\">
                    ";
        // line 240
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 240, $this->source); })()), "mntMarge", [], "any", false, false, false, 240), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Montant "]);
        // line 242
        echo "</div>
                <div class=\"col-sm-4\">";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 243, $this->source); })()), "mntMarge", [], "any", false, false, false, 243), 'widget', ["attr" => ["id" => "montantcom"]]);
        echo "</div>
            </div>
        </fieldset>
    </div>
</div>
";
        // line 249
        echo "<div class=\"row\">
    <div class=\"col-md-4\">
        <fieldset>
            <legend>Lieu de stage</legend>

            <nav>
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                    <a class=\"nav-item nav-link ";
        // line 256
        echo (( !(isset($context["iddossier"]) || array_key_exists("iddossier", $context))) ? ("active") : (""));
        echo "\" id=\"btn-vivienne\" data-toggle=\"tab\" href=\"#nav-aprentiv\" role=\"tab\" aria-controls=\"nav-aprentiv\" aria-selected=\"true\">Vivienne</a>
                    <a class=\"nav-item nav-link\" id=\"btn-client\" data-toggle=\"tab\" href=\"#nav-client\" role=\"tab\" aria-controls=\"nav-client\" aria-selected=\"false\">Client</a>
                    <a class=\"nav-item nav-link\" id=\"btn-autre\" data-toggle=\"tab\" href=\"#nav-autre\" role=\"tab\" aria-controls=\"nav-autre\" aria-selected=\"false\">Autre</a>
                </div>
            </nav>

            <div class=\"tab-content\" id=\"nav-tabContent\">
                <div class=\"tab-pane ";
        // line 263
        echo (( !(isset($context["iddossier"]) || array_key_exists("iddossier", $context))) ? ("active") : (""));
        echo "\" id=\"nav-aprentiv\" role=\"tabpanel\" aria-labelledby=\"nav-aprentiv-tab\">
                    <input value=\"47 rue Vivienne 75002 Paris\" class=\"form-control\" name =\"lieu[vivienne]\">
                    <input id=\"adresseVivienne\" name =\"dossier[adresseVivienne]\" type=\"hidden\" value=\"1\" class=\"form-control\" />
                </div>
                <div class=\"tab-pane fade lieudossier adrsoc\" id=\"nav-client\" role=\"tabpanel\" aria-labelledby=\"nav-client-tab\">
                    <input value=\"";
        // line 268
        (((isset($context["adresse"]) || array_key_exists("adresse", $context))) ? (print (twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new RuntimeError('Variable "adresse" does not exist.', 268, $this->source); })()), "html", null, true))) : (print ("")));
        echo "\" class=\"form-control\" name =\"lieu[client]\" />
                    <input type=\"hidden\" id=\"adresseClient\" name =\"dossier[adresseClient]\" value=\"0\" class=\"form-control\" />
                </div>
                <div class=\"tab-pane fade\" id=\"nav-autre\" role=\"tabpanel\" aria-labelledby=\"nav-autre-tab\">
                    ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 272, $this->source); })()), "lieu", [], "any", false, false, false, 272), 'widget');
        echo "
                    <input type=\"hidden\" id=\"adresseAutre\" name =\"dossier[adresseAutre]\" value=\"0\" class=\"form-control\" />
                </div>
            </div>
        </fieldset>
    </div>

    ";
        // line 280
        echo "    <div class=\"col-md-3\">
        <fieldset>
            <legend>ACCORD</legend>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 284, $this->source); })()), "dateAccord", [], "any", false, false, false, 284), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date estimée de réception"]);
        // line 286
        echo "
                    <div class=\"col-md-12\">";
        // line 287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 287, $this->source); })()), "dateAccord", [], "any", false, false, false, 287), 'widget', ["attr" => ["class" => "datetimepick"]]);
        echo "</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 291, $this->source); })()), "mntAccorde", [], "any", false, false, false, 291), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Montant accordé"]);
        // line 293
        echo "
                    <div class=\"col-md-12\">";
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 294, $this->source); })()), "mntAccorde", [], "any", false, false, false, 294), 'widget');
        echo "</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 298, $this->source); })()), "datesDossier", [], "any", false, false, false, 298), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date de réception"]);
        // line 300
        echo "
                    <div class=\"col-md-12\">";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 301, $this->source); })()), "datesDossier", [], "any", false, false, false, 301), 'widget', ["attr" => ["class" => "datetimepick"]]);
        echo "</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 305, $this->source); })()), "ndossopca", [], "any", false, false, false, 305), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "N° dossier OPCO"]);
        // line 307
        echo "
                    <div class=\"col-md-12\">";
        // line 308
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 308, $this->source); })()), "ndossopca", [], "any", false, false, false, 308), 'widget');
        echo "</div>
                </div>
            </div>
        </fieldset>
    </div>
    ";
        // line 314
        echo "    <div class=\"col-sm-5\">
        <fieldset>
            <legend>FACTURATION</legend>
            <div class=\"col-sm-12 well tableFixHead\">
                <div class=\"row\" >
                    <div class=\"col-sm-6\" >
                        <span><b><h4 ><u>  Facturation </u>
                                    <input type=\"button\" name=\"factbtn[]\" id=\"factbtn\" onclick=\"ajfactonglet()\" value=\"+\"></h4></b></span>
                        <div  id=\"ajout_facture\" class=\"row\" data-prototype=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 322, $this->source); })()), "factures", [], "any", false, false, false, 322), "vars", [], "any", false, false, false, 322), "prototype", [], "any", false, false, false, 322), 'widget'), "html_attr");
        echo "\">
                            ";
        // line 323
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 323, $this->source); })()), "factures", [], "any", false, false, false, 323));
        foreach ($context['_seq'] as $context["_key"] => $context["factureForm"]) {
            // line 324
            echo "                                ";
            echo twig_call_macro($macros["formMacros"], "macro_printFactureRow", [$context["factureForm"]], 324, $context, $this->getSourceContext());
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factureForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 326
        echo "                        </div>
                    </div>
                    ";
        // line 328
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 328, $this->source); })()), "factures", [], "any", false, false, false, 328), "setRendered", [], "any", false, false, false, 328);
        // line 329
        echo "                    <div class=\"col-sm-6\">
                        <span><b><h4 style=\"width: 100%;margin-right: 0%;\"><u>  Avoir </u>
                                    <input type=\"button\" name=\"factavoir\" id=\"factavoir\" value=\"+\">
                                </h4></b></span> <span></span>
                        <div id=\"ajout_avoir\" class=\"row\" data-prototype=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 333, $this->source); })()), "avoirs", [], "any", false, false, false, 333), "vars", [], "any", false, false, false, 333), "prototype", [], "any", false, false, false, 333), 'widget'), "html_attr");
        echo "\">
                            ";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 334, $this->source); })()), "avoirs", [], "any", false, false, false, 334));
        foreach ($context['_seq'] as $context["_key"] => $context["avoirForm"]) {
            // line 335
            echo "                                ";
            echo twig_call_macro($macros["formMacros"], "macro_printAvoirRow", [$context["avoirForm"]], 335, $context, $this->getSourceContext());
            echo "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avoirForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 337
        echo "                        </div>
                    </div>
                    ";
        // line 339
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 339, $this->source); })()), "avoirs", [], "any", false, false, false, 339), "setRendered", [], "any", false, false, false, 339);
        // line 340
        echo "                </div>
            </div>
        </fieldset>
    </div>

</div>
";
        // line 347
        echo "<br>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <fieldset>
            <legend>Information stage</legend>
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <a href=\"javascript:void(0)\" id=\"btnajoutStage\" data-toggle=\"modal\" data-target=\"#popupAddStage\">
                                <span class=\"fa-stack fa-1x\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                            ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 362, $this->source); })()), "nom", [], "any", false, false, false, 362), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Intitulé de stage"]);
        // line 364
        echo "
                        </div>

                        <div class=\"col-sm-4\"><label class=\"font-weight-bold required\">Thème formation</label></div>
                        <div class=\"col-sm-4\"><label class=\"font-weight-bold required\"> Thème générale</label></div>
                    </div>
                    <div class=\"row Addstage\">
                        <div class=\"col-sm-4\">
                            ";
        // line 372
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 372, $this->source); })()), "nom", [], "any", false, false, false, 372), 'widget');
        echo "
                            <span class=\"d-none\" id=\"dossier-nom-text\">";
        // line 373
        echo twig_escape_filter($this->env, (((isset($context["nom"]) || array_key_exists("nom", $context))) ? ((isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 373, $this->source); })())) : (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 373, $this->source); })()), "nom", [], "any", false, false, false, 373))), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 376
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 376, $this->source); })()), "themeformation", [], "any", false, false, false, 376), 'widget');
        echo "
                        </div>
                        <div class=\"col-sm-4\">
                            ";
        // line 379
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 379, $this->source); })()), "themegeneral", [], "any", false, false, false, 379), 'widget');
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 mt-5 mb-3\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"row\">
                                ";
        // line 387
        $context["param"] = twig_constant("\\App\\Constants\\ParamDossierStagiaire::FORMATION_DOSSIER_STAGIAIRE");
        // line 388
        echo "                                ";
        $this->loadTemplate("Common/stagiaire-bloc.html.twig", "dossier/part/dossier-form.html.twig", 388)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 388, $this->source); })()), "stagiaires", [], "any", false, false, false, 388), "vars", [], "any", false, false, false, 388), "prototype", [], "any", false, false, false, 388), "stagiaires" => twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 388, $this->source); })()), "stagiaires", [], "any", false, false, false, 388), "data" => (((isset($context["dataComplementaire"]) || array_key_exists("dataComplementaire", $context))) ? ((isset($context["dataComplementaire"]) || array_key_exists("dataComplementaire", $context) ? $context["dataComplementaire"] : (function () { throw new RuntimeError('Variable "dataComplementaire" does not exist.', 388, $this->source); })())) : (null)), "param_dossier_stagiaire" => (isset($context["param"]) || array_key_exists("param", $context) ? $context["param"] : (function () { throw new RuntimeError('Variable "param" does not exist.', 388, $this->source); })())]));
        // line 389
        echo "                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    ";
        // line 397
        echo "    <div class=\"col-sm-12\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 400
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "dossier/part/dossier-form.html.twig", 400)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 400, $this->source); })()), "commentaires", [], "any", false, false, false, 400), "vars", [], "any", false, false, false, 400), "prototype", [], "any", false, false, false, 400), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 400, $this->source); })()), "commentaires", [], "any", false, false, false, 400)]));
        // line 401
        echo "                ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 401, $this->source); })()), "commentaires", [], "any", false, false, false, 401), "setRendered", [], "any", false, false, false, 401);
        // line 402
        echo "            </div>
        </div>
    </div>
    ";
        // line 406
        echo "    <div style=\"display:none;\">
        ";
        // line 407
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 407, $this->source); })()), "dureeHeures", [], "any", false, false, false, 407), 'widget');
        echo "
        ";
        // line 408
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 408, $this->source); })()), "dureeJours", [], "any", false, false, false, 408), 'widget');
        echo "
        ";
        // line 409
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 409, $this->source); })()), "dateEnvoi", [], "any", false, false, false, 409), 'widget');
        echo "
        ";
        // line 410
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 410, $this->source); })()), "dateSignature", [], "any", false, false, false, 410), 'widget');
        echo "
    </div>

    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            ";
        // line 415
        if (((isset($context["dossier"]) || array_key_exists("dossier", $context)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 415, $this->source); })()), "id", [], "any", false, false, false, 415)))) {
            // line 416
            echo "                ";
            // line 417
            echo "
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                    <a name=\"editerdocument\" data-toggle=\"modal\" data-target=\"#modaldossierimpre\" class=\"btn btn-primary btn-block text-white\">Editer courrier</a>
                </div>

                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                    <a href=\"";
            // line 423
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Formation_Dossier_Devis_Papier", ["id" => (((isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 423, $this->source); })())) ? (twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 423, $this->source); })()), "id", [], "any", false, false, false, 423)) : (0))]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">Devis papier</a>
                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                    <a name=\"emmargementpapier\" data-toggle=\"modal\" data-target=\"#emmargementpapier\" class=\"btn btn-primary btn-block\" style=\"color:white;\">Emmargement papier</a>
                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                    <a href=\"javascript:void(0)\" id=\"pagedegarde\" class=\"btn btn-primary btn-block\">Page de garde dossier</a>
                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                    ";
            // line 432
            if ((((isset($context["competence"]) || array_key_exists("competence", $context)) &&  !(null === (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 432, $this->source); })()))) &&  !twig_test_empty((isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 432, $this->source); })())))) {
                // line 433
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("download_programme_dossier", ["fichier" => (isset($context["competence"]) || array_key_exists("competence", $context) ? $context["competence"] : (function () { throw new RuntimeError('Variable "competence" does not exist.', 433, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\">Programme</a>
                    ";
            } else {
                // line 435
                echo "                        <a href=\"#\" class=\"btn btn-primary btn-block disabled\">Programme non disponible</a>
                    ";
            }
            // line 437
            echo "                </div>
                ";
            // line 439
            echo "                ";
            if (((isset($context["client_non_exists"]) || array_key_exists("client_non_exists", $context)) && (isset($context["client_non_exists"]) || array_key_exists("client_non_exists", $context) ? $context["client_non_exists"] : (function () { throw new RuntimeError('Variable "client_non_exists" does not exist.', 439, $this->source); })()))) {
                // line 440
                echo "                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                        <a href=\"#\" class=\"btn btn-primary btn-block disabled\" title=\"Client non disponible\">Convention papier</a>
                    </div>
                ";
            } else {
                // line 444
                echo "
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                        <a href=\"";
                // line 446
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("client_prospect_printdocument", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 446, $this->source); })()), "idClient", [], "any", false, false, false, 446), "id", [], "any", false, false, false, 446), "type" => 2, "did" => twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 446, $this->source); })()), "id", [], "any", false, false, false, 446)]), "html", null, true);
                echo "\" class=\"btn btn-primary btn-block\">Convention papier</a>
                    </div>
                ";
            }
            // line 449
            echo "            ";
        }
        // line 450
        echo "
        </div>
    </div>
    <div class=\"col-sm-12 mt-3\" style=\"\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                <button class=\"btn btn-danger\" type=\"button\" style=\"display:none\"  id=\"bntCancel\">Annuler</button>
            </div>
            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                <button class=\"btn btn-primary\" type=\"submit\" style=\"border-radius: 5%;\" id=\"save\">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

";
        // line 466
        echo "<script>

     var myhtml = document.createElement(\"div\");
                     myhtml.innerHTML = \"<table class='table'><thead class='thead'><tr><th scope='col'>CLIENT</th><th scope='col'>TAUX</th></tr></thead><tbody><tr><td>NOUVEAU</td><td>4%</td></tr><tr><td>EXISTANT</td><td>2%</td></tr></tbody></table><p><i class='fas fa-exclamation-triangle' style='margin-right:3px;'></i>Pour les clients (principalement sécurité) émanant de LEADS ou du site internet (entrants) TAUX à 2%.</p>\";

         function btnlegend(elem)
         {
                    swal({
                    content: myhtml,
                    icon: 'warning',
                    width: 2000,
                        })
        }
</script>

";
        // line 481
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 481, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "

";
        // line 484
        echo "<!-- POPUP ADD STAGE -->
<div class=\"modal fade \" id=\"popupAddStage\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content list-filter\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title edit-rdv\">
                    Nouveau Intitulé
                </h5>
                <button type=\"button\" class=\"fas close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 497
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_competence"));
        echo "

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"tag-form-submit\" class=\"btn btn-primary addNewStage\" data-dismiss=\"modal\">Ajouter</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
";
        // line 508
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function macro_printFactureRow($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printFactureRow"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printFactureRow"));

            // line 4
            echo "    <div class=\"col-sm-12 form_facture\">
        <div class=\"col-sm-12\">
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "dateCreation", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Date"]);
            // line 8
            echo "
            ";
            // line 9
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "dateCreation", [], "any", false, false, false, 9), 'widget', ["attr" => ["class" => "datetimepick"]]);
            echo "
        </div>
        <div class=\"col-sm-12\">
            ";
            // line 12
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "ref", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "N° Facture"]);
            // line 14
            echo "
            ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "ref", [], "any", false, false, false, 15), 'widget');
            echo "
        </div>
        <div class=\"col-sm-12\">
            ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "totalHt", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Montant"]);
            // line 20
            echo "
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "totalHt", [], "any", false, false, false, 21), 'widget');
            echo "
        </div>
        <div class=\"col-sm-12\" style=\"margin-bottom: 2%;\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "opcaClt", [], "any", false, false, false, 26), 'widget');
            echo "
                </div>
                <div class=\"col-sm-6\">
                    <input type=\"hidden\" value ='";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "html", null, true);
            echo "' class=\"facture-id\" disabled/>
                    <button type=\"button\" class =\"btn btn-warning btn-edit-facture\">Editer</button>
                </div>
            </div>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 36
    public function macro_printAvoirRow($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printAvoirRow"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "printAvoirRow"));

            // line 37
            echo "    <div class=\"col-sm-12 form_avoir\">
        <div class=\"col-sm-12\">
            ";
            // line 39
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "dateCreation", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Date"]);
            // line 41
            echo "
            ";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "dateCreation", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "datetimepick"]]);
            echo "
        </div>
        <div class=\"col-sm-12\">
            ";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "ref", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "N° Avoir"]);
            // line 47
            echo "
            ";
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "ref", [], "any", false, false, false, 48), 'widget');
            echo "
        </div>
        <div class=\"col-sm-12\">
            ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "totalHt", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "font-weight-bold col-sm-12 text-center"], "label" => "Montant"]);
            // line 53
            echo "
            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "totalHt", [], "any", false, false, false, 54), 'widget');
            echo "
        </div>
        <div class=\"col-sm-12\" style=\"margin-bottom: 2%;\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "opcaClt", [], "any", false, false, false, 59), 'widget');
            echo "
                </div>
                <div class=\"col-sm-6\">
                    ";
            // line 63
            echo "                    ";
            // line 64
            echo "                </div>
            </div>
        </div>
    </div>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "dossier/part/dossier-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  899 => 64,  897 => 63,  891 => 59,  883 => 54,  880 => 53,  878 => 51,  872 => 48,  869 => 47,  867 => 45,  861 => 42,  858 => 41,  856 => 39,  852 => 37,  833 => 36,  811 => 29,  805 => 26,  797 => 21,  794 => 20,  792 => 18,  786 => 15,  783 => 14,  781 => 12,  775 => 9,  772 => 8,  770 => 6,  766 => 4,  747 => 3,  736 => 508,  723 => 497,  708 => 484,  703 => 481,  686 => 466,  669 => 450,  666 => 449,  660 => 446,  656 => 444,  650 => 440,  647 => 439,  644 => 437,  640 => 435,  634 => 433,  632 => 432,  620 => 423,  612 => 417,  610 => 416,  608 => 415,  600 => 410,  596 => 409,  592 => 408,  588 => 407,  585 => 406,  580 => 402,  577 => 401,  575 => 400,  570 => 397,  561 => 389,  558 => 388,  556 => 387,  545 => 379,  539 => 376,  533 => 373,  529 => 372,  519 => 364,  517 => 362,  500 => 347,  492 => 340,  490 => 339,  486 => 337,  477 => 335,  473 => 334,  469 => 333,  463 => 329,  461 => 328,  457 => 326,  448 => 324,  444 => 323,  440 => 322,  430 => 314,  422 => 308,  419 => 307,  417 => 305,  410 => 301,  407 => 300,  405 => 298,  398 => 294,  395 => 293,  393 => 291,  386 => 287,  383 => 286,  381 => 284,  375 => 280,  365 => 272,  358 => 268,  350 => 263,  340 => 256,  331 => 249,  323 => 243,  320 => 242,  318 => 240,  313 => 238,  310 => 237,  308 => 235,  292 => 222,  288 => 221,  281 => 217,  277 => 216,  262 => 204,  259 => 203,  257 => 201,  251 => 198,  247 => 196,  245 => 194,  235 => 186,  229 => 181,  227 => 180,  218 => 174,  215 => 173,  213 => 171,  207 => 168,  203 => 166,  201 => 164,  194 => 160,  190 => 158,  188 => 156,  180 => 151,  176 => 149,  174 => 147,  167 => 143,  163 => 141,  161 => 139,  155 => 135,  143 => 125,  140 => 124,  138 => 122,  132 => 119,  129 => 118,  127 => 116,  117 => 109,  114 => 108,  112 => 106,  106 => 103,  103 => 102,  101 => 100,  91 => 93,  88 => 92,  86 => 90,  79 => 87,  71 => 83,  69 => 82,  67 => 81,  64 => 80,  62 => 78,  51 => 70,  48 => 69,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import _self as formMacros %}

{% macro printFactureRow(form) %}
    <div class=\"col-sm-12 form_facture\">
        <div class=\"col-sm-12\">
            {{ form_label(form.dateCreation, 'Date',{
                    'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                }) }}
            {{ form_widget(form.dateCreation,{ 'attr': {'class': 'datetimepick'} }) }}
        </div>
        <div class=\"col-sm-12\">
            {{ form_label(form.ref, 'N° Facture',{
                    'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                }) }}
            {{ form_widget(form.ref) }}
        </div>
        <div class=\"col-sm-12\">
            {{ form_label(form.totalHt, 'Montant',{
                    'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                }) }}
            {{ form_widget(form.totalHt) }}
        </div>
        <div class=\"col-sm-12\" style=\"margin-bottom: 2%;\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    {{ form_widget(form.opcaClt) }}
                </div>
                <div class=\"col-sm-6\">
                    <input type=\"hidden\" value ='{{ form.vars.value.id }}' class=\"facture-id\" disabled/>
                    <button type=\"button\" class =\"btn btn-warning btn-edit-facture\">Editer</button>
                </div>
            </div>
        </div>
    </div>
{% endmacro %}
{% macro printAvoirRow(form) %}
    <div class=\"col-sm-12 form_avoir\">
        <div class=\"col-sm-12\">
            {{ form_label(form.dateCreation, 'Date',{
                    'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                }) }}
            {{ form_widget(form.dateCreation,{ 'attr': {'class': 'datetimepick'} }) }}
        </div>
        <div class=\"col-sm-12\">
            {{ form_label(form.ref, 'N° Avoir',{
                    'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                }) }}
            {{ form_widget(form.ref) }}
        </div>
        <div class=\"col-sm-12\">
            {{ form_label(form.totalHt, 'Montant',{
                    'label_attr': {'class': 'font-weight-bold col-sm-12 text-center'}
                }) }}
            {{ form_widget(form.totalHt) }}
        </div>
        <div class=\"col-sm-12\" style=\"margin-bottom: 2%;\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    {{ form_widget(form.opcaClt) }}
                </div>
                <div class=\"col-sm-6\">
                    {#<input type=\"hidden\" value ='{{ form.vars.value.id }}' class=\"avoir-id\" disabled/>#}
                    {#<button type=\"button\" class =\"btn btn-warning btn-edit-avoir\">Editer</button>#}
                </div>
            </div>
        </div>
    </div>
{% endmacro %}

{{ form_start(doc_form,{ 'attr' : {'class': 'popUp-ajout' , 'method' : 'post', 'onsubmit': 'checkRequireField();' }  }) }}
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"col-sm-12\">
            <div class=\"row p-3 mb-3 well\">
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            {{ form_label(doc_form.idClient, 'client', {
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }} 
                            {% if dossier.idClient %}
                                {# APR-140 : Lien vers fiche client #}
                                <a href=\"{{ path('Fiche_client_prospect_Controller/editClient', { id : dossier.idClient.id} ) }}\" title=\"Voir fiche client\" target=\"_blank\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                </a>
                            {% endif %}
                            {{ form_widget(doc_form.idClient) }}
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            {{ form_label(doc_form.idStructure, 'Structure ',{
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
                            {{ form_widget(doc_form.idStructure) }}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            {{ form_label(doc_form.dossierType, 'Type ', {
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
                            {{ form_widget(doc_form.dossierType) }}
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            {{ form_label(doc_form.idCommercial , 'Commercial ',{
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
                            {{ form_widget(doc_form.idCommercial) }}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-4\">
                    <div class=\"form-row\">
                        <div class=\"form-group col-md-6 text-center\">
                            {{ form_label(doc_form.idStatut , 'Statut ',{
                                    'label_attr': {'class': 'font-weight-bold required'}
                                }) }}
                            {{ form_widget(doc_form.idStatut) }}
                        </div>
                        <div class=\"form-group col-md-6 text-center\">
                            {{ form_label(doc_form.datesigntext , 'Mois de signature ',{
                                    'label_attr': {'class': 'font-weight-bold', 'required': ''}
                                }) }}
                            {{ form_widget(doc_form.datesigntext) }}  
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{#OPCA& add formation date#}
<div class=\"row row p-3 mb-3 \">
    <div class=\"col-sm-4 well\">
        <div class=\"row\">
            <div class=\"form-group col-md-6 text-right\">
                {{ form_label(doc_form.idOpca, 'OPCO', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
            </div>
            <div class=\"col-md-6\"> {{ form_widget(doc_form.idOpca) }}</div>
        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6 text-right\">
                {{ form_label(doc_form.dispositif, 'Dispositif', {
                        'label_attr': {'class': 'font-weight-bold required'}
                    }) }}
            </div>
            <div class=\"col-md-6\"> {{ form_widget(doc_form.dispositif) }}</div>

        </div>
        <div class=\"row\">
            <div class=\"form-group col-md-6 text-right\">
                {{ form_label(doc_form.ref, 'N° dossier interne', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
            </div>
            <div class=\"col-md-6\">{{ form_widget(doc_form.ref) }}</div>
        </div>
        <div class=\"row\">
            <div class=\" col-md-6 text-right\">
                {{ form_label(doc_form.mntDemande, 'Montant HT', {
                        'label_attr': {'class': 'font-weight-bold'}
                    }) }}
            </div>
            <div class=\"col-md-6\">{{ form_widget(doc_form.mntDemande, {'attr': {'id': 'montant'}}) }}</div>
        </div>
        <div class=\"row\">
            <div class=\" col-md-6 text-right\">{{ form_label(doc_form.durparjour, 'Durée par jour', {
                        'label_attr': {'class': 'font-weight-bold required'}
                    }) }}</div>
            <div class=\"col-md-6\">{{ form_widget(doc_form.durparjour) }}</div>
        </div>
    </div>

    <div class=\"col-sm-8\">
        <div class=\"col-sm-12 table-wrapper-scroll-y my-custom-scrollbar\">
            {% include 'dossier/part/calendrier-principal.html.twig' with { formation_dates : formated_formation_dates is defined ? formated_formation_dates : [] } %}
        </div>
    </div>
</div>

{#Dates du stage#}
<div class=\"row p-3 mb-3 \">
    <div class=\"col-md-6\">
        <fieldset>
            <legend><b> Dates du stage </b></legend>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"form-group col-md-6 text-center\">
                            {{ form_label(doc_form.dateDebutPeriode, 'du', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}

                            {{ form_widget(doc_form.dateDebutPeriode,{ 'attr': {'class': 'datetimepick text-center'} }) }}
                        </div>
                        <div class=\"form-group col-sm-6 text-center\">
                            {{ form_label(doc_form.dateFinPeriode, 'au', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                            {{ form_widget(doc_form.dateFinPeriode, { 'attr': {'class': 'datetimepick text-center'} }) }}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"row\">
                        <div class=\"col-sm-4 text-center\"></div>
                        <div class=\"col-sm-4 text-center font-weight-bold\">N</div>
                        <div class=\"col-sm-4text-center font-weight-bold\">N+1</div>
                    </div>
                    <div class=\"row\" >
                        <div class=\"col-sm-4 text-right font-weight-bold\">Nbr J </div>
                        <div class=\"col-sm-4 text-center font-weight-bold\"><input type=\"text \" class=\"form-control\" name=\"nbrj\" id=\"nbrj\" value=\"{{ formated_formation_dates is defined ? formated_formation_dates.total_jours_n : 0 }}\" readonly=\"\"></div>
                        <div class=\"col-sm-4 text-center font-weight-bold\"><input type=\"text\" class=\"form-control\" id=\"nbrj2\" name=\"nbrj2\" value=\"{{ formated_formation_dates is defined ? formated_formation_dates.total_jours_n1 : 0 }}\"  readonly=\"\"></div>
                    </div>
                    <div class=\"row\" >
                        <div class=\"col-sm-4 text-right font-weight-bold\">Nbr H </div>
                        <div class=\"col-sm-4 text-center\"><input type=\"text\" class=\"form-control\" name=\"nbrh\" id=\"nbrh\" value=\"{{ formated_formation_dates is defined ? formated_formation_dates.total_heures_n : 0 }}\"  readonly=\"\"></div>
                        <div class=\"col-sm-4 text-center\"><input type=\"text\" class=\"form-control\" id=\"nbrh2\" name=\"nbrh2\" value=\"{{ formated_formation_dates is defined ? formated_formation_dates.total_heures_n1 : 0 }}\"  readonly=\"\"></div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>


    <div class=\"col-md-6\">
        <fieldset>
            <legend><b>Commission Commercial</b>       <a class=\"btn btn-info btn-portail\" href=\"#\" onclick=\"btnlegend(\$(this))\">LEGENDE</a></legend>
            <div class=\"row\">
                <div class=\"col-sm-2 text-right\">
                    {{ form_label(doc_form.tauxCom, '%', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}</div>
                <div class=\"col-sm-4\">{{ form_widget(doc_form.tauxCom,{'attr': {'id': 'pourcent'}}) }}</div>
                <div class=\"col-sm-2 text-right\">
                    {{ form_label(doc_form.mntMarge, 'Montant ', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}</div>
                <div class=\"col-sm-4\">{{ form_widget(doc_form.mntMarge,{'attr': {'id': 'montantcom'}}) }}</div>
            </div>
        </fieldset>
    </div>
</div>
{#Lieu de stage#}
<div class=\"row\">
    <div class=\"col-md-4\">
        <fieldset>
            <legend>Lieu de stage</legend>

            <nav>
                <div class=\"nav nav-tabs\" id=\"nav-tab\" role=\"tablist\">
                    <a class=\"nav-item nav-link {{ iddossier is not defined ? \"active\" }}\" id=\"btn-vivienne\" data-toggle=\"tab\" href=\"#nav-aprentiv\" role=\"tab\" aria-controls=\"nav-aprentiv\" aria-selected=\"true\">Vivienne</a>
                    <a class=\"nav-item nav-link\" id=\"btn-client\" data-toggle=\"tab\" href=\"#nav-client\" role=\"tab\" aria-controls=\"nav-client\" aria-selected=\"false\">Client</a>
                    <a class=\"nav-item nav-link\" id=\"btn-autre\" data-toggle=\"tab\" href=\"#nav-autre\" role=\"tab\" aria-controls=\"nav-autre\" aria-selected=\"false\">Autre</a>
                </div>
            </nav>

            <div class=\"tab-content\" id=\"nav-tabContent\">
                <div class=\"tab-pane {{ iddossier is not defined ? \"active\" }}\" id=\"nav-aprentiv\" role=\"tabpanel\" aria-labelledby=\"nav-aprentiv-tab\">
                    <input value=\"47 rue Vivienne 75002 Paris\" class=\"form-control\" name =\"lieu[vivienne]\">
                    <input id=\"adresseVivienne\" name =\"dossier[adresseVivienne]\" type=\"hidden\" value=\"1\" class=\"form-control\" />
                </div>
                <div class=\"tab-pane fade lieudossier adrsoc\" id=\"nav-client\" role=\"tabpanel\" aria-labelledby=\"nav-client-tab\">
                    <input value=\"{{ adresse is defined ? adresse : '' }}\" class=\"form-control\" name =\"lieu[client]\" />
                    <input type=\"hidden\" id=\"adresseClient\" name =\"dossier[adresseClient]\" value=\"0\" class=\"form-control\" />
                </div>
                <div class=\"tab-pane fade\" id=\"nav-autre\" role=\"tabpanel\" aria-labelledby=\"nav-autre-tab\">
                    {{ form_widget(doc_form.lieu) }}
                    <input type=\"hidden\" id=\"adresseAutre\" name =\"dossier[adresseAutre]\" value=\"0\" class=\"form-control\" />
                </div>
            </div>
        </fieldset>
    </div>

    {#accord#}
    <div class=\"col-md-3\">
        <fieldset>
            <legend>ACCORD</legend>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">{{ form_label(doc_form.dateAccord, 'Date estimée de réception', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                    <div class=\"col-md-12\">{{ form_widget(doc_form.dateAccord,{ 'attr': {'class': 'datetimepick'} }) }}</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">{{ form_label(doc_form.mntAccorde, 'Montant accordé', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                    <div class=\"col-md-12\">{{ form_widget(doc_form.mntAccorde) }}</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">{{ form_label(doc_form.datesDossier, 'Date de réception', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                    <div class=\"col-md-12\">{{ form_widget(doc_form.datesDossier,{ 'attr': {'class': 'datetimepick'} }) }}</div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\" col-md-12 text-center\">{{ form_label(doc_form.ndossopca, 'N° dossier OPCO', {
                            'label_attr': {'class': 'font-weight-bold'}
                        }) }}
                    <div class=\"col-md-12\">{{ form_widget(doc_form.ndossopca) }}</div>
                </div>
            </div>
        </fieldset>
    </div>
    {#facturation#}
    <div class=\"col-sm-5\">
        <fieldset>
            <legend>FACTURATION</legend>
            <div class=\"col-sm-12 well tableFixHead\">
                <div class=\"row\" >
                    <div class=\"col-sm-6\" >
                        <span><b><h4 ><u>  Facturation </u>
                                    <input type=\"button\" name=\"factbtn[]\" id=\"factbtn\" onclick=\"ajfactonglet()\" value=\"+\"></h4></b></span>
                        <div  id=\"ajout_facture\" class=\"row\" data-prototype=\"{{ form_widget(doc_form.factures.vars.prototype)|e('html_attr') }}\">
                            {% for factureForm in doc_form.factures %}
                                {{ formMacros.printFactureRow(factureForm ) }}
                            {% endfor %}
                        </div>
                    </div>
                    {% do doc_form.factures.setRendered %}
                    <div class=\"col-sm-6\">
                        <span><b><h4 style=\"width: 100%;margin-right: 0%;\"><u>  Avoir </u>
                                    <input type=\"button\" name=\"factavoir\" id=\"factavoir\" value=\"+\">
                                </h4></b></span> <span></span>
                        <div id=\"ajout_avoir\" class=\"row\" data-prototype=\"{{ form_widget(doc_form.avoirs.vars.prototype)|e('html_attr') }}\">
                            {% for avoirForm in doc_form.avoirs %}
                                {{ formMacros.printAvoirRow(avoirForm ) }}
                            {% endfor %}
                        </div>
                    </div>
                    {% do doc_form.avoirs.setRendered %}
                </div>
            </div>
        </fieldset>
    </div>

</div>
{#About Stagiaire#}
<br>
<div class=\"row\">
    <div class=\"col-sm-12\">
        <fieldset>
            <legend>Information stage</legend>
            <div class=\"col-sm-12\">
                <div class=\"col-sm-12\">
                    <div class=\"row\">
                        <div class=\"col-sm-4\">
                            <a href=\"javascript:void(0)\" id=\"btnajoutStage\" data-toggle=\"modal\" data-target=\"#popupAddStage\">
                                <span class=\"fa-stack fa-1x\">
                                    <i class=\"fas fa-circle fa-stack-2x\"></i>
                                    <i class=\"fas fa-plus fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                            {{ form_label(doc_form.nom, 'Intitulé de stage', {
                                    'label_attr': {'class': 'font-weight-bold'}
                                }) }}
                        </div>

                        <div class=\"col-sm-4\"><label class=\"font-weight-bold required\">Thème formation</label></div>
                        <div class=\"col-sm-4\"><label class=\"font-weight-bold required\"> Thème générale</label></div>
                    </div>
                    <div class=\"row Addstage\">
                        <div class=\"col-sm-4\">
                            {{ form_widget(doc_form.nom) }}
                            <span class=\"d-none\" id=\"dossier-nom-text\">{{ nom is defined ? nom : dossier.nom }}</span>
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(doc_form.themeformation) }}
                        </div>
                        <div class=\"col-sm-4\">
                            {{ form_widget(doc_form.themegeneral) }}
                        </div>
                    </div>
                </div>
                <div class=\"col-sm-12 mt-5 mb-3\">
                    <div class=\"row\">
                        <div class=\"col-sm-12\">
                            <div class=\"row\">
                                {%  set param = constant('\\\\App\\\\Constants\\\\ParamDossierStagiaire::FORMATION_DOSSIER_STAGIAIRE') %}
                                {% include 'Common/stagiaire-bloc.html.twig' with { prototype: doc_form.stagiaires.vars.prototype, stagiaires: doc_form.stagiaires, data: dataComplementaire is defined ? dataComplementaire : null , param_dossier_stagiaire: param } %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
    </div>
    {# BLOCK COMMENTAIRE #}
    <div class=\"col-sm-12\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {% include 'Common/commentaire-bloc.html.twig' with { prototype: doc_form.commentaires.vars.prototype, commentaires: doc_form.commentaires } %}
                {% do doc_form.commentaires.setRendered %}
            </div>
        </div>
    </div>
    {# FIN BLOC COMMENTAIRE#}
    <div style=\"display:none;\">
        {{ form_widget(doc_form.dureeHeures) }}
        {{ form_widget(doc_form.dureeJours) }}
        {{ form_widget(doc_form.dateEnvoi) }}
        {{ form_widget(doc_form.dateSignature) }}
    </div>

    <div class=\"col-sm-12 p-3 \" id=\"content_bouton\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            {% if dossier is defined and dossier.id is not null %}
                {# CONTEXT = MAJ : le dossier a déjà été créé #}

                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                    <a name=\"editerdocument\" data-toggle=\"modal\" data-target=\"#modaldossierimpre\" class=\"btn btn-primary btn-block text-white\">Editer courrier</a>
                </div>

                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Third group\">
                    <a href=\"{{ path('Formation_Dossier_Devis_Papier', {'id': dossier ? dossier.id : 0}) }}\" class=\"btn btn-primary btn-block\">Devis papier</a>
                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                    <a name=\"emmargementpapier\" data-toggle=\"modal\" data-target=\"#emmargementpapier\" class=\"btn btn-primary btn-block\" style=\"color:white;\">Emmargement papier</a>
                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                    <a href=\"javascript:void(0)\" id=\"pagedegarde\" class=\"btn btn-primary btn-block\">Page de garde dossier</a>
                </div>
                <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Fourth group\">
                    {% if competence is defined and competence is not null and competence is not empty %}
                        <a href=\"{{ path(\"download_programme_dossier\",{'fichier':competence}) }}\" class=\"btn btn-primary btn-block\">Programme</a>
                    {% else %}
                        <a href=\"#\" class=\"btn btn-primary btn-block disabled\">Programme non disponible</a>
                    {% endif %}
                </div>
                {# Retour APR-102 #}
                {% if client_non_exists is defined and client_non_exists %}
                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                        <a href=\"#\" class=\"btn btn-primary btn-block disabled\" title=\"Client non disponible\">Convention papier</a>
                    </div>
                {% else %}

                    <div class=\"btn-group mr-2\" role=\"group\" aria-label=\"Second group\">
                        <a href=\"{{ path(\"client_prospect_printdocument\", { id : dossier.idClient.id, type: 2, did: dossier.id }) }}\" class=\"btn btn-primary btn-block\">Convention papier</a>
                    </div>
                {% endif %}
            {% endif %}

        </div>
    </div>
    <div class=\"col-sm-12 mt-3\" style=\"\">
        <div class=\"btn-toolbar justify-content-md-center\" role=\"toolbar\" aria-label=\"Toolbar with button groups\">
            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                <button class=\"btn btn-danger\" type=\"button\" style=\"display:none\"  id=\"bntCancel\">Annuler</button>
            </div>
            <div class=\"btn-group mr-2 \" role=\"group\" aria-label=\"First group\">
                <button class=\"btn btn-primary\" type=\"submit\" style=\"border-radius: 5%;\" id=\"save\">Enregistrer</button>
            </div>
        </div>
    </div>
</div>

{# APR-211 #}
<script>

     var myhtml = document.createElement(\"div\");
                     myhtml.innerHTML = \"<table class='table'><thead class='thead'><tr><th scope='col'>CLIENT</th><th scope='col'>TAUX</th></tr></thead><tbody><tr><td>NOUVEAU</td><td>4%</td></tr><tr><td>EXISTANT</td><td>2%</td></tr></tbody></table><p><i class='fas fa-exclamation-triangle' style='margin-right:3px;'></i>Pour les clients (principalement sécurité) émanant de LEADS ou du site internet (entrants) TAUX à 2%.</p>\";

         function btnlegend(elem)
         {
                    swal({
                    content: myhtml,
                    icon: 'warning',
                    width: 2000,
                        })
        }
</script>

{{ form_end(doc_form,{'render_rest': false}) }}

{# BEGIN MODAL #}
<!-- POPUP ADD STAGE -->
<div class=\"modal fade \" id=\"popupAddStage\" tabindex=\"-1\" role=\"dialog\" >
    <div class=\"modal-dialog modal-lg\" role=\"document\">
        <div class=\"modal-content list-filter\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title edit-rdv\">
                    Nouveau Intitulé
                </h5>
                <button type=\"button\" class=\"fas close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                {{ render(path('ajout_competence')) }}

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"tag-form-submit\" class=\"btn btn-primary addNewStage\" data-dismiss=\"modal\">Ajouter</button>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div>
    </div>
</div>
{# END BEGIN MODAL #}

", "dossier/part/dossier-form.html.twig", "/home/jeremy/Bureau/project/app/templates/dossier/part/dossier-form.html.twig");
    }
}
