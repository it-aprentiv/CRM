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

/* Common/commentaire.html.twig */
class __TwigTemplate_4740c6eab2070d7de2d23d57d604ee943050300ec93e0e0da597edb1e0937fe9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/commentaire.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/commentaire.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), "commentaires", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 3
            echo "    <div id=\"formation_commentaires\" data-prototype=\"<fieldset class=&quot;form-group&quot;><legend class=&quot;col-form-label&quot;>__name__label__</legend><div id=&quot;formation_commentaires___name__&quot;><div class=&quot;form-group&quot;><label for=&quot;formation_commentaires___name___dateAdd&quot;>Date création</label><input type=&quot;date&quot; id=&quot;formation_commentaires___name___dateAdd&quot; name=&quot;formation[commentaires][__name__][dateAdd]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label for=&quot;formation_commentaires___name___texteNote&quot;>Commentiares</label><input type=&quot;text&quot; id=&quot;formation_commentaires___name___texteNote&quot; name=&quot;formation[commentaires][__name__][texteNote]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;&quot; for=&quot;formation_commentaires___name___idNomAction&quot;>Action</label><select id=&quot;formation_commentaires___name___idNomAction&quot; name=&quot;formation[commentaires][__name__][idNomAction]&quot; class=&quot;form-control&quot;><option value=&quot;&quot;>Selectionnez</option><option value=&quot;0&quot;>A Rappeler</option><option value=&quot;1&quot;>Propal à faire</option><option value=&quot;2&quot;>RDV à définir</option><option value=&quot;3&quot;>Relance Propal</option><option value=&quot;4&quot;>Relance A. OPCA</option><option value=&quot;5&quot;>Relance F. OPCA</option><option value=&quot;6&quot;>Relance Clt</option><option value=&quot;7&quot;>Att. Rappel Clt</option><option value=&quot;8&quot;>Att. Courrier Clt</option><option value=&quot;9&quot;>Att. Courrier OPCA</option><option value=&quot;10&quot;>Note</option><option value=&quot;11&quot;>Enct Chq en att</option><option value=&quot;12&quot;>Fact OPCA à faire</option><option value=&quot;13&quot;>Fact CLT à faire</option><option value=&quot;14&quot;>Dossier à monter</option><option value=&quot;15&quot;>Suivi formation</option><option value=&quot;16&quot;>Préparer RDV</option><option value=&quot;17&quot;>Att. Accord OPCA</option><option value=&quot;18&quot;>Emarg à envoyer</option><option value=&quot;19&quot;>Emarg à réclamer</option><option value=&quot;20&quot;>Accord à réclamer</option><option value=&quot;21&quot;>Docs à réclamer</option><option value=&quot;22&quot;>Att. Rembt Clt</option><option value=&quot;23&quot;>Att. Chq à encaisser</option><option value=&quot;24&quot;>Att. Infos du Cial</option><option value=&quot;25&quot;>RDV à préparer</option><option value=&quot;26&quot;>Dossier à valider</option><option value=&quot;27&quot;>Dossier à envoyer</option><option value=&quot;28&quot;>Encaissement</option><option value=&quot;29&quot;>Att Virt Clt</option><option value=&quot;30&quot;>Att. Infos Client</option><option value=&quot;31&quot;>email à envoyer</option><option value=&quot;32&quot;>Pbl Relances</option><option value=&quot;33&quot;>plaquette à envoyer</option><option value=&quot;34&quot;>A re-prospecter</option><option value=&quot;35&quot;>RDV à confirmer</option><option value=&quot;36&quot;>A Appeler</option><option value=&quot;37&quot;>Dossier à récupérer</option><option value=&quot;38&quot;>Envoyer message</option><option value=&quot;39&quot;>Dde rembt à envoyer</option><option value=&quot;40&quot;>Docs à récupérer</option><option value=&quot;41&quot;>RDV</option><option value=&quot;42&quot;>rendez vous</option><option value=&quot;43&quot;>mail à envoyer</option><option value=&quot;44&quot;>Codes accès OPCA</option><option value=&quot;45&quot;>Point admin</option><option value=&quot;46&quot;>RDV à reporter</option><option value=&quot;47&quot;>Dossier à finaliser</option><option value=&quot;48&quot;>Relance Prospere</option><option value=&quot;49&quot;>Mail pour cpte opca</option><option value=&quot;50&quot;>SIRET ENTREPRISE</option><option value=&quot;51&quot;>Att reglt clt</option></select></div><div class=&quot;form-group&quot;><label for=&quot;formation_commentaires___name___dateAction&quot;>Date action</label><input type=&quot;date&quot; id=&quot;formation_commentaires___name___dateAction&quot; name=&quot;formation[commentaires][__name__][dateAction]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;&quot; for=&quot;formation_commentaires___name___idUserAction&quot;>Qui</label><select id=&quot;formation_commentaires___name___idUserAction&quot; name=&quot;formation[commentaires][__name__][idUserAction]&quot; class=&quot;form-control&quot;><option value=&quot;&quot;>Selectionnez</option><option value=&quot;21&quot;>A DISPACHER
