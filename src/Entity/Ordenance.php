<?php

namespace App\Entity;

use App\Repository\OrdenanceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrdenanceRepository::class)]
class Ordenance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(length: 255)]
    private ?string $name_profSante = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse = null;

    #[ORM\OneToMany(mappedBy: 'ordenance', targetEntity: Medicaments::class)]
    private Collection $medicaments;

    #[ORM\ManyToOne(inversedBy: 'ordenances')]
    #[ORM\JoinColumn(nullable: false)]
    private ?ProfessionnelSante $profSante = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $patient = null;

    #[ORM\ManyToOne(inversedBy: 'ordenances')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $patient_user = null;

    public function __construct()
    {
        $this->medicaments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getNameProfSante(): ?string
    {
        return $this->name_profSante;
    }

    public function setNameProfSante(string $name_profSante): self
    {
        $this->name_profSante = $name_profSante;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * @return Collection<int, Medicaments>
     */
    public function getMedicaments(): Collection
    {
        return $this->medicaments;
    }

    public function addMedicament(Medicaments $medicament): self
    {
        if (!$this->medicaments->contains($medicament)) {
            $this->medicaments->add($medicament);
            $medicament->setOrdenance($this);
        }

        return $this;
    }

    public function removeMedicament(Medicaments $medicament): self
    {
        if ($this->medicaments->removeElement($medicament)) {
            // set the owning side to null (unless already changed)
            if ($medicament->getOrdenance() === $this) {
                $medicament->setOrdenance(null);
            }
        }

        return $this;
    }

    public function getProfSante(): ?ProfessionnelSante
    {
        return $this->profSante;
    }

    public function setProfSante(?ProfessionnelSante $profSante): self
    {
        $this->profSante = $profSante;

        return $this;
    }

    public function getPatient(): ?User
    {
        return $this->patient;
    }

    public function setPatient(?User $patient): self
    {
        $this->patient = $patient;

        return $this;
    }

    public function getPatientUser(): ?User
    {
        return $this->patient_user;
    }

    public function setPatientUser(?User $patient_user): self
    {
        $this->patient_user = $patient_user;

        return $this;
    }
}
