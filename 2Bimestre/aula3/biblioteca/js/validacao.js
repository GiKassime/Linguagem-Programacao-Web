function validarCampos() {
    //Captura os campos do formulário
    var titulo = document.getElementById("titulo").value;
    var autor = document.getElementById("autor").value;
    var paginas = document.getElementById("paginas").value;
    var genero = document.getElementById("genero").value;
    var img = document.getElementById("img").value;
    var errosDiv = document.getElementById("erros");
    //Verifica se os campos estão preenchidos
    erros = [];
    if (titulo === "") {
        erros.push("Preencha o titulo!");
    }
    if (autor === "") {
        erros.push("Preencha o autor!");
    }
    if (paginas === "") {
        erros.push("Preencha o número de páginas!");
    }
    if (genero === "") {
        erros.push("Preencha o gênero!");
    }
    if (img === "") {
        erros.push("Preencha a imagem!");
    }
    if (erros.length > 0) {
        //Se todos os campos estiverem preenchidos
        errosDiv.innerHTML = erros.join("<br>");
        errosDiv.style.display = "block";
        return false;
    }
    return true;
}