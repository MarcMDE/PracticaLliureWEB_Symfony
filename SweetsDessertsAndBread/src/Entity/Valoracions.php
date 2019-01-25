<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ValoracionsRepository")
 */
class Valoracions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="smallint")
     */
    private $Puntuacio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Comentaris;

    /**
     * @ORM\Column(type="integer")
     */
    private $VotsPositius;

    /**
     * @ORM\Column(type="integer")
     */
    private $VotsNegatius;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPuntuacio(): ?int
    {
        return $this->Puntuacio;
    }

    public function setPuntuacio(int $Puntuacio): self
    {
        $this->Puntuacio = $Puntuacio;

        return $this;
    }

    public function getComentaris(): ?string
    {
        return $this->Comentaris;
    }

    public function setComentaris(string $Comentaris): self
    {
        $this->Comentaris = $Comentaris;

        return $this;
    }

    public function getVotsPositius(): ?int
    {
        return $this->VotsPositius;
    }

    public function setVotsPositius(int $VotsPositius): self
    {
        $this->VotsPositius = $VotsPositius;

        return $this;
    }

    public function getVotsNegatius(): ?int
    {
        return $this->VotsNegatius;
    }

    public function setVotsNegatius(int $VotsNegatius): self
    {
        $this->VotsNegatius = $VotsNegatius;

        return $this;
    }
}
