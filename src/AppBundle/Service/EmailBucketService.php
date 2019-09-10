<?php

namespace AppBundle\Service;

use AppBundle\Repository\EmailBucketRepository;
use AppBundle\Utils\Email;

class EmailBucketService
{

    private $emailBucketRepo;

    public function __construct(EmailBucketRepository $emailBucketRepo)
    {
        $this->emailBucketRepo = $emailBucketRepo;
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
        int $delay = null,
        array $attachment = []
    )
    {
        $email = $this->emailBucketRepo;

        // $params = new \stdClass;
        // $params->Cc = $_POST['Cc'];
        // $params->Bcc = $_POST['Bcc'];
        // $params->Template = (array) json_decode($_POST['Template']);
        // $params->Params = $_POST['Params'];
        // $params->Message = $_POST['Message'];
        // $params->BodyText = $_POST['BodyText'];
        // $params->Attachment = $_POST['Attachment'];

        // $object = \AppModel\EmailBucket::add($params);   
    }

    public function send(string $condition = '', string $orderBy = 'o_creationDate', string $sortBy = 'asc')
    {
        $emailLibrary = new Email();

        $emails = $this->emailBucketRepo->find($condition, $orderBy, $sortBy);

        if ($emails->count()) {
            foreach ($emails as $email) {
                $params = new \stdClass;  
                $params->From = $email->From;      
                $params->To = $email->To;
                $params->Subject = $email->Subject;
                $params->Cc = $email->CC;
                $params->Bcc = $email->BCC;
                $params->Template = $email->Template;
                $params->Params = (array)json_decode($email->Params);
                $params->BodyHtml = $email->BodyText;
                
                if ($email->Attachment) {  
                    $params->Attachment = $email->Attachment;
                }

                $result = $emailLibrary->sendEmail(
                            $email->To,
                            $email->From,
                            $email->Subject,
                            $email->Template,
                            $email->Params,
                            $email->BodyText,
                            $email->CC,
                            $email->BCC,
                            $email->Attachment
                        ); 
                
                if ($result->Status) {
                    $email->Status = "Success";
                } else {
                    $email->Message = $result->Message;
                    $email->Status = "Failed";
                }

                $email->Counter = $email->Counter ? $email->Counter + 1 : 1;

            }
        }

    	return true;
    }

    public function sendById(int $id)
    {
    	$email = $this->emailBucketRepo->findOneById($id);

        if ($email) {
            $result = $emailLibrary->sendEmail( 
                        $email->To,
                        $email->From,
                        $email->Subject,
                        $email->Template,
                        $email->Params,
                        $email->BodyText,
                        $email->CC,
                        $email->BCC,
                        $email->Attachment
                    );

            if ($result->Status) {
                $email->Status = "Success";
            } else {
                $email->Message = $return->Message;
                $email->Status = "Failed";
            }

            $email->Counter = $email->Counter ? ($email->Counter+1) : 1;
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