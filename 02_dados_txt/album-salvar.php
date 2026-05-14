<?php
$artista = $_POST['artista'];
$album = $_POST['album'];
$lançamento= $_POST['lançamento'];

$arquivo = fopen("album_db.txt", "a");
fwrite($arquivo, "$artista \t $album\t $lançamento \n");
fclose($arquivo);
?>

