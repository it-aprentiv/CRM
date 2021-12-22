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

/* formation/childs/formation.js.twig */
class __TwigTemplate_5ed7320660d54b1d7956c142924c14ccfe1f4bc80f009f1650798b120fb4bf60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/formation.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/formation.js.twig"));

        // line 1
        echo "<script>
const APRENTIV = \"1\";
const PROFORM = \"2\";
const PROSPERE = \"3\";
const PREFIX_APRENTIV_OM = 'AC/OM';
const PREFIX_PROFORM_OM = 'Pro/OM';
const PREFIX_PROSPERE_OM = 'PRS/OM';

\$(document).ready(function(e){

    /******** Gestion adresse ********/
    const addressVivienne = \"";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("App\\Constants\\AddressFormation::VIVIENNE_ADDRESS"), "js", null, true);
        echo "\";
    var prototype = \$('input#formation_lieu');

    \$('a.nav-item.nav-link').on('shown.bs.tab', function (e) {
        let href = e.target.attributes.href.value;
        let contentTab = \$(`\${href}`);

        if('#p2' != href) {
            contentTab.html('');
            if('#p1' == href) {
                let proto = \$(prototype).attr('placeholder', addressVivienne);
                contentTab.html(proto);
            } else {
                let proto = \$(prototype);
                proto.removeAttr('placeholder');
                proto.attr('value', '');
                contentTab.html(proto);
            }
        } else {
            //Supprimer les inputs pour ne pas envoyer un lieu de stage
            // car le lieu de stage pour du client(onglet) correspond à l'adresse de la société
            \$('#p1, #p2, #p3').html('');
            addressClient = \$('#address_client').val();
            contentTab.append('<input type=\"text\" class=\"form-control\" placeholder=\"'+addressClient+'\" />');
        }
    });

    /******** Fin Gestion adresse ********/

    /*************** Chargement adresse client ********/
    var addressClient = \"\";
    \$('#formation_idClient').change(function () {
        var idClient = this.value;
        \$.ajax({
            url: \"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("formation_get_address_client"), "js", null, true);
        echo "\",
            type: 'GET',
            data: {'idClient': idClient},
            dataType: 'JSON',
            success: function (response) {
            console.log(response.address);
            //Initialisation d l'adresse client
            \$('input#address_client').val(response.address);
        }
        });
    });

    /***************Fin chargement adresse client ******/


    \$('#formation_idStructure').change(function(){
        var structureTypeSelected = this.value;
        var targetInput = \$('#formation_ref');
        // get next id formation
        \$.ajax({
            url: \"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("next_insert_id_formation"), "js", null, true);
        echo "\",
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                let nextId = data.nextId;

                // add N° OM
                if(APRENTIV === structureTypeSelected) {
                    targetInput.val(`\${PREFIX_APRENTIV_OM}\${nextId}`);
                } else if(PROFORM === structureTypeSelected) {
                    targetInput.val(`\${PREFIX_PROFORM_OM}\${nextId}`);
                } else if(PROSPERE === structureTypeSelected) {
                    targetInput.val(`\${PREFIX_PROSPERE_OM}\${nextId}`);
                } else {
                    targetInput.val('');
                }
            }
        });
    });
});
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/childs/formation.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 66,  93 => 46,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
const APRENTIV = \"1\";
const PROFORM = \"2\";
const PROSPERE = \"3\";
const PREFIX_APRENTIV_OM = 'AC/OM';
const PREFIX_PROFORM_OM = 'Pro/OM';
const PREFIX_PROSPERE_OM = 'PRS/OM';

\$(document).ready(function(e){

    /******** Gestion adresse ********/
    const addressVivienne = \"{{ constant('App\\\\Constants\\\\AddressFormation::VIVIENNE_ADDRESS') }}\";
    var prototype = \$('input#formation_lieu');

    \$('a.nav-item.nav-link').on('shown.bs.tab', function (e) {
        let href = e.target.attributes.href.value;
        let contentTab = \$(`\${href}`);

        if('#p2' != href) {
            contentTab.html('');
            if('#p1' == href) {
                let proto = \$(prototype).attr('placeholder', addressVivienne);
                contentTab.html(proto);
            } else {
                let proto = \$(prototype);
                proto.removeAttr('placeholder');
                proto.attr('value', '');
                contentTab.html(proto);
            }
        } else {
            //Supprimer les inputs pour ne pas envoyer un lieu de stage
            // car le lieu de stage pour du client(onglet) correspond à l'adresse de la société
            \$('#p1, #p2, #p3').html('');
            addressClient = \$('#address_client').val();
            contentTab.append('<input type=\"text\" class=\"form-control\" placeholder=\"'+addressClient+'\" />');
        }
    });

    /******** Fin Gestion adresse ********/

    /*************** Chargement adresse client ********/
    var addressClient = \"\";
    \$('#formation_idClient').change(function () {
        var idClient = this.value;
        \$.ajax({
            url: \"{{ path('formation_get_address_client') }}\",
            type: 'GET',
            data: {'idClient': idClient},
            dataType: 'JSON',
            success: function (response) {
            console.log(response.address);
            //Initialisation d l'adresse client
            \$('input#address_client').val(response.address);
        }
        });
    });

    /***************Fin chargement adresse client ******/


    \$('#formation_idStructure').change(function(){
        var structureTypeSelected = this.value;
        var targetInput = \$('#formation_ref');
        // get next id formation
        \$.ajax({
            url: \"{{ path('next_insert_id_formation') }}\",
            type: 'GET',
            dataType: 'JSON',
            success: function (data) {
                let nextId = data.nextId;

                // add N° OM
                if(APRENTIV === structureTypeSelected) {
                    targetInput.val(`\${PREFIX_APRENTIV_OM}\${nextId}`);
                } else if(PROFORM === structureTypeSelected) {
                    targetInput.val(`\${PREFIX_PROFORM_OM}\${nextId}`);
                } else if(PROSPERE === structureTypeSelected) {
                    targetInput.val(`\${PREFIX_PROSPERE_OM}\${nextId}`);
                } else {
                    targetInput.val('');
                }
            }
        });
    });
});
</script>", "formation/childs/formation.js.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/formation.js.twig");
    }
}
