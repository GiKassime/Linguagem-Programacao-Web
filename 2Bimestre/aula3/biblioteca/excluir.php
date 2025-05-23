<?php 
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);
require_once "./utils/Conexao.php";

$con = Conexao::getConexao();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM livros WHERE id = ?;";
    //dELETAR
    $statement = $con->prepare($sql);
    $statement->execute(array($id));header("Location: index.php");

}else{
    echo "ID do livro não informado";
    echo "<a href='index.php' >Voltar</a>";
}
?>