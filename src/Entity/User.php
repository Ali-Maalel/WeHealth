<?php

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;


#[ORM\Entity(repositoryClass: UserRepository::class)]


#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $iduser = null;

    #[ORM\Column(length: 30)]
    private ?string $login = null;

    #[ORM\Column(length: 32)]
    private ?string $password = null;

    #[ORM\Column(length: 30)]
    private ?string $nom = null;

    #[ORM\Column(length: 30)]
    private ?string $prenom = null;

    #[ORM\Column(length: 100)]
    private ?string $email = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $telephone = null;

    #[ORM\ManyToMany(targetEntity: Evennement::class, mappedBy: 'participants')]
    private Collection $evennements;

    #[ORM\ManyToMany(targetEntity: Notification::class, mappedBy: 'user')]
    private Collection $particiants;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Facture::class)]
    private Collection $factures;

    public function __construct()
    {
        $this->evennements = new ArrayCollection();
        $this->particiants = new ArrayCollection();
        $this->factures = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIduser(): ?int
    {
        return $this->iduser;
    }

    public function setIduser(int $iduser): self
    {
        $this->iduser = $iduser;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

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
    
    /**
     * *@return Collection<int, User>
     *
    *public function getUser(): Collection
    *{
    *    return $this->user;
    *}
    *public function adduser(User $users): self
    *{
    *    if (!$this->user->contains($users)) {
    *        $this->user->add($users);
    *        
    *    }
*
 *       return $this;
   * }*/

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
            $evennement->addParticipant($this);
        }

        return $this;
    }

    public function removeEvennement(Evennement $evennement): self
    {
        if ($this->evennements->removeElement($evennement)) {
            $evennement->removeParticipant($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Notification>
     */
    public function getParticiants(): Collection
    {
        return $this->particiants;
    }

    public function addParticiant(Notification $particiant): self
    {
        if (!$this->particiants->contains($particiant)) {
            $this->particiants->add($particiant);
            $particiant->addUser($this);
        }

        return $this;
    }

    public function removeParticiant(Notification $particiant): self
    {
        if ($this->particiants->removeElement($particiant)) {
            $particiant->removeUser($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Facture>
     */
    public function getFactures(): Collection
    {
        return $this->factures;
    }

    public function addFacture(Facture $facture): self
    {
        if (!$this->factures->contains($facture)) {
            $this->factures->add($facture);
            $facture->setUser($this);
        }

        return $this;
    }

    public function removeFacture(Facture $facture): self
    {
        if ($this->factures->removeElement($facture)) {
            // set the owning side to null (unless already changed)
            if ($facture->getUser() === $this) {
                $facture->setUser(null);
            }
        }

        return $this;
    }
}
