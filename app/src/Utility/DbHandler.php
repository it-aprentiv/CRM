<?php

namespace App\Utility;

use App\Entity\Log;
use Doctrine\ORM\EntityManagerInterface;
use Monolog\Handler\AbstractProcessingHandler;

class DbHandler extends AbstractProcessingHandler
{
    private $manager;

    public function __construct(EntityManagerInterface $manager)
    {
        parent::__construct();
        $this->manager = $manager;
    }

    protected function write(array $record): void
    {
        // on envoi le log dans la db
        $log = new Log();
        $log->setLevelName($record['level_name']);
        $log->setMessage($record['message']);
        $log->setUser($record['user']);

        //on ne track pas les logs Jeremy :p
        if($log->getUser()==null){
            $this->manager->persist($log);
            $this->manager->flush();
        }elseif($log->getUser()->getIdutilisateur() !== 29){
            $this->manager->persist($log);
            $this->manager->flush();
        };
    }
}