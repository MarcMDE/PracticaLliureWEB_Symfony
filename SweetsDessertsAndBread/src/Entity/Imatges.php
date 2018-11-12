<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ImatgesRepository")
 */
class Imatges
{
    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Productes", inversedBy="Imatges")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Producte;

    /**
     * @ORM\Id()
     * @ORM\Column(type="smallint")
     */
    private $Ordre;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $Arxiu;

    public function getArxiuPath()
    {
        return "/assets/images/products" . $this->getProducte()->getCategoria()->getImagesPath() .
            $this->getProducte()->getId() . "/" . $this->Arxiu;
    }


    public function getProducte(): ?Productes
    {
        return $this->Producte;
    }

    public function setProducte(?Productes $Producte): self
    {
        $this->Producte = $Producte;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->Ordre;
    }

    public function setOrdre(int $Ordre): self
    {
        $this->Ordre = $Ordre;

        return $this;
    }

    public function getArxiu(): ?string
    {
        return $this->Arxiu;
    }

    public function setArxiu(string $Arxiu): self
    {
        $this->Arxiu = $Arxiu;

        return $this;
    }
}
