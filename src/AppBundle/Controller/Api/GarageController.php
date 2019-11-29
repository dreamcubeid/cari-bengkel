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
        $session = $request->getSession();

        $data['condition'] = $data['q'] ? $data['q'] : [];
        $data['location'] = $data['location'] ? $data['location'] : [];

        if (!$data['location'] && $data['random']) {
            //generate seed
            if ($session->get('SEED')) {
                $seed = $session->get('SEED');
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
                $ip = str_replace(".","", $ip);
                $hour = date("H");
                $day = date("j");
                $month = date("n");
                $seed = ($ip + $hour + $day + $month);
                
                $session->set('SEED', $seed);
            }

            $data['condition']['randomSeed'] = $session->get('SEED');
            $data['orderBy'] = 'RAND';
        } else if ($data['location']) {
            $session->set('CURRENT_LOCATION', $data['location']);
        }

        //get sort & limit
        $orderBy = $data['orderBy'] ? $data['orderBy'] : 'o_creationDate';
        $sortBy = $data['sortBy'] ? $data['sortBy'] : 'DESC'; 
        $limit = $data['limit'];

        $result = $this->garageService->getByLocation($data['condition'], $data['location'], $orderBy, $sortBy, $limit);
        
        return $this->sendSuccessResponse($result, 'Data has been successfully retrieved');
    }
    
}