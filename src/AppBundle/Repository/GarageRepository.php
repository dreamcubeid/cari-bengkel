<?php

namespace AppBundle\Repository;

use AppBundle\Contract\GarageRepositoryInterface;
use AppBundle\Model\Garage;

class GarageRepository implements GarageRepositoryInterface
{
    public function find()
    {
        $garage = Garage::find();

        return $garage;
    }

    public function findOne()
    {
        
    }
}