<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends FrontendController
{
    public function defaultAction(Request $request)
    {
        
    }

    /**
     * @Route("/detail")
     */
    public function detailAction(Request $request)
    {

    }
}
