<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./models/Presidente.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Tabela Presidentes</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
    <table>
        <thead>
            <th>Número</th>
            <th>Nome</th>
            <th>Ínicio</th>
            <th>Fim</th>
        </thead>
        <tbody>
            <?php
            $presidentes =  array();
            $nome = ["Eurico Gaspar Dutra", "Getúlio Vargas", "Café Filho","Carlos Luz","Nereu Ramos","Juscelino Kubitschek"];
            $numero = [16,17,18,19,20,21];
            $inicio = [1946,1951,1954,1955,1955,1956];
            $fim = [1951,1954,1955,1955,1956,1961];

            for ($i = 0; $i < count($nome); $i++) {
                $presidente = new Presidente($numero[$i],$nome[$i],$inicio[$i],$fim[$i]);
                array_push($presidentes,$presidente);
            }
            foreach ($presidentes as $key => $presidente) {
                echo $presidente->retornaLinha();
            }
            ?>
        </tbody>

    </table>
    </div>
</body>

</html>