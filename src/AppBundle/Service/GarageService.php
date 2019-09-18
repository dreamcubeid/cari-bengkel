<?php

namespace AppBundle\Service;

use AppBundle\Contract\GarageRepositoryInterface;

class GarageService
{
    private $garageRepo;

    public function __construct(GarageRepositoryInterface $garageRepo)
    {
        $this->garageRepo = $garageRepo;
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

        if ((count($garage) <= 0) && !empty($location)) {
            $limit = 5;
            unset($data['radius']);
            
            $garage = $this->garageRepo->findBy($data, $location, $orderBy, $sortBy, $limit);            
        }

        if ($garage) {
            $tempGarage = [];

            foreach ($garage as $key => $value) {
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

            $garage = $tempGarage;
        }

        return $garage;
    }
    
}