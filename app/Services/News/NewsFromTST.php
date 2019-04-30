<?php


namespace App\Services\News;


class NewsFromTST extends News
{
    public function __construct($newsCount)
    {
        $this->setNewsCount($newsCount);
        $this->setFeedUrl('http://www.tst.jus.br/web/guest/noticias/-/asset_publisher/89Dk/rss?p_p_cacheability=cacheLevelFull');
    }

    public function getNews()
    {
        return $this->getNewsFromFeed();
    }
}