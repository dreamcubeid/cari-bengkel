<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\GarageService;
use AppBundle\Service\CategoryService;

class DefaultController extends FrontendController
{
    private $garageService;
    private $categoryService;

    public function __construct(GarageService $garageService, CategoryService $categoryService)
    {
        // Service called by using dependency injection
        $this->garageService = $garageService;
        $this->categoryService = $categoryService;
    }

    public function defaultAction(Request $request)
    {
        // Put your code here
        $garageList = $this->garageService->getAll();
        $categoryList = $this->categoryService->getAll();

        foreach ($garageList as $garage) {
            print_r($garage); die;
        }
    }

    /**
     * @Route("/detail")
     */
    public function detailAction(Request $request)
    {

    }
}
