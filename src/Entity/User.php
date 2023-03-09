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

    #[ORM\OneToMany(mappedBy: 'patient_user', targetEntity: Ordenance::class)]
    private Collection $ordenances;

    public function __construct()
    {
        $this->ordenances = new ArrayCollection();
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
     * @return Collection<int, Ordenance>
     */
    public function getOrdenances(): Collection
    {
        return $this->ordenances;
    }

    public function addOrdenance(Ordenance $ordenance): self
    {
        if (!$this->ordenances->contains($ordenance)) {
            $this->ordenances->add($ordenance);
            $ordenance->setPatientUser($this);
        }

        return $this;
    }

    public function removeOrdenance(Ordenance $ordenance): self
    {
        if ($this->ordenances->removeElement($ordenance)) {
            // set the owning side to null (unless already changed)
            if ($ordenance->getPatientUser() === $this) {
                $ordenance->setPatientUser(null);
            }
        }

        return $this;
    }
}
