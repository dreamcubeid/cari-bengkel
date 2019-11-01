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
     * @Route("/")
     */
    public function defaultAction(Request $request)
    {
        $categoryList = $this->categoryService->getAll();
        
        $this->view->category = $categoryList; 
    }

}
