<?php
echo "<pre>";
print_r($_POST);

$n1 = $_POST["n1"];
$n2 = $_POST["n2"];

$resul = 0;

$resul = $n1 + $n2;

echo "O resultado é: " .$resul;



