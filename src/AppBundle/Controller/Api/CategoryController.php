<?php

namespace AppBundle\Controller\Api;

use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Traits\ApiResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\CategoryService;

/**
 * @Route("/category")
 */
class CategoryController
{

    use ApiResponse;

    protected $categoryService;
    
    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    /**
     * @Route("/get-by-name", methods={"post"})
     */
    public function findByName(Request $request = null)
    {
        $data = $request->request->get('name');
        $result = $this->categoryService->getByName($data);
        
        return $this->sendSuccessResponse($result, 'Data has been successfully retrieved');
    }
}
