<?php

namespace AppBundle\Contract;

interface CategoryRepositoryInterface {

    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc');

}