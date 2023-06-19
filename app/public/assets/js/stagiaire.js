
jQuery(document).ready(function() {
    $('.js-datepicker').datepicker({
        format: 'dd-mm-yyyy',
        'language': 'fr',
    });
});

/******************** Ajout formulaire stagiaires ***********/
/*
    // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
var $container = $('div#formation_stagiaires');
//const prototype = '<div id="formation_stagiaires" data-prototype="<fieldset class=&quot;form-group&quot;><legend class=&quot;col-form-label&quot;>__name__label__</legend><div id=&quot;formation_stagiaires___name__&quot;><div class=&quot;form-group&quot;><label for=&quot;formation_stagiaires___name___nom&quot;>Nom</label><input type=&quot;text&quot; id=&quot;formation_stagiaires___name___nom&quot; name=&quot;formation[stagiaires][__name__][nom]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label for=&quot;formation_stagiaires___name___prenom&quot;>Prenom</label><input type=&quot;text&quot; id=&quot;formation_stagiaires___name___prenom&quot; name=&quot;formation[stagiaires][__name__][prenom]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label for=&quot;formation_stagiaires___name___email&quot;>Email</label><input type=&quot;text&quot; id=&quot;formation_stagiaires___name___email&quot; name=&quot;formation[stagiaires][__name__][email]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label for=&quot;formation_stagiaires___name___date_naissance&quot;>Date de naissance</label><input type=&quot;date&quot; id=&quot;formation_stagiaires___name___date_naissance&quot; name=&quot;formation[stagiaires][__name__][date_naissance]&quot; class=&quot;form-control&quot; /></div><div class=&quot;form-group&quot;><label class=&quot;&quot; for=&quot;formation_stagiaires___name___niveauetude&quot;>Niveau d&amp;#039;etude</label><select id=&quot;formation_stagiaires___name___niveauetude&quot; name=&quot;formation[stagiaires][__name__][niveauetude]&quot; class=&quot;form-control&quot;><option value=&quot;Sans études&quot;>Sans études</option><option value=&quot;BEP&quot;>BEP</option><option value=&quot;CAP&quot;>CAP</option><option value=&quot;BAC&quot;>BAC</option><option value=&quot;BAC+2&quot;>BAC+2</option><option value=&quot;BAC+3&quot;>BAC+3</option><option value=&quot;BAC+4&quot;>BAC+4</option><option value=&quot;BAC+5&quot;>BAC+5</option><option value=&quot;Pas connu&quot;>Pas connu</option></select></div><div class=&quot;form-group&quot;><label for=&quot;formation_stagiaires___name___nsecuritesocial&quot;>N° sécurité social</label><input type=&quot;number&quot; id=&quot;formation_stagiaires___name___nsecuritesocial&quot; name=&quot;formation[stagiaires][__name__][nsecuritesocial]&quot; class=&quot;form-control&quot; /></div></div></fieldset>"><fieldset class="form-group"><legend class="col-form-label">0</legend><div id="formation_stagiaires_0"><div class="form-group"><label for="formation_stagiaires_0_nom">Nom</label><input type="text" id="formation_stagiaires_0_nom" name="formation[stagiaires][0][nom]" class="form-control"></div><div class="form-group"><label for="formation_stagiaires_0_prenom">Prenom</label><input type="text" id="formation_stagiaires_0_prenom" name="formation[stagiaires][0][prenom]" class="form-control"></div><div class="form-group"><label for="formation_stagiaires_0_email">Email</label><input type="text" id="formation_stagiaires_0_email" name="formation[stagiaires][0][email]" class="form-control"></div><div class="form-group"><label for="formation_stagiaires_0_date_naissance">Date de naissance</label><input type="date" id="formation_stagiaires_0_date_naissance" name="formation[stagiaires][0][date_naissance]" class="form-control"></div><div class="form-group"><label class="" for="formation_stagiaires_0_niveauetude">Niveau d'etude</label><select id="formation_stagiaires_0_niveauetude" name="formation[stagiaires][0][niveauetude]" class="form-control"><option value="Sans études">Sans études</option><option value="BEP">BEP</option><option value="CAP">CAP</option><option value="BAC">BAC</option><option value="BAC+2">BAC+2</option><option value="BAC+3">BAC+3</option><option value="BAC+4">BAC+4</option><option value="BAC+5">BAC+5</option><option value="Pas connu">Pas connu</option></select></div><div class="form-group"><label for="formation_stagiaires_0_nsecuritesocial">N° sécurité social</label><input type="number" id="formation_stagiaires_0_nsecuritesocial" name="formation[stagiaires][0][nsecuritesocial]" class="form-control"></div></div></fieldset></div>'

// On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
var index = $container.find(':input').length;

// On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
$('#add_stagiaire').click(function(e) {
    addStagiaire($container);

    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
});

// On ajoute un premier champ automatiquement s'il n'en existe pas déjà un (cas d'une nouvelle annonce par exemple).
if (index == 0) {
    addStagiaire($container);
} else {
// S'il existe déjà des stagiaires, on ajoute un lien de suppression pour chacun d'entre eux
$container.children('div').each(function() {
    addDeleteLink($(this));
});
//}

// La fonction qui ajoute un formulaire StagiaireType
function addStagiaire($container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte "__name__label__" qu'il contient par le label du champ
    // - le texte "__name__" qu'il contient par le numéro du champ
    let template = $container.attr('data-prototype')
        .replace(/__name__label__/g, 'Stagiaire n°' + (index+1))
        .replace(/__name__/g,        index)
    ;

    // On crée un objet jquery qui contient ce template
    let $prototype = $(template);

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    addDeleteLink($prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    $container.append($prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
}

// La fonction qui ajoute un lien de suppression d'une ligne
function addDeleteLink($prototype) {
    // Création du lien
    let $deleteLink = $('<a href="#" class="btn_delete_form btn btn-danger">X</a>');

    // Ajout du lien
    $prototype.append($deleteLink);

    // Ajout du listener sur le clic du lien pour effectivement supprimer la ligne
    $deleteLink.click(function(e) {
        $prototype.remove();

        e.preventDefault(); // évite qu'un # apparaisse dans l'URL
        return false;
    });
}
*/
/******************** Fin Ajout formulaire stagiaires ***********/

