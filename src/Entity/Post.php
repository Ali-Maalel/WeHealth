<?php

namespace App\Entity;

use App\Repository\PostRepository;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: PostRepository::class)]
#[ORM\Index(name:'post', columns:["content","titre","auteur"],flags:["fulltext"])]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Groups("posts")]
    private ?int $id = null;

    
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("posts")]
     private ?\DateTimeInterface $created_at = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    #[Groups("posts")]
     private ?\DateTimeInterface $last_at = null;

    #[ORM\Column(length: 200)]
    #[Assert\NotBlank(message: "vous devez ecrire un texte!!!")]
    #[Groups("posts")]
    private ?string $content = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Vous devez donner un titre!!!")]
    #[Groups("posts")]
    private ?string $titre = null;

    #[ORM\Column(length: 50)]
    #[Groups("posts")]
    private ?string $auteur = null;

    #[ORM\Column(length: 100)]
    #[Groups("posts")]
    private ?string $liste_commentaire = null;

    #[ORM\Column]
    #[Groups("posts")]
    private int $like_count = 0;

    #[ORM\Column]
    #[Groups("posts")]
    private int $dislike_count = 0;
    
   
    #[ORM\ManyToOne(targetEntity: Topic::class, inversedBy: 'posts')]
    private Topic $topic;

    public function __construct()
    {
       $this->created_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLike_count(): ?int
    {
        return $this->like_count;
    }

    public function setLike_count(int $like): self
    {
        $this->like_count = $like;
        return $this;
    }

    public function getDislike_count(): ?int
    {
        return $this->dislike_count;
    }

    public function setDislike_count(int $dislike): self
    {
        $this->dislike_count = $dislike;
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

    public function getTitre(): ?string
    {
        return $this->titre;
    }
    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getTopic(): ?Topic
    {
        return $this->topic;
    }

    public function setTopic(?Topic $topic): self
    {
        $this->topic = $topic;

        return $this;
    }
    public function jsonSerialize(): array
    {
        return array(
            'id' => $this->id,
            'titre' => $this->titre_a,
            'content' => $this->content_a,
            'auteur' => $this->auteur_a,
            'liste_commentaire' => $this->liste_commentaire_a,
            'created_at' => $this->created_at_a->format("d-m-Y"),
            'last_at' => $this->last_at_a->format("d-m-Y"),
            'topic' => $this->topic_a,
        );
    }

    public function constructor($titre, $content, $auteur, $liste_commentaire, $created_at, $last_at,  $topic)
    {
        
        $this->topic_a = new ArrayCollection();
        
        $this->titre_a = $titre;
        $this->content_a = $content;
        $this->auteur_a = $auteur;
        $this->liste_commentaire_a = $liste_commentaire;
        $this->created_at_a = $created_at;
        $this->last_at_a = $last_at;
        $this->topic_a = $topic;
    }
}
