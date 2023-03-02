<?php

namespace App\Entity;

use App\Repository\EventparticipationRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventparticipationRepository::class)]
class Eventparticipation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'reservation')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Evennement $evenement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEvenement(): ?Evennement
    {
        return $this->evenement;
    }

    public function setEvenement(?Evennement $evenement): self
    {
        $this->evenement = $evenement;

        return $this;
    }
}
