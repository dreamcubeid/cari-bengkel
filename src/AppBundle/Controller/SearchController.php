<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\SearchService;
use AppBundle\Service\CategoryService;
use AppBundle\Service\TypeService;

/**
 * @Route("/cari")
 */
class SearchController extends FrontendController
{
    protected $searchService;
    protected $categoryService;
    protected $typeService;

    public function __construct(SearchService $searchService, CategoryService $categoryService, TypeService $typeService)
    {
        $this->searchService = $searchService;
        $this->categoryService = $categoryService;
        $this->typeService = $typeService;
    }

    /**
     * @Route("", methods={"GET"}, name="search")
     */
    public function indexAction(Request $request)
    {
        $query = $request->query->all();
        $data['condition'] = [];

        //default setting
        $limit = 10;
        $offset = 0;
        $query['limit'] = $limit;
        $page = addslashes(filter_var($query['page'], FILTER_VALIDATE_INT)) ? addslashes(filter_var($query['page'], FILTER_VALIDATE_INT)) : null;
        $orderBy = 'o_creationDate';
        $sortBy = 'desc';

        //get session for current location
        $session = $request->getSession();
        $location = [];

        if ($session->get('CURRENT_LOCATION')) {
            $location = $session->get('CURRENT_LOCATION');
            $orderBy = 'Distance';
            $sortBy = 'asc';
        }

        $query['filterLabel'] = [];
        $tempFilter = [];
        if ($query['type']) {
            $arrType = explode(",", $query['type']);
            $data['condition']['type'] = $arrType;

            //set filter label
            foreach ($arrType as $key => $value) {
                $detailType = $this->typeService->getOneById($value);
                $tempFilter['id'] = $detailType->getId();
                $tempFilter['name'] = $detailType->getName();
                $tempFilter['type'] = 'type';

                array_push($query['filterLabel'], $tempFilter);
            }
        }

        if ($query['category']) {
            $arrCategory = explode(",", $query['category']);
            $data['condition']['category'] = $arrCategory;

            //set filter label
            foreach ($arrCategory as $key => $value) {
                $detailCategory = $this->categoryService->getOneById($value);
                $tempFilter['id'] = $detailCategory->getId();
                $tempFilter['name'] = $detailCategory->getName();
                $tempFilter['type'] = 'category';

                array_push($query['filterLabel'], $tempFilter);
            }
        }

        if ($query['keyword']) {
            $data['condition']['search'] = addslashes(filter_var($query['keyword'], FILTER_SANITIZE_STRING));
        }

        if ($page) {
            $offset = ($page - 1) * $limit;
        }

        $result = $this->searchService->findBy($data['condition'], $location, $orderBy, $sortBy, $limit, $offset);

        //get all types
        $type = $this->typeService->getAll();

        //get all categories
        $category = $this->categoryService->getAll();

        $this->view->result = $result->data;
        $this->view->count = $result->count;
        $this->view->params = $query;
        $this->view->type = $type;
        $this->view->category = $category;
    }

}