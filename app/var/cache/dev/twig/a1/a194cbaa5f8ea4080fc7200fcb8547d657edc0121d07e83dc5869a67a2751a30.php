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

/* facture/Parts/facture_avoirs_dossier.js.html.twig */
class __TwigTemplate_634cd7f4214724161d5d938a9bd948a7cca2cc1ff4b5ff796e4a58cb7b2480f1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/Parts/facture_avoirs_dossier.js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/Parts/facture_avoirs_dossier.js.html.twig"));

        // line 1
        echo "<script language=\"javascript\">
    \$(document).on('blur', '.taux-tva-fact,.taux-tva-factavoir', function() {
        loadMntValue(\$(this));
    });
    \$(document).on('blur','.mnthtnfact ',function(e){
        calculatettlht(\$(this));
    });
    \$(document).on('keyup','.mnthtnfact',function(e){
        calculatettlht(\$(this));
    });
    \$(document).on('blur','.mnthtnfactavoir ',function(e){
        calculatettlhtav(\$(this));
    });
    \$(document).on('keyup','.mnthtnfactavoir',function(e){
        calculatettlhtav(\$(this));
    });

    function loadMntValue(element) {
        var value = element.val();

        //var valueField = elt.val().replace(/[^0-9\\.]/g, '');
        value = value.replace(',', '.');

        value = value.replace(/[^0-9\\.]/g, '');

        element.val(value);

        value = (value === '') ? 0 : value;
        var brutHT = \$(element.attr('data-ht')).val();
        brutHT = brutHT.replace(' ', '');
        brutHT = brutHT.replace(',', '.');
        brutHT = (brutHT === '') ? 0 : brutHT;
        var htField = parseFloat(brutHT);
        var tvaField = \$(element.attr('data-tva'));
        var ttcField = \$(element.attr('data-ttc'));
        var mntTva = parseFloat(value) * htField / 100;
        var mntTTC = htField + mntTva;
        tvaField.val(numberUtils.format(mntTva, 2, ',', ' '));
        ttcField.val(numberUtils.format(mntTTC, 2, ',', ' '));
    }

    function calculatettlht(element){
        var ttlhtelem = \$('.'+\$(element).data('ttlht'));
        var sum = \"0.00\";
        var otherht = \$(\".mnthtnfact\").not(\$(element)).val().replace(',', '.').replace(' ', '');
        var htval = \$(element).val().replace(',', '.').replace(' ', '');
        if(otherht == \"\"){
            otherht = \"0.00\";
        }
        if(htval == \"\"){
            htval = \"0.00\";
        }
        sum = parseFloat(otherht) + parseFloat(htval);
        \$(ttlhtelem).val(sum);
        \$(ttlhtelem).blur();
        
        if(\$(\".taux-tva-fact\").val() == \"\"){
            \$(\".taux-tva-fact\").val(0);
        }
        
        loadMntValue(\$(\".taux-tva-fact\"));
    }

    function calculatettlhtav(element){
        var ttlhtelem = \$('.'+\$(element).data('ttlht'));
        var sum = \"0.00\";
        var otherht = \$(\".mnthtnfactavoir\").not(\$(element)).val().replace(',', '.').replace(' ', '');
        var htval = \$(element).val().replace(',', '.').replace(' ', '');
        if(otherht == \"\"){
            otherht = \"0.00\";
        }
        if(htval == \"\"){
            htval = \"0.00\";
        }
        sum = parseFloat(otherht) + parseFloat(htval);
        \$(ttlhtelem).val(sum);
        \$(ttlhtelem).blur();
        if(\$(\".taux-tva-factavoir\").val() == \"\"){
            \$(\".taux-tva-factavoir\").val(0);
        }
        loadMntValue(\$(\".taux-tva-factavoir\"));
    }
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "facture/Parts/facture_avoirs_dossier.js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script language=\"javascript\">
    \$(document).on('blur', '.taux-tva-fact,.taux-tva-factavoir', function() {
        loadMntValue(\$(this));
    });
    \$(document).on('blur','.mnthtnfact ',function(e){
        calculatettlht(\$(this));
    });
    \$(document).on('keyup','.mnthtnfact',function(e){
        calculatettlht(\$(this));
    });
    \$(document).on('blur','.mnthtnfactavoir ',function(e){
        calculatettlhtav(\$(this));
    });
    \$(document).on('keyup','.mnthtnfactavoir',function(e){
        calculatettlhtav(\$(this));
    });

    function loadMntValue(element) {
        var value = element.val();

        //var valueField = elt.val().replace(/[^0-9\\.]/g, '');
        value = value.replace(',', '.');

        value = value.replace(/[^0-9\\.]/g, '');

        element.val(value);

        value = (value === '') ? 0 : value;
        var brutHT = \$(element.attr('data-ht')).val();
        brutHT = brutHT.replace(' ', '');
        brutHT = brutHT.replace(',', '.');
        brutHT = (brutHT === '') ? 0 : brutHT;
        var htField = parseFloat(brutHT);
        var tvaField = \$(element.attr('data-tva'));
        var ttcField = \$(element.attr('data-ttc'));
        var mntTva = parseFloat(value) * htField / 100;
        var mntTTC = htField + mntTva;
        tvaField.val(numberUtils.format(mntTva, 2, ',', ' '));
        ttcField.val(numberUtils.format(mntTTC, 2, ',', ' '));
    }

    function calculatettlht(element){
        var ttlhtelem = \$('.'+\$(element).data('ttlht'));
        var sum = \"0.00\";
        var otherht = \$(\".mnthtnfact\").not(\$(element)).val().replace(',', '.').replace(' ', '');
        var htval = \$(element).val().replace(',', '.').replace(' ', '');
        if(otherht == \"\"){
            otherht = \"0.00\";
        }
        if(htval == \"\"){
            htval = \"0.00\";
        }
        sum = parseFloat(otherht) + parseFloat(htval);
        \$(ttlhtelem).val(sum);
        \$(ttlhtelem).blur();
        
        if(\$(\".taux-tva-fact\").val() == \"\"){
            \$(\".taux-tva-fact\").val(0);
        }
        
        loadMntValue(\$(\".taux-tva-fact\"));
    }

    function calculatettlhtav(element){
        var ttlhtelem = \$('.'+\$(element).data('ttlht'));
        var sum = \"0.00\";
        var otherht = \$(\".mnthtnfactavoir\").not(\$(element)).val().replace(',', '.').replace(' ', '');
        var htval = \$(element).val().replace(',', '.').replace(' ', '');
        if(otherht == \"\"){
            otherht = \"0.00\";
        }
        if(htval == \"\"){
            htval = \"0.00\";
        }
        sum = parseFloat(otherht) + parseFloat(htval);
        \$(ttlhtelem).val(sum);
        \$(ttlhtelem).blur();
        if(\$(\".taux-tva-factavoir\").val() == \"\"){
            \$(\".taux-tva-factavoir\").val(0);
        }
        loadMntValue(\$(\".taux-tva-factavoir\"));
    }
</script>", "facture/Parts/facture_avoirs_dossier.js.html.twig", "/var/www/templates/facture/Parts/facture_avoirs_dossier.js.html.twig");
    }
}
