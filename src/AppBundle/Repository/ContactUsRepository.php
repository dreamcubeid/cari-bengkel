<?php

namespace AppBundle\Repository;

use AppBundle\Contract\ContactUsRepositoryInterface;
use Pimcore\Model\DataObject\ContactUs;
use Pimcore\Model\DataObject\AbstractObject;

class ContactUsRepository extends BaseRepository implements ContactUsRepositoryInterface
{
    public function add(
        string $name,
        string $email,
        int $phone,
        string $message
    ): object
    {
        $contactUs = new ContactUs();

        //configure object
        $namekey = microtime(true) .'_'. rand();
        $contactUs->setKey(\Pimcore\File::getValidFilename($namekey));

        //set object path
        $getPath = AbstractObject::getByPath('/contact-us');
        $contactUs->setParentId($getPath->getId());

        //set data
        $contactUs->setName($name);
        $contactUs->setEmail($email);
        $contactUs->setPhone($phone);
        $contactUs->setMessage($message);

        $contactUs->setPublished(true);

        return $contactUs;
    }   
    
}