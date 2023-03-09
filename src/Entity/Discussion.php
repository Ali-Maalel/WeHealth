<?php

namespace App\Entity;

use App\Repository\DisctionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: DisctionRepository::class)]
class Disction
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 255)]
    private ?string $sujet = null;

    #[ORM\Column(length: 255)]
    private ?string $date_postulation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getSujet(): ?string
    {
        return $this->sujet;
    }

    public function setSujet(string $sujet): self
    {
        $this->sujet = $sujet;

        return $this;
    }

    public function getDatePostulation(): ?string
    {
        return $this->date_postulation;
    }

    public function setDatePostulation(string $date_postulation): self
    {
        $this->date_postulation = $date_postulation;

        return $this;
    }
}
