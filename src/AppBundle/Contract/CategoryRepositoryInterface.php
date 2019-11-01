<?php

namespace AppBundle\Contract;

interface CategoryRepositoryInterface {

    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc');

    public function findOneBySlug(string $slug): object;

    public function findOneById(int $id): object;

    public function findBy(string $condition = '', array $conditionValue = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc', int $limit = null, int $offset = null);

}