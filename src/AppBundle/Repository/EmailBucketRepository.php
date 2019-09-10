<?php

namespace AppBundle\Repository;

use AppBundle\Contract\EmailBucketRepositoryInterface;
use Pimcore\Model\DataObject\EmailBucket;

class EmailBucketRepository extends BaseRepository implements EmailBucketRepositoryInterface
{

    public function find(string $condition = '', string $orderBy = 'o_creationDate', string $sortBy = 'asc', int $limit = 10): object
    {
        $email = new EmailBucket\Listing();

        $email->setCondition($condition);
        $email->setOrderKey($orderBy);
        $email->setOrder($sortBy);

        return $email;
    }

    public function findOneById(int $id): object
    {
    	$email = EmailBucket::getById($id);

    	return $email;
    }
   
}