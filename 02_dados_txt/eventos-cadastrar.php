<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de eventos</title>
</head>
<body>
    <form action="eventos-salvar.php" method="post">
    <label>Nome</label>
    <input type="text" id="nome" name="nome"><br>
    <label>eventos</label>
    <select id="eventos" name="eventos" required>
        <option value="" disabled selected>Selecione um evento</option>
        <option value="show">Show</option>
        <option value="formatura">Formatura</option>
        </select><br>
     <label>data</label>
    <input type="date" id="data" name="data"><br>
    <label>descrição</label>
    <textarea id="descricao" name="descricao" rows="4" cols="50"> Digite seu texto aqui... </textarea><br>
<button type="submit">Salvar</button>
<button type="reset">Limpar</button>
</form>

<hr>
<h2>listagem de eventos</h2>
<?php
$arquivo = fopen("eventos_db.txt", "r");
while(!feof($arquivo)){
    $linha = fgets($arquivo);
    echo "$linha <br>";
}
fclose($arquivo);
?>