/******************** Ajout formulaire suiviMissions ***********/

/*var $containerOM = $('div#formation_suiviMissions');
var indexOM = $containerOM.find(':input').length;
$('#add_suiviOM').click(function(e) {
    addSuiviOM($containerOM);
    return false;
});

$containerOM.children('div').each(function() {
    addDeleteLink($(this));
});

function addSuiviOM($containerOM) {
    let template = $containerOM.attr('data-prototype')
        .replace(/__name__label__/g, 'OM n°' + (indexOM+1))
        .replace(/__name__/g,        indexOM)
    ;
    let $prototype = $(template);
    addDeleteLink($prototype);
    $containerOM.append($prototype);
    indexOM++;
}
*/
/******************** Fin Ajout formulaire suiviMissions ***********/

/******************** Ajout formulaire commentaires ***********/

var $containerCom = $('div#formation_commentaires');
var indexCom = $containerCom.find(':input').length;
$('#add_commentaires').click(function(e) {
    addSuiviCom($containerCom);
    return false;
});

$containerCom.children('div').each(function() {
    addDeleteLink($(this));
});

function addSuiviCom($containerCom) {
    let template = $containerCom.attr('data-prototype')
        .replace(/__name__label__/g, 'Commentaire n°' + (indexCom+1))
        .replace(/__name__/g,        indexCom)
    ;
    let $prototype = $(template);
    addDeleteLink($prototype);
    $containerCom.append($prototype);
    indexCom++;
}

/******************** Fin Ajout formulaire commentaires ***********/