<?php

namespace App\Entity;

use App\Repository\MedicamentsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicamentsRepository::class)]
class Medicaments
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $mode_utilisation = null;

    #[ORM\Column(length: 255)]
    private ?string $type_medicaments = null;

    #[ORM\ManyToOne(inversedBy: 'medicaments')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Ordenance $ordenance = null;

    
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

    public function getModeUtilisation(): ?string
    {
        return $this->mode_utilisation;
    }

    public function setModeUtilisation(string $mode_utilisation): self
    {
        $this->mode_utilisation = $mode_utilisation;

        return $this;
    }

    public function getTypeMedicaments(): ?string
    {
        return $this->type_medicaments;
    }

    public function setTypeMedicaments(string $type_medicaments): self
    {
        $this->type_medicaments = $type_medicaments;

        return $this;
    }

    public function getOrdenance(): ?Ordenance
    {
        return $this->ordenance;
    }

    public function setOrdenance(?Ordenance $ordenance): self
    {
        $this->ordenance = $ordenance;

        return $this;
    }

    
}
