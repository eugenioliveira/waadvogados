<?php


namespace App\Services\News;


class NewsFromSTJ extends News
{
    public function __construct($newsCount)
    {
        $this->setNewsCount($newsCount);
        $this->setFeedUrl('http://feeds.feedburner.com/STJNoticias');
    }

    public function getNews()
    {
        return $this->getNewsFromFeed();
    }
}