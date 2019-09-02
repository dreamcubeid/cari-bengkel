<?php

namespace AppBundle\Contract;

interface GarageRepositoryInterface {

    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc');

    public function findOneBy(int $id);

    public function findBy(array $data, string $orderBy = 'o_creationDate', string $sortBy = 'desc');

}