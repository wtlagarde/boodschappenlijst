<?php

class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function numbers($value, $decimals, $min = 1, $max = INF)
    {
        $value = pow(10,$decimals) * $value;
        return filter_var($value, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max)));
        
    }
}