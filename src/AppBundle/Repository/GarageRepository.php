<?php

namespace AppBundle\Repository;

use AppBundle\Contract\GarageRepositoryInterface;
use Pimcore\Model\DataObject\Garage;

class GarageRepository implements GarageRepositoryInterface
{
    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        $garage = new Garage\Listing();

        $garage->setOrderKey($orderBy);
        $garage->setOrder($sortBy);

        return $garage;
    }

    public function findOneBy(int $id)
    {
        
    }

    public function findBy(array $data, string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        
    }
}