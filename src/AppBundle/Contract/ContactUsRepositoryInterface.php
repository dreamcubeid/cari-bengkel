<?php

namespace AppBundle\Contract;

interface ContactUsRepositoryInterface {

	public function add(
        string $name,
        string $email,
        string $phone,
        string $message
    ): object;

}