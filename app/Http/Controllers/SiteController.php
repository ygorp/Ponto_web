<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Função para exibir a página inicial
     *
     * @return View
     */
    public function home(): View
    {
        return view('home');
    }
}
