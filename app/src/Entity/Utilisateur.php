<?php

namespace App\Entity;

use DateTime;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\EquatableInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 */
class Utilisateur implements UserInterface, EquatableInterface {

    /**
     * @var int
     *
     * @ORM\Column(name="IDUTILISATEUR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMUTILISATEUR", type="string", length=150, nullable=false)
     */
    private $nomutilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="PRENOMUTILISATEUR", type="string", length=150, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="PASSWORD", type="string", length=200, nullable=false)
     */
    private $passwordOld;

    /**
     * @var string
     *
     * @ORM\Column(name="pass", type="string", length=200, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="Droit", type="string", length=200, nullable=false)
     */
    private $droit;

    /**
     * @var string
     *
     * @ORM\Column(name="POSTE", type="string", length=100, nullable=false)
     */
    private $poste;

    /**
     * @var int
     *
     * @ORM\Column(name="CONNECTER", type="integer", nullable=false)
     */
    private $connecter = '0';

    /**
     * @var DateTime
     *
     * @ORM\Column(name="DEBUTCONNECTION", type="datetime", nullable=true)
     */
    private $debutconnection;

    /**
     * @var DateTime
     *
     * @ORM\Column(name="FINCONNECTION", type="datetime", nullable=true)
     */
    private $finconnection;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\OneToMany(targetEntity=Log::class, mappedBy="utilisateur")
     */
    private $logs;

    public function __construct()
    {
        $this->logs = new ArrayCollection();
    }
    
    public function __toString() {
        return $this->nomutilisateur. " ".$this->username;
    }

    public function getIdutilisateur(): ?int {
        return $this->idutilisateur;
    }

    public function getNomutilisateur(): ?string {
        return $this->nomutilisateur;
    }

    public function setNomutilisateur(string $nomutilisateur): self {
        $this->nomutilisateur = $nomutilisateur;

        return $this;
    }

    public function getUsername(): ?string {
        return $this->username;
    }

    public function setUsername(string $username): self {
        $this->username = $username;

        return $this;
    }

    public function getPasswordOld(): ?string {
        return $this->passwordOld;
    }

    public function setPasswordOld(string $passwordOld): self {
        $this->passwordOld = $passwordOld;

        return $this;
    }

    public function getPassword(): ?string {
        return $this->password;
    }

    public function setPassword(string $password): self {
        $this->password = $password;

        return $this;
    }

    public function getDroit(): ?string {
        return $this->droit;
    }

    public function setDroit(?string $droit): self {
        $this->droit = $droit;

        return $this;
    }

    public function getPoste(): ?string {
        return $this->poste;
    }

    public function setPoste(string $poste): self {
        $this->poste = $poste;

        return $this;
    }

    public function getConnecter(): ?int {
        return $this->connecter;
    }

    public function setConnecter(int $connecter): self {
        $this->connecter = $connecter;

        return $this;
    }

    public function getDebutconnection(): ?DateTimeInterface {
        return $this->debutconnection;
    }

    public function setDebutconnection(DateTimeInterface $debutconnection): self {
        $this->debutconnection = $debutconnection;

        return $this;
    }

    public function getFinconnection(): ?DateTimeInterface {
        return $this->finconnection;
    }

    public function setFinconnection(DateTimeInterface $finconnection): self {
        $this->finconnection = $finconnection;

        return $this;
    }

    public function eraseCredentials() {
        
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self {
        $this->roles = $roles;

        return $this;
    }

    public function addRole($role) {
        $this->roles[] = $role;

        return $this;
    }

    public function hasRole($role) {

        if (!is_null($this->roles) && in_array($role, $this->roles)) {
            return true;
        }

        return false;
    }

    public function removeRole($role) {
        if (!is_null($this->roles) && ($key = array_search($role, $this->roles)) !== false) {
            unset($this->roles[$key]);
        }

        return $this;
    }

    public function getSalt() {
        
    }
    
    /**
     * Test tous les changements au niveau de l'utilisateur
     * @param UserInterface $user
     * @return bool
     */
    public function isEqualTo(UserInterface $user): bool {
        if ($user instanceof Utilisateur) {
            // Check that the roles are the same, in any order
            $isEqual = count($this->getRoles()) == count($user->getRoles());
            if ($isEqual) {
                foreach ($this->getRoles() as $role) {
                    $isEqual = $isEqual && in_array($role, $user->getRoles());
                }
            }
            return $isEqual;
        }

        return false;
    }

    /**
     * @return Collection|Log[]
     */
    public function getLogs(): Collection
    {
        return $this->logs;
    }

    public function addLog(Log $log): self
    {
        if (!$this->logs->contains($log)) {
            $this->logs[] = $log;
            $log->setUser($this);
        }

        return $this;
    }

    public function removeLog(Log $log): self
    {
        if ($this->logs->contains($log)) {
            $this->logs->removeElement($log);
            // set the owning side to null (unless already changed)
            if ($log->getUser() === $this) {
                $log->setUser(null);
            }
        }

        return $this;
    }

}
