<?php

namespace App\Entity;

use App\Repository\SpecialityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SpecialityRepository::class)
 */
class Speciality
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Agent::class, inversedBy="specialities")
     */
    private $agent;

    /**
     * @ORM\OneToMany(targetEntity=Mission::class, mappedBy="speciality", orphanRemoval=true)
     */
    private $Mission;

    public function __construct()
    {
        $this->agent = new ArrayCollection();
        $this->Mission = new ArrayCollection();
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

    /**
     * @return Collection|Agent[]
     */
    public function getAgent(): Collection
    {
        return $this->agent;
    }

    public function addAgent(Agent $agent): self
    {
        if (!$this->agent->contains($agent)) {
            $this->agent[] = $agent;
        }

        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        $this->agent->removeElement($agent);

        return $this;
    }

    /**
     * @return Collection|Mission[]
     */
    public function getMission(): Collection
    {
        return $this->Mission;
    }

    public function addMission(Mission $mission): self
    {
        if (!$this->Mission->contains($mission)) {
            $this->Mission[] = $mission;
            $mission->setSpeciality($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->Mission->removeElement($mission)) {
            // set the owning side to null (unless already changed)
            if ($mission->getSpeciality() === $this) {
                $mission->setSpeciality(null);
            }
        }

        return $this;
    }
}
