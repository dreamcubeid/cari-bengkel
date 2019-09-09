<?php

namespace AppBundle\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use AppBundle\Traits\ApiResponse;
use AppBundle\Service\GarageService;

/**
 * @Route("/garage")
 */
class GarageController {

    use ApiResponse;

    protected $garageService;

    public function __construct(GarageService $garageService)
    {
        $this->garageService = $garageService;
    }

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

    /**
     * @Route("/get-by-location", methods={"GET"})
     */
    public function getByLocation(Request $request = null)
    {
        $data = $request->query->all();

        $data['condition'] = $data['q'] ? $data['q'] : [];
        $data['location'] = $data['location'] ? $data['location'] : [];

        $result = $this->garageService->getByLocation($data['condition'], $data['location']);
        
        return $this->sendSuccessResponse($result, 'Data has been successfully retrieved');
    }
    
}