</option><option value=&quot;29&quot;>Aurelie</option><option value=&quot;34&quot;>Bertrand BONIFAZI</option><option value=&quot;17&quot;>CHAU Linda</option><option value=&quot;18&quot;>Doriane GUEHENNEC</option><option value=&quot;23&quot;>Gérard NEU
</option><option value=&quot;22&quot;>INTER</option><option value=&quot;9&quot;>Laetitia NUNES</option><option value=&quot;31&quot;>LOUBAUD Veronique</option><option value=&quot;7&quot;>Manon BOULANGER</option><option value=&quot;27&quot;>Marine</option><option value=&quot;15&quot;>Marjolaine PETILLON</option><option value=&quot;11&quot;>Melissa IMREK</option><option value=&quot;16&quot;>Milena MILEVA </option><option value=&quot;25&quot;>Moore</option><option value=&quot;6&quot;>Pascal MUNIER</option><option value=&quot;20&quot;>Pierre CATELAND</option><option value=&quot;32&quot;>RAOELIJAONA Allan</option><option value=&quot;4&quot;>Remuald LOISON</option><option value=&quot;24&quot;>Richard AUDOUIN\t</option><option value=&quot;36&quot;>Sam SAMITIAMA</option><option value=&quot;35&quot;>Sana SOULEMANIE</option><option value=&quot;28&quot;>Sarah</option><option value=&quot;26&quot;>Soktida</option><option value=&quot;19&quot;>Sophie HAAS</option><option value=&quot;13&quot;>Thibault GARDEDIEU</option><option value=&quot;8&quot;>Virginie CRUGEON </option></select></div><div class=&quot;form-group&quot;><label class=&quot;&quot; for=&quot;formation_commentaires___name___idActionStatut&quot;>Statut action</label><select id=&quot;formation_commentaires___name___idActionStatut&quot; name=&quot;formation[commentaires][__name__][idActionStatut]&quot; class=&quot;form-control&quot;><option value=&quot;&quot;>Selectionnez</option><option value=&quot;0&quot;>A faire</option><option value=&quot;1&quot;>En cours</option><option value=&quot;2&quot;>Fait</option><option value=&quot;3&quot;>Annulé</option><option value=&quot;4&quot;>Note</option><option value=&quot;5&quot;>Pour info</option><option value=&quot;6&quot;>A véfifier</option><option value=&quot;7&quot;>Suivi formation</option><option value=&quot;8&quot;>Suivi rglt</option><option value=&quot;9&quot;>Vu</option><option value=&quot;10&quot;>Encaissé</option><option value=&quot;11&quot;>Pbl Relances</option><option value=&quot;12&quot;>En stand by</option><option value=&quot;13&quot;>Code accès OPCA</option><option value=&quot;14&quot;>mail pour cpte opca</option></select></div></div></fieldset>\">
        <fieldset class=\"form-group\">
            <div id=\"formation_commentaires_0\">
                <div class=\"row\">
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateAdd", [], "any", false, false, false, 11), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date de creation"]);
            // line 13
            echo "
                            ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateAdd", [], "any", false, false, false, 14), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            ";
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "texteNote", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Commentaire"]);
            // line 21
            echo "
                            ";
            // line 22
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "texteNote", [], "any", false, false, false, 22), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "idNomAction", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Action"]);
            // line 29
            echo "
                            ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "idNomAction", [], "any", false, false, false, 30), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "idActionStatut", [], "any", false, false, false, 35), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Statut action"]);
            // line 37
            echo "
                            ";
            // line 38
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "idActionStatut", [], "any", false, false, false, 38), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            ";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateAction", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Date action"]);
            // line 45
            echo "
                            ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "dateAction", [], "any", false, false, false, 46), 'widget');
            echo "
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            ";
            // line 51
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "idUserAction", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "font-weight-bold"], "label" => "Qui"]);
            // line 53
            echo "
                            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["commentaire"], "idUserAction", [], "any", false, false, false, 54), 'widget');
            echo "
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"btn_delete_form btn btn-danger\">X</a>
        </fieldset>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/commentaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 63,  130 => 54,  127 => 53,  125 => 51,  117 => 46,  114 => 45,  112 => 43,  104 => 38,  101 => 37,  99 => 35,  91 => 30,  88 => 29,  86 => 27,  78 => 22,  75 => 21,  73 => 19,  65 => 14,  62 => 13,  60 => 11,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% for commentaire in form.commentaires %}
    <div id=\"formation_commentaires\" data-prototype=\"<fieldset class=&quot;form-group&quot;><legend class=&quot;col-form-label&quot;>__name__label__</legend><div id=&quot;formation_commentaires___name__&quot;><div class=&quot;form-group&quot;><label for=&quot;formation_commentaires___name___dateAdd&quot;>Date création</label><input type=&quot;date&quot; id=&quot;formation_commentaires___name___dateAdd&quot; name=&quot;formation[commentaires][__name__][dateAdd]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label for=&quot;formation_commentaires___name___texteNote&quot;>Commentiares</label><input type=&quot;text&quot; id=&quot;formation_commentaires___name___texteNote&quot; name=&quot;formation[commentaires][__name__][texteNote]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;&quot; for=&quot;formation_commentaires___name___idNomAction&quot;>Action</label><select id=&quot;formation_commentaires___name___idNomAction&quot; name=&quot;formation[commentaires][__name__][idNomAction]&quot; class=&quot;form-control&quot;><option value=&quot;&quot;>Selectionnez</option><option value=&quot;0&quot;>A Rappeler</option><option value=&quot;1&quot;>Propal à faire</option><option value=&quot;2&quot;>RDV à définir</option><option value=&quot;3&quot;>Relance Propal</option><option value=&quot;4&quot;>Relance A. OPCA</option><option value=&quot;5&quot;>Relance F. OPCA</option><option value=&quot;6&quot;>Relance Clt</option><option value=&quot;7&quot;>Att. Rappel Clt</option><option value=&quot;8&quot;>Att. Courrier Clt</option><option value=&quot;9&quot;>Att. Courrier OPCA</option><option value=&quot;10&quot;>Note</option><option value=&quot;11&quot;>Enct Chq en att</option><option value=&quot;12&quot;>Fact OPCA à faire</option><option value=&quot;13&quot;>Fact CLT à faire</option><option value=&quot;14&quot;>Dossier à monter</option><option value=&quot;15&quot;>Suivi formation</option><option value=&quot;16&quot;>Préparer RDV</option><option value=&quot;17&quot;>Att. Accord OPCA</option><option value=&quot;18&quot;>Emarg à envoyer</option><option value=&quot;19&quot;>Emarg à réclamer</option><option value=&quot;20&quot;>Accord à réclamer</option><option value=&quot;21&quot;>Docs à réclamer</option><option value=&quot;22&quot;>Att. Rembt Clt</option><option value=&quot;23&quot;>Att. Chq à encaisser</option><option value=&quot;24&quot;>Att. Infos du Cial</option><option value=&quot;25&quot;>RDV à préparer</option><option value=&quot;26&quot;>Dossier à valider</option><option value=&quot;27&quot;>Dossier à envoyer</option><option value=&quot;28&quot;>Encaissement</option><option value=&quot;29&quot;>Att Virt Clt</option><option value=&quot;30&quot;>Att. Infos Client</option><option value=&quot;31&quot;>email à envoyer</option><option value=&quot;32&quot;>Pbl Relances</option><option value=&quot;33&quot;>plaquette à envoyer</option><option value=&quot;34&quot;>A re-prospecter</option><option value=&quot;35&quot;>RDV à confirmer</option><option value=&quot;36&quot;>A Appeler</option><option value=&quot;37&quot;>Dossier à récupérer</option><option value=&quot;38&quot;>Envoyer message</option><option value=&quot;39&quot;>Dde rembt à envoyer</option><option value=&quot;40&quot;>Docs à récupérer</option><option value=&quot;41&quot;>RDV</option><option value=&quot;42&quot;>rendez vous</option><option value=&quot;43&quot;>mail à envoyer</option><option value=&quot;44&quot;>Codes accès OPCA</option><option value=&quot;45&quot;>Point admin</option><option value=&quot;46&quot;>RDV à reporter</option><option value=&quot;47&quot;>Dossier à finaliser</option><option value=&quot;48&quot;>Relance Prospere</option><option value=&quot;49&quot;>Mail pour cpte opca</option><option value=&quot;50&quot;>SIRET ENTREPRISE</option><option value=&quot;51&quot;>Att reglt clt</option></select></div><div class=&quot;form-group&quot;><label for=&quot;formation_commentaires___name___dateAction&quot;>Date action</label><input type=&quot;date&quot; id=&quot;formation_commentaires___name___dateAction&quot; name=&quot;formation[commentaires][__name__][dateAction]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;&quot; for=&quot;formation_commentaires___name___idUserAction&quot;>Qui</label><select id=&quot;formation_commentaires___name___idUserAction&quot; name=&quot;formation[commentaires][__name__][idUserAction]&quot; class=&quot;form-control&quot;><option value=&quot;&quot;>Selectionnez</option><option value=&quot;21&quot;>A DISPACHER
