<?php

namespace AppBundle\Controller\Api;

use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Traits\ApiResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\ContactUsService;


/**
 * @Route("/contact-us")
 */
class ContactUsController
{

    use ApiResponse;

    protected $contactUsService;

    public function __construct(ContactUsService $contactUsService)
    {
        $this->contactUsService = $contactUsService;
    }

    /**
     * @Route("/add", methods={"POST"})
     */
    public function add(Request $request = null)
    {
        $data = $request->request->all();
        $result = $this->contactUsService->create($data['name'], $data['email'], $data['phone'], $data['message']);

        return $this->sendSuccessResponse($result, 'Contact us data have been saved');
    }
}
