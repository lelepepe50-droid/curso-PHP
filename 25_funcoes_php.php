<?php
$empresa = 'Senac Jaú';
echo "$empresa <br>";
$novaEmpresa = str_replace('Jaú', 'Americana', $empresa);
echo "$novaEmpresa <br>";
echo substr($novaEmpresa, 0, 4) . "<br>";
echo strlen($novaEmpresa);
// ele subtir o jaú para americana//
// ele mostrar o numero da palavara//
// ele mostra a quatidade do caracteris//
?>