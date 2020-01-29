<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventRepository")
 */
class Event
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="text")
     */
    private $photo;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="date")
     */
    private $firstDay;

    /**
     * @ORM\Column(type="date")
     */
    private $lastDay;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Performer", mappedBy="events")
     */
    private $performers;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Soiree", mappedBy="event")
     */
    private $soirees;

    public function __construct()
    {
        $this->performers = new ArrayCollection();
        $this->soirees = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): self
    {
        $this->photo = $photo;

        return $this;
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

    public function getFirstDay(): ?\DateTimeInterface
    {
        return $this->firstDay;
    }

    public function setFirstDay(\DateTimeInterface $firstDay): self
    {
        $this->firstDay = $firstDay;

        return $this;
    }

    public function getLastDay(): ?\DateTimeInterface
    {
        return $this->lastDay;
    }

    public function setLastDay(\DateTimeInterface $lastDay): self
    {
        $this->lastDay = $lastDay;

        return $this;
    }

    /**
     * @return Collection|Performer[]
     */
    public function getPerformers(): Collection
    {
        return $this->performers;
    }

    public function addPerformer(Performer $performer): self
    {
        if (!$this->performers->contains($performer)) {
            $this->performers[] = $performer;
            $performer->addEvent($this);
        }

        return $this;
    }

    public function removePerformer(Performer $performer): self
    {
        if ($this->performers->contains($performer)) {
            $this->performers->removeElement($performer);
            $performer->removeEvent($this);
        }

        return $this;
    }

    /**
     * @return Collection|Soiree[]
     */
    public function getShows(): Collection
    {
        return $this->soirees;
    }

    public function addShow(Soiree $soiree): self
    {
        if (!$this->soirees->contains($soiree)) {
            $this->soirees[] = $soiree;
            $soiree->setEvent($this);
        }

        return $this;
    }

    public function removeShow(Soiree $soiree): self
    {
        if ($this->soirees->contains($soiree)) {
            $this->soirees->removeElement($soiree);
            // set the owning side to null (unless already changed)
            if ($soiree->getEvent() === $this) {
                $soiree->setEvent(null);
            }
        }

        return $this;
    }
}
