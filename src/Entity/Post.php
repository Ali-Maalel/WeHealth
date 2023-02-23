<?php

namespace App\Entity;

use App\Repository\PostRepository;
use DateTime;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
  
    
    #[ORM\Column(length: 20)]
     private ?datetime $created_at = null;

    #[ORM\Column(length: 20)]
     private ?datetime $last_at = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "vous devez ecrire un texte!!!")]
    private ?string $content = null;

    #[ORM\Column(length: 50)]
    private ?string $auteur = null;

    #[ORM\Column(length: 100)]
    private ?string $liste_commentaire = null;



    public function getId(): ?int
    {
        return $this->id;
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
    public function getLastAt(): ?\DateTimeInterface
    {
        return $this->last_at;
    }
    public function setLastAt(\DateTimeInterface $last_at): self
    {
        $this->last_at = $last_at;

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

    public function getAuteur(): ?string
    {
        return $this->auteur;
    }
    public function setAuteur(string $auteur): self
    {
        $this->auteur = $auteur;

        return $this;
    }
    public function getListeCommentaire(): ?string
    {
        return $this->liste_commentaire;
    }
    public function setListeCommentaire(string $liste_commentaire): self
    {
        $this->liste_commentaire = $liste_commentaire;

        return $this;
    }

}
