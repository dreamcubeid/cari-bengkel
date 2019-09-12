<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\GarageService;

/**
 * @Route("/cari")
 */
class SearchController extends FrontendController
{
    protected $garageService;

    public function __construct(GarageService $garageService)
    {
        $this->garageService = $garageService;
    }
    /**
     * @Route("/", methods={"GET"}, name="search")
     */
    public function indexAction(Request $request)
    {
        $data = $request->query->all();

        $data['condition'] = $data['q'] ? $data['q'] : [];
        $data['location'] = $data['location'] ? $data['location'] : [];

        $result = $this->garageService->getByLocation($data['condition'], $data['location']);

        print_r($result);die;
    }

}