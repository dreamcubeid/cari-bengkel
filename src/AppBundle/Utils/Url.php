<?php

namespace AppBundle\Utils;

class Url {
	
	public static function convertToFriendlyUrl(string $string)
    {
        //Prep string with some basic normalization
        $string = strtolower($string);
        $string = strip_tags($string);
        $string = stripslashes($string);
        $string = html_entity_decode($string);

        //Remove quotes (can't, etc.)
        $string = str_replace('\'', '', $string);

        //Replace non-alpha numeric with hyphens
        $match = '/[^a-z0-9]+/';
        $replace = '-';
        $string = preg_replace($match, $replace, $string);

        $string = trim($string, '-');

        return $string;
    } 

    public static function getSiteUrl(string $authentication = '', bool $getPath = false, bool $withParams = true) 
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
        $host =  htmlentities($_SERVER['HTTP_HOST']);        

        $result = $protocol . $host;

        if ($getPath) {
            $requestUri = htmlentities($_SERVER['REQUEST_URI']);
            $result .= $requestUri;

            if(!$withParams){
                $result = strtok($result, "?");                
            }
        } else { 
            $result .= '/'; 
        }

        if ($authentication) {
            $result = $authentication . "@" . $result;
        }

        return $result;
    }  

}