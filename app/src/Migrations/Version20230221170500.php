<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230221170500 extends AbstractMigration
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
        $this->addSql('ALTER TABLE 1_formation_dossier DROP ref_bck_01, DROP date_add_bck_01');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8E173B1B8 FOREIGN KEY (id_client) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8D3D97379 FOREIGN KEY (id_commercial) REFERENCES 1_collaborateur (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8E9B525B1 FOREIGN KEY (id_opca) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8C3534552 FOREIGN KEY (id_statut) REFERENCES 5_formation_dossier_statut (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD CONSTRAINT FK_EB25D8C8EF348BCD FOREIGN KEY (id_structure) REFERENCES 1_structure (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier_date ADD CONSTRAINT FK_4E32DB21E3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire ADD CONSTRAINT FK_76786587E3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire ADD CONSTRAINT FK_76786587CF574B16 FOREIGN KEY (id_stagiaire) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 1_formation_suivi_ordredemission ADD CONSTRAINT FK_3A796FABCAA0AE9 FOREIGN KEY (idFormation) REFERENCES 1_dossier (id)');
        $this->addSql('DROP INDEX IDX_2A5E08B961FB397F ON 1_note');
        $this->addSql('ALTER TABLE 1_note DROP id_action');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B946D7FEF9 FOREIGN KEY (id_user_add) REFERENCES utilisateur (IDUTILISATEUR)');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B9997C10B1 FOREIGN KEY (id_action_statut) REFERENCES 5_note_action_statut (id)');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B962899312 FOREIGN KEY (id_nom_action) REFERENCES 5_note_action (id)');
        $this->addSql('ALTER TABLE 1_note ADD CONSTRAINT FK_2A5E08B93A8C5A58 FOREIGN KEY (id_user_action) REFERENCES utilisateur (IDUTILISATEUR)');
        $this->addSql('ALTER TABLE 2_adresse ADD CONSTRAINT FK_34FBCAF8EB7E67E3 FOREIGN KEY (type_adresse) REFERENCES contact_adresse_type (id_type_adresse)');
        $this->addSql('ALTER TABLE 2_adresse ADD CONSTRAINT FK_34FBCAF892FF4F48 FOREIGN KEY (id_contact) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 2_mail ADD CONSTRAINT FK_32512C4B92FF4F48 FOREIGN KEY (id_contact) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE 5_ville CHANGE idb idb INT NOT NULL');
        $this->addSql('ALTER TABLE contact_custom ADD origine VARCHAR(50) DEFAULT NULL, ADD statutlead VARCHAR(50) DEFAULT NULL, ADD numero VARCHAR(14) DEFAULT NULL, ADD adresseEmail VARCHAR(50) DEFAULT NULL, ADD ville VARCHAR(50) DEFAULT NULL, ADD statusclient VARCHAR(50) DEFAULT NULL, CHANGE nom_str nom_str VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE formation_dossier_stagiaire_dossier ADD CONSTRAINT FK_ADB8DB6AE3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_dossier (id)');
        $this->addSql('ALTER TABLE gestion_de_salle CHANGE salle_name nom_prenom VARCHAR(255) NOT NULL');
        $this->addSql('CREATE INDEX id ON gestion_de_salle (id)');
        $this->addSql('ALTER TABLE gestion_sceance DROP INDEX createdid, ADD INDEX IDX_85DBDA07C620D7F2 (createdid)');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY fk_dossier_id');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY gestion_sceance_ibfk_1');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY gestion_sceance_ibfk_2');
        $this->addSql('DROP INDEX dossier_id ON gestion_sceance');
        $this->addSql('ALTER TABLE gestion_sceance ADD dossier_id_id INT NOT NULL, DROP lastupdate, CHANGE dossier_id dossier_id VARCHAR(255) NOT NULL, CHANGE intitule intitule INT NOT NULL, CHANGE participants_number participants_number VARCHAR(255) NOT NULL, CHANGE status status TIME NOT NULL');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT FK_85DBDA07B6C48410 FOREIGN KEY (dossier_id_id) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT FK_85DBDA079C5AA08F FOREIGN KEY (lastupdateby) REFERENCES user (id)');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT FK_85DBDA07C620D7F2 FOREIGN KEY (createdid) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_85DBDA07B6C48410 ON gestion_sceance (dossier_id_id)');
        $this->addSql('ALTER TABLE gestion_sceance RENAME INDEX lastupdateby TO IDX_85DBDA079C5AA08F');
        $this->addSql('ALTER TABLE lead CHANGE societe societe LONGTEXT NOT NULL, CHANGE civilite civilite INT NOT NULL, CHANGE nom nom VARCHAR(255) NOT NULL, CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE telephone telephone VARCHAR(255) NOT NULL, CHANGE email email VARCHAR(255) NOT NULL, CHANGE commercial_id commercial_id INT DEFAULT NULL, CHANGE origine origine VARCHAR(255) NOT NULL, CHANGE statut statut VARCHAR(255) NOT NULL, CHANGE formation formation VARCHAR(255) NOT NULL, CHANGE periode periode VARCHAR(255) NOT NULL, CHANGE typerequest typerequest VARCHAR(255) NOT NULL, CHANGE message message VARCHAR(255) DEFAULT NULL, CHANGE financement financement VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE lead ADD CONSTRAINT FK_289161CB7854071C FOREIGN KEY (commercial_id) REFERENCES 1_collaborateur (id)');
        $this->addSql('CREATE INDEX IDX_289161CB7854071C ON lead (commercial_id)');
        $this->addSql('ALTER TABLE log DROP INDEX idutilisateur, ADD INDEX IDX_8F3F68C5DBDD131C (idutilisateur)');
        $this->addSql('DROP INDEX idutilisateur_2 ON log');
        $this->addSql('ALTER TABLE log ADD CONSTRAINT FK_8F3F68C5DBDD131C FOREIGN KEY (idutilisateur) REFERENCES utilisateur (IDUTILISATEUR)');
        $this->addSql('ALTER TABLE propal CHANGE durrej durrej DOUBLE PRECISION DEFAULT NULL, CHANGE typepropal typepropal VARCHAR(255) DEFAULT NULL, CHANGE fiabilite fiabilite VARCHAR(255) DEFAULT NULL, CHANGE typeendroit typeendroit VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D936783FE FOREIGN KEY (statutpropal_id) REFERENCES 5_devis_statut (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D4E95831F FOREIGN KEY (entitypropal_id) REFERENCES 1_structure (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75DC2870F9A FOREIGN KEY (clientpropal_id) REFERENCES 1_contact (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D50652D1E FOREIGN KEY (commercialpropal_id) REFERENCES 1_collaborateur (id)');
        $this->addSql('ALTER TABLE propal ADD CONSTRAINT FK_36A4E75D5200282E FOREIGN KEY (formation_id) REFERENCES 1_competence (id)');
        $this->addSql('ALTER TABLE stagiaire_formation_dossier ADD CONSTRAINT FK_F69D28B1E3D54947 FOREIGN KEY (id_dossier) REFERENCES 1_formation_dossier (id)');
        $this->addSql('ALTER TABLE user ADD stop_id INT NOT NULL, CHANGE roles roles JSON NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6493902063D FOREIGN KEY (stop_id) REFERENCES gestion_sceance (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6493902063D ON user (stop_id)');
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
        $this->addSql('ALTER TABLE 1_formation_dossier ADD ref_bck_01 VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`, ADD date_add_bck_01 VARCHAR(50) CHARACTER SET utf8 DEFAULT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE 1_formation_dossier_date DROP FOREIGN KEY FK_4E32DB21E3D54947');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire DROP FOREIGN KEY FK_76786587E3D54947');
        $this->addSql('ALTER TABLE 1_formation_dossier_stagiaire DROP FOREIGN KEY FK_76786587CF574B16');
        $this->addSql('ALTER TABLE 1_formation_suivi_ordredemission DROP FOREIGN KEY FK_3A796FABCAA0AE9');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B946D7FEF9');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B9997C10B1');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B962899312');
        $this->addSql('ALTER TABLE 1_note DROP FOREIGN KEY FK_2A5E08B93A8C5A58');
        $this->addSql('ALTER TABLE 1_note ADD id_action INT DEFAULT NULL');
        $this->addSql('CREATE INDEX IDX_2A5E08B961FB397F ON 1_note (id_action)');
        $this->addSql('ALTER TABLE 2_adresse DROP FOREIGN KEY FK_34FBCAF8EB7E67E3');
        $this->addSql('ALTER TABLE 2_adresse DROP FOREIGN KEY FK_34FBCAF892FF4F48');
        $this->addSql('ALTER TABLE 2_mail DROP FOREIGN KEY FK_32512C4B92FF4F48');
        $this->addSql('ALTER TABLE 5_ville CHANGE idb idb INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact_custom DROP origine, DROP statutlead, DROP numero, DROP adresseEmail, DROP ville, DROP statusclient, CHANGE nom_str nom_str VARCHAR(400) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE formation_dossier_stagiaire_dossier DROP FOREIGN KEY FK_ADB8DB6AE3D54947');
        $this->addSql('DROP INDEX id ON gestion_de_salle');
        $this->addSql('ALTER TABLE gestion_de_salle CHANGE nom_prenom salle_name VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE gestion_sceance DROP INDEX IDX_85DBDA07C620D7F2, ADD UNIQUE INDEX createdid (createdid)');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY FK_85DBDA07B6C48410');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY FK_85DBDA079C5AA08F');
        $this->addSql('ALTER TABLE gestion_sceance DROP FOREIGN KEY FK_85DBDA07C620D7F2');
        $this->addSql('DROP INDEX IDX_85DBDA07B6C48410 ON gestion_sceance');
        $this->addSql('ALTER TABLE gestion_sceance ADD lastupdate DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL, DROP dossier_id_id, CHANGE dossier_id dossier_id INT NOT NULL, CHANGE intitule intitule VARCHAR(255) CHARACTER SET utf8 NOT NULL COLLATE `utf8_general_ci`, CHANGE participants_number participants_number INT NOT NULL, CHANGE status status VARCHAR(255) CHARACTER SET utf8 DEFAULT \'Validée\' NOT NULL COLLATE `utf8_general_ci`');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT fk_dossier_id FOREIGN KEY (dossier_id) REFERENCES 1_formation_dossier (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT gestion_sceance_ibfk_1 FOREIGN KEY (lastupdateby) REFERENCES utilisateur (IDUTILISATEUR) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE gestion_sceance ADD CONSTRAINT gestion_sceance_ibfk_2 FOREIGN KEY (createdid) REFERENCES utilisateur (IDUTILISATEUR) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE INDEX dossier_id ON gestion_sceance (dossier_id)');
        $this->addSql('ALTER TABLE gestion_sceance RENAME INDEX idx_85dbda079c5aa08f TO lastupdateby');
        $this->addSql('ALTER TABLE lead DROP FOREIGN KEY FK_289161CB7854071C');
        $this->addSql('DROP INDEX IDX_289161CB7854071C ON lead');
        $this->addSql('ALTER TABLE lead CHANGE commercial_id commercial_id VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE societe societe VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE civilite civilite VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE nom nom VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE prenom prenom VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE telephone telephone VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE email email VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE origine origine VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE statut statut VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE formation formation VARCHAR(65) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE periode periode VARCHAR(65) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE typerequest typerequest VARCHAR(65) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE message message TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, CHANGE financement financement VARCHAR(65) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE log DROP FOREIGN KEY FK_8F3F68C5DBDD131C');
        $this->addSql('CREATE INDEX idutilisateur_2 ON log (idutilisateur)');
        $this->addSql('ALTER TABLE log RENAME INDEX idx_8f3f68c5dbdd131c TO idutilisateur');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D936783FE');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D4E95831F');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75DC2870F9A');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D50652D1E');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D5200282E');
        $this->addSql('ALTER TABLE propal CHANGE durrej durrej INT DEFAULT NULL, CHANGE typepropal typepropal VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE typeendroit typeendroit VARCHAR(65) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fiabilite fiabilite VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stagiaire_formation_dossier DROP FOREIGN KEY FK_F69D28B1E3D54947');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493902063D');
        $this->addSql('DROP INDEX IDX_8D93D6493902063D ON user');
        $this->addSql('ALTER TABLE user DROP stop_id, CHANGE roles roles TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
