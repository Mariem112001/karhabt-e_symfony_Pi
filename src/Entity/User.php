<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="idU", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idu;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nom", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nom = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $prenom = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="DateNaissance", type="date", nullable=true, options={"default"="NULL"})
     */
    private $datenaissance = 'NULL';

    /**
     * @var int|null
     *
     * @ORM\Column(name="numTel", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numtel = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="eMAIL", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $email = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="passwd", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $passwd = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="role", type="string", length=0, nullable=true, options={"default"="NULL"})
     */
    private $role = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="imageUser", type="string", length=255, nullable=false)
     */
    private $imageuser;

    public function getIdu(): ?int
    {
        return $this->idu;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getDatenaissance(): ?\DateTimeInterface
    {
        return $this->datenaissance;
    }

    public function setDatenaissance(?\DateTimeInterface $datenaissance): static
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    public function getNumtel(): ?int
    {
        return $this->numtel;
    }

    public function setNumtel(?int $numtel): static
    {
        $this->numtel = $numtel;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    public function setPasswd(?string $passwd): static
    {
        $this->passwd = $passwd;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getImageuser(): ?string
    {
        return $this->imageuser;
    }

    public function setImageuser(string $imageuser): static
    {
        $this->imageuser = $imageuser;

        return $this;
    }


}
