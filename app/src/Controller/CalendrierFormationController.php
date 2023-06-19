<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Entity\Propal;
use App\Entity\FormationDossier;
use App\Entity\FormationDossierDate;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\FormationDossierDateRepository;
use App\Manager\FormationDossierDateManager;
 

class CalendrierFormationController extends BaseController
{

    /**
     * @Route("/calendriers", name="calendrier_formation")
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {


        return $this->render('calendrier/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/calendriers/{id}/{type}", name="calendrier_formation_type")
     * @param Request $request
     * 
     * @return Response
     */
    public function type(
            Request $request,
        FormationDossierDateManager $formationDossierDateManager,
        FormationDossierDateRepository $formationDossierDateRepository,
        $id, 
        $type
        ){
            switch($id){
                case 'propal':
                    switch($type){
                        case 'intra':
                            $this->viewParams['title'] = 'Calendrier des formations(Propals) Intra';
                            // get data from propal
                            $data = $this->em->getRepository(Propal::class)->findBy(['typeendroit' => 'INTRA']);
                            $tab = [];
                            // Format data to display json
                            foreach($data as $key => $value){
                                if($value->getDatedebutpropal() && $value->getDatefinpropal()){
                                array_push($tab,[
                                    "url" => "/propal/".$value->getId()."/edit",
                                    "start" => $value->getDatedebutpropal()->format('Y-m-d'),
                                    "end" => $value->getDatefinpropal()->format('Y-m-d'),
                                    "title" => strtoupper($value->getFormation()->getCompetence()),
                                ]);
                            }
                            }
                            $this->viewParams['data'] = json_encode($tab,JSON_PRETTY_PRINT);
                            break;
                        case 'inter':
                            $this->viewParams['title'] = 'Calendrier des formations(Propals) Inter';
                            // get data from propal
                            $data = $this->em->getRepository(Propal::class)->findBy(['typeendroit' => 'INTER']);
                            $tab = [];
                            // Format data to display json
                            foreach($data as $key => $value){
                                if($value->getDatedebutpropal() && $value->getDatefinpropal()){
                                array_push($tab,[
                                    "url" => "/propal/".$value->getId()."/edit",
                                    "start" => $value->getDatedebutpropal()->format('Y-m-d'),
                                    "end" => $value->getDatefinpropal()->format('Y-m-d'),
                                    "title" => strtoupper($value->getFormation()->getCompetence())
                                ]);
                            }
                            }
                            $this->viewParams['data'] = json_encode($tab,JSON_PRETTY_PRINT);
                            break;
                    }
                    break;
                case 'dossier':
                    switch($type){
                        case 'intra':
                            $this->viewParams['title'] = 'Calendrier Dossier Intra';
                            // Get data from dossier
                            $data = $this->em->getRepository(FormationDossier::class)->findBy(['dossierType' => 'INTRA']);
                            $tab = [];
                            $bdata = [];

                            array_filter($data,function($value) use (&$bdata){
                                if($value->getDateDebutPeriode() && $value->getDateFinPeriode()){
                                if(array_key_exists($value->getNom().$value->getDateDebutPeriode()->format('Y-m-d'), $bdata)){
                                        if($bdata[$value->getNom()]["date-fin"] = $value->getDateFinPeriode()->format('Y-m-d')){
                                            array_push($bdata[$value->getNom().$value->getDateDebutPeriode()->format('Y-m-d')]["dossiers"],$value);
                                    }else{
                                        $bdata[$value->getNom().$value->getDateDebutPeriode()->format('Y-m-d')] = [
                                            "date-debut" => $value->getDateDebutPeriode()->format('Y-m-d'),
                                            "date-fin" => $value->getDateFinPeriode()->format('Y-m-d'),
                                            "dossiers" => [$value]
                                        ];
                                    }
                                }else{
                                    $bdata[$value->getNom().$value->getDateDebutPeriode()->format('Y-m-d')] = [
                                        "date-debut" => $value->getDateDebutPeriode()->format('Y-m-d'),
                                        "date-fin" => $value->getDateFinPeriode()->format('Y-m-d'),
                                        "dossiers" => [$value]
                                    ];
                                }
                                }
                            });

                            foreach($bdata as $key => $value){
                                if(array_key_exists("dossiers", $value)){
                                $dateStages = $formationDossierDateRepository->getDossierDate($value["dossiers"][0]->getId());
                                if(count($dateStages) > 0){
                                    $aFormatedFormationDates = $formationDossierDateManager->formatFormationDates($dateStages);
                                    $dates = $aFormatedFormationDates['dates'];
                                    foreach($dates as $key => $date){
                                        array_push($tab,[
                                            "start" => $date["dateD"]->format('Y-m-d H:i:s'),
                                            "end" => $date["dateF"]->format('Y-m-d H:i:s'),
                                            "title" => strtoupper($value["dossiers"][0]->getNom()). " - Dossiers (".count($value["dossiers"]).")",
                                            "allDay" => false,
                                            "extendedProps" => array_map(function($value){
                                                return [
                                                    "client" => $value->getIdClient() ? $this->em->getRepository(Contact::class)->find($value->getIdClient())->getNom(): "Inconnu",
                                                    "entity" => $value->getIdStructure()->getId() > 0 ? $value->getIdStructure()->getStructure() : "Inconnu",
                                                    "url" => "/dossier/".$value->getId()."/visualiser",
                                                    "stagiaires_count" => count($value->getStagiaires()),
                                                ];
                                            },$value["dossiers"])
                                            ]);
                                    }
                                }
                            }
                            
                            }
                            $this->viewParams['data'] = json_encode($tab,JSON_PRETTY_PRINT);
                            break;
                        case 'inter':
                            $this->viewParams['title'] = 'Calendrier Dossier Inter';
                            // Get data from dossier
                            $data = $this->em->getRepository(FormationDossier::class)->findBy(['dossierType' => 'INTER']);
                            $tab = [];

                            // make all value with the same name in the same array

                            $bdata = [];

                            array_filter($data,function($value) use (&$bdata){
                                if($value->getDateDebutPeriode() && $value->getDateFinPeriode()){
                                if(array_key_exists($value->getNom().$value->getDateDebutPeriode()->format('Y-m-d'), $bdata)){
                                        if($bdata[$value->getNom()]["date-fin"] = $value->getDateFinPeriode()->format('Y-m-d')){
                                            array_push($bdata[$value->getNom().$value->getDateDebutPeriode()->format('Y-m-d')]["dossiers"],$value);
                                    }else{
                                        $bdata[$value->getNom().$value->getDateDebutPeriode()->format('Y-m-d')] = [
                                            "date-debut" => $value->getDateDebutPeriode()->format('Y-m-d'),
                                            "date-fin" => $value->getDateFinPeriode()->format('Y-m-d'),
                                            "dossiers" => [$value]
                                        ];
                                    }
                                }else{
                                    $bdata[$value->getNom().$value->getDateDebutPeriode()->format('Y-m-d')] = [
                                        "date-debut" => $value->getDateDebutPeriode()->format('Y-m-d'),
                                        "date-fin" => $value->getDateFinPeriode()->format('Y-m-d'),
                                        "dossiers" => [$value]
                                    ];
                                }
                                }
                            });

                            foreach($bdata as $key => $value){
                                if(array_key_exists("dossiers", $value)){
                                $dateStages = $formationDossierDateRepository->getDossierDate($value["dossiers"][0]->getId());
                                if(count($dateStages) > 0){
                                    $aFormatedFormationDates = $formationDossierDateManager->formatFormationDates($dateStages);
                                    $dates = $aFormatedFormationDates['dates'];
                                    foreach($dates as $key => $date){
                                        array_push($tab,[
                                            "start" => $date["dateD"]->format('Y-m-d H:i:s'),
                                            "end" => $date["dateF"]->format('Y-m-d H:i:s'),
                                            "title" => strtoupper($value["dossiers"][0]->getNom()). " - Dossiers (".count($value["dossiers"]).")",
                                            "allDay" => false,
                                            "extendedProps" => array_map(function($value){
                                                return [
                                                    "client" => $value->getIdClient() ? $this->em->getRepository(Contact::class)->find($value->getIdClient())->getNom(): "Inconnu",
                                                    "entity" => $value->getIdStructure()->getId() > 0 ? $value->getIdStructure()->getStructure() : "Inconnu",
                                                    "url" => "/dossier/".$value->getId()."/visualiser",
                                                    "stagiaires_count" => count($value->getStagiaires()),
                                                ];
                                            },$value["dossiers"])
                                            ]);
                                    }
                                }
                            }
                            
                            }

                            $this->viewParams['data'] = json_encode($tab,JSON_PRETTY_PRINT);
                            break;
                    }
                    break;
                default:
                    // Response::HTTP_NOT_FOUND
                    return $this->redirectToRoute('calendrier_formation');
                    break;
            }
            return $this->render('calendrier/show.html.twig', $this->viewParams);
    }
}