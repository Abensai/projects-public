<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\NewsRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *  attributes={
 *     "order"={"release_date":"DESC"}
 *  },
 *  paginationItemsPerPage=5,
 *  normalizationContext={"groups" = {"read:news"}},
 *  collectionOperations={"get"},
 *  itemOperations={
 *     "get"={
 *          "normalization_context"={"groups" = {"read:news", "read:full:news"}
 *          }
 *     }
 *  }
 * )
 * @ORM\Entity(repositoryClass=NewsRepository::class)
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * @Groups({"read:news"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"read:news"})
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     * @Groups({"read:full:news"})
     */
    private $description;

    /**
     * @ORM\Column(type="datetime")
     * @Groups({"read:full:news"})
     */
    private $release_date;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->release_date;
    }

    public function setReleaseDate(\DateTimeInterface $release_date): self
    {
        $this->release_date = $release_date;

        return $this;
    }
}
