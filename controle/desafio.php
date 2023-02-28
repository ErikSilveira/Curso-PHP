<div class="titulo">Desafio pi</div>
<?php 
 pi();
$pi = 3.14;

$result = $pi - pi();
echo $result;
 
if($result <= 0.01){
    echo "Praticamente igual";
}else{
    echo "Diferente";
}