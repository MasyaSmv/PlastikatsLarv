<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class liblaryController extends Controller
{
    public function liblarys()
    {
        // $liblarys = new liblary();
        return view('liblary.liblarys');
    }

    public function liblary($id)
    {
        return view('liblary.liblary');
    }
}
