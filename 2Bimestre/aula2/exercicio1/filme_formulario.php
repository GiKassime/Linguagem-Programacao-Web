<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="display: flex;flex-direction: row;justify-content: center;align-items: center;height: 100vh;">
    <form action="filme_card.php" method="post" style="display: flex;flex-direction: column;align-items: start;">
        <h1>Formulário Card Filme</h1>
        <label for="nome_filme">Digite o Nome do Filme:</label>
        <input type="text" name="nome_filme" required>
        <label for="diretor_filme">Digite o Diretor do Filme:</label>
        <input type="text" name="diretor_filme" required>
        <label for="ano_filme">Coloque Ano de lançamento do Filme:</label>
        <input type="date" name="ano_filme" required>
        <label for="img_filme">Coloque o link da imagem do filme:</label>
        <input type="text" name="img_filme" required>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>