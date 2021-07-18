<?php

declare(strict_types=1);

namespace App\Service;

use App\Entity\Hero;
use App\Entity\Level;
use App\Repository\HeroRepository;
use App\Repository\LevelRepository;
use Doctrine\ORM\EntityManagerInterface;

class ExperienceService
{
    private const MIN_LEVEL = 1;
    private const MAX_LEVEL = 30;
    private const FIRST_LEVEL_UP_EXP = 100;
    private bool $firstLevelCheck = true;

    public function __construct(
        private LevelRepository $levelRepository,
        private EntityManagerInterface $em,
    ) {
    }

    public function write(): void
    {
        $exp = self::FIRST_LEVEL_UP_EXP;

        for ($i = self::MIN_LEVEL; $i <= self::MAX_LEVEL; $i++) {
            $level = $this->levelRepository->findOneBy(['level' => $i]) ?? new Level();
            $exp = $this->getExpLevel($exp);

            $level
                ->setLevel($i)
                ->setExp($exp)
                ->setStat($this->getStatLevel($i))
            ;

            $this->em->persist($level);
        }

        $this->em->flush();

        $arr = ($this->levelRepository->findAll());
        $a = 0;
        foreach ($arr as $value){
            $a += $value->getStat();
        }
        print_r($a);
    }

    private function getExpLevel(int $exp): int
    {
        if ($exp == 100 && $this->firstLevelCheck === false) {
            $this->firstLevelCheck = false;
            return 100;
        } else {
            $exp += (50 * $exp / 100);
            return (int) $exp;
        }
    }

    private function getStatLevel($level): int
    {
        return match (true) {
            $level == 1 => 4,
            $level >= 2 && $level <= 4 => 2,
            $level >= 5 && $level <= 12 => 3,
            $level >= 13 && $level <= 19 => 4,
            $level >= 20 && $level <= 27 => 5,
            $level >= 28 && $level <= 30  => 6,
            default => 0,
        };
    }
}