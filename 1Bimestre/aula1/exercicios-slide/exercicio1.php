<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>

<body>
    <?php
    $impar = 0;
    $par = 0;
    for ($i = 20; $i <= 70; $i++) {
        if ($i % 2 == 0) {
            $par += $i;
        } else {
            $impar += $i;
        }
    }
    ?>
    <div>
        <h1>1- Faça um programa que percorra os números de 20 a 70
            e imprima como saída a soma dos números pares e a
            soma dos números ímpares dentro deste intervalo.</h1>
        <?php
        echo "<h2>A soma dos números pares é {$par} </h1>";
        echo "<h2>A soma dos números ímpares é {$impar} </h2>";
        // http://localhost
        ?>
    </div>
</body>

</html>