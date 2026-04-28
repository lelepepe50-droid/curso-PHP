<?php
$carrinho =[
    0 => 'Macarrão',
    1 => 'Feijão',
    2 => 'Arroz',
    3 => 'Batata',
];
// arsort orde descreste
// asort orden crecende
// sort ele coloca orde alfabetica


echo '<pre>';
arsort($carrinho);
var_dump($carrinho);

echo '<hr>';

asort($carrinho);
var_dump($carrinho);

echo '<hr>';

sort($carrinho);
var_dump($carrinho);

echo '<hr>';

?>