<?php

namespace AppBundle\Contract;

interface GarageRepositoryInterface {

    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object;

    public function findOneById(int $id): object;

    public function findBy(array $condition = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc', int $limit = null, int $offset = null): object;

    public function findOneBySlug(string $slug): object;

    public function findByLocation(array $condition = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object;

}