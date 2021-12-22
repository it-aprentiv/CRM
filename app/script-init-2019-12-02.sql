	SET sql_mode = '';
	
	DROP INDEX nom_str ON `1_contact`;
     ALTER TABLE `1_contact` CHANGE nsecuritesocial nsecuritesocial VARCHAR(100) NOT NULL, CHANGE id_formation_liee id_formation_liee INT NOT NULL, CHANGE piece_identite piece_identite VARCHAR(100) NOT NULL, CHANGE contact_liee contact_liee INT NOT NULL, CHANGE valididte_piece_identite valididte_piece_identite VARCHAR(100) NOT NULL, CHANGE actif actif TINYINT(1) DEFAULT NULL, CHANGE delais_reponse_opca delais_reponse_opca TINYINT(1) DEFAULT NULL, CHANGE delais_rglmt_opca delais_rglmt_opca TINYINT(1) DEFAULT NULL, CHANGE delais_encaiss_opca delais_encaiss_opca TINYINT(1) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL, CHANGE Siret_tns Siret_tns VARCHAR(50) NOT NULL, CHANGE Naf_tns Naf_tns VARCHAR(50) NOT NULL, CHANGE Activite_tns Activite_tns VARCHAR(50) NOT NULL, CHANGE id_opca_tns id_opca_tns VARCHAR(50) NOT NULL, CHANGE Budget Budget VARCHAR(100) NOT NULL;
     CREATE INDEX IDX_824B181356D3F5A4 ON `1_contact` (id_type_tructure);
     CREATE INDEX nom_str ON `1_contact` (nom_str);
     ALTER TABLE `1_activite` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `2_adresse` CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_ville id_ville INT DEFAULT NULL, CHANGE id_region id_region INT DEFAULT NULL, CHANGE id_pays id_pays INT DEFAULT NULL, CHANGE id_type_adresse id_type_adresse INT DEFAULT NULL, CHANGE idb_type_adresse idb_type_adresse INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_affaire` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_affaire_detail` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_affaires_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_avoir` CHANGE total_ht total_ht VARCHAR(50) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_banque` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_collaborateur` CHANGE id id INT NOT NULL;
     ALTER TABLE `1_commission_statut` CHANGE id id INT NOT NULL;
     ALTER TABLE `1_competence` CHANGE id id INT NOT NULL, CHANGE idb idb INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_competence_categorie` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_competence_sous_categorie` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_cond_rglmnt` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_contact_cat` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_contact_fonction` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `3_contact_lnk` CHANGE id id INT AUTO_INCREMENT NOT NULL;
     ALTER TABLE `5_contact_lnk_type` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_cout` CHANGE id_cat id_cat INT DEFAULT NULL, CHANGE idb_cat idb_cat INT DEFAULT NULL, CHANGE id_sous_cat id_sous_cat INT DEFAULT NULL, CHANGE idb_sous_cat idb_sous_cat INT DEFAULT NULL, CHANGE id_fournisseur id_fournisseur INT DEFAULT NULL, CHANGE idb_fournisseur idb_fournisseur INT DEFAULT NULL, CHANGE id_dossier id_dossier INT DEFAULT NULL, CHANGE idb_dossier idb_dossier INT DEFAULT NULL, CHANGE id_action id_action INT DEFAULT NULL, CHANGE idb_action idb_action INT DEFAULT NULL, CHANGE id_note_de_frais id_note_de_frais INT DEFAULT NULL, CHANGE idb_note_de_frais idb_note_de_frais INT DEFAULT NULL, CHANGE id_etat id_etat INT DEFAULT NULL, CHANGE idb_etat idb_etat INT DEFAULT NULL, CHANGE id_tx_tva id_tx_tva DOUBLE PRECISION DEFAULT NULL, CHANGE idb_tx_tva idb_tx_tva DOUBLE PRECISION DEFAULT NULL, CHANGE id_mode_reglmnt id_mode_reglmnt INT DEFAULT NULL, CHANGE idb_mode_reglmnt idb_mode_reglmnt INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_cout_treso` CHANGE id_cout id_cout INT DEFAULT NULL, CHANGE idb_cout idb_cout INT DEFAULT NULL, CHANGE id_treso id_treso INT DEFAULT NULL, CHANGE idb_treso idb_treso INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_devis` CHANGE id id INT NOT NULL, CHANGE type type TINYINT(1) DEFAULT NULL, CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_affaire id_affaire INT DEFAULT NULL, CHANGE idb_affaire idb_affaire INT DEFAULT NULL, CHANGE id_responsable id_responsable INT DEFAULT NULL, CHANGE idb_responsable idb_responsable INT DEFAULT NULL, CHANGE prct_rem prct_rem INT DEFAULT NULL, CHANGE id_statut_devis id_statut_devis INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_devis_cout` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_devis_date_payment` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_devis_detail` CHANGE id_devis id_devis INT DEFAULT NULL, CHANGE idb_devis idb_devis INT DEFAULT NULL, CHANGE id_parent id_parent INT DEFAULT NULL, CHANGE idb_parent idb_parent INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL, CHANGE idb_produit idb_produit INT DEFAULT NULL, CHANGE quantite quantite DOUBLE PRECISION DEFAULT NULL, CHANGE prct_rem prct_rem INT DEFAULT NULL, CHANGE id_responsable id_responsable INT DEFAULT NULL, CHANGE idb_responsable idb_responsable INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_devis_detail_calcul` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_devis_facturation_prev` CHANGE id_devis id_devis INT DEFAULT NULL, CHANGE cli_prct_reglement cli_prct_reglement INT DEFAULT NULL, CHANGE four_prct_reglement four_prct_reglement INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_devis_offre_commerciale` CHANGE cout cout DOUBLE PRECISION NOT NULL, CHANGE offre_commercial offre_commercial DOUBLE PRECISION NOT NULL, CHANGE montant montant DOUBLE PRECISION NOT NULL;
     ALTER TABLE `5_devis_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_doc` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `9_doc_ref` CHANGE id_max id_max INT NOT NULL;
     ALTER TABLE `5_doc_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_doc_type` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_domiciliation` CHANGE partenaire partenaire INT NOT NULL;
     ALTER TABLE `3_dos_date_fac_detail_lnk` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_dossier` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_dossier_date` CHANGE id id INT NOT NULL, CHANGE nb_h nb_h DOUBLE PRECISION DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE droitspecifique CHANGE ecriture ecriture INT NOT NULL;
     ALTER TABLE `1_encaiss_decaiss` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_encaissement` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_encaissement_treso` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `3_fac_md_act_lnk` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `3_fac_md_dos_lnk` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `3_fac_md_ed_lnk` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_facture` CHANGE total_ht total_ht VARCHAR(50) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_facture_date_reglement` CHANGE id_facture id_facture INT DEFAULT NULL, CHANGE idb_facture idb_facture INT DEFAULT NULL, CHANGE `%_reglement` `%_reglement` INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_facture_detail` CHANGE id_facture id_facture INT DEFAULT NULL, CHANGE idb_facture idb_facture INT DEFAULT NULL, CHANGE id_affaire id_affaire INT DEFAULT NULL, CHANGE idb_affaire idb_affaire INT DEFAULT NULL, CHANGE id_detail_affaire id_detail_affaire INT DEFAULT NULL, CHANGE idb_detail_affaire idb_detail_affaire INT DEFAULT NULL, CHANGE id_detail_devis_ref id_detail_devis_ref INT DEFAULT NULL, CHANGE idb_detail_devis_ref idb_detail_devis_ref INT DEFAULT NULL, CHANGE id_cat_produit id_cat_produit INT DEFAULT NULL, CHANGE idb_cat_produit idb_cat_produit INT DEFAULT NULL, CHANGE id_produit id_produit INT DEFAULT NULL, CHANGE idb_produit idb_produit INT DEFAULT NULL, CHANGE nbe_jours nbe_jours DOUBLE PRECISION DEFAULT NULL, CHANGE nbe_heures nbe_heures INT DEFAULT NULL, CHANGE quantite quantite DOUBLE PRECISION DEFAULT NULL, CHANGE `%_rem` `%_rem` INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_facture_domiciliation` DROP FOREIGN KEY `1_facture_domiciliation_ibfk_1`;
     ALTER TABLE `1_facture_domiciliation` CHANGE iddom iddom INT DEFAULT NULL, CHANGE montant montant DOUBLE PRECISION NOT NULL, CHANGE remise remise DOUBLE PRECISION NOT NULL, CHANGE tva tva DOUBLE PRECISION NOT NULL, CHANGE ht ht DOUBLE PRECISION NOT NULL, CHANGE ttc ttc DOUBLE PRECISION NOT NULL;
     -- ALTER TABLE `1_facture_domiciliation` ADD CONSTRAINT FK_EC0F970378FC8B04 FOREIGN KEY (iddom) REFERENCES `1_domiciliation` (id);
     ALTER TABLE `5_facture_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formateur_competence` CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formateur_competence1` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formateur_formation` CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formateur_niveau_maitrise` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formateur_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_action` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_action_cout` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_action_detail` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_catalogue` CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formation_categorie` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_dossier` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_dossier_action` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_dossier_date` CHANGE id id INT NOT NULL, CHANGE nb_h nb_h DOUBLE PRECISION DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formation_dossier_doc_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_formation_dossier_stagiaire` CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formation_dossier_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formation_dossier_statut_doc` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formation_dossier_type` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formation_niveau` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_formation_sous_categorie` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE historique CHANGE IDUTILISATEUR IDUTILISATEUR INT NOT NULL;
     ALTER TABLE `2_mail` CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_type_mail id_type_mail INT DEFAULT NULL, CHANGE idb_type_mail idb_type_mail INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_mouvement_divers` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_ndf` CHANGE id_responsable id_responsable INT DEFAULT NULL, CHANGE idb_responsable idb_responsable INT DEFAULT NULL, CHANGE id_mode_reglement id_mode_reglement INT DEFAULT NULL, CHANGE idb_mode_reglement idb_mode_reglement INT DEFAULT NULL, CHANGE id_mode_reglement_avances id_mode_reglement_avances INT DEFAULT NULL, CHANGE idb_mode_reglement_avances idb_mode_reglement_avances INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_ndf_detail` CHANGE id_ndf id_ndf INT DEFAULT NULL, CHANGE idb_ndf idb_ndf INT DEFAULT NULL, CHANGE id_type_frais id_type_frais INT DEFAULT NULL, CHANGE idb_type_frais idb_type_frais INT DEFAULT NULL, CHANGE id_affaire id_affaire INT DEFAULT NULL, CHANGE idb_affaire idb_affaire INT DEFAULT NULL, CHANGE id_detail_affaire id_detail_affaire INT DEFAULT NULL, CHANGE idb_detail_affaire idb_detail_affaire INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     DROP INDEX texte_note ON `1_note`;
     ALTER TABLE `1_note` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     -- CREATE INDEX texte_note ON `1_note` (texte_note);
     ALTER TABLE `5_note_action` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_note_action_statut` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_pays` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_produit` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_produits_categorie` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_recurrence` CHANGE no_jour_mois no_jour_mois TINYINT(1) DEFAULT NULL, CHANGE no_mois no_mois TINYINT(1) DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_recurrence_log` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_region` CHANGE id_pays id_pays INT DEFAULT NULL, CHANGE idb_pays idb_pays INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE salle CHANGE tarifnormal tarifnormal DOUBLE PRECISION NOT NULL, CHANGE tarifreduit tarifreduit DOUBLE PRECISION NOT NULL;
     ALTER TABLE `5_secteur_activite` CHANGE id id INT NOT NULL;
     ALTER TABLE `1_structure` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `9_tables` CHANGE id_max id_max INT NOT NULL;
     ALTER TABLE `2_telephone` CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_type_tel id_type_tel INT DEFAULT NULL, CHANGE idb_type_tel idb_type_tel INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `1_treso` CHANGE num_cybergest num_cybergest INT DEFAULT NULL, CHANGE id_periode_declaration id_periode_declaration INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_tva` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_type_mail` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_type_tel` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_type_url` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `5_unite_mesure` CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE `2_url` CHANGE id id INT NOT NULL, CHANGE id_contact id_contact INT DEFAULT NULL, CHANGE idb_contact idb_contact INT DEFAULT NULL, CHANGE id_type_url id_type_url INT DEFAULT NULL, CHANGE idb_type_url idb_type_url INT DEFAULT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;
     ALTER TABLE utilisateur ADD pass VARCHAR(200) NOT NULL, ADD roles JSON NOT NULL, CHANGE CONNECTER CONNECTER INT NOT NULL;
     ALTER TABLE `5_ville` CHANGE id id INT NOT NULL, CHANGE statut_rst statut_rst TINYINT(1) DEFAULT NULL;

