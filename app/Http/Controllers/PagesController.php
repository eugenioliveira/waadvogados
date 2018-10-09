<?php

namespace App\Http\Controllers;

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
}
