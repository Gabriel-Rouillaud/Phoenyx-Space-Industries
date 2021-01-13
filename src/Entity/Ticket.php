<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TicketRepository::class)
 */
class Ticket
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $numberOrder;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\OneToOne(targetEntity=Card::class, mappedBy="ticket", cascade={"persist", "remove"})
     */
    private $card;

    /**
     * @ORM\OneToOne(targetEntity=User::class, inversedBy="ticket", cascade={"persist", "remove"})
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumberOrder(): ?string
    {
        return $this->numberOrder;
    }

    public function setNumberOrder(?string $numberOrder): self
    {
        $this->numberOrder = $numberOrder;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(?Card $card): self
    {
        $this->card = $card;

        // set (or unset) the owning side of the relation if necessary
        $newTicket = null === $card ? null : $this;
        if ($card->getTicket() !== $newTicket) {
            $card->setTicket($newTicket);
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
