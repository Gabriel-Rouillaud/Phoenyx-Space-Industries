<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CardRepository::class)
 */
class Card
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="own")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity=Destination::class, inversedBy="make_card")
     */
    private $make;

    /**
     * @ORM\OneToMany(targetEntity=ticket::class, mappedBy="card")
     */
    private $make_ticket;

    public function __construct()
    {
        $this->make_ticket = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

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

    public function getMake(): ?Destination
    {
        return $this->make;
    }

    public function setMake(?Destination $make): self
    {
        $this->make = $make;

        return $this;
    }

    /**
     * @return Collection|ticket[]
     */
    public function getMakeTicket(): Collection
    {
        return $this->make_ticket;
    }

    public function addMakeTicket(ticket $makeTicket): self
    {
        if (!$this->make_ticket->contains($makeTicket)) {
            $this->make_ticket[] = $makeTicket;
            $makeTicket->setCard($this);
        }

        return $this;
    }

    public function removeMakeTicket(ticket $makeTicket): self
    {
        if ($this->make_ticket->removeElement($makeTicket)) {
            // set the owning side to null (unless already changed)
            if ($makeTicket->getCard() === $this) {
                $makeTicket->setCard(null);
            }
        }

        return $this;
    }
}
