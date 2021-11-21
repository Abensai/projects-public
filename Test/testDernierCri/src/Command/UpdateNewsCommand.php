<?php

namespace App\Command;

use App\Service\NewsService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class UpdateNewsCommand extends Command
{

    /**
     * @var NewsService
     */
    private $newsService;
    protected static $defaultName = 'app:update-news';

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
        parent::__construct();
    }

    protected function configure() {
        $this->setDescription('Update News')
        ->addArgument('markup', inputArgument::OPTIONAL, 'percentage markup', 20)
        ->addArgument('process_date', inputArgument::OPTIONAL, 'Date of the process', date_create()->format('Y-m-d'));
    }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $this->newsService->persistNews();

    return Command::SUCCESS;
  }
}