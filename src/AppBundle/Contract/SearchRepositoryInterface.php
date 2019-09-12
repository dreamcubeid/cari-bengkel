<?php

namespace AppBundle\Contract;

interface SearchRepositoryInterface
{
    public function findBy(array $condition = [], array $location = [], $orderBy = "o_creationDate", $sortBy = "DESC"): array;
}