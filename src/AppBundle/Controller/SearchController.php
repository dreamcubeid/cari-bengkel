<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\SearchService;

/**
 * @Route("/cari")
 */
class SearchController extends FrontendController
{
    protected $searchService;

    public function __construct(SearchService $searchService)
    {
        $this->searchService = $searchService;
    }
    /**
     * @Route("/", methods={"GET"}, name="search")
     */
    public function indexAction(Request $request)
    {
        $data = $request->query->all();

        $data['condition'] = $data['q'] ? $data['q'] : [];
        $data['location'] = $data['location'] ? $data['location'] : [];

        $result = $this->searchService->findBy($data['condition'], $data['location']);

        echo "<pre>";
        print_r($result);die;
    }

}