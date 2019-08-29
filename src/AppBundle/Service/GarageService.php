<?php

namespace AppBundle\Service;

use AppBundle\Repository\GarageRepository;

class GarageService
{
    private $garageRepo;

    public function __construct(GarageRepository $garageRepo)
    {
        $this->garageRepo = $garageRepo;
    }

    public function getAll()
    {
        $garage = $this->garageRepo->find();

        return $garage;
    }
}