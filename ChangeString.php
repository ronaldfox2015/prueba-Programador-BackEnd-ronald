<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ChangeString
 *
 * @author ronald
 */
class ChangeString
{

    //put your code here
    public function build($sting)
    {
        $search = array(
            "a",
            "b",
            "c",
            "d",
            "e",
            "f",
            "g",
            "h",
            "i",
            "j",
            "k",
            "l",
            "m",
            "n",
            "ñ",
            "o",
            "p",
            "q",
            "r",
            "s",
            "t",
            "u",
            "v",
            "w",
            "x",
            "y",
            "z"
        );

        $i = 0;
        $newphrase = '';
        $texto = '';
        $may = false;
        $str = '';
        foreach (str_split($sting) as $key => $value) {
            if (ctype_alpha($value)) {
                $texto = $value;
                if (ctype_upper($value)) {
                    $may = true;
                    $texto = strtolower($texto);
                }
                foreach ($search as $k => $v) {

                    if ($texto == $v) {
                        if ($v != 'z') {
                            $str = str_replace($texto, $search[$k + 1], $texto);
                        } else {
                            $str = str_replace('z', 'a', $value);
                        }
                    }
                }
                if ($may) {
                    $str = strtoupper($str);
                }
                $newphrase = $newphrase . $str;
                $str = '';
                $may = false;
                $texto = '';
            } else {
                $newphrase = $newphrase . $value;
            }
        }
        return $newphrase;
    }

}
