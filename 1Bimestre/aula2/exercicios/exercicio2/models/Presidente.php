<?php 

class Presidente {
    private int $numero;
    private string $nome;
    private int $inicio;
    private int $fim;

    public function __construct($numero,$nome,$inicio,$fim) {
        $this->numero = $numero;
        $this->nome = $nome;
        $this->inicio = $inicio;
        $this->fim = $fim;
    }
    public function retornaLinha(){
        $linha = "<tr> <td>{$this->numero}</td>\n
        <td>{$this->nome}</td>\n
        <td>{$this->inicio}</td>\n
        <td>{$this->fim}</td>\n
        </tr>";
        return $linha;
    }

    /**
     * Get the value of numero
     */
    public function getNumero(): int
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */
    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of inicio
     */
    public function getInicio(): int
    {
        return $this->inicio;
    }

    /**
     * Set the value of inicio
     */
    public function setInicio(int $inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    /**
     * Get the value of fim
     */
    public function getFim(): int
    {
        return $this->fim;
    }

    /**
     * Set the value of fim
     */
    public function setFim(int $fim): self
    {
        $this->fim = $fim;

        return $this;
    }
}

?>