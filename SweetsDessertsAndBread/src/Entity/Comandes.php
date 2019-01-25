<?php

namespace App\Entity;

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
}
