<?php

namespace App\Entity;

use App\Repository\TicketRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\Column(type="float", nullable=true)
     */
    private $total_price;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $date_command;

    /**
     * @ORM\ManyToOne(targetEntity=Card::class, inversedBy="make_ticket")
     */
    private $card;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="ticket")
     */
    private $send_to;

    public function __construct()
    {
        $this->send_to = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalPrice(): ?float
    {
        return $this->total_price;
    }

    public function setTotalPrice(?float $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }

    public function getDateCommand(): ?\DateTimeInterface
    {
        return $this->date_command;
    }

    public function setDateCommand(?\DateTimeInterface $date_command): self
    {
        $this->date_command = $date_command;

        return $this;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(?Card $card): self
    {
        $this->card = $card;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getSendTo(): Collection
    {
        return $this->send_to;
    }

    public function addSendTo(User $sendTo): self
    {
        if (!$this->send_to->contains($sendTo)) {
            $this->send_to[] = $sendTo;
            $sendTo->setTicket($this);
        }

        return $this;
    }

    public function removeSendTo(User $sendTo): self
    {
        if ($this->send_to->removeElement($sendTo)) {
            // set the owning side to null (unless already changed)
            if ($sendTo->getTicket() === $this) {
                $sendTo->setTicket(null);
            }
        }

        return $this;
    }
}
