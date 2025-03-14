<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>

<body>
<?php 
    function calculaArea($base,$altura){
        return $base*$altura;
    }
    $retangulos = array();

    for ($i=0; $i < 3; $i++) { 
        $base = rand(0,100);
        $altura = rand(0,100);
        $retangulo["base"] = $base;
        $retangulo["altura"] = $altura;
        array_push($retangulos,$retangulo);
    }
    
    ?>
    <h1>
        3- Utilizando um array associativo com duas chaves (base
        e altura) para representar um retângulo, faça um programa
        que declare 3 retângulos, armazenando-os em um array
        externo (você terá uma matriz). Depois, percorra essa
        matriz e exiba na página HTML a área de cada retângulo.
    </h1>
    <h2>
        <?php 
            foreach ($retangulos as $key => $retangulo) {
                $key++;
                $base = $retangulo["base"];
                $altura = $retangulo["altura"];
                echo "<h2>Área Retangulo {$key}, base: {$base}, altura:{$altura} = área: ". calculaArea($base,$altura)."</h2>";
            }
        ?>
    </h2>
</body>

</html>