<?php
namespace andreterceiro;

/**
 * Simple class to store one method 'cebolinizar' (yes, in 
 * Portugguese, as 'Cebolinha' is brazilian
 * 
 */
class Cebolinizador {
    public static function cebolinizar($string) {
        return mb_str_replace(
            'r', 
            'l', 
            mb_str_replace('R', 'L', $string)
        );
    }
}