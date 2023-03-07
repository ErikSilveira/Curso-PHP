<div class="titulo">Operações </div>

<?php
$dados1 = [
    "Nome" =>  "João",
    "Idade" =>  20,
    "Altura" =>  1.80
];

$dados2 = [
    "Nome" => "Maria",
    "Idade" => 25,
    "Altura" => 1.70
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<hr>' . count($dadosCompletos);