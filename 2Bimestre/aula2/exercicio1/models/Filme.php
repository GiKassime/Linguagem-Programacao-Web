<?php 

class Filme {
    private string $nome;
    private string $diretor;
    private string $ano;
    private string $img;
    public function __construct(string $nome, string $diretor, string $ano, string $img) {
        $this->nome = $nome;
        $this->diretor = $diretor;
        $this->ano = $ano;
        $this->img = $img;
    }
    public function retornaCard(){
        return "<div style='border: solid 1px; width: 300px; margin-top: 20px;'>
        <br>
        $this->nome<br>
        $this->diretor<br>
        $this->ano<br>
        <img style='width: 100%; height: auto;' src='$this->img'/><br>
        </div>";
    }
}
?>