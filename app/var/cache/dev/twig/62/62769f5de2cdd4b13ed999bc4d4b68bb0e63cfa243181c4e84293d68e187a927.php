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
class __TwigTemplate_5b3f40b2059ff1a1d455b771c01a8469fd18c67e609c75e44d87bb708d97208f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/Parts/contact.js.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/Parts/contact.js.html.twig"));

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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 292, $this->source); })()), "request", [], "any", false, false, false, 292), "query", [], "any", false, false, false, 292), "get", [0 => "opca"], "method", false, false, false, 292)) {
            // line 293
            echo "        var data = {
            id: \"";
            // line 294
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 294, $this->source); })()), "request", [], "any", false, false, false, 294), "query", [], "any", false, false, false, 294), "get", [0 => "opca"], "method", false, false, false, 294), "html", null, true);
            echo "\",
            text: '";
            // line 295
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 295, $this->source); })()), "request", [], "any", false, false, false, 295), "query", [], "any", false, false, false, 295), "get", [0 => "opca"], "method", false, false, false, 295), "js"), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 320, $this->source); })()), "request", [], "any", false, false, false, 320), "query", [], "any", false, false, false, 320), "get", [0 => "opca"], "method", false, false, false, 320)) {
            // line 321
            echo "

        var data2 = {
            id: \"";
            // line 324
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 324, $this->source); })()), "request", [], "any", false, false, false, 324), "query", [], "any", false, false, false, 324), "get", [0 => "opca"], "method", false, false, false, 324), "html", null, true);
            echo "\",
            text: '";
            // line 325
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 325, $this->source); })()), "request", [], "any", false, false, false, 325), "query", [], "any", false, false, false, 325), "get", [0 => "opca"], "method", false, false, false, 325), "js"), "html", null, true);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  527 => 416,  522 => 412,  519 => 410,  490 => 382,  487 => 380,  474 => 369,  456 => 354,  438 => 339,  431 => 334,  428 => 332,  418 => 325,  414 => 324,  409 => 321,  407 => 320,  392 => 308,  384 => 302,  374 => 295,  370 => 294,  367 => 293,  365 => 292,  350 => 280,  331 => 264,  310 => 246,  282 => 221,  250 => 192,  239 => 183,  219 => 165,  215 => 163,  194 => 144,  173 => 126,  88 => 44,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script language=\"javascript\">
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
                url: '{{ path('crm.opca.ville.asynch-search') }}',
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
            var url = \"{{ path('opca.modal.add') }}\";
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
            var url = \"{{ path('qualite_add') }}\";
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
        
        {# Debut : Modal > Ville > Enregistrer #}
        \$(\"#add_ville_form\").on('submit', function(e) {
            e.preventDefault();
            var url = \"{{ path('ville_add') }}\";
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
        {# Fin : Modal > Ville > Enregistrer #}
        
        //triggered when modal is about to be shown
        \$('#modalActiviteAdd').on('show.bs.modal', function(e) {
            //get data-id attribute of the clicked element
            var forselect = \$(e.relatedTarget).data('forselect');
            \$(e.currentTarget).find('input[id=\"secteur_activite_forselect\"]').val(forselect);
        });
        \$(\"#addsecteuractiviteform\").submit(function(e){
            e.preventDefault();
            var url = \"{{ path('secteur_activite_add') }}\";
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
                    url: '{{ path('crm.contact.societe.asynch-search') }}',
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
                url: '{{ path('crm.opca.ville.asynch-search') }}',
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
                url: '{{ path('crm.opca.ville.asynch-search') }}',
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
                url: '{{ path('crm.dossier.opca.asynch-search') }}',
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

        {% if app.request.query.get('opca') %}
        var data = {
            id: \"{{ app.request.query.get('opca') }}\",
            text: '{{ app.request.query.get('opca')|e('js') }}'
        };

        var newOption = new Option(data.text, data.id, true, true);
        \$('#contact_opca').append(newOption).trigger('change');

        {% endif  %}

        \$('#contact_idOpcaTns').select2({
            placeholder: \"-- OPCO TNS --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.dossier.opca.asynch-search') }}',
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

        {% if app.request.query.get('opca') %}


        var data2 = {
            id: \"{{ app.request.query.get('opca') }}\",
            text: '{{ app.request.query.get('opca')|e('js') }}'
        };

        var newOption2 = new Option(data2.text, data2.text, true, true);
        \$('#contact_idOpcaTns').append(newOption2).trigger('change');

        {% endif  %}
        
        {# APR-121 : Rendre Activite entreprise en autocompletion #}
        \$('#contact_idSecteur').select2({
            placeholder: \"-- Secteur --\",
            minimumInputLength: 3,
            allowClear: true,
            ajax: {
                url: '{{ path('crm.secteur_activite.asynch-search') }}',
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
                url: '{{ path('crm.secteur_activite.asynch-search') }}',
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
                url: '{{ path('crm.secteur_activite.asynch-search') }}',
                data: function (params) {
                    var query = {
                        search: params.term,
                    };
                    // Query parameters will be ?search=[term]&type=public
                    return query;
                }
            }
        });
        {# APR-121 : Rendre Activite entreprise en autocompletion #}
    
        {# APR-125 : Mettre une pour renseigner une adresse si type contact = client (2) #}
            \$('#contact_id_type').on('change', function(e) {
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
        {# Fin APR-125 #}
            
        {# Debut APR-203#}
            //\$(function() {
           //     \$('#contact_interlocuteur').val('non');
           // });
        {# Fin APR-203#}
    });
</script>", "contact/Parts/contact.js.html.twig", "/var/www/templates/contact/Parts/contact.js.html.twig");
    }
}
