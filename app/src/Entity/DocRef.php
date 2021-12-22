<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 9DocRef
 *
 * @ORM\Table(name="9_doc_ref")
 * @ORM\Entity
 */
class DocRef
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom_doc", type="string", length=255, nullable=true)
     */
    private $nomDoc;

    /**
     * @var int
     *
     * @ORM\Column(name="id_max", type="integer", nullable=false)
     */
    private $idMax = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_verr", type="integer", nullable=true)
     */
    private $idUserVerr;


}
