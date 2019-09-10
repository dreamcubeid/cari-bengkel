<?php

namespace AppBundle\Contract;

interface EmailBucketRepositoryInterface {

	public function find(string $condition = '', string $orderBy = 'o_creationDate', string $sortBy = 'asc', int $limit = 10): object;

	public function findOneById(int $id): object;

}