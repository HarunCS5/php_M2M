<?php
/**
 * Created by PhpStorm.
 * User: p16197797
 * Date: 03/12/2018
 * Time: 16:04
 */

class Validator
{
    public function __construct()
    {
    }

    public function __destruct()
    {
    }

    public function sanitise_String($string_To_Sanitise)
    {
        $clean_String = false;

        if (!empty($string_To_Sanitise)){
            $clean_String = filter_var($string_To_Sanitise, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
        }

        else{
            $clean_String = 'No message returned';
        }

        return $clean_String;


    }





}