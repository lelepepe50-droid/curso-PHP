<?php
$ra = $_POST['ra'];
$nome = $_POST['nome'];
$idade= $_POST['idade'];

$arquivo = fopen("aluno_db.txt", "a");
fwrite($arquivo, "$ra \t $nome \t $idade \n");
fclose($arquivo);
?>