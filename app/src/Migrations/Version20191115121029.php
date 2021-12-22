<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191115121029 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        //$this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE 1_activite CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 2_adresse CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_ville id_ville INT DEFAULT NULL, CHANGE id_region id_region INT DEFAULT NULL, CHANGE id_pays id_pays INT DEFAULT NULL, CHANGE id_type_adresse id_type_adresse INT DEFAULT NULL, CHANGE idb_type_adresse idb_type_adresse INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_affaire CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_affaire_detail CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_affaires_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_avoir CHANGE id id INT NOT NULL, CHANGE total_ht total_ht VARCHAR(50) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_banque CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_competence CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_competence_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_competence_sous_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_cond_rglmnt CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_contact CHANGE actif actif TINYINT(1) DEFAULT NULL, CHANGE delais_reponse_opca delais_reponse_opca TINYINT(1) DEFAULT NULL, CHANGE delais_rglmt_opca delais_rglmt_opca TINYINT(1) DEFAULT NULL, CHANGE delais_encaiss_opca delais_encaiss_opca TINYINT(1) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_contact_cat CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_contact_fonction CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_contact_lnk CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE 5_contact_lnk_type CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_cout CHANGE id_cat id_cat INT DEFAULT NULL, CHANGE idb_cat idb_cat INT DEFAULT NULL, CHANGE id_sous_cat id_sous_cat INT DEFAULT NULL, CHANGE idb_sous_cat idb_sous_cat INT DEFAULT NULL, CHANGE id_fournisseur id_fournisseur INT DEFAULT NULL, CHANGE idb_fournisseur idb_fournisseur INT DEFAULT NULL, CHANGE id_dossier id_dossier INT DEFAULT NULL, CHANGE idb_dossier idb_dossier INT DEFAULT NULL, CHANGE id_action id_action INT DEFAULT NULL, CHANGE idb_action idb_action INT DEFAULT NULL, CHANGE id_note_de_frais id_note_de_frais INT DEFAULT NULL, CHANGE idb_note_de_frais idb_note_de_frais INT DEFAULT NULL, CHANGE id_etat id_etat INT DEFAULT NULL, CHANGE idb_etat idb_etat INT DEFAULT NULL, CHANGE id_tx_tva id_tx_tva DOUBLE PRECISION DEFAULT NULL, CHANGE idb_tx_tva idb_tx_tva DOUBLE PRECISION DEFAULT NULL, CHANGE id_mode_reglmnt id_mode_reglmnt INT DEFAULT NULL, CHANGE idb_mode_reglmnt idb_mode_reglmnt INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_cout_treso CHANGE id_cout id_cout INT DEFAULT NULL, CHANGE idb_cout idb_cout INT DEFAULT NULL, CHANGE id_treso id_treso INT DEFAULT NULL, CHANGE idb_treso idb_treso INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis CHANGE id id INT NOT NULL, CHANGE type type TINYINT(1) DEFAULT NULL, CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_affaire id_affaire INT DEFAULT NULL, CHANGE idb_affaire idb_affaire INT DEFAULT NULL, CHANGE id_responsable id_responsable INT DEFAULT NULL, CHANGE idb_responsable idb_responsable INT DEFAULT NULL, CHANGE prct_rem prct_rem INT DEFAULT NULL, CHANGE id_statut_devis id_statut_devis INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_cout CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_date_payment CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_detail CHANGE id_devis id_devis INT DEFAULT NULL, CHANGE idb_devis idb_devis INT DEFAULT NULL, CHANGE id_parent id_parent INT DEFAULT NULL, CHANGE idb_parent idb_parent INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL, CHANGE idb_produit idb_produit INT DEFAULT NULL, CHANGE quantite quantite DOUBLE PRECISION DEFAULT NULL, CHANGE prct_rem prct_rem INT DEFAULT NULL, CHANGE id_responsable id_responsable INT DEFAULT NULL, CHANGE idb_responsable idb_responsable INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_devis_detail_calcul CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_facturation_prev CHANGE id_devis id_devis INT DEFAULT NULL, CHANGE cli_prct_reglement cli_prct_reglement INT DEFAULT NULL, CHANGE four_prct_reglement four_prct_reglement INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_devis_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_doc CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 9_doc_ref CHANGE id_max id_max INT NOT NULL');
        $this->addSql('ALTER TABLE 5_doc_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_doc_type CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_dos_date_fac_detail_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_encaiss_decaiss CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_encaissement CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_encaissement_treso CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_fac_md_act_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_fac_md_dos_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_fac_md_ed_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_facture CHANGE id id INT NOT NULL, CHANGE total_ht total_ht VARCHAR(50) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_facture_date_reglement CHANGE id_facture id_facture INT DEFAULT NULL, CHANGE idb_facture idb_facture INT DEFAULT NULL, CHANGE _reglement _reglement INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_facture_detail CHANGE id_facture id_facture INT DEFAULT NULL, CHANGE idb_facture idb_facture INT DEFAULT NULL, CHANGE id_affaire id_affaire INT DEFAULT NULL, CHANGE idb_affaire idb_affaire INT DEFAULT NULL, CHANGE id_detail_affaire id_detail_affaire INT DEFAULT NULL, CHANGE idb_detail_affaire idb_detail_affaire INT DEFAULT NULL, CHANGE id_detail_devis_ref id_detail_devis_ref INT DEFAULT NULL, CHANGE idb_detail_devis_ref idb_detail_devis_ref INT DEFAULT NULL, CHANGE id_cat_produit id_cat_produit INT DEFAULT NULL, CHANGE idb_cat_produit idb_cat_produit INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL, CHANGE idb_produit idb_produit INT DEFAULT NULL, CHANGE nbe_jours nbe_jours DOUBLE PRECISION DEFAULT NULL, CHANGE nbe_heures nbe_heures INT DEFAULT NULL, CHANGE quantite quantite DOUBLE PRECISION DEFAULT NULL, CHANGE _rem _rem INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_facture_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formateur_competence CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formateur_competence1 CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formateur_formation CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formateur_niveau_maitrise CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formateur_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_action CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_action_cout CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_action_detail CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_catalogue CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier_action CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier_date CHANGE nb_h nb_h DOUBLE PRECISION DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_doc_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_statut_doc CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_type CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_niveau CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_sous_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 2_mail CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_type_mail id_type_mail INT DEFAULT NULL, CHANGE idb_type_mail idb_type_mail INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_mouvement_divers CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_ndf CHANGE id_responsable id_responsable INT DEFAULT NULL, CHANGE idb_responsable idb_responsable INT DEFAULT NULL, CHANGE id_mode_reglement id_mode_reglement INT DEFAULT NULL, CHANGE idb_mode_reglement idb_mode_reglement INT DEFAULT NULL, CHANGE id_mode_reglement_avances id_mode_reglement_avances INT DEFAULT NULL, CHANGE idb_mode_reglement_avances idb_mode_reglement_avances INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_ndf_detail CHANGE id_ndf id_ndf INT DEFAULT NULL, CHANGE idb_ndf idb_ndf INT DEFAULT NULL, CHANGE id_type_frais id_type_frais INT DEFAULT NULL, CHANGE idb_type_frais idb_type_frais INT DEFAULT NULL, CHANGE id_affaire id_affaire INT DEFAULT NULL, CHANGE idb_affaire idb_affaire INT DEFAULT NULL, CHANGE id_detail_affaire id_detail_affaire INT DEFAULT NULL, CHANGE idb_detail_affaire idb_detail_affaire INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        //$this->addSql('DROP INDEX texte_note ON 1_note');
        $this->addSql('ALTER TABLE 1_note CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        //$this->addSql('CREATE INDEX texte_note ON 1_note (texte_note)');
        $this->addSql('ALTER TABLE 5_note_action CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_note_action_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_pays CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_produit CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_produits_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_recurrence CHANGE no_jour_mois no_jour_mois TINYINT(1) DEFAULT NULL, CHANGE no_mois no_mois TINYINT(1) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_recurrence_log CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_region CHANGE id_pays id_pays INT DEFAULT NULL, CHANGE idb_pays idb_pays INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_secteur_activite CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE 1_structure CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 9_tables CHANGE id_max id_max INT NOT NULL');
        $this->addSql('ALTER TABLE 2_telephone CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_type_tel id_type_tel INT DEFAULT NULL, CHANGE idb_type_tel idb_type_tel INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_treso CHANGE num_cybergest num_cybergest INT DEFAULT NULL, CHANGE id_periode_declaration id_periode_declaration INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_tva CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_type_mail CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_type_tel CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_type_url CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_unite_mesure CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 2_url CHANGE id id INT NOT NULL, CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_type_url id_type_url INT DEFAULT NULL, CHANGE idb_type_url idb_type_url INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        //$this->addSql('ALTER TABLE utilisateur ADD username VARCHAR(180) NOT NULL, ADD roles JSON NOT NULL');
       // $this->addSql('CREATE UNIQUE INDEX UNIQ_1D1C63B3F85E0677 ON utilisateur (username)');
        $this->addSql('ALTER TABLE 5_ville CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE user');
        $this->addSql('ALTER TABLE 1_activite CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_affaire CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_affaire_detail CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_avoir CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE total_ht total_ht VARCHAR(50) CHARACTER SET utf8 DEFAULT \'0\' COLLATE `utf8_general_ci`, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_banque CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_competence CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_contact CHANGE actif actif TINYINT(1) DEFAULT \'0\', CHANGE delais_reponse_opca delais_reponse_opca TINYINT(1) DEFAULT NULL, CHANGE delais_rglmt_opca delais_rglmt_opca TINYINT(1) DEFAULT NULL, CHANGE delais_encaiss_opca delais_encaiss_opca TINYINT(1) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_cout CHANGE id_cat id_cat INT DEFAULT 0, CHANGE idb_cat idb_cat INT DEFAULT 0, CHANGE id_sous_cat id_sous_cat INT DEFAULT 0, CHANGE idb_sous_cat idb_sous_cat INT DEFAULT 0, CHANGE id_fournisseur id_fournisseur INT DEFAULT 0, CHANGE idb_fournisseur idb_fournisseur INT DEFAULT 0, CHANGE id_dossier id_dossier INT DEFAULT 0, CHANGE idb_dossier idb_dossier INT DEFAULT 0, CHANGE id_action id_action INT DEFAULT 0, CHANGE idb_action idb_action INT DEFAULT 0, CHANGE id_note_de_frais id_note_de_frais INT DEFAULT 0, CHANGE idb_note_de_frais idb_note_de_frais INT DEFAULT 0, CHANGE id_etat id_etat INT DEFAULT 0, CHANGE idb_etat idb_etat INT DEFAULT 0, CHANGE id_tx_tva id_tx_tva DOUBLE PRECISION DEFAULT \'0\', CHANGE idb_tx_tva idb_tx_tva DOUBLE PRECISION DEFAULT \'0\', CHANGE id_mode_reglmnt id_mode_reglmnt INT DEFAULT 0, CHANGE idb_mode_reglmnt idb_mode_reglmnt INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_cout_treso CHANGE id_cout id_cout INT DEFAULT 0, CHANGE idb_cout idb_cout INT DEFAULT 0, CHANGE id_treso id_treso INT DEFAULT 0, CHANGE idb_treso idb_treso INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE type type TINYINT(1) DEFAULT NULL, CHANGE id_contact id_contact INT DEFAULT 0, CHANGE idb_contact idb_contact INT DEFAULT 0, CHANGE id_affaire id_affaire INT DEFAULT 0, CHANGE idb_affaire idb_affaire INT DEFAULT 0, CHANGE id_responsable id_responsable INT DEFAULT 0, CHANGE idb_responsable idb_responsable INT DEFAULT 0, CHANGE prct_rem prct_rem INT DEFAULT 0, CHANGE id_statut_devis id_statut_devis INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_cout CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_date_payment CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_detail CHANGE id_devis id_devis INT DEFAULT 0, CHANGE idb_devis idb_devis INT DEFAULT 0, CHANGE id_parent id_parent INT DEFAULT 0, CHANGE idb_parent idb_parent INT DEFAULT 0, CHANGE id_produit id_produit INT DEFAULT 0, CHANGE idb_produit idb_produit INT DEFAULT 0, CHANGE quantite quantite DOUBLE PRECISION DEFAULT \'0\', CHANGE prct_rem prct_rem INT DEFAULT 0, CHANGE id_responsable id_responsable INT DEFAULT 0, CHANGE idb_responsable idb_responsable INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_devis_facturation_prev CHANGE id_devis id_devis INT DEFAULT 0, CHANGE cli_prct_reglement cli_prct_reglement INT DEFAULT 0, CHANGE four_prct_reglement four_prct_reglement INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_doc CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_encaiss_decaiss CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_encaissement CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_encaissement_treso CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_facture CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE total_ht total_ht VARCHAR(50) CHARACTER SET utf8 DEFAULT \'0\' COLLATE `utf8_general_ci`, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_facture_date_reglement CHANGE id_facture id_facture INT DEFAULT 0, CHANGE idb_facture idb_facture INT DEFAULT 0, CHANGE _reglement _reglement INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_facture_detail CHANGE id_facture id_facture INT DEFAULT 0, CHANGE idb_facture idb_facture INT DEFAULT 0, CHANGE id_affaire id_affaire INT DEFAULT 0, CHANGE idb_affaire idb_affaire INT DEFAULT 0, CHANGE id_detail_affaire id_detail_affaire INT DEFAULT 0, CHANGE idb_detail_affaire idb_detail_affaire INT DEFAULT 0, CHANGE id_detail_devis_ref id_detail_devis_ref INT DEFAULT 0, CHANGE idb_detail_devis_ref idb_detail_devis_ref INT DEFAULT 0, CHANGE id_cat_produit id_cat_produit INT DEFAULT 0, CHANGE idb_cat_produit idb_cat_produit INT DEFAULT 0, CHANGE id_produit id_produit INT DEFAULT 0, CHANGE idb_produit idb_produit INT DEFAULT 0, CHANGE nbe_jours nbe_jours DOUBLE PRECISION DEFAULT \'0\', CHANGE nbe_heures nbe_heures INT DEFAULT 0, CHANGE quantite quantite DOUBLE PRECISION DEFAULT \'0\', CHANGE _rem _rem INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formateur_competence CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formateur_competence1 CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formateur_formation CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_action CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_action_cout CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_action_detail CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_catalogue CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier_action CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier_date CHANGE nb_h nb_h DOUBLE PRECISION DEFAULT \'0\', CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_mouvement_divers CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_ndf CHANGE id_responsable id_responsable INT DEFAULT 0, CHANGE idb_responsable idb_responsable INT DEFAULT 0, CHANGE id_mode_reglement id_mode_reglement INT DEFAULT 0, CHANGE idb_mode_reglement idb_mode_reglement INT DEFAULT 0, CHANGE id_mode_reglement_avances id_mode_reglement_avances INT DEFAULT 0, CHANGE idb_mode_reglement_avances idb_mode_reglement_avances INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_ndf_detail CHANGE id_ndf id_ndf INT DEFAULT 0, CHANGE idb_ndf idb_ndf INT DEFAULT 0, CHANGE id_type_frais id_type_frais INT DEFAULT 0, CHANGE idb_type_frais idb_type_frais INT DEFAULT 0, CHANGE id_affaire id_affaire INT DEFAULT 0, CHANGE idb_affaire idb_affaire INT DEFAULT 0, CHANGE id_detail_affaire id_detail_affaire INT DEFAULT 0, CHANGE idb_detail_affaire idb_detail_affaire INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        //$this->addSql('DROP INDEX texte_note ON 1_note');
        $this->addSql('ALTER TABLE 1_note CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        //$this->addSql('CREATE INDEX texte_note ON 1_note (texte_note(100))');
        $this->addSql('ALTER TABLE 1_produit CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_recurrence CHANGE no_jour_mois no_jour_mois TINYINT(1) DEFAULT NULL, CHANGE no_mois no_mois TINYINT(1) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_recurrence_log CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_structure CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_treso CHANGE num_cybergest num_cybergest INT DEFAULT 0, CHANGE id_periode_declaration id_periode_declaration INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 2_adresse CHANGE id_contact id_contact INT DEFAULT 0, CHANGE idb_contact idb_contact INT DEFAULT 0, CHANGE id_ville id_ville INT DEFAULT 0, CHANGE id_region id_region INT DEFAULT 0, CHANGE id_pays id_pays INT DEFAULT 0, CHANGE id_type_adresse id_type_adresse INT DEFAULT 0, CHANGE idb_type_adresse idb_type_adresse INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 2_mail CHANGE id_contact id_contact INT DEFAULT 0, CHANGE idb_contact idb_contact INT DEFAULT 0, CHANGE id_type_mail id_type_mail INT DEFAULT 0, CHANGE idb_type_mail idb_type_mail INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 2_telephone CHANGE id_contact id_contact INT DEFAULT 0, CHANGE idb_contact idb_contact INT DEFAULT 0, CHANGE id_type_tel id_type_tel INT DEFAULT 0, CHANGE idb_type_tel idb_type_tel INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 2_url CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE id_contact id_contact INT DEFAULT 0, CHANGE idb_contact idb_contact INT DEFAULT 0, CHANGE id_type_url id_type_url INT DEFAULT 0, CHANGE idb_type_url idb_type_url INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_contact_lnk CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE 3_dos_date_fac_detail_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_fac_md_act_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_fac_md_dos_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 3_fac_md_ed_lnk CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_affaires_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_competence_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_competence_sous_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_cond_rglmnt CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_contact_cat CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_contact_fonction CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_contact_lnk_type CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_devis_detail_calcul CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_devis_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_doc_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_doc_type CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_facture_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formateur_niveau_maitrise CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formateur_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_doc_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_statut_doc CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_dossier_type CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_niveau CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_formation_sous_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_note_action CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_note_action_statut CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_pays CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_produits_categorie CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_region CHANGE id_pays id_pays INT DEFAULT 0, CHANGE idb_pays idb_pays INT DEFAULT 0, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_secteur_activite CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE 5_tva CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_type_mail CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_type_tel CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_type_url CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_unite_mesure CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 5_ville CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE 9_doc_ref CHANGE id_max id_max INT DEFAULT 0 NOT NULL');
        $this->addSql('ALTER TABLE 9_tables CHANGE id_max id_max INT DEFAULT 0 NOT NULL');
        //$this->addSql('DROP INDEX UNIQ_1D1C63B3F85E0677 ON utilisateur');
        //$this->addSql('ALTER TABLE utilisateur DROP username, DROP roles');
    }
}
