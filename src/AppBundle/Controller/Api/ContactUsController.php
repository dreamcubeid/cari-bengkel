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
     * @Route("/create", methods={"POST"})
     */
    public function create(Request $request = null)
    {
        $data = $request->request->all();

        //check captcha
        $secretKey = "6Lf_C8IUAAAAAC9l-KpLm1B9UMjjDhB3IzLYdjno";
        $ip = $_SERVER['REMOTE_ADDR'];

        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $dataCaptcha = array('secret' => $secretKey, 'response' => $data['token']);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($dataCaptcha)
            )
        );

        $context  = stream_context_create($options);
        $response = file_get_contents($url, false, $context);
        $responseKey = json_decode($response, true);

        header('Content-type: application/json');

        if($responseKey["success"]) {
            $result1 = $this->contactUsService->create(
                $data['name'],
                $data['email'],
                $data['phone'],
                $data['message']
            );

            $params = ['Name' => $data['name'], 'Message' => $data['message']];

            //store to Email Bucket
            $result2 = $this->emailBucketService->create(
                'Contact Us',
                'Pesan Anda telah terkirim',
                null,
                $result1->getEmail(),
                null,
                null,
                '/email-template/user/contact-us-success',
                $params,
                null,
                null,
                []
            );

            return $this->sendSuccessResponse($result1, 'Contact us data has been saved');

        } else {

            return $this->sendErrorResponse("Captcha is invalid!");
        
        }
        
    }
}
