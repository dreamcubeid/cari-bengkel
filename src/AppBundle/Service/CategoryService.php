<?php

namespace AppBundle\Service;

use AppBundle\Contract\CategoryRepositoryInterface;

class CategoryService
{
    private $categoryRepo;

    public function __construct(CategoryRepositoryInterface $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getAll(string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        $category = $this->categoryRepo->find($orderBy, $sortBy);

        return $category;
    }

    public function getOneBySlug(string $slug)
    {
        $category = $this->categoryRepo->findOneBySlug($slug);

        return $category;
    }
}