<?php
$nome = $_POST['nome'];
$eventos= $_POST['eventos'];
$data= $_POST['data'];
$descricao= $_POST['descricao'];

$arquivo = fopen("eventos_db.txt", "a");
fwrite($arquivo, "$nome \t $eventos \t $data \t $descricao \n");
fclose($arquivo);
?>