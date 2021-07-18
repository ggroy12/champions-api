<?php

namespace App\Entity;

use App\Repository\LevelRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LevelRepository::class)
 */
class Level
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $exp;

    /**
     * @ORM\Column(type="integer")
     */
    private $stat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): self
    {
        $this->level = $level;

        return $this;
    }

    public function getExp(): ?int
    {
        return $this->exp;
    }

    public function setExp(?int $exp): self
    {
        $this->exp = $exp;

        return $this;
    }

    public function getStat(): ?int
    {
        return $this->stat;
    }

    public function setStat(int $stat): self
    {
        $this->stat = $stat;

        return $this;
    }
}
