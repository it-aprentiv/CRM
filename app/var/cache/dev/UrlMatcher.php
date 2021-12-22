<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/avoir/generate-num-avoir' => [[['_route' => 'avoir_generate_numero', '_controller' => 'App\\Controller\\AvoirController::generateRefAvoir'], null, null, null, false, false, null]],
        '/catalogue' => [[['_route' => 'Catalogue_Controller', '_controller' => 'App\\Controller\\CatalogueController::index'], null, null, null, false, false, null]],
        '/commission/suivi' => [[['_route' => 'Suivi_Commissions_Controller', '_controller' => 'App\\Controller\\CommissionController::suivi'], null, null, null, false, false, null]],
        '/competence' => [[['_route' => 'competence_index', '_controller' => 'App\\Controller\\CompetenceController::index'], null, ['GET' => 0], null, false, false, null]],
        '/competence/new' => [
            [['_route' => 'competence_new', '_controller' => 'App\\Controller\\CompetenceController::new'], null, ['GET' => 0, 'POST' => 1], null, true, false, null],
            [['_route' => 'competence.create', '_controller' => 'App\\Controller\\CompetenceController::asynchAddCompetence'], null, null, null, false, false, null],
        ],
        '/competence/modaladd' => [[['_route' => 'ajout_competence', '_controller' => 'App\\Controller\\CompetenceController::modaladdcompetence'], null, null, null, true, false, null]],
        '/contact' => [[['_route' => 'Liste_Client_Prospect_Controller', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/contact/creation' => [[['_route' => 'Fiche_client_prospect_Controller/ajoutclient', '_controller' => 'App\\Controller\\ContactController::create'], null, null, null, false, false, null]],
        '/contact/societe/list' => [[['_route' => 'crm.contact.societe.asynch-search', '_controller' => 'App\\Controller\\ContactController::asynchFindSocietes'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact/search-contact' => [[['_route' => 'crm.contact.client.search_json', '_controller' => 'App\\Controller\\ContactController::searchContactByTypeJson'], null, ['GET' => 0], null, false, false, null]],
        '/contact/opca/modaladd' => [[['_route' => 'opca.modal.add', '_controller' => 'App\\Controller\\ContactController::OpcaModalAdd'], null, ['POST' => 0], null, false, false, null]],
        '/createStagiaire' => [[['_route' => 'ajout_stagiaire', '_controller' => 'App\\Controller\\ContactController::createStagiaire'], null, null, null, false, false, null]],
        '/formation/get-adress-client' => [[['_route' => 'formation_get_address_client', '_controller' => 'App\\Controller\\ContactController::getAddressClientById'], null, null, null, false, false, null]],
        '/contact/search-opca' => [[['_route' => 'crm.contact.opca.search_json', '_controller' => 'App\\Controller\\ContactController::searchOPCAByTypeJson'], null, ['GET' => 0], null, false, false, null]],
        '/export/a' => [[['_route' => 'export_ect', '_controller' => 'App\\Controller\\ContactController::getData'], null, null, null, false, false, null]],
        '/export/prospect' => [[['_route' => 'export_prospect', '_controller' => 'App\\Controller\\ContactController::export'], null, null, null, false, false, null]],
        '/propal/get-adress-client' => [[['_route' => 'propal_get_address_client', '_controller' => 'App\\Controller\\ContactController::getAddressClientPropal'], null, null, null, false, false, null]],
        '/data/facture-avoir-link/fix' => [[['_route' => 'facture.avoir.link_fix', '_controller' => 'App\\Controller\\DataFixController::factureAvoirLinkFix'], null, null, null, false, false, null]],
        '/data/entities/bad-links' => [[['_route' => 'entities.bad-links', '_controller' => 'App\\Controller\\DataFixController::getProblemsList'], null, null, null, false, false, null]],
        '/data/entities/bad-links/correct' => [[['_route' => 'data-fix.contact.client.fix-bad-opco-links', '_controller' => 'App\\Controller\\DataFixController::fixClientBadOPCOLinks'], null, null, null, false, false, null]],
        '/data/entities/dossier/bad-links/correct' => [[['_route' => 'data-fix.dossier.fix-bad-opco-links', '_controller' => 'App\\Controller\\DataFixController::fixDossierBadLinks'], null, null, null, false, false, null]],
        '/data/dossier/fix/num-ref' => [[['_route' => 'dossier.fix.num_ref', '_controller' => 'App\\Controller\\DataFixController::fixNumeroDossierIncremental'], null, null, null, false, false, null]],
        '/domiciliation' => [[['_route' => 'Domiciliation_Location_Controller', '_controller' => 'App\\Controller\\DomiciliationController::index'], null, null, null, true, false, null]],
        '/domiciliation/creation' => [[['_route' => 'Domiciliation_Location_Controller/creation', '_controller' => 'App\\Controller\\DomiciliationController::create'], null, null, null, false, false, null]],
        '/domiciliation/generer-reference' => [[['_route' => 'crm.domiciliation.generer_reference', '_controller' => 'App\\Controller\\DomiciliationController::genererReference'], null, null, null, false, false, null]],
        '/domiciliation/delete' => [[['_route' => 'crm.domiciliation.delete', '_controller' => 'App\\Controller\\DomiciliationController::asynchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/encaissement' => [[['_route' => 'Liste_Encaissement_Controller', '_controller' => 'App\\Controller\\EncaissementController::index'], null, null, null, false, false, null]],
        '/encaissement/delete' => [[['_route' => 'encaissement.delete', '_controller' => 'App\\Controller\\EncaissementController::asynchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/encaissement/facture/infos' => [[['_route' => 'crm.encaissement.factures-avoirs-infos', '_controller' => 'App\\Controller\\EncaissementController::asynchGetFacturesAvoirsInfos'], null, ['POST' => 0], null, false, false, null]],
        '/encaissement/facture/detail' => [[['_route' => 'crm.encaissement.factures-avoirs-infosdetail', '_controller' => 'App\\Controller\\EncaissementController::asyncGetFactAvsInfo'], null, ['POST' => 0], null, false, false, null]],
        '/facture' => [[['_route' => 'Liste_Factures_Avoirs_Controller', '_controller' => 'App\\Controller\\FactureController::index'], null, null, null, false, false, null]],
        '/facture/formation' => [
            [['_route' => 'Facture_formation_Controller', '_controller' => 'App\\Controller\\FactureController::formation'], null, null, null, false, false, null],
            [['_route' => 'Facture_formation_Controller_old', '_controller' => 'App\\Controller\\FactureController::factureFormation'], null, null, null, false, false, null],
        ],
        '/facture/domiciliation' => [[['_route' => 'Domiciliation_Location_Controller/factures', '_controller' => 'App\\Controller\\FactureController::factureDomiciliation'], null, null, null, false, false, null]],
        '/facture/ajout-facture-avoir' => [[['_route' => 'Facture_Avoir_Ajout', '_controller' => 'App\\Controller\\FactureController::ajouter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/facture/list/autocomplete' => [[['_route' => 'crm.facture.asynch-search', '_controller' => 'App\\Controller\\FactureController::asynchSearchFacture'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/lastId' => [[['_route' => 'last_id_facture', '_controller' => 'App\\Controller\\FactureController::getLastInsertId'], null, null, null, false, false, null]],
        '/facture/generate-num' => [[['_route' => 'facture_generate_numero', '_controller' => 'App\\Controller\\FactureController::generateRef'], null, null, null, false, false, null]],
        '/formateur' => [[['_route' => 'Liste_Formateur_Controller', '_controller' => 'App\\Controller\\FormateurController::index'], null, null, null, false, false, null]],
        '/formateur/create' => [[['_route' => 'Liste_Formateur_Controller/ajoutFormateur', '_controller' => 'App\\Controller\\FormateurController::create'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'Liste_Formation_Mise_Place_Controller', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/formation/creation' => [[['_route' => 'Detail_formation_inter_Controller/creation', '_controller' => 'App\\Controller\\FormationController::create'], null, null, null, false, false, null]],
        '/formation/next-id' => [[['_route' => 'next_insert_id_formation', '_controller' => 'App\\Controller\\FormationController::getNextInsertId'], null, null, null, false, false, null]],
        '/formation/send-om-formateur' => [[['_route' => 'formation_send_om_formateur', '_controller' => 'App\\Controller\\FormationController::sendEmailToFormateur'], null, null, null, false, false, null]],
        '/formation/delete-stagiaire' => [[['_route' => 'delete_stagiaire_formation', '_controller' => 'App\\Controller\\FormationController::deleteStagiaireAsync'], null, ['DELETE' => 0], null, false, false, null]],
        '/formation/delete-om' => [[['_route' => 'delete_om_formation', '_controller' => 'App\\Controller\\FormationController::deleteOMForamtionAsync'], null, ['DELETE' => 0], null, false, false, null]],
        '/dossier' => [[['_route' => 'Liste_Dossiers_Controller', '_controller' => 'App\\Controller\\FormationDossierController::index'], null, null, null, false, false, null]],
        '/dossier/client/list' => [[['_route' => 'crm.dossier.client.asynch-search', '_controller' => 'App\\Controller\\FormationDossierController::asynchFindClient'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dossier/opca/list' => [[['_route' => 'crm.dossier.opca.asynch-search', '_controller' => 'App\\Controller\\FormationDossierController::asynchFindOpca'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dossier/commercial/list' => [[['_route' => 'crm.dossier.commercial.asynch-search', '_controller' => 'App\\Controller\\FormationDossierController::asynchFindCommercial'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/dossier/creation' => [[['_route' => 'Liste_Dossiers_Controller/ajoutdossier', '_controller' => 'App\\Controller\\FormationDossierController::create'], null, null, null, false, false, null]],
        '/dossier/date/remove' => [[['_route' => 'dossier.date.delete', '_controller' => 'App\\Controller\\FormationDossierController::asynchDeleteFormationDate'], null, ['DELETE' => 0], null, false, false, null]],
        '/dossier/date/refresh-calendar' => [[['_route' => 'dossier.date.refresh_calendar', '_controller' => 'App\\Controller\\FormationDossierController::asynchRefreshFormationDate'], null, ['POST' => 0], null, false, false, null]],
        '/dossier/date/insert' => [[['_route' => 'dossier.dates.insert', '_controller' => 'App\\Controller\\FormationDossierController::asynchInsertNewDateItems'], null, ['POST' => 0], null, false, false, null]],
        '/dossier/extract' => [[['_route' => 'crm.dossier.extract', '_controller' => 'App\\Controller\\FormationDossierController::extract'], null, ['POST' => 0], null, false, false, null]],
        '/dossier/getCompetence' => [[['_route' => 'crm.dossier.competence.asynch-search', '_controller' => 'App\\Controller\\FormationDossierController::asynchCompetence'], null, ['GET' => 0], null, false, false, null]],
        '/dossier/getCompetenceone' => [[['_route' => 'crm.dossier.competence.asynch-search-one', '_controller' => 'App\\Controller\\FormationDossierController::asynchCompetenceOne'], null, ['GET' => 0], null, false, false, null]],
        '/dossier/getTheme' => [[['_route' => 'crm.dossier.theme.asynch-search', '_controller' => 'App\\Controller\\FormationDossierController::asynchTheme'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home.index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/stats' => [[['_route' => 'home.stats', '_controller' => 'App\\Controller\\HomeController::homestats'], null, null, null, false, false, null]],
        '/portail' => [[['_route' => 'home.portail', '_controller' => 'App\\Controller\\HomeController::portail'], null, null, null, false, false, null]],
        '/lead' => [[['_route' => 'Liste_Lead_Controller', '_controller' => 'App\\Controller\\LeadController::index'], null, null, null, false, false, null]],
        '/lead/creation' => [[['_route' => 'Fiche_lead_Controller/ajoutLead', '_controller' => 'App\\Controller\\LeadController::createLead'], null, null, null, false, false, null]],
        '/lead/societe/list' => [[['_route' => 'crm.lead.societe.asynch-search', '_controller' => 'App\\Controller\\LeadController::asynchFindSocietes'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/export/lead' => [[['_route' => 'export_lead', '_controller' => 'App\\Controller\\LeadController::export'], null, null, null, false, false, null]],
        '/log' => [[['_route' => 'Log_Controller', '_controller' => 'App\\Controller\\LogController::index'], null, null, null, false, false, null]],
        '/note' => [[['_route' => 'Liste_notes_actions_Controller', '_controller' => 'App\\Controller\\NoteController::index'], null, null, null, false, false, null]],
        '/opca' => [[['_route' => 'OPCA_Controller', '_controller' => 'App\\Controller\\OpcaController::index'], null, null, null, false, false, null]],
        '/opca/create' => [[['_route' => 'opca_create', '_controller' => 'App\\Controller\\OpcaController::create'], null, null, null, false, false, null]],
        '/opca/ville/list' => [[['_route' => 'crm.opca.ville.asynch-search', '_controller' => 'App\\Controller\\OpcaController::asynchFindVilles'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/opca/list-asynch' => [[['_route' => 'crm.opca.list-asynch', '_controller' => 'App\\Controller\\OpcaController::asynchFindOPCA'], null, null, null, false, false, null]],
        '/propal' => [[['_route' => 'Liste_propositions_commerciales_Controller', '_controller' => 'App\\Controller\\PropalController::index'], null, null, null, false, false, null]],
        '/propal/creation' => [[['_route' => 'Liste_propositions_commerciales_Controller/ajoutpropal', '_controller' => 'App\\Controller\\PropalController::create'], null, null, null, false, false, null]],
        '/export' => [[['_route' => 'export', '_controller' => 'App\\Controller\\PropalController::export'], null, null, null, false, false, null]],
        '/qualite' => [[['_route' => 'qualite', '_controller' => 'App\\Controller\\QualiteController::index'], null, null, null, false, false, null]],
        '/qualite/addmodal' => [[['_route' => 'qualite_add', '_controller' => 'App\\Controller\\QualiteController::QualiteFormAdd'], null, ['POST' => 0], null, false, false, null]],
        '/secteur/activite' => [[['_route' => 'secteur_activite', '_controller' => 'App\\Controller\\SecteurActiviteController::index'], null, null, null, false, false, null]],
        '/secteur/activite/add' => [[['_route' => 'secteur_activite_add', '_controller' => 'App\\Controller\\SecteurActiviteController::SecteurActiviteForm'], null, ['POST' => 0], null, false, false, null]],
        '/secteur_activite/list' => [[['_route' => 'crm.secteur_activite.asynch-search', '_controller' => 'App\\Controller\\SecteurActiviteController::asynchSearch'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/security' => [[['_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/utilisateur' => [[['_route' => 'welcome/Liste_utilisateur', '_controller' => 'App\\Controller\\UtilisateurController::index'], null, null, null, false, false, null]],
        '/utilisateur/suppression' => [[['_route' => 'user.delete-asynch', '_controller' => 'App\\Controller\\UtilisateurController::asynchRemoveUser'], null, ['DELETE' => 0, 'POST' => 1], null, false, false, null]],
        '/utilisateur/profil' => [[['_route' => 'user.view', '_controller' => 'App\\Controller\\UtilisateurController::view'], null, null, null, false, false, null]],
        '/ville/add/modal' => [[['_route' => 'ville_add', '_controller' => 'App\\Controller\\VilleController::create'], null, ['POST' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/c(?'
                    .'|atalogue/([^/]++)(?'
                        .'|(*:194)'
                        .'|/delete(*:209)'
                    .')'
                    .'|o(?'
                        .'|m(?'
                            .'|mission/([^/]++)/(?'
                                .'|detail(*:252)'
                                .'|supprimer(*:269)'
                            .')'
                            .'|petence/([^/]++)/(?'
                                .'|show(*:302)'
                                .'|edit(*:314)'
                                .'|delete(*:328)'
                            .')'
                        .')'
                        .'|ntact/([^/]++)/(?'
                            .'|edition(*:363)'
                            .'|delete(*:377)'
                            .'|printdocument/([^/]++)(*:407)'
                            .'|getadresse(*:425)'
                        .')'
                    .')'
                .')'
                .'|/f(?'
                    .'|ormation/voir\\-catalogue/([^/]++)(*:474)'
                    .'|acture(?'
                        .'|/([^/]++)/(?'
                            .'|encaisser(*:513)'
                            .'|([^/]++)/delete(*:536)'
                        .')'
                        .'|\\-domiciliation/([^/]++)/encaisser(*:579)'
                    .')'
                .')'
                .'|/domiciliation/(?'
                    .'|ajout\\-categorie/([^/]++)(*:632)'
                    .'|fiche/([^/]++)(*:654)'
                .')'
                .'|/encaissement/([^/]++)/update(*:692)'
                .'|/([^/]++)/voir\\-facture\\-avoir(*:730)'
                .'|/f(?'
                    .'|acture(?'
                        .'|\\-domiciliation/([^/]++)(?'
                            .'|(*:779)'
                            .'|/print(*:793)'
                        .')'
                        .'|/([^/]++)/print(*:817)'
                    .')'
                    .'|ormat(?'
                        .'|eur/([^/]++)/(?'
                            .'|show(*:854)'
                            .'|edit(*:866)'
                            .'|delete(*:880)'
                        .')'
                        .'|ion/(?'
                            .'|create/([^/]++)(*:911)'
                            .'|edit/([^/]++)(?'
                                .'|(*:935)'
                                .'|/export(*:950)'
                            .')'
                            .'|delete/([^/]++)(*:974)'
                            .'|recap\\-formation/([^/]++)(*:1007)'
                        .')'
                    .')'
                .')'
                .'|/avoir/([^/]++)/editer(*:1041)'
                .'|/dossier/(?'
                    .'|downloadprogramme/([^/]++)(*:1088)'
                    .'|([^/]++)/(?'
                        .'|de(?'
                            .'|lete(*:1118)'
                            .'|vis\\-papier(*:1138)'
                        .')'
                        .'|visualiser(*:1158)'
                        .'|generatedoc(?'
                            .'|/([^/]++)(*:1190)'
                            .'|Emmargement/([^/]++)(*:1219)'
                        .')'
                        .'|convocation(*:1240)'
                    .')'
                .')'
                .'|/lead/([^/]++)/(?'
                    .'|editionLead(*:1280)'
                    .'|delete(*:1295)'
                .')'
                .'|/note/([^/]++)/(?'
                    .'|show(*:1327)'
                    .'|delete(*:1342)'
                    .'|update(*:1357)'
                .')'
                .'|/opca/(?'
                    .'|([^/]++)/(?'
                        .'|show(*:1392)'
                        .'|delete(*:1407)'
                    .')'
                    .'|ville/([^/]++)/getOne(*:1438)'
                .')'
                .'|/propal/([^/]++)/(?'
                    .'|edit(*:1472)'
                    .'|delete(*:1487)'
                    .'|generate(?'
                        .'|doc(?'
                            .'|(*:1513)'
                            .'|proform(*:1529)'
                        .')'
                        .'|conv(*:1543)'
                    .')'
                .')'
                .'|/utilisateur/([^/]++)/update/generate\\-form(*:1597)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        194 => [[['_route' => 'create_formation_catalogue', '_controller' => 'App\\Controller\\CatalogueController::createFormation'], ['typeFormation'], null, null, false, true, null]],
        209 => [[['_route' => 'catalogue_delete', '_controller' => 'App\\Controller\\CatalogueController::detele'], ['id'], null, null, false, false, null]],
        252 => [[['_route' => 'Suivi_Commissions_Detail', '_controller' => 'App\\Controller\\CommissionController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        269 => [[['_route' => 'Suivi_Commissions_Supprimer', '_controller' => 'App\\Controller\\CommissionController::delete'], ['id'], ['GET' => 0, 'POST' => 1, 'DELETE' => 2], null, false, false, null]],
        302 => [[['_route' => 'competence_show', '_controller' => 'App\\Controller\\CompetenceController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        314 => [[['_route' => 'competence_edit', '_controller' => 'App\\Controller\\CompetenceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        328 => [[['_route' => 'competence_delete', '_controller' => 'App\\Controller\\CompetenceController::delete'], ['id'], ['DELETE' => 0], null, false, false, null]],
        363 => [[['_route' => 'Fiche_client_prospect_Controller/editClient', '_controller' => 'App\\Controller\\ContactController::edit'], ['id'], null, null, false, false, null]],
        377 => [[['_route' => 'Client_Prospect_Delete', '_controller' => 'App\\Controller\\ContactController::delete'], ['id'], null, null, false, false, null]],
        407 => [[['_route' => 'client_prospect_printdocument', '_controller' => 'App\\Controller\\ContactController::printdocument'], ['id', 'type'], null, null, false, true, null]],
        425 => [[['_route' => 'contact_get_adresse', '_controller' => 'App\\Controller\\ContactController::getcontactadresse'], ['id'], ['GET' => 0], null, false, false, null]],
        474 => [[['_route' => 'cataloge_voir', '_controller' => 'App\\Controller\\CatalogueController::voir'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        513 => [[['_route' => 'encaissement_create_from_facture', '_controller' => 'App\\Controller\\EncaissementController::encaissementFactureAvoir'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        536 => [[['_route' => 'Facture_Controller/deleteFacture', '_controller' => 'App\\Controller\\FactureController::delete'], ['idFacture', 'idAvoir'], null, null, false, false, null]],
        579 => [[['_route' => 'facture.dom_loc.encaisser', '_controller' => 'App\\Controller\\EncaissementController::encaisserFactureDomLoc'], ['id'], null, null, false, false, null]],
        632 => [[['_route' => 'crm.domiciliation.ajout_categorie', '_controller' => 'App\\Controller\\DomiciliationController::ajoutCategorie'], ['categorie'], null, null, false, true, null]],
        654 => [[['_route' => 'crm.domiciliation.fiche', '_controller' => 'App\\Controller\\DomiciliationController::fiche'], ['id'], null, null, false, true, null]],
        692 => [[['_route' => 'encaissement.update', '_controller' => 'App\\Controller\\EncaissementController::update'], ['id'], null, null, false, false, null]],
        730 => [[['_route' => 'Facture_Avoir_Voir', '_controller' => 'App\\Controller\\FactureController::detail'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        779 => [[['_route' => 'Facture_Domiciliation_Voir', '_controller' => 'App\\Controller\\FactureController::factureDomiciliationVoir'], ['idFactDom'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        793 => [[['_route' => 'facture_domiciliation_print', '_controller' => 'App\\Controller\\FactureController::printFactureDomExcel'], ['id'], ['GET' => 0], null, false, false, null]],
        817 => [[['_route' => 'facture_avoirs_print', '_controller' => 'App\\Controller\\FactureController::printfactureavoirexcel'], ['id'], ['GET' => 0], null, false, false, null]],
        854 => [[['_route' => 'Liste_Formateur_Controller/showFormateur', '_controller' => 'App\\Controller\\FormateurController::show'], ['id'], null, null, false, false, null]],
        866 => [[['_route' => 'Liste_Formateur_Controller/editFormateur', '_controller' => 'App\\Controller\\FormateurController::edit'], ['id'], null, null, false, false, null]],
        880 => [[['_route' => 'Liste_Formateur_Controller/deleteFormateur', '_controller' => 'App\\Controller\\FormateurController::delete'], ['id'], null, null, false, false, null]],
        911 => [[['_route' => 'create_formation', '_controller' => 'App\\Controller\\FormationController::createFormation'], ['typeFormation'], null, null, false, true, null]],
        935 => [[['_route' => 'edit_formation', '_controller' => 'App\\Controller\\FormationController::editFormation'], ['id'], null, null, false, true, null]],
        950 => [[['_route' => 'formation_export_om_word', '_controller' => 'App\\Controller\\FormationController::exportOmToWord'], ['idFormation'], null, null, false, false, null]],
        974 => [[['_route' => 'formation_delete', '_controller' => 'App\\Controller\\FormationController::delete'], ['id'], null, null, false, true, null]],
        1007 => [[['_route' => 'export_recap_formation', '_controller' => 'App\\Controller\\FormationController::recapFormation'], ['id'], null, null, false, true, null]],
        1041 => [[['_route' => 'editer_avoirs', '_controller' => 'App\\Controller\\FactureController::editerAvoir'], ['id'], ['GET' => 0], null, false, false, null]],
        1088 => [[['_route' => 'download_programme_dossier', '_controller' => 'App\\Controller\\FormationController::downloadProgramme'], ['fichier'], null, null, false, true, null]],
        1118 => [[['_route' => 'Liste_Dossier_Controller/deleteDossier', '_controller' => 'App\\Controller\\FormationDossierController::delete'], ['idDossier'], null, null, false, false, null]],
        1138 => [[['_route' => 'Formation_Dossier_Devis_Papier', '_controller' => 'App\\Controller\\FormationDossierController::devisPapier'], ['id'], null, null, false, false, null]],
        1158 => [[['_route' => 'Liste_Dossiers_Controller/visualiserDossier', '_controller' => 'App\\Controller\\FormationDossierController::show'], ['id'], null, null, false, false, null]],
        1190 => [[['_route' => 'Dossier_Generate_Doc', '_controller' => 'App\\Controller\\FormationDossierController::generateDocDossier'], ['id', 'type'], null, null, false, true, null]],
        1219 => [[['_route' => 'generate_doc_emmargement', '_controller' => 'App\\Controller\\FormationDossierController::generateDocEmmargement'], ['id', 'stagiaireid'], null, null, false, true, null]],
        1240 => [[['_route' => 'Formation_Dossier_ConvProform', '_controller' => 'App\\Controller\\FormationDossierController::convProfom'], ['id'], null, null, false, false, null]],
        1280 => [[['_route' => 'Fiche_lead_Controller/editLead', '_controller' => 'App\\Controller\\LeadController::editLead'], ['id'], null, null, false, false, null]],
        1295 => [[['_route' => 'Lead_Delete', '_controller' => 'App\\Controller\\LeadController::deleteLead'], ['id'], null, null, false, false, null]],
        1327 => [[['_route' => 'Liste_notes_actions_Controller/showNote', '_controller' => 'App\\Controller\\NoteController::show'], ['id'], null, null, false, false, null]],
        1342 => [[['_route' => 'Liste_notes_actions_Controller/deleteNote', '_controller' => 'App\\Controller\\NoteController::delete'], ['id'], null, null, false, false, null]],
        1357 => [[['_route' => 'note.update', '_controller' => 'App\\Controller\\NoteController::updateStatut'], ['id'], null, null, false, false, null]],
        1392 => [[['_route' => 'OPCA_Controller/showOpca', '_controller' => 'App\\Controller\\OpcaController::show'], ['idOpca'], null, null, false, false, null]],
        1407 => [[['_route' => 'OPCA_Controller/deleteOpca', '_controller' => 'App\\Controller\\OpcaController::delete'], ['idOpca'], null, null, false, false, null]],
        1438 => [[['_route' => 'crm.opca.oneVille.asynch-search', '_controller' => 'App\\Controller\\OpcaController::getVilleById'], ['idVille'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1472 => [[['_route' => 'propal_show', '_controller' => 'App\\Controller\\PropalController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1487 => [[['_route' => 'Propal_Delete', '_controller' => 'App\\Controller\\PropalController::deletepropal'], ['id'], null, null, false, false, null]],
        1513 => [[['_route' => 'propal_generate_doc', '_controller' => 'App\\Controller\\PropalController::generatedocpropal'], ['id'], null, null, false, false, null]],
        1529 => [[['_route' => 'propal_generate_docproform', '_controller' => 'App\\Controller\\PropalController::generatedocpropalproform'], ['id'], null, null, false, false, null]],
        1543 => [[['_route' => 'propal_generate_conv', '_controller' => 'App\\Controller\\PropalController::generatedocconv'], ['id'], null, null, false, false, null]],
        1597 => [
            [['_route' => 'user.update.generate-form-asynch', '_controller' => 'App\\Controller\\UtilisateurController::asynchUpdateUtilisateur'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
