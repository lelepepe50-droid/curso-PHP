<?php
$nome = $_POST['nome'];
$eventos= $_POST['telefone'];
$data= $_POST['cidade'];
$descricao= $_POST['estado'];

$arquivo = fopen("pacientes_db.txt", "a");
fwrite($arquivo, "$nome \t $telefone \t $cidade \t $estado \n");
fclose($arquivo);
?>