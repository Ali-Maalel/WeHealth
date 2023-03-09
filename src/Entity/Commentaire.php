<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use DateTime;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\DBAL\Types\Types;



#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?int $id_parent = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
     private ?\Datetimeinterface $created_at = null;

     #[ORM\Column(type: Types::DATETIME_MUTABLE)]
     private ?\Datetimeinterface $update_at = null;

    #[ORM\Column(length: 200)]
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



    public function getCreatedAT(): ?\DateTimeInterface
    {
        return $this->created_at;
    }
    public function getCreated_at(): ?\DateTimeInterface
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
    public function getUpdate_at(): ?\DateTimeInterface
    {
        return $this->created_at;
    }
    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

}
