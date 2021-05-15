<?php

namespace PanduanVIP\TextManipulation;

class Text{
    
    /*----------------------------------------------------------------
        Make a sentence from a spintax
    ----------------------------------------------------------------*/
    
    public static function spintax($string) {
        preg_match('#{(.+?)}#is', $string, $m);
      
        if(empty($m)) return $string;
        
        $t = $m[1];
        if(strpos($t,'{')!==false){
          $t = substr($t, strrpos($t,'{') + 1);
        }
      
        $parts = explode("|", $t);
        $string = preg_replace("+{".preg_quote($t)."}+is", $parts[array_rand($parts)], $string, 1);
        return self::spintax($string);
    }


    /*----------------------------------------------------------------
        Converts string to array based on newlines
    ----------------------------------------------------------------*/

    public static function string_to_array($string)
    {
        $array = preg_split('/\r\n|\r|\n/', $string);
        $array = array_map('trim', $array);
        $array = array_filter($array);
        return $array;
    }
    

    /*----------------------------------------------------------------
        Take excerpt from a paragraph
    ----------------------------------------------------------------*/

    public static function excerpt($string, $max_length = 140, $cut_off = '...', $keep_word = true)
    {
        if (strlen($string) <= $max_length) {
            return $string;
        }
    
        if (strlen($string) > $max_length) {
            if ($keep_word) {
                $string = substr($string, 0, $max_length + 1);
    
                if ($last_space = strrpos($string, ' ')) {
                    $string = substr($string, 0, $last_space);
                    $string = rtrim($string);
                    $string .=  $cut_off;
                }
            } else {
                $string = substr($string, 0, $max_length);
                $string = rtrim($string);
                $string .=  $cut_off;
            }
        }
    
        return $string;
    }


    /*----------------------------------------------------------------
        Remove double space
    ----------------------------------------------------------------*/

    public static function remove_double_space($string){
        while(strpos($string, "  ")!==false){
            $string = str_replace("  ", " ", $string);
        }
        return trim($string);
    }


    /*----------------------------------------------------------------
        Get string between two strings
    ----------------------------------------------------------------*/

    public static function string_between($string, $start, $end){
        $string = ' ' . $string;
        $ini = strpos($string, $start);
        if ($ini == 0) return '';
        
        $ini += strlen($start);
        $len = strpos($string, $end, $ini) - $ini;
        return substr($string, $ini, $len);
    }

}