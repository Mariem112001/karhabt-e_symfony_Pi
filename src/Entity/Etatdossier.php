<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etatdossier
 *
 * @ORM\Table(name="etatdossier", uniqueConstraints={@ORM\UniqueConstraint(name="id_etat", columns={"id_etat"})}, indexes={@ORM\Index(name="fk_etatdossier_dossierb", columns={"id_dossier"})})
 * @ORM\Entity
 */
class Etatdossier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_etat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtat;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_dossier", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $idDossier = NULL;

    public function getIdEtat(): ?int
    {
        return $this->idEtat;
    }

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getIdDossier(): ?int
    {
        return $this->idDossier;
    }

    public function setIdDossier(?int $idDossier): static
    {
        $this->idDossier = $idDossier;

        return $this;
    }


}
