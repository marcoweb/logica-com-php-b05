<?php
$vet1 = array();
$vet2 = [];

$vet3 = array('maçã', 'mamão', 'melancia');
$vet4 = ['tomate', 'abóbora', 'cenoura'];

$vet5 = [
    'nome' => 'Marco',
    'idade' => 40,
    'cidade' => 'Assis'
];

$vet3[] = 'morango';

echo "Usando FOR\n";
for($i = 0;$i < count($vet3);$i++) {
    echo $i . "\t:\t" . $vet3[$i] . "\n";
}
echo "Usando FOREACH\n";
foreach($vet4 as $indice => $item) {
    echo $indice . "\t:\t" . $item . "\n";
}

$alunos = [
    ['nome' => 'José', 'idade' => 15],
    ['nome' => 'Maria', 'idade' => 16],
    ['nome' => 'Antônio', 'idade' => 15]
];

foreach($alunos as $a) {
    foreach($a as $campo => $valor) {
        echo $campo . "\t:\t" . $valor . "\n";
    }
}