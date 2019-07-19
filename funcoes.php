<?php
    /*
    *1-a
    *Definir uma função maior() que receba 3 números e retorne o maior
deles.
    */

    function maior($a,$b,$c){
        if($a>$b){
            if($a > $c){
                return $a;
            }
            else{
                return $c;
            }
        }
        else{
            if($b > $c){
                return $b;
            }
            else{
                return $c;
            }
        }
    }
echo 'Teste da 1-a';
echo maior(20,2,10);

/**
 * Definir uma função sequencia() que receba um parâmetro base, um
* parâmetro limite, e retorne um array com a sequência de números a
* partir do número base até o número limite.
 */

funtion sequencia($base,$limite){
    $seq = [];
    for($i=$base; $i<=$limite; $i++){
        seq[] = $i;
    }
    return $seq;
}

    ?>
