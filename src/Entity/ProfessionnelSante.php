<?php

namespace App\Entity;

use App\Repository\ProfessionnelSanteRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProfessionnelSanteRepository::class)]
class ProfessionnelSante extends User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $matricule = null;

    #[ORM\Column(length: 8)]
    private ?string $CIN = null;

    #[ORM\OneToMany(mappedBy: 'profSante', targetEntity: Ordenance::class)]
    private Collection $ordenances;

    public function __construct()
    {
        $this->ordenances = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getCIN(): ?string
    {
        return $this->CIN;
    }

    public function setCIN(string $CIN): self
    {
        $this->CIN = $CIN;

        return $this;
    }

    /**
     * @return Collection<int, Ordenance>
     */
    public function getOrdenances(): Collection
    {
        return $this->ordenances;
    }

    public function addOrdenance(Ordenance $ordenance): self
    {
        if (!$this->ordenances->contains($ordenance)) {
            $this->ordenances->add($ordenance);
            $ordenance->setProfSante($this);
        }

        return $this;
    }

    public function removeOrdenance(Ordenance $ordenance): self
    {
        if ($this->ordenances->removeElement($ordenance)) {
            // set the owning side to null (unless already changed)
            if ($ordenance->getProfSante() === $this) {
                $ordenance->setProfSante(null);
            }
        }

        return $this;
    }
}
