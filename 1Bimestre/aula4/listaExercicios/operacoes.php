<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex;flex-direction: column;align-items:center;justify-content:center;height:100vh; text-align:start;">    <h1>Operações</h1>

    <div style="display: flex;flex-direction: column;align-items:left;background-color:bisque;">
    <?php 

$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    if(is_numeric($numero1) && is_numeric($numero2)){
        echo "<p>Soma: " .$numero1 ."+". $numero2 ."=".($numero1+$numero2)." </p>";
        echo "<p>Subtração: " .$numero1 ."-". $numero2 ."=".($numero1-$numero2)." </p>";
        echo "<p>Divisão: " .$numero1 ."/". $numero2 ."=".($numero1/$numero2)." </p>";
        echo "<p>Multiplicação: " .$numero1 ."*". $numero2 ."=".($numero1*$numero2)." </p>";
        echo "<p>Resto: " .$numero1 ."%". $numero2 ."=".($numero1%$numero2)." </p>";
    }else{
        echo "<p>Valores informados não são números</p>";
    }
    
}else{
    echo "<p>Erro: Não foram passados os parametros 'numero1' e 'numero2' na URL para a operação.</p>";
}



?>
    </div>
    
</body>
</html>