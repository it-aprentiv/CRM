<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * 1NdfDetail
 *
 * @ORM\Table(name="1_ndf_detail")
 * @ORM\Entity
 */
class NdfDetail
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="idb", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idb;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_ndf", type="integer", nullable=true)
     */
    private $idNdf = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_ndf", type="integer", nullable=true)
     */
    private $idbNdf = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date", type="datetime", nullable=true)
     */
    private $date;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_type_frais", type="integer", nullable=true)
     */
    private $idTypeFrais = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_type_frais", type="integer", nullable=true)
     */
    private $idbTypeFrais = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ht", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantHt = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="tx_tva", type="decimal", precision=10, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $txTva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_tva", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantTva = '0.0000';

    /**
     * @var string|null
     *
     * @ORM\Column(name="montant_ttc", type="decimal", precision=19, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $montantTtc = '0.0000';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_affaire", type="integer", nullable=true)
     */
    private $idAffaire = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_affaire", type="integer", nullable=true)
     */
    private $idbAffaire = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_detail_affaire", type="integer", nullable=true)
     */
    private $idDetailAffaire = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_detail_affaire", type="integer", nullable=true)
     */
    private $idbDetailAffaire = '0';

    /**
     * @var bool|null
     *
     * @ORM\Column(name="refacturer", type="boolean", nullable=true)
     */
    private $refacturer;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_add", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAdd = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_add", type="integer", nullable=true)
     */
    private $idUserAdd;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_maj", type="datetime", nullable=true)
     */
    private $dateMaj;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_user_maj", type="integer", nullable=true)
     */
    private $idUserMaj;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="statut_rst", type="boolean", nullable=true)
     */
    private $statutRst;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tva", type="integer", nullable=true)
     */
    private $idTva;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idb_tva", type="integer", nullable=true)
     */
    private $idbTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_ttc", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTtc;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mnt_tva", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $mntTva;

    /**
     * @var string|null
     *
     * @ORM\Column(name="total_ht", type="decimal", precision=19, scale=4, nullable=true)
     */
    private $totalHt;


}
