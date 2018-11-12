<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductesRepository")
 */
class Productes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=510)
     */
    private $Descripcio;

    /**
     * @ORM\Column(type="float")
     */
    private $Preu;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $PreuOferta;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Actiu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Categories", inversedBy="Productes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Categoria;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Imatges", mappedBy="Producte", orphanRemoval=true)
     */
    private $Imatges;

    public function __construct()
    {
        $this->Imatges = new ArrayCollection();
    }

    public function getArxiuImatgePrincipal()
    {
        return "/assets/images/products" . $this->getCategoria()->getImagesPath() . $this->id . "/" . $this->Imatges[0]->getArxiu();
    }

    public function enOferta()
    {
        if ($this->PreuOferta == null) return false;
        else return true;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescripcio(): ?string
    {
        return $this->Descripcio;
    }

    public function setDescripcio(string $Descripcio): self
    {
        $this->Descripcio = $Descripcio;

        return $this;
    }

    public function getPreu(): ?float
    {
        return $this->Preu;
    }

    public function setPreu(float $Preu): self
    {
        $this->Preu = $Preu;

        return $this;
    }

    public function getPreuOferta(): ?float
    {
        return $this->PreuOferta;
    }

    public function setPreuOferta(?float $PreuOferta): self
    {
        $this->PreuOferta = $PreuOferta;

        return $this;
    }

    public function getActiu(): ?bool
    {
        return $this->Actiu;
    }

    public function setActiu(bool $Actiu): self
    {
        $this->Actiu = $Actiu;

        return $this;
    }

    public function getCategoria(): ?Categories
    {
        return $this->Categoria;
    }

    public function setCategoria(?Categories $Categoria): self
    {
        $this->Categoria = $Categoria;

        return $this;
    }

    /**
     * @return Collection|Imatges[]
     */
    public function getImatges(): Collection
    {
        return $this->Imatges;
    }

    public function addImatge(Imatges $imatge): self
    {
        if (!$this->Imatges->contains($imatge)) {
            $this->Imatges[] = $imatge;
            $imatge->setProducte($this);
        }

        return $this;
    }

    public function removeImatge(Imatges $imatge): self
    {
        if ($this->Imatges->contains($imatge)) {
            $this->Imatges->removeElement($imatge);
            // set the owning side to null (unless already changed)
            if ($imatge->getProducte() === $this) {
                $imatge->setProducte(null);
            }
        }

        return $this;
    }
}
