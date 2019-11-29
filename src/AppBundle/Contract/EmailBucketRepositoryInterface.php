<?php

namespace AppBundle\Contract;

interface EmailBucketRepositoryInterface {

	public function find(string $condition = '', string $orderBy = 'o_creationDate', string $sortBy = 'asc', int $limit = 10): object;

	public function findOneById(int $id): object;

	public function add(
        string $activity,
        string $subject = null,
        string $from = null,
        string $to,
        string $cc = null,
        string $bcc = null,
        string $template = null,
        array $params = [],
        string $bodyText = null,
        string $message = null,
        int $delay = null
    ): object;

}