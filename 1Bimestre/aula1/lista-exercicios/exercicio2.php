<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>

<body>
<?php 
    $carros = array();
    $modelo = array("Fusca", "Civic", "F-150", "Gol", "Corsa");
        $marca = array("Volkswagen", "Honda", "Ford", "Volkswagen", "Chevrolet");
        $foto = array(
            "https://www.cnnbrasil.com.br/wp-content/uploads/sites/12/2025/01/fusca-1986.jpeg",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTek6adIGFCagEPHqCL7zZiggKw8TELKLJEg&s",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSP6pn8i-1Ie5bjhjcZsvGbkCmyU23VOk14EA&s",
            "https://quatrorodas.abril.com.br/wp-content/uploads/2024/06/Gol-GLi-modelo-1995-da-Volkswagen-automovel-testado-pela-revista-Quatro-Rodas-1.jpg?quality=70&strip=info&crop=1&resize=1080,565",
            "https://www.autoo.com.br/fotos/2024/11/1280_960/corsap1_19112024_81412_1280_960.jpg"
        );
    for ($i=0; $i < 5; $i++) { 
        $carro["modelo"] = $modelo[$i];
        $carro["marca"] = $marca[$i];
        $carro["foto"] = $foto[$i];
        array_push($carros,$carro);
    }
    
    ?>
    <h1>
    2. Escreva um programa que declare arrays associativos em PHP para armazenar os dados de carros,
tendo como informações: modelo, marca e link para uma foto. Devem ser criados 5 carros (um
array para cada). Após isso, os 5 arrays com os dados dos carros devem ser adicionados a um outro
array, que por sua vez será uma matriz. Na sequência, utilize laços para criar um card (utilizando
uma DIV) para cada carro. Veja abaixo exemplos de código (HTML) e visualização de um card:
    </h1>
    <div style="display:flex; ">
        <?php 
            foreach ($carros as $key => $carro) {
            echo "<div style='border: solid 1px; width: 300px; margin-top: 20px;text-align:center;'><strong>{$carro["modelo"]}</strong><br>{$carro["marca"]}<br><img style='width: 100%; height: auto;' src='{$carro["foto"]}' /><br>
            </div>";
            }
        ?>
    </div>
</body>

</html>