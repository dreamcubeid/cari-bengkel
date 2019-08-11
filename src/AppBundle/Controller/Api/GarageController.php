<?php

namespace AppBundle\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use AppBundle\Traits\ApiResponse;

/**
 * @Route("/garage")
 */
class GarageController {

    use ApiResponse;

    /**
     * @Route("/get", methods={"GET"})
     */
    public function get()
    {
        $data = ['dummy' => 'yes'];
        return $this->sendSuccessResponse($data, 'Data has been successfully retrieved');
    }

    /**
     * @Route("/error", methods={"POST"})
     */
    public function error()
    {
        $error = 'data error';
        return $this->sendErrorResponse($error, []);
    }
}