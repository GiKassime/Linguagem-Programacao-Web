<?php 
echo "Usando Get";
$numero1= $_GET['numero1'];
$numero2= $_GET['numero2'];
$numero3= $_GET['numero3'];


$media = ($numero1 + $numero2 + $numero3)/3;

echo "\nA média de $numero1 + $numero2 + $numero3 é: $media";

$numero1= $_POST['numero1'];
$numero2= $_POST['numero2'];
$numero3= $_GET['numero3'];

$media = ($numero1 + $numero2 + $numero3)/3;

echo "<br>\nUsando Post\n<br>A média de $numero1 + $numero2 + $numero3 é: $media";

?>