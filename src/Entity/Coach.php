<?php

namespace App\Entity;

use App\Repository\CoachRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoachRepository::class)]
class Coach extends User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 8)]
    private ?string $CIN = null;

    #[ORM\Column(nullable: true)]
    private ?int $note = null;



   

    public function __construct()
    {
        parent::__construct();
        $this->evennements = new ArrayCollection();
        $this->evenement = new ArrayCollection();
        $this->evenements = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNote(): ?int
    {
        return $this->note;
    }

    public function setNote(?int $note): self
    {
        $this->note = $note;

        return $this;
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
            $evennement->setCoach($this);
        }

        return $this;
    }

    public function removeEvennement(Evennement $evennement): self
    {
        if ($this->evennements->removeElement($evennement)) {
            // set the owning side to null (unless already changed)
            if ($evennement->getCoach() === $this) {
                $evennement->setCoach(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Evennement>
     */
    public function getEvenement(): Collection
    {
        return $this->evenement;
    }

    public function addEvenement(Evennement $evenement): self
    {
        if (!$this->evenement->contains($evenement)) {
            $this->evenement->add($evenement);
            $evenement->setCoach($this);
        }

        return $this;
    }

    public function removeEvenement(Evennement $evenement): self
    {
        if ($this->evenement->removeElement($evenement)) {
            // set the owning side to null (unless already changed)
            if ($evenement->getCoach() === $this) {
                $evenement->setCoach(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Evennement>
     */
    public function getEvenements(): Collection
    {
        return $this->evenements;
    }
}
