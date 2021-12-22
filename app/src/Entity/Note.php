<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\NoteAction;
use App\Entity\Collaborateur;

/**
 * 1Note
 *
 * @ORM\Table(name="1_note", indexes={@ORM\Index(name="id_table", columns={"id_table"}), @ORM\Index(name="idb_table", columns={"idb_table"}), @ORM\Index(name="statut_rst", columns={"statut_rst"}), @ORM\Index(name="id", columns={"id"}), @ORM\Index(name="idb", columns={"idb"}), @ORM\Index(name="nom_table", columns={"nom_table"})})
 * @ORM\Entity(repositoryClass="App\Repository\NoteRepository")
 * @ORM\EntityListeners({"App\Events\NoteListener"})
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="nom_table", type="string", length=50)
 * @ORM\DiscriminatorMap({
 *        "1_domiciliation" = "DomiciliationNote",
 *        "1_contact" = "ContactNote",
 *        "1_formation_dossier" = "FormationDossierNote",
 *        "1_contact_formateur" = "FormateurNote",
 *        "1_dossier" = "DossierNote",
 *        "1_encaissement" = "EncaissementNote",
 *        "1_facture" = "FactureNote",
 *        "1_facture_domiciliation" = "FactDomNote",
 *        "1_doc_dossier" = "DocDossierNote",
 *        "1_devis" = "DevisNote",
 *        "1_formation_catalogue" = "FormationCatalogueNote",
 *        "lead" = "LeadNote"
 *     })
 */
abstract class Note extends NoteMere
{

}
