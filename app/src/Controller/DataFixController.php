<?php

namespace App\Controller;

use App\Entity\Avoir;
use App\Entity\Filter\FactureFilter;
use App\Repository\AvoirRepository;
use App\Repository\ContactRepository;
use App\Repository\DossierRepository;
use App\Repository\FactureRepository;
use App\Repository\FormationDossierRepository;
use App\Repository\NoteRepository;
use App\Repository\StructureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function dd;
use function dump;

class DataFixController extends BaseController {

    /**
     * @Route("/data/facture-avoir-link/fix", name="facture.avoir.link_fix")
     * @IsGranted("ROLE_ADMIN")
     */
    public function factureAvoirLinkFix(
        FactureRepository $factureRepository,
        StructureRepository $structureRepository,
        EntityManagerInterface $em,
        Request $request,
        AvoirRepository $avoirRepository
    ) 
    {
        // Copier les avoirs dans la table avoir
        
        $refAvoir = $request->query->get('ref', 'A20200834');
        
        $factureFilter = new FactureFilter();
        $factureFilter->setRef($refAvoir);
        $factAvoirs = $factureRepository->findAllFacture($factureFilter)->getResult(); 
        
        foreach ($factAvoirs as $factAvoir) {
            // L'avoir ajoutée en tant que facture dans la table facture
            $oFactAvoir = $factureRepository->findOneBy(['id' => $factAvoir['factureId']]);
            
            // Récupérer la facture concernée
            $oFacture = $factureRepository->findOneBy([
                'noDossierRef' => $oFactAvoir->getNoDossierRef()
            ]);
            
            // Rechercher s'il existe déjà un avoir avec le même réf
            $oCheckAvoir = $avoirRepository->findOneBy([
                'noDossierRef' => $oFactAvoir->getNoDossierRef()
            ]);
            
            if ($oCheckAvoir) {
                continue;
            }
            
            // insérer dans l'avoir dans la facture dans la table Avoir
            $oAvoir = new Avoir();
            $oAvoir->setNoRef($oFactAvoir->getNoRef());
            $oAvoir->setFactureid($oFactAvoir->getId());
            $oAvoir->setRef($oFactAvoir->getRef());
            
            $oStructure = $structureRepository->find($oFactAvoir->getIdStructure());
            
            $oAvoir->setIdStructure($oStructure);
            $oAvoir->setIdbStructure($oFactAvoir->getIdbStructure());
            $oAvoir->setIdContact($oFactAvoir->getIdContact());
            $oAvoir->setIdbContact($oFactAvoir->getIdbContact());
            $oAvoir->setIdDevisRef($oFactAvoir->getIdDevisRef());
            $oAvoir->setIdbDevisReference($oFactAvoir->getIdbDevisReference());
            $oAvoir->setIdAffaire($oFactAvoir->getIdAffaire());
            $oAvoir->setIdbAffaire($oFactAvoir->getIdbAffaire());
            $oAvoir->setNoDevisRef($oFactAvoir->getNoDevisRef());
            $oAvoir->setNoFacture($oFactAvoir->getNoFacture());
            $oAvoir->setIntituleFacture($oFactAvoir->getIntituleFacture());
            $oAvoir->setDetails($oFactAvoir->getDetails());
            $oAvoir->setDateEmission($oFactAvoir->getDateEmission());
            $oAvoir->setConditionsReglement($oFactAvoir->getConditionsReglement());
            $oAvoir->setDateReglementFinal($oFactAvoir->getDateReglementFinal());
            
            $oAvoir->setIdStatut($oFactAvoir->getIdStatut()->getId());
            $oAvoir->setIdbStatut($oFactAvoir->getIdbStatut());
            $oAvoir->setTotalHt($oFactAvoir->getTotalHt());
            $oAvoir->setPourcentageRemise($oFactAvoir->getPourcentageRemise());
            $oAvoir->setMontantRemiseFixe($oFactAvoir->getMontantRemiseFixe());
            $oAvoir->setMontantFinalRemise($oFactAvoir->getMontantFinalRemise());
            $oAvoir->setPourcentageTva($oFactAvoir->getPourcentageTva());
            $oAvoir->setMontantTva($oFactAvoir->getMontantTva());
            
            $oAvoir->setTotalTtc($oFactAvoir->getMntTtc());
            
            if (!is_null($oFactAvoir->getTotalTtc()) && $oFacture->getTotalTtc() > 0) {
                $oAvoir->setTotalTtc($oFactAvoir->getTotalTtc());
            } 
            
            $oAvoir->setDateCreation($oFactAvoir->getDateCreation());
            $oAvoir->setDateAdd($oFactAvoir->getDateAdd());
            $oAvoir->setIdUserAdd($oFactAvoir->getIdUserAdd());
            $oAvoir->setDateMaj($oFactAvoir->getDateMaj());
            $oAvoir->setIdUserMaj($oFactAvoir->getIdUserMaj());
            $oAvoir->setStatutRst($oFactAvoir->getStatutRst());
            $oAvoir->setConditionsRglmnt($oFactAvoir->getConditionsRglmnt());
            $oAvoir->setDateRef($oFactAvoir->getDateRef());
            $oAvoir->setDateReglementFinal($oFactAvoir->getDateReglementFinal());
            $oAvoir->setDest1($oFactAvoir->getDest1());
            $oAvoir->setDest2($oFactAvoir->getDest2());
            $oAvoir->setIdActivite($oFactAvoir->getIdActivite());
            $oAvoir->setIdCondRglmnt($oFactAvoir->getIdCondRglmnt());
            $oAvoir->setIdContactOpca($oFactAvoir->getIdContactOpca());
            $oAvoir->setIdContactStr($oFactAvoir->getIdContactStr());
            $oAvoir->setIdDevisRef($oFactAvoir->getIdDevisRef());
            $oAvoir->setIdFactureCli($oFactAvoir->getIdFactureCli());
            $oAvoir->setIdOpca($oFactAvoir->getIdOpca());
            $oAvoir->setIdResponsable($oFactAvoir->getIdResponsable());
            $oAvoir->setIdStrRef($oFactAvoir->getIdStrRef());
            $oAvoir->setIdTva($oFactAvoir->getIdTva());
            $oAvoir->setIdbActivite($oFactAvoir->getIdbActivite());
            $oAvoir->setIdbCondRglmnt($oFactAvoir->getIdbCondRglmnt());
            $oAvoir->setIdbContactOpca($oFactAvoir->getIdbContactOpca());
            $oAvoir->setIdbContactStr($oFactAvoir->getIdbContactStr());
            $oAvoir->setIdbDevisRef($oFactAvoir->getIdbDevisRef());
            $oAvoir->setIdbFactureCli($oFactAvoir->getIdbFactureCli());
            $oAvoir->setIdbOpca($oFactAvoir->getIdbOpca());
            $oAvoir->setIdbResponsable($oFactAvoir->getIdbResponsable());
            $oAvoir->setIdbStrRef($oFactAvoir->getIdbStrRef());
            $oAvoir->setIdbTva($oFactAvoir->getIdbTva());
            $oAvoir->setMntMarge($oFactAvoir->getMntMarge());
            $oAvoir->setMntRem($oFactAvoir->getMntRem());
            $oAvoir->setMntTtc($oFactAvoir->getMntTtc());
            $oAvoir->setMntTva($oFactAvoir->getMntTva());
            $oAvoir->setNoDossierRef($oFactAvoir->getNoDossierRef());
            $oAvoir->setPrctMarge($oFactAvoir->getPrctMarge());
            $oAvoir->setResteARegler($oFactAvoir->getResteARegler());
            $oAvoir->setTauxRem($oFactAvoir->getTauxRem());
            $oAvoir->setTotalCoutHt($oFactAvoir->getTotalCoutHt());
            $oAvoir->setTotalHtAvantRem($oFactAvoir->getTotalHtAvantRem());
            $oAvoir->setTotalRegle($oFactAvoir->getTotalRegle());
            $oAvoir->setType($oFactAvoir->getType());
            $oAvoir->setIdDossier($oFactAvoir->getIdDossier());
            $oAvoir->setIdbDossier($oFactAvoir->getIdbDossier());
            $oAvoir->setDateDebutPeriode($oFactAvoir->getDateDebutPeriode());
            $oAvoir->setDateFinPeriode($oFactAvoir->getDateFinPeriode());
            $oAvoir->setDureeHeures($oFactAvoir->getDureeHeures());
            $oAvoir->setDureeJours($oFactAvoir->getDureeJours());
            $oAvoir->setRefAccord($oFactAvoir->getRefAccord());
            $oAvoir->setMntRestDu($oFactAvoir->getMntRestDu());
            $oAvoir->setTotalRegleHt($oFactAvoir->getTotalRegleHt());
            $oAvoir->setOpcaClt($oFactAvoir->getOpcaClt());
            $oAvoir->setNatureAvoir($oFactAvoir->getNatureavoir());
            
            // Persit
            $em->persist($oAvoir);
            $em->flush();
            

            // Lier l'avoir créé à la facture
            $oFacture->setIdAvoirLiee($oAvoir);

            $em->persist($oFacture);
            $em->flush();
            
            // Supprimer l'avoir V1 (rajouté dans facture)
            $em->remove($oFactAvoir);
            $em->flush();
        }

        return new Response('DONE');
    }
    
