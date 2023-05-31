<?php

namespace App\Entity;

use App\Repository\SectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SectionRepository::class)]
class Section
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\OneToMany(mappedBy: 'section', targetEntity: Task::class)]
    private Collection $section_id;

    public function __construct()
    {
        $this->section_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return Collection<int, Task>
     */
    public function getSectionId(): Collection
    {
        return $this->section_id;
    }

    public function addSectionId(Task $sectionId): self
    {
        if (!$this->section_id->contains($sectionId)) {
            $this->section_id->add($sectionId);
            $sectionId->setSection($this);
        }

        return $this;
    }

    public function removeSectionId(Task $sectionId): self
    {
        if ($this->section_id->removeElement($sectionId)) {
            // set the owning side to null (unless already changed)
            if ($sectionId->getSection() === $this) {
                $sectionId->setSection(null);
            }
        }

        return $this;
    }
}
