<?php
if($_POST){
$distancia = $_POST["distancia"];
$autonomia = $_POST["autonomia"];
$combustivel = $_POST["combustivel"];


 if(is_numeric($distancia) && is_numeric($autonomia)){
  if($distancia >0 && $autonomia >0){
    $valorGasolina=3.70;
    $valorAlcool= 2.33;
    $valorDiesel=2.58;
    
    if($combustivel="ga"){
        $calculoGasolina = ($distancia/$autonomia)*$valorGasolina;
        $calculoGasolina= number_format($calculoGasolina,2,',', '.');
    }
    else if($combustivel="al"){
        $calculoAlcool = ($distancia/$autonomia)*$valorAlcool;
        $calculoAlcool= number_format($calculoAlcool, 2,',', '.');

    }
    else{
    $calculoDiesel = ($distancia/$autonomia)*$valorDiesel;
    $calculoDiesel= number_format($calculoDiesel, 2, ',', '.');
    }
  
 }
  else{
      echo "<p>O valor da distancia e da autonomia devem ser maior que 0 !</p>";
  }
}
 else{
    echo "<p>Por favor digite um valor numerico valido !</p>";
     } 
    }
    else{
echo "<p>Nenhum numero foi adicionado</p>";}

