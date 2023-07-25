<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\LocalisationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LocalisationRepository::class)]
#[ApiResource]
class Localisation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $geolocalization = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $createdAt = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;

    #[ORM\OneToMany(mappedBy: 'futs', targetEntity: Futs::class)]
    private Collection $onetoone;

    public function __construct()
    {
        $this->onetoone = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getGeolocalization(): ?string
    {
        return $this->geolocalization;
    }

    public function setGeolocalization(?string $geolocalization): static
    {
        $this->geolocalization = $geolocalization;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): static
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * @return Collection<int, Futs>
     */
    public function getOnetoone(): Collection
    {
        return $this->onetoone;
    }

    public function addOnetoone(Futs $onetoone): static
    {
        if (!$this->onetoone->contains($onetoone)) {
            $this->onetoone->add($onetoone);
            $onetoone->setFuts($this);
        }

        return $this;
    }

    public function removeOnetoone(Futs $onetoone): static
    {
        if ($this->onetoone->removeElement($onetoone)) {
            // set the owning side to null (unless already changed)
            if ($onetoone->getFuts() === $this) {
                $onetoone->setFuts(null);
            }
        }

        return $this;
    }
}
