<?php

namespace AppBundle\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\SearchService;
use AppBundle\Service\CategoryService;

/**
 * @Route("/cari")
 */
class SearchController extends FrontendController
{
    protected $searchService;
    protected $categoryService;

    public function __construct(SearchService $searchService, CategoryService $categoryService)
    {
        $this->searchService = $searchService;
        $this->categoryService = $categoryService;
    }
    /**
     * @Route("/", methods={"GET"}, name="search")
     */
    public function indexAction(Request $request)
    {
        $query = $request->query->all();
        $data['condition'] = [];

        //get session for current location
        $session = $request->getSession();
        $location = $session->get('CURRENT_LOCATION') ? $session->get('CURRENT_LOCATION') : [];

        //default setting
        $limit = 10;
        $offset = 0;
        $query['limit'] = $limit;
        $page = addslashes(filter_var($query['page'], FILTER_VALIDATE_INT)) ? addslashes(filter_var($query['page'], FILTER_VALIDATE_INT)) : null;
        $orderBy = 'o_creationDate';
        $sortBy = 'desc';

        if ($query['category']) {
            $arrCategory = [];
            $category = $this->categoryService->getOneBySlug(addslashes(filter_var(str_replace('_', '-', $query['category']), FILTER_SANITIZE_STRING)));
            $categoryId = $category->getId();

            array_push($arrCategory, $categoryId);

            $data['condition']['category'] = $arrCategory;
        }

        if ($query['keyword']) {
            $data['condition']['search'] = addslashes(filter_var($query['keyword'], FILTER_SANITIZE_STRING));
        }

        if ($page) {
            $offset = ($page - 1) * $limit;
        }

        $result = $this->searchService->findBy($data['condition'], $location, $orderBy, $sortBy, $limit, $offset);

        $this->view->result = $result->data;
        $this->view->count = $result->count;
        $this->view->params = $query;
    }

}