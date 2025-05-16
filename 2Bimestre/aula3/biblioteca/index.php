<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
require_once "./utils/Conexao.php";
$con = Conexao::getConexao();
// Apenas para teste - remova depois em produção
// print_r($con); 
if (isset($_POST['titulo'])) {
    $titulo = $_POST['titulo'];
    $genero = $_POST['genero'];
    $paginas = $_POST['paginas'];
    $img = $_POST['img'];
    //Inserir os dados no bdd
    $sql = "INSERT INTO livros (titulo, genero, qtd_paginas, link_img) VALUES (?,?,?,?);";
    $statement = $con->prepare($sql);
    $statement->execute(array($titulo, $genero, $paginas, $img));
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Livros</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container my-5">
        <!-- Cabeçalho -->
        <div class="text-center mb-4">
            <h1 class="display-5">Cadastro de Livros</h1>
            <p class="text-muted">Adicione e gerencie livros com facilidade</p>
        </div>

        <!-- Listagem de Livros (simulação) -->
        <div class="card mb-5">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Lista de Livros</h5>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
                <?php
                $sql = "SELECT * FROM livros;";
                $statement = $con->prepare($sql);
                $statement->execute();
                $matriz = $statement->fetchAll();

                foreach ($matriz as $livro) {
                    echo "
                    <div class='col'>
                        <div class='card h-100 bg-light'>

                            <img src='{$livro['link_img']}' alt='Imagem do Livro' class='card-img-top' style='height: 300px; object-fit: cover;'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$livro['id']} - {$livro['titulo']}</h5>
                                <p class='card-text'>{$livro['genero']}</p>
                                <p class='card-text'>{$livro['qtd_paginas']} pg</p>
                            </div>
                        </div>
                    </div>";
                }
                ?>
            </div>


        </div>

        <!-- Formulário de Cadastro -->
        <div class="card">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">Formulário de Cadastro</h5>
            </div>
            <div class="card-body">
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título do Livro</label>
                        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Digite o título" required>
                    </div>

                    <div class="mb-3">
                        <label for="genero" class="form-label">Gênero</label>
                        <select class="form-select" name="genero" id="genero" required>
                            <option value="" disabled selected>Selecione um gênero</option>
                            <option value="D">Drama</option>
                            <option value="F">Ficção</option>
                            <option value="R">Romance</option>
                            <option value="O">Outros</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="paginas" class="form-label">Quantidade de páginas do Livro</label>
                        <input type="number" class="form-control" min="1" name="paginas" id="paginas" placeholder="Digite o título" required>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Anexe a Imagem do Livro</label>
                        <input type="text" class="form-control" name="img" id="img" required>
                    </div>
                    <button type="submit" class="btn btn-success">Cadastrar Livro</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (opcional, para interações futuras) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>