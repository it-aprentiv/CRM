<?php
/**
 * Created by PhpStorm.
 * User: kella
 * Date: 23/01/2020
 * Time: 13:53
 */

namespace App\Controller;


use Doctrine\DBAL\DBALException;
use Exception;
use Knp\Component\Pager\PaginatorInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\AvoirRepository;
use App\Manager\AvoirManager;

class AvoirController extends BaseController
{

    /**
     * @Route("/avoir/generate-num-avoir", name="avoir_generate_numero")
     */
    public function generateRefAvoir(Request $request, AvoirManager $avoirManager){
        $sStructure = $request->query->get('structure', '');

        $aResult = [
            'error' => false,
            'message' => '',
            'numero' => null
        ];

        $sNum = $avoirManager->generateNumero($sStructure);

        if ($sNum) {
            $aResult['numero'] = $sNum;
        } else {
            $aResult['error'] = true;
            $aResult['message'] = 'Impossible de générer un numéro pour ce structure';
        }

        return new JsonResponse($aResult);
    }
}