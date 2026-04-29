<?php
$idades = [12,14,18,20,44,50,98,78,56];
// ele end pucha a utima variavel
//echo $idades[count($idades)-1];
//echo end($idades);
// função fiter ele pra maior ou menor

$idadesFiltradas = array_filter($idades, function
($idade) {
  return $idade >=18;
});

var_dump($idadesFiltradas);
?>