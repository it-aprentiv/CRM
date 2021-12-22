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

/* Common/stagiaire-js.html.twig */
class __TwigTemplate_78136b216d61a084fd44d52282318540bfb7282c20bc2a77342ef7ebd199c8d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/stagiaire-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/stagiaire-js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">

    var \$collectionStagiaire = \$(\"#stagiaires_collection\");

    function addStagiaire()
    {
        var newcomment = \$('#stagiaire_prototype').html();
        newcomment = newcomment.replace(/__name__/g, \$collectionStagiaire.find(\"tr\").length+1);
        let tr = \$(newcomment);
        tr.find('[name]').removeAttr('disabled');
        \$collectionStagiaire.append(tr);
        var lastTr = \$collectionStagiaire.find(\"tr:last-child\");
        lastTr.find(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        lastTr.find('.delete-stagiaire').on('click', function () {
            removeStagiaire(this);
        });
    }

    function removeStagiaire(buttonDelete) {
        var confirmDelete = window.confirm(\"Etes-vous sûr de vouloir supprimer ce stagiaire ?\");

        if (confirmDelete) {
            var id = \$(buttonDelete).data('idrow');
            var paramDossier =  \$(buttonDelete).attr('data-paramDossier');
            var idContact = \$(`#\${id}`).find('input[type=hidden]').val();

            if(idContact && paramDossier) {
                \$.ajax({
                    url: \"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_stagiaire_formation");
        echo "\",
                    type: 'DELETE',
                    data: {'id': idContact, 'param': paramDossier},
                    success: function (data) {
                        \$('tr#' + id).remove();
                        console.log(data);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            \$('tr#' + id).remove();
        }
    }

    \$(document).ready(function () {
        \$('#add_stagiaire').click(function () {
            addStagiaire();
        });

        \$('.js-datepicker').datepicker({
            'format':'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });

        \$('.delete-stagiaire').on('click', function () {
            removeStagiaire(this);
        });
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/stagiaire-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 36,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">

    var \$collectionStagiaire = \$(\"#stagiaires_collection\");

    function addStagiaire()
    {
        var newcomment = \$('#stagiaire_prototype').html();
        newcomment = newcomment.replace(/__name__/g, \$collectionStagiaire.find(\"tr\").length+1);
        let tr = \$(newcomment);
        tr.find('[name]').removeAttr('disabled');
        \$collectionStagiaire.append(tr);
        var lastTr = \$collectionStagiaire.find(\"tr:last-child\");
        lastTr.find(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        lastTr.find('.delete-stagiaire').on('click', function () {
            removeStagiaire(this);
        });
    }

    function removeStagiaire(buttonDelete) {
        var confirmDelete = window.confirm(\"Etes-vous sûr de vouloir supprimer ce stagiaire ?\");

        if (confirmDelete) {
            var id = \$(buttonDelete).data('idrow');
            var paramDossier =  \$(buttonDelete).attr('data-paramDossier');
            var idContact = \$(`#\${id}`).find('input[type=hidden]').val();

            if(idContact && paramDossier) {
                \$.ajax({
                    url: \"{{ path('delete_stagiaire_formation') }}\",
                    type: 'DELETE',
                    data: {'id': idContact, 'param': paramDossier},
                    success: function (data) {
                        \$('tr#' + id).remove();
                        console.log(data);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }

            \$('tr#' + id).remove();
        }
    }

    \$(document).ready(function () {
        \$('#add_stagiaire').click(function () {
            addStagiaire();
        });

        \$('.js-datepicker').datepicker({
            'format':'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });

        \$('.delete-stagiaire').on('click', function () {
            removeStagiaire(this);
        });
    });

</script>", "Common/stagiaire-js.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/stagiaire-js.html.twig");
    }
}
