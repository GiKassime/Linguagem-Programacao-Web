<?php 

class Link {
    private string $info;
    private string $linkImg;

    public function __construct($info,$linkImg) {
        $this->info = $info;
        $this->linkImg = $linkImg;
    }
    /**
     * Get the value of info
     */
    public function getInfo(): string
    {
        return $this->info;
    }

    /**
     * Set the value of info
     */
    public function setInfo(string $info): self
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get the value of linkImg
     */
    public function getLinkImg(): string
    {
        return $this->linkImg;
    }

    /**
     * Set the value of linkImg
     */
    public function setLinkImg(string $linkImg): self
    {
        $this->linkImg = $linkImg;

        return $this;
    }
}

?>