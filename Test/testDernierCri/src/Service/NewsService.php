<?php

namespace App\Service;

use App\Entity\News;
use App\Repository\NewsRepository;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;

class NewsService
{
    private $entityManager;
    private $newsRepository;

    public function __construct(EntityManagerInterface $entityManager, newsRepository $newsRepository)
    {
        $this->entityManager = $entityManager;
        $this->newsRepository = $newsRepository;
    }

    public function persistNews(): void
    {
        $newsRssLink = 'https://www.lemonde.fr/pixels/rss_full.xml';
        $newsRssLoad = simplexml_load_file($newsRssLink);

        self::setNews($newsRssLoad->channel);

        foreach ($newsRssLoad->channel->item as $item) {
            self::setNews($item);
        }
    }

    public function setNews($path){
        $news = $this->entityManager->getRepository(News::class)->findOneBy([
            'title' => $path->title
        ]);

        if(is_null($news)) {
            $news = new News();
            $news->setTitle($path->title);
            $news->setDescription($path->description);
            $news->setReleaseDate((new DateTime($path->pubDate)));
            $this->entityManager->persist($news);
            $this->entityManager->flush();
            unset($news);
        }
    }
}
