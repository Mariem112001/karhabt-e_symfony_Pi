<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandedossier
 *
 * @ORM\Table(name="demandedossier", uniqueConstraints={@ORM\UniqueConstraint(name="id_demande", columns={"id_demande"})})
 * @ORM\Entity
 */
class Demandedossier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_demande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="urlcin", type="string", length=500, nullable=false)
     */
    private $urlcin;

    /**
     * @var string
     *
     * @ORM\Column(name="urlCerRetenu", type="string", length=500, nullable=false)
     */
    private $urlcerretenu;

    /**
     * @var string
     *
     * @ORM\Column(name="urlAttTravail", type="string", length=500, nullable=false)
     */
    private $urlatttravail;

    /**
     * @var string
     *
     * @ORM\Column(name="urlDecRevenu", type="string", length=500, nullable=false)
     */
    private $urldecrevenu;

    /**
     * @var string
     *
     * @ORM\Column(name="urlExtNaissance", type="string", length=500, nullable=false)
     */
    private $urlextnaissance;

    public function getIdDemande(): ?int
    {
        return $this->idDemande;
    }

    public function getUrlcin(): ?string
    {
        return $this->urlcin;
    }

    public function setUrlcin(string $urlcin): static
    {
        $this->urlcin = $urlcin;

        return $this;
    }

    public function getUrlcerretenu(): ?string
    {
        return $this->urlcerretenu;
    }

    public function setUrlcerretenu(string $urlcerretenu): static
    {
        $this->urlcerretenu = $urlcerretenu;

        return $this;
    }

    public function getUrlatttravail(): ?string
    {
        return $this->urlatttravail;
    }

    public function setUrlatttravail(string $urlatttravail): static
    {
        $this->urlatttravail = $urlatttravail;

        return $this;
    }

    public function getUrldecrevenu(): ?string
    {
        return $this->urldecrevenu;
    }

    public function setUrldecrevenu(string $urldecrevenu): static
    {
        $this->urldecrevenu = $urldecrevenu;

        return $this;
    }

    public function getUrlextnaissance(): ?string
    {
        return $this->urlextnaissance;
    }

    public function setUrlextnaissance(string $urlextnaissance): static
    {
        $this->urlextnaissance = $urlextnaissance;

        return $this;
    }


}
