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

/* domiciliationlocation/part/ajout-type-js.html.twig */
class __TwigTemplate_c48f74db09a2f24e0bdca80d2698d5f2c1fcda7da30891d51004238d2954c4e9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/part/ajout-type-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "domiciliationlocation/part/ajout-type-js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$('#ajout_type_btn').on('click', function () {
        var libelle = \$('#ajout_type_libelle').val();
        var select = \$('#' + \$(this).attr('select-tag-id'));

        if (libelle === '') {
            alert('Veuillez donner la désignation du noubeau type !');
            return false;
        }

        var btnAdd = \$('#ajout_type_btn');
        btnAdd.prop('disabled', true);

        \$.ajax({
            type: 'POST',
            url: \"";
        // line 16
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.domiciliation.ajout_categorie", ["categorie" => "type"]), "js"), "html", null, true);
        echo "\",
            data: {libelle: libelle},
            success: function (response) {
                if (response.success) {
                    select.append('<option value=\"' + response.data.id + '\" >' + response.data.libelle + '</option>');
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert('Erreur inattendue. Veuillez recommencez SVP !');
            },
            complete: function () {
                \$('#modalType').modal('hide');
                btnAdd.removeAttr('disabled');
            }

        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "domiciliationlocation/part/ajout-type-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$('#ajout_type_btn').on('click', function () {
        var libelle = \$('#ajout_type_libelle').val();
        var select = \$('#' + \$(this).attr('select-tag-id'));

        if (libelle === '') {
            alert('Veuillez donner la désignation du noubeau type !');
            return false;
        }

        var btnAdd = \$('#ajout_type_btn');
        btnAdd.prop('disabled', true);

        \$.ajax({
            type: 'POST',
            url: \"{{ path('crm.domiciliation.ajout_categorie', {categorie: 'type'})|escape('js') }}\",
            data: {libelle: libelle},
            success: function (response) {
                if (response.success) {
                    select.append('<option value=\"' + response.data.id + '\" >' + response.data.libelle + '</option>');
                } else {
                    alert(response.message);
                }
            },
            error: function () {
                alert('Erreur inattendue. Veuillez recommencez SVP !');
            },
            complete: function () {
                \$('#modalType').modal('hide');
                btnAdd.removeAttr('disabled');
            }

        });
    });
</script>", "domiciliationlocation/part/ajout-type-js.html.twig", "/home/jeremy/Bureau/project/app/templates/domiciliationlocation/part/ajout-type-js.html.twig");
    }
}
