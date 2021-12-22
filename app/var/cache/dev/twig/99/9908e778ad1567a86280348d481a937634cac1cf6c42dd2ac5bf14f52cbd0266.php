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

/* facture/editDom.html.twig */
class __TwigTemplate_377961b4ce50d29cbdb560e44d36801f31febc7156a08b91f84cab98f6ba61eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/editDom.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/editDom.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "popUp-ajout", "method" => "post"]]);
        echo "
";
        // line 3
        echo "<fieldset>
    <legend>REF dossier : <a class=\"small\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.domiciliation.fiche", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 4, $this->source); })()), "domiciliation", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 4, $this->source); })()), "domiciliation", [], "any", false, false, false, 4), "ref", [], "any", false, false, false, 4), "html", null, true);
        echo " <i class=\"fas fa-external-link-alt\"></i></a></legend>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"form-group text-center\">
                ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "domiciliation", [], "any", false, false, false, 8), "client", [], "any", false, false, false, 8), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Client"]);
        // line 10
        echo "
                ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "domiciliation", [], "any", false, false, false, 11), "client", [], "any", false, false, false, 11), 'widget');
        echo "
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "structure", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Struture "]);
        // line 18
        echo "
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "structure", [], "any", false, false, false, 19), 'widget');
        echo "
            </div>
        </div>
        ";
        // line 32
        echo "
        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "domiciliation", [], "any", false, false, false, 36), "commercial", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Commercial "]);
        // line 38
        echo "
                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "domiciliation", [], "any", false, false, false, 39), "commercial", [], "any", false, false, false, 39), 'widget');
        echo "
                </div>
            </div>
        </div>

        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "statut", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Statut "]);
        // line 49
        echo "
                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50), 'widget');
        echo "
                </div>
            </div>
        </div>
    </div>

</fieldset>


<fieldset class=\"form-group\">
    <legend>Facture</legend>
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "numero", [], "any", false, false, false, 63), 'row');
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "date", [], "any", false, false, false, 66), 'row');
        echo "
        </div>
        <div class=\"col-md-4\">
            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "dateestimepaiement", [], "any", false, false, false, 69), 'row');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-4\">
            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "montant", [], "any", false, false, false, 75), 'row');
        echo "
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "tva", [], "any", false, false, false, 79), 'label');
        echo "
                <div class=\"input-group\">
                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "tva", [], "any", false, false, false, 81), 'widget', ["attr" => ["data-tva" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 83
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "tvaTotal", [], "any", false, false, false, 83), "vars", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83)), "data-ttc" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 84
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "ttc", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "id", [], "any", false, false, false, 84)), "data-ht" => ("#" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 85
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "ht", [], "any", false, false, false, 85), "vars", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85))]]);
        // line 87
        echo "
                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\"> %</span>
                    </div>
                </div>
                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "tva", [], "any", false, false, false, 92), 'errors');
        echo "
            </div>
        </div>
        <div class=\"col-sm-4\">
            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "ht", [], "any", false, false, false, 96), 'row');
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-4\"></div>
        
        <div class=\"col-sm-4\">";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "tvaTotal", [], "any", false, false, false, 104), 'row');
        echo "</div>
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-4\">";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "ttc", [], "any", false, false, false, 107), 'row');
        echo "</div>
    </div>
</fieldset>


";
        // line 113
        echo "<div class=\"row\">
    <div class=\"col-sm-12\">
        ";
        // line 116
        echo "        ";
        $this->loadTemplate("Common/commentaire-bloc.html.twig", "facture/editDom.html.twig", 116)->display(twig_array_merge($context, ["prototype" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "commentaires", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "prototype", [], "any", false, false, false, 116), "commentaires" => twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "commentaires", [], "any", false, false, false, 116)]));
        // line 117
        echo "        ";
        // line 118
        echo "        ";
        twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "commentaires", [], "any", false, false, false, 118), "setRendered", [], "any", false, false, false, 118);
        // line 119
        echo "    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
    </div>
</div>
<br>
<div class=\"row action-btn-div\">
    <div class=\"col-sm-4 text-center\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_domiciliation_print", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 128, $this->source); })()), "idfacturedom", [], "any", false, false, false, 128)]), "html", null, true);
        echo "\">
            Editer facture
        </a>
    </div>
    <div class=\"col-sm-4 text-center\" >
        <button class=\"btn btn-warning btn-lg\" type=\"submit\">
            <i class=\"fa fa-check\"></i>
            Enregistrer
        </button>
    </div>
    <div class=\"col-sm-4 text-center\">
        <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture.dom_loc.encaisser", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new RuntimeError('Variable "facture" does not exist.', 139, $this->source); })()), "idfacturedom", [], "any", false, false, false, 139)]), "html", null, true);
        echo "\">
            Encaissement
        </a>
    </div>
