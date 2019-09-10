<?php

namespace AppBundle\Contract;

interface GarageRepositoryInterface {

    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object;

    public function findOneById(int $id): object;

    public function findBy(array $condition = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc'): array;

    public function findOneBySlug(string $slug): object;

    public function findByLocation(array $condition = [], array $location = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc'): array;

}