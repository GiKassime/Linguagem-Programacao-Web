<?php 

class Pessoa{
    private $nome;
    private $sobrenome;
    private $idade;

    public function __construct($nome,$sobrenome,$idade) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->idade = $idade;
    }

    public function escreveInformacao(){
        $informacao = "<p>Nome: " . $this->nome . "</p><p>Sobrenome: " . $this->sobrenome . "</p><p>Idade: " . $this->idade . "</p>";
        return $informacao;
    }
    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of sobrenome
     */
    public function getSobrenome()
    {
        return $this->sobrenome;
    }

    /**
     * Set the value of sobrenome
     */
    public function setSobrenome($sobrenome): self
    {
        $this->sobrenome = $sobrenome;

        return $this;
    }

    /**
     * Get the value of idade
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * Set the value of idade
     */
    public function setIdade($idade): self
    {
        $this->idade = $idade;

        return $this;
    }
}

?>