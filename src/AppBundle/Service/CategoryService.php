<?php

namespace AppBundle\Service;

use AppBundle\Repository\CategoryRepository;

class CategoryService
{
    private $categoryRepo;

    public function __construct(CategoryRepository $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getAll(string $orderBy = 'o_creationDate', string $sortBy = 'desc')
    {
        $category = $this->categoryRepo->find($orderBy, $sortBy);

        return $category;
    }
}