<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Jogadores</title>
</head>
<body>
    <table border="1">
        <thead >
        <th>Número</th>
        <th>Nome</th>
        </thead>
        <tbody>
        <?php 
            function geraLinha($nome,$numero,$cor){
                echo "<tr style='background-color:".$cor."'>
                <td>".$numero."</td>
                <td>".$nome."</td></tr>";
            }
            $jogadores = [
                [2,"Jorginho"],
                [13,"Aldair"],
                [15,"Márcio Santos"],
                [8,"Dunga"],
                [6,"Branco"],
                [5,"Mauro Silva"],
                [17,"Mazinho"],
                [9,"Zinho"],
                [11,"Romário"],
                [7,"Bebeto"]
            ];
            foreach ($jogadores as $key => $jogador) {                
                $color = "green";
                if ($key % 2 == 0) {
                    $color = "yellow";
                }
                geraLinha($jogador[1],$jogador[0],$color);
            }
        ?>
        </tbody>
    </table>
    

</body>
</html>