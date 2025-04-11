<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
</head>

<body style="display: flex;flex-direction:column;align-items:center; justify-content:center;height:100vh;background-color: #000000;">
    <div style="display: flex;flex-direction:column;align-items:left; background-color:bisque;padding:10px;border-radius: 10px;">
        <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        if (isset($_GET['tipo']) && isset($_GET['nome']) && isset($_GET['sobrenome']) && isset($_GET['idade'])) {
            if (strtolower($_GET['tipo']) == 'a') {
                $pessoa = array(
                    'nome' => $GET['nome'],
                    'sobrenome' => $_GET['sobrenome'],
                    'idade' =>  $_GET['idade']
                );
                echo "<h1>Dados da Pessoa por Array Associativo</h1>";
                echo "<p>Nome: " . $pessoa['nome'] . "</p><p>Sobrenome: " . $pessoa['sobrenome'] . "</p><p>Idade: " . $pessoa['idade'] . "</p>";
            } elseif (strtolower($_GET['tipo']) == 'c') {
                require_once './models/Pessoa.php';
                $pessoa = new Pessoa($_GET['nome'], $_GET['sobrenome'],$_GET['idade']);
                echo "<h1>Dados da Pessoa por Classe</h1>";

                echo $pessoa->escreveInformacao();
            } else {
                echo "<p>Tipo de pessoa inválido. O tipo deve ser 'A|a'  para Array ou 'C|c' para Classe.</p>";
            }
        } else {
            echo "<p>Erro: Não foram passados os parametros 'tipo', 'nome', 'sobrenome' e 'idade' na URL .</p>";
        }

        ?>

    </div>

</body>

</html>