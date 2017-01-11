<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClearPar
 *
 * @author ronald
 */
class ClearPar
{

    //put your code here
    public function build($string)
    {
        // ((()))))))
        //()()()
        $arreglo1 = str_split($string);
        $arreglo2 = str_split($string);
        $a = '(';
        $c = ')';$text='';
        $ar1=array();
                $ar2=array();

        foreach ($arreglo1 as $key => $value) {
            $pos = strpos($value, $a);
            if ($pos!== false) {
                $ar1[]=$value;
            }
        }
        foreach ($arreglo2 as $key => $value) {
            $pos = strpos($value, $c);
            if ($pos!== false) {
                $ar2[]=$value;
            }
        }
        foreach ($ar1 as $key => $value) {
            $text=$text.$value.$ar2[$key];
            
        }
        return $text;
    }

}