    /**
     * APR-210 : Détecter les anomalies liées à des entités (client, utilisateur, 
     * commercial, opca) qui n'existent pas dans la base
     * 
     * @Route("/data/entities/bad-links", name="entities.bad-links")
     * @IsGranted("ROLE_ADMIN") 
     */
    public function getProblemsList(NoteRepository $noteRepo,
        ContactRepository $contactRepo,
        FormationDossierRepository $dossierRepo
    ) {
        // Récupération des notes avec problème
        $oBadNotes = $noteRepo;
        // Liste des clients liés à des OPCA supprimé dans la base
        $aClientsWithBadOPCOLink = $contactRepo->getClientsWithBadOPCOLink();
        $this->viewParams['a_clients_with_bad_OPCO_links'] = $aClientsWithBadOPCOLink;
        // Liste des dossiers liés à des OPCO supprimé dans la base
        $this->viewParams['a_dossiers_with_bad_opco_links'] = $dossierRepo->getDossierWithBadLink();
        $this->viewParams['a_dossiers_with_bad_clients_links'] = $dossierRepo->getDossierWithBadLink('client');
        
        
        return $this->render('data-fix/entities-error-500.html.twig', $this->viewParams);
        
    }
    
    /**
     * APR-210 : Detecter les clients en erreur
     * 
     * @Route("/data/entities/bad-links/correct", name="data-fix.contact.client.fix-bad-opco-links")
     * @param Request $request
     * 
     */
    public function fixClientBadOPCOLinks(Request $request, ContactRepository $contactRepo) {
        
       $aClientsWithBadOPCAlink = $contactRepo->getClientsWithBadOPCOLink();
       
       foreach ($aClientsWithBadOPCAlink as $aClient) {
           $oContact = $contactRepo->find($aClient['id']);
           $oContact->setOpca(null);
           $this->em->persist($oContact);
           $this->em->flush();
       }
        
       $this->addFlash('success', 'Les erreurs ont été corrigées');
       $referer = $request->headers->get('referer');
       
       return $this->redirect($referer);
    }
    
