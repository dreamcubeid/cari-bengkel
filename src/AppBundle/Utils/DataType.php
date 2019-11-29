<?php

namespace AppBundle\Utils;

class DataType
{
    public static function arrayToObject($arr)
    {
        if(is_array($arr)) $arr = (object) $arr;
        
        if(is_object($arr))
        {
            $obj = new \stdClass;
            foreach($arr as $key => $val) {
                $obj->$key = self::arrayToObject($val);
            }
        }
        else $obj = $arr;

        return $obj;
    }

    public static function objectToArray($obj)
    {
        if(is_object($obj)) $obj = (array) $obj;
        
        if(is_array($obj))
        {
            $arr = array();
            foreach($obj as $key => $val) {
                $arr[$key] = self::objectToArray($val);
            }
        }
        else $arr = $obj;

        return $arr;
    }
}