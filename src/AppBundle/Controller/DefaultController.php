<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\GarageService;
use AppBundle\Service\CategoryService;

class DefaultController extends FrontendController
{
    private $garageService;
    private $categoryService;

    public function __construct(GarageService $garageService, CategoryService $categoryService)
    {
        // Service called by using dependency injection
        $this->garageService = $garageService;
        $this->categoryService = $categoryService;
    }

    public function defaultAction(Request $request)
    {
        // Put your code here
        $garageList = $this->garageService->getAll();
        $categoryList = $this->categoryService->getAll();

        $this->view->category = $categoryList;
    }

    /**
     * @Route("/detail/{name}/{id}")
     */
    public function detailAction(Request $request, $id)
    {
        $location = [];
        $orderBy = 'o_creationDate';
        $sortBy = 'desc';
        $limit = 2;

        $data = $this->garageService->getOneById($id);
        $categoryList = $this->categoryService->getAll();

        //set condition to get similar garages
        $condition = [];
        $condition['category'] = [];
        $condition['similarWith'] = $data->getId();

        //get session for current location
        $session = $request->getSession();
        if ($session->get('CURRENT_LOCATION')) {
            $location = $session->get('CURRENT_LOCATION'); 
            $orderBy = 'Distance';
            $sortBy = 'ASC';   
        }

        //set category condition
        if (!empty($data->getCategory())) {
            foreach ($data->getCategory() as $key => $value) {
                array_push($condition['category'], $value->getId());
            }
        } else {
            unset($condition['category']);
        }

        //get similar garage
        $similarGarage = $this->garageService->getByLocation($condition, $location, $orderBy, $sortBy, $limit)->data;

        $this->view->data = $data;
        $this->view->category = $categoryList;
        $this->view->similarGarage = $similarGarage;
        
        $this->view->metaTitle = $data->getMetaTitle();
        $this->view->metaDescription = $data->getMetaDescription();
        $this->view->metaKeyword = $data->getMetaKeyword();
    }
}
