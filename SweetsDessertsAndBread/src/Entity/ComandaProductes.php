<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ComandaProductesRepository")
 */
class ComandaProductes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $Preu;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Unitats;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Comandes", inversedBy="ComandaProductes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Comanda;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Productes", inversedBy="ComandaProductes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Producte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPreu(): ?float
    {
        return $this->Preu;
    }

    public function setPreu(?float $Preu): self
    {
        $this->Preu = $Preu;

        return $this;
    }

    public function getUnitats(): ?int
    {
        return $this->Unitats;
    }

    public function setUnitats(int $Unitats): self
    {
        $this->Unitats = $Unitats;

        return $this;
    }

    public function getComanda(): ?Comandes
    {
        return $this->Comanda;
    }

    public function setComanda(?Comandes $Comanda): self
    {
        $this->Comanda = $Comanda;

        return $this;
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
}
