## Tableau des séances  (Formation en cours)

Structure de la table

- id: identifiant unique de la séance
- dossier_id: identifiant du dossier de la séance
- intitule: intitulé de la séance (ex: "SST")
- participants_number: nombre de participants
- status: statut de la séance (ex: "En cours/Validée/Annulée/Terminée")
- lastupdate: date de dernière mise à jour
- lastupdateby: identifiant de l'utilisateur ayant effectué la dernière mise à jour
- createdid: identifiant de l'utilisateur ayant créé la séance

La page de gestion des séances est accessible depuis le menu.

## Gestion des séances

### Création d'une séance

Pour créer une séance, il faut cliquer sur le bouton "Créer une séance" en haut à droite de la page.
Une modale s'ouvrira, et une requête Ajax s'effectuera pour ajouter en temps réel la scéance dans la base de données.

### Modification d'une séance

Pour modifier une séance, il suffira de cliqué sur la scéance, une pop-up et l'ont pourra modifié les dates de scéances et le nombre de participants.