-- MAJ 2019-12-11
-- rendre null les colonnes de jointure avec une valeur 0
UPDATE `1_contact` SET id_opca = null WHERE id_opca = 0;
UPDATE `1_contact` SET id_commercial = null WHERE id_commercial = 0;

-- Sauvegarde table type_adresse avant modification
CREATE TABLE `2_type_adresse_backup` LIKE `2_type_adresse`;
INSERT INTO `2_type_adresse_backup` SELECT * FROM `2_type_adresse`;
UPDATE `2_type_adresse` SET `type_adresse` = 'Ancienne adresse' WHERE `2_type_adresse`.`id_type_adresse` = 2;
UPDATE `2_type_adresse` SET `type_adresse` = 'Siège sociale' WHERE `2_type_adresse`.`id_type_adresse` = 3;
UPDATE `2_type_adresse` SET `type_adresse` = 'Magasin' WHERE `2_type_adresse`.`id_type_adresse` = 4;
UPDATE `2_type_adresse` SET `type_adresse` = 'Professionnelle' WHERE `2_type_adresse`.`id_type_adresse` = 5;
UPDATE `2_type_adresse` SET `type_adresse` = 'Personnelle' WHERE `2_type_adresse`.`id_type_adresse` = 6;
UPDATE `2_type_adresse` SET `type_adresse` = 'Facturation' WHERE `2_type_adresse`.`id_type_adresse` = 7;

