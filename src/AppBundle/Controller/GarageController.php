<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\GarageService;

/**
 * @Route("/bengkel")
 */
class GarageController extends FrontendController
{
    private $garageService;

    public function __construct(GarageService $garageService)
    {
        $this->garageService = $garageService;
    }

    /**
     * @Route("/{garageSlug}", name="garage_detail")
     */
    public function detailAction(Request $request, $garageSlug)
    {
        $garage = $this->garageService->getOneBySlug($garageSlug);

        print_r($garage);die;
    }

}