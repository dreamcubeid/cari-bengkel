<?php

namespace AppBundle\Contract;

interface TypeRepositoryInterface {

    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc');

    public function findOneBySlug(string $slug): object;

}