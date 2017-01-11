<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CompleteRange
 *
 * @author ronald
 */
class CompleteRange
{

    //put your code here
    public function build($string)
    {
        $recorre = explode(',', $string);
        $imprime = '';
        foreach ($recorre as $key => $value) {
            if ($value < 0) {
                return 'en la posición '.$key.' existe un numero no entero';
            }
        }
        for ($index = $recorre[0]; $index <= $recorre[count($recorre) - 1]; $index++) {
            $imprime = $imprime . $index . ',';
        }
        $imprime = substr($imprime, 0, -1);
        return '['.$imprime.']';
        
    }

}
