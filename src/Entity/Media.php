<?php

namespace App\Entity;

use App\Repository\MediaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MediaRepository::class)
 */
class Media
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titulo;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $sobre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mediaFileName;

    /**
     * @ORM\Column(type="datetime")
     */
    private $postDate;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getSobre(): ?string
    {
        return $this->sobre;
    }

    public function setSobre(?string $sobre): self
    {
        $this->sobre = $sobre;

        return $this;
    }

    public function getMediaFileName(): ?string
    {
        return $this->mediaFileName;
    }

    public function setMediaFileName(string $mediaFileName): self
    {
        $this->mediaFileName = $mediaFileName;

        return $this;
    }

    public function getPostDate(): ?\DateTimeInterface
    {
        return $this->postDate;
    }

    public function setPostDate(\DateTimeInterface $postDate): self
    {
        $this->postDate = $postDate;

        return $this;
    }
}
