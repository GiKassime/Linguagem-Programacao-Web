<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <?php 
    function calculaMedia($num1,$num2,$num3){
        return $media = ($num1 + $num2 + $num3) /3;
    }
    
    ?>
    <h1>2- Implemente um programa que possua uma função para
calcular a média aritmética de 3 números. Depois, chame a
função 3 vezes passando por parâmetros números
diferentes, exibindo na página HTML as médias calculadas.</h1>
<?php 

for ($i=0; $i <= 3 ; $i++) { 
    echo "<h2>Média {$i} =  ".calculaMedia($i+10,$i+22,$i+3)."</h2>";
}?>

</body>
</html>