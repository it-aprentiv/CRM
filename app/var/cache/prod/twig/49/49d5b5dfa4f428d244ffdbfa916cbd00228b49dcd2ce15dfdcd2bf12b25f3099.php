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

/* contact/Parts/contact.js.html.twig */
class __TwigTemplate_0b982cf474973cef0391278af34c20e304229d5eab7f60d39ffbd8851181583b extends \Twig\Template
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
        // line 1
        echo "<script language=\"javascript\">
    var \$collectionadresse;
    var \$collectioncomment;
    var \$collectioncontact;
    var boutonremovecontact = \"<button type='button' class='removecontactelement close' type='button'><span aria-hidden='true'>×</span></button>\";
    var boutonremoveadresse = \"<button type='button' class='removeaddresseelement close' type='button'><span aria-hidden='true'>×</span></button>\";
    var boutonremovecomment = \"<button type='button' class='removecommentelement close'><span aria-hidden='true'>×</span></button>\";

    \$(\".js-datepicker,.js-datepicker-note\").each(function(){
        \$(this).datepicker({
            'format':'dd/mm/yyyy',
            'autoclose': true,
            'language': 'fr'
        });
    });
    function listencheckboxradio()
    {
        \$(\".checkbox-c\").unbind(\"change\").bind(\"change\",function(){
            if(\$(this).is(':checked')){
                \$(\".checkbox-c\").not(\$(this)).prop('checked', false);
            }
        });
    }
    // Fonction pour l'ajout du formulaire d'ajout adresse dans la page client/prospect
    function addnewadresseform(){
        var prototype = \$collectionadresse.data(\"prototype\");
        let index = \$collectionadresse.data(\"index\");
        let newform = prototype;
        newform = newform.replace(/__name__/g, index);
        let row = '<div class=\"row col-sm-12 pr-0 form_adresse\">';
        row = row + boutonremoveadresse + newform;
        row = row + '</div>';
        \$collectionadresse.append(row);
        \$collectionadresse.data(\"index\",index+1);
        \$(\".removeaddresseelement\").bind('click',function(event){
            \$(this).parents(\".form_adresse\").remove();
        });
        listencheckboxradio();
        \$('#contact_adresses_'+index+'_idVille').select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.ville.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
    }
    // Fonction pour l'ajout du formulaire d'ajout de contact dans la page client/prospect
    function addnewcontact()
    {
        var prototype = \$collectioncontact.data(\"prototype\");
        let index = \$collectioncontact.data(\"index\");
        let newform = prototype;
        newform = newform.replace(/__name__/g, index+1);
        let row = '<div class=\"row contact_added\">';
        row = row + boutonremovecontact + newform;
        row = row + '</div>';
        \$collectioncontact.append(row);
        \$collectioncontact.data(\"index\",index+1);
        \$('.telephone-format').on('keypress keyup blur', function (event) {
            common.allowDecimalCharOnly(event);
            common.telephoneFormat(this);
        });
        \$(\".removecontactelement\").bind('click',function(event){
            \$(this).parents(\".contact_added\").remove();
        });
    }
    // Fonction pour l'ajout du formulaire d'ajout de commentaire dans la page client/prospect
    function addnewcommentaire()
    {
        var prototype = \$collectioncomment.data(\"prototype\");
        let newcomment = prototype;
        newcomment = newcomment.replace(/__name__/g, \$collectioncomment.find(\"tr\").length+1);
        let tr = \"<tr><th colspan='6'><div class='row'>\";
        tr = tr + \"<div class=\\\"comment_contains\\\">\";
        tr = tr + boutonremovecomment +newcomment;
        tr = tr + \"</div></div></th></tr>\";
        \$collectioncomment.append(tr);
        \$collectioncomment.find(\"tr:last-child\").find(\".js-datepicker-note\").each(function(){
            \$(this).datepicker({
                'format':'dd/mm/yyyy',
                'autoclose': true,
                'language': 'fr'
            });
        });
        \$(\".removecommentelement\").bind('click',function(event){
            \$(this).parents(\".comment_contains\").parents(\"tr\").remove();
        });
    }

    \$(document).ready(function(){
        // Getting the form prototype adresse set in the attibute of form adresse content
        \$collectionadresse = \$(\"#contact_adresse\");
        \$collectioncomment = \$(\"#commentaires_collection\");
        \$collectioncontact = \$(\"#contactadded\");
        \$collectionadresse.data(\"index\", \$collectionadresse.find('.form_adresse').length);
        \$collectioncontact.data(\"index\", \$collectioncontact.find('.contact_added').length);
        // Le select ville dans le modal opca et celui de adresse de 0 dans la page a le même id au départ, il faut changer
        // celui du modal pour affecter une nouvel id pour activer le select2
        \$(\"#modalopcaadd\").find(\"#contact_adresses_0_idVille\").removeAttr(\"id\").attr(\"id\",\"select_ville_opca_modal\");

        // Lancer la fonction pour le comportement du checkbox principal comme bouton radio non checkbox
        listencheckboxradio();
        //
        \$(\"#ajoutadresse\").click(function(event){
            addnewadresseform();
        });
        //
        \$(\"#ajcom\").click(function(){
            addnewcommentaire();
        });
        //
        \$(\"#adcontact\").click(function(){
            addnewcontact();
        });

        \$(\"#opcamodaladd\").submit(function(e){
            e.preventDefault();
            var url = \"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("opca.modal.add");
        echo "\";
            var data = \$(this).serialize();
            \$.ajax({
                type:'POST',
                data:data,
                url:url,
                success: function(response){
                    if(response.code_success){
                        \$(\".contact_opca_added\").append(new Option(response.oopca,response.lastinsertion_id,true,true))
                    }
                }
            });
            \$(\"#modalopcaadd\").modal('hide');
        });
        
        
        \$(\"#addqualiteform\").submit(function(e){
            e.preventDefault();
            var url = \"";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("qualite_add");
        echo "\";
            var data = \$(this).serialize();
            \$.ajax({
                type:'POST',
                data:data,
                url:url,
                success: function(response){
                    if(response.code_success){
                        \$(\".qualite_added_new\").each(function(){
                            var qualite = response.oqualite;
                            \$(this).append(new Option(qualite.nomQualite, qualite.id,true,true));
                        });
                    }
                }
            });
            \$(\"#modalQualiteAdd\").modal('hide');
        });
        
        ";
        // line 163
        echo "        \$(\"#add_ville_form\").on('submit', function(e) {
            e.preventDefault();
            var url = \"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ville_add");
        echo "\";
            var data = \$(this).serialize();
            \$.ajax({
                type:'POST',
                data:data,
                url:url,
                
                success: function(response){
                    if(response.code_success){
                        var ville = response.ville;
                        \$('#contact_adresses_0_idVille').append(new Option(ville.nomVille, ville.nomVille,true,true)).trigger('change');
                    }
                }
            });
            
            \$(\"#modal-ville-add\").modal('hide');
        });
        ";
        // line 183
        echo "        
        //triggered when modal is about to be shown
        \$('#modalActiviteAdd').on('show.bs.modal', function(e) {
            //get data-id attribute of the clicked element
            var forselect = \$(e.relatedTarget).data('forselect');
            \$(e.currentTarget).find('input[id=\"secteur_activite_forselect\"]').val(forselect);
        });
        \$(\"#addsecteuractiviteform\").submit(function(e){
            e.preventDefault();
            var url = \"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("secteur_activite_add");
        echo "\";
            var data = \$(this).serialize();
            var forselect = (\$(this).find('input[id=\"secteur_activite_forselect\"]').val());
            \$.ajax({
                type:'POST',
                data:data,
                url:url,
                success:function(response){
                    if(response.code_success){
                        var secteur = response.oactivite;
                        \$(\".activite_secteur.\"+forselect).append(new Option(secteur.secteur, secteur.id,true,true));
                    }
                }
            });
            \$(\"#modalActiviteAdd\").modal('hide');
        });

        // Quand on ferme une boite de dialog, a sa fermeture on reset le formulaire dans la boite de dialog
        \$('.modal').on('hidden.bs.modal', function(){
            \$(this).find('form')[0].reset();
        });

        // Ajout des options pour les select societées liées
        \$('.sosieteliee').each(function(){
            \$(this).select2({
                placeholder: \"-- Société --\",
                minimumInputLength: 3,
                allowClear: true,
                ajax: {
                    url: '";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.contact.societe.asynch-search");
        echo "',
                    data: function (params) {
                        var query = {
                            search: params.term
                        };
                        // Query parameters will be ?search=[term]&type=public
                        return query;
                    },
                    success: function (response) {
                        \$.map((response) => function (item) {
                            var newoption = new Option(item.id,item.name,true,true);
                            \$(this).append(newoption).trigger(\"change\");
                        });
                    }
                }
            });
            \$(this).change(function(){
                \$(this).find('option[value=\"'+\$(this).val()+'\"]').attr(\"selected\",true);
            });
        });
        \$(\"#contact_adresses_0_idVille\").select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.ville.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        \$(\"#contact_adresses_0_idVille\").on('change',function(){
        });
        \$(\"#select_ville_opca_modal\").select2({
            placeholder: \"-- ville --\",
            minimumInputLength: 3,
            allowClear: true,
            dropdownParent: \$(\"#modalopcaadd\"),
            ajax: {
                url: '";
        // line 264
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.opca.ville.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        // AUTO COMPLETE CHAMP OPCA
        \$('#contact_opca').select2({
            placeholder: \"-- OPCO --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.opca.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        ";
        // line 292
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 292), "query", [], "any", false, false, false, 292), "get", [0 => "opca"], "method", false, false, false, 292)) {
            // line 293
            echo "        var data = {
            id: \"";
            // line 294
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 294), "query", [], "any", false, false, false, 294), "get", [0 => "opca"], "method", false, false, false, 294), "html", null, true);
            echo "\",
            text: '";
            // line 295
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 295), "query", [], "any", false, false, false, 295), "get", [0 => "opca"], "method", false, false, false, 295), "js"), "html", null, true);
            echo "'
        };

        var newOption = new Option(data.text, data.id, true, true);
        \$('#contact_opca').append(newOption).trigger('change');

        ";
        }
        // line 302
        echo "
        \$('#contact_idOpcaTns').select2({
            placeholder: \"-- OPCO TNS --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 308
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.dossier.opca.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                        byid: true
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });

        ";
        // line 320
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 320), "query", [], "any", false, false, false, 320), "get", [0 => "opca"], "method", false, false, false, 320)) {
            // line 321
            echo "

        var data2 = {
            id: \"";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 324), "query", [], "any", false, false, false, 324), "get", [0 => "opca"], "method", false, false, false, 324), "html", null, true);
            echo "\",
            text: '";
            // line 325
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 325), "query", [], "any", false, false, false, 325), "get", [0 => "opca"], "method", false, false, false, 325), "js"), "html", null, true);
            echo "'
        };

        var newOption2 = new Option(data2.text, data2.text, true, true);
        \$('#contact_idOpcaTns').append(newOption2).trigger('change');

        ";
        }
        // line 332
        echo "        
        ";
        // line 334
        echo "        \$('#contact_idSecteur').select2({
            placeholder: \"-- Secteur --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 339
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.secteur_activite.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        \$('#opca_idSecteur').select2({
            placeholder: \"-- Secteur --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 354
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.secteur_activite.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        \$('#contact_activiteTns').select2({
            placeholder: \"-- Secteur --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '";
        // line 369
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crm.secteur_activite.asynch-search");
        echo "',
                data: function (params) {
                    var query = {
                        search: params.term,
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        ";
        // line 380
        echo "    
        ";
        // line 382
        echo "            \$('#contact_id_type').on('change', function(e) {
                let contactTypeId = \$(this).val();
                let \$adresseLine0 = \$('#contact_adresses_0_adresse');
                let \$codePostalLine0 = \$('#contact_adresses_0_codePostal');
                let \$adresseTypeLine0 = \$('#contact_adresses_0_type_adresse');
                
                if (contactTypeId == 2) {
                    \$adresseLine0.prop('required', true);
                    \$adresseLine0.prev('label').addClass('required');
                    
                    \$codePostalLine0.prop('required', true);
                    \$codePostalLine0.prev('label').addClass('required');
                    
                    \$adresseTypeLine0.prop('required', true);
                    \$adresseTypeLine0.prev('label').addClass('required');
                } else {
                    \$adresseLine0.prop('required', false);
                    \$adresseLine0.prev('label').removeClass('required');
                    
                    \$codePostalLine0.prop('required', false);
                    \$codePostalLine0.prev('label').removeClass('required');
                    
                    \$adresseTypeLine0.prop('required', false);
                    \$adresseTypeLine0.prev('label').removeClass('required');
                }
                
            })
        ";
        // line 410
        echo "            
        ";
        // line 412
        echo "            //\$(function() {
           //     \$('#contact_interlocuteur').val('non');
           // });
        ";
        // line 416
        echo "    });
</script>";
    }

    public function getTemplateName()
    {
        return "contact/Parts/contact.js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 416,  516 => 412,  513 => 410,  484 => 382,  481 => 380,  468 => 369,  450 => 354,  432 => 339,  425 => 334,  422 => 332,  412 => 325,  408 => 324,  403 => 321,  401 => 320,  386 => 308,  378 => 302,  368 => 295,  364 => 294,  361 => 293,  359 => 292,  344 => 280,  325 => 264,  304 => 246,  276 => 221,  244 => 192,  233 => 183,  213 => 165,  209 => 163,  188 => 144,  167 => 126,  82 => 44,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/Parts/contact.js.html.twig", "/home/jeremy/Bureau/project/app/templates/contact/Parts/contact.js.html.twig");
    }
}
