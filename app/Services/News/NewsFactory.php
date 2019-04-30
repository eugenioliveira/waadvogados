<?php


namespace App\Services\News;


/**
 * Classe responsável por criar as classes de cada provedor cadastrado.
 *
 * Class NewsFactory
 * @package App\Services\News
 */
class NewsFactory
{
    public static function makeNews(string $provider, int $count)
    {
        $newsProvider = 'App\\Services\\News\\NewsFrom' . strtoupper($provider);

        if (class_exists($newsProvider)) {
            return new $newsProvider($count);
        } else {
            throw new \Exception("Este provedor de notícias não existe.");
        }
    }
}