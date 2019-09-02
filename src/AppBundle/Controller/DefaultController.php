<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\GarageService;

class DefaultController extends FrontendController
{
    private $garageService;

    public function __construct(GarageService $garageService)
    {
        // Service called by using dependency injection
        $this->garageService = $garageService;
    }

    public function defaultAction(Request $request)
    {
        // Put your code here
        $garageList = $this->garageService->getAll();

        foreach ($garageList as $garage) {
            print_r($garage);die;
        }
    }

    /**
     * @Route("/detail")
     */
    public function detailAction(Request $request)
    {

    }
}
