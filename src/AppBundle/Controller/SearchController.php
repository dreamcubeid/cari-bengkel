<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/cari")
 */
class SearchController extends FrontendController
{
    /**
     * @Route("/", name="search")
     */
    public function indexAction(Request $request)
    {
        
    }

}