<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reponsereclamation
 *
 * @ORM\Table(name="reponsereclamation", indexes={@ORM\Index(name="fk_R", columns={"idR"})})
 * @ORM\Entity
 */
class Reponsereclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idReponseR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idreponser;

    /**
     * @var string
     *
     * @ORM\Column(name="contenuReponse", type="string", length=255, nullable=false)
     */
    private $contenureponse;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateReponseR", type="date", nullable=false)
     */
    private $datereponser;

    /**
     * @var \Reclamation
     *
     * @ORM\ManyToOne(targetEntity="Reclamation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idR", referencedColumnName="idR")
     * })
     */
    private $idr;

    public function getIdreponser(): ?int
    {
        return $this->idreponser;
    }

    public function getContenureponse(): ?string
    {
        return $this->contenureponse;
    }

    public function setContenureponse(string $contenureponse): static
    {
        $this->contenureponse = $contenureponse;

        return $this;
    }

    public function getDatereponser(): ?\DateTimeInterface
    {
        return $this->datereponser;
    }

    public function setDatereponser(\DateTimeInterface $datereponser): static
    {
        $this->datereponser = $datereponser;

        return $this;
    }

    public function getIdr(): ?Reclamation
    {
        return $this->idr;
    }

    public function setIdr(?Reclamation $idr): static
    {
        $this->idr = $idr;

        return $this;
    }


}
