<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="idAct_2", columns={"idAct"}), @ORM\Index(name="fk_u", columns={"idU"}), @ORM\Index(name="idAct", columns={"idAct"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="idComnt", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomnt;

    /**
     * @var string
     *
     * @ORM\Column(name="Contenuec", type="string", length=255, nullable=false)
     */
    private $contenuec;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_pubc", type="date", nullable=false)
     */
    private $datePubc;

    /**
     * @var int
     *
     * @ORM\Column(name="idU", type="integer", nullable=false)
     */
    private $idu;

    /**
     * @var \Actualite
     *
     * @ORM\ManyToOne(targetEntity="Actualite")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idAct", referencedColumnName="idAct")
     * })
     */
    private $idact;

    public function getIdcomnt(): ?int
    {
        return $this->idcomnt;
    }

    public function getContenuec(): ?string
    {
        return $this->contenuec;
    }

    public function setContenuec(string $contenuec): static
    {
        $this->contenuec = $contenuec;

        return $this;
    }

    public function getDatePubc(): ?\DateTimeInterface
    {
        return $this->datePubc;
    }

    public function setDatePubc(\DateTimeInterface $datePubc): static
    {
        $this->datePubc = $datePubc;

        return $this;
    }

    public function getIdu(): ?int
    {
        return $this->idu;
    }

    public function setIdu(int $idu): static
    {
        $this->idu = $idu;

        return $this;
    }

    public function getIdact(): ?Actualite
    {
        return $this->idact;
    }

    public function setIdact(?Actualite $idact): static
    {
        $this->idact = $idact;

        return $this;
    }


}
