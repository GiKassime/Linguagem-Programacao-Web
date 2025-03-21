<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Medalhas Olimpicas</title>
</head>

<body>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        div {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: top;
            align-items: center;
        }

        table {
            border-collapse: collapse;
            border: 2px solid rgb(140 140 140);
            font-family: sans-serif;
            font-size: 0.8rem;
            letter-spacing: 1px;
            text-align: center;
        }

        caption {
            caption-side: bottom;
            padding: 10px;
            font-weight: bold;
        }

        thead {
            background-color: rgb(228 240 245);
        }

        th,
        td {
            border: 1px solid rgb(160 160 160);
            padding: 8px 10px;
        }

        td:last-of-type {
            text-align: center;
        }

        tbody>tr:nth-of-type(even) {
            background-color: rgb(237 238 242);
        }

        tfoot th {
            text-align: right;
        }

        tfoot td {
            font-weight: bold;
        }
    </style>
    <div>
    <table>
        <thead>
            <th>Ordem</th>
            <th>País</th>
            <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/15/Gold_medal.svg/20px-Gold_medal.svg.png" alt=""></th>
            <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Silver_medal.svg/20px-Silver_medal.svg.png" alt=""></th>
            <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/Bronze_medal.svg/20px-Bronze_medal.svg.png" alt=""></th>
            <th><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/GoldSilverBronze_medals.svg/40px-GoldSilverBronze_medals.svg.png" alt=""></th>
        </thead>
        <tbody>
            <?php
            $paises = array();
            $nomePais = ["Estados Unidos", "Grã Betanha", "China", "Rússia", "Alemanha"];
            $bandeiras = ["https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Flag_of_the_United_States.svg/20px-Flag_of_the_United_States.svg.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Flag_of_the_United_Kingdom_%283-5%29.svg/20px-Flag_of_the_United_Kingdom_%283-5%29.svg.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Flag_of_the_People%27s_Republic_of_China.svg/20px-Flag_of_the_People%27s_Republic_of_China.svg.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f3/Flag_of_Russia.svg/20px-Flag_of_Russia.svg.png", "https://upload.wikimedia.org/wikipedia/commons/thumb/b/ba/Flag_of_Germany.svg/20px-Flag_of_Germany.svg.png"];
            $medalhaOuro = [46, 27, 26, 19, 17];
            $medalhaPrata = [37, 23, 18, 17, 10];
            $medalhaBronze = [38, 17, 26, 20, 15];

            for ($i = 0; $i < count($nomePais); $i++) {
                $pais["nome"] = $nomePais[$i];
                $pais["medalha-ouro"] = $medalhaOuro[$i];
                $pais["bandeira"] = $bandeiras[$i];
                $pais["medalha-prata"] = $medalhaPrata[$i];
                $pais["medalha-bronze"] = $medalhaBronze[$i];
                array_push($paises, $pais);
            }
            foreach ($paises as $key => $pais) {
                $somaTotalMedalhas = $pais["medalha-ouro"] + $pais["medalha-prata"] + $pais["medalha-bronze"];
                $key += 1;
                echo "<tr>";
                echo "<td>{$key}</td>";
                echo "<td><img src='{$pais["bandeira"]}'>{$pais["nome"]}</td>";
                echo "<td>{$pais["medalha-ouro"]}</td>";
                echo "<td>{$pais["medalha-prata"]}</td>";
                echo "<td>{$pais["medalha-bronze"]}</td>";
                echo "<td>{$somaTotalMedalhas}</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    </div>

</body>

</html>