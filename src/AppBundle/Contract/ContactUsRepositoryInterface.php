<?php

namespace AppBundle\Contract;

interface ContactUsRepositoryInterface {

	public function add(
        string $name,
        string $email,
        int $phone,
        string $message
    ): object;

}