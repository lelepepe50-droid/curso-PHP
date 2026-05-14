<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulario de Cadastrar Album</title>
</head>
<body>
    <form action="album-salvar.php" method="post">
    <label>Artista</label>
    <input type="text" id="artista" name="artista"><br>
    <label>Nome do álbum</label>
    <input type="text" id="album" name="album"><br>
    <label>Ano de lançamento</label>
    <input type="number" id="lançamento" name="lançamento"><br>

<button type="submit">Salvar</button>
<button type="reset">Limpar</button>
    </form>
    
</body>
</html>