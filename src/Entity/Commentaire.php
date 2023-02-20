<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?int $id_parent = null;

    #[ORM\Column(length: 20)]
     private ?datetime $created_at = null;

    #[ORM\Column(length: 20)]
     private ?datetime $update_at = null;

     #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "vous devez ecrire un texte!!!")]
    private ?string $content = null;

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getIdParent(): ?string
    {
        return $this->id_parent;
    }
    public function setIdParent(string $id_parent): self
    {
        $this->id_parent = $id_parent;

        return $this;
    }



    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }
    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }
    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }
}
