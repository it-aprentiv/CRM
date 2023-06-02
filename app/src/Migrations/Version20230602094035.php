<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230602094035 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE msyscompacterror');
        $this->addSql('DROP INDEX nom_str ON 1_contact');
        $this->addSql('ALTER TABLE 1_contact ADD statusclient VARCHAR(50) DEFAULT NULL, DROP delaiOpco, CHANGE nom_str nom_str VARCHAR(200) DEFAULT NULL');
        $this->addSql('CREATE INDEX nom_str ON 1_contact (nom_str)');
        $this->addSql('ALTER TABLE 1_domiciliation CHANGE signature signature DATE NOT NULL');
        $this->addSql('ALTER TABLE 1_facture DROP delaisdepaiement');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD session_id INT DEFAULT NULL, DROP ref_bck_01, DROP date_add_bck_01');
        $this->addSql('CREATE INDEX IDX_EB25D8C8613FECDF ON 1_formation_dossier (session_id)');
        $this->addSql('DROP INDEX IDX_2A5E08B961FB397F ON 1_note');
        $this->addSql('ALTER TABLE 1_note DROP id_action');
        $this->addSql('ALTER TABLE 5_ville CHANGE idb idb INT NOT NULL');
        $this->addSql('ALTER TABLE contact_custom ADD origine VARCHAR(50) DEFAULT NULL, ADD statutlead VARCHAR(50) DEFAULT NULL, ADD numero VARCHAR(14) DEFAULT NULL, ADD adresseEmail VARCHAR(50) DEFAULT NULL, ADD ville VARCHAR(50) DEFAULT NULL, ADD statusclient VARCHAR(50) DEFAULT NULL, CHANGE nom_str nom_str VARCHAR(200) DEFAULT NULL');
        $this->addSql('ALTER TABLE lead ADD formation VARCHAR(255) NOT NULL, ADD periode VARCHAR(255) NOT NULL, ADD typerequest VARCHAR(255) NOT NULL, ADD message VARCHAR(255) DEFAULT NULL, ADD financement VARCHAR(255) NOT NULL, CHANGE societe societe LONGTEXT DEFAULT NULL, CHANGE commercial_id commercial_id INT DEFAULT NULL, CHANGE origine origine VARCHAR(255) NOT NULL');
        $this->addSql('CREATE INDEX IDX_289161CB7854071C ON lead (commercial_id)');
        $this->addSql('ALTER TABLE log DROP INDEX idutilisateur, ADD INDEX IDX_8F3F68C5DBDD131C (idutilisateur)');
        $this->addSql('DROP INDEX idutilisateur_2 ON log');
        $this->addSql('ALTER TABLE propal ADD typeendroit VARCHAR(255) DEFAULT NULL, CHANGE durrej durrej DOUBLE PRECISION DEFAULT NULL, CHANGE typepropal typepropal VARCHAR(255) DEFAULT NULL, CHANGE fiabilite fiabilite VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD stop_id INT NOT NULL, CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
        $this->addSql('CREATE INDEX IDX_8D93D6493902063D ON user (stop_id)');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493902063D');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8613FECDF');
        $this->addSql('CREATE TABLE msyscompacterror (ErrorCode INT DEFAULT NULL, ErrorDescription LONGTEXT CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, ErrorRecid LONGBLOB DEFAULT NULL, ErrorTable VARCHAR(255) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE gestion_de_salle');
        $this->addSql('DROP TABLE gestion_sceance');
        $this->addSql('DROP TABLE sessions');
        $this->addSql('DROP TABLE thematiques_formations');
        $this->addSql('ALTER TABLE 1_avoir DROP FOREIGN KEY FK_CD1926E4EF348BCD');
        $this->addSql('ALTER TABLE 1_avoir DROP FOREIGN KEY FK_CD1926E492FF4F48');
        $this->addSql('ALTER TABLE 1_avoir DROP FOREIGN KEY FK_CD1926E4E9B525B1');
        $this->addSql('ALTER TABLE 1_avoir DROP FOREIGN KEY FK_CD1926E44A40C0F0');
        $this->addSql('ALTER TABLE 1_avoir DROP FOREIGN KEY FK_CD1926E4E3D54947');
        $this->addSql('ALTER TABLE 1_avoir CHANGE no_dossier_ref no_dossier_ref VARCHAR(50) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`');
        $this->addSql('ALTER TABLE 1_collaborateur DROP FOREIGN KEY FK_AB68FCE492FF4F48');
        $this->addSql('ALTER TABLE 1_competence DROP FOREIGN KEY FK_684195EF99B4DF6F');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B18137FE4B2B');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B18135859357B');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B181356D3F5A4');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B1813E9B525B1');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B1813D3D97379');
        $this->addSql('ALTER TABLE 1_contact DROP FOREIGN KEY FK_824B18131A1FEFC2');
        $this->addSql('DROP INDEX nom_str ON 1_contact');
        $this->addSql('ALTER TABLE 1_contact ADD delaiOpco INT DEFAULT NULL, DROP statusclient, CHANGE nom_str nom_str VARCHAR(400) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`');
        $this->addSql('CREATE INDEX nom_str ON 1_contact (nom_str(333))');
        $this->addSql('ALTER TABLE 1_domiciliation DROP FOREIGN KEY FK_77EF6DDDC7440455');
        $this->addSql('ALTER TABLE 1_domiciliation DROP FOREIGN KEY FK_77EF6DDD8CDE5729');
        $this->addSql('ALTER TABLE 1_domiciliation DROP FOREIGN KEY FK_77EF6DDD4E977E5C');
        $this->addSql('ALTER TABLE 1_domiciliation DROP FOREIGN KEY FK_77EF6DDDE564F0BF');
        $this->addSql('ALTER TABLE 1_domiciliation DROP FOREIGN KEY FK_77EF6DDD7653F3AE');
        $this->addSql('ALTER TABLE 1_domiciliation CHANGE signature signature DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1CE173B1B8');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1C6D43C268');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1CC3534552');
        $this->addSql('ALTER TABLE 1_dossier DROP FOREIGN KEY FK_F3611E1CEF348BCD');
        $this->addSql('ALTER TABLE 1_encaissement DROP FOREIGN KEY FK_EF05919EEF348BCD');
        $this->addSql('ALTER TABLE 1_encaissement_facture_liee DROP FOREIGN KEY FK_20F298E87E891CC2');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3B374C060');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3B92FF4F48');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3BC3534552');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3BE9B525B1');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3B4A40C0F0');
        $this->addSql('ALTER TABLE 1_facture DROP FOREIGN KEY FK_30AF9A3BE3D54947');
        $this->addSql('ALTER TABLE 1_facture ADD delaisdepaiement DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE 1_facture_domiciliation DROP FOREIGN KEY FK_EC0F9703AADA89E1');
        $this->addSql('ALTER TABLE 1_facture_domiciliation DROP FOREIGN KEY FK_EC0F970378FC8B04');
        $this->addSql('ALTER TABLE 1_formation_catalogue DROP FOREIGN KEY FK_E2800A74EF348BCD');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8E173B1B8');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8D3D97379');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8E9B525B1');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8C3534552');
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8EF348BCD');
        $this->addSql('DROP INDEX IDX_EB25D8C8613FECDF ON 1_formation_dossier');
        $this->addSql('ALTER TABLE 1_formation_dossier ADD ref_bck_01 VARCHAR(50) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, ADD date_add_bck_01 VARCHAR(50) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, DROP session_id');
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
        $this->addSql('ALTER TABLE lead DROP FOREIGN KEY FK_289161CB7854071C');
        $this->addSql('DROP INDEX IDX_289161CB7854071C ON lead');
        $this->addSql('ALTER TABLE lead DROP formation, DROP periode, DROP typerequest, DROP message, DROP financement, CHANGE commercial_id commercial_id VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE societe societe VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, CHANGE origine origine VARCHAR(255) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`');
        $this->addSql('ALTER TABLE log DROP FOREIGN KEY FK_8F3F68C5DBDD131C');
        $this->addSql('ALTER TABLE log DROP FOREIGN KEY FK_8F3F68C5DBDD131C');
        $this->addSql('CREATE INDEX idutilisateur_2 ON log (idutilisateur)');
        $this->addSql('DROP INDEX idx_8f3f68c5dbdd131c ON log');
        $this->addSql('CREATE INDEX idutilisateur ON log (idutilisateur)');
        $this->addSql('ALTER TABLE log ADD CONSTRAINT FK_8F3F68C5DBDD131C FOREIGN KEY (idutilisateur) REFERENCES utilisateur (IDUTILISATEUR)');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D936783FE');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D4E95831F');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75DC2870F9A');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D50652D1E');
        $this->addSql('ALTER TABLE propal DROP FOREIGN KEY FK_36A4E75D5200282E');
        $this->addSql('ALTER TABLE propal DROP typeendroit, CHANGE durrej durrej INT DEFAULT NULL, CHANGE typepropal typepropal VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE fiabilite fiabilite VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE stagiaire_formation_dossier DROP FOREIGN KEY FK_F69D28B1E3D54947');
        $this->addSql('DROP INDEX IDX_8D93D6493902063D ON user');
        $this->addSql('ALTER TABLE user DROP stop_id, CHANGE roles roles TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
