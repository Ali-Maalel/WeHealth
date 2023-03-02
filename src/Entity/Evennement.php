<?php

namespace App\Entity;

use App\Repository\EvennementRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EvennementRepository::class)]
class Evennement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(length: 800)]
    private ?string $description = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;
    #[ORM\Column(length: 1500)]
    private ?string $consultationurl = null;

    #[ORM\OneToMany(mappedBy: 'evenement', targetEntity: Eventparticipation::class)]
    private Collection $reservation;

    public function __construct()
    {
        $this->reservation = new ArrayCollection();
    }

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getConsultationurl(): ?string
    {
        return $this->consultationurl;
    }

    public function setConsultationurl(string $consultationurl): self
    {
        $this->consultationurl = $consultationurl;

        return $this;
    }

    /**
     * @return Collection<int, Eventparticipation>
     */
    public function getReservation(): Collection
    {
        return $this->reservation;
    }

    public function addReservation(Eventparticipation $reservation): self
    {
        if (!$this->reservation->contains($reservation)) {
            $this->reservation->add($reservation);
            $reservation->setEvenement($this);
        }

        return $this;
    }

    public function removeReservation(Eventparticipation $reservation): self
    {
        if ($this->reservation->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getEvenement() === $this) {
                $reservation->setEvenement(null);
            }
        }

        return $this;
    }
}
