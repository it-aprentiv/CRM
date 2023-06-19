SELECT t0_.structure                                    AS Structure,
       Date_format(t1_.date_envoi, '%d/%m/%Y')          AS DateEnvoi,
       Year(t1_.date_envoi)                             AS AnnéeEnvoi,
       Month(t1_.date_envoi)                            AS MoisEnvoi,
       Date_format(t1_.dates_dossier, '%d/%m/%Y')       AS DateDossier,
       Date_format(t2_.date_creation, '%d/%m/%Y')       AS DateCreationDossier,
       Date_format(t3_.date_reelle_encaiss, '%d/%m/%Y') AS DateReelleEncaissement,
       t4_.nom_prenom                                   AS Commercial,
       Concat(t1_.ref, '-', t1_.dispositif)             AS NumeroDossier,
       t1_.dispositif                                   AS Dispositif,
       Date_format(t1_.date_fin_periode, '%d/%m/%Y')    AS DateFinPeriod,
       t1_.duree_jours                                  AS DuréeJours,
       t1_.duree_heures                                 AS DuréeHeures,
       t1_.durparjour                                   AS DuréeParJour,
       t1_.lieu                                         AS Lieu,
       t1_.mnt_demande                                  AS MontantDemandé,
       t1_.mnt_accorde                                  AS MontantAccordé,
       t3_.mnt_ht                                       AS MontantHT,
       t2_.total_regle_ht                               AS TotalRegléHT,
       t1_.nom                                          AS Nom,
       t5_.nom_str                                      AS NomStrClient,
       t1_.dossier_type                                 AS TypeDossier,
       Concat(t5_.nom, ' ', t5_.prenom)                 AS NomPrenomClient,
       t6_.nom_str                                      AS NomStrOPCO,
       t1_.montant_tva                                  AS MontantTva,
       t7_.statut                                       AS Statut
FROM   1_formation_dossier t1_
       LEFT JOIN 1_facture t2_
              ON ( t1_.id = t2_.id_dossier )
       LEFT JOIN 1_encaissement_facture_liee t8_
              ON ( t8_.id_facture = t2_.id )
       LEFT JOIN 1_encaissement t3_
              ON ( t3_.id = t8_.id_encaissement )
       LEFT JOIN 5_formation_dossier_statut t7_
              ON ( t1_.id_statut = t7_.id )
       LEFT JOIN 1_contact t5_
              ON ( t1_.id_client = t5_.id )
       LEFT JOIN 1_contact t6_
              ON ( t1_.id_opca = t6_.id )
       LEFT JOIN 1_collaborateur t4_
              ON ( t1_.id_commercial = t4_.id )
       LEFT JOIN 1_structure t0_
              ON ( t0_.id = t1_.id_structure )
WHERE  Year(t1_.date_envoi) >= ?
       AND Month(t1_.date_envoi) >= ?
       AND Year(t1_.date_envoi) <= ?
       AND Month(t1_.date_envoi) <= ?
       AND t1_.id_statut IN ( ? )
ORDER  BY t1_.id DESC  