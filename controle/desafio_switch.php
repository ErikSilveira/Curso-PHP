<div class="tituloo">Desafio switch</div>

<form action="" method= "post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha"> KM > Milha</option>
        <option value="milha-Km"> Milha > KM</option>
        <option value="metro-km"> Metro > KM</option>
        <option value="km-metro"> KM > Metros</option>
        <option value="°C-°F."> °C > °F </option>
        <option value="°F.-°C"> F° > °C  </option>
    </select>
    <button>Calcular</button>
</form>

<style>
    form > *{
        font-size: 1.8rem;
    } 
</style>


<?php 

$param = $_POST['param'] ?? 0;
$resultado = 0;

if(isset($_POST['param']) && isset($_POST['conversao'])){
switch ($_POST['conversao']) {
    case  'km-milha':
        $resultado = $param *0.6214;
        $mensagem = "$param KM= $resultado Milhas";
        break;
    case  'milha-km':
        $resultado = $param * 1.609;
        $mensagem = "$param Milhas= $resultado KM";
        break;
    case  'metro-km':
        $resultado = $param * 0.001;
        $mensagem = "$param Metros = $resultado KM";
        break;  
    case  'km-metro':
        $resultado = $param * 1000;
        $mensagem = "$param KM = $resultado Metros";
        break;      
    case  '°C-°F.':
        $resultado = $param * 1.8 + 32;
        $mensagem = "$param °C = $resultado °F";
        break;
    case  '°F.-°C':
        $resultado = ($param - 32) / 1.8;
        $mensagem = "$param °F = $resultado °C";
        break;
    default:
        $mensagem = "Nada a fazer";
        break;

}
}

echo "<p>$mensagem</p>";