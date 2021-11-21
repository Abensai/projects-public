<?php

namespace App\Tests;

use App\Entity\News;
use DateTime;
use PHPUnit\Framework\TestCase;

class NewsUnitTest extends TestCase
{
    public function testIsTrue(): void
    {
        $news = new News();
        $datetime = new DateTime();

        $news->setTitle('Le titre de l\'actualité')
            ->setDescription('la description détaillée de l\'actualité')
            ->setReleaseDate($datetime);

        $this->assertTrue($news->getTitle() === 'Le titre de l\'actualité');
        $this->assertTrue($news->getDescription() === 'la description détaillée de l\'actualité');
        $this->assertTrue($news->getReleaseDate() === $datetime);
    }

    public function testIsFalse(): void
    {
        $news = new News();
        $datetime = new DateTime();

        $news->setTitle('Le titre de l\'actualité')
            ->setDescription('la description détaillée de l\'actualité')
            ->setReleaseDate($datetime);

        $this->assertFalse($news->getTitle() === 'false');
        $this->assertFalse($news->getDescription() === 'false');
        $this->assertFalse($news->getReleaseDate() === new DateTime());
    }

    public function testIsEmpty(): void
    {
        $news = new News();

        $this->assertEmpty($news->getTitle());
        $this->assertEmpty($news->getDescription());
        $this->assertEmpty($news->getReleaseDate());
    }
}
