<?php 
echo "Usando Get";
$numero1= $_GET['numero1'];
$numero2= $_GET['numero2'];

$soma = $numero1 + $numero2;

echo "A soma de $numero1 + $numero2 é: $soma";

$numero1= $_POST['numero1'];
$numero2= $_POST['numero2'];
$soma = $numero1 + $numero2;

echo "<br>\nUsando Post<br>A soma de $numero1 + $numero2 é: $soma";

?>