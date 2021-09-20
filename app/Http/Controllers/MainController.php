<?php

namespace App\Http\Controllers;

use App\gost;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // Методы для вставки шаблонов (файлы)
    public function home()
    {
        return view('home');
    }

    public function gost()
    {
        $gosts = new gost();
        return view('gost', ['gosts' => $gosts->paginate(6)]);
    }
}
