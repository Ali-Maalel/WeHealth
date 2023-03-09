<?php

namespace App\Entity;

use App\Repository\SponsorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SponsorRepository::class)]
class Sponsor
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToMany(mappedBy: 'sponsor', targetEntity: Evennement::class)]
    private Collection $evennements;

    public function __construct()
    {
        $this->evennements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Evennement>
     */
    public function getEvennements(): Collection
    {
        return $this->evennements;
    }

    public function addEvennement(Evennement $evennement): self
    {
        if (!$this->evennements->contains($evennement)) {
            $this->evennements->add($evennement);
            $evennement->setSponsor($this);
        }

        return $this;
    }

    public function removeEvennement(Evennement $evennement): self
    {
        if ($this->evennements->removeElement($evennement)) {
            // set the owning side to null (unless already changed)
            if ($evennement->getSponsor() === $this) {
                $evennement->setSponsor(null);
            }
        }

        return $this;
    }
}
