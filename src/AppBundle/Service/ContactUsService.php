<?php

namespace AppBundle\Service;

use AppBundle\Contract\ContactUsRepositoryInterface;

class ContactUsService
{

    private $contactUsRepo;

    public function __construct(ContactUsRepositoryInterface $contactUsRepo)
    {
        $this->contactUsRepo = $contactUsRepo;
    }

    public function create(
        string $name = null,
        string $email = null,
        string $phone = null,
        string $message = null
    ) {
        $contactUs = $this->contactUsRepo->add(
            $name,
            $email,
            $phone,
            $message
        );

        $contactUs->save();

        return $contactUs;
    }
}