-- MODIF TABLE DOSSIER: 06/01/2020 --
UPDATE `1_dossier` SET `id_client`= NULL WHERE `id_client` = 0;
UPDATE `1_dossier` SET `id_type`= NULL WHERE `id_type` = 0;
UPDATE `1_dossier` SET `id_formation`= NULL WHERE `id_formation` = 0;
UPDATE `1_dossier` SET `id_commercial`= NULL WHERE `id_commercial` = 0;
UPDATE `1_dossier` SET `id_formateur`= NULL WHERE `id_formateur` = 0;
UPDATE `1_dossier` SET `id_opca`= NULL WHERE `id_opca` = 0;
UPDATE `1_dossier` SET `id_statut`= NULL WHERE `id_statut` = 0;
UPDATE `1_dossier` SET `id_statut_doc`= NULL WHERE `id_statut_doc` = 0;
UPDATE `1_dossier` SET `id_structure`= NULL WHERE `id_structure` = 0;
UPDATE `1_dossier` SET `id_user_maj`= NULL WHERE `id_user_maj` = 0;
UPDATE `1_dossier` SET `id_affaire` = NULL WHERE `id_affaire` = 0;
UPDATE `1_dossier` SET `id_str_ref` = NULL WHERE `id_str_ref` = 0;


-- MAJ 2020-01-07
-- rendre null les colonnes de jointures qui n'existe pas
UPDATE `1_contact` SET `id_secteur` = NULL WHERE `id_secteur` NOT IN (SELECT `id` FROM `5_secteur_activite`);
UPDATE `1_contact` SET `id_type_tructure`=NULL WHERE `id_type_tructure` NOT IN (SELECT `id` FROM `1_structure`);
UPDATE `1_contact` SET `id_commercial`=NULL WHERE `id_commercial` NOT IN (SELECT `id` FROM `1_collaborateur`);
UPDATE `1_contact` SET `id_civilite`=NULL WHERE `id_civilite` NOT IN (SELECT `id` FROM `5_civilite`);
UPDATE `1_contact` SET `id_type`=NULL WHERE `id_type` NOT IN (SELECT `id` FROM `5_contact_type`);
UPDATE `1_contact` SET `id_opca`=NULL WHERE `id_opca` = 0;
UPDATE `1_contact` SET `contact_liee`=NULL WHERE `contact_liee` = 0;
UPDATE `1_note` SET `id_user_action`= NULL WHERE `id_user_action` NOT IN (SELECT `id` FROM `1_collaborateur`);
UPDATE `1_note` SET `rappelleur`= NULL WHERE `rappelleur` NOT IN (SELECT `id` FROM `1_collaborateur`);
UPDATE `1_note` SET `id_action_statut`= NULL WHERE `id_action_statut` NOT IN (SELECT `id` FROM `5_note_action_statut`);
UPDATE `1_note` SET `id_action`= NULL WHERE `id_action` NOT IN (SELECT `id` FROM `5_note_action`);

