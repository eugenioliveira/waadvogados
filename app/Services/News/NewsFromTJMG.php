<?php


namespace App\Services\News;


class NewsFromTJMG extends News
{
    public function __construct($newsCount)
    {
        $this->setNewsCount($newsCount);
        $this->setFeedUrl('http://www.tjmg.jus.br/data/rss/noticiasTJMG.xml');
    }

    public function getNews()
    {
        return $this->getNewsFromFeed();
    }
}