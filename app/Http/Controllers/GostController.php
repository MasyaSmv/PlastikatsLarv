<?php

namespace App\Http\Controllers;

use App\gost;
use Illuminate\Http\Request;

class GostController extends Controller
{
    public function gost()
    {
        $gosts = gost::get();
        return view('gost.gost', compact('gosts'));
    }

    public function gostes()
    {
        $gosts = gost::get();
        return view('gost.gostes', compact('gosts'));
    }
}
