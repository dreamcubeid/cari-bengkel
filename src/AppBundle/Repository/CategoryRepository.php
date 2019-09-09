<?php

namespace AppBundle\Repository;

use AppBundle\Contract\CategoryRepositoryInterface;
use Pimcore\Model\DataObject\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function find(string $orderBy = 'o_creationDate', string $sortBy = 'desc'): object
    {
        $category = new Category\Listing();

        $category->setOrderKey($orderBy);
        $category->setOrder($sortBy);

        return $category;
    }

}