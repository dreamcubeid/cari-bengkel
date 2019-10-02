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

}