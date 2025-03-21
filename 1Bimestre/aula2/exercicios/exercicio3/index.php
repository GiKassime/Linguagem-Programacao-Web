<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once "./models/Pokemon.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Lista pokemons</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
    <table>
        <thead>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Tipo</th>
            <th>Mais Informações</th>
        </thead>
        <tbody>
            <?php
            $pokemons =  array();
            $nome = ["Charmander","Wartortle","Charizard","Venusaur"];
            $tipo = ["Fogo","Água","Fogo e Flying","Planta e Poison"];
            $img = ["https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/004.png","https://assets.pokemon.com/assets/cms2/img/pokedex/detail/008.png","https://assets.pokemon.com/assets/cms2/img/pokedex/detail/006.png","https://assets.pokemon.com/assets/cms2/img/pokedex/detail/003.png"];
            $link = ["https://www.pokemon.com/br/pokedex/charmander","https://www.pokemon.com/br/pokedex/wartortle","https://www.pokemon.com/br/pokedex/charizard","https://www.pokemon.com/br/pokedex/venusaur"];

            for ($i = 0; $i < count($nome); $i++) {
                $pokemon = new Pokemon($img[$i],$nome[$i],$tipo[$i],$link[$i]);
                array_push($pokemons,$pokemon);
            }
            foreach ($pokemons as $key => $pokemon) {
                echo $pokemon->geraLinha();
            }
            ?>
        </tbody>

    </table>
    </div>
</body>

</html>