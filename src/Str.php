<?php
namespace xreload;

class  Str{

    public static function upper($str){
        return strtoupper($str);
    }

    public static function msg($str){
        $max =10;
        $s = '';
        for ($i= 0 ; $i < strlen($str); $i++){
            $s .= $str[$i];

            if ($i > $max) {
                if (' ' === $str[$i]){
                    Break;
                }
            }
        }
        return strlen($str) > $max ? $s . '...' : $s;

    }

    public static function checked($str){
        return in_array($str, $_POST['checkboxes']) ? ' checked ' : '';
    }

    public static function saved(){
        $post = $_POST['checkboxes'];

        $last = array_pop($post);
        if (empty($_POST['checkboxes']))
        {
            $res = '';
        }
        else
        {
            if (empty($post))
            {
                $res = $last  . " saved !";
            }
            else
            {
                $res = implode(', ', $post ) . ' and ' . $last . " saved !";
            }

            Log::info($res);
        }

        return $res;



    }
}
