<?php

namespace AppBundle\Service;

use AppBundle\Contract\GarageRepositoryInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class GarageService
{
    private $garageRepo;
    private $session;

    public function __construct(GarageRepositoryInterface $garageRepo, SessionInterface $session)
    {
        $this->garageRepo = $garageRepo;
        $this->session = $session;
    }

    public function getAll(string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        $garage = $this->garageRepo->find($orderBy, $sortBy);

        return $garage;
    }

    public function getOneBySlug(string $slug)
    {
        $garage = $this->garageRepo->findOneBySlug($slug);

        return $garage;
    }

    public function getByLocation(array $data = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc', int $limit = null)
    {
        $garage = $this->garageRepo->findBy($data, $location, $orderBy, $sortBy, $limit);

        if ((count($garage->data) <= 0) && !empty($location) && $data['radius'] == 5) {
            $data['radius'] = 10;
            
            $garage = $this->garageRepo->findBy($data, $location, $orderBy, $sortBy, $limit);            
        }

        if ($garage->data) {
            $tempGarage = [];

            foreach ($garage->data as $key => $value) {
                $detail = $this->garageRepo->findOneById($value['o_id']);
                $operatingHours = $detail->getOperatingHours();
                $value['OperatingHours'] = [];

                if ($operatingHours) {
                    for ($i=0; $i < count($op = $operatingHours->getItems()); $i++) { 
                        $value['OperatingHours'][$i]['OperationalDay'] = $op[$i]->getOperationalDay();
                        $value['OperatingHours'][$i]['OpenHour'] = $op[$i]->getOpenHour();
                        $value['OperatingHours'][$i]['CloseHour'] = $op[$i]->getCloseHour();
                    }
                }

                array_push($tempGarage, $value);
            }

            $garage->data = $tempGarage;
        }

        return $garage;
    }
    
}