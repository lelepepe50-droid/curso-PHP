<?php
$nome = 'Carlos Ferreira';

if (isset($nome)){
    echo $nome; 
}else{
    echo 'Não existe';
}
echo '<pre>';

unset($nome);
if (isset($nome)){
echo $nome;
}else{
    echo 'Não existe!';
}
// isset ele retorna verdadeiro se não for verdadeiro ele não aparece //
// ele pegar a variavel e matar pagar morre deleta//
?>