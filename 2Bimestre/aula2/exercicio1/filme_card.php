<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Filme Card</title>
</head>
<body style="background-color: #FFF0FF;">
    <?php 
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        ini_set('display_startup_erros',1);
        require_once 'models/Filme.php';
        $filme = new Filme($_POST["nome_filme"],$_POST["diretor_filme"],$_POST["ano_filme"],$_POST["img_filme"]);
    ?>
    <div style="display: flex;flex-direction: row;justify-content: center;align-items: center;height: 100vh;" >
        <?php echo $filme->retornaCard()?>
    </div>
</body>
</html>