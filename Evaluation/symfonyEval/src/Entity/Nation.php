<?php

namespace App\Entity;

use App\Repository\NationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NationRepository::class)
 */
class Nation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $nationality;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $langage;

    /**
     * @ORM\OneToMany(targetEntity=Hideout::class, mappedBy="nation", orphanRemoval=true)
     */
    private $hideout;

    /**
     * @ORM\OneToMany(targetEntity=Contact::class, mappedBy="nation", orphanRemoval=true)
     */
    private $contact;

    /**
     * @ORM\OneToMany(targetEntity=Agent::class, mappedBy="nation", orphanRemoval=true)
     */
    private $agent;

    /**
     * @ORM\OneToMany(targetEntity=Target::class, mappedBy="nation", orphanRemoval=true)
     */
    private $target;

    /**
     * @ORM\OneToMany(targetEntity=Mission::class, mappedBy="nation", orphanRemoval=true)
     */
    private $mission;

    public function __construct()
    {
        $this->contact = new ArrayCollection();
        $this->agent = new ArrayCollection();
        $this->target = new ArrayCollection();
        $this->mission = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getLangage(): ?string
    {
        return $this->langage;
    }

    public function setLangage(string $langage): self
    {
        $this->langage = $langage;

        return $this;
    }

    public function getHideout(): ?Hideout
    {
        return $this->hideout;
    }

    public function setHideout(?Hideout $hideout): self
    {
        $this->hideout = $hideout;

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContact(): Collection
    {
        return $this->contact;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contact->contains($contact)) {
            $this->contact[] = $contact;
            $contact->setNation($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contact->removeElement($contact)) {
            // set the owning side to null (unless already changed)
            if ($contact->getNation() === $this) {
                $contact->setNation(null);
            }
        }

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
            $agent->setNation($this);
        }

        return $this;
    }

    public function removeAgent(Agent $agent): self
    {
        if ($this->agent->removeElement($agent)) {
            // set the owning side to null (unless already changed)
            if ($agent->getNation() === $this) {
                $agent->setNation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Target[]
     */
    public function getTarget(): Collection
    {
        return $this->target;
    }

    public function addTarget(Target $target): self
    {
        if (!$this->target->contains($target)) {
            $this->target[] = $target;
            $target->setNation($this);
        }

        return $this;
    }

    public function removeTarget(Target $target): self
    {
        if ($this->target->removeElement($target)) {
            // set the owning side to null (unless already changed)
            if ($target->getNation() === $this) {
                $target->setNation(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Mission[]
     */
    public function getMission(): Collection
    {
        return $this->mission;
    }

    public function addMission(Mission $mission): self
    {
        if (!$this->mission->contains($mission)) {
            $this->mission[] = $mission;
            $mission->setNation($this);
        }

        return $this;
    }

    public function removeMission(Mission $mission): self
    {
        if ($this->mission->removeElement($mission)) {
            // set the owning side to null (unless already changed)
            if ($mission->getNation() === $this) {
                $mission->setNation(null);
            }
        }

        return $this;
    }
}
