<div class="titulo">Desafio Operadores Logicos</div>

<!-- Dois trabalhos -> terça e quinta
- Se os dois forem executados -> TV 50 e sorvete
- Se apenas um for realizado tv de 32  e sorvete
 - Se nenhum for executado vao ficar em cas -->

 <form action="#" method="post">
    <div class="">
        <label for="t1"> Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Nao Executado</option>
        </select>
    </div>

    <div class="">
        <label for="t2"> Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Nao Executado</option>
        </select>
    </div>
    <button>Executar</button>
 </form>

 <style>
    button, select {
        font-size: 1.8rem;
    }
 </style>

 <?php

// var_dump(!!$_POST['t1']);
// var_dump(!!$_POST['t2']);

if(isset($_POST['t1']) && isset($_POST['t2'])){
    $t1 = $_POST['t1'] === '1';
    $t2 = $_POST['t2'] === '1';
    $tv = '';
    $sorvete = false;

    if($t1 && $t2){
        $tv = ' 50';
        $sorvete = true;
    } elseif($t1 xor $t2){
        $tv = ' 32';
        $sorvete = true;
    } else {
        $sorvete = false;
    }

    if($tv){
        $resultado = "Vamos comprar uma TV de $tv polegadas";
    } else {
        $resultado = "Sem TV dessa vez";
    }

    $saudavel = !$sorvete;

    if($saudavel){
        $resultado .= '<br>Estamos mais saudaveis';
    } else {
        $resultado .= '<br>Estamos mais gordinhos';
    }

    echo "<p>$resultado</p>";
  
}   
    
     ?> 