</div>
";
        // line 144
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/editDom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 144,  240 => 139,  226 => 128,  215 => 119,  212 => 118,  210 => 117,  207 => 116,  203 => 113,  195 => 107,  189 => 104,  178 => 96,  171 => 92,  164 => 87,  162 => 85,  161 => 84,  160 => 83,  159 => 81,  154 => 79,  147 => 75,  138 => 69,  132 => 66,  126 => 63,  110 => 50,  107 => 49,  105 => 47,  94 => 39,  91 => 38,  89 => 36,  83 => 32,  77 => 19,  74 => 18,  72 => 16,  64 => 11,  61 => 10,  59 => 8,  50 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form,{ 'attr' : {'class': 'popUp-ajout' , 'method' : 'post' }  }) }}
{#  Entete de filtre generale  #}
<fieldset>
    <legend>REF dossier : <a class=\"small\" href=\"{{ path('crm.domiciliation.fiche', {id : facture.domiciliation.id }) }}\" target=\"_blank\">{{ facture.domiciliation.ref }} <i class=\"fas fa-external-link-alt\"></i></a></legend>
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <div class=\"form-group text-center\">
                {{ form_label(form.domiciliation.client, 'Client', {
                'label_attr': {'class': 'font-weight-bold'}
            }) }}
                {{ form_widget(form.domiciliation.client) }}
            </div>
        </div>
        <div class=\"col-sm-2\">
            <div class=\"form-group\">
                {{ form_label(form.structure , 'Struture ',{
                'label_attr': {'class': 'font-weight-bold'}
            }) }}
                {{ form_widget(form.structure) }}
            </div>
        </div>
        {#<div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    {{ form_label(form.payeur , 'Payeur ',{
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                    {{ form_widget(form.payeur) }}
                </div>
            </div>
        </div>#}

        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    {{ form_label(form.domiciliation.commercial , 'Commercial ',{
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                    {{ form_widget(form.domiciliation.commercial) }}
                </div>
            </div>
        </div>

        <div class=\"col-sm-2\">
            <div class=\"form-row\">
                <div class=\"form-group text-center\">
                    {{ form_label(form.statut , 'Statut ',{
                    'label_attr': {'class': 'font-weight-bold'}
                }) }}
                    {{ form_widget(form.statut) }}
                </div>
            </div>
        </div>
    </div>

</fieldset>


<fieldset class=\"form-group\">
    <legend>Facture</legend>
    <div class=\"row\">
        <div class=\"col-md-4\">
            {{ form_row(form.numero) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(form.date) }}
        </div>
        <div class=\"col-md-4\">
            {{ form_row(form.dateestimepaiement) }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-4\">
            {{ form_row(form.montant) }}
        </div>
        <div class=\"col-sm-4\">
            <div class=\"form-group\">
                {{ form_label(form.tva) }}
                <div class=\"input-group\">
                    {{ form_widget(form.tva, {
                                'attr': {
                                    'data-tva': '#'~form.tvaTotal.vars.id,
                                    'data-ttc': '#'~form.ttc.vars.id,
                                    'data-ht': '#'~form.ht.vars.id
                                }
                            }) }}
                    <div class=\"input-group-append\">
                        <span class=\"input-group-text\"> %</span>
                    </div>
                </div>
                {{ form_errors(form.tva) }}
            </div>
        </div>
        <div class=\"col-sm-4\">
            {{ form_row(form.ht) }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-4\"></div>
        
        <div class=\"col-sm-4\">{{ form_row(form.tvaTotal) }}</div>
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-4\"></div>
        <div class=\"col-sm-4\">{{ form_row(form.ttc) }}</div>
    </div>
</fieldset>


{#About Commentaire#}
<div class=\"row\">
    <div class=\"col-sm-12\">
        {#        {% include 'Common/facture_commentaires.html.twig' with { prototype: form.commentaires.vars.prototype, commentaires: form.commentaires } %}#}
        {% include 'Common/commentaire-bloc.html.twig' with { prototype: form.commentaires.vars.prototype, commentaires: form.commentaires } %}
        {# pour empecher l'application d'afficher un bloc commentaire à la fin #}
        {% do form.commentaires.setRendered %}
    </div>
</div>
<div class=\"row\">
    <div class=\"col-md-12\">
    </div>
</div>
<br>
<div class=\"row action-btn-div\">
    <div class=\"col-sm-4 text-center\">
        <a class=\"btn btn-primary btn-lg\" href=\"{{ path('facture_domiciliation_print', { 'id': facture.idfacturedom }) }}\">
            Editer facture
        </a>
    </div>
    <div class=\"col-sm-4 text-center\" >
        <button class=\"btn btn-warning btn-lg\" type=\"submit\">
            <i class=\"fa fa-check\"></i>
            Enregistrer
        </button>
    </div>
    <div class=\"col-sm-4 text-center\">
        <a class=\"btn btn-primary btn-lg\" href=\"{{ path('facture.dom_loc.encaisser', {'id': facture.idfacturedom}) }}\">
            Encaissement
        </a>
    </div>
</div>
{{ form_end(form) }}", "facture/editDom.html.twig", "/home/jeremy/Bureau/project/app/templates/facture/editDom.html.twig");
    }
}
