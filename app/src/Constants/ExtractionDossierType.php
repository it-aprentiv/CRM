<?php
/**
 * file ExtractionDossier.php
 */

namespace App\Constants;


class ExtractionDossierType
{
    const DOSSIER_EN_ATTENTE_ACCORD = 'dossattaccord';
    const SUIVI_ENCAISSEMENT = 'suivprevencaiss';
    const DOSSIER_FACT_OPCA = 'dossfactopca';
    const GESTION_DOSSIER_LOC = 'getdosslocation';
    const DOSSIER_FACT_CLIENT = 'dossfactclient';
    const GESTION_SUIVI_COM = 'gestsuivcom';
    const GESTION_DOSSIER_PROS = 'gestdossprospere';
    const GESTION_DOSSIER_PROFORM = 'gestdossproform';
    const EXTRACTION_PERSONNALISE = 'customextract';
}