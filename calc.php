<?php

class Calculadora{
    public $valor;

    /**
     * @param int $valor
     * @return int
    */
    public static function somarInferior(int $valor = 0)
    {   
        $somatorio = 0;
        if ($valor > 0) {
            if (is_int($valor)) {
                for ($i=0; $i < $valor; $i++) { 
                    if ($i % 3 == 0 && $i > 0){
                        $somatorio += $i;
                    }
                    if ( $i % 5 == 0 && $i > 0) {
                        $somatorio += $i;
                    }
                }
                echo $somatorio;
            }
        } else {
            echo "O valor precisa ser positivo!";
        }
    }
}

