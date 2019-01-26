<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ComandesRepository")
 */
class Comandes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Estat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DataCreacio;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DataPagament;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DataEnviament;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $DataRecollida;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Usuaris", inversedBy="Comandes")
     */
    private $Usuari;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ComandaProductes", mappedBy="Comanda", orphanRemoval=true)
     */
    private $ComandaProductes;

    public function __construct()
    {
        $this->Productes = new ArrayCollection();
        $this->ComandaProductes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstat(): ?string
    {
        return $this->Estat;
    }

    public function setEstat(string $Estat): self
    {
        $this->Estat = $Estat;

        return $this;
    }

    public function getDataCreacio(): ?\DateTimeInterface
    {
        return $this->DataCreacio;
    }

    public function setDataCreacio(\DateTimeInterface $DataCreacio): self
    {
        $this->DataCreacio = $DataCreacio;

        return $this;
    }

    public function getDataPagament(): ?\DateTimeInterface
    {
        return $this->DataPagament;
    }

    public function setDataPagament(?\DateTimeInterface $DataPagament): self
    {
        $this->DataPagament = $DataPagament;

        return $this;
    }

    public function getDataEnviament(): ?\DateTimeInterface
    {
        return $this->DataEnviament;
    }

    public function setDataEnviament(?\DateTimeInterface $DataEnviament): self
    {
        $this->DataEnviament = $DataEnviament;

        return $this;
    }

    public function getDataRecollida(): ?\DateTimeInterface
    {
        return $this->DataRecollida;
    }

    public function setDataRecollida(?\DateTimeInterface $DataRecollida): self
    {
        $this->DataRecollida = $DataRecollida;

        return $this;
    }

    public function getUsuari(): ?Usuaris
    {
        return $this->Usuari;
    }

    public function setUsuari(?Usuaris $Usuari): self
    {
        $this->Usuari = $Usuari;

        return $this;
    }

    /**
     * @return Collection|ComandaProductes[]
     */
    public function getComandaProductes(): Collection
    {
        return $this->ComandaProductes;
    }

    public function addComandaProducte(ComandaProductes $comandaProducte): self
    {
        if (!$this->ComandaProductes->contains($comandaProducte)) {
            $this->ComandaProductes[] = $comandaProducte;
            $comandaProducte->setComanda($this);
        }

        return $this;
    }

    public function removeComandaProducte(ComandaProductes $comandaProducte): self
    {
        if ($this->ComandaProductes->contains($comandaProducte)) {
            $this->ComandaProductes->removeElement($comandaProducte);
            // set the owning side to null (unless already changed)
            if ($comandaProducte->getComanda() === $this) {
                $comandaProducte->setComanda(null);
            }
        }

        return $this;
    }
}
