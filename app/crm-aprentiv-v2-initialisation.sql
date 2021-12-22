-- Bug : Table 3_contact_lnk has no primary key. Doctrine does not support reverse engineering from tables that don't have a primary key.
ALTER TABLE `3_contact_lnk` ADD PRIMARY KEY(` id `);

-- Bug : Table droitspecifique has no primary key. Doctrine does not support reverse engineering from tables that don't have a primary key.
ALTER TABLE `droitspecifique` ADD PRIMARY KEY( `utilisateur`, `menu`);

DROP TABLE msyscompacterror;

-- MAJ champ utilisateur`.DEBUTCONNECTION` / FINCONNECTION`
ALTER TABLE `utilisateur` CHANGE `DEBUTCONNECTION` `DEBUTCONNECTION` DATETIME NULL DEFAULT CURRENT_TIMESTAMP, CHANGE `FINCONNECTION` `FINCONNECTION` DATETIME NULL DEFAULT CURRENT_TIMESTAMP;

SET sql_mode = '';
ALTER TABLE `utilisateur` ENGINE=InnoDB;
ALTER TABLE `menu` ENGINE=InnoDB;
ALTER TABLE `assomenuutilisateur` ENGINE=InnoDB;
ALTER TABLE `9_tables` ENGINE=InnoDB;
ALTER TABLE `9_societe_liee` ENGINE=InnoDB;
ALTER TABLE `9_doc_ref` ENGINE=InnoDB;
ALTER TABLE `5_ville` ENGINE=InnoDB;
ALTER TABLE `5_unite_mesure` ENGINE=InnoDB;
ALTER TABLE `5_type_url` ENGINE=InnoDB;
ALTER TABLE `5_type_tel` ENGINE=InnoDB;
ALTER TABLE `5_type_mail` ENGINE=InnoDB;
ALTER TABLE `5_type_adresse` ENGINE=InnoDB;
ALTER TABLE `5_tva_declaration_periode` ENGINE=InnoDB;
ALTER TABLE `5_tva` ENGINE=InnoDB;
ALTER TABLE `5_titre` ENGINE=InnoDB;
ALTER TABLE `5_structure_type` ENGINE=InnoDB;
ALTER TABLE `5_structure_origine` ENGINE=InnoDB;
ALTER TABLE `5_stagiaire_statut` ENGINE=InnoDB;
ALTER TABLE `5_stagiaire_csp` ENGINE=InnoDB;
ALTER TABLE `5_secteur_activite` ENGINE=InnoDB;
ALTER TABLE `5_rglmnt_moyen` ENGINE=InnoDB;
ALTER TABLE `5_region` ENGINE=InnoDB;
ALTER TABLE `5_produits_categorie` ENGINE=InnoDB;
ALTER TABLE `5_pays` ENGINE=InnoDB;
ALTER TABLE `5_opca_note` ENGINE=InnoDB;
ALTER TABLE `5_note_action_statut` ENGINE=InnoDB;
ALTER TABLE `5_note_action` ENGINE=InnoDB;
ALTER TABLE `5_ndf_type_frais` ENGINE=InnoDB;
ALTER TABLE `5_ndf_etat` ENGINE=InnoDB;
ALTER TABLE `5_mouvement_type` ENGINE=InnoDB;
ALTER TABLE `5_formation_sous_categorie` ENGINE=InnoDB;
ALTER TABLE `5_formation_niveau` ENGINE=InnoDB;
ALTER TABLE `5_formation_dossier_type` ENGINE=InnoDB;
ALTER TABLE `5_formation_dossier_statut_doc` ENGINE=InnoDB;
ALTER TABLE `5_formation_dossier_statut` ENGINE=InnoDB;
ALTER TABLE `5_formation_dossier_doc_statut` ENGINE=InnoDB;
ALTER TABLE `5_formation_categorie` ENGINE=InnoDB;
ALTER TABLE `5_formateur_statut` ENGINE=InnoDB;
ALTER TABLE `5_formateur_niveau_maitrise` ENGINE=InnoDB;
ALTER TABLE `5_facture_statut` ENGINE=InnoDB;
ALTER TABLE `5_doc_type` ENGINE=InnoDB;
ALTER TABLE `5_doc_statut` ENGINE=InnoDB;
ALTER TABLE `5_devis_statut` ENGINE=InnoDB;
ALTER TABLE `5_devis_detail_calcul` ENGINE=InnoDB;
ALTER TABLE `5_crit_fin_opca` ENGINE=InnoDB;
ALTER TABLE `5_contact_type` ENGINE=InnoDB;
ALTER TABLE `5_contact_origine` ENGINE=InnoDB;
ALTER TABLE `5_contact_lnk_type` ENGINE=InnoDB;
ALTER TABLE `5_contact_frm_juri` ENGINE=InnoDB;
ALTER TABLE `5_contact_fonction` ENGINE=InnoDB;
ALTER TABLE `5_contact_cat` ENGINE=InnoDB;
ALTER TABLE `5_cond_rglmnt` ENGINE=InnoDB;
ALTER TABLE `5_competence_sous_categorie` ENGINE=InnoDB;
ALTER TABLE `5_competence_categorie` ENGINE=InnoDB;
ALTER TABLE `5_commission_statut` ENGINE=InnoDB;
ALTER TABLE `5_civilite` ENGINE=InnoDB;
ALTER TABLE `5_affaire_cout_type` ENGINE=InnoDB;
ALTER TABLE `5_affaires_statut` ENGINE=InnoDB;
ALTER TABLE `3_fac_md_ed_lnk` ENGINE=InnoDB;
ALTER TABLE `3_fac_md_dos_lnk` ENGINE=InnoDB;
ALTER TABLE `3_fac_md_act_lnk` ENGINE=InnoDB;
ALTER TABLE `3_dos_date_fac_detail_lnk` ENGINE=InnoDB;
ALTER TABLE `3_contact_lnk` ENGINE=InnoDB;
ALTER TABLE `3_contact_cat_lnk` ENGINE=InnoDB;
ALTER TABLE `2_url` ENGINE=InnoDB;
ALTER TABLE `2_telephone` ENGINE=InnoDB;
ALTER TABLE `2_notes_lien` ENGINE=InnoDB;
ALTER TABLE `2_mail` ENGINE=InnoDB;
ALTER TABLE `2_adresse` ENGINE=InnoDB;
ALTER TABLE `1_treso` ENGINE=InnoDB;
ALTER TABLE `1_structure` ENGINE=InnoDB;
ALTER TABLE `1_recurrence_log` ENGINE=InnoDB;
ALTER TABLE `1_recurrence` ENGINE=InnoDB;
ALTER TABLE `1_produit` ENGINE=InnoDB;
ALTER TABLE `1_note` ENGINE=InnoDB;
ALTER TABLE `1_ndf_detail` ENGINE=InnoDB;
ALTER TABLE `1_ndf` ENGINE=InnoDB;
ALTER TABLE `1_mouvement_divers` ENGINE=InnoDB;
ALTER TABLE `1_formation_dossier_stagiaire` ENGINE=InnoDB;
ALTER TABLE `1_formation_dossier_date` ENGINE=InnoDB;
ALTER TABLE `1_formation_dossier_action` ENGINE=InnoDB;
ALTER TABLE `1_formation_dossier` ENGINE=InnoDB;
ALTER TABLE `1_formation_catalogue` ENGINE=InnoDB;
ALTER TABLE `1_formation_action_detail` ENGINE=InnoDB;
ALTER TABLE `1_formation_action_cout` ENGINE=InnoDB;
ALTER TABLE `1_formation_action` ENGINE=InnoDB;
ALTER TABLE `1_formateur_formation` ENGINE=InnoDB;
ALTER TABLE `1_formateur_competence1` ENGINE=InnoDB;
ALTER TABLE `1_formateur_competence` ENGINE=InnoDB;
ALTER TABLE `1_formateur_commentdisp` ENGINE=InnoDB;
ALTER TABLE `1_facture_detail` ENGINE=InnoDB;
ALTER TABLE `1_facture_date_reglement` ENGINE=InnoDB;
ALTER TABLE `1_facture` ENGINE=InnoDB;
ALTER TABLE `1_encaiss_decaiss` ENGINE=InnoDB;
ALTER TABLE `1_encaissement_treso` ENGINE=InnoDB;
ALTER TABLE `1_encaissement_regl_opca` ENGINE=InnoDB;
ALTER TABLE `1_encaissement_regl_client` ENGINE=InnoDB;
ALTER TABLE `1_encaissement` ENGINE=InnoDB;
ALTER TABLE `1_dossier_date` ENGINE=InnoDB;
ALTER TABLE `1_dossier` ENGINE=InnoDB;
ALTER TABLE `1_doc` ENGINE=InnoDB;
ALTER TABLE `1_devis_offre_commerciale` ENGINE=InnoDB;
ALTER TABLE `1_devis_facturation_prev` ENGINE=InnoDB;
ALTER TABLE `1_devis_detail` ENGINE=InnoDB;
ALTER TABLE `1_devis_date_payment` ENGINE=InnoDB;
ALTER TABLE `1_devis_cout` ENGINE=InnoDB;
ALTER TABLE `1_devis` ENGINE=InnoDB;
ALTER TABLE `1_cout_treso` ENGINE=InnoDB;
ALTER TABLE `1_cout` ENGINE=InnoDB;
ALTER TABLE `1_contact` ENGINE=InnoDB;
ALTER TABLE `1_competence` ENGINE=InnoDB;
ALTER TABLE `1_commission_statut` ENGINE=InnoDB;
ALTER TABLE `1_collaborateur` ENGINE=InnoDB;
ALTER TABLE `1_client_ca_2016` ENGINE=InnoDB;
ALTER TABLE `1_client_ca_2015` ENGINE=InnoDB;
ALTER TABLE `1_client_ca_2014` ENGINE=InnoDB;
ALTER TABLE `1_client_ca_2013` ENGINE=InnoDB;
ALTER TABLE `1_client_ca_2012` ENGINE=InnoDB;
ALTER TABLE `1_client_ca_2011` ENGINE=InnoDB;
ALTER TABLE `1_client_ca_2010` ENGINE=InnoDB;
ALTER TABLE `1_bilan_peda_liste` ENGINE=InnoDB;
ALTER TABLE `1_banque` ENGINE=InnoDB;
ALTER TABLE `1_avoir` ENGINE=InnoDB;
ALTER TABLE `1_affaire_detail` ENGINE=InnoDB;
ALTER TABLE `1_affaire` ENGINE=InnoDB;
ALTER TABLE `1_activite` ENGINE=InnoDB;

-- Ajout champ id_doc dans 1_contact
ALTER TABLE `1_contact` ADD `id_doc` INT NULL AFTER `societeFormStag`;

-- replace primary key
ALTER TABLE `5_formation_dossier_statut` DROP PRIMARY KEY;
ALTER TABLE `5_formation_dossier_statut` ADD PRIMARY KEY (id);
ALTER TABLE `5_formation_dossier_statut` CHANGE id id INT AUTO_INCREMENT NOT NULL;
ALTER TABLE `1_collaborateur` DROP PRIMARY KEY;
ALTER TABLE `1_collaborateur` ADD PRIMARY KEY (id);
ALTER TABLE `1_collaborateur` CHANGE id id INT AUTO_INCREMENT NOT NULL;

-- ajout relation sur la table 1_domiciliation
ALTER TABLE `1_domiciliation` ADD CONSTRAINT FK_77EF6DDDC7440455 FOREIGN KEY (client) REFERENCES `1_contact` (id);
ALTER TABLE `1_domiciliation` ADD CONSTRAINT FK_77EF6DDD8CDE5729 FOREIGN KEY (type) REFERENCES `5_typedom` (id);
ALTER TABLE `1_domiciliation` ADD CONSTRAINT FK_77EF6DDD4E977E5C FOREIGN KEY (salle) REFERENCES salle (id);
ALTER TABLE `1_domiciliation` ADD CONSTRAINT FK_77EF6DDDE564F0BF FOREIGN KEY (statut) REFERENCES `5_formation_dossier_statut` (id);
ALTER TABLE `1_domiciliation` ADD CONSTRAINT FK_77EF6DDD7653F3AE FOREIGN KEY (commercial) REFERENCES `1_collaborateur` (id);
CREATE INDEX client ON `1_domiciliation` (client);
CREATE INDEX type ON `1_domiciliation` (type);
CREATE INDEX salle ON `1_domiciliation` (salle);
CREATE INDEX statut ON `1_domiciliation` (statut);
CREATE INDEX commercial ON `1_domiciliation` (commercial);

-- changement type colonne partenaire en bool
ALTER TABLE `1_domiciliation` CHANGE `partenaire` `partenaire` TINYINT(1) NOT NULL;



-- MAJ 2019-04-12

--     CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username)
-- , PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
DROP INDEX nom_str ON 1_contact;
CREATE INDEX nom_str ON 1_contact (nom_str);
ALTER TABLE 5_contact_type DROP PRIMARY KEY;
ALTER TABLE 5_contact_type ADD PRIMARY KEY (id);
CREATE INDEX texte_note ON 1_note (texte_note);
ALTER TABLE 5_qualite CHANGE nom_qualite nom_qualite VARCHAR(100) DEFAULT NULL;
ALTER TABLE utilisateur CHANGE DEBUTCONNECTION DEBUTCONNECTION DATETIME DEFAULT NULL, CHANGE FINCONNECTION FINCONNECTION DATETIME DEFAULT NULL;

-- adaptation facture domiciliation
ALTER TABLE `1_facture_domiciliation` CHANGE iddom iddom INT NOT NULL, CHANGE dateestimepaiement dateestimepaiement DATE DEFAULT NULL, CHANGE statut statut INT DEFAULT NULL, CHANGE payeur payeur INT DEFAULT NULL;
CREATE UNIQUE INDEX UNIQ_EC0F970378FC8B04 ON `1_facture_domiciliation` (iddom);
	 
ALTER TABLE 1_avoir ADD id_dossier_id INT DEFAULT NULL;
     ALTER TABLE 1_avoir ADD CONSTRAINT FK_CD1926E4C4968C81 FOREIGN KEY (id_dossier_id) REFERENCES 1_dossier (id);
     CREATE INDEX IDX_CD1926E4C4968C81 ON 1_avoir (id_dossier_id);
     ALTER TABLE 1_domiciliation CHANGE recu recu DOUBLE PRECISION DEFAULT NULL, CHANGE tva tva INT DEFAULT NULL, CHANGE encaissement encaissement DATE DEFAULT NULL, CHANGE payeur payeur INT DEFAULT NULL, CHANGE commission commission INT DEFAULT NULL;
     ALTER TABLE 1_facture ADD id_dossier_id INT DEFAULT NULL;
     ALTER TABLE 1_facture ADD CONSTRAINT FK_30AF9A3BC4968C81 FOREIGN KEY (id_dossier_id) REFERENCES 1_dossier (id);

 ALTER TABLE 1_formation_dossier CHANGE pv_tarif_j pv_tarif_j VARCHAR(200) DEFAULT NULL, CHANGE pv_tarif_dj pv_tarif_dj VARCHAR(200) DEFAULT NULL, CHANGE pv_tarif_h pv_tarif_h VARCHAR(200) DEFAULT NULL, CHANGE pv_total_ht pv_total_ht VARCHAR(200) DEFAULT NULL, CHANGE pfmteur_j pfmteur_j VARCHAR(200) DEFAULT NULL, CHANGE pfmteur_dj pfmteur_dj VARCHAR(200) DEFAULT NULL, CHANGE pfmteur_h pfmteur_h VARCHAR(200) DEFAULT NULL, CHANGE pfmteur_total_ht pfmteur_total_ht VARCHAR(200) DEFAULT NULL;
 ALTER TABLE 1_note ADD id_formation_dossier INT DEFAULT NULL, CHANGE date_add date_add DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL;
ALTER TABLE 1_formation_dossier CHANGE dates_dossier dates_dossier DATETIME DEFAULT NULL;
    ALTER TABLE 1_avoir CHANGE date_add date_add DATETIME DEFAULT NULL;
     ALTER TABLE 1_avoir CHANGE factureid factureid INT DEFAULT NULL, CHANGE date_add date_add DATETIME DEFAULT NULL, CHANGE id_dossier id_dossier VARCHAR(255) DEFAULT NULL;
ALTER TABLE 1_avoir CHANGE nature_avoir nature_avoir VARCHAR(300) DEFAULT NULL;
 ALTER TABLE 1_facture CHANGE idb idb INT DEFAULT NULL, CHANGE date_add date_add DATETIME DEFAULT NULL;
ALTER TABLE 1_facture CHANGE encaisse encaisse VARCHAR(30) DEFAULT NULL, CHANGE natureavoir natureavoir VARCHAR(200) DEFAULT NULL;

-- suppression primary key
ALTER TABLE `1_note` DROP FOREIGN KEY FK_2A5E08B9997C10B1;
ALTER TABLE `5_note_action_statut` DROP PRIMARY KEY;
ALTER TABLE `5_note_action_statut` ADD PRIMARY KEY (id);
ALTER TABLE `5_note_action_statut` CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE idb idb INT DEFAULT NULL;
ALTER TABLE `1_note` ADD CONSTRAINT FK_2A5E08B9997C10B1 FOREIGN KEY (id_action_statut) REFERENCES `5_note_action_statut` (id);
ALTER TABLE 1_formation_dossier CHANGE dates_dossier dates_dossier DATETIME DEFAULT NULL;
    ALTER TABLE 1_avoir CHANGE date_add date_add DATETIME DEFAULT NULL;
     ALTER TABLE 1_avoir CHANGE factureid factureid INT DEFAULT NULL, CHANGE date_add date_add DATETIME DEFAULT NULL, CHANGE id_dossier id_dossier VARCHAR(255) DEFAULT NULL;
ALTER TABLE 1_avoir CHANGE nature_avoir nature_avoir VARCHAR(300) DEFAULT NULL;
 ALTER TABLE 1_facture CHANGE idb idb INT DEFAULT NULL, CHANGE date_add date_add DATETIME DEFAULT NULL;
ALTER TABLE 1_facture CHANGE encaisse encaisse VARCHAR(30) DEFAULT NULL, CHANGE natureavoir natureavoir VARCHAR(200) DEFAULT NULL;
 ALTER TABLE 2_mail ADD id_dossier INT DEFAULT NULL, CHANGE date_add date_add DATETIME NOT NULL;
 ALTER TABLE 1_formation_dossier CHANGE durparjour durparjour TEXT DEFAULT NULL;
 ALTER TABLE 1_formation_dossier CHANGE ndossopca ndossopca TEXT DEFAULT NULL;

-- ajout propriété pour la suppression logique 1_note
ALTER TABLE `1_note` ADD deleted_at DATETIME DEFAULT NULL;
-- ajout auto-increment pour l' id de l'url
ALTER TABLE `2_url` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `1_note` ADD deleted_at DATETIME DEFAULT NULL;

-- suppression commentaires sans parent
DELETE FROM `1_note` WHERE id_table IS NULL;
ALTER TABLE `1_note` CHANGE nom_table nom_table VARCHAR(50) NOT NULL;

-- rendre ces champs nullable
ALTER TABLE `1_contact` CHANGE `Siret_tns` `Siret_tns` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
CHANGE `Naf_tns` `Naf_tns` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
CHANGE `Activite_tns` `Activite_tns` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
CHANGE `id_opca_tns` `id_opca_tns` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;
ALTER TABLE `1_contact` CHANGE `interlocuteur` `interlocuteur` VARCHAR(150) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT 'non';

CREATE TABLE note_nom_table (id INT AUTO_INCREMENT NOT NULL, id_note INT NOT NULL, nomtable VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB;
INSERT INTO `note_nom_table`(`id_note`, `nomtable`) SELECT `1_note`.`id`, `1_note`.`nom_table` FROM `1_note` WHERE `1_note`.`nom_table` != '';