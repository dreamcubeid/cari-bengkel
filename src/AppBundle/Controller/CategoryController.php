<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\CategoryService;

/**
 * @Route("/kategori")
 */
class CategoryController extends FrontendController
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @Route("")
     */
    public function defaultAction(Request $request)
    {
        $query = $request->query->all();

        //default setting
        $limit = 10;
        $query['limit'] = $limit;
        $page = addslashes(filter_var($query['page'], FILTER_VALIDATE_INT)) || null;
        $offset = $page ? ($page - 1) * $limit : 0;
        $orderBy = 'o_creationDate';
        $sortBy = 'desc';
        $condition = "";
        $conditionValue = [];

        if ($query['keyword']) {
            $condition = "name LIKE ?";
            $keyword = addslashes(filter_var($query['keyword'], FILTER_SANITIZE_STRING));
            $conditionValue = ['%'.$keyword.'%'];
        }
        $categoryList = $this->categoryService->getBy($condition, $conditionValue, $orderBy, $sortBy, $limit, $offset); 

        $this->view->category = $categoryList; 
    }

}
