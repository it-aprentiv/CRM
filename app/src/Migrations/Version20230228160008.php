<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230228160008 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE 1_avoir ADD CONSTRAINT FK_CD1926E4E3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE 1_contact ADD CONSTRAINT FK_824B18135859357B FOREIGN KEY (id_formation_liee) REFERENCES 1_dossier (id)');
        $this->addSql('ALTER TABLE 1_contact ADD CONSTRAINT FK_824B181356D3F5A4 FOREIGN KEY (id_type_tructure) REFERENCES 1_structure (id)');
        $this->addSql('ALTER TABLE 1_contact ADD CONSTRAINT FK_824B1813E9B525B1 FOREIGN KEY (id_opca) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_contact ADD CONSTRAINT FK_824B1813D3D97379 FOREIGN KEY (id_commercial) REFERENCES 1_collaborateur (id)');
        $this->addSql('ALTER TABLE 1_contact ADD CONSTRAINT FK_824B18131A1FEFC2 FOREIGN KEY (contact_liee) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_dossier ADD CONSTRAINT FK_F3611E1CE173B1B8 FOREIGN KEY (id_client) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_dossier ADD CONSTRAINT FK_F3611E1C6D43C268 FOREIGN KEY (id_formateur) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_dossier ADD CONSTRAINT FK_F3611E1CC3534552 FOREIGN KEY (id_statut) REFERENCES 5_ordredemission_statut (id)');
        $this->addSql('ALTER TABLE 1_dossier ADD CONSTRAINT FK_F3611E1CEF348BCD FOREIGN KEY (id_structure) REFERENCES 1_structure (id)');
        $this->addSql('ALTER TABLE 1_facture ADD CONSTRAINT FK_30AF9A3B374C060 FOREIGN KEY (id_avoir_liee) REFERENCES 1_avoir (id)');
        $this->addSql('ALTER TABLE 1_facture ADD CONSTRAINT FK_30AF9A3BC3534552 FOREIGN KEY (id_statut) REFERENCES 5_facture_statut (id)');
        $this->addSql('ALTER TABLE 1_facture ADD CONSTRAINT FK_30AF9A3BE9B525B1 FOREIGN KEY (id_opca) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_facture ADD CONSTRAINT FK_30AF9A3B4A40C0F0 FOREIGN KEY (id_responsable) REFERENCES 1_collaborateur (id)');
        $this->addSql('ALTER TABLE 1_facture ADD CONSTRAINT FK_30AF9A3BE3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE 1_facture_domiciliation ADD CONSTRAINT FK_EC0F9703AADA89E1 FOREIGN KEY (payeur) REFERENCES 5_payeur (id)');
        $this->addSql('ALTER TABLE 1_facture_domiciliation ADD CONSTRAINT FK_EC0F970378FC8B04 FOREIGN KEY (iddom) REFERENCES 1_domiciliation (id)');
        $this->addSql('ALTER TABLE 1_formation_catalogue ADD CONSTRAINT FK_E2800A74EF348BCD FOREIGN KEY (id_structure) REFERENCES 1_structure (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8E173B1B8 FOREIGN KEY (id_client) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8D3D97379 FOREIGN KEY (id_commercial) REFERENCES 1_collaborateur (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8E9B525B1 FOREIGN KEY (id_opca) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8C3534552 FOREIGN KEY (id_statut) REFERENCES 5_formation_dossier_statut (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8EF348BCD FOREIGN KEY (id_structure) REFERENCES 1_structure (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier_date ADD CONSTRAINT FK_4E32DB21E3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire ADD CONSTRAINT FK_76786587E3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire ADD CONSTRAINT FK_76786587CF574B16 FOREIGN KEY (id_stagiaire) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_formation_suivi_ordredemission ADD CONSTRAINT FK_3A796FABCAA0AE9 FOREIGN KEY (idFormation) REFERENCES 1_dossier (id)');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B946D7FEF9 FOREIGN KEY (id_user_add) REFERENCES utilisateur (IDUTILISATEUR)');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B9997C10B1 FOREIGN KEY (id_action_statut) REFERENCES 5_note_action_statut (id)');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B962899312 FOREIGN KEY (id_nom_action) REFERENCES 5_note_action (id)');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B93A8C5A58 FOREIGN KEY (id_user_action) REFERENCES utilisateur (IDUTILISATEUR)');
        $this->addSql('ALTER TABLE 2_adresse ADD CONSTRAINT FK_34FBCAF8EB7E67E3 FOREIGN KEY (type_adresse) REFERENCES contact_adresse_type (id_type_adresse)');
        $this->addSql('ALTER TABLE 2_adresse ADD CONSTRAINT FK_34FBCAF892FF4F48 FOREIGN KEY (id_contact) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 2_mail ADD CONSTRAINT FK_32512C4B92FF4F48 FOREIGN KEY (id_contact) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE formation_dossier_stagiaire_dossier ADD CONSTRAINT FK_ADB8DB6AE3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_dossier (id)');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT FK_85DBDA07B6C48410 FOREIGN KEY (dossier_id_id) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT FK_85DBDA079C5AA08F FOREIGN KEY (lastupdateby) REFERENCES user (id)');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT FK_85DBDA07C620D7F2 FOREIGN KEY (createdid) REFERENCES user (id)');
        $this->addSql('ALTER TABLE lead ADD CONSTRAINT FK_289161CB7854071C FOREIGN KEY (commercial_id) REFERENCES 1_collaborateur (id)');
        $this->addSql('ALTER TABLE log ADD CONSTRAINT FK_8F3F68C5DBDD131C FOREIGN KEY (idutilisateur) REFERENCES utilisateur (IDUTILISATEUR)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D936783FE FOREIGN KEY (statutpropal_id) REFERENCES 5_devis_statut (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D4E95831F FOREIGN KEY (entitypropal_id) REFERENCES 1_structure (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75DC2870F9A FOREIGN KEY (clientpropal_id) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D50652D1E FOREIGN KEY (commercialpropal_id) REFERENCES 1_collaborateur (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D5200282E FOREIGN KEY (formation_id) REFERENCES 1_competence (id)');
        $this->addSql('ALTER TABLE stagiaire_formation_dossier ADD CONSTRAINT FK_F69D28B1E3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493902063D FOREIGN KEY (stop_id) REFERENCES gestion_sceance (id)');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles JSON NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE 1_avoir DROP FOREIGN KEY FK_CD1926E4E3D54947');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B18135859357B');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B181356D3F5A4');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B1813E9B525B1');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B1813D3D97379');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B18131A1FEFC2');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1CE173B1B8');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1C6D43C268');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1CC3534552');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1CEF348BCD');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3B374C060');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3BC3534552');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3BE9B525B1');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3B4A40C0F0');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3BE3D54947');
        $this->addSql('ALTER TABLE 1_facture_domiciliation DROP FOREIGN KEY FK_EC0F9703AADA89E1');
        $this->addSql('ALTER TABLE 1_facture_domiciliation DROP FOREIGN KEY FK_EC0F970378FC8B04');
        $this->addSql('ALTER TABLE 1_formation_catalogue DROP FOREIGN KEY FK_E2800A74EF348BCD');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8E173B1B8');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8D3D97379');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8E9B525B1');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8C3534552');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8EF348BCD');
        $this->addSql('ALTER TABLE 1_formation_dossier_date DROP FOREIGN KEY FK_4E32DB21E3D54947');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire DROP FOREIGN KEY FK_76786587E3D54947');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire DROP FOREIGN KEY FK_76786587CF574B16');
        $this->addSql('ALTER TABLE 1_formation_suivi_ordredemission DROP FOREIGN KEY FK_3A796FABCAA0AE9');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B946D7FEF9');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B9997C10B1');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B962899312');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B93A8C5A58');
        $this->addSql('ALTER TABLE 2_adresse DROP FOREIGN KEY FK_34FBCAF8EB7E67E3');
        $this->addSql('ALTER TABLE 2_adresse DROP FOREIGN KEY FK_34FBCAF892FF4F48');
        $this->addSql('ALTER TABLE 2_mail DROP FOREIGN KEY FK_32512C4B92FF4F48');
        $this->addSql('ALTER TABLE formation_dossier_stagiaire_dossier DROP FOREIGN KEY FK_ADB8DB6AE3D54947');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY FK_85DBDA07B6C48410');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY FK_85DBDA079C5AA08F');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY FK_85DBDA07C620D7F2');
        $this->addSql('ALTER TABLE lead DROP FOREIGN KEY FK_289161CB7854071C');
        $this->addSql('ALTER TABLE log DROP FOREIGN KEY FK_8F3F68C5DBDD131C');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D936783FE');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D4E95831F');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75DC2870F9A');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D50652D1E');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D5200282E');
        $this->addSql('ALTER TABLE stagiaire_formation_dossier DROP FOREIGN KEY FK_F69D28B1E3D54947');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493902063D');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
