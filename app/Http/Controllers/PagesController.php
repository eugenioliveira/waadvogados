<?php

namespace App\Http\Controllers;

use App\NewsFeeds;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Exibe a página inicial do site.
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Exibe a página com informações institucionais.
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Exibe a página com informações sobre as áreas de atuação.
     *
     * @return \Illuminate\View\View
     */
    public function areas()
    {
        return view('areas');
    }

    /**
     * Exibe a página com informações sobre os profissionais atuantes.
     *
     * @return \Illuminate\View\View
     */
    public function ourpeople()
    {
        return view('ourpeople');
    }

    /**
     * Exibe a página com notícias dos tribunais.
     *
     * @return \Illuminate\View\View
     */
    public function news()
    {
        return view('news');
    }
}
