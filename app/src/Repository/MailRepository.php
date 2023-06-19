<?php
/**
 * Created by PhpStorm.
 * User: anthony
 * Date: 16/12/2019
 * Time: 15:39
 */

namespace App\Repository;

use App\Entity\Contact;
use App\Entity\Mail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class MailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Mail::class);
    }

    public function getMailByContact(Contact $contact) {
        return $this->createQueryBuilder('m')
            ->where('m.idContact = :contact')
            ->setParameter('contact', $contact)
            ->getQuery()
            ->getOneOrNullResult();
    }

}