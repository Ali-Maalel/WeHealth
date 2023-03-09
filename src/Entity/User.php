<?php

namespace App\Entity;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\ArrayCollection;
use Doctrine\Common\Collections\Collection;



#[ORM\Entity(repositoryClass: UserRepository::class)]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50, unique: true)]
    #[ORM\OneToOne( mappedBy:'user')]
    #[Assert\NotBlank(message: "your username is important")]
    private ?string $Login = null;

    #[ORM\Column(length: 50)]
    private ?string $password = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "important")]
    private ?string $nom = null;

    #[ORM\Column(length: 30)]
    #[Assert\NotBlank(message: "important")]
    private ?string $prenom = null;

    #[ORM\Column(length: 70)]
    #[Assert\NotBlank(message: "important")]
    private ?string $email = null;

    #[ORM\Column(length: 8, nullable: true)]
    
    private ?string $telephone = null;


    #[ORM\Column(length: 20, nullable: true)]
    private ?string $typeuser = null;
    #[ORM\Column(type: 'boolean')]
    private $isVerified = false;
    #[ORM\Column]
    private ?bool $blocked = false;
    #[ORM\Column]
    private array $roles = [];

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Comment::class)]
    private Collection $comments;

    #[ORM\OneToMany(mappedBy: 'article', targetEntity: ArticleLike::class)]
    private Collection $user;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: ArticleLike::class)]
    private Collection $articleLikes;

    public function __construct()
    {
        $this->comments = new ArrayCollection();
        $this->user = new ArrayCollection();
        $this->articleLikes = new ArrayCollection();
       
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogin(): ?string
    {
        return $this->Login;
    }

    public function setLogin(string $login): self
    {
        $this->Login = $login;

        return $this;
    }

    

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getTypeuser(): ?string
    {
        return $this->typeuser;
    }

    public function setTypeuser(?string $typeuser): self
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    public function isBlocked(): ?bool
    {
        return $this->blocked;
    }

    public function setBlocked(bool $blocked): self
    {
        $this->blocked = $blocked;

        return $this;
    }
    /**
     * A visual identifier that represents this user.
     *

     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->Login;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;}

    public function getUser(): Collection
    {
        return $this->user;
    }
    public function adduser(User $users): self
    {
        if (!$this->user->contains($users)) {
            $this->user->add($users);
           
       }

        return $this;
    }

    /**
     * @return Collection<int, Comment>
     */
    public function getComments(): Collection
    {
        return $this->comments;
    }

    public function addComment(Comment $comment): self
    {
        if (!$this->comments->contains($comment)) {
            $this->comments->add($comment);
            $comment->setUser($this);
        }


        return $this;
    }


    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
    }

    public function removeComment(Comment $comment): self
    {
        if ($this->comments->removeElement($comment)) {
            // set the owning side to null (unless already changed)
            if ($comment->getUser() === $this) {
                $comment->setUser(null);
            }
        }

        return $this;
    }
    public function __toString(): string
    {
        return $this->getId(); 
    }

    /**
     * @return Collection<int, ArticleLike>
     */
    public function getArticleLikes(): Collection
    {
        return $this->articleLikes;
    }

    public function addArticleLike(ArticleLike $articleLike): self
    {
        if (!$this->articleLikes->contains($articleLike)) {
            $this->articleLikes->add($articleLike);
            $articleLike->setUser($this);
        }


        return $this;
    }


    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;

        return $this;
    }
    

    public function removeArticleLike(ArticleLike $articleLike): self
    {
        if ($this->articleLikes->removeElement($articleLike)) {
            // set the owning side to null (unless already changed)
            if ($articleLike->getUser() === $this) {
                $articleLike->setUser(null);
            }
        }

        return $this;
    }

  
   

   

}
