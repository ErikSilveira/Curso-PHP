<div class="titulo">Comparação</div>

<?php

$lista1 = [
    'nome' => 'Maria',
    'idade' => 20
];

$lista2 = [
    'nome' => 'Maria',
    'idade' => 20
];

var_dump($lista1 == $lista2);

$lista3 = [
    'idade' => 20,
    'nome' => 'Maria'
];

var_dump($lista1 == $lista3);