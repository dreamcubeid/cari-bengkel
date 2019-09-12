<?php

namespace AppBundle\Repository;

use AppBundle\Contract\EmailBucketRepositoryInterface;
use Pimcore\Model\DataObject\EmailBucket;
use Pimcore\Model\DataObject\AbstractObject;

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

    public function add(
        string $activity = '',
        string $subject = '',
        string $from = '',
        string $to = '',
        string $cc = '',
        string $bcc = '',
        string $template = '',
        string $params = '',
        string $bodyText = '',
        int $delay = null
    ): object
    {
        $email = new EmailBucket();

        //configure object
        $namekey = str_replace(' ', '-', $activity).'_'.microtime(true);
        $email->setKey(\Pimcore\File::getValidFilename($namekey));

        //set object path
        $getPath = AbstractObject::getByPath('/email-bucket');
        $email->setParentId($getPath->getId());

        //set data
        $email->setActivity($activity);
        $email->setSubject($subject);
        $email->setFrom($from);
        $email->setTo($to);
        $email->setCC($cc);
        $email->setBcc($bcc);
        $email->setTemplate($template);
        $email->setParams(json_encode($params));
        $email->setBodyText($bodyText);
        $email->setMessage($message);

        if ($delay) {
            $email->setStatus("Pending");
            $email->setDelay($delay);
        } else {
            $email->setStatus("Success");
            $email->setDelay(0);
        }

        $email->setIndex(0);
        $email->setPublished(1);

        return $email;

    }
   
}