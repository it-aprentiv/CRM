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

/* Common/dossier-js.html_bck.twig */
class __TwigTemplate_5a1020423e344c3dd4bc61fcdcf81c9bedad7dff2042b93023a6f9ee18379e4c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/dossier-js.html_bck.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/dossier-js.html_bck.twig"));

        // line 1
        echo "<script type=\"text/javascript\">
    \$('#tag-form-submit').on('click', function (e) {
        e.preventDefault();
        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajout_competence");
        echo "\",
            data: \$('form.tagForm').serialize(),
            success: function (response) {
                \$('#popupAddStage').modal('hide');
            },
            error: function () {
                alert('Error');
            }
        });
        return false;
    });

    var \$collectionfacturation;
    var \$collectionavoir;
    var boutonremovefacturation = \"<button type='button' class='removefacturationelement close' type='button'><span aria-hidden='true'>×</span></button>\";
    var boutonremoveavoir = \"<button type='button' class='removeavoirelement close' type='button'><span aria-hidden='true'>×</span></button>\";
    
    var d_heure_m = \$(\"#d_heure_m\").val() ? \$(\"#d_heure_m\").val() : '09:00';
    var f_heure_m = \$(\"#f_heure_m\").val() ? \$(\"#f_heure_m\").val() : '13:00';
    var d_heure_am = \$(\"#d_heure_am\").val() ? \$(\"#d_heure_am\").val() : '14:00';
    var f_heure_am = \$(\"#f_heure_am\").val() ? \$(\"#f_heure_am\").val() : '17:00';

    \$(document).ready(function () {
        // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
        var opca = ";
        // line 30
        echo json_encode((isset($context["opca"]) || array_key_exists("opca", $context) ? $context["opca"] : (function () { throw new RuntimeError('Variable "opca" does not exist.', 30, $this->source); })()));
        echo ";
        for (let key in opca){
            if (opca.hasOwnProperty(key)){
                if (opca[key] != null){
                    var dataselect = {
                        id: key,
                        text: opca[key]
                    }
                    var newOption = new Option(dataselect.text, dataselect.id, true, true);
                    \$('#dossier_idOpca').append(newOption).trigger('change');
                }
            }
        }
        var client = ";
        // line 43
        echo json_encode((isset($context["client"]) || array_key_exists("client", $context) ? $context["client"] : (function () { throw new RuntimeError('Variable "client" does not exist.', 43, $this->source); })()));
        echo ";
        for (let key in client) {
            if (client.hasOwnProperty(key)) {
                if (client[key] != null) {
                    var dataselect = {
                        id: key,
                        text: client[key]
                    }
                    var newOption = new Option(dataselect.text, dataselect.id, true, true);
                    \$('#dossier_idClient').append(newOption).trigger('change');
                }
            }
        }
        ";
        // line 57
        echo "        ajouterDateFormation();
        // Gerer activation et desactivation des inputs
        common.disableFormFields('#editthis');
        \$('.btn-edit-facture').attr('disabled', false);
        \$('.btn-edit-avoir').attr('disabled', false);

        \$(\"#emmargementpapier :input\").attr(\"disabled\", false);
        \$(\"#creeremmargementdoc\").click(function () {
            let stagiaireid = \$(\"#inlineFormCustomSelectStag\").val();
            if (stagiaireid > 0) {
                var url = \"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_doc_emmargement", ["id" => (isset($context["iddossier"]) || array_key_exists("iddossier", $context) ? $context["iddossier"] : (function () { throw new RuntimeError('Variable "iddossier" does not exist.', 67, $this->source); })()), "stagiaireid" => "stagiaire"]), "html", null, true);
        echo "\";
                url = url.replace('stagiaire', stagiaireid);
                var link = \$('<a />', {
                    'href': url,
                    'text': \"click\"
                });
                link.hide().appendTo(\"body\")[0].click().remove();
                \$(\"#modalQualiteAdd\").modal('hide');
            }
        });
        \$('#editthis').click(function (e) {
            e.preventDefault();
            common.enableFormFields();
            disablePrototypeInputs('commentaire_prototype');
            \$('.avoir-id:input').attr('disabled', 'true');
            \$('.facture-id:input').attr('disabled', 'true');
            \$('#save').show();
            \$('#bntCancel').show();
        });
        \$('#bntCancel').click(function (e) {
            e.preventDefault();
            history.go(0);
        });
        // Fin

        \$collectionfacturation = \$(\"#ajout_facture\");
        \$collectionavoir = \$(\"#ajout_avoir\");
        \$collectionfacturation.data(\"index\", \$collectionfacturation.find('.form_facture').length);
        \$collectionavoir.data(\"index\", \$collectionavoir.find('.form_avoir').length);

    });
    \$('.datetimepick').datepicker(
        {
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            language: 'fr'
        }
    );
    ////calcule montant commission
    \$(\"#dossier_tauxCom, #dossier_mntAccorde\").on('change keyup', function (e) {

        var montant = document.getElementById(\"dossier_mntAccorde\").value;
        var pourcent = document.getElementById(\"dossier_tauxCom\").value;
//            format montant
        montant = montant.replace(',', '.');
        montant = Number(montant.replace(/[^0-9.-]+/g, \"\"));

        var result = (montant * pourcent) / 100;
//            Format result
        const formatted = result.toLocaleString('fr-FR', {maximumFractionDigits: 2});
        \$('#dossier_mntMarge').val(formatted);
    });



    ///FACTURATION&AVOIR
    function ajfactonglet() {
        addnewFacturation();
        \$('.datepickerFacture').datepicker(
            {
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'endDate': '+0d',
                language: 'fr'
            }
        );
    }
    function addnewFacturation()
    {
        var prototype = \$collectionfacturation.data(\"prototype\");
        let index = \$collectionfacturation.data(\"index\");
        let newform = prototype;
        newform = newform.replace(/__name__/g, index);
        let row = '<div class=\" col-sm-12 row facturation_added\">';
        row = row + boutonremovefacturation + newform;
        row = row + '</div>';
        var nodeRow = \$(row);
        
        ";
        // line 146
        echo "        ";
        if (((isset($context["facturation_legal_mode"]) || array_key_exists("facturation_legal_mode", $context) ? $context["facturation_legal_mode"] : (function () { throw new RuntimeError('Variable "facturation_legal_mode" does not exist.', 146, $this->source); })()) != false)) {
            // line 147
            echo "            nodeRow.find('.readonly-numero').attr('readonly', 'readonly');
            nodeRow.find('.factdossier-montant-ht').addClass('require-value');
        ";
        }
        // line 150
        echo "        
        \$collectionfacturation.append(nodeRow);
        \$collectionfacturation.data(\"index\", index + 1);
        \$(\".removefacturationelement\").bind('click', function (event) {
            \$(this).parents(\".facturation_added\").remove();
        });
        /*CREATION NUMERO FACTURE*/
        var targetInput = \$('[id^=dossier_factures_'+index+'_ref]');
        targetInput.addClass('require-value');
        // if (\$('div.facturation_added').length > 1) {
        //     var total = \$('div.facturation_added').length;
        //     \$('div.facturation_added').each(function (i, element) {
        //         if (i === total-1 ) {
        //             var lastIdRef = \$('input#dossier_factures_' + i + '_ref').val();
        //             console.log(lastIdRef);
        //             if(lastIdRef){
        //                 var lastIdRefSplit = lastIdRef.slice(-4);//lastIdRef.split('-');
        //                 var x= parseInt(lastIdRefSplit)+1;//parseInt(lastIdRefSplit[2])+1;
        //                 var last = (\"0000\" + x).slice(-4);//x.padStart(6, \"000000\");
        //                 \$('input#dossier_factures_' + index + '_ref').attr('value',lastIdRef.slice(0,7) + last);
        //             }
        //
        //         }
        //     });
        // }

        var valStructure = \$(\"#dossier_idStructure option:selected\").text();
        // get next id formation
        \$.ajax({
            url: \"";
        // line 179
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_generate_numero");
        echo "\",
            type: 'GET',
            dataType: 'JSON',
            data:{structure: valStructure},
            success: function (data) {
                if (!data.error) {
                    var numberRefLength = 4; // \"0000\".length
                    var reference = getNumberReference(\$collectionfacturation, data.numero, numberRefLength);
                    targetInput.val(reference);
                } else {
                    alert(data.message);
                }
            },
            error: function () {
                alert('Erreur de la génération de numéro !');
            }
        });

    }
    \$(\"#factavoir\").click(function (e) {
        var prototype = \$collectionavoir.data(\"prototype\");
        let index = \$collectionavoir.data(\"index\");
        let newform = prototype;
        newform = newform.replace(/__name__/g, index);
        let row = '<div class=\" col-sm-12 row form_avoir\">';
        row = row + boutonremoveavoir + newform;
        row = row + '</div>';
        \$collectionavoir.append(row);
        \$collectionavoir.data(\"index\", index + 1);
        \$(\".removeavoirelement\").bind('click', function (event) {
            \$(this).parents(\".form_avoir\").remove();
        });
        \$('.datepickerFacture').datepicker(
            {
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'endDate': '+0d',
                language: 'fr'
            }
        );
        /*CREATION NUMERO AVOIR*/
        var targetInput = \$('[id^=dossier_avoirs_'+index+'_ref]');
        if (\$('div.form_avoir').length > 1) {
            var total = \$('div.form_avoir').length;
            \$('div.form_avoir').each(function (i, element) {
                if (i === total-2 ) {
                    var lastIdRef = \$('input#dossier_avoirs_'+i+'_ref').val();
                    if(lastIdRef){
                        var lastIdRefSplit = lastIdRef.slice(-4);
                        var x= parseInt(lastIdRefSplit)+1;
                        var last = (\"00000\" + x).slice(-4);
                        \$('input#dossier_avoirs_' + index + '_ref').attr('value',lastIdRef.slice(0,7) + last);
                    }

                }
            });
        }
        if (!\$('input#dossier_avoirs_0_ref').val()){
            var valStructure = \$(\"#dossier_idStructure option:selected\").text();
            // get next id formation
            \$.ajax({
                url: \"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avoir_generate_numero");
        echo "\",
                type: 'GET',
                dataType: 'JSON',
                data:{structure: valStructure},
                success: function (data) {
                    targetInput.val(data.numero);
                }
            });
        }

    });


    ";
        // line 256
        echo "    \$('#d_heure_m').wickedpicker({now: d_heure_m, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    \$('#f_heure_m').wickedpicker({now: f_heure_m, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    \$('#d_heure_am').wickedpicker({now: d_heure_am, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    \$('#f_heure_am').wickedpicker({now: f_heure_am, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    //date formation
    \$('.js-datepicker').datepicker({dateFormat: 'dd-mm-yy', language: 'fr'}).val();

    function cocherMatin(el) {
        \$(\"#d_heure_m\").prop(\"disabled\", !el.checked);
        \$(\"#f_heure_m\").prop(\"disabled\", !el.checked);
    }

    function cocherAM(el) {
        \$(\"#d_heure_am\").prop(\"disabled\", !el.checked);
        \$(\"#f_heure_am\").prop(\"disabled\", !el.checked);
    }

    ////bouton calculer heure
    \$(\"#calculerEDT\").click(function (e) {
        calculateEDT();
    });

    function calculateEDT() {
        \$('tr.ligneAdd').each(function () {
            \$(this).remove();
        });
        //date debut / date fin OK
        var startDate = \$('#debutEDT').val();
        var endDate = \$('#finEDT').val();

        //debut heure / fin heure (Matin / AM) KO
        var d_heure_m = \$(\"#d_heure_m\").val();
        var f_heure_m = \$(\"#f_heure_m\").val();
        var d_heure_am = \$(\"#d_heure_am\").val();
        var f_heure_am = \$(\"#f_heure_am\").val();
        // Heure
        \$(\"#form_d_heure_m\").val(d_heure_m);
        \$(\"#form_f_heure_m\").val(f_heure_m);
        \$(\"#form_d_heure_am\").val(d_heure_am);
        \$(\"#form_f_heure_am\").val(f_heure_am);

        //Matin / AM            KO
        var matin = false, am = false;
        if (\$(\"#h_matin\").is(\":checked\")) {
            matin = true;
        }
        if (\$(\"#h_am\").is(\":checked\")) {
            am = true;
        }
        // Matin / AM
        \$(\"#form_matin\").val(matin);
        \$(\"#form_am\").val(am);

        // Jour selectionné (1,2, ...) KO
        ///modal formation get date checked
        var selectione = [];
        var jourSelectionne = '';
        \$(\".jours:checked\").each(function () {
            selectione.push(parseInt(\$(this).val()));
        });
        //jours selectionné
        \$(\"#form_jours_semaine\").val(selectione.join());

        var edt = getDateSelectionner(startDate, endDate, selectione);
        var totalH = \$(\"nbH\").text();
        
        if (totalH.length == 0) {

            for (var i in edt) {
                // Shows only the explicitly set index of \"5\", and ignores 0-4
                var daty = new Date(edt[i]);
                var day = daty.getDate().toString();
                if (day.length == 1)
                    day = 0 + day;
                var year = daty.getFullYear();
                var month = (daty.getMonth() + 1).toString();
                if (month.length == 1)
                    month = 0 + month;

                var strDebut = day + '/' + month + '/' + year;
                
                if (matin) {
                    var duree = calculateDiffHour(d_heure_m, f_heure_m);
                    var html = '<tr align=\"center\" class=\"ligneAdd\">';

                    html += '<td style=\"width:100px;text-align:center;\">' + strDebut + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + d_heure_m + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + f_heure_m + '</td>';
                    html += '<td style=\"width:60px;text-align:center;\" class=\"dayHours\">' + duree + '</td>';
                    html += '</tr>';
                    \$(\"#tableEDT\").append(html);
                }
                if (am) {

                    var duree = calculateDiffHour(d_heure_am, f_heure_am);
                    var html = '<tr align=\"center\" class=\"ligneAdd\">';

                    html += '<td style=\"width:100px;text-align:center;\">' + strDebut + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + d_heure_am + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + f_heure_am + '</td>';
                    html += '<td style=\"width:60px;text-align:center;\" class=\"dayHours\">' + duree + '</td>';
                    html += '</tr>';
                    \$(\"#tableEDT\").append(html);
                }
            }
            var sum = 0;
            \$(\".dayHours\").each(function () {
                var value = \$(this).text();
                if (!isNaN(value) && value.length != 0) {
                    sum += parseFloat(value);
                }
            });

            var nbHN1 = [];
            var yearF = [];
            var objArr =[];
            \$('.ligneAdd').each(function(){
                var firsttd = \$(this).find('td:first-child').text();
                var lasttd = \$(this).find('td:last-child').text();
                yearSplit =firsttd.split(\"/\");
                yearF.push(firsttd);
                objArr.push({key : yearSplit[2], val:lasttd});
            });
            //delete duplicate date //count Date
            var myNewArray = yearF.filter(function(elem, index, self) {
                return index === self.indexOf(elem);
            });
            \$.each( myNewArray, function( i, val ){
                slp = val;
                yearSplit =slp.split(\"/\");
                nbHN1.push(yearSplit[2]);
            });
            var newArray = compressArray(nbHN1);
            //calcul heure par année
            var temp = {};
            var obj = null;
            for(var i=0; i < objArr.length; i++) {
                obj=objArr[i];

                if(!temp[obj.key]) {
                    temp[obj.key] = obj;
                } else {
                    var var1 = parseFloat(temp[obj.key].val)
                    temp[obj.key].val = var1 + parseFloat(obj.val);
                }
            }
            var result = [];
            for (var prop in temp)
                result.push(temp[prop]);

            if(newArray.length){
                \$(\"#nbrj\").val(newArray[0].count);
                if(newArray[1] !== undefined) {
                    \$(\"#nbrj2\").val(newArray[1].count);
                }
            }
            if(result.length){
                \$(\"#nbrh\").val(result[0].val);
                if(result[1] !== undefined) {
                    \$(\"#nbrh2\").val(result[1].val);
                }
            }
            \$(\"#nbH\").text(sum);
            var nbjours = dayDiff(startDate, endDate);

        }
    }

    function dayDiff(startDate, endDate) {
        var dateDepartStr = \$.trim(startDate),
            dateRetourStr = \$.trim(endDate),
            dateDepart = null,
            dateRetour = null;

        if (dateDepartStr.length >= 8 && dateRetourStr.length >= 8) {

            dateDepart = new Date(
                dateDepartStr.slice(6), // yyyy
                parseInt(dateDepartStr.slice(3, 5), 10) - 1, // mm - 1
                parseInt(dateDepartStr.slice(0, 2), 10)  // dd
            );

            dateRetour = new Date(
                dateRetourStr.slice(6), // yyyy
                parseInt(dateRetourStr.slice(3, 5), 10) - 1, // mm - 1
                parseInt(dateRetourStr.slice(0, 2), 10)  // dd
            );

            // différence entre deux dates en millisecondes, on veut un nombre de jours
            var nbJours = (dateRetour - dateDepart) / (1000 * 60 * 60 * 24) + 1;
            return nbJours;
        }
    }
    function calculateDiffHour(debutH, finH) {
        var time1 = debutH.split(':'), time2 = finH.split(':');
        var hours1 = parseInt(time1[0], 10),
            hours2 = parseInt(time2[0], 10),
            mins1 = parseInt(time1[1], 10),
            mins2 = parseInt(time2[1], 10);
        var hours = hours2 - hours1, mins = 0;

        // get hours
        if (hours < 0)
            hours = 24 + hours;

        // get minutes
        if (mins2 >= mins1) {
            mins = mins2 - mins1;
        } else {
            mins = (mins2 + 60) - mins1;
            hours--;
        }

        // convert to fraction of 60
        mins = mins / 60;

        hours += mins;
        hours = hours.toFixed(2);
        return hours;
    }
    function getDateSelectionner(dateD, dateF, semaines) {

        var tabDebut = dateD.split(\"/\");
        var tabFin = dateF.split(\"/\");

        var start_week_date = new Date(tabDebut[2], tabDebut[1] - 1, tabDebut[0] - 1); // no queries exist before this

        var todays_date = new Date(tabFin[2], tabFin[1] - 1, tabFin[0]);

        var strDebut = start_week_date.getDate() + '/' + (start_week_date.getMonth() + 1) + '/' + start_week_date.getFullYear();
        var strFin = todays_date.getDate() + '/' + (todays_date.getMonth() + 1) + '/' + todays_date.getFullYear();
        var week_commencing_dates = new Array();

        while (start_week_date < todays_date) {

            var next_date = start_week_date.setDate(start_week_date.getDate() + 1);
            var next_days_date = new Date(next_date);
            day_index = next_days_date.getDay();

            if (semaines.includes(day_index)) {
                week_commencing_dates.push(next_days_date);
            }
            start_week_date = new Date(next_date);
        }
        return week_commencing_dates;
    }
    ///add date formation dans tableau principale
    function ajouterDateFormation() {
        //\$(\"#datesdossier\").find(\"tr:gt(0)\").remove();
        var popupDateFormation = \$(\"#tableEDT\").html();
        \$('#datesdossier').append(popupDateFormation);
        //\$('#datesdossier tr:first').fadeOut(2000);
        var debutdate = \$('#debutEDT').val();
        var findate = \$('#finEDT').val();
        var nbH = \$(\"#nbH\").text();
        console.log(nbH);
        var nbJ = dayDiff(debutdate, findate);
        \$('#dossier_dureeHeures').val(nbH);
        \$('#dossier_dureeJours').val(nbJ);
        \$('#dossier_dateDebutPeriode').val(debutdate);
        \$('#dossier_dateFinPeriode').val(findate);

        var formationModal = \$('#formationModal');
        if (formationModal.is(':visible')) {
            formationModal.modal('hide');
        }
        //
        // \$('.modal-backdrop.fade').removeClass('show');
    }
    //btn plus ajout date formation
    \$('#btn-add-formation').click(function () {
        \$(\"#tableEDT\").find(\"tr.ligneAdd\").remove();
        \$(\"#calculerEDT\").prop(\"disabled\", false);

    });


    // check required field
    function checkRequireField() {
        var emptyField = [];
        \$('.require-value').each(function () {
            let id = \$(this).attr('id');
            if(\$(this).val() == ''){
                emptyField.push(id);
            }
        });
        if (emptyField.length > 0) {
            event.preventDefault();
            let idField = emptyField.shift();
            let labelText = \$('label[for=\"' + idField + '\"]').text();
            alert('Le champ \"' + labelText + '\" ne doit pas être vide !');
        }
    }

    //btn fermer dans popup ajout date formation
    // \$('.popup-date-formation').click(function(){
    //     \$('#formationModal').removeClass('show');
    //     \$('.modal-backdrop.fade').removeClass('show');
    // });
    \$(\".datetimepick\").each(function () {
        \$(this).datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            language: 'fr'
        });
    })

    // gestion activation et desactivation des inputs prototypesInputs
    function disablePrototypeInputs(idPrototype) {
        var inputs = \$('#' + idPrototype + ' :input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].disabled = true;
        }
    }

    \$(function () {
        \$('#dossier_nom').select2({
            placeholder: \"-- Intitulé stage --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 577
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.competence.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                processResults: function (data) {
                    var dataResults = data.results !== undefined ? data.results : [];
                    return {
                        results: \$.map(dataResults, function (item) {
                            return {
                                text: item.text,
                                id: item.id
                            };
                        })
                    };
                }
            }
        });

        ";
        // line 599
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 599, $this->source); })()), "request", [], "any", false, false, false, 599), "query", [], "any", false, false, false, 599), "get", [0 => "competence"], "method", false, false, false, 599)) {
            // line 600
            echo "        var data = {
            id: \"";
            // line 601
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 601, $this->source); })()), "request", [], "any", false, false, false, 601), "query", [], "any", false, false, false, 601), "get", [0 => "competence"], "method", false, false, false, 601), "html", null, true);
            echo "\",
            text: '";
            // line 602
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 602, $this->source); })()), "request", [], "any", false, false, false, 602), "query", [], "any", false, false, false, 602), "get", [0 => "competence"], "method", false, false, false, 602), "html", null, true);
            echo "',
        };
        var newOption = new Option(data.text, data.text, true, true);
        \$('#dossier_nom').append(newOption).trigger('change');
        ";
        }
        // line 607
        echo "        // nom preselectionné
        // Fetch the preselected item, and add to the control
        setNomValue();
        function setNomValue() {
            var nomSelect = \$('#dossier_nom');
            var nomText = \$('#dossier-nom-text').text();
            data = {'text': nomText, 'id': nomText};
            var option = new Option(nomText, nomText, true, true);
            nomSelect.append(option).trigger('change');
            // manually trigger the `select2:select` event
            nomSelect.trigger({
                type: 'select2:select',
                params: {
                    data: ''
                }
            });
        }
        // FIN preselection
        \$('#dossier_nom').on(\"change\", function (e) {
            var nomValue = \$(this).val();
            var url = '";
        // line 627
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.theme.asynch-search");
        echo "';
            \$.ajax({
                type: 'GET',
                url: url,
                data: {
                    search: nomValue,
                },
            }).then(function (data) {
                var themeData = data['results'][0];
                // create the option and append to Select2
                \$('#dossier_themeformation').val(themeData.themeformation);
                \$('#dossier_themegeneral').val(themeData.themegenerale);
            });
        });



    });
    \$(document).ready(function () {
        \$('#pagedegarde').on('click', function () {
            var selectedClient = \$(\"#";
        // line 647
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 647, $this->source); })()), "idClient", [], "any", false, false, false, 647), "vars", [], "any", false, false, false, 647), "id", [], "any", false, false, false, 647), "html", null, true);
        echo "\").find('option:selected').text();
            var selectedOPCA = \$(\"#";
        // line 648
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 648, $this->source); })()), "idOpca", [], "any", false, false, false, 648), "vars", [], "any", false, false, false, 648), "id", [], "any", false, false, false, 648), "html", null, true);
        echo "\").find('option:selected').text();
            var selectedIntitstage = \$(\"#";
        // line 649
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 649, $this->source); })()), "nom", [], "any", false, false, false, 649), "vars", [], "any", false, false, false, 649), "id", [], "any", false, false, false, 649), "html", null, true);
        echo "\").find('option:selected').text();
            var datedebut = \$('#";
        // line 650
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 650, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 650), "vars", [], "any", false, false, false, 650), "id", [], "any", false, false, false, 650), "html", null, true);
        echo "').val();
            var datefin = \$('#";
        // line 651
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 651, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 651), "vars", [], "any", false, false, false, 651), "id", [], "any", false, false, false, 651), "html", null, true);
        echo "').val();
            var montantDmd = \$('#";
        // line 652
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 652, $this->source); })()), "mntDemande", [], "any", false, false, false, 652), "vars", [], "any", false, false, false, 652), "id", [], "any", false, false, false, 652), "html", null, true);
        echo "').val();
            var formPageGarde = \$('#pagedegarde-form');
            \$('#pgarde-client').val(selectedClient);
            \$('#pgarde-opca').val(selectedOPCA);
            \$('#pgarde-intitstage').val(selectedIntitstage);
            \$('#pgarde-datedebut').val(datedebut);
            \$('#pgarde-datefin').val(datefin);
            \$('#pgarde-montant').val(montantDmd);
            formPageGarde.find('input').removeAttr('disabled');

            formPageGarde.submit();
        });
    });


    function compressArray(original) {

        var compressed = [];
        // make a copy of the input array
        var copy = original.slice(0);

        // first loop goes over every element
        for (var i = 0; i < original.length; i++) {

            var myCount = 0;
            // loop over every element in the copy and see if it's the same
            for (var w = 0; w < copy.length; w++) {
                if (original[i] == copy[w]) {
                    // increase amount of times duplicate is found
                    myCount++;
                    // sets item to undefined
                    delete copy[w];
                }
            }

            if (myCount > 0) {
                var a = new Object();
                a.value = original[i];
                a.count = myCount;
                compressed.push(a);
            }
        }

        return compressed;
    };

    \$('.btn-edit-facture').click(function() {
        var facture_id = \$(this).parent('div').find(\"input.facture-id\").val();
        var showLink = '";
        // line 700
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_Avoir_Voir", ["id" => "factureId"]);
        echo "';
        showLink = showLink.replace('factureId', facture_id);
        window.location.href = showLink;

    })

    ///mettre FACTURE&AVOIR en READONLY
    \$('a.update').click(function() {
        if(\$('.form_facture').length){
            \$('.form_facture input[type=\"text\"]').attr(\"readonly\", \"readonly\");
        }
        if(\$('.form_avoir').length){
            \$('.form_avoir input[type=\"text\"]').attr(\"readonly\", \"readonly\");
        }
        if(\$('#commentaires_collection [id^=commentaire_row-]').length){
            \$('#commentaires_collection [id^=dossier_commentaires_]').removeAttr(\"disabled\");
        }

    });

    // Gerer les lieu de stage à afficher
    \$('#btn-vivienne').click(function(){
        \$('#adresseVivienne').val(1);
        \$('#adresseClient').val(0);
        \$('#adresseAutre').val(0);

    });

    \$('#btn-client').click(function(){
        \$('#adresseVivienne').val(0);
        \$('#adresseClient').val(1);
        \$('#adresseAutre').val(0);

    });

    \$('#btn-autre').click(function(){
        \$('#adresseVivienne').val(0);
        \$('#adresseClient').val(0);
        \$('#adresseAutre').val(1);

    });

    ";
        // line 742
        if ((isset($context["adresseVivienne"]) || array_key_exists("adresseVivienne", $context) ? $context["adresseVivienne"] : (function () { throw new RuntimeError('Variable "adresseVivienne" does not exist.', 742, $this->source); })())) {
            // line 743
            echo "    \$('#btn-vivienne')[0].click();
    ";
        }
        // line 745
        echo "
    ";
        // line 746
        if ((isset($context["adresseClient"]) || array_key_exists("adresseClient", $context) ? $context["adresseClient"] : (function () { throw new RuntimeError('Variable "adresseClient" does not exist.', 746, $this->source); })())) {
            // line 747
            echo "    \$('#btn-client')[0].click();

    ";
        }
        // line 750
        echo "
    ";
        // line 751
        if ((isset($context["adresseAutre"]) || array_key_exists("adresseAutre", $context) ? $context["adresseAutre"] : (function () { throw new RuntimeError('Variable "adresseAutre" does not exist.', 751, $this->source); })())) {
            // line 752
            echo "    \$('#btn-autre')[0].click();
    ";
        }
        // line 754
        echo "
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/dossier-js.html_bck.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  872 => 754,  868 => 752,  866 => 751,  863 => 750,  858 => 747,  856 => 746,  853 => 745,  849 => 743,  847 => 742,  802 => 700,  751 => 652,  747 => 651,  743 => 650,  739 => 649,  735 => 648,  731 => 647,  708 => 627,  686 => 607,  678 => 602,  674 => 601,  671 => 600,  669 => 599,  644 => 577,  321 => 256,  305 => 240,  241 => 179,  210 => 150,  205 => 147,  202 => 146,  121 => 67,  109 => 57,  93 => 43,  77 => 30,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">
    \$('#tag-form-submit').on('click', function (e) {
        e.preventDefault();
        \$.ajax({
            type: \"POST\",
            url: \"{{ path('ajout_competence') }}\",
            data: \$('form.tagForm').serialize(),
            success: function (response) {
                \$('#popupAddStage').modal('hide');
            },
            error: function () {
                alert('Error');
            }
        });
        return false;
    });

    var \$collectionfacturation;
    var \$collectionavoir;
    var boutonremovefacturation = \"<button type='button' class='removefacturationelement close' type='button'><span aria-hidden='true'>×</span></button>\";
    var boutonremoveavoir = \"<button type='button' class='removeavoirelement close' type='button'><span aria-hidden='true'>×</span></button>\";
    
    var d_heure_m = \$(\"#d_heure_m\").val() ? \$(\"#d_heure_m\").val() : '09:00';
    var f_heure_m = \$(\"#f_heure_m\").val() ? \$(\"#f_heure_m\").val() : '13:00';
    var d_heure_am = \$(\"#d_heure_am\").val() ? \$(\"#d_heure_am\").val() : '14:00';
    var f_heure_am = \$(\"#f_heure_am\").val() ? \$(\"#f_heure_am\").val() : '17:00';

    \$(document).ready(function () {
        // Ajout valeur par défaut des societés liées selon leur valeur pourle contact
        var opca = {{ opca|json_encode|raw }};
        for (let key in opca){
            if (opca.hasOwnProperty(key)){
                if (opca[key] != null){
                    var dataselect = {
                        id: key,
                        text: opca[key]
                    }
                    var newOption = new Option(dataselect.text, dataselect.id, true, true);
                    \$('#dossier_idOpca').append(newOption).trigger('change');
                }
            }
        }
        var client = {{ client|json_encode|raw }};
        for (let key in client) {
            if (client.hasOwnProperty(key)) {
                if (client[key] != null) {
                    var dataselect = {
                        id: key,
                        text: client[key]
                    }
                    var newOption = new Option(dataselect.text, dataselect.id, true, true);
                    \$('#dossier_idClient').append(newOption).trigger('change');
                }
            }
        }
        {#calculateEDT();#}
        ajouterDateFormation();
        // Gerer activation et desactivation des inputs
        common.disableFormFields('#editthis');
        \$('.btn-edit-facture').attr('disabled', false);
        \$('.btn-edit-avoir').attr('disabled', false);

        \$(\"#emmargementpapier :input\").attr(\"disabled\", false);
        \$(\"#creeremmargementdoc\").click(function () {
            let stagiaireid = \$(\"#inlineFormCustomSelectStag\").val();
            if (stagiaireid > 0) {
                var url = \"{{ path('generate_doc_emmargement', {id:iddossier,stagiaireid:'stagiaire'}) }}\";
                url = url.replace('stagiaire', stagiaireid);
                var link = \$('<a />', {
                    'href': url,
                    'text': \"click\"
                });
                link.hide().appendTo(\"body\")[0].click().remove();
                \$(\"#modalQualiteAdd\").modal('hide');
            }
        });
        \$('#editthis').click(function (e) {
            e.preventDefault();
            common.enableFormFields();
            disablePrototypeInputs('commentaire_prototype');
            \$('.avoir-id:input').attr('disabled', 'true');
            \$('.facture-id:input').attr('disabled', 'true');
            \$('#save').show();
            \$('#bntCancel').show();
        });
        \$('#bntCancel').click(function (e) {
            e.preventDefault();
            history.go(0);
        });
        // Fin

        \$collectionfacturation = \$(\"#ajout_facture\");
        \$collectionavoir = \$(\"#ajout_avoir\");
        \$collectionfacturation.data(\"index\", \$collectionfacturation.find('.form_facture').length);
        \$collectionavoir.data(\"index\", \$collectionavoir.find('.form_avoir').length);

    });
    \$('.datetimepick').datepicker(
        {
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            language: 'fr'
        }
    );
    ////calcule montant commission
    \$(\"#dossier_tauxCom, #dossier_mntAccorde\").on('change keyup', function (e) {

        var montant = document.getElementById(\"dossier_mntAccorde\").value;
        var pourcent = document.getElementById(\"dossier_tauxCom\").value;
//            format montant
        montant = montant.replace(',', '.');
        montant = Number(montant.replace(/[^0-9.-]+/g, \"\"));

        var result = (montant * pourcent) / 100;
//            Format result
        const formatted = result.toLocaleString('fr-FR', {maximumFractionDigits: 2});
        \$('#dossier_mntMarge').val(formatted);
    });



    ///FACTURATION&AVOIR
    function ajfactonglet() {
        addnewFacturation();
        \$('.datepickerFacture').datepicker(
            {
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'endDate': '+0d',
                language: 'fr'
            }
        );
    }
    function addnewFacturation()
    {
        var prototype = \$collectionfacturation.data(\"prototype\");
        let index = \$collectionfacturation.data(\"index\");
        let newform = prototype;
        newform = newform.replace(/__name__/g, index);
        let row = '<div class=\" col-sm-12 row facturation_added\">';
        row = row + boutonremovefacturation + newform;
        row = row + '</div>';
        var nodeRow = \$(row);
        
        {# APR-141 : Permettre la saisie du numéro facture #}
        {% if facturation_legal_mode != false %}
            nodeRow.find('.readonly-numero').attr('readonly', 'readonly');
            nodeRow.find('.factdossier-montant-ht').addClass('require-value');
        {% endif %}
        
        \$collectionfacturation.append(nodeRow);
        \$collectionfacturation.data(\"index\", index + 1);
        \$(\".removefacturationelement\").bind('click', function (event) {
            \$(this).parents(\".facturation_added\").remove();
        });
        /*CREATION NUMERO FACTURE*/
        var targetInput = \$('[id^=dossier_factures_'+index+'_ref]');
        targetInput.addClass('require-value');
        // if (\$('div.facturation_added').length > 1) {
        //     var total = \$('div.facturation_added').length;
        //     \$('div.facturation_added').each(function (i, element) {
        //         if (i === total-1 ) {
        //             var lastIdRef = \$('input#dossier_factures_' + i + '_ref').val();
        //             console.log(lastIdRef);
        //             if(lastIdRef){
        //                 var lastIdRefSplit = lastIdRef.slice(-4);//lastIdRef.split('-');
        //                 var x= parseInt(lastIdRefSplit)+1;//parseInt(lastIdRefSplit[2])+1;
        //                 var last = (\"0000\" + x).slice(-4);//x.padStart(6, \"000000\");
        //                 \$('input#dossier_factures_' + index + '_ref').attr('value',lastIdRef.slice(0,7) + last);
        //             }
        //
        //         }
        //     });
        // }

        var valStructure = \$(\"#dossier_idStructure option:selected\").text();
        // get next id formation
        \$.ajax({
            url: \"{{ path('facture_generate_numero') }}\",
            type: 'GET',
            dataType: 'JSON',
            data:{structure: valStructure},
            success: function (data) {
                if (!data.error) {
                    var numberRefLength = 4; // \"0000\".length
                    var reference = getNumberReference(\$collectionfacturation, data.numero, numberRefLength);
                    targetInput.val(reference);
                } else {
                    alert(data.message);
                }
            },
            error: function () {
                alert('Erreur de la génération de numéro !');
            }
        });

    }
    \$(\"#factavoir\").click(function (e) {
        var prototype = \$collectionavoir.data(\"prototype\");
        let index = \$collectionavoir.data(\"index\");
        let newform = prototype;
        newform = newform.replace(/__name__/g, index);
        let row = '<div class=\" col-sm-12 row form_avoir\">';
        row = row + boutonremoveavoir + newform;
        row = row + '</div>';
        \$collectionavoir.append(row);
        \$collectionavoir.data(\"index\", index + 1);
        \$(\".removeavoirelement\").bind('click', function (event) {
            \$(this).parents(\".form_avoir\").remove();
        });
        \$('.datepickerFacture').datepicker(
            {
                'format': 'dd/mm/yyyy',
                'autoclose': true,
                'endDate': '+0d',
                language: 'fr'
            }
        );
        /*CREATION NUMERO AVOIR*/
        var targetInput = \$('[id^=dossier_avoirs_'+index+'_ref]');
        if (\$('div.form_avoir').length > 1) {
            var total = \$('div.form_avoir').length;
            \$('div.form_avoir').each(function (i, element) {
                if (i === total-2 ) {
                    var lastIdRef = \$('input#dossier_avoirs_'+i+'_ref').val();
                    if(lastIdRef){
                        var lastIdRefSplit = lastIdRef.slice(-4);
                        var x= parseInt(lastIdRefSplit)+1;
                        var last = (\"00000\" + x).slice(-4);
                        \$('input#dossier_avoirs_' + index + '_ref').attr('value',lastIdRef.slice(0,7) + last);
                    }

                }
            });
        }
        if (!\$('input#dossier_avoirs_0_ref').val()){
            var valStructure = \$(\"#dossier_idStructure option:selected\").text();
            // get next id formation
            \$.ajax({
                url: \"{{ path('avoir_generate_numero') }}\",
                type: 'GET',
                dataType: 'JSON',
                data:{structure: valStructure},
                success: function (data) {
                    targetInput.val(data.numero);
                }
            });
        }

    });


    {#\$('#d_heure_m').wickedpicker({
        now: d_heure_m, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true
    });#}
    \$('#d_heure_m').wickedpicker({now: d_heure_m, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    \$('#f_heure_m').wickedpicker({now: f_heure_m, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    \$('#d_heure_am').wickedpicker({now: d_heure_am, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    \$('#f_heure_am').wickedpicker({now: f_heure_am, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
    //date formation
    \$('.js-datepicker').datepicker({dateFormat: 'dd-mm-yy', language: 'fr'}).val();

    function cocherMatin(el) {
        \$(\"#d_heure_m\").prop(\"disabled\", !el.checked);
        \$(\"#f_heure_m\").prop(\"disabled\", !el.checked);
    }

    function cocherAM(el) {
        \$(\"#d_heure_am\").prop(\"disabled\", !el.checked);
        \$(\"#f_heure_am\").prop(\"disabled\", !el.checked);
    }

    ////bouton calculer heure
    \$(\"#calculerEDT\").click(function (e) {
        calculateEDT();
    });

    function calculateEDT() {
        \$('tr.ligneAdd').each(function () {
            \$(this).remove();
        });
        //date debut / date fin OK
        var startDate = \$('#debutEDT').val();
        var endDate = \$('#finEDT').val();

        //debut heure / fin heure (Matin / AM) KO
        var d_heure_m = \$(\"#d_heure_m\").val();
        var f_heure_m = \$(\"#f_heure_m\").val();
        var d_heure_am = \$(\"#d_heure_am\").val();
        var f_heure_am = \$(\"#f_heure_am\").val();
        // Heure
        \$(\"#form_d_heure_m\").val(d_heure_m);
        \$(\"#form_f_heure_m\").val(f_heure_m);
        \$(\"#form_d_heure_am\").val(d_heure_am);
        \$(\"#form_f_heure_am\").val(f_heure_am);

        //Matin / AM            KO
        var matin = false, am = false;
        if (\$(\"#h_matin\").is(\":checked\")) {
            matin = true;
        }
        if (\$(\"#h_am\").is(\":checked\")) {
            am = true;
        }
        // Matin / AM
        \$(\"#form_matin\").val(matin);
        \$(\"#form_am\").val(am);

        // Jour selectionné (1,2, ...) KO
        ///modal formation get date checked
        var selectione = [];
        var jourSelectionne = '';
        \$(\".jours:checked\").each(function () {
            selectione.push(parseInt(\$(this).val()));
        });
        //jours selectionné
        \$(\"#form_jours_semaine\").val(selectione.join());

        var edt = getDateSelectionner(startDate, endDate, selectione);
        var totalH = \$(\"nbH\").text();
        
        if (totalH.length == 0) {

            for (var i in edt) {
                // Shows only the explicitly set index of \"5\", and ignores 0-4
                var daty = new Date(edt[i]);
                var day = daty.getDate().toString();
                if (day.length == 1)
                    day = 0 + day;
                var year = daty.getFullYear();
                var month = (daty.getMonth() + 1).toString();
                if (month.length == 1)
                    month = 0 + month;

                var strDebut = day + '/' + month + '/' + year;
                
                if (matin) {
                    var duree = calculateDiffHour(d_heure_m, f_heure_m);
                    var html = '<tr align=\"center\" class=\"ligneAdd\">';

                    html += '<td style=\"width:100px;text-align:center;\">' + strDebut + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + d_heure_m + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + f_heure_m + '</td>';
                    html += '<td style=\"width:60px;text-align:center;\" class=\"dayHours\">' + duree + '</td>';
                    html += '</tr>';
                    \$(\"#tableEDT\").append(html);
                }
                if (am) {

                    var duree = calculateDiffHour(d_heure_am, f_heure_am);
                    var html = '<tr align=\"center\" class=\"ligneAdd\">';

                    html += '<td style=\"width:100px;text-align:center;\">' + strDebut + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + d_heure_am + '</td>';
                    html += '<td style=\"width:100px;text-align:center;\">' + f_heure_am + '</td>';
                    html += '<td style=\"width:60px;text-align:center;\" class=\"dayHours\">' + duree + '</td>';
                    html += '</tr>';
                    \$(\"#tableEDT\").append(html);
                }
            }
            var sum = 0;
            \$(\".dayHours\").each(function () {
                var value = \$(this).text();
                if (!isNaN(value) && value.length != 0) {
                    sum += parseFloat(value);
                }
            });

            var nbHN1 = [];
            var yearF = [];
            var objArr =[];
            \$('.ligneAdd').each(function(){
                var firsttd = \$(this).find('td:first-child').text();
                var lasttd = \$(this).find('td:last-child').text();
                yearSplit =firsttd.split(\"/\");
                yearF.push(firsttd);
                objArr.push({key : yearSplit[2], val:lasttd});
            });
            //delete duplicate date //count Date
            var myNewArray = yearF.filter(function(elem, index, self) {
                return index === self.indexOf(elem);
            });
            \$.each( myNewArray, function( i, val ){
                slp = val;
                yearSplit =slp.split(\"/\");
                nbHN1.push(yearSplit[2]);
            });
            var newArray = compressArray(nbHN1);
            //calcul heure par année
            var temp = {};
            var obj = null;
            for(var i=0; i < objArr.length; i++) {
                obj=objArr[i];

                if(!temp[obj.key]) {
                    temp[obj.key] = obj;
                } else {
                    var var1 = parseFloat(temp[obj.key].val)
                    temp[obj.key].val = var1 + parseFloat(obj.val);
                }
            }
            var result = [];
            for (var prop in temp)
                result.push(temp[prop]);

            if(newArray.length){
                \$(\"#nbrj\").val(newArray[0].count);
                if(newArray[1] !== undefined) {
                    \$(\"#nbrj2\").val(newArray[1].count);
                }
            }
            if(result.length){
                \$(\"#nbrh\").val(result[0].val);
                if(result[1] !== undefined) {
                    \$(\"#nbrh2\").val(result[1].val);
                }
            }
            \$(\"#nbH\").text(sum);
            var nbjours = dayDiff(startDate, endDate);

        }
    }

    function dayDiff(startDate, endDate) {
        var dateDepartStr = \$.trim(startDate),
            dateRetourStr = \$.trim(endDate),
            dateDepart = null,
            dateRetour = null;

        if (dateDepartStr.length >= 8 && dateRetourStr.length >= 8) {

            dateDepart = new Date(
                dateDepartStr.slice(6), // yyyy
                parseInt(dateDepartStr.slice(3, 5), 10) - 1, // mm - 1
                parseInt(dateDepartStr.slice(0, 2), 10)  // dd
            );

            dateRetour = new Date(
                dateRetourStr.slice(6), // yyyy
                parseInt(dateRetourStr.slice(3, 5), 10) - 1, // mm - 1
                parseInt(dateRetourStr.slice(0, 2), 10)  // dd
            );

            // différence entre deux dates en millisecondes, on veut un nombre de jours
            var nbJours = (dateRetour - dateDepart) / (1000 * 60 * 60 * 24) + 1;
            return nbJours;
        }
    }
    function calculateDiffHour(debutH, finH) {
        var time1 = debutH.split(':'), time2 = finH.split(':');
        var hours1 = parseInt(time1[0], 10),
            hours2 = parseInt(time2[0], 10),
            mins1 = parseInt(time1[1], 10),
            mins2 = parseInt(time2[1], 10);
        var hours = hours2 - hours1, mins = 0;

        // get hours
        if (hours < 0)
            hours = 24 + hours;

        // get minutes
        if (mins2 >= mins1) {
            mins = mins2 - mins1;
        } else {
            mins = (mins2 + 60) - mins1;
            hours--;
        }

        // convert to fraction of 60
        mins = mins / 60;

        hours += mins;
        hours = hours.toFixed(2);
        return hours;
    }
    function getDateSelectionner(dateD, dateF, semaines) {

        var tabDebut = dateD.split(\"/\");
        var tabFin = dateF.split(\"/\");

        var start_week_date = new Date(tabDebut[2], tabDebut[1] - 1, tabDebut[0] - 1); // no queries exist before this

        var todays_date = new Date(tabFin[2], tabFin[1] - 1, tabFin[0]);

        var strDebut = start_week_date.getDate() + '/' + (start_week_date.getMonth() + 1) + '/' + start_week_date.getFullYear();
        var strFin = todays_date.getDate() + '/' + (todays_date.getMonth() + 1) + '/' + todays_date.getFullYear();
        var week_commencing_dates = new Array();

        while (start_week_date < todays_date) {

            var next_date = start_week_date.setDate(start_week_date.getDate() + 1);
            var next_days_date = new Date(next_date);
            day_index = next_days_date.getDay();

            if (semaines.includes(day_index)) {
                week_commencing_dates.push(next_days_date);
            }
            start_week_date = new Date(next_date);
        }
        return week_commencing_dates;
    }
    ///add date formation dans tableau principale
    function ajouterDateFormation() {
        //\$(\"#datesdossier\").find(\"tr:gt(0)\").remove();
        var popupDateFormation = \$(\"#tableEDT\").html();
        \$('#datesdossier').append(popupDateFormation);
        //\$('#datesdossier tr:first').fadeOut(2000);
        var debutdate = \$('#debutEDT').val();
        var findate = \$('#finEDT').val();
        var nbH = \$(\"#nbH\").text();
        console.log(nbH);
        var nbJ = dayDiff(debutdate, findate);
        \$('#dossier_dureeHeures').val(nbH);
        \$('#dossier_dureeJours').val(nbJ);
        \$('#dossier_dateDebutPeriode').val(debutdate);
        \$('#dossier_dateFinPeriode').val(findate);

        var formationModal = \$('#formationModal');
        if (formationModal.is(':visible')) {
            formationModal.modal('hide');
        }
        //
        // \$('.modal-backdrop.fade').removeClass('show');
    }
    //btn plus ajout date formation
    \$('#btn-add-formation').click(function () {
        \$(\"#tableEDT\").find(\"tr.ligneAdd\").remove();
        \$(\"#calculerEDT\").prop(\"disabled\", false);

    });


    // check required field
    function checkRequireField() {
        var emptyField = [];
        \$('.require-value').each(function () {
            let id = \$(this).attr('id');
            if(\$(this).val() == ''){
                emptyField.push(id);
            }
        });
        if (emptyField.length > 0) {
            event.preventDefault();
            let idField = emptyField.shift();
            let labelText = \$('label[for=\"' + idField + '\"]').text();
            alert('Le champ \"' + labelText + '\" ne doit pas être vide !');
        }
    }

    //btn fermer dans popup ajout date formation
    // \$('.popup-date-formation').click(function(){
    //     \$('#formationModal').removeClass('show');
    //     \$('.modal-backdrop.fade').removeClass('show');
    // });
    \$(\".datetimepick\").each(function () {
        \$(this).datepicker({
            'format': 'dd/mm/yyyy',
            'autoclose': true,
            language: 'fr'
        });
    })

    // gestion activation et desactivation des inputs prototypesInputs
    function disablePrototypeInputs(idPrototype) {
        var inputs = \$('#' + idPrototype + ' :input');
        for (var i = 0; i < inputs.length; i++) {
            inputs[i].disabled = true;
        }
    }

    \$(function () {
        \$('#dossier_nom').select2({
            placeholder: \"-- Intitulé stage --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.dossier.competence.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                },
                processResults: function (data) {
                    var dataResults = data.results !== undefined ? data.results : [];
                    return {
                        results: \$.map(dataResults, function (item) {
                            return {
                                text: item.text,
                                id: item.id
                            };
                        })
                    };
                }
            }
        });

        {% if app.request.query.get('competence') %}
        var data = {
            id: \"{{ app.request.query.get('competence') }}\",
            text: '{{ app.request.query.get('competence') }}',
        };
        var newOption = new Option(data.text, data.text, true, true);
        \$('#dossier_nom').append(newOption).trigger('change');
        {% endif  %}
        // nom preselectionné
        // Fetch the preselected item, and add to the control
        setNomValue();
        function setNomValue() {
            var nomSelect = \$('#dossier_nom');
            var nomText = \$('#dossier-nom-text').text();
            data = {'text': nomText, 'id': nomText};
            var option = new Option(nomText, nomText, true, true);
            nomSelect.append(option).trigger('change');
            // manually trigger the `select2:select` event
            nomSelect.trigger({
                type: 'select2:select',
                params: {
                    data: ''
                }
            });
        }
        // FIN preselection
        \$('#dossier_nom').on(\"change\", function (e) {
            var nomValue = \$(this).val();
            var url = '{{ path('crm.dossier.theme.asynch-search') }}';
            \$.ajax({
                type: 'GET',
                url: url,
                data: {
                    search: nomValue,
                },
            }).then(function (data) {
                var themeData = data['results'][0];
                // create the option and append to Select2
                \$('#dossier_themeformation').val(themeData.themeformation);
                \$('#dossier_themegeneral').val(themeData.themegenerale);
            });
        });



    });
    \$(document).ready(function () {
        \$('#pagedegarde').on('click', function () {
            var selectedClient = \$(\"#{{ doc_form.idClient.vars.id }}\").find('option:selected').text();
            var selectedOPCA = \$(\"#{{ doc_form.idOpca.vars.id }}\").find('option:selected').text();
            var selectedIntitstage = \$(\"#{{ doc_form.nom.vars.id }}\").find('option:selected').text();
            var datedebut = \$('#{{ doc_form.dateDebutPeriode.vars.id }}').val();
            var datefin = \$('#{{ doc_form.dateFinPeriode.vars.id }}').val();
            var montantDmd = \$('#{{ doc_form.mntDemande.vars.id }}').val();
            var formPageGarde = \$('#pagedegarde-form');
            \$('#pgarde-client').val(selectedClient);
            \$('#pgarde-opca').val(selectedOPCA);
            \$('#pgarde-intitstage').val(selectedIntitstage);
            \$('#pgarde-datedebut').val(datedebut);
            \$('#pgarde-datefin').val(datefin);
            \$('#pgarde-montant').val(montantDmd);
            formPageGarde.find('input').removeAttr('disabled');

            formPageGarde.submit();
        });
    });


    function compressArray(original) {

        var compressed = [];
        // make a copy of the input array
        var copy = original.slice(0);

        // first loop goes over every element
        for (var i = 0; i < original.length; i++) {

            var myCount = 0;
            // loop over every element in the copy and see if it's the same
            for (var w = 0; w < copy.length; w++) {
                if (original[i] == copy[w]) {
                    // increase amount of times duplicate is found
                    myCount++;
                    // sets item to undefined
                    delete copy[w];
                }
            }

            if (myCount > 0) {
                var a = new Object();
                a.value = original[i];
                a.count = myCount;
                compressed.push(a);
            }
        }

        return compressed;
    };

    \$('.btn-edit-facture').click(function() {
        var facture_id = \$(this).parent('div').find(\"input.facture-id\").val();
        var showLink = '{{ path('Facture_Avoir_Voir', {'id':'factureId'}) }}';
        showLink = showLink.replace('factureId', facture_id);
        window.location.href = showLink;

    })

    ///mettre FACTURE&AVOIR en READONLY
    \$('a.update').click(function() {
        if(\$('.form_facture').length){
            \$('.form_facture input[type=\"text\"]').attr(\"readonly\", \"readonly\");
        }
        if(\$('.form_avoir').length){
            \$('.form_avoir input[type=\"text\"]').attr(\"readonly\", \"readonly\");
        }
        if(\$('#commentaires_collection [id^=commentaire_row-]').length){
            \$('#commentaires_collection [id^=dossier_commentaires_]').removeAttr(\"disabled\");
        }

    });

    // Gerer les lieu de stage à afficher
    \$('#btn-vivienne').click(function(){
        \$('#adresseVivienne').val(1);
        \$('#adresseClient').val(0);
        \$('#adresseAutre').val(0);

    });

    \$('#btn-client').click(function(){
        \$('#adresseVivienne').val(0);
        \$('#adresseClient').val(1);
        \$('#adresseAutre').val(0);

    });

    \$('#btn-autre').click(function(){
        \$('#adresseVivienne').val(0);
        \$('#adresseClient').val(0);
        \$('#adresseAutre').val(1);

    });

    {% if adresseVivienne %}
    \$('#btn-vivienne')[0].click();
    {% endif  %}

    {% if adresseClient %}
    \$('#btn-client')[0].click();

    {% endif  %}

    {% if adresseAutre  %}
    \$('#btn-autre')[0].click();
    {% endif  %}

</script>", "Common/dossier-js.html_bck.twig", "/home/jeremy/Bureau/project/app/templates/Common/dossier-js.html_bck.twig");
    }
}
