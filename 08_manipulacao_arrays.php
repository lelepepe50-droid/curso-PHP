<?php
$carrinho = ['Arroz', 'Sabão', 'Feijão', 'Balinhas'];
echo '<pre>';
var_dump($carrinho);

echo '<hr>';

// array_pop remove a utima linha do array
// array_shift remove a primera linha do array
// unset remove da memoria um elemento do array
// array_push adiciona uma variavel
// array_unshift ele adiciona em primeiro
//array_unique ele e unico

//array_pop ($carrinho);
//var_dump($carrinho);

echo '<hr>';
//array_shift($carrinho);
//var_dump($carrinho);

//unset($carrinho[0]);
//var_dump($carrinho);

//array_push($carrinho, 'Tapete');
//array_push($carrinho, 'Rodo');
//var_dump($carrinho);

array_unshift($carrinho, 'Microondas');
array_unshift($carrinho, 'Tapete');
var_dump($carrinho);


echo '<hr>';

$carrinho = array_unique($carrinho);
var_dump($carrinho);
?>