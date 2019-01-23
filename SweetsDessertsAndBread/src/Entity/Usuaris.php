<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarisRepository")
 */
class Usuaris
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
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Cognoms;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $Telefon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Correu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contrassenya;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Direccio;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Estat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DataCreacio;

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

    public function getCognoms(): ?string
    {
        return $this->Cognoms;
    }

    public function setCognoms(string $Cognoms): self
    {
        $this->Cognoms = $Cognoms;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->Telefon;
    }

    public function setTelefon(string $Telefon): self
    {
        $this->Telefon = $Telefon;

        return $this;
    }

    public function getCorreu(): ?string
    {
        return $this->Correu;
    }

    public function setCorreu(string $Correu): self
    {
        $this->Correu = $Correu;

        return $this;
    }

    public function getContrassenya(): ?string
    {
        return $this->Contrassenya;
    }

    public function setContrassenya(string $Contrassenya): self
    {
        $this->Contrassenya = $Contrassenya;

        return $this;
    }

    public function getDireccio(): ?string
    {
        return $this->Direccio;
    }

    public function setDireccio(string $Direccio): self
    {
        $this->Direccio = $Direccio;

        return $this;
    }

    public function getEstat(): ?int
    {
        return $this->Estat;
    }

    public function setEstat(int $Estat): self
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
}
