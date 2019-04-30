<?php

namespace App\Http\Controllers;


use App\Services\News\NewsFactory;

/**
 * Class NewsController
 * @package App\Http\Controllers
 *
 * Fornece a funcionalidade de exibição de notícias de feeds RSS previamente cadastrados.
 */
class NewsController extends Controller
{

    /**
     * @param $provider
     * @param $count
     * @return mixed
     * @throws \Exception caso não exista o provider
     */
    public function index($provider, $count)
    {
        return NewsFactory::makeNews($provider, $count)->getNews();
    }

}
