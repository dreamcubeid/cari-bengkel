<?php

namespace AppBundle\Service;

use AppBundle\Contract\GarageRepositoryInterface;

class SearchService
{
    private $garageRepo;

    public function __construct(GarageRepositoryInterface $garageRepo)
    {
        $this->garageRepo = $garageRepo;
    }

    public function findBy(array $condition = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'DESC')
    {
        if (!empty($location)) 
        {
            $orderBy = 'Distance';
            $sortBy = 'ASC';
        }
        
        $result = $this->garageRepo->findBy($condition, $location, $orderBy, $sortBy);

        return $result;
    }
}