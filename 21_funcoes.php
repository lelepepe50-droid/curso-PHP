<?php
function escrever($texto){
    echo "{$texto} <br>";
}

//escrever('bolo de morango');

function soma($n1, $n2, $taxa = 2){
    return ($n1 + $n2) * $taxa;
}

//echo soma (1,2);

//function media($media){
 //   echo "{$media} <br>";
//}

function media($n1, $n2, $n3, $n4, $nota = 4){
    return ($n1 + $n2 + $n3 + $n4) / $nota;
}
echo media (6,7,8,7);
?>