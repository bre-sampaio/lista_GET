<?php

$vetor = array(
        0 => $_GET["v1"],
	1 => $_GET["v2"],
	2 => $_GET["v3"],
	3 => $_GET["v4"],
	4 => $_GET["v5"],
);

$maior = 0;
$par = 0;
$multi = 0;

for($i=0; $i <= 4; $i++){
    
    if($vetor[$i] > $maior){
       $maior = $vetor[$i]; 
    } 
}

for($i=0; $i <= 4; $i++){
    
    if($vetor[$i] % 2 == 0){
       $par = $vetor[$i]; 
    } 
    echo " <br><br>O numero par é: $par";
}



echo " <br><br>O maior valor é: $maior";