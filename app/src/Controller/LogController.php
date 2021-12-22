<?php 

namespace App\Controller;

use App\Entity\Filter\LogFilter;
use App\Form\Filter\LogFilterType;
use App\Repository\LogRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class LogController extends BaseController {

    /**
     * @Route("/log", name="Log_Controller")
     */
    public function index(PaginatorInterface $paginator, Request $request, LogRepository $logRepository, EntityManagerInterface $em)
    {
        $LogFilter = new LogFilter();
        $logfilterform = $this->createForm(LogFilterType::class, $LogFilter,[
            'method' => 'GET'
        ]);
        $logfilterform->handleRequest($request);
        $this->viewParams["log_filter_form"] = $logfilterform->createView();

        $logQuery = $logRepository->findLogQuery($LogFilter);
        $paginationLog = $paginator->paginate($logQuery, $request->query->get('page', 1), 50);
        $this->viewParams['paginationLog'] = $paginationLog;
        
        return $this->render('log/index.html.twig', $this->viewParams);
    }
}