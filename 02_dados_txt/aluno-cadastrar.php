<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de Cadastrar aluno</title>
</head>
<body>
 
    <form action="aluno-salvar.php" method="post">
    <label>RA</label>
    <input type="text" id="ra" name="ra"><br>
    <label>Nome</label>
    <input type="text" id="nome" name="nome"><br>
    <label>idade</label>
    <input type="number" id="idade" name="idade"><br>
    <button type="submit">Salvar</button>
    <button type="reset">Limpar</button>
     </form>

     <hr>
     <h2>listagem de aluno</h2>
     <?php
     $arquivo = fopen("aluno_db.txt", "r");
     while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo "$linha <br>";
     }
     fclose($arquivo);
    
     ?>