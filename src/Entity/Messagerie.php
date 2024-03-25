<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Messagerie
 *
 * @ORM\Table(name="messagerie", indexes={@ORM\Index(name="fk_sender", columns={"Sender"}), @ORM\Index(name="fl_receiver", columns={"Receiver"})})
 * @ORM\Entity
 */
class Messagerie
{
    /**
     * @var int
     *
     * @ORM\Column(name="idMessage", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmessage;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=255, nullable=false)
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEnvoie", type="date", nullable=false)
     */
    private $dateenvoie;

    /**
     * @var bool
     *
     * @ORM\Column(name="vu", type="boolean", nullable=false)
     */
    private $vu;

    /**
     * @var bool
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Sender", referencedColumnName="idU")
     * })
     */
    private $sender;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Receiver", referencedColumnName="idU")
     * })
     */
    private $receiver;

    public function getIdmessage(): ?int
    {
        return $this->idmessage;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getDateenvoie(): ?\DateTimeInterface
    {
        return $this->dateenvoie;
    }

    public function setDateenvoie(\DateTimeInterface $dateenvoie): static
    {
        $this->dateenvoie = $dateenvoie;

        return $this;
    }

    public function isVu(): ?bool
    {
        return $this->vu;
    }

    public function setVu(bool $vu): static
    {
        $this->vu = $vu;

        return $this;
    }

    public function isDeleted(): ?bool
    {
        return $this->deleted;
    }

    public function setDeleted(bool $deleted): static
    {
        $this->deleted = $deleted;

        return $this;
    }

    public function getSender(): ?User
    {
        return $this->sender;
    }

    public function setSender(?User $sender): static
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReceiver(): ?User
    {
        return $this->receiver;
    }

    public function setReceiver(?User $receiver): static
    {
        $this->receiver = $receiver;

        return $this;
    }


}
