<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
        <?php
    function desenhaBotao($arrayBotao,$tema)
    {
        echo "<div class='dropdown'>
            <button class='dropbtn'>".$tema."</button> 
            <div class='dropText'>";
        foreach ($arrayBotao as $key => $banda) {
            echo "<span><img src='".$banda->getLinkImg()."' width='20' height='20'>".$banda->getInfo()."</span>";
        }
        echo "</div>\n</div>";
    }
    require_once "models/Link.php";
    $botao1 = [
        new Link("Os Paralamas do Sucesso", "https://www.osparalamas.com.br/wp-content/uploads/2020/05/logo-top-paralamas-1.png"),
        new Link("Blitz", "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQp9wh3xOsO-6SiMIt0TXAEOJZG6ps6vqukRUKYtf9Jfi8k5lWLMgU2gBEyCGJdZBvYe-L_vr0h4DZbqXUNqYjOaQ"),
        new Link("Barão Vermelho","https://upload.wikimedia.org/wikipedia/commons/thumb/1/1c/BaraoVermelho01.jpg/220px-BaraoVermelho01.jpg"),
        new Link("Legião Urbana","https://seeklogo.com/images/L/legiao-urbana-logo-504E361B08-seeklogo.com.png")        
    ];
    $botao2 = [
        new Link("Atlético-MG", "https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/7632.png&scale=crop&cquality=40&location=origin&w=80&h=80"),
        new Link("Bahia", "https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/9967.png&scale=crop&cquality=40&location=origin&w=80&h=80"),
        new Link("Santos","https://a.espncdn.com/combiner/i?img=/i/teamlogos/soccer/500/2674.png&scale=crop&cquality=40&location=origin&w=80&h=80")
    ];
    $botao3 = [
        new Link("Charmander", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/004.png"),
        new Link("Wartortle", "https://assets.pokemon.com/assets/cms2/img/pokedex/detail/008.png"),
        new Link("Charizard","https://assets.pokemon.com/assets/cms2/img/pokedex/detail/006.png")
    ];
    $botao4 = [
        new Link("McLaren", "https://upload.wikimedia.org/wikipedia/commons/thumb/2/20/McLaren_Racing_logo.png/250px-McLaren_Racing_logo.png"),
        new Link("Mercedes", "https://upload.wikimedia.org/wikipedia/commons/thumb/2/21/Mercedes-Benz_in_Formula_One_logo.svg/300px-Mercedes-Benz_in_Formula_One_logo.svg.png"),
        new Link("Ferrari","https://fabrikbrands.com/wp-content/uploads/Ferrari-F1-Logo-1.png")
    ];
    $botoes = array();
    $temas = ["Bandas de Rock","Times de futebol","Pokemons","Fórmula 1"];
    array_push($botoes,$botao1,$botao2,$botao3,$botao4);
    for ($i=0; $i < count($botoes); $i++) { 
        desenhaBotao($botoes[$i],$temas[$i]);
    }
    
    ?>
   
</body>

</html>