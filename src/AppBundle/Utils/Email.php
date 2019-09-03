<?php

namespace AppBundle\Utils;

class Email {

    public static function sendEmail(
        string $to,
        string $from,
        string $subject,
        string $template,
        string $params,
        string $bodyHtml = '',
        string $cc = '',
        string $bcc = ''
    ): object {
        
        $return = new \Stdclass;
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

            $mail->send();
            $return->status = 1;

        } catch (Exception $e) {
            $return->message = $e->getMessage();
        }

        return $return;

    }

}