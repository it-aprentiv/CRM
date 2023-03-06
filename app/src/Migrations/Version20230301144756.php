<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230301144756 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');
        $this->addSql('DROP INDEX IDX_9A609D13155D8F51 ON sessions');
        $this->addSql('ALTER TABLE sessions CHANGE formateur_id formateur_formation_id INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_9A609D138B564282 ON sessions (formateur_formation_id)');
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
        $this->addSql('ALTER TABLE 1_formation_dossier DROP FOREIGN KEY FK_EB25D8C8613FECDF');
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
        $this->addSql('ALTER TABLE sessions DROP FOREIGN KEY FK_9A609D138B564282');
        $this->addSql('DROP INDEX IDX_9A609D138B564282 ON sessions');
        $this->addSql('ALTER TABLE sessions CHANGE formateur_formation_id formateur_id INT NOT NULL');
        $this->addSql('CREATE INDEX IDX_9A609D13155D8F51 ON sessions (formateur_id)');
        $this->addSql('ALTER TABLE stagiaire_formation_dossier DROP FOREIGN KEY FK_F69D28B1E3D54947');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6493902063D');
        $this->addSql('ALTER TABLE utilisateur CHANGE roles roles TEXT CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`');
    }
}
