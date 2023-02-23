<?php

namespace App\Entity;

use App\Repository\TypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TypeRepository::class)]
class Type
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\OneToMany(mappedBy: 'type', targetEntity: video::class)]
    private Collection $videos;

    public function __construct()
    {
        $this->videos = new ArrayCollection();
    }
    public function __toString() {
        return $this->type;
    }
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

    /**
     * @return Collection<int, video>
     */
    public function getVideos(): Collection
    {
        return $this->videos;
    }

    public function addVideo(video $video): self
    {
        if (!$this->videos->contains($video)) {
            $this->videos->add($video);
            $video->setType($this);
        }

        return $this;
    }

    public function removeVideo(video $video): self
    {
        if ($this->videos->removeElement($video)) {
            // set the owning side to null (unless already changed)
            if ($video->getType() === $this) {
                $video->setType(null);
            }
        }

        return $this;
    }
}
