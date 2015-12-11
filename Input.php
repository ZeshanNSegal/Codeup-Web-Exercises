<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */

    public static function notEmpty($key)
    {
        # // TODO: Fill in this function
        if(isset($_REQUEST[$key]) && $_REQUEST[$key] != ''){
            return true;
        }
        return false;
    }

    public static function has($key)
    {
        if(isset ($_REQUEST[$key]))
        {
            return true;
        } 
        return false;
    }

    public static function getString($key)
    {
        $value = trim(self::get($key));
        if(!is_string ($value)){
            throw new Exception ("{$key} must be a string!");
        }
         return $value;
    }

    public static function getNumber($key)
    {
        $value = trim(str_replace(",", "", self::get($key)));
        if (!is_numeric ($value)){
            throw new Exception ("{$key} must be a number!");
        }    
        return $value;
    }

    public static function getDate($key)
    {
        $date = self::get($key);
        if(!strtotime($date)){
            throw new Exception ("The date must be a in format: yyyy-mm-dd!");
        } else{
            return date("y-m-d", strtotime($date));
        }          
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null)
    {
        if (self::has($key))
        {
            return $_REQUEST[$key];
        } 
        return $default;
    }

    public static function escape($input)
    {
        return htmlspecialchars(strip_tags($input));
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
