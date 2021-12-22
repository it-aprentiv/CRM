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

/* propal/Parts/propal.js.html.twig */
class __TwigTemplate_5276b5e2a18001671cba4481729123e58be0d6e82d6b1b9b6e47835b04fef79f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/Parts/propal.js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "propal/Parts/propal.js.html.twig"));

        // line 1
        echo "<script>
    \$(\"#propal_durrej\").on('keyup',function(){
        if(\$(\"#propal_durreh\").val() == ''){
            if(\$(this).val() > 0){
                \$(\"#propal_durreh\").removeAttr('required');
            }
            if(\$(this).val() == ''){
                \$(\"#propal_durreh\").attr('required','required');
            }
        }
    });
    \$(\"#propal_durreh\").on('keyup',function(){
        if(\$(\"#propal_durrej\").val() == ''){
            if(\$(this).val() > 0) {
                \$(this).attr('required','required');
                \$(\"#propal_durrej\").removeAttr('required');
            }
            if(\$(this).val() == ''){
                \$(this).attr('required','required');
                \$(\"#propal_durrej\").attr('required','required');
            }
        }
    });
    
    ";
        // line 26
        echo "    function calculerTTC() {
        var coutHT = common.parseMoney(\$('#propal_coutht').val());
        var tva = common.parseMoney(\$('#propal_montantTVA').val());
        var montantTVA = facture.calculerMontantTVA(coutHT, tva);
        var ttc = coutHT + montantTVA;
        \$('#propal_coutTTC').val(common.formatMoney(ttc));
    }
        
    \$(\"#propal_coutht, #propal_montantTVA\").on('keyup blur', function() {
        calculerTTC();
    });
    
    \$(function() {
        calculerTTC();
    });
    
    /* APR-129: Après avoir choisi le client : renseigner automatiquement les champs :
                    Numéro/voie,
                    Code postal et ville */
    \$('#propal_clientpropal').on('change', function(){
        var client = \$(this).val();
        \$.ajax({
            url: \"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("propal_get_address_client");
        echo "\",
            type: 'get',
            data: {'idClient': client},
            success: function (data) {
                \$('#propal_adresse').val(data['address']);
                \$('#propal_codepostal').val(data['codePostal']);
                //ville
                var ville = data['ville'];
                var newOption = new Option(ville['nomVille'], ville['nomVille'], true, true);
                \$('#propal_ville').append(newOption).trigger('change');
                // APR-129 : suite
                \$('#propal_entitypropal').val(data['entite_id']);
                \$('#propal_commercialpropal').val(data['commercial_id']);
                \$('#propal_telephone').val(data['telephone']);
                \$('#propal_email').val(data['mail']);
            }
        });
    });
    
    ";
        // line 68
        echo "</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "propal/Parts/propal.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 68,  93 => 48,  69 => 26,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(\"#propal_durrej\").on('keyup',function(){
        if(\$(\"#propal_durreh\").val() == ''){
            if(\$(this).val() > 0){
                \$(\"#propal_durreh\").removeAttr('required');
            }
            if(\$(this).val() == ''){
                \$(\"#propal_durreh\").attr('required','required');
            }
        }
    });
    \$(\"#propal_durreh\").on('keyup',function(){
        if(\$(\"#propal_durrej\").val() == ''){
            if(\$(this).val() > 0) {
                \$(this).attr('required','required');
                \$(\"#propal_durrej\").removeAttr('required');
            }
            if(\$(this).val() == ''){
                \$(this).attr('required','required');
                \$(\"#propal_durrej\").attr('required','required');
            }
        }
    });
    
    {# APR-129 : Ajout nouveau champ : TVA et coût TTC   #}
    function calculerTTC() {
        var coutHT = common.parseMoney(\$('#propal_coutht').val());
        var tva = common.parseMoney(\$('#propal_montantTVA').val());
        var montantTVA = facture.calculerMontantTVA(coutHT, tva);
        var ttc = coutHT + montantTVA;
        \$('#propal_coutTTC').val(common.formatMoney(ttc));
    }
        
    \$(\"#propal_coutht, #propal_montantTVA\").on('keyup blur', function() {
        calculerTTC();
    });
    
    \$(function() {
        calculerTTC();
    });
    
    /* APR-129: Après avoir choisi le client : renseigner automatiquement les champs :
                    Numéro/voie,
                    Code postal et ville */
    \$('#propal_clientpropal').on('change', function(){
        var client = \$(this).val();
        \$.ajax({
            url: \"{{ path('propal_get_address_client') }}\",
            type: 'get',
            data: {'idClient': client},
            success: function (data) {
                \$('#propal_adresse').val(data['address']);
                \$('#propal_codepostal').val(data['codePostal']);
                //ville
                var ville = data['ville'];
                var newOption = new Option(ville['nomVille'], ville['nomVille'], true, true);
                \$('#propal_ville').append(newOption).trigger('change');
                // APR-129 : suite
                \$('#propal_entitypropal').val(data['entite_id']);
                \$('#propal_commercialpropal').val(data['commercial_id']);
                \$('#propal_telephone').val(data['telephone']);
                \$('#propal_email').val(data['mail']);
            }
        });
    });
    
    {# FIN APR-129 : Ajout nouveau champ : TVA et coût TTC   #}
</script>", "propal/Parts/propal.js.html.twig", "/home/jeremy/Bureau/project/app/templates/propal/Parts/propal.js.html.twig");
    }
}