</option><option value=&quot;29&quot;>Aurelie</option><option value=&quot;34&quot;>Bertrand BONIFAZI</option><option value=&quot;17&quot;>CHAU Linda</option><option value=&quot;18&quot;>Doriane GUEHENNEC</option><option value=&quot;23&quot;>Gérard NEU
</option><option value=&quot;22&quot;>INTER</option><option value=&quot;9&quot;>Laetitia NUNES</option><option value=&quot;31&quot;>LOUBAUD Veronique</option><option value=&quot;7&quot;>Manon BOULANGER</option><option value=&quot;27&quot;>Marine</option><option value=&quot;15&quot;>Marjolaine PETILLON</option><option value=&quot;11&quot;>Melissa IMREK</option><option value=&quot;16&quot;>Milena MILEVA </option><option value=&quot;25&quot;>Moore</option><option value=&quot;6&quot;>Pascal MUNIER</option><option value=&quot;20&quot;>Pierre CATELAND</option><option value=&quot;32&quot;>RAOELIJAONA Allan</option><option value=&quot;4&quot;>Remuald LOISON</option><option value=&quot;24&quot;>Richard AUDOUIN\t</option><option value=&quot;36&quot;>Sam SAMITIAMA</option><option value=&quot;35&quot;>Sana SOULEMANIE</option><option value=&quot;28&quot;>Sarah</option><option value=&quot;26&quot;>Soktida</option><option value=&quot;19&quot;>Sophie HAAS</option><option value=&quot;13&quot;>Thibault GARDEDIEU</option><option value=&quot;8&quot;>Virginie CRUGEON </option></select></div><div class=&quot;form-group&quot;><label class=&quot;&quot; for=&quot;formation_commentaires___name___idActionStatut&quot;>Statut action</label><select id=&quot;formation_commentaires___name___idActionStatut&quot; name=&quot;formation[commentaires][__name__][idActionStatut]&quot; class=&quot;form-control&quot;><option value=&quot;&quot;>Selectionnez</option><option value=&quot;0&quot;>A faire</option><option value=&quot;1&quot;>En cours</option><option value=&quot;2&quot;>Fait</option><option value=&quot;3&quot;>Annulé</option><option value=&quot;4&quot;>Note</option><option value=&quot;5&quot;>Pour info</option><option value=&quot;6&quot;>A véfifier</option><option value=&quot;7&quot;>Suivi formation</option><option value=&quot;8&quot;>Suivi rglt</option><option value=&quot;9&quot;>Vu</option><option value=&quot;10&quot;>Encaissé</option><option value=&quot;11&quot;>Pbl Relances</option><option value=&quot;12&quot;>En stand by</option><option value=&quot;13&quot;>Code accès OPCA</option><option value=&quot;14&quot;>mail pour cpte opca</option></select></div></div></fieldset>\">
        <fieldset class=\"form-group\">
            <div id=\"formation_commentaires_0\">
                <div class=\"row\">
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            {{ form_label(commentaire.dateAdd, \"Date de creation\", {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(commentaire.dateAdd) }}
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            {{ form_label(commentaire.texteNote, \"Commentaire\", {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(commentaire.texteNote) }}
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            {{ form_label(commentaire.idNomAction, \"Action\", {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(commentaire.idNomAction) }}
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            {{ form_label(commentaire.idActionStatut, \"Statut action\", {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(commentaire.idActionStatut) }}
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            {{ form_label(commentaire.dateAction, \"Date action\", {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(commentaire.dateAction) }}
                        </div>
                    </div>
                    <div class=\"col-sm\">
                        <div class=\"form-group\">
                            {{ form_label(commentaire.idUserAction, \"Qui\", {
                                'label_attr': {'class': 'font-weight-bold'}
                            }) }}
                            {{ form_widget(commentaire.idUserAction) }}
                        </div>
                    </div>
                </div>
            </div>
            <a href=\"#\" class=\"btn_delete_form btn btn-danger\">X</a>
        </fieldset>
    </div>
{% endfor %}

", "Common/commentaire.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/commentaire.html.twig");
    }
}
