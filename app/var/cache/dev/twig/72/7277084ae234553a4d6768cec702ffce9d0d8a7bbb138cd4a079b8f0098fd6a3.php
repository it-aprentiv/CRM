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

/* formation/childs/suiviom-js.twig */
class __TwigTemplate_831b404f12a00f7aab588adeec4747165d0cbe0c8e07360066742c6d8e2c99c9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/suiviom-js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/suiviom-js.twig"));

        // line 1
        echo "<script type=\"text/javascript\">

    var \$collectionSuiviom = \$(\"#suiviom_collection\");

    /**
     * fonction pour supprimer une ligne
     *
     * @param buttonDelete bouton pour activer suppression
     */
    function removeSuiviom(buttonDelete) {
        var confirmDelete = window.confirm(\"Etes-vous sur de vouloir supprimer cette mission ?\");

        if (confirmDelete) {
            var id = \$(buttonDelete).data('idrow');
            var idOM = \$(`#\${id}`).find('input[type=hidden]').val();

            if(idOM) {
                \$.ajax({
                    url: \"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_om_formation");
        echo "\",
                    type: 'DELETE',
                    data: {'id': idOM},
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

    function addSuiviom()
    {
        var newcomment = \$('#suiviom_prototype').html();
        newcomment = newcomment.replace(/__name__/g, \$collectionSuiviom.find(\"tr\").length+1);
        let tr = \$(newcomment);
        tr.find('[name]').removeAttr('disabled');
        \$collectionSuiviom.append(tr);
        var lastTr = \$collectionSuiviom.find(\"tr:last-child\");
        lastTr.find(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        lastTr.find('.delete-suiviom').on('click', function () {
            removeSuiviom(this);
        });
    }

    \$(document).ready(function () {
        \$('#add_suiviom').click(function () {
            addSuiviom();
        });

        \$('.js-datepicker').datepicker({
            'format':'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });

        \$('#suiviom_collection .delete-suiviom').on('click', function () {
            removeSuiviom(this);
        });
    });

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/childs/suiviom-js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 19,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">

    var \$collectionSuiviom = \$(\"#suiviom_collection\");

    /**
     * fonction pour supprimer une ligne
     *
     * @param buttonDelete bouton pour activer suppression
     */
    function removeSuiviom(buttonDelete) {
        var confirmDelete = window.confirm(\"Etes-vous sur de vouloir supprimer cette mission ?\");

        if (confirmDelete) {
            var id = \$(buttonDelete).data('idrow');
            var idOM = \$(`#\${id}`).find('input[type=hidden]').val();

            if(idOM) {
                \$.ajax({
                    url: \"{{ path('delete_om_formation') }}\",
                    type: 'DELETE',
                    data: {'id': idOM},
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

    function addSuiviom()
    {
        var newcomment = \$('#suiviom_prototype').html();
        newcomment = newcomment.replace(/__name__/g, \$collectionSuiviom.find(\"tr\").length+1);
        let tr = \$(newcomment);
        tr.find('[name]').removeAttr('disabled');
        \$collectionSuiviom.append(tr);
        var lastTr = \$collectionSuiviom.find(\"tr:last-child\");
        lastTr.find(\".js-datepicker\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });

        lastTr.find('.delete-suiviom').on('click', function () {
            removeSuiviom(this);
        });
    }

    \$(document).ready(function () {
        \$('#add_suiviom').click(function () {
            addSuiviom();
        });

        \$('.js-datepicker').datepicker({
            'format':'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr',
        });

        \$('#suiviom_collection .delete-suiviom').on('click', function () {
            removeSuiviom(this);
        });
    });

</script>", "formation/childs/suiviom-js.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/suiviom-js.twig");
    }
}
