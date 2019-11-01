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

    public function findOneBySlug(string $slug): object
    {
        $category = Category::getBySlug($slug, 1);

        return $category;
    }

    public function findOneById(int $id): object
    {
        $category = Category::getById($id);

        return $category;
    }

    public function findBy(string $condition = '', array $conditionValue = [], string $orderBy = 'o_creationDate', string $sortBy = 'desc', int $limit = null, int $offset = null)
    {
        $categories = new Category\Listing();
        $categories->setOffset($offset);
        $categories->setLimit($limit);
        $categories->setOrderKey($orderBy);
        $categories->setOrder($sortBy);
        $categories->setCondition($condition, $conditionValue);

        return $categories;
    }
    
    public function findByName(string $name): object
    {
        
        $category = Category::getByName($name);

        return $category;
    }

}