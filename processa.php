<?php

echo "<pre>";
print_r($_POST);

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
$n4 = $_POST["n4"];
$n5 = $_POST["n5"];


$vetor = array();

for($i=0; $i <= 4; $i++){
   
    $vetor[0] = $n1; 
    $vetor[1] = $n2; 
    $vetor[2] = $n3;
    $vetor[3] = $n4; 
    $vetor[4] = $n5;
    
}

echo "<pre>";
print_r($vetor);

$maior = 0;

for($i=0; $i <= 4; $i++){
    
    if($vetor[$i] > $maior){
        $maior = $vetor[$i];
    }
}

echo "<br> o maior numero é: " .$maior;


$par = 0;

for($i=0; $i <=4; $i++){
    
    if($vetor[$i] % 2 == 0){
        $par = $vetor[$i];
        echo "<br> o " .$par ." é par";
    }
}

