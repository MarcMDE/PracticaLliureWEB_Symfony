<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoriesRepository")
 */
class Categories
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $Nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Productes", mappedBy="Categoria")
     */
    private $Productes;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $ImagesPath;

    public function __construct()
    {
        $this->Productes = new ArrayCollection();
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

    /**
     * @return Collection|Productes[]
     */
    public function getProductes(): Collection
    {
        return $this->Productes;
    }

    public function addProducte(Productes $producte): self
    {
        if (!$this->Productes->contains($producte)) {
            $this->Productes[] = $producte;
            $producte->setCategoria($this);
        }

        return $this;
    }

    public function removeProducte(Productes $producte): self
    {
        if ($this->Productes->contains($producte)) {
            $this->Productes->removeElement($producte);
            // set the owning side to null (unless already changed)
            if ($producte->getCategoria() === $this) {
                $producte->setCategoria(null);
            }
        }

        return $this;
    }

    public function getImagesPath(): ?string
    {
        return $this->ImagesPath;
    }

    public function setImagesPath(string $ImagesPath): self
    {
        $this->ImagesPath = $ImagesPath;

        return $this;
    }
}
