<?php
/**
 * file Note.php
 */

namespace App\Constants;


use App\Entity\ContactNote;
use App\Entity\FormateurNote;
use App\Entity\DevisNote;
use App\Entity\DocDossierNote;
use App\Entity\DomiciliationNote;
use App\Entity\DossierNote;
use App\Entity\EncaissementNote;
use App\Entity\FactureNote;
use App\Entity\FormationDossierNote;
use App\Entity\FormationCatalogueNote;
use App\Entity\LeadNote;



class Note
{
    const TABLE_LIBELLE = [
        ContactNote::NOM_TABLE => "Fiche client",
        FormateurNote::NOM_TABLE => "Formateur",
        DevisNote::NOM_TABLE => "Proposition commercial",
        DocDossierNote::NOM_TABLE => "Formation",
        DomiciliationNote::NOM_TABLE => "Domiciliation",
        DossierNote::NOM_TABLE => "Formation",
        EncaissementNote::NOM_TABLE => "Encaissement",
        FactureNote::NOM_TABLE => "Facture",
        FormationCatalogueNote::NOM_TABLE => "Catalogue",
        FormationDossierNote::NOM_TABLE => "Dossier",
        LeadNote::NOM_TABLE => "Lead",

    ];

    const MODULE_VIEW_URL =  [
        ContactNote::NOM_TABLE => "Fiche_client_prospect_Controller/editClient",
        FormateurNote::NOM_TABLE => "Liste_Formateur_Controller/editFormateur",
        DocDossierNote::NOM_TABLE => "edit_formation",
        DomiciliationNote::NOM_TABLE => "crm.domiciliation.fiche",
        DossierNote::NOM_TABLE => "edit_formation",
        EncaissementNote::NOM_TABLE => "encaissement_create_from_facture",
        FactureNote::NOM_TABLE => "Facture_Avoir_Voir",
        FormationDossierNote::NOM_TABLE => "Liste_Dossiers_Controller/visualiserDossier",
        LeadNote::NOM_TABLE => "Fiche_lead_Controller/editLead",

    ];

    const MENU_NOM_TABLE = [
        ContactNote::NOM_TABLE => Menu::MENU_CLIENT_PROSPECT,
        FormateurNote::NOM_TABLE => Menu::MENU_FORMATEURS,
        DevisNote::NOM_TABLE => Menu::MENU_PROPOSITION_COMMERCIAL,
        DocDossierNote::NOM_TABLE => Menu::MENU_FORMATIONS,
        DomiciliationNote::NOM_TABLE => Menu::MENU_DOMICILIATION,
        EncaissementNote::NOM_TABLE => Menu::MENU_ENCAISSEMENTS,
        FactureNote::NOM_TABLE => Menu::MENU_FACTURE_AVOIR,
        FormationCatalogueNote::NOM_TABLE => Menu::MENU_CATALOGUE,
        DossierNote::NOM_TABLE => Menu::MENU_DOSSIERS,
        FormationDossierNote::NOM_TABLE => Menu::MENU_DOSSIERS
    ];

    const ACTION_RELANCE_FOPCA = 6;
    const ACTION_ENC_CHQ_EN_ATT = 12;
    const ACTION_FACT_CLT_A_FAIRE = 14;
    const ACTION_ATT_ACCORD_OPCA = 18;
    const ACTION_EMARG_A_ENVOYER = 19;
    const ACTION_EMARG_A_RECLAMER = 20;
    const ACTION_ACC_A_RECLAMER = 21;
    const ACTION_DOCS_A_RECLAMER = 25;

    const STATUT_A_FAIRE = 1;

    public static function getTableLibelle($sNomTable){
        if (!isset(self::TABLE_LIBELLE[$sNomTable])) {
            return '';
        }

        return self::TABLE_LIBELLE[$sNomTable];
    }

    public static function getModuleUrl($sNomTable){
        if (!isset(self::MODULE_VIEW_URL[$sNomTable])) {
            return null;
        }

        return self::MODULE_VIEW_URL[$sNomTable];
    }
}