    /**
     * APR-210 : Réparer les dossiers liés à des OPCO ou clients supprimés dans la base
     * 
     * @Route("/data/entities/dossier/bad-links/correct", name="data-fix.dossier.fix-bad-opco-links")
     * 
     * @param Request $request
     * @param DossierRepository $dossierRepo
     */
    public function fixDossierBadLinks(Request $request, FormationDossierRepository $dossierRepo) {
        $sTarget = $request->query->get('t', 'OPCO');
        
        $aDossiersWithBadlinks = $dossierRepo->getDossierWithBadLink($sTarget);
       
       foreach ($aDossiersWithBadlinks as $aDossier) {
           $oDossier = $dossierRepo->find($aDossier['id']);

           if ($sTarget === 'OPCO') {
               $oDossier->setIdOpca(null);
           } else if ($sTarget == 'client') {
               $oDossier->setIdClient(null);
           }
           
           $this->em->persist($oDossier);
           $this->em->flush();
           
           //break;
       }
        
       $this->addFlash('success', 'Les erreurs ont été corrigées');
       $referer = $request->headers->get('referer');
       
       return $this->redirect($referer);
    }
    
    
    /**
     * APR-188 : 1- Dans la liste, il faut que le N° interne soit : référence concatené avec le dispositif (2020-09-6957-LOC)
     * Contre-exemple: 2020-9-0342
     * 2- N° Interne: la séquence de 4 chiffres doit-être une incrémentation de la dernière reference enregistré
     * 
     * @Route("/data/dossier/fix/num-ref", name="dossier.fix.num_ref")
     * @IsGranted("ROLE_ADMIN")
     */
    public function fixNumeroDossierIncremental(Request $request, 
        FormationDossierRepository $formationDossierRepo) {
        // Sélectionner la dernière bonne référence : date creation < 01-09-2020 => 0342
        
        $ilastIncrementation = $request->query->get('inc', 342);
        $iLastDossierId = $request->query->get('id', 28984); 
        
        // Récupérer les dossier avec référence invalid
        $oNotValidDossiers = $formationDossierRepo->getNotValidRefDossier($iLastDossierId);
        $iNextIncrement = $ilastIncrementation + 1;
        
        foreach ($oNotValidDossiers as $dossier) {
            // Incrementation avec 0 leading : 0343
            $sIncrement = str_pad($iNextIncrement, 4, "0", STR_PAD_LEFT);
            
            $sValidRefDossier = $dossier->getDateEnvoi()->format('Y-m-') . $sIncrement . "-".$dossier->getDispositif();
            
            $dossier->setRef($sValidRefDossier);
            
            $this->em->persist($dossier);
            $this->em->flush();
            
            $iNextIncrement++;
        }
        
        return new Response('DONE');
    }
    
}
