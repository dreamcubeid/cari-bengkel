<?php

namespace AppBundle\Service;

use AppBundle\Contract\EmailBucketRepositoryInterface;
use AppBundle\Utils\Email;

class EmailBucketService
{

    private $emailBucketRepo;

    public function __construct(EmailBucketRepositoryInterface $emailBucketRepo)
    {
        $this->emailBucketRepo = $emailBucketRepo;
    }

    public function create(
        string $activity = null,
        string $subject = null,
        string $from = null,
        string $to = null,
        string $cc = null,
        string $bcc = null,
        string $template = null,
        array $params = [],
        string $bodyText = null,
        int $delay = null,
        array $attachment = []
    )
    {
        $email = $this->emailBucketRepo->add(
                    $activity,
                    $subject,
                    $from,
                    $to,
                    $cc,
                    $bcc,
                    $template,
                    $params,
                    $bodyText,
                    $delay
                );

        if ($email) {
            //set attachment
            if ($attachment) {
                $attachments = [];

                foreach ($attachment as $key => $att) {
                    array_push($attachments, $att);
                }

                $email->setAttachment($attachments);
            }            

            if($email->save()) {
                if(!$email->getDelay()){
                    // send email by id
                    self::sendById($email->getId());                
                } 
            }
        }

        return $email; 
    }

    public function send(string $condition = '', string $orderBy = 'o_creationDate', string $sortBy = 'asc')
    {
        $emailLibrary = new Email();

        $emails = $this->emailBucketRepo->find($condition, $orderBy, $sortBy);

        if ($emails->count()) {
            foreach ($emails as $email) {
                $result = $emailLibrary->sendEmail(
                            $email->getTo(),
                            $email->getFrom(),
                            $email->getSubject(),
                            $email->getTemplate(),
                            (array)json_decode($email->getParams()),
                            $email->getBodyText(),
                            $email->getCC(),
                            $email->getBCC(),
                            $email->getAttachment()
                        ); 
                
                if ($result->status) {
                    $email->setStatus("Success");
                } else {
                    $email->setMessage($result->message);
                    $email->setStatus("Failed");
                }

                $email->setCounter($email->getCounter() ? $email->getCounter() + 1 : 1);
                $email->save();
            }
        }

    	return true;
    }

    public function sendById(int $id)
    {
        $emailLibrary = new Email();

    	$email = $this->emailBucketRepo->findOneById($id);
        
        if ($email) {
            $result = $emailLibrary->sendEmail( 
                        $email->getTo(),
                        $email->getFrom(),
                        $email->getSubject(),
                        $email->getTemplate(),
                        (array)json_decode($email->getParams()),
                        $email->getBodyText(),
                        $email->getCC(),
                        $email->getBCC(),
                        $email->getAttachment()
                    );

            if ($result->status) {
                $email->setStatus("Success");
            } else {
                $email->setMessage($result->message);
                $email->setStatus("Failed");
            }

            $email->setCounter($email->getCounter() ? $email->getCounter() + 1 : 1);
            $email->save();
        }

        return true;
    }

    public function delete(int $time = null)
    {
        $orderBy = "o_modificationDate";
        $sortBy = "desc";
        $limitTime = strtotime('-'.$time.' minutes', time());
        $condition = "o_published = 1 AND Status = 'Success' AND o_modificationDate < ".$limitTime;

        $emails = $this->emailBucketRepo->find($condition, $orderBy, $sortBy);
        
        if($emails->count()){            
            foreach ($emails as $email) {
                $email->delete();
            }              
        }

        return true;
    }

}