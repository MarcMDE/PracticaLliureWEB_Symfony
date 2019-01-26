<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TemporadesRepository")
 */
class Temporades
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $DataInici;

    /**
     * @ORM\Column(type="integer")
     */
    private $DataFi;

    /**
     * @ORM\Column(type="integer")
     */
    private $MesInici;

    /**
     * @ORM\Column(type="integer")
     */
    private $MesFi;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Productes", mappedBy="Temporada")
     */
    private $Productes;

    public function __construct()
    {
        $this->Productes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDataInici(): ?int
    {
        return $this->DataInici;
    }

    public function setDataInici(int $DataInici): self
    {
        $this->DataInici = $DataInici;

        return $this;
    }

    public function getDataFi(): ?int
    {
        return $this->DataFi;
    }

    public function setDataFi(int $DataFi): self
    {
        $this->DataFi = $DataFi;

        return $this;
    }

    public function getMesInici(): ?int
    {
        return $this->MesInici;
    }

    public function setMesInici(int $MesInici): self
    {
        $this->MesInici = $MesInici;

        return $this;
    }

    public function getMesFi(): ?int
    {
        return $this->MesFi;
    }

    public function setMesFi(int $MesFi): self
    {
        $this->MesFi = $MesFi;

        return $this;
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
            $producte->setTemporada($this);
        }

        return $this;
    }

    public function removeProducte(Productes $producte): self
    {
        if ($this->Productes->contains($producte)) {
            $this->Productes->removeElement($producte);
            // set the owning side to null (unless already changed)
            if ($producte->getTemporada() === $this) {
                $producte->setTemporada(null);
            }
        }

        return $this;
    }
}
