<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse", indexes={@ORM\Index(name="fk_reponse_user", columns={"idU"}), @ORM\Index(name="fk_reponse_commentaire", columns={"idComnt"})})
 * @ORM\Entity
 */
class Reponse
{
    /**
     * @var int
     *
     * @ORM\Column(name="idR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idr;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_Rep", type="date", nullable=false)
     */
    private $dateRep;

    /**
     * @var string
     *
     * @ORM\Column(name="ContenueR", type="string", length=255, nullable=false)
     */
    private $contenuer;

    /**
     * @var int|null
     *
     * @ORM\Column(name="idComnt", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idcomnt = NULL;

    /**
     * @var int
     *
     * @ORM\Column(name="idU", type="integer", nullable=false)
     */
    private $idu;

    public function getIdr(): ?int
    {
        return $this->idr;
    }

    public function getDateRep(): ?\DateTimeInterface
    {
        return $this->dateRep;
    }

    public function setDateRep(\DateTimeInterface $dateRep): static
    {
        $this->dateRep = $dateRep;

        return $this;
    }

    public function getContenuer(): ?string
    {
        return $this->contenuer;
    }

    public function setContenuer(string $contenuer): static
    {
        $this->contenuer = $contenuer;

        return $this;
    }

    public function getIdcomnt(): ?int
    {
        return $this->idcomnt;
    }

    public function setIdcomnt(?int $idcomnt): static
    {
        $this->idcomnt = $idcomnt;

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


}
