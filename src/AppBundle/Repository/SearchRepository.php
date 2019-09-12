<?php

namespace AppBundle\Repository;

use AppBundle\Contract\SearchRepositoryInterface;

class SearchRepository extends BaseRepository implements SearchRepositoryInterface
{
    public function findBy(
        array $condition = [], 
        array $location = [], 
        $orderBy = 'o_creationDate', 
        $sortBy = 'DESC'
    ): array {
        $result = array();
        
        return $result;
    }
}