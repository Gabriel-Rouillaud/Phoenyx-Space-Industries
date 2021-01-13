<?php

namespace App\Entity;

use App\Repository\DestinationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DestinationRepository::class)
 */
class Destination
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\Column(type="time", nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img;

    /**
     * @ORM\ManyToMany(targetEntity=Departure::class, inversedBy="destinations")
     */
    private $departure;

    /**
     * @ORM\ManyToMany(targetEntity=Arrival::class, inversedBy="destinations")
     */
    private $arrival;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bought_number;

    /**
     * @ORM\OneToOne(targetEntity=Card::class, cascade={"persist", "remove"})
     */
    private $card;

    public function __construct()
    {
        $this->departure = new ArrayCollection();
        $this->arrival = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDuration(): ?\DateTimeInterface
    {
        return $this->duration;
    }

    public function setDuration(?\DateTimeInterface $duration): self
    {
        $this->duration = $duration;

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

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    /**
     * @return Collection|Departure[]
     */
    public function getDeparture(): Collection
    {
        return $this->departure;
    }

    public function addDeparture(Departure $departure): self
    {
        if (!$this->departure->contains($departure)) {
            $this->departure[] = $departure;
        }

        return $this;
    }

    public function removeDeparture(Departure $departure): self
    {
        $this->departure->removeElement($departure);

        return $this;
    }

    /**
     * @return Collection|Arrival[]
     */
    public function getArrival(): Collection
    {
        return $this->arrival;
    }

    public function addArrival(Arrival $arrival): self
    {
        if (!$this->arrival->contains($arrival)) {
            $this->arrival[] = $arrival;
        }

        return $this;
    }

    public function removeArrival(Arrival $arrival): self
    {
        $this->arrival->removeElement($arrival);

        return $this;
    }

    public function getBoughtNumber(): ?int
    {
        return $this->bought_number;
    }

    public function setBoughtNumber(?int $bought_number): self
    {
        $this->bought_number = $bought_number;

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
}
