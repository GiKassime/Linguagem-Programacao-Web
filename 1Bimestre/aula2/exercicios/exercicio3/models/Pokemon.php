<?php 

class Pokemon{
    private string $img;
    private string $nome;
    private string $tipo;
    private string $link;
    

    public function __construct($img,$nome,$tipo,$link) {
        $this->img = $img;
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->link = $link;
    }
    public function geraLinha(){
        $linha = "<tr>\n
        <td><img src='{$this->img}'></td>\n
        <td>{$this->nome}</td>\n
        <td>{$this->tipo}</td>\n
        <td><a href='{$this->link}' target='_blank'>Pokédex {$this->nome}</a></td>\n
        </tr>";
        return $linha;
    }
    /**
     * Get the value of img
     */
    public function getImg(): string
    {
        return $this->img;
    }

    /**
     * Set the value of img
     */
    public function setImg(string $img): self
    {
        $this->img = $img;

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
     * Get the value of tipo
     */
    public function getTipo(): string
    {
        return $this->tipo;
    }

    /**
     * Set the value of tipo
     */
    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get the value of link
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Set the value of link
     */
    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }
}


?>