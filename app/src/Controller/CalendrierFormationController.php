<?php

namespace App\Controller;

use App\Entity\Propal;
use App\Entity\FormationDossier;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
    public function type(Request $request, $id, $type){
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
                                    "title" => strtoupper($value->getFormation()->getCompetence()),
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
                            // Format data to display json
                            foreach($data as $key => $value){
                                if($value->getDateDebutPeriode() && $value->getDateFinPeriode()){
                                array_push($tab,[
                                    "url" => "/dossier/".$value->getId()."/visualiser",
                                    "start" => $value->getDateDebutPeriode()->format('Y-m-d'),
                                    "end" => $value->getDateFinPeriode()->format('Y-m-d'),
                                    "title" => strtoupper($value->getNom()),
                                ]);
                            }
                            }
                            $this->viewParams['data'] = json_encode($tab,JSON_PRETTY_PRINT);
                            break;
                        case 'inter':
                            $this->viewParams['title'] = 'Calendrier Dossier Inter';
                            // Get data from dossier
                            $data = $this->em->getRepository(FormationDossier::class)->findBy(['dossierType' => 'INTER']);
                            $tab = [];
                            // Format data to display json
                            foreach($data as $key => $value){
                                if($value->getDateDebutPeriode() && $value->getDateFinPeriode()){
                                array_push($tab,[
                                    "url" => "/dossier/".$value->getId()."/visualiser",
                                    "start" => $value->getDateDebutPeriode()->format('Y-m-d'),
                                    "end" => $value->getDateFinPeriode()->format('Y-m-d'),
                                    "title" => strtoupper($value->getNom()),
                                ]);
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