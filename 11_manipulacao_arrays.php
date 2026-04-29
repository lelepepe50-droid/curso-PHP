<?php
$nomes = ['Rubens', 'Senac', 'Americana'];
echo'<pre>';
// strtoupper ele deixa as palavra maior
// array_map mapeamento o array ele escuta a funtion ele retonar a funtion
//var_dump($nomes);
/*
$nomes[0] = strtoupper($nomes[0]);
$nomes[1] = strtoupper($nomes[1]);
$nomes[2] = strtoupper($nomes[2]);
var_dump($nomes);
*/

$nomes = array_map('transformarParaMaiuscula', $nomes);

function transformarParaMaiuscula($valor)
{
  return strtoupper($valor);
}

var_dump($nomes);
?>
