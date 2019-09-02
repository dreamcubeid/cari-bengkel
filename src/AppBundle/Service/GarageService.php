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

    public function getAll(string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        $garage = $this->garageRepo->find($orderBy, $sortBy);

        return $garage;
    }
}