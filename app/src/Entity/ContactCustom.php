<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ContactCustomRepository")
 */
class ContactCustom extends Contact
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $civilite;

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var string|null
     */
    private $prenom;

    /**
     * @var string|null
     */
    private $qualite;

    /**
     * @var string|null
     */
    private $interlocuteur;

    /**
     * @var string|null
     */
    private $Telephone;
    /**
     * @var string|null
     */
    private $Fax;
    /**
     * @var string|null
     */
    private $Portable;
    /**
     * @var string|null
     */
    private $Email;

    
}
