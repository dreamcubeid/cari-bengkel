<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/kontak")
 */
class ContactController extends FrontendController
{
    public function __construct()
    {

    }

    /**
     * @Route("/", methods={"GET"}, name="kontak")
     */
    public function indexAction(Request $request)
    {

    }
}