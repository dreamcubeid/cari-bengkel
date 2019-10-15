<?php

namespace AppBundle\Service;

use AppBundle\Contract\TypeRepositoryInterface;

class TypeService
{
    private $typeRepo;

    public function __construct(TypeRepositoryInterface $typeRepo)
    {
        $this->typeRepo = $typeRepo;
    }

    public function getAll(string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        $type = $this->typeRepo->find($orderBy, $sortBy);

        return $type;
    }

    public function getOneBySlug(string $slug)
    {
        $type = $this->typeRepo->findOneBySlug($slug);

        return $type;
    }
}