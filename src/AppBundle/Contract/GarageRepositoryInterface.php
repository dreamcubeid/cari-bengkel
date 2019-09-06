<?php

namespace AppBundle\Contract;

interface GarageRepositoryInterface {

    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object;

    public function findOneById(int $id): object;

    public function findBy(array $data, string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object;

    public function findOneBySlug(string $slug): object;

    public function findByLocation(array $data = [], array $location = null, string $orderBy = 'o_creationDate', string $sortBy = 'desc');

}