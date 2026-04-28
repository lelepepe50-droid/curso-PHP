<?php
$inforEmpresa = [
    'nome' => 'senac Americana',
    'fucionario' => 'Paulo Santos',
    'anoAtual' => 2026,
];

$inforCursos = [
    'cursos' => ['PHP', 'JS', 'Vue JS', 'Laravel'],
    'totalcurso' => 26,
];
echo '<pre>';
//array_keys mostra a chaves do array
//array_values mostra o valores do array
// array_count mostra quantidade do elemento no array
//array_merge ele serve para juntar os array
//

//var_dump(array_keys($inforEmpresa));
//var_dump(array_values($inforEmpresa));
//var_dump(count($inforEmpresa));
$inforEmpresa = array_merge($inforEmpresa, $inforCursos);
print_r($inforEmpresa);
?>