<?php

namespace AppBundle\Repository;

use AppBundle\Contract\GarageRepositoryInterface;
use AppBundle\Model\DataObject\Garage;

class GarageRepository extends BaseRepository implements GarageRepositoryInterface
{
    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object
    {
        $garage = new Garage\Listing();

        $garage->setOrderKey($orderBy);
        $garage->setOrder($sortBy);

        return $garage;
    }

    public function findOneById(int $id): object
    {
        $garage = Garage::getById($id);
        
        return $garage;
    }

    public function findBy(array $condition = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object
    {
        
    }

    public function findOneBySlug(string $slug): object
    {
        $garage = Garage::getBySlug($slug, 1);

        return $garage;
    }

    public function findByLocation(array $condition = [], array $location = null, string $orderBy = 'o_creationDate', string $sortBy = 'desc'): array
    {
        $garage = Garage::getWithDistance($condition, $location, $orderBy, $sortBy);

        return $garage;
    }

}