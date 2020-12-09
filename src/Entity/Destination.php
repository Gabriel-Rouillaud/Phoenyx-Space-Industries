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
     * @ORM\Column(type="float")
     */
    private $price;

    /**
     * @ORM\Column(type="time")
     */
    private $time_to;

    /**
     * @ORM\Column(type="integer")
     */
    private $bought_number;

    /**
     * @ORM\OneToMany(targetEntity=card::class, mappedBy="make")
     */
    private $make_card;

    public function __construct()
    {
        $this->make_card = new ArrayCollection();
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

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTimeTo(): ?\DateTimeInterface
    {
        return $this->time_to;
    }

    public function setTimeTo(\DateTimeInterface $time_to): self
    {
        $this->time_to = $time_to;

        return $this;
    }

    public function getBoughtNumber(): ?int
    {
        return $this->bought_number;
    }

    public function setBoughtNumber(int $bought_number): self
    {
        $this->bought_number = $bought_number;

        return $this;
    }

    /**
     * @return Collection|card[]
     */
    public function getMakeCard(): Collection
    {
        return $this->make_card;
    }

    public function addMakeCard(card $makeCard): self
    {
        if (!$this->make_card->contains($makeCard)) {
            $this->make_card[] = $makeCard;
            $makeCard->setMake($this);
        }

        return $this;
    }

    public function removeMakeCard(card $makeCard): self
    {
        if ($this->make_card->removeElement($makeCard)) {
            // set the owning side to null (unless already changed)
            if ($makeCard->getMake() === $this) {
                $makeCard->setMake(null);
            }
        }

        return $this;
    }
}
