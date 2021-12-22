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

/* Common/dossier-js.html.twig */
class __TwigTemplate_4ca1a3e8beb180678c7c82f2a02457667cbaa607dc2a532890369c720b915145 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/dossier-js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Common/dossier-js.html.twig"));

        // line 1
        echo "<script type=\"text/javascript\">

    var dossierId = '";
        // line 3
        (((isset($context["iddossier"]) || array_key_exists("iddossier", $context))) ? (print (twig_escape_filter($this->env, (isset($context["iddossier"]) || array_key_exists("iddossier", $context) ? $context["iddossier"] : (function () { throw new RuntimeError('Variable "iddossier" does not exist.', 3, $this->source); })()), "html", null, true))) : (print (0)));
        echo "';

    \$('#tag-form-submit').on('click', function (e) {
        e.preventDefault();
        \$.ajax({
            type: \"POST\",
            url: \"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("competence.create");
        echo "\",
            data: \$('form.tagForm').serialize(),
            success: function (response) {
                // APR-194 : Mettre à jour les informations stage
                if (response.success === true) {
                    let competence = response.competence;
                    
                    var data = {
                        id: competence.competence,
                        text: competence.competence,
                    };
                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#dossier_themeformation').val(competence.themeformation);
                    \$('#dossier_themegeneral').val(competence.themegenerale);
                    \$('#dossier_nom').append(newOption).trigger('change');
                }
                
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

    var d_heure_m = '09:00';
    var f_heure_m = '13:00';
    var d_heure_am = '14:00';
    var f_heure_am = '17:00';

    \$(document).ready(function () {
        // Gerer activation et desactivation des inputs
        common.disableFormFields('#editthis');
        \$('.btn-edit-facture').attr('disabled', false);
        \$('.btn-edit-avoir').attr('disabled', false);

        \$(\"#emmargementpapier :input\").attr(\"disabled\", false);
        \$(\"#creeremmargementdoc\").click(function () {
    ";
        // line 54
        if ((isset($context["iddossier"]) || array_key_exists("iddossier", $context))) {
            // line 55
            echo "                let stagiaireid = \$(\"#inlineFormCustomSelectStag\").val();
                if (stagiaireid > 0) {
                    var url = \"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generate_doc_emmargement", ["id" => (isset($context["iddossier"]) || array_key_exists("iddossier", $context) ? $context["iddossier"] : (function () { throw new RuntimeError('Variable "iddossier" does not exist.', 57, $this->source); })()), "stagiaireid" => "stagiaire"]), "html", null, true);
            echo "\";
                    url = url.replace('stagiaire', stagiaireid);
                    var link = \$('<a />', {
                        'href': url,
                        'text': \"click\"
                    });
                    link.hide().appendTo(\"body\")[0].click().remove();
                    \$(\"#modalQualiteAdd\").modal('hide');
                }
    ";
        } else {
            // line 67
            echo "                return false;
    ";
        }
        // line 69
        echo "            });


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
        // line 141
        echo "    ";
        if (((isset($context["facturation_legal_mode"]) || array_key_exists("facturation_legal_mode", $context) ? $context["facturation_legal_mode"] : (function () { throw new RuntimeError('Variable "facturation_legal_mode" does not exist.', 141, $this->source); })()) != false)) {
            // line 142
            echo "            nodeRow.find('.readonly-numero').attr('readonly', 'readonly');
            nodeRow.find('.factdossier-montant-ht').addClass('require-value');
    ";
        }
        // line 145
        echo "
            \$collectionfacturation.append(nodeRow);
            \$collectionfacturation.data(\"index\", index + 1);
            \$(\".removefacturationelement\").bind('click', function (event) {
                \$(this).parents(\".facturation_added\").remove();
            });
            /*CREATION NUMERO FACTURE*/
            var targetInput = \$('[id^=dossier_factures_' + index + '_ref]');
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
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facture_generate_numero");
        echo "\",
                type: 'GET',
                dataType: 'JSON',
                data: {structure: valStructure},
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
            var targetInput = \$('[id^=dossier_avoirs_' + index + '_ref]');
            if (\$('div.form_avoir').length > 1) {
                var total = \$('div.form_avoir').length;
                \$('div.form_avoir').each(function (i, element) {
                    if (i === total - 2) {
                        var lastIdRef = \$('input#dossier_avoirs_' + i + '_ref').val();
                        if (lastIdRef) {
                            var lastIdRefSplit = lastIdRef.slice(-4);
                            var x = parseInt(lastIdRefSplit) + 1;
                            var last = (\"00000\" + x).slice(-4);
                            \$('input#dossier_avoirs_' + index + '_ref').attr('value', lastIdRef.slice(0, 7) + last);
                        }

                    }
                });
            }
            if (!\$('input#dossier_avoirs_0_ref').val()) {
                var valStructure = \$(\"#dossier_idStructure option:selected\").text();
                // get next id formation
                \$.ajax({
                    url: \"";
        // line 235
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("avoir_generate_numero");
        echo "\",
                    type: 'GET',
                    dataType: 'JSON',
                    data: {structure: valStructure},
                    success: function (data) {
                        targetInput.val(data.numero);
                    }
                });
            }

        });


    ";
        // line 251
        echo "        \$('#d_heure_m').wickedpicker({now: d_heure_m, twentyFour: true, title: 'Selectionner heure', closeOnClickOutside: true, minutesInterval: 5});
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


    ";
        // line 270
        echo "        var formationDate = {
            /**
             * Lancer la suppression d'une ou des dates de formation
             */
            doDeleteFormationDate: function (postData, idDossier, selectedElement) {
                console.log(idDossier);
                // Cas nouveau dossier 
                if (!idDossier || idDossier == 0) {
                    
                    // Cas suppression d'une ligne : Supprimer la ligne de date dans le tableau
                    if (selectedElement) {
                        \$(selectedElement).closest('tr').remove();
                    }

                    // Refresh et re-ordonne le calendrier
                    var dateItemsTr = \$('#formation-date-items tr');
                    var dateItemsArray = [];

                    dateItemsTr.each(function () {
                        var dateItem = {};
                        dateItem.date_debut = \$(this).data('date_debut');
                        dateItem.d_heure_m = \$(this).data('d_heure_m') ? \$(this).data('d_heure_m') : null;
                        dateItem.f_heure_m = \$(this).data('f_heure_m') ? \$(this).data('f_heure_m') : null;
                        dateItem.d_heure_am = \$(this).data('d_heure_am') ? \$(this).data('d_heure_am') : null;
                        dateItem.f_heure_am = \$(this).data('f_heure_am') ? \$(this).data('f_heure_am') : null;
                        dateItem.duree = \$(this).data('duree');
                        dateItemsArray.push(dateItem);
                    });
                    
                    reloadCalendar(idDossier, dateItemsArray, 'create');
                } else {
                    // Supprimer la date dans la base
                    \$.ajax({
                        url: '";
        // line 303
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier.date.delete");
        echo "',
                        type: 'DELETE',
                        data: postData,

                        success: function (response, status) {
                            if (response.success) {
                                // Recharger le calendrier de stage
                                reloadCalendar(idDossier);
                            } else {
                                console.log('ERROR SUPPRESSION DATE FORMATION !');
                            }
                        },
                        error: function (response, status, error) {
                        }
                    });
                }
            }
        };

        // Select/Déselect checkbox suppression des dates formations
        \$(document).on('click', '#toogle-formation-dates-check', function (e) {
            var checkBoxes = \$('.format-date-item');
            checkBoxes.prop(\"checked\", \$(this).prop(\"checked\"));
        });

    ";
        // line 329
        echo "        \$(document).on('click', '.delete-formation-date', function (e) {
            e.preventDefault();

            var bIsConfirmed = confirm(\"Confirmer la suppression ?\");

            if (bIsConfirmed) {
                var dateId = \$(this).closest('tr').attr('data-id');
                var postData = {'date_id': dateId};
                // Supprimer une ligne de date de formation
                formationDate.doDeleteFormationDate(postData, dossierId, this);
            } else {
                return false;
            }
        });

        // Suppresion en lot des lignes de dates
        \$('#remove-selected-dates').on('click', function (e) {
            e.preventDefault();

            // Selectionner les lignes à supprimer (:checked)
            var checkedDatesTr = \$('body #formation-date-items .format-date-item:checked').closest('tr');

            var selectedDatesArray = [];
            checkedDatesTr.each(function () {
                selectedDatesArray.push(\$(this).data('id'));
            });

            if (selectedDatesArray.length == 0) {
                // Pas de date à supprimer !
                return false;
            }

            var bIsConfirmed = confirm(\"Confirmer la suppression des dates ?\");

            if (bIsConfirmed) {
                var postData = {};
                postData.date_id = selectedDatesArray;
                // Supprimer une sélection de dates de formation
                formationDate.doDeleteFormationDate(postData, dossierId, checkedDatesTr);

            } else {
                return false;
            }
        });

    ";
        // line 375
        echo "
    ";
        // line 377
        echo "        function getDateSelectionner(dateD, dateF, semaines) {

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

        \$(\"#calculerEDT\").click(function (e) {
            // Vider la selection en cours ...
            \$('#divEmploiDuTemps #tableEDT').empty();

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
                        var html = '<tr class=\"text-center ligneAdd\" data-date_debut=\"' + strDebut + '\" data-d_heure_m=\"' + d_heure_m + '\" data-f_heure_m=\"' + f_heure_m + '\" data-duree=\"' + duree + '\" >';

                        html += '<td class=\"text-center\">' + strDebut + '</td>';
                        html += '<td class=\"text-center\">' + d_heure_m + '</td>';
                        html += '<td class=\"text-center\">' + f_heure_m + '</td>';
                        html += '<td class=\"text-center dayHours\">' + duree + '</td>';
                        html += '</tr>';
                        \$(\"#tableEDT\").append(html);
                    }
                    if (am) {

                        var duree = calculateDiffHour(d_heure_am, f_heure_am);
                        var html = '<tr align=\"center\" class=\"text-center ligneAdd\" data-date_debut=\"' + strDebut + '\" data-d_heure_am=\"' + d_heure_am + '\" data-f_heure_am=\"' + f_heure_am + '\" data-duree=\"' + duree + '\">';

                        html += '<td class=\"text-center\">' + strDebut + '</td>';
                        html += '<td class=\"text-center\">' + d_heure_am + '</td>';
                        html += '<td class=\"text-center\">' + f_heure_am + '</td>';
                        html += '<td class=\"text-center dayHours\">' + duree + '</td>';
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
                var objArr = [];
                \$('.ligneAdd').each(function () {
                    var firsttd = \$(this).find('td:first-child').text();
                    var lasttd = \$(this).find('td:last-child').text();
                    yearSplit = firsttd.split(\"/\");
                    yearF.push(firsttd);
                    objArr.push({key: yearSplit[2], val: lasttd});
                });
                //delete duplicate date //count Date
                var myNewArray = yearF.filter(function (elem, index, self) {
                    return index === self.indexOf(elem);
                });
                \$.each(myNewArray, function (i, val) {
                    slp = val;
                    yearSplit = slp.split(\"/\");
                    nbHN1.push(yearSplit[2]);
                });
                var newArray = compressArray(nbHN1);
                //calcul heure par année
                var temp = {};
                var obj = null;
                for (var i = 0; i < objArr.length; i++) {
                    obj = objArr[i];

                    if (!temp[obj.key]) {
                        temp[obj.key] = obj;
                    } else {
                        var var1 = parseFloat(temp[obj.key].val)
                        temp[obj.key].val = var1 + parseFloat(obj.val);
                    }
                }
                var result = [];
                for (var prop in temp)
                    result.push(temp[prop]);

                if (newArray.length) {
                    \$(\"#nbrj\").val(newArray[0].count);
                    if (newArray[1] !== undefined) {
                        \$(\"#nbrj2\").val(newArray[1].count);
                    }
                }
                if (result.length) {
                    \$(\"#nbrh\").val(result[0].val);
                    if (result[1] !== undefined) {
                        \$(\"#nbrh2\").val(result[1].val);
                    }
                }
                \$(\"#nbH\").text(sum);
                var nbjours = dayDiff(startDate, endDate);

            }
        });

        ///Ajouter dates formations dans tableau principale
        function ajouterDateFormation() {
            var dateItemsTr = \$('#tableEDT tr');
            var dateItemsArray = [];

            dateItemsTr.each(function () {
                var dateItem = {};
                dateItem.date_debut = \$(this).data('date_debut');
                dateItem.d_heure_m = \$(this).data('d_heure_m') ? \$(this).data('d_heure_m') : null;
                dateItem.f_heure_m = \$(this).data('f_heure_m') ? \$(this).data('f_heure_m') : null;
                dateItem.d_heure_am = \$(this).data('d_heure_am') ? \$(this).data('d_heure_am') : null;
                dateItem.f_heure_am = \$(this).data('f_heure_am') ? \$(this).data('f_heure_am') : null;
                dateItem.duree = \$(this).data('duree');
                dateItemsArray.push(dateItem);
            });

            // Si création nouveau dossier, ajouter aussi les dates déjà sélectionnées
            if (dossierId == 0) {
                var dateAlreadySelectedTr = \$('#formation-date-items tr');
                dateAlreadySelectedTr.each(function () {
                    var dateItem = {};
                    dateItem.date_debut = \$(this).data('date_debut');
                    dateItem.d_heure_m = \$(this).data('d_heure_m') ? \$(this).data('d_heure_m') : null;
                    dateItem.f_heure_m = \$(this).data('f_heure_m') ? \$(this).data('f_heure_m') : null;
                    dateItem.d_heure_am = \$(this).data('d_heure_am') ? \$(this).data('d_heure_am') : null;
                    dateItem.f_heure_am = \$(this).data('f_heure_am') ? \$(this).data('f_heure_am') : null;
                    dateItem.duree = \$(this).data('duree');
                    dateItemsArray.push(dateItem);
                });
            }
            // Envoyer le tableau pour être formater
            var postData = {id: dossierId, items: dateItemsArray};
            // Traiter les éléments insérés
            \$.ajax({
                url: '";
        // line 666
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier.dates.insert");
        echo "',
                type: 'POST',
                data: postData,

                success: function (response) {
                    if (response.success) {
                        // Ajouter les dates sur le calendrier
                        reloadCalendar(dossierId, response.new_items, 'create');
                        // Fermer le modal d'ajout de date
                        \$('#formationModal').modal('hide');
                    } else {
                        console.log('ERREUR AJOUT CALENDRIER');
                    }
                }
            });
        }

        \$('#refresh-calendar').on('click', function (e) {
            e.preventDefault();
            reloadCalendar(dossierId);
        });

        \$('#toogle-formation-dates-check').on('click', function (e) {

        });

        /**
         * Recharger le calendrier formation
         */
        function reloadCalendar(idDossier, aNewItems, context = 'update') {
            var postData = {};
            postData.id_dossier = idDossier;
            postData.new_items = aNewItems;
            postData.context = context;

            \$.ajax({
                url: '";
        // line 702
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dossier.date.refresh_calendar");
        echo "',
                type: 'POST',
                data: postData,

                success: function (response) {
                    \$('#formation-date-items').html(response.liste_dates_tr);

                    // Mise à jour des infos dates du stage
                    \$('#dossier_dateDebutPeriode').val(response.calendrier_infos.date_debut);
                    \$('#dossier_dateFinPeriode').val(response.calendrier_infos.date_fin);
                    \$('#nbrj').val(response.calendrier_infos.total_jours_n);
                    \$('#nbrj2').val(response.calendrier_infos.total_jours_n1);
                    \$('#nbrh').val(response.calendrier_infos.total_heures_n);
                    \$('#nbrh2').val(response.calendrier_infos.total_heures_n1);
                }
            })
        }

    ";
        // line 721
        echo "
        //btn plus ajout date formation
        \$('#btn-add-formation').click(function (btn) {

            // ALERT POUR NE PAS POUVOIR CREER DE DATE SUR LA PAGE DE CREATION 
            if (dossierId == 0) {
                swal(
                'Désolé',
                'Vous devez préalablement enregistrer le dossier avant de pouvoir ajouter les dates de formation',
                'warning'
                );
                btn.stopPropagation();
            }

            \$(\"#tableEDT\").find(\"tr.ligneAdd\").remove();
            \$(\"#calculerEDT\").prop(\"disabled\", false);

        });


        // check required field and disable input prototype commentaire => bug creation d'un commentaire par defaut
        function checkRequireField() {
            disablePrototypeInputs('commentaire_prototype');
            var emptyField = [];
            \$('.require-value').each(function () {
                let id = \$(this).attr('id');
                if (\$(this).val() == '') {
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
        // line 786
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
        // line 808
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 808, $this->source); })()), "request", [], "any", false, false, false, 808), "query", [], "any", false, false, false, 808), "get", [0 => "competence"], "method", false, false, false, 808)) {
            // line 809
            echo "            var data = {
                id: \"";
            // line 810
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 810, $this->source); })()), "request", [], "any", false, false, false, 810), "query", [], "any", false, false, false, 810), "get", [0 => "competence"], "method", false, false, false, 810), "html", null, true);
            echo "\",
                text: '";
            // line 811
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 811, $this->source); })()), "request", [], "any", false, false, false, 811), "query", [], "any", false, false, false, 811), "get", [0 => "competence"], "method", false, false, false, 811), "html", null, true);
            echo "',
            };
            var newOption = new Option(data.text, data.text, true, true);
            \$('#dossier_nom').append(newOption).trigger('change');
    ";
        }
        // line 816
        echo "            // nom preselectionné
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
        // line 836
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
        // line 856
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 856, $this->source); })()), "idClient", [], "any", false, false, false, 856), "vars", [], "any", false, false, false, 856), "id", [], "any", false, false, false, 856), "html", null, true);
        echo "\").find('option:selected').text();
                var selectedOPCA = \$(\"#";
        // line 857
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 857, $this->source); })()), "idOpca", [], "any", false, false, false, 857), "vars", [], "any", false, false, false, 857), "id", [], "any", false, false, false, 857), "html", null, true);
        echo "\").find('option:selected').text();
                var selectedIntitstage = \$(\"#";
        // line 858
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 858, $this->source); })()), "nom", [], "any", false, false, false, 858), "vars", [], "any", false, false, false, 858), "id", [], "any", false, false, false, 858), "html", null, true);
        echo "\").find('option:selected').text();
                var datedebut = \$('#";
        // line 859
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 859, $this->source); })()), "dateDebutPeriode", [], "any", false, false, false, 859), "vars", [], "any", false, false, false, 859), "id", [], "any", false, false, false, 859), "html", null, true);
        echo "').val();
                var datefin = \$('#";
        // line 860
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 860, $this->source); })()), "dateFinPeriode", [], "any", false, false, false, 860), "vars", [], "any", false, false, false, 860), "id", [], "any", false, false, false, 860), "html", null, true);
        echo "').val();
                var montantDmd = \$('#";
        // line 861
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doc_form"]) || array_key_exists("doc_form", $context) ? $context["doc_form"] : (function () { throw new RuntimeError('Variable "doc_form" does not exist.', 861, $this->source); })()), "mntDemande", [], "any", false, false, false, 861), "vars", [], "any", false, false, false, 861), "id", [], "any", false, false, false, 861), "html", null, true);
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
        }
        ;

        \$('.btn-edit-facture').click(function () {
            var facture_id = \$(this).parent('div').find(\"input.facture-id\").val();
            var showLink = '";
        // line 910
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Facture_Avoir_Voir", ["id" => "factureId"]);
        echo "';
            showLink = showLink.replace('factureId', facture_id);
            window.location.href = showLink;

        })

        ///mettre FACTURE&AVOIR en READONLY
        \$('a.update').click(function () {
            if (\$('.form_facture').length) {
                \$('.form_facture input[type=\"text\"]').attr(\"readonly\", \"readonly\");
            }
            if (\$('.form_avoir').length) {
                \$('.form_avoir input[type=\"text\"]').attr(\"readonly\", \"readonly\");
            }
            if (\$('#commentaires_collection [id^=commentaire_row-]').length) {
                \$('#commentaires_collection [id^=dossier_commentaires_]').removeAttr(\"disabled\");
            }

        });

        // Gerer les lieu de stage à afficher
        \$('#btn-vivienne').click(function () {
            \$('#adresseVivienne').val(1);
            \$('#adresseClient').val(0);
            \$('#adresseAutre').val(0);
        });

        \$('#btn-client').click(function () {
            \$('#adresseVivienne').val(0);
            \$('#adresseClient').val(1);
            \$('#adresseAutre').val(0);

        });

        \$('#btn-autre').click(function () {
            \$('#adresseVivienne').val(0);
            \$('#adresseClient').val(0);
            \$('#adresseAutre').val(1);
        });

    ";
        // line 950
        if (((isset($context["adresseVivienne"]) || array_key_exists("adresseVivienne", $context)) && (isset($context["adresseVivienne"]) || array_key_exists("adresseVivienne", $context) ? $context["adresseVivienne"] : (function () { throw new RuntimeError('Variable "adresseVivienne" does not exist.', 950, $this->source); })()))) {
            // line 951
            echo "        \$('#btn-vivienne')[0].click();
    ";
        }
        // line 953
        echo "
    ";
        // line 954
        if (((isset($context["adresseClient"]) || array_key_exists("adresseClient", $context)) && (isset($context["adresseClient"]) || array_key_exists("adresseClient", $context) ? $context["adresseClient"] : (function () { throw new RuntimeError('Variable "adresseClient" does not exist.', 954, $this->source); })()))) {
            // line 955
            echo "        \$('#btn-client')[0].click();
    ";
        }
        // line 957
        echo "
    ";
        // line 958
        if (((isset($context["adresseAutre"]) || array_key_exists("adresseAutre", $context)) && (isset($context["adresseAutre"]) || array_key_exists("adresseAutre", $context) ? $context["adresseAutre"] : (function () { throw new RuntimeError('Variable "adresseAutre" does not exist.', 958, $this->source); })()))) {
            // line 959
            echo "        \$('#btn-autre')[0].click();
    ";
        }
        // line 961
        echo "
        \$(function () {
            if (dossierId == 0) {
                \$('#btn-vivienne').trigger('click');
                \$('#nav-vivienne').removeClass('fade');
                \$('#nav-vivienne').addClass('active');
            }
        });
        
        \$(\"#dossier_idClient\").change(function(){
            if(\$(this).val() > 0){
                var urle = \"";
        // line 972
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_get_adresse", ["id" => "idcontact"]);
        echo "\";
                urle = urle.replace('idcontact', \$(this).val());
                \$.ajax({
                    url: urle,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.success){
                            \$(\".lieudossier.adrsoc :input\").first().val(data.adresse);
                            getlieudossier();
                        }
                    }
                });
            }
        });

        ";
        // line 988
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 988, $this->source); })()), "request", [], "any", false, false, false, 988), "query", [], "any", false, false, false, 988), "get", [0 => "client"], "method", false, false, false, 988) && (isset($context["client_adresse"]) || array_key_exists("client_adresse", $context)))) {
            // line 989
            echo "            \$(\".lieudossier.adrsoc :input\").first().val('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_adresse"]) || array_key_exists("client_adresse", $context) ? $context["client_adresse"] : (function () { throw new RuntimeError('Variable "client_adresse" does not exist.', 989, $this->source); })()), "adresse", [], "array", false, false, false, 989), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_adresse"]) || array_key_exists("client_adresse", $context) ? $context["client_adresse"] : (function () { throw new RuntimeError('Variable "client_adresse" does not exist.', 989, $this->source); })()), "ville", [], "array", false, false, false, 989), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["client_adresse"]) || array_key_exists("client_adresse", $context) ? $context["client_adresse"] : (function () { throw new RuntimeError('Variable "client_adresse" does not exist.', 989, $this->source); })()), "codePostal", [], "array", false, false, false, 989), "html", null, true);
            echo "');
            getlieudossier();
        ";
        }
        // line 992
        echo "
    function getlieudossier(){
        var lieu = \$(\".lieudossier.active :input\").first().val();
        
        if (lieu) {
            \$(\"#dossier_lieu\").val(lieu);
        }
    }
        
        \$(document).ready(function () {
    ";
        // line 1003
        echo "    ";
        if (((isset($context["o_client"]) || array_key_exists("o_client", $context)) && twig_get_attribute($this->env, $this->source, ($context["o_client"] ?? null), "id", [], "any", true, true, false, 1003))) {
            // line 1004
            echo "            var data = {
                id: \"";
            // line 1005
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["o_client"]) || array_key_exists("o_client", $context) ? $context["o_client"] : (function () { throw new RuntimeError('Variable "o_client" does not exist.', 1005, $this->source); })()), "id", [], "any", false, false, false, 1005), "html", null, true);
            echo "\",
                text: '";
            // line 1006
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["o_client"]) || array_key_exists("o_client", $context) ? $context["o_client"] : (function () { throw new RuntimeError('Variable "o_client" does not exist.', 1006, $this->source); })()), "nomStr", [], "any", false, false, false, 1006), "js"), "html", null, true);
            echo "',
            };
            var newOption = new Option(data.text, data.id, true, true);
            \$('#dossier_idClient').append(newOption).trigger('change');
    ";
        }
        // line 1011
        echo "
    ";
        // line 1012
        if ((twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "idOPCA", [], "any", true, true, false, 1012) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["dossier"] ?? null), "idOPCA", [], "any", false, true, false, 1012), "id", [], "any", true, true, false, 1012))) {
            // line 1013
            echo "            var dataOPCA = {
                id: \"";
            // line 1014
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 1014, $this->source); })()), "idOPCA", [], "any", false, false, false, 1014), "id", [], "any", false, false, false, 1014), "html", null, true);
            echo "\",
                text: '";
            // line 1015
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["dossier"]) || array_key_exists("dossier", $context) ? $context["dossier"] : (function () { throw new RuntimeError('Variable "dossier" does not exist.', 1015, $this->source); })()), "idOPCA", [], "any", false, false, false, 1015), "nomStr", [], "any", false, false, false, 1015), "js"), "html", null, true);
            echo "'
            };
            var newOption = new Option(dataOPCA.text, dataOPCA.id, true, true);
            \$('#dossier_idOpca').append(newOption).trigger('change');
    ";
        }
        // line 1020
        echo "        });
    
    
    ";
        // line 1024
        echo "    \$('#show-fifpl-choices').on('click', function(e) {
        \$('#fifpl-choices').removeClass('d-none');
    });
    ";
        // line 1028
        echo "</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Common/dossier-js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1201 => 1028,  1196 => 1024,  1191 => 1020,  1183 => 1015,  1179 => 1014,  1176 => 1013,  1174 => 1012,  1171 => 1011,  1163 => 1006,  1159 => 1005,  1156 => 1004,  1153 => 1003,  1141 => 992,  1130 => 989,  1128 => 988,  1109 => 972,  1096 => 961,  1092 => 959,  1090 => 958,  1087 => 957,  1083 => 955,  1081 => 954,  1078 => 953,  1074 => 951,  1072 => 950,  1029 => 910,  977 => 861,  973 => 860,  969 => 859,  965 => 858,  961 => 857,  957 => 856,  934 => 836,  912 => 816,  904 => 811,  900 => 810,  897 => 809,  895 => 808,  870 => 786,  803 => 721,  782 => 702,  743 => 666,  452 => 377,  449 => 375,  402 => 329,  374 => 303,  339 => 270,  319 => 251,  303 => 235,  239 => 174,  208 => 145,  203 => 142,  200 => 141,  127 => 69,  123 => 67,  110 => 57,  106 => 55,  104 => 54,  56 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script type=\"text/javascript\">

    var dossierId = '{{ iddossier is defined ? iddossier : 0 }}';

    \$('#tag-form-submit').on('click', function (e) {
        e.preventDefault();
        \$.ajax({
            type: \"POST\",
            url: \"{{ path('competence.create') }}\",
            data: \$('form.tagForm').serialize(),
            success: function (response) {
                // APR-194 : Mettre à jour les informations stage
                if (response.success === true) {
                    let competence = response.competence;
                    
                    var data = {
                        id: competence.competence,
                        text: competence.competence,
                    };
                    var newOption = new Option(data.text, data.id, true, true);
                    \$('#dossier_themeformation').val(competence.themeformation);
                    \$('#dossier_themegeneral').val(competence.themegenerale);
                    \$('#dossier_nom').append(newOption).trigger('change');
                }
                
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

    var d_heure_m = '09:00';
    var f_heure_m = '13:00';
    var d_heure_am = '14:00';
    var f_heure_am = '17:00';

    \$(document).ready(function () {
        // Gerer activation et desactivation des inputs
        common.disableFormFields('#editthis');
        \$('.btn-edit-facture').attr('disabled', false);
        \$('.btn-edit-avoir').attr('disabled', false);

        \$(\"#emmargementpapier :input\").attr(\"disabled\", false);
        \$(\"#creeremmargementdoc\").click(function () {
    {% if iddossier is defined %}
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
    {% else %}
                return false;
    {% endif %}
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
            var targetInput = \$('[id^=dossier_factures_' + index + '_ref]');
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
                data: {structure: valStructure},
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
            var targetInput = \$('[id^=dossier_avoirs_' + index + '_ref]');
            if (\$('div.form_avoir').length > 1) {
                var total = \$('div.form_avoir').length;
                \$('div.form_avoir').each(function (i, element) {
                    if (i === total - 2) {
                        var lastIdRef = \$('input#dossier_avoirs_' + i + '_ref').val();
                        if (lastIdRef) {
                            var lastIdRefSplit = lastIdRef.slice(-4);
                            var x = parseInt(lastIdRefSplit) + 1;
                            var last = (\"00000\" + x).slice(-4);
                            \$('input#dossier_avoirs_' + index + '_ref').attr('value', lastIdRef.slice(0, 7) + last);
                        }

                    }
                });
            }
            if (!\$('input#dossier_avoirs_0_ref').val()) {
                var valStructure = \$(\"#dossier_idStructure option:selected\").text();
                // get next id formation
                \$.ajax({
                    url: \"{{ path('avoir_generate_numero') }}\",
                    type: 'GET',
                    dataType: 'JSON',
                    data: {structure: valStructure},
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


    {#  DATES FORMATIONS -->  #}
        var formationDate = {
            /**
             * Lancer la suppression d'une ou des dates de formation
             */
            doDeleteFormationDate: function (postData, idDossier, selectedElement) {
                console.log(idDossier);
                // Cas nouveau dossier 
                if (!idDossier || idDossier == 0) {
                    
                    // Cas suppression d'une ligne : Supprimer la ligne de date dans le tableau
                    if (selectedElement) {
                        \$(selectedElement).closest('tr').remove();
                    }

                    // Refresh et re-ordonne le calendrier
                    var dateItemsTr = \$('#formation-date-items tr');
                    var dateItemsArray = [];

                    dateItemsTr.each(function () {
                        var dateItem = {};
                        dateItem.date_debut = \$(this).data('date_debut');
                        dateItem.d_heure_m = \$(this).data('d_heure_m') ? \$(this).data('d_heure_m') : null;
                        dateItem.f_heure_m = \$(this).data('f_heure_m') ? \$(this).data('f_heure_m') : null;
                        dateItem.d_heure_am = \$(this).data('d_heure_am') ? \$(this).data('d_heure_am') : null;
                        dateItem.f_heure_am = \$(this).data('f_heure_am') ? \$(this).data('f_heure_am') : null;
                        dateItem.duree = \$(this).data('duree');
                        dateItemsArray.push(dateItem);
                    });
                    
                    reloadCalendar(idDossier, dateItemsArray, 'create');
                } else {
                    // Supprimer la date dans la base
                    \$.ajax({
                        url: '{{ path('dossier.date.delete') }}',
                        type: 'DELETE',
                        data: postData,

                        success: function (response, status) {
                            if (response.success) {
                                // Recharger le calendrier de stage
                                reloadCalendar(idDossier);
                            } else {
                                console.log('ERROR SUPPRESSION DATE FORMATION !');
                            }
                        },
                        error: function (response, status, error) {
                        }
                    });
                }
            }
        };

        // Select/Déselect checkbox suppression des dates formations
        \$(document).on('click', '#toogle-formation-dates-check', function (e) {
            var checkBoxes = \$('.format-date-item');
            checkBoxes.prop(\"checked\", \$(this).prop(\"checked\"));
        });

    {# Suppression date formation #}
        \$(document).on('click', '.delete-formation-date', function (e) {
            e.preventDefault();

            var bIsConfirmed = confirm(\"Confirmer la suppression ?\");

            if (bIsConfirmed) {
                var dateId = \$(this).closest('tr').attr('data-id');
                var postData = {'date_id': dateId};
                // Supprimer une ligne de date de formation
                formationDate.doDeleteFormationDate(postData, dossierId, this);
            } else {
                return false;
            }
        });

        // Suppresion en lot des lignes de dates
        \$('#remove-selected-dates').on('click', function (e) {
            e.preventDefault();

            // Selectionner les lignes à supprimer (:checked)
            var checkedDatesTr = \$('body #formation-date-items .format-date-item:checked').closest('tr');

            var selectedDatesArray = [];
            checkedDatesTr.each(function () {
                selectedDatesArray.push(\$(this).data('id'));
            });

            if (selectedDatesArray.length == 0) {
                // Pas de date à supprimer !
                return false;
            }

            var bIsConfirmed = confirm(\"Confirmer la suppression des dates ?\");

            if (bIsConfirmed) {
                var postData = {};
                postData.date_id = selectedDatesArray;
                // Supprimer une sélection de dates de formation
                formationDate.doDeleteFormationDate(postData, dossierId, checkedDatesTr);

            } else {
                return false;
            }
        });

    {# FIN suppression date formation #}

    {# Calculer les dates de formation #}
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

        \$(\"#calculerEDT\").click(function (e) {
            // Vider la selection en cours ...
            \$('#divEmploiDuTemps #tableEDT').empty();

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
                        var html = '<tr class=\"text-center ligneAdd\" data-date_debut=\"' + strDebut + '\" data-d_heure_m=\"' + d_heure_m + '\" data-f_heure_m=\"' + f_heure_m + '\" data-duree=\"' + duree + '\" >';

                        html += '<td class=\"text-center\">' + strDebut + '</td>';
                        html += '<td class=\"text-center\">' + d_heure_m + '</td>';
                        html += '<td class=\"text-center\">' + f_heure_m + '</td>';
                        html += '<td class=\"text-center dayHours\">' + duree + '</td>';
                        html += '</tr>';
                        \$(\"#tableEDT\").append(html);
                    }
                    if (am) {

                        var duree = calculateDiffHour(d_heure_am, f_heure_am);
                        var html = '<tr align=\"center\" class=\"text-center ligneAdd\" data-date_debut=\"' + strDebut + '\" data-d_heure_am=\"' + d_heure_am + '\" data-f_heure_am=\"' + f_heure_am + '\" data-duree=\"' + duree + '\">';

                        html += '<td class=\"text-center\">' + strDebut + '</td>';
                        html += '<td class=\"text-center\">' + d_heure_am + '</td>';
                        html += '<td class=\"text-center\">' + f_heure_am + '</td>';
                        html += '<td class=\"text-center dayHours\">' + duree + '</td>';
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
                var objArr = [];
                \$('.ligneAdd').each(function () {
                    var firsttd = \$(this).find('td:first-child').text();
                    var lasttd = \$(this).find('td:last-child').text();
                    yearSplit = firsttd.split(\"/\");
                    yearF.push(firsttd);
                    objArr.push({key: yearSplit[2], val: lasttd});
                });
                //delete duplicate date //count Date
                var myNewArray = yearF.filter(function (elem, index, self) {
                    return index === self.indexOf(elem);
                });
                \$.each(myNewArray, function (i, val) {
                    slp = val;
                    yearSplit = slp.split(\"/\");
                    nbHN1.push(yearSplit[2]);
                });
                var newArray = compressArray(nbHN1);
                //calcul heure par année
                var temp = {};
                var obj = null;
                for (var i = 0; i < objArr.length; i++) {
                    obj = objArr[i];

                    if (!temp[obj.key]) {
                        temp[obj.key] = obj;
                    } else {
                        var var1 = parseFloat(temp[obj.key].val)
                        temp[obj.key].val = var1 + parseFloat(obj.val);
                    }
                }
                var result = [];
                for (var prop in temp)
                    result.push(temp[prop]);

                if (newArray.length) {
                    \$(\"#nbrj\").val(newArray[0].count);
                    if (newArray[1] !== undefined) {
                        \$(\"#nbrj2\").val(newArray[1].count);
                    }
                }
                if (result.length) {
                    \$(\"#nbrh\").val(result[0].val);
                    if (result[1] !== undefined) {
                        \$(\"#nbrh2\").val(result[1].val);
                    }
                }
                \$(\"#nbH\").text(sum);
                var nbjours = dayDiff(startDate, endDate);

            }
        });

        ///Ajouter dates formations dans tableau principale
        function ajouterDateFormation() {
            var dateItemsTr = \$('#tableEDT tr');
            var dateItemsArray = [];

            dateItemsTr.each(function () {
                var dateItem = {};
                dateItem.date_debut = \$(this).data('date_debut');
                dateItem.d_heure_m = \$(this).data('d_heure_m') ? \$(this).data('d_heure_m') : null;
                dateItem.f_heure_m = \$(this).data('f_heure_m') ? \$(this).data('f_heure_m') : null;
                dateItem.d_heure_am = \$(this).data('d_heure_am') ? \$(this).data('d_heure_am') : null;
                dateItem.f_heure_am = \$(this).data('f_heure_am') ? \$(this).data('f_heure_am') : null;
                dateItem.duree = \$(this).data('duree');
                dateItemsArray.push(dateItem);
            });

            // Si création nouveau dossier, ajouter aussi les dates déjà sélectionnées
            if (dossierId == 0) {
                var dateAlreadySelectedTr = \$('#formation-date-items tr');
                dateAlreadySelectedTr.each(function () {
                    var dateItem = {};
                    dateItem.date_debut = \$(this).data('date_debut');
                    dateItem.d_heure_m = \$(this).data('d_heure_m') ? \$(this).data('d_heure_m') : null;
                    dateItem.f_heure_m = \$(this).data('f_heure_m') ? \$(this).data('f_heure_m') : null;
                    dateItem.d_heure_am = \$(this).data('d_heure_am') ? \$(this).data('d_heure_am') : null;
                    dateItem.f_heure_am = \$(this).data('f_heure_am') ? \$(this).data('f_heure_am') : null;
                    dateItem.duree = \$(this).data('duree');
                    dateItemsArray.push(dateItem);
                });
            }
            // Envoyer le tableau pour être formater
            var postData = {id: dossierId, items: dateItemsArray};
            // Traiter les éléments insérés
            \$.ajax({
                url: '{{ path('dossier.dates.insert') }}',
                type: 'POST',
                data: postData,

                success: function (response) {
                    if (response.success) {
                        // Ajouter les dates sur le calendrier
                        reloadCalendar(dossierId, response.new_items, 'create');
                        // Fermer le modal d'ajout de date
                        \$('#formationModal').modal('hide');
                    } else {
                        console.log('ERREUR AJOUT CALENDRIER');
                    }
                }
            });
        }

        \$('#refresh-calendar').on('click', function (e) {
            e.preventDefault();
            reloadCalendar(dossierId);
        });

        \$('#toogle-formation-dates-check').on('click', function (e) {

        });

        /**
         * Recharger le calendrier formation
         */
        function reloadCalendar(idDossier, aNewItems, context = 'update') {
            var postData = {};
            postData.id_dossier = idDossier;
            postData.new_items = aNewItems;
            postData.context = context;

            \$.ajax({
                url: '{{ path('dossier.date.refresh_calendar') }}',
                type: 'POST',
                data: postData,

                success: function (response) {
                    \$('#formation-date-items').html(response.liste_dates_tr);

                    // Mise à jour des infos dates du stage
                    \$('#dossier_dateDebutPeriode').val(response.calendrier_infos.date_debut);
                    \$('#dossier_dateFinPeriode').val(response.calendrier_infos.date_fin);
                    \$('#nbrj').val(response.calendrier_infos.total_jours_n);
                    \$('#nbrj2').val(response.calendrier_infos.total_jours_n1);
                    \$('#nbrh').val(response.calendrier_infos.total_heures_n);
                    \$('#nbrh2').val(response.calendrier_infos.total_heures_n1);
                }
            })
        }

    {#  <-- DATES FORMATIONS  #}

        //btn plus ajout date formation
        \$('#btn-add-formation').click(function (btn) {

            // ALERT POUR NE PAS POUVOIR CREER DE DATE SUR LA PAGE DE CREATION 
            if (dossierId == 0) {
                swal(
                'Désolé',
                'Vous devez préalablement enregistrer le dossier avant de pouvoir ajouter les dates de formation',
                'warning'
                );
                btn.stopPropagation();
            }

            \$(\"#tableEDT\").find(\"tr.ligneAdd\").remove();
            \$(\"#calculerEDT\").prop(\"disabled\", false);

        });


        // check required field and disable input prototype commentaire => bug creation d'un commentaire par defaut
        function checkRequireField() {
            disablePrototypeInputs('commentaire_prototype');
            var emptyField = [];
            \$('.require-value').each(function () {
                let id = \$(this).attr('id');
                if (\$(this).val() == '') {
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
        }
        ;

        \$('.btn-edit-facture').click(function () {
            var facture_id = \$(this).parent('div').find(\"input.facture-id\").val();
            var showLink = '{{ path('Facture_Avoir_Voir', {'id':'factureId'}) }}';
            showLink = showLink.replace('factureId', facture_id);
            window.location.href = showLink;

        })

        ///mettre FACTURE&AVOIR en READONLY
        \$('a.update').click(function () {
            if (\$('.form_facture').length) {
                \$('.form_facture input[type=\"text\"]').attr(\"readonly\", \"readonly\");
            }
            if (\$('.form_avoir').length) {
                \$('.form_avoir input[type=\"text\"]').attr(\"readonly\", \"readonly\");
            }
            if (\$('#commentaires_collection [id^=commentaire_row-]').length) {
                \$('#commentaires_collection [id^=dossier_commentaires_]').removeAttr(\"disabled\");
            }

        });

        // Gerer les lieu de stage à afficher
        \$('#btn-vivienne').click(function () {
            \$('#adresseVivienne').val(1);
            \$('#adresseClient').val(0);
            \$('#adresseAutre').val(0);
        });

        \$('#btn-client').click(function () {
            \$('#adresseVivienne').val(0);
            \$('#adresseClient').val(1);
            \$('#adresseAutre').val(0);

        });

        \$('#btn-autre').click(function () {
            \$('#adresseVivienne').val(0);
            \$('#adresseClient').val(0);
            \$('#adresseAutre').val(1);
        });

    {% if adresseVivienne is defined and adresseVivienne %}
        \$('#btn-vivienne')[0].click();
    {% endif  %}

    {% if adresseClient is defined and adresseClient %}
        \$('#btn-client')[0].click();
    {% endif  %}

    {% if adresseAutre is defined and adresseAutre  %}
        \$('#btn-autre')[0].click();
    {% endif %}

        \$(function () {
            if (dossierId == 0) {
                \$('#btn-vivienne').trigger('click');
                \$('#nav-vivienne').removeClass('fade');
                \$('#nav-vivienne').addClass('active');
            }
        });
        
        \$(\"#dossier_idClient\").change(function(){
            if(\$(this).val() > 0){
                var urle = \"{{ path('contact_get_adresse',{id:'idcontact'}) }}\";
                urle = urle.replace('idcontact', \$(this).val());
                \$.ajax({
                    url: urle,
                    type: 'GET',
                    dataType: 'JSON',
                    success: function (data) {
                        if(data.success){
                            \$(\".lieudossier.adrsoc :input\").first().val(data.adresse);
                            getlieudossier();
                        }
                    }
                });
            }
        });

        {% if app.request.query.get('client') and client_adresse is defined %}
            \$(\".lieudossier.adrsoc :input\").first().val('{{ client_adresse['adresse'] }} {{ client_adresse['ville'] }} {{ client_adresse['codePostal'] }}');
            getlieudossier();
        {% endif %}

    function getlieudossier(){
        var lieu = \$(\".lieudossier.active :input\").first().val();
        
        if (lieu) {
            \$(\"#dossier_lieu\").val(lieu);
        }
    }
        
        \$(document).ready(function () {
    {# APR-106 : Récupération des informations client #}
    {% if o_client is defined and o_client.id is defined %}
            var data = {
                id: \"{{ o_client.id }}\",
                text: '{{ o_client.nomStr | e('js') }}',
            };
            var newOption = new Option(data.text, data.id, true, true);
            \$('#dossier_idClient').append(newOption).trigger('change');
    {% endif  %}

    {% if dossier.idOPCA is defined and dossier.idOPCA.id is defined %}
            var dataOPCA = {
                id: \"{{ dossier.idOPCA.id }}\",
                text: '{{ dossier.idOPCA.nomStr | e('js') }}'
            };
            var newOption = new Option(dataOPCA.text, dataOPCA.id, true, true);
            \$('#dossier_idOpca').append(newOption).trigger('change');
    {% endif  %}
        });
    
    
    {# APR : Gestion Edition courrier > Cas OPCO = FIFPL => Afficher 2 choix de dossier #}
    \$('#show-fifpl-choices').on('click', function(e) {
        \$('#fifpl-choices').removeClass('d-none');
    });
    {# APR : Gestion Edition courrier > Cas OPCO = FIFPL => Afficher 2 choix de dossier #}
</script>", "Common/dossier-js.html.twig", "/home/jeremy/Bureau/project/app/templates/Common/dossier-js.html.twig");
    }
}
