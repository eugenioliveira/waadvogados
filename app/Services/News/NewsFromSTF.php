<?php


namespace App\Services\News;


class NewsFromSTF extends News
{
    public function __construct($newsCount)
    {
        $this->setNewsCount($newsCount);
        $this->setFeedUrl('http://www.stf.jus.br/portal/RSS/noticiaRss.asp?codigo=1');
    }

    public function getNews()
    {
        return $this->getNewsFromFeed();
    }
}