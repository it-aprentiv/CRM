<?php

namespace App\Controller;

use App\Entity\ContactNote;
use App\Entity\DevisNote;
use App\Entity\DocDossierNote;
use App\Entity\DomiciliationNote;
use App\Entity\DossierNote;
use App\Entity\Encaissement;
use App\Entity\EncaissementNote;
use App\Entity\FactureNote;
use App\Entity\Filter\EncaissementFilter;
use App\Entity\Filter\NoteFilter;
use App\Entity\FormateurNote;
use App\Entity\FormationDossierNote;
use App\Entity\Note;
use App\Constants\Note as NoteConstant;
use App\Entity\NoteActionStatut;
use App\Form\NoteFilterType;
use App\Repository\EncaissementRepository;
use App\Repository\NoteRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NoteController extends BaseController
{
    /**
     * @Route("/note", name="Liste_notes_actions_Controller")
     */
    public function index(NoteRepository $noteRepository,
                          PaginatorInterface $paginator,
                          Request $request)
    {

        $noteFilter = new NoteFilter();
        // APR-144 : Restriction de la liste par les notes/commentaires de l'user connecté seulement
        $noteFilter->setAuthor($this->getUser());
        
        $noteFilterForm = $this->createForm(NoteFilterType::class, $noteFilter, ['method' => 'GET']);
        $noteFilterForm->handleRequest($request);
        $this->viewParams['note_filter'] = $noteFilterForm->createView();

        // get Users menu
        /*$aUsersMenu = [];
        foreach ($this->viewParams['user_menus']['gestion'] as $menu) {
            $aUsersMenu[$menu['idmenu']] = $menu['nomMenu'];
        }
        foreach ($this->viewParams['user_menus']['creation'] as $menu) {
            if (!array_key_exists($menu['idmenu'], $aUsersMenu)) {
                $aUsersMenu[$menu['idmenu']] = $menu['nomMenu'];
            }
        }*/
        
        $noteQuery = $noteRepository->findAllNote($noteFilter); //$aUsersMenu retiré le 08/10/2021 pour afficher les fiches clients au seins des notes et actions
        //dd($aUsersMenu);
        $pagination = $paginator->paginate($noteQuery, $request->query->get('page', 1), 10);
        $aNotes = array_map(function ($note){
            switch ($note['nomTable']) {
                case ContactNote::NOM_TABLE :
                    $sContact = $note['contact'];
                    break;
                case DevisNote::NOM_TABLE :
                case FormationDossierNote::NOM_TABLE :
                case FactureNote::NOM_TABLE :
                case EncaissementNote::NOM_TABLE :
                case DomiciliationNote::NOM_TABLE :
                case DocDossierNote::NOM_TABLE :
                case FormateurNote::NOM_TABLE :
                case NoteActionStatut::NOM_TABLE :
                case DossierNote::NOM_TABLE;
                    $sContact = $note['nomCon'];
                    break;
                default:
                    $sContact = '';
            }
            $note['contact'] = $sContact;

            return $note;
        }, $pagination->getItems())
;
        $this->viewParams['notes'] = $aNotes;
        $this->viewParams['pagination'] = $pagination;
        $this->viewParams['controller_name'] = 'NoteController';
        $this->viewParams['noteConstant'] = new NoteConstant();
        //dd($aNotes);

        return $this->render('note/index.html.twig', $this->viewParams);
    }

    /**
     * @Route("/note/{id}/show", name="Liste_notes_actions_Controller/showNote", requirements={"page"="\d+"})
     * Route vers le detail d'une note
     */
    public function show(NoteRepository $noteRepository, $id, Request $request)
    {
        $aNote = $noteRepository->findNoteByIdTable($id);
        $bError = false;
        $sMessage = "";

        if (!$aNote) {
            $sMessage = "Note inexistant !";
            $bError = true;
        }
        elseif(is_null($aNote['idTable'])){
            $sMessage = "L'entité contenant cette note n'existe plus !";
            $bError = true;
        }


        switch ($aNote['nomTable']) {
            case EncaissementNote::NOM_TABLE :
                $oEncaissFilter = new EncaissementFilter();
                $oEncaissFilter->setId($aNote['idTable']);
                /** @var EncaissementRepository $encaissementRepo */
                $encaissementRepo = $this->em->getRepository(Encaissement::class);
                $aData = $encaissementRepo->findEncaissementsQuery($oEncaissFilter)->getOneOrNullResult();
                if (!$aData) {
                    $sMessage = "L'entité contenant cette note n'existe plus !";
                    $bError = true;
                } else {
                    $iIdView = $aData['facture_id'];
                }
                break;
            default:
                $iIdView = $aNote['idTable'];
        }
        $sRoute = NoteConstant::getModuleUrl($aNote['nomTable']);

        if (!$sRoute) {
            $bError = true;
            $sMessage = "La fonctionnalité d'affichage du module n'est pas encore défini !";
        }

        if ($bError) {
            $this->addFlash('danger', $sMessage);
            return $this->redirectToRoute('Liste_notes_actions_Controller');
        } else {
            return $this->redirectToRoute($sRoute, ['id' => $iIdView]);
        }
    }

    /**
     * @Route("/note/{id}/delete", name="Liste_notes_actions_Controller/deleteNote", requirements={"page"="\d+"})
     * Fonction pour supprimer une note
     */
    public function delete($id)
    {
        $oEntityManager = $this->getDoctrine()->getManager();
        $oNote = $oEntityManager->getRepository(Note::class)->find($id);
        $oEntityManager->remove($oNote);
        $oEntityManager->flush();

        return new JsonResponse(array(
            'status' => 'Success',
            'message' => 'Suppression effectuée'),
            200);
    }

     /**
     * @Route("/note/{id}/update", name="note.update")
     */
    public function updateStatut($id)
    {
        $oEntityManager = $this->getDoctrine()->getManager();
        $oNote = $oEntityManager->getRepository(Note::class)->find($id);
        $idStat = $oEntityManager->getRepository(NoteActionStatut::class)->findOneBy(['id' => 3]);

        $oNote = $oNote->setIdActionStatut($idStat);

        $oEntityManager->persist($oNote);
        $oEntityManager->flush();
       // dd($oNote);
       return $this->redirectToRoute('home.portail');
    }
}
