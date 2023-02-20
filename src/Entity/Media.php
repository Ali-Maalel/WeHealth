<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MediaRepository::class)]
class Media
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "vous devez saisir un type!!!")]
    private ?string $type = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "vous devez saisir votre nom!!!")]
    private ?string $name = null;

    #[ORM\Column(length: 100)]
    private ?int $size = null;


    public function getId(): ?int
    {
        return $this->id;
    }
    public function getType(): ?string
    {
        return $this->type;
    }
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }
    public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**hjnbadjkafbd */

}
