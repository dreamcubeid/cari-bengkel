<?php

namespace AppBundle\Controller\Api;

use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Traits\ApiResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Service\ContactUsService;
use AppBundle\Service\EmailBucketService;


/**
 * @Route("/contact-us")
 */
class ContactUsController
{

    use ApiResponse;

    protected $contactUsService;
    protected $emailBucketService;

    public function __construct(ContactUsService $contactUsService, EmailBucketService $emailBucketService)
    {
        $this->contactUsService = $contactUsService;
        $this->emailBucketService = $emailBucketService;
    }

    /**
     * @Route("/add", methods={"POST"})
     */
    public function add(Request $request = null)
    {
        $data = $request->request->all();
        $result1 = $this->contactUsService->create(
            $data['name'],
            $data['email'],
            $data['phone'],
            $data['message']
        );

        $params = ['Name'=>$data['name'], 'Message'=>$data['message'] ];
        $result2 = $this->emailBucketService->create(
            'Contact to admin',
            'Contact to admin',
            null,
            'admin@caribengkel.com',
            null,
            null,
            '/email-template/user/contact-us-success',
            $params,
            null,
            null,
            []
        );

        return $this->sendSuccessResponse($result1.' and '.$result2, 'Contact us data have been saved');
    }
}
