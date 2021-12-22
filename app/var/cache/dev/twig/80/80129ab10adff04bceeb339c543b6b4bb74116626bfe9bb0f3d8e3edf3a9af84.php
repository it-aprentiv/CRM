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

/* dossier/part/dossier-autocomplete-js.html.twig */
class __TwigTemplate_c1d77dd9755ed62a8b5cfbf28789ae8e3ef895d2d7034a8086d22cb3a325ff74 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/dossier-autocomplete-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/dossier-autocomplete-js.html.twig"));

        // line 1
        echo "<!-- Autocomplétion Note dossier -->
<script type=\"text/javascript\">

    var \$listAutocomplete = ";
        // line 4
        echo json_encode((isset($context["listAutocomplete"]) || array_key_exists("listAutocomplete", $context) ? $context["listAutocomplete"] : (function () { throw new RuntimeError('Variable "listAutocomplete" does not exist.', 4, $this->source); })()));
        echo ";

    function getNjourApres(limit){

        var dateNow = new Date();
        dateNow.setDate(dateNow.getDate() + limit);
        if(dateNow.getDay() == 6){
            dateNow.setDate(daty.getDate() + 2);
        }else if(dateNow.getDay() == 0){
            dateNow.setDate(dateNow.getDate() + 1);
        }

        var month = (dateNow.getMonth()+1).toString().padStart(2, '0');
        var date = dateNow.getDate().toString().padStart(2, 0);

        return date + \"/\" + month + \"/\"+ dateNow.getFullYear();
    }

    function getDateByAutocomplete(id){
        var date = null;
        switch (id) {
            case ";
        // line 25
        echo twig_escape_filter($this->env, twig_constant("\\App\\Constants\\DossierNote::AUTOID_EMARG_A_ENVOYER"), "html", null, true);
        echo ":
            case ";
        // line 26
        echo twig_escape_filter($this->env, twig_constant("\\App\\Constants\\DossierNote::AUTOID_FACT_CLT_A_FAIRE"), "html", null, true);
        echo ":
            case ";
        // line 27
        echo twig_escape_filter($this->env, twig_constant("\\App\\Constants\\DossierNote::AUTOID_ENC_CHQ_EN_ATT"), "html", null, true);
        echo ":
                date = \$('#";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["datefin"]) || array_key_exists("datefin", $context) ? $context["datefin"] : (function () { throw new RuntimeError('Variable "datefin" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "').val();
                break;
            case ";
        // line 30
        echo twig_escape_filter($this->env, twig_constant("\\App\\Constants\\DossierNote::AUTOID_EMARG_A_RECLAMER"), "html", null, true);
        echo ":
            case ";
        // line 31
        echo twig_escape_filter($this->env, twig_constant("\\App\\Constants\\DossierNote::AUTOID_DOCS_A_RECLAMER"), "html", null, true);
        echo ":
                date = getNjourApres(10);
                break;
            case ";
        // line 34
        echo twig_escape_filter($this->env, twig_constant("\\App\\Constants\\DossierNote::AUTOID_RELANCE_FOPCA"), "html", null, true);
        echo ":
                date = getNjourApres(42);
                break;
            default:
                date = '';
        }

        return date;
    }

    /**
     * handler for config autocomplete for note row
     *
     * @param tr
     */
    ";
        // line 50
        echo "    function addAutocomplete(tr) {
        if (!\$.fn.autocomplete) {
            console.log('module autocomplete not defined');
            return;
        }

        var comment = tr.find('.note-texte');
        var action = tr.find('.note-action');
        var dateAction = tr.find('.note-date-action');
        var statutAction = tr.find('.note-action-statut');

        comment.autocomplete({
            source: function (request, response) {
                var searchTerm = ['a', 'e', 'r', 'd'];
                var lowertext = request.term.toLowerCase();
                var datas = searchTerm.includes(lowertext) ? \$listAutocomplete : [];

                response(datas);
            },
            minLength: 1,
            select: function(event, ui) {

                if(ui.item){
                    var opca = \$('#";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["opcaId"]) || array_key_exists("opcaId", $context) ? $context["opcaId"] : (function () { throw new RuntimeError('Variable "opcaId" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "').find('option:selected').text();
                    var numInterne = \$('#";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["numInterne"]) || array_key_exists("numInterne", $context) ? $context["numInterne"] : (function () { throw new RuntimeError('Variable "numInterne" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "').val();
                    var textComment = ui.item.info.replace('__OPCA__', opca);
                    textComment = textComment.replace('__num_dossier__', numInterne);
                    comment.val(textComment);
                    action.val(ui.item.action);
                    statutAction.val(ui.item.statut);
                    dateAction.val(getDateByAutocomplete(ui.item.id));
                }
                return false;
            }

        });
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/part/dossier-autocomplete-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 74,  142 => 73,  117 => 50,  99 => 34,  93 => 31,  89 => 30,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Autocomplétion Note dossier -->
<script type=\"text/javascript\">

    var \$listAutocomplete = {{ listAutocomplete|json_encode|raw }};

    function getNjourApres(limit){

        var dateNow = new Date();
        dateNow.setDate(dateNow.getDate() + limit);
        if(dateNow.getDay() == 6){
            dateNow.setDate(daty.getDate() + 2);
        }else if(dateNow.getDay() == 0){
            dateNow.setDate(dateNow.getDate() + 1);
        }

        var month = (dateNow.getMonth()+1).toString().padStart(2, '0');
        var date = dateNow.getDate().toString().padStart(2, 0);

        return date + \"/\" + month + \"/\"+ dateNow.getFullYear();
    }

    function getDateByAutocomplete(id){
        var date = null;
        switch (id) {
            case {{ constant('\\\\App\\\\Constants\\\\DossierNote::AUTOID_EMARG_A_ENVOYER') }}:
            case {{ constant('\\\\App\\\\Constants\\\\DossierNote::AUTOID_FACT_CLT_A_FAIRE') }}:
            case {{ constant('\\\\App\\\\Constants\\\\DossierNote::AUTOID_ENC_CHQ_EN_ATT') }}:
                date = \$('#{{ datefin }}').val();
                break;
            case {{ constant('\\\\App\\\\Constants\\\\DossierNote::AUTOID_EMARG_A_RECLAMER') }}:
            case {{ constant('\\\\App\\\\Constants\\\\DossierNote::AUTOID_DOCS_A_RECLAMER') }}:
                date = getNjourApres(10);
                break;
            case {{ constant('\\\\App\\\\Constants\\\\DossierNote::AUTOID_RELANCE_FOPCA') }}:
                date = getNjourApres(42);
                break;
            default:
                date = '';
        }

        return date;
    }

    /**
     * handler for config autocomplete for note row
     *
     * @param tr
     */
    {# use this function name as property addAutocomplete in commentaire-bloc.html.twig to set autocomplétion #}
    function addAutocomplete(tr) {
        if (!\$.fn.autocomplete) {
            console.log('module autocomplete not defined');
            return;
        }

        var comment = tr.find('.note-texte');
        var action = tr.find('.note-action');
        var dateAction = tr.find('.note-date-action');
        var statutAction = tr.find('.note-action-statut');

        comment.autocomplete({
            source: function (request, response) {
                var searchTerm = ['a', 'e', 'r', 'd'];
                var lowertext = request.term.toLowerCase();
                var datas = searchTerm.includes(lowertext) ? \$listAutocomplete : [];

                response(datas);
            },
            minLength: 1,
            select: function(event, ui) {

                if(ui.item){
                    var opca = \$('#{{ opcaId }}').find('option:selected').text();
                    var numInterne = \$('#{{ numInterne }}').val();
                    var textComment = ui.item.info.replace('__OPCA__', opca);
                    textComment = textComment.replace('__num_dossier__', numInterne);
                    comment.val(textComment);
                    action.val(ui.item.action);
                    statutAction.val(ui.item.statut);
                    dateAction.val(getDateByAutocomplete(ui.item.id));
                }
                return false;
            }

        });
    }
</script>", "dossier/part/dossier-autocomplete-js.html.twig", "/var/www/templates/dossier/part/dossier-autocomplete-js.html.twig");
    }
}
