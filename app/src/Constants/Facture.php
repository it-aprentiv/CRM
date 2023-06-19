<?php
/**
 * file Facture.php
 */

namespace App\Constants;


class Facture
{
    const DESTINATAIRE_OPCA = 'O';
    const DESTINATAIRE_CLIENT = 'C';
    const DESTINATAIRE_AUTRES = 'N';

    const STATUT_PAYE = 1;
    const STATUT_ANNULE = 2;
    const STATUT_AVOIR = 3;
    const STATUT_CHQ_EN_ATT_ENCAISSEMENT = 4;
    const STATUT_PAS_PAYE = 5;
    const STATUT_EN_ATT_ENCAISS_CHQ = 6;

    const EXCEL_TEMPLATE_DOMICILIATION = "facture_domiciliation_v2.xlsx";
    const EXCEL_TEMPLATE_LOCATION = "facture_location.xlsx";
    const EXCEL_TEMPLATE_LOCATION_TARIF_REDUIT = "facture_location_tarif_reduit.xlsx";
    const EXCEL_TEMPLATE_DOMICILIATION_DEPOT = "facture_domiciliation_depot.xlsx";
}