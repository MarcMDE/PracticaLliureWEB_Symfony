<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\UsuarisRepository")
 */
class Usuaris implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

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
     * @ORM\Column(type="smallint")
     */
    private $Estat;

    /**
     * @ORM\Column(type="datetime")
     */
    private $DataCreacio;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Direccio;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Arxiu_Foto;

    /**
     * @ORM\Column(type="boolean")
     */
    private $RebreMails;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Localitat;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $CodiPostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Pais;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getDireccio(): ?string
    {
        return $this->Direccio;
    }

    public function setDireccio(string $Direccio): self
    {
        $this->Direccio = $Direccio;

        return $this;
    }

    public function getArxiuFoto(): ?string
    {
        return $this->Arxiu_Foto;
    }

    public function setArxiuFoto(?string $Arxiu_Foto): self
    {
        $this->Arxiu_Foto = $Arxiu_Foto;

        return $this;
    }

    public function getRebreMails(): ?bool
    {
        return $this->RebreMails;
    }

    public function setRebreMails(bool $RebreMails): self
    {
        $this->RebreMails = $RebreMails;

        return $this;
    }

    public function getLocalitat(): ?string
    {
        return $this->Localitat;
    }

    public function setLocalitat(string $Localitat): self
    {
        $this->Localitat = $Localitat;

        return $this;
    }

    public function getCodiPostal(): ?string
    {
        return $this->CodiPostal;
    }

    public function setCodiPostal(string $CodiPostal): self
    {
        $this->CodiPostal = $CodiPostal;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->Pais;
    }

    public function setPais(string $Pais): self
    {
        $this->Pais = $Pais;

        return $this;
    }
}
