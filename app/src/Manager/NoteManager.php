<?php
/**
 * file NoteManager.php
 */

namespace App\Manager;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\EntityManagerInterface;

class NoteManager
{
    private $em;

    public function __construct(EntityManagerInterface $em) {
        $this->em = $em;
    }

    public function replaceNotes($iIdEntity, $sNoteClass, ?Collection $aNewComs){
        if (null === $aNewComs) {
            return true;
        }

        $aComs = $this->em->getRepository($sNoteClass)->findBy(['idTable' => $iIdEntity]);
        $aComsToDel = array_filter($aComs, function ($com) use ($aNewComs){
            return !$aNewComs->contains($com);
        });
        foreach ($aComsToDel as $com){
            $this->em->remove($com);
        }
        foreach ($aNewComs as $newCom){
            $this->em->merge($newCom);
        }
        $this->em->flush();

        return true;
    }

    public function deleteNotes($iIdEntity, $sNoteClass){
        $oEmptyCollec = new ArrayCollection();
        // remplacer par une liste vide de commentaire
        $this->replaceNotes($iIdEntity, $sNoteClass, $oEmptyCollec);
    }
}