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

        return $garage;
    }
    
}