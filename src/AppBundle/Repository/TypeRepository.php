<?php

namespace AppBundle\Repository;

use AppBundle\Contract\TypeRepositoryInterface;
use Pimcore\Model\DataObject\Type;

class TypeRepository implements TypeRepositoryInterface
{
    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object
    {
        $type = new Type\Listing();

        $type->setOrderKey($orderBy);
        $type->setOrder($sortBy);

        return $type;
    }

    public function findOneBySlug(string $slug): object
    {
        $type = Type::getBySlug($slug, 1);

        return $type;
    }

}