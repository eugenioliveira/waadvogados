<?php


namespace App\Services\News;


abstract class News
{
    /**
     * A(s) url(s) dos feeds a serem obtidos.
     *
     * @var string
     */
    public $feedUrl;

    /**
     * @var int
     */
    public $newsCount;

    /**
     * @return string
     */
    public function getFeedUrl(): string
    {
        return $this->feedUrl;
    }

    /**
     * @param $feedUrl
     */
    public function setFeedUrl(string $feedUrl): void
    {
        $this->feedUrl = $feedUrl;
    }

    /**
     * @return int
     */
    public function getNewsCount(): int
    {
        return $this->newsCount;
    }

    /**
     * @param int $newsCount
     */
    public function setNewsCount(int $newsCount): void
    {
        $this->newsCount = $newsCount;
    }

    public function getNewsFromFeed()
    {
        $items = [];

        $feedItems = \Feeds::make($this->getFeedUrl())->get_items();
        foreach ($feedItems as $item) {
            $items[] = [
                'date' => $item->get_date('d/m/Y'),
                'title' => $item->get_title(),
                'url' => $item->get_link()
            ];
        }

        return array_slice($items, 0, $this->getNewsCount());
    }
}