-- MODIF TABLE FORMATION DOSSIER STAGIAIRE --
ALTER TABLE 1_formation_dossier_stagiaire DROP FOREIGN KEY FK_76786587E3D54947;
DROP INDEX IDX_76786587E3D54947 ON 1_formation_dossier_stagiaire;
ALTER TABLE 1_formation_dossier_stagiaire ADD nom_table VARCHAR(50) NOT NULL;

-- MODIF TABLE FACTURE FORMATION DOSSIER 08/01/2020 --
UPDATE `1_facture_domiciliation` SET `payeur` = NULL WHERE `payeur` = 0;

-- DELETE structure 'prospere' 23/01/2020
UPDATE `1_structure` SET `deleted_at` = 1 WHERE `id` = 3;

INSERT INTO `contact_adresse_type` (`id_type_adresse`, `type_adresse`) VALUES
(NULL, 'Ancienne adresse'), (NULL, 'Siège sociale'),
(NULL, 'Magasin'), (NULL, 'Professionnelle'),
(NULL, 'Personnelle'), (NULL, 'Facturation');

-- change interlocuteur value 13/02/2020
UPDATE `1_contact` SET `interlocuteur` = 'oui' WHERE `interlocuteur` = '1';
UPDATE `1_contact` SET `interlocuteur` = 'non' WHERE `interlocuteur` = '0';