<?php


namespace App\Entity\Filter;

use App\Entity\NoteAction;
use DateTime;

class NoteFilter
{

    private $nomTable;
    private $nomStr;

    /**
     * @var DateTime
     */
    private $dateAdd;
    private $nomutilisateur;
    private $username;
    private $texteNote;
    private $nomAction;
    private $actionStatut; // Ajouté le 14/01 pour mettre un champ "statut" dans le filtre de recherche pour les notes.

    /**
     * @var DateTime
     */
    private $dateAction;
    private $nomPrenom;
    private $rappelleur;
    private $idUserAction;
    
    // APR-144 : filtre par auteur
    private $author;
    
    public function getidUserAction() {
        return $this->idUserAction;
    }

    public function setidUserAction($idUserAction) {
        $this->idUserAction = $idUserAction;
        return $this;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function setAuthor($author) {
        $this->author = $author;
        return $this;
    }
    
    public function getRappelleur() {
        return $this->rappelleur;
    }

    public function setRappelleur($rappelleur) {
        $this->rappelleur = $rappelleur;
        return $this;
    }
        /**
     * @return mixed
     */
    public function getNomTable()
    {
        return $this->nomTable;
    }

    /**
     * @param mixed $nomTable
     */
    public function setNomTable($nomTable): void
    {
        $this->nomTable = $nomTable;
    }

    /**
     * @return mixed
     */
    public function getNomStr()
    {
        return $this->nomStr;
    }

    /**
     * @param mixed $nomStr
     */
    public function setNomStr($nomStr): void
    {
        $this->nomStr = $nomStr;
    }

    /**
     * @return mixed
     */
    public function getNomutilisateur()
    {
        return $this->nomutilisateur;
    }

    /**
     * @param mixed $nomutilisateur
     */
    public function setNomutilisateur($nomutilisateur): void
    {
        $this->nomutilisateur = $nomutilisateur;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getTexteNote()
    {
        return $this->texteNote;
    }

    /**
     * @param mixed $texteNote
     */
    public function setTexteNote($texteNote): void
    {
        $this->texteNote = $texteNote;
    }

    /**
     * @return string|null
     */
    public function getNomAction():?NoteAction
    {
        return $this->nomAction;
    }

    /**
     * @param mixed $nomAction
     */
    public function setNomAction(?NoteAction $nomAction): void
    {
        $this->nomAction = $nomAction;
    }

    /**
     * @return mixed
     */
    public function getNomPrenom()
    {
        return $this->nomPrenom;
    }

    /**
     * @param mixed $nomPrenom
     */
    public function setNomPrenom($nomPrenom): void
    {
        $this->nomPrenom = $nomPrenom;
    }

    /**
     * @return mixed
     */
    public function getActionStatut()
    {
        return $this->actionStatut;
    }

    /**
     * @param mixed $actionStatut
     */
    public function setActionStatut($actionStatut): void
    {
        $this->actionStatut = $actionStatut;
    }

    /**
     * @return DateTime
     */
    public function getDateAdd(): ?DateTime
    {
        return $this->dateAdd;
    }

    /**
     * @param DateTime $dateAdd
     */
    public function setDateAdd(?DateTime $dateAdd): void
    {
        $this->dateAdd = $dateAdd;
    }

    /**
     * @return DateTime
     */
    public function getDateAction(): ?DateTime
    {
        return $this->dateAction;
    }

    /**
     * @param DateTime $dateAction
     */
    public function setDateAction(?DateTime $dateAction): void
    {
        $this->dateAction = $dateAction;
    }

}