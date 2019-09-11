<?php

namespace AppBundle\Utils;

use Pimcore\File;

class Email {

    public static function sendEmail(
        string $to = null,
        string $from = null,
        string $subject = null,
        string $template = null,
        array $params = [],
        string $bodyHtml = null,
        string $cc = null,
        string $bcc = null,
        array $attachment = []
    ): object {
        print_r($to); die;
        $return = new \stdClass;
        $return->status = 0;
        $return->message = '';

        try {
            $mail = new \Pimcore\Mail();
            $mail->addTo($to);

            if ($subject) {
                $mail->setSubject($subject);
            }

            if ($template) {
                $mail->setDocument($template);
                $mail->setParams($params);
            } else {
                $mail->setBodyHtml($bodyHtml);
            }

            if ($from) {
                $temp = explode(",", $from);
                $trimmedFrom = trim($temp[0]);
                $alias = $temp[1] ? trim($temp[1]) : "";
                
                $mail->setFrom($trimmedFrom, $alias);
            }

            if (json_decode($cc)) {
                foreach (json_decode($cc) as $item) {
                    $mail->addCc($item->email, $item->name);
                }
            }

            if (json_decode($bcc)) {
                foreach (json_decode($bcc) as $item) {
                    $mail->addBcc($item->email, $item->name);
                }
            }

            if ($attachment) {
                foreach ($attachment as $key => $att) {
                    $mail->createAttachment($att->getData(), $att->getMimetype(), $att->getFilename());
                }
            }

            $mail->send();
            $return->status = 1;

        } catch (Exception $e) {
            $return->message = $e->getMessage();
        }

        return $return;

    }

}