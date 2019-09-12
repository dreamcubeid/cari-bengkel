<?php

namespace AppBundle\Controller\Api;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use AppBundle\Traits\ApiResponse;
use AppBundle\Service\EmailBucketService;

/**
 * @Route("/email-bucket")
 */
class EmailBucketController {

	use ApiResponse;

	protected $emailBucketService;

    public function __construct(EmailBucketService $emailBucketService)
    {
        $this->emailBucketService = $emailBucketService;
    }

    /**
     * @Route("/send", methods={"GET"})
     */
    public function send(Request $request = null)
    {
        // initial condition for get valid data
        $condition1 = "((Status <> 'Success' OR (IFNULL(Counter, 0) < 1)))"; // if Status != Success OR (Counter < 1 OR Counter = NULL)        
        $condition2 = "(IFNULL(Counter, 0) < 100)"; // if Counter < 100)
        $condition = "o_published = 1 AND " . $condition1 . " AND " . $condition2;

        $result = $this->emailBucketService->send($condition);
        
        return $this->sendSuccessResponse($result, 'Emails have been sent');
    }

    /**
     * @Route("/send-by-id", methods={"GET"})
     */
    public function sendById(Request $request)
    {
        $id = $request->query->get('id');

        $result = $this->emailBucketService->sendById($id);

        return $this->sendSuccessResponse($result, 'Email has been sent');
    }

    /**
     * @Route("/delete", methods={"GET"})
     */
    public function delete(Request $request = null)
    {
        $time = $request->query->get('t');

        $result = $this->emailBucketService->delete($time);

        return $this->sendSuccessResponse($result, 'Emails have been deleted');
    }

}