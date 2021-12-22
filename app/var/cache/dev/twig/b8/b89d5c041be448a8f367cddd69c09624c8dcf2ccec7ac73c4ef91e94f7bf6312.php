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

/* dossier/part/custom-extract-js.html.twig */
class __TwigTemplate_f1749fc1ca7c6496919b3ac68c14659b887251389be7980a6651cf19bfbbe8d7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/custom-extract-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dossier/part/custom-extract-js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$(document).ready(function () {
        // vérification champ à afficher: il doit y avoir au moins un coché
        \$('.submit-extract').on('click', function (e) {
            var formExtract = \$(\$(this).data('form'));
            var checkedField = formExtract.find('.display-field:checked');
            if (checkedField.length === 0) {
                formExtract.siblings('.check-missing').show();
            } else {
                formExtract.submit();
            }
        });

        // cocher tout
        \$('.display-all').on('change', function () {
            var checked = \$(this).prop('checked');
            // mettre la classe column-to-display au bloc liste des champs
            var columnDiv = \$(this).closest('.column-to-display');
            
            if (checked) {
                // chaque champ affichable doit avoir la classe display-field
                columnDiv.find('.display-field').prop(\"checked\", true);
            } else {
                columnDiv.find('.display-field').prop(\"checked\", false);
            }
        });

        \$('.js-datepicker-month').datepicker({
            format: \"mm\",
            maxViewMode: 2,
            minViewMode: 1,
            autoclose: true,
            'language': 'fr',
        });

        \$('.js-datepicker-year').datepicker({
            format: \"yyyy\",
            minViewMode: 'years',
            autoclose: true,
            'language': 'fr',
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dossier/part/custom-extract-js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$(document).ready(function () {
        // vérification champ à afficher: il doit y avoir au moins un coché
        \$('.submit-extract').on('click', function (e) {
            var formExtract = \$(\$(this).data('form'));
            var checkedField = formExtract.find('.display-field:checked');
            if (checkedField.length === 0) {
                formExtract.siblings('.check-missing').show();
            } else {
                formExtract.submit();
            }
        });

        // cocher tout
        \$('.display-all').on('change', function () {
            var checked = \$(this).prop('checked');
            // mettre la classe column-to-display au bloc liste des champs
            var columnDiv = \$(this).closest('.column-to-display');
            
            if (checked) {
                // chaque champ affichable doit avoir la classe display-field
                columnDiv.find('.display-field').prop(\"checked\", true);
            } else {
                columnDiv.find('.display-field').prop(\"checked\", false);
            }
        });

        \$('.js-datepicker-month').datepicker({
            format: \"mm\",
            maxViewMode: 2,
            minViewMode: 1,
            autoclose: true,
            'language': 'fr',
        });

        \$('.js-datepicker-year').datepicker({
            format: \"yyyy\",
            minViewMode: 'years',
            autoclose: true,
            'language': 'fr',
        });
    });
</script>", "dossier/part/custom-extract-js.html.twig", "/var/www/templates/dossier/part/custom-extract-js.html.twig");
    }
}
