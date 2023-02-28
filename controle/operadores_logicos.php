<div class="titulo">Operadores Logicos</div>

<?php
echo ' <p> V ou F </p> <hr>';
var_dump(true);
echo '<br>';
var_dump(!true); // Negação

echo '<p> Tabela Verdade "AND" (E)</p> <hr>';

var_dump( true && 3 > 2 && 3 < 4); // todas as expressões precisam ser verdadeiras
var_dump( true && 3 > 2 && 3 < 4); // todas as expressões precisam ser verdadeiras
var_dump( true and 3 > 2 and 3 < 4); // todas as expressões precisam ser verdadeiras

echo '<p> Tabela Verdade "OR" (OU)</p> <hr>';
var_dump (true || false); // pelo menos uma expressão precisa ser verdadeira
var_dump (true || false); // pelo menos uma expressão precisa ser verdadeira
var_dump ( 3 > 2 || 3 < 2); // pelo menos uma expressão precisa ser verdadeira
var_dump ( 3 > 2 or 3 < 2); // pelo menos uma expressão precisa ser verdadeira


echo '<p> Tabela Verdade "XOR" (OU Exclusivo)</p> <hr>';
var_dump(true xor true); // apenas uma expressão precisa ser verdadeira
var_dump(true xor false); // apenas uma expressão precisa ser verdadeira
var_dump(false xor true); // apenas uma expressão precisa ser verdadeira

var_dump(false != false); // apenas uma expressão precisa ser verdadeira
var_dump(false != true); // apenas uma expressão precisa ser verdadeira
?>

<style>
  p {
    margin-bottom: 0px;
    font-weight: bold;
  }

  hr {
    margin-top: 0px;
  }
</style>