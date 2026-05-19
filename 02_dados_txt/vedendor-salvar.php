<?php
$nomecompleto = $_POST['nomecompleto'];
$idade = $_POST['idade'];
$genero = $_POST['genero'] ;
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];

$arquivo = fopen("vedendor_db.txt", "a");
fwrite($arquivo, "$nomecompleto \t $idade \t $genero \t $telefone \t $estado \t $cidade \t $cpf \n");
fclose($arquivo);
header('location: vedendor-formulario.php');
?>