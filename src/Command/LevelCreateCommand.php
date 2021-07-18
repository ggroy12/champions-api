<?php

namespace App\Command;

use App\Service\ExperienceService;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:exp:level',
    description: 'Rewrite level table',
)]
class LevelCreateCommand extends Command
{
    public function __construct(
        private ExperienceService $experienceService,
        string $name = null
    ) {
        parent::__construct($name);
    }

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $this->experienceService->write();
        $io->success('Experience level was rewrite!');

        return Command::SUCCESS;
    }
}