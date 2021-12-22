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

/* formation/childs/calcul.vente.achat.js.twig */
class __TwigTemplate_4b03a884812cddcfa507ef545efb51152fdd9cd4f8d2b5b96ee803c482c34dfd extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/calcul.vente.achat.js.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "formation/childs/calcul.vente.achat.js.twig"));

        // line 1
        echo "<script>
    const jour = 8;

    \$(document).ready(function (e) {
        var dureeJours = \$('#formation_dureeJours');
        var dureeHeures = \$('#formation_dureeHeures');
        var pvTotalHt = \$('#formation_pvTotalHt');
        var pfmteurTotalHt = \$('#formation_pfmteurTotalHt');
        let \$tarifVenteJ = \$('#formation_pvTarifJ');
        let \$tarifVenteH = \$('#formation_pvTarifJ');
        let \$tarifFormateurJ = \$('#formation_pfmteurJ');
        let \$tarifFormateurH = \$('formation_pfmteurH');
        let \$margeBrute = \$('span#marge_brute');

        // Si durée par J modifier
        \$(dureeJours).on('keyup change blur', function (e) {
            let tarifVenteTotal = 0;
            let tarifFormateurTotal = 0;
            
            if (\$tarifVenteJ.val()) {
                tarifVenteTotal = tarifTotalJour(\$tarifVenteJ.val(), \$(dureeJours).val());
                \$(pvTotalHt).val(tarifVenteTotal);
            }
            
            if (\$tarifFormateurJ.val()) {
                tarifFormateurTotal = tarifTotalJour(\$tarifFormateurJ.val(), \$(dureeJours).val());
                \$(pfmteurTotalHt.val(tarifFormateurTotal));
            }
            
            if (\$tarifVenteJ.val() && \$tarifFormateurJ.val()) {
                const margeBrute = parseFloat(tarifVenteTotal - tarifFormateurTotal).toFixed(2);
                \$margeBrute.text(margeBrute);
            }
            
        });
        
        // Si durée par J modifier
        \$(dureeHeures).on('keyup change blur', function (e) {
           ";
        // line 43
        echo "        });


        //Affichage resultat calcul (journalier) dans le champ totalHT (prix de vente)
        \$('#formation_pvTarifJ').on('keyup change blur', function (e) {
            let dureeJ = dureeJours.val();
            let tarifJ = \$(this).val();

            //Vider les autres champs
            \$('#formation_pvTarifDj, #formation_pvTarifH').val('');

            if (dureeJ && tarifJ) {
                let tarifTotalVenteHT = tarifTotalJour(dureeJ, tarifJ);
                pvTotalHt.val(tarifTotalVenteHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        //Affichage resultat calcul(journalier) coût formateur
        \$('#formation_pfmteurJ').on('keyup change blur', function (e) {
            let dureeJ = dureeJours.val();
            let tarifJ = \$(this).val();

            //Vider les autres champs
            \$('#formation_pfmteurDj, #formation_pfmteurH').val('');

            if (dureeJ && tarifJ) {
                let tarifTotalAchatHT = tarifTotalJour(dureeJ, tarifJ);
                pfmteurTotalHt.val(tarifTotalAchatHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        //Affichage resultat calcul(horaire) prix de vente
        \$('#formation_pvTarifH').on('keyup blur change', function (e) {
            let dureeH = dureeHeures.val();
            let tarifH = \$(this).val();

            //Vider les autres champs
            \$('#formation_pvTarifDj, #formation_pvTarifJ').val('');

            if (dureeH && tarifH) {
                let tarifTotalVenteHT = tarifTotalJour(dureeH, tarifH);
                pvTotalHt.val(tarifTotalVenteHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        //Affichage resultat calcul(horaire) coût formateur
        \$('#formation_pfmteurH').on('keyup blur change', function (e) {
            let dureeH = dureeHeures.val();
            let tarifH = \$(this).val();

            //Vider les autres champs
            \$('#formation_pfmteurDj, #formation_pfmteurJ').val('');

            if (dureeH && tarifH) {
                let tarifTotalAchatHT = tarifTotalJour(dureeH, tarifH);
                pfmteurTotalHt.val(tarifTotalAchatHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        // calcul marge brute pour les formation sous traitance
    ";
        // line 127
        if (("S" == (isset($context["typeFormation"]) || array_key_exists("typeFormation", $context) ? $context["typeFormation"] : (function () { throw new RuntimeError('Variable "typeFormation" does not exist.', 127, $this->source); })()))) {
            // line 128
            echo "            \$('#formation_pvTotalHt, #formation_pfmteurTotalHt').blur(function () {
                let pv = \$('#formation_pvTotalHt').val();
                let pf = \$('#formation_pfmteurTotalHt').val();
                if (pv && pf) {
                    let marge = margeBrute(pv, pf);
                    \$('span#marge_brute').text('');
                    \$('span#marge_brute').text(marge);
                }
            });
    ";
        }
        // line 138
        echo "        });

    ";
        // line 141
        echo "        function tarifTotalJour(dureeJ, tarifJ) {
            return (convertStringToFloat(dureeJ) * convertStringToFloat(tarifJ));
        }

    ";
        // line 146
        echo "        function tarifTotalHeure(dureeH, tarifH) {
            return ((convertStringToFloat(dureeH)) * convertStringToFloat(tarifH));
        }

    ";
        // line 151
        echo "        function convertStringToFloat(tarif) {
            let tarifWithoutComma = tarif.replace(/ /g, \"\");
            tarifWithoutComma = tarifWithoutComma.replace(/,/g, \".\");

            return parseFloat(tarifWithoutComma).toFixed(2);
        }

    ";
        // line 159
        echo "        function margeBrute(pvTotalHT, pfmteurTotalHT) {
            return (convertStringToFloat(pvTotalHT) - convertStringToFloat(pfmteurTotalHT)).toFixed(2);
        }
        
        function updateMargeBrute (pvTotalHt, pfmteurTotalHt) {
            let marge = margeBrute(pvTotalHt, pfmteurTotalHt);
            \$('span#marge_brute').text('');
            \$('span#marge_brute').append(marge);
        }

</script>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "formation/childs/calcul.vente.achat.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 159,  199 => 151,  193 => 146,  187 => 141,  183 => 138,  171 => 128,  169 => 127,  83 => 43,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    const jour = 8;

    \$(document).ready(function (e) {
        var dureeJours = \$('#formation_dureeJours');
        var dureeHeures = \$('#formation_dureeHeures');
        var pvTotalHt = \$('#formation_pvTotalHt');
        var pfmteurTotalHt = \$('#formation_pfmteurTotalHt');
        let \$tarifVenteJ = \$('#formation_pvTarifJ');
        let \$tarifVenteH = \$('#formation_pvTarifJ');
        let \$tarifFormateurJ = \$('#formation_pfmteurJ');
        let \$tarifFormateurH = \$('formation_pfmteurH');
        let \$margeBrute = \$('span#marge_brute');

        // Si durée par J modifier
        \$(dureeJours).on('keyup change blur', function (e) {
            let tarifVenteTotal = 0;
            let tarifFormateurTotal = 0;
            
            if (\$tarifVenteJ.val()) {
                tarifVenteTotal = tarifTotalJour(\$tarifVenteJ.val(), \$(dureeJours).val());
                \$(pvTotalHt).val(tarifVenteTotal);
            }
            
            if (\$tarifFormateurJ.val()) {
                tarifFormateurTotal = tarifTotalJour(\$tarifFormateurJ.val(), \$(dureeJours).val());
                \$(pfmteurTotalHt.val(tarifFormateurTotal));
            }
            
            if (\$tarifVenteJ.val() && \$tarifFormateurJ.val()) {
                const margeBrute = parseFloat(tarifVenteTotal - tarifFormateurTotal).toFixed(2);
                \$margeBrute.text(margeBrute);
            }
            
        });
        
        // Si durée par J modifier
        \$(dureeHeures).on('keyup change blur', function (e) {
           {# if (\$tarifVenteH.val()) {
                let tarifCoutFormateurTotal = tarifTotalHeure(\$tarifVenteH.val(), \$(dureeHeures).val());
                \$(pfmteurTotalHt).val(tarifCoutFormateurTotal);
            }#}
        });


        //Affichage resultat calcul (journalier) dans le champ totalHT (prix de vente)
        \$('#formation_pvTarifJ').on('keyup change blur', function (e) {
            let dureeJ = dureeJours.val();
            let tarifJ = \$(this).val();

            //Vider les autres champs
            \$('#formation_pvTarifDj, #formation_pvTarifH').val('');

            if (dureeJ && tarifJ) {
                let tarifTotalVenteHT = tarifTotalJour(dureeJ, tarifJ);
                pvTotalHt.val(tarifTotalVenteHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        //Affichage resultat calcul(journalier) coût formateur
        \$('#formation_pfmteurJ').on('keyup change blur', function (e) {
            let dureeJ = dureeJours.val();
            let tarifJ = \$(this).val();

            //Vider les autres champs
            \$('#formation_pfmteurDj, #formation_pfmteurH').val('');

            if (dureeJ && tarifJ) {
                let tarifTotalAchatHT = tarifTotalJour(dureeJ, tarifJ);
                pfmteurTotalHt.val(tarifTotalAchatHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        //Affichage resultat calcul(horaire) prix de vente
        \$('#formation_pvTarifH').on('keyup blur change', function (e) {
            let dureeH = dureeHeures.val();
            let tarifH = \$(this).val();

            //Vider les autres champs
            \$('#formation_pvTarifDj, #formation_pvTarifJ').val('');

            if (dureeH && tarifH) {
                let tarifTotalVenteHT = tarifTotalJour(dureeH, tarifH);
                pvTotalHt.val(tarifTotalVenteHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        //Affichage resultat calcul(horaire) coût formateur
        \$('#formation_pfmteurH').on('keyup blur change', function (e) {
            let dureeH = dureeHeures.val();
            let tarifH = \$(this).val();

            //Vider les autres champs
            \$('#formation_pfmteurDj, #formation_pfmteurJ').val('');

            if (dureeH && tarifH) {
                let tarifTotalAchatHT = tarifTotalJour(dureeH, tarifH);
                pfmteurTotalHt.val(tarifTotalAchatHT);
            }

            if (pvTotalHt.val() && pfmteurTotalHt.val()) {
                let marge = margeBrute(pvTotalHt.val(), pfmteurTotalHt.val());
                \$('span#marge_brute').text('');
                \$('span#marge_brute').append(marge);
            }
        });

        // calcul marge brute pour les formation sous traitance
    {% if 'S' == typeFormation %}
            \$('#formation_pvTotalHt, #formation_pfmteurTotalHt').blur(function () {
                let pv = \$('#formation_pvTotalHt').val();
                let pf = \$('#formation_pfmteurTotalHt').val();
                if (pv && pf) {
                    let marge = margeBrute(pv, pf);
                    \$('span#marge_brute').text('');
                    \$('span#marge_brute').text(marge);
                }
            });
    {% endif %}
        });

    {# Calcul tarif total par jour #}
        function tarifTotalJour(dureeJ, tarifJ) {
            return (convertStringToFloat(dureeJ) * convertStringToFloat(tarifJ));
        }

    {# Calcul tarif total par heure #}
        function tarifTotalHeure(dureeH, tarifH) {
            return ((convertStringToFloat(dureeH)) * convertStringToFloat(tarifH));
        }

    {# Conversion string en float #}
        function convertStringToFloat(tarif) {
            let tarifWithoutComma = tarif.replace(/ /g, \"\");
            tarifWithoutComma = tarifWithoutComma.replace(/,/g, \".\");

            return parseFloat(tarifWithoutComma).toFixed(2);
        }

    {# Calcul marge brute #}
        function margeBrute(pvTotalHT, pfmteurTotalHT) {
            return (convertStringToFloat(pvTotalHT) - convertStringToFloat(pfmteurTotalHT)).toFixed(2);
        }
        
        function updateMargeBrute (pvTotalHt, pfmteurTotalHt) {
            let marge = margeBrute(pvTotalHt, pfmteurTotalHt);
            \$('span#marge_brute').text('');
            \$('span#marge_brute').append(marge);
        }

</script>
", "formation/childs/calcul.vente.achat.js.twig", "/home/jeremy/Bureau/project/app/templates/formation/childs/calcul.vente.achat.js.twig");
    }
}
