<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Arrivage
 *
 * @ORM\Table(name="arrivage", indexes={@ORM\Index(name="fk_voiture", columns={"idV"})})
 * @ORM\Entity
 */
class Arrivage
{
    /**
     * @var int
     *
     * @ORM\Column(name="idA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ida;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $quantite = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="dateEntree", type="date", nullable=true, options={"default"="NULL"})
     */
    private $dateentree = 'NULL';

    /**
     * @var \Voiture
     *
     * @ORM\ManyToOne(targetEntity="Voiture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idV", referencedColumnName="idV")
     * })
     */
    private $idv;

    public function getIda(): ?int
    {
        return $this->ida;
    }

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): static
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getDateentree(): ?\DateTimeInterface
    {
        return $this->dateentree;
    }

    public function setDateentree(?\DateTimeInterface $dateentree): static
    {
        $this->dateentree = $dateentree;

        return $this;
    }

    public function getIdv(): ?Voiture
    {
        return $this->idv;
    }

    public function setIdv(?Voiture $idv): static
    {
        $this->idv = $idv;

        return $this;
    }


}
