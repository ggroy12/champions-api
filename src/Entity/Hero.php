<?php

namespace App\Entity;

use App\Repository\HeroRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=HeroRepository::class)
 */
class Hero
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
    private $inventory_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $equipment_it;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $user_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $stats_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $wound_id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $coins;

    /**
     * @ORM\Column(type="integer")
     */
    private $level;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $experience;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getInventoryId(): ?int
    {
        return $this->inventory_id;
    }

    public function setInventoryId(int $inventory_id): self
    {
        $this->inventory_id = $inventory_id;

        return $this;
    }

    public function getEquipmentIt(): ?int
    {
        return $this->equipment_it;
    }

    public function setEquipmentIt(int $equipment_it): self
    {
        $this->equipment_it = $equipment_it;

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

    public function getUserId(): ?int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getStatsId(): ?int
    {
        return $this->stats_id;
    }

    public function setStatsId(int $stats_id): self
    {
        $this->stats_id = $stats_id;

        return $this;
    }

    public function getWoundId(): ?int
    {
        return $this->wound_id;
    }

    public function setWoundId(int $wound_id): self
    {
        $this->wound_id = $wound_id;

        return $this;
    }

    public function getCoins(): ?int
    {
        return $this->coins;
    }

    public function setCoins(?int $coins): self
    {
        $this->coins = $coins;

        return $this;
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

    public function getExperience(): ?int
    {
        return $this->experience;
    }

    public function setExperience(?int $experience): self
    {
        $this->experience = $experience;

        return $this;
    }
}
