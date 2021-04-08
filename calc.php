<?php

class Calculadora{
    public $valor;

    /**
     * Método estático que retorna a somatória dos valores menores que o parâmetro passado. O parâmetro tem que ser inteiro e positivo.
     * Os números que seram somados tem que ser divisíveis por 3 ou 5.
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

